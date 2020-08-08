<?php include 'inc/header.php'; ?>

<h2 class="page-header">Create Job Listing</h2>
<form action="create.php" method="post">
    <div class="form-group">
        <label for="">Company</label>
        <input type="text" class="form-control" name="company">
    </div>

    <div class="form-group">
        <label for="">Category</label>
        <select name="category" class="form-control">
            <option value="0">Choose Category</option>
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category->id; ?>"> <?php echo $category->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Job Title</label>
        <input type="text" class="form-control" name="job_title">
    </div>

    <div class="form-group">
        <label for="">Description</label>
        <input type="text" class="form-control" name="description">
    </div>

    <div class="form-group">
        <label for="">Location</label>
        <input type="text" class="form-control" name="location">
    </div>

    <div class="form-group">
        <label for="">Salary</label>
        <input type="text" class="form-control" name="salary">
    </div>

    <div class="form-group">
        <label for="">Contact User</label>
        <input type="text" class="form-control" name="contact_user">
    </div>

    <div class="form-group">
        <label for="">Contact Email</label>
        <input type="text" class="form-control" name="contact_email">
    </div>

    <input type="submit" class="btn btn-default" value="Submit" name="submit">
</form>

<?php include 'inc/footer.php'; ?>