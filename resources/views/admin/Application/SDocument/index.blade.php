
@extends('admin.layouts.admin')

@section('title')
All Search Document - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Application of Search Document </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Search Document</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            All Search Document
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>App Id</th>
                        <th>Applicator Name</th>
                        <th>Bn name</th>
                        <th>Name</th>
                        <th>Division</th>
                        <th>District</th>
                        <th>Thana</th>
                        <th>Union</th>
                        <th>NID</th>
                        <th>Jail No</th>
                        <th>Search Year</th>
                        <th>Type of Deed</th>
                        <th>Serach Inspaction</th>
                        <th>Search Deed Relation</th>
                        <th>Office Name</th>
                        <th>Register Office</th>
                        <th>Date</th>
                        <th>Bank Name</th>
                        <th>Fees Deposit Date</th>
                        <th>Pay Order</th>
                        <th>status</th>
                        <th>action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($app_searchs as $app_search)
                    <tr>
                       <td><?php echo $app_search->id;?></td>
                       <td>
                        <?php

                        foreach ($users as $user){
                           if ($app_search->applicator_id == $user->id ){
                              echo $user->name;
                           }
                        }

                        ?>
                       </td>
                       <td><?php echo $app_search->bn_name; ?></td>
                       <td><?php echo $app_search->name; ?></td>
                       <td>
                        <?php

                        foreach ($division as $div){
                           if ($app_search->division == $div->id ){
                              echo $div->bn_name;
                           }
                        }

                        ?>
                       </td>
                       <td>
                       <?php

                       foreach ($district as $dis){
                           if ($app_search->district == $dis->id ){
                              echo $dis->bn_name;
                           }
                        }

                       ?>
                       </td>
                       <td>

                        <?php

                        foreach ($thana as $than){
                           if ($app_search->thana == $than->id ){
                              echo $than->bn_name;
                           }
                        }

                        ?>

                       </td>
                       <td>

                        <?php

                        foreach ($union as $uni){
                           if ($app_search->union == $uni->id ){
                              echo $uni->bn_name;
                           }
                        }

                        ?>
                       </td>
                       <td><?php echo $app_search->nid_name; ?></td>
                       <td><?php echo $app_search->jailNo; ?></td>
                       <td>
                            @php
                            $suchiYear = json_decode($app_search->search_year);
                            @endphp
                            @foreach ($yearList as $year)
                                @if (is_array($suchiYear) && in_array($year->id, $suchiYear))
                                {{$year->year}}
                                @endif
                                {{-- <option value="{{$year->id}}"? 'selected' : ''}}></option> --}}
                            @endforeach
                       </td>
                       <td>
                        <?php

                            foreach ($deeds as  $deed) {
                               if ($app_search->type_of_deed == $deed->id) {
                                  echo $deed->name;
                               }
                            }

                        ?>
                       </td>
                       <td><?php echo $app_search->serach_inspaction; ?></td>
                       <td>
                       <?php

                          foreach ($search_rels as $search_rel) {
                            if ($app_search->search_deed_rel == $search_rel->id) {
                              echo $search_rel->SearchRelation;
                            }
                          }

                       ?>
                       </td>
                       <td>
                        <?php

                          foreach ($officeName as $office_Nam) {
                            if ($app_search->office_name == $office_Nam->id) {
                              echo $office_Nam->OfficeName;
                            }
                          }

                       ?>
                       </td>
                       <td>
                        <?php

                        foreach ($officeName as $office_Nam) {
                          if ($app_search->register_office == $office_Nam->id) {
                            echo $office_Nam->OfficeName;
                          }
                        }

                        ?>
                       </td>
                       <td><?php echo $app_search->date; ?></td>
                       <td><?php echo $app_search->bank_name; ?></td>
                       <td><?php echo $app_search->bank_fees_date; ?></td>
                       <td><?php echo $app_search->pay_order; ?></td>
                       <td>
                            @if($app_search->status == '1')
                                 Active
                            @else
                                Pending..
                            @endif
                        </td>
                         <td>
                             <a class="btn btn-primary text-white" target="_blank" href="{{route('admin.SDcoument.show', $app_search->id)}}"><i class="fa-solid fa-eye"></i></a>
                             <a class="btn btn-success text-white" target="_blank" href="{{route('admin.SDcoument.edit', $app_search->id)}}"><i class="fas fa-pen-to-square"></i></a>
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



