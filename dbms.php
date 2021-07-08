<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Elearning</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="js/min.js"></script>

<style type="text/css">
  
  .inner {
  padding-left: 1em;
  overflow: hidden;
  display: none;
}


.toggle {
    width: 100%;
    display: block;
    transition: background 0.3s ease;
    color: #333;
    font-size: 17px;
    font-weight: 600;
    display: inline-block;
}
ul.inner li {
    border: none;
}
.accordion li {
    padding: 8px;
    border: 1px solid #eee;
    margin: 0;
}
.accordion li:first-child {
    border-bottom: none;
}
ul.accordion {
    padding: 0;
    margin: 0;
    list-style-type: none;
}

</style>

  
  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>We are available for any custom works this month</strong></li>
              <li>Main office: Springville center X264, Park Ave S.01</li>
              <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">

              <ul>
                <li><a href="#" data-toggle="modal"><i class=""></i>
              <?php        
                 if(isset($_SESSION['email']))
                        {
                          echo "welcome ".$_SESSION['uname'];
                        }
                          else
                        { 
                                header("location:index.php");
                             //  echo "Flat and trendy bootstrap template";
                        } 
                        
              ?>
               </a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>
        </div>
        <div class="span4">
            <div class="logo">
              <a href="indexlogin.php"><img src="img/logo.png" alt="" class="logo" /></a>
              <h1>               
  <?php        
        if(isset($_SESSION['email']))
        {
          echo "welcome ".$_SESSION['uname'];
        }
          else
        { 
              // header("location:index.php");
        } 
        
        ?>
            </h1>
            </div>
          </div>
        <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="indexlogin.php">Home</a>
                    </li>
                    <li class="dropdown">
                      <a href="#">Department<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Computer Engineering</a>
                            <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="java.php">JAVA Programing</a></li>
                            <li><a href="os.php">Operating System</a></li>
                            <li><a href="dbms.php">Data Base Management</a></li>
                             <li><a href="cpp.php">C++</a></li>
                          </ul>  
                        </li>

                        <li><a href="#">Civil Engineering</a></li>
                        <li><a href="#">Mechanical Engineering</a></li>
                        <li><a href="#">Electrical Engineering</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="contact.php">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- end header -->
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Data Base Management System</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="indexlogin.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Computer Engineering</a><i class="icon-angle-right"></i></li>
              <li class="active">Data Base Management System</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
    <section id="schedule">
<h2>Course Index</h2>
<p>The following is a tentative schedule for the semester. I kept the topics vague as I like to move at the speed of the class, not my own speed. Homework assignments will be announced in class.</p>


<form  action="videolist.php" method="post" id="myForm">
<ul class="accordion" id="sizelist">
  <li>
    <a class="toggle"> 1. Introduction to Modern Database Systems</a>
    <ul  class="inner">
      <li data-value="Characteristics of Databases"  ><a href="" name="ht_java" value="History of java">Characteristics of Databases</a></li>
      <li data-value=" Database Environments"><a  href="videolist.php"> Database Environments</a></li>
   

   <li data-value=" Classifying Database Management Systems"><a href="videolist.php"> Classifying Database Management Systems</a></li>
    </ul> 
  </li>
   <li>
    <a class="toggle">2.Database Architecture and Date Languages</a>
    <ul class="inner">
      <li data-value="Databases and the Three-Schema Architecture"><a class="toggle" href="videolist.php">Databases and the Three-Schema Architecture</a></li> 
      <li data-value="Tables, Views, and Indexes"><a class="toggle" href="videolist.php">Tables, Views, and Indexes</a></li>
    <li data-value="dbms"><a class="toggle" href="videolist.php">dbms</a></li>
    </ul>
  </li>
  
<input id="sizevalue" style="display: none;" size="50" name="size" type="text" />
<input type="submit" value="submit"class="w3-button w3-red" />
</ul>  
</form>
   </table>
    </section>




    <section id="projects">
<h2>Projects</h2>
<p>Grading distribution:</p>
<table class="table">
  <tr>
    <td><p><strong>Final Project</strong></p>
      <p>Develop a website.<br />
        You will develop a website with the topic of your choice. You will present your project on the last day of class, no exceptions. The final project will count as your final exam. Requirements TBA.
      </p></td>
    <td>30%</td>
  </tr>
  <tr>
    <td><p><strong>Midterm</strong></p>
      <p>Digital Resume.<br />
        You will develope a 1-page digital resume using the skills you learned in the class up until the midterm point. Requirements TBA.
      </p><p>I encourage you to use this as a portfolio when applying to jobs.</p></td>
    <td>25%</td>
  </tr>
  <tr>
    <td><p><strong>Layout Project</strong></p>
      <p>You will be assigned a picture of a website and expected to recreate the website using HTML/CSS.</p></td>
    <td>20%</td>
  </tr>
  <tr>
    <td><p><strong>Homework</strong></p>
      <p>A majority of homework will be web links and short assignments using codepen.io or submitting answers in a Google form. Homework will be assigned in class.</p>
      <p><strong>All homework is due before noon the day of class.</strong></p>
    
      <p>Homework is graded on a 0-3 scale.</p>
      <ul>
        <li>0 = you did not hand it in</li>
        <li>1 = you missed the mark</li>
        <li>2 = you almost got it right</li>
        <li>3 = you got it exactly right</li>
      </ul>
      <p>If you receive a "0", you cannot make it up. Unless you have an outstanding circumstance.</p>
      <p>If you recieve a "1", you can upgrade to a "2" or "3" by emailing me and explaining in detail your answer and why it was not exactly right.</p>
    </td>
    <td>15%</td>
  </tr>
  <tr>
    <td><p><strong>Participation</strong></p>
      <p>Show up on time and have a good attitude.</p></td>
    <td>10%</td>
  </tr>
</table>
    </section>

           <!-- <article>
              <div class="top-wrapper">
                <div class="post-heading">
                  <h3><a href="#">This is an example of portfolio detail</a></h3>
                </div>
                <!-- start flexslider --> <!-- 
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="img/works/full/image-01-full.jpg" alt="" />
                    </li>
                    <li>
                      <img src="img/works/full/image-02-full.jpg" alt="" />
                    </li>
                    <li>
                      <img src="img/works/full/image-03-full.jpg" alt="" />
                    </li>
                  </ul>
                </div>
                <!-- end flexslider --> <!-- 
              </div>
              <p>
                Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius
                ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.
              </p>
            </article> --> 
          </div>
          <div class="span4">
            <aside class="right-sidebar">
              <div class="widget">
                <h5 class="widgetheading">Project information</h5>
                <ul class="folio-detail">
                  <li><label>Category :</label> Web design</li>
                  <li><label>Client :</label> ASU Company</li>
                  <li><label>Project date :</label> 26 March, 2013</li>
                  <li><label>Project URL :</label><a href="#">www.projectsiteurl.com</a></li>
                </ul>
              </div>
              <div class="widget">
                <h5 class="widgetheading">Text widget</h5>
                <p>
                  Lorem ipsum dolor sit amet, unum suscipiantur te cum, vide magna ea eam. At eos wisi tractatos temporibus. Ne has omnis harum. Ei mea graece delenit nominati. Ut dolore albucius torquatos vel, choro gubergren no mel.
                </p>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">About our company</a></li>
                <li><a href="#">Our services</a></li>
                <li><a href="#">Meet our team</a></li>
                <li><a href="#">Explore our portfolio</a></li>
                <li><a href="#">Get in touch with us</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Important stuff</h5>
              <ul class="link-list">
                <li><a href="#">Press release</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Career center</a></li>
                <li><a href="#">Flattern forum</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Flickr photostream</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear">
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with us</h5>
              <address>
                <strong>Flattern studio, Pte Ltd</strong><br>
                 Springville center X264, Park Ave S.01<br>
                 Semarang 16425 Indonesia
              </address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Flattern - All right reserved.</span>
                </p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  --> <!-- 
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js">
    

  </script>


<script type="text/javascript">
    

$('.toggle').click(function(e) {
    e.preventDefault();
  
    var $this = $(this);
  
    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
    } else {
        $this.parent().parent().find('li .inner').removeClass('show');
        $this.parent().parent().find('li .inner').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
    }
});


</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
<script>
  
$("#sizelist").on("click", "a", function(e) {
  e.preventDefault();
  var $this = $(this).parent();
  $this.addClass("select").siblings().removeClass("select");
  $("#sizevalue").val($this.data("value"));
})
 


function submitform()
{


} 


</script>

</body>

</html>
