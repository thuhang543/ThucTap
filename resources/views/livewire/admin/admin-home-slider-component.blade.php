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
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Subtile</th>
                    <th>Price</th>
                    <th>Link</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($sliders as $slider)
                        <tr>
                            <td>{{ $slider->id}}</td>
                            <td><img src="{{ asset('assets/images/sliders') }}/{{ $slider->image }}" width="120" alt=""></td>
                            <td>{{ $slider->title}}</td>
                            <td>{{ $slider->subtitle}}</td>
                            <td>{{ $slider->price}}</td>
                            <td>{{ $slider->link}}</td>
                            <td>{{ $slider->status==1 ? 'Active':'Inactive'}}</td>
                            <td>{{ $slider->created_at }}</td>
                            <td></td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
       
    </div>


