@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@if (Session::has('success'))

    <p class="alert alert-success">{{ Session::get('success') }}</p>

@endif

@if (Session::has('error'))

    <p class="alert alert-danger">{{ Session::get('error') }}</p>

@endif
