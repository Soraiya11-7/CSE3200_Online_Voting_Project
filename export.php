<?php
require('conn.php');
function filterData(&$str){
  $str = preg_replace("/\t/","\\t",$str);
  $str = preg_replace("/\r?\n/","\\n",$str);
  if(strstr($str,'"')) $str ='"' . str_replace('"', '""', $str) . '"';
}
$fileName ="resultsheet" . ".xlsx";
$fields =array('Roll','Student_Name','Total_Vote');

$excelData = implode("\t", array_values($fields)) . "\n";
$ad_id = $_COOKIE['ad_id'];
$sql ="select t.roll Roll, t.total_vote Total_Vote, Student_Name, email_address from students_info
JOIN
(select Roll, total_vote from candidate_list where roll in (select student_id from student_section_rel where section_id=(select section_id from advisor_section_rel where advisor_id='$ad_id'))) t
on students_info.roll=t.roll;";
$query = mysqli_query($conn,$sql);    
if(mysqli_num_rows($query)>0){
  while($data = mysqli_fetch_assoc($query )){
    $rowdata=array($data["Roll"],$data["Student_Name"],$data["Total_Vote"]);
    array_walk($rowdata,'filterData');
    $excelData .=implode("\t", array_values($rowdata)) . "\n";
  }}
  else{
    $excelData .='No records found...' . "\n";
  }

  //Headers for download
  header("Content-Disposition: attachment; filename=\"$fileName\"");
  header("Content-Type: application/vnd.ms-excel");
  echo $excelData;
  exit;


?>