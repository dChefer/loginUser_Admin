<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Acesso </title>
</head>
<body>
    <h4> Seja Bem Vindo(a) {{$name}}</h4>
    <p>Acabou de acessar o sistema com o seu email {{$email}} </p>

    <p>Data/Hora de Acesso: {{$dateTime}} </p>
    <div>
        <img width="20%" height="20%"
            src="{{$message->embed(public_path().'/images/logo.png') }}" alt="">
    </div>

</body>
</html>