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
                            <h4 class="card-title">Formulir Permohonan</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                        <form action="{{route('permohonan.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="nama_pemohon"> Nama Pemohon </label>
                                <input type="text" class="form-control" name="nama_pemohon" placeholder="Masukkan NIK" value="{{old('nama_pemohon')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="nama_jenazah">Nama Jenazah</label>
                                <input type="text" class="form-control" name="nama_jenazah" placeholder="Masukkan Nama" value="{{old('nama_jenazah')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="alamat_penjemputan">Alamat Penjemputan</label>
                                <input type="text" class="form-control" name="alamat_penjemputan" placeholder="Masukkan alamat" value="{{old('alamat_penjemputan')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="alamat_tpu">Alamat TPU</label>
                                <input type="text" class="form-control" name="alamat_tpu" placeholder="Masukkan alamat" value="{{old('alamat_tpu')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tanggal_penjemputan">Tanggal Penjemputan</label>
                                <input type="date" class="form-control" name="tanggal_penjemputan" placeholder="Masukkan Tanggal Lahir" value="{{old('tanggal_penjemputan')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="jam_penjemputan">Jam Penjemputan</label>
                                <input type="time" class="form-control" name="jam_penjemputan" placeholder="Masukkan Tanggal Lahir" value="{{old('jam_penjemputan')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="no_hp">No Hp</label>
                                <input type="text" class="form-control" name="no_hp" placeholder="Masukkan No Hp" value="{{old('no_hp')}}">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="catatan">Catatan</label>
                                <input type="text" class="form-control" name="catatan" placeholder="Masukkan No Hp" value="{{old('catatan')}}">
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
