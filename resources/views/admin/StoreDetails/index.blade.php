
@extends('admin.layouts.admin')

@section('title')
All Store Details - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Store Details</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Store Details</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Store Details
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.store.create')}}">Add Store Details</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Rack No</th>
                        <th>Year</th>
                        <th>Balam No</th>
                        <th>Deed No</th>
                        <th>Page No</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sl</th>
                        <th>Rack No</th>
                        <th>Year</th>
                        <th>Balam No</th>
                        <th>Deed No</th>
                        <th>Page No</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>


                    @foreach ($stores as $store)
                    <tr>
                         <td><?php echo $store->id; ?></td>
                         <td><?php echo $store->Rack_No;  ?></td>
                         <td><?php echo $store->Year;  ?></td>
                         <td><?php echo $store->Balam_No;  ?></td>
                         <td><?php echo $store->Deed_No;  ?></td>
                         <td><?php echo $store->Page_No;  ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.store.edit', $store->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                             <form action="{{route('admin.store.destroy', $store->id)}}" onclick="return confirm('Are you sure to delete?')" method="post">
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



