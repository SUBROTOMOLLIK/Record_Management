
@extends('admin.layouts.admin')

@section('title')
All Schedule No Two - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Schedule No Two</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Schedule No Two</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Schedule No Two
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.suchitwo.create')}}">Add Schedule</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>মৌজার নাম,খতিয়ান নং,দাগ নং </th>
                        <th>সম্পত্তির পরিমাণ</th>
                        <th>শহর বা থানা</th>
                        <th>জেলা ও উপজেলা</th>
                        <th>দলিেলর প্রকার</th>
                        <th>পণের পরিমাণ</th>
                        <th>যেখানে নিবন্ধিত হয়েছে</th>
                        <th>জেল নাম্বার</th>
                        <th>ক্রমিক নং </th>
                        <th>সাল</th>
                        <th>বালাম নং</th>
                        <th>পৃষ্ঠা নং</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($suchitwos as $suchitwo)
                    <tr>
                         <td><?php echo $i++; ?></td>
                         <td><?php echo $suchitwo->LProperty;  ?></td>
                         <td><?php echo $suchitwo->AProperty;  ?></td>
                         <td><?php echo $suchitwo->CityThana;  ?></td>
                         <td><?php echo $suchitwo->District;  ?></td>
                         <td><?php echo $suchitwo->type_of_deed;  ?></td>
                         <td><?php echo $suchitwo->amount_of_money;  ?></td>
                         <td><?php echo $suchitwo->WRegisterd;  ?></td>
                         <td><?php echo $suchitwo->jailNo;  ?></td>
                         <td><?php echo $suchitwo->si_no;  ?></td>
                         <td><?php echo $suchitwo->year;  ?></td>
                         <td><?php echo $suchitwo->balam_no;  ?></td>
                         <td><?php echo $suchitwo->page_no;  ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.suchitwo.edit', $suchitwo->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                            <a class="btn btn-danger text-white" href="{{ route('admin.suchitwo.destroy', $suchitwo->id) }}"
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



