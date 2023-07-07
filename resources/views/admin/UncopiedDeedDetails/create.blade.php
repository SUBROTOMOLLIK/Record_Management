
@extends('admin.layouts.admin')

@section('title')
Add Uncopied Deed Details - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.uncopied.index')}}">All Uncopied Deed Details</a></li>
                    <li class="breadcrumb-item active">Add Uncopied Deed Details</li>
                </ol>
                <div class="card mt-2">
                    <div class="card-header text-center">Add Uncopied Deed Details</div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.uncopied.store')}}" method="post" >
                            <div class="row">
                                @csrf
                                <div class="col-md-10 mx-auto">
                                    <div class="form-group mb-3">
                                        <label for="title">Year</b></label>
                                        <input type="text" class="form-control" name="Year" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Sereal No</b></label>
                                        <input type="text" class="form-control" name="Sereal_No" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Deed No</b></label>
                                        <input type="text" class="form-control" name="Deed_No" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Type of Deed</b></label>
                                        <input type="text" class="form-control" name="Type_of_Deed" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Amount</b></label>
                                        <input type="text" class="form-control" name="Amount" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Donar</b></label>
                                        <input type="text" class="form-control" name="Donar" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Reciever</b></label>
                                        <input type="text" class="form-control" name="Reciever" id="title" required>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Add Uncopied Deed</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

