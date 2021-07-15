<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Home Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Home Category </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

    <div class="card-header ">
        <span>Home Category</span>
        <a href="{{route('admin.addhomeslider')}}" class="btn btn-success float-right ">Home Category</a>
    </div>
    
<div class="card-body">
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
    @endif
    <form class="form-horizontal"  wire:submit.prevent="updateHomeCategory">
        
        <div class="form-group">    
            <label for="name">Choose Category</label>
            <div wire:ignore>
            <select class="form-control sel_categories   " name="categories[]" multiple="multiple" wire:model="selected_categories" >
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        </div>
        <div class="form-group">
            <label for="name">No Of Product </label>
            <input type="text" placeholder="No Of Product " class="form-control input-md" wire:model="numberofproducts" /> 
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>
@push('scripts')
    <script>
        $(document).ready(function(){
            $('.sel_categories').select2();
            $('.sel_categories').on('change',function(e){
                var data=$('.sel_categories').select2("val");
                @this.set('selected_categories',data);
            });
        });

    </script>
@endpush


