
@extends('admin.layouts.admin')

@section('title')
Thana - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Thana</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Thana</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Thana
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.thana.create')}}">Add Thana</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Thana English Name</th>
                        <th>Thana Bangla Name</th>
                        <th>District</th>
                        {{-- <th>Status</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sl</th>
                        <th>Thana English Name</th>
                        <th>Thana Bangla Name</th>
                        <th>District</th>
                        {{-- <th>Status</th> --}}
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>


                    @foreach ($Thana as $th)
                    <tr>
                         <td><?php echo $th->id; ?></td>
                         <td><?php echo $th->name;  ?></td>
                         <td><?php echo $th->bn_name;  ?></td>
                         <td><?php echo $th->district_id;  ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.thana.edit', $th->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                            {{-- <a class="btn btn-danger text-white" href="{{ route('admin.thana.destroy', $th->id) }}"
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



