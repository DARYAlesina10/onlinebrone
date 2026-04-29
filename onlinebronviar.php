<?php

/*
Template name:   виар онлайн брони
*/


$main_fields = get_fields(2);
$valueotz = get_field("otzivis",4120);

$all_quests = get_all_questssw() ;







$url = 'https://api-ru.iiko.services/api/1/access_token'; 
$post_data = array(
    'apiLogin' => '3e2a8252692647d9a40bb92e194dd7ea',
);

$headers = array('Content-Type: application/json'); 


$data_json = json_encode($post_data);
$curl = curl_init();
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_VERBOSE, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_json);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true); 

$result = curl_exec($curl);

$hj=json_decode($result);

$token=$hj->token;



$url = 'https://api-ru.iiko.services/api/1/nomenclature'; 
$post_datax = array(

"startRevision"=>1,
"organizationId"=>'0d11942d-de93-4be2-ae24-752307cc186b'
);

$headersx = array("Authorization: Bearer ".$token."","Content-Type: application/json");


$data_jsonx = json_encode($post_datax);
$curl = curl_init();
curl_setopt($curl, CURLOPT_HTTPHEADER, $headersx);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_VERBOSE, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_jsonx);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true); 

$resultm = curl_exec($curl);

$hjm=json_decode($resultm);

//Print_r($hjm);





$i=0;
$d=0;
$p=0;
$k=0;
$l=0;
$j=0;
$h=0;
$f=0;
$g=0;
$v=0;
foreach($hjm->products as $fg){


$t=$fg->imageLinks;


$dh=$fg->sizePrices;
$prise=$dh[0]->price;
$cena=$prise->currentPrice;
if($i>3 ){$cf='scrit';$pokaz='<a href="" class="primary-nav__link"> <img class="primary-nav__image" src="https://pandoroom.org/wp-content/themes/pandoroom/imgsz/icons/drink.svg" alt="">Показать еще</a>';}
if($d>3 ){$cff='scritt';$pokaz='<a href="" class="primary-nav__link"> <img class="primary-nav__image" src="https://pandoroom.org/wp-content/themes/pandoroom/imgsz/icons/drink.svg" alt="">Показать еще</a>';}
$scxnx='<div class="col-lg-3 col-6 '.$cf.'">
                <div class="fact-card ">
                  <img src="'.$t[0].'" alt="" class="fact-card__img img-fluid">
                  <span class="fact-card__counter">'.$fg->name.'</span>
				  <span class="" style="color: #000;">'.$cena.' р</span>
			
                  
                   <div class="quest-selection-page__price" style="width: 100%;">
                 
                  <span class="quests-info__price" style="color: #000;"><div class="animated-button button shouenul selsmunu" style="    width: 45%;    display: inline-block;
    margin-right: 15px;
    margin-top: 7px;" data-ids="'.$fg->id.'" data-sen="'.$cena.'" data-colz="0" data-ves="'.round($fg->weight, 2).'" data-naz="'.$fg->name.'" data-cex="show">-</div><div class="animated-button button shouenu" style="    width: 45%;
    margin-top: 7px;display: inline-block;" data-ids="'.$fg->id.'" data-colz="0" data-sen="'.$cena.'" data-ves="'.round($fg->weight, 2).'" data-naz="'.$fg->name.'" data-cex="show">+</div></span>
                </div>
              
               
              </div>
              </div>';



$scxnxsh='<div class="quest-selection-page__cards-col  col-lg-3 col-6 '.$cff.'">
              <div style="background-image: linear-gradient(0deg, #000000 0%, rgba(0, 0, 0, 0) 32.2%, rgba(0, 0, 0, 0) 100%), url('.$t[0].');" class="gallery-card ggsh">
                <a href="#" class="gallery-card__content">
                 
                  
                  <span class="gallery-card__name gallery-card__name--big" style="
    font-size: 21px;
    line-height: 1.3;
">'.$fg->name.'</span> <span class="gallery-card__age">'.$cena.' руб</span>
                </a>
              </div>
              <div class="quests-info">
                <div class="quest-selection-page__price" >
                 
                  <span class="quests-info__price" style="color: #000;"><div class="animated-button button shou" style="    width: 100%;
    margin-top: 7px;" data-ids="'.$fg->id.'" data-sen="'.$cena.'" data-naz="'.$fg->name.'" data-cex="show">+ Хочу</div></span>
                </div>
              
               
              </div>
            </div>';

$scxnxshp='<div class="quest-selection-page__cards-col  col-lg-3 col-6 ">
              <div style="background-image: linear-gradient(0deg, #000000 0%, rgba(0, 0, 0, 0) 32.2%, rgba(0, 0, 0, 0) 100%), url('.$t[0].');" class="gallery-card ggsh">
                <a onclick="return false"class="gallery-card__content" style="
    text-decoration: none;padding: 20px;
">
                 
                  
                  <span class="gallery-card__name gallery-card__name--big" style="
    font-size: 19px;
    line-height: 1.2;
">'.$fg->name.'</span> <span class="gallery-card__age">'.$cena.' руб</span>
                </a>
              </div>
              <div class="quests-info">
			
                <div class="quest-selection-page__price" >
                 
                  <span class="quests-info__price" style="color: #000;"><div class="animated-button button shouenul selsmunu" style="    width: 45%;    display: inline-block;
    margin-right: 15px;
    margin-top: 7px;" data-ids="'.$fg->id.'" data-sen="'.$cena.'" data-colz="0" data-ves="'.round($fg->weight, 2).'" data-naz="'.$fg->name.'" data-cex="show">-</div><div class="animated-button button shouenu" style="    width: 45%;
    margin-top: 7px;display: inline-block;" data-ids="'.$fg->id.'" data-colz="0" data-sen="'.$cena.'" data-ves="'.round($fg->weight, 2).'" data-naz="'.$fg->name.'" data-cex="show">+</div></span>
                </div>
              
               
              </div>
            </div>';
 if($fg->parentGroup=="075c7040-7365-4eba-b19a-bb63bd765ea5" || $fg->parentGroup=="9ea9f2bf-dc1a-4773-98dd-027683aa7c80" || $fg->parentGroup=="81cb9fc6-3841-4f3d-b5de-154ef712403c"){
   $testeshow[$d]= $scxnxsh;
    $d++;
}else if($fg->parentGroup=="81aa3f1c-86ff-40d0-b930-b556e2055934" || $fg->parentGroup=="97fd7bd1-5cd4-43d9-9409-429781209481" || $fg->parentGroup=="d1bff5fd-89aa-4122-8b57-341249d0b55e"){
	$testemuk[$i]= $scxnx;
    $i++;
}else if($fg->parentGroup=="f99c58b2-4ce4-4519-96b6-cf6d038b878f"){
	$testemme[$p]= $scxnxshp;
    $p++;
}else if($fg->parentGroup=="7ac6481c-a7bb-4b93-823f-ecdabb99c320"){
	$testemmek[$k]= $scxnxshp;
    $k++;
}else if($fg->parentGroup=="5282b26a-04b1-4880-ba7d-597c13d361f8"){
	$testemmel[$l]= $scxnxshp;
    $l++;
}else if($fg->parentGroup=="1c1dd7e1-19ca-41a0-835c-ef49dd3b9b1e"){
	$testemmej[$j]= $scxnxshp;
    $j++;
}else if($fg->parentGroup=="31b53ad0-2def-4e67-810b-e9a734ee369a"){
	$testemmeh[$h]= $scxnxshp;
    $h++;
}else if($fg->parentGroup=="2f583c03-35f2-455d-b868-9f3b53f06104"){
	$testemmeg[$g]= $scxnxshp;
    $g++;
}else if($fg->parentGroup=="7f5314fc-461e-4ff1-9792-91925379350b"){
	$testemmef[$f]= $scxnxshp;
    $f++;
}else if($fg->parentGroup=="f54fb156-fe31-4824-ba31-fe38b8c6d7cb" || $fg->parentGroup=="33ab134e-2ca1-49d2-b4e6-ee0b8d562871" || $fg->parentGroup=="608c883e-7678-4fa8-9ef1-e127ea8877f2" || $fg->parentGroup=="89ae1b8f-c8b9-4099-be4e-52a233a287a8" || $fg->parentGroup=="767fa1a8-4578-499e-ad5b-a3d0dc6ba11f" || $fg->parentGroup=="bebbdf8e-31e8-4c60-bc46-8da01e6615ac"){
	$testemmefss[$v]= $scxnxshp;
    $v++;
}












 
}

$i=0;
foreach($hjm->groups as $fg){


if($i>3){$cd='sl';$pokaz='<a href="" class="primary-nav__link"> <img class="primary-nav__image" src="https://pandoroom.org/wp-content/themes/pandoroom/imgsz/icons/drink.svg" alt="">Показать еще</a>';}


$pred=$hjm->products;



$found_key = array_search($fg->parentGroup, array_column($pred, 'parentGroup'));

if($found_key!=''){
	
	
}


$t=$fg->imageLinks;
$pris=$fg->additionalInfo;
$hj=json_decode($pris);
$y=0;

foreach($hj as $r){
	
$rew[$y]='<option class="tortss"  data-naz="'.$r->name.'" data_cen="'.$r->cen.'" value="'.$r->id.'">'.$r->name.' - '.$r->cen.' руб.</option>';
	
$y++;	
}

$commaj = implode("", $rew);
$scxnx='<div class="col-lg-3 col-6 '.$cd.'">
                <div class="fact-card " style="margin-top: 65px;">
                  <img src="'.$t[0].'" alt="" class="fact-card__img img-fluid" style="border-radius: 150px;width: 184px;margin-top: -73px;">
                  <span class="fact-card__counter">'.$fg->name.'</span>
 <div style=""><select class="form-quests__inputs topx" name="tort"><option class="tortss" data_cen="0" value="0" selected>Выбрать вес</option>'.$commaj.'</select></div><div class="animated-button button tortk" style="    width: 100%;
    margin-top: 7px;" data_ids='.$fg->id.'>Заказать </div>
				</div>
              </div>';





if($fg->parentGroup=="6ec5d3c3-c470-43d7-a647-3a5230bcac00" || $fg->parentGroup=="deed18dd-275d-4e2e-8914-b1f58ffcbfe3" ){
	$testemortus[$i]= $scxnx; UNSET($rew);
    $i++;
}










 
}

//$testemortus=shuffle($testemortuss);

$keys = array_keys($testemortus);
  shuffle($keys);
  $random = array();
  foreach ($keys as $key) {
    $random[$key] = $testemortus[$key];
  }



$commauktorts = implode("", $random);

$commauktuk = implode("", $testemuk);
$commauktsh = implode("", $testeshow);
$commapr = implode("", $testemme);
$commaprk = implode("", $testemmek);
$commaprks = implode("", $testemmefss);

$commaprl = implode("", $testemmel);
$commaprj = implode("", $testemmej);
$commaprh = implode("", $testemmeh);
$commaprg = implode("", $testemmeg);
$commaprf = implode("", $testemmef);
if (isset($_GET["date"]) && $_GET["date"] != '' ) {
	
	
	$all_quests = get_all_questssw() ;
	$sins=get_all_questss();
	$startz=$_GET["st"];
    $stop=$_GET["sp"];
			print_quests_schedulecabsviar($all_quests, $_GET["date"], $startz);
} else {

$sins=get_all_questss();
$all_quests = get_all_questssw() ;

$g=rand(1000,10000);


get_header();

?>


<main class="main quest-selection-page quest-selection-page--result">
   
   <section class="container-xl" id ="starte">
             <div class="row footer__inner vz">
	            <div class="col-md-2 redv" ><div class="vramecko "><img src="http://pandoroom.org/wp-content/uploads/2023/12/kvest.png" class="img-fluid" ></div></div>
	            <div class="col-md-10">
           
		   
		         <form method="POST" action="#" class="booking-popup__form" style="background-color: #fff;">
                                    <fieldset><h2 class="main__title quest-selection-page__title">Онлайн бронирование мероприятия в новой VR Арене</h2>
                                      <legend class="booking-popup__legend">Бронирование мероприятия осуществляется только лицами старше 18 лет</legend>
                                     
							
										 
 <div class="row">
                                        <div class="col-md-8">
                                          <div class="row">
                                       
                                          
										<div class="col-md-6">
										</br><p style="color: #000;">Имя именинника</p>
										<input  id="reb" type="text" class="booking-popup__input">
                                          </div>
										  <div class="col-md-6">
										  </br><p style="color: #000;">Сколько исполняется?</p>
                                            <input  type="number" id="vozr" class="booking-popup__input vozrast">
                                          </div> 
										  <div class="col-md-4" >
										  </br><p style="color: #000;">Укажите дату праздника</p>
                                            <input  type="date"  class="booking-popup__input" value="" id="datz">
                                          </div>
										  
										  <div class="col-md-4">
										  </br><p style="color: #000;">Время начала</p>
                                            <input type="time" class="booking-popup__input" value="" list="time-list" id="nax">
                                          <datalist id="time-list">
<option value="10:00" label="">
<option value="10:30" label="">
<option value="11:00" label="">
<option value="11:30" label="">
<option value="12:00" label="">
<option value="12:30" label="">
<option value="13:00" label="">
<option value="13:30" label="">
<option value="14:00" label="">
<option value="14:30" label="">
<option value="15:00" label="">
<option value="15:30" label="">
<option value="16:00" label="">
<option value="16:30" label="">
<option value="17:00" label="">
<option value="17:30" label="">
<option value="18:00" label="">
<option value="18:30" label="">
<option value="19:00" label="">
<option value="19:30" label="">
<option value="20:00" label="">
<option value="20:30" label="">
</datalist>
										  
										  </div>
										  <div class="col-md-6">
										  </br><p style="color: #000;">Количество взрослых</p>
                                            <input  type="number" id="kdet" class="booking-popup__input coldet">
                                          </div>
										  <div class="col-md-4">
										  </br><p style="color: #000;">Количество детей</p>
                                            <input  type="number" id="kgos" class="booking-popup__input coldet">
                                          </div>
										 
										 
										 
										 
										  
										   
										  
										
										</div>
                                        </div>
                                       
                                      </div>
									 
                                      <div class="row booking">
                                        <div class="col-md-6" style="display:none">
                                          <span  class="button button--orange" id="kvestvib" data-start="" data-end="" data-dates=""><img class="button__icon" src="../imgs/Group286.png" alt="">Выбор квеста</span>
                                        </div>
                                        <div class="col-md-6" style="padding-top:20px">
                                          <span  class="button button--orange" id="dtolvibx" data-start="" data-end="" data-dates="" ><img class="button__icon" src="../imgs/Group286.png" alt=""> + Выбор стола</span>
                                        </div>
                                      </div>
									 </form> 
                   
				     </div>
		   
		         </div>
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
     </section>




 <section class="container-xl" >
             <div class="row footer__inner vz">
	            <div class="col-md-2 redv"><div class="vramecko "style="border: 7px solid #15cef3;"><img src="http://pandoroom.org/wp-content/uploads/2024/01/bron.png" class="img-fluid" style="padding-left: 8px;padding-top: 8px;"></div><div class="vibmn" id="stplk" style="display:none"><div><strong>Мы все записали:</strong></div><div id="cdv"></div><div><a class="vbnr animated-button button" id="next7" style="text-decoration: none;margin-top: 15px;">Закончить оформление</a></div></div></div>
	            <div class="col-md-10">
				  <div class="booking-popu" > <h3 class="main__title quest-selection-page__title" >Стол</h3>
				
				
				<div class="row" id ="vibzali">
									  
									   <legend class="booking-popup__legend">Бронирование праздника осуществляется поэтапно. Без заполнения предыдущего этапа, невозможно перейти к следующему</legend>
										  
										  <div class="col-lg-12">
										  <div class="preloader-55" style="margin:0 auto;display:none;"></div>
										      <div class="row">
											  <div class="form-quests__checkbox-wrapper" style="padding-top: 25px;display:none" >
              <input type="checkbox" name="" class="form-quests__checkbox" id="idkvestus" >
              <label for="form-quests-checkbox" class="form-quests__checkbox-label" style="font-size: 16px;color: #000000;">Зал «Kids»</label>
            </div><div class="stolsz row">
										 
										      </div></div>
											  <div class="row"><div class="form-quests__checkbox-wrapper" style="padding-top: 25px;display:none">
              <input type="checkbox" name="" class="form-quests__checkbox" id="idlaunge" style="" >
              <label for="form-quests-checkbox" class="form-quests__checkbox-label" style="font-size: 16px;color: #000000;" >Зал «Lounge»</label>
            </div><div class="stolszl row">
										 
										      </div>
										 
										      </div>
											  <div class="row"><div class="form-quests__checkbox-wrapper" style="padding-top: 25px;display:none">
              <input type="checkbox" name="" class="form-quests__checkbox" id="idkafe" >
              <label for="form-quests-checkbox" class="form-quests__checkbox-label" style="font-size: 16px;color: #000000;"  >Зал «Cafe»</label>
            </div><div class="stolsk row">
										 
										      </div>
										 
										      </div>
										  </div>
										  </div>
      </div>
    <div class="row">
	
			   </div>
	
	</div>
  </div>
</section>






<section class="container-xl" >
             <div class="row footer__inner vz">
	            <div class="col-md-2 redv"><div class="vramecko kvestm" style="border: 7px solid #ff7f01;"><img src="http://pandoroom.org/wp-content/uploads/2024/01/pazl.png" class="img-fluid" style="padding-top: 4px;"></div></div>
	            <div class="col-md-10" >
                   <h3 class="main__title quest-selection-page__title" id="next1">Квест</h3><div class="row" id ="vibkv"><legend class="booking-popup__legend">Бронирование праздника осуществляется поэтапно. Без заполнения предыдущего этапа, невозможно перейти к следующему</legend>
			   <div class="form-quests__checkbox-wrapper animated-button button button--orange" style="width: fit-content;
    display: inline-block;
    margin-left: 10px;
    margin-top: 10px;
    /* padding-top: 10px; */
    color: #fff;">
              <input type="checkbox" name="" class="form-quests__checkbox" id="bezkvest"  >
              <label for="form-quests-checkbox" class="form-quests__checkbox-label" style="font-size: 16px;color: #fff;">Мой праздник без квеста</label>
           <div id="izkvest" style="cursor: pointer;
    padding: 10px;
    margin-left: 50px;
    background-color: #a0be38;
    border-radius: 15px;display:none;">Изменить</div>
		   </div>
		   <div class="form-quests__checkbox-wrapper animated-button button button--orange" style="width: fit-content;
    display: inline-block;
    margin-left: 10px;
    margin-top: 10px;
    /* padding-top: 10px; */
    color: #fff;">
              <input type="checkbox" name="" class="form-quests__checkbox" id="kvestest"  >
              <label for="form-quests-checkbox" class="form-quests__checkbox-label" style="font-size: 16px;color: #fff;">Квест уже забронирован</label>
           
		   </div>
            <div class="container-xl" >
			<div class="row form-quests__top" style="display:none">
			                           <div class="col-sm-6 col-lg-3" style="display:none">
									   <div class="form-quests__field"> 
									   <select class="form-quests__input" name="age">
									             <option selected="" value="NULL">Выберите место</option>
												 <option value="1">Нижнепортовая 1</option>
												
												 
										</select></div></div>
								<div class="col-sm-6 col-lg-3">
								<div class="form-quests__field"> 
								<select class="form-quests__input" name="type"><option selected="" value="NULL">Выберите жанр</option><option value="1">Приключение</option><option value="2">Экшн</option><option value="3">Мистический</option><option value="5">Детектив</option> </select></div></div><div class="col-sm-6 col-lg-3"><div class="form-quests__field"> <select class="form-quests__input" name="level"><option selected="" value="NULL">Выберите сложность</option><option value="1">Низкая</option><option value="2">Средняя</option><option value="3">Высокая</option><option value="4">Очень высокая</option> </select></div></div><div class="col-sm-6 col-lg-3"><div class="form-quests__field form-quests__field--button"></div></div></div>
			<div class="preloader-5" style="margin:0 auto;display:none;"></div>
			<div class="row" id="kvests">
			
			
			</div><div class="noits" style="display:none"><p>*Обратите внимание, максимальное количество участников в квесте не более 6 человек. Рекомендуем забронировать еще один квест</p>
			<div class="form-quests__checkbox-wrapper"> <input type="checkbox" name="" class="form-quests-checkboxcvv" id="bezkveb"> <label for="form-quests-checkboxcvv" class="form-quests__checkbox-label" style="font-size: 16px;color: #000000;">Не все гости идут в квест</label></div>
			</div>
</div> </div>
			   </div>
             </div>
</section>






<section class="container-xl" >
             <div class="row footer__inner vz">
	            <div class="col-md-2 vz"><div class="vramecko tortikm" style="border: 7px solid #dc3545;"><img src="http://pandoroom.org/wp-content/uploads/2023/12/tort.png" class="img-fluid" ></div></div>
	            <div class="col-md-10" >
                   <h3 class="main__title quest-selection-page__title" id="next2">Торт </h3><div class="row" id ="vibtorts" ><legend class="booking-popup__legend">Бронирование праздника осуществляется поэтапно. Без заполнения предыдущего этапа, невозможно перейти к следующему</legend>
	 <div class="form-quests__checkbox-wrapper animated-button button button--orange" style="width: fit-content;
    display: inline-block;
    margin-left: 10px;
    margin-top: 10px;
    /* padding-top: 10px; */
    color: #fff;">
              <input type="checkbox" name="" class="form-quests__checkbox" id="bezert"  >
              <label for="form-quests-checkbox" class="form-quests__checkbox-label" style="font-size: 16px;color: #fff;" >Праздник без торта</label>
            </div>
		          
	 <div class="form-quests__checkbox-wrapper animated-button button button--orange" style="width: fit-content;
    display: inline-block;
    margin-left: 10px;
    margin-top: 10px;
    /* padding-top: 10px; */
    color: #fff;">
              <input type="checkbox" name="" class="form-quests__checkbox" id="svert"  >
              <label for="form-quests-checkbox" class="form-quests__checkbox-label" style="font-size: 16px;color: #fff;" >Будет свой торт</label>
           <div id="iztort" style="cursor: pointer;
    padding: 10px;
    margin-left: 50px;
    background-color: #a0be38;
    border-radius: 15px;display:none;">Изменить</div>
			</div>	
	<div class="row footer__inner" id="gkl"><?php echo $commauktort;?><?php echo $commauktorts;?>
	<div class="vbnn"><div class="primary-nav__link vbns" id="tortiks" style="margin-top: 25px"> <img class="primary-nav__image" src="https://pandoroom.org/wp-content/themes/pandoroom/imgsz/icons/drink.svg" alt="">Показать еще</div></div>
	</div>
	   <div class="row">
	
			   </div></div>
			   </div>
             </div>
</section>


<section class="container-xl" >
             <div class="row footer__inner vz">
	            <div class="col-md-2"><div class="vramecko showm" style="border: 7px solid #dc3545;"><img src="http://pandoroom.org/wp-content/uploads/2023/12/shou-1.png" class="img-fluid" ></div></div>
	            <div class="col-md-10">
        
		
		
		 <h3 class="main__title quest-selection-page__title"id="next3">Шоу-программа</h3>  <div class="row" id ="shvib"><legend class="booking-popup__legend">Бронирование праздника осуществляется поэтапно. Без заполнения предыдущего этапа, невозможно перейти к следующему</legend>
	 <div class="form-quests__checkbox-wrapper animated-button button button--orange" style="    width: fit-content;
    display: inline-block;
    margin-left: 10px;
    margin-top: 10px;
    /* padding-top: 10px; */
    color: #fff;">
              <input type="checkbox" name="" class="form-quests__checkbox" id="bezdsh"  >
              <label for="form-quests-checkbox" class="form-quests__checkbox-label" style="font-size: 16px;color: #fff;" >Шоу-программа не нужна</label>
              <div id="izshow" style="cursor: pointer;
    padding: 10px;
    margin-left: 50px;
    background-color: #a0be38;
    border-radius: 15px;display:none;">Изменить</div>
			</div>	
	
	
	
	
	<div class="row"><?php echo $commauktsh;?><div class="vbnn"><div class="primary-nav__link vbns" id="showwa"><img class="primary-nav__image" src="https://pandoroom.org/wp-content/themes/pandoroom/imgsz/icons/drink.svg" alt="" style="
   
">Показать еще</div></div></div></div>
		
		
		<div class="row">
		
			   </div>
			   </div>
             </div>
</section>
<section class="container-xl"  >
             <div class="row footer__inner vz">
	            <div class="col-md-2 redv"><div class="vramecko ukrashm" style="border: 7px solid #53d7f2;"><img src="http://pandoroom.org/wp-content/uploads/2023/12/ukrashenie.png" class="img-fluid" style=""></div></div>
	            <div class="col-md-10">
        <h3 class="main__title quest-selection-page__title" id="next5">Украшения для праздника</h3> <div class="row" id ="ukrvib"> <legend class="booking-popup__legend">Бронирование праздника осуществляется поэтапно. Без заполнения первого этапа, невозможно перейти к следующему</legend>
	    <div class="form-quests__checkbox-wrapper animated-button button button--orange" style="    width: fit-content;
    display: inline-block;
    margin-left: 10px;
    margin-top: 10px;
    /* padding-top: 10px; */
    color: #fff;">
              <input type="checkbox" name="" class="form-quests__checkbox" id="bezukr"  >
              <label for="form-quests-checkbox" class="form-quests__checkbox-label" style="font-size: 16px;color: #fff;" >Праздник без украшений</label>
          <div id="izukr" style="cursor: pointer;
    padding: 10px;
    margin-left: 50px;
    background-color: #a0be38;
    border-radius: 15px;display:none;">Изменить</div>
		   </div>	
	
	<div class="row"><?php echo $commauktuk;?><div class="vbnn"></div></div>
</div>
	
		
			</div>
		</div>
</section>
<section class="container-xl" >
             <div class="row footer__inner vz">
	            <div class="col-md-2"><div class="vramecko predmenu" style="border: 7px solid #dc3545;"><img src="http://pandoroom.org/wp-content/uploads/2024/04/zakaz-edy.png" class="img-fluid" ></div></div>
	            <div class="col-md-10">
    
		
		
		 <h3 class="main__title quest-selection-page__title"id="next3">Меню вашего праздника</h3>  <div class="row" id ="dmenu">
		    <div class="row"></div>
	
	
	
	
	
	<div class="row">
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
       
	   <li class="nav-item" role="presentation">
             <button class="nav-link active" id="pills-zakus-tab" data-bs-toggle="pill" data-bs-target="#pills-zakus" type="button" role="tab" aria-controls="pills-zakus" aria-selected="true">Праздничное меню</button>
       </li>
       <li class="nav-item" role="presentation">
             <button class="nav-link" id="pills-salat-tab" data-bs-toggle="pill" data-bs-target="#pills-salat" type="button" role="tab" aria-controls="pills-salat" aria-selected="false">Cеты</button>
       </li>
       <li class="nav-item" role="presentation">
             <button class="nav-link" id="pills-hot-tab" data-bs-toggle="pill" data-bs-target="#pills-hot" type="button" role="tab" aria-controls="pills-hot" aria-selected="false">Напитки</button>
      </li>
	  
</ul>




<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-zakus" role="tabpanel" aria-labelledby="pills-home-tab"><div class="row"><?php echo $commaprh;?></div></div>
  <div class="tab-pane fade" id="pills-salat" role="tabpanel" aria-labelledby="pills-profile-tab"><div class="row"><?php echo $commaprg;?></div></div>
  <div class="tab-pane fade" id="pills-hot" role="tabpanel" aria-labelledby="pills-contact-tab"><div class="row"><?php echo $commaprf;?></div></div>
</div>
	
	
	
	</div></div>
		
		
			<div class="row">
		<div class="col"><a  class="vbnr animated-button button" id="next6">Закончить заполнение</a>
               </div>
			   </div>
			   </div>
             </div>
</section>




<section class="container-xl" id ="iton">
             <div class="row footer__inner">
	        <div class="col-md-2 redv"><div class="vramecko itogm" style="border: 7px solid #53d7f2;"><img src="http://pandoroom.org/wp-content/uploads/2024/01/galochka-dlya-stola.png" class="img-fluid" style="padding-left: 8px;padding-top: 12px;"></div></div>
	            <div class="col-md-10">
      
	
		<div class="row home-page__gallery">
			  <div class="col-lg-2 redv"></div>
			  <div class="col-lg-10">	
<h3>Ваше мероприятие</h3>

<table class="table" style="" >
  <thead>
    <tr>
    
      
      <th scope="col">Время</th>
      <th scope="col">Цена</th>
	  <th scope="col">Название</th>
	  <th scope="col">Кол-во</th>
	  <th scope="col" class="nev">Действие</th>
    </tr>
  </thead>
  <tbody class="vabor">
    
     
  </tbody>
</table>
<div class="row"><div class="col-md-12"><span><strong>Итого: </strong><span id="sums">0</span> руб.* сумма указана с сервисным сбором 10% за организацию праздника</span></br><p><strong>Обработка заявки на бронирование происходит в течение суток</strong></p><br><p style="
    font-size: 13px;
    padding: 10px;
    border-radius: 10px;
    background-color: #e7fdf1;
">*Онлайн бронирование показывает примерную стоимость вашего праздника. А так же необходимо оформить предзаказ по кухне и бару. После завершения бронирования наш администратор свяжется с вами и уточнит детали бронирования и оплаты. </p></div><div class="col-md-12"><div class="row"><div class="col-md-6"></br><p style="color: #000;">Ваше имя и фамилия</p><input  type="text" id="nas" class="booking-popup__input">
<div class="row" style="margin-top:20px;">
  <div class="col-12">Выберите способ связи:</div>
  <div class="col-6">
    <input type="radio" id="huey" name="drone" value="Звонок"  />
    <label for="huey">Звонок</label>
  </div>

  <div class="col-6">
    <input type="radio" id="dewey" name="drone" value="WhatsUp" />
    <label for="dewey">WhatsApp</label>
  </div>
</div>

</div><div class="col-md-6" style="
    margin-bottom: 24px;
"></br><p style="color: #000;">Ваш контактный номер</p>
<form><div class="form-group"> <input class="form-control phone-field" type="text" name="phone" id="reg_phone" value="" required="" placeholder="+7 (___) ___ __ __"> <small class="form-text text-muted">На этот номер поступит сообщение с кодом в WhatsUp.</small></div><div class="form-group"><div class="row"><div class="col-5 col-md-7"> <input class="form-control" type="text" name="kodpod" id="ko" required="" placeholder="Введите код"></div><div class="col-7 col-md-5"><div type="submit" class="btn btn-secondary kodik" id="kodo">Получить код</div> <small id="smalltext" class="form-text text-muted" style="display:none;">Введите проверочный код</small></div></div></div><div class="form-group"><div type="submit" class="btn btn-secondary zakaz" id="otmsg" style="margin-top:30px;">Отправить заявку</div></div></form>
</div></div></div>

<div class="preloader-555" style="margin:0 auto;display:none;"></div>
			 <div class="good" style="display:none">Ваша заявка отправлена !</div>
			 <div class="error" style="display:none">Ваша заявка не отправлена проверьте корректность заполнения полей!</div> 
								  </div>
								  </div>
		
		
			   </div>
             </div>
</section>


 <div class="modal fade booking-popup" id="stolPopup1" tabindex="-1" aria-labelledby="questPopup1Label" aria-hidden="true" style="--bs-modal-width: auto;">
                      <div class="modal-dialog booking-popup__dialog modal-dialog-centered">
                        <div class="modal-content booking-popup__content">
                          <div class="modal-header booking-popup__header border-0">
                            
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                          </div>
                          <div class="modal-body booking-popup__body">
                            
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="row">
                                  <div class="col-md-6">
                                     <div class="slider">
                <div class="mySwiper swiper" >
                  <div class="swiper-wrapper" id="slk">
				 					
								 </div>
    
                  <div class="swiper-pagination"></div>
    
                </div>
                <button class="swiper-button-prev animated-button arrow-button arrow-button--left-outside"></button>
                <button class="swiper-button-next animated-button arrow-button arrow-button--right-outside"></button>
              </div>	
									
								</div>
                                  <div class="col-md-6"><h2 class="booking-popup__title" id="stolPopup1Label"></h2>
                                    <div class="row" id="slkk" >
                                    </div>
                                    <div class="row"><p id="dis" style="padding-top: 30px;"></p><div class="stolmerzz" style="
   
    margin-top: 10%;
"></div> </div>
                                  </div>
                                </div>
                               
                              </div>
                            
                            </div>
                            
                          </div>
  </div>
                          </div>
</div>
              




</main>







  <footer class="footer">
    <div class="container-xl">
      <div class="row footer__inner">
        <div class="col-md-6 col-lg-3 footer__left">
          <a href="/">
            <img src="https://pandoroom.org/wp-content/themes/pandoroom/imgsz/logo.svg" class="img-fluid footer__logo" alt="Логотип Pandoroom">
          </a>
          <span class="footer__legal-data">© Pandoroom 2024, Все права защищены</span>
          <a href="#" class="footer__legal-data">Политика конфиденциальности</a>
          <a href="#" class="footer__legal-data">Дополнительное соглашение о соблюдении мер по снижению рисков распространения COVID-19</a>
        </div>
        <div class="col-md-6 mt-4 mt-md-0 col-lg-4 footer__middle">
          <ul class="row footer__nav-list mb-2 mb-lg-0">
            <li class="mb-2 mb-md-4 col-sm-4 footer__nav-item">
              <a href="#" class="footer__nav-link">Квесты</a>
            </li>
            <li class="mb-2 mb-md-4 col-sm-4 footer__nav-item">
              <a href="#" class="footer__nav-link">Детям</a>
            </li>
            <li class="mb-2 mb-md-4 col-sm-4 footer__nav-item">
              <a href="#" class="footer__nav-link">Праздник</a>
            </li>
            <li class="mb-2 mb-md-4 col-sm-4 footer__nav-item">
              <a href="#" class="footer__nav-link">Кафе</a>
            </li>
            <li class="mb-2 mb-md-4 col-sm-4 footer__nav-item">
              <a href="#" class="footer__nav-link">Меню</a>
            </li>
            <li class="mb-2 mb-md-4 col-sm-4 footer__nav-item">
              <a href="#" class="footer__nav-link">Контакты</a>
            </li>
            <li class="mb-2 mb-md-4 col-sm-4 footer__nav-item">
              <a href="#" class="footer__nav-link">Активности</a>
            </li>
            <li class="mb-2 mb-md-4 col-sm-4 footer__nav-item">
              <a href="#" class="footer__nav-link">Правила</a>
            </li>
            <li class="mb-2 mb-md-4 col-sm-4 footer__nav-item">
              <a href="#" class="footer__nav-link">Дисконтные карты</a>
            </li>
            <li class="mb-2 mb-md-4 col-sm-4 footer__nav-item">
              <a href="#" class="footer__nav-link">Акции и новости</a>
            </li>
            <li class="mb-2 mb-md-4 col-sm-4 footer__nav-item">
              <a href="#" class="footer__nav-link">Квесты</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-5 footer__right align-items-lg-end text-lg-end">
          <a href="tel:#" class="footer__phone">+7(423)202-26-96</a>
          <a href="mailto:#" class="footer__email">info@pandoroom.org</a>
          <div class="footer__social-links mt-3 mt-sm-5">
            <a href="#" class="footer__social">
              <img src="../imgs/icons/soc1.svg" alt="">
            </a>
            <a href="#" class="footer__social">
              <img src="../imgs/icons/soc2.svg" alt="">
            </a>            
            <a href="#" class="footer__social">
              <img src="../imgs/icons/soc3.svg" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
      mousewheel: true,
      keyboard: true,
    });
  </script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>

<style>
.container-xl{max-width:1240px}.footer__inner.vz{background:linear-gradient(180deg,#fff 0%,#f7fbff 100%);border:1px solid #dbe8f4;border-radius:18px;padding:18px 14px;margin-bottom:18px;box-shadow:0 8px 22px rgba(20,55,90,.06)}
.main__title.quest-selection-page__title{font-weight:800;color:#1f3650;letter-spacing:.2px}
.booking-popup__legend{background:#eef7ff;border:1px solid #d6eaff;padding:10px 14px;border-radius:12px;color:#3c5974}
.vramecko{border-radius:14px!important;box-shadow:0 6px 16px rgba(0,0,0,.08)}
.animated-button.button{border-radius:12px!important}
.vibmn{background:#f2fbf4;border:1px solid #d6f0dd;padding:10px;border-radius:12px}
#iton .table{background:#fff;border-radius:12px;overflow:hidden}
</style>
<script src="https://pandoroom.org/wp-content/themes/pandoroom/js/jquery.maskedinput.min.js"></script>
<script defer src="<?php bloginfo('template_directory'); ?>/scriptsz/scriptviar.js?v=<?php echo time(); ?>"></script>
  <script  src="<?php bloginfo('template_directory'); ?>/jss/standart.js"></script>
<script>
document.querySelector('.mask-phones').onkeydown = function(e){
inputphone(e,document.querySelector('.mask-phones'))
}
//-- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --


//Функция маски формат +7 (
function inputphone(e, phone){
function stop(evt) {
    evt.preventDefault();
}
let key = e.key, v = phone.value; not = key.replace(/([0-9])/, 1)

if(not == 1 || 'Backspace' === not){
if('Backspace' != not){ 
    if(v.length < 2 || v ===''){phone.value= '79'}   
	  if(v.length > 10){stop(e)}
    }
}else{stop(e)}  }
</script>
<style>
.nav-pills .nav-link {
    background: 0 0;
    border: 0;
    border-radius: var(--bs-nav-pills-border-radius);
    margin-right: 11px;
    /* margin-left: 11px; */
    margin-left: 8px;
    background-color: #a4d013;
    color: #fff;
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: var(--bs-nav-pills-link-active-color);
    background-color: #ffbd3c;
}
progress {
  /* Positioning */
  position: absolute;
  left: 0;
  top: 0;

  /* Dimensions */
  width: 100%;
  height: 50px;

  /* Reset the appearance */
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;

  /* Get rid of the default border in Firefox/Opera. */
  border: none;

  /* Progress bar container for Firefox/IE10+ */
  background-color: transparent;

  /* Progress bar value for IE10+ */
  color: #00D38D;
}

progress::-webkit-progress-value {
  background-image: url("http://pandoroom.org/wp-content/uploads/2024/05/444.png");
}

progress::progress-value {
background-image: url("http://pandoroom.org/wp-content/uploads/2024/05/444.png");}

.progress-container {
  position: relative;
  background: #fff;
  height: 50px;
  border-radius: 6px;
  overflow: hidden;margin-bottom: 15px;
}
#target.new-opacity:before {
  w
}
.progress-container::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  
  background: turquoise;
}


.progress-label {
  position: relative;
}

@property --num {
  syntax: "<integer>";
  initial-value: 0;
  inherits: false;
}



.progress-element--html .progress-label::after {
  animation: progress-text-html 1s ease-in forwards;
}

.progress-element--css .progress-label::after {
  animation: progress-text-css 1s ease-in forwards;
}

.progress-element--javascript .progress-label::after {
  animation: progress-text-javascript 1s ease-in forwards;
}

@keyframes progress-html {
  to {
    width: 95%;
  }
}

@keyframes progress-css {
  to {
    width: 80%;
  }
}

@keyframes progress-javascript {
  to {
    width: 65%;
  }
}

@keyframes progress-text-html {
  to {
    --num: 95;
  }
}

@keyframes progress-text-css {
  to {
    --num: 80;
  }
}

@keyframes progress-text-javascript {
  to {
    --num: 65;
  }
}
.kvestm,
.tortikm,
.showm,
.ukrashm,
.itogm{cursor:pointer;}
#next1,#next2,#next3,#next4,#next5{cursor:pointer;}

.quest-selection-page__title {
    margin-bottom: 16px;
}
.stolmer{width: 50%;
  }
.home-page__introduction-slide {
    max-height: fit-content !important;
}
.modal.show .modal-dialog {
    margin-right: 30px;
}
.noits{padding: 25px;
    margin-top: 25px;
    background-color: #d4d4d4;
    font-size: 20px;
    border-radius: 5px;}
.button__icon{width: 35px;
    padding-left: 5px;
    margin-left: 15px;}
.net{display:none !important;}
.netx{display:none !important;}
.netm{display:none !important;}
.pok{display:none !important;}
.poks{display:none !important;}
.dellf{
	cursor: pointer!important;
	color:red !important;
	
}
.footer__inner {
    padding-top: 30px !important;
    padding-bottom: 5px !important;
}
.button{cursor: pointer;min-height: 38px;}
.prik{text-decoration: none;
    color: #000;}
	a.prik:hover{padding-left:10px;}
.vibmn{ margin-top: 135px;z-index: 1000000;
    background-color: #eae9e9d9;
    box-shadow: 1px 1px 7px 0px;
    text-align: left;
    width: fit-content;
    border-radius: 25px;
    margin-left: -20px;
    padding-top: 0px;
    position: fixed;
    top: 98px;
    left: 0px;
    padding-left: 34px;
    padding-bottom: 25px;
    padding-right: 25px;}
.vz{    background-image: url(https://pandoroom.org/ted/razdel.svg);
    background-repeat: repeat-y;
    background-position-x: 62px;}
.vramecko {
    text-align: center;
    background-color: #fff;
    font-weight: 600;
    font-size: 19px;
    vertical-align: middle;
    border-radius: 150px;
    border: 7px solid #ffc100;
    width: 100px;
    height: 100px;
    padding-top: 13px;
}	
.redvv{ margin-top:15px;
 background: #f9b001 url('http://pandoroom.org/wp-content/uploads/2022/10/Frame-1.png');
 border-radius: 15px;
 position: relative;
 z-index: 1;padding-left: 41px;padding-bottom: 20px;       background-position: right 50px bottom 50px;
 0px: ;
 background-repeat: no-repeat;}
.vse{background-color: #a0bf39;
    border-radius: 6px;
    display: flex;
    min-height: -22px;
    padding: 10px 5px;
    color:#fff;
    border: 0;
    margin-bottom: 4px;
    font-size: 12px;    width: fit-content;
    margin-left: 13px;}
	.zapry{margin: 0 auto !important;
    width: fit-content !important;
    padding: 5px;
    background-color: #a2a795;;
    border-radius: 10px;text-align: center;    width: fit-content;
    margin: 0 auto;}
.quests-info__description--genre:before {
   width:20px;
    height:20px;
    margin-right: 8px;
    background-color: #98c931;
    background-size: contain;
    border-radius: 4px;
}
.quests-info__description--genre {
    font-size: 15px;
    align-items: center;
    justify-content: left;
}
div.button{padding: 7px 9px;
    min-height: 30px;}
 @media (max-width: 770px) {
	 


	span.fact-card__counter {
    font-weight: 700;
    font-size: 11px;
    line-height: 11px;
    color: #a0bf39;
    margin-top: 0px;
}
.table tbody td {
	text-align: left;
	border: none;
	padding: 10px 15px;
	font-size: 10px;
	vertical-align: top;
}	

div.fact-card {
    text-align: center;padding: 16px 16px;
}
a.prik {
    text-decoration: none;
    color: #000;
    font-size: 11px;
}
div.uls{display:inline-block;}
.nev{display:none;}
	div.vibmn {
      margin-top: 135px;
    z-index: 1000000;
    background-color: #a4d013;
    box-shadow: 1px 1px 7px 0px;
    text-align: left;
    width: 100%;
    border-radius: 0px;
    margin-left: 0px;
    padding-top: 0px;
    position: fixed;
    top: auto;
    left: 0px;
    padding-left: 18px;
    padding-bottom: 25px;
    padding-right: 25px;
    bottom: 0px;
}
	 a#next6{margin:0 auto;margin-top: 35px;}
	 div.ggsh{    height: auto ! important;}
	 div.vbnr {
    width: fit-content !important;
    margin: 0 auto;
    margin-top: 50px;
    /* padding: 15px 15px 15px 15px; */
    text-decoration: none;
}
	 div.vz {
 
	 background: none;text-align: center;
	 background-image: url(https://pandoroom.org/ted/razdel.svg);
    background-repeat: repeat-y;
        background-position-x: 50% !important;
	 }
	 div#vibtorts,div#vibkv,div#vibzali,div#shvib,div#ukrvib,div#starte{background-color: #fff;}
	  
div.vramecko{
	margin: 0 auto;	
} 

	 #dtolvibx{margin-top: 10px;}
   
.gallery-card__name {
    display: block !important;
    font-size: 17px !important;;
    line-height: revert;
}

   input.zn{
		width: 54px !important;
}
.minus{    width: 10px !important;}
.plus{    width: 10px !important;}
.sels{ width: 116px !important;}
fact-card__counter {
    font-weight: 700;
    font-size: 14px !important;;
    line-height: 19px;
    color: #a0bf39;
    margin-top: 0px;
}
  }
.nomera {
    padding: 0px 11px !important;
    background: #90c632;
    width: fit-content;
    border-radius: 5px;
    
}
.booking-popup__legend {
 
    font-size: 15px !important;
   
}
.animated-button {
    
    font-size: 12px !important;
}
.topx{width: 100%;
    background: #fff;
    border: 1px solid #a4d013;
    border-radius: 4px;
    font-weight: 400;
    font-size: 13px;
    line-height: 21px;
    letter-spacing: .03em;
    color: #222;
    min-height: 38px;
    padding: 6px 7px;
    margin: 0px;}
	
	
.vbnl{width: fit-content !important;}
.vbnr{width: fit-content !important;}
.vbnn{ margin-top: 25px;}
.vbns{    width: fit-content !important;
   
    margin: 0 auto;
    background-color: #fff;
    color: #000;
    border: 1px dotted #a2cc32;}
.scrit{display:none}
.sl{display:none}
.sll{display:none}
.scritt{display:none}
#ukrvib{display:none}
#shvib{display:none}
#vibtorts{display:none}
#vibkv{display:none}
#vibzali{display:none}
#iton{display:none}
.booking-popup__legend {
    font-weight: 600;
    font-size: 20px;
    color: #222;
    margin-top: 2px !important;
    margin-bottom: 2px !important;
}
.nomera {
    padding: 5px 23px;
    background: #90c632;
    width: fit-content;
    border-radius: 5px !important;
    margin-bottom: 5px !important;
}
.mt-3 {
    margin-top: 4rem!important;
}
.fact-card__counter {
    font-weight: 700;
    font-size: 14px;
    line-height: 19px;
    color: #a0bf39;
    margin-top: 23px;
}
.gallery-card__name {
    display: block !important;
}
.stols{margin-top: 15px !important;}
.line-time {
    position: relative;
    width: 100%;
    overflow: hidden;
    margin-bottom: 25px
}

.items-times-time {
    position: absolute;
    right: 0;
    text-align: right;
    font-size: 12px;
    font-weight: 400;
    line-height: 16px
}

.items-times-text {
    position: absolute;
    font-size: 12px;
    font-weight: 400;
    line-height: 16px;
    min-width: 170px;
    pointer-events: none
}

.items-times-text,.items-times-time {
    opacity: .6;
    top: 11px
}

.time-swiper {
    padding-top: 38px;
    padding-bottom: 24px;
    width: 5px;
    overflow: visible
}

.time-swiper {
    left: -2px
}

.time-step {
    width: 11px;
    color: #fff;
    height: 12px;
    display: inline-block;
    vertical-align: top;
    cursor: pointer
}

.time-swiper .swiper-wrapper {
    left: -3px
}

.time-step>span {
    display: block;
    width: 1px;
    height: 100%;
    margin: 0 auto;
    font-size: 0;
    background: #fff;
    opacity: .7
}

.time-step-30 {
    height: 19px
}

.time-step.time-step-0 {
    height: 24px;
    z-index: 1
}

.time-step:before,.time-before:before,.time-after:before {
    content: '';
    width: 100%;
    height: 45px;
    position: absolute;
    top: -10px
}

.time-text {
    font-size: 20px;
    font-weight: 400;
    position: relative;
    right: -5px
}

.time-info {
    text-align: center;
    color: #fff;
    margin-top: 0;
    position: absolute;
    z-index: 4;
    left: 0;
    right: 0;
    top: 1px;
    pointer-events: none
}

.time-text span {
    font-weight: 600
}

.time-point {
    width: 3px;
    height: 19px;
    position: absolute;
    left: 0;
    right: 0;
    top: 30px;
    margin: auto;
    transition: height .2s ease-in-out
}

.tp-1 {
    display: block;
    width: 100%;
    height: 100%;
    background: #fff;
    border-radius: 3px
}

.tp-2 {
    background: #fff;
    width: 7px;
    height: 7px;
    position: absolute;
    border-radius: 50%;
    left: -2px;
    top: -3px
}

.time-point[data-type="0"] {
    height: 31px
}

.time-point[data-type="30"] {
    height: 26px
}

.time-step>b {
    pointer-events: none;
    font-size: 10px;
    font-weight: 400;
    position: absolute;
    top: 23px;
    transform: translateX(-50%);
    left: 50%;
    border-radius: 2px;
    z-index: 10;
    display: none;
    opacity: .7
}

.time-step-0 b {
    display: block
}

.time-step.time-step-before b {
    opacity: .4
}

.time-before,.time-after {
    position: absolute;
    right: 100%;
    right: calc(100% + 2px);
    top: 0;
    width: 1500px;
    height: 12px
}

.time-after span,.time-before span {
    display: block;
    width: 100%;
    height: 100%;
    background: #fff;
    opacity: .17
}

.time-after {
    left: 100%;
    left: calc(100% + 2px);
    right: auto
}

.time-before b,.time-after b {
    position: absolute;
    right: 0;
    top: 13px;
    font-weight: 400;
    font-size: 11px;
    opacity: .4;
    display: none !important
}

.time-after b {
    left: 0;
    right: auto
}

.time-step-before>span {
    opacity: .25
}
.fact-card>img {
    margin-top: -70px;
}
.stols{border-radius: 15px;
    box-shadow: 0px 1px 20px 2px #eeeded;
    padding: 25px;}
.nomera{    padding: 5px 23px;
    background: #90c632;
    width: fit-content;
    border-radius: 5px;}
.gallery-card {
    position: relative;
    margin: 20px 5px 0 5px;
    height: 218px;
    border-radius: 10px;
    background-size: cover;
    background-position: center center;
    outline: 2px solid #A0BF39;
    outline-offset: 3px;
}
.quests-info__price, .quests-info__green {
    font-weight: 700;
     font-size: 16px;
}
.quests-info__time {
    background-color: #222222;
    border-radius: 6px;
    display: flex;
    min-height: -22px;
    padding: 10px 5px;
    color: white;
    border: 0;
    margin-bottom: 4px;
    font-size: 12px;
}
.quest-selection-page__price{
    margin-top: 15px;
    margin-bottom: 10px;
}
.quest-selection-page__time-row{border-right: 1px solid #606060;}
.fact-card>img{ margin: 0 auto;}
.preloader-5 {
    display: block;
    position: relative;
    width: 150px;
    height: 150px;
    margin: 30px auto;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #a0bf39;
    animation: preloader-5-spin 2s linear infinite;
}
.preloader-5:before {
    content: "";
    position: absolute;
    top: 5px;
    left: 5px;
    right: 5px;
    bottom: 5px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #a0bf39;
    animation: preloader-5-spin 3s linear infinite;
}
.gallery-card__name{display:none}
.preloader-5:after {
    content: "";
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #a0bf39;
    animation: preloader-5-spin 1.5s linear infinite;
}
@keyframes preloader-5-spin {
    0%   {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

.table thead tr th:first-child {
	border-radius: 8px 0 0 8px;
}
.table thead tr th:last-child {
	border-radius: 0 8px 8px 0;
}

.table tbody tr:nth-child(even){
	background: #f3f3f3;
}
.table tbody tr td:first-child {
	border-radius: 8px 0 0 8px;
}
.table tbody tr td:last-child {
	border-radius: 0 8px 8px 0;
}
.preloader-555 {
    display: block;
    position: relative;
    width: 150px;
    height: 150px;
    margin: 30px auto;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #a0bf39;
    animation: preloader-5-spin 2s linear infinite;
}
.preloader-555:before {
    content: "";
    position: absolute;
    top: 5px;
    left: 5px;
    right: 5px;
    bottom: 5px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #a0bf39;
    animation: preloader-5-spin 3s linear infinite;
}
.gallery-card__name{display:none}
.preloader-555:after {
    content: "";
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #a0bf39;
    animation: preloader-5-spin 1.5s linear infinite;
}
@keyframes preloader-555-spin {
    0%   {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>
</body>
<script src="https://pandoroom.org/wp-content/themes/pandoroom/js/jquery.maskedinput.min.js"></script>
<script>
$('#reg_phone').mask('79999999999');
</script>
</html>
<?php

}
?>