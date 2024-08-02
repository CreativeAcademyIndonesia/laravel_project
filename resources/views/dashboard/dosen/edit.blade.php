<label class="badge badge-outline-warning cursor-pointer" for="modal-edit-dosen-{{ $u->id }}">Edit</label>

<form action="{{ route('dashboard.delete.dosen') }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <input type="text" name="id" value="{{ $u->id }}" id="" class="hidden">
    <button type="button" onclick="onDelete(this)" class="badge badge-outline-error" onclick="">Delete</button>
</form>
<input class="modal-state" id="modal-edit-dosen-{{ $u->id }}" type="checkbox" />
<div class="modal">
    <form action="{{ route('dashboard.update.dosen') }}" method="POST">
        @csrf
        @method('PUT')
        <label class="modal-overlay" for="modal-edit-dosen-{{ $u->id }}"></label>
        <div class="modal-content flex flex-col gap-5 w-[600px]">
            <label for="modal-edit-dosen-{{ $u->id }}"
                class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
            <h2 class="text-xl">Edit dosen</h2>
            <div class="whitespace-normal p-0">
                <div class="mx-auto flex w-full flex-col gap-3 min-w-full">
                    <div class="form-group">
                        <input type="text" name="id" class="hidden" value="{{ $u->id }}">
                        <div class="form-field">
                            <label class="form-label">nip</label>
                            <input placeholder="nip" type="text" name="nip" class="input max-w-full"
                                value="{{ $u->nip }}" />
                        </div>
                        <div class="form-field">
                            <label class="form-label">nama</label>
                            <input placeholder="nama" type="text" name="nama" class="input max-w-full"
                                value="{{ $u->nama }}" />
                        </div>
                        <div class="form-field">
                            <label class="form-label">no_hp</label>
                            <input placeholder="no_hp" type="text" name="no_hp" class="input max-w-full"
                                value="{{ $u->no_hp }}" />
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
