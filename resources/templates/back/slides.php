<div class="row">
    <?php display_message(); ?>
    <div class="col-xs-3">
        <form action="" method="post" enctype="multipart/form-data">
            <?php add_slides(); ?>
            <div class="form-group">
                <input type="file" name="file">
            </div>
            <div class="form-group">
                <label for="title">Slide Title</label>
                <input type="text" name="slide_title" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="add_slide">
            </div>
        </form>
    </div>
    <div class="col-xs-8">
        
    <?php get_current_slide_in_admin() ?>
    </div>
</div><!-- ROW-->
<hr>
<h1>Slides Available</h1>
<div class="row">
    <h4>Click on a slide to delete it.</h4>
    <?php get_slide_thumbnails(); ?>
</div>