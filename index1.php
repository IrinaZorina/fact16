<?php
//$str = fopen('read.txt','r');
//echo $str;
//echo "<br>";
//$str2 = fread($str, 1);
//echo $str2;
//echo "<br>";
//while ($str2 != null){
  //$str2 = fread($str, 1);
  //echo $str2;
  //if($str2 == "\n" ||$str2 == "\r"){
    //continue;
  //}
  //echo "<br>";
//}
//$str = file('read.txt');
//print_r($str);
//echo "<br>";
//$str2 = file_get_contents('read.txt');
//echo $str2;
//echo "<br>";
//$str2 .= "!!!";
//$str2 = file_put_contents('read.txt', $str2);
//echo "<pre>";
//var_dump($_FILES);
//echo "</pre>";
//move_uploaded_file($_FILES["avatar"]["tmp_name"], __DIR__ . "/upload/" . $_FILES["avatar"]["name"]);
$hostname = 'localhost';
$username = 'BrutalRaynor';
$password = 'Brutal2077';
$dbname = 'project';

//$connect = mysqli_connect($hostname, $username, $password, $dbname);
$connect = new mysqli($hostname, $username, $password, $dbname);
$connect->set_charset('utf8');
$stmt1 = $connect->prepare('INSERT INTO Actor (name) VALUES (?)');
$stmt2 = $connect->prepare('INSERT INTO person (name, earth, id_Actor) VALUES (?, ?, ?)');
$stmt1->bind_param('s', $name_Actor);
$stmt2->bind_param('sii', $name_person, $earth, $id_Actor);
$name_Actor = 'Daniel';
$name_person = 'Hobie';
$earth = 138;
$id_Actor = 7;
$stmt1->execute();
$stmt2->execute();
$stmt1->bind_result($name);
$stmt2->bind_result($name, $earth, $id_Actor);





//$stmt = $connect->prepare('SELECT name, earth FROM person WHERE name = ?');
//$stmt->bind_param('s', $name);
//$name = 'Peter';
//$stmt->execute();
//$stmt->bind_result($name, $earth);
//while ($stmt->fetch()) {
  //echo $name . " (Earth-" . $earth . ")<br>";
//};

//mysqli_set_charset($connect, 'utf8');
//$connect->set_charset('utf8');
//$sql = mysqli_query($connect, 'SELECT * FROM person');
//$sql = $connect->query('SELECT * FROM person');
//$arr = mysqli_fetch_all($sql, MYSQLI_ASSOC);
//$arr = $sql->fetch_all(MYSQLI_ASSOC);
//echo '<pre>';
//print_r($arr);
//echo '</pre>';
//while ($row = $sql->fetch_assoc()) {
  //echo $row['name'] . " (Earth-" . $row['earth'] . ")<br>";
//};






//foreach ($arr as $key => $value){
  //echo $value['name'] . "<br>";
//}
//$sql = mysqli_query($connect, 'INSERT INTO person (name, age) VALUES ("Josh", 28)');
//echo '<pre>';
//print_r($arr);
//echo '</pre>';















