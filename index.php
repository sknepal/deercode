<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DeerCode | Coding challenges for Deerwalkers</title>

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
                <a class="navbar-brand" href="index.php">DeerCode</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="/admin">Admin</a>
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
                  <h1>DeerCode v1.0</h1>
                <p class="lead">Coding questions for Deerwalkers to solve.</p>
                    <?php
$con=mysqli_connect("localhost","root","","deercode");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM questions");
echo "<div class='table-responsive'>";
echo "<table class='table table-bordered'>
<tr>
<th>ID</th>
<th>Question</th>
</tr>";
$i=0;
while($row = mysqli_fetch_array($result)) {
  switch ($i) {
    case 0:
        $color = 'active';
        break;
    case 1:
        $color = 'normal';
        break;
    case 2:
        $color = 'success';
        break;
    case 3:
        $color = 'normal';
        break;  
    case 4:
        $color = 'warning';
        break;
    case 5:
        $color = 'normal';
        break;
    case 6:
        $color = 'danger';
        break;
    case 7:
        $color = 'normal';
        break;
    case 8:
        $color = 'info';
        break;
    case 9:
        $color = 'normal';
        $i = -1;
        break;
}
  echo "<tr class='$color'>";
  echo "<td align='left'>" . $row['QID'] . "</td>";
  echo "<td align='left'>" . nl2br($row['questions']) . "</td>";
 echo "</tr>";
 $i++;
}
echo "</table>";
echo "</div>";
//mysqli_query($con, $sql);
mysqli_close($con);
?>
                
            </div>
        </div>
        <!-- /.row -->
<p align="right">PHP, Bootstrap, and lots of love. Built by <a href="https://twitter.com/sknepal">@sknepal</a>.</p>
    <p align="right">Licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
