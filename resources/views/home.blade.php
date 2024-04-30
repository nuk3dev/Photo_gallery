@extends('template.layout')
@section('content')
<div class="container">
@foreach ($albums as $albums => $value)
<?php $object_vars =  get_object_vars($value);
$id = $object_vars['id']; 
$album_name =  $object_vars['album_name'] ;
$cover_photo =  $object_vars['cover_photo'];
$upload_time = $object_vars['upload'];
?>


<div class="row gx-3 ">
<div class="col-lg-4 col-md-12">
  <h1><?php echo $album_name?></h1>
  <img src="{{ asset('images/'.$cover_photo) }}" alt="" height="300px">
  <h4>uploaded at: <?php echo $upload_time; ?></h4>
  <button type="button" class="btn btn-primary"><a href="albums/<?php echo $id; ?>" >see more</a></button>
</div>

<div class="col-lg-4 col-md-6">

</div>

<div class="col-lg-4 col-md-6">

</div>

</div>
@endforeach
  
</div>
@stop