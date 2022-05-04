<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!empty($arParams['PARENT_SECTION'])) {
    $arResult['SECTIONS'] = CIBlockSection::GetTreeList([
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'ID' => $arParams['PARENT_SECTION']
    ], ['DESCRIPTION', 'UF_*', 'IBLOCK_ID', 'NAME'])->Fetch();
}