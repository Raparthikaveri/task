 
 <?php $__env->startSection('sidebar'); ?>

 <style>
     .vd_logo img {
         width: 75% !important;
         height: 100% !important;
     }

     .whole_sidebar {
         background: #0b2b4e !important;
     }
 </style>
 <div class="main-container" id="container">
     <div class="overlay"></div>
     <div class="search-overlay"></div>
     <div class="rightbar-overlay"></div>
     <!--  Sidebar Starts  -->
     <div class="sidebar-wrapper sidebar-theme whole_sidebar">
         <nav id="sidebar">
             <ul class="navbar-item theme-brand flex-row  text-center">
                 <li class="nav-item theme-logo vd_logo">
                     <a href="#">
                         <img src="<?php echo e(asset('assets/img/VRidez-Logo.png')); ?>" class="navbar-logo" alt="logo">
                     </a>
                 </li>
             </ul>
             <ul class="list-unstyled menu-categories" id="accordionExample">
                 <li class="menu">
                     <a href="<?php echo e(route('bucket.add')); ?>"  class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <i class="lab la-readme sidebar_icons"></i>
                             <span>Add Bucket</span>
                         </div>
                     </a>
                 </li>
                 <li class="menu">
                     <a href="<?php echo e(route('ball.add')); ?>" class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <i class="lab la-readme sidebar_icons"></i>
                             <span>Add Ball</span>
                         </div>
                     </a>
                 </li>
                 <li class="menu">
                     <a href="<?php echo e(route('bucket.suggestions')); ?>"  class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <i class="lab la-readme sidebar_icons"></i>
                             <span>Bucket Suggestion</span>
                         </div>
                     </a>
                 </li>
             </ul>
         </nav>
     </div>
     <!--  Sidebar Ends  -->

 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\bbtask\resources\views/sidebar.blade.php ENDPATH**/ ?>