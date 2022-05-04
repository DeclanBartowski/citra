<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?>
    <script>Fancybox.close();Fancybox.show([{ src: "#success", type: "inline" }]);</script>

    <?
}
?>
<div class="popup-call__form">
    <h3 class="h2"><?=$arResult['IBLOCK']['NAME']?></h3>
    <p><?=$arResult['IBLOCK']['DESCRIPTION']?></p>

    <form action="<?=POST_FORM_ACTION_URI?>" method="POST">
        <?=bitrix_sessid_post()?>
        <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
        <label class="label">
            <input type="text" class="input" name="NAME" required>
            <span><?=GetMessage('MODAL_NAME')?></span>
        </label>

        <label class="label">
            <input type="email" class="input" name="EMAIL" required>
            <span><?=GetMessage('MODAL_EMAIL')?></span>
        </label>

        <label class="label">
            <input type="tel" class="input" name="PHONE" required>
            <span><?=GetMessage('MODAL_PHONE')?></span>
        </label>

        <?if($arParams["USE_CAPTCHA"] == "Y"):?>
            <div class="mf-captcha">
                <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
                <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
                <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
                <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
                <input type="text" name="captcha_word" size="30" maxlength="50" value="">
            </div>
        <?endif;?>
        <button type="submit" name="submit" value="<?=GetMessage('MODAL_SUBMIT')?>" class="btn btn-green"><?=GetMessage('MODAL_SUBMIT')?></button>
        <small><?=GetMessage('MODAL_RULES')?></small>
    </form>
</div>