<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    
    <title>Vridez</title>
    <!-- <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/> -->
    <!-- Common Styles Starts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/main.css')); ?> " rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/forms/checkbox-theme.css')); ?> " rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/forms/radio-theme.css')); ?> " rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/forms/form-widgets.css')); ?> " rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/forms/forms.css')); ?> " rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/forms/global.css')); ?> " rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/structure.css')); ?> " rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('plugins/table/datatable/datatables.css')); ?> " rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<style>
    .vh_heading .row {
        border-bottom: 1px solid #a5a5a5b5 !important;
    }

    .topbar {
        background: #0b2b4e !important;
        border-left: 1px solid #8b9197;
    }

    .vd_menu_icons {
        color: #fff !important;
    }

    .login_txt {
        color: #fff !important;
    }

    .vd_bell_circle {
        background: #fff !important;
    }

    .vh_heading h4 {
        font-size: 24px;
    }

    .vh_heading hr {
        border-top: 1px solid #d3d3d3 !important;
    }

    .form_border label {
        font-size: 13px;
        color: #202020;
        letter-spacing: 1px;
    }

    .dt-table-tr .dt-table-tc {
        background-color: #fff;
    }

    .user_select {
        padding: 0px !important;
        height: 37px !important;
        font-size: 12px !important;
    }

    .user_select_time {
        padding: 2px !important;
        height: 37px !important;
        font-size: 12px !important;
    }

    .form_border input {
        height: 36px !important;
    }

    .user_selectdate {
        padding: 2px !important;
    }

    .form_border input.form-control {
        font-size: 12px !important;

    }

    .form_border .form-control {
        border: 1px solid #7a7a7a !important;
        color: #000;
    }

    .form_title {
        font-size: 16px;
        color: #000 !important;
    }

    .vd_divider {
        border-bottom: 1.5px solid #0b2b4e;
        width: 50%;
    }

    .vd_form_btn {
        background-color: #124c8b !important;
        border: none !important;
        font-size: 12px !important;
        padding: 8px 12px !important;
        letter-spacing: 1px;
    }

    .checkbox>span {
        background-color: #ebedf300;
        border: 1px solid #00000069;
    }

    .popup_heading {
        border-bottom: 1px solid #b1b1b1;
    }

    .form_main_title {
        font-size: 22px !important;
    }

    .tble_data {
        color: #124c8b !important;
        cursor: pointer;
        font-weight: 600;
    }

    /* search */
    .vd_toggle_search:before {
        content: "\f002" !important;
        position: relative !important;
        top: 62px !important;
        color: #060606 !important;
        left: 10px !important;
    }

    .search-form-control {
        padding-left: 35px !important;
        padding-right: 30px !important;
        border: 1px solid #707070 !important;
    }

    .search_nav li {
        list-style: none;
    }

    .search-form-control::placeholder {
        color: #3b3f5c !important;
        font-size: 13px !important;
    }

    .search_nav {
        position: relative;
        top: -19px;
    }

    .expenses_toggle:before {
        content: "\f002" !important;
        position: relative !important;
        top: 30px !important;
        color: #000 !important;
        left: 10px !important;
    }

    .vd_search_nav li {
        list-style: none;
    }

    .search-bar label {
        display: block;
        font-size: 12px !important;
    }

    ::selection {
        color: #fff;
        background: #124c8b;
    }


    .popup-content {
        overflow-x: clip;
        overflow-y: auto !important;
        height: 500px !important;
    }

    .save_sticky_btn {
        box-shadow: 0px 0px 10px #00000026;
    }

    /* right sidebar popup styles*/

    .right-sidebar {
        z-index: 999999999999999;
        /* box-shadow: 0px 0px 10px #0000004a; */
        height: 100vh;
        width: 320px;
        right: 0px;
        position: fixed;
        top: 0px;
        background: #fff;
        padding: 0px 15px 15px 15px;
        box-shadow: 0px 0px 10px #dadada;
        display: none;
    }

    .view_close_content {
        color: #aaaaaa;
        float: right;
        font-size: 22px;
        cursor: pointer;
    }

    .view_close_content:hover {
        color: #000;
    }

    .view_search_details:before {
        font-size: 18px;
        margin: 5px;
    }

    .view_rightbar_details {
        cursor: pointer;
    }

    .slide {
        animation: slide 0.5s forwards;
    }

    @keyframes slide {
        0% {
            width: 10px;
        }

        100% {
            width: 320px;
        }
    }

    .right_title {
        border-bottom: 1px solid #e1e1e1;
    }

    .rightsidebar_accordian .card {
        border: none !important;
    }

    .rightsidebar_accordian .card-header {
        background-color: #edeaea36 !important;
        padding: 10px;
    }

    .rightsidebar_accordian .card-body p {
        font-size: 12px !important;
        line-height: 20px !important;
    }

    .rightsidebar_accordian .card-body .las {
        font-size: 18px;
    }

    .rightsidebar_band {
        background-color: orange;
        color: #fff;
        font-size: 10px;
        text-align: center;
        padding: 5px 5px;
    }

    /* tooltip css styles */


    .search_tooltip {
        position: relative;
        display: inline-block;

    }

    .search_tooltip .search_tooltiptext {
        visibility: hidden;
        width: 276px;
        background-color: #49687c;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        top: -35px;
        font-size: 11px;
    }

    .search_tooltip:hover .search_tooltiptext {
        visibility: visible;
    }


    .search_info_icon {
        content: "\f129";
        font-size: 13px;
        background: green;
        color: #fff;
        border-radius: 30px;
        padding: 3px;
        cursor: pointer;
        position: relative;
        left: 6px;
    }

    .search_info_icon {
        content: "\f129";
        font-size: 13px;
        background: green;
        color: #fff;
        border-radius: 30px;
        padding: 3px;
        cursor: pointer;
        position: relative;
        left: 6px;
    }

    /*filter btn css*/
    .booking_filter_btn {
        padding: 8px 35px 8px 10px !important;
    }

    .booking_filter_toggle {
        content: "\f1de";
        position: relative;
        left: 61px;
        color: #fff !important;
        font-size: 20px;
        bottom: 0px;
        top: -42px;
    }


    /* right sidebar styles end*/

    /*table styles*/
    .dt-main {
        padding: 0px 50px;
        margin: auto;
    }

    .dt-flex-item {
        display: flex;
        align-items: center;
        gap: 20px;
        justify-content: space-between;
    }

    .dt-table,
    .dt-table-head,
    .dt-table-data {
        border: 1px solid rgb(155, 153, 153);
        border-collapse: collapse;
        text-align: center;
        padding: 20px;
    }

    .dt-main-table {
        overflow-x: auto;
        overflow-y: hidden;
    }

    .dt-table {
        width: 100%;
        color: #fff;
    }

    .dt-table tr:nth-child(1) {
        background-color: #49687c !important;
    }

    .dt-table tr {
        background-color: #3f3c3c;
    }

    .dt-pagination {
        display: inline-block;
    }

    .dt-pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        border: 1px solid #ddd;
    }

    .dt-pagination a.dt-active {
        background-color: #49687C;
        color: white;
        border: 1px solid #49687C;
    }

    .dt-pagination a:hover:not(.dt-active) {
        background-color: #49687C;
        color: #fff;
    }

    .dt-pagination a:first-child {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .dt-pagination a:last-child {
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .dt-settings {
        background: #49687c;
        padding: 15px 16px 10px 16px;
        border-radius: 30px 30px 0px 0px;
        position: relative;
    }

    .fa-cog {
        color: #fff;
        font-size: 22px;
    }

    .dt-show-records select {
        padding: 5px;
        border-radius: 8px;
    }

    .dt-settings:hover {
        cursor: pointer;
    }

    .dt-settings-pop {
        position: absolute;
        top: 50px;
        right: 0px;
        width: 150px;
        height: auto;
        border-radius: 8px;
        background-color: #e8eae6;
        box-sizing: border-box;
        padding: 0px 20px;
        z-index: 100;
        display: none;
    }

    .resizer {
        position: absolute;
        top: 0;
        right: 0;
        width: 5px;
        cursor: col-resize;
        user-select: none;
    }

    .dt-top-actions {
        padding: 0px 8px;
    }

    .dt-table tr {
        position: relative
    }

    .dt-table .fa-caret-square-down {
        position: absolute;
        right: 0px;
        top: 50%;
        transform: translatey(-50%);
        display: block;
        cursor: pointer;
    }

    /*new-table-css-styles*/
    .dt-main {
        /*max-width: 1500px;*/
        margin: auto;
    }

    .dt-div-table {
        overflow-x: auto;
        width: 100%;
        margin: auto;
        /*max-width: 1500px;*/
    }

    .dt-table {
        display: table;
        /*width: 100%;*/
        overflow: scroll;
        background-color: #eee;
        border-spacing: 2px;
        border-radius: 4px;
        text-align: center;
    }

    .dt-table-tr:nth-child(1) .dt-table-tc {
        background-color: #49687c;
        color: #fff;
        padding: 4px 10px !important;
        border: 1px solid #dadadd;
    }

    .dt-table-tr {
        display: table-row
    }

    .dt-table-tc {
        display: table-cell;
        vertical-align: top;

        padding: 3px 8px !important;
        color: #000;
        border: 1px solid #dadadd;
        vertical-align: middle;
        font-size: 12px;

    }

    .dt-table-th {
        font-weight: 400 !important;
        font-size: 12px !important;
    }

    .dt-table-tr:nth-child(1) {
        background: red;
    }

    .dt-flex-item {
        display: flex;
        align-items: center;
        gap: 20px;
        justify-content: space-between;
    }

    .dt-top-actions {
        padding: 0px 8px;

    }

    .dt-bottom-actions {
        padding: 0px 8px;
        margin: 0px 5px;
    }

    .dt-show-records select {
        padding: 5px;
        border-radius: 8px;
    }

    .dt-show-records {
        font-weight: 300;
    }

    .dt-settings {
        background: #49687c;
        padding: 15px 16px 10px 16px;
        border-radius: 30px 30px 0px 0px;
        position: relative;
    }

    .dt-settings:hover {
        cursor: pointer;
    }

    .dt-settings-pop {
        position: absolute;
        top: 50px;
        right: 0px;
        width: 250px;
        height: auto;
        border-radius: 8px;
        background-color: #2e2e2e;
        box-sizing: border-box;
        padding: 20px 20px;
        z-index: 100;
        display: none;
    }

    .fa-cog {
        color: #fff;
        font-size: 22px;
    }

    .dt-pagination {
        display: inline-block;
    }

    .dt-pagination a {
        color: black;
        float: left;
        padding: 2px 10px;
        text-decoration: none;
        border: 1px solid #ddd;
    }

    .dt-pagination a:first-child {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .dt-pagination a:last-child {
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .dt-table .fa-caret-square-down {
        position: absolute;
        right: 5px;
        top: 50%;
        transform: translatey(-50%);
        display: block;
        cursor: pointer;
    }

    .dt-show-records p {
        margin: 0px;
    }

    .dt-table-tr .dt-table-th {
        position: relative;
    }

    .resizer {
        position: absolute;
        top: 0;
        right: 0;
        width: 5px;
        cursor: col-resize;
        user-select: none;
    }

    .dt-table-th:hover .dt-col-resizer {
        height: 100%;
        color: green;
    }

    .resizer {
        position: absolute;
        top: 0;
        right: 0;
        width: 5px;
        cursor: col-resize;
        user-select: none;
    }

    .dt-pagination a {
        color: #202020;
        margin: 0px 5px;
    }

    .dt-total-records {
        cursor: pointer;
        font-weight: 600;
        font-size: 18px
    }

    .dt-more-paging {
        float: left;
    }

    .dt-filter-action a {
        color: #fff !important;
    }

    .dt-table-th {
        font-size: 12px !important;
    }

    @media only screen and (max-width: 600px) {

        .dt-total-records {
            display: none;

        }

        .dt-show-records p {
            font-size: 11px;
        }

        .dt-show-records select {
            padding: 2px;
            border-radius: 8px;
        }

        .dt-bottom-actions {
            display: block;
        }

        .dt-pagination {
            margin-top: 5px;

        }

        .dt-pagination a {
            padding: 4px 8px;
            color: #fff;
        }
    }

    /*sidebar styles*/

    .sidebar-closed .sidebar-wrapper {
        width: 65px;
        left: 0px;
    }

    .sidebar-closed>#content {
        margin-left: 64px;
    }

    .vb_rs-panel {
        position: fixed;
        top: 50%;
        right: 0px;
        z-index: 99;
        transform: translateY(-50%);
    }

    .vb_rs-list {
        color: #fff;
        list-style-type: none;
        font-size: 22px;
        background: #2d5d88;
        border-radius: 5px 0px 0px 5px;
        display: none;
        animation-duration: 1s;
        padding: 10px !important;
    }

    .vb_rs-list-item {
        padding: 8px;
    }

    .vb_rs-open {
        /*background: #2d5d88;*/
        border-radius: 30px 0px 0px 30px;
        padding: 14px 6px 11px 14px;
        z-index: 99;
        margin-right: -8px;
    }

    .vb_rs-open .la-angle-double-left {
        background: #124c8b;
        color: #fff !important;
        border-radius: 100px;
        padding: 10px;
    }

    .vb_quicklinks {
        position: relative;
    }

    .vb-quick-link {
        position: absolute;
        display: none;
        top: 29px;
        padding: 10px;
        background: #3a3a3a;
        color: #fff;
        width: 150px;
        border-radius: 4px;
    }

    .vb_quicklink-title {
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        z-index: 99;
    }

    .vb_quicklink-title:hover .vb-quick-link {
        display: block;
    }

    .vb-quick-link li {
        padding: 9px 0px;
    }

    /* .main_ul:hover .inner_ul {
        display: block;
    } */
    .settings_dropdown li:hover {
        background: #124c8b;
        color: #fff !important;
        font-size: 13px;
    }

    .settings_dropdown li:hover a {
        color: #fff !important;
    }

    .settings_dropdown a:hover {
        background: #124c8b;
        color: #fff !important;
        font-size: 13px;
    }


    .settings_dropdown {
        font-size: 13px;
    }

    .inner_ul {
        display: none;
        position: absolute;
        left: -152px;
        top: 7px;
        box-shadow: 0px 0px 10px #0000004a;
        background: #fff;
        padding: 0px;
        color: #000;
        border-radius: 5px;
    }

    .settings_menu {
        min-width: 3rem !important;
        width: 180px !important;
    }

    .settings_dropdown li {
        list-style: none;
        cursor: pointer;
    }

    .settings_dropdown {
        padding: 0px;
    }

    .top_settings_dropdown {
        width: 157px !important;
    }

    .header_dropdown_toggle:hover {
        background: #f0f0f200 !important;
    }

    /* top header navbar */
    .header_dropdown-toggle {
        color: #fff !important;
    }

    .header_navbar {
        background: #ffffff00;
    }

    .header_navbar_brand {
        color: #0b2b4e !important;
    }

    .header_dropdown_toggle {
        color: #fff !important;
    }

    .header_nav-item a {
        color: #fff !important;
    }

    .header_navbar-nav {
        display: flex;
        gap: 35px;
    }

    @media screen and (min-width: 320px) and (max-width:760px) {
        .header_innerdropdown a {
            background: #124c8b !important;
            position: absolute;
            width: 55px;
            top: 3px;
            color: #fff !important;
        }
    }
</style>

<body class="">
    <!-- Loader Starts -->
    <div id="load_screen">
        <div class="boxes">
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!--  Loader Ends -->
    <!--  Navbar Starts  -->
    <div class="header-container fixed-top">
        <header class="header navbar topbar navbar-expand-sm">
            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                        <i class="las la-bars vd_menu_icons"></i>
                    </a>
                </li>
            </ul>
            <!-- custom styles start -->
            <!-- <ul class="ml-auto navbar-item vb_quicklinks">
                <li class="nav-item vb_quicklink-title text-white">Quick Links &nbsp;&nbsp;&nbsp;<i class="las la-angle-down text-white"></i></li>
                <div class="vb-quick-link">
                    <li class="nav-item">Drivers</li>
                    <li class="nav-item">Vendros</li>
                    <li class="nav-item">Expenses</li>
                    <li class="nav-item">Area Managers</li>
                </div>


            </ul> -->
            <!-- header navbar starts -->
            <!-- <nav class="navbar navbar-expand-lg navbar-light header_navbar">
                <a class="header_navbar_brand navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="header_innerdropdown collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto header_navbar-nav">
                        <li class="nav-item header_nav-item">
                            <a class="nav-link" href="#"><i class="las la-taxi sidebar_icons"></i> &nbsp;Trips</a>
                        </li>
                        <li class="nav-item header_nav-item">
                            <a class="nav-link" href="#"><i class="las la-taxi sidebar_icons"></i> &nbsp;Reports</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link header_dropdown_toggle dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                <i class="las la-taxi sidebar_icons"></i> &nbsp; Bookings <i class="las la-angle-down sidemenu-right-icon"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action </a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav> -->
            <!-- header navbar ends -->

            <!-- custom styles end -->
            <ul class="navbar-item flex-row ml-md-auto">
               
                
                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i style="font-size: 30px; position: relative; top: 6px;" class="las la-user-circle vd_menu_icons"></i>
                        <span class="text-primary login_txt font-12">VRIDEZ USER</span>
                    </a>
                   
                </li>
            </ul>
            <!-- <ul class="navbar-item flex-row">
                <li class="nav-item dropdown header-setting">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle rightbarCollapse" data-placement="bottom">
                        <i class="las la-sliders-h"></i>
                    </a>
                </li>
            </ul> -->
        </header>
    </div>

   

    <div class="main-container" id="container">
        <div class="sidebar-wrapper sidebar-theme whole_sidebar">
            <?php echo $__env->yieldContent('sidebar'); ?>
        </div>
        <div id="content" class="main-content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <!-- Main Container Ends -->
    <!-- Common Script Starts -->

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="<?php echo e(asset('bootstrap/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
    <!-- Common Script Ends -->
    <!-- Page Level Plugin/Script Starts -->
    <script src="<?php echo e(asset('assets/js/loader.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/apex/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/flatpickr/flatpickr.js')); ?>"></script>

    <!-- Page Level Plugin/Script Ends -->

    <!--table script-->

    <script>
        jQuery(document).ready(function() {
            //header settings script starts
            // jQuery('.main_ul').click(function(){
            //     jQuery('.inner_ul').css('display', 'block');
            // });
            jQuery('.main_ul').click(function() {
                if (jQuery(this).hasClass('open_filter')) {
                    jQuery(this).removeClass('open_filter');
                    jQuery('.inner_ul').css('display', 'none');
                } else {
                    jQuery(this).addClass('open_filter');
                    jQuery('.inner_ul').css('display', 'block');
                    // jQuery(".inner_ul").animate({width: '100px', opacity: '0.8'},2000 );

                }
            });
            //header settings script ends
            jQuery('.vb_quicklink-title').click(function() {
                jQuery('.vb-quick-link').toggle();
            });
            jQuery('.vb_rs-open').click(function() {
                jQuery('.vb_rs-list').toggle();
                jQuery('.vb_rs-list').css("animation-duration", "3s");

            });
            jQuery('.fa-cog').click(function() {
                jQuery('.dt-settings-pop').toggle();
            });
            jQuery(".dt-table-th").hover(function() {
                jQuery('.dt-col-resizer').css("height", "100%");
            });
            jQuery('.dt-recodrd-drop').hide();
            jQuery(document).on("click", ".dt-total-records", function() {
                jQuery('.dt-bottom-actions').css({
                    'background': '#2d5d88',
                    "position": "relative",
                    "margin-top": "-83px",
                    "transition-duration": "1s",
                    "border-radius": "0px 0px 10px 10px"
                });
                jQuery('.dt-recodrd-drop').show();
                jQuery(".dt-total-records").addClass("dt-more-active");
                jQuery('.dt-bottom-actions').css({
                    "align-items": "start",
                    "padding": "20px 10px"
                });
            });
            jQuery(document).on("click", ".dt-more-active", function() {
                jQuery('.dt-recodrd-drop').hide();
                jQuery(".dt-total-records").removeClass("dt-more-active");
                jQuery('.dt-bottom-actions').css({
                    'background': '#2d5d88',
                    "position": "relative",
                    "margin-top": "0px",
                    "transition-duration": "1s",
                    "border-radius": "0px 0px 10px 10px"
                });
            });
        });
    </script>
    <!--    <script>-->

    <!--        var tables = document.querySelectorAll('.dt-table');-->
    <!--        for (var i=0; i<tables.length;i++){-->
    <!-- resizableGrid(tables[i]);-->
    <!--}-->
    <!--// resizableGrid(tables);-->
    <!--        function resizableGrid(table) {-->
    <!--         var row = table.getElementsByClassName('dt-table-tr')[0],-->
    <!--         cols = row ? row.children : undefined;-->
    <!--         if (!cols) return;-->

    <!--         table.style.overflow = 'hidden';-->

    <!--         var tableHeight = table.offsetHeight;-->

    <!--         for (var i=0;i<cols.length;i++){-->
    <!--          var div = createDiv(tableHeight);-->
    <!--          cols[i].appendChild(div);-->
    <!--          cols[i].style.position = 'relative';-->
    <!--          setListeners(div);-->
    <!--         }-->

    <!--         function setListeners(div){-->
    <!--          var pageX,curCol,nxtCol,curColWidth,nxtColWidth;-->

    <!--          div.addEventListener('mousedown', function (e) {-->
    <!--           curCol = e.target.parentElement;-->
    <!--           nxtCol = curCol.nextElementSibling;-->
    <!--           pageX = e.pageX; -->

    <!--           var padding = paddingDiff(curCol);-->

    <!--           curColWidth = curCol.offsetWidth - padding;-->
    <!--           if (nxtCol)-->
    <!--            nxtColWidth = nxtCol.offsetWidth - padding;-->
    <!--          });-->

    <!--          div.addEventListener('mouseover', function (e) {-->
    <!--            e.preventDefault()-->
    <!--           e.target.style.borderRight = '2px solid #3cae84';-->
    <!--          })-->

    <!--          div.addEventListener('mouseout', function (e) {-->
    <!--            e.preventDefault()-->
    <!--           e.target.style.borderRight = '';-->
    <!--          })-->

    <!--          document.addEventListener('mousemove', function (e) {-->
    <!--            e.preventDefault()-->
    <!--           if (curCol) {-->
    <!--            var diffX = e.pageX - pageX;-->

    <!--            if (nxtCol)-->
    <!--             nxtCol.style.width = (nxtColWidth - (diffX))+'px';-->

    <!--            curCol.style.width = (curColWidth + diffX)+'px';-->
    <!--           }-->
    <!--          });-->

    <!--          document.addEventListener('mouseup', function (e) { -->
    <!--            e.preventDefault()-->
    <!--           curCol = undefined;-->
    <!--           nxtCol = undefined;-->
    <!--           pageX = undefined;-->
    <!--           nxtColWidth = undefined;-->
    <!--           curColWidth = undefined-->
    <!--          });-->
    <!--         } -->
    <!--         function createDiv(height){-->
    <!--          var div = document.createElement('div');-->
    <!--          div.style.top = 0;-->
    <!--          div.style.right = 0;-->
    <!--          div.style.width = '5px';-->
    <!--          div.style.position = 'absolute';-->
    <!--          div.style.cursor = 'col-resize';-->
    <!--          div.style.userSelect = 'none';-->
    <!--          div.style.height = height + 'px';-->
    <!--          div.classList.add("dt-col-resizer");-->
    <!--          return div;-->
    <!--         }-->
    <!--         function paddingDiff(col){-->

    <!--          if (getStyleVal(col,'box-sizing') == 'border-box'){-->
    <!--           return 0;-->
    <!--          }  -->
    <!--          var padLeft = getStyleVal(col,'padding-left');-->
    <!--          var padRight = getStyleVal(col,'padding-right');-->
    <!--          return (parseInt(padLeft) + parseInt(padRight));-->
    <!--         }-->
    <!--         function getStyleVal(elm,css){-->
    <!--          return (window.getComputedStyle(elm, null).getPropertyValue(css))-->
    <!--         }-->
    <!--        };-->
    <!--        </script>-->
    <!-- header menu scripts -->

    <script>
        jQuery(document).ready(function() {
            jQuery('.dropdown-submenu a.test').on("click", function(e) {
                jQuery(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>

</body>

</html><?php /**PATH C:\xampp\test_tms\resources\views/header.blade.php ENDPATH**/ ?>