
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Edit Category </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <div class="card-header ">
        <span>Add Category</span>
        <a href="{{route('admin.categories')}}" class="btn btn-success float-right ">All Category</a>
    </div>


<div class="card-body">
    @if(Session::has('message'))
        <div class="alert alert-success" role="alert" >{{Session::get('message')}}</div>
    @endif
    <form class="form-horizontal"  wire:submit.prevent="updateCategory">
        @csrf
        <div class="form-group">
            <label for="" class="col-md-4 control-label">Category Name</label>
            <div class="col-md-4">
                <input type="text" placeholder="Category Name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"  name="name" id="name">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-md-4 control-label">Category Slug</label>
            <div class="col-md-4">
                <input type="text" placeholder="Category Slug" class="form-control input-md" wire:model="slug" name="slug" id="slug">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <button type="submit"  class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>

</div>


