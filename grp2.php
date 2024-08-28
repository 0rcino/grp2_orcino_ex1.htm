<?php
// for information Team member
$teamMembers = [
    // profile 1
    [
        'name' => 'Allen Jefferson C. Orcino',
        'role' => 'Assistant Leader',
        'course' => 'BSIT',
        'age' => 21,
        'gender' => 'Male',
        'contact' => '09811732889',
        'address' => '208 Molina St. Purok 6 Alabang Muntinlupa City',
        'image' => 'Assets/len.jpg',
        'github' => 'https://github.com/0rcino',
        'facebook' => 'https://www.facebook.com/allen.14.aj/',
        'linkedin' => 'https://www.linkedin.com/in/allenjefferson-orcino-b82924322/?trk=opento_sprofile_topcard',
        'coursera' => 'https://www.coursera.org/user/fba21b844e5e2a0e91abcb31449b73f1'
    ],
    // profile 2
    [
        'name' => 'Jhonrey Kyle C. Lugon',
        'role' => 'Leader',
        'course' => 'BSIT',
        'age' => 22,
        'gender' => 'Male',
        'contact' => '09619669812',
        'address' => 'Baranggay Marcelo Green Village Parañaque City',
        'image' => 'Assets/kyle.jpg',
        'github' => 'https://github.com/Gekyume-31',
        'facebook' => 'https://www.facebook.com/jhonreylugon',
        'linkedin' => 'http://www.linkedin.com/in/jhonreykylelugon',
        'coursera' => 'https://www.coursera.org/learner/kyle'
    ],
    // profile 3
    [
        'name' => 'Hannah Grace Traya',
        'role' => 'Member',
        'course' => 'BSIT',
        'age' => 20,
        'gender' => 'Female',
        'contact' => '09510681571',
        'address' => 'Megsha Homeowners Tagle Compound, San Guillermo Street. Putatan, Muntinlupa City.',
        'image' => 'Assets/hannah.jpg',
        'github' => 'https://github.com/hana-tomoe',
        'facebook' => 'https://www.facebook.com/hana.gracia23',
        'linkedin' => 'https://www.linkedin.com/in/hannah-grace-traya-2a4944322',
        'coursera' => 'https://www.coursera.org/learner/hannah-grace-traya-8888'
    ],
    // profile 4
    [
        'name' => 'Ian Adrian Porciuncula',
        'role' => 'Member',
        'course' => 'BSIT',
        'age' => 21,
        'gender' => 'Male',
        'contact' => '09515695918',
        'address' => '200 Pedro Diaz St. Muntinlupa City',
        'image' => 'Assets/ian.png',
        'github' => 'https://github.com/Eyan09',
        'facebook' => 'https://www.facebook.com/Eyaaaaan7',
        'linkedin' => 'http://www.linkedin.com/in/ian-adriann-porciuncula-4126b9322',
        'coursera' => 'https://www.coursera.org/user/685d395df259e193d48f1b3eccdba104'
    ],
    // profile 5 
    [
        'name' => 'Lester Plandaño',
        'role' => 'Member',
        'course' => 'BSIT',
        'age' => 20,
        'gender' => 'Male',
        'contact' => '09994531752',
        'address' => ' 19a hyacinth st south Greenheigts village Muntinlupa city',
        'image' => 'Assets/lester.jpg',
        'github' => 'https://github.com/LesterPlandano',
        'facebook' => 'https://www.facebook.com/Lester.Gggggg',
        'linkedin' => 'https://www.linkedin.com/in/lester-planda%C3%B1o-6b86bb322?trk=contact-info',
        'coursera' => 'https://www.coursera.org/user/fba21b844e5e2a0e91abcb31449b73f1'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Assets/logo.jpg" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="grp2.css">
    <title>Group 2</title>
</head>
<body>
    <div class="team" id="Team">
        <h1>Group 2 <span> Our Team </span></h1>
        <h3>Personal Website</h3>
        <div class="team_box">
            <?php foreach ($teamMembers as $member): ?>
            <div class="profile">
                <img src="<?php echo $member['image']; ?>">
                <div class="info">
                    <h2 class="name"><?php echo $member['name']; ?></h2>
                    <button class="info-btn" onclick="showInfo('info-container-<?php echo strtolower(str_replace(' ', '-', $member['name'])); ?>')">Info</button>
                    <div id="info-container-<?php echo strtolower(str_replace(' ', '-', $member['name'])); ?>" class="info-container">
                        <h2><?php echo $member['name']; ?></h2>
                        <h4><?php echo $member['role']; ?></h4>
                        <p>Course: <?php echo $member['course']; ?></p>
                        <p>Age: <?php echo $member['age']; ?></p>
                        <p>Gender: <?php echo $member ['gender']; ?></p>
                        <p>Contact Number: <?php echo $member['contact']; ?></p>
                        <p>Address: <?php echo $member['address']; ?></p>
                        <button class="exit-btn" onclick="hideInfo('info-container-<?php echo strtolower(str_replace(' ', '-', $member['name'])); ?>')">Exit</button>
                    </div>
                    <div class="team_icon">
                        <a class="fa-brands fa-github" href="<?php echo $member['github']; ?>" target="_blank"></a>
                        <a class="fa-brands fa-facebook" href="<?php echo $member['facebook']; ?>" target="_blank"></a>
                        <a class="fa-brands fa-linkedin" href="<?php echo $member['linkedin']; ?>" target="_blank"></a>
                        <a class="fas fa-copyright" href="<?php echo $member['coursera']; ?>" target="_blank"></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>      
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="grp2.js"></script>
</html>
