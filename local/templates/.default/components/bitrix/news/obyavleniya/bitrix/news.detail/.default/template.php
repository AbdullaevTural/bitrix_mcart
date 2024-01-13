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
$this->setFrameMode(true);
?>

<div class="news-detail">  
<div class="site-blocks-cover overlay" style="background-image: url('<?=$arResult["DETAIL_PICTURE"]["SRC"]?>')" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span>
            <h1 class="mb-2"><?=$arResult["NAME"]?></h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?= $arResult["PROPERTY_PRICE_VALUE"]; ?> ₽</strong></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" style="margin-top: -150px;">
            <div class="mb-5">
              <div class="slide-one-item home-slider owl-carousel">
                <div><img src="/local/templates/.default/images/img_1.jpg" alt="Image" class="img-fluid"></div>
                <div><img src="/local/templates/.default/images/img_2.jpg" alt="Image" class="img-fluid"></div>
                <div><img src="/local/templates/.default/images/img_3.jpg" alt="Image" class="img-fluid"></div>
              </div>
            </div>
            <div class="bg-white">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3"><?= $arResult["PROPERTY_PRICE_VALUE"]; ?> ₽</strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs">Дата обновления</span>
                    <span class="property-specs-number"><?= $arResult["TIMESTAMP_X"]; ?></span>

                  </li>
                  <li>
                    <span class="property-specs"> Количество этажей</span>
                    <span class="property-specs-number"><?= $arResult["PROPERTY_NUMBER_FLOORS_VALUE"]; ?></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Общая площадь</span>
                    <span class="property-specs-number"><?= $arResult["PROPERTY_TOTAL_AREA_VALUE"]; ?>м<sup>2</sup></span>
                    
                  </li>
                </ul>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Количество санузлов</span>
                  <strong class="d-block"><?= $arResult["PROPERTY_N_BATHROOMS_VALUE"]; ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Наличие гаража</span>
                  <strong class="d-block"><?= $arResult["PROPERTY_GARAGE_VALUE"]; ?></strong>
                </div>
              </div>
              <h2 class="h4 text-black">More Info</h2>
              <p><?= $arResult["DETAIL_TEXT"]; ?></p>
              <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Property Gallery</h2>
                </div>
           <?php if (!empty($arResult['PROPERTIES']['GALLERY']['VALUE'])): /* галерея изображений к статье блога */ ?>
    <?php foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $item): ?>
<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <?php
        // путь к изображению от корня сайта
        $image = CFile::GetPath($item);
        // создаем превьюшку изображения
        $thumb = CFile::ResizeImageGet(
            $item,
            array('width' => 160, 'height' => 160)
        );
        ?>
        <a href="<?= $image; ?>"><img src="<?= $thumb['src']; ?>" alt="" /></a>
    </div>
    <?php endforeach; ?>
<?php endif; ?>
              </div>
<div class="row mb-5"> 
<div class="col-12">
                  <h2 class="h4 text-black mb-3">Дополнительные материалы</h2>
</div>
<?		
$res = CIBlockElement::GetProperty($arResult['IBLOCK_ID'], $arResult['ID'], "sort", "asc", array("CODE" => "SUPPLEMENTARY"));
if ($ob = $res->GetNext())
    {			
$INSTRUCTION_VALUE = $ob['VALUE'];
$file = CFile::GetFileArray($INSTRUCTION_VALUE);
$INSTRUCTION_SRC = $file['SRC'];
    }
?>
<a href="<?=$INSTRUCTION_SRC;?>">Инструкция</a>
</div>
<div class="row mb-5"> 
  <div class="col-12">
                    <h2 class="h4 text-black mb-3">Ссылки на внешние ресурсы</h2>

  <a href="<?=$arResult["PROPERTY_LINKS_VALUE"] ?>" class="service text-center border rounded">
  <p>
        <span class="read-more"><?= $arResult["PROPERTY_LINKS_VALUE"]; ?></span>
    </p>
    </a>
  </div></div>
            </div>
          </div>
          <div class="col-lg-4 pl-md-5">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
            </div>

          </div>
          
        </div>
      </div>
    </div></div>
