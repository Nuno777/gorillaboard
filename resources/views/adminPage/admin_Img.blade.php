@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">


@include('layouts.partials.dashboard.nav')

<h1>ola</h1>

<form action="{{ route('admin.Img_Dashboard.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" class="form-control-file" name="image_name" id="inputImage" aria-describedby="fileHelp" />
    <input type="file" class="form-control-file" name="image" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">
    Please upload a valid file image. Size of image should not be more than 2MB </small>
</form>
@include('layouts.partials.dashboard.footer')