@extends('layouts.partials.navAdmin')

@dump($errors)
<br/><br/><br/><br/><br/><br/><br/>

@section('adminMain')
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
