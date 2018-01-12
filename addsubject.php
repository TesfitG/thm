<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once "included-files/connect-database.php";

//include('/included-files/connect-database.php');

if(isset($_POST['subjectsubmit'])) {
	
$subjno=$_POST['subjno'];
$query="INSERT INTO subject(subject_no) VALUES ('$subjno')";
$result=mysqli_query($connection,$query);
if($result)
{
echo '<script language="javascript">';
echo 'window.alert("New Subject Added");';
echo '</script>';}
else
{
echo '<script language="javascript">';
echo 'alert("Unable to Insert Subject")';
echo '</script>';

}

}













?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Note</title>
    <?php include(HEADER_SETUP); ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
    <?php include(NAVIGATION_BAR); ?>
    <?php include(SCRIPTS); ?>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <?php
        if ($user_logged_in == true) { ?>

            <main id="write-main">

                <header>
                    <h1>New Subject</h1>
                </header>

                <form method="post">
                    <input id="subject-number-input" name="subjno" class="form-control">
               
                    <button type="submit" name="subjectsubmit" class="btn btn-danger">Submit</button>
                </form>

                <form action="index.php">
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </form>

                <div id="error-check" hidden>
                    <span></span>
                </div>


            </main>

        <?php } ?>

    <script src="src/jscript/search-subject.js" ></script>
</body>
</html>
