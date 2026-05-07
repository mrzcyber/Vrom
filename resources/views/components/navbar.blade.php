<nav class="w-full flex flex-row shadow-sm bg-white justify-between items-center gap-10 py-6 px-10">
    <a href="/" class="uppercase  text-main text-[26px] font-porter" >Vrom</a>
        <ul class="w-full hidden md:flex justify-center items-center ">
            <li class="list-none  w-full max-w-xl flex justify-between items-center">
                <a href="/" class="font-poppins text-second font-normal hover:text-main transition-all duration-300 ">Home</a>
                <a href="/#catalog" class="font-poppins text-second font-normal hover:text-main transition-all duration-300">Catalog</a>
                <a href="/#benefit" class="font-poppins text-second font-normal hover:text-main transition-all duration-300">Benefits</a>
                <a href="/#stori" class="font-poppins text-second font-normal hover:text-main transition-all duration-300">Stories</a>
                <a href="/#kontak" class="font-poppins text-second font-normal hover:text-main transition-all duration-300">Contact</a>
            </li>
        </ul>
    @auth
    <section x-data="{ open: false }"  @click.outside="open = false"  class="md:flex hidden flex-row relative items-center gap-2 w-full max-w-44 justify-center ">
        <div class="flex w-full flex-col justify-end">
            <p class="w-full flex justify-end font-poppins font-semibold text-main ">Hello</p>
            <p class="w-full flex justify-end font-poppins font-semibold text-main">{{ auth()->user()->name }}</p>
        </div>
        <button @click="open = !open" type="button" class="border p-0.5 r rounded-full border-second hover:scale-105 transition-all w-20 h-13 overflow-hidden duration-300">
           @if (auth()->user()->profile_photo_path)
            <img src="{{ Storage::url(auth()->user()->profile_photo_path) }}" alt="profile picture" class="rounded-full w-full h-full  object-cover object-center ">
            @else
                <img src="/img/profil.png" alt="profile picture " class="rounded-full w-full h-full  object-cover object-center ">
           @endif
        </button>
        <ul>
            <li 
            x-show="open"
            x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        class="absolute flex  list-none gap-1 flex-col justify-start border border-second rounded-xl p-1 pl-2 -bottom-24 right-1 w-full ">
        @if ( auth()->user()->role === 'admin')
            <a href="" class="font-medium font-poppins text-main ">Dashboard</a>
        @endif
        <a href="{{ route('front.profil') }}" class="font-medium font-poppins text-main ">My Transaction</a>
        <button form="logout-form" type="submit" class="w-full flex justify-start font-medium z-50 cursor-pointer font-poppins text-red-500 hover:text-main/50 transition-all duration-300">Logout</button>
        
    </li>
</ul>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">  @csrf </form>
    </section>
    
    @else
    <a href="{{ route('login') }}" class="font-poppins text-main border py-1 px-6 hidden md:flex border-second shadow-md shadow-transparent hover:border-black hover:shadow-second  rounded-full font-normal duration-300 transition-all "> login</a>
        
    @endauth  
    
    
    {{-- mobile --}}
    
    <div x-data="{ open: false }" class="relative md:hidden z-50  ">
                
        <button 
            @click="open = !open" type="button" class="">
            <img
            x-show="!open"
            src="/svgs/menu.svg" alt="icon menu" class="w-8 text-main ">
        </button>

        <ul 
          x-show="open"
    @click.outside="open = false"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-x-full"
    x-transition:enter-end="opacity-100 translate-x-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-x-0"
    x-transition:leave-end="opacity-0 translate-x-full"
        class=" bg-slate-200 md:bg-transparent fixed top-1 right-1  w-52  border border-second rounded-lg p-3 px-5">
        <li class="list-none  w-full max-w-xl flex flex-col gap-3 justify-between  items-start">
                @auth
                <div 
                class="w-full flex flex-row gap-2 ">
                <div class="flex w-full flex-col justify-end">
                    <p class="w-full flex justify-end font-poppins font-semibold text-main ">Hello</p>
                    <p class="w-full flex justify-end font-poppins font-semibold text-main">{{ auth()->user()->name }}</p>
                </div>
                <button 
                @click="open = !open"
                    class="border p-0.5 r rounded-full border-second hover:scale-105 transition-all w-20 h-13 overflow-hidden duration-300">
                        @if (auth()->user()->profile_photo_path)
                        <img src="{{ Storage::url(auth()->user()->profile_photo_path) }}" alt="profile picture" class="rounded-full w-full h-full  object-cover object-center ">
                        @else
                        <img src="/img/profil.png" alt="profile picture " class="rounded-full w-full h-full  object-cover object-center ">
                        @endif
                    </button>
                </div>
                
    <a href="{{ route('front.profil') }}" class="font-medium font-poppins text-main hover:text-main/50 transition-all duration-300 mt-5 ">My Transaction</a>
                @endauth
    <a href="/" class="font-medium font-poppins text-main hover:text-main/50 transition-all duration-300 ">Home</a>
    <a href="/#catalog" class="font-medium font-poppins text-main hover:text-main/50 transition-all duration-300">Catalog</a>
    <a href="/#benefit" class="font-medium font-poppins text-main hover:text-main/50 transition-all duration-300">Benefits</a>
    <a href="/#stori" class="font-medium font-poppins text-main hover:text-main/50 transition-all duration-300">Stories</a>
    <a href="/#kontak" class="font-medium font-poppins text-main hover:text-main/50 transition-all duration-300">Contact</a>
    @if(auth()->check())
    <form action="{{ route('logout') }}" method="POST">
        @csrf
    <button type="submit" class="font-medium font-poppins cursor-pointer text-red-500 hover:text-main/50 transition-all duration-300" >Logout</button>
    </form>
        @else
        <a href="" class="font-medium font-poppins text-main underline hover:text-main/50 transition-all duration-300" >Login</a>
    @endif
</li>
</ul>
  
</div>
    
</nav>

