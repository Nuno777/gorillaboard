@extends('layouts.partials.navAdmin')


@section('adminMain')
    <div class="card-body">
        <h2>Edit Faq</h2>
    </div>
    <div class="goback">
        <button>
            <a  href="{{ url()->previous() }}">
                <i class="fa fa-arrow-circle-o-left"></i>
                <span>Voltar</span>
        </button>
        </a>
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
