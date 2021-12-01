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
          $q_meaning = $_POST['q_meaning'];
          $q_sobi = $_POST['q_sobi'];


         ?>

        <center><h1>질문 9</h1><br>
        <h2>선물받는 분이 자녀가 있나요?</h2><br><br>
        <form action="q_10.php" method="POST">
        <input type="submit" name="q_child" value="O"><p>
        <input type="submit" name="q_child" value="X"><p>
        <input type="submit" name="q_child" value="모르겠습니다"><p>

        <input type="hidden" name="q_gender" value = "<?php echo $_POST['q_gender']?>">
        <input type="hidden" name="q_budget" value = "<?php echo $_POST['q_budget']?>">
        <input type="hidden" name="q_computer" value = "<?php echo $_POST['q_computer']?>">
        <input type="hidden" name="q_meaning" value = "<?php echo $_POST['q_meaning']?>">
        <input type="hidden" name="q_sobi" value = "<?php echo $_POST['q_sobi']?>">
      </form>
        </center>
  </body>
</html>
