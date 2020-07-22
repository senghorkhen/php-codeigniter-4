var search = document.querySelector('#search');
var liElement = document.querySelectorAll('li');

search.addEventListener('keyup',()=> {
    let textUpperCase = search.value.toUpperCase();
    let notSearch = -1;
    for(let i =0 ; i< liElement.length; i++){
        let liValue = liElement[i].textContent || liElement[i].innerText;
        //console.log(liValue);
        let isContain = liValue.toUpperCase().indexOf(textUpperCase)> notSearch;
        if(isContain){
            liElement[i].style.display = "block";
        }else{
            liElement[i].style.display = "none";
        }
    }
})