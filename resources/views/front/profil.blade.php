<x-app-layout>
<main class="w-full h-screen pt-5 md:px-10 px-5 bg-bmain ">
<h1 class="text-main font-poppins font-bold text-[20px] mt-10"> My Booking</h1>
<p class="text-second font-poppins font-normal text-[15px]">Your personal rental history</p>

<section class="w-full flex flex-col mt-3 gap-4">
<div class="bg-white flex relative  flex-row p-2 rounded-xl w-full md:max-w-[1000px]"> 
<div class="  w-60 overflow-hidden rounded-lg hidden md:block"><img src="/img/car-01.webp" alt="thumbnail" class="w-full object-cover object-center"></div>
<div class="flex flex-row w-full md:justify-between">
    <div class="md:ml-3">
        <h3 class="font-semibold text-main font-poppins leading-none">Porsche 911 Turbo S</h3>
        <p class="font-poppins font-medium text-second text-[12px]  ">#BK-2041 · CAR-001</p>
        <div class="flex flex-row mt-3 gap-3 ">
            <div class="flex flex-col">
                <p class="flex flex-row font-poppins font-normal text-second text-[12px] gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                    Check-In
                </p>
                <p class="font-poppins text-main/80 font-semibold text-[14px] -mt-1 loading-none">21-08-2006</p>
            </div>
            <div class="flex flex-col">
                <p class="flex flex-row font-poppins font-normal text-second text-[12px] gap-1">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                        </svg>
                    Check-Out
                </p>
                <p class="font-poppins text-main/80 font-semibold text-[14px] -mt-1 loading-none">24-08-2006</p>
            </div>
            <div class="flex flex-col">
                <p class="flex flex-row font-poppins font-normal text-second text-[12px] gap-1">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
                    Location
                </p>
                <p class="font-poppins text-main/80 font-semibold text-[14px] -mt-1 loading-none flex flex-row gap-1">Bandung <span class="text-second font-medium text-[13px] mt-0.5 ">50132</span></p>
            </div>      
            
        </div>
        <button type="button" class=" shadow-primary rounded-full flex justify-center items-center py-1 w-36  bg-primary hover:bg-indigo-700 shadow-md ">
                <p class="text-white font-poppins font-semibold text-[11px]  ">Complete Payment</p>
        </button>
    </div>


    <div class="flex flex-col items-end justify-between pb-2 md:pb-0 absolute right-2 top-1 md:top-0 h-full md:relative">
        <div class="flex items-end flex-col">
            <p class="text-main font-bold text-[13px] md:text-[20px] ">Rp10.000.000</p>
            <div class="bg-primary/50 rounded-full w-14 flex justify-center items-center ">
                <p class="text-primary font-poppins font-medium   text-[12px]">3 days</p>
            </div>
        </div>

        <div class=" px-4 py-1 rounded-full bg-green-200 ">
            <p class="text-green-700 font-poppins font-medium text-[13px]">Succes</p>
        </div>
    </div>
</div>
</div>
</section>

</main>
</x-app-layout>