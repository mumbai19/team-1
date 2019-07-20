<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<!--    <h1>Hello, world!</h1>-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<?php
require_once("connect.php");
//session_start();
$id = 1;
?>
        <div class="right_col" role="main">
            <div class="container">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Students</h3>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
<!--                                <h2>Students</h2>-->

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                                <table class="table table-bordered">
                                    <th>
                                        Student id
                                    </th>
                                    <th>
                                        Student name
                                    </th>
<!--
                                    <th>
                                        Books issue date
                                    </th>
-->
                                    
                                    <?php  
$query = "SELECT studentdetails.sid, studentdetails.name FROM student_course, course_user_master, studentdetails WHERE 
student_course.sid=studentdetails.sid and student_course.courseid=course_user_master.courseid and course_user_master.uid=$id";

//                                    
//                                    echo $query;
//                                    die();

$res = mysqli_query($connection,$query);


while($row=mysqli_fetch_assoc($res)){
    echo "<tr>";
    echo "<td>";
    echo $row["sid"];
    echo "</td>";
    echo "<td>";
    echo $row["name"];
    echo "</td>";
//    echo "<td>";
//    echo $row["books_issue_date"];
//    echo "</td>";
}
                                    
                                    ?>
                                    
                                    
                                </table>
                                
                                
                                
                            </div>
                            <button type="button" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




