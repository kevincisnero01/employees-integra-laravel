<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title','App')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- ===== PLUGINS ===== -->
	<link rel="stylesheet" type="text/css" href="/plugins/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="/plugins/jquery/jquery-3.3.1.js" defer></script>
	<script type="text/javascript" src="/plugins/bootstrap/js/bootstrap.js" defer></script>

</head>
<body>
	<div class="container">
	
	<header>
		<div class="row">
			<div class="col-md-12">

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <div class="container-fluid">
			    <a class="navbar-brand" href="#">TEST INTEGRA</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarNav">
			      <ul class="navbar-nav">
			        <li class="nav-item">
			          <a class="nav-link" href="/">Inicio</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="{{ route('employee.index') }}">Parte I</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="#">Parte I</a>
			        </li>
			        
			      </ul>
			    </div><!-- /#navbarNav -->
			  </div><!-- /.container-fluid -->
			</nav>

			</div><!-- /.col -->
		</div><!-- /.row -->
	</header>

	@yield('content')

	</div><!--container-->
</body>
</html>	