<x-app-layout>

       <x-slot name="title">Checkout - {{ config('app.name') }}</x-slot>

<main class="w-full min-h-screen flex flex-row  bg-bmain justify-between  ">
    <article class="flex w-full flex-col items-center justify-center px-5  lg:pl-16">
            <header class="mb-[30px] flex flex-col max-w-[490px] w-full ">
        <h1 class="font-bold font-poppins text-dark text-[26px] mb-1">
          Checkout & Drive Faster
        </h1>
        <p class="text-base font-poppins text-second">We will help you get ready today</p>
      </header>
        
        <section class="w-full max-w-[490px] p-8 mb-10  rounded-2xl bg-white shadow-sm">
            <h2 class="font-semibold font-poppins text-main  pb-2">
                Review Order
            </h2>
            <div class="w-full flex flex-row justify-between  items-center mt-3 border-b pb-1 border-gray-300">
                <p class="font-popins  font-light text-main ">Car Choseen </p>
                <p class=" font-poppins font-medium text-main  uppercase"> {{ $data->item->name }} </p>
            </div>
            <div class="w-full flex flex-row justify-between  items-center mt-3 border-b pb-1 border-gray-300">
                <p class="font-popins  font-light text-main ">Total day </p>
                <p class=" font-poppins font-medium text-main "> {{ $data->total_day }} Days </p>
            </div>
            <div class="w-full flex flex-row justify-between  items-center mt-3 border-b pb-1 border-gray-300">
                <p class="font-popins  font-light text-main ">Service </p>
                <p class=" font-poppins font-medium text-main "> Delivery </p>
            </div>
            <div class="w-full flex flex-row justify-between  items-center mt-3 border-b pb-1 border-gray-300">
                <p class="font-popins  font-light text-main ">Price </p>
                <p class=" font-poppins font-medium text-main "> Rp{{ number_format($data->item->price,0,',','.')}} Per Day </p>
            </div>
            <div class="w-full flex flex-row justify-between  items-center mt-3 border-b pb-1 border-gray-300">
                <p class="font-popins  font-light text-main ">VAT(10%) </p>
                <p class=" font-poppins font-medium text-main "> Rp{{ number_format($data->total_price/11,0,',','.')}} </p>
            </div>
            <div class="w-full flex flex-row justify-between  items-center mt-3 border-b pb-1 border-gray-300">
                <p class="font-popins  font-light text-main ">Grand total </p>
                <p class=" font-poppins font-medium text-main "> Rp{{ number_format($data->total_price,0,',','.')}} </p>
            </div>
            <form action="" method="post">
                @csrf
                @method('delete')
                
                <button type="submit" class="font-semibold font-poppins text-main mt-3 hover:text-gray-600 transition-all duration-300"> Cancel Payment</button>
            </form>
            

            <button id="pay-button" type="button" class="shadow-md shadow-indigo-400 rounded-3xl w-full max-w-[430px]  h-11 flex justify-center items-center font-poppins mt-6 text-white font-semibold bg-indigo-600 hover:bg-indigo-700 transition-all duration-200">Continue</button>


        </section>
    </article>

    <aside class=" w-full hidden lg:flex justify-center items-center overflow-hiiden  ">
        <div class="w-full overflow-hidden -mr-10">
        <img src="/img/porsche.webp" alt="thumbnail" class="object-center object-cover w-full scale-105   ">
        </div>
    </aside>


</main>
@push('script')
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ config('midtrans.client_key') }}">
    </script>

    <script>
        const payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            window.snap.pay('{{ $data->snap_token }}', {
                onSuccess: function(result) {
                    window.location.href = '/payment-success';
                },
                onPending: function(result) {
                    alert("Menunggu pembayaran Anda!");
                },
                onError: function(result) {
                    alert("Pembayaran gagal!");
                },
                onClose: function() {
                    alert('Anda menutup popup sebelum menyelesaikan pembayaran');
                }
            });
        });
    </script>
@endpush
</x-app-layout>