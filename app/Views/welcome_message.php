<title>Produk</title>
<form action="<?= base_url('simpan')?>" method="post" name="fsampah" enctype="multipart/form-data">
    <table>

        Nama Produk : <input type="text" name="nama_produk" id="">
        <p></p>
        Keterangan : <input type="text" name="keterangan" id="">
        <p></p>
        Harga : <input type="text" name="harga" id="">
        <p></p>
        Jumlah : <input type="text" name="jumlah" id="">
        <p></p>
        <button type="submit">Simpan</button>
        <button type="button" onclick="location.href='<?= base_url('cetak')?>'">Cetak</button><p></p>
</form>
</table>

<table border="1" align="center">
    <thead>
        <th>Nama Produk</th>
        <th>Keterangan</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php foreach($produk as $row) : ?>

        <tr>
            <td><?= $row->nama_produk; ?></td>
            <td><?= $row->keterangan; ?></td>
            <td><?= $row->harga; ?></td>
            <td><?= $row->jumlah; ?></td>
            <td><a href="<?= base_url('hapus/'. $row->id); ?>">Hapus</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>