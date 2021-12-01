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
?>

     <center><h1><h1>질문 2</h1><br>
     <h2>선물받는 분이 외향적인 성격입니까?</h2><br><br>
     <form action="q_3.php" method="POST">
     <input type="submit" name="q_etro" value="O"><p>
     <input type="submit" name="q_etro" value="X"><p>
     <input type="submit" name="q_etro" value="모르겠습니다"><p>

     <input type="hidden" name="q_gender" value = "<?php echo $_POST['q_gender']?>">
     <input type="hidden" name="q_budget" value = "<?php echo $_POST['q_budget']?>">
     <input type="hidden" name="q_prtcal" value = "<?php echo $_POST['q_prtcal']?>">
   </form>
    </center>

  </body>
</html>
