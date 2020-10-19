const firstname = document.getElementById('firstname')
const lastname = document.getElementById('lastname')
const address = document.getElementById('address')
const residence = document.getElementById('residence')
const city = document.getElementById('city')
const country = document.getElementById('country')
const postalcode = document.getElementById('postalcode')
const phonenumber = document.getElementById('phone')
const regularExpressioncontact = /^[0-9]\d{9}$/;
const emailAddress = document.getElementById('email')
const regularExpressionemail = /^\S+@\S+\.\S+$/;
//const subscribe = document.getElementById('promo')
const submissionerror = document.getElementById('submissionError')
const myform = document.getElementById('myform')


myform.addEventListener('submit', (e) =>{
	let cumulativeError = []
		submissionerror.style.color = "#fc7b03";
		document.getElementById('firstname').style.backgroundColor="white";
		document.getElementById('lastname').style.backgroundColor="white";
		document.getElementById('address').style.backgroundColor="white";
		document.getElementById('residence').style.backgroundColor="white";
		document.getElementById('city').style.backgroundColor="white";
		document.getElementById('country').style.backgroundColor="white";
		document.getElementById('postalcode').style.backgroundColor="white";
		document.getElementById('phone').style.backgroundColor="white";
		document.getElementById('email').style.backgroundColor="white";
		//document.getElementById('subscribe').style.backgroundColor="white";


	if(firstname.value === '' || firstname.value === null){
		cumulativeError.push("A First Name Is Required")
		document.getElementById('firstname').style.backgroundColor="#fc7b03";
	}

	if(lastname.value === '' || lastname.value === null){
		cumulativeError.push("A Last Name Is Required")
		document.getElementById('lastname').style.backgroundColor="#fc7b03";
	}

	if(address.value === '' || address.value === null){
		cumulativeError.push("A Delivery Address Is Required")
		document.getElementById('address').style.backgroundColor="#fc7b03";
	}

	if(residence.value === '' || residence.value === null){
		cumulativeError.push("Residence Information Is Required")
		document.getElementById('residence').style.backgroundColor="#fc7b03";
	}

	if(city.value === '' || city.value === null){
		cumulativeError.push("City Informaiton Is Required")
		document.getElementById('city').style.backgroundColor="#fc7b03";
	}

	if(country.value === 'Select'){
		cumulativeError.push("Country Information Is Required")
		document.getElementById('country').style.backgroundColor="#fc7b03";
	}

	if(postalcode.value === '' || postalcode.value === null){
		cumulativeError.push("A Postal Code Is Required")
		document.getElementById('postalcode').style.backgroundColor="#fc7b03";
	}

	if(country.value === 'South Africa'){
		if(regularExpressioncontact.test(phonenumber.value)!== true || phonenumber.value.startsWith("0") !== true){
			cumulativeError.push("Valid Contact Informaiton Is Required")
			document.getElementById('phone').style.backgroundColor="#fc7b03";
		}
	}else{
		if(phonenumber.value === '' || phonenumber.value === null){
		cumulativeError.push("Valid Contact Informaiton Is Required")
		document.getElementById('phone').style.backgroundColor="#fc7b03";
		}
	}

	if(regularExpressionemail.test(emailAddress.value) !== true){
		cumulativeError.push("Valid Email Address Information Is Required")
		document.getElementById('email').style.backgroundColor="#fc7b03";
	}	



	if(Object.keys(cumulativeError).length !== 0){
		e.preventDefault()
		submissionerror.innerText = cumulativeError.join('.\n') + '.'
		//alert(cumulativeError.join('.\n') + '.')
	}
	
})




/*


const form = document.getElementById('form')
const email = document.getElementById('email')
const number = document.getElementById('number')
const country = document.getElementById('country')
const message = document.getElementById('message')
const errorElement = document.getElementById('error')
const regularExpEmail = /^\S+@\S+\.\S+$/;
const regularExpNum = /^[0-9]\d{9}$/;


form.addEventListener('submit', (e) =>{
	let mes = []

		errorElement.style.color = "red";
		document.getElementById('fullname').style.backgroundColor="white";

		document.getElementById('email').style.backgroundColor="white";

		document.getElementById('number').style.backgroundColor="white";

		document.getElementById('message').style.backgroundColor="white";

		document.getElementById('country').style.backgroundColor="white";

	if(fullname.value === '' || fullname.value === null){
		mes.push("A Full Name Is Required")
		document.getElementById('fullname').style.backgroundColor="red";
	}
	if(regularExpEmail.test(email.value) !== true){
		mes.push("A Valid Email Address Is Required")
		document.getElementById('email').style.backgroundColor="red";
	}
	if(regularExpNum.test(number.value)!== true || number.value.startsWith("0") !== true){
		mes.push("Invalid Mobile Number Entered")
		document.getElementById('number').style.backgroundColor="red";
	}
	if(country.value === 'select'){
		mes.push("A Country Is Required")
		document.getElementById('country').style.backgroundColor="red";
	}
	if(message.value === '' || message.value === null){
		mes.push("A Message Is Required")
		document.getElementById('message').style.backgroundColor="red";
	}
	
	if(Object.keys(mes).length !== 0){
		e.preventDefault()
		errorElement.innerText = mes.join('.\n') + '.'
		alert(mes.join('.\n') + '.')
	}else{
		e.preventDefault()
		errorElement.style.color = "green";

		errorElement.innerText = "Full Name submitted: \n"+ fullname.value + 
		"\n\n Email Address submitted: \n" + email.value + 
		"\n\n Mobile Number submitted: \n" + number.value + 
		"\n\n Country submitted: \n" + country.value + 
		"\n\n Message submitted: \n" + message.value

		alert("Full Name submitted: \n"+ fullname.value + 
		"\n\n Email Address submitted: \n" + email.value + 
		"\n\n Mobile Number submitted: \n" + number.value + 
		"\n\n Country submitted: \n" + country.value + 
		"\n\n Message submitted: \n" + message.value)
	}
	
})*/