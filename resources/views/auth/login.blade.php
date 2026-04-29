<x-guest-layout>
        <x-slot name="title">Register - {{ config('app.name') }}</x-slot>
        <main class="w-full h-screen bg-bmain flex flex-col justify-center items-center  p-16">
            <div class="flex flex-col items-center justify-center mb-5  ">
                <h1 class="text-lg font-bold font-poppins text-main">Sign In & Drive</h1>
                <p class="text-sm f font-light text-second">we will help you get ready today</p>
            </div>
        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}" class=" w-[490px]   bg-white flex flex-col items-center py-10 rounded-xl">
            @csrf
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
                        <div class="flex justify-end items-center  w-[430px] mt-5 ">

                            <a href="{{ route('password.request') }}" class="font-poppins font-light text-second underline hover:text-gray-600">Forgot My Password</a>
                        </div>

                                   {{-- submit --}}
                    <button type="submit" class="shadow-md shadow-indigo-400 rounded-3xl w-[430px]  h-11 flex justify-center items-center font-poppins mt-12 text-white font-semibold bg-indigo-600 hover:bg-indigo-700 transition-all duration-200">Sign In</button>
                    {{-- sign in --}}
                    <a href="{{ route('register') }}" class="w-[430px] h-11 flex justify-center items-center border border-gray-600 rounded-3xl mt-6 font-poppins font-medium text-main hover:border-indigo-500 cursor-pointer transition-all duration-200 "> Create New Account</a>
            
        </form>
    </main>

</x-guest-layout>
