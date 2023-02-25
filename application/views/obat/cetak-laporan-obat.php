<style>
    th {
        font-size: 14px;
        background-color: #52cbf2;
    }

    .tabel {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
</style>

<body>
    <table width="750" border="0">
        <tr>
            <td style="text-align: center; font-size:24px; font-weight:bold;">Laporan Pasien</td>
        </tr>
    </table>
    <table width="750" border="0">
        <tr>
            <td style="text-align: center; font-size:16px;">Dari Tanggal <?= mediumdate_indo($this->session->userdata('tgl_mulai')); ?> Sampai Tanggal <?= mediumdate_indo($this->session->userdata('tgl_akhir')); ?></td>
        </tr>
    </table>
    <br><br>
    <table width="750" class="tabel">
        <tr>
            <th class="tabel">Tanggal Masuk</th>
            <th class="tabel">Kode Obat</th>
            <th class="tabel">Nama Obat</th>
            <th class="tabel">Stok Obat</th>
            <th class="tabel">Harga</th>
        </tr>
        <?php foreach ($laporan as $row) { ?>
            <tr>
                <td class="tabel"><?= mediumdate_indo($row['tgl_masuk']) ?></td>
                <td class="tabel"><?= $row['kode_obat'] ?></td>
                <td class="tabel"><?= $row['nama_obat'] ?></td>
                <td class="tabel"><?= $row['stok_obat'] ?></td>
                <td class="tabel"><?= "Rp. " . number_format($row['harga_obat'], 0, '.', '.'); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>