<?php
	$leftNavArray = array(
		array("Audition & Job", "#", 
			array()),
		array("Post Job", '#',
			array()),
		array("Search Talents", '#',
			array()),
		array("Contests", '#', 
			array()),
		array("Testimonials", '#'),
	);
	
	$rightNavArray = array(
		array("Welcome", '#')
	);
	
	$class = '';
	foreach($rightNavArray as $nav){
		$rs = "<ul class='right'>";
		if(!isset($nav[2]))
			$rs .= "<li class='active'><a href='$nav[1]'>$nav[0]</a></li>";
		
		$rs .= '</ul>';
	}
	
	$ls = "<ul class=left>";
	foreach($leftNavArray as $nav){
		$ls = "";
		if(!isset($nav[2]))
			echo '';
		else
			$ls .= "<li class='has-dropdown'>";
	}
	$ls .= "</ul>";
?>

<nav class="top-bar" data-topbar>
  <ul class="title-area">
		<li class="name">
            <h1><a href="#">Logo</a></h1>
		</li>
		<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
		<ul class="right">
            <li class="active"><a href="#">Sign Up / Login</a></li>
		</ul>
		<ul class="left">
			<li class="has-dropdown">
				<a href="#">Audition & Job</a>
				<ul class="dropdown">
					<li><a href="#">First link in dropdown</a></li>
				</ul>
            </li>
			<li class="has-dropdown">
				<a href="#">Post Job</a>
				<ul class="dropdown">
					<li><a href="#">First link in dropdown</a></li>
				</ul>
            </li>
			<li class="has-dropdown">
				<a href="#">Search Talents</a>
				<ul class="dropdown">
					<li><a href="#">First link in dropdown</a></li>
				</ul>
            </li>
			<li class="has-dropdown">
				<a href="#">Contests</a>
				<ul class="dropdown">
					<li><a href="#">First link in dropdown</a></li>
				</ul>
            </li>
			<li><a href='#'>Testimonials</a></li>
		</ul>
	</section>
</nav>