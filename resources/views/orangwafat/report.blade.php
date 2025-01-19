<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Data Orang Wafat</h4>
                    </div>
                </div>


                <div class="card-body">
                    <form method="GET" action="{{ route('orangwafat.report') }}" class="no-print">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="start_date">Start Date</label>
                                <input type="date" name="start_date" id="start_date" class="form-control"
                                    value="{{ $startDate }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="end_date">End Date</label>
                                <input type="date" name="end_date" id="end_date" class="form-control"
                                    value="{{ $endDate }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Filter</button>
                        @if ($startDate && $endDate)
                        <a href="{{ route('orangwafat.print', ['start_date' => $startDate, 'end_date' => $endDate]) }}"
                            class="btn btn-secondary">Print</a>
                        @endif
                    </form>
                    <div class="table-responsive my-3">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Tanggal Wafat</th>
                                    <th>Nama Jenazah</th>
                                    <th>Jenis \n Kelamin</th>
                                    <th>Alamat Jenazah</th>
                                    <th>Alamat Penjemputan</th>
                                    <th>Tujuan Pemakaman</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orangwafats as $item)
                                <tr>
                                    <td>{{ $item['nik'] }}</td>
                                    <td>{{ $item['tgl_wafat']}}</td>
                                    <td>{{ $item['nama_jenazah'] }}</td>
                                    <td>{{ $item['jk'] }}</td>
                                    <td>{{ $item['alamat_jenazah'] }}</td>
                                    <td>{{ $item['alamat_penjemputan'] }}</td>
                                    <td>{{ $item['tuj_makam'] }}</td>



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
    <!--/ Bordered Table -->

</x-app-layout>
