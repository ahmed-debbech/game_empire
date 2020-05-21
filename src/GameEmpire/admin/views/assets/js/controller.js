function checkCap() {
    if ((document.formular.id_org.value == '') || (document.formular.id_org.value.length != 4)) {
        document.formular.id_org.style.border = '1px solid RED';
        alert("Organizor ID is required and has to contain 4 numbers.");

        return false;

    } else if ((document.formular.name.value == '') || (document.formular.name.value.charAt(0) < 'A' || document.formular.name.value.charAt(0) > 'Z')) {
        document.formular.name.style.border = '1px solid RED';
        alert("name is required and has to start with capital letter. ");
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
        alert("Event ID is required and has to contain 4 numbers.");
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