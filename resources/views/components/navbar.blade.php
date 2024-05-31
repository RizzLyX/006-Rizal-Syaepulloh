<header class="flex flex-col justify-center items-center gap-y-8 px-[28px] pt-[52px] md:flex-row md:justify-between md:px-[48px] lg:px-[120px]">
    <div class="w-[200px] h-[200px] bg-[#1C4FFF] rounded-full absolute -top-[20%] left-[20%] blur-[180px] z-0 md:-top-[30%] md:left-[35%]"></div>
    {{-- <h1 class="font-semibold text-[32px] lg:text-[40px] z-10">ReeList</h1> --}}
    <img src="{{ asset('assets/ReeList.svg') }}" alt="" class="w-[92px] md:w-[100px] lg:w-[120px] z-10">
    <nav>
        <ul class="flex gap-x-6">
            <li><a href="{{ route('register') }}" class="px-[16px] py-[12px] text-[13px] md:text-[16px] lg:text-[20px] z-10">Register</a></li>
            <li><a href="{{ route('login') }}" class="px-[16px] py-[12px] text-[13px] bg-[#1C4FFF] hover:bg-[#798CFF] active:bg-[#1C4FFF] md:text-[16px] lg:text-[20px] rounded-lg z-10">Log In</a></li>
        </ul>
    </nav>
</header>