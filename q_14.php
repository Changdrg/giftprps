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
          $q_traveller = $_POST['q_traveller'];
          $q_fitness = $_POST['q_fitness'];


         ?>

        <center><h1>질문 14</h1><br>
        <h2>선물받는 분이 술을 즐기는 편인가요?</h2><br><br>
        <form action="q_15.php" method="POST">
        <input type="submit" name="q_drunker" value="O"><p>
        <input type="submit" name="q_drunker" value="X"><p>
        <input type="submit" name="q_drunker" value="모르겠습니다"><p>

        <input type="hidden" name="q_gender" value = "<?php echo $_POST['q_gender']?>">
        <input type="hidden" name="q_budget" value = "<?php echo $_POST['q_budget']?>">
        <input type="hidden" name="q_look" value = "<?php echo $_POST['q_look']?>">
        <input type="hidden" name="q_traveller" value = "<?php echo $_POST['q_traveller']?>">
        <input type="hidden" name="q_fitness" value = "<?php echo $_POST['q_fitness']?>">
      </form>
        </center>
  </body>
</html>
