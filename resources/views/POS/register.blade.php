<!doctype html>
<html data-theme="light" style="color-scheme: light;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Register</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,600;0,9..40,700;1,9..40,400;1,9..40,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/driver.js@1.0.1/dist/driver.css" />


</head>

<body class="min-h-screen min-w-full grid grid-rows-1 bg-[#252836]">

    <div class="flex items-center justify-center">
        <div class="mx-auto flex w-full max-w-sm flex-col gap-6 register">
            <form method="POST" action="{{ route('register.create') }}" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col items-center">
                    <h1 class="text-3xl font-semibold text-white">Mendaftar</h1>
                    <p class="text-sm text-white">Membuat akun baru.</p>
                </div>
                <div class="form-group">
                    <div class="form-field">
                        <label class="form-label text-white">Nama</label>
                        <div class="form-control">
                            <input placeholder="Nama" type="text" name="name" class="input max-w-full" />
                        </div>
                    </div>
                    <div class="form-field">
                        <label class="form-label text-white">Email</label>
                        <div class="form-control">
                            <input placeholder="Email" name="email" type="text" class="input max-w-full" />
                        </div>
                    </div>
                    <div class="form-field">
                        <label class="form-label text-white">password</label>
                        <div class="form-control">
                            <input placeholder="password" type="password" name="password" class="input max-w-full" />
                        </div>
                    </div>

                    <div class="form-field pt-5">
                        <div class="form-control justify-between">
                            <button type="submit" class="btn btn-warning w-full">Mendaftar</button>
                        </div>
                    </div>

                    <div class="form-field">
                        <div class="form-control justify-center">
                            <a href="{{ route('login') }}" class="link link-underline-hover link-warning text-sm">Sudah
                                Punya akun..? login.</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
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
                    element: '.register',
                    popover: {
                        title: 'Daftar User',
                        description: 'Untuk mendaftar user, dengan role mahasiswa.'
                    }
                }, ]
            });
            driverObj.drive();

        });
    </script>
</body>

</html>
