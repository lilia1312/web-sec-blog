# Web-sec-blog

➔ Login (should not be visible when logged in)
➔ Log out (should be visible only when logged in)
➔ Register User (should not be visible when logged in)
➔ Privacy Policy (always visible)

Register a new user (succeeds, refresh database before and after to show the change)
• LOGIN: wrong user, wrong password (fails)
• LOGIN: right user, wrong password (fails)
• LOGIN: trying to use SQL injection: ' OR 1=1 for username and password (fails)
• LOGIN: Right username and password (succeeds and tabs change appropriately)
• Show the privacy policy (on recording you should slowly scroll through) 
• LOG OUT: logging out changes the tabs appropriately
