
@extends('admin.layouts.admin')

@section('title')
Edit Deed notice - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.deednotice.index')}}">All Deed Notice</a></li>
                    <li class="breadcrumb-item active">Edit Deed Notice</li>
                </ol>
                <div class="card mt-2">
                    <div class="card-header text-center">Edit Deed Notice</div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.deednotice.update', $deedNotice->id)}}" method="post" >
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-10 mx-auto mb-2">
                                    <div class="form-group mb-3 mt-2">
                                        <label for="title">Edit Deed Notice</b></label>
                                        <textarea name="name" class="form-control" cols="10" rows="5" required>{{$deedNotice->DeedNotice}}</textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Status</b></label>
                                        <select name="status" id="" class="form-control">
                                            <option value="0" {{($deedNotice->status =='0')? 'selected' : ''}}>Pending</option>
                                            <option value="1" {{($deedNotice->status =='1')? 'selected' : ''}}>Active</option>
                                        </select>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-dark">Update Notice</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
