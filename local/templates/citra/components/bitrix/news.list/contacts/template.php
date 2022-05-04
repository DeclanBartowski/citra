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
use Bitrix\Main\PhoneNumber\Format;
use Bitrix\Main\PhoneNumber\Parser;
?>

<section id="contacts" class="contacts scroll-section">
    <div class="map">
        <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                "PATH" => SITE_TEMPLATE_PATH . "/include/index/map.php",
                'AREA_FILE_SHOW' => 'file'
            )
        ); ?>
    </div>
    <div class="container">
        <div class="contacts__wrapper">
            <h2 class="h2 sub-title"><?=$arResult['DESCRIPTION']?></h2>
            <h3 class="h2"><?=$arResult['NAME']?></h3>
            <select class="select" name="contacts">
                <?foreach ($arResult['ITEMS'] as $arItem):?>
                    <option value="<?=$arItem['ID']?>"><?=$arItem['NAME']?></option>
                <?endforeach;?>
            </select>
            <?foreach ($arResult['ITEMS'] as $key => $arItem):?>
            <div style="display:<?if($key == 0):?>block <?else:?>none<?endif?>;"  data-contacts="<?=$arItem['ID']?>">

                <?if(!empty($arItem['PROPERTIES']['ADRESS']['~VALUE']['TEXT'])):?>
                <h3 class="h3"><?=$arItem['PROPERTIES']['ADRESS']['NAME']?></h3>
                <div class="contacts-item">
                    <div class="marker"><?=$arItem['PROPERTIES']['ADRESS']['~VALUE']['TEXT']?></div>
                </div>
                <?endif;?>

                <?if(!empty($arItem['PROPERTIES']['PHONE']['VALUE'])):?>

                <?

                    $parsedPhone = Parser::getInstance()->parse($arItem['PROPERTIES']['PHONE']['VALUE']);
                    $phone = $parsedPhone->format(Format::E164);
                ?>

                <h3 class="h3"><?=$arItem['PROPERTIES']['PHONE']['NAME']?></h3>
                <div class="contacts-item">
                    <a href="tel:<?=$phone?>" class="phone"><?=$arItem['PROPERTIES']['PHONE']['VALUE']?></a>
                </div>
                <?endif;?>

                <?if(!empty($arItem['PROPERTIES']['EMAIL']['VALUE'])):?>
                    <h3 class="h3"><?=$arItem['PROPERTIES']['EMAIL']['NAME']?></h3>
                    <div class="contacts-item">
                        <a href="mailto:<?=$arItem['PROPERTIES']['EMAIL']['VALUE']?>" class="email"><?=$arItem['PROPERTIES']['EMAIL']['VALUE']?></a>
                    </div>
                <?endif;?>
            </div>
            <?endforeach;?>
        </div>
    </div>
</section>