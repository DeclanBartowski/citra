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
<section class="news over-hidden">
    <div class="container">
        <h2 class="h2"><?= $arResult['NAME'] ?></h2>
        <div class="news__wrapper">
            <div class="news-slider swiper-car-auto swiper">
                <div class="swiper-wrapper">
                    <? foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="swiper-slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <a href="javascript:void(0)" data-news="<?= $arItem['ID'] ?>" class="news-item">
                                <? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                                    <span class="news-item__img">
                                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                         alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>">
                                </span>
                                <? endif; ?>
                                <?= $arItem['NAME'] ?>
                            </a>
                        </div>
                    <? endforeach; ?>
                </div>
                <div class="nav-top">
                    <div class="swiper-button-prev slider-nav-btn slider-nav-btn-prev"></div>
                    <div class="swiper-button-next slider-nav-btn slider-nav-btn-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>