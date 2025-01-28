<x-app-layout :assets="$assets ?? []">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">

                <div class="card">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Buat Permohonan</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis
                            mollis, diam nibh finibus leo</p>
                        <form action="{{route('permohonan.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="nik"> NIK Pemohon</label>
                                <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK"
                                    value="{{old('nik')}}" onkeypress="return validasiAngka(event, 'nik-warning')">
                                <small id="nik-warning" class="text-danger" style="display: none;">Hanya angka yang
                                    diperbolehkan.</small>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="nama_pemohon">Nama Pemohon</label>
                                <input type="text" class="form-control" name="nama_pemohon" placeholder="Masukkan Nama"
                                    value="{{old('nama_pemohon')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="nama_jenazah">Nama Jenazah</label>
                                <input type="text" class="form-control" name="nama_jenazah" placeholder="Masukkan Nama"
                                    value="{{old('nama_jenazah')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="alamat">Alamat Penjemputan</label>
                                <input type="text" class="form-control" name="alamat_penjemputan"
                                    placeholder="Masukkan alamat" value="{{old('alamat_penjemputan')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="alamat_tpu">Alamat TPU</label>
                                <input type="text" class="form-control" name="alamat_tpu" placeholder="Masukkan alamat"
                                    value="{{old('alamat_tpu')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tanggal_penjemputan">Tanggal Penjemputan</label>
                                <input type="date" class="form-control" name="tanggal_penjemputan"
                                    placeholder="Masukkan Tanggal Lahir" value="{{old('tanggal_penjemputan')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="jam_penjemputan">Waktu Penjemputan</label>
                                <input type="time" class="form-control" name="jam_penjemputan"
                                    placeholder="Masukkan Waktu Penjemputan" value="{{ old('jam_penjemputan') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="no_hp">No Hp</label>
                                <input type="number" class="form-control" name="no_hp" placeholder="Masukkan No Hp"
                                    value="{{old('no_hp')}}" onkeypress="return validasiAngka(event, 'nohp-warning')">
                                <small id="nohp-warning" class="text-danger" style="display: none;">Hanya angka yang
                                    diperbolehkan.</small>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="catatan">Catatan</label>
                                <textarea class="form-control" name="catatan" id="notes" rows="4"
                                    placeholder="Masukkan catatan">{{ old('catatan') }}</textarea>
                            </div>



                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
        <script>
            function validasiAngka(event, warningId) {
            const warning = document.getElementById(warningId);
            const key = event.key;


            if (!/^[0-9]$/.test(key)) {
                warning.style.display = 'block';
                setTimeout(() => warning.style.display = 'none', 2000);
                return false;
            }

            return true;
        }
        </script>
    </div>
</x-app-layout>
