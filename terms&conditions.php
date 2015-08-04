<?php 
include('config.php');//Configuration file imported
//Data recieved from the previous page
$email=mysqli_real_escape_string($con, $_POST['email']);
$country_code=mysqli_real_escape_string($con, $_POST['country_code']);
$user=mysqli_real_escape_string($con, $_POST['user']);
$fname=mysqli_real_escape_string($con, $_POST['fname']);
$enumc=mysqli_real_escape_string($con, $_POST['enumc']);
$company=mysqli_real_escape_string($con, $_POST['company']);
$designation=mysqli_real_escape_string($con, $_POST['designation']);
$url=mysqli_real_escape_string($con, $_POST['url']);
$w1=mysqli_real_escape_string($con, $_POST['w1']);
$mobile=mysqli_real_escape_string($con, $_POST['mobile']);
$RMS=mysqli_real_escape_string($con, $_POST['RMS']);
$CRM=mysqli_real_escape_string($con, $_POST['CRM']);
$HR=mysqli_real_escape_string($con, $_POST['HR']);
$Job_portal=mysqli_real_escape_string($con, $_POST['Job_portal']);
$Finance=mysqli_real_escape_string($con, $_POST['Finance']);
$subuser=mysqli_real_escape_string($con, $_POST['subuser']);
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if IE 8]><html class="lt-ie9" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
<!---html opened--->
<html>
<!---head opened-->
<head>     
  <link rel="stylesheet" type="text/css" href="css/style12.css" />
  <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/foundation.min.css" /> 
    <link rel="stylesheet" href="css/style.css" /> 
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:600' rel='stylesheet' type='text/css'> 
  <script src="js/vendor/custom.modernizr.js"></script>
<?php 
include('config.php');//Configuration file imported
//Data recieved from the previous page
$email=mysqli_real_escape_string($con, $_POST['email']);
$country_code=mysqli_real_escape_string($con, $_POST['country_code']);
$user=mysqli_real_escape_string($con, $_POST['user']);
$fname=mysqli_real_escape_string($con, $_POST['fname']);
$enumc=mysqli_real_escape_string($con, $_POST['enumc']);
$company=mysqli_real_escape_string($con, $_POST['company']);
$designation=mysqli_real_escape_string($con, $_POST['designation']);
$url=mysqli_real_escape_string($con, $_POST['url']);
$w1=mysqli_real_escape_string($con, $_POST['w1']);
$mobile=mysqli_real_escape_string($con, $_POST['mobile']);
$RMS=mysqli_real_escape_string($con, $_POST['RMS']);
$CRM=mysqli_real_escape_string($con, $_POST['CRM']);
$HR=mysqli_real_escape_string($con, $_POST['HR']);
$Job_portal=mysqli_real_escape_string($con, $_POST['Job_portal']);
$Finance=mysqli_real_escape_string($con, $_POST['Finance']);
$subuser=mysqli_real_escape_string($con, $_POST['subuser']);
?>
</head>
<!---head closed --->
<!---body opened--->
<body onload="myfun()">
<div id="top"  data-magellan-expedition="fixed">
	<div class="row">
		<div class="large-12 columns">
			<nav class="top-bar">
			  <ul class="title-area">
			   <li class="name logo">
			      <a href="http://www.thrivembs.com"><img src="img/logo.png"  width="340" height="130" alt=""></a>
			    </li>
			    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			  </ul>
			
			  <section class="top-bar-section">
			    <ul class="right" id="menu">
			      <li data-magellan-arrival="features"><a href="/Erp/index.html#ADMIN">ADMIN</a></li>
			      <li data-magellan-arrival="product"><a href="/Erp/index.html#RMSt">RMS</a></li>
			      <li data-magellan-arrival="pricing"><a href="/Erp/index.html#JOB PORTAL">JOB PORTAL</a></li>
			      <li data-magellan-arrival="contact"><a href="/Erp/index.html#HR">HR</a></li>
				  <li data-magellan-arrival="PAYROLL"><a href="/Erp/index.html#PAYROLL">PAYROLL</a></li>
				   <li data-magellan-arrival="CRM"><a href="/Erp/index.html#CRM">CRM</a></li>
			      <li data-magellan-arrival="FINANCE"><a href="/Erp/index.html#FINANCE">FINANCE</a></li>
			      <li data-magellan-arrival="CONTACTUS"><a href="/Erp/index.html#CONTACTUS">CONTACT US</a></li>
		
			    </ul>
			  </section>
			</nav>
			
		</div>
		
	</div>
</div>

<div class="con" style="">

<h1 style="margin-left:0px;margin-top:-0px;">Create Your Thrive mobile business suite Account</h1>

</div>
<center>
<div id="cont" style="height:auto;width:700px;border:2px solid black;margin-top:120px; -webkit-border-radius:5px;">
<p style="font-size:20px;margin-left:10px;"><b>License Agreement</b></p>
<p style="font-size:20px;margin-top:00px;text-indent:1em;"><b>Please read the following license agreement carefully.</b></p>
<br/>	
<div id="div_name2" style="position:relative; overflow:hidden; display:none;height:500px;width:625px;margin: 0 auto;background-color:#f0f0f0; padding: 0 auto;border:1px solid #ccc;">
<table style="width:625px;">
<td>
<p style="font-size:20px;margin-top:0px;margin-left:10px;"><b>License Agreement<br></b></p></td></table>
<p style="font-size:15px;margin-top:10px;text-indent:4em;"><b>Please read the following license agreement carefully.</b><br></p>
<div style="height:300px;width:620px;margin: 0 auto;background-color:white; padding: 0 auto;margin-top:15px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
<p style="font-size:20px;margin-left:10px;margin-right:10px;"><b>Terms of Use</b></p>
<p align="justify" style="text-indent:4em;font-size:14px;font-family:Times New Roman;margin-left:10px;margin-right:10px;">You are being presented these Terms of Use because you are visiting a website <a href="http://www.thrivesmarter.com">www.thrivesmarter.com</a> that is either (a) owned and operated by Thrivesmarter or (b) includes content, including but not limited to registration and other forms, owned by Thrivesmarter or drawn from a website owned and operated by Thrivesmarter. By accessing and using this Website or you agree to be bound by these Terms of Use and all other terms, policies and operating procedures that may be published on this Website. In addition, when you visit this Website or Thrivesmarter and any of our participating vendors ("Vendors") websites, you are subject to both these Terms of Use and any other terms of use and guidelines set forth at our Vendors websites. All these rules and policies are incorporated into these Terms of Use by this reference. So please read these Terms of Use and any Vendors terms and conditions carefully. If you do not agree to our Terms of Use, do not enter or use this Website. We reserve the right to update or otherwise modify these Term of Use from time to time. You are responsible for checking these Terms of Use periodically for changes and updates. Your use of this Website following posted change(s) and update(s) will be deemed an acceptance of such change(s).<br>
<b>1. PRIVACY.</b> We may collect certain types of personally identifiable information from you. Please review our Privacy Policy, which also governs your visit to this Website and sets forth the information we may collect from you and how we will protect it and use it.<br>
<b>2. ELECTRONIC COMMUNICATION.</b> When you send e-mails to us or visit the Website you are communicating with us electronically. By communicating with us via e-mail or by submitting any request on the Website, you agree that we may send e-mail to you and you consent to receive e-mail or other electronic communications from us. Generally, we will communicate with you by e-mail or by posting notices on this Website. Nevertheless, if you request a demo, a price quote, or a download for any Vendor software or Advisor article; request more information about a particular Vendor; or provide us your contact information, you (i) consent and agree to our contacting you by phone at the phone number(s) you provided to us and (ii) consent to us recording or monitoring your phone call for quality assurance or training purposes. There will be no other or further warning concerning our recordation of calls between you and Thrivesmarter Advice staff. You agree that all agreements, notices, disclosures, and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing and/or that they be sent to the recipients last known address. By calling our toll-free "08216888858" number, you are likewise consenting to our further contact by telephone at the number or numbers you furnish at the time of the call and to our Privacy Policy and these Terms of Use.<br>
<b>3. OWNERSHIP.</b> Some content on the Website, including (but not limited to), text, graphics, logos, button icons, images, audio clips, digital downloads, data compilations, software, and the compilation of any of the foregoing, is the property of Thrivesmarter, our licensors or Advisors, or our Vendors and is protected by United States and international copyright laws. Except to the minimum extent otherwise expressly permitted under copyright law, no copying, reproduction, modification, use, distribution, or display of the material herein or thereon (regardless of the form or media and whether by download or otherwise) is permitted without the express written permission of Thrivesmarter and any other applicable copyright owner.You may not resell any of the services provided by Thrivesmarter, this Website or the Vendors ("Services"). You acknowledge that you do not acquire any ownership rights by virtue of downloading copyrighted material from the Website or the Services. All rights not expressly granted hereunder are expressly reserved to Thrivesmarter and to the respective owners of such rights. If you believe your rights under applicable copyright laws are being infringed by Thrivesmarter or by another person or entity using the Website or the Services, contact us immediately using the contact information furnished in these Terms of Use.<br>
<b>4. TRADEMARKS.</b> The name "Thrivesmarter", and any and all logos and designs connected thereto or associated therewith, and the names and logos of our Vendors ("Trademarks") are the exclusive property of Thrivesmarter and/or the Vendors or Advisors and are protected by federal and state law. You may not use the Trademarks in any way, including, but not limited to, use as meta tags or any other "hidden text", without the express written consent of Thrivesmarter or the applicable Advisor or Vendor.<br>
<b>5. LIMITED LICENSE AND PROHIBITED ACTIVITIES.</b> You have a limited right and license to access the Website for your own specific business or personal use. You may not modify any page on the Website. This limited license strictly prohibits any resale or commercial use of any page on the Website, including any collection or use of any product listings, descriptions, or prices; any derivative use of the Website or any page thereon or associated therewith; any downloading or copying of account information; and any use of data mining, robots, or similar data gathering and extraction tools. You may not reproduce, duplicate, copy, sell, resell, or otherwise exploit any page on the Website for any commercial purpose without the express written consent of Thrivesmarter. You may not frame or utilize framing techniques to enclose any trademark, logo, or other proprietary information (including images, text, page layout, or form) of the Website or our Vendors without our express written consent. Any unauthorized use terminates the permission or license granted by Thrivesmarter and may result in termination of your access to and use of the Website.<br>
In addition, you represent and warrant that any and all information you post or otherwise provide to Thrivesmarter by means of the Website, including, without limitation, as part of any registration or application or to gain access to any Services, is true, accurate, not misleading, and offered in good faith. Any information disclosed to you via the Services may be used only for its intended purpose. Thrivesmarter expects that you will exercise caution, good sense and proper judgment in using the Services. You can be held liable for any illegal or prohibited content that you provide to Thrivesmarter or to other users, including, for example, infringing, defamatory, or offensive materials. You may not, and hereby represent and warrant that you will not, post, transmit, e-mail, or otherwise make accessible on or through the Website content that:<br>
*	Is unlawful, harmful, threatening, tortious, defamatory, libelous, abusive, disparaging, pedophilic, pornographic, obscene, invasive of anothers privacy, hateful, or malicious;<br>
*	Contains hate propaganda or promotes discrimination or violence against any people on account of their race, national origin, religion, age, gender, disability, or sexual orientation;<br>
*	Is or could be harmful to minors;<br>
*	Involves the transmission of "junk mail," "chain letters," or unsolicited mass mailing (or "spamming");<br>
*	Promotes information that you know (or, through the exercise of ordinary care, should have known) is false, misleading, or promotes illegal activities or conduct;<br>
*	Infringes any patent, copyright, trademark, service mark, trade secret, or other proprietary right of any other party;<br>
*	Provides material that exploits people under the age of 18 in a sexual or violent manner, or solicits personal information from anyone under 18;<br>
*	Provides instructional information about illegal activities;<br>
*	Contains a software virus or any other code, files, or programs that are designed to or have the ability to interrupt, destroy, disable, compromise, or otherwise limit the functionality of any computer programs or hardware or telecommunications equipment whether owned by Thrivesmarter or any other person or party;<br>
*	Solicits passwords, or personally identifying information for commercial or unlawful purposes from other users; or<br>
*	Otherwise violates any local, state, national, or other applicable law or regulation.<br>
In addition, you may not, in connection with the Website:<br>
*	Impersonate any person or entity, including a Thrivesmarter officer or employee, or falsely misrepresent your identification or affiliation in any other way;<br>
*	Forge headers or otherwise manipulate identifiers for the purpose of disguising the origin of any content posted or transmitted through or on this Website;<br>
*	Disrupt the ordinary flow and operation of any portion of this Website;<br>
*	Interfere with or disrupt this Website or any server or network involved with the operation of this Website;<br>
*	Stalk or harass any other person; or<br>
*	Collect or "harvest" from this Website the names of other users for the purpose of transmitting to those other users unsolicited commercial messages.<br>
<b>6. YOUR ACCOUNT.</b> As discussed further in our Privacy Policy, by using this Website, you agree that you are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under your account or password.<br>
<b>7. YOUR REVIEWS, COMMENTS, COMMUNICATIONS, AND OTHER CONTENT.</b> Where the capability is offered, you may post reviews, comments, other content; send e-cards and other communications; and submit suggestions, ideas, comments, questions, or other information (collectively, "User-Furnished Content"), so long as none of such User-Furnished Content breach these Terms of Use. Thrivesmarter reserves the right (but not the obligation) to remove or edit such User-Furnished Content, but does not regularly review such User-Furnished Content and assumes no obligation to do so. If you do post any content on this Website or submit material, (i) with respect to all User-Furnished Content other than product reviews, you grant Thrivesmarter and its Vendors a nonexclusive, royalty-free right to use, modify, distribute, reproduce, display, perform, and publish such content and (ii) with respect to product reviews, you assign, and are hereby deemed to have assigned, to Thrivesmarter all your right, title, and interest in and to such reviews, including all intellectual property rights therein and thereto. You grant Thrivesmarter and its Vendors the right to use the name that you submit in connection with such User-Furnished Content, if and as we or they choose. By submitting any content to Thrivesmarter, you represent and warrant that you own or otherwise control all of the rights to the content that you post; that such content is accurate; that use of the content you supply does not violate these Terms of Use and will not cause injury to any person or entity; and that you will indemnify Thrivesmarter and its Vendors for all claims resulting from content you provide. Thrivesmarter has the right, but not the obligation, to monitor and edit or remove any activity or User-Furnished Content. Thrivesmarter takes no responsibility and assumes no liability for any User-Furnished Content posted by you or any third party.<br>
<b>8. COPYRIGHT COMPLAINTS.</b> Thrivesmarter respects the intellectual property rights of others. If you believe that your work has been copied or used in a way that constitutes copyright infringement, you may notify our designated agent by clicking here and following the posted instructions. <br>
<b>9. RISK OF LOSS.</b> Any products or service that you license, purchase, or otherwise acquire from or through Thrivesmarter are made pursuant to your contract with the particular Vendor from whom you license, purchase, lease, or otherwise acquire the products or service. Thrivesmarter takes no responsibility and assumes no liability for any product or service that you license, purchase, or otherwise acquire from a Vendor at or through this Website and or Thrivesmarter. Any remedy you may have is exclusively against the Vendor from whom you licensed, purchased, or otherwise acquired any product or service.<br>
<b>10. PRODUCT AND SERVICE DESCRIPTIONS.</b> Thrivesmarter and its Vendors attempt to be as accurate as possible when describing any Services and/or Vendor products. Thrivesmarter, however, makes no representations or warranties that the Service and/or product descriptions or any other content on this Website is accurate, complete, reliable, current, or error-free.<br>
<b>11. VENDOR WEBSITES.</b> Thrivesmarters Vendors license and sell products and services on or through Thrivesmarter or the Website. Thrivesmarter may provide links to Vendors websites. Thrivesmarter is not responsible for examining or evaluating, and does not warrant the products or services of, any Vendor or the page of their websites. Thrivesmarter does not assume any responsibility or liability for the actions, products, or services of such Vendors or the page of their Websites. You should carefully review all Vendors privacy statements and other conditions of use on their websites before you license, lease, purchase, or otherwise acquire any product or service.<br>
<b>12. DISCLAIMER OF WARRANTIES AND LIMITATION OF LIABILITY AND INDEMNITY.</b> THRIVESMARTER, THIS WEBSITE AND THE SERVICES ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS. THRIVESMARTER MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF THIS WEBSITE OR THE INFORMATION, CONTENT, MATERIALS, SERVICES OR PRODUCTS INCLUDED ON OR DESCRIBED IN THIS WEBSITE. YOU EXPRESSLY AGREE THAT YOUR USE OF THIS WEBSITE IS AT YOUR SOLE RISK. TO THE FULL EXTENT PERMISSIBLE BY APPLICABLE LAW, THRIVESMARTER DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. THRIVESMARTER DOES NOT WARRANT THAT THIS WEBSITE, ITS SERVERS, THE SERVICES PROVIDED OR E-MAIL SENT BY OR FROM THRIVESMARTER ARE ERROR FREE OR FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. YOU EXPRESSLY UNDERSTAND AND AGREE THAT THRIVESMARTER SHALL NOT BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, PUNITIVE, CONSEQUENTIAL OR EXEMPLARY DAMAGES ARISING OUT OF OR IN ANY WAY RELATED TO THESE TERMS OF USE, THE USE OF THIS WEBSITE OR THE SERVICES, INCLUDING, WITHOUT LIMITATION, DAMAGES FOR LOSS OF PROFITS, GOODWILL, USE, DATA OR OTHER INTANGIBLE LOSSES (EVEN IF THRIVESMARTER HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES). TO THE EXTENT THE FOREGOING LIMITATION OF LIABILITY IS, IN WHOLE OR IN PART, HELD TO BE INAPPLICABLE OR UNENFORCEABLE FOR ANY REASON, THEN THE AGGREGATE LIABILITY OF THRIVESMARTER FOR ANY REASON AND UPON ANY CAUSE OF ACTION (INCLUDING, WITHOUT LIMITATION, NEGLIGENCE, STRICT LIABILITY AND OTHER ACTIONS IN CONTRACT OR TORT) ARISING OUT OF OR IN ANY WAY RELATED TO THE SERVICES, THIS WEBSITE OR THESE TERMS OF USE SHALL BE LIMITED TO DIRECT DAMAGES ACTUALLY INCURdsRED UP TO ONE THOUSAND SPAIN EUROS (1000 Euros). THIS LIMITATION OF LIABILITY APPLIES TO ALL LIABILITIES IN THE AGGREGATE, INCLUDING, WITHOUT LIMITATION, THOSE RESULTING FROM YOUR USE OR YOUR INABILITY TO USE THIS WEBSITE OR DERIVE BENEFIT FROM THE SERVICES, OR ANY OTHER MATTER ARISING FROM OR RELATING TO THIS WEBSITE OR THE SERVICES. BECAUSE SOME STATES OR JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, THE ABOVE LIMITATION MAY NOT APPLY TO YOU.<br>You agree to indemnify and hold Thrivesmarter and its affiliates harmless, and, at Thrivesmarters request, to defend Thrivesmarter and its affiliates from and against any allegation, claim, demand, cause of action, debt, loss or liability, including reasonable attorneys fees, to the extent that such action is based upon, arises out of, or relates to your use (or inability to use) of this Website or any of the Services or any other activities of yours through using this Website or the Services.<br>
<b>13. APPLICABLE LAW.</b> By visiting this Website and/or by consenting to these Terms of Use, you agree that the laws of the state of Texas, without regard to principles of conflict of laws, will govern these Terms of Use and any dispute of any sort that might arise between you and Thrivesmarter or our Vendors.<br>
<b>14. DISPUTES.</b> Any dispute relating in any way to your visit to the Website or to products you license or purchase through Thrivesmarter (where Thrivesmarter is named as a party) shall be submitted to arbitration in Travis County, Texas, pursuant to the commercial arbitration rules of and under the auspices of the American Arbitration Association. Notwithstanding the foregoing, if you have in any manner violated or threatened to violate Thrivesmarters intellectual property rights, Thrivesmarter may seek injunctive or other appropriate relief in any state or federal court in the state of Texas, and you consent to exclusive jurisdiction and venue in such courts. The arbitration award shall be binding and may be entered as a judgment in any court of competent jurisdiction. To the fullest extent permitted by applicable law, no arbitration under these Terms of Use shall be joined to an arbitration involving any other party subject to these Terms of Use, whether through class arbitration proceedings or otherwise.<br>
<b>15. WEBSITE POLICIES, MODIFICATION, AND SEVERABILITY.</b> Please review our other policies, such as our Privacy Policy, available here. If any of these Terms of Use shall be deemed invalid, void, or for any reason unenforceable, that term shall be deemed severable and shall not affect the validity and enforceability of any remaining term or provision of these Terms of Use.<br>
<b>16. OUR ADDRESS.<br>
THRIVE SMARTER<br>
NO 19, Diya Complex, Dr Rajkumar Road, J S S Layout, Mysore.<br>
Phone: 0821 68 888 58<br>
Website: www.thrivesmarter.com</b><br>
BY USING OR ACCESSING THIS SITE, YOU AGREE TO BE BOUND LEGALLY BY ALL OF THE FOREGOING TERMS AND CONDITIONS.<br>
Updated: October 2014.<br></p>

<p style="font-size:20px;margin-left:10px;margin-right:10px;"><b>Privacy Policy</b></p>
<p align="justify" style="text-indent:4em;font-size:12px;margin-left:10px;margin-right:10px;">You are being presented this Privacy Policy because you are visiting a website (the "Thrivesmarter") that is either (a) owned and operated by Thrivesmarter. ("Thrivesmarter") or (b) includes content, including but not limited to registration and other forms, owned by Thrivesmarter or drawn from a website owned and operated by Thrivesmarter. Thrivesmarter is committed to protecting the privacy of our visitors personally identifiable information. The following privacy policy ("Privacy Policy") explains our online information practices, use of the information you provide us and the choices you can make about the way your information is used by Thrivesmarter. By using the Thrivesmarter Website and providing personally identifiable information about yourself, you do hereby consent to <br>(1) our Terms of Use, <br>(2) our collection, use, and sharing of data as described in this Privacy Policy,<br> (3) the notice, choice, access, and security we are providing, as described above, and <br>(4) the methods we have described to notify you of changes to this Privacy Policy.<br>
SO THAT WE MAY ASSIST YOU WITH YOUR SOFTWARE LICENSING/PURCHASE INQUIRY, PLEASE BE ADVISED THAT THRIVESMARTER WILL FURNISH THE INFORMATION YOU SUBMIT ON THE WEBSITE TO OUR PARTICIPATING SOFTWARE VENDORS SO THAT THEY MAY CONTACT YOU ABOUT THEIR PRODUCTS, SERVICES, OFFERS, AND PROMOTIONS. WHEN YOU DOWNLOAD ARTICLES OF INTEREST WRITTEN (IN WHOLE OR IN PART) BY ONE OF OUR GUEST AUTHORS (AN "ADVISOR"), THRIVESMARTER WILL FURNISH THE INFORMATION YOU SUBMIT ON THE WEBSITE TO SUCH ADVISOR SO THAT HE/SHE MAY CONTACT YOU ABOUT THE SUBJECT MATTER OF THE ARTICLE.<br>
Thrivesmarter may gather information about you from the Thrivesmarter Website and from other sources, such as information you provide to our affiliated companies, including affiliated websites (which may be owned and/or operated by persons having no ownership relationship with Thrivesmarter) or may be an entity directly or indirectly controlling, controlled by or under common control with Thrivesmarter ("Affiliates").<br>
As a general rule, you will not be required to provide personally identifiable information as a condition to your browsing the Website. When such information is gathered, we will gather a limited scope of information from you that is necessary to facilitate the requests submitted by you, to improve this Thrivesmarter Website and your experience with the Thrivesmarter Website, and to make future visits to the Thrivesmarter Website easier and more personalized for you.<br>
<b>WHAT INFORMATION IS COLLECTED AND HOW COLLECTED INFORMATION IS USED</b><br>
Users of the Thrivesmarter Website may browse without being obligated to submit any personal information; however, we may collect certain personally identifiable information from you in certain areas of the Thrivesmarter Website for certain purposes. These purposes include:<br>
*	providing information to us, to owners/operators of affiliate Websites, and/or to the vendor(s) of the software product(s) which you express an interest in purchasing or licensing so that we can contact you and help initiate contact and establish communication between you and such vendor(s) or Affiliates;<br>
*	providing information to an Advisor whose article you have specifically requested to download;<br>
*	conducting other transactions offered by Thrivesmarter that you may request;<br>
*	servicing your account with us and responding to your questions;<br>
*	providing Thrivesmarters newsletter to you via e-mail;<br>
*	assisting us in providing better products and services (for example, we may contact you to assist us in evaluating the performance of our staff, to assess the quality of product and service received and to help us improve the Website and our facilities and services) and,<br>
*	compiling and aggregating statistics and analyses about users use of the Website, products and services, which statistics are used to enable us to provide better service and products to you and others in the future.<br>
Information we may collect:<br>
*	names<br>
*	physical addresses<br>
*	telephone numbers<br>
*	e-mail addresses<br>
*	information regarding your business (e.g., business name, revenue thresholds, etc.)<br>
*	information regarding your business needs and software requirements<br>
*	all other personally identifiable information you affirmatively provide to us.<br>
Failing to provide information that is required to complete certain transactions will not prevent you from browsing the Thrivesmarter Website, but it may prevent you from being able to complete certain transactions and/or prevent us from contacting you in order to put you in contact with the appropriate software vendor(s).<br>
The general categories of information we gather include:<br>
<b>Personal User Information</b><br>
We may also require that you supply your name, physical address, telephone number, e-mail address or other personally identifiable information in order to facilitate certain transactions. We may also require additional personal information to provide specific services to you.<br>
<b>Anonymous User Information</b><br>
Certain non-personal, anonymous information may be automatically provided to our Web servers by your computer. Additionally, certain other information (such as cookies, described below) may be transmitted by our Web server to your computer. That information does not contain any personally identifiable information. Specific types of anonymous information are described below:<br>
<b>IP Addresses</b><br>
For each visitor to the Thrivesmarter Website, whenever possible, our Web server automatically recognizes the visitors domain name or IP address. An IP address is a number assigned to your computer when you connect to the Internet. As part of the protocol of the Internet, Web servers can identify your computer by its IP address. In addition, Web servers may be able to identify the type of browser you are using or even the type of computer.<br>
We collect IP addresses and related information for the purposes of system administration, to assess the traffic to the Thrivesmarter Website and to maintain and improve the Thrivesmarter Website. Although it is not our practice to link IP addresses to your personally identifiable information, we reserve the right to use IP addresses to identify a user when we feel it is necessary to protect the compelling interest of our business, the Website, users of the Thrivesmarter Website or others or to comply with laws, court orders, or law enforcement requests.<br>
<b>Use of Cookies</b><br>
Cookies are short strings of text sent from a Web server to a Web browser when the browser accesses a website. In simplest terms, when the browser requests a page from the Web server that originally sent it the cookie, the browser sends a copy of the cookie back to that Web server. A cookie typically contains, among other things, the name of the cookie, a unique identification number, and an expiration date and domain name information. Cookies are used for personalization, tracking and other purposes. Cookies may be "session-only" or "persistent." Persistent cookies last for more than one visit and are typically used to allow a visitor to the Website to personalize their experience.<br>
We may use cookies to analyze the traffic on the Thrivesmarter Website (such as total visitors and pages viewed), to personalize features or save you the trouble of retyping your name or other information, and to make improvements to the Thrivesmarter based on the data we collect. We do not save passwords or other sensitive information in cookies. The use of cookies has become a standard in the Internet industry, especially at Thrivesmarter that provide any kind of personalized service.
Cookies may also be placed by third parties prior to or during your visit to the Thrivesmarter. Our Affiliates and business partners may use these cookies in connection with pixel tracking (discussed below) or otherwise. We do not control these cookies. The use of cookies by content providers and advertisers has become standard practice in the Internet industry.<br>
<b>Pixel Tracking</b><br>
Thrivesmarter may employ a common technique usually referred to as "pixel tracking" to measure the effectiveness of marketing and advertisements, as well as compile aggregate usage statistics. Pixel tracking, which may be used in connection with advertisements on other sites, on the Thrivesmarter or in e-mail messages, involves the use of pixel tags (also known as "clear gifs," "Web beacons" or "1-by-1 gifs") that are not visible to the user of the site and consist of a few lines of computer coding. For example, if you visit the Thrivesmarter from an advertisement on another site, the pixel tag will reference the cookie you received when you clicked on the advertisement. The pixel tag also may register this activity with a business partner to allow us to count the number of times or when an advertisement is accessed. This data is collected for use in our marketing and research. Personally identifiable information about you is not collected by pixel tracking, nor is any tracking information generated from the pixel tag allowed to be used for any other purpose other than to report Thrivesmarter activity to us.<br>
<b>Third Party Advertising</b><br>
We use third party advertising companies to serve ads when you visit our Thrivesmarter. These companies may use information (not including your name, address, email address, or telephone number) about your visits to this and other Web sites in order to provide advertisements about goods and services of interest to you. If you would like more information about this practice and to know your choices about not having this information used by these companies, click here.<br>
<b>Other Information</b><br>
We may also request other personally identifiable information from you, or you may affirmatively provide us with such information. As a general matter, we try to limit the information we gather to the minimum information we need to perform the applicable services and to improve your experience on the Thrivesmarter. If you send an e-mail to the Thrivesmarter or otherwise affirmatively provide us with information beyond what we request, we will treat such information as having your consent to collect, retain and use such information for purposes reasonably associated with the purpose for which you provided the information. For example, we may retain a copy of the e-mail and any personally identifiable information you may have supplied in the e-mail with respect to a user service question to help us evaluate our service, train our employees and provide better service to our users.<br>
If you use a bullet in board or blog on the Thrivesmarter, you should be aware that any personally identifiable information you submit there can be read, collected, or used by other users of these forums, and could be used to send you unsolicited messages. We are not responsible for the personally identifiable information that you choose to submit in these forums.<br>
<b>WHO IS COLLECTING THIS INFORMATION</b><br>
We collect the user information described above by means of your use of the Thrivesmarter and the features of the Thrivesmarter. For example, information is collected in connection with online transactions, with the registration of users, and with the provision of information and/or services.<br>
Data collected online may also be combined or merged with information you provide to us by means other than the Thrivesmarter as part of the standard business operations of Thrivesmarter and its Affiliates; provided, however, this Privacy Policy applies only to data collected on-line. If the same information about you is gathered from the Thrivesmarter Website and also from other sources with different privacy policies, Thrivesmarter may elect, in its sole discretion, to treat such information in accordance with the privacy policy that least restricts our use and disclosure of such information.<br>
When you use the Thrivesmarter, you may be linked or directed to other third party sites outside the Thrivesmarter Website that are beyond our control. For example, you might click on a hyperlink that will take you off the Thrivesmarter Website. Third party Websites may have a privacy policy different from our Privacy Policy. You should review the applicable privacy policies of all other Websites before providing personally identifiable information in connection with such sites. We are not responsible for any actions or privacy policies of such third parties. In addition, third parties who assist us with pixel tracking may collect a limited amount of information to help us measure the effectiveness of ads, usually by placing cookies on your hard drive.<br>
<b>WITH WHOM MAY THE INFORMATION BE SHARED</b><br>
PLEASE BE ADVISED THAT THRIVESMARTER MAY PROVIDE CERTAIN INFORMATION YOU SUBMIT ON THE THRIVESMARTER WEBSITE TO THIRD PARTIES, INCLUDING, BUT NOT LIMITED TO, YOUR NAME, ADDRESS, PHONE NUMBER AND E-MAIL ADDRESS SO THAT THEY MAY CONTACT YOU ABOUT THEIR OWN OR OTHERS PRODUCTS, SERVICES, OFFERS AND PROMOTIONS.<br>
Additionally, you may authorize us to share your e-mail address with our Affiliates business partners, and third parties, including vendors whose products are profiled on the Thrivesmarter Website. If you opt-in and/or receive an e-mail opt-in confirmation, our Affiliates and business partners and third parties may contact you via e-mail, U.S. post, and/or telephone with a variety of special promotions, offers, or other information that may be of interest to you.<br>
Thrivesmarter may share personally identifiable information with its Affiliates and business partners necessary to complete transactions as part of its standard business operations and to assist us in offering products or services to you.<br>
First, we may disclose user information in special cases when we have reason to believe that disclosing this information is necessary to identify, contact, or bring legal action against someone who may be causing injury to or interference with (either intentionally or unintentionally) our rights or property, users of the Website, or anyone else who could be harmed by such activities. Second, we may disclose user information when we believe in good faith that such disclosure is required by applicable law.<br>
<b>LEGAL DISCLAIMER</b><br>
We reserve the right to disclose your personally identifiable information as required by law and when we believe that disclosure is necessary to protect our rights and/or comply with a judicial proceeding, court order, or legal process served on the Thrivesmarter Website.<br>
<b>TESTIMONIALS</b><br>
We post customer testimonials on the Thrivesmarter Website which may contain personally identifiable information such as the customers name. If you want to remove your personal information that is being displayed on the Thrivesmarter Website under public pages please send your request to privacy@thrivesmarter.com.<br>
<b>CHILDRENS PRIVACY</b><br>
Thrivesmarter does not solicit personal information from children. We abide by the United States Childrens Online Privacy Protection Act and will not knowingly collect personally identifiable information from children under age 13. We recommend that parents actively participate in their childrens use of the Internet.<br><b>CHOICES YOU CAN MAKE ABOUT YOUR INFORMATION</b><br>
We will give you an opportunity to opt-out of the gathering of your personally identifiable information, specific uses of your personally identifiable information, and any marketing promotions in accordance with the procedures set out in the section below, "Correcting and Changing Your Information." In addition, you may opt-out of receiving any further e-mail from Thrivesmarter by clicking on the "unsubscribe" button in any Thrivesmarter e-mail. By adjusting the settings in your browser, you can refuse to accept cookies or give yourself the opportunity to accept or reject cookies, or receive notice of cookies. Software programs are available that block cookies. Refusing cookies may impinge or block altogether your user experience on the Thrivesmarter Website by eliminating personalization or other features.<br>
<b>CORRECTING OR CHANGING YOUR INFORMATION</b><br>
If you wish to amend, correct, update, delete or opt-out of any information to which you have previously opted-in or wish to review information we have collected about you, please contact Thrivesmarter via e-mail at privacy@thrivesmarter.com, and we will attend to your request and make any necessary revisions.
This provision applies only to personally identifiable information collected via the Website and not to: (i) information that is furnished to or otherwise acquired by us by other means, as set forth in this Privacy Policy, including but not limited to, information provided over the telephone; (ii) non-personally identifiable information that may be gathered by cookies or from IP addresses or (iii) aggregate information. We reserve the right not to allow access to your information if we believe in good faith that such disclosure is prohibited by law or if the rights of another individual might be violated.<br>
<b>SECURITY PROCEDURES</b><br>
We are concerned with the security of your personally identifiable information and try to provide secure transmission of your information from your PC to our servers. For certain transactions on certain pages of the Websites, we may use Secured Sockets Layer (SSL) technology to secure the transfer of information. Unfortunately, no data transmission over the Internet can be guaranteed to be absolutely secure. As a result, while we strive to protect your personal information, we cannot guarantee the security of any information transmitted over the Internet.<br>
If you have a user name and password for any of the features on the Thrivesmarter Website, you have the responsibility of keeping your password secret. You should not reveal your password to anyone. We will not ask you in an unsolicited telephone call or e-mail for your password. In addition, you should take reasonable precautions when using a computer that is not your own or in a public setting.<br>
<b>CHANGES IN THIS PRIVACY STATEMENT</b><br>
If we decide to change our privacy policy, we will post those changes to this privacy statement and the home page so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we disclose it.<br>
We reserve the right to modify this privacy statement at any time, so please review it frequently. If we make material changes to this policy, we will notify you by e-mail or by means of a prominent notice on our home page.<br>
<b>CONTACTING THRIVESMARTER</b><br>
If you have any specific questions regarding any issues about privacy on the Thrivesmarter Website,<br> please contact Thrivesmarter at<br> <b>16. OUR ADDRESS.<br>
THRIVE SMARTER<br>
NO 19, Diya Complex, Dr Rajkumar Road, J S S Layout, Mysore.<br>
Phone: 0821 68 888 58<br>
Website: www.thrivesmarter.com</b><br> or via e-mail privacy@thrivesmarter.com, and we will attend to your request and make any necessary revisions.<br>
<b>APPLICABLE LAW</b><br>
Our collection and use of information shall be governed by laws of the Spain.<br>
Updated: October 2014.</p>
</div>
<br>
<input type="button" value="Close" onclick="document.getElementById('div_name2').style.display='none';return false;" href="" 
style="-webkit-border-radius:3px; font-size:13px; background:#4e97cc; color:white; font-weight:bold; font-family: 'Noto Sans', sans-serif; height:40px; width:110px; margin-left:20px;margin-top:-9px;">
</div>




<div id="div_name3" style="position:relative; overflow:hidden; display:none;height:500px;;width:625px;margin: 0 auto;background-color:#f0f0f0; padding: 0 auto;border:1px solid #ccc;">
<table style="border-bottom:1px solid; border-color:#aaaaaa; width:625px;">
<td>
<p style="font-size:20px;margin-top:0px;margin-left:10px;"><b>PRIVACY POLICY<br></b></p></td></table>
<p style="font-size:15px;margin-top:10px;text-indent:4em;"><b>Please read the following license agreement carefully.</b><br></p>

<div style="height:300px;width:620px;margin: 0 auto;background-color:white; padding: 0 auto;margin-top:15px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
<p style="font-size:20px;margin-left:10px;margin-right:10px;"><b>Terms of Use</b></p>

   <p align="justify" style="line-height:2em;text-indent:8em;font-size:12px;margin-left:10px;margin-top:10px;">
		
		You are being presented this Privacy Policy because you are visiting a website (the "Thrivesmarter") that is either (a) owned and operated by Thrivesmarter. ("Thrivesmarter") or (b) includes content, including but not limited to registration and other forms, owned by Thrivesmarter or drawn from a website owned and operated by Thrivesmarter. Thrivesmarter is committed to protecting the privacy of our visitors personally identifiable information. The following privacy policy ("Privacy Policy") explains our online information practices, use of the information you provide us and the choices you can make about the way your information is used by Thrivesmarter. By using the Thrivesmarter Website and providing personally identifiable information about yourself, you do hereby consent to <br>(1) our Terms of Use, <br>(2) our collection, use, and sharing of data as described in this Privacy Policy,<br> (3) the notice, choice, access, and security we are providing, as described above, and <br>(4) the methods we have described to notify you of changes to this Privacy Policy.<br><br>
SO THAT WE MAY ASSIST YOU WITH YOUR SOFTWARE LICENSING/PURCHASE INQUIRY, PLEASE BE ADVISED THAT THRIVESMARTER WILL FURNISH THE INFORMATION YOU SUBMIT ON THE WEBSITE TO OUR PARTICIPATING SOFTWARE VENDORS SO THAT THEY MAY CONTACT YOU ABOUT THEIR PRODUCTS, SERVICES, OFFERS, AND PROMOTIONS. WHEN YOU DOWNLOAD ARTICLES OF INTEREST WRITTEN (IN WHOLE OR IN PART) BY ONE OF OUR GUEST AUTHORS (AN "ADVISOR"), THRIVESMARTER WILL FURNISH THE INFORMATION YOU SUBMIT ON THE WEBSITE TO SUCH ADVISOR SO THAT HE/SHE MAY CONTACT YOU ABOUT THE SUBJECT MATTER OF THE ARTICLE.<br><br>
Thrivesmarter may gather information about you from the Thrivesmarter Website and from other sources, such as information you provide to our affiliated companies, including affiliated websites (which may be owned and/or operated by persons having no ownership relationship with Thrivesmarter) or may be an entity directly or indirectly controlling, controlled by or under common control with Thrivesmarter ("Affiliates").<br><br>
As a general rule, you will not be required to provide personally identifiable information as a condition to your browsing the Website. When such information is gathered, we will gather a limited scope of information from you that is necessary to facilitate the requests submitted by you, to improve this Thrivesmarter Website and your experience with the Thrivesmarter Website, and to make future visits to the Thrivesmarter Website easier and more personalized for you.<br><br>
<b>What information is collected and how collected information is used.</b><br>
Users of the Thrivesmarter Website may browse without being obligated to submit any personal information; however, we may collect certain personally identifiable information from you in certain areas of the Thrivesmarter Website for certain purposes. These purposes include:<br>
*	providing information to us, to owners/operators of affiliate Websites, and/or to the vendor(s) of the software product(s) which you express an interest in purchasing or licensing so that we can contact you and help initiate contact and establish communication between you and such vendor(s) or Affiliates;<br>
*	providing information to an Advisor whose article you have specifically requested to download;<br>
*	conducting other transactions offered by Thrivesmarter that you may request;<br>
*	servicing your account with us and responding to your questions;<br>
*	providing Thrivesmarters newsletter to you via e-mail;<br>
*	assisting us in providing better products and services (for example, we may contact you to assist us in evaluating the performance of our staff, to assess the quality of product and service received and to help us improve the Website and our facilities and services) and,<br>
*	compiling and aggregating statistics and analyses about users use of the Website, products and services, which statistics are used to enable us to provide better service and products to you and others in the future.<br>
Information we may collect:<br>
*	names<br>
*	physical addresses<br>
*	telephone numbers<br>
*	e-mail addresses<br>
*	information regarding your business (e.g., business name, revenue thresholds, etc.)<br>
*	information regarding your business needs and software requirements<br>
*	all other personally identifiable information you affirmatively provide to us.<br>
Failing to provide information that is required to complete certain transactions will not prevent you from browsing the Thrivesmarter Website, but it may prevent you from being able to complete certain transactions and/or prevent us from contacting you in order to put you in contact with the appropriate software vendor(s).<br><br>
The general categories of information we gather include:<br>
<b>Personal User Information</b><br>
We may also require that you supply your name, physical address, telephone number, e-mail address or other personally identifiable information in order to facilitate certain transactions. We may also require additional personal information to provide specific services to you.<br><br>
<b>Anonymous User Information</b><br>
Certain non-personal, anonymous information may be automatically provided to our Web servers by your computer. Additionally, certain other information (such as cookies, described below) may be transmitted by our Web server to your computer. That information does not contain any personally identifiable information. Specific types of anonymous information are described below:<br><br>
<b>IP Addresses</b><br>
For each visitor to the Thrivesmarter Website, whenever possible, our Web server automatically recognizes the visitors domain name or IP address. An IP address is a number assigned to your computer when you connect to the Internet. As part of the protocol of the Internet, Web servers can identify your computer by its IP address. In addition, Web servers may be able to identify the type of browser you are using or even the type of computer.<br>
We collect IP addresses and related information for the purposes of system administration, to assess the traffic to the Thrivesmarter Website and to maintain and improve the Thrivesmarter Website. Although it is not our practice to link IP addresses to your personally identifiable information, we reserve the right to use IP addresses to identify a user when we feel it is necessary to protect the compelling interest of our business, the Website, users of the Thrivesmarter Website or others or to comply with laws, court orders, or law enforcement requests.<br><br>
<b>Use of Cookies</b><br>
Cookies are short strings of text sent from a Web server to a Web browser when the browser accesses a website. In simplest terms, when the browser requests a page from the Web server that originally sent it the cookie, the browser sends a copy of the cookie back to that Web server. A cookie typically contains, among other things, the name of the cookie, a unique identification number, and an expiration date and domain name information. Cookies are used for personalization, tracking and other purposes. Cookies may be "session-only" or "persistent." Persistent cookies last for more than one visit and are typically used to allow a visitor to the Website to personalize their experience.<br>
We may use cookies to analyze the traffic on the Thrivesmarter Website (such as total visitors and pages viewed), to personalize features or save you the trouble of retyping your name or other information, and to make improvements to the Thrivesmarter based on the data we collect. We do not save passwords or other sensitive information in cookies. The use of cookies has become a standard in the Internet industry, especially at Thrivesmarter that provide any kind of personalized service.
Cookies may also be placed by third parties prior to or during your visit to the Thrivesmarter. Our Affiliates and business partners may use these cookies in connection with pixel tracking (discussed below) or otherwise. We do not control these cookies. The use of cookies by content providers and advertisers has become standard practice in the Internet industry.<br><br>
<b>Pixel Tracking</b><br>
Thrivesmarter may employ a common technique usually referred to as "pixel tracking" to measure the effectiveness of marketing and advertisements, as well as compile aggregate usage statistics. Pixel tracking, which may be used in connection with advertisements on other sites, on the Thrivesmarter or in e-mail messages, involves the use of pixel tags (also known as "clear gifs," "Web beacons" or "1-by-1 gifs") that are not visible to the user of the site and consist of a few lines of computer coding. For example, if you visit the Thrivesmarter from an advertisement on another site, the pixel tag will reference the cookie you received when you clicked on the advertisement. The pixel tag also may register this activity with a business partner to allow us to count the number of times or when an advertisement is accessed. This data is collected for use in our marketing and research. Personally identifiable information about you is not collected by pixel tracking, nor is any tracking information generated from the pixel tag allowed to be used for any other purpose other than to report Thrivesmarter activity to us.<br><br>
<b>Third Party Advertising</b><br>
We use third party advertising companies to serve ads when you visit our Thrivesmarter. These companies may use information (not including your name, address, email address, or telephone number) about your visits to this and other Web sites in order to provide advertisements about goods and services of interest to you. If you would like more information about this practice and to know your choices about not having this information used by these companies, click here.<br><br>
<b>Other Information</b><br>
We may also request other personally identifiable information from you, or you may affirmatively provide us with such information. As a general matter, we try to limit the information we gather to the minimum information we need to perform the applicable services and to improve your experience on the Thrivesmarter. If you send an e-mail to the Thrivesmarter or otherwise affirmatively provide us with information beyond what we request, we will treat such information as having your consent to collect, retain and use such information for purposes reasonably associated with the purpose for which you provided the information. For example, we may retain a copy of the e-mail and any personally identifiable information you may have supplied in the e-mail with respect to a user service question to help us evaluate our service, train our employees and provide better service to our users.<br>
If you use a bullet in board or blog on the Thrivesmarter, you should be aware that any personally identifiable information you submit there can be read, collected, or used by other users of these forums, and could be used to send you unsolicited messages. We are not responsible for the personally identifiable information that you choose to submit in these forums.<br><br>
<b>Who is collecting this information</b><br>
We collect the user information described above by means of your use of the Thrivesmarter and the features of the Thrivesmarter. For example, information is collected in connection with online transactions, with the registration of users, and with the provision of information and/or services.<br>
Data collected online may also be combined or merged with information you provide to us by means other than the Thrivesmarter as part of the standard business operations of Thrivesmarter and its Affiliates; provided, however, this Privacy Policy applies only to data collected on-line. If the same information about you is gathered from the Thrivesmarter Website and also from other sources with different privacy policies, Thrivesmarter may elect, in its sole discretion, to treat such information in accordance with the privacy policy that least restricts our use and disclosure of such information.<br>
When you use the Thrivesmarter, you may be linked or directed to other third party sites outside the Thrivesmarter Website that are beyond our control. For example, you might click on a hyperlink that will take you off the Thrivesmarter Website. Third party Websites may have a privacy policy different from our Privacy Policy. You should review the applicable privacy policies of all other Websites before providing personally identifiable information in connection with such sites. We are not responsible for any actions or privacy policies of such third parties. In addition, third parties who assist us with pixel tracking may collect a limited amount of information to help us measure the effectiveness of ads, usually by placing cookies on your hard drive.<br><br>
<b>With whom may the information be shared</b><br>
PLEASE BE ADVISED THAT THRIVESMARTER MAY PROVIDE CERTAIN INFORMATION YOU SUBMIT ON THE THRIVESMARTER WEBSITE TO THIRD PARTIES, INCLUDING, BUT NOT LIMITED TO, YOUR NAME, ADDRESS, PHONE NUMBER AND E-MAIL ADDRESS SO THAT THEY MAY CONTACT YOU ABOUT THEIR OWN OR OTHERS PRODUCTS, SERVICES, OFFERS AND PROMOTIONS.<br>
Additionally, you may authorize us to share your e-mail address with our Affiliates business partners, and third parties, including vendors whose products are profiled on the Thrivesmarter Website. If you opt-in and/or receive an e-mail opt-in confirmation, our Affiliates and business partners and third parties may contact you via e-mail, U.S. post, and/or telephone with a variety of special promotions, offers, or other information that may be of interest to you.<br>
Thrivesmarter may share personally identifiable information with its Affiliates and business partners necessary to complete transactions as part of its standard business operations and to assist us in offering products or services to you.<br>
First, we may disclose user information in special cases when we have reason to believe that disclosing this information is necessary to identify, contact, or bring legal action against someone who may be causing injury to or interference with (either intentionally or unintentionally) our rights or property, users of the Website, or anyone else who could be harmed by such activities. Second, we may disclose user information when we believe in good faith that such disclosure is required by applicable law.<br><br>
<b>Legal disclaimer</b><br>
We reserve the right to disclose your personally identifiable information as required by law and when we believe that disclosure is necessary to protect our rights and/or comply with a judicial proceeding, court order, or legal process served on the Thrivesmarter Website.<br><br>
<b>Testimonials</b><br>
We post customer testimonials on the Thrivesmarter Website which may contain personally identifiable information such as the customers name. If you want to remove your personal information that is being displayed on the Thrivesmarter Website under public pages please send your request to privacy@thrivembs.com.<br><br>
<b>Childrens Privacy</b><br>
Thrivesmarter does not solicit personal information from children. We abide by the United States Childrens Online Privacy Protection Act and will not knowingly collect personally identifiable information from children under age 13. We recommend that parents actively participate in their childrens use of the Internet.<br><br><b>Choices you can make about your information</b><br>
We will give you an opportunity to opt-out of the gathering of your personally identifiable information, specific uses of your personally identifiable information, and any marketing promotions in accordance with the procedures set out in the section below, "Correcting and Changing Your Information." In addition, you may opt-out of receiving any further e-mail from Thrivesmarter by clicking on the "unsubscribe" button in any Thrivesmarter e-mail. By adjusting the settings in your browser, you can refuse to accept cookies or give yourself the opportunity to accept or reject cookies, or receive notice of cookies. Software programs are available that block cookies. Refusing cookies may impinge or block altogether your user experience on the Thrivesmarter Website by eliminating personalization or other features.<br><br>
<b>Correcting or changing your information</b><br>
If you wish to amend, correct, update, delete or opt-out of any information to which you have previously opted-in or wish to review information we have collected about you, please contact Thrivesmarter via e-mail at privacy@thrivembs.com, and we will attend to your request and make any necessary revisions.
This provision applies only to personally identifiable information collected via the Website and not to: (i) information that is furnished to or otherwise acquired by us by other means, as set forth in this Privacy Policy, including but not limited to, information provided over the telephone; (ii) non-personally identifiable information that may be gathered by cookies or from IP addresses or (iii) aggregate information. We reserve the right not to allow access to your information if we believe in good faith that such disclosure is prohibited by law or if the rights of another individual might be violated.<br><br>
<b>Security Procedures</b><br>
We are concerned with the security of your personally identifiable information and try to provide secure transmission of your information from your PC to our servers. For certain transactions on certain pages of the Websites, we may use Secured Sockets Layer (SSL) technology to secure the transfer of information. Unfortunately, no data transmission over the Internet can be guaranteed to be absolutely secure. As a result, while we strive to protect your personal information, we cannot guarantee the security of any information transmitted over the Internet.<br>
If you have a user name and password for any of the features on the Thrivesmarter Website, you have the responsibility of keeping your password secret. You should not reveal your password to anyone. We will not ask you in an unsolicited telephone call or e-mail for your password. In addition, you should take reasonable precautions when using a computer that is not your own or in a public setting.<br><br>
<b>Changes in the Privacy statement</b><br>
If we decide to change our privacy policy, we will post those changes to this privacy statement and the home page so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we disclose it.<br>
We reserve the right to modify this privacy statement at any time, so please review it frequently. If we make material changes to this policy, we will notify you by e-mail or by means of a prominent notice on our home page.<br><br>
<b>Contacting thrivesmarter</b><br>
If you have any specific questions regarding any issues about privacy on the Thrivesmarter Website,<br> please contact Thrivesmarter at<br><br> 
<b>16. Our Address.<br>
THRIVE SMARTER<br>
NO 19, Diya Complex, Dr Rajkumar Road, J S S Layout, Mysore.<br>
Phone: 0821 68 888 58<br>
Website: www.thrivesmarter.com</b><br><br> or via e-mail privacy@thrivembs.com, and we will attend to your request and make any necessary revisions.<br><br>
<b>Applicable Law</b><br>
Our collection and use of information shall be governed by laws of the Spain.<br>
Updated: October 2014.</p>
</div>
<br>
<input type="button" value="Close" onclick="document.getElementById('div_name3').style.display='none';return false;" href="" 
style="-webkit-border-radius:3px; font-size:13px; background:#4e97cc; color:white; font-weight:bold; font-family: 'Noto Sans', sans-serif; height:40px; width:110px; margin-left:20px;margin-top:-9px;">
</div>

<div id="div_name4" style="position:relative; overflow:hidden; display:none;height:500px;;width:625px;margin: 0 auto;background-color:#f0f0f0; padding: 0 auto;border:1px solid #ccc;">
<table style="border-bottom:1px solid; border-color:#aaaaaa; width:625px;">
<td>
<p style="font-size:20px;margin-top:0px;margin-left:10px;"><b>USER ACCOUNT POLICY<br></b></p></td></table>
<p style="font-size:15px;margin-top:10px;text-indent:4em;"><b>Please read the following license agreement carefully.</b><br></p>

<div style="height:300px;width:620px;margin: 0 auto;background-color:white; padding: 0 auto;margin-top:15px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
<p style="font-size:20px;margin-left:10px;margin-right:10px;"><b>Terms of Use</b></p>

  <p align="justify" style="line-height:2em;font-size:12px;margin-left:10px;margin-top:10px;">
		
<b>Protect usernames</b><br>
If enabled, when a user attempts to reset their password and enters a username or email address, the following message is displayed: "If you supplied a correct username or email address then an email should have been sent to you." This is to prevent a malicious party from using the interface to determine which usernames and email addresses are in use in valid accounts.<br>
If the protect usernames setting is disabled, when a user attempts to reset their password they are provided with feedback regarding whether an account exists with the username or email address supplied. For example, the message "The email address was not found in the database" may be displayed.<br><br>
<b>Force users to login</b><br>
You cannot access directly any page where all users must login before they even see the Front Page of the site.<br><br>
<b>Maximum uploaded file size</b><br>
Upload file sizes are restricted:<br>
*	The ERP allows only the allowed file size with the allowed file extension to be uploaded. (Uploading large file will fail the upload).<br><br>
<b>Enable trusted content</b><br>
By default ERP will always thoroughly clean text that comes from users to remove any possible bad scripts, media etc that could be a security risk. The Trusted Content system is a way of giving particular users that you trust the ability to include these advanced features in their content without interference. Texts created or uploaded by such users will be marked as trusted and will not be cleaned before display. <br><br>
<b>Site policy URL</b><br>
*	If you have a site policy that all users must see and agree to before using this site, then specify the URL. The URL can point to any type of file anywhere online that can be accessed without a log into your ERP.<br><br>

<b>Account Protection</b><br>
Account lockout may be enabled.<br>
If any Complaints over Unauthorized access of an ERP system, then the account will be temporarily denied.<br>
It can be retrieved back after a confirmation email.<br><br>
<b>Password policy</b><br>
It is highly recommended that a password policy is set to force users to use stronger passwords that are less susceptible to being cracked by an intruder.
The password policy includes option to set the minimum length of the password, the minimum number of digits, the minimum number of lower-case characters, the minimum number of upper-case characters and the minimum number of non alphanumeric characters.<br>
The password policy is enabled by default. Default (recommended) settings are:<br>
*	Password length - 8(Minimum)<br>
*	Digits - 1<br>
*	Lowercase letters - 1<br>
*	Uppercase letters - 1<br>
*	Non-alphanumeric characters - 1<br>
If a user enters a password that does not meet the requirements, they are given an error message indicating the nature of the problem with the entered password.<br><br>
<b>Disable user profile</b><br>
If the account had no access for duration of 6 months, then the account will be removed.<br><br><br>


</p>
</div>
<br>
<input type="button" value="Close" onclick="document.getElementById('div_name4').style.display='none';return false;" href="" 
style="-webkit-border-radius:3px; font-size:13px; background:#4e97cc; color:white; font-weight:bold; font-family: 'Noto Sans', sans-serif; height:40px; width:110px; margin-left:20px;margin-top:-9px;">
</div>

<div id="div_name5" style="position:relative; overflow:hidden; display:none;height:500px;;width:625px;margin: 0 auto;background-color:#f0f0f0; padding: 0 auto;border:1px solid #ccc;">
<table style="border-bottom:1px solid; border-color:#aaaaaa; width:625px;">
<td>
<p style="font-size:20px;margin-top:0px;margin-left:10px;"><b>PAYMENT POLICY<br></b></p></td></table>
<p style="font-size:15px;margin-top:10px;text-indent:4em;"><b>Please read the following license agreement carefully.</b><br></p>

<div style="height:300px;width:620px;margin: 0 auto;background-color:white; padding: 0 auto;margin-top:15px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
<p style="font-size:20px;margin-left:10px;margin-right:10px;"><b>Terms of Use</b></p>

  <p align="justify" style="line-height:2em;font-size:12px;margin-left:10px;margin-top:10px;">
		
<b>Online and phone payments can be made by:</b><br>
1)	Credit or debit card (American Express, Discover, Rupay, MasterCard, and VISA are accepted).<br>
2)	PayPal.<br>
If you do not have access to an electronic form of payment, please contact TS Customer Service at +91-08216888858.<br><br>
<b>Payment Policies</b><br>
1)	All payments must be for the full amount.<br>
2)      Payment can be made through <br> <b>Pay to name:</b> THRIVE SMARTER S L <br> <b>Email ID :</b>payment@thrivembs.com <br> <b>Mailing Address:</b> NO 19 , Diya Complex , Dr Rajkumar Road , J S S Layout , Mysore.<br>
3)	Payments are subject to change without notice. Amounts listed are in U.S. dollars and are exclusive of any Value-added or similar taxes.<br>
4)	All outstanding balances with TS must be paid in full prior to registering for any TS-administered.<br>
5)	Services may be withheld for nonpayment of amount.<br>
6)	Refunds of Payment will be made in U.S. dollar denominations.<br>
7)	There are no refunds for additional services.<br>
8)	TS reserve the right to add or remove payment methods at its own discretion.<br><br>
<b>Refund Policy</b><br>
Payment fee refunds will be issued based on the original payment method. Credit/debit card and PayPal payments will begin being processed as soon as the registration is canceled. Check with your credit/debit Card Company or PayPal regarding processing time for crediting your account.<br>  Fees for additional services are nonrefundable.<br><br>
<b>See cancellation and refund information below.</b><br>

	If the cancellation is processed at least two full days (not including the day of the request), the full Payment fee will be refunded, minus a cancellation fee of 30% from the amount Paid.<br><br>
</p><br><br>
</div>

<br>
<input type="button" value="Close" onclick="document.getElementById('div_name5').style.display='none';return false;" href="" 
style="-webkit-border-radius:3px; font-size:13px; background:#4e97cc; color:white; font-weight:bold; font-family: 'Noto Sans', sans-serif; height:40px; width:110px; margin-left:20px;margin-top:-9px;">
</div>
<!---script validation--->
 <script>
function myfun()
{
if(document.getElementById("term1").checked=="true" && document.getElementById("term2").checked=="true"
&& document.getElementById("term3").checked=="true" && document.getElementById("term4").checked=="true")
{
document.getElementById("button2").hidden= "false";
}
else
{
document.getElementById("button2").hidden= "true";
}
</script> 
<!---script validation closed---->
<!----form opened---->
<hr style="margin-top:-30px;">

<form method="POST" action="create_account_backend_page.php">
<p style="float: left;"><input type="checkbox" onchange="a();" required="true" id="term1" > I have read and agree to the <font color="red"><a  onclick="document.getElementById('div_name2').style.display='';
document.getElementById('div_name3').style.display='none';document.getElementById('div_name4').style.display='none';
document.getElementById('div_name5').style.display='none';return false;" 
style="text-decoration:none;" href=''>Terms and Conditions</a></font></p>
<br/>
<p style="float: left;"><input type="checkbox" onchange="a();" required="true" id="term2" > I have read and agree to the <font color="red"><a  onclick="document.getElementById('div_name3').style.display='';
document.getElementById('div_name2').style.display='none';document.getElementById('div_name4').style.display='none';
document.getElementById('div_name5').style.display='none';return false;" 
style="text-decoration:none;" href=''>Privacy Policy</a></font></p>
<br/><br/>
<p style="float: left;"><input type="checkbox" onchange="a();" required="true" id="term3" > I have read and agree to the <font color="red"><a  onclick="document.getElementById('div_name4').style.display='';
document.getElementById('div_name2').style.display='none';document.getElementById('div_name3').style.display='none';
document.getElementById('div_name5').style.display='none';return false;"  
style="text-decoration:none;" href=''>User Account Policy</a></font></p>
<br/><br/>
<p style="float: left;"><input type="checkbox" onchange="a();" required="true" id="term4" > I have read and agree to the <font color="red"><a  onclick="document.getElementById('div_name5').style.display='';
document.getElementById('div_name2').style.display='none';document.getElementById('div_name3').style.display='none';
document.getElementById('div_name4').style.display='none';return false;" 
style="text-decoration:none;" href=''>Payment Policy</a></font></p>
<br/>
<!---script opened--->
<script>
function a(){if(document.getElementById("term1").checked==true && document.getElementById("term2").checked==true && document.getElementById("term3").checked==true && document.getElementById("term4").checked==true){document.getElementById("button2").hidden=false;}
else document.getElementById("button2").hidden=true;}
</script>
<!---- script closed---->
<input type="text" name="email" id="email" value="<?php echo $email; ?>"hidden="true" border="none"/>
<input type="text" name="country_code" id="country_code" value="<?php echo $country_code; ?>"hidden="true" border="none"/>
<input type="text" name="user" id="user" value="<?php echo $user ; ?>"hidden="true" border="none"/>
<input type="text" name="fname" id="fname" value="<?php echo $fname ; ?>"hidden="true" border="none"/>
<input type="text" name="enumc" id="enumc" value="<?php echo $enumc ; ?>"hidden="true" border="none"/>
<input type="text" name="company" id="company" value="<?php echo $company ; ?>"hidden="true" border="none"/>
<input type="text" name="designation" id="designation" value="<?php echo $designation ; ?>"hidden="true" border="none"/>
<input type="text" name="web" id="web" value="<?php echo $url ; ?>"hidden="true" border="none"/>
<input type="text" name="pass" id="pass" value="<?php echo $w1 ; ?>"hidden="true" border="none"/>
<input type="text" name="mobile" id="mobile" value="<?php echo $mobile ; ?>"hidden="true" border="none"/>
<input type="text" name="Finance" id="Finance" value="<?php echo $Finance ; ?>"hidden="true" border="none"/>
<input type="text" name="CRM" id="CRM" value="<?php echo $CRM ; ?>"hidden="true" border="none"/>
<input type="text" name="HR" id="HR" value="<?php echo $HR ; ?>"hidden="true" border="none"/>
<input type="text" name="RMS" id="RMS" value="<?php echo $RMS ; ?>"hidden="true" border="none"/>
<input type="text" name="Job_portal" id="Job_portal" value="<?php echo $Job_portal ; ?>"hidden="true" border="none"/>
<input type="text" name="subuser" id="subuser" value="<?php echo $subuser ; ?>"hidden="true" border="none"/>
</P>
<br/><br/><br/><br/>
<p>
<input type="submit" name="button2" id="button2" hidden value="Next" style="-webkit-border-radius:3px; font-size:13px; background:#4e97cc; color:white; font-weight:bold; font-family: 'Noto Sans', sans-serif; height:40px; width:110px; " ></a>
<input type="button" name="button1" id="button1" value="Back" onclick="history.go(-1)" style="-webkit-border-radius:3px; font-size:13px; font-weight:bold; font-family: 'Noto Sans', sans-serif;background:#4e97cc; color:white;  height:40px; width:110px;"></p>
</form>
<hr>
<p>
<font style="font-weight:bold;color:red;">NOTE </font><b>: Make sure that, You enable all the checkboxes in order to proceed.</b>
</p>
</div>
<br><br><br>

</div>
</center>
<footer>
	<div class="row">
		<div class="large-6 columns">
			<ul class="inline-list" style="font-size:13px;width:850px;">
			
			  <li class="copyright"> <a href="http://www.thrivembs.com/Erp/footer.html#TERMS AND CONDITIONS">Terms & Conditions</a></li>
			  <li class="copyright"> |</li>
			   <li class="copyright"> <a href="http://www.thrivembs.com/Erp/footer.html#PRIVACY POLICY">Privacy Policy</a></li>
			 <li class="copyright"> |</li>
			  <li class="copyright"><a href="http://www.thrivembs.com/Erp/footer.html#USER ACCOUNT POLICY">User Account Policy</a></li>
			  <li class="copyright"> |</li>
			   <li class="copyright"> <a href="http://www.thrivembs.com/Erp/footer.html#PAYMENT POLICY">Payment Policy</a></li>
			   <li class="copyright"> |</li>
			   

			   <li class="copyright"> <a href="http://thrivesmarter.com/">All Rights Reserved &copy;  THRIVE SMARTER</a></li>
			   </font>
  			</ul>
		</div>
		<div class="large-6 columns">
			<ul class="inline-list social-media right" style="margin-left:50px;">
				<li><a href="#" class="icon icon-facebook"></a></li>
				<li><a href="#" class="icon icon-twitter"></a></li>
				<li><a href="#" class="icon icon-linkedin"></a></li>
		
			</ul>
		</div>
	</div>
	

</footer>	
</body>
<!--- body closed---->
</html>
<!---html closed--->