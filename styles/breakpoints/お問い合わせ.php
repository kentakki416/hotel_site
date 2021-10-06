<?php 
$error = [];
if ($_POST['name']===''){
    $error['name'] = 'blank';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
</head>
<body>
<div class="container">
<form action="" method="POST" novalidate>

<input type="text" name="name" id="name">



</form>

    
</body>
</html>