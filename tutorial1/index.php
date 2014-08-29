<?php
include_once 'config.php';
include_once 'database.php';
$db = new Database($config['host'],$config['user'],$config['password'],$config['database']);
$users = $db->execute('select * from users');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Tutorial 1 : List User</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	<style type="text/css">
		.main-menu{
			margin-bottom: 10px;
		}
		.main-container{
			padding: 10px;
		}
		.button-success,
        .button-error,
        .button-warning,
        .button-secondary {
            color: white;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .button-success {
            background: rgb(28, 184, 65); /* this is a green */
        }

        .button-error {
            background: rgb(202, 60, 60); /* this is a maroon */
        }

        .button-warning {
            background: rgb(223, 117, 20); /* this is an orange */
        }

        .button-secondary {
            background: rgb(66, 184, 221); /* this is a light blue */
        }

        .button-xsmall {
            font-size: 70%;
        }

        .button-small {
            font-size: 85%;
        }

        .button-large {
            font-size: 110%;
        }

        .button-xlarge {
            font-size: 125%;
        }
		ol li{
        	margin: 10px 0;
        	padding: 10px 0;
        	border-bottom: 1px solid #eee;
        }
	</style>
</head>
<body>
	<div class="pure-menu pure-menu-open pure-menu-horizontal main-menu" style="background:#eee">
	    <a href="#" class="pure-menu-heading">Ngide.Net Tutorial</a>

	    <ul>
	        <li class="pure-menu-selected"><a href="index.php">Home</a></li>
	        <li class="pure-menu"><a href="create.php">New User</a></li>
	    </ul>
	</div>
	<div class="pure-g">
	    <div class="pure-u-2-5">
	    	<div class="main-container">
	    	<h1>List User</h1>

	    	<?if($users->num_rows > 0) { ?>
		    	<ol>
		    		<?php
		  			while ($user = $users->fetch_object()){
		    		?>
		    		<li>
		    			<?= $user->first_name.' '.$user->last_name ?>

		    			<a href="user.php?id=<?= $user->id?>" class="button-success pure-button button-xsmall ">detail</a>

		    			<a href="delete.php?id=<?= $user->id?>" class="button-warning pure-button button-xsmall ">hapus</a></li>
		    		<?	
		    		}
		    		?>
		    	</ol>
	    	<? } else {?>
	    	<small><i>User masing kosong.</i></small>
	    	<? }?>
			</div>
	    </div>
	    <div class="pure-u-3-5">
	    	
	    </div>
	</div>
</body>
</html>
