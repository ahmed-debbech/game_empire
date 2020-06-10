function checkCap() {
    if ((document.formular.id_org.value == '') || (document.formular.id_org.value.length != 4)) {
        document.formular.id_org.style.border = '1px solid RED';
        alert("ID is required and has to contain 4 numbers.");

        return false;

    } else if ((document.formular.name.value == '') || (document.formular.name.value.charAt(0) < 'A' || document.formular.name.value.charAt(0) > 'Z')) {
        document.formular.name.style.border = '1px solid RED';
        alert("Name is required and has to start with capital letter. ");
        return false;
    } else if ((document.formular.phone.value == '') || (document.formular.phone.value.length != 8)) {
        document.formular.phone.style.border = '1px solid RED';
        alert("phone number has to contain 8 numbers, please verify.");
        return false;
    }

}

function checkCap2() {
    if ((document.formular2.id_event.value == '') || (document.formular2.id_event.value.length != 4)) {
        document.formular2.id_event.style.border = '1px solid RED';
        alert("ID is required and has to contain 4 numbers.");
        return false;
    } else if ((document.formular2.id_org.value == '') || (document.formular2.id_org.value.length != 4)) {
        document.formular2.id_org.style.border = '1px solid RED';
        alert("Organizor ID is required and has to contain 4 numbers.");
        return false;

    } else if ((document.formular2.namee.value == '') || (document.formular2.namee.value.charAt(0) < 'A' || document.formular2.namee.value.charAt(0) > 'Z')) {
        document.formular2.namee.style.border = '1px solid RED';
        alert("name is required and has to start with capital letter. ");
        return false;
    } else if ((document.formular2.location.value == '') || (document.formular2.location.value.charAt(0) < 'A' || document.formular2.location.value.charAt(0) > 'Z')) {
        document.formular2.location.style.border = '1px solid RED';
        alert("location is required and has to start with capital letter. ");
        return false;
    } else if (document.formular2.date_start.value >= document.formular2.date_end.value) {
        document.formular2.date_start.style.border = '1px solid RED';
        document.formular2.date_end.style.border = '1px solid RED';
        alert("Notice: End date SHOULD BE SUPERIOR than Start date.");
        return false;

    }
}

function checkCap3() {
    if ((document.formr.id.value == '') || (document.formr.id.value.length > 15) || (document.formr.id.value.length < 6) || (document.formr.id.value.charAt(0) < 'A' || document.formr.id.value.charAt(0) > 'Z')) {
        document.formr.id.style.border = '1px solid RED';
        alert("username must start with a capital letter and must contain from 6 to 15 letters.");

        return false;
    } else if ((document.formr.mdp.value == '') || (document.formr.mdp.value.length < 5) || (document.formr.mdp.value.length > 10)) {
        document.formr.mdp.style.border = '1px solid RED';
        alert("password must contain from 5 to 10 characters.");
        return false;
    }

}