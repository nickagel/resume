<!DOCTYPE html>
    <html>
    <head>
        <title>Nick Agel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/timeline.css">
        <link rel="stylesheet" href="./css/svg.css">
        <script type="text/javascript" src="./js/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="./js/waypoints.min.js"></script>
        <script type="text/javascript" src="./js/inview.js"></script>
        <script type="text/javascript" src="./js/timeline.js"></script>
        <script type="text/javascript" src="./js/resume.js"></script>
        <script type="text/javascript" src="./js/angular-1.5.6.min.js"></script>
        <script type="text/javascript">
            (function() {
                var link_element = document.createElement("link"),
                    s = document.getElementsByTagName("script")[0];
                if (window.location.protocol !== "http:" && window.location.protocol !== "https:") {
                    link_element.href = "http:";
                }
                link_element.href += "//fonts.googleapis.com/css?family=Roboto:100italic,100,300italic,300,400italic,400,500italic,500,700italic,700,900italic,900";
                link_element.rel = "stylesheet";
                link_element.type = "text/css";
                s.parentNode.insertBefore(link_element, s);
            })();
        </script>
    </head>
    <body ng-app="dataApp" ng-controller="dataCtrl">