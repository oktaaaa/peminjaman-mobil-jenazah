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
                            <h4 class="card-title">Status Permohonan</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis
                            mollis, diam nibh finibus leo</p>
                        <form action="{{route('supir.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="nik"> NIK Pemohon</label>
                                <select name="supir_id" class="form-control">
                                    <option value="">Pilih NIK dan Nama</option>
                                    @foreach ($permohonans as $permohonan)
                                    <option value="{{ $permohonan->id }}">{{ $permohonan->nik }} - {{
                                        $permohonan->nama_pemohon }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="supir_id">Supir</label>
                                <select name="supir_id" class="form-control">
                                    <option value="">Pilih Supir</option>
                                    @foreach ($supirs as $supir)
                                    <option value="{{ $supir->id }}">{{ $supir->nama }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="mobil_id">Mobil</label>
                                <select class="form-control" name="mobil_id" required>
                                    <option value="">-- Pilih Mobil --</option>
                                    @foreach ($mobils as $mobil)
                                    @if ($mobil->status === 'available')
                                    <option value="{{ $mobil->id }}">{{ $mobil->plat }}</option>
                                    @endif
                                    @endforeach
                                </select>
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
