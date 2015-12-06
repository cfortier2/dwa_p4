<!doctype html>
<html>
<head>
    <title>
      @yield('title', 'Lorem Ipsum Generator')
    </title>
    <meta charset='utf-8'>

    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Bootstrap from http://getbootstrap.com/getting-started/#download -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Custom css -->
    <link href="css/p3.css" type='text/css' rel='stylesheet'>
</head>
<body>
  <div class="container-fluid">
    @yield('content')
  </div>
</body>
</html>
