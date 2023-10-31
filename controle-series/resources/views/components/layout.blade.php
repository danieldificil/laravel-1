<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>$title</title>
</head>
<body>
<div class="container">
    <h1>{{ $title }}</h1>
    {{ $slot }}
</div>
</body>
</html>
{{--Para criar componentes HTML, o Laravel utiliza um sistema semelhante ao Vue.js, uma estrutura--}}
{{--de front-end JavaScript amplamente utilizada para criar interfaces de usuário interativas e dinâmicas.--}}
{{--Esse sistema, conhecido como "Blade," é a engine de template do Laravel e oferece uma maneira eficaz--}}
{{--de criar e reutilizar componentes HTML em suas aplicações web.--}}

{{--O Blade é um mecanismo de template simples e poderoso que permite incorporar lógica PHP--}}
{{--em seus arquivos de visualização HTML. Ele facilita a separação de preocupações, mantendo o código PHP separado--}}
{{--do código HTML. Com o Blade, você pode criar facilmente componentes reutilizáveis,--}}
{{--tornando o desenvolvimento de aplicações mais eficiente e organizado.--}}
