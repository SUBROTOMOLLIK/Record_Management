
@extends('admin.layouts.admin')

@section('title')
All Deed Details - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Deed Details</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Deed Details</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Application
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.document.create')}}">Add Deed</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Deed Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sl</th>
                        <th>Deed Name</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>

                    @php $i = 1; @endphp
                    @foreach ($document as $doc)
                    <tr>
                         <td><?php echo $i++;  ?></td>
                         <td><?php echo $doc->name;  ?></td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.document.edit', $doc->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                             <form action="{{route('admin.document.destroy', $doc->id)}}" onclick="return confirm('Are you sure to delete?')" method="post">
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



