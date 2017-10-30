<?php
  $analyticsId = 'UA-108868666-1';
  $uri = $_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html>
  <head>
    <title><?=$uri ?></title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />

    <script src="/tracking.js"></script>

    <!--<script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '<?=$analyticsId;?>', 'auto', {'allowLinker':true});
      ga('require', 'displayfeatures');
      ga('require', 'linker');
      ga('send', 'pageview');
    </script>-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=<?=$analyticsId;?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', '<?=$analyticsId;?>');
    </script>-->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NSLQPZ7');</script>
    <!-- End Google Tag Manager -->

  </head>
  <body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSLQPZ7"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="card">
      <div class="card-body">
        <div class="card-title">
          Klasyczny kod ga (przeładowanie strony)
        </div>
        <div class="card-text">
          <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="/default-page1">Default page 1</a></li>
            <li class="nav-item"><a class="nav-link" href="/default-page2">Default page 2</a></li>
            <li class="nav-item"><a class="nav-link" href="/default-page3">Default page 3</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="card-title">
          Javascript ga('set','page'); ga('send','pageview')
        </div>
        <div class="card-text">
          <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="/js-page1" data-track-js>JS page 1</a></li>
            <li class="nav-item"><a class="nav-link" href="/js-page2" data-track-js>JS page 2</a></li>
            <li class="nav-item"><a class="nav-link" href="/js-page3" data-track-js>JS page 3</a></li>
          </ul>
        </div>
      </div>
    </div>

  </body>
</html>