@extends('layouts.partials.navAdmin')
@vite('public/css/adminCss/adminFaqs.css')
@section('adminMain')
    <form method="POST" action="{{ route('admin.faqs.Store') }}" class="form-group">
        @csrf
        <h2 class="name-page"><a  href="{{ url()->previous() }}">
            <i class='bx bx-chevron-left bx-sm'></i></a>Criar nova Faq</h2>
        @include('adminPage.faqs.partials.add-edit')
        <div class="form-group">
            <button type="submit" class="btn btn-success" name="ok">Save</button>
            <a href="{{ route('adminfaqs') }}" class="btn btn-default">Cancel</a>
        </div>
    </form>
@endsection
