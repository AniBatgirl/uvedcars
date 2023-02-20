var ogselboxs, i, noOgselbox;
ogselboxs = document.getElementsByClassName("selectBox");
noOgselbox = ogselboxs.length;
//loop through all the original select boxes and make the new ones from them
for (i = 0; i < noOgselbox; i++){
    var oldSelBox,nooptions,newSelBox,text,triangleContainer,triangle;
    //select the current select box and make a new ones
    //the 0 index selects the first and only one inside the selecBox div, if there would be more there would be a for loop
    oldSelBox = ogselboxs[i].getElementsByTagName("select")[0];
    //get the amount of options inside the original select box
    nooptions = oldSelBox.length;
    //make the new select box
    newSelBox = document.createElement("div");
    newSelBox.setAttribute("class","newSelBox");
    //create the text that will show up in the new select box and add the currently selected option to it
    text = document.createElement("p");
    text.textContent = oldSelBox.options[oldSelBox.selectedIndex].textContent;
    //create the triangle and the container for it
    triangleContainer = document.createElement("div");
    triangleContainer.setAttribute("class","triangleContainer");
    triangle = document.createElement("div");
    triangle.setAttribute("class","triangle");
    //add all the new elements to the HTMl
    ogselboxs[i].appendChild(newSelBox);
    newSelBox.appendChild(text);
    newSelBox.appendChild(triangleContainer);
    triangleContainer.appendChild(triangle);
    //create the div that will contain the options and hide it
    optionContainer = document.createElement("div");
    optionContainer.setAttribute("class", "optionContainer optionsHidden");
    //loop through the original options and make new ones
    for (var j = 1; j < nooptions;j++){
        var newOption;
        newOption = document.createElement("div");
        //add the option text to the new options
        newOption.textContent = oldSelBox.options[j].textContent;
        //make the new options clickable
        newOption.addEventListener("click", function(e){
            var currentOriginalBox,amountofOptions,previouslyselectedoption;
            //stop the closing of the box 
            e.stopPropagation();
            //get the original select box that the new one is a copy of
            currentOriginalBox = this.parentNode.parentNode.getElementsByTagName("select")[0];
            //get number of how many options there were in the original select box
            amountofOptions = currentOriginalBox.length;
            //insert the options text into the new select box
            this.parentNode.previousSibling.getElementsByTagName('p')[0].textContent = this.textContent;
            //make the original select box select this option with a loop
            for (var i = 0; i < amountofOptions; i++){
                //looks for the original option that has the same text as the current option
                if (currentOriginalBox.options[i].textContent == this.textContent){
                    //makes the original select box select the clicked option
                    currentOriginalBox.selectedIndex= i;
                    //looks for the option that was previously selected, the index of 0 is there because there is only one selected at a time
                    previouslyselectedoption = this.parentNode.getElementsByClassName("selected");
                    //console.log(previouslyselectedoption.length);
                    //previouslyselectedoption.removeAttribute("class", "selected");
                    for (var index=0; index<previouslyselectedoption.length; index++){
                       previouslyselectedoption[index].removeAttribute("class","selected");
                    }
                    //make the currently clicked option the new selected option
                    this.setAttribute("class","selected");
                    //break the loop because there is no reason for it to loop any longer
                }
            }
        })
        //add the new option to the new option optionContainer
        optionContainer.appendChild(newOption);
    }
    //add the new option container to the custom select boxe
    ogselboxs[i].appendChild(optionContainer);
    
    //add a function for the top container to run when clicked
    newSelBox.addEventListener('click', function(e){
        //have only this function run by stopping the propagation
        e.stopPropagation();
        //make the option container show up
        this.nextSibling.classList.toggle('optionsHidden');
        //make the new box rotate the arrow position
        this.classList.toggle('active');
        //close all other select boxes so there is only one open at a time
        closeAllSelBoxes(this);
    })
}
function closeAllSelBoxes(list){
    var CustomBoxes,CustomOptions,i;
    //list parameter is there so we know which box not to close
    //get the amount of open boxes and close them
    CustomBoxes = document.getElementsByClassName('newSelBox');
    CustomOptions = document.getElementsByClassName('optionContainer');
    //loop through all the boxes and close the ones that are open
    for (i=0;i<CustomBoxes.length;i++){
        if (list == CustomBoxes[i] && list.nextSibling == CustomOptions[i]){

        }
        else{
            CustomOptions[i].classList.add("optionsHidden");
            CustomBoxes[i].classList.remove("active");
        }
    }
}
//loop through all the option boxes and check their size
optionboxes = document.getElementsByClassName('optionContainer');
for (var ind = 0; ind < optionboxes.length; ind++){
    optionboxes[ind].classList.toggle("optionsHidden");
    if (optionboxes[ind].offsetHeight < 141){
        optionboxes[ind].style.overflowY = "visible";
    }
    optionboxes[ind].classList.toggle("optionsHidden");
}
//have all the open boxes close when clicking elsewhere in the window
document.addEventListener("click", closeAllSelBoxes);