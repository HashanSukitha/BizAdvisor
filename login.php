<?php include("head.php"); ?>

<div id="logBox">

	<div id="logLeft">
	</div>

<div id="logRightOuter">
</div>
	<div id="logRight">
	 <div class="tabHeader" id="loginTab" onclick="loginSignUpTabChanger('logForm','signUpForm','loginTab','signUpTab')" style="border-bottom:none;">Log in</div>
	 <div class="tabHeader" id="signUpTab" onclick="loginSignUpTabChanger('signUpForm','logForm','signUpTab','loginTab')">Sign up</div>
	 <form id="logForm">
			<div id="LogEmail">
				 <label id="LogEmailLabel">E-Mail</label>
				 <input type="text" name="Uname" />
			</div>
			
			<div id="LogPwd">
				 <label id="LogPwdLabel">Password</label>
				 <input type="password" name="Pword" value=""/>
			</div>
			
			<div id="LogButton">
				  <input type="button" value="Log in" />
			</div>

      </form>
	  
	  <form id="signUpForm" style="display:none;">
	  
			<div id="LogEmail">
				 <label id="LogEmailLabel">Name</label>
				 <input type="text" name="Uname" id="SU_Uname"/>
			</div>
			
			<div id="LogPwd">
				 <label id="LogPwdLabel">E-mail</label>
				 <input type="text" name="Uemail" id="SU_Uemail"/>
			</div>
			
			<div id="LogPwd">
				 <label id="LogPwdLabel">Password</label>
				 <input type="password" name="UPword" id="SU_UPword"/>
			</div>
			
			<div id="LogPwd">
				 <label id="LogPwdLabel">Confirm Password</label>
				 <input type="password" name="ConfmUPword" id="SU_ConfmUPword"/>
			</div>
			
			<div id="LogButton">
				  <input type="button" value="Sign up" onclick="SaveNewUser()" />
			</div>

      </form>
	  
	</div>

	
</div>
	   
	   
<?php include("footer.php");?>
