
@extends('admin.SubAdmin.layouts.subadmin')

@section('title')
Update Deed Copyes - SubAdmin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('subadmin.copydeed.index')}}">All Deed Copyes</a></li>
                    <li class="breadcrumb-item active">Update Deed Copyes</li>
                </ol>
                <div class="card mt-2">
                    <div class="card-header text-center">Update Deed Details</div>
                    @include('admin.SubAdmin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('subadmin.copydeed.update', $CopyType->id)}}" method="post">
                            <div class="row">
                                @csrf
                                @method('PUT')
                                <div class="col-md-10">
                                    <div class="form-group mb-3">
                                        <label for="title">কোন প্রকারের নকল</b></label>
                                        <br>
                                        <select name="DeedCopy" class="form-control mt-2">
                                            <option value="">Select Option</option>
                                            <option value="1" {{($CopyType->DeedCopy == '1')?'Selected':''}}>সাটিফাইড কপি</option>
                                            <option value="2" {{($CopyType->DeedCopy == '2')?'Selected':''}}>বালাম কপি</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="hidden" class="form-control" name="CreatorID" value="{{$CopyType->CreatorID}}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">তারিখ</b></label>
                                        <input type="date" class="form-control" name="Date" value="{{$CopyType->Date}}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">দলিল নং</b></label>
                                        <input type="text" class="form-control" name="Deed_No" value="{{$CopyType->Deed_No}}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">সন</b></label>
                                        <input type="text" class="form-control" name="Year" value="{{$CopyType->Year}}">
                                    </div>

                                    <button type="submit" class="btn btn-dark">Update Copy</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

