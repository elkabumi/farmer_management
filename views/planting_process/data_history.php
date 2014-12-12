<?php			  
	include'../../lib/config.php';
	include'../../lib/function.php';
	$land_id 	 = $_GET['land_id'];
	
		
?>

<section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                             <div class="title_page"> History Tanam</div>
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                            	<th>Tanggal Tanam</th>
                                                <th>Tanggal Giling</th>
                                                <th>Tanggal Panen</th>
                                                <th>Tanah</th>
                                                <th>Varietas</th>
                                                <th>Model Jarak Tanam</th>
                                                <th>Jarak Tanam</th>
                                                <th>Jenjang Bibit</th>
                                                <th>Data Bibit</th>
                                             
                                                  
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
										   <?php
                                           $no = 1;
										   $query=mysql_query('select a.*, b.land_area, c.varieties_name, d.planting_distance_model_name, e.seed_name, f.location_name
		from planting_processes a 
		join lands b on b.land_id = a.land_id
		join varieties c on c.varieties_id = a.varieties_id
		join planting_distance_models d on d.planting_distance_model_id = a.planting_distance_model_id
		join seeds e on e.seed_id = a.seed_id
		join locations f on f.location_id = b.location_id
		WHERE a.land_id = '.$land_id.'
		order by planting_process_id ');
                                           while($row = mysql_fetch_array($query)){
                                            ?>
                                            <tr>
                                              <td><?= $no?></td>
                                              <td><?= format_date($row['planting_process_date'])?></td>
                                              <td><?= format_date($row['planting_process_milled_date'])?></td>
                                              <td><?= format_date($row['planting_process_harvest_date'])?></td>
                                              <td><?= $row['location_name']." (".get_land_area($row['land_id']).")";?></td>
                                              <td><?= $row['varieties_name']?></td>
                                              <td><?= $row['planting_distance_model_name']?></td>
                                              <td><?= $row['planting_process_planting_distance']." cm"?></td>
                                              <td><?= $row['planting_process_seedling_stage']." cm"?></td>
                                              <td><?= $row['seed_name']?></td>
                                        
                                            </tr>
                                            <?php
											$no++;
                                           }
                                            ?>
                                           
                                          
                                        </tbody>
                                         
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
               
  
                                         

                                  
               