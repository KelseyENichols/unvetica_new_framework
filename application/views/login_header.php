<?php

	// UNVETICA (C) 2019
	// Header Login File

		// FUTURE : Checks for Session Login and if not serves the Login and Register Links
		//          Currently Static as a placeholder


	defined('BASEPATH') OR exit('No direct script access allowed');
?>


	<!-- BEGIN IF/ELSE LOGIN TO DETECT IF SOMEONE IS ALREADY LOGGED IN -->


<br/>

<?php

	if(isset($_SESSION['loggedIn'])){
		
		if($_SESSION['loggedIn'] == '1'){

			// display the username

		?>
		
		<div>
			<table wditdh="100%">
				<tr>
					<td>
						
					</td>
				</tr>
			</table>
		</div>

		<?php 	

		}
	}

	else {

?>


			<div>
				<table width="100%">
					<tr>
						<td width="90%">
						</td>
						<td width="5%">
							<span style="font-size:11px;">
								<a href -= "#">
									Sign In
								</a>
							</span>
						</td>
						<td width="5%">
							<span style="font-size:11px;">
								<a href = "#">
									Register
								</a>
							</span>
						</td>
					</tr>
				</table>
			</div>

<?php
	}
?>

<div>
	<br/>
</div>