<!doctype html>
<html lang="en">

<head>
    <title>CICRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Add Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahOrderModal">
                            Tambah Buku
                        </button>
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Judul</th>
                                    <th>Penerbit</th>
                                    <th>Pengarang</th>
                                    <th>jumlah</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <?php foreach ($buku as $a) : ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $a['judul']; ?></td>
                                        <td><?php echo $a['penerbit']; ?></td>
                                        <td><?php echo $a['pengarang']; ?></td>
                                        <td><?php echo $a['jumlah']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editOrderModal<?php echo $a['id_buku']; ?>">Edit</button>
                                            <a href="<?php echo site_url('buku/hapus/' . $a['id_buku']); ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add the "Tambah Order" modal -->
    <div class="modal fade" id="tambahOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url('buku/insert'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Pengarang</label>
                            <input type="text" class="form-control" name="pengarang" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">jumlah</label>
                            <input type="number" class="form-control" name="jumlah" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add the "Edit Order" modals for each data entry -->
    <?php foreach ($buku as $a) : ?>
        <div class="modal fade" id="editOrderModal<?php echo $a['id_buku']; ?>" tabindex="-1" role="dialog" aria-labelledby="editOrderModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editOrderModalLabel">Edit Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo site_url('buku/update'); ?>" method="post">
                        <input type="hidden" name="id_buku" value="<?php echo $a['id_buku']; ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" name="judul" value="<?php echo $a['judul']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="judul">Penerbit</label>
                                <input type="text" class="form-control" name="penerbit" value="<?php echo $a['penerbit']; ?>" >
                            </div>
                            <div class="form-group">
                                <label for="judul">Pengarang</label>
                                <input type="text" class="form-control" name="pengarang" value="<?php echo $a['pengarang']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">jumlah</label>
                                <input type="number" class="form-control" name="jumlah" value="<?php echo $a['jumlah']; ?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="simpan">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Add Bootstrap 4 JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>