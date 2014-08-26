<?php 
require_once ('include/top.php'); 
$profilePara = '
Megan is the President of Brown CPA, Inc. She graduated from Purdue University with her accounting degree 			in 2002. She is a member of the American Institute of Certified Public Accountants and the Indiana CPA society. Her experience includes tax preparation, tax planning, financial statements, payroll, audit support, and QuickBooks.
';
?>

<section id="profile-2">
	<h3>Profile</h3>
	<p>"It would be my pleasure to put my extensive experience to work for you"</p>
	<section>
    	<article>
        	<small>Megan D. Brown, CPA</small>
            <img src="img/brownphoto.jpg" />
    	</article>
    	<article>
        	<p>
        		<?php echo $profilePara; ?>
            </p>
    	</article>
    </section>
</section>

<?php
	require_once ('include/bottom.php');
?>