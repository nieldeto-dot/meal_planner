<?php

include '../conn.php';
//creating cormobidities 
if (isset($_POST['corm'])) {
    $corm = $_POST['cormo'];

    $check =  mysqli_query($conn, "SELECT * FROM comorbidities WHERE comorbidities = '$corm'");
    if ($check->num_rows >= 1) {
?>
        <script>
            alert("This comorbidities Exist!");

            location.href = 'comorbidities.php';
        </script>
        <?php
    } else {
        $create_corm = mysqli_query($conn, "INSERT INTO comorbidities VALUES('0','$corm')");
        if ($create_corm) {
        ?>
            <script>
                alert("Comorbidities Created!");
                location.href = 'comorbidities.php';
            </script>
        <?php
        }
    }
}
//deleting comorbiditie 
if (isset($_GET['del_como'])) {
    $como_id = $_GET['como_id'];

    $del_como = mysqli_query($conn, "DELETE FROM comorbidities WHERE corm_id = '$como_id'");
    if ($del_como) {
        ?>
        <script>
            alert("Deleted!");
            location.href = 'admin/comorbidities.php';
        </script>
    <?php
    }
}

if (isset($_POST['create_meal'])) {
    $meal_name = $_POST['meal_name'];
    $meal_cal = $_POST['meal_cal'];
    $meal_day = $_POST['meal_day'];
    $meal_type = $_POST['meal_type'];


    $check_meal = mysqli_query($conn, "SELECT * FROM meals WHERE meal_name = '$meal_name'");
    if ($check_meal->num_rows >= 1) {
    ?>
        <script>
            alert("this meal name already exist");
            location.href = 'meal.php'
        </script>
        <?php
    } else {
        $add_meal = mysqli_query($conn, "INSERT INTO meals VALUES('0','$meal_name','$meal_cal','$meal_day','$meal_type')");
        if ($add_meal) {
        ?>
            <script>
                alert("Meal_Added");
                location.href = 'meal.php'
            </script>
<?php
        }
    }
}

if(isset($_GET['delete_meal'])){
    $meal_id = $_GET['meal_id'];

    $delete_meal = mysqli_query($conn,"DELETE FROM meals WHERE meal_id = '$meal_id'");
    if($delete_meal){
        ?>
            <script>
                alert("Meal Deleted!");
                location.href='meal.php';
            </script>
        <?php
    }else{
               ?>
            <script>
                alert("Meal not Deleted!");
                location.href='meal.php';
            </script>
        <?php
    }
}

if(isset($_POST['set_meal'])){
    
}

?>