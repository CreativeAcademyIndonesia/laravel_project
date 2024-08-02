<aside class="sidebar min-h-full justify-start">
	<section class="sidebar-title items-center p-4">
        <span class="p-4 text-xl">
            <ion-icon name="happy-outline"></ion-icon>
        </span>
		<div class="flex flex-col">
			<span>Agus</span>
			<span class="text-xs font-normal text-content2">Appartement</span>
		</div>
	</section>
	<section class="sidebar-content h-fit min-h-[20rem] overflow-visible">
		<nav class="menu rounded-md">
			<section class="menu-section px-4">
				<span class="menu-title">Main menu</span>
				<ul class="menu-items">
					<li class="menu-item">
						<ion-icon name="settings-outline"></ion-icon>
						<span>Setting</span>
					</li>

					<li class="menu-item menu-active">
						<ion-icon name="people-outline"></ion-icon>
						<span>User</span>
					</li>
					<li class="menu-item">
						<ion-icon name="bed-outline"></ion-icon>
						<span>Product</span>
					</li>
					<li>
						<input type="checkbox" id="menu-1" class="menu-toggle" />
						<label class="menu-item justify-between" for="menu-1">
							<div class="flex gap-2">
								<ion-icon name="lock-closed-outline"></ion-icon>
								<span>Account</span>
							</div>

							<span class="menu-icon">
								<ion-icon name="chevron-down-outline"></ion-icon>
							</span>
						</label>

						<div class="menu-item-collapse">
							<div class="min-h-0">
								<label class="menu-item-disabled menu-item ml-6">Accounts</label>
								<label class="menu-item ml-6">Billing</label>
								<label class="menu-item ml-6">Security</label>
								<label class="menu-item ml-6">Notifications</label>
								<label class="menu-item ml-6">Integrations</label>
							</div>
						</div>
					</li>
				</ul>
			</section>
		</nav>
	</section>
	<section class="sidebar-footer h-full justify-end bg-gray-2 pt-2">
		<div class="divider my-0"></div>
		<div class="dropdown z-50 flex h-fit w-full cursor-pointer hover:bg-gray-4">
			<label class="whites mx-2 flex h-fit w-full cursor-pointer p-0 hover:bg-gray-4" tabindex="0">
				<div class="flex flex-row gap-4 p-4">
					<div class="avatar avatar-md">
						<img src="https://i.pravatar.cc/150?img=30" alt="avatar" />
					</div>

					<div class="flex flex-col">
						<span>Agus Sugandi</span>
						<span class="text-xs font-normal text-content2">Administrator</span>
					</div>
				</div>
			</label>
			<div class="dropdown-menu dropdown-menu-right-top ml-2">
				<a class="dropdown-item text-sm">Profile</a>
				<a tabindex="-1" class="dropdown-item text-sm">Account settings</a>
				<a tabindex="-1" class="dropdown-item text-sm">Change email</a>
				<a tabindex="-1" class="dropdown-item text-sm">Subscriptions</a>
				<a tabindex="-1" class="dropdown-item text-sm">Change password</a>
				<a tabindex="-1" class="dropdown-item text-sm">Refer a friend</a>
				<a tabindex="-1" class="dropdown-item text-sm">Settings</a>
			</div>
		</div>
	</section>
</aside>