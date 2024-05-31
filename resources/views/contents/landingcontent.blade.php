@extends("layouts.landing")

@section("title", "ReelList - App")

@section("content")
    <section class="flex justify-center items-center md:justify-between">
        <div class="flex flex-col gap-y-10 md:gap-y-6 items-center md:items-start">
            <h1 class="font-semibold text-[24px] text-center md:text-[32px] md:text-start lg:text-[48px]">The best way to organize and<br>manage your movie collection</h1>
            <h4 class="text-[14px] text-center md:text-[16px] md:text-start lg:text-[24px]">The only movie organization tool<br>you'll ever need. Get ReelList!</h4>
            @include("components.buttons")
        </div>
        <img src="{{ asset('assets/SuperToroid-2.svg') }}" alt="" class="hidden md:block md:w-[200px] lg:w-[400px]">
    </section>
@endsection