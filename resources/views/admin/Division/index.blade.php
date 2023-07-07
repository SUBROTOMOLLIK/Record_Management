
@extends('admin.layouts.admin')

@section('title')
Division - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Division</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Division</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Application
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.division.create')}}">Add Division</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Division English Name</th>
                        <th>Division Bangla Name</th>
                        {{-- <th>Status</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sl</th>
                        <th>Division English Name</th>
                        <th>Division Bangla Name</th>
                        {{-- <th>Status</th> --}}
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>


                    @foreach ($division as $div)
                    <tr>
                         <td><?php echo $div->id ?></td>
                         <td><?php echo $div->name  ?></td>
                         <td><?php echo $div->bn_name  ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.division.edit', $div->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                            {{-- <a class="btn btn-danger text-white" href="{{ route('admin.division.destroy', $div->id) }}"
                                onclick="return confirm('Are you sure to delete?')">
                                <i class="fas fa-trash"></i>
                            </a> --}}

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



