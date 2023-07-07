
@extends('admin.layouts.admin')

@section('title')
Search Applications Edit - Admin Panel
@endsection

@section('admin_content')


<!-- page title area end -->

<div class="container">
    <h1 class="mt-2">Search Applications Edit</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.SDcoument.index')}}">All Search App</a></li>
        <li class="breadcrumb-item active">Edit Search Applications</li>
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
                <div class="card-header text-center py-2">{{ __('তল্লাশের জন্য আবেদন') }}</div>

                <div class="card-body">
                    <form action="{{route('admin.SDcoument.update', $app_search->id)}}" method="post">
                        @csrf

                        <div class="row">
                            <p><span>১/ </span> আবেদনকারির নামঃ </p>

                            <div class="col-md-6">
                                <label for="desc">বাংলায়</label>
                                <input type="text" name="bn_name" id="desc" value="{{$app_search->bn_name}}" class="form-control" required/>
                            </div>
                            <div class="col-md-6">
                                <label for="desc3">ইংরেজিতে </label>
                                <input type="text" name="name" id="desc3" value="{{$app_search->name}}" class="form-control" required/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <p><span>2/</span> আবেদনকারির ঠিকানা</p>
                            <div class="col-md-3 mb-3">
                                <label for="desc">বিভাগ </label>
                                <select name="division" class="form-control" required>
                                    @foreach ($divs as $div)
                                    @if($div->id == $app_search->division)
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
                                    @if($dist->id == $app_search->district)
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
                                    @if($thana->id == $app_search->thana)
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
                                    @if($union->id == $app_search->union)
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
                            <div class="col-md-4">
                                <p><span>৩/</span> জাতীয় পরিচয়পত্র নং </p>
                                <input type="number" name="nid_name" value="{{$app_search->nid_name}}" class="form-control"/>
                            </div>
                            <div class="col-md-4">
                                <p><span>৪/</span> জেল নাম্বার</p>
                                <input type="text" name="jailNo" value="{{$app_search->jailNo}}" class="form-control"/>
                            </div>
                            <div class="col-md-4">
                                <p><span>৫/</span> যে সনের জন্য তল্লাশ  </p>
                                <select multiple class="form-select" aria-label="multiple select option" name="search_year[]" required>
                                    @php
                                        $suchiYear = json_decode($app_search->search_year);
                                    @endphp
                                    @foreach ($yearList as $year)
                                        <option value="{{$year->id}}"{{is_array($suchiYear) && in_array($year->id, $suchiYear)? 'selected' : ''}}>{{$year->year}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-6">
                                <p><span>৬/</span> যে প্রকার দলিলের জন্য তল্লাশ </p>
                                <select name="type_of_deed" class="form-control" id="">
                                @foreach($docs as $doc)
                                    @if($doc->id == $app_search->type_of_deed)
                                        <option value="{{$doc->id}}" selected>{{$doc->name}}</option>
                                    @else
                                    <option value="{{$doc->id}}">{{$doc->name}}</option>
                                   @endif
                                @endforeach


                                </select>
                            </div>
                            <div class="col-md-6">
                                <p><span>৬/</span> যে সকল ব্যাক্তি বা স্থানের জন্য তল্লাশ  </p>
                                <input type="text" name="serach_inspaction" value="{{$app_search->serach_inspaction}}" class="form-control" required>
                            </div>

                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-6">
                                <p><span>৭ /</span> তাল্লাশকারকের সাথে দলিলের সম্পক </p>
                                <select name="search_deed_rel" class="form-control" required>

                                    @foreach($search_rels as $search_rel)
                                        @if($search_rel->id == $app_search->search_deed_rel)
                                            <option value="{{$search_rel->id}}" selected>{{$search_rel->SearchRelation}}</option>
                                        @else
                                        <option value="{{$search_rel->id}}">{{$search_rel->SearchRelation}}</option>
                                       @endif
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-6">
                                <p><span>৮/</span> কার্যালয়ের নাম </p>
                                <select name="office_name" class="form-control" id="">

                                    @foreach($OfficeName as $Office)
                                        @if($Office->id == $app_search->office_name)
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
                            <div class="col-md-6">
                                <p><span>৯/</span> যে কার্যালয়ে নিবন্ধন করা হইয়াছে </p>
                                <select name="register_office" class="form-control" id="">

                                    @foreach($OfficeName as $Office)
                                        @if($Office->id == $app_search->register_office)
                                            <option value="{{$Office->id}}" selected>{{$Office->OfficeName}}</option>
                                        @else
                                        <option value="{{$Office->id}}">{{$Office->OfficeName}}</option>
                                       @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <p><span>১০/</span> আবেদনের তারিখ </p>
                                <input type="date" class="form-control" name="date" value="{{$app_search->date}}" id="img"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <p><span>১১/</span>  প্রদত্ত ফি </p>
                            <div class="col-md-4">
                                <label for="h">ব্যাংকের নাম</label>
                                <input type="text" id="h" name="bank_name" value="{{$app_search->bank_name}}" class="form-control"/>
                            </div>
                            <div class="col-md-4">
                                <label for="h">ফি প্রদানের তারিখ</label>
                                <input type="date" id="h" name="bank_fees_date" value="{{$app_search->bank_fees_date}}" class="form-control"/>
                            </div>
                            <div class="col-md-4">
                                <label for="h">পে অর্ডার নং
                                </label>
                                <input type="text" id="h" name="pay_order" value="{{$app_search->pay_order}}" class="form-control"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <p><span>১২/</span> <b> স্ট্যাটাস </b></p>
                                <select name="status" id="" class="form-control">
                                    <option value="0" {{($app_search->status =='0')? 'selected' : ''}}>Pending</option>
                                    <option value="1" {{($app_search->status =='1')? 'selected' : ''}}>Active</option>
                                </select>

                            </div>
                            <div class="col-md-6">
                                <p><span>১৩/</span> অ্যাকাউন্ট নং </p>
                                <input type="text" class="form-control" name="applicator_id" value="{{$app_search->applicator_id}}" readonly/>
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
