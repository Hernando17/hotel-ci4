<?php if (allow('admin')) : ?>
    <?= $this->extend('dashboard/templates/index'); ?>
    <?= $this->section('content'); ?>

    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">User Edit</h1>
            </div>
            <div class="row">
                <div class="col-30 col-lg-30">
                    <div class="card">
                        <div class="card-body col-6 mt-5" style="margin-left:50px;margin-bottom:50px;">
                            <br>
                            <form action="/dashboard/userupdate/<?= $user['id']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="slug" value="<?= $user['slug']; ?>">
                                <label for="">Username</label>
                                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" placeholder="Input" name="username" value="<?= (old('username')) ? old('username') : $user['username']; ?>">
                                <br>
                                <label for="">NIK</label>
                                <input type="text" class="form-control" placeholder="Input" name="nik" value="<?= (old('nik')) ? old('nik') : $user['nik']; ?>">
                                <br>
                                <label for="">Level</label>
                                <select class="form-select mb-3" name="level">
                                    <option selected><?= (old('level')) ? old('level') : $user['level']; ?></option>
                                    <option>admin</option>
                                    <option>member</option>
                                </select>
                                <label for="">Gender</label>
                                <select class="form-select mb-3" name="jenis_kelamin">
                                    <option selected><?= (old('jenis_kelamin')) ? old('jenis_kelamin') : $user['jenis_kelamin']; ?></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>

                                <a href="/dashboard/user" class="btn btn-primary">Back</a>
                                <button type="submit" class="btn btn-success">Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?= $this->endSection(); ?>

<?php endif; ?>