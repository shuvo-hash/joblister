<?php include 'inc/header.php'; ?>
<h2 class="page-header"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h2>
<small><?php echo $job->contact_user; ?> <?php echo $job->post_date; ?></small>
<hr>

<p class="lead"><?php echo $job->description; ?></p>
<ul class="list-group">
    <li class="list-group-item"> <strong>Company:</strong> <?php echo $job->company; ?></li>
    <li class="list-group-item"> <strong>Salary:</strong> <?php echo $job->salary; ?></li>
    <li class="list-group-item"> <strong>Contact Email:</strong> <?php echo $job->contact_email; ?></li>
</ul>

<br>


<a class="btn btn-default" href="index.php">Go Back</a>

<br><br>

<div class="well">
    <a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-default">Edit</a>

    <form style="display:inline" action="job.php" method="post">
        <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
        <input type="submit" class="btn btn-danger" value="Delete">
    </form>
</div>


<?php include 'inc/footer.php'; ?>