<?php
try 
{
require_once('admin/includes/config.inc.php');
}
catch(Exception $error) {
print $error->getMessage();
}
?>
<?php include("header.inc.php") ?>
<link rel="stylesheet" href="admin/datecss.css">
  <script src="admin/datejs.js"></script>
  <script src="admin/datejs1.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
 </script>

<div class="content">
<table width="93%">
<tr><td>
<h1 class="page-heading">About Us </h1></td><td><h1 class="page-heading"><a name="a" id="a"></a>Objective - Why we do what we do</h1> </td></tr></table>

<? include'about-left.inc.php'; ?>  
<div class="right content_right">
<?php include("right.inc.php");?>
</div>
<div class="content_center4 static">
<p>Rateyourinstitute is a community based educational institutional rating and reviews platform which is by the community and for the community. The site does what students and parents have been doing forever - checking in with each other’s – friends, relatives, parents, teachers, other students – to figure out which school /institute to apply and get admissions.</p>
<p>You as student and as parent would want to know the facts about the school/ college  you are going to be associated with. You especially need to know the good points and the bad points. Your assessment could help others make the right choice - To join or reject your school/college.</p>
<p>If you are looking at possible admissions, before you go for counseling or apply, visit as many institutions as possible through this site and find out what  others -  who are directly or indirectly associated with the Institution - are saying about it. 
We encourage our community to share their real life experiences to help everyone get the real insight about the Institution they are looking for. Our Community consists of current students, current and past teacher/faculty, parents, alumni and people who have been hiring students from these Institutions.</p>
<div style="padding:10px; font-weight:bold; text-align:right;"><a href="#">^ Top</a></div>
<h1><a name="b" id="b"></a>Our Approach</h1>
<p>At Rateyourinstitute.com we are bringing an exhaustive listing of all schools , colleges, universities and professional institutions. We have seen at most places that a complete list of Institution is missing and most of the surveys we lay our hands on cover very few institutions.</p> 
<p>For rating the institutions we have developed a list of parameters on which the community ( students, teachers, parents and alumni ) give their rating about the concerned institution. We have no vested interest in any reviews, ratings  or any institution and we show all positive and negative reviews as well . All the rating and reviews are given by the user and it is their own views. We don’t entertain any say from any institution in their rating and reviews. 
The Institution are also given as opportunity to reply to any negative review/comment to make it a really two way communication process.</p>
<h1><a name="c" id="c"></a>What are the benefits</h1>
<p>All listing of schools , colleges and institute to find</p>
<p>Compare similar liking or rating Institutes</p>
<p>Get views and rating of People directly associated with the Institute</p>
<p>Get Insight into what are plusses and minuses of each institute</p>

<h1><a name="d" id="d"></a>Who Can Participate</h1>

<p>Current Students</p>

<p>Current and Past Teachers</p>

<p>Parents</p>

<p>Alumni</p>

<p>People who been hiring from these Institutions or have hired</p>

<p>Anyone who has interacted  with a particular institute can participate( by giving only the comments/reviews )</p>

<h1><a name="f" id="f"></a>Institutional Rebuttal Guidelines</h1>
<p>For posting rebuttals for the reviews/comments posted by the users , the School/College/University/Institute has to register with Rateyourinsitute.com by giving their details in the site prescribed format and nominate one person from within to post the rebuttals.
Additionally, please note that the above referenced guidelines are also applicable for rebuttals posted by Institutes. As a reminder, please do not include any identifiable information about an Individual student that would allow someone to contact him/her outside of his/her Institute. This also includes remarks about a student's family and/or personal life. </p>
<h1><a name="g" id="g"></a>Methodology</h1>
<p>For rating the institutions we have developed a list of parameters on which the community ( students, teachers, parents and alumni ) give their rating about the concerned institution. We have no vested interest in any reviews, ratings or any institution and we show all positive and negative reviews as well . All the rating and reviews are given by the user and it is their own views. We don’t entertain any say from any institution in their rating and reviews. The Institution are also given as opportunity to reply to any negative review/comment to make it a really two way communication process. </p>

<!--
<h1><a name="h" id="h"></a>RYI Team</h1>
<p>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1" style="color: #03C;">Operational Team</a></li>
    <li><a href="#tabs-2" style="color:#03C;">Busness Advisor Team</a></li>
    <li><a href="#tabs-3" style="color:#03C;">Rating Advisor Team</a></li>
  </ul>
<div id="tabs-1">
<h2  style=""><img src="images/icon_ryi_2.png" height="50" width="60" /> </h2>
<br />
<h2>Mr.Manu Mital</h2>
<p>
the rating and reviews are given by the user and it is their own views. We don’t entertain any say from any institution in their rating and reviews. The Institution are also giv
</p>
<br />

<h2><img src="images/icon_ryi_2.png" height="50" width="60" /> </h2>
<br />
<h2>Shalini Mital</h2>
<p>
the rating and reviews are given by the user and it is their own views. We don’t entertain any say from any institution in their rating and reviews. The Institution are also giv
</p>
<br />

<h2  style=""><img src="images/icon_ryi_2.png" height="50" width="60" /> </h2>
<br />
<h2>Vinay Pathak</h2>
<p>
the rating and reviews are given by the user and it is their own views. We don’t entertain any say from any institution in their rating and reviews. The Institution are also giv
</p>

</div>

<div id="tabs-2">

<h2  style=""><img src="images/boyss.jpg" height="50" width="60" /> </h2>
<br />
<h2>Vinay Pathak</h2>
<p>
the rating and reviews are given by the user and it is their own views. We don’t entertain any say from any institution in their rating and reviews. The Institution are also giv
</p>
<h2  style=""><img src="images/boyss.jpg" height="50" width="60" /> </h2>
<br />
<h2>Vinay Pathak</h2>
<p>
the rating and reviews are given by the user and it is their own views. We don’t entertain any say from any institution in their rating and reviews. The Institution are also give 
</p>
</div>
<div id="tabs-3">

<h2  style=""><img src="images/boyss.jpg" height="50" width="60" /> </h2>
<br />
<h2>Mr.Manu Mital</h2>
<p>
the rating and reviews are given by the user and it is their own views. We don’t entertain any say from any institution in their rating and reviews. The Institution are also giv
</p>
<h2  style=""><img src="images/boyss.jpg" height="50" width="60" /> </h2>
<br/>
<h2>Mr.Manu Mital</h2>
<p>
the rating and reviews are given by the user and it is their own views. We don’t entertain any say from any institution in their rating and reviews. The Institution are also giv
</p>
</div>

</div>


 </p>-->
<a href="#">^ Top</a>

</div>
</div>
<?php include("footer.inc.php") ?>