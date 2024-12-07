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
                            <h4 class="card-title">Tambah data supir</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis
                            mollis, diam nibh finibus leo</p>
                        <form action="{{route('supir.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="nama_pemohon"> NIK </label>
                                <input type="text" class="form-control" name="nama_pemohon" placeholder="Masukkan NIK"
                                    value="{{old('nama_pemohon')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="nama_jenazah">Nama Supir</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama"
                                    value="{{old('nama_jenazah')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="alamat_penjemputan">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat"
                                    value="{{old('alamat_penjemputan')}}">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir"
                                    placeholder="Masukkan Tanggal Lahir" value="{{old('tanggal_penjemputan')}}">
                            </div>
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin</label>
                                <select name="jk" id="gender" class="form-control" required>
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                  
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="no_hp">No Hp</label>
                                <input type="text" class="form-control" name="no_hp" placeholder="Masukkan No Hp"
                                    value="{{old('no_hp')}}">
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
