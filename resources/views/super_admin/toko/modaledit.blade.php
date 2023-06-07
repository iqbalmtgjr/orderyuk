<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Resto/Cafe</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/resto/update') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" id="id" name="id" value="">
                                <input type="hidden" id="url_getdata" name="url_getdata"
                                    value="{{ url('/resto/getdata/') }}">
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
                                        <option value="Aktif" {{ old('status') ? 'selected' : '' }}>Aktif</option>
                                        <option value="Tidak Aktif" {{ old('status') ? 'selected' : '' }}>Tidak Aktif
                                        </option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger ml-3 mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Alamat Resto/Cafe</label>
                                    <textarea class="form-control" name="alamat_resto" id="alamat_resto" cols="30" rows="5"
                                        placeholder="Alamat ...">{{ old('alamat_resto') }}</textarea>
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
                $('#nama_resto').val(response.nama_resto);
                $('#alamat_resto').val(response.alamat);
                $('#status').val(response.status);
            }
        });
    }
</script>
