<?php			  
	include'../../lib/config.php';
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
										   $query=mysql_query('SELECT * FROM  planting_processes WHERE land_id = '.$land_id.'');
                                           while($row = mysql_fetch_array($query)){
                                            ?>
                                            <tr>
                                              <td><?= $no?></td>
                                              <td></td>
                                              <td><?= $row['land_id']?></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                        
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
               
  
                                         

                                  
               