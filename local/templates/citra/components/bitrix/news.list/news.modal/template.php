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
<div class="news-popup-more">
    <div class="news-slider swiper-car-auto swiper">
        <div class="swiper-wrapper">
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <div class="swiper-slide">
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
        <div class="nav-bottom">
            <div class="swiper-button-prev slider-nav-btn slider-nav-btn-prev"></div>
            <div class="swiper-button-next slider-nav-btn slider-nav-btn-next"></div>
        </div>
    </div>
</div>
