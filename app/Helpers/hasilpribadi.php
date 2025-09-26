<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hasil Ujian</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table { border-collapse: collapse; width: 100%; }
        table, th, td { border: 1px solid black; padding: 5px; }
    </style>
</head>
<body>
    <h2>Hasil Ujian</h2>
    <table>
        <tr><th>Nama</th><td><?= $data['nama']; ?></td></tr>
        <tr><th>Kelas</th><td><?= $data['tingkat']; ?> - <?= $data['nama_rombel']; ?></td></tr>
        <tr><th>Sekolah</th><td><?= $data['nama_sekolah']; ?></td></tr>
        <tr><th>Paket Soal</th><td><?= $data['nama_paket']; ?></td></tr>
        <tr><th>Total Soal</th><td><?= $data['total_soal']; ?></td></tr>
        <tr><th>Total Benar</th><td><?= $data['total_benar']; ?></td></tr>
        <tr><th>Nilai</th><td><?= round($data['nilai'], 2); ?></td></tr>
    </table>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
body {
    font-family: Arial, sans-serif;
    font-size: 12pt;
}
.header {
    text-align: center;
    border-bottom: 2px solid black;
    padding-bottom: 10px;
}
.header img {
    width: 80px;
    position: absolute;
    left: 60px;
    top: 20px;
}
h1 {
    font-size: 18pt;
    margin: 0;
}
.table-info {
    margin-top: 20px;
    width: 100%;
}
.table-info td {
    padding: 5px;
}
.table-nilai {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
.table-nilai th, .table-nilai td {
    border: 1px solid black;
    padding: 5px;
    text-align: center;
}
.footer {
    margin-top: 50px;
    text-align: right;
    padding-right: 50px;
}
</style>
</head>
<body>

<div class="header">
    <h1>SERTIFIKAT HASIL TES OLIMPIADE</h1>
</div>

<table class="table-info">
    <tr><td>Nama:</td><td>: <?= $data['nama']; ?></td></tr>
    <tr><td>Kelas</td><td>: <?= $data['tingkat']; ?> - <?= $data['nama_rombel']; ?></td></tr>
    <tr><td>NIS</td><td>: <?= $data['nis']; ?></td></tr>
    <tr><td>Asal Sekolah</td><td>: <?= $data['nama_sekolah']; ?></td></tr>
    <tr><td>Paket Soal</td><td>:  <?= $data['nama_paket']; ?></td></tr>
</table>

<table class="table-nilai">
    <thead>
        <tr>
            <th>Nama Mapel</th>
            <th>Total Soal</th>
            <th>Total Benar</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
           <td><?= esc($data['nama_mapel']) ?></td>
            <td><?= esc($data['total_soal']) ?></td>
            <td><?= esc($data['total_benar']) ?></td>
            <td><?= round($data['nilai'], 2) ?></td>
            <td><?= esc($data['status']) ?></td>

        </tr>
    </tbody>
</table>
<!-- 
<div class="footer">
    <p><?= date('d F Y') ?></p>
    <p>Kepala Sekolah</p>
    <br><br><br>
    <p><b>_________________</b></p>
</div> -->

</body>
</html>
