<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<h2>Test GET web service</h2>
<form name="form" method="post" action="index.php">
	<input type="hidden" name="action" value="InteractionAdd">
	<table>
	<tr>
		<td align="right">id</td>
		<td><input name="id" type="text" size="50" maxlength="50"></td>
	</tr>
	<tr>
		<td colspan="3"><input type="submit" name="boton" value="Send"></td>
	</tr>
	</table>
</form>

<form name="form" method="post" action="index.php">
	<input type="hidden" name="action" value="OnGetAgentState">
	<table>
	<tr>
		<td align="right">id</td>
		<td><input name="id" type="text" size="50" maxlength="50"></td>
	</tr>
	<tr>
		<td colspan="3"><input type="submit" name="boton" value="Send"></td>
	</tr>
	</table>
</form>

</body>
</html>
