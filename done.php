<?php


?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="done.css">
    <title>Done</title>
</head>
<body>

<div class="box">

    <p>Super wygląda na to że raporcik już gotowy :)</p>

    <input type="button" value="Back" id="backBtn">


</div>

</body>
<script>
   const bckBtn = document.querySelector('#backBtn');

   bckBtn.addEventListener('click',()=>{

       window.location.href = "psReports.php"
   })
</script>
</html>