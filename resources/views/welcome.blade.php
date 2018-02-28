<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
        <link rel="stylesheet" type="text/css" href="welcome.css">
        <link rel="stylesheet" type="text/css" href="sheet.css">

        <style>

        body {
          background-repeat: no-repeat;
          background-size: 100%;
        }


        div.content {
            position: absolute;
            visibility: visible;
            top: 180px;
            left: 100px;
            width: auto;
            height: auto;
            <!--border: 5px solid #8AC007-->
        }

        div.otherlinks {
            position: absolute;
            visibility: visible;
            top: 380px;
            left: 700px;
            width: auto;
            height: auto;
            font-size:120%;
            <!--border: 5px solid #8AC007-->
        }

        .torrent{
            color: green;
            font-size: 200%
        }

        .virus{
            font-size: 150%
        }

        .citadel{
            font-size: 150%;
            color: red;
        }

        /* unvisited link */
        a:link {
            color: white;
        }

        /* visited link */
        a:visited {
            color: yellow;
        }

        /* mouse over link */
        a:hover {
            color: blue;
        }

        /* selected link */
        a:active {
            color: red;
        }



</style>
</head>
     <title>Login Page</title>
    </head>

    <body style="background-image: url(img/books.jpg);">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Citadel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                </ul>
                <a href="#"> <button type="button" class="btn btn-danger">Sign in with Google+</button> </a>
                </div>
            </div>
        </nav>

        <!--<div class="content">
            <div class="card" style="width:400px">
            <div class="card-body">
            <h4 class="card-title">Need Virus ?</h4>
            <p class="card-text">        Use Torrent</p>
            </div>
            <img class="card-img-bottom" src="img/cardimage.jpg" alt="Card image" style="width:100%">
            </div>
        </div>-->
        <div class="content">
            <div class="card">
                <div><B class="virus">Need Virus ?</B><BR>
                <B class="torrent">Use μTorrent</style></B><BR>
                <B class="virus">Need Free eBooks ?&nbsp;&nbsp;&nbsp;&nbsp</B><BR>
                <B class="citadel">Use Citadel</style></B>
                </div>
            </div>
        </div>


        <div class="otherlinks">
            <a href="#"> View |</a>
            <a href="#"> Download | </a>
            <a href="#"> Suggest</a>
        </div>

        


</body>
</html>
