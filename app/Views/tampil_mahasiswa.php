<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <li><?= $mhs['nim']; ?> - <?= $mhs['nama']; ?> (<?= $mhs['prodi']; ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
