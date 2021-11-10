<?php if (allow('admin')) : ?>
    <?= $this->extend('dashboard/templates/index'); ?>
    <?= $this->section('content'); ?>


    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Book</strong> History</h1>
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
                                    <th class="d-none d-md-table-cell">Number</th>
                                    <th class="d-none d-xl-table-cell">Name</th>
                                    <th class="d-none d-xl-table-cell">Check In</th>
                                    <th class="d-none d-xl-table-cell">Check Out</th>
                                    <th class="d-none d-xl-table-cell">Created At</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($book as $b) { ?>
                                    <tr>
                                        <td><?= $b['id']; ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $b['number']; ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $b['name']; ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $b['checkin']; ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $b['checkout']; ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $b['created_at']; ?></td>
                                        <td>
                                            <form action="/dashboard/book/delete/<?= $b['id']; ?>" method="post" class="d-inline">
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