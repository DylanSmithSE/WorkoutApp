function toggleOptions(e) {
	var options = e.previousElementSibling;
	console.log(options.style.display);
	if (options.style.display) {
		options.style.display = "";
	} else {
		options.style.display = "flex";
	}
}
