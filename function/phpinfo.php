<?php
    if(isset($_GET['what'])) {
		phpinfo($_GET['what']);
	} else {
		echo 'test';
		phpinfo();
	}
?> 