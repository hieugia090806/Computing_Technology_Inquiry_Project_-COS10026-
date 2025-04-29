<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Using PHP Variables, arrays, and operators">
    <meta name="keywords" content="Lab07 - part1">
    <meta name="author" content="Truong Ngoc Gia Hieu">
    <title>Using PHP Variables, arrays, and operators</title>
    <!-- add other meta -->
</head>
<body>
    <h1>PHP Variables, arrays, and operators</h1>
    <?php
        $marks = array(85, 85, 95);
        $marks[1] = 90;
        $ave = ($marks[0] + $marks[1] + $marks[2]) / 3;
        if ($ave >= 50)
            $status = "PASSED";
        else
            $status = "FAILED";
        echo "<p>The average score is $ave. You $status.</p>";
    ?>
</body>
</html>
    