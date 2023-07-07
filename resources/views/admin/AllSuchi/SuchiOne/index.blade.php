
@extends('admin.layouts.admin')

@section('title')
All Schedule No One - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Schedule No One</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Schedule No One</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Schedule No One
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.suchione.create')}}">Add Schedule</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="custom-selected">
                <thead>
                    <tr>
                        <th> আইডি</th>
                        <th>ব্যক্তির নাম</th>
                        <th>পিতা বা মাতার নাম</th>
                        <th>ঠিকানা,পদ বা পদবি</th>
                        <th>যে ব্যক্তির স্বার্থ জড়িত</th>
                        <th> যেখানে নিবন্ধিত হয়েছে</th>
                        <th>ক্রমিক নং</th>
                        <th>বালাম নং</th>
                        <th>পৃষ্ঠা নং</th>
                        <th>বছর</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($suchiones as $suchione)
                    <tr>
                         <td><?php echo $suchione->id; ?></td>
                         <td><?php echo $suchione->PName;  ?></td>
                         <td><?php echo $suchione->FName;  ?></td>
                         <td><?php echo $suchione->FAddress;  ?></td>
                         <td><?php echo $suchione->BenPerson;  ?></td>
                         <td><?php echo $suchione->WRegisterd;  ?></td>
                         <td><?php echo $suchione->si_no;  ?></td>
                         <td><?php echo $suchione->balam_no;  ?></td>
                         <td><?php echo $suchione->page_no;  ?></td>
                         <td>
                            @foreach ($year as $item)
                                @if ($item->id == $suchione->year)
                                  <?php echo $item->year;?>
                                @endif
                            @endforeach
                        </td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.suchione.edit', $suchione->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                             <form action="{{route('admin.suchione.destroy', $suchione->id)}}" onclick="return confirm('Are you sure to delete?')" method="post">
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



