<x-app-layout>
<main class="w-full mt-10 overflow-hidden flex flex-col justify-center items-center">
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
<article class="flex flex-row items-center justify-center md:mt-16  w-full scale-50 md:scale-100">
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

<section class="w-full py-5 md:py-10 mt-5 md:mt-20 flex bg-bmain flex-col px-5 md:px-16 lg:px-20 ">
<h2 class="text-main font-bold font-poppins text-[20px] md:text-[25px]">Popular Cars</h2>
<p class="text-second font-poppins font-normal text-[15px] md:text-20px ">Start your big day</p>
<div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 items-center">
    @foreach ($data as $item)
        
    <a  data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000" data-aos-delay="500" href="{{ route('front.detail',$item->slug)}}" class=" shrink-0 w-48 md:w-60 px-2 py-3 rounded-xl mt-5 bg-white leading-none shadow-md ">
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

<section class="w-full mt-10 flex flex-row justify-between  mb-10 px-2  md:px-20">
        <div  data-aos="fade-right" data-aos-offset="100" data-aos-duration="1000" class="overflow-hidden w-full ">
            <img src="/img/illustration-01.webp" alt="benefit photo" class="w-full object-cover object-center ">
    </div>
    <div data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000" data-aos-delay="500"  class="w-full md:pl-5 flex flex-col justify-start items-start  ">
        <h2 class="font-semibold font-poppins text-main md:text-[20px] lg:text-[35px]">Extra Benefits</h2>
        <p class="text-second font-poppins font-normal text-[10px] md:text-[13px] lg:text-[25px] ">You drive safety and famous</p>
        <div data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000" data-aos-delay="600"  class="flex flex-row mt-5 gap-2 lg:mt-12 md:gap-4">
            <img src="/svgs/ic-car.svg" alt="icon car" class="bg-black md:rounded-2xl rounded-lg md:p-2 p-1 w-10 h-10 md:h-full scale-90 md:scale-100 md:w-12 lg:w-20">
            <div class="flex flex-col">
                  <h2 class="font-semibold font-poppins text-main text-[11px] md:text-[15px] lg:text-[25px]">Delivery</h2>
                <p class="text-second font-poppins font-normal text-[10px] md:text-[13px] lg:text-[25px] ">Just sit tight and wait</p>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000" data-aos-delay="700"  class="flex flex-row mt-2 gap-2 lg:mt-8 md:gap-4">
            <img src="/svgs/ic-card.svg" alt="icon card" class="bg-black md:rounded-2xl rounded-lg md:p-2 p-1 w-10 h-10 md:h-full scale-90 md:w-12 md:scale-100 lg:w-20">
            <div class="flex flex-col">
                  <h2 class="font-semibold font-poppins text-main text-[11px] md:text-[15px] lg:text-[25px]">Pricing</h2>
                <p class="text-second font-poppins font-normal text-[10px] md:text-[13px] lg:text-[25px] ">12x Pay installment</p>
            </div>
        </div>
        <div data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="800"  class="flex flex-row mt-2 gap-2 lg:mt-8 md:gap-4">
            <img src="/svgs/ic-securityuser.svg" alt="icon secure" class="bg-black md:rounded-2xl rounded-lg md:p-2 p-1 w-10 h-10 md:h-full scale-90 md:scale-100 md:w-12 lg:w-20">
            <div class="flex flex-col">
                  <h2 class="font-semibold font-poppins text-main text-[11px] md:text-[15px] lg:text-[25px]">Secure</h2>
                <p class="text-second font-poppins font-normal text-[10px] md:text-[13px] lg:text-[25px] ">Use your plate number</p>
            </div>
        </div>
        <div data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="900"  class="flex flex-row mt-2 gap-2 lg:mt-8 md:gap-4">
            <img src="/svgs/ic-convert3dcube.svg" alt="icon trade" class="bg-black md:rounded-2xl rounded-lg md:p-2 p-1 w-10 h-10 md:h-full scale-90 md:scale-100 md:w-12 lg:w-20">
            <div class="flex flex-col">
                  <h2 class="font-semibold font-poppins text-main text-[11px] md:text-[15px] lg:text-[25px]">Fast Trade</h2>
                <p class="text-second font-poppins font-normal text-[10px] md:text-[13px] lg:text-[25px] ">Change car faster</p>
            </div>
        </div>





          <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" class="p-1 mt-3 md:mt-10 mb-2 shadow-lg scale-90 md:scale-100 hover:shadow-indigo-700 shadow-indigo-500 rounded-full bg-primary group  ">
          <a href="#popularCars" class=" w-44 md:w-52 lg:w-96 lg:py-2 flex flex-row text-white font-bold border border-transparent transition-all duration-300 group-hover:border-white rounded-full md:py-1 px-1 ">
            <p class="transition-all duration-[320ms]  lg:text-[25px] translate-x-10 md:translate-x-14 lg:translate-x-28 group-hover:translate-x-1">
              Explore cars
            </p>
            <img src="/svgs/ic-arrow-right.svg"
                 class="opacity-0 group-hover:opacity-100 group-hover:translate-x-10 md:group-hover:translate-x-20 lg:group-hover:translate-x-40 transition-all duration-[320ms]"
                 alt="arrow nav">
          </a>
        </div>
    </div>
</section>

<section class="w-full justify-center pb-16  bg-bmain flex px-10 md:px-20 ">
<div class="w-full flex gap-5 flex-col md:flex-row max-w-5xl py-10 ">
    <div class="flex w-full flex-col ">
        <h1 class="font-poppins font-semibold text-main/90 md:text-[50px] text-[30px] ">About Vrom</h1>
        <p class="font-poppins mt-2 font-medium text-gray-600">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, aperiam quos. Nemo fuga molestiae, atque dignissimos nesciunt ipsa officia eum harum repellendus quisquam cupiditate provident doloremque laborum quia libero aut inventore vitae aperiam, quod debitis pariatur nulla est? Nobis quo blanditiis quam sequi atque est aperiam excepturi. Quasi, cum quae.
        </p>
        <article class="w-full flex flex-row mt-7 md:mt-14 md:scale-100 ">
            <div class="flex flex-col items-center leading-none pr-5">
        <p data-count="6000" class="font-semibold font-poppins text-main md:text-[25px]">0+</p>
        <p class="text-second font-poppins font-normal md:text-[16px] text-[12px] whitespace-nowrap">Happy Costumer</p>
            </div>
            <div class="flex flex-col items-center leading-none pr-5">
        <p data-count="3" class="font-semibold font-poppins text-main md:text-[25px]">0+</p>
        <p class="text-second font-poppins font-normal md:text-[16px] text-[12px] whitespace-nowrap">Year Experience</p>
            </div>
            <div class="flex flex-col items-center leading-none ">
        <p data-count="20" class="font-semibold font-poppins text-main md:text-[25px]">0+</p>
        <p class="text-second font-poppins font-normal md:text-[16px] text-[12px] whitespace-nowrap">Number of Vehicles</p>
            </div>

        </article>
    </div>
    <div class="w-full relative h-52 md:h-96 md:mt-10 mt-5 ">
        <div class=" w-full max-w-2xl rounded-2xl h-52 md:h-96 overflow-hidden">
            <img src="/img/owncar.jpg" alt="own car photo" class="w-full h-full object-center object-cover">
            <div class="absolute z-50 -bottom-7 md:-left-10 -left-6 bg-white rounded-2xl py-1 px-3 w-48 shadow-sm shadow-black/50 ">
                <p class="font-poppins font-semibold text-main">Owner</p>
                <p class="font-poppins font-medium text-main">Alex Robert Carlos</p>
            </div>
        </div>
    </div>

</div>
</section>
{{-- qa --}}
<section class="w-full mt-10 flex flex-col items-center pb-32">
<h1 class="text-main font-poppins font-bold text-[25px]">Frequently Asked Questions</h1>
<p class="text-second font-poppins font-normal text-[14px]">learn more about Vrom and get a success</p>
<div class="flex flex-row justify-center items-center gap-5">
    <div class="flex flex-col w-full items-start  mt-10">

<div class="accordion flex flex-col w-48 md:w-72 p-2  rounded-3xl border border-second shadow-sm overflow-hidden cursor-pointer"
     style="max-height: 40px; transition: max-height 0.5s ease;">
    <div class="flex flex-row justify-between w-full items-center">
        <h3 class="text-main font-poppins font-medium text-[12px] md:text-[15px] lg:text-[17px]">Rental Period</h3>
        <button>
            <img src="/svgs/ic-chevron-down-rounded.svg" alt="button arrow" class="transition-transform duration-500">
        </button>
    </div>
    <p class="mt-3 font-poppins text-[13px] mb-2">
        The rental period commences upon the official handover of the vehicle and concludes at the time the vehicle is returned to the Company.
The minimum rental duration is one (1) day, equivalent to twenty-four (24) hours.
Any extension of the rental period shall be subject to mutual agreement between the parties.
    </p>
</div>
<div class="accordion flex flex-col w-48 md:w-72 p-2 mt-5 rounded-3xl border border-second shadow-sm overflow-hidden cursor-pointer"
     style="max-height: 40px; transition: max-height 0.5s ease;">
    <div class="flex flex-row justify-between w-full items-center">
        <h3 class="text-main font-poppins font-medium text-[12px] md:text-[15px] lg:text-[17px]">Renter Requirements</h3>
        <button>
            <img src="/svgs/ic-chevron-down-rounded.svg" alt="button arrow" class="transition-transform duration-500">
        </button>
    </div>
    <p class="mt-3 font-poppins text-[13px] mb-2">
        The renter must hold a valid and legally recognized driver’s license.
The vehicle may not be taken outside the island of Bali without prior written authorization from the Company.

    </p>
</div>
<div class="accordion flex flex-col w-48 md:w-72 p-2 mt-5 rounded-3xl border border-second shadow-sm overflow-hidden cursor-pointer"
     style="max-height: 40px; transition: max-height 0.5s ease;">
    <div class="flex flex-row justify-between w-full items-center">
        <h3 class="text-main font-poppins font-medium text-[12px] md:text-[15px] lg:text-[17px]">Late Return </h3>
        <button>
            <img src="/svgs/ic-chevron-down-rounded.svg" alt="button arrow" class="transition-transform duration-500">
        </button>
    </div>
    <p class="mt-3 font-poppins text-[13px] mb-2">
        Late returns shall incur a penalty of ten percent (10%) of the daily rental rate per hour of delay.
The Company shall not be held responsible for any personal belongings left inside the vehicle upon return.
    </p>
</div>
        
    </div>
    

    <div class="flex flex-col w-full items-start  mt-10">
<div class="accordion flex flex-col w-48 md:w-72 p-2  rounded-3xl border border-second shadow-sm overflow-hidden cursor-pointer"
     style="max-height: 40px; transition: max-height 0.5s ease;">
    <div class="flex flex-row justify-between w-full items-center">
        <h3 class="text-main font-poppins font-medium text-[12px] md:text-[15px] lg:text-[17px]"> Rental Fees</h3>
        <button>
            <img src="/svgs/ic-chevron-down-rounded.svg" alt="button arrow" class="transition-transform duration-500">
        </button>
    </div>
    <p class="mt-3 font-poppins text-[13px] mb-2">
        All rental fees must be paid in full (100%) prior to commencement of the rental period.
Should the renter cancel the booking, a cancellation charge of fifty percent (50%) of the rental fee shall apply.
    </p>
</div>
<div class="accordion flex flex-col w-48 md:w-72 p-2 mt-5 rounded-3xl border border-second shadow-sm overflow-hidden cursor-pointer"
     style="max-height: 40px; transition: max-height 0.5s ease;">
    <div class="flex flex-row justify-between w-full items-center">
        <h3 class="text-main font-poppins font-medium text-[12px] md:text-[15px] lg:text-[17px]">General Provisions</h3>
        <button>
            <img src="/svgs/ic-chevron-down-rounded.svg" alt="button arrow" class="transition-transform duration-500">
        </button>
    </div>
    <p class="mt-3 font-poppins text-[13px] mb-2">
      This Agreement is provided in both Indonesian and English. In the event of any inconsistency or difference in interpretation, the Indonesian version shall prevail.
The renter must provide complete and accurate personal identification and full vehicle details as required.

    </p>
</div>
<div class="accordion flex flex-col w-48 md:w-72 p-2 mt-5 rounded-3xl border border-second shadow-sm overflow-hidden cursor-pointer"
     style="max-height: 40px; transition: max-height 0.5s ease;">
    <div class="flex flex-row justify-between w-full items-center">
        <h3 class="text-main font-poppins font-medium text-[12px] md:text-[15px] lg:text-[17px]">Obligations  </h3>
        <button>
            <img src="/svgs/ic-chevron-down-rounded.svg" alt="button arrow" class="transition-transform duration-500">
        </button>
    </div>
    <p class="mt-3 font-poppins text-[13px] mb-2">
        To maintain the vehicle responsibly and refuel using Pertamax Turbo or the fuel grade specified by the Company.
To settle the full rental payment prior to vehicle handover.

    </p>
</div>
        
    </div>


</div>

</section>

<section class="w-full flex flex-row relative bg-main px-8 md:px-16  lg:px-32 ">
<div  class="flex w-full  flex-col py-10 ">
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
<footer class="w-full flex justify-center items-center py-12 ">
<p class="text-second font-poppins font-medium text-[13px]">All Rights Reserved. Copyright Vrom 2023.</p>
</footer>
</main>
</x-app-layout>