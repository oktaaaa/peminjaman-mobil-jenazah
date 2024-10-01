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
                            <h4 class="card-title">Supir</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                        <form action="{{route('supir.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="nik"> NIK </label>
                                <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK" value="{{old('nik')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="{{old('nama')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat" value="{{old('alamat')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tgl_lahir">Tanggal lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" value="{{old('tgl_lahir')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="no_hp">No Hp</label>
                                <input type="text" class="form-control" name="no_hp" placeholder="Masukkan No Hp" value="{{old('no_hp')}}">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="jk">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                                    <label class="form-check-label" for="jk">
                                        Perempuan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" value="Laki-Laki">
                                    <label class="form-check-label" for="jk">
                                        Laki-laki
                                    </label>
                                </div>
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