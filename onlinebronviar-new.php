<?php
/*
Template name: виар онлайн брони NEW
*/
$foodItems=[];
$decorItems=[];
try {
  $login=json_encode(['apiLogin'=>'3e2a8252692647d9a40bb92e194dd7ea']);
  $ch=curl_init('https://api-ru.iiko.services/api/1/access_token');
  curl_setopt_array($ch,[CURLOPT_RETURNTRANSFER=>1,CURLOPT_POST=>1,CURLOPT_HTTPHEADER=>['Content-Type: application/json'],CURLOPT_POSTFIELDS=>$login]);
  $tokenResp=json_decode(curl_exec($ch),true); curl_close($ch);
  if(!empty($tokenResp['token'])){
    $payload=json_encode(['startRevision'=>1,'organizationId'=>'0d11942d-de93-4be2-ae24-752307cc186b']);
    $ch=curl_init('https://api-ru.iiko.services/api/1/nomenclature');
    curl_setopt_array($ch,[CURLOPT_RETURNTRANSFER=>1,CURLOPT_POST=>1,CURLOPT_HTTPHEADER=>['Content-Type: application/json','Authorization: Bearer '.$tokenResp['token']],CURLOPT_POSTFIELDS=>$payload]);
    $nom=json_decode(curl_exec($ch),true); curl_close($ch);
    $foodGroups=['f54fb156-fe31-4824-ba31-fe38b8c6d7cb','33ab134e-2ca1-49d2-b4e6-ee0b8d562871','608c883e-7678-4fa8-9ef1-e127ea8877f2','89ae1b8f-c8b9-4099-be4e-52a233a287a8','767fa1a8-4578-499e-ad5b-a3d0dc6ba11f','bebbdf8e-31e8-4c60-bc46-8da01e6615ac'];
    $decorGroups=['2f583c03-35f2-455d-b868-9f3b53f06104','7f5314fc-461e-4ff1-9792-91925379350b'];
    foreach(($nom['products']??[]) as $pr){
      $price=$pr['sizePrices'][0]['price']['currentPrice']??0;
      if(in_array($pr['parentGroup']??'', $foodGroups,true)) $foodItems[]=['name'=>($pr['name']??'Товар'),'price'=>(int)$price,'img'=>($pr['imageLinks'][0]??'')];
      if(in_array($pr['parentGroup']??'', $decorGroups,true)) $decorItems[]=['name'=>($pr['name']??'Украшение'),'price'=>(int)$price,'img'=>($pr['imageLinks'][0]??'')];
    }
  }
}catch(Throwable $e){}
if(!$foodItems){$foodItems=[['name'=>'Сет праздничный','price'=>5500,'img'=>''],['name'=>'Напитки','price'=>2500,'img'=>''],['name'=>'Торт','price'=>4000,'img'=>'']];}
if(!$decorItems){$decorItems=[['name'=>'Базовое украшение','price'=>4500,'img'=>''],['name'=>'Премиум украшение','price'=>9000,'img'=>'']];}
get_header();
?>
<section class="vr-booking container-fluid py-4"><div class="container-xxl">
  <aside class="vr-summary" id="vrSummary"><h3>Ваш заказ</h3><ul id="summaryList"></ul><div class="sum">Итого: <b id="summaryTotal">0</b> ₽</div><div id="finalPanel" style="display:none"><input id="phone" placeholder="Телефон"><div class="step-actions"><button id="getCode" class="ghost">Получить SMS код</button></div><input id="smsCode" placeholder="Код из SMS"><button id="sendOrder">Отправить</button><button id="backToForm" class="ghost" style="margin-top:8px">Вернуться к заполнению</button></div></aside>
  <div class="vr-main">
    <h1>Онлайн-бронирование VR праздника</h1>
    <div class="wizard-nav" id="wizardNav"></div>
    <div class="step" data-step="0"><h2>Дата, время и гости</h2><div class="row gx-2"><div class="col-md-4"><input type="date" id="date"></div><div class="col-md-4"><select id="time" class="form-select"></select></div><div class="col-md-4"><input id="guests" type="number" placeholder="Количество гостей"></div></div><div class="row gx-2"><div class="col-md-6"><input id="kidname" placeholder="Имя именинника"></div><div class="col-md-6"><input id="parent" placeholder="Имя родителя"></div></div><button id="toStep1">Далее</button></div>
    <div class="step" data-step="1" style="display:none"><h2>Выбор пакета</h2><div id="packages" class="cards"></div><div class="step-actions"><button class="ghost prev" data-prev="0">Назад</button><button id="findArena">Показать свободные слоты</button></div></div>
    <div class="step" data-step="2" style="display:none"><h2>Комната праздника</h2><div id="slots"></div><div class="cards" id="tables"></div><div class="step-actions"><button class="ghost prev" data-prev="1">Назад</button><button id="toStep3">Далее</button></div></div>
    <div class="step" data-step="3" style="display:none"><h2>Выбор арены и игры</h2><div id="games" class="cards"></div><div class="step-actions"><button class="ghost prev" data-prev="2">Назад</button><button id="toStep4">Далее</button></div></div>
    <div class="step" data-step="4" style="display:none"><h2>Украшения</h2><div id="decor" class="cards"></div><div class="step-actions"><button class="ghost prev" data-prev="3">Назад</button><button id="toStep6">Далее</button></div></div><div class="step" data-step="5" style="display:none"><h2>Еда</h2><div id="food" class="cards"></div><div class="step-actions"><button class="ghost prev" data-prev="4">Назад</button><button id="finishFlow" type="button">Завершить заполнение</button></div></div>
    
  </div>
</div></section>
<style>
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap");
.vr-booking{font-family:Montserrat,sans-serif;background:#17181d;color:#fff;min-height:100vh}.vr-booking .container-xxl{max-width:1400px}
.vr-booking .vr-main{background:#22242b;border:1px solid #353945;padding:28px;border-radius:18px}
.vr-booking .vr-summary{position:sticky;top:20px;height:fit-content;background:#1f2128;border:1px solid #393d4c;color:#fff;padding:18px;border-radius:16px}
.vr-booking{display:block}.vr-booking .container-xxl>.vr-summary{float:right;width:340px;margin-left:20px}.vr-booking .container-xxl>.vr-main{overflow:hidden}
.cards{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:14px}.card{background:#2b2e37!important;border:1px solid #464b5c;border-radius:14px;padding:14px;cursor:pointer;color:#fff!important}.card *{color:#fff!important}.card.active{border-color:#9dd41a;box-shadow:0 0 0 2px #9dd41a40}
.wizard-nav{display:flex;gap:8px;flex-wrap:wrap;margin:0 0 16px}.wiz{padding:8px 12px;border-radius:999px;background:#2f3340;color:#d0d5e4;border:1px solid #434a5b;cursor:pointer}.wiz.active{background:#9dd41a;color:#13151a;border-color:#9dd41a}
.step{opacity:0;transform:translateY(10px);transition:.3s;max-height:0;overflow:hidden}.step.active{opacity:1;transform:none;max-height:2200px}
.step input,.step select{display:block;width:100%;max-width:620px;margin:8px 0;padding:12px;border:1px solid #4c5368;border-radius:12px;background:#1b1d24;color:#fff}
.pkgcomp{margin-top:6px;color:#cfd7ea;font-size:13px}.pkgrates{margin-top:8px;font-size:13px;line-height:1.5;color:#e7edf9}.pkgsel{margin-top:8px;padding:6px;border:1px solid #55617a}.step-actions{display:flex;gap:8px;margin-top:10px}.step button{background:#9dd41a;border:0;border-radius:0;padding:10px 14px;color:#111;font-weight:700}.step .ghost{background:#2d3240;color:#fff}
@media (max-width:1100px){.vr-booking .container-xxl>.vr-summary{float:none;width:100%;margin:0 0 16px 0}.cards{grid-template-columns:1fr 1fr}}@media (max-width:700px){.cards{grid-template-columns:1fr}}
</style>
<script>
const PACKAGES=[
{name:'Мини',roomHours:2,arenaHours:1,prices:{wd:[16000,22000,26000],we:[22000,28000,32000]}},
{name:'Стандарт',roomHours:3,arenaHours:2,prices:{wd:[20000,26000,30000],we:[30000,36000,40000]}},
{name:'Макс',roomHours:4,arenaHours:3,prices:{wd:[26000,32000,36000],we:[36000,42000,46000]}}
];
const state={step:0};
const games=[{name:"Magic",price:0,img:"https://vr-pandoroom.org/img/49736595_587_q70.webp"},{name:"Zombie Vegas",price:0,img:"https://vr-pandoroom.org/img/49736607_587_q70.webp"},{name:"Party 2",price:0,img:"https://vr-pandoroom.org/img/49736609_587_q70.webp"},{name:"Horror",price:0,img:"https://vr-pandoroom.org/img/49736613_588_q70.webp"}];
const decor=<?php echo json_encode(array_values($decorItems), JSON_UNESCAPED_UNICODE); ?>;
const food=<?php echo json_encode(array_values($foodItems), JSON_UNESCAPED_UNICODE); ?>;
const STEP_TITLES=['Дата и время','Пакет','Комната праздника','Игры','Украшения','Еда'];
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
const tsel=document.getElementById('time'); for(let h=10;h<=22;h++){['00','30'].forEach(m=>{if(h===22&&m==='30')return;const v=String(h).padStart(2,'0')+':'+m; tsel.insertAdjacentHTML('beforeend',`<option value='${v}'>${v}</option>`);});}
buildNav();goStep(0);
['date','guests'].forEach(id=>document.getElementById(id)?.addEventListener('change',()=>renderCards('packages',PACKAGES,'package')));
document.addEventListener('click',e=>{const g=e.target.closest('.wiz'); if(g){goStep(+g.dataset.go)} const p=e.target.closest('.prev'); if(p){goStep(+p.dataset.prev)}});

function renderCards(id,data,key){
  document.getElementById(id).innerHTML=data.map((x,i)=>{
    const n=x.name||x[0]; const p=x.price||x[1]||0; const img=x.img||'';
    const controls=(key==='food'||key==='decor')?`<div class="qty"><button class="qtym" data-k="${key}" data-i="${i}">-</button><span id="q_${key}_${i}">0</span><button class="qtyp" data-k="${key}" data-i="${i}">+</button></div>`:'';
    if(key==='package'){const g=+document.getElementById('guests')?.value||8;const t=tier(g);const weekend=isWeekend(document.getElementById('date')?.value);const cur=(weekend?x.prices.we:x.prices.wd)[t];const comp=`<div class='pkgcomp'>Банкетная комната ${x.roomHours} ч и ${x.arenaHours}:50 игры</div><div class='pkgrates'><div>До 8: ${(weekend?x.prices.we[0]:x.prices.wd[0])} ₽</div><div>До 16: ${(weekend?x.prices.we[1]:x.prices.wd[1])} ₽</div><div>До 20: ${(weekend?x.prices.we[2]:x.prices.wd[2])} ₽</div></div><div class='pkgsel'>Ваша цена: <b>${cur} ₽</b></div>`; return `<div class='card' data-k='${key}' data-i='${i}'><div>${n}</div>${comp}</div>`;}
    return `<div class='card' data-k='${key}' data-i='${i}'>${img?`<img src='${img}' style='width:100%;height:130px;object-fit:cover;margin-bottom:8px'>`:''}<div>${n}</div><div>${p} ₽</div>${controls}</div>`;
  }).join('')
}
renderCards('packages',PACKAGES,'package');renderCards('games',games,'game');renderCards('decor',decor,'decor');renderCards('food',food,'food');
function upd(){const list=[];let total=0;if(state.package){list.push('Пакет: '+state.package.name);total+=state.packagePrice||0} if(state.room){list.push('Комната: '+state.room.name);} ['game','decor','food'].forEach(k=>{Object.entries(state[k]||{}).forEach(([idx,qty])=>{const src=(k==='game'?games:k==='decor'?decor:food)[idx];if(!src)return;const unit=(src.price||src[1]||0);list.push((src.name||src[0])+' — '+unit+' ₽ x'+qty+' = '+(unit*qty)+' ₽');total+=unit*qty;});});document.getElementById('summaryList').innerHTML=list.map(x=>`<li>${x}</li>`).join('');document.getElementById('summaryTotal').innerText=total}
function tier(g){return g<=8?0:g<=16?1:2}
function isWeekend(d){const x=new Date(d);const day=x.getDay();return day===0||day===6}

document.addEventListener('click',e=>{
  if(e.target.classList.contains('qtyp')||e.target.classList.contains('qtym')){
    const k=e.target.dataset.k,i=e.target.dataset.i; state[k]=state[k]||{}; state[k][i]=(state[k][i]||0)+(e.target.classList.contains('qtyp')?1:-1); if(state[k][i]<0)state[k][i]=0; document.getElementById(`q_${k}_${i}`).innerText=state[k][i]; upd(); return;
  }
  const c=e.target.closest('.card');if(!c)return;const k=c.dataset.k,i=+c.dataset.i;
  if(k==='package'){ c.parentElement.querySelectorAll('.card').forEach(x=>x.classList.remove('active')); c.classList.add('active'); state.package=PACKAGES[i];const g=+document.getElementById('guests')?.value||8;const t=tier(g);state.packagePrice=(isWeekend(document.getElementById('date').value)?state.package.prices.we:state.package.prices.wd)[t];}
  if(k==='game'){ state.game={}; state.game[i]=1; c.parentElement.querySelectorAll('.card').forEach(x=>x.classList.remove('active')); c.classList.add('active'); }
  if(c.parentElement && c.parentElement.id==='tables'){ state.room={name:c.innerText.split('\n')[0]||'Комната'}; c.parentElement.querySelectorAll('.card').forEach(x=>x.classList.remove('active')); c.classList.add('active'); }
  upd();
});

document.getElementById('toStep1').onclick=()=>goStep(1);
document.getElementById('toStep3').onclick=()=>{document.querySelector('[data-step="3"]').style.display='block';goStep(3);upd();}

document.getElementById('findArena').onclick=()=>{
  const d=document.getElementById('date').value;
  const t=document.getElementById('time').value;
  if(!state.package||!d||!t){alert('Выберите дату/время/пакет');return;}
  const end=new Date(`2000-01-01T${t}:00`);
  end.setHours(end.getHours()+state.package.arenaHours);
  const ee=String(end.getHours()).padStart(2,'0')+':'+String(end.getMinutes()).padStart(2,'0');
  document.getElementById('slots').innerHTML=`<div class='card active'>Слот: ${t}-${ee}</div>`;

  const guests=(+document.getElementById('guests')?.value||0);
  const url=`/svstolviar.php?dat=${encodeURIComponent(d)}&start=${encodeURIComponent(t)}&stop=${encodeURIComponent(ee)}&kol=${guests}&voz=0&zal=4&ok=2&t=${Date.now()}`;
  fetch(url).then(r=>r.text()).then(txt=>{
    let arr=[];
    try{arr=JSON.parse(txt);}catch(e){arr=[];}
    const box=document.getElementById('tables');
    if(!Array.isArray(arr)||!arr.length){box.innerHTML='<div class="card">Нет свободных столов на этот слот</div>';return;}
    arr=arr.filter(it=>String(it.zal)==='4'||String(it.zal).toLowerCase()==='viar'); box.innerHTML=arr.map(it=>`<div class="card" data-table="${it.id||''}">${it.kar?`<img src='${it.kar}' style='width:100%;height:120px;object-fit:cover;margin-bottom:8px'>`:''}<div><b>Зал 4 (VR Arena)</b></div><div>Стол ${it.stol||''}</div><div>Вместимость: ${it.vm||'-'}</div><div>${it.op||''}</div></div>`).join('');
  });

  document.querySelector('[data-step="2"]').style.display='block';
  goStep(2);
};

document.getElementById('toStep4').onclick=()=>{document.querySelector('[data-step="4"]').style.display='block';goStep(4);upd();}
document.getElementById('toStep6').onclick=()=>{document.querySelector('[data-step="5"]').style.display='block';goStep(5);upd();}
document.getElementById('finishFlow').onclick=()=>{const main=document.querySelector('.vr-main');const panel=document.getElementById('finalPanel');main.style.transition='opacity .4s';main.style.opacity='0';setTimeout(()=>{main.style.display='none';panel.style.display='block';panel.style.opacity='0';panel.style.transition='opacity .4s';setTimeout(()=>panel.style.opacity='1',20);},350);}
document.getElementById('backToForm').onclick=()=>{document.querySelector('.vr-main').style.display='block';setTimeout(()=>{document.querySelector('.vr-main').style.opacity='1';},20);document.getElementById('finalPanel').style.display='none';}
document.getElementById('getCode').onclick=()=>alert('SMS код отправлен (демо)');
document.getElementById('sendOrder').onclick=()=>alert('Заявка отправлена!');


</script>
<?php get_footer(); ?>
