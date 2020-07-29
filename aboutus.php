<?php 
	include("header.php");
	include("about_content.php");

?>


<script>
var newTitle = "Jasey Farms | About";
var newDescription = "About Jasey Farms";

if (document.title != newTitle) {
    document.title = newTitle;
}
//$('meta[name="description"]').attr("content", newDescription);

var element = document.getElementById("about-nav");

element.className += " active";

/*
// Get the container element
var btnContainer = document.getElementById("myDIV");



// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("nav-link");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
        
    });*/
</script>
<!--  Footer  -->
<?php 
	include("footer.php");
  ?>