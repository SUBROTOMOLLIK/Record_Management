
@extends('admin.layouts.admin')

@section('title')
All Years - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Years</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Years</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Years
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.year.create')}}">Add Year</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Years</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                @php
                $i = 1;
                @endphp

                @foreach ($years as $year)
                    <tr>
                         <td><?php echo $i++; ?></td>
                         <td><?php echo $year->year; ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.year.edit', $year->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                             <form action="{{route('admin.year.destroy', $year->id)}}" onclick="return confirm('Are you sure to delete?')" method="post">
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



