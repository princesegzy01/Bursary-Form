<?php
/**
 * Creates the submenu page for the plugin.
 *
 * @package Custom_Admin_Settings
 */
 
/**
 * Creates the submenu page for the plugin.
 *
 * Provides the functionality necessary for rendering the page corresponding
 * to the submenu with which this page is associated.
 *
 * @package Custom_Admin_Settings
 */
class Submenu_Page {
 
        /**
     * This function renders the contents of the page associated with the Submenu
     * that invokes the render method. In the context of this plugin, this is the
     * Submenu class.
     */
    public function detail_page() {

    	global $wpdb;

	    	if(!isset($_GET['form_id'])){
	    		exit;
	    	}	

	    	$form_id = trim($_GET['form_id']);
    	 $result = $wpdb->get_results( " SELECT * FROM  wp_bursary_form where id = '$form_id' "  );
?>
	

        <style type="text/css">
        	table{
        		border-collapse: collapse;
        		width: 100%;
        	}
        	th {
			    background-color: #4CAF50;
			    color: white;
			}
        	th, td {
			    padding: 10px;
			    text-align: left;
			     height: 15px;
			     border-bottom: 1px solid #ddd;
			     font-weight: 300;
			     
			}

			tr:hover {
				background-color: #f5f5f5;
			}

			.td-bold{
				font-weight: 900;
			}

        </style>

	<table style="border-collapse: collapse; width: 95%;">
		
		<tr>
				
			
			<td colspan="3"> <img src="../themes/spacious/passport/<?php echo $result[0]->passport; ?>" width="300"></td>

		</tr>

		<tr>
				
			<td class="td-bold">Form ID :</td>
			<td colspan="2"> <?php echo $result[0]->id; ?></td>

		</tr>
		<tr>
		
			<td class="td-bold">Surname</td>
			<td> <?php echo $result[0]->surname; ?></td>

			<td class="td-bold">Firstname</td>
			<td><?php echo $result[0]->firstname; ?></td>

			<td class="td-bold">Othernames</td>
			<td><?php echo $result[0]->othernames; ?></td>
		</tr>
		
		<tr>
			<td class="td-bold">Date of Birth : </td>
			<td><?php echo $result[0]->dob; ?></td>

			<td class="td-bold">Gender : </td>
			<td><?php echo $result[0]->gender; ?></td>

			<td class="td-bold">Religion :  </td>
			<td><?php echo $result[0]->religion; ?></td>
		</tr>
		
		<tr>
			<td class="td-bold">Marital Status : </td>
			<td><?php echo $result[0]->maritalstatus; ?></td>
		
			<td class="td-bold">Nationality</td>
			<td><?php echo $result[0]->nationality; ?></td>
		
			<td class="td-bold">State of Origin</td>
			<td><?php echo $result[0]->stateoforigin; ?></td>
		</tr>
		<tr>
			<td class="td-bold">Local Government</td>
			<td><?php echo $result[0]->lgovt; ?></td>

			<td class="td-bold">Phone Number</td>
			<td><?php echo $result[0]->mobilenumber; ?></td>

			<td class="td-bold">Email : </td>
			<td><?php echo $result[0]->email; ?></td>
		</tr>
		<tr>
			<td class="td-bold">Postal Addresss</td>
			<td><?php echo $result[0]->postaladdress; ?></td>

			<td></td>
			<td></td>

			<td></td>
			<td></td>
		</tr>

		<tr>
			<td class="td-bold">Permanent Verifieable Address : </td>
			<td><?php echo $result[0]->pvaddress; ?></td>

			<td></td>
			<td></td>

			<td></td>
			<td></td>
		</tr>

		<tr>
			<td class="td-bold">Next of Kin</td>
			<td><?php echo $result[0]->nextofkin; ?></td>

			<td class="td-bold">Relationship to Next of Kin :</td>
			<td><?php echo $result[0]->relationshiptokin; ?></td>

			<td class="td-bold">Next of Kin's Phone Number :</td>
			<td><?php echo $result[0]->phoneofkin; ?></td>
		</tr>

		<tr>
			<td class="td-bold">Next of Kin Address</td>
			<td><?php echo $result[0]->addressofkin; ?></td>

			<td></td>
			<td></td>

			<td></td>
			<td></td>
		</tr>

		<tr>
			<td></td>
			<td></td>

			<td></td>
			<td></td>

			<td></td>
			<td></td>
		</tr>

		<tr>
			<td class="td-bold">Present Institution :</td>
			<td><?php echo $result[0]->presentinstitution; ?></td>

			<td class="td-bold">Matric No / Level :</td>
			<td><?php echo $result[0]->matric; ?></td>

			<td class="td-bold">Faculty : </td>
			<td><?php echo $result[0]->faculty; ?></td>
		</tr>

		<tr>
			<td class="td-bold">School Portal</td>
			<td><?php echo $result[0]->schoolportal; ?></td>

			<td class="td-bold">Portal Username</td>
			<td><?php echo $result[0]->portalusername; ?></td>

			<td class="td-bold">Portal Password</td>
			<td><?php echo $result[0]->portalpassword; ?></td>
		</tr>

		<tr>
			<td class="td-bold">Year Entered</td>
			<td><?php echo $result[0]->yearentered; ?></td>

			<td class="td-bold">Present Year</td>
			<td><?php echo $result[0]->presentyear; ?></td>

			<td class="td-bold">Graduating Year</td>
			<td><?php echo $result[0]->graduatingyear; ?></td>
		</tr>

		<tr>
			<td class="td-bold">Parent Name</td>
			<td><?php echo $result[0]->parentname; ?></td>

			<td class="td-bold">Parent Address</td>
			<td><?php echo $result[0]->parentoccupation; ?></td>

			<td class="td-bold">Parent Occupation</td>
			<td><?php echo $result[0]->parentplaceofwork; ?></td>
		</tr>

		<tr>
			<td class="td-bold">Parent Place of Work : </td>
			<td><?php echo $result[0]->parentplaceofwork; ?></td>

			<td class="td-bold" >Parentannual Income : </td>
			<td><?php echo $result[0]->parentannualincome; ?></td>

			<td></td>
			<td></td>
		</tr>
		
		<tr>
			<td class="td-bold">Date Submitted : </td>
			<td><?php echo $result[0]->date_submitted; ?></td>

			<td></td>
			<td></td>

			<td></td>
			<td></td>
		</tr>

		
	</table>

  <?php  }


    public function render() {
        // echo 'This is the basic submenu page.';

        global $wpdb;
        $results = $wpdb->get_results( 'SELECT * FROM wp_bursary_form order by id desc' );
        ?>

        <style type="text/css">
        	table{
        		border-collapse: collapse;
        		width: 100%;
        	}
        	th {
			    background-color: #4CAF50;
			    color: white;
			}
        	th, td {
			    padding: 15px;
			    text-align: left;
			     height: 30px;
			     border-bottom: 1px solid #ddd;
			     
			}

			tr:hover {
				background-color: #f5f5f5;
			}

        </style>
        <table>
        	<thead>
        		<th>Form ID</th>
        		<th>Surname</th>
        		<th>First Name</th>
        		<th>Other name</th>
        		<th>DOB</th>
        		<th>Gender</th>
        		<th>Marital Status</th>
        		<th>State of Origin</th>
        		<th>Phone number</th>
        		<th>Local Government</th>
        		<th></th>
        	</thead>

        	<tbody>
        		
        		<?php

	        		 foreach ($results as $form) {
				     
				        ?>
        		<tr>
        			<td><?php echo $form->id; ?></td>
        			<td><?php echo $form->surname; ?></td>
        			<td><?php echo $form->firstname; ?></td>
        			<td><?php echo $form->othernames; ?></td>
        			<td><?php echo $form->dob; ?></td>
        			<td><?php echo $form->gender; ?></td>
        			<td><?php echo $form->maritalstatus; ?></td>
        			<td><?php echo $form->stateoforigin; ?></td>
        			<td><?php echo $form->mobilenumber; ?></td>
        			<td><?php echo $form->lgovt; ?></td>
        			<td> 
        				<a href="<?php echo 'options-general.php?page=busary-detail-page&form_id='.$form->id; ?>">
        					View Details
        				</a>
        			</td>
        		</tr>
        			<?php } ?>
        	</tbody>
        </table>

       
<?php
    }
}