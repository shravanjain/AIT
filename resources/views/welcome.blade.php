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
        .citadelcard {
            border: 1px solid black;
            background-color: black;
            padding-top:5px;
            padding-right:5px;
            padding-left:5px; 
        }

        .torrent {
            color:white;
            
        }
        </style>
</head>
     <title>Login Page</title>
    </head>

    <body class='bg'> 
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
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                </ul>
                <a href="#"> <button type="button" class="btn btn-danger">Sign in with Google+</button> </a>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <div class='col-md-3'>
        <div class='citadelcard'>
        <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
             <div class="card-header">The Most Amazing e-Book Store</div>
                <div class="card-body">
                    <h4 class="card-title">Exclusively for Engineering e-Books</h4>
                    <pre class='torrent'><B>Need Virus ?</B></pre>
                    <pre class='torrent'><B>    Use </B></pre>
                </div>
            </div>
        </div>
        </div>
        </div>


</body>
</html>
