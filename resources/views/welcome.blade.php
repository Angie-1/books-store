<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
        <style>
        h1 {
  background-color: gray;
  height: 150px;
  text-align: center;
   }
        </style>
        </head>
        <h1><br>Book Store</br></h1>
       <p> welcome, click the link below to add your new book </p>
            
        

<div class="pull-right">
                <a href="{{ route('books.index') }}"> Add new book</a>
            </div>
    </body>
</html>
