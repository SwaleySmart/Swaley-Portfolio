// Add your JS customizations here

jQuery("#main-menu a").on("click", function () {
	jQuery("#main-menu").find("li.active").removeClass("active");
	jQuery(this).parent("li").addClass("active");
});
