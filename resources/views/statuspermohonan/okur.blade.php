<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Completed Status Permohonan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama Pemohon</th>
                                    <th>Nama Jenazah</th>
                                    <th>Status</th>
                                    <th>Mobil</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($completedStatusPermohonans as $item)
                                    <tr>
                                        <td>{{ $item->permohonan->nik }}</td>
                                        <td>{{ $item->permohonan->nama_pemohon }}</td>
                                        <td>{{ $item->permohonan->nama_jenazah }}</td>
                                        <td>{{ ucfirst($item->status) }}</td>
                                        <td>{{ $item->mobil ? $item->mobil->plat . ' - ' . $item->mobil->brand : 'N/A' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
