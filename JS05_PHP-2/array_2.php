<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h2>Data Dosen</h2>
    <table>
        <tr>
            <th>Detail</th>
            <th>Informasi</th>
        </tr>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'perempuan'
        ];

        foreach ($Dosen as $detail => $info) {
            echo "<tr>
                    <td>" . ucfirst($detail) . "</td>
                    <td>{$info}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
