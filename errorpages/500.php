<!DOCTYPE html>
<!-- PHP Wrapper - 500 Server Error -->
<html>
<head>
	<meta charset="utf-8" />
	<title>500 Server Error</title>
</head>
<body>
<h1>
	500 Server Error
</h1>
A misconfiguration on the server caused a hiccup. Check the server logs, fix the problem, then try again.
<hr>

<?
echo "URL: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]<br>\n";
$fixer = "checksuexec ".escapeshellarg($_SERVER[DOCUMENT_ROOT].$_SERVER[REQUEST_URI]);
echo `$fixer`;
?>
</body>
</html>
