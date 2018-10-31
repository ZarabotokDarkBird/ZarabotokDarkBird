<?
include ('config.php');

$oldprice = $price*5;

$base = file_get_contents('base.dat');
list($title, $desc, $img, $color1, $color2) = explode("||", $base);
?>


<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="favicon.ico" rel="shortcut icon">
  <link rel="stylesheet" href="style.css">
  <link href="css/magnific-popup.css" rel="stylesheet">
  <title><? echo $title ;?></title>  
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
  <style>
  a, h1, h2, h3, h4h5, h6 {
  	color: <? echo $color1 ;?>;
  }
 .color{
 	color: <? echo $color1;?>;
 }	
 
  .color_fon{
 	background-color: #<? echo $color2;?>;
 }	
 .hero:before {
  background: -webkit-gradient(linear, 0 0, 0 bottom, from(#<? echo $color2;?>), to(#<? echo $color2;?>));

  z-index:-1;
}
.krug {
  border: 6px solid #ffffff;
    background: #<? echo $color2;?>;
  border-radius: 100%;
  border-top: 6px solid #423D3B;
  transform: rotate(-45deg);
  box-shadow: 0 0 1px #000 inset,
              0 0 2px #fff inset,
              0 0 1px #000;
}
  	
  </style>
</head>

<body>
  <div class="container box-shadow">


    <div class="info">
      <article class="article clearfix">
              <div class="col_100">
         <p> <img class="img img_floatright"  src="<? echo $img;?>" alt="" /></p>

        </div>
        <div class="col_100">
          <div class="logo color"><? echo $title;?></div><br/>
          <div class="logomini color"><? echo $desc;?></div>
<p><b><span class="red">Внимание!</span></b> Если Вы сейчас пройдете мимо, будете жалеть об этом всю жизнь! Полностью автоматическая система заработка. Подключил и забыл! Деньги капают круглые сутки!</p>
        </div>


</article>

        <div class="clearfix"></div>
        
        
      <article class="hero color_fon clearfix">
        <div class="col_100">
          <h1>Хватит вкалывать! Пусть <? echo $title;?> работает за Вас!</h1>
         
<p><? echo $title;?> - продуманная до мелочей автоматическая система, которая позволяет получать доход 3000 рублей в сутки в сети Интернет на полном автомате.</p>
<p><b>Система действует по принципу:</b></p>
<p>настроил - запустил - получил прибыль.</p>
<p><? echo $title;?> пашет, а Вы занимаетесь своими делами. Круглосуточный доход гарантирован!</p>
         
        </div>
      </article>
<div class="clearfix "></div>
      <article class="article clearfix">



</article>
        <div class="clearfix"></div>


<div class="clearfix"></div>
      <article class="article clearfix">
        <div class="col_100">
         <div class="event color">Как зарабатывать на методе «<? echo $title;?>»!</div>
<p><b>Вам нужно всего лишь вписать в нужное место свою ссылку на оплату, залить нужный архив на хостинг и Ваша система сразу будет готова к работе!</b></p>
<img  src="https://img-fotki.yandex.ru/get/197756/250084056.1/0_202cf0_2591ab69_orig.jpg
 " alt="" class="img img_floatleft" width="270px" />
<p>Помните все эти проекты типа "2 друга","Рублик","100 кусков","Geometrika" и так далее, где вложив определённую сумму Вы получали какую то прибыль? При этом Вам предоставляли доступ в Ваш личный кабинет, который в любой момент могли у Вас отобрать, забанить, исключить из проекта или же Вы просто теряли от него пароль и никак не могли его восстановить.</p>

<p>К тому же Ваша прибыль в подобных проектах зачастую ограничивалась количеством мест в матрице и ко всему прочему люди, которых Вы приглашали, благополучно перекочёвывали к другим участникам или же к нечестному на руку администратору проекта.</p>

<p>С Вашим личным сайтом никогда ничего подобного не случится! Ведь «<? echo $title;?>» будет принадлежать только Вам и будет жить только у Вас (на Вашем бесплатном или по желанию платном хостинге). Вы сможете подарить комплект «<? echo $title;?>» своему ребёнку или друзьям, ведь чем больше курсов будет "гулять" в интернете, тем популярнее он будет!</p>

<p>Деньги с вашего счета Вы легко сможете вывести на Вашу пластиковую карту или кошелек, а за тем обналичить в ближайшем банкомате. В подробной инструкции к Вашему курсу «<? echo $title;?>», которую Вы получите сразу же после оплаты, чётко, шаг за шагом, описан процесс настройки и запуска. Разобраться с ней сможет каждый.</p>
        <div class="col_100">
        <div class="event color">Особенности метода "<? echo $title;?>": </div><br/>  
        </div>
      <article class="article clearfix">
        <div class="col_25">
<center><div class="krug">
    <p><img  src="img/clock.png" alt="" /></p>
  </div></center>
	<center><h3>Достаточно уделять 5 минут в день </h3></center>

        </div>

        <div class="col_25">
<center><div class="krug">
    <p><img  src="img/money.png" alt="" /></p>
  </div></center>
<center><h3>Первые деньги через 1 час</h3></center>
        </div>

        <div class="col_25">
<center><div class="krug">
   <p> <img  src="img/check.png" alt="" /></p>
  </div></center>
<center><h3>Доступность для каждого, независимо от опыта</h3></center>
        </div>
                <div class="col_25">
<center><div class="krug">
   <p> <img  src="img/globe.png" alt="" /></p>
  </div></center>
<center><h3>Независимость и свобода</h3></center>
        </div>

        <div class="clearfix"></div>
        </article>
           <article class="article clearfix">
        <div class="col_100">
      
<center>  <h3>ПОСМОТРИТЕ НА РЕЗУЛЬТАТЫ ТЕХ, КТО УЖЕ ПОЛЬЗУЕТСЯ МЕТОДИКОЙ «<?echo $title;?>»</h3></center>
<img src="http://img-fotki.yandex.ru/get/62069/250084056.1/0_202e68_fad00772_orig.jpg" alt="" />
        </div>
      </article> 
                  <div class="event color">Что я получу в комплекте «<?echo $title;?>»?</div>
<p>В комплект «<? echo $title;?>» входят:
<img src="https://img-fotki.yandex.ru/get/56796/250084056.1/0_202ce4_70c77035_orig.png
 " alt=""  class="img img_floatright" width="200px"  />
<ul>
	<li>Движок «<?echo $title;?>» (устанавливается на хостинг за 2 мин.)</li>
	<li>Подробная инструкция по получению бесплатного хостинга и домена</li>
	<li>Подробная инструкция по настройке движка</li>
	<li>Методы получения бесплатного и платного трафика</li>
</ul>
Все инструкции написаны простым и понятным языком. Разобраться очень просто. Изучение и настройка занимает не более часа. И уже через два часа вы получите первые деньги. А за первые сутки – <b>более 3000 рублей</b>.
</p>
<center><h3>Просто посмотрите видео, где я устанавливаю и настраиваю денежный сайт <br/><b>ВСЕГО ЗА 2 МИНУТЫ</b>:</h3></center>
<center><p><iframe width="480" height="270" src="https://www.youtube.com/embed/JHRjE8pCJl8" frameborder="0" allowfullscreen></iframe></p></center><p>Прсто повторяете все действия, описанные в курсе и начинаете зарабатывать. Проще метода не бывает. Тут нет никакого обмана. По данной методике я работаю уже более года. Сейчас мы обновили технологию, улучшили рекламу, сделали более удобный движок. Доходы выросли в несколько раз.</p>


        </div>


</article>
        <div class="clearfix"></div>

      <article class="hero color_fon clearfix">
        <div class="col_100">
          <h1>Сколько стоит «<? echo $title;?>»?</h1>
<p>А вот тут самое интересное! Вы уже привыкли, что подобные курсы стоят 300, 500 или <b>даже 1000 рублей</b>. Но тут всё не так! Данный метод стоит:   </p>
<p>Обычная цена комплекта <b><span class="red"><strike><? echo $oldprice;?>руб.</strike></span> </b></p>
<p>Закажите комплект «<? echo $title;?>» пока КРУТИТСЯ СЧЕТЧИК и забирайте его</p>
<br/><? echo $timer;?><br/>
<p>В ПЯТЬ РАЗ ДЕШЕВЛЕ, ВСЕГО ЗА:</p>
<h1><span class="mess"><? echo $price;?></span><br/> рублей</h1>
</div>
        <div class="col_25">
<p><h1>→ → → →</h1></p>
        </div>
        <div class="col_55">
  <p><a class="button"  href="<? echo $partner;?>">ЗАБРАТЬ МЕТОД</a></p>
        </div>
                <div class="col_25">
 <p><h1>← ← ← ←</h1></p>
        </div>
        
      </article>

        <div class="clearfix"></div>
    </div>
    
    <footer class="footer clearfix">
      <div class="copyright"><? echo $title;?>  	<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="#ebebeb" data-options="big,square,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir"></div> </div>
      <nav class="menu_bottom">
<ul>
	<li><a href="http://megacourses.ru">ЛУЧШИЕ КУРСЫ ПО ЗАРАБОТКУ В ИНТЕРНЕТ!</a></li>
</ul>
      </nav>
    </footer>

  </div>
</body>
</html>