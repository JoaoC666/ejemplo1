<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo1</title>
    <link rel = "stylesheet" href="{{asset('css/app.css')}}">
</head>
<div class="testbox">
    <h1>Registrarse</h1>  
    <form action="/">
     
    <hr>
    <label id="icon" for="name"><i class="icon-envelope "></i></label>
    <input type="text" name="name" id="name" placeholder="Correo electronico" required/>
    <label id="icon" for="name"><i class="icon-user"></i></label>
    <input type="text" name="name" id="name" placeholder="Nombre" required/>
    
    <hr>
     <a href="#" class="button">Enviar datos</a>
    </form>
</div>
</html>