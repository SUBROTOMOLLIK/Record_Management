
@extends('admin.layouts.admin')

@section('title')
Union - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Union</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Union</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Union
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.union.create')}}">Add Division</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Union English Name</th>
                        <th>Union Bangla Name</th>
                        <th>Thana</th>
                        {{-- <th>Status</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sl</th>
                        <th>Union English Name</th>
                        <th>Union Bangla Name</th>
                        <th>Thana</th>
                        {{-- <th>Status</th> --}}
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>


                    @foreach ($Union as $un)
                    <tr>
                         <td><?php echo $un->id; ?></td>
                         <td><?php echo $un->name;  ?></td>
                         <td><?php echo $un->bn_name;  ?></td>
                         <td><?php echo $un->thana_id;  ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.union.edit', $un->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                            {{-- <a class="btn btn-danger text-white" href="{{ route('admin.union.destroy', $un->id) }}"
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



