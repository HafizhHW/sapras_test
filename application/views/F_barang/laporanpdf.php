<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h2 class="" style="text-align:center ;">Laporan Barang</h2> <br><br>
    <table border="1" style='border-collapse:collapse'>

        <tr>
            <th style="width: 20px" class="text-center">No</th>
            <th style="width: 100px" class="text-center">Nama Barang</th>
            <th style="width: 100px" class="text-center"> No Seri</th>
            <th class="text-center">Jumlah Barang</th>
            <th class="text-center">Jenis Barang</th>
            <th class="text-center">Jenis Anggaran</th>
            <th class="text-center">Tahun Pengadaan</th>
            <th class="text-center">Penempatan</th>
        </tr>


        <?php $no = 1;
        foreach ($barang as $brg) : ?>
            <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td><?= $brg->nm_barang ?></td>
                <td class="text-center"><?= $brg->no_seri ?></td>
                <td class="text-center"><?= $brg->jml_barang ?></td>
                <td class="text-center"><?= $brg->kat_barang ?></td>
                <td class="text-center"><?= $brg->kat_anggaran ?></td>
                <td class="text-center"><?= $brg->thn_pengadaan ?></td>
                <td class="text-center"><?= $brg->penempatan ?></td>
            </tr>
        <?php endforeach ?>

    </table>

    <script type="text/javascript">
        window.open();
    </script>
</body>

</html>