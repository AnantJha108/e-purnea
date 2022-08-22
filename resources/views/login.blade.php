@extends('base')

@section('content')
    @include('components/header')


    <div class="card col-4 mx-auto mt-5">
        <div class="card-header">
            <h4>Login Here</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
                @csrf
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
                    <input type="submit" value="Login" class="btn btn-success w-100">
                </div>
                @if (session('error'))
                    <div class="col-12">
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    </div>
                @endif
            </form>
            <a href="{{route('register')}}" class="small float-end text-decoration-none">New user ? Create an Account</a>
        </div>
    </div>
@endsection
