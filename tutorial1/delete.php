<?php
include_once 'config.php';
include_once 'database.php';
$db = new Database($config['host'],$config['user'],$config['password'],$config['database']);

$id = $_GET['id'];

$rs = $db->execute('delete from users where id='.$id);

if($rs){
	header('Location: index.php?delete=true');
}else{
	header('Location: index.php?delete=false');
}

?>