@extends('layouts.partials.navAdmin')

@section('adminMain')
<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="name" id="inputName"
    value="{{old('name',$category->name)}}" />
    </div>
@endsection
