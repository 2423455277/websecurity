<?php
session_start();
if(empty($_COOKIE['username'])&&empty($_COOKIE['password'])){
    if(isset($_SESSION['username']))
        echo "登录成功，欢迎您".$_SESSION['username']."<a href='csrf1.html'>修改密码</a>";
    else
        echo "你还没有登录，<a href='login.html'>请登录</a>";
}
