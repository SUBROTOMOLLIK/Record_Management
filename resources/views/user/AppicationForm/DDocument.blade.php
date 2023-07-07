@extends('layouts.app')
@section('content')
<div class="row justify-content-center pt-4">
    <div class="col-md-8">
        <div >
            <div class="card-header text-center py-2">{{ __('নকলের জন্য আবেদন') }}</div>
            @include('admin.layouts.parts.messages')
            <div class="card-body">


                  <form action="{{route('admin.DDcoument.store')}}" method="post" >
                    @csrf

                    <div class="row">
                        <p><span>১/ </span> আবেদনকারির নাম</p>

                        <div class="col-md-6">
                            <label for="desc">বাংলায়</label>
                            <input type="text" name="bn_name" id="desc" class="form-control" required/>
                        </div>
                        <div class="col-md-6">
                            <label for="desc2">ইংরেজিতে </label>
                            <input type="text" name="name" id="desc2" class="form-control" required/>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <p><span>2/</span> রেজিস্টার বহি</p>

                        <div class="col-md-6">
                            <label for="desc3">সূত্র</label>
                            <input type="text" name="register_rel" id="desc3" class="form-control"/>
                        </div>
                        <div class="col-md-6">
                            <label for="desc4">তারিখ</label>
                            <input type="date" name="register_date"  class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <p><span>৩/</span> পরিদর্শনের আবেদন নং, তারিখ</p>
                        <div class="col-md-6">
                            <label for="desc"> পরিদর্শনের আবেদন নাম্বার</label>
                            <input type="text" name="aplication_number" id="desc" class="form-control" required/>
                        </div>
                        <div class="col-md-6">
                            <label for="desc"> আবেদনের তারিখ</label>
                            <input type="date" name="aplication_date" class="form-control" required/>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <p><span>৪/</span> দলিল এর প্রকার </p>
                        <div class="col-md-6">
                            <label for="desc"> দলিল এর প্রকার</label>
                            <select name="type_of_deed" class="form-control" required>
                                <option value="">Select  Deed</option>
                                @foreach ( $docs as $doc )
                                  <option value="{{$doc->id}}">{{$doc->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="desc">তারিখ</label>
                            <input type="date" name="deed_date" class="form-control" required>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <p><span>৫/</span> দলিল এর নাম্বার, সন, বহি , ভলিউম </p>
                        <div class="col-md-3">
                            <label for="desc"> নাম্বার</label>
                            <input type="text" name="deed_number" id="desc" class="form-control" required/>
                        </div>
                        <div class="col-md-3">
                            <label for="desc">সন</label>
                            <input type="text" name="deed_year" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label for="desc">বহি নং</label>
                            <select name="bohi_no" class="form-control" required>
                                <option value=""> Select Bohi No</option>
                                    @foreach ($bohis as $bohi)
                                       <option value="{{$bohi->id}}">{{$bohi->sarok_no}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="desc">ভলিউম নং</label>
                            <input type="text" name="balam_no" class="form-control" required />
                        </div>
                    </div>
                   <div class="row">
                        <p><span>৬/</span> প্রদত্ত ফি </p>
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
                     <br>
                    <div class="row">
                        <p><span>৭/</span> আবেদনের তারিখ</p>
                        <div class="col-md-6">
                            <label for="img">আবেদনের তারিখ</label>
                            <input type="date" class="form-control" name="date" required/>
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
