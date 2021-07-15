<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Home Slider</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Slider </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

    <div class="card-header ">
        <span>HomeSlider</span>
        <a href="{{route('admin.addhomeslider')}}" class="btn btn-success float-right ">Add Slider</a>
    </div>
    
<div class="card-body">
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
   
    @endif
    <form class="form-horizontal"  wire:submit.prevent="addSlider">
        
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" placeholder="Title" class="form-control input-md" wire:model="title" />
        </div>
        <div class="form-group">
            <label for="code">SubTitle</label>
            <input type="text" name="code" id="code" class="form-control" wire:model="subtitle" placeholder="SubTitle">
        </div>
        <div class="form-group">
            <label for="name">Price</label>
            <input type="text" placeholder="Price" class="form-control input-md" wire:model="price" />
        </div>
        <div class="form-group">
            <label for="name">Link</label>
            <input type="text" placeholder="Link" class="form-control input-md" wire:model="link" />
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="input-file"wire:model="image"/>
            @if($image)
                <img src="{{$image->temporaryUrl()}}" width="120"/>
            @endif
            
        </div>
        <div class="form-group">    
            <label for="name">Status</label>
            <select class="form-control" wire:model="status" >
                <option value="0">Inactive</option>
                <option value="1">Active</option>
            </select>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>


