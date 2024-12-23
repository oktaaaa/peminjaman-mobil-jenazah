<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Status Permohonan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive my-3">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama Pemohon</th>
                                    <th>Nama Jenazah</th>
                                    <th>Status</th>
                                    <th>Mobil</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($statuspermohonans as $item)
                                <tr data-id="{{ $item->id }}">
                                    <td>{{ $item->permohonan->nik }}</td>
                                    <td>{{ $item->permohonan->nama_pemohon }}</td>
                                    <td>{{ $item->permohonan->nama_jenazah }}</td>

                                    <td class="status-cell">
                                        <span class="status-text">{{ ucfirst($item->status) }}</span>
                                        <select name="status" class="status-dropdown form-select d-none">
                                            <option value="tersedia" {{ $item->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                                            <option value="tidak tersedia" {{ $item->status == 'tidak tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                                        </select>
                                    </td>

                                    <td class="mobil-cell">
                                        <span class="mobil-text">{{ $item->mobil ? $item->mobil->plat . ' - ' . $item->mobil->brand : 'N/A' }}</span>
                                        <select name="mobil_id" class="mobil-dropdown form-select d-none">
                                            <option value="">Pilih Mobil</option>
                                            @foreach ($mobils as $mobil)
                                                <option value="{{ $mobil->id }}" {{ $item->mobil_id == $mobil->id ? 'selected' : '' }}>
                                                    {{ $mobil->plat }} - {{ $mobil->brand }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>



                                    <td class="action-cell">
                                        <button class="btn btn-success ok-button d-none">OK</button>
                                        <button class="btn btn-primary edit-button">Edit</button>
                                        <a href="{{ route('statuspermohonan.destroy', $item->id) }}" class="btn btn-danger delete-button">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('.edit-button').on('click', function () {
                const row = $(this).closest('tr');
                row.find('.status-text, .mobil-text').addClass('d-none');
                row.find('.status-dropdown, .mobil-dropdown').removeClass('d-none');
                row.find('.ok-button').removeClass('d-none');
                $(this).addClass('d-none');
                row.find('.delete-button').addClass('d-none');
            });

            $('.ok-button').on('click', function () {
                const row = $(this).closest('tr');
                const id = row.data('id');
                const status = row.find('.status-dropdown').val();
                const mobil_id = row.find('.mobil-dropdown').val();
                // const supir_id = row.find('.supir-dropdown').val();
                console.log('mobil id is ', mobil_id);

                $.ajax({
                    url: `/statuspermohonan/update/${id}`,
                    method: 'PUT',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: status,
                        mobil_id: mobil_id,
                        // supir_id: supir_id
                    },
                    success: function (response) {
                        if (response.success) {
                            row.find('.status-text').text(status.charAt(0).toUpperCase() + status.slice(1));
                            row.find('.mobil-text').text(row.find('.mobil-dropdown option:selected').text());
                            // row.find('.supir-text').text(row.find('.supir-dropdown option:selected').text());

                            row.find('.status-dropdown, .mobil-dropdown').addClass('d-none');
                            row.find('.status-text, .mobil-text').removeClass('d-none');

                            row.find('.ok-button').addClass('d-none');
                            row.find('.edit-button').removeClass('d-none');
                            row.find('.delete-button').removeClass('d-none');
                        } else {
                            alert('Error updating data.');
                        }
                    },
                    error: function () {
                        alert('An error occurred while updating the data.');
                    }
                });
            });
        });
    </script>
</x-app-layout>
