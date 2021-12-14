var addPersonButton = document.querySelector("#Add-Person-Button");
var putInHouseButton = document.querySelector("#Put-In-House-Button");
var createAccountButton = document.querySelector("#Create-Account-Button");

var inputfieldsArray = [
    firstnameField = document.querySelector("#firstname"),
    nameField = document.querySelector("#name"),// let op ! niet .name-field (hierboven en hieronder ook)
    descriptionField = document.querySelector("#description")
];

var mainBox = document.querySelector(".main-box");
var addPersonPage = document.querySelector("#Add-Person");


//inputfields
// var firstnameField = document.querySelector("#firstname");
// var nameField = document.querySelector("#name");// let op ! niet .name-field (hierboven en hieronder ook)
// var descriptionField = document.querySelector("#description");



//buttons___________________________________
addPersonButton.addEventListener("click", function() {
    invisible(mainBox);
    visible(addPersonPage);
});

putInHouseButton.addEventListener("click", function() {

});

/*
createAccountButton.addEventListener("click", function() {  //nog geen van beide werkt (aanpassing was, boven de inputfields in een array gestopt en de for loop hieronder)
    // for(var index; index < inputfieldsArray.length; index ++)
    // {
    //     IsEmpty(inputfieldsArray[index]);
    // }

    // IsEmpty(firstnameField);
    // IsEmpty(nameField);
    // IsEmpty(descriptionField);

})

*/



//textfields________________________________





//functions_________________________________
function invisible (ding) {
    ding.classList.add("invisible");
    
}

function visible (ding) {
    ding.classList.remove("invisible");
}

function IsEmpty(inputField) { /*werkt nog niet!!!!!!!!!!!*/
    if(inputField.value == "") {
        inputField.classList.add("red")
    }
    else {
        invisible(addPersonPage);
        //visible()   //de tussenpagina (hierin staat profile addet to database, en een knop om naar de "put peaople in a house" page te gaan)
    }
}