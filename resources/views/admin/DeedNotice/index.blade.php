
@extends('admin.layouts.admin')

@section('title')
All Deed Notice - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Deed Notice</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Deed Notice</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Deed Notice
            </span>
            <a class="btn btn-primary text-white float-end" href="{{route('admin.deednotice.create')}}">Add Notice</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Deed Notice</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @php $i = 1; @endphp
                    @foreach ($deedNotice as $deedNotic)
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $deedNotic->DeedNotice; ?></td>
                            <td><?php

                                if($deedNotic->status == 1){
                                    echo 'Active';
                                }else {
                                    echo 'Pending';
                                }

                            ?></td>
                            <td>

                                <a class="btn btn-primary text-white" href="{{route('admin.deednotice.edit', $deedNotic->id)}}" target="_blank" >
                                    <i class="fas fa-pen-to-square"></i>
                                </a>
                                <form action="{{route('admin.deednotice.destroy', $deedNotic->id)}}" onclick="return confirm('Are you sure to delete?')" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger text-white" type="submit"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- page title area end -->

@endsection



