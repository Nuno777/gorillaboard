<ul>@foreach($errors->all() as $error)
    <li class="text-danger">{{ $error }}</li>
    @endforeach
</ul>