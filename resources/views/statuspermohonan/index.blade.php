<x-app-layout :assets="$assets ?? []">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Status Permohonan</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive my-3">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama Pemohon</th>
                                    <th>Nama Jenazah</th>
                                    <th>Alamat Penjemputan</th>
                                    <th>Alamat TPU</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($statuspermohonans as $item)
                                <tr>
                                    <td>{{ $item->permohonans->nik }}</td>
                                    <td>{{ $item->permohonans->nama_pemohon }}</td>
                                    <td>{{ $item->permohonans->nama_jenazah }}</td>
                                    <td>{{ $item->permohonans->alamat_penjemputan }}</td>
                                    <td>{{ $item->permohonans->alamat_tpu }}</td>
                                    <td>
                                        <select name="status"
                                            class="btn status-dropdown {{ $item->status === 'tersedia' ? 'btn-success' : 'btn-danger' }}"
                                            data-id="{{ $item->id }}">
                                            <option value="tersedia" {{ $item->status === 'tersedia' ? 'selected' : ''
                                                }}>Tersedia</option>
                                            <option value="tidak tersedia" {{ $item->status === 'tidak tersedia' ?
                                                'selected' : '' }}>Tidak Tersedia</option>
                                        </select>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.status-dropdown').on('change', function () {
                const status = $(this).val(); // Get selected status
                const id = $(this).data('id'); // Get the item's ID
                const dropdown = $(this); // Reference to the dropdown

                $.ajax({
                    url: `/statuspermohonan/update/${id}`, // Pass the ID in the URL
                    method: "PUT",
                    data: {
                        _token: "{{ csrf_token() }}", // Include CSRF token
                        status: status
                    },
                    success: function (response) {
                        if (response.success) {
                            // Update button color dynamically
                            if (status === 'tersedia') {
                                dropdown.removeClass('btn-danger').addClass('btn-success');
                            } else {
                                dropdown.removeClass('btn-success').addClass('btn-danger');
                            }
                            alert(response.message);
                        } else {
                            alert('Failed to update status.');
                        }
                    },
                    error: function (xhr, status, error) {
                        alert('An error occurred: ' + error);
                    }
                });
            });
        });
    </script>



</x-app-layout>
