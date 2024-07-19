<div class="col-3">
    <img src="https://st2.depositphotos.com/6789684/12262/v/450/depositphotos_122620866-stock-illustration-illustration-of-flat-icon.jpg"
        width="70%" alt="">
</div>
<div class="col-6">

</div>
<div class="col-3">
    @if (Auth::check())

    <h1 class="text-danger"><a href="">{{ Auth::user()->name }}</a></h1>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="btn btn-info">Đăng xuất</button>
    </form>
    @else
    <div class="d-flex justify-content-space-evenly p-5">
        <a href='{{ route('register') }}' class="btn btn-primary me-3">Đăng ký</a>
        <a href='{{ route('login') }}' class="btn btn-info">Đăng nhập</a>
    </div>
    @endif
    <form action="" class="d-flex justify-content-space-evenly p-5">
        <input type="text" class="form-control me-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</div>