<?php if (allow('admin')) : ?>
    <?= $this->extend('dashboard/templates/index'); ?>
    <?= $this->section('content'); ?>


    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>User</strong> Account</h1>
            <div class="row">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <div class="col-30 col-lg-30 col-xxl-30 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title mb-0">MySQL Database</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="d-none d-md-table-cell">Level</th>
                                    <th class="d-none d-xl-table-cell">Username</th>
                                    <th class="d-none d-xl-table-cell">NIK</th>
                                    <th>Jenis Kelamin</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($user as $u) { ?>
                                    <tr>
                                        <td><?= $u['id']; ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $u['level']; ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $u['username']; ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $u['nik']; ?></td>
                                        <td class="d-none d-md-table-cell"><?= $u['jenis_kelamin']; ?></td>
                                        <td>
                                            <a href="/dashboard/useredit/<?= $u['slug']; ?>" class="btn btn-primary">Edit</a>
                                            <form action="/dashboard/userdelete/<?= $u['id']; ?>" method="post" class="d-inline">
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?= $this->endSection(); ?>

<?php endif; ?>