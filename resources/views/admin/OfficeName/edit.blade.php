
@extends('admin.layouts.admin')

@section('title')
Update Office Name - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.office.index')}}">All Office Name</a></li>
                    <li class="breadcrumb-item active">Update Office Name</li>
                </ol>
                <div class="card mt-2">
                    <div class="card-header text-center">Update Office Name</div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.office.update', $OfficeName->id)}}" method="post" >
                            <div class="row">
                                @csrf
                                @method("PUT")
                                <div class="col-md-10 mx-auto">
                                    <div class="form-group mb-3">
                                        <label for="title">Office Name</b></label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $OfficeName->OfficeName; ?>" id="title" required>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Update Office</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

