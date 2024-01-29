
<?php $__env->startSection('content'); ?>
<div class="vh_heading">
    <div class="row pb-1 px-3">
        <div class="col-lg-6 d-flex align-items-center">
            <h4 class="mb-0">Bucket Form</h4>
        </div>
    </div>
</div>
<form method="post" action="<?php echo e(route('bucket.save')); ?>" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<div class="container-fluid py-4">
<?php if(session('msg')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('msg')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group form_border">
                <label for="example-text-input" class="col-form-label">Bucket Name</label>
                <input class="form-control" required name="name" type="text" id="example-date-input">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group form_border">
                <label for="example-text-input" class="col-form-label">Volume (in inches)</label>
                <input class="form-control" required name="volume" type="text" id="example-date-input">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <button type="submit" class="vd_form_btn btn btn-primary">save</button>
        </div>
    </div>
</div>
</form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\test_tms\resources\views/bucketform.blade.php ENDPATH**/ ?>