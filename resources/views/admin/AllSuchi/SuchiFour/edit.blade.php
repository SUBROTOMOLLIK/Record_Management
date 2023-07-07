
@extends('admin.layouts.admin')

@section('title')
Edit Schedule No Four Data - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-10">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.suchifour.index')}}">All Schedule Four</a></li>
                    <li class="breadcrumb-item active">Edit Schedule Four</li>
                </ol>

                <div class="card mt-4 mb-2">
                    <div class="card-header text-center"><b>Edit Schedule No Four</b></div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.suchifour.update', $suchifour->id)}}" method="post" >
                            @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="title"><span>1/ </span>Person Name</label>
                                    <input type="text" class="form-control" value="{{$suchifour->PName}}" name="PName" id="title" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="title"><span>2/ </span>Father Name</label>
                                    <input type="text" class="form-control" value="{{$suchifour->FName}}" name="FName" id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>3/ </span>Father Address</label>
                                    <textarea name="FAddress" class="form-control" cols="10" rows="3">{{$suchifour->FAddress}}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>4/ </span>Personal Interest of Paper</label>
                                    <input type="text" class="form-control" value="{{$suchifour->PerInterest}}" name="PerInterest" id="title" required>
                                </div>

                            </div>
                            <br>
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="title"><span>5/ </span>SI No</label>
                                    <input type="text" class="form-control" value="{{$suchifour->si_no}}" name="si_no" id="title" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>6/ </span>Balam No</b></label>
                                    <input type="text" class="form-control" value="{{$suchifour->balam_no}}" name="balam_no" id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="title"><span>7/ </span>Page No</b></label>
                                    <input type="text" class="form-control" value="{{$suchifour->page_no}}" name="page_no" id="title" required>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-dark">Update Schedule</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

