
@extends('admin.layouts.admin')

@section('title')
Update Division - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.division.index')}}">All Division</a></li>
                    <li class="breadcrumb-item active">Update division</li>
                </ol>
                <div class="card mt-2">
                    <div class="card-header text-center">Update division</div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.division.update', $div->id)}}" method="post" >
                            <div class="row">
                                @csrf
                                @method("PUT")
                                <div class="col-md-10 mx-auto">
                                    <div class="form-group mb-3">
                                        <label for="title"> Division Name <span class="text-muted">(Bangla)</span></label>
                                        <input type="text" class="form-control" name="bn_name" value="<?php echo $div->bn_name;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title2"> Division Name <span class="text-muted">(English)</span></label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $div->name;?>" id="title2" required>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Edit Division</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

