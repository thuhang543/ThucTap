
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Add Category </li>
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
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
    @endif
    <form class="form-horizontal"   enctype="multipart/form-data" wire:submit.prevent="addCategory">
        
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>


