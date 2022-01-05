<?php 
include 'config.php';
	
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	
	$i = 0;
	while ($row = mysqli_fetch_assoc($result)) {
		
	$avg_num = '';	
	$output = '<tr>
				<input type="hidden" value="'.$row["id"].'">
				<td>'.++$i.'</td>					
				<td>'.$row["name"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["age"].'</td>
				<td>';
				if (!empty($row["rating_avg"])) {
					
					$output .= $avg_num .= number_format($row["rating_avg"]/$row["rating_no"], 2);
				}
	$output .= '</td>
				<td>
					<ul class="star">';

						for ($x=1; $x <= 5; $x++) { 
							
							if ($avg_num >= $x) {
								
								$output .= '<li data-id="'.$x.'"><i class="fa fa-star"></i></li>';
							}
							else{
								$output .= '<li data-id="'.$x.'"><i class="fa fa-star-o"></i></li>';
							}								
						}							
		$output .= '</ul>
				</td>					
			</tr>';

		echo $output;
	}
	
}
else{
	echo '<tr colspan="6"><td>No data found</td></tr>';
}
