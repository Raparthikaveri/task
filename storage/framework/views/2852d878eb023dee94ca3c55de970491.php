
<?php $__env->startSection('content'); ?>
<style>
    .line {
        border: 1px solid #bfbfbf;
    }
    .task-vh-category td,
    .task-vh-category th {
        text-align: center;
    }

    .task-vh-category td {
        border: 1px solid #dadadd;
    }
    .table .thead-light th {
        color: #fff;
        background-color: #49687c;
        text-transform: initial !important;
    }
</style>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<div class="vh_heading">
    <div class="row pb-1 px-3">
        <div class="col-lg-6 d-flex align-items-center">
            <h4 class="mb-0">Bucket Suggestions</h4>
        </div>
    </div>
</div>

<div class="container-fluid py-4">
    <?php $__currentLoopData = $balls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ball): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row pb-2">
        <div class="col-lg-1 text-right pt-2"><?php echo e($ball->name); ?></div>
        <div class="col-lg-4">
            <input type="text" ball="<?php echo e($ball->id); ?>" class="form-control bucketsuggestions" value="">
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-3">
            <button type="button" class="vd_form_btn btn btn-primary getresults">Place Balls In Bucket</button>
        </div>
    </div>
</div>
<hr class="line">
<div class="row p-3">
<div class="col-lg-12"> <h4 class="mb-0">Results</h4></div>
    <div class="col-lg-12">
        <table class="table mb-0 task-vh-category">
            <thead class="thead-light task_employee-table">
                <tr>
                    <th>Bucket</th>
                    <th>Filled Balls</th>
                    <th>Empty Space</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>1001</td>
                    <td>Customer</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
</div>
<script>
    jQuery(document).on('click','.getresults',function(){
        var information = {};  
        jQuery('.bucketsuggestions').each(function() {
            var value = jQuery(this).val();
            var ball = jQuery(this).attr('ball');
            console.log(ball);
            console.log(value);
            information[ball] = value;
       }); 
       console.log(information);
       var url="<?php echo e(route('results.get')); ?>";
            jQuery.ajax({
                'url': url,
                'headers': {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                'method':'POST',
                'dataType':'json',
                'data':{
                    'information':information,
                },
                success:function(response){
                    console.log(response);
                    if(response == "success"){
                        alert('Permissions Updated Successfully');
                    }else{
                        alert(response);
                    }
                }
            });
    });
</script>
<?php $__env->stopSection(); ?>  

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\test_tms\resources\views/bucketsuggestions.blade.php ENDPATH**/ ?>