<?php   if (!empty($_POST['phone'])) {
        send_the_order ($_POST);
    }
    function send_the_order ($post){
		
        $params=array(
			'flow_hash' => 'AOBk',
            'landing' => $post['landing'],
            'referrer' => $post['referrer'],
            'phone' => $post['phone'],
            'name' => $post['name'],
            'country' => 'SK',
            'address' => $post['address'],
            'email' => $post['email'],
            'lastname' => $post['lastname'],
            'comment' => $post['comment'],
            'layer' => $post['layer'],
            'sub1' => $post['sub1'],
            'sub2' => $post['sub2'],
            'sub3' => $post['sub3'],
            'sub4' => $post['sub4'],
            'sub5' => $post['sub5'],
            'link_redirect' => $post['link_redirect']
        );
		$utm_source = isset($_GET['utm_source'])	? $_GET['utm_source'] 	: null;
		$utm_medium = isset($_GET['utm_medium'])	? $_GET['utm_medium'] 	: null;
		$utm_campaign = isset($_GET['utm_campaign'])	? $_GET['utm_campaign'] : null;
		$utm_term = isset($_GET['utm_term'])		? $_GET['utm_term'] 	: null;
		$utm_content = isset($_GET['utm_content'])	? $_GET['utm_content'] 	: null;	
		$url = 'http://wapi.leadbit.com/api/new-order/_5f882f4d3ea93800748624';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $return= curl_exec($ch);
        curl_close($ch);
        $array=json_decode($return, true);
        header("Location: order.html");
} ?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <!-- <base href="/"> -->
    <title>KETO</title>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
    <!-- Template Basic Images End -->
    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->
    <link rel="stylesheet" href="css/main.min.css">
    

<script type="text/javascript" src="cdn/js/geo/sk.js"></script>
<script type="text/javascript" src="cdn/js/countries.js"></script>
<script type="text/javascript" src="cdn/js/jquery.js"></script>
    
<script type="text/javascript" src="js/translater.js"></script>
<!-- Global site tag (gtag.js) - Google Ads: 861040435 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-861040435"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-861040435');
</script>

</head>
<body>
  
  
  <div class="header">
    <div class="container">
      <div class="row justify-content-between">
        <div>
          <div class="header-title_1 wow bounceInDown lt0" style="visibility: visible; animation-name: bounceInDown;"> revolučný  prevrat<img alt="" src="img/@2x/p1.png"><span>vďaka ketóze!</span></div>
          <div class="header-title_2 wow fadeIn" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;"><img alt="" src="img/@2x/p2.png"></div>
          <div class="header-title_3 wow fadeIn" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;"><img alt="" src="img/@2x/p3.png"></div>
        </div>
        <div class="contact-form-area only-desctop wow fadeInUp" data-wow-delay="1.7s" style="visibility: visible; animation-delay: 1.7s; animation-name: fadeInUp;">
          <div class="contact-awards"></div>
          <div class="contact-form-offer-title lt1">iba dnes! <span>zľava 50%</span></div>
          <div class="contact-form-price">
            <div class="form-newprice lt2">nová cena:<span class="price_main"></span></div>
            <div class="form-oldprice lt3">pôvodná cena:<span class="price_old"></span></div>
          </div>
          <div class="form-timer">
            <div class="form-timer-title lt4">Do konca akcie zostáva:</div>
            <script src="js/timer.js">
            </script>
          </div>
          <div class="contact-form">
            <form action="" method="post" class="order_form al-form">
              <label class="lt5">Vyberte si krajinu:<select class="country_select" id="country" name="country"></select></label>
              <label class="lt6">Vaše meno:<input name="name" placeholder="Jana Macková" required="" type="text"></label>
              <label class="lt7">Telefónne číslo:<input name="phone" placeholder="+421 900 000 000" required="" type="text"></label>
              <button class="form-btn lt8">objednať ihneď</button>
              <div class="form-arrow"></div>
                <input type="hidden" name="landing" value="sk.ketodietnd.com"><input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>"><input type="hidden" name="createdAt" value="<?=date("Y-m-d H:i:s")?>"><input type="hidden" name="userAgent" value="<?=$_SERVER['HTTP_USER_AGENT']?>"><input type="hidden" name="sub1" value="<?php echo isset($_GET['sub1']) ? $_GET['sub1'] : '' ;?>"><input type="hidden" name="sub2" value="<?php echo isset($_GET['sub2']) ? $_GET['sub2'] : '' ;?>"><input type="hidden" name="sub3" value="<?php echo isset($_GET['sub3']) ? $_GET['sub3'] : '' ;?>"><input type="hidden" name="sub4" value="<?php echo isset($_GET['sub4']) ? $_GET['sub4'] : '' ;?>"><input type="hidden" name="sub5" value="<?php echo isset($_GET['sub5']) ? $_GET['sub5'] : '' ;?>"><input type="hidden" name="referrer" value="<?=$_SERVER['HTTP_REFERER']?>">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="only-mobile-btn">
      <a class="navigate-btn margin-c lt9" href="#abc"> objednať ihneď </a>
    </div>
  </div>
  <section class="section-2">
    <div class="container">
      <div class="section2-title wow bounceInUp lt10" data-wow-offset="200" style="visibility: hidden; animation-name: none;">Bezpečné chudnutie<span>s pomocou ketózy</span></div>
      <div class="left-descr">
        <p class="wow bounceInLeft lt11" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;"><b>Ketóza – získavanie energie z tukov, nie z glukózy, ktorá vstupuje do tela pomocou sacharidov.</b> Ak telo prestane dostávať energiu z uhľohydrátov, po 7 až 14 dňoch vstúpi do stavu ketózy. Výsledkom je aktívna premena tukov na energiu.</p>
        <p class="wow bounceInLeft lt12" data-wow-delay=".7s" style="visibility: hidden; animation-delay: 0.7s; animation-name: none;"> Diéta zahŕňajúca vylúčenie sacharidov z diéty je však pre človeka ťažké tolerovať..<br><span style="color: #9f116b; font-weight: 700;">KETO DIÉTA vám pomôže začať proces ketózy bez toho, aby ste sa sami trápili.</span> Komplex zabezpečí príjem ketónu a telies z vonkajšej strany a pomôže vám zbaviť sa prebytočného tuku.</p>
      </div>
    </div>
  </section>
  <div class="h2 wow bounceInUp" data-wow-offset="200" style="visibility: hidden; animation-name: none;">
     <span class="lt13">VAŠA</span> <span class="lt14">КЕТО</span> <span class="lt15">DIÉTA</span>
  </div>
  <section class="section-3 wow fadeInLeft" data-wow-delay=".7s" style="visibility: hidden; animation-delay: 0.7s; animation-name: none;">
    <div class="container">
      <div class="row justify-content-between">
        <div class="section-3-left"><img alt="" src="img/@2x/pz1.png"></div>
        <div class="section-3-right wow fadeInDown" data-wow-delay="1s" data-wow-offset="100" style="visibility: hidden; animation-delay: 1s; animation-name: none;">
          <div class="h3 lt16">keto<span>diet</span></div>
          <div class="section-3-subtitle lt17"> Povinná zložka stravy.</div><img alt="" class="s3-img" src="img/@2x/p6.png">
          <p class="s3-p lt18"> Kapsuly spúšťajú ketózu v tele a premieňajú uložené tuky na energiu. <b> Zaručene schudnete každý deň.</b></p>
        </div>
      </div>
    </div>
  </section>
  <section class="section-4">
    <div class="container">
      <div class="s4-title-line wow bounceInUp lt19" data-wow-offset="100" style="visibility: hidden; animation-name: none;">VÝHERNÁ KOMBINÁCIA <span class="big">KETÓZA+ </span><span class="h3">keto<span>diet</span></span></div>
      <div class="s4-description wow fadeIn lt20" data-wow-delay=".7s" style="visibility: hidden; animation-delay: 0.7s; animation-name: none;">Dosiahnutie ketózy zvyčajne trvá 7 až 14 dní. Iba 1 kapsula KETO DIET tento čas skráti na 40 - 50 minút, počas ktorého sa začne proces premeny tukov na energiu a znižovanie telesného tuku. Stačí užívať <span> KETO DIET denne a schudnete až o 10 až 15 kg  mesačne!</span></div>
      <div class="row stages-area">
        <div class="col-lg-6">
          <div class="stages-title lt21">1 krok</div>
          <div class="stages-card wow bounceInDown" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
          <div class="stages-description lt22"> Ketóza vám umožní spaľovať ťažko dosiahnuteľný tuk pri zachovaní svalovej hmoty. Znížením príjmu uhľohydrátov sa zabezpečí stabilizácia vašej hmotnosti a nevrátenie stratených kilogramov.</div><img alt="" src="img/fatcell.gif" width="337"></div>
        </div>
        <div class="col-lg-6">
          <div class="stages-title lt23">2 krok</div>
          <div class="stages-card wow bounceInDown" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
          <div class="stages-description lt24">Keto Diet spúšťa pôsobenie ketózy: urýchľuje metabolizmus, znižuje chuť do jedla a priamo útočí na vaše tukové zásoby!</div><img alt="" src="img/weightloss.gif" width="337"></div>
        </div>
      </div>
    </div><a class="navigate-btn position-a wow shake lt25" data-wow-delay="2s" href="#abc" style="visibility: hidden; animation-delay: 2s; animation-name: none;">objednať ihneď</a>
  </section>
  <section class="section-5">
    <div class="s5-title-line wow bounceInUp lt26" data-wow-offset="200" style="visibility: hidden; animation-name: none;"><span class="big"> VÝKONNÉ ZLOŽKY </span>V ZLOŽENÍ <span class="h3">keto<span>diet</span></span></div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="s5-img wow fadeIn" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;"><img alt="" src="img/@2x/s3.png"></div>
        </div>
        <div class="col-md-8">
          <div class="s5-list">
            <div class="list-item wow bounceInLeft" data-wow-delay=".7s" style="visibility: hidden; animation-delay: 0.7s; animation-name: none;">
              <div class="list-icon ico1"></div>
              <div class="list-item-title lt27"> Malinové ketóny </div>
              <div class="list-item-description lt28"> Tieto účinky sú podobné ako ketónové telá produkované ľudským telom. Mimoriadne aktívny.<ul><li><span>Premieňajú </span>tuk na energiu</li><li><span>Urýchľujú </span>metabolizmus</li><li><span>Potláčajú </span>chuť do jedla</li></ul></div>
            </div>
            <div class="list-item wow bounceInLeft" data-wow-delay="1.3s" style="visibility: hidden; animation-delay: 1.3s; animation-name: none;">
              <div class="list-icon ico2"></div>
              <div class="list-item-title lt29">Beta sitosterol</div>
              <div class="list-item-description lt30"> Neutralizuje účinky nesprávneho stravovania<ul><li><span>Normalizujú </span>metabolizmus lipidov</li><li><span>Čistí krvné cievy </span>od «zlého» cholesterolu</li><li><span>Zlepšuje postavu, </span>bojuje s celulitídou</li></ul></div>
            </div>
            <div class="list-item bounceInLeft wow" data-wow-delay="1.6s" style="visibility: hidden; animation-delay: 1.6s; animation-name: none;">
              <div class="list-icon ico3"></div>
              <div class="list-item-title lt31">Koenzým Q10</div>
              <div class="list-item-description lt32"> Deficit koenzýmu Q10 je príčinou obezity v 78% prípadov <ul><li><span>Нormalizuje </span>výmenu látok</li><li><span>Znižuje </span>cholesterol</li><li><span>Zbavuje Vás to, </span>prejedania sa</li></ul></div>
            </div>
            <div class="list-item bounceInLeft wow" data-wow-delay="1.9s" style="visibility: hidden; animation-delay: 1.9s; animation-name: none;">
              <div class="list-icon ico4"></div>
              <div class="list-item-title lt33"> L-karnitín </div>
              <div class="list-item-description lt34"> Látka spojená s vitamínmi B sa syntetizuje v ľudskom tele <ul><li><span>Premieňa </span>tuk na energiu</li><li><span> Zmierňuje podráždenosť, </span>zlepšuje náladu</li><li><span>Zbavuje </span>depresie</li></ul></div>
            </div>
            <div class="list-item mobile-off bounceInLeft wow" data-wow-delay="2.2s" style="visibility: hidden; animation-delay: 2.2s; animation-name: none;">
              <div class="list-icon ico5"></div>
              <div class="list-item-title lt35">Bromelaín</div>
              <div class="list-item-description lt36"> Proteín a enzým tráviaci tuk vylučovaný z dužiny a stonky ananásu <ul><li><span>Aktívne rozpúšťa </span> viscerálny tuk </li><li><span>Odstraňuje </span>opuchy</li><li><span>Zabraňuje </span> obezite vnútorných orgánov </li></ul></div>
            </div>
            <div class="list-item mobile-off bounceInLeft wow" data-wow-delay="2.2s" style="visibility: hidden; animation-delay: 2.2s; animation-name: none;">
              <div class="list-icon ico6"></div>
              <div class="list-item-title lt37"> Organický synefrín </div>
              <div class="list-item-description lt38"> Je výrazne lipolytický, blokuje aktivitu alfa receptorov v tukových bunkách <ul><li><span> Bojuje s „perzistentným“ tukom, vrátane toho viscerálneho </span></li><li><span> Zvyšuje spotrebu </span> telesných kalórií </li><li><span>Zvyšuje práceschopnosťь </span>a výdrž</li></ul></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="expert-area">
    <div class="container">
      <div class="expert-title wow bounceInUp lt39" data-wow-offset="200" style="visibility: hidden; animation-name: none;">NÁZOR ODBRNÍKOV NA <span class="h3">keto<span>diet</span></span></div>
      <div class="expert-subtitle wow fadeInLeft lt40" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;"><span> Dorothy Goodall</span>, je americký odborník na výživu, v tomto odbore má prax 30 rokov.</div>
      <div class="expert-description wow fadeInLeft" data-wow-delay=".9s" style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
        <p class="lt41">Pri procese ketózy sa tuky rozdeľujú na mastné kyseliny a glycerín, ktoré sa následne transformujú na ketónové telá. Ketóza sa však spustí iba v prípade úplného vyčerpania zásob glykogénu v pečeni a svalovom tkanive, zvyčajne k tomu dôjde do 7-14 dní.</p>
        <p class="lt42">Pre urýchlenie tohto procesu, a teda aj spaľovanie tukov, odporúčam svojim pacientom výživový doplnok KETO DIÉTY. KETO DIÉTY dokonale podporuje telo počas diéty keto: obohacuje potrebné prvky, potláča hlad, odstraňuje únavu a úzkosť. <b>KETO DIET, poskytuje zdravé a prirodzené chudnutie a nemenej dôležité, bez ochabnutej pokožky, ktorá vášmu telu prinesie mimoriadne výhody.</b></p>
        <div class="expert-excerpt lt43"> Hlavnými vlastnosťami KETO DIÉTY sú urýchlenie prechodu tela do stavu ketózy a pomoc pri premene tukov na energiu..</div>
      </div>
    </div><a class="navigate-btn position-a wow shake lt44" data-wow-delay="2s" href="#abc" style="visibility: hidden; animation-delay: 2s; animation-name: none;">objednať ihneď</a>
  </section>
  <section class="sucess-area">
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
          <div class="sucess-title wow bounceInUp lt45" data-wow-offset="200" style="visibility: hidden; animation-name: none;">Pripojte sa <b>k tisícke ľudí,</b> ktorí už vyskúšali<span class="h3"> keto<span>diet</span></span></div>
          <div class="sucess-img wow fadeIn" data-wow-delay="1s" style="visibility: hidden; animation-delay: 1s; animation-name: none;"><img alt="" src="img/@2x/success.png"></div>
        </div>
      </div>
    </div>
  </section>
      
      
      
      
      
      
      
      
  
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
  <section class="feedback">
    <div class="feedback-title wow fadeIn" data-wow-offset="200">
      Recenzie
    </div>

    <div class="feedback-container wow fadeIn" data-wow-offset="200">
        <div class="feedback-slider">
            <div class="feedback-item">
                <div class="row  align-items-center">
                    <div class="col-lg-4">
                        <img src="img/@2x/f1.jpg" alt="">
                    </div>
                    <div class="col-lg-8">
                        <div class="feedback-item-description">
                            <p>
                              «Vždy som bola na diéte. Problémy s hladom, spánkom a kožou boli mojimi stálymi spoločníkmi. Na váhe bolo mínus, ale potom zas som sa začala prejedať a tak neustále dookola. O KETO DIET som sa dozvedela od odborníka na výživu. Výsledok chudnutia ma potešil takmer okamžite. Každý týždeň som videla na váhach mínus 3 kg. Pre mňa to bola skutočná mágia. Moja kondícia bola skvelá, netrpela som hladom a spala som 7 hodín».
                            </p>
                            <p>Zuzana, 27 rokov</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="feedback-item">
                <div class="row  align-items-center">
                    <div class="col-lg-4">
                        <img src="img/@2x/f2.jpg" alt="">
                    </div>
                    <div class="col-lg-8">
                        <div class="feedback-item-description">
                            <p>
                              «Pre mňa sa KETO DIET stala záchranou. Nikdy som si nemyslela, že môžem jesť všetko, čo milujem a zároveň chudnúť. Faktom je, že som mala v strave vždy nadbytok uhľohydrátov. To malo za následok nadváhu 100 kg. Všeobecne, hneď ako som mierne upravil množstvo uhľohydrátov, hmotnosť začala klesať. Ale nemôžem žiť bez uhľohydrátov, pretože mám veľmi rada rýchle občerstvenie. Potom som sa dozvedel o KETO DIET. Po užívaní tohto lieku proces horenia prebytku prešiel oveľa rýchlejšie a ja som sa ani nemusela vzdať uhľohydrátov. Celkovo som za 4 mesiace schudla 25 kg. KETO DIET je jednoducho super! Odporúčam ho každému!»
                            </p>
                            <p>Monika, 49 rokov</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="feedback-item">
                <div class="row  align-items-center">
                    <div class="col-lg-4">
                        <img src="img/@2x/f3.jpg" alt="">
                    </div>
                    <div class="col-lg-8">
                        <div class="feedback-item-description">
                            <p>
                              «Ako málo vieme o našom tele. Nemyslela som ani na to, aké zložité procesy v ňom prebiehajú, až kým som sa nedostala k výžive a nepočula o ketóze. Som lenivý človek, neviem sedieť na diétach, ani športovať. Preto som hľadala niečo ľahké a rýchle. O KETO DIET môžem povedať jednu vec a to, že ju musíte vyskúšať! S ňou som schudla 15 kg a dosiahla tak svoju ideálnu postavu.»
                            </p>
                            <p>Jarmila, 34 rokov</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
      
      
      
      
      
      
      
      
      
      
      
  <section class="complex-area">
    <div class="container">
      <div class="complex-title wow bounceInUp lt63" data-wow-offset="200" style="visibility: hidden; animation-name: none;">Prišiel čas <b>sa zbaviť komplexov</b></div>
      <div class="complex-img wow fadeIn" data-wow-offset="200" style="visibility: hidden; animation-name: none;"><img alt="" src="img/@2x/complex.png"></div>
    </div>
  </section>
  <div class="header">
    <div class="container">
      <div class="row justify-content-between">
        <div>
          <div class="header-title_1 lt64"> revolučný  prevrat <img alt="" src="img/@2x/p1.png"><span>vďaka ketóze!</span></div>
          <div class="header-title_2"><img alt="" src="img/@2x/p2.png"></div>
          <div class="header-title_3"><img alt="" src="img/@2x/p3.png"></div>
        </div>
        <div class="contact-form-area" id="footerForm">
          <div class="contact-awards"></div>
          <div class="contact-form-offer-title lt65" id="abc">iba dnes! <span>zľava 50%</span></div>
          <div class="contact-form-price">
            <div class="form-newprice lt66">nová cena:<span class="price_main"></span></div>
            <div class="form-oldprice lt67">pôvodná cena:<span class="price_old"></span></div>
          </div>
          <div class="form-timer">
            <div class="form-timer-title lt68">Do konca akcie ostáva:</div>
            <script src="js/timer.js">
            </script>
          </div>
          <div class="contact-form">
            <form action="" method="post" class="order_form al-form">
              <label class="lt69">Vyberte si krajinu:<select class="country_select" id="country" name="country"></select></label>
              <label class="lt70">Vaše meno:<input name="name" placeholder=" Jana Macková " required="" type="text"></label>
              <label class="lt71">Telefónne číslo:<input name="phone" placeholder="+421900 000 000" required="" type="text"></label>
              <button class="form-btn lt72">objednať ihneď</button>
              <div class="form-arrow"></div>
                <input type="hidden" name="landing" value="sk.ketodietnd.com"><input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>"><input type="hidden" name="createdAt" value="<?=date("Y-m-d H:i:s")?>"><input type="hidden" name="userAgent" value="<?=$_SERVER['HTTP_USER_AGENT']?>"><input type="hidden" name="sub1" value="<?php echo isset($_GET['sub1']) ? $_GET['sub1'] : '' ;?>"><input type="hidden" name="sub2" value="<?php echo isset($_GET['sub2']) ? $_GET['sub2'] : '' ;?>"><input type="hidden" name="sub3" value="<?php echo isset($_GET['sub3']) ? $_GET['sub3'] : '' ;?>"><input type="hidden" name="sub4" value="<?php echo isset($_GET['sub4']) ? $_GET['sub4'] : '' ;?>"><input type="hidden" name="sub5" value="<?php echo isset($_GET['sub5']) ? $_GET['sub5'] : '' ;?>"><input type="hidden" name="referrer" value="<?=$_SERVER['HTTP_REFERER']?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="how-we-work">
    <div class="how-we-work-title lt73">Ako pracujeme</div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="how-we-work-card">
            <img alt="" src="img/@2x/i1.jpg">
            <div class="how-we-work-card-title lt74"> OBJEDNÁVANIE </div>
            <div class="how-we-work-description lt75">Ihneď po dokončení objednávky, vás bude náš manažér kontaktovať <br><b> a potvrdí objednávku </b></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="how-we-work-card">
            <img alt="" src="img/@2x/i2.jpg">
            <div class="how-we-work-card-title lt76">DODANIE</div>
            <div class="how-we-work-description lt77"> Ihneď po dokončení objednávky, vás bude náš manažér kontaktovať <br><b> a potvrdí objednávku </b></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="how-we-work-card">
            <img alt="" src="img/@2x/i3.jpg">
            <div class="how-we-work-card-title lt78">PLATBA</div>
            <div class="how-we-work-description lt79"><b> Žiadne platby vopred!</b> Platba objednávok sa vykonáva striktne pri prevzatí tovaru.</div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="how-we-work-card">
            <img alt="" src="img/@2x/i4.jpg">
            <div class="how-we-work-card-title lt80">Záruka</div>
            <div class="how-we-work-description lt81"> Pri nákupe v našom internetovom obchode si môžete byť istí vysokou kvalitou tovaru </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="footer lt82">
   BERNADATTE LTD, Av Ricardo J. Alfaro, Panama International       <br>        <a href="privacy.html">Privacy Policy</a>
  </div>
  <script src="js/scripts.min.js">
  </script>
  <script>
  new WOW().init();
  </script>
</body>
</html>
