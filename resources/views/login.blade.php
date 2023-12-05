<html lang="en">
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-warning">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title text-center fw-bold mb-4">LOGIN</h1>

							<form method="POST"  action="/" class="needs-validation">
                                @method('POST')
                                @csrf
								<div class="mb-3">
									<label class="mb-2 text-muted" for="username">Username</label>
									    <input id="username" type="text" class="form-control" name="username" require autofocus placeholder="Masukan Username" required>
									<div class="invalid-feedback">
										Username is invalid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
									</div>
									<input id="password" type="password" class="form-control" name="password" required placeholder="Masukan Password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="d-grid gap-3">
									<button type="submit" class="btn btn-primary">
										Login
									</button>
								</div>
								</div>
							</form>


						</div>
						<div class="card-footer py-3 border-0">
							
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2023 - Ananta
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>
</body>
</html>