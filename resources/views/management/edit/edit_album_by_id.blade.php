@extends('template.dashboard')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th scope="col">title</th>
        <th scope="col">cover photo</th>
        <th>edit/delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($photos as $key)
        <th scope="row">{{$key->id}}</th>
        <th scope="row">{{$key->img_name}}</th>
        <td scope="row"><img src="{{ asset('images/' . $key->img_name) }}" height="100px"> </td>
        <td><a href="{{url('dashboard/albums/selectPhotobyalbum/'.$key->id)}}"><button type="button" class="btn btn-primary">edit</button></a>
            <a href="{{url('dashboard/albums/selectPhotobyalbum/'.$key->id)}}"><button type="button" class="btn btn-danger">delete</button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop
