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
          $q_look = $_POST['q_look'];

    ?>

         <center><h1><h1>질문 12</h1><br>
         <h2>선물 받는 분이 여행을 즐기는 분입니까?</h2><br><br>
         <form action="q_13.php" method="POST">
         <input type="submit" name="q_traveller" value="O"><p>
         <input type="submit" name="q_traveller" value="X"><p>
         <input type="submit" name="q_traveller" value="모르겠습니다"><p>

         <input type="hidden" name="q_gender" value = "<?php echo $_POST['q_gender']?>">
         <input type="hidden" name="q_budget" value = "<?php echo $_POST['q_budget']?>">
         <input type="hidden" name="q_look" value = "<?php echo $_POST['q_look']?>">
       </form>
         </center>

  </body>
</html>
