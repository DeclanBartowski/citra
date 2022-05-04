<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<footer class="footer">
    <div class="container grid col-4 col-md-2">
        <div class="footer__left span-3 span-md-1">
            <div class="footer__neme">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "PATH" => SITE_TEMPLATE_PATH . "/include/footer/copyright.php",
                        'AREA_FILE_SHOW' => 'file'
                    )
                ); ?>
                </div>
            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                    "PATH" => SITE_TEMPLATE_PATH . "/include/footer/license.php",
                    'AREA_FILE_SHOW' => 'file'
                )
            ); ?>

        </div>
        <div class="footer__right">
            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                    "PATH" => SITE_TEMPLATE_PATH . "/include/footer/text_work.php",
                    'AREA_FILE_SHOW' => 'file'
                )
            ); ?>
            <div class="flex flex_aic">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "PATH" => SITE_TEMPLATE_PATH . "/include/footer/logo_bitrix.php",
                        'AREA_FILE_SHOW' => 'file'
                    )
                ); ?>
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "PATH" => SITE_TEMPLATE_PATH . "/include/footer/dev.php",
                        'AREA_FILE_SHOW' => 'file'
                    )
                ); ?>
            </div>
        </div>
    </div>
</footer>

<div id="success" class="popup popup-call">
    <button type="button" class="btn-close btn-close_top" data-fancybox-close></button>
    <div class="popup-call__alert active">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/dist/icon/check.svg" alt="">
        <h3 class="h2">Благодарим! <br>Ваша заявка успешно отправлена</h3>
    </div>
</div>


<div id="call" class="popup popup-call">
    <button type="button" class="btn-close btn-close_top" data-fancybox-close></button>
    <?$APPLICATION->IncludeComponent(
        "sp:main.feedback",
        "modal",
        Array(
            "AJAX_MODE" => "Y",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "N",
            "COMPONENT_TEMPLATE" => "",
            "EMAIL_TO" => "admin@admin.admin",
            "EVENT_MESSAGE_ID" => array(0=>"12",),
            "FILE_SEND" => "N",
            "INFOBLOCKADD" => "Y",
            "INFOBLOCKID" => "9",
            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
            "REQUIRED_FIELDS" => array(0=>"NONE",),
            "USE_CAPTCHA" => "N"
        )
    );?>
</div>

<div id="service-popup" class="popup popup-service container">
    <button type="button" class="btn-close btn-close_top" data-fancybox-close></button>

    <div id="service-content">


    </div>

    <div class="news-popup__footer">
        <button type="button" class="btn-close btn-close" data-fancybox-close></button>
    </div>
</div>

<div id="news-popup" class="popup news-popup">
    <div id="infoNews"></div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "news.modal",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "6",
            "IBLOCK_TYPE" => "content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "25",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
                0 => "",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "ID",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "COMPONENT_TEMPLATE" => "news"
        ),
        false
    );?>
    <div class="news-popup__footer">
        <button type="button" class="btn-close btn-close" data-fancybox-close></button>
    </div>
</div>


</body>
</html>
