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
<section class="top-block">
    <div class="container top-block__wrapper">
        <? if (!empty($arResult['PREVIEW_PICTURE']['SRC'])): ?>
            <div class="top-block__bg">
                <img src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arResult['PREVIEW_PICTURE']['ALT'] ?>">
            </div>
        <? endif; ?>
        <div class="top-block__content">
            <h1 class="h1">
                <span><span><?= $arResult['NAME'] ?></span> <?= $arResult['PROPERTIES']['SUBTITLE']['VALUE'] ?></span><br>
                <span><?= $arResult['PROPERTIES']['SECOND_SUBTITLE']['VALUE'] ?></span>
            </h1>
            <p><?= $arResult['PREVIEW_TEXT'] ?></p>
            <? if (!empty($arResult['PROPERTIES']['LINK']['VALUE']['LINK'])): ?>
                <a href="<?= $arResult['PROPERTIES']['LINK']['VALUE']['LINK_HREF'] ?>"
                   class="btn btn-green"><?= $arResult['PROPERTIES']['LINK']['VALUE']['LINK'] ?></a>
            <? endif; ?>
        </div>
    </div>
</section>
