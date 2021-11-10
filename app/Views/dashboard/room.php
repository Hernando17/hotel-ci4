<?= $this->extend('dashboard/templates/index'); ?>
<?= $this->section('content'); ?>


<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Room</strong> Data</h1>
        <div class="row">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <div class="col-30 col-lg-30 col-xxl-30 d-flex">
                <div class="card flex-fill">
                    <?php if (allow('admin')) : ?>
                        <a href="/dashboard/room/create" class="btn btn-success" style="width:4%;margin:20px;">+</a>
                    <?php endif; ?>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="d-none d-md-table-cell">Number</th>
                                <th class="d-none d-xl-table-cell">Class</th>
                                <th class="d-none d-xl-table-cell">Floor</th>
                                <th class="d-none d-xl-table-cell">Status</th>
                                <?php if (allow('admin')) : ?>
                                    <th></th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($room as $r) { ?>
                                <tr>
                                    <td><?= $r['id']; ?></td>
                                    <td class="d-none d-xl-table-cell"><?= $r['number']; ?></td>
                                    <td class="d-none d-xl-table-cell"><?= $r['class']; ?></td>
                                    <td class="d-none d-xl-table-cell"><?= $r['floor']; ?></td>
                                    <td class="d-none d-xl-table-cell"><?= $r['status']; ?></td>
                                    <?php if (allow('admin')) : ?>
                                        <td>
                                            <a href="/dashboard/room/edit/<?= $r['slug']; ?>" class="btn btn-primary">Edit</a>
                                            <form action="/dashboard/room/delete/<?= $r['id']; ?>" method="post" class="d-inline">
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                                            </form>
                                        </td>
                                    <?php endif; ?>
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