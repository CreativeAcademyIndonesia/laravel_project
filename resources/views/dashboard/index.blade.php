@extends('layouts.app')

@section('container')
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
    <!-- sidenav  -->

    @include('layouts.app.partials.sidenav')

    <!-- end sidenav -->

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        @include('dashboard.navbar')

        <!-- cards -->
        <div class="w-full px-6 py-6 mx-auto">
            <!-- row 1 -->
            <div class="flex flex-wrap -mx-3">
                <!-- card1 -->
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p
                                            class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                            Total Mahasiswa </p>
                                        <h5 class="mb-2 font-bold dark:text-white">{{ count($mahasiswa) }}</h5>
                                    </div>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div
                                        class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                        <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card2 -->
                <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p
                                            class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                            Total Janji temu</p>
                                        <h5 class="mb-2 font-bold dark:text-white">{{ count($appointment) }}</h5>
                                    </div>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div
                                        class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                                        <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap mt-6 -mx-3">
                @include('dashboard.appointment.table')
            </div>
            <!-- cards row 2 -->
            <div class="flex flex-wrap mt-6 -mx-3">
                @include('dashboard.mahasiswa.table')
                @include('dashboard.prodi.table')

            </div>

            <!-- cards row 3 -->

            <div class="flex flex-wrap mt-6 -mx-3">
                @include('dashboard.dosen.table')
                @include('dashboard.matakuliah.table')
            </div>

            <footer class="pt-4">
                <div class="w-full px-6 mx-auto">
                    <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                        <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                            <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                                ©
                                <script>
                                    document.write(new Date().getFullYear() + ",");
                                </script>
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.instagram.com/aguscreative.id/"
                                    class="font-semibold text-slate-700 dark:text-white" target="_blank">Agus Sugandi</a>
                                - STMIK Mardira Indonesia.
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                            <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                                <li class="nav-item">
                                    <a href="https://www.instagram.com/aguscreative.id/"
                                        class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500"
                                        target="_blank">Instagram</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end cards -->
    </main>
    {{-- @include('dashboard.config') --}}

    <script>
        const onDelete = (evt) => {
            swal({
                    title: "Apakah anda yakin?",
                    text: "Setelah mengkonfirmasi data akan secara permanen dihapus !",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        evt.closest('form').submit()
                        swal("Data telah dihapus!", {
                            icon: "success",
                        });
                    } else {
                        swal("Data Kamu Aman!");
                    }
                });
        }

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

        document.addEventListener("DOMContentLoaded", () => {
            const hasTakenTour = localStorage.getItem('hasTakenTour');

            if (!hasTakenTour) {
                const driver = window.driver.js.driver;

                const driverObj = driver({
                    showProgress: true,
                    steps: [{
                            element: '.mahasiswa',
                            popover: {
                                title: 'Data mahasiswa',
                                description: 'Kamu dapat mengelola data mahasiswa disini.'
                            }
                        },
                        {
                            element: '.matkul',
                            popover: {
                                title: 'Data matkul',
                                description: 'Kamu dapat mengelola data matkul disini.'
                            }
                        },
                        {
                            element: '.prodi',
                            popover: {
                                title: 'Data prodi',
                                description: 'Kamu dapat mengelola data prodi disini.'
                            }
                        },
                        {
                            element: '.dosen',
                            popover: {
                                title: 'Data dosen',
                                description: 'Kamu dapat mengelola data dosen disini.'
                            }
                        },
                        {
                            element: '.appointment',
                            popover: {
                                title: 'Data appointment',
                                description: 'Kamu dapat mengelola data appointment disini.'
                            }
                        }
                    ]
                });
                driverObj.drive();
                localStorage.setItem('hasTakenTour', true);
            }

        });
    </script>
@endsection
