
@extends('admin.layouts.admin')

@section('title')
Edit Schedule No Three Data - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-10">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.suchithree.index')}}">All Schedule Three</a></li>
                    <li class="breadcrumb-item active">Edit Schedule Three</li>
                </ol>

                <div class="card mt-4 mb-2">
                    <div class="card-header text-center"><b>Edit Schedule No Three</b></div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.suchithree.update', $suchithree->id)}}" method="post" >
                            @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="title"><span>1/ </span>ব্যক্তির নাম</label>
                                    <input type="text" class="form-control" value="{{$suchithree->PName}}" name="PName" id="title" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="title"><span>2/ </span>পিতার নাম</label>
                                    <input type="text" class="form-control" value="{{$suchithree->FName}}" name="FName" id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>3/ </span>ঠিকানা,পদবী</label>
                                    <textarea name="FAddress" class="form-control" cols="10" rows="3">{{$suchithree->FAddress}}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>4/ </span>উইল বা দত্তক পত্রের সাথে স্বার্থ</label>
                                    <input type="text" class="form-control" value="{{$suchithree->WillInterest}}" name="WillInterest" id="title" required>
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>5/ </span>কোথায় রেজিস্ট্রিকৃত</label>
                                    <input type="text" class="form-control" value="{{$suchithree->WRegisterd}}" name="WRegisterd" id="title" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>6/ </span>ক্রমিক নং</label>
                                    <input type="text" class="form-control" value="{{$suchithree->si_no}}" name="si_no" id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>7/ </span>বালাম নং</b></label>
                                    <input type="text" class="form-control" value="{{$suchithree->balam_no}}" name="balam_no" id="title" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>8/ </span>প‍ৃষ্ঠা নং</b></label>
                                    <input type="text" class="form-control" value="{{$suchithree->page_no}}" name="page_no" id="title" required>
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

