<?php if (allow('admin')) : ?>
    <?= $this->extend('dashboard/templates/index'); ?>
    <?= $this->section('content'); ?>

    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Room Edit</h1>
            </div>
            <div class="row">
                <div class="col-30 col-lg-30">
                    <div class="card">
                        <div class="card-body col-6 mt-5" style="margin-left:50px;margin-bottom:50px;">
                            <br>
                            <form action="/dashboard/room/update/<?= $room['id']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="slug" value="<?= $room['slug']; ?>">
                                <label for="">Number</label>
                                <input type="text" class="form-control <?= ($validation->hasError('number')) ? 'is-invalid' : ''; ?>" placeholder="Number of Room" name="number" value="<?= (old('number')) ? old('number') : $room['number']; ?>">
                                <br>
                                <label for="">Class</label>
                                <select class="form-select mb-3 <?= ($validation->hasError('class')) ? 'is-invalid' : ''; ?>" name="class">
                                    <option selected><?= (old('class')) ? old('class') : $room['class']; ?></option>
                                    <option>Suit Room</option>
                                    <option>Premium Room</option>
                                    <option>Esthetic Room</option>
                                </select>

                                <label for="">Floor</label>
                                <input type="text" class="form-control" placeholder="Number of floor" name="floor" value="<?= (old('floor')) ? old('floor') : $room['floor']; ?>">
                                <br>
                                <label for="">Status</label>
                                <select class="form-select mb-3 <?= ($validation->hasError('floor')) ? 'is-invalid' : ''; ?>" name="status">
                                    <option selected><?= (old('status')) ? old('status') : $room['status']; ?></option>
                                    <option>Available</option>
                                    <option>Not Available</option>
                                </select>
                                <br>
                                <a href="/dashboard/room" class="btn btn-primary">Back</a>
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