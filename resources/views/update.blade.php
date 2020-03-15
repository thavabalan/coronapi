@extends('partial.layout')
@section('title')
{{$info->id}}
@endsection
@section('content')
<h1>District-{{$info->district}}</h1>
@include('partial.massage')
<form action="{{route('info.update',$info->id)}}" method="POST" class="form-group">
    @csrf
    @method('put')
    <label for="death">Death</label>

    <input type="text" name="death" value="{{$info->death}}" class="form-control">
    <label for="confirmed">confirmed</label>
    <input type="text" name="confirmed" value="{{$info->confirmed}}" class="form-control">
    <label for="recovered">Recovered</label>
    <input type="text" name="recovered" value="{{$info->recovered}}" class="form-control">
    <button type="submit" class="btn btn-primary" value="submit">Update</button>
</form>
@endsection
   
