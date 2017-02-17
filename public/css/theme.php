<?php
session_start();
header("Content-type: text/css");

//$rgba  = "27,119,188";
$emaus = $_SESSION["emaus"];

$emaus = json_decode($emaus);


$colour_a = $emaus->colour_a;
$colour_b = $emaus->colour_b;

?>

#service .media .media-body h3{
    color: <?=$colour_a?>;
}
.project-filter ul li a:hover, .project-filter ul li a.active {
    background-color: <?=$colour_a?>;
}
.plus {
    background: url(../img/icons/plus.png) no-repeat scroll center center <?=$colour_a?>;
}
figcaption.mask span {
    color: <?=$colour_a?>;
}
.owl-controls .owl-page.active span, .owl-controls .owl-page:hover span {
    background-color: <?=$colour_a?>;
    border-color: <?=$colour_a?>;
}
.btn-blue {
    background-color: <?=$colour_a?>;
}
.subscription-form #mail-submit {
    background-color: <?=$colour_a?>;
}
.copyright a {
    color: <?=$colour_b?>;
}
.btn-price {
    border: 1px solid <?=$colour_a?>;
}
.pricing-table .price {
    border-top: 1px solid <?=$colour_a?>;
}
.pricing-table ul li:after {
    border-bottom: 1px solid <?=$colour_a?>;
}
.navigation .navbar-nav > li.current > a {
    color: <?=$colour_a?>;
    border-bottom: 1px solid <?=$colour_a?>;
}
/*.carousel-caption > div {
    background-color: <?=$colour_a?>;
}*/
.carousel-indicators .active {
    background-color: <?=$colour_a?>;
}
#nav-arrows > a.sl-next:hover {
    background-color: <?=$colour_a?>;
    border-color: <?=$colour_a?>;
}
.service-features {
  background-color: <?=$colour_a?>;
}

.section-title p {
    color : <?=$colour_a?>;
}
.contact-details p{
    color : <?=$colour_a?>;
}
@media only screen and (max-width: 767px) {
	responsive.css:129
	.navigation .navbar-nav > li > a {
	    background-color: <?=$colour_a?>;
	}
	.navigation .navbar-nav > li > a:hover {
	  background-color: <?=$colour_b?>;
	}
}