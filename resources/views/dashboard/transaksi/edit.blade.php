<label class="badge badge-outline-warning cursor-pointer" for="modal-edit-product-{{ $u->id }}">Edit</label>

<form action="{{ route('dashboard.delete.product') }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <input type="text" name="id" value="{{ $u->id }}" id="" class="hidden">
    <button type="button" onclick="onDelete(this)" class="badge badge-outline-error" onclick="">Delete</button>
</form>
<input class="modal-state" id="modal-edit-product-{{ $u->id }}" type="checkbox" />
<div class="modal">
    <form action="{{ route('dashboard.update.product') }}" method="POST">
        @csrf
        @method('PUT')
        <label class="modal-overlay" for="modal-edit-product-{{ $u->id }}"></label>
        <div class="modal-content flex flex-col gap-5 w-[600px]">
            <label for="modal-edit-product-{{ $u->id }}"
                class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
            <h2 class="text-xl">Edit Product</h2>
            <div class="whitespace-normal p-0">
                <input type="text" name="id" class="hidden" value="{{ $u->id }}">
                <div class="mx-auto flex w-full flex-col gap-3 min-w-full">
                    <div class="form-group">
                        <div class="form-field">
                            <label class="form-label">category</label>
                            <select class="select" name="category" class="w-full" style="max-width : 100% !important">
                                @foreach ($category as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $u->category == $item->id ? 'selected' : '' }}>
                                        {{ $item->category }}</option>
                                @endforeach
                            </select>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label class="form-label">type kamar</label>
                            <input placeholder="type kamar" type="text" name="type_kamar" class="input max-w-full"
                                value="{{ $u->type_kamar }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label class="form-label">ac</label>
                            <input placeholder="ac" type="text" name="ac" class="input max-w-full"
                                value="{{ $u->ac }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label class="form-label">kamar mandi</label>
                            <input placeholder="kamar mandi" type="text" name="kamar_mandi" class="input max-w-full"
                                value="{{ $u->kamar_mandi }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label class="form-label">kamar tidur</label>
                            <input placeholder="kamar tidur" type="text" name="kamar_tidur" class="input max-w-full"
                                value="{{ $u->kamar_tidur }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label class="form-label">furniture</label>
                            <input placeholder="furniture" type="text" name="furniture" class="input max-w-full"
                                value="{{ $u->furniture }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label class="form-label">harga</label>
                            <input placeholder="harga" type="text" name="harga" class="input max-w-full"
                                value="{{ $u->harga }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label class="form-label">stock</label>
                            <input placeholder="stock" type="text" name="stock" class="input max-w-full"
                                value="{{ $u->stock }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label class="form-label">foto</label>
                            <input placeholder="foto" type="text" name="foto"
                                class="input-file input-file-secondary max-w-full" value="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex gap-3">
                <button class="btn btn-warning btn-md w-full">Save</button>
            </div>
        </div>
    </form>
</div>
