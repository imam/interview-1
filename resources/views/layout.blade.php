<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <style>
        .item{
            width: 200px;
            margin: 0 auto;
        }
        .item--background-image{
            height: 200px;
            width: 200px;
            margin: 0 auto;
            background-size: 200px;
            background-repeat: no-repeat;
            background-position: center;
        }
        .item--name{
            text-align: center;
            margin: 10px;
        }

        .item-single-page--image{
            height: 200px;
            width: 200px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        th{
            width: 100px;
        }
    </style>
</head>
<body>
@yield('content')
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src = "/js/main.js"></script>
</body>
</html>