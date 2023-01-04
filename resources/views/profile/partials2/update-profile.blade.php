@extends('layouts.profile')
<head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
@section('page-title')
<h3>Edit Profile</h3>
@endsection

@section('profile-content')


<form method="post" action="{{ route('profile.update2') }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')

    <div class="edit-data">
        <i class='bx bx-user bx-sm'></i>
        <input class="col-xl-3  col-md-6 col-12 mt-3" type="text" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" placeholder="Nome"><br>
        <i class='bx bx-envelope bx-sm'></i>
        <input class="col-xl-3  col-md-6 col-12 mt-3" type="text" name="email" value="{{ old('name', $user->email) }}" placeholder="Email">
        {{-- <button type="submit">Atualizar Perfil</button> --}}
    </div>
    <div class="flex items-center gap-4">
        <x-primary-button>{{ __('Atualizar Perfil') }}</x-primary-button>

        @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600">{{ __('Atualizado') }}</p>
        @endif
    </div>

</form>
@endsection


