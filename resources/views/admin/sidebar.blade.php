@extends('admin.dashboard')
@yield('content')
<nav area-label="breadcrumb">

    <ol class="breadcrumb">
        <a href="{{ route('home') }}" class="text-dectoration-none mr-3">
            <li class="breadcrumb-item">Trang Chủ</li>
        </a>
        <li class="breadcrumb-item active">Danh Mục Sản Phẩm</li>
    </ol>

</nav>

