@extends('layouts.profile')
<head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
@section('page-title')
<h3>Alterar imagem</h3>
@endsection

@section('profile-content')
@if ($errors->any())
    @include ('layouts.partials.errors')
@endif

@section('profile-content')
<form action="{{ route('profile.updateimg') }}" method="post">
    <div class="imgchange">
        <input type="file" name="img" id="img">
    </div>
</form>

@endsection


@endsection
