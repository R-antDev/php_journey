<?php


$address = [
    "name"=> "Shariar Hasan Emon",
    "Father's Name" => "Late Helal Uddin",
    "Mother's Name" => "Renu ara Begum",
    "Permanent Address" => ["Division" => "Mymensingh", "District" => "Mymensingh" ,
        "Upzilla" => "Bhaluka","Village" => "Mahmudpur" , "Thana" => "Bhaluka"],
    "Present Address" => ["Division" => "Dhaka", "District" => "Dhaka" ,
        "Upzilla" => "Savar","Village" => "DairyGate" , "Thana" => "Savar"]
];

//$presentAddress = $address["Permanent Address"];
//$name = $address["name"];
//$fathersName = $address["Father's Name"];
//$mothersName = $address["Mother's Name"];
//
//$division = $presentAddress["Division"];
//$district = $presentAddress["District"];
//$upzilla = $presentAddress["Upzilla"];
//$village = $presentAddress["Village"];
//
// TODO: make function dynamic by taking multiple parameters
function getInformation($data): string
{
    $name = $data["name"];
    $fathersName = $data["Father's Name"];
    $mothersName = $data["Mother's Name"];
    $division = $data["Permanent Address"]["Division"];
    $district = $data["Permanent Address"]["District"];
    $upzilla = $data["Permanent Address"]["Upzilla"];
    $village = $data["Permanent Address"]["Village"];
    return "My name is : $name <br> My father's name is $fathersName <br> My mother's name is $mothersName <br>
            I live in Division - $division <br>
            District - $district Upzilla - $upzilla <br>
            Village-  $village";
}


echo getInformation($address);