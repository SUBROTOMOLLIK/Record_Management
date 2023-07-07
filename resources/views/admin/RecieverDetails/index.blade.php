
@extends('admin.layouts.admin')

@section('title')
All Reciver Details - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Reciver Details</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Reciver Details</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Reciver
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.reciver.create')}}">Add Reciver Details</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>FatherName</th>
                        <th>Address</th>
                        <th>Date of Birth</th>
                        <th>J.L. No</th>
                        <th>Khatian No</th>
                        <th>Dag No</th>
                        <th>No of Deed</th>
                        <th>Type of Deed</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>FatherName</th>
                        <th>Address</th>
                        <th>Date of Birth</th>
                        <th>J.L. No</th>
                        <th>Khatian No</th>
                        <th>Dag No</th>
                        <th>No of Deed</th>
                        <th>Type of Deed</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>


                    @foreach ($recivers as $reciver)
                    <tr>
                         <td><?php echo $reciver->id; ?></td>
                         <td><?php echo $reciver->Name;  ?></td>
                         <td><?php echo $reciver->FatherName;  ?></td>
                         <td><?php echo $reciver->Address;  ?></td>
                         <td><?php echo $reciver->Date_of_Birth;  ?></td>
                         <td><?php echo $reciver->JL_No;  ?></td>
                         <td><?php echo $reciver->KhatianNo;  ?></td>
                         <td><?php echo $reciver->DagNo;  ?></td>
                         <td><?php echo $reciver->No_of_Deed;  ?></td>
                         <td><?php echo $reciver->Type_of_Deed;  ?></td>
                         <td><?php echo $reciver->Year;  ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.reciver.edit', $reciver->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                            <form action="{{route('admin.reciver.destroy', $reciver->id)}}" onclick="return confirm('Are you sure to delete?')" method="post">
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



