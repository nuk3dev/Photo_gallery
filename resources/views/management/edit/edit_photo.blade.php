@extends('template.dashboard')
@section('content')
<form action="{{ url('dashboard/albums/editPhoto/{id}')  }}" method="POST" enctype="multipart/form-data">
    @csrf
    @foreach($photo as $key)
     <label for="">album title</label>
     <br>
     <input type="text" name="album" id="album" value="{{$key->title}}">
     <br>
     <label for="">cover_photo</label>
     <br>
     <input type="file" name="image_name" id="image_name" value="{{$key->img_name}}">
     <br>
     <input type="submit" value="submit" name="submit" class="btn btn-primary">
     @endforeach
    </form>
@stop
