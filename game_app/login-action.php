<?
$username = $_POST['username'];
$password = $_POST['password'];


if($username == 'player' && $password == '123'){
    print("WELCOME!");

}
else{
    header("Location: /match.php");
}
?>