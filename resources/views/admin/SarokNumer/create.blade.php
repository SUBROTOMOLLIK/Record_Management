
@extends('admin.layouts.admin')

@section('title')
Add Bohi No - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.saroknumber.index')}}">All Bohi No</a></li>
                    <li class="breadcrumb-item active">Create Bohi No</li>
                </ol>
                <div class="card mt-2">
                    <div class="card-header text-center">Create Bohi No</div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.saroknumber.store')}}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <div class="form-group mb-3">
                                        <label for="title">Add Bohi No</b></label>
                                        <input type="text" class="form-control" name="name" id="title" required>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Add Bohi No</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

