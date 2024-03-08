document.addEventListener('DOMContentLoaded', function() {
    var modalForm = document.getElementById('modalForm');
    let	form_modal =document.getElementById('form-modal');
    // Create an input element
	const input = document.createElement('input');

	
    modalForm.addEventListener('show.bs.modal', function(event) {
    	//event.preventDefault();
        var button = event.relatedTarget;
        var turnoId = button.getAttribute('data-id');
        // Assign a value to the input element
		input.type ="number";
		//input.style.display = "none";
		input.setAttribute("value", `${turnoId}`);
	// Append the input element to the form
		form_modal.appendChild(input);
        console.log(turnoId);
    });
});




