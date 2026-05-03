<nav class="w-full flex flex-row shadow-sm bg-white justify-between items-center gap-10 py-6 px-10">
    <a href="/" class="uppercase  text-main text-[25px] font-porter" >Vrom</a>

        <li class="list-none w-full max-w-xl flex justify-between items-center">
            <a href="/" class="font-poppins text-second font-normal hover:text-main transition-all duration-300 ">Home</a>
            <a href="" class="font-poppins text-second font-normal hover:text-main transition-all duration-300">Catalog</a>
            <a href="" class="font-poppins text-second font-normal hover:text-main transition-all duration-300">Benefits</a>
            <a href="" class="font-poppins text-second font-normal hover:text-main transition-all duration-300">Stories</a>
            <a href="" class="font-poppins text-second font-normal hover:text-main transition-all duration-300">Contact</a>
        </li>
    @auth
    <section x-data="{ open: false }"  class="md:flex hidden flex-row relative items-center gap-2 w-full max-w-44 justify-center ">
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
        @click.outside="open = false"
        class="absolute flex  list-none gap-1 flex-col justify-start border border-second rounded-xl p-1 pl-2 -bottom-24 right-1 w-full ">
        @if ( auth()->user()->role === 'admin')
            <a href="" class="font-medium font-poppins text-main ">Dashboard</a>
        @endif
        <a href="" class="font-medium font-poppins text-main ">My Transaction</a>
        <a href="" class="font-medium font-poppins text-main ">Logout</a>
    </li>
</ul>
    </section>
    @else
    <a href="{{ route('login') }}" class="font-poppins text-main border py-1 px-6  border-second shadow-md shadow-transparent hover:border-black hover:shadow-second  rounded-full font-normal duration-300 transition-all "> login</a>
        
    @endauth   
    
</nav>

