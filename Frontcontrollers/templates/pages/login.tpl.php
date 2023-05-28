<div class="login_div">
		<h1>Login</h1>
			<form method="post" action="?page=set_user">
				<div class="txt_fields">
					<input type="text" name="username" required>
					<label>Username</label>
				</div>
				<div class="txt_fields">
					<input type="password" name="password" required>
					<label>Password</label>
				</div>
				<div class="forgot">
					Forgot password?
				</div>
				<input type="submit" value="Login" onclick="checkCookie()">
				<div class="signup">
					Not a member?<a href="?page=signup" >
					Sign up</a>
				</div>
			</form>
	</div>