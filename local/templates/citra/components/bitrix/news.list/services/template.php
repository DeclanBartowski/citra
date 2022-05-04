<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section id="services" class="services scroll-section">
    <div class="container">
        <h2 class="h2 sub-title"><?= $arResult['NAME'] ?></h2>
        <div class="row grid col-2 col-md-1">
            <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="services-item services-item_bg-<?= ++$key ?>">
                    <div class="services-item__content" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                        <h3 class="h2"><?= $arItem['NAME'] ?></h3>
                        <p><?= $arItem['PREVIEW_TEXT'] ?></p>
                        <button type="button" class="btn btn-green"
                                data-services="<?= $arItem['ID'] ?>"><?= GetMessage('SERVICES_MORE_BTN') ?></button>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>