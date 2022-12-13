@extends('layouts.partials.navAdmin')
<<<<<<< HEAD

@dump($errors)
<br/><br/><br/><br/><br/><br/><br/>

@section('adminMain')
=======
@vite('public/css/adminCss/adminFaqs.css')

@section('adminMain')
    <div class="card-body">
        <h2 class="name-page"><a  href="{{ url()->previous() }}">
            <i class='bx bx-chevron-left bx-sm'></i></a>Edit Faq</h2>
    </div>
>>>>>>> b316c58e9d9f59d5d705d14be69c6b129a02ca41
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
