
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

     <div class="right_col" role="main">
            <div class="container">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Activities</h3>
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
                                        name
                                    </th>
                                    <th>
                                        theme
                                    </th>
<!--
                                    <th>
                                        Books issue date
                                    </th>
-->
                                    
                                    <?php  
                                    $conn=mysqli_connect("localhost","root","transmode;","project1");
	session_start();
	//$uid=$_SESSION['uid'];
	$uid=1;
$query = "SELECT * FROM activity";

	
	
	$result = mysqli_query($conn, $query);
	if ($result->num_rows > 0) {
    
    

while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>";
    echo $row["theme"];
    echo "</td>";
    echo "<td>";
    echo $row["activitycol"];
    echo "</td>";
;
}
}
?>
</table>
                                
                                
                                
                            </div>
                            
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




