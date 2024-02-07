<?php
include 'connect.php';
$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1687-5893','1687-5907','Advances in Human Computer Interaction','Hindawi','UGC',5.9,'ENGLISH',4.07)"; 

 $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('0004-5411','1557-735X','Journal of the ACM','Association for Computing Machinery','UGC',6.2,'ENGLISH',2.170)"; 

 $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('2056-6387','2056-6387','NPJ Quantum Information','Nature Publishing Group','UGC',9.8,'ENGLISH',9.181)"; 

 $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1532-4435','1533-7928','Journal of machine learning research','MIT Press','UGC',6.8,'ENGLISH',4.091)"; 

 $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('2352-7110','2352-7110','SoftwareX','Elsevier','UGC',2.8,'ENGLISH',2.868)"; 

 $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1868-5137','1868-5145','Journal of ambient intelligence and humanized computing','Springer','UGC',5.4,'ENGLISH',6.163)"; 

 $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('2001-0370','2001-0370','Computational and Structural Biotechnology Journal','Elsevier','UGC',5.1,'ENGLISH',4.720)"; 

 $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('2376-5992','2376-5992','PeerJ Computer Science','PeerJ Inc','UGC',2.2,'ENGLISH',2.96)"; 

 $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1687-9503','1687-9511','Journal of nanotechnology','Hindawi','UGC',4.8,'ENGLISH',0)"; 

 $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1553-877X','-','IEEE Communications Surveys and Tutorials','IEEE','UGC',62.1,'ENGLISH',39.97)"; 

 $result=mysqli_query($con,$sql);
 $sql = "SELECT * from journals";


if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf("Total rows in this table :  %d\n", $rowcount);
 }
?>