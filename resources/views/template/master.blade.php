<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title', 'Project 3')
    </title>

	<meta charset='utf-8'>

    @stack('head')

</head>
<body>

	<header>
	</header>

	<section>
		@yield('content')
	</section>

	<footer>
	</footer>

    @stack('body')

</body>
</html>
