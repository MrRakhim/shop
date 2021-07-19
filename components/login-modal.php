	<!-- Login modal -->
	<div class="login-modal" id="login-modal">
		<button class="login-close-btn" onclick="closeModal('login-modal')">
			<i>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
					<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
				</svg>
			</i>
		</button>
		<div class="login-modal-inner">
			<div class="login-form">

				<form method="POST" action="./server/users/login.php">
					<div class="mb-3">
						<label class="form-label">Email address</label>
						<input type="email" name="login_email" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">Password</label>
						<input type="password" name="login_password"  class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Sign In</button>
				</form>

			</div>

			<div class="login-wall">
				<button type="button" class="btn btn-secondary">Sign Up</button>
			</div>
		</div>
	</div>