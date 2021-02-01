<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
  <meta name="format-detection" content="telephone=no">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel=”apple-touch-icon” sizes=”180×180″ href="images/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="images/android-touch-icon.png" sizes="192x192">
  <!-- ページ独自のdescriptionを読み込ませる -->
  <meta name="description" content="<?php echo description; ?>">
  <!-- ページ独自のtitleを読み込ませる -->
  <meta name="keywords" content="BAUS,バウス,大倉山,東急東横線,日本土地建物,日土地,新築一戸建,分譲一戸建" />
  <title>
    <?php echo title; ?>｜閑静な邸宅地に敷地形状が整った2階建て低層戸建て。｜日本土地建物の新築一戸建</title>
  <!-- js -->
  <script type="text/javascript" src="common/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="common/js/bootstrap.js"></script>
  <script type="text/javascript" src="common/js/smart-crossfade.js"></script>
  <script type="text/javascript" src="common/js/rollover.js"></script>
  <script type="text/javascript" src="common/js/pagetop.js"></script>
  <script type="text/javascript" src="common/js/sp-menu.js"></script>
  <script type="text/javascript" src="common/js/jquery.cookie.js"></script>
  <script type="text/javascript" src="common/js/jquery.layerBoard.js"></script>
  <!--<script type="text/javascript" src="common/js/jquery.matchHeight.js"></script>-->
  <script>
    $(function() {
      $('#layer_board_area').layerBoard({
        alpha: 0.5,
        limitMin: 0
      });
    })
  </script>
  <script type="text/javascript" src="common/js/jquery.flexslider-min.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "fade",
        controlNav: false,
        slideshowSpeed: 5000,
        animationLoop: true
      });
    });
  </script>
  <!--floating banner-->
  <script type="text/javascript" src="common/js/floatbnr.js" charset="UTF-8"></script>
  <script type="text/javascript">
    $(function() {
      floatBnr();
    });
  </script>
  <!--高さ調整-->
  <script>
    $(function() {
      $('.item').matchHeight(options);
    });
  </script>
  <!--縦横　1：2のアスペクト比にしたい要素に　id="target" class="square" を設定-->
  <script>
    var mediaQuery = matchMedia('(max-width: 798px)');
    // ページが読み込まれた時に実行
    handle(mediaQuery);
    // ウィンドウサイズが変更されても実行されるように
    mediaQuery.addListener(handle);

    function handle(mq) {
      if (mq.matches) {
        // ウィンドウサイズが798px以下のとき
        $(window).on("load resize", function() {
          // id="target"のwidthを取得
          var width = $("#target").width();
          // class="square"のheightに設定
          $(".square").css({
            "height": width
          });
        });
      }
    }
  </script>
  <script>
    //2:5のアスペクト比にする
    var mediaQuery = matchMedia('(min-width: 769px) and (max-width: 1000px)');
    // ページが読み込まれた時に実行
    handle(mediaQuery);
    // ウィンドウサイズが変更されても実行されるように
    mediaQuery.addListener(handle);

    function handle(mq) {
      if (mq.matches) {
        // ウィンドウサイズが798px以下のとき
        $(window).on("load resize", function() {
          // id="target"のwidthを取得
          var width = $("#target").width();
          // class="square"のheightに設定
          $(".square").css({
            "height": width / 2.5
          });
        });
      }
    }
  </script>
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="common/css/bootstrap.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,500,600,700&amp;subset=japanese" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="common/css/reset.css">
  <link rel="stylesheet" type="text/css" href="common/css/style.css">
  <!-- ページ独自のcssを読み込ませる -->
  <link rel="stylesheet" href="common/css/<?php echo cssinc; ?>.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="common/css/layerBoard.css">
  <link rel="stylesheet" type="text/css" href="common/css/flexslider.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-176429020-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-176429020-1');
</script>
</head>

<body id="top">
  <!-- blackWrapper -->
  <div class="blackWrapper">
    <!-- header PC -->
    <div class="pc">
      <div class="flex-nav">
        <div class="header-logo">
          <h1>
            <a href="index.html">
              <img src="images/header_logo.png" alt="バウスガーデン大倉山" /> </a>
          </h1>
        </div>
        <div class="header-hnav">
          <ul>
            <li class="hnav_li navtext">
              <a href="outline.html" target="_blank"><i class="fas fa-angle-right"></i> 物件概要
                <!--<img src="images/outline_off.jpg" alt="物件概要" />--> </a>
            </li>
            <li class="navtext">
              <a href="map.html" target="_blank"><i class="fas fa-angle-right"></i> 現地案内図
                <!--<img src="images/map_off.jpg" alt="現地案内図" />--> </a>
            </li>
			  <li>
              <a href="login.html" target="_blank">
                <img src="images/login_btn_off.png" width="160" height="80" alt="物件エントリー者様限定サイト" /> </a>
            </li>
            <li>
              <a href="https://www.baus-web.jp/form/contact/index.php?id=2363" target="_blank">
                <img src="images/entry_btn_off.jpg" alt="物件エントリー" /> </a>
            </li>
          <li>
              <a href="https://www.baus-web.jp/reserve/form-bg-okurayama/" target="_blank">
                <img src="images/raijyo_btn_off.png" alt="来場予約" /> </a>
            </li>
		          <li>
              <a href="https://www.baus-web.jp/reserve/form-bg-okurayama/" target="_blank">
                <img src="images/online_btn_off.png" alt="オンライン予約" /> </a>
            </li>
          </ul>
        </div>
        <p class="clear"></p>
      </div>
      <div class="outer">
        <div class="header-gnav">
          <div class="nav-container">
            <ul class="gnav-ul">
              <li>
                <a href="index.html">
                  <img src="images/<?php echo gnav_top; ?>.png" alt="TOP" class="roll" /> </a>
              </li>
              <li>
                <a href="landscape.html">
                  <img src="images/<?php echo gnav_landscape; ?>.png" alt="LANDSCAPE" class="roll" /> </a>
              </li>
              <li>
                <a href="design.html">
                  <img src="images/<?php echo gnav_design; ?>.png" alt="DESIGN" class="roll" /> </a>
              </li>
              <li>
                <a href="location.html">
                  <img src="images/<?php echo gnav_location; ?>.png" alt="LOCATION" class="roll" /> </a>
              </li>
              <li>
                <a href="access.html">
                  <img src="images/<?php echo gnav_access; ?>.png" alt="ACCESS" class="roll" /> </a>
              </li>
              <li>
                <a href="plan.html">
                  <img src="images/<?php echo gnav_plan; ?>.png" alt="PLAN" class="roll" /> </a>
              </li>
              <li>
                <a href="modelhouse.html" class="nolink">
                  <img style="opacity: 1;" src="images/<?php echo gnav_modelhouse; ?>.png" alt="MODEL HOUSE" class="roll" /> </a>
              </li>
              <li>
                <a href="quality.html" class="nolink">
                  <img style="opacity: 1;" src="images/<?php echo gnav_quality; ?>.png" alt="QUALITY" class="roll" /> </a>
              </li>
              <li>
                <a href="https://www.baus-web.jp/owners/" target="_blank">
                  <img src="images/<?php echo gnav_brand; ?>.png" alt="BRAND" class="roll" /> </a>
              </li>
            </ul>
          </div>
          <p class="clear"></p>
        </div>
      </div>
    </div>
    <!-- /.header PC -->
    <!-- header SP -->
    <div class="sp">
      <div class="flex-nav">
        <h2 class="header-logo">
          <a href="index.html">
            <img src="images/sp/header_logo.png" width="100%" alt=""> </a>
        </h2>
        <div class="header-hnav">
          <p class="sp_toggle">
            <img src="images/sp/header_menu.png" alt="" /> </p>
        </div>
        <p class="clear"></p>
      </div>
    </div>
    <div class="sp">
      <div id="sp_gnav">
        <ul class="sp_gnav_ul">
          <li>
            <a href="index.html">TOP</a>
          </li>
          <li>
            <a href="landscape.html">LANDSCAPE</a>
          </li>
          <li>
            <a href="design.html">DESIGN</a>
          </li>
          <li>
            <a href="location.html">LOCATION</a>
          </li>
          <li>
            <a href="access.html">ACCESS</a>
          </li>
          <li>
            <a href="plan.html">PLAN</a>
          </li>
          <li>
            <a href="modelhouse.html" class="nolink">MODEL HOUSE</a>
          </li>
          <li>
            <a href="quality.html" class="nolink">QUALITY</a>
          </li>
          <li class="nav-br">
            <a href="https://www.baus-web.jp/owners/" target="_blank">BRAND</a>
          </li>
          <li>
            <a href="map.html" target="_blank">現地案内図</a>
          </li>
          <li>
            <a href="outline.html" target="_blank">物件概要</a>
          </li>
          <li>
            <a href="https://www.baus-web.jp/form/contact/index.php?id=2363" target="_blank">物件エントリー</a>
          </li>
		<li style="width: 100%;">
            <a href="https://www.baus-web.jp/reserve/form-bg-okurayama/" target="_blank">来場予約</a>
          </li>
			<li>
            <a href="login.html" target="_blank">物件エントリー者様限定サイト</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /.header SP -->
    <p class="clear"></p>