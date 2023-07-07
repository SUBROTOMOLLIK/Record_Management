
@extends('admin.layouts.admin')

@section('title')
All Uncopied Deed Details - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Uncopied Deed Details</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Uncopied Deed Details</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Uncopied Deed Details
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.uncopied.create')}}">Add Uncopied Deed</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Year</th>
                        <th>Sereal No</th>
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


                    @foreach ($UDeed_details as $UDeed_detail)
                    <tr>
                         <td><?php echo $UDeed_detail->id; ?></td>
                         <td><?php echo $UDeed_detail->Year;  ?></td>
                         <td><?php echo $UDeed_detail->Sereal_No;  ?></td>
                         <td><?php echo $UDeed_detail->Deed_No;  ?></td>
                         <td><?php echo $UDeed_detail->Type_of_Deed;  ?></td>
                         <td><?php echo $UDeed_detail->Amount;  ?></td>
                         <td><?php echo $UDeed_detail->Donar;  ?></td>
                         <td><?php echo $UDeed_detail->Reciever;  ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.uncopied.edit', $UDeed_detail->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                            <a class="btn btn-danger text-white" href="{{ route('admin.uncopied.destroy', $UDeed_detail->id) }}"
                                onclick="return confirm('Are you sure to delete?')">
                                <i class="fas fa-trash"></i>
                                </a>

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



