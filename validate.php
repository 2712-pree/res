<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="validatestyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=PT+Serif:ital@1&family=Sevillana&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik+Gemstones&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6a0505c303.js" crossorigin="anonymous"></script>
    <style>
        .containerphp {
  margin-top:150px;
  margin-bottom:800px;
}
    .table{
        margin-top:590px;
        
    }
    </style>
  </head>
  <body>
    <section id="header">
        <a href="index.html"><img src="flogo.jpg" class="logo" alt="logo"></a>
    
        <div>
            <ul id="navbar">
                <li><a  href="index.html">Home</a></li>
                <li><a href="About_us.html">About Us</a></li>
                <li><a href="final.html">Journals</a></li>
                <li><a class="active" href="validate.php">Submit Papers</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
        </div>
    </section>
    <section id="head">
        <div class="head1">
            <h2 class="h-primary">Submit Papers</h2>
        </div>
        
      </section>
    
    <section id="submit">
        <div class="sub">
            <div class="info">
                <div class="subname">
                    How and where to submit your research papers in a Journal??
                </div>
                <div class="p-1">
                    <p>Identifying the best place to publish research involves consideration of many factors which are often ignored by most of the researchers. </p>
                        <p>ResearcHook compiles all of these factors providing you the best links of journals to submit your papers!</p>
                    <p>We provide you the best links where you can submit your reserach papers with proper guidance and many more tips and tricks to become a pro in writing research papers!</p>
                
                </div>
            </div>
            <div class="image">
                <img src="submitimg.webp" alt="submit">
            </div>
            </div>
        </section>
        <div class="containerphp">
        <div class="content">
        <h2>Validate Journals</h2>
        <form method="post">
            <input class="takeinput" type="text" name="search" placeholder="enter journal name or issn or publisher name" >
            <button class="btn btn-dark" name="submit">Search</button>
        </form>
</div>
    <div class="container my-5">
        <table class="table">
            <?php
        if(isset($_POST['submit'])){
            $search=$_POST['search'];
            
            $sql="Select * from `journals` where Journal_name like '%$search%' or ISSN like '%$search%'
            or Publisher_name like '%$search%' or Indexed_by like '%$search%'";
            $result=mysqli_query($con,$sql);
            if($result){
                
            
            if(mysqli_num_rows($result)>0){
                echo '<thead>
                <tr>
                <th>ISSN</th>
                <th>Journal_name</th>
                <th>Publisher_name</th>
                <th>Indexed_by</th>
                <th>Citation_score</th>
                <th>impact_factor</th>

                </tr>
                </thead>
                ';

                while($row=mysqli_fetch_assoc($result)){
                echo '<tbody>
                <tr>
                <td>'.$row['ISSN'].'</td>
                <td>'.$row['Journal_name'].'</td>
                <td>'.$row['Publisher_name'].'</td>
                <td>'.$row['Citation_score'].'</td>
                <td>'.$row['impact_factor'].'</td>
                <td>'.$row['Indexed_by'].'</td>

                </tr>
                </tbody>';
                }

            }
        }
        else{
            echo '<h2>data not found</h2>';
        }

        }
        ?>
        <?php

        ?>
        </table>
    </div>

    </div>
        
        <section id="sec2">
            <h2>Finding Places To Submit Your Research Papers?</h2>
            <p class="para1">A guide to help researchers and feel confident identifying suitable journals and preparing their paper for submission. We have mentioned some of the reputed sites where you can submit your papers.</p>
            <div class="main-container">
                <div class="pro-container">
                    <div class="part1">
                        <div class = "vertical"></div>
                            <div class="container_img">
                        <img src="elsevier.png">
                    </div>
                    <div class="container_info">
                        <a href="https://www.elsevier.com/authors/submit-your-paper" target="_blank">ELSEVIER</a>
                        <p>You can submit to most Elsevier journals using our online systems.  The system you use will depend on the journal to which you submit.
                        Once submitted, your paper will be considered by the editor and if it passes initial screening, it will be sent for peer review by experts in your field. </p>
                    </div>
                </div>
                <div class="part1">
                    <div class = "vertical"></div>
                    <div class="container_img">
                        <img src="SpringerLink.jpg">
                    </div>
                    <div class="container_info">
                        <a href="https://www.springeropen.com/get-published" target="_blank">SPRINGER</a>
                        <p>SpringerOpen articles and books are subject to high-level peer review, editorial, author and production services, ensuring the quality and reliability of the work. For journals, editorial and peer review policies are available in the “Submission Guidelines” on each journal’s website. </p>
                    </div>
                </div>
                <div class="part1">
                    <div class = "vertical"></div>
                    <div class="container_img">
                        <img src="ieee.jfif">
                    </div>
                    <div class="container_info">
                        <a href="https://journals.ieeeauthorcenter.ieee.org/submit-your-article-for-peer-review/the-ieee-article-submission-process/" target="_blank">IEEE</a>
                        <p>Once you have written your article and prepared your graphics, you can submit your article for review. After checking that your article complies with the target journal’s submission guidelines, you are ready to submit. Click the Submit Your Manuscript button on the journal’s home page on IEEE Xplore.</p>
                    </div>
                </div>
                <div class="part1">
                    <div class = "vertical"></div>
                    <div class="container_img">
                        <img src="wos.jpg">
                    </div>
                    <div class="container_info">
                        <a href="https://wos-journal.com/" target="_blank" >WEB OF SCIENCE</a>
                        <p>Web of Science is one of the highly reputed journal indexing databases in the entire globe. The most important suggestions for research authors to have their articles successfully published in Web of Science indexed journals are summarized by the framework entitled ‘The Four Cs of scientific writing and publication’ mentioned in our website.  </p>
                    </div>
                </div>
                <div class="part1">
                    <div class = "vertical"></div>
                    <div class="container_img">
                        <img src="sci.jpg">
                    </div>
                    <div class="container_info">
                        <a href="https://www.mdpi.com/journal/sci/instructions" target="_blank">Sci</a>
                        <p>To submit your manuscript, register and log in to the submission website. Once you have registered, click here to go to the submission form for Sci. All co-authors can see the manuscript details in the submission system, if they register and log in using the e-mail address provided during manuscript submission. </p>
                    </div>
                </div>
                <div class="part1">
                    <div class = "vertical"></div>
                    <div class="container_img">
                        <img src="ijsred.jpg">
                    </div>
                    <div class="container_info">
                        <a href="https://www.ijsdr.org/callforpaper.php?gclid=CjwKCAiAioifBhAXEiwApzCztjAFVbKynTRBh-Pk3dKkq7xv_Zvjl0Peeoj-hveCsWmZYVrWoWE-RBoC-KgQAvD_BwE" target="_blank">IJSRED</a>
                        <p>IJSRED is one of the leading and growing, scholarly open access, peer-reviewed, bimonthly, and fully refereed scientific research journal.It provides a platform for publishing results and research with a strong empirical component. It aims to bridge the significant gap between research and practice by promoting the publication of original, novel, industry-relevant research. </p>
                    </div>
                </div>
                <div class="part1">
                    <div class = "vertical"></div>
                    <div class="container_img">
                        <img src="edas.jpg">
                    </div>
                    <div class="container_info">
                        <a href="https://edas.info/doc/authors.html" target="_blank">EDAS</a>
                        <p>EDAS manages the paper submission, review and registration process for conferences, workshops and journals. It is a hosted and supported service, i.e., there is no software to install and support staff can help authors, reviewers and chairs with any problems. Users interact with EDAS using standard web browsers.</p>
                    </div>
                </div>
            </div>
            <div class="side-nav">
                <div class="imapact-factor">
                  <div class="heading"> 
                      <div class="nameing">INDEXING</div>
                  </div>
                  <div class="content">
                      <div class="websites">
                          <div class="inner-websites">
                                 <img src="scholar.png">
                          </div>
                          <div class="inner-websites">
                              <img src="indexco.png">
                          </div>
                      </div>
                      <div class="websites">
                          <div class="inner-websites">
                              <img src="crossref.jfif">
                          </div>
                          <div class="inner-websites">
                              <img src="jour.jfif">
                          </div>
                          
                      </div>
                      <div class="websites">
                          <div class="inner-websites">
                              <img src="jgate.webp">
                          </div>
                          <div class="inner-websites">
                              <img src="cornell.png">
                          </div>
                          
                      </div>
                      
                  </div>
                </div>
                <div class="conferences">
                    <div class="heading"> 
                        <div class="nameing">Conferences</div>
                    </div>
                    <div class="liststyle">
                        <div class="dropping"> 
                            <i class="fas fa-chevron-down"></i>ICSSE 2022
                        </div>
                        
                        <div>
                            <i class="fas fa-chevron-down"></i>
                            Data Council US – Austin 2022</div>
                        <div>
                            <i class="fas fa-chevron-down"></i>
                         PyCon</div>
                        <div> 
                            <i class="fas fa-chevron-down"></i>
                          DeveloperWeek</div>
                        <div> 
                            <i class="fas fa-chevron-down"></i>
                          FOSDEM</div>
                        <div>
                            <i class="fas fa-chevron-down"></i>
                          ConFoo.CA</div>
                        <div>
                            <i class="fas fa-chevron-down"></i>
                          SREcon22 Americas</div>
                        <div>
                            <i class="fas fa-chevron-down"></i>
                          QCon London</div>
                        <div>
                            <i class="fas fa-chevron-down"></i>
                         Devnexus</div>
                        <div>
                            <i class="fas fa-chevron-down"></i>
                         Devoxx</div>
                        <div>
                            <i class="fas fa-chevron-down"></i>
                          DeveloperWeek Europe</div>
                        <div> 
                            <i class="fas fa-chevron-down"></i>
                          QCon Plus Onlines</div>
                        <div>
                            <i class="fas fa-chevron-down"></i>
                            RailsConf 2022 </div>
                        <div>
                            <i class="fas fa-chevron-down"></i>
                            GlueCon</div>
                        <div>
                            <i class="fas fa-chevron-down"></i>
                          ICSE 2022</div>
        
                    </div>
                  </div>
        </div>
    
    
    </section>
    
    
    <section id="banner-3">
        <div class="banner-box">
            <div class="card" style="width: 18rem;border:none;">
                <a href="https://www.scijournal.org/articles/good-impact-factor" target="_blank"><img class="card-img-top" src="temp.jpg" height="200" style="border:1px solid #000; border-radius:15px;" alt="Card image cap"></a>
                <div class="card-body">
                  <p class="card-text">What's a good Impact Factor?(Ranking In 27 Categories)</p>
                </div>
              </div>
            
        </div>
        <div class="banner-box">
            <div class="card" style="width: 18rem;border:none;">
                <a href="https://www.scijournal.org/articles/increase-impact-factor" target="_blank"><img class="card-img-top" src="r1.jpg" height="200" style="border:1px solid #000; border-radius:15px" alt="Card image cap"></a>
                <div class="card-body">
                  <p class="card-text">19 Ways To Increase Impact Factor Of Your Journal</p>
                </div>
              </div>
            
        </div>
        <div class="banner-box">
            <div class="card" style="width: 18rem;border:none;">
                <a href="https://www.ijstr.org/how-to-publish-paper.php" target="_blank"><img class="card-img-top" src="temp2.jpg" height="200" style="border:1px solid #000; border-radius:15px" alt="Card image cap"></a>
                <div class="card-body">
                  <p class="card-text">Step by step guide to publish your research paper</p>
                </div>
              </div>
            
        </div>
         <div class="banner-box">
            <div class="card" style="width: 18rem;border:none;">
                <a href="https://www.scijournal.org/articles/good-impact-factor" target="_blank"><img class="card-img-top" src="b4.jpg" height="200" style="border:1px solid #000; border-radius:15px" alt="Card image cap"></a>
                <div class="card-body">
                  <p class="card-text">What's a good Impact Factor?(Ranking In 27 Categories)</p>
                </div>
              </div>
            
        </div>
        <div class="banner-box">
            <div class="card" style="width: 18rem;border:none;">
                <a href="https://www.scijournal.org/articles/increase-impact-factor" target="_blank"><img class="card-img-top" src="b5.jpg" height="200" style="border:1px solid #000; border-radius:15px" alt="Card image cap"></a>
                <div class="card-body">
                  <p class="card-text">19 Ways To Increase Impact Factor Of Your Journal</p>
                </div>
              </div>
            
        </div>
        <div class="banner-box">
            <div class="card" style="width: 18rem;border:none;">
                <a href="https://www.ijstr.org/how-to-publish-paper.php" target="_blank"><img class="card-img-top" src="temp2.jpg" height="200" style="border:1px solid #000; border-radius:15px" alt="Card image cap"></a>
                <div class="card-body">
                  <p class="card-text">Step by step guide to publish your research paper</p>
                </div>
              </div>
            
        </div>
        </section>
        
        <div class="footer">
            <a href="#"><img src="insta.jpeg" width="30" height="30" style="border-radius:10px"></a>
            <a href="#"><img src="fb.jpeg" width="30" height="30" style="border-radius:10px"></a>
            <a href="#"><img src="twi.png" width="30" height="30" style="border-radius:12px"></a>
           <p>Copyright &copy; 2022-
                <?php echo date("Y"); ?>. All rights reserved.</p>
          
          </div>
    
      <script src="index.js"></script>
  </body>
</html>



<!-- A guide to help researchers and feel confident identifying suitable journals and preparing their paper for submission -->