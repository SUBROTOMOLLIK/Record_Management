
@extends('admin.layouts.admin')

@section('title')
  Users List
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2"> Users List</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Users List</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Users List
            </span>
            <a></a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ইউজারের নাম</th>
                        <th>ইমেইল অ্যাড্রেস</th>
                        <th>মোবাইল নাম্বার</th>
                        <th>অ্যাড্রেস</th>
                        <th>স্ট্যাটাস</th>
                        <th>পরিবর্তন</th>
                    </tr>
                </thead>
                <tbody>

                <?php $i = 1; ?>
                @foreach ($users as $user)
                    <tr>
                         <td><?php echo $i++; ?></td>
                         <td><?php echo $user->name;  ?></td>
                         <td><?php echo $user->email;  ?></td>
                         <td><?php echo $user->phone;  ?></td>
                         <td><?php echo $user->address;  ?></td>
                         <td><?php

                         if ($user->isActive == 1) {
                            echo 'Active' ;
                         }else {
                            echo 'Deactive' ;
                         }


                         ?></td>
                          <td>

                             <a class="btn btn-success text-white" href="{{route('useredit', $user->id)}}" target="_blank" >
                                <i class="fas fa-pen-to-square"></i>
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



