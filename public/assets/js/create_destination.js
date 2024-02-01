function printError(Id, Msg) {
    document.getElementById(Id).innerHTML = Msg;
}

function validateForm() {
    let title = document.getElementById("title").value;
    let desc = document.getElementById("desc").value;

    let titleErr = validateTitle(title);
    let descErr = validateDesc(desc);
    let destinationErr = validateDestination();
    let newDestinationErr = validateNewDestination();

    if (titleErr && descErr && (destinationErr || newDestinationErr)) {
        return true;
    } else return false;
}

function validateTitle(value) {
    if (value == "" || value == null) {
        printError("titleErr", "Please enter a input");
        return false;
    } else {
        var regex = /^\w+(?:\s\w+)*$/;
        if (!regex.test(value)) {
            printError(
                "titleErr",
                "Please enter a valid input (no spaces at the end/special characters)"
            );
            return false;
        } else {
            printError("titleErr", "");
            return true;
        }
    }
}

function validateDesc(value) {
    if (value == "" || value == null) {
        printError("descErr", "Please enter a input");
        return false;
    } else {
        var regex = /^[^<>]*[^<> \t\r\n\v\f][^<>]*$/;
        if (!regex.test(value)) {
            printError(
                "descErr",
                "Please enter a valid input (no spaces at the end/special characters)"
            );
            return false;
        } else {
            printError("descErr", "");
            return true;
        }
    }
}

function validateDestination() {
    let destination = document.getElementById("destinations").value;
    let newDestination = document.getElementById("newDestination").value;
    if (destination == "" || destination == null) {
        if (newDestination == "" || newDestination == null) {
            printError("destinationErr", "Please select a destination");
            return false;
        }
    } else {
        if(newDestination == "" || newDestination == null){
            printError("newDestinationErr", "");
            printError("destinationErr", "");
            return true;
        }else{
            printError(
                "newDestinationErr",
                "You can't put a new destination while selecting a destination above"
            );
            return false;
        }
    }
}

function validateNewDestination() {
    let destination = document.getElementById("destinations").value;
    let newDestination = document.getElementById("newDestination").value;
    if (newDestination == "" || newDestination == null) {
        if (destination == "" || destination == null) {
            printError("newDestinationErr", "Please enter a destination");
            return false;
        }
    } else {
        if (destination == "" || destination == null) {
            var regex = /^[\w\s]+$/;
            if (!regex.test(newDestination)) {
                printError(
                    "newDestinationErr",
                    "Please enter a valid input (no spaces at the end/special characters)"
                );
                return false;
            } else {
                printError("newDestinationErr", "");
                printError("destinationErr", "");
                return true;
            }
        }else{
            printError(
                "newDestinationErr",
                "You can't put a new destination while selecting a destination above"
            );
            return false;
        }
        
    }
}
