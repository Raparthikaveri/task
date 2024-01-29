@extends('sidebar')
@section('content')
<div class="vh_heading">
    <div class="row pb-1 px-3">
        <div class="col-lg-6 d-flex align-items-center">
            <h4 class="mb-0">Bucket Form</h4>
        </div>
    </div>
</div>
<form method="post" action="{{ route('bucket.save') }}" enctype="multipart/form-data">
@csrf
<div class="container-fluid py-4">
@if(session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
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

@endsection
