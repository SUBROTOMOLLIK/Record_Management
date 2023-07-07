
@extends('admin.layouts.admin')

@section('title')
 Search Deed Relation - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('admin.searchRelation.index')}}">All Search Deed Relation</a></li>
                    <li class="breadcrumb-item active">Search Deed Relation Name</li>
                </ol>
                <div class="card mt-2">
                    <div class="card-header text-center">Search Deed Relation</div>
                    @include('admin.layouts.parts.messages')
                    <div class="card-body">
                        <form action="{{route('admin.searchRelation.store')}}" method="post" >
                            <div class="row">
                                @csrf
                                <div class="col-md-10 mx-auto">
                                    <div class="form-group mb-3">
                                        <label for="title">Search Deed Relation</b></label>
                                        <input type="text" class="form-control" name="SearchRelation" id="title" required>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Add Relation</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

