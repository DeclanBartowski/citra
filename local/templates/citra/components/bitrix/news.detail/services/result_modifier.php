<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$cp = $this->__component; // объект компонента
if (is_object($cp)) {
    if (!empty($arResult['PROPERTIES']['ANOTHER_SERVICE']['VALUE'])) {
        $cp->arResult['ANOTHER_SERVICE'] = $arResult['PROPERTIES']['ANOTHER_SERVICE']['VALUE'];
    }
    $cp->arResult['CURRENT_SERVICE'] = sprintf('Услуга: %s', $arResult['NAME']);

    $cp->SetResultCacheKeys(array('CURRENT_SERVICE','ANOTHER_SERVICE'));


}