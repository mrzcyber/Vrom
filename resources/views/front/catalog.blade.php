<x-app-layout>
     <x-slot name="title">Catalog - {{ config('app.name') }}</x-slot>
    <main class="w-full min-h-screen bg-bmain">


<section class="w-full  pt-16 flex items-start flex-col lg:px-16">
    
    <div class="w-full flex flex-col justify-center items-center ">
        <h2 class="font-poppins font-bold text-main text-[35px] capitalize leading-none"> Rent your favorite car</h2>
        <p class="text-[15px] font-poppins font-normal text-second">we always provide the best cars </p>
    </div>
    
</section>


<section  class="w-full py-5 md:py-10 mt-5 md:mt-10 flex  flex-col px-5 md:px-16 mb-10 lg:px-20 ">
    
    <div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 items-center">
        @foreach ($data as $index=>$item)
        <a  data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000" data-aos-delay="{{ $index * 3 }}" href="{{ route('front.detail',$item->slug)}}" class=" shrink-0 w-44 md:w-56 lg:w-60 px-2 py-3 rounded-xl mt-5 bg-white leading-none shadow-md ">
            <h3 class="font-poppins text-main font-semibold text-[20px] uppercase">{{ $item->name }}</h3>
            <p class="text-second font-poppins font-normal mt-1 text-[13px] capitalize">{{ $item->type->name }}</p>
            <div class="w-full overflow-hidden  rounded-lg bg-black mt-2"><img src="{{ asset('storage/' . $item->image->first()->path) }}" alt=" photo product " class="w-full object-cover object-center hover:scale-125 transition-all duration-500"></div>
            <article class="mt-3 flex flex-row w-full justify-between items-center">
            <p class="text-primary/95 font-semibold font-poppins text-[12px] ">Rp{{ number_format($item->price,0,',','.')}}<span class="font-poppins font-light text-second">/day</span></p>
            <p class="flex flex-row text-[10px] font-semibold font-poppins mt-1 ">(4.7/5)  <img src="/svgs/ic-star.svg" alt="icon star" class="w-3 "></p>
        </article>
    </a>
    @endforeach
    
    
</div>
</section>

<section class="w-full flex flex-row relative bg-main px-8 md:px-16  lg:px-32 ">
<div data-aos="fade-right" data-aos-duration="1000" class="flex w-full  flex-col py-10 ">
    <h2 class="font-poppins font-bold text-white text-[20px] md:text-[25px] text-shadow-lg text-shadow-white">Drive Yours Today.</h2>
    <h2 class="font-poppins font-bold text-white text-[20px] md:text-[25px] text-shadow-lg text-shadow-white">Drive Faster.</h2>
<p class="text-second font-poppins font-normal text-[13px] ">Get an instant booking to catch up wheatever</p>
<p class="text-second font-poppins font-normal text-[13px] ">you really want to achieve today. yes</p>
  <div class="p-1 mt-7 mb-2 shadow-lg hover:shadow-indigo-700 shadow-indigo-500 rounded-full w-44 bg-primary group">
          <a href="#popularCars" class=" w w-[167px] flex flex-row text-white font-bold border border-transparent transition-all duration-300 group-hover:border-white rounded-full py-1 px-2">
            <p class="transition-all duration-[320ms] translate-x-8 group-hover:translate-x-1">
              Rent Now
            </p>
            <img src="/svgs/ic-arrow-right.svg"
                 class="opacity-0 group-hover:opacity-100 group-hover:translate-x-8  transition-all duration-[320ms]"
                 alt="arrow nav">
          </a>
        </div>
</div>
    <img src="/img/porsche.webp" class="lg:max-w-[100%] md:max-w-[60%] hidden md:flex scale-75 md:scale-100   absolute -bottom-10   -right-40 md:-right-12 h-full " alt="thumbnail">

</section>
<footer id="kontak" class="w-full flex justify-center flex-col items-center py-12 ">
<p class="text-second font-poppins font-medium text-[13px]">All Rights Reserved. Copyright Vrom 2026.</p>
</footer>
</main>
</x-app-layout>