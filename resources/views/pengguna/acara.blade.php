@php
    use App\Models\RegistrasiAcaraModel;
    $data_acara = RegistrasiAcaraModel::all();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/js/script.js') }}" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <div class="d-flex justify-content-center flex-row flex-wrap">
        @foreach ($data_acara as $urai)
            <div class="card m-2" style="width: 18rem;">
                <img src="{{ asset('storage/' . $urai->banner) }}" style="width:18rem; height: 200px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="">{{ $urai->nama_acara }}</a></h5>
                    <p class="card-text">{{ $urai->tanggal_acara }}</p>
                    <p class="card-text">{{ $urai->harga }}</p>
                    <i class="bi bi-bag-x"></i>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    
                </div>
            </div>
        @endforeach
    </div>
    

</body>
</html>
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
