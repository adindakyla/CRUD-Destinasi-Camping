<!DOCTYPE html>
<html>
<head>
    <title>Laporan Destinasi Camping</title>
   <style>
    body {
        font-family: Arial, sans-serif;
        font-size: 12px;
        background: #f4fbf6;
        margin: 0;
        padding: 20px;
    }

    .container {
        background: #ffffff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        border-top: 5px solid #16a34a;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header h2 {
        margin: 0;
        letter-spacing: 2px;
        color: #166534;
    }

    .header h3 {
        margin: 5px 0;
        color: #16a34a;
    }

    .header p {
        margin: 0;
        color: #6b7280;
        font-size: 11px;
    }

    hr {
        border: none;
        border-top: 2px solid #bbf7d0;
        margin: 15px 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead {
        background: #16a34a;
        color: white;
    }

    th, td {
        padding: 10px;
        border-bottom: 1px solid #e5e7eb;
        vertical-align: middle;
    }

    tbody tr:nth-child(even) {
        background: #f0fdf4;
    }

    .text-center {
        text-align: center;
    }

    .price {
        font-weight: bold;
        color: #15803d;
    }

    .thumb {
        width: 70px;
        height: 50px;
        object-fit: cover;
        border-radius: 6px;
        border: 1px solid #bbf7d0;
    }
</style>
</head>

<body>
<div class="container">

    <div class="header">
        <h2>UNIVERSITAS PAMULANG</h2>
        <h3>LAPORAN DATA DESTINASI CAMPING</h3>
        <p>UAS Rekayasa Web - Tahun Akademik 2025/2026</p>
        <hr>
    </div>

    <table>
        <thead>
            <tr>
                <th width="8%" class="text-center">ID</th>
                <th width="12%" class="text-center">Gambar</th>
                <th width="20%">Nama Tempat</th>
                <th width="30%">Fasilitas</th>
                <th width="15%">Biaya</th>
                <th width="15%">Jam Operasional</th>
            </tr>
        </thead>

        <tbody>
            @foreach($destinasi as $item)
            <tr>
                <td class="text-center">{{ $item->id_lokasi }}</td>

                <td class="text-center">
                  <img src="{{ public_path('storage/' . $item->gambar) }}" class="thumb">
                </td>

                <td><strong>{{ $item->nama_tempat }}</strong></td>
                <td>{{ $item->fasilitas }}</td>
                <td class="price">Rp {{ number_format($item->biaya, 0, ',', '.') }}</td>
                <td>{{ $item->jam_operasional }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
</body>
</html>