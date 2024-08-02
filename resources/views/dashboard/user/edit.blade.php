<label class="badge badge-outline-warning cursor-pointer" for="modal-edit-{{ $u->id }}">Edit</label>

<form action="{{ route('dashboard.delete.user') }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <input type="text" name="id" value="{{ $u->id }}" id="" class="hidden">
    <button type="button" onclick="onDelete(this)" class="badge badge-outline-error" onclick="">Delete</button>
</form>
<input class="modal-state" id="modal-edit-{{ $u->id }}" type="checkbox" />
<div class="modal">
    <form action="{{ route('dashboard.update.user') }}" method="POST">
        @csrf
        @method('PUT')
        <label class="modal-overlay" for="modal-edit-{{ $u->id }}"></label>
        <div class="modal-content flex flex-col gap-5 w-[600px]">
            <label for="modal-edit-{{ $u->id }}"
                class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
            <h2 class="text-xl">Edit User</h2>
            <div class="whitespace-normal p-0">
                <div class="mx-auto flex w-full flex-col gap-3 min-w-full">
                    <div class="form-group">
                        <input type="text" name="id" class="hidden" value="{{ $u->id }}">
                        <div class="form-field">
                            <label class="form-label">Role</label>
                            <input placeholder="Role" type="text" name="role" class="input max-w-full"
                                value="{{ $u->role }}" />
                        </div>
                        <div class="form-field">
                            <label class="form-label">Nama</label>
                            <input placeholder="Nama" type="text" name="name" class="input max-w-full"
                                value="{{ $u->name }}" />
                        </div>
                        <div class="form-field">
                            <label class="form-label">Email</label>
                            <input placeholder="Email" type="email" name="email" class="input max-w-full"
                                value="{{ $u->email }}" />
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
