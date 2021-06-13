<div class="row">
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit User</h1>
            </div>
            <?php foreach ($user as $baris) { ?>
                <form class="user" action="<?php echo base_url('Mahasiswa/update'); ?>" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $baris->id; ?>">
                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username Maximal 10 Character" value="<?php echo $baris->username; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password Maximal 6 Character" value="<?php echo $baris->password; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Full Name" value="<?php echo $baris->nama; ?>" required>
                    </div>
                    <div class="form-group">
                        <select name="grup" id="grup" class="form-control" required>
                        <!-- foreach di gunakan untuk melooping data yang sudah di peroleh dari controler dengan function edit -->
                            <?php foreach ($grup as $grups) { ?>
                                <option value="1" <?php if (($baris->grup) == 1) {
                                                        echo "selected";
                                                    } ?>><?= $grups->grup ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Update">
                </form>
            <?php } ?>
            <hr>
            <div class="text-center">
                <a href="<?php echo base_url('Mahasiswa') ?>" class="small">Kembali</a>
            </div>
        </div>
    </div>
</div>