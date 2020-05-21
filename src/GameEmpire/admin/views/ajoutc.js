function test(){



	if((document.monform.name.value=='')||(document.monform.name.value.charAt(0) <'A' || document.monform.name.value.charAt(0) >'Z'))
	{
		document.monform.name.style.border='2px solid RED';
	 
	 swal({
		title: "Alert",
		text: "Le nom du Platform est obligatoire et le nom doit commencer avec une lettre majuscule !",
		icon: "warning",
		button: true,
		dangerMode: true,
	  })
	return false;
	}
	else if((document.monform.id_plat.value=='')||(document.monform.id_plat.value.length!=1))
	{ 
		alert(document.monform.id_plat.value);
		document.monform.id_plat.style.border='2px solid RED';
	
		swal({
			title: "Alert",
			text: "Il faut remplir le champ ID Platform avec 1 chiffres !",
			icon: "warning",
			button: true,
			dangerMode: true,
		  })
		return false;
	}
	

}