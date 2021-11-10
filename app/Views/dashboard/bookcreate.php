 <?= $this->extend('dashboard/templates/index'); ?>
 <?= $this->section('content'); ?>

 <main class="content">
     <div class="container-fluid p-0">
         <div class="mb-3">
             <h1 class="h3 d-inline align-middle">Create Booking</h1>
         </div>
         <div class="row">
             <div class="col-30 col-lg-30">
                 <div class="card">
                     <div class="card-body col-6 mt-5" style="margin-left:50px;margin-bottom:50px;">
                         <br>
                         <form action="/dashboard/book/add" method="post">
                             <?= csrf_field(); ?>
                             <label for="">Number</label>
                             <select class="form-select mb-3" name="number">
                                 <?php foreach ($room as $r) { ?>
                                     <option><?= $r['number']; ?></option>
                                 <?php } ?>
                             </select>
                             <div id="validationServer05Feedback" class="invalid-feedback">
                                 <?= $validation->getError('number'); ?>
                             </div>
                             <label for="">Username</label>
                             <input type="text" class="form-control" name="name" value="<?= session()->get('username'); ?>" readonly>
                             <div id="validationServer05Feedback" class="invalid-feedback">
                                 <?= $validation->getError('name'); ?>
                             </div>
                             <br>
                             <label for="">Check In</label>
                             <input type="date" class="form-control" placeholder="Date of check in" name="checkin">
                             <div id="validationServer05Feedback" class="invalid-feedback">
                                 <?= $validation->getError('checkin'); ?>
                             </div>
                             <br>
                             <label for="">Check Out</label>
                             <input type="date" class="form-control" placeholder="Date of check out" name="checkout">
                             <div id="validationServer05Feedback" class="invalid-feedback">
                                 <?= $validation->getError('checkout'); ?>
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