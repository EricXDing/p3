<!DOCTYPE html>
<html>
<head>

	<title>
        @yield('title', 'Project 3')
    </title>

	<meta charset='utf-8'>

	<style>
		h1 {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 200%
		}
		h2 {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 150%
		}
		.contract {
			background: #ffc8b0;
			margin: 5%;
			padding: 10px;
		}
	</style>
    @stack('head')
<body>
	<div>
		<h1>Contract Auto Compiler</h1>
	</div>

	<section>
		@yield('content')
	</section>

	<footer>
		<hr>
		<div>
		DISCLAIMER: this web applicaiton is for educational purpose only, and not for actual contact drafting use.
		</div>
	</footer>

    @stack('body')

</body>
</html>
