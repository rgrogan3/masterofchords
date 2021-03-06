@extends("app")
@section("content")

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<div class="fill" style="background-image:url('{{ asset('img/prs.jpg') }}');"></div>
			<div class="carousel-caption">
				<h1>Create</h1>
			</div>
		</div>
		<div class="item">
			<div class="fill" style="background-image:url('{{ asset('img/Guitar.jpg') }}');"></div>
			<div class="carousel-caption">
				<h1>Inspire</h1>
			</div>
		</div>
		<div class="item">
			<div class="fill" style="background-image:url('{{ asset('img/bass.jpg') }}');"></div>
			<div class="carousel-caption">
				<h1>Electrify</h1>
			</div>
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="icon-next"></span>
	</a>
</header>

<!-- Page Content -->
<div class="container">

	<!-- Marketing Icons Section -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				Master of the Chords
			</h1>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-check-circle"></i> New Song</h4>
				</div>
				<div class="panel-body">
					<p>Create a song of your own! Put in a few notes and begin your Masterpiece!</p>
					<a href="editor" class="btn btn-default">Get Going!</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-home"></i> Sign in</h4>
				</div>
				<div class="panel-body">
					<p>Already a master of the chords? Sign in now to keep building your legacy!</p>
					<a href="#" class="btn btn-default">Sign in</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-thumbs-up"></i> New User?</h4>
				</div>
				<div class="panel-body">
					<p>Create an account to save your creations!</p>
					<a href="#" class="btn btn-default">Sign up</a>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- Script to Activate the Carousel -->
<script>
	$('.carousel').carousel({
		interval: 5000 //changes the speed
	})
</script>
<!-- /.container -->
@endsection