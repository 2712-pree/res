<?php
include 'connect.php';
$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1556-4673','1556-4711','Journal on Computing and Cultural 	Heritage','ACM','SCOPUS',4.6,'ENGLISH',2.86)"; 
$result=mysqli_query($con,$sql);
  
 $sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1213-6972','12136-964','Journal of WSCG','University of West Bohemia','SCOPUS',0.5,'ENGLISH',0.49)"; 


    $result=mysqli_query($con,$sql);


 $sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1758-2946','17582-946','Journal Of Cheminformatics','Chemistry Central','SCOPUS',9.5,'ENGLISH',8.489)"; 


    $result=mysqli_query($con,$sql);

 $sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('2153-0785','2153-0793','Dynamic Games and Applications','Springer Nature','SCOPUS',2.4,'ENGLISH',1.296)"; 


    $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1571-0882','1745-3755','CoDesign','Taylor & Francis','SCOPUS',4.2,'ENGLISH',1.895)"; 


    $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('1478-0771','2048-3988','International Journal Of Architectural Computing','SAGE','SCOPUS',1.6,'ENGLISH',1.038)"; 


    $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('22884300','22885048','Journal Of Computational Design And Engineering ','Oxford University Press','SCOPUS',6.8,'ENGLISH',6.167)"; 


    $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('0219-4678','1793-6756','International Journal of Image and Graphics','World Scientific','SCOPUS',1.1,'ENGLISH',1.469)"; 


    $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('2383-8477','2466-0523','Advances in Computational Design','Techno-Press','SCOPUS',3.6,'ENGLISH',3.522)"; 


    $result=mysqli_query($con,$sql);

$sql="INSERT INTO `journals` (ISSN,eISSN,Journal_name,Publisher_name,Indexed_by,Citation_score,Languages,impact_factor) VALUES ('0378-4754','1872-7166','Mathematics And Computers In Simulation','Elsevier','SCOPUS',4.7,'ENGLISH',3.601)"; 



    $result=mysqli_query($con,$sql);




$sql = "SELECT * from journals";


if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf("Total rows in this table :  %d\n", $rowcount);
 }
?>