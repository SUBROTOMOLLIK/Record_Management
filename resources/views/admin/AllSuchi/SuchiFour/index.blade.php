
@extends('admin.layouts.admin')

@section('title')
All Schedule No Four - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Schedule No Four</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Schedule No Four</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Schedule No Four
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.suchifour.create')}}">Add Schedule</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Person Name</th>
                        <th>Father Name</th>
                        <th>Father Address</th>
                        <th>Personal Interest of Paper</th>
                        <th>SI No</th>
                        <th>Balam No</th>
                        <th>Page No</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($suchifours as $suchifour)
                    <tr>
                         <td><?php echo $i++; ?></td>
                         <td><?php echo $suchifour->PName;  ?></td>
                         <td><?php echo $suchifour->FName;  ?></td>
                         <td><?php echo $suchifour->FAddress;  ?></td>
                         <td><?php echo $suchifour->PerInterest;  ?></td>
                         <td><?php echo $suchifour->si_no;  ?></td>
                         <td><?php echo $suchifour->balam_no;  ?></td>
                         <td><?php echo $suchifour->page_no;  ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.suchifour.edit', $suchifour->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                            <form action="{{route('admin.suchifour.destroy', $suchifour->id)}}" onclick="return confirm('Are you sure to delete?')" method="post">
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



