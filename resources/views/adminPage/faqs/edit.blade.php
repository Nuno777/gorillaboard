@extends('layouts.partials.navAdmin')

@section('adminMain')

@vite('public/css/adminCss/adminFaqs.css')

@section('adminMain')
    <div class="card-body">
        <h2 class="name-page"><a  href="{{ url()->previous() }}">
            <i class='bx bx-chevron-left bx-sm'></i></a>Edit Faq</h2>
    </div>
    <form method="POST" action="{{ route('admin.faqs.update', $faq) }}" class="form-group inline">
        @csrf
        @method('PUT')
        @include('adminPage.faqs.partials.add-edit')
        <div class="form-group">
            <button type="submit" class="btn btn-success" name="ok">Save</button>
            <a href="{{ route('admin.faqs.index') }}" class="btn btn-default">Cancel</a>
        </div>
    </form>
@endsection
