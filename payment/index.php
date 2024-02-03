<?php
header("Content-Type:application/json");

include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $content = file_get_contents('php://input');
    $phonenumber =  $_GET['phonenumber'];
    $date =$_GET['date'];

    $sql = "SELECT `ResponseCode` FROM `transactions` WHERE LOCATE('$date', `date`) AND `phonenumber`='$phonenumber'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["ResponseCode"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}

else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $content = file_get_contents('php://input'); //Recieves the response from MPESA as json
    $res = json_decode($content,true); //Converts the response string to an object
    file_put_contents('transaction_log', $content, FILE_APPEND);
    if(empty($content)){
        echo 'Data is empty,have you passed anything';
        exit();
    }

//parse individual data items from json

    $merchant = $res["Body"]["stkCallback"]['MerchantRequestID'];
    $checkout = $res["Body"]["stkCallback"]['CheckoutRequestID'];
    $responsecode = $res["Body"]["stkCallback"]['ResultCode'];
    $responsedescription = $res["Body"]["stkCallback"]['ResultDesc'];
    $amount = $res["Body"]["stkCallback"]["CallbackMetadata"]["Item"][0]["Value"];
    $MpesaReceiptNumber = $res["Body"]["stkCallback"]["CallbackMetadata"]["Item"][1]["Value"];
    $balance = $res["Body"]["stkCallback"]["CallbackMetadata"]["Item"][2]["Name"];
    $TransactionDate = $res["Body"]["stkCallback"]["CallbackMetadata"]["Item"][3]["Value"];
    $PhoneNumber = $res["Body"]["stkCallback"]["CallbackMetadata"]["Item"][4]["Value"];


    echo "the amount is: ".$amount."\n";
    echo "the receipt  is: ".$MpesaReceiptNumber."\n";
    echo "the balance  is: ".$balance."\n";
    echo "the date  is: ".$TransactionDate."\n";
    echo "the phonenumber  is: ".$PhoneNumber."\n";


//insert statement
    $sql = "INSERT INTO transactions(MerchantRequestID, CheckoutRequestID, ResponseCode, ResponseDescription , amount, receiptnumber, balance, date, phonenumber)
    VALUES('$merchant', '$checkout', '$responsecode', '$responsedescription', '$amount', '$MpesaReceiptNumber', '$balance', '$TransactionDate', '$PhoneNumber')";

    $rs = mysqli_query($conn, $sql); //Record the response to the database
    if($rs)
    {
        echo "Records Inserted";
        file_put_contents('transaction_log', "Data inserted into database", FILE_APPEND); //Appends the response to the log file transaction_log

    }else if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        file_put_contents('transaction_log', $conn -> connect_error, FILE_APPEND); //Appends the error to the log file transaction_log
    }

}else {
    echo "Mpesa Api";
}

?>