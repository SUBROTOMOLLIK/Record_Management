
@extends('admin.layouts.admin')

@section('title')
Add Document Name - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.document.index')}}">All Deed Name</a></li>
                    <li class="breadcrumb-item active">Create New Deed Name</li>
                </ol>
                <div class="card mt-2">
                    <div class="card-header text-center">Create New Deed Name</div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.document.store')}}" method="post" >
                            <div class="row">
                                @csrf
                                <div class="col-md-10 mx-auto">
                                    <div class="form-group mb-3">
                                        <label for="title">Add Deed Name</b></label>
                                        <input type="text" class="form-control" name="name" id="title" required>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Add Deed</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

