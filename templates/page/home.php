<?php get_header(); ?>
	
	<div ng-controller="HomeCtrl">
		<div ng-repeat="post in posts">
			<h1>{{post.post_title}}</h1>
			<p>{{post.post_title}}</p>
		</div>
	</div>

<?php get_footer(); ?>