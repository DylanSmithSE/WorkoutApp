<?php
include("./config/db.php");
?>
<?php include("./inc/header.php"); ?>
<div class="main-container">
    <header class="flex-container">
        <h1 class="page-title">Add Workout</h1>
    </header>
    <main>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="workout-input-container">
                <input type="text" name="title" class="workout-input" placeholder="Enter workout name">
            </div>
            <div class="exercise-container">
                <h4 class="exercise-name">Ring Dip</h4>
                <div class="flex-container">
                    <h5 class="set-title">Sets</h5>
                    <h5 class="rep-title">Reps</h5>
                </div>
                <div class="flex-container set-container">
                    <h5 class="set-number">1</h5>
                    <input type="number" name="rep1" class="rep-input" id="">
                    <div class="center">
                        <i class="fa-solid fa-square-minus delete-set"></i>
                    </div>
                </div>
                <div class="flex-container set-container">
                    <h5 class="set-number">2</h5>
                    <input type="number" name="rep1" class="rep-input" id="">
                    <div class="center">
                        <i class="fa-solid fa-square-minus delete-set"></i>
                    </div>
                </div>
                <div class="flex-container set-container">
                    <h5 class="set-number">3</h5>
                    <input type="number" name="rep1" class="rep-input" id="">
                    <div class="center">
                        <i class="fa-solid fa-square-minus delete-set"></i>
                    </div>
                </div>
                <button class="btn add-set"><i class="fa-duotone fa-plus add-set-plus"></i>Add Set</button>
            </div>
            <div class="exercise-container">
                <h4 class="exercise-name">Ring Dip</h4>
                <div class="flex-container">
                    <h5 class="set-title">Sets</h5>
                    <h5 class="rep-title">Reps</h5>
                </div>
                <div class="flex-container set-container">
                    <h5 class="set-number">1</h5>
                    <input type="number" name="rep1" class="rep-input" id="">
                    <div class="center">
                        <i class="fa-solid fa-square-minus delete-set"></i>
                    </div>
                </div>
                <div class="flex-container set-container">
                    <h5 class="set-number">2</h5>
                    <input type="number" name="rep1" class="rep-input" id="">
                    <div class="center">
                        <i class="fa-solid fa-square-minus delete-set"></i>
                    </div>
                </div>
                <div class="flex-container set-container">
                    <h5 class="set-number">3</h5>
                    <input type="number" name="rep1" class="rep-input" id="">
                    <div class="center">
                        <i class="fa-solid fa-square-minus delete-set"></i>
                    </div>
                </div>
                <button class="btn add-set"><i class="fa-duotone fa-plus add-set-plus"></i>Add Set</button>
            </div>
            <button class="btn add-exercise">Add Exercise</button>


            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
            <input type="submit" name="submit" value="Save" class="btn save-template">
        </form>
    </main>
</div>
<?php include("./inc/footer.php"); ?>