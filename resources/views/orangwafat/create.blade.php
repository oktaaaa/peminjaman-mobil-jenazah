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
                            <h4 class="card-title">Tambah Data Orang Wafat</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis
                            mollis, diam nibh finibus leo</p>
                        <form action="{{route('orangwafat.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="nik"> NIK Jenazah</label>
                                <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK"
                                    value="{{old('nik')}}" onkeypress="return validasiAngka(event, 'nik-warning')">
                                <small id="nik-warning" class="text-danger" style="display: none;">Hanya angka yang
                                    diperbolehkan.</small>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="nama_jenazah">Nama Jenazah</label>
                                <input type="text" class="form-control" name="nama_jenazah" placeholder="Masukkan Nama"
                                    value="{{old('nama_jenazah')}}">
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select name="jk" id="gender" class="form-control" required>
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="alamat_jenazah">Alamat Jenazah</label>
                                <input type="text" class="form-control" name="alamat_jenazah"
                                    placeholder="Masukkan alamat" value="{{old('alamat_jenazah')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="alamat">Alamat Penjemputan</label>
                                <input type="text" class="form-control" name="alamat_penjemputan"
                                    placeholder="Masukkan alamat" value="{{old('alamat_penjemputan')}}">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="tuj_makam">Tujuan Pemakaman</label>
                                <input type="text" class="form-control" name="tuj_makam" placeholder="Masukkan tujuan"
                                    value="{{old('tuj_makam')}}">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="tgl_wafat">Tanggal Wafat</label>
                                <input type="date" class="form-control" name="tgl_wafat"
                                    placeholder="Masukkan Tanggal Wafat" value="{{old('tgl_wafat')}}">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                        </form>
                    </div>
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
</x-app-layout>
