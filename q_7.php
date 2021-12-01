<!DOCTYPE html>
<html lang="en" dir="ltr">
   <title>GIFT PROPOSAL</title>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
          $q_gender = $_POST['q_gender'];
          $q_budget = $_POST['q_budget'];
          $q_computer = $_POST['q_computer'];

    ?>

         <center><h1><h1>질문 7</h1><br>
         <h2>선물의 의미를 중요시 하는 편입니까?</h2><br><br>
         <form action="q_8.php" method="POST">
         <input type="submit" name="q_meaning" value="O"><p>
         <input type="submit" name="q_meaning" value="X"><p>
         <input type="submit" name="q_meaning" value="모르겠습니다"><p>

         <input type="hidden" name="q_gender" value = "<?php echo $_POST['q_gender']?>">
         <input type="hidden" name="q_budget" value = "<?php echo $_POST['q_budget']?>">
         <input type="hidden" name="q_computer" value = "<?php echo $_POST['q_computer']?>">
       </form>
         </center>

  </body>
</html>
