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
<?if(!empty($arResult['PROPERTIES']['BLOCK_1_TITLE']['~VALUE']['TEXT']) || !empty($arResult['PROPERTIES']['BLOCK_1_LIST']['VALUE']) ):?>
    <div class="grid col-12 col-md-1 mb-60">

        <?if(!empty($arResult['PROPERTIES']['BLOCK_1_TITLE']['~VALUE']['TEXT'])):?>
            <h2 class="h2 span-5 span-md-1"><?=$arResult['PROPERTIES']['BLOCK_1_TITLE']['~VALUE']['TEXT']?></h2>
        <?endif;?>

        <?if(!empty($arResult['PROPERTIES']['BLOCK_1_LIST']['VALUE'])):?>
            <div class="span-7 span-md-1">
                <?foreach ($arResult['PROPERTIES']['BLOCK_1_LIST']['VALUE'] as $item):?>
                    <p><?=$item?></p>
                <?endforeach;?>
            </div>
        <?endif;?>
    </div>
<?endif;?>


<?if(!empty($arResult['PROPERTIES']['BLOCK_2_TITLE']['~VALUE']['TEXT'])):?>
    <h3>
        <?=$arResult['PROPERTIES']['BLOCK_2_TITLE']['~VALUE']['TEXT']?>
    </h3>
<?endif;?>

<?if(!empty($arResult['PROPERTIES']['BLOCK_2_LIST']['VALUE'])):?>
    <ol class="ol-castom grid col-6 col-md-3 col-sm-2 mb-60">
        <?foreach ($arResult['PROPERTIES']['BLOCK_2_LIST']['VALUE'] as $item):?>
            <li><?=$item?></li>
        <?endforeach;?>
    </ol>
<?endif;?>

<?if(!empty($arResult['PROPERTIES']['BLOCK_3_TITLE']['VALUE'])):?>
    <h3><?=$arResult['PROPERTIES']['BLOCK_3_TITLE']['VALUE']?></h3>
<?endif;?>

<?if(!empty($arResult['PROPERTIES']['BLOCK_3_LIST']['VALUE'])):?>
    <ol class="ol-castom-2 grid col-5 col-md-3 col-sm-2 mb-60">
        <?foreach ($arResult['PROPERTIES']['BLOCK_3_LIST']['VALUE'] as $item):?>
            <li><?=$item?></li>
        <?endforeach;?>
    </ol>
<?endif;?>

<?if(!empty($arResult['PROPERTIES']['BLOCK_4_TITLE']['VALUE']) || !empty($arResult['PROPERTIES']['BLOCK_4_TEXT']['~VALUE']['TEXT']) ):?>
    <div class="grid col-12 col-md-1 mb-60">
        <h2 class="h2 span-5 span-md-1"><?=$arResult['PROPERTIES']['BLOCK_4_TITLE']['VALUE']?></h2>
        <div class="span-7 span-md-1"><?=$arResult['PROPERTIES']['BLOCK_4_TEXT']['~VALUE']['TEXT']?></div>
    </div>
<?endif;?>