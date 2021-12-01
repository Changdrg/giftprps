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
        ?>

         <center><h1>질문 6</h1><br>
         <h2>선물 받는 분이 컴퓨터를 자주 사용하는 편입니까?</h2><br><br>
         <form action="q_7.php" method="POST">
         <input type="submit" name="q_computer" value="O"><p>
         <input type="submit" name="q_computer" value="X"><p>
         <input type="submit" name="q_computer" value="모르겠습니다"><p>

         <input type="hidden" name="q_gender" value = "<?php echo $_POST['q_gender']?>">
         <input type="hidden" name="q_budget" value = "<?php echo $_POST['q_budget']?>">
       </form>
         </center>

  </body>
</html>
