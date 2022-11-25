<!DOCTYPE html>
<html>
<head>
    <script src="static\rythm.js"></script>
    <link rel="stylesheet" href="static\s.css">
    <link rel="shortcut icon" type="image/x-icon" href="static\1.ico">
    <meta charset="utf-8">
    <script type="text/javascript" src="js/dat.gui.min.js"></script>
    <style>
        * {
            user-select: none;
        }

        html, body {
            overflow: hidden;
            background-color: #000;
        }

        body {
            margin: 0;
            position: fixed;
            width: 100%;
            height: 100%;
        }

        canvas {
            width: 100%;
            height: 100%;
        }

        .dg {
            opacity: 0.9;
        }

            .dg .property-name {
                overflow: visible;
            }

        @font-face {
            font-family: 'iconfont';
            src: url('iconfont.ttf') format('truetype');
        }

        .bigFont {
            font-size: 150%;
            color: #8C8C8C;
        }

        .cr.function.appBigFont {
            font-size: 150%;
            line-height: 27px;
            color: #A5F8D3;
            background-color: #023C40;
        }

            .cr.function.appBigFont .property-name {
                float: none;
            }

            .cr.function.appBigFont .icon {
                position: sticky;
                bottom: 27px;
            }

        .icon {
            font-family: 'iconfont';
            font-size: 130%;
            float: right;
        }

        .twitter:before {
            content: 'a';
        }

        .github:before {
            content: 'b';
        }

        .app:before {
            content: 'c';
        }

        .discord:before {
            content: 'd';
        }
    </style>
</head>
    
<body>
<audio id="music" src="static/11.mp3" autoplay="" loop="" onplaying="" style="display: none;">  
</audio>
 <div class="main center">
<div style="font-size: 40px; transform: scale(1.21735) translateZ(0px);" class="logo-blur logo-bass"><span class="logo-neon" style="text-shadow: 0px 0px 40px;">¬¿ÿ≈ Õ¿«¬¿Õ»≈</span></div>
 </div>
<div id="particles-js"></div>
<div class="controls">
<a href="forum/index.php"> [ ”ƒ¿ ¡”ƒ≈“ œ≈–≈ »ƒŒ¬¿“‹] </a>
</div>
<title>¬¿ÿ≈ Õ¿«¬¿Õ»≈e</title>
    <canvas></canvas>
    <script src="js/script.js"></script>
</body>
</html>