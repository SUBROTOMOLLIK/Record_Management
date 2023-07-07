
@extends('admin.SubAdmin.layouts.subadmin')

@section('title')
  All Deed Copy
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Deed Copyes</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('subadmin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Deed Copyes</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Application
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('subadmin.copydeed.create')}}">Create Deed Copy</a>
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                @php
                    $i = 1;
                @endphp
                @foreach ($DeedCopyTypes as $DeedCopyType)
                    <tr>
                         <td><?php echo $i++; ?></td>
                         <td><?php echo $DeedCopyType->Date;  ?></td>
                         <td><?php echo $DeedCopyType->Deed_No;  ?></td>
                         <td><?php echo $DeedCopyType->Year;  ?></td>
                         <td>
                        <?php

                            if ($DeedCopyType->DeedCopy == 1) {
                                echo 'সাটিফাইড কপি' ;
                            }elseif($DeedCopyType->DeedCopy == 2){
                                echo 'বালাম কপি' ;
                            }
                            else {
                                echo 'NA';
                            }

                            ?>
                        </td>
                         <td>
                             <a class="btn btn-success text-white" href="{{route('subadmin.copydeed.edit', $DeedCopyType->id)}}" target="_blank" >
                                <i class="fas fa-pen-to-square"></i>
                            </a>

                            {{-- <a class="btn btn-danger text-white" onclick="return confirm('Are you sure to delete?')" href="{{ route('subadmin.copydeed.destroy', $DeedCopyType->id) }}">
                                <i class="fas fa-trash"></i>
                            </a> --}}

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



