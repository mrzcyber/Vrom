<x-app-layout>
<main class="w-full  overflow-hidden  bg-bmain ">
    <ul>
        <li class=" pt-10 pl-10 md:pl-20 md:px-12  flex flex-row gap-2 items-center">
            <a href="" class="font-poppins font-normal text-second" >Home</a>
            <p class="font-poppins font-normal text-second" >/</p>
            <a href="" class="font-poppins font-normal text-second" >Porsche</a>
            <p class="font-poppins font-normal text-second" >/</p>
            <a href="" class="font-poppins font-medium text-main" >Details</a>
        </li>
    </ul>

    <section class="w-full flex flex-col md:flex-row mt-10 md:px-12 justify-center px-5 lg:px-20 gap-8 lg:gap-16 ">
<div class="flex flex-col bg-white w-full md:w-[550px]  lg:scale-110 p-2 rounded-2xl">
    
    <div class="swiper mainSwiper w-full overflow-hidden rounded-2xl">
        <div class="swiper-wrapper">
            @foreach ($main->image as $image)
                
            <div class="swiper-slide">
                <img src="{{ asset('storage/'.$image->path) }}" class="w-full h-full object-cover" />
            </div>
            @endforeach

        </div>
    </div>

    <div class="swiper thumbSwiper  w-full mt-6">
        <div class="swiper-wrapper flex flex-row ">
            @foreach ($main->image as $image)
                
            <div class="swiper-slide cursor-pointer overflow-hidden rounded-xl border-2 border-transparent transition-all">
                <img src="{{asset('storage/'.$image->path)}}" class="h-20 w-full object-cover">
            </div>
            @endforeach

        </div>
    </div>

</div>


        <div class="bg-white w-full md:w-[220px] lg:scale-110  rounded-xl py-2 px-2">
            <h1 class="font-poppins font-bold text-main text-[20px] capitalize">{{ $main->name }}</h1>
            <p class="capitalize font-poppins font-normal text-second text-[13px] ">{{ $main->type->name }}</p>
            <div class="flex border-b border-second pb-3 lg:pb-5 flex-row font-semibold font-poppins text-[13px] "><img src="/svgs/Frame 9.svg" alt="start" class="w w-20"> ({{ $main->review }})</div>
            <div class="md:flex grid grid-cols-2 justify-center md:flex-col ">
                @foreach (explode(',', $main->features) as $index=>$fitur)
                    
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{ $index * 100 }}" class="flex flex-row text-main gap-2 font-poppins font-semibold md:mt-4 mt-1 text-[13px]"><img src="/svgs/ic-checkDark.svg" alt="icon" class="w-4 "> {{ trim($fitur) }}</div>
                
            @endforeach
                <div class="border-t border-second mt-2 md:hidden"></div>
            <div  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" class="flex flex-row border-t justify-between border-second lg:mt-4 mt-2 pt-2 lg:pt-4">
                <div class="flex flex-col" >
                    <p class="font-semibold text-main text-[13px] leading-none">{{ number_format($main->price,0,'.',',') }}</p>
                    <p class="font-normal text-second text-[12px]">/day</p>
                </div>
                  <div  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" class="p-1 shadow-lg scale-90 hover:shadow-indigo-700 sm:mb-3 mb-0 shadow-indigo-500 rounded-full w-24  bg-primary group">
          <a href="#popularCars" class="  w-full flex flex-row  items-center text-white font-bold text-[13px] border border-transparent transition-all duration-300 group-hover:border-white rounded-full  px">
            <p class="transition-all duration-[320ms] translate-x-2 group-hover:translate-x-1">
              Rent Now
            </p>
            <img src="/svgs/ic-arrow-right.svg"
                 class="opacity-0 group-hover:opacity-100 w-4 group-hover:translate-x-2 transition-all duration-[320ms]"
                 alt="arrow nav">
          </a>
        </div>
            </div>
        </div>
    </section>

    {{-- qa --}}
    <section class="w-full mt-10 flex flex-col items-center pt-10 bg-white pb-32">
<h1 class="text-main font-poppins font-bold text-[25px]">Frequently Asked Questions</h1>
<p class="text-second font-poppins font-normal text-[14px]">learn more about Vrom and get a success</p>
<div class="flex flex-row justify-center items-center scale-90 gap-5 ">
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
    {{-- qa --}}

    <section class="w-full py-5 md:py-10 mt-5 md:mt-16 flex    flex-col px-5 md:px-12 lg:px-20 ">
<h2 class="text-main font-bold font-poppins text-[20px] md:text-[25px]">Similar Cars</h2>
<p class="text-second font-poppins font-normal text-[15px] md:text-20px ">Start your big day</p>
<div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 items-center">
    @foreach ($data as $item)
        
    <a  data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000" data-aos-delay="500" href="{{ route('front.detail',$item->slug)}}" class=" shrink-0 w-42 overflow-hidden md:w-60 px-2 py-3 rounded-xl mt-5 bg-white leading-none shadow-md ">
        <h3 class="font-poppins text-main font-semibold text-[20px] uppercase">{{ $item->name }}</h3>
        <p class="text-second font-poppins font-normal mt-1 text-[13px] capitalize">{{ $item->type->name }}</p>
        <div class=" w-full overflow-hidden  rounded-lg bg-black mt-2"><img src="{{ asset('storage/' . $item->image->first()->path) }}" alt=" photo product " class="w-full object-cover object-center hover:scale-125 transition-all duration-500"></div>
        <article class="mt-3 flex flex-row w-full justify-between items-center">
            <p class="text-primary/95 font-semibold font-poppins text-[12px] ">Rp{{ number_format($item->price,0,',','.')}}<span class="font-poppins font-light text-second">/day</span></p>
            <p class="flex flex-row text-[10px] font-semibold font-poppins mt-1 ">(4.7/5)  <img src="/svgs/ic-star.svg" alt="icon star" class="w-3 "></p>
        </article>
    </a>
    @endforeach


</div>
</section>

<section class="w-full flex flex-row relative bg-main px-8 md:px-16  lg:px-32 ">
<div data-aos="fade-right"  data-aos-offset="100"  data-aos-duration="1000" class="flex w-full  flex-col py-10 ">
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
@push('script')
    @vite(['resources/js/swiper.js'])
@endpush
</x-app-layout>