@extends('admin.SubAdmin.layouts.subadmin')
@section('title')
  Sub Admin- Dashboard
@endsection

@section('admin_content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row ">


                 {{-- Inspaction Application Strat --}}

                 <div class="col-xl-4 col-md-4">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">All Application For Search</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link text-decoration-none">{{App\Models\SDocument::count()}}</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-4">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body">Search Application Pending</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link text-decoration-none">{{App\Models\SDocument::where('status','0')->count()}}</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-4">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Search Application Aproved</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link text-decoration-none" >{{App\Models\SDocument::where('status','1')->count()}}</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
             {{-- Inspaction Application End --}}

         {{-- Inspaction Application Strat --}}

            <div class="col-xl-4 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">All Application For Inspaction</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link text-decoration-none">{{App\Models\SearchDeed::count()}}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body">Inspaction Application Pending</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link text-decoration-none">{{App\Models\SearchDeed::where('status','0')->count()}}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Inspaction Application Aproved</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link text-decoration-none">{{App\Models\SearchDeed::where('status','1')->count()}}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
         {{-- Inspaction Application End --}}

         {{-- Duplicate Application Start --}}
            <div class="col-xl-4 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">All Application For Duplicate </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                         <a class="small text-white stretched-link text-decoration-none">{{App\Models\DuplicateDeed::count()}}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body">Duplicate Application Pending</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link text-decoration-none">{{App\Models\DuplicateDeed::where('status','0')->count();}}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Duplicate Application Aproved</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link text-decoration-none">{{App\Models\DuplicateDeed::where('status','1')->count();}}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

        {{-- Duplicate Application End --}}

        </div>

    </div>
</main>
@endsection
