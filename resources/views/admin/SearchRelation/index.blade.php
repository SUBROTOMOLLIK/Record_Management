
@extends('admin.layouts.admin')

@section('title')
Search Deed Relation - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">Search Deed Relation</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Search Deed Relation</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Application
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.searchRelation.create')}}">Add SearchRelation</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Serach Relation</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($search_rels as $search_rel)
                    <tr>
                         <td><?php echo $search_rel->id;?></td>
                         <td><?php echo $search_rel->SearchRelation;  ?></td>
                         <td>
                            <?php
                            if($search_rel->status == 1){
                                echo 'Active';
                            }else {
                                echo 'Deactive';
                            }
                            ?>
                         </td>
                         <td>

                             <a class="btn btn-success text-white" href="{{route('admin.searchRelation.edit', $search_rel->id)}}" target="_blank" ><i class="fas fa-pen-to-square"></i></a>

                            <form action="{{route('admin.searchRelation.destroy', $search_rel->id)}}" onclick="return confirm('Are you sure to delete?')" method="post">
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



