<div class="row">
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Tambah User</h1>
            </div>
            <form action="<?php echo base_url('Mahasiswa/input'); ?>" class="user" method="post">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username Maximal 10 Character" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password Maximal 6 Character" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
                </div>
                <div class="form-group">
                    <select name="grup" id="grup" class="form-control" required>

                        <option value="0">Pilih Grup User</option>
                        <!-- MELAKUKAN LOOPING UNTUK MENDAPATKAN DATA DARI CONTROLER -->
                        <?php foreach ($grup as $grups) { ?>
                            <option value="<?= $grups->id_grup ?>"><?= $grups->grup ?></option>
                        <?php } ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah">
            </form>
            <hr>
            <div class="text-center">
                <a href="index" class="small">Kembali</a>
            </div>
        </div>
    </div>
</div>