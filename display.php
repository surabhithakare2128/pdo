<?php

class disp{

 	public static function dispTable($e){
        	echo '<table border="4">';
		echo '<tr><th>id</th><th>email</th><th>fname</th><th>lname</th><th>phone</th><th>birthday</th><th>gender</th><th>password</th></tr>';
		foreach($e as $r){
			echo "<tr>";
			echo "<td>".$r['id']."</td>";
			echo "<td>".$r['email']."</td>";
			echo "<td>".$r['fname']."</td>";
			echo "<td>".$r['lname']."</td>";
			echo "<td>".$r['phone']."</td>";
			echo "<td>".$r['birthday']."</td>";
			echo "<td>".$r['gender']."</td>";
			echo "<td>".$r['password']."</td>";
		        echo "</tr>";
		}
		echo '</table>';
	}
} 

?>
