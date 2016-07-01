// JavaScript Document
function fullScreenEditor() {	
	var c = document.getElementById('checkbox1').checked ;
	if(c == true) {
		document.getElementById('output').style.display = "none";
		document.getElementById('myForm').setAttribute('target','_new');
	}
	if (c == false) {
		document.getElementById('output').style.display = "block";
		document.getElementById('myForm').setAttribute('target','output');
	}
}

function readCode() {
	var code = document.getElementById('editor').value;
	
	if(code.length >= 1) {
	document.getElementById('Input_CodeQR').setAttribute('value','');
	document.getElementById('Input_CodePDF').setAttribute('value',' '+code);
	} else {
		alert('Sorry ! No Code Is Written');
	}
}

function readCode1() {
	var code = document.getElementById('editor').value;
	if(code.length >= 1) {
	document.getElementById('Input_CodePDF').setAttribute('value','');
	document.getElementById('Input_CodeQR').setAttribute('value',' '+code);
	} else {
		alert('Sorry ! No Code Is Written');
	}
}

function readCode2() {
	var code = document.getElementById('editor').value;
	if(code.length >= 1) {
	document.getElementById('fileValue').setAttribute('value',''+code);
	} else {
		alert('Sorry ! No Code Is Written');
	}
}

