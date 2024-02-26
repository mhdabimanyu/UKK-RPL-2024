<div class="card-body">
                        <!-- Tabel untuk menampilkan daftar foto -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Menampilkan setiap foto -->
                                @foreach ($fotos as $foto)
                                    <tr>
                                        <td>{{ $foto->title }}</td>
                                        <td><img src="{{ asset('images/'.$foto->image) }}" alt="{{ $foto->title }}" style="max-width: 100px;"></td>
                                        <td>{{ $foto->deskripsi }}</td>
                                        <td>
                                        <a href="{{ route('foto.show', $foto->id) }}" class="btn btn-primary">Lihat</a>
                                       
                                            <!-- Tombol untuk mengedit foto -->
                                            <a href="{{ route('foto.edit', $foto->id) }}" class="btn btn-primary">Edit</a>
                                            <!-- Form untuk menghapus foto -->
                                            <form action="{{ route('foto.destroy', $foto->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>