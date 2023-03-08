/*
@this function is to display all Employee Details
@ Ade variable:
*/
function displayDetails() {
    name1 = document.getElementById("name");
    number = document.getElementById("number");
    email = document.getElementById("email");
    city = document.getElementById("city");
    state = document.getElementById("state");
    country = document.getElementById("country");
    pin = document.getElementById("pin");
    if(valAll(name1, number, email, city, state, country, pin)) {
        return true;
    } else {
        document.getElementById("form").addEventListener("submit", function(event){
            event.preventDefault();
        });
        return false;
    }
}

//global variable
var rowElement;
var rowId;

/*
@ this function for detealis of row
*/
function rowDetalis(element) {
    rowElement = element;
    var row = rowElement.parentNode.parentNode;
    rowId = row.childNodes[1].innerText;

}
/*
@this function is used to send delete.php page with id
*/
function getId() {
    window.location.href="delete.php?id=" + rowId;
}

/*
@deleterow
** this fuction is use to delete a row
*/
function deleteRow() {
    var toast = document.getElementById('dtoast');
    var toastObj = new bootstrap.Toast(toast);
    toastObj.show();
}

/*
@editeRow
**this function is for edite row
*/
function editeRow() {
    // var id = document.getElementById("eid").value;
    name1 = document.getElementById("ename");
    number = document.getElementById("enumber");
    email =document.getElementById("eemail");
    city = document.getElementById("ecity");
    state = document.getElementById("estate");
    country = document.getElementById("ecountry");
    pin = document.getElementById("epin");
    if(valAll(name1, number, email, city, state, country, pin)) {
        return true;
    } else {
        document.getElementById("editForm").addEventListener("submit", function(evn){
            evn.preventDefault();
        });
        // return false;
    }
}

/*
@showEditeValue
** this function is use to show value in adite page
 */
function showEditeValue()  {
    var row = rowElement.parentNode.parentNode;
    document.querySelectorAll(".validation-message").forEach(clear=>{
    clear.innerHTML= null ;
    });
    var id = (document.getElementById("eid").value = row.childNodes[1].innerHTML);
    var name1 = (document.getElementById("ename").value = row.childNodes[3].innerHTML);
    var Number = (document.getElementById("enumber").value = row.childNodes[5].innerHTML);
    var email = (document.getElementById("eemail").value = row.childNodes[7].innerHTML);
    var city = (document.getElementById("ecity").value = row.childNodes[9].innerHTML);
    var state = (document.getElementById("estate").value = row.childNodes[11].innerHTML);
    var country = (document.getElementById("ecountry").value = row.childNodes[13].innerHTML);
    var pin = (document.getElementById("epin").value = row.childNodes[15].innerHTML);
}

