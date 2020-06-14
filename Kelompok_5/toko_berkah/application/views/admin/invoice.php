<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama Pemesan</th>
                <th>Alamat Pengiriman</th>
                <th>Tanggal Pemesanan</th>
                <th>Batas Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($invoice as $inv) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $inv['id'] ?></td>
                    <td><?= $inv['nama'] ?></td>
                    <td><?= $inv['alamat'] ?></td>
                    <td><?= $inv['tgl_pesan'] ?></td>
                    <td><?= $inv['batas_bayar'] ?></td>
                    <td>
                        <?= anchor('admin/Invoice/detail/' . $inv['id'], '<div class="btn btn-sm btn-primary">Detail</div>') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>