
@extends("admin.layouts.admin")

@section('title')
Duplicate Applications Edit - Admin Panel
@endsection

@section('admin_content')


<!-- page title area end -->

<div class="container">
    <h1 class="mt-2">Edit Duplicate Applications</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.DDcoument.index')}}">All Duplicate App</a></li>
        <li class="breadcrumb-item active">Edit Duplicate Applications</li>
    </ol>
</div>
@if($errors)
    @foreach($errors->all() as $error)
    <p class="text-danger">{{$error}}</p>
    @endforeach
@endif

@if(Session::has('success'))
    <p class="text-success text-center">{{session('success')}}</p>
@endif
<div class="row justify-content-center my-3">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-header text-center py-2">{{ __('নকলের জন্য আবেদন') }}</div>
            <div class="card-body">


                  <form action="{{route('admin.DDcoument.update', $ddeed->id)}}" method="post" >
                    @csrf
                    <div class="row">
                        <p><span>১/ </span> আবেদনকারির নামঃ </p>

                        <div class="col-md-6">
                            <label for="desc">বাংলায়</label>
                            <input type="text" name="bn_name" value="{{$ddeed->bn_name}}" id="desc" class="form-control" required/>
                        </div>
                        <div class="col-md-6">
                            <label for="desc2">ইংরেজিতে </label>
                            <input type="text" name="name" value="{{$ddeed->name}}" id="desc2" class="form-control" required/>
                            <input type="hidden" name="applicator_id" value="{{$ddeed->applicator_id}}"/>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <p><span>2/</span> রেজিস্টার বহি</p>

                        <div class="col-md-6">
                            <label for="desc3">সূত্র</label>
                            <input type="text" name="register_rel" value="{{$ddeed->register_rel}}" id="desc3" class="form-control"/>
                        </div>
                        <div class="col-md-6">
                            <label for="desc4">তারিখ</label>
                            <input type="date" name="register_date" value="{{$ddeed->register_date}}"  class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <p><span>৩/</span> পরিদর্শনের জন্য আবেদন</p>
                        <div class="col-md-6">
                            <label for="desc">পরিদর্শনের আবেদন নাম্বার</label>
                            <input type="text" name="aplication_number" value="{{$ddeed->aplication_number}}" id="desc" class="form-control"/>
                        </div>
                        <div class="col-md-6">
                            <label for="desc">তারিখ</label>
                            <input type="date" name="aplication_date" value="{{$ddeed->aplication_date}}" class="form-control">
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <p><span>৪/</span> দলিল এর প্রকার </p>
                        <div class="col-md-6">
                            <label for="desc"> দলিল এর প্রকার</label>
                            <select name="type_of_deed" class="form-control" id="">
                                @foreach($docs as $doc)
                                    @if($doc->id == $ddeed->type_of_deed)
                                        <option value="{{$doc->id}}" selected>{{$doc->name}}</option>
                                    @else
                                    <option value="{{$doc->id}}">{{$doc->name}}</option>
                                   @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="desc">তারিখ</label>
                            <input type="date" name="deed_date" value="{{$ddeed->deed_date}}" class="form-control" id="descs">
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <p><span>৫/</span> দলিল এর নাম্বার, সন, বহি , ভলিউম </p>
                        <div class="col-md-3">
                            <label for="desc"> নাম্বার</label>
                            <input type="text" name="deed_number" value="{{$ddeed->deed_number}}" id="desc" class="form-control"/>
                        </div>
                        <div class="col-md-3">
                            <label for="desc">সন</label>
                            <input type="text" name="deed_year" value="{{$ddeed->deed_year}}" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="desc">বহি নং</label>
                            <select name="bohi_no" class="form-control" id="">

                                @foreach($bohis as $bohi)
                                    @if($bohi->id == $ddeed->bohi_no)
                                        <option value="{{$bohi->id}}" selected>{{$bohi->sarok_no}}</option>
                                    @else
                                    <option value="{{$bohi->id}}">{{$bohi->sarok_no}}</option>
                                   @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="desc">ভলিউম নং</label>
                            <input type="text" name="balam_no" value="{{$ddeed->balam_no}}" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <p><span>৬/</span> প্রদত্ত ফি </p>
                        <div class="col-md-4">
                            <label for="h">ব্যাংকের নাম</label>
                            <input type="text" id="h" name="bank_name" value="{{$ddeed->bank_name}}" class="form-control" required/>
                        </div>
                        <div class="col-md-4">
                            <label for="h">ফি প্রদানের তারিখ</label>
                            <input type="date" id="h" name="bank_fees_date" value="{{$ddeed->bank_fees_date}}" class="form-control" required/>
                        </div>
                        <div class="col-md-4">
                            <label for="h">পে অর্ডার নং
                            </label>
                            <input type="text" id="h" name="pay_order" value="{{$ddeed->pay_order}}" class="form-control" required/>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-6">
                            <p><span>৭/আবেদনকারির তারিখ</p>
                            <input type="date" class="form-control" value="{{$ddeed->date}}" name="date" id="img"/>
                        </div>

                        <div class="col-md-6">
                            <p><span>৮/ <b>স্ট্যাটাস</b> </p>
                            <select name="status" class="form-control">
                                <option value="0" {{($ddeed->status =='0')? 'selected' : ''}}>Pending</option>
                                <option value="1" {{($ddeed->status =='1')? 'selected' : ''}}>Active</option>
                            </select>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                          <p><span>৯/</span>আবেদনকারির ID </p>
                          <input type="text" name="applicator_id" value="{{$ddeed->applicator_id}}" class="form-control" readonly/>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">সাবমিট</button>

                  </form>

            </div>
        </div>
    </div>
</div>
@endsection
