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
                            <h4 class="card-title">Input</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                        <form action="{{route('mobil.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="kode"> Kode </label>
                                <input type="text" class="form-control" name="kode" placeholder="Masukkan Kode" value="{{old('kode')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="plat">Plat Mobil</label>
                                <input type="text" class="form-control" name="plat" placeholder="Masukkan plat mobil" value="{{old('plat')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="brand">Brand Mobil</label>
                                <input type="text" class="form-control" name="brand" placeholder="Masukkan Brand Mobil" value="{{old('brand')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tahun_rilis">Tahun Rilis</label>
                                <input type="text" class="form-control" name="tahun_rilis" placeholder="Masukkan Tahun Rilis Mobil" value="{{old('tahun_rilis')}}">
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
