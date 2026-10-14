<?php //this is common

function usr_msg(){

    if(isset($_SESSION['usermessage'])){
        $msg = 'USER MESSAGE: ' . $_SESSION['usermessage'];
        $_SESSION['usermessage'] = "";
        unset($_SESSION['usermessage']);

    }
    // this is the correct way
    return $msg;
    //there should only be 1 return statement , return ""; bad programming

}




//function to add a manufacturer
function addManufacturer($conn){
    //prepare and execute the sql query
    $sql = "INSERT INTO manufacturer (manufacturername, dateofestablished, companyaddress) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql); //prepare to sql

    $stmt->bindParam(1, $_POST['manuname']);
    $stmt->bindParam(2, $_POST['manumail']);
    $stmt->bindParam(3, $_POST['manuaddress']);

    $stmt->execute(); //run the query to insert
    $conn = null; //closes the connection so cant be abused
    return true; //registration successfull
}

//function to add a console
function addConsole($conn){
    //prepare and execute the sql query
    $sql = "INSERT INTO consoles (consolename, consoleprice , dateofmade ) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql); //prepare to sql

    $stmt->bindParam(1, $_POST['conname']);
    $stmt->bindParam(2, $_POST['conprice']);
    $stmt->bindParam(3, $_POST['conmade']);

    $stmt->execute(); //run the query to insert
    $conn = null; //closes the connection so cant be abused
    return true; //registration successfull
}



#user message to pass error messages through the session to different parts of the site.
function user_message() {
    $message = "";

    //check if the user message value is set in the usermessage super global
    if (isset($_SESSION["usermessage"])){
        //save message to variable
        $message = $_SESSION["usermessage"];
        //unset it so that it isn't found again
        unset($_SESSION["usermessage"]);
    }
    // return it from the function
    return $message;
}


//function to add a school
function addGame($conn){
    //prepare and execute the sql query
    $sql = "INSERT INTO game (SchoolName, SchoolEmail, SchoolLocation) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql); //prepare to sql

    $stmt->bindParam(1, $_POST['schname']);
    $stmt->bindParam(2, $_POST['schemail']);
    $stmt->bindParam(3, $_POST['schloc']);

    $stmt->execute(); //run the query to insert
    $conn = null; //closes the connection so cant be abused
    return true; //registration successfull
}


