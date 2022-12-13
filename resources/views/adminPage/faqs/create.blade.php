@extends('layouts.partials.navAdmin')
@vite('public/css/adminCss/adminFaqs.css')
@section('adminMain')
@dump($errors)
<br/><br/><br/><br/><br/><br/><br/>
    <form method="POST" action="{{ route('admin.faqs.store') }}" class="form-group">
        @csrf
        <h2 class="name-page"><a  href="{{ url()->previous() }}">
            <i class='bx bx-chevron-left bx-sm'></i></a>Criar nova Faq</h2>
        @include('adminPage.faqs.partials.add-edit')
        <div class="form-group">
            <button type="submit" class="btn btn-success" name="ok">Save</button>
            <a href="{{ route('admin.faqs.index') }}" class="btn btn-default">Cancel</a>
        </div>
    </form>
@endsection
