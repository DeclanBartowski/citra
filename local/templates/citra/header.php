<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <?php
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width">');
    Asset::getInstance()->addString('<link rel="icon" href="' . SITE_TEMPLATE_PATH . '/images/favicon.png">');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.min.css");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/vendor/swiper-bundle.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/vendor/fancybox.umd.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/vendor/jquery.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/app.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/custom.js");
    ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>
<header class="header">
    <div class="container flex flex_aic">
        <button class="menu-btn"><span></span><span></span><span></span></button>
        <a href="javascript:void(0)" class="header__logo">
            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                    "PATH" => SITE_TEMPLATE_PATH . "/include/header/logo.php",
                    'AREA_FILE_SHOW' => 'file'
                )
            ); ?>
        </a>
        <nav class="main-menu">
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "header",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(0 => "",),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "Y",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "left",
                    "USE_EXT" => "N"
                )
            ); ?>
            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                    "PATH" => SITE_TEMPLATE_PATH . "/include/header/search.php",
                    'AREA_FILE_SHOW' => 'file'
                )
            ); ?>
        </nav>
        <div class="header__right">
            <div class="header-modal">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "PATH" => SITE_TEMPLATE_PATH . "/include/header/phone.php",
                        'AREA_FILE_SHOW' => 'file'
                    )
                ); ?>
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "PATH" => SITE_TEMPLATE_PATH . "/include/header/modal.php",
                        'AREA_FILE_SHOW' => 'file'
                    )
                ); ?>
            </div>
        </div>
    </div>
</header>