@extends('sidebar')
@section('content')
<style>
    .line {
        border: 1px solid #bfbfbf;
    }

    .result_table {
        display: none;
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
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="vh_heading">
    <div class="row pb-1 px-3">
        <div class="col-lg-6 d-flex align-items-center">
            <h4 class="mb-0">Bucket Suggestions</h4>
        </div>
    </div>
</div>

<div class="container-fluid py-4">
    @foreach($balls as $ball)
    <div class="row pb-2">
        <div class="col-lg-1 text-right pt-2">{{$ball->name}}</div>
        <div class="col-lg-4">
            <input type="text" ball="{{$ball->id}}" class="form-control bucketsuggestions" value="">
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-3">
            <button type="button" class="vd_form_btn btn btn-primary getresults">Place Balls In Bucket</button>
        </div>
    </div>
</div>
<hr class="line">
<div class="row p-3 result_table">
    <div class="col-lg-12">
        <h4 class="mb-0">Results</h4>
    </div>
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
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
</div>
<script>
    jQuery(document).on('click', '.getresults', function () {
        var information = {};
        var i = 0;
        jQuery('.bucketsuggestions').each(function () {
            var value = jQuery(this).val();
            var ball = jQuery(this).attr('ball');
            information[ball] = value;
            i++;
        });
        if (parseInt(i) === 0) {
            alert('Please fill the values');
            return;
        }
        console.log(information);
        var url = "{{ route('results.get')}}";
        jQuery.ajax({
            'url': url,
            'headers': { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
            'method': 'POST',
            'dataType': 'json',
            'data': {
                'information': information,
            },
            success: function (response) {
                console.log(response);
                jQuery('.result_table').css('display', 'block');
            }
        });
    });
</script>
@endsection