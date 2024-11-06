<?php
$siswaKursus = [
    'Alice' => ['Matematika', 'Fisika'],
    'Bob' => ['Kimia', 'Biologi'],
    'Charlie' => ['Matematika', 'Teknik Komputer'],
];

function tampilkanSiswaKursus($siswaKursus) {
    echo "<h3>Daftar Siswa dan Kursus yang Diambil:</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Nama Siswa</th><th>Kursus yang Diambil</th></tr>";

    foreach ($siswaKursus as $siswa => $kursus) {
        echo "<tr><td>$siswa</td><td>" . implode(', ', $kursus) . "</td></tr>";
    }

    echo "</table><br>";
}

function tambahSiswaKursus(&$siswaKursus, $namaSiswa, $kursusBaru) {
    if (isset($siswaKursus[$namaSiswa])) {
        $siswaKursus[$namaSiswa] = array_merge($siswaKursus[$namaSiswa], [$kursusBaru]);
    } else {
        $siswaKursus[$namaSiswa] = [$kursusBaru];
    }
}

function hapusSiswaKursus(&$siswaKursus, $namaSiswa) {
    if (isset($siswaKursus[$namaSiswa])) {
        unset($siswaKursus[$namaSiswa]);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['tambah'])) {
        $namaSiswa = $_POST['nama_siswa'];
        $kursusBaru = $_POST['kursus_baru'];
        if (!empty($namaSiswa) && !empty($kursusBaru)) {
            tambahSiswaKursus($siswaKursus, $namaSiswa, $kursusBaru);
        }
    } elseif (isset($_POST['hapus'])) {
        $namaSiswa = $_POST['nama_siswa'];
        if (!empty($namaSiswa)) {
            hapusSiswaKursus($siswaKursus, $namaSiswa);
        }
    }
}

tampilkanSiswaKursus($siswaKursus);
?>

<h3>Tambah Siswa dan Kursus</h3>
<form method="post" action="">
    <label for="nama_siswa">Nama Siswa:</label><br>
    <input type="text" name="nama_siswa" id="nama_siswa" required><br><br>

    <label for="kursus_baru">Kursus Baru:</label><br>
    <input type="text" name="kursus_baru" id="kursus_baru" required><br><br>

    <input type="submit" name="tambah" value="Tambah Siswa dan Kursus">
</form>

<br>

<h3>Hapus Siswa</h3>
<form method="post" action="">
    <label for="nama_siswa_hapus">Nama Siswa:</label><br>
    <input type="text" name="nama_siswa" id="nama_siswa_hapus" required><br><br>

    <input type="submit" name="hapus" value="Hapus Siswa">
</form>
