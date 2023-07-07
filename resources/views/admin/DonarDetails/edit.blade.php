
@extends('admin.layouts.admin')

@section('title')
Update Donar Details - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.donar.index')}}">All Donar Details</a></li>
                    <li class="breadcrumb-item active">Update Donar Details</li>
                </ol>
                <div class="card mt-2">
                    <div class="card-header text-center">Update Donar Details</div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.donar.update', $donar->id)}}" method="post" >
                            <div class="row">
                                @csrf
                                @method('PUT')
                                <div class="col-md-10 mx-auto">
                                    <div class="form-group mb-3">
                                        <label for="title">Name</b></label>
                                        <input type="text" class="form-control" name="Name" value="<?php echo $donar->Name;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Father Name</b></label>
                                        <input type="text" class="form-control" name="FatherName" value="<?php echo $donar->FatherName;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Address</b></label>
                                        <textarea name="Address" class="form-control" cols="10" rows="5"><?php echo $donar->Address;?></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Date of Birth</b></label>
                                        <input type="date" class="form-control" name="Date_of_Birth" value="<?php echo $donar->Date_of_Birth;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">J.L. No</b></label>
                                        <input type="text" class="form-control" name="JL_No" value="<?php echo $donar->JL_No;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Khatian No</b></label>
                                        <input type="text" class="form-control" name="KhatianNo" value="<?php echo $donar->KhatianNo;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Dag No</b></label>
                                        <input type="text" class="form-control" name="DagNo" value="<?php echo $donar->DagNo;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">No of Deed</b></label>
                                        <input type="text" class="form-control" name="No_of_Deed" value="<?php echo $donar->No_of_Deed;?>" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Type of Deed</b></label>
                                        <input type="text" class="form-control" name="Type_of_Deed" value="<?php echo $donar->Type_of_Deed;?>" id="title" required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="title">Year</b></label>
                                        <input type="text" class="form-control" name="Year" value="<?php echo $donar->Year;?>" id="title" required>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Update Deed Details</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

