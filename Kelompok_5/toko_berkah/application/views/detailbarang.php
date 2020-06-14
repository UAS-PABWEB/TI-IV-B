<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            Detail Produk
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-4">
                    <img src="<?= base_url('/assets/uploads/') . $barang['gambar_brg']; ?>" class="card-img-top">
                </div>

                <div class="col-8">
                    <table class="table table-borderless">
                        <tr>
                            <td>Nama Produk</td>
                            <td><?= $barang['nama_brg'] ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><?= $barang['keterangan_brg'] ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><?= $barang['kategori_brg'] ?></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><?= $barang['stok_brg'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>
                                <div class="badge badge-info">Rp <?= number_format($barang['harga_brg'], 0, ',', '.') ?></div>
                            </td>
                        </tr>
                    </table>
                    <div class="row">
                        <div class="col-2">
                            <a href="<?= base_url('dashboard') ?>" class="btn btn-block btn-outline-primary">&leftarrow; Back</a>
                        </div>
                        <div class="col-10">
                            <?= anchor('dashboard/addToCart/' . $barang['id_brg'], '<div class="btn btn-warning btn-block font-weight-bold mb-2">Add to cart</div>') ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>