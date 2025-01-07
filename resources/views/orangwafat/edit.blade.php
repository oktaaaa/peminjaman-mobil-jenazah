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
                            <h4 class="card-title">Ubah Data Orang Wafat</h4>
                        </div>
                    </div>

                    <form action="{{route('orangwafat.update', $orangwafats -> id)}}" method="POST" class="forms-sample"
                        enctype="multipart/form-data">
                        <div class="card-body">

                            <form action="{{route('orangwafat.store')}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="form-label" for="nik"> NIK Jenazah</label>
                                    <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK"
                                        value="{{$orangwafats->nik}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="nama_jenazah">Nama Jenazah</label>
                                    <input type="text" class="form-control" name="nama_jenazah"
                                        placeholder="Masukkan Nama" value="{{$orangwafats->nama_jenazah}}">
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select name="jk" id="gender" class="form-control" required>
                                        <option value="">--Pilih Jenis Kelamin--</option>
                                        <option value="Laki-Laki" {{ $orangwafats->jk=='Laki-Laki' ? 'selected' : ''
                                            }}>Laki-Laki</option>
                                        <option value="Perempuan" {{ $orangwafats->jk=='Laki-Laki' ? 'selected' : ''
                                            }}>Perempuan</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="alamat_jenazah">Alamat Jenazah</label>
                                    <input type="text" class="form-control" name="alamat_jenazah"
                                        placeholder="Masukkan alamat" value="{{$orangwafats->alamat_jenazah}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="alamat">Alamat Penjemputan</label>
                                    <input type="text" class="form-control" name="alamat_penjemputan"
                                        placeholder="Masukkan alamat" value="{{$orangwafats->alamat_penjemputan}}">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="tuj_makam">Tujuan Pemakaman</label>
                                    <input type="text" class="form-control" name="tuj_makam"
                                        placeholder="Masukkan tujuan" value="{{$orangwafats->tuj_makam}}">
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
