
@extends('admin.layouts.admin')

@section('title')
Search Applications - Admin Panel
@endsection

@section('admin_content')

<div class="container">
    <h1 class="mt-2">Search Applications details</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.SDcoument.index')}}">All Search App</a></li>
        <li class="breadcrumb-item active">Search Applications</li>
    </ol>


    <div class="row justify-content-center my-3">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header text-center py-2">{{ __('আবেদনকারির ডিটেইলস') }}</div>
                <div class="card-body">

                        <div class="row">
                            <p><span>১/ </span> আবেদনকারির নাম</p>

                            <div class="col-md-6">
                               <p><b>বাংলায়ঃ </b> {{$sdeed->bn_name}} </p>
                            </div>
                            <div class="col-md-6">
                                <p><b>ইংরেজিতেঃ </b> {{$sdeed->name}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <p><span>2/</span> আবেদনকারির ঠিকানা</p>
                            <div class="col-md-4 ">
                                <p><b>বিভাগঃ</b>

                                @foreach ($divs as $div)
                                    @if($div->id == $sdeed->division)
                                        {{$div->bn_name}}
                                    @endif
                                @endforeach

                                </p>

                            </div>
                            <div class="col-md-4 ">
                                <p><b>জেলাঃ </b>
                                    @foreach ($dists as $dist)
                                        @if($dist->id == $sdeed->district)
                                            {{$dist->bn_name}}
                                        @endif
                                    @endforeach
                                </p>
                            </div>

                            <div class="col-md-4 ">
                                <p><b>থানাঃ </b>
                                @foreach ($thans as $thana)
                                    @if($thana->id == $sdeed->thana)
                                      {{$thana->bn_name}}
                                   @endif
                                @endforeach
                                </p>

                            </div>
                            <div class="col-md-4 ">
                                <p><b>ইউনিয়নঃ </b>

                                @foreach ($unions as $union)
                                    @if($union->id == $sdeed->union)
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
                                    {{$sdeed->nid_name}}
                                </p>

                            </div>
                            <div class="col-md-6">
                                <p><b>পরিদর্শন সনঃ </b>
                                    {{$sdeed->search_year}}
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <p><span>৪/</span> যে প্রকার দলিলের জন্য পরিদর্শন ও যে সকল ব্যাক্তি বা স্থানের জন্য পরিদর্শন</p>
                            <div class="col-md-6">
                                <p><b>দলিলের প্রকারঃ </b>
                                @foreach($docs as $doc)
                                    @if($doc->id == $sdeed->type_of_deed)
                                        {{$doc->name}}
                                    @endif
                                @endforeach
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p><b>পরিদর্শন ব্যাক্তি বা স্থানঃ </b>
                                    {{$sdeed->serach_inspaction}}
                                </p>
                            </div>

                        </div>

                        <div class="row">
                            <p><span> ৫/ </span>তাল্লাশকারকের সাথে দলিলের সম্পর্ক ও কার্যালয়ের নাম </p>

                            <div class="col-md-6 ">
                                <p><b>দলিলের সাথে সম্পর্কঃ </b>

                                    @foreach($search_rels as $search_rel)
                                    @if($search_rel->id == $sdeed->search_deed_rel)
                                        {{$search_rel->SearchRelation}}
                                   @endif
                                   @endforeach
                                </p>

                            </div>

                            <div class="col-md-6">
                                <p><b>কার্যালয়ের নামঃ </b>

                                    @foreach($OfficeName as $Office)
                                    @if($Office->id == $sdeed->office_name)
                                        {{$Office->OfficeName}}
                                   @endif
                                @endforeach
                                </p>

                            </div>

                         </div>

                        <div class="row">
                            <p><span>৭/</span> যে কার্যালয়ে নিবন্ধন করা হইয়াছে ও আবেদনকারির আইডি</p>
                            <div class="col-md-6">
                                <p> <b>কার্যালয়ে নামঃ </b>
                                @foreach($OfficeName as $Office)
                                    @if($Office->id == $sdeed->register_office)
                                        {{$Office->OfficeName}}
                                   @endif
                                @endforeach

                                </p>
                            </div>

                            <div class="col-md-6">
                                <p><b>আবেদনকারির আইডিঃ </b>
                                    {{$sdeed->applicator_id}}
                                </p>
                            </div>

                        </div>

                        <div class="row">
                            <p><span>৮/</span>  প্রদত্ত ফি </p>
                            <div class="col-md-6">
                                <p> <b>ব্যাংকের নামঃ </b>  {{$sdeed->bank_name}}</p>

                            </div>
                            <div class="col-md-6">
                                <p> <b>ফি প্রদানের তারিখঃ </b> {{$sdeed->bank_fees_date}}</p>

                            </div>
                            <div class="col-md-6">
                                <p> <b>পে অর্ডার নংঃ </b>
                                    {{$sdeed->pay_order}}
                                </p>

                            </div>
                        </div>

                        <div class="row">
                            <p><span>৯/</span> আবেদনের তারিখ এবং স্ট্যাটাস </p>
                            <div class="col-md-6">
                                <p><b> আবেদনের তারিখঃ</b> {{$sdeed->date}}</p>

                            </div>
                            <div class="col-md-6">
                                <p><b> স্ট্যাটাসঃ </b>

                                    @if ($sdeed->status =='1')
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
