
@extends('admin.layouts.admin')

@section('title')
Edit Schedule No One Data - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-10">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.suchione.index')}}">All Schedule One</a></li>
                    <li class="breadcrumb-item active">Edit Schedule One</li>
                </ol>

                <div class="card mt-4 mb-2">
                    <div class="card-header text-center"><b>Edit Schedule No One</b></div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.suchione.update', $suchione->id)}}" method="post" >
                            @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="title"><span>1/ </span>Person Name</label>
                                    <input type="text" class="form-control" value="{{$suchione->PName}}" name="PName" id="title" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="title"><span>2/ </span>Father Name</label>
                                    <input type="text" class="form-control" value="{{$suchione->FName}}" name="FName" id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>3/ </span> Address</label>
                                    <textarea name="FAddress" class="form-control" cols="10" rows="3">{{$suchione->FAddress}}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>4/ </span>Benefited Person</label>
                                    <input type="text" class="form-control" value="{{$suchione->BenPerson}}" name="BenPerson" id="title" required>
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>5/ </span>Where Registerd</label>
                                    <input type="text" class="form-control" value="{{$suchione->WRegisterd}}" name="WRegisterd" id="title" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>6/ </span>SI No</label>
                                    <input type="text" class="form-control" value="{{$suchione->si_no}}" name="si_no" id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title"><span>7/ </span>সাল</label>
                                    <select  class="form-control" name="year" id="">
                                        <option value="">Selct Year</option>
                                        @foreach ($years as $item)
                                            @if ($item->id == $suchione->year)
                                               <option selected value="{{$item->id}}">{{$item->year}}</option>
                                            @else
                                               <option value="{{$item->id}}">{{$item->year}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="title"><span>8/ </span>Balam No</b></label>
                                    <input type="text" class="form-control" value="{{$suchione->balam_no}}" name="balam_no" id="title" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="title"><span>9/ </span>Page No</b></label>
                                    <input type="text" class="form-control" value="{{$suchione->page_no}}" name="page_no" id="title" required>
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

