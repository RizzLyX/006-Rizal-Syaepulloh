<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>ReelList - App</title>
</head>
<body class="w-full h-screen bg-[#070F2B] text-white font-roboto">
    <header class="flex justify-between px-[120px] pt-[52px]">
        <div class="w-[680px] h-[680px] bg-[#1C4FFF] rounded-full absolute -top-[80%] left-[27%] blur-[180px]"></div>
        <h1 class="font-semibold text-[40px]">ReeList</h1>
        <nav>
            <ul class="flex gap-x-6">
                <li><a href="#" class="px-[16px] py-[12px] text-[20px]">Register</a></li>
                <li><a href="#" class="px-[16px] py-[12px] text-[20px] bg-[#1C4FFF] rounded-lg">Log In</a></li>
            </ul>
        </nav>
    </header>
    <main class="px-[120px] py-[80px]">
        <section class="flex justify-between items-center">
            <div class="flex flex-col gap-y-10">
                <h1 class="font-semibold text-[48px]">The best way to organize and<br>manage your movie collection</h1>
                <h4 class="text-[24px]">The only movie organization tool<br>you'll ever need. Get ReelList!</h4>
                <button class="w-fit px-[16px] py-[12px] bg-[#1C4FFF] rounded-lg"><a href="">Let's Dive In</a></button>
            </div>
            <img src="{{ asset('assets/SuperToroid-2.svg') }}" alt="" class="">
        </section>
    </main>
    <footer class="flex justify-between items-center bg-[#292A86] px-[120px] py-[48px]">
        <section>
            <h1 class="text-[48px] font-semibold">ReeList</h1>
            <p class="text-[14px]"">2024 All Rights Reserved</p>
        </section>
        <section>
            <h1 class="text-[20px] font-semibold">SOCIAL MEDIA</h1>
            <div class="flex gap-x-4 mt-[18px]">
                <img src="{{ asset('assets/instagram.svg') }}" alt="Instagram" class="w-[36px]">
                <img src="{{ asset('assets/linkedin.svg') }}" alt="Linked In" class="w-[36px]">
            </div>
        </section>
    </footer>
</body>
</html>