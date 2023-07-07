
@extends('admin.layouts.admin')

@section('title')
All Schedule No Three - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Schedule No Three</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Schedule No Three</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Schedule No Three
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.suchithree.create')}}">Add Schedule</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th>ব্যক্তির নাম</th>
                        <th>পিতার নাম</th>
                        <th>ঠিকানা,পদবী</th>
                        <th>উইল বা দত্তক পত্রের সাথে স্বার্থ</th>
                        <th>কোথায় রেজিস্ট্রিকৃত</th>
                        <th>ক্রমিক নং</th>
                        <th>বালাম নং</th>
                        <th>প‍ৃষ্ঠা নং</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($suchithrees as $suchithree)
                    <tr>
                         <td><?php echo $i++; ?></td>
                         <td><?php echo $suchithree->PName;  ?></td>
                         <td><?php echo $suchithree->FName;  ?></td>
                         <td><?php echo $suchithree->FAddress;  ?></td>
                         <td><?php echo $suchithree->WillInterest;  ?></td>
                         <td><?php echo $suchithree->WRegisterd;  ?></td>
                         <td><?php echo $suchithree->si_no;  ?></td>
                         <td><?php echo $suchithree->balam_no;  ?></td>
                         <td><?php echo $suchithree->page_no;  ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.suchithree.edit', $suchithree->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>


                             <form action="{{route('admin.suchithree.destroy', $suchithree->id)}}" onclick="return confirm('Are you sure to delete?')" method="post">
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



