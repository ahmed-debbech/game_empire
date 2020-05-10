function checkLogged(id,c){
    if(document.getElementsByName("userLogged")[0].value != ".."){
        return true;
    }
    document.getElementsByName(id)[c].style.visibility = "visible";
    return false;
}
function check(){
    if(document.getElementsByName("logged")[0].value == ".."){
            document.getElementById("war-log-review").style.visibility = "visible";
            return false;
    }
    let title = document.getElementById("title");
    let text = document.getElementById("text");
    let stars = document.getElementsByName("review-rate");
    if(title.value.length <= 0){
        alert("Title should not be empty!");
        return false;
    }else{
        if(text.value.length <= 0){
            alert("Review should not be empty!");
            return false;
        }else{
            let count = 0;
            for(let i=0; i<5; i++){
                if(stars[i].checked == true){
                    count++;
                }
            }
            if(count == 0){
                alert("You should give at least one star!");
                return false;
            }
        }
    }
    return true;
}
