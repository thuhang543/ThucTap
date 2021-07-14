<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Product</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Product </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="card-header">
    <span>Product</span>
    <a href="{{ route('admin.addproduct') }}" class="btn btn-success float-right ">Add Product</a>
</div>
<div class="card-body">
    <table class="table table-bordered table-dark">
        <thead>
        <th>#</th>
        <th>Name</th>
        <th>Slug</th>
        <th style="width: 20%">Description</th>
        <th>Regular Price</th>
        <th>Sale Price</th>
        <th>Stock Status</th>
        <th>Image</th>
        <th>Category</th>
        <th>Sửa</th>
        <th>Xóa</th>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->slug }}</td>
                <td>{{\Illuminate\Support\Str::limit($product->description,180)}}</td>
                <td>{{number_format($product->regular_price,0)}}</td>
                <td>{{number_format($product->sale_price,0)}}</td>
                <td>{{$product->stock_status}}</td>
                <td><img src="{{asset('assets/images/products')}}/{{ $product->image }}" style="width: 100px;height: 120px" alt=""></td>
                <td>{{$product->category->name}}</td>
                <td><a href="" class="btn btn-primary btn-sm">Sửa</a></td>
                <td><a href="" class="btn btn-primary btn-sm">Xóa</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{$products->links()}}
</div>


