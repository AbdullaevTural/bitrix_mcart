<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?> <footer class="site-footer">
<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<div class="mb-5">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"EDIT_TEMPLATE" => "",
		"PATH" => "local/templates/home/components/about.php"
	)
);?>
			</div>
		</div>
		<div class="col-lg-4 mb-5 mb-lg-0">
			<div class="row mb-5">
				<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_bottom", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu_bottom"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
			</div>
		</div>
		<div class="col-lg-4 mb-5 mb-lg-0">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"EDIT_TEMPLATE" => "",
		"PATH" => "local/templates/home/components/follow.php"
	)
);?>
		</div>
	</div>
	<div class="row pt-5 mt-5 text-center">
		<div class="col-md-12">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"EDIT_TEMPLATE" => "",
		"PATH" => "local/templates/home/components/colorlib.php"
	)
);?>
		</div>
	</div>
</div>
 </footer>