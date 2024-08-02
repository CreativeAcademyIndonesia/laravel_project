<!doctype html>
<html data-theme="light" style="color-scheme: light;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Point of Sales</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,600;0,9..40,700;1,9..40,400;1,9..40,500&display=swap"
        rel="stylesheet">

</head>

<body class="min-h-screen min-w-full grid grid-rows-1 bg-[#252836]">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <div class="grid grid-cols-12 min-h-full">
        <div class="col-span-12 lg:col-span-8 max-h-full min-h-full ">
            <div class="navbar z-50 bg-transparent shadow-none border-b border-slate-700 bg-[#222534]">
                <div class="navbar-start text-white">
                    <a class="navbar-item font-semibold text-xl text-white">Abeh Kost</a>
                </div>
                <div class="navbar-end">
                    {{-- <input class="input-xl input bg-transparent text-white border-slate-700"
                        placeholder="Search Product..." /> --}}
                    @auth
                        <div class="flex items-center gap-2">
                            <span class="text-slate-400 text-base font-semibold">{{ auth()->user()->name }}</span>
                            <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="btn btn-warning btn-lg">Logout</button>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-warning btn-lg">login</a>
                    @endauth
                </div>
            </div>

            <div class="grid grid-cols-12 container mx-auto py-5 px-4">
                <div class="col-span-12">
                    <div class="tabs tabs-boxed gap-4 bg-[#1F1D2B]">
                        @foreach ($category as $key => $c)
                            <input type="radio" id="tab-{{ $c->id }}"
                                {{ $categoryFilter == $c->category ? 'checked' : '' }} name="tab-5"
                                class="tab-toggle" />
                            <label for="tab-{{ $c->id }}" class="tab text-lg text-yellow-400"><a
                                    href="{{ route('home', ['category' => $c->category]) }}">{{ $c->category }}</a></label>
                        @endforeach
                        <input type="radio" id="tab-all" {{ $categoryFilter == '' ? 'checked' : '' }} name="tab-5"
                            class="tab-toggle" />
                        <label for="tab-all" class="tab text-lg text-yellow-400"><a
                                href="{{ route('home') }}">ALL</a></label>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-12 container mx-auto gap-6  px-4">
                <div class="col-span-12">
                    <h1 class="font-semibold text-3xl text-white">Pilih Kamar</h1>
                </div>
                @foreach ($product as $key => $c)
                    <div
                        class="card card-image-cover col-span-12 md:col-span-6 lg:col-span-3 gap-0 bg-[#1F1D2B] shadow-none">
                        <div class="relative">
                            <div
                                class="inline-block bg-[#ffa13d] text-white rounded-tr-xl text-base absolute bottom-0 left-0 font-semibold py-2 pl-4 pr-6">
                                Rp.{{ $c->harga }}
                            </div>
                            <img src="{{ asset('storage/app/images/' . $c->foto) }}" class="h-full rounded-xl"
                                alt="" />
                        </div>
                        <div class="card-body p-3 md:p-4">
                            <div class="flex flex-col gap-0">
                                <div><span class="badge badge-flat-warning ">{{ $c->category }}</span></div>
                                <h2 class="card-header text-base font-semibold text-white">{{ $c->type_kamar }}</h2>
                                <p class="text-content text-slate-500 text-sm">{{ $c->ac }}
                                    AC,{{ $c->kamar_mandi }} Kamar
                                    mandi, {{ $c->kamar_tidur }} Kamar Tidur, Furniture {{ $c->furniture }}
                                </p>
                                <div class="card-footer mt-5">
                                    <div class="flex gap-1 items-center">
                                        <button
                                            class="text-yellow-600 bg-yellow-50 flex items-center justify-center w-8 h-8 rounded-xl text-lg"
                                            type="button"
                                            onclick="const input = this.closest('div').querySelector('input'); input.value = parseInt(input.value) - 1; "><ion-icon
                                                name="remove-circle-outline"></ion-icon></button>
                                        <input class="input input-sm w-16" type="number" value="1"
                                            placeholder="Hari" />
                                        <button
                                            class="text-yellow-600 bg-yellow-50 flex items-center justify-center w-8 h-8 rounded-xl text-lg"><ion-icon
                                                name="add-circle-outline" type="button"
                                                onclick="const input = this.closest('div').querySelector('input'); input.value = parseInt(input.value) + 1;"></ion-icon></button>
                                    </div>
                                    <button onclick="addChart(this)" data-product="{{ $c }}"
                                        class="btn
                                                btn-solid-warning">Pesan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="col-span-12 lg:col-span-4 p-6 bg-[#1F1D2B] max-h-full relative">
            <div class="mb-2">
                <h2 class="text-2xl font-semibold text-white">Pesan Kamar</h2>
            </div>
            <form action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data" id="checkoutForm">
                <input type="hidden" class="hidden" name="nama" value="{{ auth()->user()->name }}">
                @csrf
                <div class="flex flex-col gap-2 max-h-[80vh] overflow-auto" id="chart">

                </div>
            </form>
            <div class="absolute bottom-0 right-0 left-0 p-6 bg-[#252836] flex justify-between items-center">
                <div class="flex flex-col gap-0">
                    <span class="text-base text-slate-300">Subtotal</span>
                    <span class="font-bold text-2xl text-white" id="subtotal">Rp.0,-</span>
                </div>
                <button class="btn btn-warning btn-lg"
                    onclick="document.querySelector('#checkoutForm').submit()">Checkout</button>
            </div>
        </div>



    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        @if (session('success'))
            document.addEventListener("DOMContentLoaded", function() {
                swal({
                    title: "Success!",
                    text: "{{ session('success') }}",
                    icon: "success",
                    button: false,
                });
            });
        @endif
        function addChart(evt) {
            const data = JSON.parse(evt.getAttribute('data-product'))
            const imagePath = 'storage/app/images/' + data.foto;
            const imageUrl = imagePath.startsWith('http') ? imagePath : `/${imagePath}`;
            console.log(data)
            const chart = document.querySelector('#chart')
            const qty = parseInt(evt.closest('div').querySelector('input').value)
            if (qty < 1) {
                alert('Minimal pesan 1 hari')
                return
            }
            let element = `
                <div class="flex gap-2 bg-[#252836] p-2 rounded-lg items-center wrapper">
                    <div class="rounded-lg overflow-hidden">
                        <img src="${imageUrl}" alt="" class="w-40" />
                    </div>
                    <div class="flex flex-col ">
                        <div class="flex flex-col ">
                            <h3 class="font-semibold text-white">${data.type_kamar}</h3>
                            <span class="text-slate-400 text-xs">${data.ac}
                                    AC,${data.kamar_mandi} Kamar
                                    mandi, ${data.kamar_tidur}Kamar Tidur, Furniture ${data.furniture }</span>
                        </div>
                        <div class="card-footer mt-3">
                            <div class="flex gap-1 items-center">
                                <button
                                    class="text-yellow-600 bg-yellow-50 flex items-center justify-center w-8 h-8 rounded-xl text-lg"  type="button" onclick="const input = this.closest('div').querySelector('input'); input.value = parseInt(input.value) - 1; hitung()"><ion-icon
                                        name="remove-circle-outline"></ion-icon></button>
                                    <input class="input input-sm w-16" placeholder="Hari" value="${qty}" name="qty[]"/>
                                    <input type="hidden" class="hidden" name="product[]" value="${data.type_kamar}">
                                    <input type="hidden" class="hidden" name="price[]" value="${data.harga}">
                                <button
                                    class="text-yellow-600 bg-yellow-50 flex items-center justify-center w-8 h-8 rounded-xl text-lg" type="button" onclick="const input = this.closest('div').querySelector('input'); input.value = parseInt(input.value) + 1; hitung()"><ion-icon
                                        name="add-circle-outline"></ion-icon></button>
                                <button
                                    class="text-red-600 bg-red-50 flex items-center justify-center w-8 h-8 rounded-xl text-lg" type="button" onclick="this.closest('.wrapper').remove(); hitung()"><ion-icon
                                        name="trash-outline"></ion-icon></button>
                            </div>
                        </div>
                    </div>
                </div>
            `
            $(chart).append(element)
            hitung()
        }

        function hitung() {
            const checkout = document.querySelector('#checkoutForm').querySelectorAll('[name="price[]"]')
            let total = 0
            checkout.forEach(input => {
                total += parseFloat(input.value) * parseInt(input.closest('div').querySelector("[name='qty[]']")
                    .value)
            })
            document.querySelector('#subtotal').innerHTML = `Rp.${total},-`
            return total
        }
    </script>
</body>

</html>
