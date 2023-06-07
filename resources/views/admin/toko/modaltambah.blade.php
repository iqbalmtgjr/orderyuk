<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Resto/Cafe</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/resto/input') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ms-auto">
                                <h5>Tambah Pemilik</h5>
                                <input type="hidden" id="role" name="role" value="admin">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}" placeholder="Nama Lengkap ...">
                                    @error('name')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Nama Panggilan</label>
                                    <input type="text" class="form-control" id="nickname" name="nickname"
                                        value="{{ old('nickname') }}" placeholder="Nama Panggilan ...">
                                    @error('nickname')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}" placeholder="E-mail ...">
                                    @error('email')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">No Whatsapp</label>
                                    <input type="number" class="form-control" id="no_hp" name="no_hp"
                                        value="{{ old('no_hp') }}" placeholder="No Whatsapp ...">
                                    @error('no_hp')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Alamat Pemilik</label>
                                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"
                                        placeholder="Alamat Pemilik ..."></textarea>
                                    @error('alamat')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 ms-auto">
                                <h5>Tambah Data Resto/Cafe</h5>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama Resto/Cafe</label>
                                    <input type="text" class="form-control" id="nama_resto" name="nama_resto"
                                        value="{{ old('nama_resto') }}" placeholder="Nama Resto ...">
                                    @error('nama_resto')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="">-- Pilih Status --</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Alamat Resto/Cafe</label>
                                    <textarea class="form-control" name="alamat_resto" id="" cols="30" rows="5"
                                        placeholder="Alamat ..."></textarea>
                                    @error('alamat_resto')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
