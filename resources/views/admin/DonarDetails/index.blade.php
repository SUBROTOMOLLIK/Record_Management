
@extends('admin.layouts.admin')

@section('title')
All Donar Details - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Donar Details</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Donar Details</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Donar
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.donar.create')}}">Add Donar Details</a>
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


                    @foreach ($donars as $donar)
                    <tr>
                         <td><?php echo $donar->id; ?></td>
                         <td><?php echo $donar->Name;  ?></td>
                         <td><?php echo $donar->FatherName;  ?></td>
                         <td><?php echo $donar->Address;  ?></td>
                         <td><?php echo $donar->Date_of_Birth;  ?></td>
                         <td><?php echo $donar->JL_No;  ?></td>
                         <td><?php echo $donar->KhatianNo;  ?></td>
                         <td><?php echo $donar->DagNo;  ?></td>
                         <td><?php echo $donar->No_of_Deed;  ?></td>
                         <td><?php echo $donar->Type_of_Deed;  ?></td>
                         <td><?php echo $donar->Year;  ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.donar.edit', $donar->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                            <a class="btn btn-danger text-white" href="{{ route('admin.donar.destroy', $donar->id) }}"
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



