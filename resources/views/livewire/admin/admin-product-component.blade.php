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
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
    @endif
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
        <th>Action</th>
        
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
                <td>
                <a href="{{ route('admin.editproduct',['product_slug' => $product->slug]) }}" ><i class="fa fa-edit fa-2x text-info"></i></a>
                <a href="#"  wire:click.prevent="deleteProduct({{ $product->id }})" ><i class="fa fa-times fa-2x text-danger"></i></a>
                  
            </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{$products->links()}}
</div>


