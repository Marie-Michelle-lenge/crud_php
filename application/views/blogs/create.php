<div class="contenaire col-md-8 col-md-offset-2">
    <h2>create form</h2>
    <form action="<?php echo base_url('blogsCreate'); ?> ">
        <div class="form-group">
            <label for="title">title:</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="Description">Description:</label>
            <textarea type="text" name="description" class="form-control">

            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>