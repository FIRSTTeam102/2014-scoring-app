<?php
	set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

	session_start();
	
	// Connect to the database.
	$link = mysql_connect('Team102.org:3306', 'team102_webuser', 'Gearheads');
	
	if (!mysql_select_db('team102_2014', $link)) {
    		echo 'Could not select database';
    		exit;
	}
	$sql = "select * from team_avg_pts_v
				order by avg_pts desc";
	
	$standingsQ = mysql_query($sql, $link);
	if (!$standingsQ) {
		echo "DB Error, could not query match teams\n";
		echo 'MySQL Error: ' . mysql_error();
		exit;
	}

  $data = array();
  while($row = mysql_fetch_assoc($standingsQ))
  {
     $data[] = $row;
  }
  if($data != null)
	$colNames = array_keys(reset($data));
  else 
	$colNames = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><? echo $_SESSION['tournament']->Title; ?> Standings</title>
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
	<script type='text/javascript' src='jqueryui/js/jquery-1.10.2.js'></script>
    <link rel="stylesheet" href="stylesheet.css" />
    <!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
 <table border="1" id="standings">
 <tr>
    <?php
		if($colNames == null)
		{
			echo "</tr><td>&nbsp;<tr><th>There are no standings to report.</th>";
		}
		else
		{
		   //print the header
		   foreach($colNames as $colName)
		   {
			  echo "<th>" . str_replace('_', ' ', $colName) . "</th>";
		   }
    ?>
 </tr>

    <?php
		   //print the rows
		   foreach($data as $row)
		   {
			  echo "<tr>";
			  foreach($colNames as $colName)
			  {
				 echo "<td>".$row[$colName]."</td>";
			  }
			  echo "</tr>";
		   }
		}
    ?>
 </table>
 </body>
</html>