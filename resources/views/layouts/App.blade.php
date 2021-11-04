<!doctype html>
<html lang="en">
  <head>
  <title>Curso - @yield('htmlheader_title', '')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/styles.css">
  </head>
  <body>
		
	<div class="wrapper d-flex align-items-stretch">
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
        @include('layouts.navbar')
        @yield('conteudo')
    </div>
    <footer>
      <p>Amós - Curso Eventos</p>
    </footer>
	</div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>

  </body>
</html>