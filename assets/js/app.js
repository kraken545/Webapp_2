

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



function increment() {
		totalPeople++;
		setForm();
	}

function decrement() {
		totalPeople--;
		setForm();
	}


// ============  function om de form te displayen =============

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


// <!-- =========== idee voor Grote groepen. popup dat laat weten aan de user dat als hun groep groter dan 10 mensen kunnen ze contact met ons nemen voor een speciale prijs ==================== -->

function closeBigGroup(){
	const bigGroup = document.getElementById('big-group');
	bigGroup.classList.remove('open');
}

function openBigGroup() {
	const bigGroup = document.getElementById('big-group');
	bigGroup.classList.add('open');
	setBigGroup();
}

function applyBigGroup() {
	closeBigGroup();
}

function contactUs() {
	window.location.href = './public/contact.php';
}

function setBigGroup() {
	const bigGroupInput = (totalPeople - 1);
	const bigGroupDisplay = document.getElementById('big-group-display');
	
}

