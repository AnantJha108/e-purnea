@extends('base')

@section('content')
    @include('components/header')


    <div class="card col-8 mx-auto mt-5">
        <div class="card-body">
            <form action="{{ route('business.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-3 col">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        @error('title')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">Category</label>
                        <select name="category_id" class="form-select">
                            <option value="">Select category</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->cat_title }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">contact</label>
                        <input type="text" name="primary_contact" class="form-control"
                            value="{{ old('primary_contact') }}">
                        @error('primary_contact')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">

                    <div class="mb-3 col">
                        <label for="">Alternate contact</label>
                        <input type="text" name="secondary_contact" class="form-control"
                            value="{{ old('secondary_contact') }}">
                        @error('secondary_contact')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">Website</label>
                        <input type="text" name="website" class="form-control" value="{{ old('website') }}">
                        @error('website')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                        @error('address')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">City</label>
                        <input type="text" name="city" class="form-control" value="{{ old('city') }}">
                        @error('city')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">Images</label>
                        <input type="file" name="images" class="form-control">
                        @error('images')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col">
                        <label for="">State</label>
                        <input type="text" name="state" class="form-control" value="{{ old('state') }}">
                        @error('state')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">Pin code</label>
                        <input type="text" name="pin_code" class="form-control" value="{{ old('pin_code') }}">
                        @error('pin_code')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">Proprietor</label>
                        <input type="text" name="proprietor" class="form-control" value="{{ old('proprietor') }}">
                        @error('proprietor')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea rows="5" name="description" class="form-control">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="submit" value="Add business" class="btn btn-success w-100">
                </div>
            </form>
        </div>
    </div>
@endsection
