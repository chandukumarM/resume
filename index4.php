<!DOCTYPE html>
<html lang="en">
  <head>
    <title>autoscroll.js</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="jquery-3.1.1.js"></script> -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>

     
      .AutoScroll {
        background-color: #191919;
        color: #fff;
        position: relative;
        top: 0px;
        max-height: 1000px;
        overflow-y: scroll;
        padding: 20px;
        border: 1px solid #121212;
      }
      .outer {
        position: relative;
        top: 0px;
        color: white;
      }
	  
	  th{font-size:15px;padding:3px;}
	  td{text-align:center;}
	  #baby{
	  
}
	  
	  
body {
  background: #000;
  
  width:100%;
  border: solid white 1px;
}
p {
  color: lime;
  font-family: "Courier";
  font-size: 20px;
  margin: 10px 0 0 10px;
  white-space: nowrap;
  overflow: hidden;
  width: 0;
  animation: type 4s steps(60, end) forwards,
  blink-caret .5s step-end infinite;
  line-height: 100%;
  border-right: .15em solid orange; /* The typwriter cursor */
}

p:nth-child(2) {
  animation-delay: 4s;
}
p:nth-child(3) {
  animation-delay: 8s;
}
p:nth-child(4) {
  animation-delay: 12s;
}
p:nth-child(5) {
  animation-delay: 14s;
}
p:nth-child(6) {
  animation-delay: 16s;
}
p:nth-child(7) {
  animation-delay: 19s;
}
p:nth-child(8) {
  animation-delay: 22s;
}
p:nth-child(9) {
  animation-delay: 24s;
}
p:nth-child(10) {
  animation-delay: 24s;
}
p:nth-child(11) {
  animation-delay: 26s;
}
p:nth-child(12) {
  animation-delay: 28s;
}
p:nth-child(13) {
  animation-delay: 30s;
}
p:nth-child(14) {
  animation-delay: 30s;
}
p:nth-child(15) {
  animation-delay: 32s;
}
p:nth-child(16) {
  animation-delay: 34s;
}
p:nth-child(17) {
  animation-delay: 36s;
}
p:nth-child(18) {
  animation-delay: 38s;
}
p:nth-child(19) {
  animation-delay: 41s;
}

p:nth-child(20) {
  animation-delay: 44s;
}
p:nth-child(21) {
  animation-delay: 47s;
}p:nth-child(22) {
  animation-delay: 50s;
}p:nth-child(23) {
  animation-delay: 53s;
}p:nth-child(24) {
  animation-delay: 56s;
}p:nth-child(25) {
  animation-delay: 59s;
}p:nth-child(26) {
  animation-delay: 62s;
}p:nth-child(27) {
  animation-delay: 65s;
}p:nth-child(28) {
  animation-delay: 68s;
}
p:nth-child(29) {
  animation-delay: 71s;
}
p:nth-child(30) {
  animation-delay: 74s;
}
p:nth-child(31) {
  animation-delay: 77s;
}
p:nth-child(32) {
  animation-delay: 80s;
}
p:nth-child(33) {
  animation-delay: 83s;
}
p:nth-child(34) {
  animation-delay: 86s;
}
p:nth-child(35) {
  animation-delay: 89s;
}
p:nth-child(36) {
  animation-delay: 92s;
}
p:nth-child(37) {
  animation-delay: 93s;
}
p:nth-child(38) {
  animation-delay: 96s;
}
p:nth-child(39) {
  animation-delay: 99s;
}
p:nth-child(40) {
  animation-delay: 102s;
}
p:nth-child(41) {
  animation-delay: 105s;
}
p:nth-child(42) {
  animation-delay: 108s;
}
p:nth-child(43) {
  animation-delay: 111s;
}
p:nth-child(44) {
  animation-delay: 114s;
}
p:nth-child(45) {
  animation-delay: 116s;
}
p:nth-child(46) {
  animation-delay: 118s;
}
p:nth-child(47) {
  animation-delay: 120s;
}
p:nth-child(48) {
  animation-delay: 122s;
}
p:nth-child(49) {
  animation-delay: 125s;
}
p:nth-child(50) {
  animation-delay: 127s;
}
p:nth-child(51) {
  animation-delay: 129s;
}
p:nth-child(52) {
  animation-delay: 131s;
}
p:nth-child(53) {
  animation-delay: 134s;
}
p:nth-child(54) {
  animation-delay: 136s;
}
p:nth-child(55) {
  animation-delay: 138s;
}


p a {
  color: lime;
  text-decoration: none;
}
span {
  animation: blink 1s infinite;
}
@keyframes type {
  to {
    width: 100%;
  }
}
@keyframes blink {
  to {
    opacity: .0;
  }
  
  
}

@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange }
}
::selection {
  background: black;
}

table,td {
    border: 1px solid lime;
}

    </style>
  </head>
  <body>
    <div class="container" style="">
      <div class="row">
        <div class="col-sm-10 col-md-12">
          <h2 class="outer text-center">CHANDU KUMAR</h2>
          <div class="AutoScroll scroller" id="id" data-config='{"delay" : 1000 , "amount" : 10}'>
           <div class="wrapper" style="height:500px;"id="baby">
		 <!----<pre style="height:500px;position:relative;">---><p class="text-center" style="margin:10px auto;font-size:35px;">Resume</p>
<p><font style="float:left" class="">CHANDU KUMAR</font></P>


<P style="margin-left:60%">Address : D-no:7-76,kovvali (village)</p><p style="margin-left:60%">Denduluru (mandal),West Godavari(district),</p><p style="margin-left:60%">Andhra Pradesh(state),Pincode:534442</p>

<hr style=" border-top: 1px solid lime;">
<p style="color:lime;font-size:25px;">Objective :</p><p style="color:lime;">To associate with an organization that gives an opportunity to share technical skills and</p><p>improve knowledge by being a part of the team that works dynamically towards the growth of</p><p>the organization.  </p>

<hr style=" border-top: 1px solid lime;">


<p style="margin-top:10px;font-size:20px;">TECHNICAL SKILLS</p>

<hr style=" border-top: 1px solid lime;">
<p style="margin-left:36%;">Web Technologies&nbsp &nbsp :       HTML5, CSS3  </p>
<p style="margin-left:36%;">Scripting languages	    :       JavaScript </p>
<p style="margin-left:36%;">Frameworks&nbsp &nbsp &nbsp &nbsp &nbsp   : Bootstrap</p>
<p style="margin-left:36%;">Design tools&nbsp &nbsp &nbsp &nbsp  :	    Photoshop 7.0,Illustrator</p>



<p style="margin-top:10px;font-size:28px;">PROFILE</p>
<hr style=" border-top: 1px solid lime;">


<p>	Good Experience in PSD to HTML Conversion </p>
<p>	Understanding of designing a good User Experience</p>
<p>	Front end Technologies Adobe Photo Shop,Notepad ++, HTML5, CSS3, Bootstrap.</p> 
<p>	Good experience in responsive web designing and rich internet application.</p>
<p>	Good Eye for UI/UX development.( Design Concepts,Theme Skills ,Template Creations</p>
<p>	Conceptual understanding of User Interface Design and the Design Process.</p>
<p>	Professional web themes, elegant themes, wireframes.</p>
<p>	Excellent oral and written communication skills</p>




<p style="margin-top:10px;font-size:28px;">STRENGHTS</p>
<hr style=" border-top: 1px solid lime;">

<p>Creativity, Flexibility, Adaptability, Ability to work as an individual as well as in group</p>


<p style="margin-top:10px;font-size:28px;">ACADAMIC PROFILE</p>
<hr style=" border-top: 1px solid lime;">


<table style="color:lime">
  <tr>
    <th>Qualification</th>
    <th>University</th>
	<th>College</th>
	<th>Duration</th>
	<th>Percentage</th>
  </tr>
  <tr>
    <td>Electronics and Communication
Engineering
</td>
    <td>Jawaharlal Nehru
Technological
University
</td>
	 <td>Sri Venkateswara Institute of science and information,
Tadepalligudem
</td>
<td>2011-2015</td>
    <td>58.9</td>
	
  </tr>
  <tr>
    <td>Intermediate
(M.P.C)
</td>
    <td>Board of Intermediate Education</td>
	<td>Sri Chaitanya boys junior College,
Vijayawada
</td>
    <td>2009-2011</td>
	<td>74.1</td>
  </tr>
  <tr>
    <td>SSC</td>
    <td>Board of 
Secondary
Education
</td>
    <td>Z.P.high school,
Kaikaram,
West Godavari 
</td>
<td>2008-2009</td>
<td>70</td>
  </tr>
  
</table>

<p style="margin-top:10px;font-size:28px;">ACADAMIC PROJECT</p>
<hr style=" border-top: 1px solid lime;">
<p>Project Title	:       ELECTRONIC SPEAKING SYSTEM FOR DUMB. </p>
<p>Role&nbsp &nbsp &nbsp  &nbsp &nbsp :       Team leader.</p>
<p>Description  &nbsp  :
The motto of the project is to facilitate the communication between the 
dumb <br> person and the normal people should be in easy way by using the electronic device.
</p>

<p style="margin-top:10px;font-size:28px;">PERSONAL PROFILE</p>
<hr style=" border-top: 1px solid lime;">
<p>                               Father’s name &nbsp :	Bhaskara Rao</p>
<p>                               Date of birth	&nbsp :                               04-09-1993</p>
<p>                               Gender &nbsp &nbsp &nbsp &nbsp &nbsp:                               Male</p>
<p>                               Marital Status &nbsp:                               Single</p>
<p>                               Nationality &nbsp &nbsp :                               Indian</p>
<p>                               Languages Known	: English, Hindi & Telugu</p>
<p>                               Hobbies&nbsp &nbsp &nbsp &nbsp &nbsp:  Playing Cricket & Video games</p>

<p style="margin-top:10px;font-size:28px;">DELARATION</p>
<hr style=" border-top: 1px solid lime;">
<p>I hereby declare that the above furnished information is correct to the best of my knowledge.</p>

<p>Place: Hyderabad,</p>
<p>Date : 31/3/2018.</p>
<p style="margin-left:75%;">(M.Chandu Kumar)</p>
<!---</pre>--->
<div>

if you're good at something don't do it for free




</div>








</div>
        </div>

        
    </div>
    <script type="text/javascript" src="autoscroll.js"></script>
    <script type="text/javascript">
      $(".id-2").scroller();
    </script>
  </body>
</html>