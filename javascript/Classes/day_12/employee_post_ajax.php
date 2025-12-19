<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];

    // Put all existing users inside the 'data' key array
    $response = [
        "data" => [
            [
                "full_name" => "Himal Subedi",
                "email" => "himal@gmail.com",
                "contact" => "9784545",
                "gender" => "Male",
            ],
            [
                "full_name" => "Siraj Bhatta",
                "email" => "siraj@gmail.com",
                "contact" => "874512",
                "gender" => "Female",
            ],
            [
                "full_name" => "Kesari Thapa",
                "email" => "kesarithap@gmail.com",
                "contact" => "97846512",
                "gender" => "Female",
            ]
        ]
    ];

    // New data from the form
    $new_user = [
        "full_name" => $full_name,
        "email" => $email,
        "contact" => $contact,
        "gender" => $gender,
    ];

    // Append the new user to the data list
    $response["data"][] = $new_user;

    echo json_encode($response);
}