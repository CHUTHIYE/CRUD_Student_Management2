<?php 
include_once("connDB.php");

//đọc toàn bộ bản ghi
$result = mysqli_query($mysqli, "SELECT * FROM student ORDER BY id DESC");
?>

<html>
    <style>
        body {
            text-align: center;
        }
        
    </style>
    <head>
        <title>Student Managament</title>
    </head>

    <body>
        <a href="create.php">Add new student<a><br/><br/>
        <table width = '90%' border = 1>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Update</th>
            </tr>
            <?php 
            while ($student_data = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$student_data['name']."</td>";
                echo "<td>".$student_data['mobile']."</td>";
                echo "<td>".$student_data['email']."</td>";
                echo "<td><a href = 'edit.php?id= $student_data[id]'>Edit  </a>|
                <a href='delete.php?id= $student_data[id]'>Delete</a>
                </td></tr>";
            }
            ?>
        </table>
        </br>
        <a href="search.php">Search</a>

    </body>
</html>