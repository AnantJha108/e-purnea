@extends('base')

@section('content')
    @include('components/header')


    <div class="card col-4 mx-auto mt-5">
        <div class="card-header"><h4>Register Here</h4></div>
        <div class="card-body">
            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 col">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
                    <div class="mb-3 col">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">Contact</label>
                        <input type="text" name="contact" class="form-control" value="{{ old('contact') }}">
                        @error('contact')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                        @error('password')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                <div class="mb-3">
                    <input type="submit" value="Register" class="btn btn-success w-100">
                </div>
            </form>
            <a href="{{route('login')}}" class="small float-end text-decoration-none">Already Register ? Login Here</a>
        </div>
    </div>
@endsection
