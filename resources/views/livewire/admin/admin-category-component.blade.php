<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Category </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

    <div class="card-header ">
        <span>Category</span>
        <a href="{{route('admin.addcategory')}}" class="btn btn-success float-right ">Add Category</a>
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
            <th>Edit</th>
            <th>Delete</th>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td><a href="{{ route('admin.editcategory',['category_slug'=>$category->slug]) }}" class="btn btn-primary btn-sm">Edit</a></td>
                    <td><a href="#" wire:click.prevent="deleteCategory({{ $category->id }})" class="btn btn-primary btn-sm">Delete</a></td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{$categories->links()}}
    </div>


