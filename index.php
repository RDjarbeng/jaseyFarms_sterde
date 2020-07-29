<?php
include("header.php");


?>


<!-- End Header -->

<?php 
include("home_content.php");
?>
<script>
if (window.location.href.indexOf('#products') > 0) {
    var element = document.getElementById("prod-nav");

    element.className += " active";
} else if (window.location.href.indexOf('#order') > 0) {
    var element = document.getElementById("order-nav");

    element.className += " active";
} else if (window.location.href.indexOf('#about') > 0) {
    var element = document.getElementById("about-nav");

    element.className += " active";
} else {
    var element = document.getElementById("prod-nav");

    element.className += " active";
}
</script>
<!--  Footer  -->
<?php
	include("footer.php");
	?>