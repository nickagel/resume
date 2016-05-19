<!DOCTYPE html>
    <html>
    <head>
        <title>Nick Agel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/defaultPercentage.css">
        <link href='//fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.6.1/less.min.js"></script>
        <script src="./scripts/resume.js"></script>
         <style type="text/css">

            .radial-progress {
                @circle-size: 120px;
                @circle-background: #d6dadc;
                @circle-color: #ffb02f;
                @inset-size: 90px;
                @inset-color: #ecf0f1;
                @transition-length: 1s;
                @percentage-color: #ffb02f;
                @percentage-font-size: 22px;
                @percentage-text-width: 57px;

                margin: 50px;
                width:  @circle-size;
                height: @circle-size;

                background-color: @circle-background;
                border-radius: 50%;
                .circle {
                    .mask, .fill{
                        width:    @circle-size;
                        height:   @circle-size;
                        position: absolute;
                        border-radius: 50%;
                    }
                    .mask, .fill {
                        -webkit-backface-visibility: hidden;
                        transition: -webkit-transform @transition-length;
                        transition: -ms-transform @transition-length;
                        transition: transform @transition-length;
                        border-radius: 50%;
                    }
                    .mask {
                        clip: rect(0px, @circle-size, @circle-size, @circle-size/2);
                        .fill {
                            clip: rect(0px, @circle-size/2, @circle-size, 0px);
                            background-color: @circle-color;
                        }
                    }
                }
                .inset {
                    width:       @inset-size;
                    height:      @inset-size;
                    position:    absolute;
                    margin-left: (@circle-size - @inset-size)/2;
                    margin-top:  (@circle-size - @inset-size)/2;

                    background-color: @inset-color;
                    border-radius: 50%;
                    .percentage {
                        height:   @percentage-font-size;
                        width:    @percentage-text-width;
                        overflow: hidden;

                        position: absolute;
                        top:      (@inset-size - @percentage-font-size) / 2;
                        left:     (@inset-size - @percentage-text-width) / 2;

                        line-height: 1;
                        .numbers {
                            margin-top: -@percentage-font-size;
                            transition: width @transition-length;
                            span {
                                width:          @percentage-text-width;
                                display:        inline-block;
                                vertical-align: top;
                                text-align:     center;
                                font-weight:    800;
                                font-size:      @percentage-font-size;
                                font-family:    "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
                                color:          @percentage-color;
                            }
                        }
                    }
                }

                @i: 0;
                @increment: 180deg / 100;
                .loop (@i) when (@i <= 100) {
                    &[data-progress="@{i}"] {
                        .circle {
                            .mask.full, .fill {
                                -webkit-transform: rotate(@increment * @i);
                                -ms-transform: rotate(@increment * @i);
                                transform: rotate(@increment * @i);
                            }	
                            .fill.fix {
                                -webkit-transform: rotate(@increment * @i * 2);
                                -ms-transform: rotate(@increment * @i * 2);
                                transform: rotate(@increment * @i * 2);
                            }
                        }
                        .inset .percentage .numbers {
                            width: @i * @percentage-text-width + @percentage-text-width;
                        }
                    }
                    .loop(@i + 1);
                }
                .loop(@i);
            }
        </style>
    </head>
    <body>