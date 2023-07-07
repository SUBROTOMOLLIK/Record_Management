
@extends('admin.layouts.admin')

@section('title')
Add District - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.district.index')}}">All District</a></li>
                    <li class="breadcrumb-item active">Create New District</li>
                </ol>
                <div class="card mt-2">
                    <div class="card-header text-center">Create New District</div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.division.store')}}" method="post" >
                            <div class="row">
                                @csrf
                                <div class="col-md-10 mx-auto">
                                    <div class="form-group mb-3">
                                        <label for="title"> District Name <span class="text-muted">(Bangla)</span></label>
                                        <input type="text" class="form-control" name="bn_name" id="title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title2"> District Name <span class="text-muted">(English)</span></label>
                                        <input type="text" class="form-control" name="name" id="title2" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title"> Division </label>
                                          <select name="thana" class="form-control"  required>
                                            <option value="selected" >Select Division</option>
                                            @foreach ($division as $div)
                                              <option value="<?php echo $div->id;?>"><?php echo $div->bn_name;?></option>
                                            @endforeach
                                          </select>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Add District</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

