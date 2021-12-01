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
      $q_prtcal = $_POST['q_prtcal'];
      $q_etro = $_POST['q_etro'];
?>

    <center><h1>질문 3</h1><br>
    <h2>먹는 선물도 괜찮을까요?</h2><br><br>
    <form action="q_4.php" method="POST">
    <input type="submit" name="q_foodok" value="O"><p>
    <input type="submit" name="q_foodok" value="X"><p>
    <input type="submit" name="q_foodok" value="모르겠습니다"><p>

    <input type="hidden" name="q_gender" value = "<?php echo $_POST['q_gender']?>">
    <input type="hidden" name="q_budget" value = "<?php echo $_POST['q_budget']?>">
    <input type="hidden" name="q_prtcal" value = "<?php echo $_POST['q_prtcal']?>">
    <input type="hidden" name="q_etro" value = "<?php echo $_POST['q_etro']?>">
  </form>
    </center>
  </body>
</html>
