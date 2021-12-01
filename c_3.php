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
          $q_look = $_POST['q_look'];
          $q_traveller = $_POST['q_traveller'];
          $q_fitness = $_POST['q_fitness'];
          $q_drunker = $_POST['q_drunker'];
          $q_maximalist= $_POST['q_maximalist'];

  //  echo $_POST['q_gender'];
  //  echo $_POST['q_budget'];
  //  echo $_POST['q_look'];
  //  echo $_POST['q_traveller'];
  //  echo $_POST['q_fitness'];
  //  echo $_POST['q_drunker'];
  //  echo $_POST['q_maximalist']."<br>";

            IF ($_POST['q_look']=="O") {$q_look = 'O';}
            ELSE {$q_look='';}
  //  var_dump(trim($_POST['q_look'])=="O");
  //  var_dump(trim($_POST['q_look']));
  //  var_dump($q_look);
 //   echo "<br>";

            IF ($_POST['q_traveller']=="O") {$q_traveller = 'O';}
            ELSE {$q_traveller='';}
  //  var_dump(trim($_POST['q_traveller'])=="O");
  //  var_dump(trim($_POST['q_traveller']));
  //  var_dump($q_traveller);
  //  echo "<br>";

            IF ($_POST['q_fitness']=="O") {$q_fitness = 'O';}
            ELSE {$q_fitness='';}
   // var_dump(trim($_POST['q_fitness'])=="O");
   // var_dump(trim($_POST['q_fitness']));
   // var_dump($q_fitness);
   // echo "<br>";

            IF ($_POST['q_drunker']=="O") {$q_drunker = 'O';}
            ELSE {$q_drunker='';}
  //  var_dump(trim($_POST['q_drunker'])=="O");
  //  var_dump(trim($_POST['q_drunker']));
  //  var_dump($q_drunker);
  //  echo "<br>";

            IF ($_POST['q_maximalist']=="O") {$q_maximalist = 'O';}
            ELSE {$q_maximalist='';}
  //  var_dump(trim($_POST['q_maximalist'])=="O");
  //  var_dump(trim($_POST['q_maximalist']));
  //  var_dump($q_maximalist);
  //  echo "<br>";



  //  echo '<h3>'.$q_gender.'</h3>';
  //  echo '<h3>'.$q_budget.'</h3>';
  //  echo '<h3>'.$q_look.'</h3>';
  //  echo '<h3>'.$q_traveller.'</h3>';
  //  echo '<h3>'.$q_fitness.'</h3>';
  //  echo '<h3>'.$q_drunker.'</h3>';
  //  echo '<h3>'.$q_maximalist.'</h3>';


              //MySQL 연동해서
                    $conn = mysqli_connect("localhost", "root", "860915","giftpropose");
              //MySQL 위의 조건들 where검색해 결과출력, 랜덤순서, 3개만 필터링.
                    $select_query = "SELECT gift FROM logic3
                    WHERE
                    $q_gender = 'O' and
                    `$q_budget` = 'O' and
                    q_look = '$q_look' and
                    q_traveller = '$q_traveller' and
                    q_fitness = '$q_fitness' and
                    q_drunker = '$q_drunker' and
                    q_maximalist = '$q_maximalist'
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
         <input type=button value="가장 처음으로" onClick="location.href='index.php'">
         </form>
       </center>
</body>
</html>
