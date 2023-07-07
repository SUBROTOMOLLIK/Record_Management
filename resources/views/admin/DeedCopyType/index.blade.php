
@extends('admin.layouts.admin')

@section('title')
All Deed Copyes -- Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Deed Copyes</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Deed Copyes</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Application
            </span>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>তারিখ</th>
                        <th>দলিল নং</th>
                        <th>সন</th>
                        <th>কোন প্রকারের নকল</th>
                        <th> নকলকারির নাম </th>
                        <th>অ্যাকশান</th>
                    </tr>
                </thead>
                <tbody>

                @php
                    $i = 1;
                @endphp
                @foreach ($DeedCopyes as $DeedCopye)
                    <tr>
                         <td><?php echo $i++; ?></td>
                         <td><?php echo $DeedCopye->Date;  ?></td>
                         <td><?php echo $DeedCopye->Deed_No;  ?></td>
                         <td><?php echo $DeedCopye->Year;  ?></td>
                         <td><?php
                         if ($DeedCopye->DeedCopy == 1)
                         {
                            echo "সাটিফাইড কপি";
                         }
                         elseif ($DeedCopye->DeedCopy == 2)
                         {
                            echo "বালাম কপি";
                         }
                         else {
                            echo 'Nall';
                         }

                         ?></td>
                         <td>

                            <?php

                            foreach ($users as $key => $user) {
                                if($DeedCopye->CreatorID == $user->id)
                                {
                                    echo $user->name;
                                }
                            }

                            ?>

                        </td>
                         <td>

                            <a class="btn btn-success text-white" href="{{route('editCopydeed', $DeedCopye->id)}}"><i class="fas fa-pen-to-square"></i></a>

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



