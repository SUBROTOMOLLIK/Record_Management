
@extends('admin.layouts.admin')

@section('title')
Catalog Registar - Admin Panel
@endsection

@section('admin_content')


<!-- page title area end -->

<div class="container">
    <h1 class="mt-2">Catalog Registar</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.catalog.index')}}">All Catalog Registar</a></li>
        <li class="breadcrumb-item active">Create Catalog Registar</li>
    </ol>

    @if($errors)
    @foreach($errors->all() as $error)
      <p class="text-danger">{{$error}}</p>
    @endforeach
    @endif

    @if(Session::has('success'))
    <p class="text-success text-center">{{session('success')}}</p>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-10 mx-auto">
            <div class="card my-4">
                <div class="card-header text-center py-2">Create Catalog Registar</div>

                <div class="card-body">
                    <form action="{{route('admin.catalog.store')}}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <label for="desc3">ক্রমিক নং</label>
                                <input type="text" name="si_no" id="desc3" class="form-control"/>
                            </div>
                            <div class="col-md-6">
                                <label for="desc">অফিসের নাম</label>
                                <input type="text" name="office_name" id="desc"  class="form-control"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="desc2">বই খোলার সন ও তারিখ</label>
                                <input type="date" name="opening_date" id="desc2" class="form-control"/>
                            </div>
                            <div class="col-md-6">
                                <label for="desc3">বহির নাম</label>
                                <input type="text" name="bohi_name" id="desc" class="form-control"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="desc3">বালাম নং</label>
                                <input type="text" name="balam_no" id="desc" class="form-control"/>
                            </div>
                            <div class="col-md-6">
                                <label for="desc3">বালামের সন ও তারিখ</label>
                                <input type="date" name="balam_year" id="desc" class="form-control"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="des">প্রত্যেক বইয়ে দলিল সংখ্যা</label>
                                <input type="text" name="deed_number_book" id="des" class="form-control"/>
                            </div>
                            <div class="col-md-6">
                                <label for="de">বইটি সমাপ্তির তারিখ </label>
                                <input type="date" name="close_date_book" id="de" class="form-control"/>
                                </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="desc3">লিখিত পৃষ্ঠা সংখ্যা</label>
                                <input type="text" name="write_page_no" id="desc" class="form-control"/>
                            </div>
                            <div class="col-md-6">
                                <label for="desc3"> অলিখিত পৃষ্ঠা সংখ্যা</label>
                                <input type="text" name="unwrite_page_no" id="desc" class="form-control"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="desc3">সদর মহাফেজ খানায় পাঠানোর তারিখ</label>
                                <input type="date" name="sending_date_thana" id="desc" class="form-control"/>
                            </div>
                            <div class="col-md-6">
                                <label for="desc3">সদর মহাফেজখানায় প্রাপ্তির তারিখ</label>
                                <input type="date" name="reciving_date_thana" id="desc" class="form-control"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="desc3">কামরা নং</label>
                                <input type="text" name="kamra_no" id="desc" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                <label for="desc3">রেক নং</label>
                                <input type="text" name="rack_no" id="desc" class="form-control" />
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="desc3">সেলফ নং</label>
                                <input type="text" name="self_no" id="desc" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                <label for="d">মন্তব্য</label>
                                <textarea name="comment" id="d" cols="10" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary">Add Catalog</button>

                      </form>
                </div>
            </div>
        </div>
    </div>



</div>

@endsection
