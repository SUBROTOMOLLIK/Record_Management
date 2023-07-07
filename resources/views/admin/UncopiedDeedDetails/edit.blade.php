
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
                    <li class="breadcrumb-item active">Update Uncopied Deed Details</li>
                </ol>
                <div class="card mt-2">
                    <div class="card-header text-center">Update Uncopied Deed Details</div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.uncopied.update', $UDeed_detail->id)}}" method="post" >
                            <div class="row">
                                @csrf
                                @method('PUT')
                                <div class="col-md-10 mx-auto">
                                    <div class="form-group mb-3">
                                        <label for="title">Year</b></label>
                                        <input type="text" class="form-control" name="Year" value="<?php echo $UDeed_detail->Year;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Sereal No</b></label>
                                        <input type="text" class="form-control" name="Sereal_No" value="<?php echo $UDeed_detail->Sereal_No;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Deed No</b></label>
                                        <input type="text" class="form-control" name="Deed_No" value="<?php echo $UDeed_detail->Deed_No;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Type of Deed</b></label>
                                        <input type="text" class="form-control" name="Type_of_Deed" value="<?php echo $UDeed_detail->Type_of_Deed;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Amount</b></label>
                                        <input type="text" class="form-control" name="Amount" value="<?php echo $UDeed_detail->Amount;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Donar</b></label>
                                        <input type="text" class="form-control" name="Donar" value="<?php echo $UDeed_detail->Donar;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Reciever</b></label>
                                        <input type="text" class="form-control" name="Reciever" value="<?php echo $UDeed_detail->Reciever;?>" id="title" required>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Update Uncopied Deed</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

