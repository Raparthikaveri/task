 
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
                 <!--<li class="menu">-->
                 <!--    <a href="https://php8.testserverdesigns.com/transportbooking/public/main-dashboard"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar_toggle">-->
                 <!--        <div class="">-->
                 <!--            <i class="las la-home sidebar_icons"></i>-->
                 <!--            <span>Dashboard</span>-->
                 <!--        </div>-->

                 <!--    </a>-->
                 <!--</li>-->
                 <li class="menu">
                     <a href="https://php8.testserverdesigns.com/tmsportal/public/main-dashboard" aria-expanded="false" class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <i class="las la-home sidebar_icons"></i>
                             <span>Dashboard</span>
                         </div>
                     </a>
                 </li>
                 <!-- TRIPS -->
                 <li class="menu">
                     <a href="#trip" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <i class="las la-sort sidebar_icons"></i>
                             <span>Trips</span>
                         </div>
                         <div>
                             <i class="las la-angle-right sidemenu-right-icon"></i>
                         </div>
                     </a>
                     <ul class="collapse trips_submenu submenu list-unstyled" id="trip" data-parent="#accordionExample">
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/trips-table-new"> Corporate Trips </a>
                         </li>
                         <li>
                             <a href=""> General Trips </a>
                         </li>
                     </ul>
                 </li>
                 <!-- BOOKINGS -->
                 <li class="menu">
                     <a href="#booking" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <i class="las la-taxi sidebar_icons"></i>
                             <span>Bookings</span>
                         </div>
                         <div>
                             <i class="las la-angle-right sidemenu-right-icon"></i>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="booking" data-parent="#accordionExample">
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/booking-table"> Corporate Bookings </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/booking-table"> Individual Bookings </a>
                         </li>
                     </ul>
                 </li>
                 <!-- SCHEDULES -->
                 <!-- <li class="menu">
                     <a href="https://php8.testserverdesigns.com/tmsportal/public/schedules" aria-expanded="false" class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <i class="las la-file-invoice sidebar_icons"></i>
                             <span>Schedules</span>
                         </div>
                     </a>
                 </li> -->
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
                 <!-- INCOMES -->
                 <li class="menu">
                     <a href="#income" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <i class="lab la-readme sidebar_icons"></i>
                             <span>Income</span>
                         </div>
                         <div>
                             <i class="las la-angle-right sidemenu-right-icon"></i>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="income" data-parent="#accordionExample">
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/invoice-table"> Invoices </a>
                         </li>

                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/payments-list"> Payments</a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/advance-payments">Advanced Payments</a>
                         </li>
                     </ul>
                 </li>
                 <!-- EXPENSES -->
                 <li class="menu">
                     <a href="#expense" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <i class="lab la-intercom sidebar_icons"></i>
                             <span>Expenses</span>
                         </div>
                         <div>
                             <i class="las la-angle-right sidemenu-right-icon"></i>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="expense" data-parent="#accordionExample">
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/vendor-bills"> Vendor Bills</a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/vendor-payments"> Vendor Payments</a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/vehicle-expenses"> Vehicle Expenses
                             </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/fuel-expenses"> Fuel Expenses </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/office-expenses"> Office Expenses </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/paid-advances">Paid Advances </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/owner-driver-payments">Owner Driver Payments</a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/loans">Loans</a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/loan-payments">Loan Payments</a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/employee-payments">Employee Payments</a>
                         </li>
                     </ul>
                 </li>

                 <!-- REPORTS -->
                 <li class="menu">
                     <a href="#reports" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <!-- <i class="lab la-intercom sidebar_icons"></i> -->
                             <i class="lar la-comment sidebar_icons"></i>
                             <span>Reports</span>
                         </div>
                         <div>
                             <i class="las la-angle-right sidemenu-right-icon"></i>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="reports" data-parent="#accordionExample">
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/vendor"> Vendor </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/vehicle"> Vehicle </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/customer-earning"> Customer Earning </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/expenses">Expenses </a>
                         </li>
                     </ul>
                 </li>

                 <!-- Customers -->
                 <li class="menu">
                     <a href="#customers" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <!-- <i class="lab la-intercom sidebar_icons"></i> -->
                             <i class="las la-user-circle sidebar_icons"></i>
                             <span>Customers</span>
                         </div>
                         <div>
                             <i class="las la-angle-right sidemenu-right-icon"></i>

                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="customers" data-parent="#accordionExample">
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/customer"> Individual Customer </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/business-customer"> Business Customer </a>
                         </li>

                     </ul>
                 </li>

                 <!-- VEHICLE VENDORS -->
                 <li class="menu vendors_menu">
                     <a href="https://php8.testserverdesigns.com/tmsportal/public/vendor-table" aria-expanded="false" class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <i class="las la-user-alt sidebar_icons"></i>
                             <span>Vehicle Vendors</span>
                         </div>
                     </a>
                 </li>
                 <!-- VEHICLES -->
                 <li class="menu">
                     <a href="#vehicle" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <i class="las la-car-alt sidebar_icons"></i>
                             <span>Vehicles</span>
                         </div>
                         <div>
                             <i class="las la-angle-right sidemenu-right-icon"></i>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="vehicle" data-parent="#accordionExample">
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/all-vehicles"> All Vehicles </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/vehicle-category"> Add Category </a>
                         </li>
                     </ul>
                 </li>
                 <!-- DRIVERS -->
                 <li class="menu">
                     <a href="#driver" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <i class="las la-user-secret sidebar_icons"></i>
                             <span>Drivers</span>
                         </div>
                         <div>
                             <i class="las la-angle-right sidemenu-right-icon"></i>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="driver" data-parent="#accordionExample">
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/all-drivers"> All Drivers </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/add-driver"> Add New </a>
                         </li>
                     </ul>
                 </li>
                 <!-- STAFF -->
                 <li class="menu">
                     <a href="#staff" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar_toggle">
                         <div class="">
                             <i class="las la-users sidebar_icons"></i>
                             <span>Company</span>
                         </div>
                         <div>
                             <i class="las la-angle-right sidemenu-right-icon"></i>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="staff" data-parent="#accordionExample">
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/employee-list">Employees List </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/add-employee"> Add Employee </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/leaves-management"> Leaves Management </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/time-sheet-management"> Time Sheet Management </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/holiday-list">Holidays List </a>
                         </li>
                     </ul>
                 </li> 
                 <!-- USERS -->
                 <li class="menu">
                     <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar_toggle">
                         <div class="">

                             <i class="las la-user-friends sidebar_icons"></i>
                             <span>Users</span>
                         </div>
                         <div>
                             <i class="las la-angle-right sidemenu-right-icon"></i>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="user" data-parent="#accordionExample">
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/all-users"> All Users </a>
                         </li>
                         <li>
                             <a href="https://php8.testserverdesigns.com/tmsportal/public/permission-profile"> Roles & Permissions </a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </nav>
     </div>
     <!--  Sidebar Ends  -->

 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\test_tms\resources\views/sidebar.blade.php ENDPATH**/ ?>