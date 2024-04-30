@extends('template.layout')
@section('content')

<div class="container">
    <?php
    foreach ($photos as $albums) {
        $object_vars = get_object_vars($albums);
        $id = $object_vars['id'];
        $album_name = $object_vars['title'];
        $cover_photo = $object_vars['img_name'];
    ?>
        <div class="row gx-3">
            <div class="col-lg-4 col-md-12">
                <h4>id: <?php echo  $id; ?></h4>
                <h1><?php echo $album_name; ?></h1>
                <img src="{{ asset('images/'.$cover_photo) }}" alt="" height="300px">
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Add your content for the second column here if needed -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Add your content for the third column here if needed -->
            </div>
        </div>
    <?php }; ?>

</div>

@stop
