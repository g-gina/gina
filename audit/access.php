<?php
require("../library/duration.php");
?>
<html>
<link href="../style/design.css" rel="stylesheet" type="text/css"/>
<head>
		<style type="text/css" title="currentStyle">
			@import "../style/demo_table.css";
		</style>
		<script type="text/javascript" language="javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="../js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			jQuery.fn.dataTableExt.aTypes.push(
				function ( sData ) {
					return 'html';
				}
			);
			
			$(document).ready(function() {
				$('#example').dataTable();
			} );
		</script>
</head>
<body>
<fieldset>
<legend>ACCESS LOG</legend>
<p></p>
<div id="demo">
<table cellpadding="0" cellspacing="0" border="1" bordercolor="black" class="display" id="example">
	<thead>
		<tr align="left">
			<th>Email</th>
			<th>Date</th>
			<th>IP Address</th>
		</tr>
	</thead>
	<tbody>
<?php
require("../library/connection.php");

$sql = "SELECT * FROM accesslog";
$result = mysql_query($sql,$con);

if ($myrow = mysql_fetch_array($result)){
do {

?>
	<tr>
	<td><?php printf("%s",$myrow["name"]); ?></td>
	<td><?php printf("%s",$myrow["date"]); ?></td>
	<td><?php printf("%s",$myrow["ip"]); ?></td>
	</tr>
<?php
} while ($myrow = mysql_fetch_array($result));

} else {
	echo "No information."; 
}
?>		
</table>
</div>
</fieldset>
</body>
</html>
