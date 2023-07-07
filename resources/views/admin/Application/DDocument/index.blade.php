
@extends('admin.layouts.admin')

@section('title')
All Duplicate Document - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Application of Duplicate Document</h1>
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
                        <th>Id</th>
                        <th>Applicator Name</th>
                        <th>Bangla Name</th>
                        <th>English Name</th>
                        <th>Register rel</th>
                        <th>Register Date</th>
                        <th>Aplication Number</th>
                        <th>Aplication Date</th>
                        <th>Type of Deed</th>
                        <th>Deed Date</th>
                        <th>Deed number</th>
                        <th>Deed year</th>
                        <th>Bohi no</th>
                        <th>Balam no</th>
                         <th>Bank name</th>
                        <th>Bank fees Date</th>
                        <th>Pay order</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ddeeds as $ddeed)
                    <tr>

                       <td><?php echo $ddeed->id;?></td>
                       <td>
                        @foreach ($users as $item)
                            @if ($item->id == $ddeed->applicator_id)
                                {{$item->name}}
                            @endif
                        @endforeach

                       </td>
                       <td><?php echo $ddeed->bn_name; ?></td>
                       <td><?php echo $ddeed->name; ?> </td>
                       <td><?php echo $ddeed->register_rel; ?></td>
                       <td><?php echo $ddeed->register_date; ?></td>
                       <td><?php echo $ddeed->aplication_number; ?></td>
                       <td><?php echo $ddeed->aplication_date; ?></td>

                       <td>
                        @foreach ($deeds as $item)
                            @if ($item->id == $ddeed->type_of_deed)
                                {{$item->name}}
                            @endif
                        @endforeach
                       </td>

                       <td><?php echo $ddeed->deed_date; ?></td>
                       <td><?php echo $ddeed->deed_number; ?></td>
                       <td><?php echo $ddeed->deed_year; ?></td>
                       <td>
                        @foreach ($bohis as $bohi)
                            @if ($bohi->id == $ddeed->bohi_no)
                                {{$bohi->sarok_no}}
                            @endif
                        @endforeach 
                       </td>
                       <td><?php echo $ddeed->balam_no; ?></td>
                       <td><?php echo $ddeed->bank_name; ?></td>
                       <td><?php echo $ddeed->bank_fees_date; ?></td>
                       <td><?php echo $ddeed->pay_order; ?></td>
                       <td><?php echo $ddeed->date; ?></td>
                       <td>
                        @if($ddeed->status == '1')
                             Active
                        @else
                            Pending..
                        @endif
                    </td>
                         <td>
                            <a class="btn btn-primary text-white" target="_blank" href="{{route('admin.DDcoument.show', $ddeed->id)}}" ><i class="fa-solid fa-eye"></i></a>
                            <a class="btn btn-success text-white" target="_blank" href="{{route('admin.DDcoument.edit', $ddeed->id)}}"><i class="fas fa-pen-to-square"></i></a>
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



