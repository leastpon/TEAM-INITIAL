<?php
$db = mysqli_connect("localhost","guest","gamesoft","hotel");
$id = $_POST['u_id'];
$pass = $_POST['u_pass'];


if(mysqli_num_rows(mysqli_query($db,"SELECT * FROM `member` WHERE id = '$id';"))==0)
{
  echo "You send this value to database. <br><b>ID :</b> ".$id."<br><b>PASSWORD :</b> ".$pass."<br>";
  echo "<br><br>!ERROR: Could not found this <b>ID</b> in the database.";
}


if(mysqli_num_rows(mysqli_query($db,"SELECT * FROM `member` WHERE id = '$id';"))!=0)
{
  if(mysqli_num_rows(mysqli_query($db,"SELECT * FROM `member` WHERE pass=password('$pass');"))==0)
  {
    echo "You send this value to database. <br><b>ID :</b> ".$id."<br><b>PASSWORD :</b> ".$pass."<br>";
    echo "<br><br>!ERROR: Could not found this <b>PASSWORD</b> in the database.";
  }
}


if($id && $pass)
{
  if(mysqli_num_rows(mysqli_query($db,"SELECT * FROM `member` WHERE id = '$id' AND pass=password('$pass');"))!=0)
  {
    session_start();

    $name_search= mysqli_query($db,"SELECT name FROM `member` WHERE id = '$id';") ;
    $name= mysqli_fetch_array($name_search);

    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name[name];
    echo "You send this value to database. <br><b>ID :</b> ".$id."<br><b>PASSWORD :</b> ".$pass."<br><br>";
    echo "You got this value from database. <br><b>NAME :</b> ".$name[name]."<br>";
    echo "<script>alert('로그인 성공.'); </script> <br><br> $id 으로 로그인됨 <b><br><br>=== ACCESS GRENTED ===</b>" ; // 통과
    echo "<b><br><br>5초후 메인페이지로 이동합니다</b><meta http-equiv='refresh' content='5;url=../index.php'>";
  }
  else {
    echo "<script>alert('아이디와 패스워드를 확인해주세요.'); </script> <b><br><br>=== ACCESS DENIED ===</b>";
  }
}

else

    echo "<script>alert('잘못된 접근입니다. 관리자에게 문의해주세요.'); </script> <b><br><br>=== ACCESS DENIED ===</b>";
 ?>
