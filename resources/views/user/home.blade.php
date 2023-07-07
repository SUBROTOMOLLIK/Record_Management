@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-3">
        <div class="col-md-12">
            <div>
                <div class="card-header text-center">আবেদনকারীর ড্যাশবোর্ড </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card">
                                <div class=" text-center pt-2"><img src="{{asset('img/avatar.webp')}}" alt="" class="rounded-circle" width="60px" height="60px"></div>
                                <div class="card-body text-center">

                                <p class="m-0 pt-1"><b>Name :</b> {{Auth::user()->name}}</p>
                                <p class="m-0 pt-1"><b>Email :</b> {{Auth::user()->email}}</p>
                                <p class="m-0 pt-1"><b>Phone :</b> {{Auth::user()->phone}}</p>
                                <p class="m-0 pt-1"><b>Address :</b> {{Auth::user()->address}}</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            @if (count($suchione)>0)
                            <div class="text-center mb-0">
                                <p> পরিদর্শনের জন্য আবেদন করার আগে সূচি পত্র দেখে নিন </p>
                                <p><a target="_blank" href="{{route('user.suchione')}}" class="btn btn-primary">সূচি পত্র ১</a> <a target="_blank" href="{{route('user.suchitwo')}}" class="btn btn-primary">সূচি পত্র ২ </a></p>
                            </div>
                            @endif
                            @if (count($suchitwo)>0)
                            <div class="text-center pt-3">
                                <p>এখান থেকে নকলের জন্য আবেদন করুন</p>
                                <a target="_blank" class="btn btn-primary" href="{{ route('user.DDocument') }}">নকলের জন্য আবেদন</a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            @if (count($sdeeds)>0)
                             <div class="card mt-4">
                                <div class="card-header">তল্লাশের জন্য আবেদন


                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <th>আবেদন নাম্বার</th>
                                            <th>আবেদনকারীর নাম</th>
                                            <th>আবেদনের তারিখ</th>
                                            <th>স্ট্যাটাস</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($sdeeds as $sdeed)
                                            <tr>
                                                <td>{{$sdeed->id}}</td>
                                                <td>{{$sdeed->bn_name}}</td>
                                                <td>{{$sdeed->date}}</td>
                                                <td>
                                                @if($sdeed->status == '1')
                                                        Active
                                                @else
                                                    Pending..
                                                @endif

                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                             </div>
                           @endif


                            @if (count($qpdeeds)>0)
                                <div class="card mt-4">
                                    <div class="card-header">পরিদর্শনের জন্য আবেদন</div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <th>আবেদন নাম্বার</th>
                                                <th>আবেদনকারীর নাম</th>
                                                <th>আবেদনের তারিখ</th>
                                                <th>স্ট্যাটাস</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($qpdeeds as $qpdeed)
                                                <tr>
                                                    <td>{{$qpdeed->id}}</td>
                                                    <td>{{$qpdeed->bn_name}}</td>
                                                    <td>{{$qpdeed->date}}</td>
                                                    <td>
                                                    @if($qpdeed->status == '1')
                                                            Active
                                                    @else
                                                        Pending..
                                                    @endif

                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endif

                            @if (count($ddeeds)>0)
                                <div class="card mt-4">
                                    <div class="card-header">নকলের জন্য আবেদন</div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <th>আবেদন নাম্বার</th>
                                                <th>আবেদনকারীর নাম</th>
                                                <th>আবেদনের তারিখ</th>
                                                <th>স্ট্যাটাস</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($ddeeds as $ddeed)
                                                <tr>
                                                    <td>{{$ddeed->id}}</td>
                                                    <td>{{$ddeed->bn_name}}</td>
                                                    <td>{{$ddeed->date}}</td>
                                                    <td>
                                                    @if($ddeed->status == '1')
                                                            Active
                                                    @else
                                                        Pending..
                                                    @endif

                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endif


                            {{-- <div class="card mt-4">
                                <div class="card-header"> ১ নং সূচি পত্র </div>
                                <div class="card-body">
                                    <table id="datatablesSimple" class="table row-border" style="width:100%">
                                        <thead>
                                          <tr>
                                            <th>আইডি</th>
                                            <th>ব্যাক্তির নাম</th>
                                            <th>পিতার নাম</th>
                                            <th>ঠিকানা,পদ বা পদবি</th>
                                            <th>যে ব্যাক্তির স্বার্থ জড়িত</th>
                                            <th> যেখানে নিবন্ধিত হয়েছে</th>
                                            <th>ক্রমিক নং</th>
                                            <th>বালাম নং</th>
                                            <th>পৃষ্ঠা নং</th>
                                            <th>বছর</th>
                                          </tr>
                                        </thead>

                                        <tbody>

                                                @foreach ($suchiones as $suchione)
                                                <tr>
                                                    <td><?php echo $suchione->id; ?></td>
                                                    <td><?php echo $suchione->PName;  ?></td>
                                                    <td><?php echo $suchione->FName;  ?></td>
                                                    <td><?php echo $suchione->FAddress;  ?></td>
                                                    <td><?php echo $suchione->BenPerson;  ?></td>
                                                    <td><?php echo $suchione->WRegisterd;  ?></td>
                                                    <td><?php echo $suchione->si_no;  ?></td>
                                                    <td><?php echo $suchione->balam_no;  ?></td>
                                                    <td><?php echo $suchione->page_no;  ?></td>
                                                    <td><?php echo $suchione->year;  ?></td>
                                                </tr>
                                                @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div> --}}

                    </div>
                </div>

















            </div>
        </div>
    </div>
</div>
@endsection
