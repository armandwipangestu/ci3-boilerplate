// Disable char e, +, - on input element with type number

const inputNumber = document.querySelectorAll('input[type="number"]');

if (inputNumber) {
	inputNumber.forEach((iN) => {
		iN.addEventListener("keypress", (event) => {
			if (
				(event.which != 8 && event.which != 0 && event.which < 48) ||
				event.which > 57
			) {
				event.preventDefault();
			}
		});
	});
}
