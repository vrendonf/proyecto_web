<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('books.store')}}" method="post">
        <label for="">
            Ingrese el titulo del libro:
        </label>
        <input type="text" name="title_book" id="1">

        <label for="">
            Ingrese el nombre del autor del libro:
        </label>
        <input type="text" name="author_book" id="2">

        <label for="">
            Ingrese la categoria:
        </label>
        <input type="text" name="category_book" id="3">

        
    </form>
    <button type="button">Guardar</button>
   
    <script src={{asset('js\script.js')}} defer></script>
</html>