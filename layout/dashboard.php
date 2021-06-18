<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Playlist Music-MP3">
    <meta name="author" content="Syahranitazli">
    <meta name="keyword" content="Play, list, music, mp3">
    <title>Music Playlist</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
    <main>
        <header><img src="<?php echo ASSET; ?>images/Header Playlist Music.png" alt="[IMG]"></header>
        <nav>
            <ul>
                <li><a href="index.php"class="active">Dashboard</a></li>
                <li><a href="index.php?page=artist_tampil">Artist</a></li>
                <li><a href="index.php?page=album_tampil">Album</a></li>
                <li><a href="index.php?page=track_tampil">Track</a></li>
                <li><a href="index.php?page=playlist_tampil">Playlist</a></li>
                <li><a href="index.php?page=login_logout">Logout</a></li>
            </ul>   
        </nav>
        <img src="<?php echo ASSET; ?>images/HD.png" alt="[IMG]">
        <section>
          <?php
                if (isset($_GET['page'])) {
                    include $_GET['page'] . ".php";
                }else {
                    include "main_dashboard.php";
                }
            ?>
        </section>
        <footer>Copyright &copy; Syahranitazli</footer>
    </main>
</body>
</html>

