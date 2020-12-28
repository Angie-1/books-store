<!DOCTYPE html>
<html>
<head>
<title>layout page </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
        h1 {
  background-color: gray;
  height: 150px;
  text-align: center;
   }
   </style>
</head>
<body>

  <h1><br>Book Store</br></h1>
   

  
<div class="container">
    @yield('content')
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>library books ~keep learning</p>
</div>
</body>
</html>