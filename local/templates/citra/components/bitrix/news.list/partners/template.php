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
<section class="partners">
    <div class="container grid col-3 col-md-1">
        <h2 class="h2"><?= $arResult['DESCRIPTION'] ?></h2>
        <div class="partners__wrapper span-2 span-md-1 grid col-4 col-md-2 col-sm-2">
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>" class="partners-item">
                    <img src="<?= CFile::GetPath($arItem['PROPERTIES']['SVG']['VALUE']) ?>"
                         alt="<?= $arItem['NAME'] ?>">
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>