
@extends('admin.layouts.admin')

@section('title')
Add Schedule No Two Data - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-10">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.suchitwo.index')}}">All Schedule Two</a></li>
                    <li class="breadcrumb-item active">Add Schedule No Two</li>
                </ol>
                <div class="card mt-4 mb-2">
                    <div class="card-header text-center"><b>Add Schedule No Two</b></div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.suchitwo.store')}}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>1/ </span>মৌজার নাম, খতিয়ান নং,দাগ নং</label>
                                    <input type="text" class="form-control" name="LProperty" id="title" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="title"><span>2/ </span>সম্পত্তির পরিমাণ</label>
                                    <input type="text" class="form-control" name="AProperty" id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>3/ </span>শহর বা থানা</label>
                                    <input type="text" name="CityThana" class="form-control" required/>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>4/ </span>জেলা ও উপজেলা</label>
                                    <input type="text" class="form-control" name="District" id="title" required>
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>5/ </span>দলিলের প্রকার</label>
                                    <input type="text" name="type_of_deed" class="form-control" required/>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>6/ </span>পণের পরিমাণ</label>
                                    <input type="text" name="amount_of_money" class="form-control"  id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>7/ </span>যেখানে নিবন্ধিত হয়েছে</label>
                                    <input type="text" class="form-control" name="WRegisterd" id="title" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>৮/ </span>জেল নাম্বার</label>
                                    <input type="text" class="form-control" name="jailNo" id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="title"><span>৯/ </span>ক্রমিক নং</label>
                                    <input type="text" class="form-control" name="si_no" id="title" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>১০/ </span>সাল</label>
                                    <input type="text" class="form-control" name="year" id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>১১/ </span>বালাম নং</b></label>
                                    <input type="text" class="form-control" name="balam_no" id="title" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>1২/ </span>পৃষ্ঠা নং</b></label>
                                    <input type="text" class="form-control" name="page_no" id="title" required>
                                </div>
                            </div>
                            <br>

                            <button type="submit" class="btn btn-dark">Add Schedule</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

