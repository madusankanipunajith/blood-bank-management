<div class="dashboard-side">
    <div style="text-align: center; font-weight: bold; margin-top: 30px;">Dashboard</div><br>
    <form method="post">
        <div class="contain">
        	<?php
        		$uri= $_SERVER['REQUEST_URI']; 
        	?>
    <li><i class="fa fa-home" aria-hidden="true"></i><a href="https://himal.dev/bloodbank/donor/index" <?php if (strpos($uri, '/donor/index')){ echo "class= \"active\" "; }?> >Home</a></li>
    <li><a href="https://himal.dev/bloodbank/donor/donate_blood/index" <?php if (strpos($uri, '/donor/donate_blood')){ echo "class= \"active\" "; }?> >Donate Blood</a></li>
    
 	<li><a href="https://himal.dev/bloodbank/donor/search_donor/index" <?php if (strpos($uri, '/donor/search_donor')){ echo "class= \"active\" "; }?> >Search Donor</a></li>
    <li><a href="https://himal.dev/bloodbank/donor/donations/index" <?php if (strpos($uri, '/donor/donations')){ echo "class= \"active\" "; }?> >Donations</a></li>
    <li><a href="https://himal.dev/bloodbank/donor/profile/index" <?php if (strpos($uri, '/donor/profile')){ echo "class= \"active\" "; }?> >Profile</a></li>
    <li><a href="https://himal.dev/bloodbank/donor/questionnaire/index">Questionnaire</a></li>
    </div>
    </form>
</div>