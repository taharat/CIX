<html>
     <head>
     	<title>CRUD Project</title>
     	<link rel="stylesheet" type="text/css" href=" asset/css/bootstrap.min.css">
     	<link rel="stylesheet" type="text/css" href=" asset/css/style.css">
     </head>

    <body>
        <div class="container">
        	<div class="row">
                <div class ="col-md-offset-3 col-md-6 col-md-offset-3"
        		<h4 class="text-center"> Welcome to CRUD Project </h4>
                <h4 class="text-center"><?php echo $this->session->flashdata('msg');?></h4>
        		<?php echo form_open('Maincontroller/create');?>
                <?php echo validation_errors();?>

        		<table class="table text-center">
        			<tr>
        				<td>Username</td>
        				<td>:</td>
        				<td>
        					<input type="text" name="username">

        				</td>
        			</tr>

        			<tr>
        				<td>Email</td>
        				<td>:</td>
        				<td>
        					<input type="email" name="email" >

        				</td>
        			</tr

        			<tr>
        				<td>Password</td>
        				<td>:</td>
        				<td>
        					<input type="password" name="password" >

        				</td>
        			</tr>
                    <th>
                        <td>
                            <input type="submit" value="Register" name="register" class="btn btn-primary">



                        </td>



                    </th>



        		</table>


				<?php echo form_open();?>
            </div>
			</div>
        </div>


    </body>



</html>