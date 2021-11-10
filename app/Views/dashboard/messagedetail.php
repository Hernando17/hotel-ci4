<?php if (allow('admin')) : ?>
    <?= $this->extend('dashboard/templates/index'); ?>
    <?= $this->section('content'); ?>


    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Message</strong> Detail</h1>
            <div class="row">
                <div class="col-30 col-lg-30 col-xxl-30 d-flex">
                    <div class="card flex-fill">
                        <div class="m-5">
                            <div class="row">
                                <div class="col">
                                    <p>Name : <?= $message['name']; ?></p>
                                    <p>Phone : <?= $message['phone']; ?></p>
                                    <p>Email : <?= $message['email']; ?></p>
                                </div>
                                <div class="col">
                                    <p>Message
                                        <hr><br> <?= $message['message']; ?>
                                    </p>

                                </div>
                                <div class="col">

                                </div>
                            </div>
                            <a href="/dashboard/message" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?= $this->endSection(); ?>
<?php endif; ?>