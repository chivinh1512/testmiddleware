@extends('layouts.app')

@section('content')
    @if(session('faild'))
        <div class="alert alert-danger" style="text-align: center;font-size: 30px">{{session('faild')}} </div>
    @endif
<div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <a href="/">Trang chu</a>
                    <a href="phimthieunhi">Phim thieu nhi</a>
                    <a href="phimkiemhiep">Phim kiem hiep</a>
                    <a href="phimtinhcam">Phim tinh cam</a>
                    <a href="phim16+">Phim 16+</a>
                </div>
                <div class="col-1"></div>
            </div>
</div>
@endsection
