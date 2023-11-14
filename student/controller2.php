<?php

require_once("../include/initialize.php");


$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'add':
        doInsert();
        break;

    case 'file':
        doupdatefile();

}

function doInsert()
{
    if (isset($_POST['submit'])) {
        $errorfile = $_FILES['add']['error'];
        $temp = $_FILES['add']['tmp_name'];
        $myfile = $_FILES['add']['name'];
        $location = "student_files/" . $myfile;

        $file_extension = pathinfo($location, PATHINFO_EXTENSION);

        if ($file_extension != 'pdf') {
            message("Invalid file format. Please upload a PDF file.", "error");
            redirect(web_root . "index.php?q=profile");
        } elseif ($_FILES["add"]["size"] > 5000000) {
            message("Your file is too large. It cannot be uploaded.", "error");
            redirect(web_root . "index.php?q=profile");
        } else {
            // Uploading the file
            move_uploaded_file($temp, "student_files/" . $myfile);

            $stud = new Student();
            $stud->file = $location;
            $stud->update($_SESSION['IDNO']);
            message("File Upload");
            redirect(web_root . "index.php?q=profile");
        }
        }
    }


function doupdatefile()
{
    $errorfile = $_FILES['file']['error'];
    $temp = $_FILES['file']['tmp_name'];
    $myfile = $_FILES['file']['name'];
    $location = "student_files/" . $myfile;

    $file_extension = pathinfo($location, PATHINFO_EXTENSION);

    if ($errorfile > 0) {
        message("No File Selected!", "error");
        redirect(web_root . "index.php?q=profile");
    } elseif ($file_extension != 'pdf') {
        message("Invalid file format. Please upload a PDF file.", "error");
        redirect(web_root . "index.php?q=profile");
    } else {
        // Uploading the file
        move_uploaded_file($temp, "student_files/" . $myfile);

        $stud = new Student();
        $stud->file = $location;
        $stud->update($_SESSION['IDNO']);
        message("File Upload");
        redirect(web_root . "index.php?q=profile");
    }
}
?>
