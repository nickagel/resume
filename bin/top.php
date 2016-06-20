<!DOCTYPE html>
<html class="preventScroll">
    <head>
        <title>Nick Agel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="./style.min.css">
        <script type="text/javascript">!function(){var t=document.createElement("link"),e=document.getElementsByTagName("script")[0];"http:"!==window.location.protocol&&"https:"!==window.location.protocol&&(t.href="http:"),t.href+="//fonts.googleapis.com/css?family=Roboto:100italic,100,300italic,300,400italic,400,500italic,500,700italic,700,900italic,900",t.rel="stylesheet",t.type="text/css",e.parentNode.insertBefore(t,e)}();</script>
        <style>
            .preventScroll{
                overflow: hidden;
                margin: 0;
                padding: 0;
                height:100vh;
                width:100vw;
            }
            #loading{
                position:fixed;
                height: 100vh;
                width: 100vw;
                background-color: #e67e22;
                z-index: 1001;
                opacity: 1;
                display: table;
                text-align: center;
                overflow-y: scroll;
            }
            .loader{
                z-index: 1002;
                width: 200px;
                display: table-cell;
                vertical-align: middle;
            }

            .loader figcaption{
                font-size: 260%;
                font-weight: 900;
                color: #ffb02f;
            }
            .sendToBack{
                z-index: -1 !important;
            }
        </style>
    </head>
    <body ng-app="dataApp" ng-controller="dataCtrl">