function validate()
{
choose();
Name();
date();
Address();
city();
state();
zipcode();
country();
phone();
email();
arrival();
depa();
chil();
adul();
bed();
}
function choose()
{
	const ch=document.getElementById("ch");
	const cherror=document.getElementById("cherror");
	if(ch.value==="choose")
	{	cherror.innerText="mandatory field";
		cherror.setAttribute("style","color:red");
		event.preventDefault();
	}
}
function Name()
{
	const fn=document.getElementById("fname");
	const ln=document.getElementById("lname");
	const fnerr=document.getElementById("fnerr");
	const lnerr=document.getElementById("lnerr");
	const namepatt=/^[A-z]+/;
	if(fn.value==="")
	{
		fnerr.innerText="mandatory field";
		fnerr.setAttribute("style","color:red");
		event.preventDefault();
	}
	else if(!namepatt.test(fn.value))
	{
		fnerr.innerText="name should contain only alphabets";
		fnerr.setAttribute("style","color:red");
		event.preventDefault();
	}
	if(ln.value==="")
	{
		lnerr.innerText="mandatory field";
		lnerr.setAttribute("style","color:red");
		event.preventDefault();
	}
	else if(!namepatt.test(ln.value))
	{
		lnerr.innerText="name should contain only alphabets";
		lnerr.setAttribute("style","color:red");
		event.preventDefault();
	}
}
function date()
{
	const date=document.getElementById("date");
	const dateerrot=document.getElementById("dateerror");
	
	if(date.value==="")
	{
	dateerror.innerText="mandatory field";
	dateerror.setAttribute("style","color:red");
	event.preventDefault();
	}
}
function Address()
{
	const add=document.getElementById("add");
	const adderr=document.getElementById("adderr");
	
	if(add.value==="")
	{
	adderr.innerText="mandatory field";
	adderr.setAttribute("style","color:red");
	event.preventDefault();
	}
}
function city()
{
	const city1=document.getElementById("city");
	const cityerr=document.getElementById("cityerr");
	
	if(city1.value==="")
	{
	cityerr.innerText="mandatory field";
	cityerr.setAttribute("style","color:red");
	event.preventDefault();
	}
}
function state()
{
	const state=document.getElementById("state");
	const adderr=document.getElementById("stateerr");
	
	if(state.value==="")
	{
	stateerr.innerText="mandatory field";
	stateerr.setAttribute("style","color:red");
	event.preventDefault();
	}
}
function zipcode()
{
	const zip=document.getElementById("zipcode");
	const zipcodeerr=document.getElementById("zipcodeerr");
	if(zip.value==="")
	{
	zipcodeerr.innerText="mandatory field";
	zipcodeerr.setAttribute("style","color:red");
	event.preventDefault();
	}
}

function country()
{
	const country=document.getElementById("country");
	const countryerr=document.getElementById("countryerr");
	if(country.value==="")
	{
	countryerr.innerText="mandatory field";
	countryerr.setAttribute("style","color:red");
	event.preventDefault();
	}
}
function phone()
{
	const phone=document.getElementById("phone");
	const phoneerr=document.getElementById("phoneerr");
	if(phone.value==="")
	{
	phoneerr.innerText="mandatory field";
	phoneerr.setAttribute("style","color:red");
	event.preventDefault();
	}
}
function email()
{	const email=document.getElementById("email");
	const emailerr=document.getElementById("emailerr");
	if(email.value==="")
	{
	emailerr.innerText="mandatory field";
	emailerr.setAttribute("style","color:red");
	event.preventDefault();
	}
}
function arrival()
{	const arrival=document.getElementById("arrival");
	const arrivalerr=document.getElementById("arrivalerr");
	if(arrival.value==="")
	{
	arrivalerr.innerText="mandatory field";
	arrivalerr.setAttribute("style","color:red");
	event.preventDefault();
	}
}
function depa()
{	const de=document.getElementById("de");
	const deerr=document.getElementById("deerr");
	if(de.value==="")
	{
	deerr.innerText="mandatory field";
	deerr.setAttribute("style","color:red");
	event.preventDefault();
	}
}
function chil()
{
	const chi=document.getElementById("children");
	const chierr=document.getElementById("chierr");
	if(de.value==="")
	{
	chierr.innerText="mandatory field";
	chierr.setAttribute("style","color:red");
	event.preventDefault();
	}
}
function adul()
{
	const ad=document.getElementById("ad");
	const aderror=document.getElementById("aderror");
	if(ad.value==="")
	{
	aderror.innerText="mandatory field";
	aderror.setAttribute("style","color:red");
	event.preventDefault();
	}
}
function bed()
{
const y=document.getElementById("yes");
const n=document.getElementById("no");
const b=document.getElementById("bed");
if(!y.checked&&!n.checked)
{
	b.innerText="choose one option";
	b.setAttribute("style","color:red");
	event.preventDefault();
}
}

const form=document.getElementById("form");
form.addEventListener("submit",validate);

