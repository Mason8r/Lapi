<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Blueprint Laravel + AngJS App</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    </head>
    <body ng-app="bluePrintApp">

        <div class="container">
            <div ui-view></div>
        </div>        

    </body>

    <!-- Application Dependencies -->
    <script data-rocketsrc="bower_components/angular/angular.js" type="text/rocketscript"></script>
    <script data-rocketsrc="bower_components/angular-ui-router/release/angular-ui-router.js" type="text/rocketscript"></script>
    <script data-rocketsrc="bower_components/satellizer/dist/satellizer.js" type="text/rocketscript"></script>

    <!-- Application Scripts -->
    <script data-rocketsrc="scripts/app.js" type="text/rocketscript"></script>
    <script data-rocketsrc="scripts/authController.js" type="text/rocketscript"></script>
    <script data-rocketsrc="scripts/userController.js" type="text/rocketscript"></script>
</html>
