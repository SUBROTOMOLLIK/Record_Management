
@extends('admin.layouts.admin')

@section('title')
Edit Schedule No Two Data - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-10">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.suchitwo.index')}}">All Schedule Two</a></li>
                    <li class="breadcrumb-item active">Edit Schedule No Two</li>
                </ol>
                <div class="card mt-4 mb-2">
                    <div class="card-header text-center"><b>Edit Schedule No Two</b></div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.suchitwo.update', $suchitwo->id)}}" method="post" >
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>1/ </span>Location of Property</label>
                                    <input type="text" class="form-control" value="{{$suchitwo->LProperty}}" name="LProperty" id="title" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="title"><span>2/ </span>Amount of Property</label>
                                    <input type="text" class="form-control" value="{{$suchitwo->AProperty}}" name="AProperty" id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>3/ </span>City Or Thana Name</label>
                                    <input type="text" name="CityThana" value="{{$suchitwo->CityThana}}" class="form-control" required/>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>4/ </span>District</label>
                                    <input type="text" class="form-control" value="{{$suchitwo->District}}" name="District" id="title" required>
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>5/ </span>Type Of Deed</label>
                                    <input type="text" name="type_of_deed" value="{{$suchitwo->type_of_deed}}" class="form-control" required/>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>6/ </span>Amount of money</label>
                                    <input type="text" name="amount_of_money" value="{{$suchitwo->amount_of_money}}" class="form-control"  id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>7/ </span>Where Registerd</label>
                                    <input type="text" class="form-control" value="{{$suchitwo->WRegisterd}}" name="WRegisterd" id="title" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>৮/ </span>জেল নাম্বার</label>
                                    <input type="text" class="form-control" value="{{$suchitwo->jailNo}}" name="jailNo" id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>৯/ </span>ক্রমিক নং</label>
                                    <input type="text" class="form-control"  value="{{$suchitwo->si_no}}" name="si_no" id="title" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>১০/ </span>সাল</label>
                                    <input type="text" class="form-control" value="{{$suchitwo->year}}" name="year" id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>১১/ </span>Balam No</b></label>
                                    <input type="text" class="form-control" value="{{$suchitwo->balam_no}}" name="balam_no" id="title" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>১২/ </span>Page No</b></label>
                                    <input type="text" class="form-control" value="{{$suchitwo->page_no}}" name="page_no" id="title" required>
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

