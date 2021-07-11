<?php
 class Student {
   var $first_name;
   var $last_name;
   var $country = 'None';
 }

 $student1 = new Student;
 $student1->first_name = "Luciano";
 $student1->last_name = "Nicacio";

 $student2 = new Student;
 $student2->first_name = "Joe";
 $student2->last_name = "Doe";

echo $student1->first_name . " " . $student1->last_name . "\n";
echo $student2->first_name . " " . $student2->last_name . "\n";

$class_vars = get_class_vars('Student');
echo "Class vars: \n";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

$object_vars = get_object_vars($student1);
echo "Object vars: \n";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

if(property_exists('Student', 'first_name')) {
    echo "Property first_name exists in Student class";
} else {
    echo "Property first_name doesn't exists in Student class";
}
?>