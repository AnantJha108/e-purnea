@extends('base')

@section('content')
    @section('title',$title)
    @include('components/home-banner')
    <div class="container mt-5">
        <h3>{{$title}} businesses</h3>
        <div class="row mt-4 mb-3">
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
                        {{-- <p class=" mb-0 text-danger fw-bolder"><i class="bi bi-list"></i> {{$item->getCategory->cat_title}}</p> --}}
                        <p class="small mb-1 text-truncate">{{$item->address}},{{$item->city}}</p>
                        <h6 class="fw-bolder"><i class="bi bi-phone"></i>{{$item->primary_contact}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 mx-auto">
                {{$business->links()}}
            </div>
        </div>
    </div>
@endsection
