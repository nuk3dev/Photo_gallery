@extends('template.dashboard')
@section('content')



<table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th scope="col">title</th>
        <th scope="col">cover photo</th>
        <th scope="col">upload date</th>
        <th>edit/delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($albums as $key)
        <th scope="row">{{$key->id}}</th>
        <th scope="row">{{$key->album_name}}</th>
        <td><img src="{{ asset('images/' . $key->cover_photo) }}" height="100px"> </td>
        <th scope="row">{{$key->upload}}</th>
        <td><a href="{{url('dashboard/albums/editAlbum/'.$key->id)}}"><button type="button" class="btn btn-primary">edit</button></a>
            <a href="{{url('dashboard/albums/deleteAlbum/'.$key->id)}}"><button type="button" class="btn btn-danger">delete</button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop
