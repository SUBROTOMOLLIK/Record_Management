
@extends('admin.layouts.admin')

@section('title')
Update User - Admin Panel
@endsection


@section('admin_content')


<!-- page title area end -->

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div>
                <ol class="breadcrumb my-4 ">
                    <li class="breadcrumb-item"><a href="{{route('userlist')}}">ইউজার লিস্ট </a></li>

                </ol>
                <div class="card-header text-center"> ইউজার এডিট করুন </div>
                @include('admin.layouts.parts.messages')
                <div class="card-body">
                    <form method="POST" action="{{route('userupdate', $user->id)}}">
                        @csrf

                        <div class="row mb-3 mt-4">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ইউজারের নাম') }}<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('ইমেইল অ্যাড্রেস') }}<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" autocomplete="email" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('মোবাইল নাম্বার') }}<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('অ্যাড্রেস') }}<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" cols="10" rows="3" required autocomplete="address">{{ $user->address }}</textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-6">
                                <input id="password" type="hidden" value="{{$user->password}}" class="form-control" name="password" >

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label  class="col-md-4 col-form-label text-md-end">{{ __('স্ট্যাটাস') }}<span class="text-danger">*</span></label>

                            <div class="col-md-6">
                              <select  name="isActive" class="form-control">
                                <option value="1" {{($user->isActive == '1')? 'selected' : ''}}>Active</option>
                                <option value="0" {{($user->isActive == '0')? 'selected' : ''}}>Deactive</option>
                              </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary text-white">
                                    {{'আপডেট করুন'}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

