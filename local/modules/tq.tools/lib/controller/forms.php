<?php
/**
 * Created by PhpStorm.
 * User: 2qucick
 * Date: 04.01.2018
 * Time: 10:05
 */

namespace TQ\Tools\Controller;

use Bitrix\Main\Engine\Controller;
use Bitrix\Main\Loader;

class Forms extends Controller
{
    private $iBlockServiceForm = 7;
    private $eventTemplate = 11;
    private $fields = ['NAME', 'EMAIL', 'PHONE', 'SERVICE'];


    public function configureActions(): array
    {
        return [
            'sendForm' => [
                'prefilters' => [],
            ],
        ];
    }

    public function sendFormAction(array $fields): ?array
    {
        $params = $this->prepareFields($fields['form']);
        $this->addElement($params);
        $this->sendMail($params);
        return [];
    }

    private function prepareFields(array $fields): array
    {
        $result = [];
        foreach ($fields as $value) {
            if (in_array($value['name'], $this->fields)) {
                $result[$value['name']] = $value['value'];
            }
        }
        return $result;
    }

    private function addElement(array $fields): void
    {
        Loader::includeModule('iblock');
        $el = new \CIBlockElement;
        $arLoadProductArray = array(
            "IBLOCK_ID" => $this->iBlockServiceForm,
            "PROPERTY_VALUES" => $fields,
            "NAME" => $fields["NAME"] ?: "Элемент",
            "ACTIVE" => "N",
        );
        $el->Add($arLoadProductArray);
    }

    private function sendMail(array $fields): void
    {
        \CEvent::Send("FEEDBACK_FORM", 's1', $fields, 'Y', $this->eventTemplate);
    }


}