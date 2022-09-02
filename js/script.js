function toggleOptions(e) {
	var options = e.previousElementSibling;
	console.log(options.style.display);
	if (options.style.display) {
		options.style.display = "";
	} else {
		options.style.display = "flex";
	}
}
function openAddExercise() {
	console.log("her");
	var modal = document.getElementById("add-exercise-modal");
	modal.style.display = "flex";
}
function closeAddExercise() {
	var modal = document.getElementById("add-exercise-modal");
	modal.style.display = "none";
}
