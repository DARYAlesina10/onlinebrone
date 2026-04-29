<?php
/*
Template name: виар онлайн брони NEW
*/
get_header();
?>
<section class="vr-booking">
  <aside class="vr-summary" id="vrSummary"><h3>Ваш заказ</h3><ul id="summaryList"></ul><div class="sum">Итого: <b id="summaryTotal">0</b> ₽</div></aside>
  <div class="vr-main">
    <h1>Онлайн-бронирование VR праздника</h1>
    <div class="step" data-step="0"><h2>0. Дата и время</h2><input type="date" id="date"><input type="time" id="time"><button id="toStep1">Далее</button></div>
    <div class="step" data-step="1" style="display:none"><h2>1. Пакет</h2><div id="packages" class="cards"></div><button id="findArena">Показать свободные слоты</button><div id="slots"></div></div>
    <div class="step" data-step="2" style="display:none"><h2>2. Гости</h2><input id="guests" type="number" placeholder="Количество гостей"><input id="kidname" placeholder="Имя именинника"><input id="parent" placeholder="Имя родителя"><button id="toStep3">Далее</button></div>
    <div class="step" data-step="3" style="display:none"><h2>3. Игры (Арена + Парк ужасов)</h2><div id="games" class="cards"></div></div>
    <div class="step" data-step="4" style="display:none"><h2>4. Украшения</h2><div id="decor" class="cards"></div><h2>5. Еда</h2><div id="food" class="cards"></div></div>
    <div class="step" data-step="5" style="display:none"><h2>Отправка</h2><input id="phone" placeholder="Телефон"><button id="sendOrder">Отправить</button></div>
  </div>
</section>
<style>
.vr-booking{display:grid;grid-template-columns:1fr 320px;gap:20px;max-width:1280px;margin:30px auto;font-family:Montserrat,sans-serif}.vr-main{background:#fff;padding:24px;border-radius:18px}.vr-summary{position:sticky;top:20px;height:fit-content;background:#111827;color:#fff;padding:18px;border-radius:16px}.cards{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:12px}.card{border:1px solid #d9e4ff;border-radius:14px;padding:12px;cursor:pointer}.card.active{border-color:#22c55e;box-shadow:0 0 0 2px #22c55e33}.step button{background:#a4d013;border:0;border-radius:10px;padding:10px 14px;color:#fff;font-weight:700}
</style>
<script>
const PACKAGES=[
{name:'Мини',roomHours:2,arenaHours:1,prices:{wd:[16000,22000,26000],we:[22000,28000,32000]}},
{name:'Стандарт',roomHours:3,arenaHours:2,prices:{wd:[20000,26000,30000],we:[30000,36000,40000]}},
{name:'Макс',roomHours:4,arenaHours:3,prices:{wd:[26000,32000,36000],we:[36000,42000,46000]}}
];
const state={};
const games=[['Magic',0],['Zombie Vegas',0],['Party 2',0],['Horror',0],['Tactics',0],['Battle',0],['Zombies',0],['Party Games',0]];
const decor=[['Базовое украшение',4500],['Премиум украшение',9000]];
const food=[['Сет праздничный',5500],['Напитки',2500],['Торт',4000]];
function renderCards(id,data,key){document.getElementById(id).innerHTML=data.map((x,i)=>`<div class='card' data-k='${key}' data-i='${i}'>${x.name||x[0]} ${x.roomHours?`<small>${x.roomHours}ч комната / ${x.arenaHours}:50 арена</small>`:''}<div>${x.prices?'от '+x.prices.wd[0]+' ₽':(x[1]+' ₽')}</div></div>`).join('')}
renderCards('packages',PACKAGES,'package');renderCards('games',games,'game');renderCards('decor',decor,'decor');renderCards('food',food,'food');
function upd(){const list=[];let total=0;if(state.package){list.push('Пакет: '+state.package.name);total+=state.packagePrice||0}['game','decor','food'].forEach(k=>{(state[k]||[]).forEach(it=>{list.push(it[0]||it.name);total+=it[1]||0})});document.getElementById('summaryList').innerHTML=list.map(x=>`<li>${x}</li>`).join('');document.getElementById('summaryTotal').innerText=total}
function tier(g){return g<=8?0:g<=16?1:2}
function isWeekend(d){const x=new Date(d);const day=x.getDay();return day===0||day===6}

document.addEventListener('click',e=>{const c=e.target.closest('.card');if(!c)return;const k=c.dataset.k,i=+c.dataset.i; c.parentElement.querySelectorAll('.card').forEach(x=>x.classList.remove('active')); c.classList.add('active'); if(k==='package'){state.package=PACKAGES[i];const g=+document.getElementById('guests').value||8;const t=tier(g);state.packagePrice=(isWeekend(document.getElementById('date').value)?state.package.prices.we:state.package.prices.wd)[t]} else {state[k]=[ (k==='game'?games: k==='decor'?decor:food)[i] ];} upd();});

document.getElementById('toStep1').onclick=()=>document.querySelector('[data-step="1"]').style.display='block';
document.getElementById('toStep3').onclick=()=>{document.querySelector('[data-step="3"]').style.display='block';document.querySelector('[data-step="4"]').style.display='block';document.querySelector('[data-step="5"]').style.display='block';upd();}

document.getElementById('findArena').onclick=()=>{const d=document.getElementById('date').value;const t=document.getElementById('time').value;if(!state.package||!d||!t){alert('Выберите дату/время/пакет');return;}const end=new Date(`2000-01-01T${t}:00`);end.setHours(end.getHours()+state.package.arenaHours);const ee=String(end.getHours()).padStart(2,'0')+':'+String(end.getMinutes()).padStart(2,'0');document.getElementById('slots').innerHTML=`<div class='card active'>Слот: ${t}-${ee}</div>`;};

document.getElementById('sendOrder').onclick=()=>alert('Заявка собрана. Подключим отправку в ваш текущий endpoint следующим шагом.');
</script>
<?php get_footer(); ?>
