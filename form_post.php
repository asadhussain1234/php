<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>


<?php
$name=$_POST["textBox1"];
$fname=$_POST["textBox2"];
$enroll=$_POST["textBox3"];
$pass=$_POST["passwordBox1"];
$batch=$_POST["select1"];
$time=$_POST["select2"];
$sem=$_POST["radio1"];

?>
<body>
<div class="container">
<div class="row">
<div class="col-lg-12">
<table class="table table-responsive table-bordered">
<tr>
<th>Name</th>
<th>Father Name</th>
<th>Enrollment</th>
<th>Password</th>
<th>Batch Code</th>
<th>Timings</th>
<th>Semester</th>
  <th>earning</th>
</tr>

<tr>
<td><?php echo $name; ?></td>
<td><?php echo $fname; ?></td>
<td><?php echo $enroll; ?></td>
<td><?php echo $pass; ?></td>
<td><?php echo $batch; ?></td>
<td><?php echo $time; ?></td>
<td><?php echo $sem; ?></td>
</tr>
</table>
</div>
</div>
</div>
</body>
</html>
