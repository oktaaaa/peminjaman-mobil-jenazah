<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Data Permohonan</h4>
                </div>
            </div>
            <!-- Date Filter Form -->

            <div class="card-body">
                <form method="GET" action="{{ route('permohonan.report') }}" class="no-print">
                    <div class="form-group">
                        <p><strong>Date:</strong> {{ $selectedDate }}</p>
                        <input type="date" name="date" id="date" class="form-control" value="{{ $selectedDate }}">
                    </div>
                    
                </form>
                <div class="table-responsive my-3">
                    <table id="datatable" class="table table-striped" data-toggle="data-table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>NIK</th>
                                <th>Nama Pemohon</th>
                                <th>Nama Jenazah</th>
                                <th>Alamat Penjemputan</th>
                                <th>Alamat TPU</th>
                                <th>Tgl Penjemputan</th>
                                <th>Jam Penjemputan</th>
                                <th>No HP</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permohonans as $item)
                            <tr>
                                <td>{{ $item['created_at'] }}</td>
                                <td>{{ $item['nik'] }}</td>
                                <td>{{ $item['nama_pemohon'] }}</td>
                                <td>{{ $item['nama_jenazah'] }}</td>
                                <td>{{ $item['alamat_penjemputan'] }}</td>
                                <td>{{ $item['alamat_tpu'] }}</td>
                                <td>{{ $item['tanggal_penjemputan'] }}</td>
                                <td>{{ $item['jam_penjemputan'] }}</td>
                                <td>{{ $item['no_hp'] }}</td>
                                <td>{{ $item['catatan'] }}</td>



                            </tr>
                            @endforeach
                        </tbody>
                        {{-- <tfoot>
                            <tr>
                                <th>Kode mobil</th>
                                <th>Plat Mobil</th>
                                <th>Brand</th>
                                <th>Tahun</th>
                                <th>Aksi</th>


                            </tr>
                        </tfoot> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    // Optional: Automatically submit the form when the date changes
        document.getElementById('date').addEventListener('change', function() {
            this.form.submit();
        });
</script> --}}
