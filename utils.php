<?php


function add ($newStudent) {
    // Read the JSON file
    $json = file_get_contents('student.json');

    // Decode the JSON file
    $json_data = json_decode($json,true);
    $newStudent['registration'] = generateRegistration();
    $json_data[$newStudent['registration']] = $newStudent;
  //Encode to JSON file
    $json1 = json_encode($json_data, true);
    $fileJson = file_put_contents('student.json', $json1);


}

function retrieve() {
    $json = file_get_contents('student.json');
    $json_data = json_decode($json, true);
    return $json_data;
}

function generateRegistration() {
    return rand(1000000000, 2000000000);
}

function deleteStudent($registration){
    $json = file_get_contents('student.json');
    $json_data = json_decode($json,true);
    unset($json_data[$registration]);
    $json1 = json_encode($json_data, true);
    $fileJson = file_put_contents('student.json', $json1);

}

function updateStudent() {

}
