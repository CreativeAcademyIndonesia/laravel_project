<label class="badge badge-outline-warning cursor-pointer" for="modal-edit-category-{{ $u->id }}">Edit</label>

<form action="{{ route('dashboard.delete.category') }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <input type="text" name="id" value="{{ $u->id }}" id="" class="hidden">
    <button type="button" onclick="onDelete(this)" class="badge badge-outline-error" onclick="">Delete</button>
</form>
<input class="modal-state" id="modal-edit-category-{{ $u->id }}" type="checkbox" />
<div class="modal">
    <form action="{{ route('dashboard.update.category') }}" method="POST">
        @csrf
        @method('PUT')
        <label class="modal-overlay" for="modal-edit-category-{{ $u->id }}"></label>
        <div class="modal-content flex flex-col gap-5 w-[600px]">
            <label for="modal-edit-category-{{ $u->id }}"
                class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
            <h2 class="text-xl">Edit Category</h2>
            <div class="whitespace-normal p-0">
                <div class="mx-auto flex w-full flex-col gap-3 min-w-full">
                    <div class="form-group">
                        <input type="text" name="id" class="hidden" value="{{ $u->id }}">
                        <div class="form-field">
                            <label class="form-label">Category</label>
                            <input placeholder="category" type="text" name="category" class="input max-w-full"
                                value="{{ $u->category }}" />
                        </div>
                        <div class="flex gap-2">
                            <div class="flex gap-2 items-center">
                                <input type="radio" id="active{{ $u->id }}" class="radio-primary radio"
                                    value="Active" name="status" {{ $u->status == 'Active' ? 'checked' : '' }} />
                                <label for="active{{ $u->id }}" class="text-slate-500 text-sm">Active</label>
                            </div>
                            <div class="flex gap-2 items-center">
                                <input type="radio" id="nonactive{{ $u->id }}" class="radio-primary radio"
                                    value="Nonactive" name="status"
                                    {{ $u->status == 'Nonactive' ? 'checked' : '' }} />
                                <label for="nonactive{{ $u->id }}"
                                    class="text-slate-500 text-sm">nonactive</label>
                            </div>
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
