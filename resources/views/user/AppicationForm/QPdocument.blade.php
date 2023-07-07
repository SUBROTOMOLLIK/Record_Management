@extends('layouts.app')
@section('content')
<div class="row justify-content-center pt-4">
    <div class="col-md-8">
        <div>
            <div class="card-header text-center py-2">{{ __('পরিদর্শনের জন্য আবেদন') }}</div>
            @include('admin.layouts.parts.messages')
            <div class="card-body">
                <form action="{{route('admin.QPDcoument.store')}}" method="post">
                    @csrf

                    <div class="row">
                        <p><span>১/ </span> আবেদনকারির নাম</p>

                        <div class="col-md-6">
                            <label for="desc">বাংলায়</label>
                            <input type="text" name="bn_name" id="desc" class="form-control" required/>
                        </div>
                        <div class="col-md-6">
                            <label for="desc3">ইংরেজিতে </label>
                            <input type="text" name="name" id="desc3" class="form-control" required/>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <p><span>2/</span> আবেদনকারির ঠিকানা</p>
                        <div class="col-md-3 mb-3">
                            <label for="desc">বিভাগ </label>
                            <select id="division" name="division" class="form-control" required>
                                <option value="">Select Division</option>
                                @foreach ($divisions as $div)
                                  <option value="<?php echo $div->id; ?>"><?php echo $div->bn_name; ?></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="desc">জেলা</label>
                            <select id="district" name="district" class="form-control" required>
                                <option value="">Select District</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="desc">থানা</label>
                            <select id="thana" name="thana" class="form-control" required>
                                <option value="">Select Thana</option>
                            </select>
                        </div>
                        <div class="col-md-3 ">
                            <label for="desc">ইউনিয়ন
                            </label>
                            <select id="union" name="union" class="form-control" required>
                                <option value="">Select Union</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <p><span>৩/</span> আবেদনকারির NID নাম্বার</p>
                            <input type="number" name="nid_name" class="form-control" required/>
                        </div>
                        <div class="col-md-6">
                            <p><span>৪/</span> যে সনের জন্য পরিদর্শন </p>
                            <input type="text" name="search_year" class="form-control" required/>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-6">
                            <p><span>৫/</span> যে প্রকার দলিলের জন্য পরিদর্শন </p>
                            <select name="type_of_deed" class="form-control" required>
                                <option value="">দলিলের প্রকার</option>
                                @foreach ( $docs as $doc )
                                  <option value="{{$doc->id}}">{{$doc->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <p><span>৬/</span> যে সকল ব্যাক্তি বা স্থানের জন্য পরিদর্শন </p>
                            <input type="text" name="serach_inspaction" class="form-control" required>
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-6">
                            <p><span>৭ /</span> বহি নং </p>
                            <select name="bohi_no" class="form-control" required>
                                <option value=""> Select Bohi No</option>
                                    @foreach ($bohis as $bohi)
                                       <option value="{{$bohi->id}}">{{$bohi->sarok_no}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <p><span>৮/</span> কার্যালয়ের নাম</p>
                            <select name="office_name" class="form-control" required>
                                <option value="">Select Office Name</option>
                                @foreach ($OfficeName as $Office)
                                <option value="{{$Office->id}}">{{$Office->OfficeName}}</option>
                                @endforeach

                            </select>
                        </div>

                     </div>
                    <br>
                    <div class="row">
                        <p><span>৯/</span> পরিদর্শন  </p>

                        <div class="col-md-4 mb-3">
                            <label for="desc">দলিল নং</label>
                            <input type="text" name="aplication_deed" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="desc">ভলিউম নং</label>
                            <input type="text" name="balam_no" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="desc">পৃষ্ঠা নং</label>
                            <input type="text" name="page_no" class="form-control" required>
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-6">
                            <p><span>১০/</span> যে কার্যালয়ে নিবন্ধন করা হইয়াছে </p>
                            <select name="register_office" class="form-control" required>
                                <option value="">Select Office Name</option>
                                    @foreach ($OfficeName as $Office)
                                      <option value="{{$Office->id}}">{{$Office->OfficeName}}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <p><span>১2/</span> আবেদনের তারিখ </p>
                            <input type="date" class="form-control" name="date" required/>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <p><span>১১/</span> প্রদত্ত ফি </p>
                        <div class="col-md-4">
                            <label for="h">ব্যাংকের নাম</label>
                            <input type="text" id="h" name="bank_name" class="form-control" required/>
                        </div>
                        <div class="col-md-4">
                            <label for="h">ফি প্রদানের তারিখ</label>
                            <input type="date" id="h" name="bank_fees_date" class="form-control" required/>
                        </div>
                        <div class="col-md-4">
                            <label for="h">পে অর্ডার নং
                            </label>
                            <input type="text" id="h" name="pay_order" class="form-control" required/>
                        </div>
                    </div>
                    </br>

                    <button type="submit" class="btn btn-primary">সাবমিট</button>

                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
