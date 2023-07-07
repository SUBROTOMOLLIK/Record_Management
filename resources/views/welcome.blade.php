@extends('layouts.app')
@section('content')


<div class="row my-4">
    <div class="col-md-2 text-center m-0 p-0">
        <h4 class=" ">নোটিশ বোর্ডঃ </h4>
    </div>
    <div class="col-md-10 text-start m-0 p-0">
        <h4><marquee behavior='scroll' direction='left' scrollamount='5' onmouseover='this.stop()' onmouseout='this.start()'>
            @foreach ($notices as $notice)
               {{ $notice->DeedNotice;  }} |
            @endforeach
        </marquee></h4>
    </div>
</div>



<div class="jumbotron pb-4 mb-3 ">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <img src="{{asset('img/deed.jpeg')}}" class="card-img" alt="deed-img">
            </div>
        </div>

        <div class="col-md-7">
            <h2 class="pt-2 pb-3">এখানে তল্লাশের এবং পরিদর্শনের জন্য আবেদন করুন। </h2>
            <p class="lead "><i class="fa-solid fa-angles-right"></i> ৫২ (ক) ধারা রশিদ সংযুক্ত না থাকলে, সূচি পত্র দেখার জন্য </p>
            <p><i class="fa fa-arrow-down" aria-hidden="true"></i></p>
            <p>
                @guest
                তল্লাশের জন্য আবেদন লিংক পেতে লগইন অথবা রেজিস্টার করন
                @else
                <a target="_blank" href="{{route('user.SDocument')}}" class="btn btn-primary">তল্লাশের জন্য আবেদন</a>
                @endguest
            </p>
            <hr class="my-4">
            <p class="lead "><i class="fa-solid fa-angles-right"></i> ৫২ (ক) ধারা রশিদ সংযুক্ত থাকলে এবং দলিলের নকল নিতে আগ্রহী হলে </p>
            <p><i class="fa fa-arrow-down" aria-hidden="true"></i></p>
            <p>
                @guest
                পরিদর্শনের জন্য আবেদন লিংক পেতে লগইন অথবা রেজিস্টার করন
                @else
                <a target="_blank" href="{{route('user.QPdocument')}}" class="btn btn-primary">পরিদর্শনের জন্য আবেদন</a>
                @endguest
            </p>
            <p class="text-muted">*** ড্যাশবোর্ড এ নকলের জন্য আবেদন লিংক পেতে, প্রথমে পরিদর্শনের জন্য আবেদন করুন *** </p>
        </div>
    </div>
</div>
<br>
<div class="row">
  <h3 class="text-center text-white mb-5 p-2"> <span class="bg-primary p-2" style="border-radius: 7px;">আরও কিছু গুরুত্বপূর্ণ লিংক</span></h3>
    <div class="col-md-4 pt-3">
        <div class="bg-info text-center">
            <h1 class="text-center"><i class="fa fa-calculator p-2"></i></h1>
            <a href="http://www.dolil.gov.bd/calculator" class="btn btn-primary" target="_blank">দলিল ফি ক্যালকুলেটর</a>
        </div>
    </div>
    <div class="col-md-4 pt-3">
        <div class="bg-info text-center">
            <h1><i class="fa fa-search p-2"></i></h1>
            <a href="https://jomiodolil.com/market_value" class="btn btn-primary" target="_blank">সম্পত্তির বাজার মূল্য</a>
        </div>
    </div>
    <div class="col-md-4 pt-3">
        <div class="bg-info text-center">
            <h1 class="text-center"><i class="fa fa-gavel p-2"></i></h1>
            <a target="_blank" href="https://landregistrationbd.com/2020/07/12/%e0%a6%ad%e0%a7%82%e0%a6%ae%e0%a6%bf-%e0%a6%93-%e0%a6%a6%e0%a6%b2%e0%a6%bf%e0%a6%b2-%e0%a6%b0%e0%a7%87%e0%a6%9c%e0%a6%bf%e0%a6%b8%e0%a7%8d%e0%a6%9f%e0%a7%8d%e0%a6%b0%e0%a6%bf-%e0%a6%b8%e0%a6%82/" class="btn btn-primary">আইন ও বিধিমালা</a>
        </div>
    </div>

    <div class="col-md-4 pt-3">
        <div class="bg-info text-center">
            <h1 class="text-center"><i class="fa fa-list p-2"></i></h1>
            <a target="_blank" href="https://landregistrationbd.com/2016/11/14/%e0%a6%b0%e0%a7%87%e0%a6%9c%e0%a6%bf%e0%a6%b8%e0%a7%8d%e0%a6%9f%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%a8-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a6%bf%e0%a7%9f%e0%a6%be-%e0%a6%ab%e0%a7%8d/" class="btn btn-primary">দলিল রেজিস্ট্রি পদ্ধতি</a>
        </div>
    </div>

    <div class="col-md-4 pt-3">
        <div class="bg-info text-center">
            <h1 class=><i class="fa fa-map p-2"></i></h1>
            <a target="_blank" href="https://landregistrationbd.com/2019/12/23/4672/" class="btn btn-primary">দলিলের ফরমেট</a>
        </div>
    </div>
    <div class="col-md-4 pt-3">

            <div class="bg-info text-center">
                <h1><i class="fa fa-sticky-note p-2"></i></h1>
                <a target="_blank" href="https://land.gov.bd/citizens-corner/" class="btn btn-primary">
                    নামজারি/মিউটেশন/খারিজ</a>
            </div>

    </div>
</div>
@endsection
