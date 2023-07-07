
@extends('admin.layouts.admin')

@section('title')
All Inspaction Document - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Application of Document Inspaction </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Application</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            All Application
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>App Id</th>
                        <th>Applicator Name</th>
                        <th>Ban Name</th>
                        <th>Name</th>
                        <th>Division</th>
                        <th>District</th>
                        <th>Thana</th>
                        <th>Union</th>
                        <th>NID</th>
                        <th>Search Year</th>
                        <th>Type of Deed</th>
                        <th>Search Inspaction</th>
                        <th>Bohi No</th>
                        <th>Office Name</th>
                        <th>Aplication Deed</th>
                        <th>voleum no</th>
                        <th>page no</th>
                        <th>register office</th>
                        <th>Date</th>
                        <th>Bank Name</th>
                        <th>Fees Deposit Date</th>
                        <th>Pay Order</th>
                        <th>status</th>
                        <th>action</th>
                    </tr>
                </thead>

                <tbody>


                    @foreach ($qpdeeds as $qpdeed)
                    <tr>
                       <td><?php echo $qpdeed->id;?></td>
                       <td>
                        <?php

                        foreach ($users as $user){
                           if ($qpdeed->applicator_id == $user->id ){
                              echo $user->name;
                           }
                        }

                        ?>

                       </td>
                       <td><?php echo $qpdeed->bn_name; ?></td>
                       <td><?php echo $qpdeed->name; ?></td>
                       <td>

                        <?php

                        foreach ($division as $div){
                           if ($qpdeed->division == $div->id ){
                              echo $div->bn_name;
                           }
                        }

                        ?>

                       </td>
                       <td>
                        <?php

                        foreach ($district as $dis){
                           if ($qpdeed->district == $dis->id ){
                              echo $dis->bn_name;
                           }
                        }

                        ?>
                       </td>
                       <td>
                        <?php

                        foreach ($thana as $than){
                           if ($qpdeed->thana == $than->id ){
                              echo $than->bn_name;
                           }
                        }

                       ?>
                       </td>
                       <td>
                        <?php

                        foreach ($union as $uni){
                           if ($qpdeed->union == $uni->id){
                              echo $uni->bn_name;
                           }
                        }

                       ?>
                       </td>
                       <td><?php echo $qpdeed->nid_name; ?></td>
                       <td><?php echo $qpdeed->search_year; ?></td>
                       <td>
                        <?php

                            foreach ($deeds as $deed) {
                                if ($qpdeed->type_of_deed == $deed->id) {
                                    echo $deed->name;
                                }
                            }

                        ?>
                        </td>
                       <td><?php echo $qpdeed->serach_inspaction; ?></td>
                       <td><?php echo $qpdeed->bohi_no; ?></td>
                       <td>
                       <?php

                        foreach ($officeName as $office_Nam) {
                            if ($qpdeed->office_name == $office_Nam->id) {
                            echo $office_Nam->OfficeName;
                            }
                        }

                       ?>
                       </td>
                       <td><?php echo $qpdeed->aplication_deed; ?></td>
                       <td><?php echo $qpdeed->balam_no; ?></td>
                       <td><?php echo $qpdeed->page_no; ?></td>
                       <td>
                        <?php

                        foreach ($officeName as $office_Nam) {
                          if ($qpdeed->register_office == $office_Nam->id) {
                            echo $office_Nam->OfficeName;
                          }
                        }

                        ?>
                       </td>
                       <td><?php echo $qpdeed->date; ?></td>
                       <td><?php echo $qpdeed->bank_name; ?></td>
                       <td><?php echo $qpdeed->bank_fees_date; ?></td>
                       <td><?php echo $qpdeed->pay_order; ?></td>
                       <td>
                            @if($qpdeed->status == '1')
                                 Active
                            @else
                                Pending..
                            @endif
                        </td>
                         <td>
                             <a class="btn btn-primary text-white" target="_blank" href="{{route('admin.QPDcoument.show', $qpdeed->id)}}"><i class="fa-solid fa-eye"></i></a>
                             <a class="btn btn-success text-white" target="_blank" href="{{route('admin.QPDcoument.edit', $qpdeed->id)}}"><i class="fas fa-pen-to-square"></i></a>

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



