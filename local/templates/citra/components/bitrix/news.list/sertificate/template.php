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
<section id="certificates" class="certificates scroll-section over-hidden">
    <div class="container grid col-3 col-md-1">
        <h2 class="h2"><?= $arResult['DESCRIPTION'] ?></h2>
        <div class="certificates__wrapper span-2 span-md-1">
            <div class="certificates-slider swiper-car-auto swiper">
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
                            <a href="<?= $arItem['DETAIL_PICTURE']['SRC'] ?>" class="certificates-item"
                               data-fancybox="certificates" data-caption="<?= $arItem['NAME'] ?>">
                                <span class="certificates-item__img"><img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                                                          alt=""></span>
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
    </div>
</section>