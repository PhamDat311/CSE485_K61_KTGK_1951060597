<?php 
    if (isset($_POST['btnSave'])){
        $id = $_POST['txtId'];
        $title = $_POST['txtTitle'];
        $date = $_POST['txtDate'];
        $duration = $_POST['txtDuration'];
        $question = $_POST['txtQuestion'];
        $marks = $_POST['txtMarks'];
        $created = $_POST['txtCreated'];
        $status = $_POST['txtStatus'];
        $exam = $_POST['txtExam'];
    }
    $conn = mysqli_connect('localhost','root','','db_tracnghiem');
    $sql = "UPDATE exams SET id='$id',
    exam_title = '$title',
    exam_datetime = '$date',
    duration = '$duration',
    total_question = '$question',
    marks_per_right_answer = '$marks',
    created_on = '$created',
    status = '$status',
    exam_code = '$exam',
    WHERE id = '$id'"; 
    $result = mysqli_query($conn , $sql);
    if($result == true){
        header("Location: index.php");
    }else{
        echo ("Location:error.php");
    }
?>