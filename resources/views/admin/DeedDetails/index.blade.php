
@extends('admin.layouts.admin')

@section('title')
All Deed Details - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Deed Details</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Deed Details</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Application
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.deed.create')}}">Add Deed Details</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Year</th>
                        <th>Sereal_No</th>
                        <th>Deed No</th>
                        <th>Type of Deed</th>
                        <th>Amount</th>
                        <th>Donar</th>
                        <th>Reciever</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sl</th>
                        <th>Year</th>
                        <th>Sereal_No</th>
                        <th>Deed No</th>
                        <th>Type of Deed</th>
                        <th>Amount</th>
                        <th>Donar</th>
                        <th>Reciever</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>


                    @foreach ($deeds as $deed)
                    <tr>
                         <td><?php echo $deed->id; ?></td>
                         <td><?php echo $deed->Year;  ?></td>
                         <td><?php echo $deed->Sereal_No;  ?></td>
                         <td><?php echo $deed->Deed_No;  ?></td>
                         <td><?php echo $deed->Type_of_Deed;  ?></td>
                         <td><?php echo $deed->Amount;  ?></td>
                         <td><?php echo $deed->Donar;  ?></td>
                         <td><?php echo $deed->Reciever;  ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.deed.edit', $deed->id)}}" target="_blank" >
                                <i class="fas fa-pen-to-square"></i>
                            </a>

                            <form action="{{route('admin.deed.destroy', $deed->id)}}" onclick="return confirm('Are you sure to delete?')" method="post">
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



