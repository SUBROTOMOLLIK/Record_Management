
@extends('admin.layouts.admin')

@section('title')
District - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All District</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All District</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All District
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.district.create')}}">Add District</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>District English Name</th>
                        <th>District Bangla Name</th>
                        <th>Division</th>
                        {{-- <th>Status</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sl</th>
                        <th>District English Name</th>
                        <th>District Bangla Name</th>
                        <th>Division</th>
                        {{-- <th>Status</th> --}}
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>


                    @foreach ($district as $dis)
                    <tr>
                         <td><?php echo $dis->id ?></td>
                         <td><?php echo $dis->name  ?></td>
                         <td><?php echo $dis->bn_name  ?></td>
                         <td><?php echo $dis->division_id  ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.district.edit', $dis->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                            {{-- <a class="btn btn-danger text-white" href="{{ route('admin.district.destroy', $dis->id) }}"
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



