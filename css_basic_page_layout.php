<!DOCTYPE html>
<html>
<head>
	<title>HTML & CSS task</title>
	<style type="text/css">
		.container{
			border: 2px solid black;
			background-color: blue;
			padding: 3px;
			
		}
		.body{
			background-color: white;
		}
		.logo_menu{
			padding: 10px;
			margin: 3px;
			overflow: hidden;
			border: 2px solid black;
			
		}
		.logo{
			padding: 2px;
			width: 500px;
			float: left;
			border: 1px solid black;

		}
		.menu{
			padding: 2px;
			float: right;
			width: 778px;
			border: 1px solid black;
			margin-top: auto;
		}
		.menu div{
			display: inline;
		}

		.main
		{
			padding: 10px;
			margin: 3px;
			overflow: hidden;
			border: 2px solid black;
		}
		.content
		{
			padding: 2px;
			float: left;
			width: 980px;
			border: 1px solid black;

		}
		.sidebar
		{
			padding: 2px;
			float: right;
			width: 300px;
			border: 1px solid black;


		}
		.footer
		{
			margin: 3px;
			padding: 10px;
			overflow: hidden;
			border: 2px solid black;
		}
		.leftlink
		{
			float: left;
			width: 50%;


		}
		.leftlink div
		{
			display: inline;
		}
		.rightlink
		{
			float: right;
			width: 50%;


		}
		.rightlink div
		{
			display: inline;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="body">
			<div class="logo_menu">
				<div class="logo">
					<p>Logo Image...</p>
					<p>Logo Image...</p>
					<p>Logo Image...</p>
					<p>Logo Image...</p>
					<p>Logo Image...</p>
				</div>
				<div class="menu" align="right">
					<div>Menu...</div>
					<div>Menu...</div>
					<div>Menu...</div>
					<div>Menu...</div>
				</div>
			</div>

			<div class="main">
				<div class="content">
					<p>Content...</p>
					<p>Content...</p>
					<p>Content...</p>
					<p>Content...</p>
					<p>Content...</p>
					<p> </p>
					<p>Content...</p><p>Content...</p><p>Content...</p><p>Content...</p> <p>Content...</p><p>Content...</p><p>Content...</p><p>Content...</p><p>Content...</p><p></p><p>Content...</p><p>Content...</p><p>Content...</p>
				</div>
				<div class="sidebar" align="left">
					<p>Sidebar...</p>
					<p>Sidebar...</p>
					<p>Sidebar...</p>
					<p>Sidebar...</p>
					<p>Sidebar...</p>
					<p> </p>
					<p>Sidebar...</p><p>Sidebar...</p>
				</div>
			</div>

			<div class="footer">
				<div class="leftlink">
					<div>Left Link...</div>
					<div>Left Link...</div>
					<div>Left Link...</div>
				</div>
				<div class="rightlink" align="right">
					<div>Right Link...</div>
					<div>Right Link...</div>
					<div>Right Link...</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>