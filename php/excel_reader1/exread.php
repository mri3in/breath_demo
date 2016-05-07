<?php
// i will tell you get data from excel with php

//first of all you add this files your project.
// And i show my excel file and add  some data

//start now :)

require("reader.php"); // php excel reader
/*$file="D:/xampp/htdocs/project/breath/php/excel_reader1/currency.xls";
chmod("D:/xampp/htdocs/project/breath/php/excel_reader1/currency.xls", 0777);
echo dirname(__FILE__);*/
//fopen("http://www.vietcombank.com.vn/exchangerates/ExrateXLS.aspx","r");
$file = "Book1.xls";
$connection=new Spreadsheet_Excel_Reader(); // our main object
$connection->read($file);
$startrow=3;
$endrow=4;
$col1=3;

for($i=$startrow;$i<15;$i++){ // we read row to row

echo $connection->sheets[0]["cells"][$i][$col1]."<br>"; // so we get [2][3] and [3][3]
}

?>