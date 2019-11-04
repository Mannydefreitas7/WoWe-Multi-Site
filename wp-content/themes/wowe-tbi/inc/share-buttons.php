<?php
   // Get current page URL 
   $sb_url = urlencode(get_permalink());
   $sb_sitename = home_url();
   // Get current page title
   $sb_title = str_replace( ' ', '%20', get_the_title());
   
   // Get Post Thumbnail for pinterest
   $sb_thumb = get_the_post_thumbnail();

   // Construct sharing URL without using any script
   $twitterURL = 'https://twitter.com/intent/tweet?text='.$sb_title.'&amp;url='.$sb_url.'&amp;via=wpvkp';
   $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$sb_url;
   $bufferURL = 'https://bufferapp.com/add?url='.$sb_url.'&amp;text='.$sb_title;
   $whatsappURL = 'whatsapp://send?text='.$sb_title . ' ' . $sb_url;
   $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$sb_url.'&amp;title='.$sb_title;
   $emailURL = 'mailto:type%20email%20address%20here?subject=I%20wanted%20to%20share%20this%20post%20with%20you%20from%20' . $sb_sitename . '&body=' . $sb_title . '&#32;&#32;' . $sb_url . '"%20title="Email%20to%20a%20friend"%20target="_blank';

  if(!empty($sb_thumb)) {
       $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb[0].'&amp;description='.$sb_title;
   }
   else {
       $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;description='.$sb_title;
   }

   // Based on popular demand added Pinterest too
   $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$sb_url.'&amp;media='.$sb_thumb[0].'&amp;description='.$sb_title;
   $gplusURL ='https://plus.google.com/share?url='.$sb_title.'';
   ?>