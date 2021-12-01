<!DOCTYPE html>
<html lang="en" dir="ltr">
   <title>GIFT PROPOSAL</title>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body> <center>

    <?php

      $q_gender = $_POST['q_gender'];
      $q_budget = $_POST['q_budget']; //budget 입력값은 `` 속에 입력시켜야 함.
      $q_prtcal = $_POST['q_prtcal'];
      $q_etro = $_POST['q_etro'];
      $q_foodok = $_POST['q_foodok'];
      $q_healthy = $_POST['q_healthy'];
      $q_pet= $_POST['q_pet'];


//echo $_POST['q_prtcal'];
//echo $_POST['q_etro'];
//echo $_POST['q_foodok'];
//echo $_POST['q_healthy'];
//echo $_POST['q_pet']."<br>";

        IF ($_POST['q_prtcal']=="O") {$q_prtcal = 'O';}
        ELSE {$q_prtcal='';}
//var_dump(trim($_POST['q_prtcal'])=="O");
//var_dump(trim($_POST['q_prtcal']));
//var_dump($q_prtcal);
//echo "<br>";

        IF ($_POST['q_etro']=="O") {$q_etro = 'O';}
        ELSE {$q_etro='';}
//var_dump(trim($_POST['q_etro'])=="O");
//var_dump(trim($_POST['q_etro']));
//var_dump($q_etro);
//echo "<br>";

        IF ($_POST['q_foodok']=="O") {$q_foodok = 'O';}
        ELSE {$q_foodok='';}
//var_dump(trim($_POST['q_foodok'])=="O");
//var_dump(trim($_POST['q_foodok']));
//var_dump($q_foodok);
//echo "<br>";

        IF ($_POST['q_healthy']=="O") {$q_healthy = 'O';}
        ELSE {$q_healthy='';}
//var_dump(trim($_POST['q_healthy'])=="O");
//var_dump(trim($_POST['q_healthy']));
//var_dump($q_healthy);
//echo "<br>";

        IF ($_POST['q_pet']=="O") {$q_pet = 'O';}
        ELSE {$q_pet='';}
//var_dump(trim($_POST['q_pet'])=="O");
//var_dump(trim($_POST['q_pet']));
//var_dump($q_pet);
//echo "<br>";



//echo '<h3>'.$q_gender.'</h3>';
//echo '<h3>'.$q_budget.'</h3>';
//echo '<h3>'.$q_prtcal.'</h3>';
//echo '<h3>'.$q_etro.'</h3>';
//echo '<h3>'.$q_foodok.'</h3>';
//echo '<h3>'.$q_healthy.'</h3>';
//echo '<h3>'.$q_pet.'</h3>' ;



          //MySQL 연동해서
                $conn = mysqli_connect("localhost", "root", "860915","giftpropose");
          //MySQL 위의 조건들 where검색해 결과출력, 랜덤순서, 3개만 출
                $select_query = "SELECT gift FROM logic3
                WHERE
                $q_gender = 'O' and
                `$q_budget` = 'O' and
                q_prtcal = '$q_prtcal' and
                q_etro = '$q_etro' and
                q_foodok = '$q_foodok' and
                q_healthy = '$q_healthy' and
                q_pet = '$q_pet'
                ORDER BY rand() LIMIT 3";

                $result = mysqli_query($conn, $select_query);
                while ($row = mysqli_fetch_array($result)) {
                echo '<h2>'.$row[0].'</h2>';
                }

          //MySQL 결과가 0개 인 경우에 sorry 메세지 출력
                $count = mysqli_num_rows($result);
                IF ($count==0) {
                echo "<h2>죄송해요. 적절한 선물이 없네요..;ㅁ;</h2>";
                }
          //MySQL 종료 코드.
                mysqli_close($conn);
      ?>

            <form action="q_6.php" method="POST">
            <input type="submit" name="q_null" value="더 제안 받기" ><p>
            <input type="hidden" name="q_gender" value = "<?php echo $_POST['q_gender']?>">
            <input type="hidden" name="q_budget" value = "<?php echo $_POST['q_budget']?>">
            <input type=button value="가장 처음으로" onClick="location.href='index.php'">
            </form>

</center>

 </body>
</html>
