
@extends('admin.layouts.admin')

@section('title')
Inspaction Applications - Admin Panel
@endsection

@section('admin_content')

<div class="container">
    <h1 class="mt-2">Search Applications Edit</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.QPDcoument.index')}}">All Search App</a></li>
        <li class="breadcrumb-item active">Edit Search Applications</li>
    </ol>


    <div class="row justify-content-center my-3">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header text-center py-2">{{ __('আবেদনকারির ডিটেইলস') }}</div>
                <div class="card-body">

                        <div class="row">
                            <p><span>১/ </span> আবেদনকারির নাম</p>

                            <div class="col-md-6">
                               <p><b>বাংলায়ঃ </b> {{$qpdeed->bn_name}} </p>
                            </div>
                            <div class="col-md-6">
                                <p><b>ইংরেজিতেঃ </b> {{$qpdeed->name}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <p><span>2/</span> আবেদনকারির ঠিকানা</p>
                            <div class="col-md-4 ">
                                <p><b>বিভাগঃ</b>

                                @foreach ($divs as $div)
                                    @if($div->id == $qpdeed->division)
                                        {{$div->bn_name}}
                                    @endif
                                @endforeach

                                </p>

                            </div>
                            <div class="col-md-4 ">
                                <p><b>জেলাঃ </b>
                                    @foreach ($dists as $dist)
                                        @if($dist->id == $qpdeed->district)
                                            {{$dist->bn_name}}
                                        @endif
                                    @endforeach
                                </p>
                            </div>

                            <div class="col-md-4 ">
                                <p><b>থানাঃ </b>
                                @foreach ($thans as $thana)
                                    @if($thana->id == $qpdeed->thana)
                                      {{$thana->bn_name}}
                                   @endif
                                @endforeach
                                </p>

                            </div>
                            <div class="col-md-4 ">
                                <p><b>ইউনিয়নঃ </b>

                                @foreach ($unions as $union)
                                    @if($union->id == $qpdeed->union)
                                        {{$union->bn_name}}
                                   @endif
                                @endforeach

                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <p> <span>৩/</span> NID নাম্বার ও যে সনের জন্য পরিদর্শন</p>
                            <div class="col-md-6">
                                <p><b>NID নাম্বারঃ </b>
                                    {{$qpdeed->nid_name}}
                                </p>

                            </div>
                            <div class="col-md-6">
                                <p><b>পরিদর্শন সনঃ </b>
                                    {{$qpdeed->search_year}}
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <p><span>৪/</span> যে প্রকার দলিলের জন্য পরিদর্শন ও যে সকল ব্যাক্তি বা স্থানের জন্য পরিদর্শন</p>
                            <div class="col-md-6">
                                <p><b>দলিলের প্রকারঃ </b>
                                @foreach($docs as $doc)
                                    @if($doc->id == $qpdeed->type_of_deed)
                                        {{$doc->name}}
                                    @endif
                                @endforeach
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p><b>পরিদর্শন ব্যাক্তি বা স্থানঃ </b>
                                    {{$qpdeed->serach_inspaction}}
                                </p>
                            </div>

                        </div>

                        <div class="row">
                            <p><span> ৫/</span> বহি নং ও যে কার্যালয়ে নিবন্ধন করা হইয়াছে </p>
                            <div class="col-md-6">
                                <p><b>বহি নংঃ</b>

                                    @foreach($bohis as $bohi)
                                    @if($bohi->id == $qpdeed->bohi_no)
                                        {{$bohi->sarok_no}}
                                   @endif
                                @endforeach

                                </p>
                            </div>
                            <div class="col-md-6">
                                <p><b>কার্যালয়ের নামঃ </b>

                                    @foreach($OfficeName as $Office)
                                    @if($Office->id == $qpdeed->office_name)
                                        {{$Office->OfficeName}}
                                   @endif
                                @endforeach
                                </p>

                            </div>

                         </div>

                        <div class="row">
                            <p><span>৬/</span> পরিদর্শনের দলিল, ভলিউম এবং পৃষ্ঠা নং </p>
                            <div class="col-md-4 ">
                                <p><b>দলিল নংঃ </b> {{$qpdeed->aplication_deed}}</p>

                            </div>
                            <div class="col-md-4 ">
                                <p><b> ভলিউম নংঃ </b> {{$qpdeed->balam_no}}</p>

                            </div>
                            <div class="col-md-4 ">
                                <p><b>পৃষ্ঠা নংঃ </b> {{$qpdeed->page_no}}</p>

                            </div>

                        </div>

                        <div class="row">
                            <p><span>৭/</span> যে কার্যালয়ে নিবন্ধন করা হইয়াছে  আবেদনকারির আইডি</p>
                            <div class="col-md-6">
                                <p> <b>কার্যালয়ে নামঃ </b>
                                @foreach($OfficeName as $Office)
                                    @if($Office->id == $qpdeed->register_office)
                                        {{$Office->OfficeName}}
                                   @endif
                                @endforeach

                                </p>
                            </div>

                            <div class="col-md-6">
                                <p><b>আবেদনকারির আইডিঃ </b>
                                    {{$qpdeed->applicator_id}}
                                </p>
                            </div>

                        </div>

                        <div class="row">
                            <p><span>৮/</span>  প্রদত্ত ফি </p>
                            <div class="col-md-6">
                                <p> <b>ব্যাংকের নামঃ </b>  {{$qpdeed->bank_name}}</p>

                            </div>
                            <div class="col-md-6">
                                <p> <b>ফি প্রদানের তারিখঃ </b> {{$qpdeed->bank_fees_date}}</p>

                            </div>
                            <div class="col-md-6">
                                <p> <b>পে অর্ডার নংঃ </b>
                                    {{$qpdeed->pay_order}}
                                </p>

                            </div>
                        </div>

                        <div class="row">
                            <p><span>৯/</span> আবেদনের তারিখ এবং স্ট্যাটাস </p>
                            <div class="col-md-6">
                                <p><b> আবেদনের তারিখঃ</b> {{$qpdeed->date}}</p>

                            </div>
                            <div class="col-md-6">
                                <p><b> স্ট্যাটাসঃ </b>

                                    @if ($qpdeed->status =='1')
                                       Active
                                       @else
                                       Pending
                                    @endif
                                </p>
                            </div>
                        </div>

                      </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
