 
 <?php include_once 'config/init.php'; ?>

<?php

$job = new Job;


$job_id = isset($_GET['id']) ? $_GET['id'] : null;

if (isset($_POST['update'])) {
    //create data array

    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if ($job->update($data)) {
        redirect('index.php', 'Your job list has been updated', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'error');
    }
}
// , 'Your job has been listed', 'Success'
// , 'Something went wrong', 'Error'

$template = new Template('templates/job-edit.php');

$template->job = $job->getJob($job_id);
$template->categories = $job->getCategories();


echo $template;
