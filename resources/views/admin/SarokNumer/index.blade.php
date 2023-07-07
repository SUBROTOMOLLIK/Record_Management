
@extends('admin.layouts.admin')

@section('title')
All Bohi No - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Bohi No</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Bohi No</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Bohi No
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.saroknumber.create')}}">Add Bohi</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Bohi No</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sl</th>
                        <th>Bohi No</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>


                @foreach ($sarok as $sar)
                    <tr>
                         <td><?php echo $sar->id; ?></td>
                         <td><?php echo $sar->sarok_no; ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.saroknumber.edit', $sar->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                             <form action="{{route('admin.saroknumber.destroy', $sar->id)}}" onclick="return confirm('Are you sure to delete?')" method="post">
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



