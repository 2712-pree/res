
<?php
include 'connect.php';
$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('2470-9476','-','Science Robotics','American Association for the Advancement of Science ','Scopus',32.6,'ENGLISH',23.75)"; 

 $result=mysqli_query($con,$sql);



$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1562-2479','21993211','International Journal of Fuzzy Systems','Springer','Scopus',7.3,'ENGLISH',4.085)"; 

 $result=mysqli_query($con,$sql);


$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1572-8382','-','Artificial Intelligence and Law','Springer Nature','Scopus',7.5,'ENGLISH',2.723)"; 

 $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('0020-0255','-',' Information Sciences', 'Elsevier','Scopus',12.1,'ENGLISH',8.233)"; 

 $result=mysqli_query($con,$sql);


$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('9295593','-','Autonomous Robots','Springer Nature','Scopus',8.6,'ENGLISH',3.255)"; 

 $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1350-1917','-','Information Systems Journal','Wiley-Blackwell','Scopus',12.3,'ENGLISH',7.767)"; 

 $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1543-0537','-','Nonlinear Optics Quantum Optics','Old City Publishing Inc.','Scopus',1.5,'ENGLISH',0.333)"; 

 $result=mysqli_query($con,$sql);


$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('0167-739X','-','Future Generation Computer Systems','Elsevier','Scopus',13.3,'ENGLISH',7.187)"; 

 $result=mysqli_query($con,$sql);


$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1890-1328','-','Modeling, Identification and Control','The Research Council of Norway','Scopus', 1.9,'ENGLISH',0.314)"; 

 $result=mysqli_query($con,$sql);


$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1362-3001','-','Behaviour and Information Technology','Taylor & Francis','Scopus',4.5,'ENGLISH',3.32)"; 

 $result=mysqli_query($con,$sql);




$sql = "SELECT * from journals";


if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf("Total rows in this table :  %d\n", $rowcount);
 }
?>