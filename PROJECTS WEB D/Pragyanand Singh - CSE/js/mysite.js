function btn() {
   
    let item=document.getElementById('bar_item');
    if (item.style.display !='block') {
        item.style.display='block';    
    } else {
        item.style.display='none';    
    }

}
function message() {
    let sub=document.getElementById('MySub');
    confirm("Congratulations, Your details have been submitted for sign up!!");
}