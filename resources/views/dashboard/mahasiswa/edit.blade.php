<label class="badge badge-outline-warning cursor-pointer" for="modal-edit-{{ $u->id }}">Edit</label>

<form action="{{ route('dashboard.delete.mahasiswa') }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <input type="text" name="id" value="{{ $u->id }}" id="" class="hidden">
    <button type="button" onclick="onDelete(this)" class="badge badge-outline-error" onclick="">Delete</button>
</form>
<input class="modal-state" id="modal-edit-{{ $u->id }}" type="checkbox" />
<div class="modal">
    <form action="{{ route('dashboard.update.mahasiswa') }}" method="POST">
        @csrf
        @method('PUT')
        <label class="modal-overlay" for="modal-edit-{{ $u->id }}"></label>
        <div class="modal-content flex flex-col gap-5 w-[600px]">
            <label for="modal-edit-{{ $u->id }}"
                class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
            <h2 class="text-xl">Edit Mahasiswa</h2>
            <div class="whitespace-normal p-0">
                <div class="mx-auto flex w-full flex-col gap-3 min-w-full">
                    <div class="form-group">
                        <input type="text" name="id" class="hidden" value="{{ $u->id }}">
                        <div class="form-field">
                            <label class="form-label">nik</label>
                            <input placeholder="nik" type="text" name="nik" class="input max-w-full"
                                value="{{ $u->nik }}" />
                        </div>
                        <div class="form-field">
                            <label class="form-label">nama</label>
                            <input placeholder="nama" type="text" name="nama" class="input max-w-full"
                                value="{{ $u->nama }}" />
                        </div>
                        <div class="form-field">
                            <label class="form-label">email</label>
                            <input placeholder="email" type="email" name="email" class="input max-w-full"
                                value="{{ $u->email }}" />
                        </div>
                        <div class="form-field">
                            <label class="form-label">prodi</label>
                            <input placeholder="prodi" type="text" name="prodi" class="input max-w-full"
                                value="{{ $u->prodi }}" />
                        </div>
                        <div class="form-field">
                            <label class="form-label">jenjang</label>
                            <input placeholder="jenjang" type="text" name="jenjang" class="input max-w-full"
                                value="{{ $u->jenjang }}" />
                        </div>
                        <div class="form-field">
                            <label class="form-label">semester</label>
                            <input placeholder="semester" type="text" name="semester" class="input max-w-full"
                                value="{{ $u->semester }}" />
                        </div>
                        <div class="form-field">
                            <label class="form-label">gender</label>
                            <input placeholder="gender" type="text" name="gender" class="input max-w-full"
                                value="{{ $u->gender }}" />
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
