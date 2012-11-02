<?php
$ssl_error=$_GET['errorCode'];
if ($ssl_error < 4000)
{echo "System error";}
else if ($ssl_error > 4000)
{echo "Authentication error , uid, vid, or pin";} else
{echo "syntax error";}
?>