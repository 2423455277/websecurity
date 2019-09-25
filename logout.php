
<?php
//退出登录并跳转到登录页面
unset($_SESSION['username']);
setcookie("username","",time()-1);   //清空cookie
setcookie("password","",time()-1);
header("location: index.html ");