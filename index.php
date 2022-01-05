<?php 
require 'header.php'; 
?>

	<h4>WELCOME</h4>
	<h4>HELLO, GUEST</h4>
	<div class="main">
		
		<!-- DataTable -->
		<table width="100%" border="1" style="text-align: center;">
			<thead>
				<tr>
					<th colspan="6">DataTable</th>
				</tr>
				<tr>
					<th>S#</th>
					<th>User</th>
					<th>Email</th>
					<th>Age</th>
					<th>Avg Rating</th>
					<th>Star Rating</th>
				</tr>
			</thead>
			<tbody id="tbody"></tbody>
		</table>
		
	</div> <!-- End of Main Div -->

<?php require 'footer.php'; ?>