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
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-38672868-11', 'auto');
        ga('send', 'pageview');
    </script>


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
  </head>
  <body>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

    <div id="content">
        <h3><a href="https://chinhodado.github.io/persona5_calculator/index.html">Persona 5 Fusion Calculator</a></h3>
        <h4 style="background-color: bisque;">Click <a href="https://chinhodado.github.io/persona5_calculator/indexRoyal.html">here</a> for the Royal version</h4>
        <div class="desktop-hidden" style="margin-bottom:10px"><b><a href="https://github.com/chinhodado/persona5_calculator">View code on GitHub</a></b></div>
        <b><a href="https://chinhodado.github.io/persona5_calculator#/list/">Persona</a></b> - <b><a href="https://chinhodado.github.io/persona5_calculator#/skill/">Skills</a></b> - <b><a href="https://chinhodado.github.io/persona5_calculator#/setting/">Settings</a></b>
        <ng-view ng-app="myModule"></ng-view>
    </div>


  </body>
</html>
