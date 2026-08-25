<?php


const SEMESTER_NAME = "Sem-5";
const INSTITUTION_NAME = "Marwadi University";
const GRADING_SCALE_MAX = 100;

$studentName = "Krishna ramnuj";
$studentId = "STU-126423";
$studentDept = "  BCA ";

$subjects = [
    [
        'code' => 'IP301',
        'name' => 'Intro to Programming',
        'credit' => 4,
        'marks' => 88
    ],
    [
        'code' => 'DS302',
        'name' => 'Data Structures',
        'credit' => 3,
        'marks' => 85
    ],
    [
        'code' => 'IS201',
        'name' => 'IS ',
        'credit' => 2,
        'marks' => 75
    ],
    [
        'code' => 'DM103',
        'name' => 'Data Mining',
        'credit' => 5,
        'marks' => 60
    ]
];



$totalQualityPoints = 0;
$totalCredits = 0;

foreach ($subjects as $subj) {
   
    $totalQualityPoints += ($subj['marks'] * $subj['credit']);
    $totalCredits += $subj['credit'];
}


$sgpa = ($totalCredits > 0) ? ($totalQualityPoints / $totalCredits) : 0;
$sgpa = number_format($sgpa, 2); 


?>
<!DOCTYPE html>
<html>
<head>
    <title>Previous Semester Result</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
        .result-card {
            width: 600px; margin: 50px auto; background: #fff;
            padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 { text-align: center; color: #8a2525; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: center; }
        th { background-color: #078e6a; color: white; }
        .summary { margin-top: 20px; text-align: right; font-weight: bold; }
    </style>
</head>
<body>

<div class="result-card">
  
    <h2><?php echo INSTITUTION_NAME; ?></h2>
    <h3 style="text-align: center; color: #555;">Semester Report: <?php echo SEMESTER_NAME; ?></h3>
    
    <hr>

   
    <p><strong>Student Name:</strong> <?php echo $studentName; ?> (ID: <?php echo $studentId; ?>)</p>
    <p><strong>Department:</strong> <?php echo $studentDept; ?></p>

    <table>
        <thead>
            <tr>
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>Credits</th>
                <th>Marks (<?php echo GRADING_SCALE_MAX; ?>)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($subjects as $row): ?>
                <tr>
                    <td><?php echo $row['code']; ?></td>
                    <td style="text-align: left;"><?php echo $row['name']; ?></td>
                    <td><?php echo $row['credit']; ?></td>
                    <td><?php echo $row['marks']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    
    <div class="summary">
        <p>Total Credits: <?php echo $totalCredits; ?></p>
        <p>SGPA: <?php echo $sgpa; ?> / 100.00</p>
    </div>
</div>

</body>
</html>