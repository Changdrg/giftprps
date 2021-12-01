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
          $q_computer = $_POST['q_computer'];
          $q_meaning = $_POST['q_meaning'];
          $q_sobi = $_POST['q_sobi'];
          $q_child = $_POST['q_child'];
          $q_householic= $_POST['q_householic'];

  //  echo $_POST['q_gender'];
  //  echo $_POST['q_budget'];
  //  echo $_POST['q_computer'];
  //  echo $_POST['q_meaning'];
  //  echo $_POST['q_sobi'];
  //  echo $_POST['q_child'];
  //  echo $_POST['q_householic']."<br>";

            IF ($_POST['q_computer']=="O") {$q_computer = 'O';}
            ELSE {$q_computer='';}
  //  var_dump(trim($_POST['q_computer'])=="O");
  //  var_dump(trim($_POST['q_computer']));
  //  var_dump($q_computer);
 //   echo "<br>";

            IF ($_POST['q_meaning']=="O") {$q_meaning = 'O';}
            ELSE {$q_meaning='';}
  //  var_dump(trim($_POST['q_meaning'])=="O");
  //  var_dump(trim($_POST['q_meaning']));
  //  var_dump($q_meaning);
  //  echo "<br>";

            IF ($_POST['q_sobi']=="O") {$q_sobi = 'O';}
            ELSE {$q_sobi='';}
   // var_dump(trim($_POST['q_sobi'])=="O");
   // var_dump(trim($_POST['q_sobi']));
   // var_dump($q_sobi);
   // echo "<br>";

            IF ($_POST['q_child']=="O") {$q_child = 'O';}
            ELSE {$q_child='';}
  //  var_dump(trim($_POST['q_child'])=="O");
  //  var_dump(trim($_POST['q_child']));
  //  var_dump($q_child);
  //  echo "<br>";

            IF ($_POST['q_householic']=="O") {$q_householic = 'O';}
            ELSE {$q_householic='';}
  //  var_dump(trim($_POST['q_householic'])=="O");
  //  var_dump(trim($_POST['q_householic']));
  //  var_dump($q_householic);
  //  echo "<br>";



  //  echo '<h3>'.$q_gender.'</h3>';
  //  echo '<h3>'.$q_budget.'</h3>';
  //  echo '<h3>'.$q_computer.'</h3>';
  //  echo '<h3>'.$q_meaning.'</h3>';
  //  echo '<h3>'.$q_sobi.'</h3>';
  //  echo '<h3>'.$q_child.'</h3>';
  //  echo '<h3>'.$q_householic.'</h3>';


              //MySQL 연동해서
                    $conn = mysqli_connect("localhost", "root", "860915","giftpropose");
              //MySQL 위의 조건들 where검색해 결과출력, 랜덤순서, 3개만 필터링.
                    $select_query = "SELECT gift FROM logic3
                    WHERE
                    $q_gender = 'O' and
                    `$q_budget` = 'O' and
                    q_computer = '$q_computer' and
                    q_meaning = '$q_meaning' and
                    q_sobi = '$q_sobi' and
                    q_child = '$q_child' and
                    q_householic = '$q_householic'
                    ORDER BY rand() LIMIT 3";

              // 위의 3개 필터링 된 값을 순차적으로 3개 출력함.
                    $result = mysqli_query($conn, $select_query);
                    while ($row = mysqli_fetch_array($result)) {
                    echo '<h2>'.$row[0].'</h2>';}
              //MySQL 결과가 0개 인 경우에 sorry 메세지 출력
                    $count = mysqli_num_rows($result);
                    IF ($count==0) {
                    echo "<h2>죄송해요. 적절한 선물이 없네요..;ㅁ;</h2>";
                    }
              //MySQL 종료
                    mysqli_close($conn);



        ?>

         <form action="q_11.php" method="POST">
         <input type="submit" name="q_null" value="더 제안 받기" ><p>
         <input type="hidden" name="q_gender" value = "<?php echo $_POST['q_gender']?>">
         <input type="hidden" name="q_budget" value = "<?php echo $_POST['q_budget']?>">
         <input type=button value="가장 처음으로" onClick="location.href='index.php'">
         </form>
       </center>
</body>
</html>
