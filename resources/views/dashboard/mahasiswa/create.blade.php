<div>
    <label for="modal-add-mahasiswa" transparent-style-btn=""
        class="inline-block w-auto px-4 py-2.5 mb-2 font-bold leading-normal text-center text-white capitalize align-middle transition-all bg-blue-500 border border-transparent border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-500 to-violet-500 hover:border-blue-500"
        data-class="bg-transparent" active-style="">Tambah Mahasiswa</label>
    <input class="modal-state" id="modal-add-mahasiswa" type="checkbox" />
    <div class="modal">
        <label class="modal-overlay" for="modal-add-mahasiswa"></label>
        <form action="{{ route('dashboard.add.mahasiswa') }}" method="POST">
            @csrf
            <div class="modal-content flex flex-col gap-5 w-[600px]">
                <label for="modal-add-mahasiswa"
                    class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
                <h2 class="text-xl">Tambah Mahasiswa</h2>
                <div class="whitespace-normal p-0">
                    <div class="mx-auto flex w-full flex-col gap-3 min-w-full">
                        <div class="form-group">
                            <div class="form-field">
                                <label class="form-label">nik</label>
                                <input placeholder="nik" type="text" name="nik" class="input max-w-full" />
                            </div>
                            <div class="form-field">
                                <label class="form-label">nama</label>
                                <input placeholder="nama" type="text" name="nama" class="input max-w-full" />
                            </div>
                            <div class="form-field">
                                <label class="form-label">Email</label>
                                <input placeholder="Email" type="email" name="email" class="input max-w-full" />
                            </div>
                            <div class="form-field">
                                <label class="form-label">prodi</label>
                                <input placeholder="prodi" type="text" name="prodi" class="input max-w-full" />
                            </div>
                            <div class="form-field">
                                <label class="form-label">jenjang</label>
                                <input placeholder="jenjang" type="text" name="jenjang" class="input max-w-full" />
                            </div>
                            <div class="form-field">
                                <label class="form-label">semester</label>
                                <input placeholder="semester" type="text" name="semester" class="input max-w-full" />
                            </div>
                            <div class="form-field">
                                <label class="form-label">gender</label>
                                <input placeholder="gender" type="text" name="gender" class="input max-w-full" />
                            </div>
                            <div class="form-field">
                                <label class="form-label">no_hp</label>
                                <input placeholder="no_hp" type="text" name="no_hp" class="input max-w-full" />
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
