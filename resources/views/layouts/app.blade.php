<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> নিবন্ধন অধিদপ্তর </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

    <div id="app" style="background: rgb(237, 229, 228); font-family: 'Noto Serif Bengali', serif;">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary text-white shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">

                    নিবন্ধন অধিদপ্তর
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('লগইন') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('রেজিস্টার') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.SDocument') }}">{{ __('তল্লাশের জন্য আবেদন') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.QPdocument') }}">{{ __('পরিদর্শনের জন্য আবেদন') }}</a>
                            </li>



                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item py-2" href="{{ route('home') }}">{{ __('প্রোফাইল') }}</a>

                                    <a class="dropdown-item py-2" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('লগআউট') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-bell" aria-hidden="true"></i>
                                    @if (auth()->user()->unreadNotifications->count() > 0)
                                        <span>
                                            {{auth()->user()->unreadNotifications->count()}}
                                        </span>
                                    @endif
                                </a>

                                <div class="dropdown-menu dropdown-menu-end mx-2" aria-labelledby="navbarDropdown">

                                    @forelse(auth()->user()->unreadNotifications as $notification)
                                    <a href="{{route('mark')}}" class="dropdown-item py-1 text-muted" >
                                       <b>{{ $notification->data['name']}}</b> আপনার স্ট্যাটাস টি আপডেট করা হয়েছে!!
                                    </a>
                                    @empty
                                      <span class="text-center ps-3"> কোন নোটিফিকেশন নেই</span>
                                    @endforelse

                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container pb-5">
            @yield('content')
        </main>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#datatablesSimple').DataTable();
        });
    </script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#division').change(function(){
                let cid=jQuery(this).val();
                jQuery.ajax({
                    url:'/getDistrict',
                    type:'post',
                    data:'cid='+cid+'&_token={{csrf_token()}}',
                    success:function(result){
                        jQuery('#district').html(result)
                    }
                });
            });

        });

        jQuery(document).ready(function(){
            jQuery('#district').change(function(){
                let cid=jQuery(this).val();
                jQuery.ajax({
                    url:'/getThana',
                    type:'post',
                    data:'cid='+cid+'&_token={{csrf_token()}}',
                    success:function(result){
                        jQuery('#thana').html(result)
                    }
                });
            });

        });

        jQuery(document).ready(function(){
            jQuery('#thana').change(function(){
                let cid=jQuery(this).val();
                jQuery.ajax({
                    url:'/getUnion',
                    type:'post',
                    data:'cid='+cid+'&_token={{csrf_token()}}',
                    success:function(result){
                        jQuery('#union').html(result)
                    }
                });
            });

        });
    </script>

</body>
</html>
