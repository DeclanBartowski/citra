<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<header class="news-popup__header">
    <div class="news-popup__data"><?=$arResult['DISPLAY_ACTIVE_FROM']?></div>
    <button type="button" class="btn-close btn-close_top" data-close-modal data-fancybox-close></button>
</header>
<?if(!empty($arResult['DETAIL_PICTURE']['SRC'])):?>
    <div class="news-popup__img">
        <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>">
    </div>
<?endif;?>
<?=$arResult['DETAIL_TEXT']?>