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
<h4><?=GetMessage('SERVICE_MORE_TITLE')?></h4>
<div class="popup-service__more">
    <h3 class="h2"><?=$arResult['NAME']?></h3>
    <p><?=$arResult['PREVIEW_TEXT']?></p>
    <button type="button" data-services="<?=$arResult['ID']?>" class="btn btn-green"><?=GetMessage('SERVICE_MORE')?></button>
</div>
