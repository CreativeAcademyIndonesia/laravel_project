<div class="navbar shadow-none border-b border-slate-200 dark:border-gray-800">
    <div class=" container mx-auto flex justify-between items-center">
        <div class="navbar-start">
            <a href="#" class="navbar-item">Agus Project</a>
        </div>
        <div class="navbar-end">
            <a href="{{ route('dashboard.users.index') }}" class="navbar-item">POS</a>
            <div class="dropdown nav-item justify-center mr-2">
                <label class="flex cursor-pointer" tabindex="0" aria-label="Toggle Dark Mode">
                    <ion-icon name="sunny-outline"></ion-icon>
                </label>
                <div class="dropdown-menu mt-2 w-32 rounded-lg border border-border">
                    <span tabindex="-1" class="dropdown-active dropdown-item flex-row gap-2 text-sm items-center">
                        <ion-icon name="sunny-outline"></ion-icon>
                        <span>Light</span>
                    </span>
                    <span tabindex="-1" class="dropdown-item flex-row gap-2 text-sm items-center">
                        <ion-icon name="moon-outline"></ion-icon>
                        <span>Dark</span>
                    </span>
                    <span tabindex="-1" class="dropdown-item flex-row gap-2 text-sm items-center">
                        <ion-icon name="desktop-outline"></ion-icon>
                        <span>System</span>
                    </span>
                </div>
            </div>
            <div class="flex gap-2">
                <button class="btn btn-solid-warning">Register</button>
                <button class="btn btn-warning">Login</button>
            </div>
        </div>
    </div>
</div>
