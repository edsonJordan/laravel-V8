<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo Electrónico</h1>
    <p>Este es el primer correo que mandaré por Laravel</p>
    <form action=" {{route('contactanos.store') }} " method="POST" >
        @csrf
        <label for="">
            Nombre: 
            <br>
            <input type="text" name="name" id="">
        </label>
        @error('name')
            <p><strong>{{$message}} </strong> </p>
        @enderror
        <br>
        <label for="">
            Correo: 
            <br>
            <input type="email" name="correo" id="">
        </label>
        @error('correo')
        <p><strong>{{$message}} </strong> </p>
        @enderror
        <br>
        <label for="">
            Mensaje: 
            <br>
            <textarea name="mensaje" id=""  rows="4"></textarea>
        </label>
        @error('mensaje')
        <p><strong>{{$message}} </strong> </p>
         @enderror
        <br>
        <input type="submit" value="Enviar Mensaje">
    </form>
    @if (session('info'))
        <script>
            alert('{{ session('info') }}')
        </script>
    @endif
</body>
</html>