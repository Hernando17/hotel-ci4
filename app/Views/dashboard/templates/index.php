<div class="main">
    <?= $this->include('dashboard/templates/sidebar'); ?>
    <?= $this->include('dashboard/templates/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('dashboard/templates/footer'); ?>
</div>