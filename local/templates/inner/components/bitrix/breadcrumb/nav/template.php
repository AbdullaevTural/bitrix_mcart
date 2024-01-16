<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';
$pageTitle = $APPLICATION->GetProperty('TITLE');
//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

$strReturn .= '<div class="row align-items-center justify-content-center text-center">
			<div class="col-md-10">
				<h1 class="mb-2">'.$pageTitle.'</h1>
				<div>';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

	if($arResult[$index]["LINK"] <> "" && $index<(count($arResult)-1))
	{
		$strReturn .= '<a href="'.$arResult[$index]["LINK"].'"title="'.$title.'" itemprop="item"><span itemprop="name">'.$title.'</span></a> <span class="mx-2 text-white">•</span>';
	}
	else
	{

		$strReturn .= '<strong class="text-white">'.$title.'</strong>';
	}
}

$strReturn .= '</div>
			</div>
		</div>';

return $strReturn;
