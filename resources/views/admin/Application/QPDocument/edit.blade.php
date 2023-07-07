
@extends('admin.layouts.admin')

@section('title')
Inspaction Applications Edit - Admin Panel
@endsection

@section('admin_content')


<!-- page title area end -->

<div class="container">
    <h1 class="mt-2">Inspaction Applications Edit</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.QPDcoument.index')}}">All Inspaction App</a></li>
        <li class="breadcrumb-item active">Edit Inspaction Applications</li>
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
            <div class="card">
                <div class="card-header text-center py-2">{{ __('পরিদর্শনের জন্য আবেদন') }}</div>

                <div class="card-body">
                    <form action="{{route('admin.QPDcoument.update', $qpdeed->id)}}" method="post">
                        @csrf

                        <div class="row">
                            <p><span>১/ </span> আবেদনকারির নামঃ </p>

                            <div class="col-md-6">
                                <label for="desc">বাংলায়</label>
                                <input type="text" name="bn_name" id="desc" value="{{$qpdeed->bn_name}}" class="form-control" required/>
                            </div>
                            <div class="col-md-6">
                                <label for="desc3">ইংরেজিতে </label>
                                <input type="text" name="name" id="desc3" value="{{$qpdeed->name}}" class="form-control" required/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <p><span>2/</span> আবেদনকারির ঠিকানা</p>
                            <div class="col-md-3 mb-3">
                                <label for="desc">বিভাগ </label>
                                <select name="division" class="form-control" required>
                                    @foreach ($divs as $div)
                                    @if($div->id == $qpdeed->division)
                                        <option value="{{$div->id}}" selected>{{$div->bn_name}}</option>
                                    @else
                                    <option value="{{$div->id}}">{{$div->bn_name}}</option>
                                   @endif
                                @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="desc">জেলা</label>
                                <select name="district" class="form-control" required>

                                @foreach ($dists as $dist)
                                    @if($dist->id == $qpdeed->district)
                                        <option value="{{$dist->id}}" selected>{{$dist->bn_name}}</option>
                                    @else
                                    <option value="{{$dist->id}}">{{$dist->bn_name}}</option>
                                   @endif
                                @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="desc">থানা</label>
                                <select name="thana" class="form-control" required>

                                @foreach ($thans as $thana)
                                    @if($thana->id == $qpdeed->thana)
                                        <option value="{{$thana->id}}" selected>{{$thana->bn_name}}</option>
                                    @else
                                    <option value="{{$thana->id}}">{{$thana->bn_name}}</option>
                                   @endif
                                @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 ">
                                <label for="desc">ইউনিয়ন
                                </label>
                                <select name="union" class="form-control" required>

                                @foreach ($unions as $union)
                                    @if($union->id == $qpdeed->union)
                                        <option value="{{$union->id}}" selected>{{$union->bn_name}}</option>
                                    @else
                                    <option value="{{$union->id}}">{{$union->bn_name}}</option>
                                   @endif
                                @endforeach

                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <p><span>৩/</span> আবেদনকারির NID নাম্বার</p>
                                <input type="number" name="nid_name" value="{{$qpdeed->nid_name}}" class="form-control"/>
                            </div>
                            <div class="col-md-6">
                                <p><span>৪/</span> যে সনের জন্য পরিদর্শন </p>
                                <input type="text" name="search_year" value="{{$qpdeed->search_year}}" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-6">
                                <p><span>৫/</span> যে প্রকার দলিলের জন্য পরিদর্শন </p>
                                <select name="type_of_deed" class="form-control" id="">
                                    @foreach($docs as $doc)
                                        @if($doc->id == $qpdeed->type_of_deed)
                                            <option value="{{$doc->id}}" selected>{{$doc->name}}</option>
                                        @else
                                        <option value="{{$doc->id}}">{{$doc->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <p><span>৬/</span> যে সকল ব্যাক্তি বা স্থানের জন্য পরিদর্শন </p>
                                <input type="text" name="serach_inspaction" value="{{$qpdeed->serach_inspaction}}" class="form-control">
                            </div>

                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-6">
                                <p><span>৭ /</span> বহি নং </p>
                                <select name="bohi_no" class="form-control" id="">

                                    @foreach($bohis as $bohi)
                                        @if($bohi->id == $qpdeed->bohi_no)
                                            <option value="{{$bohi->id}}" selected>{{$bohi->sarok_no}}</option>
                                        @else
                                        <option value="{{$bohi->id}}">{{$bohi->sarok_no}}</option>
                                       @endif
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-6">
                                <p><span>৮/</span> কার্যালয়ের নাম  </p>
                                <select name="office_name" class="form-control" id="">

                                    @foreach($OfficeName as $Office)
                                        @if($Office->id == $qpdeed->office_name)
                                            <option value="{{$Office->id}}" selected>{{$Office->OfficeName}}</option>
                                        @else
                                        <option value="{{$Office->id}}">{{$Office->OfficeName}}</option>
                                       @endif
                                    @endforeach

                                </select>
                            </div>

                         </div>
                        <br>
                        <div class="row">
                            <p><span>৯/</span> পরিদর্শন  </p>

                            <div class="col-md-4 mb-3">
                                <label for="desc">দলিল নং</label>
                                <input type="text" name="aplication_deed" value="{{$qpdeed->aplication_deed}}" class="form-control">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="desc">ভলিউম নং</label>
                                <input type="text" name="balam_no" value="{{$qpdeed->balam_no}}" class="form-control">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="desc">পৃষ্ঠা নং</label>
                                <input type="text" name="page_no" value="{{$qpdeed->page_no}}" class="form-control">
                            </div>

                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-6">
                                <p><span>১০/</span> যে কার্যালয়ে নিবন্ধন করা হইয়াছে </p>
                                <select name="register_office" class="form-control" id="">

                                    @foreach($OfficeName as $Office)
                                        @if($Office->id == $qpdeed->register_office)
                                            <option value="{{$Office->id}}" selected>{{$Office->OfficeName}}</option>
                                        @else
                                        <option value="{{$Office->id}}">{{$Office->OfficeName}}</option>
                                       @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <p><span>১১/</span>আবেদনকারির ID </p>
                                <input type="text" name="applicator_id" value="{{$qpdeed->applicator_id}}" class="form-control" readonly/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <p><span>১১/</span>  প্রদত্ত ফি </p>
                            <div class="col-md-4">
                                <label for="h">ব্যাংকের নাম</label>
                                <input type="text" id="h" name="bank_name" value="{{$qpdeed->bank_name}}" class="form-control"/>
                            </div>
                            <div class="col-md-4">
                                <label for="h">ফি প্রদানের তারিখ</label>
                                <input type="date" id="h" name="bank_fees_date" value="{{$qpdeed->bank_fees_date}}" class="form-control"/>
                            </div>
                            <div class="col-md-4">
                                <label for="h">পে অর্ডার নং
                                </label>
                                <input type="text" id="h" name="pay_order" value="{{$qpdeed->pay_order}}" class="form-control"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <p><span>১2/</span> আবেদনের তারিখ </p>
                                <input type="date" class="form-control" name="date" value="{{$qpdeed->date}}" id="img"/>
                            </div>
                            <div class="col-md-6">
                                <p><span>১2/</span> <b> স্ট্যাটাস </b></p>
                                <select name="status" id="" class="form-control">
                                    <option value="0" {{($qpdeed->status =='0')? 'selected' : ''}}>Pending</option>
                                    <option value="1" {{($qpdeed->status =='1')? 'selected' : ''}}>Active</option>
                                </select>

                            </div>
                        </div>
                        </br>

                        <button type="submit" class="btn btn-primary">সাবমিট</button>

                      </form>
                </div>
            </div>
        </div>
    </div>



</div>

@endsection
