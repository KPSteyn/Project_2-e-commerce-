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
	}
	
})

