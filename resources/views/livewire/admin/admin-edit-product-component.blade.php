<div class="card">
	<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Edit Product </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
        <div class="card-header ">
            <span>Edit Product</span>
            <a href="{{route('admin.products')}}" class="btn btn-success float-right ">All Product</a>
        </div>
    
	<div class="card-body">
		<!-- product images -->
	@if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
    @endif
		
		<form class="form-horizontal"  enctype="multipart/form-data" wire:submit.prevent="updateProduct">
			
			<div class="row justify-content-between m-auto">
				<!-- product name -->
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" placeholder="Name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"/>
					
				</div>
				<!-- product code -->
				<div class="form-group">
					<label for="code">Slug</label>
					<input type="text" name="code" id="code" class="form-control" wire:model="slug" placeholder="Slug">
				</div>
                <div class="form-group">
					<label for="code">SKU</label>
					<input type="text" name="sku" id="sku" class="form-control" wire:model="SKU" placeholder="SKU">

					
				</div>
				
				
			</div>
			<!-- product description -->
			<div class="form-group">
				<label for="short_description">Short Description</label>
				<textarea type="text" name="short_description" wire:model="short_description" class="form-control" placeholder="Short Description"></textarea>

				
			</div>
            <div class="form-group">
				<label for="description">Description</label>
				<textarea type="text" name="description" wire:model="description" class="form-control" placeholder="Description"></textarea>

				
			</div>
            
			<div class="row justify-content-between m-auto">
				<!-- product images -->
				<div class="form-group">
					<label for="image">Image</label>
					<input type="file" class="input-file"wire:model="new_image"/>
                    @if($new_image)
                        <img src="{{$new_image->temporaryUrl()}}" width="120"/>
					@else
						<img src="{{ asset('assets/images/products') }}/{{$image }}" width="120" alt="">	
                    @endif
					
				</div>
				<!-- product price -->
				<div class="form-group">
					<label for="price">Regular Price</label>
					<input type="decimal" name="regular_price" wire:model="regular_price" id="regular_price" class="form-control " placeholder="Regular Price">

					
				</div>
                <div class="form-group">
					<label for="price">Sale Price</label>
					<input type="decimal" name="sale_price" wire:model="sale_price" id="sale_price" class="form-control " placeholder="Sale Price">

					
				</div>
				<!-- product qty -->
				<div class="form-group">
					<label for="quantity">Quantity</label>
					<input type="number" name="quantity" wire:model="quantity" id="quantity" class="form-control" placeholder="Quantity">

					
				</div>
			</div>
			<!-- product status -->
            <div class="row justify-content-between m-auto">
			<div class="row ml-2">
				<!-- product on sale -->
				<div class="form-group">
					<label for="featured">Featured</label>
					<select name="featured" id="featured" wire:model="featured" class="form-control">
						<option value="0">NO</option>
						<option value="1">YES</option>
					</select>

					
				</div>
				
			</div>
            <div class="row ml-2">
				<!-- product on sale -->
				<div class="form-group">
					<label for="featured">Stock</label>
					<select name="stock" wire:model="stock_status" id="stock" class="form-control">
						<option value="0">InStock</option>
						<option value="1">Out Of Stock </option>
					</select>

					
				</div>
				
			</div>
            <!-- product category -->
				<div class="form-group">
					<label for="category_id">Category</label>
                    <select name="category" wire:model="category_id"  class="form-control">
                        <option value="">Select Category</option>
                       @foreach ($categories as $category )
                           <option value="{{ $category->id }}">{{ $category->name }}</option>
                       @endforeach
					</select>
				</div>
            </div>
			<!-- product seo start -->
			<div class="form-group">
				<label for="meta_description">Meta Description</label>
				<textarea name="meta_description" wire:model="meta_description" class="form-control" placeholder="Nhập Meta Description">{{ isset($product) ?  $product->meta_description : '' }}</textarea>
			</div>
			<div class="form-group">
				<label for="meta_keywords">Meta Keywords</label>
				<textarea name="meta_keywords" wire:model="meta_keywords" class="form-control" placeholder="Nhập Meta Keywords">{{ isset($product) ? $product->meta_keywords : '' }}</textarea>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>
	</div>
</div>
