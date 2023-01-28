<head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
@extends('profile.partials.nav-options')

<div class="cont-user">
    @section('content-base')
@if ($errors->any())
    @include ('layouts.partials.errors')
@endif
<form action="{{ route('profile.upgradeimg') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="imgchange">
        <input type="file" name="img" id="img">
    </div>

    <button type="submit">Submeter</button>
</form>
</div>


@endsection
