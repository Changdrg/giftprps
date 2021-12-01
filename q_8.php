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

    ?>

        <center><h1>질문 8</h1><br>
        <h2>소모성 선물도 괜찮을까요?</h2><br><br>
        <form action="q_9.php" method="POST">
        <input type="submit" name="q_sobi" value="O"><p>
        <input type="submit" name="q_sobi" value="X"><p>
        <input type="submit" name="q_sobi" value="모르겠습니다"><p>

        <input type="hidden" name="q_gender" value = "<?php echo $_POST['q_gender']?>">
        <input type="hidden" name="q_budget" value = "<?php echo $_POST['q_budget']?>">
        <input type="hidden" name="q_computer" value = "<?php echo $_POST['q_computer']?>">
        <input type="hidden" name="q_meaning" value = "<?php echo $_POST['q_meaning']?>">
      </form>
        </center>
  </body>
</html>
