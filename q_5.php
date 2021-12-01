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
      $q_foodok = $_POST['q_foodok'];
      $q_healthy = $_POST['q_healthy'];


    ?>

    <center><h1>질문 5</h1><br>
    <h2>선물받는 분이 반려동물을 키우고 있나요?</h2><br><br>
  <form action="c_1.php" method="POST">
    <input type="submit" name="q_pet" value="O"><p>
    <input type="submit" name="q_pet" value="X"><p>
    <input type="submit" name="q_pet" value="모르겠습니다" ><p>

    <input type="hidden" name="q_gender" value = "<?php echo $_POST['q_gender']?>">
    <input type="hidden" name="q_budget" value = "<?php echo $_POST['q_budget']?>">
    <input type="hidden" name="q_prtcal" value = "<?php echo $_POST['q_prtcal']?>">
    <input type="hidden" name="q_etro" value = "<?php echo $_POST['q_etro']?>">
    <input type="hidden" name="q_foodok" value = "<?php echo $_POST['q_foodok']?>">
    <input type="hidden" name="q_healthy" value = "<?php echo $_POST['q_healthy']?>">
  </form>
    </center>



  </body>
</html>
