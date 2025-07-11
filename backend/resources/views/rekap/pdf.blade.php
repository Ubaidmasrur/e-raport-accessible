<!DOCTYPE html>
<html>
<head>
    <title>Rekap Nilai Tahunan</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 5px; border: 1px solid #000; }
    </style>
</head>
<body>
    <h2>Rekap Nilai - {{ $siswa->nama }}</h2>
    <p>Kelas: {{ $siswa->kelas }}</p>
    <p>NIS: {{ $siswa->nis }}</p>

    <table>
        <thead>
            <tr>
                <th>Indikator</th>
                <th>Nilai</th>
                <th>Semester</th>
                <th>Tahun Ajaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa->nilai as $n)
            <tr>
                <td>{{ $n->indikator->nama }}</td>
                <td>{{ $n->nilai }}</td>
                <td>{{ $n->semester }}</td>
                <td>{{ $n->tahunAjaran->tahun }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
