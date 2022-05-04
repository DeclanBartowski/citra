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

<section id="about" class="about scroll-section">
    <div class="container">
        <h2 class="h2 sub-title"><?= $arResult['NAME'] ?></h2>
        <div class="grid col-3 col-md-1">
            <h3 class="h2"><?= $arResult['SECTIONS']['NAME'] ?> <span><?= $arResult['SECTIONS']['UF_SUBTITLE'] ?></span>
            </h3>
            <div class="about__content span-2 span-md-1">
                <?= $arResult['SECTIONS']['DESCRIPTION'] ?>
                <ul class="about__list">
                    <? foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <li id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <b><?= $arItem['NAME'] ?></b>
                            <?= $arItem['PREVIEW_TEXT'] ?>
                        </li>
                    <? endforeach; ?>
                </ul>

            </div>
        </div>
    </div>
</section>