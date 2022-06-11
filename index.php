<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
</head>

<body>
    <div class="loader">
        <img src="img/loader.gif" alt="">
    </div>
    <div id="root"></div>

    <div id="nav"></div>
    <script>
        window.addEventListener('hashchange', function() {
            //code  
            checkURI(window.location.href);
        });
    </script>
    <script src="./js/main.js"></script>
    <style>
        .loader {
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100vh;
            z-index: 9999999;
            position: fixed;
            text-align: center !important;
            justify-content: center !important;
            background: white;
        }

        .loader img {
            height: 100vh;
            width: 70%
        }
    </style>
</body>

</html>