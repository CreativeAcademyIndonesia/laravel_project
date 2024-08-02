<div>
    <label for="modal-product" transparent-style-btn=""
        class="inline-block w-auto px-4 py-2.5 mb-2 font-bold leading-normal text-center text-white capitalize align-middle transition-all bg-blue-500 border border-transparent border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-500 to-violet-500 hover:border-blue-500"
        data-class="bg-transparent" active-style="">Tambah Product</label>
    <input class="modal-state" id="modal-product" type="checkbox" />
    <div class="modal">
        <label class="modal-overlay" for="modal-product"></label>
        <form action="{{ route('dashboard.add.product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content flex flex-col gap-5 w-[600px]">
                <label for="modal-product" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
                <h2 class="text-xl">Tambah Product</h2>
                <div class="whitespace-normal p-0">
                    <div class="mx-auto flex w-full flex-col gap-3 min-w-full">
                        <div class="form-group">
                            <div class="form-field">
                                <label class="form-label">category</label>
                                <select class="select" name="category" class="w-full"
                                    style="max-width : 100% !important">
                                    @foreach ($category as $item)
                                        <option value="{{ $item->category }}">{{ $item->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label class="form-label">type kamar</label>
                                <input placeholder="type kamar" type="text" name="type_kamar"
                                    class="input max-w-full" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <label class="form-label">ac</label>
                                <input placeholder="ac" type="text" name="ac" class="input max-w-full" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <label class="form-label">kamar mandi</label>
                                <input placeholder="kamar mandi" type="text" name="kamar_mandi"
                                    class="input max-w-full" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <label class="form-label">kamar tidur</label>
                                <input placeholder="kamar tidur" type="text" name="kamar_tidur"
                                    class="input max-w-full" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <label class="form-label">furniture</label>
                                <input placeholder="furniture" type="text" name="furniture"
                                    class="input max-w-full" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <label class="form-label">harga</label>
                                <input placeholder="harga" type="text" name="harga" class="input max-w-full" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <label class="form-label">stock</label>
                                <input placeholder="stock" type="text" name="stock" class="input max-w-full" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <label class="form-label">foto</label>
                                <input placeholder="foto" type="file" name="foto"
                                    class="input-file input-file-secondary max-w-full" />
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
