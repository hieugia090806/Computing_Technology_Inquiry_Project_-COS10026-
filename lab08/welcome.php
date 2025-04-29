<?php
session_start();

if (isset($_SESSION['user'])) {
    echo "Welcome, " . $_SESSION['user'] . "!";

    // Movie Lists
    $my_movies = ["Fast & Furious X", "The Chipmunks", "Harry potter", "The Chipmunks", "Rescue Heroes"]; // Replace with your favorite movies
    $friend_movies = ["Tom & Jeery", "Conan", "Doraemon", "Pacific Rim", "Gundam"]; // Replace with your friend's favorite movies

    // Display movies based on who logged in
    echo "<h2>Favorite Movies:</h2>";
    echo "<table>";
    echo "<tr><th>Movie Title</th></tr>";

    if ($_SESSION['user_type'] == 'self') {
        foreach ($my_movies as $movie) {
            echo "<tr><td>" . $movie . "</td></tr>";
        }
    } else {
        foreach ($friend_movies as $movie) {
            echo "<tr><td>" . $movie . "</td></tr>";
        }
    }

    echo "</table>";
} else {
    header('Location: login.html');
}
?>