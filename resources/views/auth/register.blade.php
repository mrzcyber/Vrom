<x-guest-layout>
    <x-slot name="title">Login - {{ config('app.name') }}</x-slot>
        <main class="w-full  bg-bmain flex flex-col justify-center items-center  p-16">
            <div class="flex flex-col items-center justify-center mb-5  ">
                <h1 class="text-lg font-bold font-poppins text-main">Sign In & Drive</h1>
                <p class="text-sm f font-light text-second">we will help you get ready today</p>
            </div>

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
              <!-- Validation Errors -->
          <div class="flex flex-col col-span-2 gap-3">
            <x-validation-errors class="mb-5" />
          </div>

          {{-- validation email --}}
        @if(auth()->user()?->hasVerifiedEmail())
            <p>Email sudah terverifikasi ✅</p>
        @endif

            @csrf
            <section class=" w-[490px]   bg-white flex flex-col items-center py-10 rounded-xl">
                    <div class="relative w-24 h-24 block">
                        {{-- preview --}}
                        <label for="photo" class="cursor-pointer ">
                            <img id="preview" src="{{ asset('svgs/ic-default-photo.svg') }}" alt="photo profil" class="w-24 h-24 rounded-full object-cover object-center">
                        </label>
                            {{-- btn-add --}}
                           <label for="photo" id="btn-add" class="absolute bottom-0 right-0 w-7 h-7 cursor-pointer  bg-indigo-500  rounded-full flex items-center justify-center ">
                                <img src="{{ asset('svgs/ic-btn_upload.svg') }}" alt="action file" id="button-profil" >
                            </label>
                            {{-- btn-delete --}}
                           <button type="button" id="btn-del" class=" hidden absolute  bottom-0 right-0 w-7 h-7 cursor-pointer  bg-indigo-500  rounded-full flex items-center justify-center ">
                                <img src="{{ asset('svgs/ic-btn_delete.svg') }}" alt="action file" id="button-profil" >
                            </button>
                        
                        <input type="file" id="photo" name="profile_photo_path" accept="image/*" class="hidden">
                    </div>
                    
                    <div class="flex flex-col gap-2 mt-10">
                        <label for="" class=" text-base text-main font-poppins font-semibold">
                            Full Name
                        </label>
                        <input type="text" name="name" id="name" placeholder="Insert Full Name" value="{{ old('name') }}" required autofocus class="text-base w-[430px] rounded-3xl font-medium focus:border-main  focus:outline-none border border-gray-500 p placeholder:font-normal placeholder:text-second">
                    </div>
                    <div class="flex flex-col gap-2 mt-6">
                        <label for="" class=" text-base text-main font-poppins font-semibold">
                            Phone Number
                        </label>
                        <input type="number" name="phone" id="phone" placeholder="Insert Your Phone Number" value="{{ old('phone') }}"required autofocus class="text-base w-[430px] no-spinner rounded-3xl font-medium focus:border-main  focus:outline-none border border-gray-500 p placeholder:font-normal placeholder:text-second">
                    </div>
                    <div class="flex flex-col gap-2 mt-6">
                        <label for="" class=" text-base text-main font-poppins font-semibold">
                            Email Address
                        </label>
                        <input type="email" name="email" id="email" placeholder="Insert Your Email" value="{{ old('email') }}" required autofocus class="text-base w-[430px] rounded-3xl font-medium focus:border-main  focus:outline-none border border-gray-500 p placeholder:font-normal placeholder:text-second">
                    </div>
                    <div class="flex flex-col gap-2 mt-6">
                        <label for="" class=" text-base text-main font-poppins font-semibold">
                            Password
                        </label>
                        <input type="password" name="password" id="password" placeholder="Insert Your Password" required autofocus class="text-base w-[430px] rounded-3xl font-medium focus:border-main  focus:outline-none border border-gray-500 p placeholder:font-normal placeholder:text-second">
                    </div>
                    {{-- submin --}}
                    <button type="submit" class="shadow-md shadow-indigo-400 rounded-3xl w-[430px]  h-11 flex justify-center items-center font-poppins mt-14 text-white font-semibold bg-indigo-600 hover:bg-indigo-700 transition-all duration-200">Create My Account</button>
                    {{-- sign in --}}
                    <a href="{{ route('login') }}" class="w-[430px] h-11 flex justify-center items-center border border-gray-600 rounded-3xl mt-6 font-poppins font-medium text-main hover:border-indigo-500 cursor-pointer transition-all duration-200 "> Sign In</a>
            </section>


           
            
        </form>
 </main>
 <script>
  const defaultAvatar = "{{ asset('svgs/ic-default-photo.svg') }}";
</script>
</x-guest-layout>
