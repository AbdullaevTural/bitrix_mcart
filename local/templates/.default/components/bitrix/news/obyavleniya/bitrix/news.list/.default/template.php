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
IncludeTemplateLangFile(__FILE__);
$this->setFrameMode(true);
?>

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<div class="site-section site-section-sm bg-light" >
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<div class="site-section-title">
					<h2> <?echo GetMessage('NEW_PROPERTIES')?></h2>
				</div>
			</div>
		</div>
<div class="row mb-5">
			
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
     <div class="col-md-6 col-lg-4 mb-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">


 <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block"> <figure> <img alt="Image" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
 <span class="price rounded"><?= $arItem["PROPERTY_PRICE_VALUE"]; ?></span>
						<h3 class="title"><?echo $arItem["NAME"]?></h3>
						<p class="location">
							 <?echo $arItem["DISPLAY_ACTIVE_TO"]?>
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
<?echo GetMessage('AREA')?> <strong><?= $arItem["PROPERTY_TOTAL_AREA_VALUE"]; ?>м<sup>2</sup></strong>

							</div>
							<div class="col">
<?echo GetMessage('FLOOR')?> <strong><?= $arItem["PROPERTY_NUMBER_FLOORS_VALUE"]; ?></strong>

							</div>
							<div class="col">
							<?echo GetMessage('BATH')?> <strong><?= $arItem["PROPERTY_N_BATHROOMS_VALUE"]; ?></strong>

							</div>
<?if(!empty($arItem["PROPERTY_GARAGE_VALUE"])):?>
							<div class="col">
							<?echo GetMessage('GARAGE')?> <strong><?= $arItem["PROPERTY_GARAGE_VALUE"]; ?></strong>
							</div>
<?endif?>
						</div>
					</div>
				</div>
 				</a>
			</div>

<?endforeach;?>

</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<?=$arResult["NAV_STRING"]?>
<?endif;?>

</div>
	</div>

