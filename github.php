<?php 
	echo shell_exec("cd /var/www/sigmarocks.in/server && git pull 2>&1")
	// exec('git stash');
	// exec('git pull');
?>