
@extends('admin.layouts.admin')

@section('title')
  All Catalog Registar - Admin Panel
@endsection


@section('admin_content')

<!-- page title area start -->
<div class="container">

    <h1 class="mt-2">All Catalog Registar </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Application</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <span>
            <i class="fas fa-table me-1"></i>
            All Application
            </span>
            <a class="btn btn-dark text-white float-end" href="{{route('admin.catalog.create')}}">Add Catalog</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>ক্রমিক নং</th>
                        <th>অফিসের নাম</th>
                        <th>বহির নাম </th>
                        <th>বই খোলার সন ও তারিখ </th>
                        <th>বালাম নং </th>
                        <th>বালাম খোলার সন </th>
                        <th>প্রত্যেক বইয়ে দলিল সংখ্যা </th>
                        <th> বইটি সমাপ্তির তারিখ </th>
                        <th>লিখিত পৃষ্ঠা সংখ্যা </th>
                        <th>অলিখিত পৃষ্ঠা সংখ্যা</th>
                        <th>সদর মহাফেজখানায় পাঠানোর তারিখ </th>
                        <th>সদর মহাফেজখানায় প্রাপ্তির তারিখ </th>
                        <th>কামরা নং </th>
                        <th>রেক নং </th>
                        <th>সেলফ নং </th>
                        <th>মন্তব্য </th>
                        <th>action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($catalogs as $catalog)
                    <tr>
                        <td><?php echo $catalog->id; ?></td>
                        <td><?php echo $catalog->si_no; ?></td>
                        <td><?php echo $catalog->office_name; ?></td>
                        <td><?php echo $catalog->bohi_name; ?> </td>
                        <td><?php echo $catalog->opening_date; ?></td>
                        <td><?php echo $catalog->balam_no; ?></td>
                        <td><?php echo $catalog->balam_year; ?></td>
                        <td><?php echo $catalog->deed_number_book; ?></td>
                        <td><?php echo $catalog->close_date_book; ?></td>
                        <td><?php echo $catalog->write_page_no; ?></td>
                        <td><?php echo $catalog->unwrite_page_no; ?></td>
                        <td><?php echo $catalog->sending_date_thana ?></td>
                        <td><?php echo $catalog->receving_date_thana; ?></td>
                        <td><?php echo $catalog->kamra_no; ?></td>
                        <td><?php echo $catalog->rack_no; ?></td>
                        <td><?php echo $catalog->self_no; ?></td>
                        <td><?php echo $catalog->comment; ?></td>
                        <td>

                        <a class="btn btn-success text-white" href="{{ route('admin.catalog.edit', $catalog->id)}}" target="_blank" >
                            <i class="fas fa-pen-to-square"></i>
                        </a>


                        <form action="{{route('admin.catalog.destroy', $catalog->id)}}" onclick="return confirm('Are you sure to delete?')" method="post">
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



