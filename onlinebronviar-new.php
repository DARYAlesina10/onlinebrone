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
    <div class="wizard-nav" id="wizardNav"></div>
    <div class="step" data-step="0"><h2>0. Дата и время</h2><input type="date" id="date"><input type="time" id="time"><button id="toStep1">Далее</button></div>
    <div class="step" data-step="1" style="display:none"><h2>1. Пакет</h2><div id="packages" class="cards"></div><div class="step-actions"><button class="ghost prev" data-prev="0">Назад</button><button id="findArena">Показать свободные слоты</button></div><div id="slots"></div></div>
    <div class="step" data-step="2" style="display:none"><h2>2. Гости</h2><input id="guests" type="number" placeholder="Количество гостей"><input id="kidname" placeholder="Имя именинника"><input id="parent" placeholder="Имя родителя"><div class="step-actions"><button class="ghost prev" data-prev="1">Назад</button><button id="toStep3">Далее</button></div></div>
    <div class="step" data-step="3" style="display:none"><h2>3. Игры (Арена + Парк ужасов)</h2><div id="games" class="cards"></div></div>
    <div class="step" data-step="4" style="display:none"><h2>4. Украшения</h2><div id="decor" class="cards"></div><h2>5. Еда</h2><div id="food" class="cards"></div></div>
    <div class="step" data-step="5" style="display:none"><h2>Отправка</h2><input id="phone" placeholder="Телефон"><div class="step-actions"><button class="ghost prev" data-prev="4">Назад</button><button id="sendOrder">Отправить</button></div></div>
  </div>
</section>
<style>
.vr-booking{display:grid;grid-template-columns:1fr 320px;gap:20px;max-width:1280px;margin:30px auto;font-family:Montserrat,sans-serif}.vr-main{background:#fff;padding:24px;border-radius:18px}.vr-summary{position:sticky;top:20px;height:fit-content;background:#111827;color:#fff;padding:18px;border-radius:16px}.cards{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:12px}.card{border:1px solid #d9e4ff;border-radius:14px;padding:12px;cursor:pointer}.card.active{border-color:#22c55e;box-shadow:0 0 0 2px #22c55e33}.wizard-nav{display:flex;gap:8px;flex-wrap:wrap;margin:0 0 14px}.wiz{padding:8px 12px;border-radius:999px;background:#eef2ff;color:#334155;font-weight:600;cursor:pointer;transition:.25s}.wiz.active{background:#22c55e;color:#fff;transform:translateY(-1px)}.step{opacity:0;transform:translateY(16px);transition:.35s;max-height:0;overflow:hidden}.step.active{opacity:1;transform:none;max-height:2000px}.step input,.step select{display:block;width:100%;max-width:520px;margin:8px 0;padding:12px;border:1px solid #dbe4ef;border-radius:12px}.step-actions{display:flex;gap:8px;margin-top:10px}.step button{background:#a4d013;border:0;border-radius:10px;padding:10px 14px;color:#fff;font-weight:700}.step .ghost{background:#e2e8f0;color:#0f172a}
</style>
<script>
const PACKAGES=[
{name:'Мини',roomHours:2,arenaHours:1,prices:{wd:[16000,22000,26000],we:[22000,28000,32000]}},
{name:'Стандарт',roomHours:3,arenaHours:2,prices:{wd:[20000,26000,30000],we:[30000,36000,40000]}},
{name:'Макс',roomHours:4,arenaHours:3,prices:{wd:[26000,32000,36000],we:[36000,42000,46000]}}
];
const state={step:0};
const games=[['Magic',0],['Zombie Vegas',0],['Party 2',0],['Horror',0],['Tactics',0],['Battle',0],['Zombies',0],['Party Games',0]];
const decor=[['Базовое украшение',4500],['Премиум украшение',9000]];
const food=[['Сет праздничный',5500],['Напитки',2500],['Торт',4000]];
const STEP_TITLES=['0. Дата и время','1. Пакет','2. Гости','3. Игры','4. Украшения и еда','5. Отправка'];
function goStep(n){
  state.step=n;
  document.querySelectorAll('.step').forEach(el=>el.classList.remove('active'));
  const target=document.querySelector('.step[data-step="'+n+'"]');
  if(target){target.style.display='block';target.classList.add('active');}
  document.querySelectorAll('.wiz').forEach((w,i)=>w.classList.toggle('active',i===n));
}
function buildNav(){
  const nav=document.getElementById('wizardNav');
  nav.innerHTML=STEP_TITLES.map((t,i)=>`<button class="wiz" data-go="${i}">${t}</button>`).join('');
}
buildNav();goStep(0);
document.addEventListener('click',e=>{const g=e.target.closest('.wiz'); if(g){goStep(+g.dataset.go)} const p=e.target.closest('.prev'); if(p){goStep(+p.dataset.prev)}});

function renderCards(id,data,key){document.getElementById(id).innerHTML=data.map((x,i)=>`<div class='card' data-k='${key}' data-i='${i}'>${x.name||x[0]} ${x.roomHours?`<small>${x.roomHours}ч комната / ${x.arenaHours}:50 арена</small>`:''}<div>${x.prices?'от '+x.prices.wd[0]+' ₽':(x[1]+' ₽')}</div></div>`).join('')}
renderCards('packages',PACKAGES,'package');renderCards('games',games,'game');renderCards('decor',decor,'decor');renderCards('food',food,'food');
function upd(){const list=[];let total=0;if(state.package){list.push('Пакет: '+state.package.name);total+=state.packagePrice||0}['game','decor','food'].forEach(k=>{(state[k]||[]).forEach(it=>{list.push(it[0]||it.name);total+=it[1]||0})});document.getElementById('summaryList').innerHTML=list.map(x=>`<li>${x}</li>`).join('');document.getElementById('summaryTotal').innerText=total}
function tier(g){return g<=8?0:g<=16?1:2}
function isWeekend(d){const x=new Date(d);const day=x.getDay();return day===0||day===6}

document.addEventListener('click',e=>{const c=e.target.closest('.card');if(!c)return;const k=c.dataset.k,i=+c.dataset.i; c.parentElement.querySelectorAll('.card').forEach(x=>x.classList.remove('active')); c.classList.add('active'); if(k==='package'){state.package=PACKAGES[i];const g=+document.getElementById('guests').value||8;const t=tier(g);state.packagePrice=(isWeekend(document.getElementById('date').value)?state.package.prices.we:state.package.prices.wd)[t]} else {state[k]=[ (k==='game'?games: k==='decor'?decor:food)[i] ];} upd();});

document.getElementById('toStep1').onclick=()=>goStep(1);
document.getElementById('toStep3').onclick=()=>{document.querySelector('[data-step="3"]').style.display='block';document.querySelector('[data-step="4"]').style.display='block';document.querySelector('[data-step="5"]').style.display='block';goStep(3);upd();}

document.getElementById('findArena').onclick=()=>{const d=document.getElementById('date').value;const t=document.getElementById('time').value;if(!state.package||!d||!t){alert('Выберите дату/время/пакет');return;}const end=new Date(`2000-01-01T${t}:00`);end.setHours(end.getHours()+state.package.arenaHours);const ee=String(end.getHours()).padStart(2,'0')+':'+String(end.getMinutes()).padStart(2,'0');document.getElementById('slots').innerHTML=`<div class='card active'>Слот: ${t}-${ee}</div>`;document.querySelector('[data-step="2"]').style.display='block';goStep(2);};

document.getElementById('sendOrder').onclick=()=>alert('Заявка собрана. Подключим отправку в ваш текущий endpoint следующим шагом.');
</script>
<?php get_footer(); ?>
