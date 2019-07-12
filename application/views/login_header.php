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
			<table witdh="100%">
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

	<div id="loginModalBox" style="display: none; position: absolute; top: 0px; left: 0px; z-index: 30; background-color: #CCCCCC; height:100%; width:100%; opacity: 0.8;">

	</div>

	<div id ="registerForm" style="display: none; position: absolute; z-index: 33; width:440px; height:600px; left: 36%; top: 10%; background-color: #FFFFFF; opacity: 1.0;">
		<form id="unveticaRegisterForm" method="POST" action="#">

			<table width=90%" height="90%" align="center">
				<tr>
					<td colspan="3" height="30">
					</td>
				</tr>
				<tr>
					<td colspan="3" height="10">
						<span style="font-size:18px; font-weight: bold;">
							Register with Unvetica
						</span>
					</td>
				</tr>
				<tr>
					<td colspan="3" height="50">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Email
					</td>
					<td colspan="1">
					</td>
					<td colspan="1">	
						<input type="text" id="registerEmail" size="30">
					</td>
				</tr>
				<tr>
					<td colspan="3" height="20">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Username
					</td>
					<td colspan="1">
					</td>
					<td colspan="1">	
						<input type="text" id="registerUsername" size="30">
					</td>
				<tr>
				<tr>
					<td colspan="3" height="20">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Password
					</td>
					<td colspan="1">
					</td>
					<td colspan="1">	
						<input type="password" id="registerPassword1" size="30">
					</td>
				</tr>
				<tr>
					<td colspan="3" height="20">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						*Password*
					</td>
					<td colspan="1">
					</td>
					<td colspan="1">	
						<input type="password" id="registerPassword2" size="30">
					</td>
				</tr>
				<tr>
					<td colspan="3" height="20">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Fist Name
					</td>
					<td colspan="1">
					</td>
					<td colspan="1">	
						<input type="text" id="registerFistname" size="30">
					</td>
				</tr>
				<tr>
					<td colspan="3" height="20">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Last Name
					</td>
					<td colspan="1">
					</td>
					<td colspan="1">	
						<input type="text" id="registerFistname" size="30">
					</td>
				</tr>	
				<tr>
					<td colspan="3" height="20">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Phone Number
					</td>
					<td colspan="1">
					</td>
					<td colspan="1">	
						<input type="text" id="registerPhone" size="30">
					</td>
				</tr>	
				<tr>
					<td colspan="3" height="40">
					</td>
				</tr>			
				<tr>
					<td colspan="3">
						<table width="100%" align="center">
							<tr>
								<td width="50%"" align="center">
									<input id="registerSubmit" type="button" value="Register">
								</td>
								<td width="50%" align="center">
									<input id="registerCancel" type="button" value="Cancel">
								</td>
						</table>
					</td>
				</tr>

			</table>
		</form>
	</div>

	<div id = "loginForm" style="display: none; position: absolute; z-index: 33; width:360px; height:270px; left: 36%; top: 20%; background-color: #FFFFFF; opacity: 1.0;">
		<form id="unveticaLoginForm" method="POST" action="#">

			<table width=90%" height="90%" align="center">
				<tr>
					<td colspan="3" height="20">
						<br/>
					</td>
				</tr>

				<tr>
					<td colspan="3" height="40">
						<span style="font-size:18px; font-weight: bold;">
							Sign into Unvetica
						</span>
					</td>
				</tr>


				<tr>
					<td colspan="2" height="20" align="center"></td>
					<td>
						<div id="blankUsername" style="display:none; color: red; font-size:11px;">
							username cannot be blank
						</div>
						<div id="blankPassword" style="display:none; color: red; font-size:11px;">
							password cannot be blank
						</div>
						<div id="invalidLogin" style="display:none; color: red; font-size:11px;">
							username or password is invalid
						</div>
					</td>
				</tr>

				<tr>
					<td width="25%">
						<span style="font-size:14px;">
							Username
						</span>
					</td>
					<td width="10%">
					</td>
					<td width="65%">
						<input id="unveticaUsername" type="text" size="15">
					</td>
				</tr>

				<tr>
					<td colspan="3" height="15">
						<br/>
					</td>
				</tr>

				<tr>
					<td width="25%">
						<span style="font-size:14px;">
							Password
						</span>
					</td>
					<td width="10%">
					</td>
					<td width="65%">
						<input id="unveticaPassword" type="password" size="15">
					</td>
				</tr>

				<tr>
					<td colspan="3" height="15">
						<br/>
					</td>
				</tr>

				<tr>
					<td colspan="3">
						<table width="100%" align="center">
							<tr>
								<td width="50%"" align="center">
									<input id="loginSubmit" type="button" value="Login">
								</td>
								<td width="50%" align="center">
									<input id="loginCancel" type="button" value="Cancel">
								</td>
						</table>
					</td>
				</tr>

				<tr>
					<td colspan="3" height="15">
						<br/>
					</td>
				</tr>

			</table>	
		</form>
	</div>	

			<div>
				<table width="100%">
					<tr>
						<td width="90%">
						</td>
						<td width="5%">
							<div id = "unveticaLogin" style="font-size:11px;">
								<a href = "#">
									Sign In
								</a>
							</div>
						</td>
						<td width="5%">
							<div id = "unveticaRegister" style="font-size:11px;">
								<a href = "#">
									Register
								</a>
							</div>
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



<script>

	$( document ).ready(function(){

		$('#unveticaLogin').click(function(){

			$('#unveticaUsername').val('');
			$('#unveticaPassword').val('');

			$('#loginModalBox').show();
			$('#loginForm').show();

		});

		$('#unveticaRegister').click(function(){

			$('#loginModalBox').show();
			$('#registerForm').show();

		});


		$('#loginCancel').click(function(){

			$('#invalidLogin').hide();
			$('#blankUsername').hide();
			$('#blankPassword').hide();

			$('#loginForm').hide();
			$('#loginModalBox').hide();
		});

		$('#loginSubmit').click(function(){

			var username = $('#unveticaUsername').val();
			var password = $('#unveticaPassword').val();

			if(username == '' || username === undefined){
				$('#invalidLogin').hide();
				$('#blankPassword').hide();
				$('#blankUsername').show();
				return false;
			}

			if(password == '' || password === undefined){
				$('#invalidLogin').hide();
				$('#blankUsername').hide();
				$('#blankPassword').show();
				return false;
			}

			alert('simulate login');

			$('#invalidLogin').hide();
			$('#blankUsername').hide();
			$('#blankPassword').hide();

			$('#loginForm').hide();
			$('#loginModalBox').hide();
			
			return false;
		});

		$('#registerCancel').click(function(){

			$('#registerForm').hide();
			$('#loginModalBox').hide();			

		});

		$('#registerSubmit').click(function(){

			$('#registerForm').hide();
			$('#loginModalBox').hide();			

		});


	});



</script>




