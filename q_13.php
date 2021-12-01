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

    ?>

        <center><h1>질문 13</h1><br>
        <h2>선물을 받는 분이 운동을 즐기는 편입니까?</h2><br><br>
        <form action="q_14.php" method="POST">
        <input type="submit" name="q_fitness" value="O"><p>
        <input type="submit" name="q_fitness" value="X"><p>
        <input type="submit" name="q_fitness" value="모르겠습니다"><p>

        <input type="hidden" name="q_gender" value = "<?php echo $_POST['q_gender']?>">
        <input type="hidden" name="q_budget" value = "<?php echo $_POST['q_budget']?>">
        <input type="hidden" name="q_look" value = "<?php echo $_POST['q_look']?>">
        <input type="hidden" name="q_traveller" value = "<?php echo $_POST['q_traveller']?>">
      </form>
        </center>
  </body>
</html>
