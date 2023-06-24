<?php
require_once "database.php";
$course_offer_ids = $std_id = '';
$std_id=$_COOKIE['user'];
// echo $std_id;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course_offer_ids= $_POST['course_offer_id'];
}
$stmt = $conn->prepare("INSERT INTO `course_reg`( `std_id`, `course_offer_id`) VALUES (?,?)");
$stmt->bind_param("si",$std_id,$course_o_id);
$data =[];
foreach ($course_offer_ids as $course_offer_id) {
    $course_o_id = $course_offer_id;
    try {
        $stmt->execute();
        array_push($data,array(
                'id' => $course_offer_id,
                'status' => 'Pending'
            ));
    } catch (Exception $e) {
        array_push($data,array(
            'id' => $course_offer_id,
            'status' => 'Error'
        ));
    }

}

echo json_encode($data);

?>