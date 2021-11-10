<?php if (allow('admin')) : ?>
    <?= $this->extend('dashboard/templates/index'); ?>
    <?= $this->section('content'); ?>

    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Room Create</h1>
            </div>
            <div class="row">
                <div class="col-30 col-lg-30">
                    <div class="card">
                        <div class="card-body col-6 mt-5" style="margin-left:50px;margin-bottom:50px;">
                            <br>
                            <form action="/dashboard/room/add" method="post">
                                <?= csrf_field(); ?>
                                <label for="">Number</label>
                                <input type="text" class="form-control" placeholder="Number of room" name="number">
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    <?= $validation->getError('number'); ?>
                                </div>
                                <br>
                                <label for="">Class</label>
                                <select class="form-select mb-3" name="class">
                                    <option>Suit Room</option>
                                    <option>Premium Room</option>
                                    <option>Esthetic Room</option>
                                </select>
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    <?= $validation->getError('class'); ?>
                                </div>
                                <label for="">Floor</label>
                                <input type="text" class="form-control" placeholder="Number of floor" name="floor">
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    <?= $validation->getError('floor'); ?>
                                </div>
                                <br>
                                <label for="">Status</label>
                                <select class="form-select mb-3" name="status">
                                    <option>Available</option>
                                    <option>Not Available</option>
                                </select>
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    <?= $validation->getError('status'); ?>
                                </div>
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