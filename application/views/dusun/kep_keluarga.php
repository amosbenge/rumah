<div class="container-fluid">
    <h3 class="mb-2 text-gray-900"><?= $title; ?></h3>

    <!-- Isi Dalam bentuk Card -->
    <div class="card">
        <div class="card-body">

            <!-- Tombol Tambah User dengan MODAL -->
            <button type="button" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#staticBackdrop">
                <i class="fas fa-user-plus mr-1"></i>
                Tambah
            </button>
            <button type="button" class="btn btn-secondary btn-sm mb-3" data-toggle="modal" data-target="#importModal">
                <i class="fas fa-file-import mr-1"></i>
                Import
            </button>
            <!-- <a href="<?= base_url('admin/cetak_kepkel') ?>" data-target="_blank">
                <button type="button" class="btn btn-warning btn-sm mb-3">
                    <i class="fas fa-file mr-1"></i>
                    Laporan
                </button>
            </a> -->
            <?php if (!$cekPengajuan) : ?>
                <button type="button" class="btn btn-success btn-sm mb-3" id="btn-ajukan">
                    <i class="fas fa-file mr-1"></i>
                    Ajukan
                </button>
            <?php endif; ?>

            <!-- Pesan SUKSES/TIDAK -->
            <div class="row">
                <div class="col-lg-6">
                    <?= $this->session->flashdata('message') ?>
                </div>
            </div>

            <!-- Tampil Tabel Data Users -->
            <form method="post" action="<?php echo base_url('dusun/pengajuan') ?>" id="form-ajukan">
                <div class="table-responsive">
                    <table class="table table-bordered text-center display compact nowrap" id="jtable">
                        <thead class="thead-dark">
                            <tr>
                                <th><input type="checkbox" id="check-all"></th>
                                <th scope="col">No.</th>
                                <th scope="col">No. KK</th>
                                <th scope="col">Nama Kepala Keluarga</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">RT/RW</th>
                                <th scope="col">Desa</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-900">

                            <!-- LOOPING tampil isi tabel users -->
                            <?php
                            $no = 1;
                            foreach ($kepkel as $kk) : ?>
                                <tr>
                                    <td>
                                        <?php if (!$cekPengajuan) : ?>
                                            <input type='checkbox' class='check-item' name='no_kk[]' value='<?= $kk['no_kk']; ?>'>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $no++ ?></td>
                                    <td><?= $kk['no_kk'] ?></td>
                                    <td><?= $kk['nm_kpl_kel'] ?></td>
                                    <td><?= $kk['alamat'] ?></td>
                                    <td><?= $kk['rt'] ?>/<?= $kk['rw'] ?></td>
                                    <td><?= $kk['desa'] ?></td>
                                    <td>
                                        <a class="btn btn-warning btn-circle btn-sm" href="<?= base_url('dusun/edit_kepkel/') ?><?= $kk['no_kk']; ?>" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit fa-sm"></i>
                                        </a>
                                        <!-- JIKA USER YANG SEDANG AKTIF, TOMBOL HAPUS TIDAK MUNCUL -->
                                        <?php if ($user['username'] != 'admin') : ?>
                                            <a href="<?= base_url('dusun/hapus_kepkel/') ?><?= $kk['no_kk']; ?>" class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" title="Hapus" onclick="return confirm('Yakin ingin menghapus User ini?')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- Akhir TABEL -->
            </form>
        </div>
    </div>

</div>
</div>

<!-- Modal Tambah User -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-gray-900" id="staticBackdropLabel">Tambah Kepala Keluarga</h5>
                <button type="button" class="close btn-danger" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="p-3">
                    <!-- FORM isian Data User -->
                    <form action="<?= base_url('dusun/tambah_kepkel/') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="no_kk">Nomor KK</label>
                            <input type="text" class="form-control form-control-sm" id="no_kk" name="no_kk" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Kepala Keluarga</label>
                            <input type="text" class="form-control form-control-sm" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="rt">RT</label>
                            <input type="text" class="form-control form-control-sm" id="rt" name="rt" required>
                        </div>
                        <div class="form-group">
                            <label for="rw">RW</label>
                            <input type="text" class="form-control form-control-sm" id="rw" name="rw" required>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Import Excel -->
<div class="modal fade" id="importModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-gray-900" id="importModalLabel">Import Kepala Keluarga</h5>
                <button type="button" class="close btn-danger" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="p-3">
                    <!-- FORM isian Data User -->
                    <form action="<?= base_url('dusun/excel_batch_add_kepkel/') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="excel">File Excel</label>
                            <input type="file" name="excel" id="" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                            <button type="submit" class="btn btn-primary btn-sm">Import</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>