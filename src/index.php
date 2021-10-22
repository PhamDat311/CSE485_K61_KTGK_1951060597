<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>tìm kiểm</title>
</head>

<body>
    <div class="bg-gray-light ">
        <h4 class="px-5 mx-4 fw-bolder d-flex justify-content-center ">
        HỆ THỐNG QUẢN LÝ THI TRẮC NGHIỆM TRỰC TUYẾN
        </h4>
    </div>
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="add.php" class="btn btn-success"><i class="fas fa-user-plus"></i>Thêm thông tin</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">exam_title</th>
                <th scope="col">exam_datetime</th>
                <th scope="col">duration</th>
                <th scope="col">total_question</th>
                <th scope="col">marks_per_right_answe</th>
                <th scope="col">created_on</th>
                <th scope="col">status</th>
                <th scope="col">exam_code</th>
                <th scope="col">bd_update</th>
                <th scope="col">bd_delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'Db_tracnghiem');
            if (!$conn) {
                die('Không thể kết nối');
            }
            ?>
            <?php
            $sql = "SELECT id, exam_title, exam_datetime, duration, total_question,
            marks_per_right_answer, created_on, status, exam_code FROM exams";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<th scope="row">' . $row['id'] . '</th>';
                    echo '<td>' . $row['exam_title'] . '</td>';
                    echo '<td>' . $row['exam_datetime'] . '</td>';
                    echo '<td>' . $row['duration'] . '</td>';
                    echo '<td>' . $row['total_question'] . '</td>';
                    echo '<td>' . $row['marks_per_right_answer'] . '</td>';
                    echo '<td>' . $row['created_on'] . '</td>';
                    echo '<td>' . $row['status'] . '</td>';
                    echo '<td>' . $row['exam_code'] . '</td>';
                    echo '<td><a href="update.php?id='.$row['id'].'"><i class="fas fa-user-edit"></i></a></td>';
                    echo '<td><a href="delete.php?id='.$row['id'].'"><i class="fas fa-user-times"></i></a></td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>