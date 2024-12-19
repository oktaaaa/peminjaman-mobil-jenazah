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
                      
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($statuspermohonans as $item)
                                <tr data-id="{{ $item->id }}">
                                    <td>{{ $item->permohonan->nik }}</td>
                                    <td>{{ $item->permohonan->nama_pemohon }}</td>
                                    <td>{{ $item->permohonan->nama_jenazah }}</td>

                                    <!-- Status Cell -->
                                    <td class="status-cell">
                                        <span class="status-text">{{ ucfirst($item->status) }}</span>
                                        <select name="status" class="status-dropdown d-none" data-id="{{ $item->id }}">
                                            <option value="tersedia" {{ $item->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                                            <option value="tidak tersedia" {{ $item->status == 'tidak tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                                        </select>
                                    </td>

                                    <!-- Mobil Cell -->
                                    <td class="mobil-cell">
                                        <span class="mobil-text">{{ $item->mobil ? $item->mobil->plat . ' - ' . $item->mobil->brand : 'N/A' }}</span>
                                        <select name="mobil_id" class="mobil-dropdown d-none" data-id="{{ $item->id }}">
                                            <option value="">Pilih Mobil</option>
                                            @foreach ($mobils as $mobil)
                                                <option value="{{ $mobil->id }}" {{ $item->mobil_id == $mobil->id ? 'selected' : '' }}>
                                                    {{ $mobil->plat }} - {{ $mobil->brand }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>

                                    <!-- Supir Cell -->
                                    {{-- <td class="supir-cell">
                                        <span class="supir-text">{{ $item->supir ? $item->supir->nama : 'N/A' }}</span>
                                        <select name="supir_id" class="supir-dropdown d-none" data-id="{{ $item->id }}">
                                            <option value="">Pilih Supir</option>
                                            @foreach ($supirs as $supir)
                                                <option value="{{ $supir->id }}" {{ $item->supir_id == $supir->id ? 'selected' : '' }}>
                                                    {{ $supir->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td> --}}

                                    <!-- Action Buttons -->
                                    <td class="action-cell">
                                        <button class="btn btn-primary ok-button d-none">OK</button>
                                        <button class="btn btn-secondary edit-button">Edit</button>
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
            const rows = document.querySelectorAll('tr[data-id]');

            rows.forEach(row => {
                const editButton = row.querySelector('.edit-button');
                const okButton = row.querySelector('.ok-button');
                const deleteButton = row.querySelector('.delete-button');
                const statusDropdown = row.querySelector('.status-dropdown');
                const mobilDropdown = row.querySelector('.mobil-dropdown');


                const statusText = row.querySelector('.status-text');
                const mobilText = row.querySelector('.mobil-text');


                // Edit Button Click
                editButton.addEventListener('click', () => {
                    statusDropdown.classList.remove('d-none');
                    mobilDropdown.classList.remove('d-none');

                    okButton.classList.remove('d-none');
                    editButton.classList.add('d-none');
                    deleteButton.classList.add('d-none');
                });

                // OK Button Click
                okButton.addEventListener('click', () => {
                    const id = row.getAttribute('data-id');
                    const status = statusDropdown.value;
                    const mobilId = mobilDropdown.value;

                    fetch(`/statuspermohonan/update/${id}`, {
                        method: 'PUT',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ status, mobil_id: mobilId })
                    }).then(response => {
                        if (response.ok) {
                            statusText.textContent = status.charAt(0).toUpperCase() + status.slice(1);
                            mobilText.textContent = mobilDropdown.options[mobilDropdown.selectedIndex].text;


                            statusDropdown.classList.add('d-none');
                            mobilDropdown.classList.add('d-none');

                            okButton.classList.add('d-none');
                            editButton.classList.remove('d-none');
                            deleteButton.classList.remove('d-none');
                        } else {
                            alert('Failed to update data.');
                        }
                    }).catch(error => {
                        alert('An error occurred: ' + error);
                    });
                });
            });
        });
    </script>
</x-app-layout>
