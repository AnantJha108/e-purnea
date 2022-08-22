@extends('base')


@section('title')
    {{ $biz->title }}
@endsection


@section('content')
    @include('components/header')
    <div class="container">
        <div class="cover"
            style="background-image: url('{{ $biz->images }}'); height:500px;background-size:cover;background-position:center">
            <div class="info p-4 h-100" style="background-color: rgba(0, 0, 0, 0.607)">
                <a href="" class="text-decoration-none text-white">
                    <h1 class="h4">{{ $biz->title }}</h1>
                </a>

                <div class="w-100">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <a href="" class="small text-white">19 Reviews</a>
                </div>

                <div class="w-100 text-white mt-3">
                    <h6>{{ $biz->address }}</h6>
                    <h6>{{ $biz->city }} {{ $biz->state }} - {{ $biz->pincode }}</h6>

                    <h2 class="mt-4">{{ $biz->primary_contact }}, {{ $biz->secondary_contact }}</h2>
                </div>
            </div>
        </div>

        <div class="description my-4">
            <div class="row">
                <div class="col-4">
                    <h4 class="text-muted">Overviews</h4>

                    <p class="mb-0"><strong>Email: </strong> {{ $biz->email }}</p>
                    <p class="mb-0"><strong>Proprietor: </strong> {{ $biz->proprietor }}</p>
                    <p class="mb-0"><strong>Category: </strong> {{$biz->getCategory->cat_title}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3 class="blockquote">Similar Business</h3>

        <div class="row">
            @foreach ($business as $item)
            <div class="col mb-3" style="max-width:20%">
                <div class="card h-100">
                    {{-- <img src="{{ asset('images/biz/'.$item->images) }}" class="w-100" alt=""> --}}
                     <img src="{{$item->images}}" class="card-img-top w-100" alt="">
                    <div class="card-body">
                        <a href="{{route('viewBiz',$item->id)}}" class="text-decoration-none"><p class="text-truncate text-dark mb-1">{{$item->title}}</p></a>
                        <div class="w-100">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <a href="" class="small">19 Reviews</a>
                        </div>
                        <p class="small mb-1 text-truncate">{{$item->address}},{{$item->city}}</p>
                        <h6 class="fw-bolder"><i class="bi bi-phone"></i>{{$item->primary_contact}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-12 mx-auto">
                {{ $business->links() }}
            </div>
        </div>
    </div>
@endsection
