<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pengguna</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/user/update') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 ms-auto">
                                <input type="hidden" id="id" name="id" value="">
                                <input type="hidden" id="url_getdata" name="url_getdata"
                                    value="{{ url('/user/getdata/') }}">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        value="{{ old('name') }}" placeholder="Nama Lengkap ...">
                                    @error('name')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Nama Panggilan</label>
                                    <input type="text" class="form-control" name="nickname" id="nickname"
                                        value="{{ old('nickname') }}" placeholder="Nama Panggilan ...">
                                    @error('nickname')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">E-mail</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        value="{{ old('email') }}" placeholder="E-mail ...">
                                    @error('email')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Role</label>
                                    <select class="form-control" name="role" id="rolee">
                                        <option value="">-- Pilih Role --</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                    @error('role')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">No Whatsapp</label>
                                    <input type="number" class="form-control" name="no_hp" id="no_hp"
                                        value="{{ old('no_hp') }}" placeholder="No Whatsapp ...">
                                    @error('no_hp')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"
                                        placeholder="Alamat Pemilik ...">{{ old('alamat') }}</textarea>
                                    @error('alamat')
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
<script>
    function getdata(id) {
        console.log(id)
        var url = $('#url_getdata').val() + '/' + id
        console.log(url);

        $.ajax({
            url: url,
            cache: false,
            success: function(response) {
                console.log(response);

                $('#id').val(response.id);
                $('#name').val(response.name);
                $('#email').val(response.email);
                $('#alamat').val(response.alamat);
                $('#nickname').val(response.nickname);
                $('#no_hp').val(response.no_hp);
                $('#rolee').val(response.role);
            }
        });
    }
</script>
