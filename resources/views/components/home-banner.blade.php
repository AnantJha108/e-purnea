<div class="main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
            <a href="{{ route('homepage') }}" class="navbar-brand"><img src="{{ asset('images/logo.png') }}"
                    alt=""></a>
            <div class="navbar-nav">
                <a href="{{ route('add.biz') }}" class="nav-item nav-link">Add a Bussiness</a>
                @guest
                    <a href="" class="nav-item nav-link">My Account</a>
                @endguest
                @auth
                    <a href="" class="nav-item nav-link">{{ Auth::user()->name }}`s Account</a>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                @endauth
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="text-center text-white h2" style="margin-top: 180px">#1 INDIAN WEBSITE FOR LISTING LOCAL BUSINESS
        </h1>
        <div class="row">
            <div class="col-7 mx-auto mt-4">
                <form action="{{route('search')}}">
                    <div class="input-group">
                        <input type="search" placeholder="search local bussiness in purnea" name="search" class="form-control py-2">
                        {{-- <input type="search" placeholder="Purnea" class="form-control py-2"> --}}
                        <button type="submit" class="btn btn-warning"><i class="bi bi-search lead"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid p-4 position-absolute bottom-0" style="background-color:rgba(0,0,0,0.4)">
        <div class="container">
            <div class="row" style="width:92%">
                @foreach ($category as $cat)
                    <div class="col text-center">
                        <div class="text-white">
                            <a href="{{ route('category', $cat->id) }}"
                                class="text-white text-decoration-none">{{ $cat->cat_title }}</a>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col offset-1 ml-4">
                    <img src="{{ asset('images/biz/1.png') }}" alt="">
                    <p class="text-white mb-0">Apparels & Accessories</p>
                </div>
                <div class="col">
                    <img src="{{ asset('images/biz/2.png') }}" alt="">
                    <p class="text-white mb-0">Food & Beverages</p>
                </div>
                <div class="col">
                    <img src="{{ asset('images/biz/3.png') }}" alt="">
                    <p class="text-white mb-0">Beauty & Wellness</p>
                </div>
                <div class="col">
                    <img src="{{ asset('images/biz/4.png') }}" alt="">
                    <p class="text-white ms-1 mb-0">Education</p>
                </div>
                <div class="col">
                    <img src="{{ asset('images/biz/5.png') }}" alt="">
                    <p class="text-white ms-3 mb-0">Health</p>
                </div>
                <div class="col">
                    <img src="{{ asset('images/biz/6.png') }}" alt="">
                    <p class="text-white mb-0">Wedding & Events</p>
                </div>
                <div class="col">
                    <img src="{{ asset('images/biz/7.png') }}" alt="">
                    <p class="text-white mb-0">Logistics Services</p>
                </div>
                <div class="col">
                    <img src="{{ asset('images/biz/8.png') }}" alt="">
                    <p class="text-white mb-0">Printing & Stationaries</p>
                </div> --}}
            </div>
        </div>
    </div>
</div>
