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

     ?>

    <center><h1>기본 질문2</h1>
      <h2>선물 예산은 어느정도 입니까?</h2><p>
        <form action="q_1.php" method="POST">
          <input type="radio" name="q_budget" value="10000">10,000원 미만<p>
          <input type="radio" name="q_budget" value="30000">30,000원 미만<p>
          <input type="radio" name="q_budget" value="50000">50,000원 미만<p>
          <input type="radio" name="q_budget" value="70000">70,000원 미만<p>
          <input type="radio" name="q_budget" value="100000">100,000원 미만<p>
          <input type="radio" name="q_budget" value="150000">150,000원 미만<p>
          <input type="radio" name="q_budget" value="200000">200,000원 미만<p>
          <input type="submit" value="다음"><p>
          <input type="hidden" name="q_gender" value = "<?php echo $_POST['q_gender'];?>">
    </form>
    </center>


      </body>
</html>
