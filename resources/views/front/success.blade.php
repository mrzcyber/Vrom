<x-app-layout>
   <x-slot name="title">Success - {{ config('app.name') }}</x-slot>
<main class="w-full h-screen pb-20 flex items-center justify-center pl-2">
<div class="flex flex-col w-full justify-center items-center  ">
    <h1 class="capitalize font-poppins text-main font-bold md:text-[25px] mb-1">succes booking</h1>
    <p class="font-poppins text-second text-[11px] md:text-[20px]">We will email you the confirmation</p>
    <p class="font-poppins text-second text-[11px] md:text-[20px] ">and the next instructions</p>

          <div class="p-1 mt-3  mb-2 shadow-lg scale-90 md:scale-100 hover:shadow-indigo-700 shadow-indigo-500 rounded-full bg-primary group  ">
          <a href="{{ route('front.profil') }}" class=" w-40   flex flex-row text-white font-bold border border-transparent transition-all duration-300 group-hover:border-white rounded-full py-0.5  px-1 ">
            <p class="transition-all duration-[320ms]   translate-x-5 group-hover:translate-x-1">
              My Dashboard
            </p>
            <img src="/svgs/ic-arrow-right.svg"
                 class="opacity-0 group-hover:opacity-100 group-hover:translate-x-4 transition-all duration-[320ms]"
                 alt="arrow nav">
          </a>
        </div>

</div>

<div class="w-full">
    <img src="/img/porsche_small.webp" alt="thumbnail" class="w-[100%] object-cover object-center">
</div>

</main>
</x-app-layout>