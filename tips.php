<?php

$tips = [
    ["Provide help willingly", 705, 22, 8],
    ["Listen attentively to student questions", 704, 18, 13],
    ["Treat students equally and fairly", 695, 33, 7],
    ["Offer words of encouragement", 694, 27, 14],
    ["Set realistic deadlines for assignments", 693, 30, 12],
    ["Announce tests in advance", 684, 37, 14],
    ["Grade and return tests promptly", 683, 42, 10],
    ["Present information in a logical sequence", 671, 50, 14],
    ["Use real world examples in teaching", 666, 53, 16],
    ["Be professional in speech and actions", 632, 79, 24],
    ["Involve students in class discussions", 630, 81, 24],
    ["Allow time for questions after class", 611, 94, 30],
    ["Relate teaching to career interests", 609, 72, 54],
    ["Give constructive criticism", 609, 85, 41],
    ["Provide a break in a two-hour or longer class", 607, 104, 24],
    ["Give classwork to enhance learning", 591, 104, 40],
    ["Give homework to enhance learning", 586, 111, 38],
    ["Preview the lesson before teaching", 544, 135, 56],
    ["Review the lesson after teaching", 561, 151, 23],
    ["Empathize with students", 548, 128, 59],
    ["Require students to use standard English in class when they speak or write", 538, 151, 46],
    ["Write notes on chalkboard while teaching", 519, 151, 65],
    ["Vary voice tone while teaching", 522, 155, 58],
    ["Give students extra credit assignments", 514, 160, 61],
    ["Use personal experiences as examples in teaching", 503, 161, 71],
    ["Allocate points for class participation", 468, 205, 62],
    ["Give objective exams", 432, 197, 106],
    ["Discuss ethical issues and societal norms", 448, 160, 127],
    ["Require students to know instructor's name", 429, 202, 104],
    ["Allocate points for class attendance", 425, 224, 86],
    ["Encourage team or group work", 423, 247, 65],
    ["Be humorous in class", 394, 212, 129],
    ["Require students to bring books to class", 392, 177, 166],
    ["Deduct points for assignments submitted late", 384, 237, 114],
    ["Require that all papers be typed", 337, 311, 87],
    ["Use the case study method in teaching", 335, 271, 129],
    ["Assign projects requiring the use of the library", 333, 263, 139],
    ["Call students by first name", 355, 282, 98],
    ["Move around in the classroom when teaching", 302, 256, 177],
    ["Require compulsory class attendance", 299, 260, 176],
    ["Have students read a chapter and answer questions before teaching the content of the chapter", 294, 269, 172],
    ["Give take-home exams", 283, 254, 198],
    ["Require computer use for class projects", 283, 330, 122],
    ["Use transparencies to teach", 252, 331, 152],
    ["Allocate points for outside readings", 237, 302, 196],
    ["Give essay exams", 189, 262, 284],
    ["Not accept assignments submitted late", 173, 285, 277],
    ["Encourage students to dress professionally", 135, 274, 326],
    ["Give unannounced quizzes", 125, 335, 275],
    ["Call students by last name", 107, 206, 422]
];

$tip = $tips[array_rand($tips)];
$total = $tip[1] + $tip[2] + $tip[3];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Tips</title>
    <style>
        h1{
            text-align: center;
        }
        table{
            width: 100%;
            border-spacing: 0px;
        }
        td, th{
            border: 1px solid black;
            width: 100%;
            mso-cellspacing: 0px;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>
    Teacher Tip for the Day
</h1>
    <table>
        <tr>
            <th>Tip</th>
            <th>Agree</th>
            <th>Neutral</th>
            <th>Disagree</th>
        </tr>
        <tr>
            <td><?php echo $tip[0]; ?></td>
            <td><?php echo round(100 * $tip[1] / $total, 1) . '%'; ?></td>
            <td><?php echo round(100 * $tip[2] / $total, 1) . '%'; ?></td>
            <td><?php echo round(100 * $tip[3] / $total, 1) . '%'; ?></td>
        </tr>
    </table>
</body>
</html>

