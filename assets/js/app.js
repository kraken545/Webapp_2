
let totalDays = 1;
const totalDaysMin = 1;
const totalDaysMax = 30;

let totalPeople = 1;
const totalPeopleMin = 1;
const totalPeopleMax = 10;

// =========== open form  ==========
function openForm() {
	const popup = document.getElementById('myForm');
	popup.classList.add('open');
	setForm();
}

// =========== close form  ==========

function closeForm() {
	const popup = document.getElementById('myForm');
	popup.classList.remove('open');
}



function incrementPoeple() {
		totalPeople++;
		setForm();
	}

function decrementPoeple() {
		totalPeople--;
		setForm();
	}


// ============  function om de poeple form te  displayen =============

function setForm() {
	const display = document.getElementById('total-people');
	const addButton = document.getElementById('add-aantal');
	display.textContent = totalPeople;
	addButton.textContent = `${totalPeople} travelers`;
	const decrement = document.getElementById('decrement-people');
	const increment = document.getElementById('increment-people');
	if(decrement) decrement.disabled = totalPeople <= totalPeopleMin;
	if(increment) increment.disabled = totalPeople >= totalPeopleMax;
}

// =========== als de user op apply clickt word de data bewaard en de form gaat dicht  =========
function apply() {
	closeForm();
}


// ================ days form ================
// function applyDays() {
// 	const display = document.getElementById('total-days');
// 	const addButton = document.getElementById('add-days');
// 	display.textContent = totalDays;
// 	addButton.textContent = `${totalDays} days`;

// 	closeForm();
// }

// function incrementDays() {
// 		totalDays++;
// 		setForm();
// 	}

// function decrementPoeple() {
// 		totalDays--;
// 		setForm();
// 	}