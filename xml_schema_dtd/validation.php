<?php 
$xml=new DOMDocument;
$xml->load('students.xml');
if ($xml->validate()){
    echo "validated";
}
else{
    echo "not valid";
}