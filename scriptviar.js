$(document).ready(function() {


});



$(".kodik").click(function(e){
	
	regphone=document.getElementById('reg_phone').value;
	cer=regphone.replace(/^\s+|\s+$/g,'');
	kod=$('#offr').text();
	
	$.ajax({
		url:"/wacap.php?phone="+regphone+"&kod="+kod+"&ok=2",
		success:function(html){

	
			}
			
			
			}); 
			

			
			e.preventDefault();
			
			
			
			
			});	




function createScrollTopListener() {
  const scrollTopButton = document.createElement("button");
  scrollTopButton.className = "arrow-button animated-button arrow-button--scroll-top";
  scrollTopButton.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  })
  document.body.appendChild(scrollTopButton);

  const toggleScrollTopButton = () => {
    if (scrollY >= 600) {
      scrollTopButton.style.opacity = "1";
    } else {
      scrollTopButton.style.opacity = "0";
    }
  }

  toggleScrollTopButton();
  window.addEventListener("scroll", toggleScrollTopButton)
}
createScrollTopListener();

function addWaveToButtons() {
  const createWave = (event) => {
    const button = event.currentTarget;

    const circle = document.createElement("div");
    const diameter = Math.max(button.clientWidth, button.clientHeight);
    const radius = diameter / 2;

    circle.classList.add("wave");
    circle.style.width = circle.style.height = `${diameter}px`;
    circle.style.left = `${event.offsetX - radius}px`;
    circle.style.top = `${event.offsetY - radius}px`;

    setTimeout(() => {
      circle.remove();
    }, 1000);

    button.appendChild(circle);
  }

  const buttons = document.querySelectorAll(".animated-button");
  buttons.forEach(button => {
    button.addEventListener("click", createWave);
  })
}
addWaveToButtons();
$(document).on('click','.quests-info__time', function(){


		names=$(this).attr('data-nazv');
	    tima=$(this).attr('data-time');
	    vrem=$(this).attr('data-calend');
	    sena=$(this).attr('data-prise');
		dop=$(this).attr('data-dop');
		animk=$(this).attr('data-dopa');
		ogr=$(this).attr('data-ogr');
		ext=$(this).attr('data-ank');
		kartinka=$(this).attr('data-cart');
		adress=$(this).attr('data-adress');
		$('#questPopup1Label').text(names);
		$('#questPopupphoto').css('background-image', 'url(' + kartinka + ')');
		$('#questPopupdate').text(vrem);
		$('#questPopuptime').text(tima);
		$('#questPopupstoim').text(sena);
		$('#questPopupdopigr').children().first().next().val(dop);
		$('#questPopupdopigr').children().first().next().next().val(dop*2);
		$('#cena').text(sena);
		$('#textus').text(ext);
		$('#dopcen').text(dop);
		
        $('#questPopupadress').text(adress);
		$('#get_cena').val(sena);
		$('#anzzv').val(animk);
		df=$(this).attr("data");
		
		var dopp = $(this).attr("data");
   var vixodn = $(this).attr("data-calend"); // "2026-02-26"
var datexx = new Date(vixodn);
var dayxx = datexx.getDay();

if ((dopp == 15961 || dopp == 15970) && (dayxx==0 || dayxx==6)) {

    $(".vartoovr, .vartoovrvix, .vartoovrp,#questPopupanim, .vartoovrvixp").css({'display':'none'});

    if (dopp == 15970){
        $(".vartoovrvix").css({'display':'block'});
        $(".vartoovrvixp").css({'display':'none'});
    }
    if (dopp == 15961){
        $(".vartoovrvixp").css({'display':'block'});
        $(".vartoovrvix").css({'display':'none'});
    }

    $("#questPopupanim").css({'display':'none'});
   
    $(".varone").css({'display':'none'});
    

} else if (dopp == 15970 || dopp == 15961) {

    $(".vartoovr, .vartoovrvix, .vartoovrp, #questPopupanim, .vartoovrvixp").css({'display':'none'});

    if (dopp == 15970){
        $(".vartoovr").css({'display':'block'});
        $(".vartoovrp").css({'display':'none'});
    }
    if (dopp == 15961){
        $(".vartoovrp").css({'display':'block'});
        $(".vartoovr").css({'display':'none'});
    }

    $("#questPopupanim").css({'display':'none'});
    
    $(".varone").css({'display':'none'});
   
}
		
		
		
		
		if(df==13304 || df==8341 || df==14677){$('#questPopupanim').show();}else{$('#questPopupanim').show();}
	var get='?loc='+$(this).attr("data")+'&derts='+$(this).attr("data-calend")+'&uv='+$(this).attr("data-nap")+'&uvl='+$(this).attr("data-otz")+'&time='+$(this).attr("data-calend")+" "+$(this).attr("data-time")+'&client='+$("#user_logged_in").attr("data")+'&price='+$(this).attr("data-prise");
	$("#get_param").val(get);
		
			});	

	function recalcQuestPopupStoim() {
    // аниматор
    var dop = $("#questPopupanim").val() || 0;

    // базовая цена из #cena
    var it = $('#cena').text() || 0;

    // доп. игроки — берём значение ТОЛЬКО у того селекта, который сейчас видим
    var players = 0;

    if ($("#questPopupdopigr").is(":visible")) {
        players = $("#questPopupdopigr").val() || 0;
    } else if ($("#dopigraarena").is(":visible")) {
        players = $("#dopigraarena").val() || 0;
    } else if ($("#dopigraarenavix").is(":visible")) {
        players = $("#dopigraarenavix").val() || 0;
    } else if ($("#dopigrapark").is(":visible")) {
        players = $("#dopigrapark").val() || 0;
    } else if ($("#dopigraparkvix").is(":visible")) {
        players = $("#dopigraparkvix").val() || 0;
    }

    var sda   = players * 1;
    var sdda  = dop * 1;
    var sddda = it * 1;

    $('#questPopupstoim').text(sda + sdda + sddda);
}

// один обработчик на все изменения
$(document).on('change', '#questPopupdopigr, #dopigraarena, #dopigraarenavix, #dopigrapark, #dopigraparkvix, #questPopupanim', recalcQuestPopupStoim);


$("#stoliki").click(function(e){
	
	ach=document.getElementById('nax').value;
	

    date=document.getElementById('datz').value;
	if ($('#loung').is(':checked')){
	            var zal='loung';
        } else {
	             var zal='4'; 
				 }
	
	    $('.stolsz').empty();
		$('.stolsz').hide();
		$('.preloader-55').show();


	$.ajax({
		url:"/svstolviar.php?dat="+date+"&start="+ach+"&zal="+zal+"&ok=2",
		success:function(result){

			$('.preloader-55').hide();
	        
			
			
			  jq_json_obj = $.parseJSON(result); //Convert the JSON object to jQuery-compatible

      if(typeof jq_json_obj == 'object'){ //Test if variable is a [JSON] object
        jq_obj = eval (jq_json_obj); 

        //Convert back to an array
        jq_array = [];
        for(elem in jq_obj){
            jq_array.push(jq_obj[elem]);
        }
		
		var strJSON = jq_array[0];

		for (i = 0; i < jq_array.length; i++) {
			
			
			if(jq_array[i]["zal"]==1){zals="Кафе";}else if(jq_array[i]["zal"]==2){zals="Лаунж";}else if(jq_array[i]["zal"]==3){zals="Кидс";}
			
          $(".stolsz").show();
		  $(".stolsz").append('<div class="col-lg-6 stols"><div class="row" style="color: #000;"><div class="col-lg-5"> <img  class="testov"  style="width: 100%;" src="'+jq_array[i]["kar"]+'"/></div><div class="col-lg-3"><legend class="booking-popup__legend">Зал '+zals+'</legend><div class="nomera">стол '+jq_array[i]["stol"]+'</div><span><img class="button__icon" src="https://pandoroom.org/wp-content/themes/pandoroom/imgs/person.2.fill.png" alt="">'+jq_array[i]["vm"]+'</span></div><div class="col-lg-4"><div class="animated-button button stolmer"data-zal="Зал '+zals+' стол '+jq_array[i]["stol"]+'" data-uy="'+jq_array[i]["id"]+'" data-vm="'+jq_array[i]["vm"]+'">Выбрать</div></div></div></div>');
			
			
			
			
			
			}}
			

			}
			
			
			}); 
			

			
			e.preventDefault();
			
			
			
			
			});	
		


$(".kvestm,#next1").click(function(e){
	
   var vrem=$("#dtolvibx").attr("data-start");
   var datr=$("#dtolvibx").attr("data-dates");
   var vnm=$("#vozr").val();
   var kvz=$("#kdet").val();
   var kdet=$("#kgos").val();
	if(vrem==""){$("#nax").css("border","1px solid red");}else{$("#nax").css("border","1px solid #a4d013");}
	if(datr==""){$("#datz").css("border","1px solid red");}else{$("#datz").css("border","1px solid #a4d013");}
	if(vnm==""){$("#vozr").css("border","1px solid red");}else{$("#vozr").css("border","1px solid #a4d013");}
	if(kvz==""){$("#kdet").css("border","1px solid red");}else{$("#kdet").css("border","1px solid #a4d013");}
	if(kdet==""){$("#kgos").css("border","1px solid red");}else{$("#kgos").css("border","1px solid #a4d013");}
	if(vrem!=='' & datr!=='' & vnm!=='' & kvz!=='' & kdet!==''){
	
	
	$('#vibkv').show();
	$('html, body').animate({
 scrollTop: $("#vibkv").offset().top // класс объекта к которому приезжаем
 }, 500); 
	
	

		
	
		$("div.preloader-5").show();

		var dats =$(this).attr('data-dates');
	    var start =$(this).attr('data-start');
	    var stop =$(this).attr('data-stop');
	

      var get='?date='+dats+'&st='+start+'&sp='+start+'';
      wurl=location.href;

  $.ajax({
	  url:location.href+get,
      success:function(html){

           $("#kvests").html(html);
           $("#kvests").removeClass("in_process");
		   $("div.preloader-5").hide();
		   
		
		}
		   
		   
		   
		   });e.preventDefault();
	
	
	
	$('#vibkv').show(500);
	}else{
			$('html, body').animate({
 scrollTop: $("#starte").offset().top // класс объекта к которому приезжаем
 }, 500); 
		
	}
	
});


$("#kvestvib").click(function(e){
	

		
	
		$("div.preloader-5").show();

		var dats =$(this).attr('data-dates');
	    var start =$(this).attr('data-start');
	    var stop =$(this).attr('data-stop');
	

      var get='?date='+dats+'&st='+start+'&sp='+start+'';
      wurl=location.href;

  $.ajax({
	  url:location.href+get,
      success:function(html){

           $("#kvests").html(html);
           $("#kvests").removeClass("in_process");
		   $("div.preloader-5").hide();
		   
		
		}
		   
		   
		   
		   });e.preventDefault();
	
	$('#vibzali').show(500);
	
	$('#vibkv').show(500);
	
});
// --- Глобальные переменные (держи их 1 раз на странице) ---
// --- Глобальные переменные (держи их 1 раз на странице) ---
var currentStolRequest = null;
var stolReqToken = 0;

$(document).on('click', '#dtolvibx', function(e){

    var $btn  = $(this);
    var vrem  = $btn.attr("data-start") || "";
    var datr  = $btn.attr("data-dates") || "";

    // ==============================
    //  БЛОКИРОВКА ДАТ (alert + запрет)
    // ==============================
    var closedDates = ["31.12.2025", "01.01.2026", "12.01.2026"];

    function normalizeDate(d) {
        if (!d) return "";
        d = ("" + d).trim();
        if (/^\d{4}-\d{2}-\d{2}$/.test(d)) {
            var p = d.split("-");
            return p[2] + "." + p[1] + "." + p[0];
        }
        return d;
    }

    var datrNorm = normalizeDate(datr);

    if (closedDates.indexOf(datrNorm) !== -1) {
        alert("В эту дату заведение не работает и бронирование невозможно. Выберите другую дату.");

        $('.stolsz').empty().hide();
        $('.next-stols').remove();
        $('.stolszl').empty().hide();
        $('.stolsk').empty().hide();
        $('#jof').empty();
        $('.preloader-5').hide();

        return false;
    }
    // ==============================

    // ❌ возраст больше не используем (зависимости нет)
    // var vnm  = $("#vozr").val();
    var vnm = 0;

    var kvz  = $("#kdet").val();
    var kdet = $("#kgos").val();
    var kol  = (kvz*1) + (kdet*1);

    // ✅ здесь принудительно работаем только с залом viar
    var zal = 4;

    // чистим интерфейс перед новым поиском
    $('.stolsz').empty().hide();
    $('.next-stols').remove();
    $('.stolszl').empty().hide();
    $('.stolsk').empty().hide();
    $('#jof').empty();

    // подсветка обязательных
    if(vrem==="")    { $("#nax").css("border","1px solid red"); } else { $("#nax").css("border","1px solid #a4d013"); }
    if(datrNorm===""){ $("#datz").css("border","1px solid red"); } else { $("#datz").css("border","1px solid #a4d013"); }

    // ❌ vozr больше не обязательный
    // if(vnm==="")     { $("#vozr").css("border","1px solid red"); } else { $("#vozr").css("border","1px solid #a4d013"); }

    if(kvz==="")     { $("#kdet").css("border","1px solid red"); } else { $("#kdet").css("border","1px solid #a4d013"); }
    if(kdet==="")    { $("#kgos").css("border","1px solid red"); } else { $("#kgos").css("border","1px solid #a4d013"); }

    // ✅ возраст убрали из условия
    if (vrem!=='' && datrNorm!=='' && kvz!=='' && kdet!=='') {

        $('.preloader-5').show();

        // --- защита от гонки запросов ---
        stolReqToken++;
        var myToken = stolReqToken;

        if (currentStolRequest && currentStolRequest.readyState !== 4) {
            try { currentStolRequest.abort(); } catch(err) {}
        }

        // --- анти-кэш ---
        var ts = Date.now();

        currentStolRequest = $.ajax({
            url: "/svstolviar.php?dat="+encodeURIComponent(datrNorm)
                +"&start="+encodeURIComponent(vrem)
                +"&stop="+encodeURIComponent(vrem)
                +"&kol="+encodeURIComponent(kol)
                +"&voz="+encodeURIComponent(0)              // ✅ всегда 0 (возраст не влияет)
                +"&zal="+encodeURIComponent(zal)           // ✅ только viar
                +"&ok=2"
                +"&t="+ts,
            cache: false,
            method: "GET",
            success: function(result){

                if (myToken !== stolReqToken) return;

                $('.preloader-5').hide();

                var jq_json_obj;
                try {
                    jq_json_obj = (typeof result === "string") ? $.parseJSON(result) : result;
                } catch(e) {
                    jq_json_obj = null;
                }

                if (typeof jq_json_obj === 'object' && jq_json_obj) {

                    var message    = jq_json_obj.message || "";
                    var stols      = jq_json_obj.stols || [];
                    var next_time  = jq_json_obj.next_time || "";
                    var next_stols = jq_json_obj.next_stols || [];

                    $('.stolsz').empty().show();

                    if (stols.length > 0) {
                        $(".stolsz").append(
                            '<p class="msg-block" style="font-size:18px;padding:15px;background:#e7fdf1;border-radius:10px;">'
                            + message +
                            '</p>'
                        );
                        // ✅ обычные столы — передаём выбранное время vrem
                        renderStols(stols, ".stolsz", vrem);
                    }
                    else if (next_stols.length > 0) {
                        $(".stolsz").append(
                            '<p class="msg-block" style="font-size:18px;padding:15px;background:#fff3cd;border-radius:10px;">'
                            + message + ' Ближайшее доступное время: <b>' + next_time + '</b>'
                            + '</p>'
                        );
                        $(".stolsz").after('<div class="next-stols row" style="margin-top:20px;"></div>');
                        // ✅ ближайшие столы — передаём next_time
                        renderStols(next_stols, ".next-stols", next_time);
                    }
                    else {
                        $(".stolsz").append(
                            '<p class="msg-block" style="font-size:18px;padding:15px;background:#f8d7da;border-radius:10px;">'
                            + message +
                            '</p>'
                        );
                    }
                }

                $(".next_dates").removeClass("date_selected");
                $('#vibzali').show(500);
                $('html, body').animate({ scrollTop: $("#vibzali").offset().top }, 500);
            },
            error: function(xhr, status){

                if (status === "abort") return;
                if (myToken !== stolReqToken) return;

                $('.preloader-5').hide();

                $('.stolsz').empty().show().append(
                    '<p class="msg-block" style="font-size:18px;padding:15px;background:#f8d7da;border-radius:10px;">'
                    + 'Ошибка загрузки свободных столов. Попробуйте ещё раз.'
                    + '</p>'
                );
            }
        });
    }

    // ✅ РЕНДЕР СТОЛОВ: выводим ТОЛЬКО viar, без возраста
    function renderStols(array, container, timeSlot) {
        for (var i = 0; i < array.length; i++) {

            var zals = "";
            var kzals = "";

            // ✅ оставляем только зал viar (остальные — continue)
            // ВАЖНО: если у тебя в ответе API zal приходит НЕ "4", а строкой "viar" — скажи, я подстрою под твой формат.
            if (array[i]["zal"] == 4 || array[i]["zal"] === "viar") {
                zals = "Viar";
                kzals = "viar";
            } else {
                continue;
            }

            $(container).append(
                '<div class="col-lg-6 '+kzals+' stols">' +
                    '<div class="row" style="color:#000;">' +
                        '<div class="col-lg-12">' +
                            '<img class="testov olk" data-dg="'+array[i]["id"]+'" data-dis="'+array[i]["dis"]+'" style="width:100%;" src="'+array[i]["kar"]+'" data-bs-toggle="modal" data-bs-target="#stolPopup1">' +
                        '</div>' +
                        '<div class="row">' +
                            '<div class="col-lg-12 col-sm-6">' +
                                '<div class="ro" style="padding:15px;">' +
                                    '<h4>Зал '+zals+' стол '+array[i]["stol"]+'</h4>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col-lg-12" style="padding-bottom:15px;">'+(array[i]["atrib"] || "")+'</div>' +
                        '</div>' +
                        '<div class="col-lg-12 col-sm-6">' +
                            '<div class="animated-button button stolmer" ' +
                                'data-time="'+(timeSlot || '')+'" ' +
                                'data-zal="Зал '+zals+' стол '+array[i]["stol"]+'" ' +
                                'data-uy="'+array[i]["id"]+'" ' +
                                'data-vm="'+array[i]["vm"]+'">Выбрать</div>' +
                        '</div>' +
                    '</div>' +
                '</div>'
            );
        }
    }
});




$(document).on('click','#izkvest', function(){
$( "#bezkvest" ).trigger( "click" );
$(this).parent().next().show();
$('.delkv').remove();



});

$(document).on('change','.stolsz', function(){
if($(".stolsz").html() == ""){
	$('.stolsz').append('<p style="font-size: 13px;padding: 10px;border-radius: 10px;background-color: #e7fdf1;">Доступных столов нет либо очень мало. Измените условия подбора или получите консультацию нашего менеджера о возможности бронирования.</p>');
	
}
});


$(document).on('click','.olk', function(){
$("#stolPopup1Label").text(""+$(this).parent().next().next().children().attr('data-zal')+"");
$("#dis").text(""+$(this).attr('data-dis')+"");
$(".stolmerzz").empty();
$(this).parent().next().next().children('div').clone().appendTo( ".stolmerzz" );
var id=$(this).attr('data-dg');
$("#slkk").empty();
$("#slk").empty();
$.ajax({
		url:"/svstolone.php?dat="+id+"",
		success:function(result){
 jq_json_objx = $.parseJSON(result); //Convert the JSON object to jQuery-compatible

      if(typeof jq_json_objx == 'object'){ //Test if variable is a [JSON] object
        jq_objx = eval (jq_json_objx); 

        //Convert back to an array
        jq_arrayx = [];
        for(elem in jq_objx){
            jq_arrayx.push(jq_objx[elem]);
        }
		
		var strJSON = jq_arrayx[0];
$("#slk").empty();

     
		for (i = 0; i < jq_arrayx.length; i++) {
			$("#slk").append(''+jq_arrayx[i]["stol"]+'');
		
			}
			
			}
			

			}
			
			
			}); 




$.ajax({
		url:"/svstoloneattr.php?dat="+id+"",
		success:function(result){
 jq_json_obj = $.parseJSON(result); //Convert the JSON object to jQuery-compatible

      if(typeof jq_json_obj == 'object'){ //Test if variable is a [JSON] object
        jq_obj = eval (jq_json_obj); 

        //Convert back to an array
        jq_array = [];
        for(elem in jq_obj){
            jq_array.push(jq_obj[elem]);
        }
		
		var strJSON = jq_array[0];
$("#slkk").empty();

     
		for (i = 0; i < jq_array.length; i++) {
			if(jq_array[i]["stol"]){
			$("#slkk").append(''+jq_array[i]["stol"]+'');
			}
			}
			
			}
			

			}
			
			
			}); 















});






$(document).on('click','#iztort', function(){
$( "#svert" ).trigger( "click" );
$( "#bezert" ).trigger( "click" );
$(this).parent().next().show();
$('.deltort').remove();
});

$(document).on('click','.dellf', function(){

$(this).parent().parent().remove();
var prt=$(this).attr('data-as');

$( '.'+prt+'' ).trigger( "click" );

});

$(document).on('click','#izshow', function(){
$( "#bezdsh" ).trigger( "click" );
$(this).parent().next().show();
$('.delsh').remove();

});
$(document).on('click','#izukr', function(){
$( "#bezukr" ).trigger( "click" );
$(this).parent().next().show();
$('.delukr').remove();

});

$(document).on('click','#bezkvest', function(){




if ($('#bezkvest').is(':checked')){
	$(this).parent().next().hide();
    $('#cdv').append('<div class="uls delkv"><a href="#vibkv" class="prik" style="text-decoration: line-through !important;">❌ Без квеста </a></div>');	
  
	$('.delkvf').remove();
	$('.selskve').removeClass('button--orange');
	$('.selskve').removeClass('sels');
	$('.selskve').removeClass('selskve');
	
	$('#vibtorts').show();
		$('html, body').animate({
 scrollTop: $("#vibtorts").offset().top // класс объекта к которому приезжаем
 }, 500); 
	
	
} else {
$(this).parent().next().show();
 $('.delkv').remove();
}
});

$(document).on('click','#kvestest', function(){




if ($('#kvestest').is(':checked')){
	$(this).parent().next().hide();
    $('#cdv').append('<div class="uls delkv estkvest"><a href="#vibkv" class="prik" id="kvestest" style="text-decoration: line-through !important;">✔️ Квест уже есть </a></div>');	
    $('.delkvf').remove();
	$('.selskve').removeClass('button--orange');
	$('.selskve').removeClass('sels');
	$('.selskve').removeClass('selskve');
	
		$('#vibtorts').show();
		$('html, body').animate({
 scrollTop: $("#vibtorts").offset().top // класс объекта к которому приезжаем
 }, 500); 
	
	
	
} else {
$(this).parent().next().show();
 $('.delkv').remove();
}
});

$(document).on('click','#bezert', function(){




if ($('#bezert').is(':checked')){
	$('#gkl').hide();
    $('#cdv').append('<div class="uls deltort"><a href="#vibtorts" class="prik" style="text-decoration: line-through !important;">❌ Без торта </a></div>');
    $('.deltortf').remove();
	$('.selstort').removeClass('button--orange');
	$('.selstort').removeClass('sels');
	$('.selstort').removeClass('selstort');
	$('.topx').prop('selectedIndex',0);
	
	$('#shvib').show();
	$('html, body').animate({
 scrollTop: $("#shvib").offset().top // класс объекта к которому приезжаем
 }, 500); 
	
} else {
$('#gkl').show();
$('.deltort').remove();$('.deltortd').remove();
}









});


$(document).on('click','#svert', function(){
if ($('#svert').is(':checked')){$('.deltortf').remove();
	$('#gkl').hide();
    $('#cdv').append('<div class="uls deltortd"><a href="#vibtorts" class="prik">✔️ Свой торт </a></div>');
    $('.vabor').append('<tr class="poz tortj deltortf sbor" data-id="6a22133b-2fed-479b-b85f-f348fb0d48bb" data-naz="Cбор за свой торт" data-cen="1000" data-kk="1"><td class="vren">'+ach+'</td><td class="cens">1000</td><td class="naz">Сбор за свой торт</td><td class="colм">1</td><td class="nev"><span class="dellf" data-as="selstort" >Удалить</span></td></tr>');
	$('.selstort').removeClass('button--orange');
	$('.selstort').removeClass('sels');
	$('.selstort').removeClass('selstort');
	$('.topx').prop('selectedIndex',0);
	$('#shvib').show();
	$('html, body').animate({
 scrollTop: $("#shvib").offset().top // класс объекта к которому приезжаем
 }, 500); 
} else {

$('#gkl').show();
$('.deltort').remove();
$('.deltortd').remove();
}
});

$(document).on('click','#bezukr', function(){


if ($('#bezukr').is(':checked')){
	
$(this).parent().next().hide();
$('#cdv').append('<div class="uls delukr"><a href="#ukrvib" class="prik" style="text-decoration: line-through !important;">❌ Без украшений </a></div>');
$('.delukrf').remove();
$('.selsukr').removeClass('button--orange');
$('.selsukr').removeClass('sels');
$('.selsukr').removeClass('selsukr');
	$('#iton').show();
		
		$('html, body').animate({
 scrollTop: $("#iton").offset().top // класс объекта к которому приезжаем
 }, 500);
		
} else {
$(this).parent().next().show();
$('.delukr').remove();
}






});

$(document).on('click','#bezdsh', function(){



if ($('#bezdsh').is(':checked')){
	$(this).parent().next().hide();
    $('#cdv').append('<div class="uls delsh"><a href="#shvib" class="prik"  style="text-decoration: line-through !important;">❌ Без шоу-программы </a></div>');
    $('.delshf').remove();
    $('.selsshow').removeClass('button--orange');
	$('.selsshow').removeClass('sels');
	$('.selsshow').removeClass('selsshow');
	$('#ukrvib').show();
	$('html, body').animate({
 scrollTop: $("#ukrvib").offset().top // класс объекта к которому приезжаем
 }, 500); 
} else {
$(this).parent().next().show();
$('.delsh').remove();
}


});

$(document).on('click','#idkvestus', function(){

	if ($(this).is(':checked')){
	$(".kids").show();
	$(".laun").hide();
	$(".kafee").hide();
	$('#idlaunge').prop('checked', false);
	$('#idkafe').prop('checked', false);
	} else {
		$(".kids").show();
		$(".laun").show();
	$(".kafee").show();
	}
});



$(document).on('click','#idlaunge', function(){


	if ($(this).is(':checked')){
	$(".kids").hide();
	$(".laun").show();
	$(".kafee").hide();
	
	$('#idkvestus').prop('checked', false);
	$('#idkafe').prop('checked', false);
	} else {
		$(".kids").show();
		$(".laun").show();
	$(".kafee").show();
	}
});

$(document).on('click','#idkafe', function(){

	if ($(this).is(':checked')){
	$(".kids").hide();
	$(".laun").hide();
	$(".kafee").show();
	$('#idkvestus').prop('checked', false);
	$('#idlaunge').prop('checked', false);

	} else {
		$(".kids").show();
		$(".laun").show();
	$(".kafee").show();
	}
});











$(".tortikm,#next2").click(function(e){
	


 var vrem=$("#dtolvibx").attr("data-start");
   var datr=$("#dtolvibx").attr("data-dates");
   var vnm=$("#vozr").val();
   var kvz=$("#kdet").val();
   var kdet=$("#kgos").val();
	if(vrem==""){$("#nax").css("border","1px solid red");}else{$("#nax").css("border","1px solid #a4d013");}
	if(datr==""){$("#datz").css("border","1px solid red");}else{$("#datz").css("border","1px solid #a4d013");}
	if(vnm==""){$("#vozr").css("border","1px solid red");}else{$("#vozr").css("border","1px solid #a4d013");}
	if(kvz==""){$("#kdet").css("border","1px solid red");}else{$("#kdet").css("border","1px solid #a4d013");}
	if(kdet==""){$("#kgos").css("border","1px solid red");}else{$("#kgos").css("border","1px solid #a4d013");}
	if(vrem!=='' & datr!=='' & vnm!=='' & kvz!=='' & kdet!==''){
	






	$('#vibtorts').show();
		$('html, body').animate({
 scrollTop: $("#vibtorts").offset().top // класс объекта к которому приезжаем
 }, 500); 
		
		
		
	   


	 
	}else{
			$('html, body').animate({
 scrollTop: $("#starte").offset().top // класс объекта к которому приезжаем
 }, 500); 
		
	}
});


$(".showm,#next3").click(function(e){
	
 var vrem=$("#dtolvibx").attr("data-start");
   var datr=$("#dtolvibx").attr("data-dates");
   var vnm=$("#vozr").val();
   var kvz=$("#kdet").val();
   var kdet=$("#kgos").val();
	if(vrem==""){$("#nax").css("border","1px solid red");}else{$("#nax").css("border","1px solid #a4d013");}
	if(datr==""){$("#datz").css("border","1px solid red");}else{$("#datz").css("border","1px solid #a4d013");}
	if(vnm==""){$("#vozr").css("border","1px solid red");}else{$("#vozr").css("border","1px solid #a4d013");}
	if(kvz==""){$("#kdet").css("border","1px solid red");}else{$("#kdet").css("border","1px solid #a4d013");}
	if(kdet==""){$("#kgos").css("border","1px solid red");}else{$("#kgos").css("border","1px solid #a4d013");}
	if(vrem!=='' & datr!=='' & vnm!=='' & kvz!=='' & kdet!==''){
	$('#shvib').show();
	$('html, body').animate({
 scrollTop: $("#shvib").offset().top // класс объекта к которому приезжаем
 }, 500); 
	
		
}   else{
			$('html, body').animate({
 scrollTop: $("#starte").offset().top // класс объекта к которому приезжаем
 }, 500); 
		
	}
	
});







$("#next5,.ukrashm").click(function(e){
	
	 var vrem=$("#dtolvibx").attr("data-start");
   var datr=$("#dtolvibx").attr("data-dates");
   var vnm=$("#vozr").val();
   var kvz=$("#kdet").val();
   var kdet=$("#kgos").val();
	if(vrem==""){$("#nax").css("border","1px solid red");}else{$("#nax").css("border","1px solid #a4d013");}
	if(datr==""){$("#datz").css("border","1px solid red");}else{$("#datz").css("border","1px solid #a4d013");}
	if(vnm==""){$("#vozr").css("border","1px solid red");}else{$("#vozr").css("border","1px solid #a4d013");}
	if(kvz==""){$("#kdet").css("border","1px solid red");}else{$("#kdet").css("border","1px solid #a4d013");}
	if(kdet==""){$("#kgos").css("border","1px solid red");}else{$("#kgos").css("border","1px solid #a4d013");}
	if(vrem!=='' & datr!=='' & vnm!=='' & kvz!=='' & kdet!==''){
	

	
	
	
	
	
	
	
	$('#ukrvib').show();
	$('html, body').animate({
 scrollTop: $("#ukrvib").offset().top // класс объекта к которому приезжаем
 }, 500); 
	
		
	}else{
			$('html, body').animate({
 scrollTop: $("#starte").offset().top // класс объекта к которому приезжаем
 }, 500); 
		
	}
	
});


$("#next6").click(function(e){
	 var vrem=$("#dtolvibx").attr("data-start");
   var datr=$("#dtolvibx").attr("data-dates");
   var vnm=$("#vozr").val();
   var kvz=$("#kdet").val();
   var kdet=$("#kgos").val();
	if(vrem==""){$("#nax").css("border","1px solid red");}else{$("#nax").css("border","1px solid #a4d013");}
	if(datr==""){$("#datz").css("border","1px solid red");}else{$("#datz").css("border","1px solid #a4d013");}
	if(vnm==""){$("#vozr").css("border","1px solid red");}else{$("#vozr").css("border","1px solid #a4d013");}
	if(kvz==""){$("#kdet").css("border","1px solid red");}else{$("#kdet").css("border","1px solid #a4d013");}
	if(kdet==""){$("#kgos").css("border","1px solid red");}else{$("#kgos").css("border","1px solid #a4d013");}
	if(vrem!=='' & datr!=='' & vnm!=='' & kvz!=='' & kdet!==''){
	

		$('#iton').show();
		
		$('html, body').animate({
 scrollTop: $("#iton").offset().top // класс объекта к которому приезжаем
 }, 500);
		
	
	    	$('#stplk').hide(500);
	}else{
			$('html, body').animate({
 scrollTop: $("#starte").offset().top // класс объекта к которому приезжаем
 }, 500); 
		
	}
});

$(".itogm,#next7").click(function(e){
	 var vrem=$("#dtolvibx").attr("data-start");
   var datr=$("#dtolvibx").attr("data-dates");
   var vnm=$("#vozr").val();
   var kvz=$("#kdet").val();
   var kdet=$("#kgos").val();
	if(vrem==""){$("#nax").css("border","1px solid red");}else{$("#nax").css("border","1px solid #a4d013");}
	if(datr==""){$("#datz").css("border","1px solid red");}else{$("#datz").css("border","1px solid #a4d013");}
	if(vnm==""){$("#vozr").css("border","1px solid red");}else{$("#vozr").css("border","1px solid #a4d013");}
	if(kvz==""){$("#kdet").css("border","1px solid red");}else{$("#kdet").css("border","1px solid #a4d013");}
	if(kdet==""){$("#kgos").css("border","1px solid red");}else{$("#kgos").css("border","1px solid #a4d013");}
	if(vrem!=='' & datr!=='' & vnm!=='' & kvz!=='' & kdet!==''){
	

		$('#iton').show();
		var price = 0;

		
		
        $('#stplk').hide(500);
	$('html, body').animate({
 scrollTop: $("#iton").offset().top // класс объекта к которому приезжаем
 }, 500); 	
	}else{
			$('html, body').animate({
 scrollTop: $("#starte").offset().top // класс объекта к которому приезжаем
 }, 500); 
		
	}
});

$("#tortiks").click(function(e){
		$('.sl').show(500);
	    
	
});
$(document).on('click','#stolk', function(){	
		$('.sll').show(500);
	    
	
});
 
$('body').on('click', function (e) {
 var price = 0;
     $('.cens').each(function() {
    price += parseInt(this.textContent);
	
  });
  var pr=price/10;
  var vbl=price+pr;
  $('#sums').text(vbl);

});


$("#showwa").click(function(e){
		$('.scritt').show(500);
	   
	
});

$("#ukrasha").click(function(e){
		$('.scrit').show(500);
	   
	
});

$("#nax").click(function(e){
		$('.scrit').show(500);
	   
	
});

$( "#vozr" ).on( "change", function() {
     $('.pok').removeClass('pok');
$('.poks').removeClass('poks');
} );



$( "#nax" ).on( "change", function() {$('.dobstol').remove();
		$('.dobstolz').remove();
     
	 $('#next1').attr( "data-start", ""+$(this).val()+"" );
     $('#next1').attr( "data-dates", ""+$("#datz").val()+"" );
	 $('#dtolvibx').attr( "data-start", ""+$(this).val()+"" );
     $('#dtolvibx').attr( "data-dates", ""+$("#datz").val()+"" );
     $('#kvestvib').attr( "data-start", ""+$(this).val()+"" );
     $('#kvestvib').attr( "data-dates", ""+$("#datz").val()+"" );
	 
} );

$( "#datz" ).on( "change", function() {$('.dobstol').remove();
		$('.dobstolz').remove();
     
	  $('#next1').attr( "data-start", ""+$("#nax").val()+"" );
     $('#next1').attr( "data-dates", ""+$("#datz").val()+"" );
	 $('#dtolvibx').attr( "data-start", ""+$("#nax").val()+"" );
     $('#dtolvibx').attr( "data-dates", ""+$("#datz").val()+"" );
     $('#kvestvib').attr( "data-start", ""+$("#nax").val()+"" );
     $('#kvestvib').attr( "data-dates", ""+$("#datz").val()+"" );
} );

$(".zakaz").click(function(e){
  e.preventDefault();

  // защита от повторных кликов
  if ($(this).data("sending") === 1) return;

  input_datas = regphone = document.getElementById('reg_phone').value;
  kodeus = document.getElementById('ko').value;
  kodir = $('#offr').text();
  red = 1408;

  if (kodeus == kodir || kodeus == red) {

    ach = document.getElementById('nax').value;
    ssxx = $('#kvestest').text();
    tort = $('.sbor').attr("data-naz");
    date = document.getElementById('datz').value;
    nam = document.getElementById('nas').value;
    reb = document.getElementById('reb').value;
    vozr = document.getElementById('vozr').value;
    tel = document.getElementById('reg_phone').value;
    det = document.getElementById('kgos').value;
    vzrosl = document.getElementById('kdet').value;
    zal = $('.dobstolz').attr("data-naz");
    hhh = $('#kvestest').text();

    if (hhh == '') { d = 1; } else { d = 0; }

    var poz = [];
    $(".poz").not('.dobstolz').not('.delkvf').each(function() {
      var id = $(this).attr("data-id");
      var col = $(this).attr("data-kk");
      var naza = $(this).attr("data-naz");
      var Itemsh = {productId: id, type: "Product", amount: col, naz: naza};
      poz.push(Itemsh);
    });

    var kv = [];
    $('.delkvf').not('.poz').each(function() {
      var naz = $(this).children("a").text();
      kv.push(naz);
    });

    var valuedd = $('input[name="drone"]:checked').val();

    if (tel !== "") {

      if (zal) {

        if (valuedd) {

          // блокируем кнопку сразу
          $(".zakaz").data("sending", 1).prop("disabled", true).hide();

          $('.good').hide();
          $('.error').hide();
          $('.preloader-555').show();

          $.ajax({
            url: "/prechek.php",
            type: "POST",
            dataType: "json",
            timeout: 12000,
            data: {
              tov: poz,
              zal: zal,
              svkv: d,
              kv: kv,
              tort: tort,
              suy: $('#sums').text(),
              ach: ach,
              datez: date,
              nam: nam,
              reb: reb,
              vozr: vozr,
              tel: tel,
              det: det,
              sp: valuedd,
              vzrosl: vzrosl,
            },

            success: function(res) {
              $('.preloader-555').hide();

              if (res && res.ok) {
                $('.good').show();
                $('.error').hide();
                $('.zakaz').hide();

                // Telegram-бот
                const tg = "https://t.me/PandoroomBot";
                const msg =
                  "Заявка принята ✅\n\n" +
                  "Чтобы обсудить детали и подтвердить бронь — добавьтесь, пожалуйста, в наш Telegram-бот:\n" +
                  tg;

                if (confirm(msg + "\n\nОткрыть Telegram-бот сейчас?")) {
                  window.open(tg, "_blank");
                }

              } else {
                $('.good').hide();
                $('.error').show();
                alert((res && res.message) ? res.message : "Ошибка при отправке заявки");

                // вернуть кнопку
                $(".zakaz").data("sending", 0).prop("disabled", false).show();
              }
            },

            error: function(xhr, status) {
              $('.preloader-555').hide();
              $('.good').hide();
              $('.error').show();

              if (status === "timeout") {
                alert("Сервер долго отвечает. Заявка могла быть принята.\nНапишите в Telegram-бот: https://t.me/PandoroomBot");
              } else {
                alert("Не удалось отправить заявку.\nНапишите в Telegram-бот: https://t.me/PandoroomBot");
              }

              // вернуть кнопку
              $(".zakaz").data("sending", 0).prop("disabled", false).show();
            }
          });

        } else {
          alert('Не выбран способ связи!');
        }

      } else {
        alert('Не выбран стол! Для оформления заявки необходимо выбрать стол!');
        $('html, body').animate({ scrollTop: $("#vibzali").offset().top }, 500);
      }

    } else {
      $('.good').hide();
      $('.error').show();
      $('.preloader-555').hide();
    }

  } else {
    $('.good').hide();
    $('.error').show();
    $('.preloader-555').hide();
  }
});


















$(document).on('click','.vse', function(){	
	
	 $(this).parent().parent().find('.spryat').css('display', 'block');
	 $(this).parent().parent().find('.spryat').addClass('zapr');
	 $(this).parent().parent().find('.zapr').removeClass('spryat');
	 $(this).addClass('zapry');	
	 $(this).text('Скрыть');	
});



$(document).on('click','.zapry', function(){	
	$(this).parent().parent().find('.sels').css('display', 'block');
	$(this).parent().parent().find('.zapr').css('display', 'none');
	 $(this).parent().parent().find('.zapr').addClass('spryat');
	 $(this).parent().parent().find('.spryat').removeClass('zapr');
	 $(this).addClass('vse'); $(this).removeClass('zapry');	
	 $(this).text('Показать все');
	 
});





$(document).on('click', '.stolmer', function(){

    // ✅ если выбрали стол из "ближайшего времени" — подставляем его время в input#nax
    var t = $(this).attr('data-time');
    if (t && t.length >= 4) {
        document.getElementById('nax').value = t; // input type="time" принимает HH:MM
    }

    $(this).text('Добавлен');
    $(this).addClass('button--orange sels selsstol');

    var ach = document.getElementById('nax').value;

    if($(".dobstol")[0]){
        // ничего
    } else {
        $("#next1").trigger("click");
    }

    var date = document.getElementById('datz').value;

    $('.vabor').append(
        '<tr class="poz dobstolz" data-id="'+$(this).attr('data-uy')+'" data-nah="'+ach+'" data-naz="'+$(this).attr('data-zal')+'" data-date="'+date+'" data-kk="1">' +
            '<td class="vren">'+ach+'</td>' +
            '<td class="cens">0</td>' +
            '<td class="naz">'+$(this).attr('data-zal')+'</td>' +
            '<td class="colм">1</td>' +
            '<td class="nev"><span class="dellf" data-as="selsstol">Удалить</span></td>' +
        '</tr>'
    );

    $('#stplk').show();
    $("#next1").trigger("click");
    $('#cdv').append("<div class='uls dobstol'><a href='#vibzali' class='prik'>✔️ "+$(this).attr('data-zal')+"</a></div>");
});



$(document).on('click','.selsstol', function(){	
	
	$(this).text('Выбрать');
	$(this).removeClass('button--orange');
	$(this).removeClass('sels');
	$(this).removeClass('selsstol');
	ach=document.getElementById('nax').value;
    date=document.getElementById('datz').value;
  	$('a:contains('+$(this).attr('data-zal')+')').remove();
    $('#stplk').show();
	
			$('.dobstol').remove();
		$('.dobstolz').remove();
});	








$(document).on('click','.onbron', function(){	
	remya =$(this).attr('data-time');
    naz =$(this).attr('data-nazv');
	prise =$(this).attr('data-prise');
	id=$(this).attr('data');
	$(this).text(''+remya+'');
	$(this).addClass('button--orange');
	$(this).addClass('sels');
	$(this).addClass('selskve');
	$('#stplk').show();
	ach=document.getElementById('nax').value;
    var kdet=$("#kdet").val();
	var kvz=$("#kgos").val();
    var kol=kvz*1+kdet*1;
	var kl=$('.delkvf').length;
	var dh=kl*6;
	if(kol>dh){$('.noits').show();}else if(kol<dh){$('.noits').hide();
	                                               $( "#next2" ).trigger( "click" );}
    date=document.getElementById('datz').value;
	
  	$('.vabor').append('<tr class="poz kvestsi delkvf" data-id="'+id+'" data-nah="'+ach+'" data-con="" data-date="'+date+'" data-kk="1"><td class="vren">'+remya+'</td><td class="cens">'+prise+'</td><td class="naz">'+naz+'</td><td class="colм">1</td><td class="nev"><span class="dellf" data-as="selskve">Удалить</span></br><span class="anims" style="display:none;"><a  class="animl" id="">+ Аниматор</a></span></br><span class="dopigr"><a  class="dopig" id="" style="display:none;">+ Доп. игрок</a></span></td></tr>');
	$('#cdv').append('<div class="uls delkvf"><a href="#vibkv" class="prik">✔️ '+naz+'  '+remya+'</a></div>');	




});	

$(document).on('click','#bezkveb', function(){	
	
if($('#bezkveb').is(':checked')){$('.noits').hide();$( "#next2" ).trigger( "click" );}else{}		

});

$(document).on('click','.selskve', function(){	
	

	$(this).removeClass('button--orange');
	$(this).removeClass('sels');
	$(this).removeClass('selskve');
	ach=document.getElementById('nax').value;
    date=document.getElementById('datz').value;
  	$('a:contains(✔️ '+naz+'  '+remya+')').remove();
    $('#stplk').show();
	$('.kvestsi').remove();
		$('.delkvf').remove();
	
			
});










$(document).on('click','.tortk', function(){	
	
	val1 = $(this).prev().children('select[name="tort"]').val();
	
	
	if(val1!="0"){
	$(this).text('Добавлен');
	$(this).addClass('button--orange');
	$(this).addClass('sels');
	$(this).addClass('selstort');
	ach=document.getElementById('nax').value;
	val1 = $(this).prev().children('select[name="tort"]').val();
	
	var naz=$(this).prev().children('.topx').find(":selected").attr('data-naz');
	var cena=$(this).prev().children('.topx').find(":selected").attr('data_cen');
	var vaid=$(this).prev().children('.topx').find(":selected").val();
  	$('.vabor').append('<tr class="poz tortj deltortf" data-id="'+vaid+'" data-naz="'+naz+'" data-cen="'+cena+'" data-kk="1"><td class="vren">'+ach+'</td><td class="cens">'+cena+'</td><td class="naz">'+naz+'</td><td class="colм">1</td><td class="nev"><span class="dellf" data-as="selstort" >Удалить</span></td></tr>');
	$('#cdv').append('<div class="uls deltortf"><a href="#vibtorts" class="prik">✔️ '+naz+'</a></div>');	
	$('#stplk').show();	$(this).prev().children('select.topx').css("border","1px solid #a4d013");
   


$('html, body').animate({
 scrollTop: $("#next3").offset().top // класс объекта к которому приезжаем
 }, 500); 
	
	$( "#next3" ).trigger( "click" );
	}else{
		
		$(this).prev().children('.topx').css('border-color', 'red');
	}
});	

$(document).on('click','.selstort', function(){	
	
	$(this).text('Выбрать');
	$(this).removeClass('button--orange');
	$(this).removeClass('sels');
	$(this).removeClass('selstort');
	$('.topx').prop('selectedIndex',0);
	$('.deltort').remove();
	$('.deltortd').remove();
	$('.deltortf').remove();
		$('.tortj').remove();
});


$(document).on('click','.shou', function(){	
	
	$(this).text('Добавлен');
	$(this).addClass('button--orange');
	$(this).addClass('sels');
	$(this).addClass('selsshow');
	ach=document.getElementById('nax').value;
var vaid=$(this).attr('data-ids');
var cena=$(this).attr('data-sen');
var naz=$(this).attr('data-naz');
	
  	$('.vabor').append('<tr class="poz showw delshf" data-id="'+vaid+'" data-naz="'+naz+'" data-cen="'+cena+'" data-kk="1"><td class="vren">'+ach+'</td><td class="cens">'+cena+'</td><td class="naz">'+naz+'</td><td class="colм">1</td><td class="nev"><span class="dellf"  data-as="selsshow">Удалить</span></td></tr>');
	$('#cdv').append('<div class="uls delshf"><a href="#shvib" class="prik">✔️ '+naz+'</a></div>');			
	$('#stplk').show();		
	$( "#next5" ).trigger( "click" );
});




$(document).on('click','.shouenu', function(){	
	

	det=document.getElementById('kgos').value;
    vzrosl=document.getElementById('kdet').value;
	
	$(this).text('+ еще');
	$(this).addClass('button--orange');
	$(this).addClass('sels');
	
	ach=document.getElementById('nax').value;
    var vaid=$(this).attr('data-ids');
    var cena=$(this).attr('data-sen');
    var naz=$(this).attr('data-naz');
    var ves=$(this).attr('data-ves');
	
	const animal = document.querySelector('#js-animal');
	var vaid=$(this).attr('data-ids');
    var cena=$(this).attr('data-sen');
    var gsuu=cena*1*kold*1;
    var naz=$(this).attr('data-naz');
	var kold=$(this).prev().find('.zn').val();
	$(this).prev().find('.zn').css("border","1px solid #a4d013");
	
	var tt=$(this).attr('data-colz');
	kk=0;
	if(tt==''){kk=1;}else{kk=tt*1+1;}
	$('a[data-id="'+vaid+'"]').parent().remove();
	$('tr[data-id="'+vaid+'"]').remove();
	var fgj=cena*kk;
  	$('.vabor').append('<tr class="poz showw delshfm munug" data-colz="'+kk+'" data-id="'+vaid+'" data-naz="'+naz+'" data-ves="'+ves+'" data-cen="'+fgj+'" data-kk="'+kk+'"><td class="vren">'+ach+'</td><td class="cens">'+fgj+'</td><td class="naz">'+naz+'</td><td class="colм">'+kk+'</td><td class="nev"><span class="dellf"  data-as="selsshow">Удалить</span></td></tr>');
	$('#cdv').append('<div class="uls delshfm" data-id="'+vaid+'" data-colz="'+kk+'"><a href="" data-id="'+vaid+'" data-colza="'+kk+'" class="prik">✔️ '+naz+'  '+kk+' шт.</a></div>');			
	$('#stplk').show();	
	$(this).attr('data-colz',kk);
	$(this).prev().attr('data-colz',kk);
	var pricez = 0;
	var kolmen=det*1+vzrosl*1;
	var vesa=kolmen*500;
	$('.munug').each(function() {
    pricez += $(this).attr('data-ves')*kk;
	
  });
	var max=$("#progbar").attr('max',vesa);
    var valz=$("#progbar").val(pricez*1000);

});






$(document).on('click','.selsmunu', function(){	
	det=document.getElementById('kgos').value;
    vzrosl=document.getElementById('kdet').value;
	
	$(this).text('-');
	$(this).removeClass('button--orange');
	var naz=$(this).attr('data-naz');
	var vaid=$(this).attr('data-ids');
	var ves=$(this).attr('data-ves');
	var cena=$(this).attr('data-sen'); 
	var ttd=$(this).attr('data-colz');
	
	kk=ttd*1-1;
	var pricez = 0;
	
	var pricez = 0;
	var kolmen=det*1+vzrosl*1;
	var vesa=kolmen*500;
	$('.munug').each(function() {
    pricez += $(this).attr('data-ves')*kk;
	
  });
  var y=$("#progbar").val();
	var max=$("#progbar").attr('max',vesa);
    var valz=$("#progbar").val(pricez*1000);
	
	
	if(kk>0){
	var ccc=cena*kk;
	$('a[data-id="'+vaid+'"]').parent().remove();
	$('tr[data-id="'+vaid+'"]').remove();
  	$('.vabor').append('<tr class="poz showw delshfm munug" data-colz="'+kk+'" data-id="'+vaid+'" data-naz="'+naz+'" data-ves="'+ves+'" data-cen="'+ccc+'" data-kk="'+kk+'"><td class="vren">'+ach+'</td><td class="cens">'+ccc+'</td><td class="naz">'+naz+'</td><td class="colм">'+kk+'</td><td class="nev"><span class="dellf"  data-as="selsshow">Удалить</span></td></tr>');
	$('#cdv').append('<div class="uls delshfm" data-id="'+vaid+'" data-colz="'+kk+'"><a href="" data-id="'+vaid+'" data-colza="'+kk+'" class="prik">✔️ '+naz+'  '+kk+' шт.</a></div>');			
	$(this).attr('data-colz',kk);
	$(this).next().attr('data-colz',kk);
	
	
	
	}else{$('a[data-id="'+vaid+'"]').parent().remove();
	      $('tr[data-id="'+vaid+'"]').remove();
		  $(this).attr('data-colz',0);
	      $(this).next().attr('data-colz',0);
		  
		  $(this).next().text('+');
	      $(this).next().removeClass('button--orange');
	      $(this).next().removeClass('sels');
		  
		  }

});


$(document).on('click','.selsshow', function(){	
	
	$(this).text('Выбрать');
	$(this).removeClass('button--orange');
	$(this).removeClass('sels');
	$(this).removeClass('selsshow');
	
	$('.delshf').remove();
		
});

$(document).on('click','.ukr', function(){	
	var kold=$(this).prev().find('.zn').val();
	if(kold!=''){
	$(this).text('Добавлен');
	$(this).addClass('button--orange');
	$(this).addClass('sels');
	$(this).addClass('selsukr');
	ach=document.getElementById('nax').value;
    var vaid=$(this).attr('data-ids');
    var cena=$(this).attr('data-sen');
    var gsuu=cena*1*kold*1;
    var naz=$(this).attr('data-naz');
	var kold=$(this).prev().find('.zn').val();
	$(this).prev().find('.zn').css("border","1px solid #a4d013");
  	$('.vabor').append('<tr class="poz ukrad delukrf" data-id="'+vaid+'" data-naz="'+naz+'" data-cen="'+gsuu+'" data-kk="'+kold+'" ><td class="vren">'+ach+'</td><td class="cens">'+gsuu+'</td><td class="naz">'+naz+'</td><td class="colм">'+kold+'</td><td class="nev"><span class="dellf" data-as="selsukr">Удалить</span></td></tr>');
			$('#cdv').append('<div class="uls delukrf"><a href="#ukrvib" class="prik">✔️ '+naz+' '+kold+' шт.</a></div>');	
	$('#stplk').show();}else{$(this).prev().find('.zn').css("border","1px solid red");}
});

$(document).on('click','.selsukr', function(){	
	
	$(this).text('Выбрать');
	$(this).removeClass('button--orange');
	$(this).removeClass('sels');
	$(this).removeClass('selsukr');
$(this).prev().prev().children().val(0);
	$('.delukrf').remove();
		
});
$(".plus").click(function(e){
	
	
	dd=$(this).prev().children().val();
    ff=dd*1;
	g=ff+1;
	
		$(this).prev().children().val(g);	
			
			
			});	
	$(".pluss").click(function(e){
	
	
	dd=$(this).prev().children().val();
    ff=dd*1;
	g=ff+1;
	if(g<5){
		$(this).prev().children().val(g);	
			
	}
			});		
$(".minus").click(function(e){
	
	
	dd=$(this).next().children().val();
    ff=dd*1;
	g=ff-1;
		if(g>=0){
		$(this).next().children().val(g);	
			}
			
			});

$(".minuss").click(function(e){
	
	
	dd=$(this).next().children().val();
    ff=dd*1;
	g=ff-1;
	if(g>=0){
		$(this).next().children().val(g);	
	}
			
			});
			
			
			
			
			
			
			
			
$("#questPopupzapkod").click(function(e){
	
	regphone=document.getElementById('questPopuptel').value;
	cer=regphone.replace(/^\s+|\s+$/g,'');
	regname=document.getElementById('questPopupname').value;
	kod=$('#offr').text();
	$('#questPopupzapkod').hide();
    result = regphone.replace(/[^+\d]+/g, "");
	if(regphone!=''){if(regname!=''){
	$.ajax({
		url:"/wacap.php?phone="+regphone+"&kod="+kod+"&ok=2",
		success:function(html){

		$('#zapkof').show();
	    $('#knopzap').show();
			}
			
			
			}); 
			
}else{alert("Укажите Ваше имя!");}
			
}else{alert("Укажите Ваш номер телефона!");}
			
			e.preventDefault();
			
			
			
			
			});	
			
				
$("#questPopupzapkodd").click(function(e){
	
	regphone=document.getElementById('questPopuptel').value;
		regname=document.getElementById('questPopupname').value;
	cer=regphone.replace(/^\s+|\s+$/g,'');
	kod=$('#offr').text();
	$('#questPopupzapkod').hide();
    result = regphone.replace(/[^+\d]+/g, "");
	$(this).hide();
	 if(regphone!=''){if(regname!=''){
	$.ajax({
		url:"/wacap.php?phone="+regphone+"&kod="+kod+"&ok=5",
		success:function(html){

		$('#zapkof').show();
	    $('#knopzap').show();
	
			}
			
			
	 }); }else{alert("Укажите Ваше имя!");}
			
}else{alert("Укажите Ваш номер телефона!");}
			
			e.preventDefault();
			
			
			
			
			});		
			
	$("#location__item").click(function(e){
	
	$(".location__item--highlight").removeClass("location__item--highlight");
			$(this).addClass("location__item--highlight");
			});	
					

$('.form-quests__input').on('change', function () {
		var strSelector = '',
			val1 = $('.form-quests__input[name="age"]').val(),
			val2 = $('.form-quests__input[name="type"]').val(),
            val4 = $('.form-quests__input[name="level"]').val();

		if(val1 != 'NULL'){ strSelector = strSelector + '.js-age-'+val1; }
		
		
		if(val2 != 'NULL'){ strSelector = strSelector + '.js-type-'+val2; }
		
		if(val4 != 'NULL'){ strSelector = strSelector + '.js-level-'+val4; }

		$('.js-col-quest').hide(500);
        $('.js-age-'+val1+'.js-type-'+val2+'.js-level-'+val4+'').show(500);

		$(strSelector).show(500);


	});		
			
			
			
			
			
			
$(document).on('click','#questPopupbron', function(){
		
		
		get=$("#get_param").val();
		regname=document.getElementById('questPopupname').value;
		regphone=document.getElementById('questPopuptel').value;
		regbox=document.getElementById('questPopuptel').value;
		addeduser=1;
		regsubs=0;
		hvost="@pdfteee.ru";
		kodeus=document.getElementById('kodsd').value;
		kodir=$('#offr').text();
		itogovaya = $('#questPopupstoim').text();
		comand = $("#questPopupdopigr").val();
		
result = regphone.replace(/[^+\d]+/g, "");
		kolich="2-4";
		anim = $("#questPopupanim").val();
		if (anim==0){anims = "Без аниматора "}else{anims = "С аниматором"};
		red=1408;
		get+='&regname='+regname+'&comand='+kolich+'&anim='+anims+'&regphone='+result+'&regsubs='+regsubs+'&itogovaya='+itogovaya+'&addeduser='+addeduser+'&regbox='+regbox+''+hvost;
      
	  if(kodeus==kodir||kodeus==red)
{
		  if(regname!=''){
	
	  if(kodeus==red){ avtor="Самостоятельно"}else{avtor="Самостоятельно"};
		
		$("div.preloader-55").show();
		$('#questPopupbron').hide();
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		$.ajax({
			url:"/wp-content/plugins/pandoroom-booking/add-booking.php"+get+'&avt=Самостоятельно&skid='+0+'&nom=',
            success:function(html){if(html!=false){$("a#booking_confirm").css("display","block");$('#olg').hide();
			$('#olgd').show();
            var r=$("button.quests-info__time").attr("data");var s=$("div#last_clicked_time").attr("data-time");
            var t=$("button.quests-info__time").attr("data-id");
            var at='button.quests-info__time[data="'+r+'"][data-time="'+s+'"][data-id="'+t+'"]';
            $('div.preloader-55').hide();
			$('#questPopupbron').show();
			$(at).removeClass("active");
			$(at).addClass("quests-info__time--gray");
			$('.btn-close').trigger("click");
			$("#questPopupdopigr").prop('selectedIndex',0);
		   
	$("#questPopupanim").prop('selectedIndex',0);
	$("#dopigrz").prop('selectedIndex',0);
			$("#dopigrapark").prop('selectedIndex',0);
		$("#dopigraparkvix").prop('selectedIndex',0);
			$("#dopigraarena").prop('selectedIndex',0);$("#dopigrapark").prop('selectedIndex',0);
			}else { 
			alert ("Время уже занято! ") ; 
			$("#questPopupdopigr").prop('selectedIndex',0);
		$("#questPopupanim").prop('selectedIndex',0);
		$("#dopigrz").prop('selectedIndex',0);
			$("#dopigrapark").prop('selectedIndex',0);
		$("#dopigraparkvix").prop('selectedIndex',0);
			$("#dopigraarena").prop('selectedIndex',0);$("#dopigrapark").prop('selectedIndex',0);

	};
	
	
	
	$.get("https://pandoroom.org/provkod.php?dell_id="+msgz, function (data) {  
  });
	
	
	
	
	}
	});
	
	}else{alert("Укажите ваше имя!");};
		
		
}else{alert("Неверный проверочный код");$('#status').hide();
		$('#questPopupbron').show();}
		
	});

$(function(){
  var sections=[
    ['#vibzali','3. Выбор стола'],
    ['#vibkv','4. Квест / активности'],
    ['#dmenu','5. Меню'],
    ['#ukrvib','6. Украшения'],
    ['#shvib','7. Шоу'],
    ['#vibtorts','8. Торт'],
    ['#iton','9. Подтверждение']
  ];
  sections.forEach(function(it){
    var $el=$(it[0]); if($el.length){
      if(!$el.find('.step-chip').length){$el.prepend('<div class="step-chip" style="display:inline-block;background:#1fa7d6;color:#fff;padding:6px 12px;border-radius:999px;margin:0 0 10px 0;font-weight:700">'+it[1]+'</div>');}
    }
  });
});


function addMinutesHHMM(hhmm, mins){
  var p=hhmm.split(':'); var d=new Date(2000,0,1,parseInt(p[0],10),parseInt(p[1],10)+mins,0,0);
  return String(d.getHours()).padStart(2,'0')+':'+String(d.getMinutes()).padStart(2,'0');
}

$(document).on('click','#findslots',function(e){
  e.preventDefault();
  var date=$('#datz').val();
  var pack=($('#paket_hours').val()||'').trim();
  if(!date || !pack){ alert('Выберите дату и пакет'); return; }
  var arenaSlotsCount=parseInt(pack,10); // 1/2/3 часа арены
  var candidates=['10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30'];
  $('#arenaSlots').html('<div class="col-12">Ищем ближайшие слоты...</div>');
  var found=[];
  var i=0;
  function checkNext(){
    if(i>=candidates.length || found.length>=4){
      if(!found.length){$('#arenaSlots').html('<div class="col-12" style="color:#c00">Свободных слотов не найдено</div>'); return;}
      var html='';
      found.forEach(function(t){ html += '<div class="col-md-3 col-6" style="margin-bottom:8px"><span class="animated-button button slotpick" data-time="'+t+'" style="display:block">'+t+'</span></div>'; });
      $('#arenaSlots').html(html);
      return;
    }
    var st=candidates[i++]; var stop=addMinutesHHMM(st,arenaSlotsCount*60);
    $.get('/svstolviar.php',{dat:date,start:st,stop:stop,kol:($('#kdet').val()*1)+($('#kgos').val()*1),voz:0,zal:4,ok:2,t:Date.now()},function(resp){
      try{ var arr=JSON.parse(resp); if(Array.isArray(arr)&&arr.length){ found.push(st);} }catch(err){}
      checkNext();
    }).fail(checkNext);
  }
  checkNext();
});

$(document).on('click','.slotpick',function(){
  var t=$(this).data('time');
  $('#nax').val(t);
  $('#dtolvibx').attr('data-start',t).attr('data-dates',$('#datz').val());
  $('.slotpick').removeClass('button--orange');
  $(this).addClass('button--orange');
});
