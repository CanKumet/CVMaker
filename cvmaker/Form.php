<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpOffice\PhpWord\TemplateProcessor;

// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$university = $_POST['university'];
$profession = $_POST['profession'];
$experiences = $_POST['experiences'];
$language1 = $_POST['language1'];
$level1 = $_POST['level1'];
$language2 = $_POST['language2'];
$level2 = $_POST['level2'];
$language3 = $_POST['language3'];
$level3 = $_POST['level3'];
$gender = $_POST['gender'];
$adress = $_POST['adress'];
$adress2 = $_POST['adress2'];
$country = $_POST['country'];
$city = $_POST['city'];
$district = $_POST['district'];
$postalcode = $_POST['postalcode'];
$interests = $_POST['interests'];
$skill1 = $_POST['skill1'];
$skillLevel1 = $_POST['skillLevel1'];
$skill2 = $_POST['skill2'];
$skillLevel2 = $_POST['skillLevel2'];
$skill3 = $_POST['skill3'];
$skillLevel3 = $_POST['skillLevel3'];
$githubProfile = $_POST['githubProfile'];
$linkedinProfile = $_POST['linkedinProfile'];
$companyName = $_POST['companyName'];
$contactPerson = $_POST['contactPerson'];
$referencePhone = $_POST['referencePhone'];
$referenceEmail = $_POST['referenceEmail'];


$template = 'cv1.docx';
$document = new TemplateProcessor($template);
$document->setValues(
    [
        'ad'=>$name,
        'email'=>$email,
        'dob'=>$dob,
        'phone'=>$phone,
        'university'=>$university,
        'job'=>$profession,
        'experiences'=>$experiences,
        'language1'=>$language1,
        'level1'=>$level1,
        'language2'=>$language2,
        'level2'=>$level2,
        'language3'=>$language3,
        'level3'=>$level3,
        'gender' => $gender,
        'adress' => $adress,
        'adress2' => $adress2,
        'country' => $country,
        'city' => $city,
        'district' => $district,
        'postalcode' => $postalcode,
        'interest' => $interests,
        'skill1' => $skill1,
        'skillLevel1' => $skillLevel1,
        'skill2' => $skill2,
        'skillLevel2' => $skillLevel2,
        'skill3' => $skill3,
        'skillLevel3' => $skillLevel3,
        'githubProfile' => $githubProfile,
        'linkedinProfile' => $linkedinProfile,
        'companyName' => $companyName,
        'contactPerson' => $contactPerson,
        'referancePhone' => $referencePhone,
        'referanceEmail' => $referenceEmail
        
        
        ]
);


$dosya_adi = 'Cvniz.docx';
$document->saveAs($dosya_adi);

?>
