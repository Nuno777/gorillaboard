@extends('layouts.partials.navAdmin')

@section('adminMain')
    <form method="POST" action="{{ route('adminPage.faqs.store') }}" class="form-group">
        @csrf
        @include('adminPage.faqs.partials.add-edit')
        <div class="form-group">
            <button type="submit" class="btn btn-success" name="ok">Save</button>
            <a href="{{ route('adminPage.faqs.faqs') }}" class="btn btn-default">Cancel</a>
        </div>
    </form>
@endsection
