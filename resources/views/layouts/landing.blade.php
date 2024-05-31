<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield("title")</title>
</head>
<body class="w-full h-screen bg-[#070F2B] text-white font-roboto">
    @include("components.navbar")
    <main class="px-[28px] py-[80px] md:h-[70%] md:px-[48px] lg:px-[120px]">
        @yield("content")
    </main>
    @include("components.footer")
</body>
</html>