<?php
$bd_id = $_POST['bd_id'];
$bd_name = $_POST['bdname'];
$bd_sex = $_POST['bdsex'];
$bd_age = $_POST['bdage'];
$bd_bgroup = $_POST['bdbgroup'];
$bd_reg_date = $_POST['bdreg_date'];
$bd_phno = $_POST['bdphno'];
?>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'qlnhm');
    if (!$conn) {
        die('Không thể kết nối');
    }
    ?>
<?php
$sql = "INSERT INTO exams(id, exam_title, exam_datetime, duration, total_question, marks_per_right_answer, created_on, status, exam_code)
 VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')";

echo $sql;
$result = mysqli_query($conn, $sql);


if ($result == true) {
    header("Location:index.php");
} else {
    echo "Lỗi!";
}

mysqli_close($conn);


?>