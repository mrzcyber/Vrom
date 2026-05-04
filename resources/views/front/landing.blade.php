<x-app-layout>
<main class="w-full mt-10  flex flex-col justify-center items-center">
<section  class="w-full flex justify-center items-center relative">
    <h1 class=" uppercase font-poppins font-extrabold text-bmain text-[90px] md:text-[180px] lg:text-[220px] flex flex-col leading-tight lg:leading-none ">
        <p data-aos="fade-right" data-aos-duration="1000">
            New
        </p>
        <p data-aos="fade-left" data-aos-duration="1000">
        Porsche
        </p> 
    </h1>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[80%] lg:w-[65%] flex justify-center items-center">
        <img 
            data-aos="zoom-in" 
            data-aos-duration="1000" 
            data-aos-delay="600"
            src="/img/porsche.webp" 
            alt="main content" 
            class="w-full">
    </div>
</section>
<article class="flex flex-row items-center justify-center md:mt-12  w-full scale-50 md:scale-100">
    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" class="flex font-poppins flex-col border-r items-center border-second/75 pr-12">
        <h2 class="font-bold text-main text-[30px]/7">380</h2>
        <p class="text-second font-light ">Horse Power</p>
    </div>
    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1300" class="flex font-poppins flex-col border-r items-center border-second/75 px-12">
        <h2 class="font-bold text-main text-[30px]/7">12S</h2>
        <p class="text-second font-light ">Speed AT</p>
    </div>
    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1600" class="flex font-poppins flex-col border-r  items-center border-second/75 px-12">
        <h2 class="font-bold text-main text-[30px]/7">AWD</h2>
        <p class="text-second font-light ">Drive</p>
    </div>
    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1900" class="flex font-poppins flex-col  items-center  px-12">
        <h2 class="font-bold text-main text-[30px]/7">A.I</h2>
        <p class="text-second font-light ">Tracking</p>
    </div>
  <div class="p-1 ml-10 mb-2 shadow-lg hover:shadow-indigo-700 shadow-indigo-500 rounded-full bg-primary group" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="2300">
          <a href="#popularCars" class=" w-32 flex flex-row text-white font-bold border border-transparent transition-all duration-300 group-hover:border-white rounded-full py-1.5 px-1 ">
            <p class="transition-all duration-[320ms] translate-x-5 group-hover:translate-x-1">
              Rent Now
            </p>
            <img src="/svgs/ic-arrow-right.svg"
                 class="opacity-0 group-hover:opacity-100 group-hover:translate-x-5 transition-all duration-[320ms]"
                 alt="arrow nav">
          </a>
        </div>
</article>

<section class="w-full py-5 md:py-10 mt-5 md:mt-16 flex bg-bmain flex-col px-5 md:px-16 lg:px-20 ">
<h2 class="text-main font-bold font-poppins text-[20px] md:text-[25px]">Popular Cars</h2>
<p class="text-second font-poppins font-normal text-[15px] md:text-20px ">Start your big day</p>
<div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 items-center">
    <a  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" href="" class=" shrink-0 w-52 md:w-60 px-2 py-3 rounded-xl mt-5 bg-white leading-none shadow-md hover:shadow-black/70 hover:scale-105 transition-all duration-500">
        <h3 class="font-poppins text-main font-semibold text-[20px]">Taycan 4S</h3>
        <p class="text-second font-poppins font-normal mt-1 text-[13px]">Electric car</p>
        <div class="md:w-56 w-48 overflow-hidden  rounded-lg bg-black mt-2"><img src="/img/car-01.webp" alt=" photo product " class="w-full object-cover object-center"></div>
        <article class="mt-3 flex flex-row w-full justify-between items-center">
            <p class="text-primary/95 font-semibold font-poppins text-[12px] ">Rp{{ number_format(10000000,0,',','.')}}<span class="font-poppins font-light text-second">/day</span></p>
            <p class="flex flex-row text-[10px] font-semibold font-poppins mt-1 ">(4.7/5)  <img src="/svgs/ic-star.svg" alt="icon star" class="w-3 "></p>
        </article>
    </a>
    <a  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800" href="" class=" shrink-0 w-52 md:w-60 px-2 py-3 rounded-xl mt-5 bg-white leading-none shadow-md hover:shadow-black/70 hover:scale-105 transition-all duration-500">
        <h3 class="font-poppins text-main font-semibold text-[20px]">Taycan 4S</h3>
        <p class="text-second font-poppins font-normal mt-1 text-[13px]">Electric car</p>
        <div class="md:w-56 w-48 overflow-hidden  rounded-lg bg-black mt-2"><img src="/img/car-01.webp" alt=" photo product " class="w-full object-cover object-center"></div>
        <article class="mt-3 flex flex-row w-full justify-between items-center">
            <p class="text-primary/95 font-semibold font-poppins text-[12px] ">Rp{{ number_format(10000000,0,',','.')}}<span class="font-poppins font-light text-second">/day</span></p>
            <p class="flex flex-row text-[10px] font-semibold font-poppins mt-1 ">(4.7/5)  <img src="/svgs/ic-star.svg" alt="icon star" class="w-3 "></p>
        </article>
    </a>
    <a  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1100" href="" class=" shrink-0 w-52 md:w-60 px-2 py-3 rounded-xl mt-5 bg-white leading-none shadow-md hover:shadow-black/70 hover:scale-105 transition-all duration-500">
        <h3 class="font-poppins text-main font-semibold text-[20px]">Taycan 4S</h3>
        <p class="text-second font-poppins font-normal mt-1 text-[13px]">Electric car</p>
        <div class="md:w-56 w-48 overflow-hidden  rounded-lg bg-black mt-2"><img src="/img/car-01.webp" alt=" photo product " class="w-full object-cover object-center"></div>
        <article class="mt-3 flex flex-row w-full justify-between items-center">
            <p class="text-primary/95 font-semibold font-poppins text-[12px] ">Rp{{ number_format(10000000,0,',','.')}}<span class="font-poppins font-light text-second">/day</span></p>
            <p class="flex flex-row text-[10px] font-semibold font-poppins mt-1 ">(4.7/5)  <img src="/svgs/ic-star.svg" alt="icon star" class="w-3 "></p>
        </article>
    </a>
    <a  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1400" href="" class=" shrink-0 w-52 md:w-60 px-2 py-3 rounded-xl mt-5 bg-white leading-none shadow-md hover:shadow-black/70 hover:scale-105 transition-all duration-500">
        <h3 class="font-poppins text-main font-semibold text-[20px]">Taycan 4S</h3>
        <p class="text-second font-poppins font-normal mt-1 text-[13px]">Electric car</p>
        <div class="md:w-56 w-48 overflow-hidden  rounded-lg bg-black mt-2"><img src="/img/car-01.webp" alt=" photo product " class="w-full object-cover object-center"></div>
        <article class="mt-3 flex flex-row w-full justify-between items-center">
            <p class="text-primary/95 font-semibold font-poppins text-[12px] ">Rp{{ number_format(10000000,0,',','.')}}<span class="font-poppins font-light text-second">/day</span></p>
            <p class="flex flex-row text-[10px] font-semibold font-poppins mt-1 ">(4.7/5)  <img src="/svgs/ic-star.svg" alt="icon star" class="w-3 "></p>
        </article>
    </a>







</div>
</section>

</main>
</x-app-layout>