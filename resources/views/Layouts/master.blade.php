<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
    
       @include('Layouts.header') 
        @yield('content')
        @yield('about')
       
       @include('Layouts.footer')               
    
   </div>
  <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
   <script src="assets/js/main.js"></script>
</body>
</html>
