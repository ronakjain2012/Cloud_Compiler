// JavaScript Document
function fullScreenEditor() {	
	var c = document.getElementById('checkbox1').checked ;
	if(c == true) {
		document.getElementById('output').style.display = "none";
		document.getElementById('myForm').setAttribute('target','_new');
	} if (c == false) {
		document.getElementById('output').style.display = "block";
		document.getElementById('myForm').setAttribute('target','output');
	}
}

function readCode() {
	var code = document.getElementById('editor').value;
	document.getElementById('Input_PDF').setAttribute('value',' '+code);
}