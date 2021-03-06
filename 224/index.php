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
          <div class="header-title_1 wow bounceInDown lt0" style="visibility: visible; animation-name: bounceInDown;"> revolu??n??  prevrat<img alt="" src="img/@2x/p1.png"><span>v??aka ket??ze!</span></div>
          <div class="header-title_2 wow fadeIn" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;"><img alt="" src="img/@2x/p2.png"></div>
          <div class="header-title_3 wow fadeIn" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;"><img alt="" src="img/@2x/p3.png"></div>
        </div>
        <div class="contact-form-area only-desctop wow fadeInUp" data-wow-delay="1.7s" style="visibility: visible; animation-delay: 1.7s; animation-name: fadeInUp;">
          <div class="contact-awards"></div>
          <div class="contact-form-offer-title lt1">iba dnes! <span>z??ava 50%</span></div>
          <div class="contact-form-price">
            <div class="form-newprice lt2">nov?? cena:<span class="price_main"></span></div>
            <div class="form-oldprice lt3">p??vodn?? cena:<span class="price_old"></span></div>
          </div>
          <div class="form-timer">
            <div class="form-timer-title lt4">Do konca akcie zost??va:</div>
            <script src="js/timer.js">
            </script>
          </div>
          <div class="contact-form">
            <form action="" method="post" class="order_form al-form">
              <label class="lt5">Vyberte si krajinu:<select class="country_select" id="country" name="country"></select></label>
              <label class="lt6">Va??e meno:<input name="name" placeholder="Jana Mackov??" required="" type="text"></label>
              <label class="lt7">Telef??nne ????slo:<input name="phone" placeholder="+421 900 000 000" required="" type="text"></label>
              <button class="form-btn lt8">objedna?? ihne??</button>
              <div class="form-arrow"></div>
                <input type="hidden" name="landing" value="sk.ketodietnd.com"><input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>"><input type="hidden" name="createdAt" value="<?=date("Y-m-d H:i:s")?>"><input type="hidden" name="userAgent" value="<?=$_SERVER['HTTP_USER_AGENT']?>"><input type="hidden" name="sub1" value="<?php echo isset($_GET['sub1']) ? $_GET['sub1'] : '' ;?>"><input type="hidden" name="sub2" value="<?php echo isset($_GET['sub2']) ? $_GET['sub2'] : '' ;?>"><input type="hidden" name="sub3" value="<?php echo isset($_GET['sub3']) ? $_GET['sub3'] : '' ;?>"><input type="hidden" name="sub4" value="<?php echo isset($_GET['sub4']) ? $_GET['sub4'] : '' ;?>"><input type="hidden" name="sub5" value="<?php echo isset($_GET['sub5']) ? $_GET['sub5'] : '' ;?>"><input type="hidden" name="referrer" value="<?=$_SERVER['HTTP_REFERER']?>">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="only-mobile-btn">
      <a class="navigate-btn margin-c lt9" href="#abc"> objedna?? ihne?? </a>
    </div>
  </div>
  <section class="section-2">
    <div class="container">
      <div class="section2-title wow bounceInUp lt10" data-wow-offset="200" style="visibility: hidden; animation-name: none;">Bezpe??n?? chudnutie<span>s pomocou ket??zy</span></div>
      <div class="left-descr">
        <p class="wow bounceInLeft lt11" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;"><b>Ket??za ??? z??skavanie energie z tukov, nie z gluk??zy, ktor?? vstupuje do tela pomocou sacharidov.</b> Ak telo prestane dost??va?? energiu z uh??ohydr??tov, po 7 a?? 14 d??och vst??pi do stavu ket??zy. V??sledkom je akt??vna premena tukov na energiu.</p>
        <p class="wow bounceInLeft lt12" data-wow-delay=".7s" style="visibility: hidden; animation-delay: 0.7s; animation-name: none;"> Di??ta zah????aj??ca vyl????enie sacharidov z di??ty je v??ak pre ??loveka ??a??k?? tolerova??..<br><span style="color: #9f116b; font-weight: 700;">KETO DI??TA v??m pom????e za??a?? proces ket??zy bez toho, aby ste sa sami tr??pili.</span> Komplex zabezpe???? pr??jem ket??nu a telies z vonkaj??ej strany a pom????e v??m zbavi?? sa prebyto??n??ho tuku.</p>
      </div>
    </div>
  </section>
  <div class="h2 wow bounceInUp" data-wow-offset="200" style="visibility: hidden; animation-name: none;">
     <span class="lt13">VA??A</span> <span class="lt14">????????</span> <span class="lt15">DI??TA</span>
  </div>
  <section class="section-3 wow fadeInLeft" data-wow-delay=".7s" style="visibility: hidden; animation-delay: 0.7s; animation-name: none;">
    <div class="container">
      <div class="row justify-content-between">
        <div class="section-3-left"><img alt="" src="img/@2x/pz1.png"></div>
        <div class="section-3-right wow fadeInDown" data-wow-delay="1s" data-wow-offset="100" style="visibility: hidden; animation-delay: 1s; animation-name: none;">
          <div class="h3 lt16">keto<span>diet</span></div>
          <div class="section-3-subtitle lt17"> Povinn?? zlo??ka stravy.</div><img alt="" class="s3-img" src="img/@2x/p6.png">
          <p class="s3-p lt18"> Kapsuly sp??????aj?? ket??zu v tele a premie??aj?? ulo??en?? tuky na energiu. <b> Zaru??ene schudnete ka??d?? de??.</b></p>
        </div>
      </div>
    </div>
  </section>
  <section class="section-4">
    <div class="container">
      <div class="s4-title-line wow bounceInUp lt19" data-wow-offset="100" style="visibility: hidden; animation-name: none;">V??HERN?? KOMBIN??CIA <span class="big">KET??ZA+ </span><span class="h3">keto<span>diet</span></span></div>
      <div class="s4-description wow fadeIn lt20" data-wow-delay=".7s" style="visibility: hidden; animation-delay: 0.7s; animation-name: none;">Dosiahnutie ket??zy zvy??ajne trv?? 7 a?? 14 dn??. Iba 1 kapsula KETO DIET tento ??as skr??ti na 40 - 50 min??t, po??as ktor??ho sa za??ne proces premeny tukov na energiu a zni??ovanie telesn??ho tuku. Sta???? u????va?? <span> KETO DIET denne a schudnete a?? o 10 a?? 15 kg  mesa??ne!</span></div>
      <div class="row stages-area">
        <div class="col-lg-6">
          <div class="stages-title lt21">1 krok</div>
          <div class="stages-card wow bounceInDown" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
          <div class="stages-description lt22"> Ket??za v??m umo??n?? spa??ova?? ??a??ko dosiahnute??n?? tuk pri zachovan?? svalovej hmoty. Zn????en??m pr??jmu uh??ohydr??tov sa zabezpe???? stabiliz??cia va??ej hmotnosti a nevr??tenie straten??ch kilogramov.</div><img alt="" src="img/fatcell.gif" width="337"></div>
        </div>
        <div class="col-lg-6">
          <div class="stages-title lt23">2 krok</div>
          <div class="stages-card wow bounceInDown" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
          <div class="stages-description lt24">Keto Diet sp??????a p??sobenie ket??zy: ur??ch??uje metabolizmus, zni??uje chu?? do jedla a priamo ??to???? na va??e tukov?? z??soby!</div><img alt="" src="img/weightloss.gif" width="337"></div>
        </div>
      </div>
    </div><a class="navigate-btn position-a wow shake lt25" data-wow-delay="2s" href="#abc" style="visibility: hidden; animation-delay: 2s; animation-name: none;">objedna?? ihne??</a>
  </section>
  <section class="section-5">
    <div class="s5-title-line wow bounceInUp lt26" data-wow-offset="200" style="visibility: hidden; animation-name: none;"><span class="big"> V??KONN?? ZLO??KY </span>V ZLO??EN?? <span class="h3">keto<span>diet</span></span></div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="s5-img wow fadeIn" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;"><img alt="" src="img/@2x/s3.png"></div>
        </div>
        <div class="col-md-8">
          <div class="s5-list">
            <div class="list-item wow bounceInLeft" data-wow-delay=".7s" style="visibility: hidden; animation-delay: 0.7s; animation-name: none;">
              <div class="list-icon ico1"></div>
              <div class="list-item-title lt27"> Malinov?? ket??ny </div>
              <div class="list-item-description lt28"> Tieto ????inky s?? podobn?? ako ket??nov?? tel?? produkovan?? ??udsk??m telom. Mimoriadne akt??vny.<ul><li><span>Premie??aj?? </span>tuk na energiu</li><li><span>Ur??ch??uj?? </span>metabolizmus</li><li><span>Potl????aj?? </span>chu?? do jedla</li></ul></div>
            </div>
            <div class="list-item wow bounceInLeft" data-wow-delay="1.3s" style="visibility: hidden; animation-delay: 1.3s; animation-name: none;">
              <div class="list-icon ico2"></div>
              <div class="list-item-title lt29">Beta sitosterol</div>
              <div class="list-item-description lt30"> Neutralizuje ????inky nespr??vneho stravovania<ul><li><span>Normalizuj?? </span>metabolizmus lipidov</li><li><span>??ist?? krvn?? cievy </span>od ??zl??ho?? cholesterolu</li><li><span>Zlep??uje postavu, </span>bojuje s celulit??dou</li></ul></div>
            </div>
            <div class="list-item bounceInLeft wow" data-wow-delay="1.6s" style="visibility: hidden; animation-delay: 1.6s; animation-name: none;">
              <div class="list-icon ico3"></div>
              <div class="list-item-title lt31">Koenz??m Q10</div>
              <div class="list-item-description lt32"> Deficit koenz??mu Q10 je pr????inou obezity v 78% pr??padov <ul><li><span>??ormalizuje </span>v??menu l??tok</li><li><span>Zni??uje </span>cholesterol</li><li><span>Zbavuje V??s to, </span>prejedania sa</li></ul></div>
            </div>
            <div class="list-item bounceInLeft wow" data-wow-delay="1.9s" style="visibility: hidden; animation-delay: 1.9s; animation-name: none;">
              <div class="list-icon ico4"></div>
              <div class="list-item-title lt33"> L-karnit??n </div>
              <div class="list-item-description lt34"> L??tka spojen?? s vitam??nmi B sa syntetizuje v ??udskom tele <ul><li><span>Premie??a </span>tuk na energiu</li><li><span> Zmier??uje podr????denos??, </span>zlep??uje n??ladu</li><li><span>Zbavuje </span>depresie</li></ul></div>
            </div>
            <div class="list-item mobile-off bounceInLeft wow" data-wow-delay="2.2s" style="visibility: hidden; animation-delay: 2.2s; animation-name: none;">
              <div class="list-icon ico5"></div>
              <div class="list-item-title lt35">Bromela??n</div>
              <div class="list-item-description lt36"> Prote??n a enz??m tr??viaci tuk vylu??ovan?? z du??iny a stonky anan??su <ul><li><span>Akt??vne rozp??????a </span> viscer??lny tuk </li><li><span>Odstra??uje </span>opuchy</li><li><span>Zabra??uje </span> obezite vn??torn??ch org??nov </li></ul></div>
            </div>
            <div class="list-item mobile-off bounceInLeft wow" data-wow-delay="2.2s" style="visibility: hidden; animation-delay: 2.2s; animation-name: none;">
              <div class="list-icon ico6"></div>
              <div class="list-item-title lt37"> Organick?? synefr??n </div>
              <div class="list-item-description lt38"> Je v??razne lipolytick??, blokuje aktivitu alfa receptorov v tukov??ch bunk??ch <ul><li><span> Bojuje s ???perzistentn??m??? tukom, vr??tane toho viscer??lneho </span></li><li><span> Zvy??uje spotrebu </span> telesn??ch kal??ri?? </li><li><span>Zvy??uje pr??ceschopnos???? </span>a v??dr??</li></ul></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="expert-area">
    <div class="container">
      <div class="expert-title wow bounceInUp lt39" data-wow-offset="200" style="visibility: hidden; animation-name: none;">N??ZOR ODBRN??KOV NA <span class="h3">keto<span>diet</span></span></div>
      <div class="expert-subtitle wow fadeInLeft lt40" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;"><span> Dorothy Goodall</span>, je americk?? odborn??k na v????ivu, v tomto odbore m?? prax 30 rokov.</div>
      <div class="expert-description wow fadeInLeft" data-wow-delay=".9s" style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
        <p class="lt41">Pri procese ket??zy sa tuky rozde??uj?? na mastn?? kyseliny a glycer??n, ktor?? sa n??sledne transformuj?? na ket??nov?? tel??. Ket??za sa v??ak spust?? iba v pr??pade ??pln??ho vy??erpania z??sob glykog??nu v pe??eni a svalovom tkanive, zvy??ajne k tomu d??jde do 7-14 dn??.</p>
        <p class="lt42">Pre ur??chlenie tohto procesu, a teda aj spa??ovanie tukov, odpor????am svojim pacientom v????ivov?? doplnok KETO DI??TY. KETO DI??TY dokonale podporuje telo po??as di??ty keto: obohacuje potrebn?? prvky, potl????a hlad, odstra??uje ??navu a ??zkos??. <b>KETO DIET, poskytuje zdrav?? a prirodzen?? chudnutie a nemenej d??le??it??, bez ochabnutej poko??ky, ktor?? v????mu telu prinesie mimoriadne v??hody.</b></p>
        <div class="expert-excerpt lt43"> Hlavn??mi vlastnos??ami KETO DI??TY s?? ur??chlenie prechodu tela do stavu ket??zy a pomoc pri premene tukov na energiu..</div>
      </div>
    </div><a class="navigate-btn position-a wow shake lt44" data-wow-delay="2s" href="#abc" style="visibility: hidden; animation-delay: 2s; animation-name: none;">objedna?? ihne??</a>
  </section>
  <section class="sucess-area">
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
          <div class="sucess-title wow bounceInUp lt45" data-wow-offset="200" style="visibility: hidden; animation-name: none;">Pripojte sa <b>k tis??cke ??ud??,</b> ktor?? u?? vysk????ali<span class="h3"> keto<span>diet</span></span></div>
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
                              ??V??dy som bola na di??te. Probl??my s hladom, sp??nkom a ko??ou boli mojimi st??lymi spolo??n??kmi. Na v??he bolo m??nus, ale potom zas som sa za??ala prejeda?? a tak neust??le dookola. O KETO DIET som sa dozvedela od odborn??ka na v????ivu. V??sledok chudnutia ma pote??il takmer okam??ite. Ka??d?? t????de?? som videla na v??hach m??nus 3 kg. Pre m??a to bola skuto??n?? m??gia. Moja kond??cia bola skvel??, netrpela som hladom a spala som 7 hod??n??.
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
                              ??Pre m??a sa KETO DIET stala z??chranou. Nikdy som si nemyslela, ??e m????em jes?? v??etko, ??o milujem a z??rove?? chudn????. Faktom je, ??e som mala v strave v??dy nadbytok uh??ohydr??tov. To malo za n??sledok nadv??hu 100 kg. V??eobecne, hne?? ako som mierne upravil mno??stvo uh??ohydr??tov, hmotnos?? za??ala klesa??. Ale nem????em ??i?? bez uh??ohydr??tov, preto??e m??m ve??mi rada r??chle ob??erstvenie. Potom som sa dozvedel o KETO DIET. Po u????van?? tohto lieku proces horenia prebytku pre??iel ove??a r??chlej??ie a ja som sa ani nemusela vzda?? uh??ohydr??tov. Celkovo som za 4 mesiace schudla 25 kg. KETO DIET je jednoducho super! Odpor????am ho ka??d??mu!??
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
                              ??Ako m??lo vieme o na??om tele. Nemyslela som ani na to, ak?? zlo??it?? procesy v ??om prebiehaj??, a?? k??m som sa nedostala k v????ive a nepo??ula o ket??ze. Som leniv?? ??lovek, neviem sedie?? na di??tach, ani ??portova??. Preto som h??adala nie??o ??ahk?? a r??chle. O KETO DIET m????em poveda?? jednu vec a to, ??e ju mus??te vysk????a??! S ??ou som schudla 15 kg a dosiahla tak svoju ide??lnu postavu.??
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
      <div class="complex-title wow bounceInUp lt63" data-wow-offset="200" style="visibility: hidden; animation-name: none;">Pri??iel ??as <b>sa zbavi?? komplexov</b></div>
      <div class="complex-img wow fadeIn" data-wow-offset="200" style="visibility: hidden; animation-name: none;"><img alt="" src="img/@2x/complex.png"></div>
    </div>
  </section>
  <div class="header">
    <div class="container">
      <div class="row justify-content-between">
        <div>
          <div class="header-title_1 lt64"> revolu??n??  prevrat <img alt="" src="img/@2x/p1.png"><span>v??aka ket??ze!</span></div>
          <div class="header-title_2"><img alt="" src="img/@2x/p2.png"></div>
          <div class="header-title_3"><img alt="" src="img/@2x/p3.png"></div>
        </div>
        <div class="contact-form-area" id="footerForm">
          <div class="contact-awards"></div>
          <div class="contact-form-offer-title lt65" id="abc">iba dnes! <span>z??ava 50%</span></div>
          <div class="contact-form-price">
            <div class="form-newprice lt66">nov?? cena:<span class="price_main"></span></div>
            <div class="form-oldprice lt67">p??vodn?? cena:<span class="price_old"></span></div>
          </div>
          <div class="form-timer">
            <div class="form-timer-title lt68">Do konca akcie ost??va:</div>
            <script src="js/timer.js">
            </script>
          </div>
          <div class="contact-form">
            <form action="" method="post" class="order_form al-form">
              <label class="lt69">Vyberte si krajinu:<select class="country_select" id="country" name="country"></select></label>
              <label class="lt70">Va??e meno:<input name="name" placeholder=" Jana Mackov?? " required="" type="text"></label>
              <label class="lt71">Telef??nne ????slo:<input name="phone" placeholder="+421900 000 000" required="" type="text"></label>
              <button class="form-btn lt72">objedna?? ihne??</button>
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
            <div class="how-we-work-card-title lt74"> OBJEDN??VANIE </div>
            <div class="how-we-work-description lt75">Ihne?? po dokon??en?? objedn??vky, v??s bude n???? mana????r kontaktova?? <br><b> a potvrd?? objedn??vku </b></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="how-we-work-card">
            <img alt="" src="img/@2x/i2.jpg">
            <div class="how-we-work-card-title lt76">DODANIE</div>
            <div class="how-we-work-description lt77"> Ihne?? po dokon??en?? objedn??vky, v??s bude n???? mana????r kontaktova?? <br><b> a potvrd?? objedn??vku </b></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="how-we-work-card">
            <img alt="" src="img/@2x/i3.jpg">
            <div class="how-we-work-card-title lt78">PLATBA</div>
            <div class="how-we-work-description lt79"><b> ??iadne platby vopred!</b> Platba objedn??vok sa vykon??va striktne pri prevzat?? tovaru.</div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="how-we-work-card">
            <img alt="" src="img/@2x/i4.jpg">
            <div class="how-we-work-card-title lt80">Z??ruka</div>
            <div class="how-we-work-description lt81"> Pri n??kupe v na??om internetovom obchode si m????ete by?? ist?? vysokou kvalitou tovaru </div>
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
