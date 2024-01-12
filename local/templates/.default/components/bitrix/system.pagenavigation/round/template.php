<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

$colorSchemes = array(
	"green" => "bx-green",
	"yellow" => "bx-yellow",
	"red" => "bx-red",
	"blue" => "bx-blue",
);
$colorScheme = $colorSchemes[$arParams["TEMPLATE_THEME"]] ?? "";
?>

<div  class="row">
	<div class="col-md-12 text-center">
  <div class="site-pagination">

<?if($arResult["bDescPageNumbering"] === true):?>

<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>

			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">1</a>
		<?else:?>

			<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a>
		<?endif?>
	<?else:?>
			<a class="active">1</a>
	<?endif?>



<?else:?>

	<?if ($arResult["NavPageNomer"] > 1):?>
		<?if($arResult["bSavePage"]):?>
		<a class="active"href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?echo GetMessage("round_nav_back")?></a>
			<a  class="active" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1">1</a>
		<?else:?>
			<?if ($arResult["NavPageNomer"] > 2):?>
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?echo GetMessage("round_nav_back")?></a>
			<?else:?>
			<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?echo GetMessage("round_nav_back")?></a>
			<?endif?>
			<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a>
		<?endif?>
	<?else:?>

		<a class="active">1</a>
	<?endif?>



<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["NavPageCount"] > 1):?>
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=$arResult["NavPageCount"]?></a>
		<?endif?>

	<?else:?>
		<?if($arResult["NavPageCount"] > 1):?>

	<a class="active"><?=$arResult["NavPageCount"]?></a>
		<?endif?>
	<?endif?>
<?endif?>


	</div>
</div>
</div>
