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
                            <h4 class="card-title">Ubah data supir</h4>
                        </div>
                    </div>
                    <form action="{{route('supir.update', $supirs -> id)}}" method="POST" class="forms-sample"
                        enctype="multipart/form-data">
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis
                                mollis, diam nibh finibus leo</p>
                            <form action="{{route('supir.store')}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="form-label" for="nik"> NIK </label>
                                    <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK"
                                        value="{{$supirs->nik}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="nama">Nama Supir</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama"
                                        value="{{$supirs->nama}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat"
                                        value="{{$supirs->alamat}}">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir"
                                        placeholder="Masukkan Tanggal Lahir" value="{{$supirs->tgl_lahir}}">
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select name="jk" id="gender" class="form-control" required>
                                        <option value="">--Pilih Jenis Kelamin--</option>
                                        <option value="Laki-Laki" {{ $supirs->jk=='Laki-Laki' ? 'selected' : '' }}>
                                            Laki-Lak</option>
                                        <option value="Perempuan" {{ $supirs->jk=='Perempuan' ? 'selected' : ''
                                            }}>Perempuan</option>


                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="no_hp">No Hp</label>
                                    <input type="text" class="form-control" name="no_hp" placeholder="Masukkan No Hp"
                                        value="{{$supirs->no_hp}}">
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
