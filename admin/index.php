<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administration</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.deercode.net">DeerCode</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://www.deercode.net/about.php">About</a>
                    </li>
                    <li>
                        <a href="http://www.deercode.net/admin/">Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Add Question</h1>
                <p class="lead">Enter the question and click on the Submit button.</p>
            </div>
        </div>
        <!-- /.row -->
<form role="form" action="" method="POST">
  <div class="form-group">
    <label for="addQuestionToTable">Question</label>
    <textarea class="form-control" rows="3" name="text_question"></textarea>
  </div>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>
    </div>
<div style="text-align: center;">
  <div style="display: inline-block; text-align: left;">
     <?php
$search = array("'");
$con=mysqli_connect("localhost","root","","deercode");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST["submit"])){
    $question = ($_POST['text_question']);
	$newquestion = str_replace($search,'"',$question);
    if ($newquestion===""){
        echo "<div class='alert alert-danger'>";
        echo "<a href='#' class='close' data-dismiss='alert'>&times;</a>";
        echo "<strong>Error!</strong> The question field is empty.   ";
    }
    else {
        $add_query = mysqli_query($con,"INSERT INTO questions(questions) VALUES ('$newquestion')");
        if($add_query) {
            echo "<div class='alert alert-success'>";
            echo "<a href='#' class='close' data-dismiss='alert'>&times;</a>";
            echo "<strong>Success!</strong> The question has been added successfully. ";
        }
    }
    echo "</div></div></div>";
}
mysqli_close($con);
?>
</div></div>
    <!-- /.container -->
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
<p align="center">PHP, Bootstrap, and lots of love. Built by <a href="https://twitter.com/sknepal">Subigya Kumar Nepal</a>.</p></div>
    <!-- jQuery Version 1.11.1 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>