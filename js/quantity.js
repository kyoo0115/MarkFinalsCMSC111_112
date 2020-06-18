var qty = 1;
var base = parseInt(document.getElementById("price").innerHTML);
var array = [0, 0, 0];
document.getElementById("pQuantity").setAttribute("value", 1);
document.getElementById("pDrinks").setAttribute("value", "coke");
if(window.location.pathname == "/MarcDonalds/individual.php"){
	document.getElementById("regular").click();
}

function plus(){
	
	document.getElementById("quantity").innerHTML = ++qty;
	document.getElementById("pQuantity").setAttribute("value", qty);
	compute();
}

function minus(){
	
	if(qty == 1){
	document.getElementById("quantity").innerHTML = 1;
	qty = 1;
	document.getElementById("pQuantity").setAttribute("value", qty);
	}
	else{
		document.getElementById("quantity").innerHTML = --qty;
		document.getElementById("price").innerHTML = base * qty;
		document.getElementById("pQuantity").setAttribute("value", qty);
		compute();
	}
}

function clicked(id){
	document.getElementById(id).style.background = '#c40514';
	document.getElementById(id).style.color = 'white';

	if(id == 'regular'){
		document.getElementById('medium').style.color = '#c40514';
		document.getElementById('large').style.color = '#c40514';
		document.getElementById('medium').style.background = 'rgb(239, 239, 239)';
		document.getElementById('large').style.background = 'rgb(239, 239, 239)';
		document.getElementById("price").innerHTML = base;
		document.getElementById("regulars").style.background = '#c40514';
		document.getElementById("regulars").children[1].style.color = 'white';
		document.getElementById("mediums").style.background = '#ececec';
		document.getElementById("mediums").children[1].style.color = '#c40514';
		document.getElementById("largs").style.background = '#ececec';
		document.getElementById("largs").children[1].style.color = '#c40514';
		
		document.getElementById("pSize").setAttribute("value", "regular");
		document.getElementById("pPrice").setAttribute("value", base);

		array[0] = 1;
		array[1] = 0;
		array[2] = 0;

		document.getElementById("quantity").innerHTML = 1;
		qty = 1;
	}

	else if(id == 'medium'){
		document.getElementById('regular').style.color = '#c40514';
		document.getElementById('large').style.color = '#c40514';
		document.getElementById('regular').style.background = 'rgb(239, 239, 239)';
		document.getElementById('large').style.background = 'rgb(239, 239, 239)';
		document.getElementById("price").innerHTML = base + 5;
		document.getElementById("mediums").style.background = '#c40514';
		document.getElementById("mediums").children[1].style.color = 'white';
		document.getElementById("regulars").style.background = '#ececec';
		document.getElementById("regulars").children[1].style.color = '#c40514';
		document.getElementById("largs").style.background = '#ececec';
		document.getElementById("largs").children[1].style.color = '#c40514';


		document.getElementById("pSize").setAttribute("value", "medium");
		document.getElementById("pPrice").setAttribute("value", base+5);

		array[0] = 0;
		array[1] = 1;
		array[2] = 0;

		document.getElementById("quantity").innerHTML = 1;
		qty = 1;
	}
	else if (id == 'large'){
		document.getElementById('regular').style.color = '#c40514';
		document.getElementById('medium').style.color = '#c40514';
		document.getElementById('regular').style.background = 'rgb(239, 239, 239)';
		document.getElementById('medium').style.background = 'rgb(239, 239, 239)';
		document.getElementById("price").innerHTML = base + 10;
		document.getElementById("largs").style.background = '#c40514';
		document.getElementById("largs").children[1].style.color = 'white';
		document.getElementById("regulars").style.background = '#ececec';
		document.getElementById("regulars").children[1].style.color = '#c40514';
		document.getElementById("mediums").style.background = '#ececec';
		document.getElementById("mediums").children[1].style.color = '#c40514';


		document.getElementById("pSize").setAttribute("value", "large");
		document.getElementById("pPrice").setAttribute("value", base+10);

		array[0] = 0;
		array[1] = 0;
		array[2] = 1;

		document.getElementById("quantity").innerHTML = 1;
		qty = 1;
	}
}

function drinkClicked(id){



	if(id == 'coke'){

		document.getElementById('cokeZero').style.background = '#ececec';
		document.getElementById('cokeZero').style.color = 'white';
		document.getElementById('cokeFloat').style.background = '#ececec';
		document.getElementById('cokeFloat').style.color = 'white';
		document.getElementById('sprite').style.background = '#ececec';
		document.getElementById('sprite').style.color = 'white';
		document.getElementById('coke').style.background = '#c40514';
		document.getElementById('coke').style.color = 'white';

		document.getElementById("pDrinks").setAttribute("value", "coke");

	}else if (id == 'cokeZero') {
		document.getElementById('cokeZero').style.background = '#c40514';
		document.getElementById('cokeZero').style.color = 'white';
		document.getElementById('cokeFloat').style.background = '#ececec';
		document.getElementById('cokeFloat').style.color = 'white';
		document.getElementById('sprite').style.background = '#ececec';
		document.getElementById('sprite').style.color = 'white';
		document.getElementById('coke').style.background = '#ececec';
		document.getElementById('coke').style.color = 'white';

		document.getElementById("pDrinks").setAttribute("value", "cokeZero");

	}else if(id == 'sprite'){

		document.getElementById('sprite').style.background = '#c40514';
		document.getElementById('sprite').style.color = 'white';
		document.getElementById('cokeZero').style.background = '#ececec';
		document.getElementById('cokeZero').style.color = 'white';
		document.getElementById('cokeFloat').style.background = '#ececec';
		document.getElementById('cokeFloat').style.color = 'white';
		document.getElementById('coke').style.background = '#ececec';
		document.getElementById('coke').style.color = 'white';

		document.getElementById("pDrinks").setAttribute("value", "sprite");

	}

	else if(id == 'cokeFloat'){

		document.getElementById('cokeFloat').style.background = '#c40514';
		document.getElementById('cokeFloat').style.color = 'white';
		document.getElementById('cokeZero').style.background = '#ececec';
		document.getElementById('cokeZero').style.color = 'white';
		document.getElementById('sprite').style.background = '#ececec';
		document.getElementById('sprite').style.color = 'white';
		document.getElementById('coke').style.background = '#ececec';
		document.getElementById('coke').style.color = 'white';

		document.getElementById("pDrinks").setAttribute("value", "cokeFloat");

	}

}

function compute(){ 

			if(window.location.pathname == "/MarcDonalds/individual.php"){

			if(array[0] == 1) {
				document.getElementById("price").innerHTML = (base * qty);
		
				}
			else if (array[1] == 1) {
				document.getElementById("price").innerHTML = ((base + 5) * qty);

				}
			else if (array[2] == 1) {
				document.getElementById("price").innerHTML = ((base + 10) * qty);

				}
			}
			else if (window.location.pathname == "/MarcDonalds/checkout.php"){
				document.getElementById("price").innerHTML = (base * qty);

			}
		}

