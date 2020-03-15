@extends('partial.layout')
@section('content')
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Confirmed</th>
        <th scope="col">Recovered</th>
        <th scope="col">Death</th>
        <th scope="col">Distric</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($infos as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->confirmed}}</td>
            <td>{{$item->recovered}}</td>
            <td>{{$item->death}}</td>
            <td>{{$item->district}}</td>
            <td><a href="{{route('info.edit',$item->id)}}"><button class="btn btn-primary">Edit</button></a>
          </tr>
        @endforeach
 
    
    </tbody>
  </table>
@endsection