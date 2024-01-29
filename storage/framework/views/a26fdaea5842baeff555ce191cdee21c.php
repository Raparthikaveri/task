
<?php $__env->startSection('content'); ?>
<div class="vh_heading">
    <div class="row pb-1 px-3">
        <div class="col-lg-6 d-flex align-items-center">
            <h4 class="mb-0">Bucket Form</h4>
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group form_border">
                <label for="example-text-input" class="col-form-label">Bucket Name</label>
                <input class="form-control" type="text" id="example-date-input">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group form_border">
                <label for="example-text-input" class="col-form-label">Volume (in inches)</label>
                <input class="form-control" type="text" id="example-date-input">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <button type="reset" class="vd_form_btn btn btn-primary">Filter</button>

        </div>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\test_tms\resources\views/home.blade.php ENDPATH**/ ?>