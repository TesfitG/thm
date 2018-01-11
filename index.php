

<?php include('included-files/Constant.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>THM</title>
    <?php include(HEADER_SETUP); ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
    <?php include(NAVIGATION_BAR); ?>

    <main class="index-main">
        <header class="text-center">
            <h2>Thesis Managment</h2>
            A place to share masters and phd thesis documents across universities
        </header>

        <form action="notes.php" method="get">
            <input id="subject-number-input" class="form-control" name="search" type="text" placeholder="Subject Number or Title">
            <button type="submit" class="btn btn-danger">Find Thesis</button>
        </form>

    </main>

    <?php include(SCRIPTS); ?>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="src/jscript/search-subject.js" ></script>

</body>
</html>