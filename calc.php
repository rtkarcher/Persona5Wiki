<?php include('header.php'); ?>

    <script src="https://chinhodado.github.io/persona5_calculator/https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://chinhodado.github.io/persona5_calculator/https://cdnjs.cloudflare.com/ajax/libs/sticky-table-headers/0.1.19/js/jquery.stickytableheaders.min.js"></script>
    <script src="https://chinhodado.github.io/persona5_calculator/https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <script src="https://chinhodado.github.io/persona5_calculator/https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-route.min.js"></script>
    <script src="https://chinhodado.github.io/persona5_calculator/data/Data5.js"></script>
    <script src="https://chinhodado.github.io/persona5_calculator/data/PersonaData.js"></script>
    <script src="https://chinhodado.github.io/persona5_calculator/data/SkillData.js"></script>
    <script>
        var GLOBAL_IS_ROYAL = false;
    </script>
    <script src="https://chinhodado.github.io/persona5_calculator/src/DataUtil.js"></script>
    <script src="https://chinhodado.github.io/persona5_calculator/src/FusionCalculator.js"></script>
    <script src="https://chinhodado.github.io/persona5_calculator/src/PersonaController.js"></script>
    <script src="https://chinhodado.github.io/persona5_calculator/src/PersonaListController.js"></script>
    <script src="https://chinhodado.github.io/persona5_calculator/src/SkillListController.js"></script>
    <script src="https://chinhodado.github.io/persona5_calculator/src/SettingController.js"></script>
    <script src="https://chinhodado.github.io/persona5_calculator/src/App.js"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/reset.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/site.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/table.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/button.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/input.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/container.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/checkbox.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/form.min.css">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">



    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Under Construction: <a href="https://github.com/chinhodado/persona5_calculator" target="_blank">Persona Fusion Calculator by chinhodado</a></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>



    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Persona 5 Fusion Calculator">
    <title>Persona 5 Fusion Calculator</title>
    <link rel="icon" sizes="192x192" href="img/favicon/192x192.png">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/192x192.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sticky-table-headers/0.1.19/js/jquery.stickytableheaders.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-route.min.js"></script>
    <script src="data/Data5.js"></script>
    <script src="data/PersonaData.js"></script>
    <script src="data/SkillData.js"></script>
    <script>
        var GLOBAL_IS_ROYAL = false;
    </script>
    <script src="src/DataUtil.js"></script>
    <script src="src/FusionCalculator.js"></script>
    <script src="src/PersonaController.js"></script>
    <script src="src/PersonaListController.js"></script>
    <script src="src/SkillListController.js"></script>
    <script src="src/SettingController.js"></script>
    <script src="src/App.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-38672868-11', 'auto');
        ga('send', 'pageview');
    </script>
    <script data-ad-client="ca-pub-8564595162671342" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/reset.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/site.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/table.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/button.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/input.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/container.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/checkbox.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/components/form.min.css">

</head>
<body>
    <div id="content">
        <h3><a href="#">Persona 5 Fusion Calculator</a></h3>
        <h4 style="background-color: bisque;">Click <a href="indexRoyal.html">here</a> for the Royal version</h4>
        <div class="desktop-hidden" style="margin-bottom:10px"><b><a href="https://github.com/chinhodado/persona5_calculator">View code on GitHub</a></b></div>
        <b><a href="#/list/">Persona</a></b> - <b><a href="#/skill/">Skills</a></b> - <b><a href="#/setting/">Settings</a></b>
        <ng-view ng-app="myModule"></ng-view>
    </div>


<?php include('footer.php'); ?>