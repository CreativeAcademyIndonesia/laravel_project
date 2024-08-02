<!doctype html>
<html data-theme="light" style="color-scheme: light;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,600;0,9..40,700;1,9..40,400;1,9..40,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/driver.js@1.0.1/dist/driver.css" />
</head>

<body class="min-h-screen min-w-full grid grid-rows-1 bg-[#252836]">
    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mx-auto flex w-full max-w-sm flex-col gap-6 login">
                <div class="flex flex-col items-center">
                    <h1 class="text-3xl font-semibold text-white">Masuk</h1>
                    <p class="text-sm text-white">Masuk untuk akses semua fitur</p>
                </div>
                <div class="form-group">
                    <div class="form-field">
                        <label class="form-label text-white">email</label>
                        <input placeholder="Email" type="email" name="email" class="input max-w-full" />
                    </div>
                    <div class="form-field">
                        <label class="form-label text-white">Password</label>
                        <div class="form-control">
                            <input placeholder="Password" type="password" name="password" class="input max-w-full" />
                        </div>
                    </div>
                    {{-- <div class="form-field">
                        <div class="form-control justify-between">
                            <div class="flex gap-2">
                                <input type="checkbox" class="checkbox" name="remember" />
                                <a href="#" class="text-white">Remember me</a>
                            </div> --}}
                    {{-- <label class="form-label text-white">
                                <a class="link link-underline-hover link-warning text-sm">Forgot your password?</a>
                            </label> --}}
                    {{-- </div>
            </div> --}}
                    <div class="form-field pt-5">
                        <div class="form-control justify-between">
                            <button type="submit" class="btn btn-warning w-full">Masuk</button>
                        </div>
                    </div>

                    <div class="form-field">
                        <div class="form-control justify-center">
                            <a href="{{ route('register') }}"
                                class="link link-underline-hover link-warning text-sm">Tidak
                                Punya akun..? Mendaftar
                                sekarang.</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/driver.js@1.0.1/dist/driver.js.iife.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const driver = window.driver.js.driver;

            const driverObj = driver({
                showProgress: true,
                steps: [{
                        element: '.login',
                        popover: {
                            title: 'Guide Untuk Accesor',
                            description: 'Import database yang ada di luar folder project ini.'
                        }
                    },
                    {
                        element: '.login',
                        popover: {
                            title: 'Role',
                            description: 'Username Mengacu pada table user Untuk role admin dapat mengakses semua fitur.'
                        }
                    },
                    {
                        element: '.login',
                        popover: {
                            title: 'Role',
                            description: 'Role mahasiswa hanya dapat mengajukan janji temu.'
                        }
                    },
                ]
            });
            driverObj.drive();

        });
    </script>
</body>

</html>
