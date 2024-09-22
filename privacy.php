<?php
  require 'config.php';
  require 'database.php';
  $g_title = BLOG_NAME . ' - Privacy';
  $g_page = 'privacy';
  require 'header.php';
  require 'menu.php';
  
  $posts = find_all_blogs(BLOG_INDEX_NUM_POSTS);
?>
<div id="all_blogs">
<p>We may collect the following types of information:
Personal Information: When you register, log in, or interact with our services, we may collect personally identifiable information, such as your name, email address, and any other information you provide.
Usage Data: We may collect information about how you access and use the Site, including your IP address, browser type, pages visited, time spent on pages, and other diagnostic data.
Cookies: We use cookies and similar tracking technologies to monitor activity on our Site and store certain information. You can control the use of cookies at the individual browser level
We may use the information we collect for various purposes, including:
To provide, maintain, and improve our services.
To notify you about changes to our Site or services.
To allow you to participate in interactive features when you choose to do so.
To provide customer support.
To gather analysis or valuable information so that we can improve our Site.
To monitor the usage of our Site.
We may share your information in the following situations:
With Service Providers: We may employ third-party companies and individuals to facilitate our Site ("Service Providers"), provide the Site on our behalf, perform Site-related services, or assist us in analyzing how our Site is used.
For Legal Reasons: We may disclose your information if required to do so by law or in response to valid requests by public authorities.
The security of your information is important to us, but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your information, we cannot guarantee its absolute security.
Our Site may contain links to other sites that are not operated by us. If you click on a third-party link, you will be directed to that third party's site.
Our services are not directed to anyone under the age of 13. We do not knowingly collect personally identifiable information from children under 13. If you are a parent or guardian and you are aware that your child has provided us with Personal Data, please contact us.</p>
</div>
<?php
  require 'footer.php';
?>
