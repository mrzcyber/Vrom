<x-app-layout>
<main class="w-full h-screen bg-bmain ">
    <ul>
        <li class=" pt-10 pl-20  flex flex-row gap-2 items-center">
            <a href="" class="font-poppins font-normal text-second" >Home</a>
            <p class="font-poppins font-normal text-second" >/</p>
            <a href="" class="font-poppins font-normal text-second" >Porsche</a>
            <p class="font-poppins font-normal text-second" >/</p>
            <a href="" class="font-poppins font-medium text-main" >Details</a>
        </li>
    </ul>

    <section class="w-full flex flex-row mt-10 px-20 gap-4 ">
        <div class="flex flex-col bg-white w-[490px] p-2 rounded-2xl">
            <div class=" w-full ">
                <div class="w-full overflow-hidden rounded-2xl">
                    <img src="/img/car-01.webp" alt="detail product " class="w-full h-full object-cover object-center ">
                </div>
            </div>

            <div class="w-full flex flex-row gap-2 mt-3 ">
                    <div class="h h-20 overflow-hidden rounded-xl border-2 border-orange-400"><img src="/img/car-01.webp" alt="subthumbnail" class="w-full h-full object-cover object-center"></div>
                    <div class="h h-20 overflow-hidden rounded-xl border-2 border-transparent"><img src="/img/car-01.webp" alt="subthumbnail" class="w-full h-full object-cover object-center"></div>
                    <div class="h h-20 overflow-hidden rounded-xl border-2 border-transparent"><img src="/img/car-01.webp" alt="subthumbnail" class="w-full h-full object-cover object-center"></div>
                    <div class="h h-20 overflow-hidden rounded-xl border-2 border-transparent"><img src="/img/car-01.webp" alt="subthumbnail" class="w-full h-full object-cover object-center"></div>
            </div>

        </div>


        <div class="bg-white w-[220px] h-96 rounded-xl py-2 px-2">
            <h1 class="font-poppins font-bold text-main text-[20px] capitalize">Porsche Taychan Mattic</h1>
            <p class="capitalize font-poppins font-normal text-second text-[13px] ">sport car</p>
            <div class="flex border-b border-second pb-3 flex-row font-semibold font-poppins text-[13px] "><img src="/svgs/Frame 9.svg" alt="start" class="w w-20"> (12,887)</div>
            <div class="flex flex-row text-main gap-2 font-poppins font-semibold mt-4 text-[13px]"><img src="/svgs/ic-checkDark.svg" alt="icon" class="w-4"> 350 Horse Power</div>
            <div class="flex flex-row text-main gap-2 font-poppins font-semibold text-[13px] mt-1"><img src="/svgs/ic-checkDark.svg" alt="icon" class="w-4"> 350 Horse Power</div>
            <div class="flex flex-row text-main gap-2 font-poppins font-semibold text-[13px] mt-1"><img src="/svgs/ic-checkDark.svg" alt="icon" class="w-4"> 350 Horse Power</div>
            <div class="flex flex-row text-main gap-2 font-poppins font-semibold text-[13px] mt-1"><img src="/svgs/ic-checkDark.svg" alt="icon" class="w-4"> 350 Horse Power</div>
            <div class="flex flex-row text-main gap-2 font-poppins font-semibold text-[13px] mt-1"><img src="/svgs/ic-checkDark.svg" alt="icon" class="w-4"> 350 Horse Power</div>
            <div class="flex flex-row text-main gap-2 font-poppins font-semibold text-[13px] mt-1"><img src="/svgs/ic-checkDark.svg" alt="icon" class="w-4"> 350 Horse Power</div>
            <div class="flex flex-row text-main gap-2 font-poppins font-semibold text-[13px] mt-1"><img src="/svgs/ic-checkDark.svg" alt="icon" class="w-4"> 350 Horse Power</div>
            <div class="flex flex-row text-main gap-2 font-poppins font-semibold text-[13px] mt-1"><img src="/svgs/ic-checkDark.svg" alt="icon" class="w-4"> 350 Horse Power</div>
            <div class="flex flex-row border-t justify-between border-second mt-4 pt-2">
                <div class="flex flex-col" >
                    <p class="font-semibold text-main text-[13px] leading-none">Rp1.000.000</p>
                    <p class="font-normal text-second text-[12px]">/day</p>
                </div>
                  <div class="p-1 shadow-lg scale-90 hover:shadow-indigo-700 shadow-indigo-500 rounded-full w-24  bg-primary group">
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

</main>
@push('script')
    @vite(['resources/js/swiper.js'])
@endpush
</x-app-layout>