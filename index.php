<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Welcome to GabrielCziprusz.com</title>

<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="styles/style.css" media="screen" />
<link rel="stylesheet" href="styles/media-queries.css" />
<link href="styles/prettyPhoto.css" rel="stylesheet" type="text/css" media="screen" />
<link href="styles/tipsy.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="./scripts/jquery-1.7.1.min.js"></script>
<script src="scripts/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="scripts/jquery.tipsy.js" type="text/javascript"></script>
<script src="scripts/jquery.knob.js" type="text/javascript"></script>
<script type="text/javascript" src="./scripts/jquery.isotope.min.js"></script>
<script type="text/javascript" src="./scripts/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="./scripts/waypoints.min.js"></script>
<script type="text/javascript" src="./scripts/setup.js"></script>


</head>
<body>
<div id="wrap"> 
  <!-- wrapper -->
  <div id="sidebar" > 
    <!-- the  sidebar --> 
    <!-- logo --> 
    <a href="#" id="logo">Welcome to GabrielCziprusz.com</a> 
    <!-- navigation menu -->
    <ul id="navigation">
      <li><a href="#home" class="active">Home</a></li>
      <li><a href="#about">About Gabriel</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#skillz">Skillz</a></li>
      <li><a href="#employment">Employment</a></li>
      <li><a href="#myclients">Clients</a></li>
      <li><a href="#contact">Contact</a></li>
	  
    </ul>
  </div>
  <div id="container"> 
    <!-- page container -->
    <div class="page" id="home"> 
      <!-- page home -->
      <div class="page_content">
		 <h3 class="page_title">The 'big picture'</h3>
        
		<img usemap="#map" class="no_border" src="images/how_dis_works.png" alt="If you like my work contact me">
		<map id="map" name="map">
			<area shape="rect" coords="588,216,642,233" href="#contact" alt="Contact" title="Contact"    />
			<area shape="rect" coords="500,346,576,409" href="#contact" alt="Contact" title="Contact"    />
		</map>
        
        <div class="clear"> </div>
      </div>
    </div>
    <div class="page" id="about"> 
      <!-- page about -->
      <h3 class="page_title"> About Gabriel</h3>
      <div class="page_content">
	  		<p>My name is Gabriel Cziprusz. My intent with this site is to present my work and showcase technical 
				 and development skills to prospective employers.</p><p>     
				I graduated from <a href="https://www.radford.edu" target="_blank">Radford University</a> with a double major in 
				Software Engineering and Database Administration. During my studies I gained
				valuable web development experience while having a chance to 
				contribute to a small web marketing company called <a href="http://www.exemplum.com" target="_blank">Exemplum</a> as a part time 	
				web developer.</p> 
				<p>I am currently employed by 
				<a target="_blank" href="http://www.icfi.com">ICF International</a>, a government consulting company based out of Fairfax VA,
				and work remotely as a web developer in Nashville TN.</p>
				<p>
				I have a passion for developing interfaces using the latest tools and technologies and believe that a user friendly interface 
				is a major determinant of a successful software product.</p>
				<p>
				My goal is to work for a dynamic company dedicated to innovation, personal and professional development, and fair
				business that allows for future growth and leadership opportunities.
 					</p>
					<p>I am curretly looking for an opportunity that alows me to combine communication skills with 
					technical skills and help shrink the gap between business and technical folks as a part of the technical leadership team.
					</p>
					<br/>
				<p>To contact me, please refer to the <a href="#contact">Contact section</a>.</p>
        <h4 class="blue">Gabriel Cziprusz</h4>
        <blockquote> &lsquo;The best thing about a boolean is even if you are wrong, you are only off by a bit.&rsquo;
          <p> <small><b>(Anonymous)</b> - <a href="http://www.devtopics.com/101-great-computer-programming-quotes/">devtopics.com</a></small></p>
        </blockquote>
        <div class="clear"> </div>
      </div>
    </div>
    <div class="page" id="portfolio"> 
      <!-- page portfolio -->
      <h3 class="page_title"> Portfolio</h3>
      <div class="page_content">
        <p>The projects highlighted below are public projects that I contributed to at my current and previous employer. 
		Some of the ICF projects are not accessible to the public.</p>
        <ul id="works_filter">
          <li><a href="#" data-filter="*" class="selected">Show All (7)</a></li>
          <li><a href="#" data-filter=".icf">ICF Projects (4)</a></li>
          <li><a href="#" data-filter=".exe">Exemplum Project (1)</a></li>
          <li><a href="#" data-filter=".ru">Radford University Projects (2)</a></li>
        </ul>
        <div class="clear"> </div>
        <div id="works"> 
          <!-- works --> 
        <div class="work icf">
		<h3><span>Project Name - </span>U.S.-Brazil Joint Initiative on Urban Sustainability JIUS</h3>
		<p>This is an innovative website to catalyze public-private partnerships for investment in sustainable 
		urban infrastructure and expanding markets for clean technology, products and services. 
		The site was developed using the latest font end technologies such as HTML5, CSS3 and jQuery 
		the site's design is responsive to make the website available on mobile devices and tablet computers. 
		<br/>The project url is:<br/><a target="_blank" href="http://epa.gov/jius" title="JIUS">epa.gov/jius</a>  
		</p>
		</div>
		<div class="work icf">
		<h3><span>Project Name - </span>RPM-web Redesign, National Cooperative Highway Research Program</h3>
		<p>NCHRP's online Research Performance Measure tool is a web application originally designed to assist state departments 
		of transportation in gauging research effectiveness.  The initial implementation of the tool was too complex and therefore 
		ICF was hired to redesign the website and attract more users to the system. My duties included designing parts of 
		the database, implementing and configuring full text search using Apache Solr, implementing the authentication system 
		and handling all deployments.
		<br/>The project url is:<br/><a target="_blank" href="https://rpmweb.org" title="rpmweb.org">rpmweb.org</a>
		</p>
		</div>
		<div class="work icf">
		<h3><span>Project Name - </span>SHRP C01 Web-application</h3><p>It is designed for the Strategic Highway Research Program 2
		of the Transportation Research Board,  I was working as a developer, building a highly interactive 
		web tool that educates researchers and transportation professionals about the new collaborative decision-making framework 
		that ICF designed for the TRB.  The web tool presents the framework and provides users with a diagnostic tool to determine
		how the framework can be used in specific projects. The ICF team developed the collaborative decision-making framework based 
		on interviews and workshops with major transportation stakeholders: DOT, FHWA, resource agencies, state transportation departments, 
		and metropolitan planning organizations.  ICF is also developing an IT tool to showcase the framework and educate practitioners for 
		direct implementation. Gabriel worked on developing controllers, views and models, as well as adding dynamic functionality to the 
		site's user interface.<br/>
		Technologies used include Ruby on Rails MySQL database,SOLR search engine,jQuery.
		</p>
		<br/>The project url is:<br/>
		<a target="_blank" href="https://transportationforcommunities.com/" title="transportationforcommunities.com/">
		transportationforcommunities.com</a>
		</p>
		</div>
		<div class="work icf"><h3><span>Project Name - </span>FFD Submission and Reporting System, Nuclear Regulatory Commission</h3>
		<p>The system was created for the NRC's Fitness-for-duty (FFD) program. The new system architecture was 
		designed by myself with guidance from the Technical Director. The updated version has several new features which allow 
		drug & alcohol, fatigue and annual report submissions. The redesigned submission system processes PDF forms by polling an inbox 
		folder on the server, cleans and normalizes the data before inserting into a relational database. A new email feature notifies 
		users about potential submission issues. I also supported the previous versions of the system and have a good 
		understanding of the overall system architecture. Using my prototype, several reports were developed. 
		My assistance with T-SQL queries to gather report data was a great opportunity to learn the FFD's database architecture. 
		Technologies used include SQL Server 2008, Java, Spring Framework, Jasper Reports, XML.</p></div>
		<div class="work exe">
			<h3><span>Project Name - </span>See More Products</h3>
					<h3>Project Overview</h3>
						<p>The objective of the "See More Products" project was to design a 
						new module for Exemplum's Flash demos which will allow 
						users to look at products related to the one they are currently viewing.
						</p>
					<h3>Technical details</h3>
						<p>The flash component calls an aspx page using action script The 
						aspx class connects to a SQL-SERVER database, returns the related products
						using a stored procedure and a relationship algorythm. The aspx code writes
						the products to an XML document. The XML document is 
						consumed by the Flash Demo and the related products are displayed 
						to the user.
						</p>
					<h3>Screenshots and Video</h3>
					<ul>
						<li>
						<a rel="prettyPhoto[gallery]" href="images/cranium2.jpg" id="mb2" class="mb" title="Cranium"><img src="images/tumbs/cranium_tumb.jpg" alt="The related products to Cranium are listed in the table on the right side."/></a>
						</li>
						<li>
						<a rel="prettyPhoto[gallery]" href="images/starwars2.jpg" id="mb3" class="mb" title="Starwars"><img src="images/tumbs/starwars_tumb.jpg" alt="The related products to Starwars are listed in the table on the right side."/></a>
						</li>
						<li>
						<a rel="prettyPhoto[gallery]" href="images/transformer2.jpg" id="mb4" class="mb" title="Transformer" ><img src="images/tumbs/transformer_tumb.jpg" alt="The related products to Transformers are listed in the table on the right side."/></a>
						</li>
						<li>
						<a rel="prettyPhoto[gallery]" href="images/xmen2.jpg" id="mb5" class="mb" title="Xmen" ><img src="images/tumbs/xmen_tumb.jpg" alt="The related products to Xmen are listed in the table on the right side."/></a>
						</li>
						<li>
						<a rel="prettyPhoto[gallery]" href="http://youtu.be/gv4WrVxtgPw" rel="width:500,height:400" id="mb0" class="mb" title="See More Products Interface."><img src="images/tumbs/see.jpg" alt="Video Demostration of the application Interface"/></a>			
						</li>
						<li>
						<a rel="prettyPhoto[gallery]" href="http://youtu.be/xA0MZavCl7M" rel="width:500,height:400" id="mb1" class="mb" title="See More Products Video."><img src="images/tumbs/idog_tumb.jpg" alt="Video Demostration of the application functionality"/></a>		
						</li>
					</ul>
		</div>
		<div class="work ru"><h3><span>Project Name - </span>RU Bridges and Pipelines</h3>
			<h3>Project Overview</h3>
				<p>The RU Bridges and Pipelines project is a part of a larger 
				NSF S-STEM grant. During this semester long project, my teammates 
				and I worked closely with our client Dr. Uppuluri to build a web 
				application that helps selected faculty keep track of scholarship 
				recipients and their progress. The website authenticates users using 
				Radford University's central user database and checks if user is 
				registered with the site before allowing access. "Administrator" 
				and "user" roles are differentiated in the system. The site 
				functionality also include: bulk adding of students from a word 
				document, editing, removing, updating student progress. <br/>  <br/>
				For more information please visit:<br/>
			<a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=0849642" target="_blank" >Award Abstract - 
 Bridges and Pipelines to Success and Leadership in STEM</a>
				<br/><br/>
				The RU Bridges website is currently hosted at:<br/>
				<a href="https://php.radford.edu/~sstem/login.php" target="_blank" >https://php.radford.edu/~sstem/login.php</a>
				</p>
			<h3>Technical details</h3>
				<p>The website is written using PHP. Validation on the page is done
				using an external JavaScript library and PHP. The page connects to
				an Oracle database which includes tables to support the user 
				and scholarship recipient information.</p>
	</div>
	<div class="work ru">
				<h3><span>Project Name - </span>Administrative Logger for Faculty Annual Report System</h3>
			<h3>Project Overview</h3>
			<p>The Faculty Annual Report System is Radford University's effort 
			to reduce the paperwork required for yearly faculty 
			reports. Our team was tasked to create an administrative module to
			this application and most importantly create a modular and flexible
			logging system that can log information of various levels 
			in the application. This project should help the site administrator 
			to pinpoint errors and warnings in the system. The system should 
			allow the administrator to dial the log level up or down, define new error
			types. The administrator should be able to specify where and how 
			often the log files  should be created. <br/><br/>
			 To learn more about this project please visit:<br/>
			 <a href="https://php.radford.edu/~spsc/wordpress/?page_id=7" target="_blank" >
				Small Project Support Center</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<br/><br/>
			The site is currently being beta tested by professors and hosted at:<br/>
			 <a href="https://php.radford.edu/~spsc-far/faculty_interface/" target="_blank" >
				Faculty Interface of the Annual Report System </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</p>
			<h3>Technical details</h3>
			<p>The site uses an oracle database and it's written in PHP, our administrative 
			system uses <a href="http://incubator.apache.org/log4php/" target="_blank">log4PHP</a> to assist with the logging functionality. When a new error
			type is created by the administrator , it is stored in a database and all the 
			errors are written to a flat file so the logger system is functional even if 
			the database connection is lost. The system has various error levels starting
			from TRACE_MESSAGE to a FATAL_ERROR. </p>
	</div>
		</div>
        <div class="clear"> </div>
      </div>
    </div>
	<div class="clear"> </div>
    <div class="page" id="skillz"> 
      <!-- page skillz -->
      <h3 class="page_title">Skillz</h3>
      <div class="page_content"> 
	  <p>I believe that the most important assets of a good web developer are <em>curiosity</em>, 
	  commitment to <em>lifelong learning</em>, desire to improve and <em>courage to experiment</em> and make mistakes.</p>
	  <p>
	  The skill list below is not an all inclusive list of technologies I had a chance to work  with but rather a 
	  my most recent favorites to solve web development problem. </p>
	  <p>
	  I dont want to use sentences such as </p>
	  <br/><p>"I have 5 years enterprise level JAVA experience" </p>
<h4 class="blue">Doesn't this sound like saying?</h4>	  
	  <p>"I am a carpenter who knows how to use a hammer and has 5 years of experience with it."
	  </p>
	  
		<div class="one_fourth first">
          <div class="column_content">
            <h4 class="blue"> Ruby on Rails</h4>
            <input title="self assessed ninja level" class="knob" data-readonly="true" data-width="120" data-min="0" data-angleoffset="0"
                                data-displayprevious="true" data-fgcolor="#cfdee7" data-bgcolor="#0d4667" value="80">
          </div>
        </div>
		<div class="one_fourth">
          <div class="column_content">
            <h4 class="blue"> Grails/Groovy</h4>
            <input title="self assessed ninja level" class="knob" data-readonly="true" data-width="120" data-min="0" data-angleoffset="0"
                                data-displayprevious="true" data-fgcolor="#cfdee7" data-bgcolor="#0d4667" value="85">
          </div>
        </div>
		<div class="one_fourth">
          <div class="column_content">
            <h4 class="blue"> T-SQL, PL-SQL</h4>
            <input title="self assessed ninja level" class="knob" data-readonly="true" data-width="120" data-min="0" data-angleoffset="0"
                                data-displayprevious="true" data-fgcolor="#cfdee7" data-bgcolor="#0d4667" value="90">
          </div>
        </div>
		<div class="one_fourth last">
          <div class="column_content">
            <h4 class="blue"> PHP,JAVA,C#</h4>
            <input  title="self assessed ninja level" class="knob" data-readonly="true" data-width="120" data-min="0" data-angleoffset="0"
                                data-displayprevious="true" value="95" data-fgcolor="#cfdee7" data-bgcolor="#0d4667">
          </div>
        </div>
		
		
        <div class="one_fourth first">
          <div class="column_content">
            <h4 class="blue"> ASP.NET MVC4</h4>
            <input  title="self assessed ninja level" class="knob" data-readonly="true" data-width="120" data-min="0" data-angleoffset="0"
                                data-displayprevious="true" data-fgcolor="#cfdee7" data-bgcolor="#0d4667" value="65">
          </div>
        </div>
        <div class="one_fourth">
          <div class="column_content">
            <h4 class="blue"> HTML5</h4>
            <input  title="self assessed ninja level" class="knob" data-readonly="true" data-width="120" data-min="0" data-angleoffset="0"
                                data-displayprevious="true" value="75" data-fgcolor="#cfdee7" data-bgcolor="#0d4667">
          </div>
        </div>
        <div class="one_fourth">
          <div class="column_content">
            <h4 class="blue"> jQuery</h4>
            <input  title="self assessed ninja level" class="knob" data-readonly="true" data-width="120" data-min="0" data-angleoffset="0"
                                data-displayprevious="true" value="85" data-fgcolor="#cfdee7" data-bgcolor="#0d4667">
          </div>
        </div>
        <div class="one_fourth last">
          <div class="column_content">
            <h4 class="blue"> CSS3</h4>
            <input  title="self assessed ninja level" class="knob" data-readonly="true" data-width="120" data-min="0" data-angleoffset="0"
                                data-displayprevious="true" value="95" data-fgcolor="#cfdee7" data-bgcolor="#0d4667">
          </div>
        </div>
        <div class="clear"> </div>
      </div>
    </div>
    <div class="page" id="employment"> 
      <!-- page blog -->
      <h3 class="page_title"> Employment</h3>
      <div class="page_content">
        <p>My current employer is <a href="https://www.icfi.com">ICF International</a>.  The list below are my previous jobs.</p>
        <div class="space"> </div>
		
		<div class="clear"> </div>
        
		
          <div class="column_content">
            <h4> ICF International</h4>
            <p>
			I joined ICF in July of 2009 and they helped me get to the next level by adding several assets to my virtual toolbox.
			I had hands on day to day experience with the full life cycle of enterprise level development experience designing web applications using JAVA, 
			Ruby, Groovy, ASP.NET,PHP, C#, and (small letter's - ColdFusion) 
			 HTML5, jQuery, CSS3, Rails, Grails and .NET
						
						<ul>
							<li><span>Developed a web based application module using C#, ASP.NET, SQL 	
								Server and XML to integrate with Flash front end applications and cross promote products while adhering to current 	
								system restrictions</span></li>
							<li><span>Designed proprietary T-SQL stored procedure to query related 	
								products from a SQL Server Database</span></li>
							<li><span>Identified, troubleshot and fixed errors in a C#, JavaScript, 	
								ASP.NET and SQL Server based Proprietary Statistical Analytics tool</span></li>
							<li><span>Proposed and implemented new analytics reporting tool 	
								for Exemplum's Flash based online demos.</span></li>
						</ul>
			</p>
          </div>
  
		
	
          <div class="column_content">
            <h4> Exemplum LLC.</h4>
            <p>Engineered ASP.NET Flash and Flex applications for online product 
						marketing company.
						
						<ul>
							<li><span>Developed a web based application module using C#, ASP.NET, SQL 	
								Server and XML to integrate with Flash front end applications and cross promote products while adhering to current 	
								system restrictions</span></li>
							<li><span>Designed proprietary T-SQL stored procedure to query related 	
								products from a SQL Server Database</span></li>
							<li><span>Identified, troubleshot and fixed errors in a C#, JavaScript, 	
								ASP.NET and SQL Server based Proprietary Statistical Analytics tool</span></li>
							<li><span>Proposed and implemented new analytics reporting tool 	
								for Exemplum's Flash based online demos.</span></li>
						</ul>
			</p>
          </div>
        
          <div class="column_content">
            <h4> Radford University</h4>
            <p>Managed computer staff and IT equipment at a Public University.
						<ul>
							<li><span>Hired, trained, managed 25 Lab Proctors to maintain high level of 	
									customer satisfaction</span></li>
							<li><span>Created PHP based Departmental training website</span></li>
							<li><span>Maintained campus printers using Jetdirect HP's online printer 	
										monitoring system</span></li>
							<li><span>Tested and evaluated new Tablet, Laptop and Desktop Images</span></li>
							<li><span>Provided Desktop support to end users for Windows XP and Vista 	
										Environments</span></li>
							<li><span>Installed and upgraded computer hardware and software</span></li>
						</ul></p>
          </div>
        <div class="space"> </div>
       
          <div class="column_content">
            <h4> Ruritan National</h4>
            <p>Administered PHP based web site for a community service organization.
						<ul>
							<li><span>Edited PHP based web site according to Client requests</span></li>
							<li><span>Added new content and upgraded web graphics and navigation</span></li>
							<li><span>Implemented web analytics</span></li>
							<li><span>Fixed Cross Browser Issues</span></li>
							<li><span>Expanded page functionality with new features such as events 	
										calendar</span></li>
						</ul></p>
          </div>
        
       
          <div class="column_content">
            <h4> Echostar/WildBlue LLC.</h4>
            <p>Assisted end users with satellite internet connection problems for a fortune 300 company.
						<ul>
							<li><span>Educated users about Satellite internet equipment such as DOCSIS 	
										cable modem</span></li>
							<li><span>Troubleshot connectivity issues on various operating systems 	
										including Win XP, MAC OS, Vista</span></li>
							<li><span>Configured Operating Systems for TCP/IP, DHCP </span></li>
							<li><span>Set up browsers for required satellite internet settings including 	
									IE, Mozilla, Safari, Opera</span></li>
						</ul></p>
          </div>
        		
        <div class="clear"> </div>
      </div>
    </div>
    <div class="page" id="myclients"> 
      <!-- page clients -->
      <h3 class="page_title">Clients</h3>
      <div class="page_content">
        <p>Clients whom I have worked with or currently work with at <a href="https://www.icfi.com" alt="ICF" target="_blank">ICF</a>.</p>
        <div class="space"> </div>
        <div class="clear"> </div>
        <ul id="clients" class="grid">
          <li class="epa"><a target="_blank" href="http://www.epa.gov" rel="epa"> <img src="images/clients/epa.png" alt="Epa"></a></li>
          <li class="noaa"><a  target="_blank" href="http://noaa.gov" rel="noaa"> <img src="images/clients/noaa.png" alt="NOAA"></a></li>
          <li class="hud"><a  target="_blank" href="http://portal.hud.gov/hudportal/HUD" rel="hud"> <img src="images/clients/hud.png" alt="hud"></a></li>
          <li class="nps"><a  target="_blank" href="http://www.nps.gov" rel="nps"> <img src="images/clients/nps.png" alt="NPS"></a></li>
          <li class="nrc"><a  target="_blank" href="http://www.nrc.gov" rel="nrc"> <img src="images/clients/nrc.png" alt="nrc"></a></li>
          <li class="trb"><a  target="_blank" href="http://www.trb.org/" rel="trb"> <img src="images/clients/trb.png" alt="trb"></a></li>
          <li class="opa"><a  target="_blank" href="http://www.hhs.gov/opa/" rel="opa"> <img src="images/clients/opa.png" alt="opa"></a></li>
          <li class="eu"><a  target="_blank" href="http://ec.europa.eu" rel="eu"> <img src="images/clients/eu.png" alt="eu"></a></li>
        </ul>
        <div class="clear"> </div>
      </div>
    </div>
    <div class="page" id="contact"> 
      <!-- page contact -->
      <h3 class="page_title"> Contact</h3>
      <div class="page_content">
	  <img class="qr" alt="qr code" src="images/qrcode.png"/>
	  <img class="contact_info" alt="contact" src="images/contact.jpg"/>
			 
        <div class="clear"> </div>
        <ul class="social_icons">
          <li><a target="_blank" href="http://www.facebook.com/Cziprusz" id="fb" original-title="Friend Gabriel on Facebook"> <img src="images/facebook.png" alt="Facebook" /></a></li>
          <li><a target="_blank" href="https://twitter.com/gcziprusz" id="tw" original-title="Follow Gabriel on Twitter"> <img src="images/twitter.png" alt="Twitter" /></a></li>
	      <li><a target="_blank" href="http://www.linkedin.com/in/gcziprusz" id="ld" original-title="Find Gabriel on LinkedIn"> <img src="images/linkedin.png" alt="LinkedIn" /></a></li>
		  <li><a target="_blank" href="https://github.com/gcziprusz" id="git" original-title="Find Gabriel on GitHub"> <img id="github" src="images/github.png" alt="GitHub" /></a></li>
		</ul>
      </div>
    </div>
  </div>
</div>
<a class="gotop" href="#top">Top</a>
</body>
</html>
