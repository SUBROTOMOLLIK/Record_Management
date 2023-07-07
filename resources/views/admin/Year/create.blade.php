
@extends('admin.layouts.admin')

@section('title')
Add Year - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.year.index')}}">All Year</a></li>
                    <li class="breadcrumb-item active">Create Year</li>
                </ol>
                <div class="card mt-2">
                    <div class="card-header text-center">Create Year</div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.year.store')}}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <div class="form-group mb-3">
                                        <label for="title">Add Year</b></label>
                                        <input type="text" class="form-control" name="year" id="title" required>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Add Year</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

