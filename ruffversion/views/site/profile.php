<?php use yii\helpers\Html;?>



<!---<div>
    <?php //echo 'Full Name: '. $profile_info->fullname; ?> <br/>
    <?php //echo 'Date of Birth: '. $profile_info->dob; ?> <br/>
    <?php //echo 'Gender: '. $profile_info->gender; ?> <br/>
    <?php //echo 'Year Of Employment: '. $profile_info->yoe; ?> <br/>
    <?php //echo 'Year Of Employment: '. $profile_info->yoe; ?> <br/>
    <?php //echo 'Industry: '. $profile_info->industry; ?> <br/>
    <?php //echo 'Location: '. $profile_info->location; ?> <br/>
    <?php //echo 'Aboutme: '. $profile_info->aboutme; ?> <br/>
    
    Skills
    <?php //echo 'Professional Title: '. $profile_info->title; ?> <br/>
    <?php //echo 'Career Level: '. $profile_info->carlevel; ?> <br/>
    <?php //echo 'Communication Level: '. $profile_info->comlevel; ?> <br/>
    <?php //echo 'Job Level: '. $profile_info->joblevel; ?> <br/>
    Contact
    <?php //echo 'Address: '. $profile_info->address; ?> <br/>
    <?php //echo 'Contact Number: '. $profile_info->phone; ?><br/>
    <?php //echo 'Email Address: '. $profile_info->email; ?><br/>
</div>-->
<!--container for profile elements -->
<div style="background:white;"class="container">
    <!--Title-->
    <h1>Profile</h1>
<br>
<br>
	   <!--Right side of profile -->
        <div class="col-md-4 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                	<div>
        				<img src="http://lorempixel.com/200/200/abstract/1/" alt="Texto Alternativo" class="img-circle img-thumbnail">
        				<h2><?php echo $profile_info->fullname; ?></h2>
        				<p><?php echo 'Gender: '. $profile_info->gender; ?></p>
                        <div class="btn-group">
                            <?php echo 'Years of Employment: '. $profile_info->yoe;?>
                            
                            
                        </div>
        			</div>
        		</div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
    <div class="col-md-12">
    	   <!--Left side of Profile -->
			<h2>Basic Info<small><?php echo ' of '.$profile_info->fullname; ?></small></h2>
			<hr class="style16">
			<div class="row">
				
                <div class="col-xs-12 col-sm-6 col-md-6">
                    
					<div class="form-group">
                       <?php echo '<h3>Full Name:'. $profile_info->fullname.'</h3>'; ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<?php echo '<h3>Date of Birth: '. $profile_info->dob.'</h3>'; ?> <br/>
					</div>
				</div>
			</div>
        
            <div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				<?php echo '<h3>Industry: '. $profile_info->industry.'</h3>'; ?>
                
        </div>
        </div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<?php echo '<h3>Location: '. $profile_info->location.'</h3>'; ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<?php echo '<h3> &nbsp Aboutme:'. $profile_info->aboutme.'</h3>'; ?> 
					</div>
                    
				</div>
			</div>
            
			
			
		
	
</div>
</div>
        </div>
            

<hr class="style16">
        <h2>Skills</h2>
<table cellpadding="10">
    <tr width="auto">
        <?php echo '<td width="200" style="padding:80px 20px 5px 10px" > <h4>Professional Title:-</h4></td> <td><div id="message" class="message"><h3>'.$profile_info->title.'.</h3></div></td>';?>
        <?php echo '<td width="200" style="padding:80px 20px 5px 50px"><h4>Career Level:-</h3></td> <td><div id="message" class="message"><h3> '. $profile_info->carlevel.'%</h3></div></td>'; ?>
    
       <?php echo '<td width="230" style="padding:80px 20px 5px 15px" ><h4>Communication Level:-</h4></td> <td><div id="message" class="message"><h3>'. $profile_info->comlevel.'%</h3></div></td>'; ?> 
        <?php echo '<td width="130" style="padding:80px 20px 5px 20px"><h4>Job Level:-</h4></td><td> <div id="message" class="message"><h3> '. $profile_info->joblevel.'%</h3></div></td>'; ?>
    </tr>
</table>
<hr class="style16">
        <h2>Contacts</h2><br>
<?php echo '<h4>Address: '. $profile_info->address.'</h4>'; ?> <br/>
<?php echo '<h4>Contact Number: '. $profile_info->phone.'</h4>'; ?><br/>
<?php echo '<h4>Email Address: '. $profile_info->email.'</h4>'; ?><br/>
<?php echo '<h4>Website: '. $profile_info->website.'</h4>'; ?><br/>
        <br>
        <br>
</div>