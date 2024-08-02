<label class="badge badge-outline-warning cursor-pointer" for="modal-edit-appointment-{{ $u->id }}">Edit</label>

<form action="{{ route('dashboard.delete.appointment') }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <input type="text" name="id" value="{{ $u->id }}" id="" class="hidden">
    <button type="button" onclick="onDelete(this)" class="badge badge-outline-error" onclick="">Delete</button>
</form>
<input class="modal-state" id="modal-edit-appointment-{{ $u->id }}" type="checkbox" />
<div class="modal">
    <form action="{{ route('dashboard.update.appointment') }}" method="POST">
        @csrf
        @method('PUT')
        <label class="modal-overlay" for="modal-edit-appointment-{{ $u->id }}"></label>
        <div class="modal-content flex flex-col gap-5 w-[600px]">
            <label for="modal-edit-appointment-{{ $u->id }}"
                class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
            <h2 class="text-xl">Edit appointment</h2>
            <div class="whitespace-normal p-0">
                <div class="mx-auto flex w-full flex-col gap-3 min-w-full">
                    <div class="form-group">
                        <input type="text" name="id" class="hidden" value="{{ $u->id }}">
                        <div class="form-field">
                            <label class="form-label">mahasiswa</label>
                            <select class="select min-w-full" name="mahasiswa">
                                @foreach ($mahasiswa as $m)
                                    <option value="{{ $m->nama }}"
                                        {{ $m->nama == $u->mahasiswa ? 'selected' : '' }}>{{ $m->nama }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="form-field">
                        <label class="form-label">dosen</label>
                        <select class="select min-w-full" name="dosen">
                            @foreach ($dosen as $m)
                                <option value="{{ $m->nama }}" {{ $m->nama == $u->dosen ? 'selected' : '' }}>
                                    {{ $m->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-field">
                        <label class="form-label">tanggal</label>
                        <input placeholder="tanggal" type="text" name="tanggal" class="input max-w-full"
                            value="{{ $u->tanggal }}" />
                    </div>
                </div>
            </div>
            <div class="flex gap-3">
                <button class="btn btn-warning btn-md w-full">Save</button>
            </div>
        </div>
    </form>
</div>
