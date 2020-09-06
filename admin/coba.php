<?php  
	include 'functions.php';

	$keyword 	= $_GET['keyword']; 
	
	$tampil 	= tampilpendonor("SELECT nomorkantongpendonor FROM pendonor 
								WHERE nomorkantongpendonor LIKE '%$nomorkantongpendonor%' ");

?>
	
           
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-8">
                <input type="text" name="nomorkantongdarah" class="form-control" value="">
              </div>
            