<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
  <?php
   if(isset($_SERVER['QUERY_STRING']))
    include('template_edit.php');
    else include('template_list.php');
  ?>
</body>
</html>