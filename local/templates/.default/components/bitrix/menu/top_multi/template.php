<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="site-navbar">
		<div class="container py-1">
			<div class="row align-items-center">
				<div class="col-8 col-md-8 col-lg-4">
					<h1><a href="/index.php" class="h5 text-uppercase text-black"><strong><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/home/components/logo.php"
	)
);?></strong></a></h1>
				</div>
				<div class="col-4 col-md-4 col-lg-8">
 <nav class="site-navigation text-right text-md-right" role="navigation">
					<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
 <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
					</div>
					<ul class="site-menu js-clone-nav d-none d-lg-block">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="has-children" ><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<ul class="dropdown">
		<?elseif($arItem["DEPTH_LEVEL"] == 2):?>
			<li class="has-children" ><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
			<ul class="dropdown">
		<?else:?>
			<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<ul class="dropdown">

		<?endif?>


	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>
			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="<?if ($arItem["SELECTED"]):?>active<?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
			<?endif?>


		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
 </nav>
				</div>
			</div>
		</div>
	</div>
<?endif?>