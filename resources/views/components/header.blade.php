<nav class="navbar navbar-expand-lg navbar-dark bg-warning py-0">
    <div class="container">
        <a href="{{ route('homepage') }}" class="navbar-brand"><img src="{{ asset('images/logo.png') }}" alt=""></a>
        <div class="col-6">
            <form action="{{route('search')}}">
                <div class="input-group p-3">
                    <input type="search" placeholder="search local bussiness in purnea" name="search" class="form-control py-2">
                    {{-- <input type="search" placeholder="Purnea" class="form-control py-2"> --}}
                    <button type="submit" class="btn btn-dark"><i class="bi bi-search lead"></i></button>
                </div>
            </form>
        </div>
        <div class="navbar-nav">
            <a href="{{ route('add.biz') }}" class="nav-item nav-link text-dark">Add a Bussiness</a>
            <a href="" class="nav-item nav-link text-dark">Categories</a>
            @guest
                <a href="" class="nav-item nav-link text-dark">My Account</a>
            @endguest
            @auth
                <a href="" class="nav-item nav-link text-dark">{{ Auth::user()->name }}`s Account</a>
                <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
            @endauth
        </div>
    </div>
</nav>
