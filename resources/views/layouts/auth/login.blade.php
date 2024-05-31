<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>ReelList - Login</title>
</head>
<body class="flex w-full h-screen justify-center bg-[#070F2B] px-8 md:px-12 lg:px-32 py-[120px] font-roboto">
    <div class="w-[200px] h-[200px] lg:w-[400px] lg:h-[400px] bg-[#1C4FFF] rounded-full absolute -top-[10%] blur-[160px] lg:blur-[200px] z-0 md:-top-[10%] md:left-[20%] lg:-top-[30%] lg:left-[5%]"></div>
    <div class="w-[200px] h-[200px] lg:w-[400px] lg:h-[400px] bg-[#1C4FFF] rounded-full absolute -bottom-[10%] right-[5%] blur-[160px] lg:blur-[200px] z-0 md:-bottom-[10%] md:right-[20%] lg:-bottom-0 lg:right-[5%]"></div>
    <div class="flex w-full h-contain text-white shadow-4xl z-10">
        <section class="hidden w-full h-contain bg-[url('/public/assets/movielist.png')] bg-cover lg:flex flex-col justify-end p-16 gap-y-6 rounded-l-xl">
            <img src="{{ asset('assets/ReeList.svg') }}" alt="" class="hidden lg:block w-[120px]">
            {{-- <h1 class="text-3xl">ReeList</h1> --}}
            <h2 class="text-xl">The best way to organize and manage your movie collection</h2>
        </section>
        <section class="flex flex-col w-full bg-[#070F2B] px-8 md:px-32 text-center justify-center gap-y-6 rounded-xl lg:rounded-l-none lg:rounded-r-xl">
            <img src="{{ asset('assets/ReeList.svg') }}" alt="" class="lg:hidden mx-auto md:block w-[92px] md:w-[120px]">
            <h1 class="text-3xl font-bold">Hi Cinephile</h1>
            <h4 class="text-sm md:text-lg">Welcome to ReeList</h4>
            <form action="" method="post" class="flex flex-col gap-y-2">
                <input class="bg-transparent border-[1px] border-[#FBFBFB] p-3 text-sm rounded-lg" type="text" name="email" placeholder="Email">
                <input class="bg-transparent border-[1px] border-[#FBFBFB] p-3 text-sm rounded-lg" type="password" name="password" placeholder="Password">
            </form>
            <a href="#" class="text-sm text-end">Lupa Password?</a>
            <button type="submit" class="w-full px-[16px] py-[12px] text-[16px] font-semibold bg-[#1C4FFF] rounded-lg">Log In</button>
            <p class="text-sm">Don't have an account? <a href="{{ route('register') }}" class="font-bold underline underline-offset-1">Register</a></p>
        </section>
    </div>
</body>
</html>