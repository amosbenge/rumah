<!DOCTYPE html>
<html>

<head>
    <title>Laporan</title>
    <style>
        h3 {
            width: 100%;
        }

        .tabel1 {
            font-family: sans-serif;
            color: #444;
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #f2f5f7;
        }

        .tabel1 tr th {
            background: #35A9DB;
            color: #fff;
            font-weight: normal;
        }

        .tabel1,
        th,
        td {
            padding: 10px 20px;
            text-align: left;
        }

        .tabel1 tr:hover {
            background-color: #f5f5f5;
        }

        .tabel1 tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table2 {
            font-family: sans-serif;
            color: #444;
            border-collapse: collapse;
            width: 100%;
            border: 0px;
            /* float: right; */
            /* position: fixed; */
        }

        .tabel2,
        th,
        td {
            padding: 10px 20px;
            text-align: center;
        }

        .box {
            float: right;
            width: 100%;
        }

        .box2 {
            /* float: right; */
            width: 100%;
        }
    </style>
</head>

<body>
    <h1><?= $data['title'] ?></h1>
    <?php foreach ($data['dusun'] as $d) : ?>
        <div class="box2">
            <h3><?= $d['nama_dusun'] ?></h3>
            <table class="tabel1">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No KK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody class="text-gray-900">
                    <!-- LOOPING tampil Data -->
                    <?php
                    $no = 1;
                    foreach ($d['hasil'] as $hasil) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $hasil['no_kk'] ?></td>
                            <td><?= $hasil['nm_kpl_kel'] ?></td>
                            <td><?= number_format($hasil['hasil'], 3) ?></td>
                            <td><?= ($no <= 4 && $no >= 2) ? 'Menerima' : 'Tidak Menerima' ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <!-- akhir LOOPING -->
                </tbody>
            </table>
        </div>
        <hr>
        <br>
        <div class="box">
            <table class="table2">
                <tr>
                    <td></td>
                    <td>
                        Kabuna, <?= date('d-m-Y') ?>,
                        <br>
                        Kepala Desa Kabuna
                        <br><br><br><br>
                        Adrianus Yoseph Laka, S.Tp.
                    </td>
                </tr>
            </table>
        </div>
        <br>
    <?php endforeach; ?>
</body>

</html>