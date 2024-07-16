<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Acara</title>
</head>
<body>
    <h1>Form Registrasi Acara</h1>

    <form action="{{ route('simpanacara') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="" name="id_penyelenggara" value="{{ Auth::id() }}">
        

        <div>
            <label for="nama_acara">Nama Acara:</label>
            <input type="text" id="nama_acara" name="nama_acara" required>
        </div>
        <div>
            <label for="deskripsi_acara">Deskripsi Acara:</label>
            <textarea id="deskripsi_acara" name="deskripsi_acara" required></textarea>
        </div>
        <div>
            <label for="tanggal_acara">Tanggal Acara:</label>
            <input type="date" id="tanggal_acara" name="tanggal_acara" required>
        </div>
        <div>
            <label for="jam_mulai">Jam Mulai:</label>
            <input type="time" id="jam_mulai" name="jam_mulai" required>
        </div>
        <div>
            <label for="jam_selesai">Jam Selesai:</label>
            <input type="time" id="jam_selesai" name="jam_selesai" required>
        </div>
        <div>
            <label for="lokasi">Lokasi:</label>
            <input type="text" id="lokasi" name="lokasi" required>
        </div>
        <div>
            <label for="harga">Harga Tiket:</label>
            <input type="text" id="harga" name="harga" required>
        </div>
        <div>
            <label for="stok_tiket">Stok Tiket:</label>
            <input type="number" id="stok_tiket" name="stok_tiket" required>
        </div>
        <div>
            <label for="aturan_acara">Aturan Acara:</label>
            <textarea id="aturan_acara" name="aturan_acara" required></textarea>
        </div>
        <div>
            <label for="banner">Banner Acara:</label>
            <input type="file" id="banner" name="banner" accept="image/*" required>
        </div>
        <button type="submit">Submit</button>
    </form>
    <table class="table table-bordered table-hovered">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Tanggal Lahir</td>
            <td>Alamat</td>
            <td>Gol Darah</td>
            <td>Berat Badan</td>
            <td>Tekanan Darah</td>
            <td>Kadar Hb</td>
            @php
            use App\Models\RegistrasiAcaraModel;
            $data_acara = RegistrasiAcaraModel::all();
            @endphp
        
         @foreach ($data_acara as $urai)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $urai->id_penyelenggara }}</td>
                <td>{{ $urai->nama_acara }}</td>
                <td>{{ $urai->deskripsi_acara }}</td>
                <td>{{ $urai->tanggal_acara }}</td>
                <td>{{ $urai->jam_mulai }}</td>
                <td>{{ $urai->jam_selesai }}</td>
                <td>{{ $urai->lokasi }}</td>
                <td>{{ $urai->harga }}</td>
                <td>{{ $urai->stok_tiket }}</td>
                <td>{{ $urai->aturan_acara }}</td>
                <td>
                    <img src="{{ asset('storage/' . $urai->banner) }}" alt="Banner" style="max-width: 250px;">
                </td>
                {{-- <td>
                    <a href="{{ route('editData', $urai->id) }}" ><button class="btn btn-primary btn-sm">Edit</button></a>
                    <form action="{{ route('hapusData', $urai->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('Delete')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini')"
                        class="btn btn-danger btn-sm">Hapus</button>  
                    </form>
                </td> --}}
            </tr>
        @endforeach
        
        </tr>
    </table>
</body>
</html>
