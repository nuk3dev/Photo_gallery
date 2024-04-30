@extends('template.dashboard')
@section('content')
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Launch demo modal
  </button>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Modal title</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="{{ url('dashboard/insertAlbum')  }}" method="POST" enctype="multipart/form-data">
         @csrf
          <label for="">album title</label>
          <br>
          <input type="text" name="album" id="album">
          <br>
          <label for="">cover_photo</label>
          <br>
          <input type="file" name="image_name" id="image_name">
          <br>
          <input type="submit" value="submit" name="submit" class="btn btn-primary">
         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@stop
