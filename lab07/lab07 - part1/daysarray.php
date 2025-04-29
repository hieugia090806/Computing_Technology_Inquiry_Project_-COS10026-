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
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        for ($i = 0; $i < count($days); $i++)
            echo "The Days of the week in English are $days[$i].\n";

        $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
        for ($i = 0; $i < count($days); $i++)
            echo "The Days of the week in English are $days[$i].\n";
    ?>
</body>
</html>
    