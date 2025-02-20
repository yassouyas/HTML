function validerFormulaire(){
    var title=document.getElementById("title").value;
    if(title.length<3){
        alert("you have to add more");
        return false;
    } 
    ;
    var dest=document.getElementById("destination").value;
    if(dest.length<3 || !/^[A-Za-z\s]+$/.test(dest)){
        alert("fill with the form required");
        return false;

    }
    var departure=document.getElementById("departure-date").value;
    var returnd=document.getElementById("return-date").value;
    if(departure >= returnd){
        alert("check and fill the right date");
        return false;
    }
    var price=document.getElementById("price").value;
    if(price<=0){
        alert("price must be a positive number");
        return false;
    }
    return true;

}





























