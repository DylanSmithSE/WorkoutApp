<?php
include("./config/db.php");
?>
<?php include("./inc/header.php"); ?>
<div class="main-container">
    <header class="flex-container">
        <h1 class="page-title">Workouts</h1>
        <a href="./addWorkout.php">
            <i class="fa-solid fa-square-plus plus"></i>
        </a>
    </header>
    <main>
        <article class="flex-container workout-card">
            <i class="fa-solid fa-circle color-identifier"></i>
            <h3 class="workout-name">Push 1</h3>
            <div class="card-options flex-container">
                <div class="options">
                    <p>Edit</p>
                    <p class="options-delete">Delete</p>
                </div>
                <i class="fa-solid fa-ellipsis-vertical" onclick="toggleOptions(this)"></i>
            </div>
        </article>

    </main>
</div>
<?php include("./inc/navbar.php") ?>
<?php include("./inc/footer.php"); ?>