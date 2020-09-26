<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>404 not found</title>
    <style>
        body{
            background: url("./views/public/img/notfound.png");
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="row container">
        <div class="container col s12 l6">
            <?php echo $invalidroute; ?>
            <h2><i class="material-icons small prefix danger-text">report_problem</i> 404</h2>
            <h4>Page Not Found <br> I think you have lost the way.</h4>
        </div>
    </div>
</body>
</html>