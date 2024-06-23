window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 160 || document.documentElement.scrollTop > 160) {
    document.getElementById("scroll-top").style.display = "block";
  } else {
    document.getElementById("scroll-top").style.display = "none";
  }
}
function myFunction() {
  document.getElementById("demo").innerHTML = "-التعريف بأهم ملامح نظام التأمين الصحي الشامل.";
  document.getElementById("demo1").innerHTML = "-شروط الانتفاع بخدمات التأمين الصحي الشامل.";
  document.getElementById("demo2").innerHTML = "-العلاقة بين نظام التأمين الصحي الشامل الجديد ونظام التأمين الصحي الحالي في المرحلة الانتقالية.";
  document.getElementById("demo3").innerHTML = "-المزايا التي يحصل عليها المواطن وضمان الجودة والخدمة الصحية.";
  document.getElementById("demo4").innerHTML = "-تعريف غير القادرين الذين تدعمهم الدولة.";
  document.getElementById("demo5").innerHTML = "-موقف ذوي الاحتياجات الخاصة.";
  document.getElementById("demo6").innerHTML = "-موقف أصحاب النظم الصحية الخاصة.";
  document.getElementById("demo7").innerHTML = "-دور قطاع التأمين الصحي الخاص.";
}

// JavaScript code
function search_animal() {
	let input = document.getElementById('searchbar').value
	input=input.toLowerCase();
	let x = document.getElementsByClassName('animals');
	
	for (i = 0; i < x.length; i++) {
		if (!x[i].innerHTML.toLowerCase().includes(input)) {
			x[i].style.display="none";
		}
		else {
			x[i].style.display="list-item";				
		}
	}
}


function search_animal1() {
	let input = document.getElementById('searchbar1').value
	input=input.toLowerCase();
	let x = document.getElementsByClassName('animals1');
	
	for (i = 0; i < x.length; i++) {
		if (!x[i].innerHTML.toLowerCase().includes(input)) {
			x[i].style.display="none";
		}
		else {
			x[i].style.display="list-item";				
		}
	}
}


function search_animal2() {
	let input = document.getElementById('searchbar2').value
	input=input.toLowerCase();
	let x = document.getElementsByClassName('animals2');
	
	for (i = 0; i < x.length; i++) {
		if (!x[i].innerHTML.toLowerCase().includes(input)) {
			x[i].style.display="none";
		}
		else {
			x[i].style.display="list-item";				
		}
	}
}


function search_animal3() {
	let input = document.getElementById('searchbar3').value
	input=input.toLowerCase();
	let x = document.getElementsByClassName('animals3');
	
	for (i = 0; i < x.length; i++) {
		if (!x[i].innerHTML.toLowerCase().includes(input)) {
			x[i].style.display="none";
		}
		else {
			x[i].style.display="list-item";				
		}
	}
}

// Search Input
const searchButton = document.getElementById('search-button');
const searchInput = document.getElementById('search-input');
searchButton.addEventListener('click', () => {
  const inputValue = searchInput.value;
  alert(inputValue);
});

// vaccine_choice_buttons
