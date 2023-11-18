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

const logout = document.querySelector("#logout");
logout.addEventListener("click", function () {
	const dataUrl = logout.dataset.url;
	Swal.fire({
		icon: "warning",
		html: `Are you sure want to logout?`,
		showCancelButton: true,
		confirmButtonColor: "#d9534f",
		cancelButtonColor: "#5cb85c",
		confirmButtonText: `Yes`,
		cancelButtonText: `No`,
	}).then((result) => {
		if (result.isConfirmed) {
			location.href = `${dataUrl}`;
		}
	});
});
