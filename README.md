# Twitter  


Part-1: User Timeline
Start => User visits your script page.
User will be asked to connect using his Twitter account using Twitter Auth.
After authentication, your script will pull latest 10 tweets from his “home” timeline.
10 tweets will be displayed using a jQuery-slideshow.

Part-2: Followers Timeline
Below jQuery-slideshow (in step#4 from part-1), display list 10 followers (you can take any 10 random followers).
Also, display a search followers box. Add auto-suggest support. That means as soon as user starts typing, his followers will start showing up.
When user will click on a follower name, 10 tweets from that follower’s user-timeline will be displayed in same jQuery-slider, without page refresh (use AJAX).

Part-3: Download Tweets
There will be a download button to download all tweets for logged in user.
Download can be performed in one of the following formats i.e. You choose the format you want. It would act as an advantage if you give the option to download the tweets in all the following formats:
csv, xls, google-spreadhseet, pdf, xml and json formats.
For Google-spreadsheet export feature, your app-user must have Google account. Your app should ask for permission to create spreadsheet on user’s Google-Drive.

Once user clicks download button (after choosing option) all tweets for logged in users should be downloaded.  
   
==>First step to auth of twitter    
link-https://dev.twitter.com/ go to this site and create app of twitter    
change this 3 line of code use your own key,screte which provide by devaloper twitter account      
CONSUMER_KEY xxxxxxxxxxxx    
CONSUMER_SECRET xxxxxxxxx     
OAUTH_CALLBACK Your project regerect url       
  
==>2nd step You have to change drive api key and 
 you can create drive api from this link- https://console.developers.google.com/apis/library?  
 Download client_screte.json file and past in google-drive-api folder   
put your downloaded json file name in function.php      

==>3rd party liberary used    
Bootstrap,jQuery,Twitter oauth,Google Drive API  

[DEMO LINK](https://tweet110.000webhostapp.com)    

