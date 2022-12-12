@extends('layouts.partials.navAdmin')

@section('adminMain')
    <form method="POST" action="{{ route('adminFaqsStore') }}" class="form-group">
        @csrf
        <h2>Criar nova Faq</h2>
        @include('adminPage.faqs.partials.add-edit')
        <div class="form-group">
            <button type="submit" class="btn btn-success" name="ok">Save</button>
            <a href="{{ route('adminfaqs') }}" class="btn btn-default">Cancel</a>
        </div>
    </form>
@endsection
