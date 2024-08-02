<div>
    <label for="modal-category-user" transparent-style-btn=""
        class="inline-block w-auto px-4 py-2.5 mb-2 font-bold leading-normal text-center text-white capitalize align-middle transition-all bg-blue-500 border border-transparent border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-500 to-violet-500 hover:border-blue-500"
        data-class="bg-transparent" active-style="">Tambah Kategori</label>
    <input class="modal-state" id="modal-category-user" type="checkbox" />
    <div class="modal">
        <label class="modal-overlay" for="modal-category-user"></label>
        <form action="{{ route('dashboard.add.category') }}" method="POST">
            @csrf
            <div class="modal-content flex flex-col gap-5 w-[600px]">
                <label for="modal-category-user"
                    class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
                <h2 class="text-xl">Tambah Kategori</h2>
                <div class="whitespace-normal p-0">
                    <div class="mx-auto flex w-full flex-col gap-3 min-w-full">
                        <div class="form-group">
                            <div class="form-field">
                                <label class="form-label">Category</label>
                                <input placeholder="Category" type="text" name="category" class="input max-w-full" />
                            </div>
                            <div class="flex gap-2">
                                <div class="flex gap-2 items-center">
                                    <input type="radio" id="active" class="radio-primary radio" value="Active"
                                        name="status" checked />
                                    <label for="active" class="text-slate-500 text-sm">Active</label>
                                </div>
                                <div class="flex gap-2 items-center">
                                    <input type="radio" id="nonactive" class="radio-primary radio" value="Nonactive"
                                        name="status" checked />
                                    <label for="nonactive" class="text-slate-500 text-sm">Nonactive</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-3">
                    <button transparent-style-btn=""
                        class="inline-block w-full px-4 py-2.5 mb-2 font-bold leading-normal text-center text-white capitalize align-middle transition-all bg-blue-500 border border-transparent border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-500 to-violet-500 hover:border-blue-500"
                        data-class="bg-transparent" active-style="" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
