
@extends('admin.layouts.admin')

@section('title')
Update Delivery Deed Details - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.delivery.index')}}">All Delivery Deed Details</a></li>
                    <li class="breadcrumb-item active">Update Delivery Deed Details</li>
                </ol>
                <div class="card mt-2">
                    <div class="card-header text-center">Update Delivery Deed Details</div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.delivery.update', $DeDeed->id)}}" method="post" >
                            <div class="row">
                                @csrf
                                @method('PUT')
                                <div class="col-md-10">
                                    <div class="form-group mb-3">
                                        <label for="title">Year</b></label>
                                        <input type="text" class="form-control" name="Year" value="<?php echo $DeDeed->Year;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Deed No</b></label>
                                        <input type="text" class="form-control" name="Deed_No" value="<?php echo $DeDeed->Deed_No;?>" id="title" required>
                                    </div>

                                    <button type="submit" class="btn btn-dark">Update Delivery Deed</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

