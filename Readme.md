#This is just a simple but funtional Login and registration system.
It uses simple funtionalities like:
validate($data){
$data = trim($data);
$data = stripcslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$pass = md5($pass);

session_start();
session_unset();
session_destroy();

#You can check some of the codes.
