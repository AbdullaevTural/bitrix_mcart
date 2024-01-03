<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?> <?$APPLICATION->ShowHead();?> <?
$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500");
$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/fonts/icomoon/style.css");
$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/bootstrap.min.css");
$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/magnific-popup.css");
$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/jquery-ui.css");
$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/owl.carousel.min.css");
$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/owl.theme.default.min.css");
$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/bootstrap-datepicker.css");
$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/mediaelementplayer.css");
$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/animate.css");
$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/fonts/flaticon/font/flaticon.css");
$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/fl-bigmug-line.css");
$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/style.css");
$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/aos.css");

$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery-3.3.1.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery-migrate-3.0.1.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery-ui.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/popper.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/bootstrap.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/owl.carousel.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/mediaelement-and-player.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery.stellar.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery.countdown.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery.magnific-popup.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/bootstrap-datepicker.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/aos.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/main.js');
?> <?$APPLICATION->ShowPanel();?>
<div class="site-loader">
</div>
<div class="site-wrap">
	<div class="border-bottom bg-white top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-6 col-md-6">
					<p class="mb-0">
 <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span><span class="d-none d-md-inline-block ml-2"><?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/home/components/phone.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?></span></a> <a href="#"><span class="text-black fl-bigmug-line-email64"></span><span class="d-none d-md-inline-block ml-2"><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/home/components/email.php"
	)
);?></span></a>
					</p>
				</div>
				<div class="col-6 col-md-6 text-right">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/home/components/icon_head.php"
	)
);?>

				</div>
			</div>
		</div>
	</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_multi", 
	array(
		"COMPONENT_TEMPLATE" => "top_multi",
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "3",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_THEME" => "site"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
</div>
