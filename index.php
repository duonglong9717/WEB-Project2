<?php
include 'includes/header.php';
?>

<div class="jumbotron jumbotron-fluid text-white">
	<div class="container text-center">
		<h1 class="display-1"><b> Howdy, Marverler </b></h1>
		<p class="lead">Yohoho! Welcome all of you to visit my little site</p>
		<a href="post.php" class="btn btn-outline-light col-6">Visit Post Gallery</a>
		<p class="num-posts"></p>
	</div>
</div>

<div class="container">
	<?php if (isset($_GET['login'])) : ?>
		<div class="alert alert-success" role="alert">
			You have logged in successfully!
		</div>
	<?php elseif (isset($_GET['logout'])) : ?>
		<div class="alert alert-warning" role="alert">
			You have logged out successfully!
		</div>
	<?php endif; ?>
</div>



<div class="container">

	<div class="row card-container">
		<h2>Some content</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

</div>

<?php
include 'includes/footer.php';
?>