
@extends("admin.layouts.admin")

@section('title')
Duplicate Applications - Admin Panel
@endsection

@section('admin_content')


<!-- page title area end -->

<div class="container">
    <h1 class="mt-2">Duplicate Applications</h1>
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
    <div class="col-md-10">
        <div class="card">
            <div class="card-header text-center py-2">{{ __('নকলের জন্য আবেদন') }}</div>
            <div class="card-body">


                  <form action="{{route('admin.DDcoument.update', $ddeed->id)}}" method="post" >
                    @csrf
                    <div class="row">
                        <p><span>১/ </span> আবেদনকারির নামঃ </p>

                        <div class="col-md-6">
                            <p><b>বাংলায়ঃ </b> {{$ddeed->bn_name}}</p>
                        </div>
                        <div class="col-md-6">
                            <p><b>ইংরেজিতেঃ </b> {{$ddeed->name}}</p>

                        </div>
                    </div>

                    <div class="row">
                        <p><span>2/</span> রেজিস্টার বহি</p>

                        <div class="col-md-6">
                            <p><b>সূত্রঃ </b> {{$ddeed->register_rel}}</p>
                        </div>
                        <div class="col-md-6">
                            <p><b>তারিখঃ </b> {{$ddeed->register_date}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <p><span>৩/</span> পরিদর্শনের জন্য আবেদন</p>
                        <div class="col-md-6">
                            <p><b>পরিদর্শনের আবেদন নাম্বারঃ </b> {{$ddeed->aplication_number}}</p>
                        </div>
                        <div class="col-md-6">
                            <p><b>তারিখঃ </b> {{$ddeed->aplication_date}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <p><span>৪/</span> দলিল এর প্রকার </p>
                        <div class="col-md-6">
                            <p><b>দলিল এর প্রকারঃ </b>
                                @foreach($docs as $doc)
                                    @if($doc->id == $ddeed->type_of_deed)
                                        {{$doc->name}}
                                    @endif
                                @endforeach
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p><b>তারিখঃ </b> {{$ddeed->deed_date}}</b>
                        </div>
                    </div>

                    <div class="row">
                        <p><span>৫/</span> দলিল এর নাম্বার, সন, বহি , ভলিউম </p>
                        <div class="col-md-3">
                            <p><b>নাম্বারঃ </b> {{$ddeed->deed_number}}</p>

                        </div>
                        <div class="col-md-3">
                            <p><b>সনঃ </b> {{$ddeed->deed_year}}</p>

                        </div>
                        <div class="col-md-3">
                            <p><b>বহি নংঃ </b>
                                @foreach($bohis as $bohi)
                                    @if($bohi->id == $ddeed->bohi_no)
                                        {{$bohi->sarok_no}}
                                    @endif
                                @endforeach
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p><b>ভলিউম নংঃ </b>
                                {{$ddeed->balam_no}}
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <p><span>৬/</span> প্রদত্ত ফি </p>
                        <div class="col-md-6">
                            <p> <b>ব্যাংকের নামঃ </b>
                                {{$ddeed->bank_name}}
                            </p>

                        </div>
                        <div class="col-md-6">
                            <p> <b>ফি প্রদানের তারিখঃ </b>
                                {{$ddeed->bank_fees_date}}
                            </p>

                        </div>
                        <div class="col-md-4">
                            <p><b>পে অর্ডার নংঃ </b>
                                {{$ddeed->pay_order}}
                            </p>

                        </div>
                    </div>

                    <div class="row">
                        <p><span>৭/আবেদনকারির তারিখ ও স্ট্যাটাস</p>
                        <div class="col-md-6">
                            <p><b>আবেদনকারির তারিখঃ </b>
                                {{$ddeed->date}}
                            </p>

                        </div>

                        <div class="col-md-6">
                            <p><b>স্ট্যাটাসঃ </b>
                            @if ($ddeed->status =='1')
                                 Active
                                @else
                                Pending
                            @endif

                            </p>
                        </div>

                    </div>

                    <div class="row">
                        <p><span>৮/</span>আবেদনকারির ID </p>
                        <div class="col-md-6">
                          <p><b>আবেদনকারির আইডিঃ </b>
                            {{$ddeed->applicator_id}}
                         </p>

                        </div>
                    </div>
                    <br>

                  </form>

            </div>
        </div>
    </div>
</div>
@endsection
