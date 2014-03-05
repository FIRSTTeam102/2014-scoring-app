<?php
	set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

	session_start();
	
	// Connect to the database.
	$link = mysql_connect('Team102.org:3306', 'team102_webuser', 'Gearheads');
	
	if (!mysql_select_db('team102_2014', $link)) {
    		echo sprintf('Could not select database, Err: %s', mysql_error());
    		exit;
	}
	$sort = "rank";
	if($_GET['sort'] != null)
		$sort = $_GET['sort'];

	$sql = "select * from team_avg_pts_v order by " . mysql_real_escape_string($sort);
	
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
<div id="button_holder">
	<a href="scoringapp.php" style="color:white; text-style:none;">Scoring App</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="survey.php" style="color:white; text-style:none;">Survey</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="preview.php" style="color:white; text-style:none;">Preview</a>
</div>
 <table border="1" id="standings">
 <tr>
    <?php
		if($colNames == null)
		{
			echo "</tr><td>&nbsp;<tr><th>There are no standings to report.</th>";
		}
		else
		{
			echo "<th>row</th>";
		   //print the header
		   foreach($colNames as $colName)
		   {
			$colName = trim($colName);
		   ?>
			 <th><a href="standings.php?sort=<?php echo ($sort == $colName . ' desc') ? $colName : $colName . ' desc';?>">
					<?php echo str_replace('_', ' ', $colName); ?>
				</a></th>
			<?php
		   }
    ?>
 </tr>

    <?php
		   //print the rows
		   $i = 1;
		   foreach($data as $row)
		   {
				if($i % 10 == 0)
				{
					echo "<th>row</th>";
				   //print the header
				   foreach($colNames as $colName)
				   {
					$colName = trim($colName);
				   ?>
					 <th><a href="standings.php?sort=<?php echo ($sort == $colName) ? $colName . ' desc' : $colName;?>"><?php echo str_replace('_', ' ', $colName); ?></a></th>
					<?php
				   }
					
				}
			  echo "<tr><td>" . $i++ . "</td>";
			  foreach($colNames as $colName)
			  {
				if($colName == "team_number")
				{
					echo '<td><a href="survey.php?team=' . $row[$colName] . '">' . $row[$colName] . "</a></td>";
				}
				else
				{
					echo "<td>".$row[$colName]."</td>";
				}
			  }
			  echo "</tr>";
		   }
		}
    ?>
 </table>
 </body>
</html>