var id_org = document.formular.getElementById('id_org');
var name = document.formular.getElementById('name');
var phone = document.formular.getElementById('phone');
var email = document.formular.getElementById('email');

var id_org_error = document.getElementById('id_org');
var name_error = document.getElementById('name');
var phone_error = document.getElementById('phone');
var email_error = document.getElementById('email');

function Valid() {
    if (id_org.value == '' || id_org.value == null || id_org.value != 4) {
        document.formular.id_org.style.border = '1px solid RED';
        document.formular.id_org_error.textContent = 'id_org is required and must contain 4 numbers.';
        id_org.focus();
        return false;
    }
    if (phone.value == '' || phone.value == null || phone.value != 8) {
        document.formular.phone.style.border = '1px solid RED';
        document.formular.phone_error.textContent = 'phone is required and must contain 8 numbers.';
        phone.focus();
        return false;
    }
    if ((name.value == '' || name.value == null || name.value.charAt(0) < 'A' || name.value.charAt(0) > 'Z')) {

        document.formular.name.style.border = '1px solid RED';
        document.formular.name_error.textContent = 'name is required and has to start with a capital letter.';
        name.focus();
        return false;
    }

}