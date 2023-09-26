<?php

// Create a multidimensional array to store student grades
$studentGrades = array(
    "Student1" => array("Math" => 90, "English" => 90, "Science" => 70),
    "Student2" => array("Math" => 80, "English" => 70, "Science" => 90),
    "Student3" => array("Math" => 70, "English" => 80, "Science" => 80)
);

function calculateAndPrintAverageGrades($grades) {
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects);
        $count = count($subjects);
        $average = $total / $count;
        
        echo "Student: $student\n";
        echo "Average Grade: $average\n\n";
    }
}

calculateAndPrintAverageGrades($studentGrades);

?>
