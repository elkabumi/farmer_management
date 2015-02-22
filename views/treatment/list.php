<script type="text/javascript">

function load_data_treatment(id)
{
	$("#table_treatment").load('treatment.php?page=list_treatment&planting_process_id='+id); 
}
	
function hidden_data_treatment(id)
{
	$("#table_treatment").load('treatment.php?page=list_treatment&planting_process_id='+id); 
}
	
function add_data_treatment(id)
{
	 $("#table_treatment").load('treatment.php?page=form_add_treatment&planting_process_id='+id); 
}
	

function edit_data_treatment(planting_process_id, id)
{
	 $("#table_treatment").load('treatment.php?page=form_edit_treatment&planting_process_id='+planting_process_id+'&id='+id); 
}

	
</script>
                <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Simpan Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 2){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Edit Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 3){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Delete Berhasil
                </div>
           
                </section>
                <?php
                }
                ?>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            
                             <div class="title_page"> <?= $title ?></div>
                            
                            <div class="box">
                              <div class="box-header">
                              <div class="col-md-12">
                             <form action="treatment.php?page=search" method="post" enctype="multipart/form-data" role="form">
                                 <input type="text" required class="form-control" name="i_search" value="<?= $search ?>" style="margin-bottom:10px; margin-top:10px;" placeholder="Cari disini ..."/>
                                 </form>
                                 </div>
                              </div>
                                <div class="box-body2 table-responsive">
                                    <table id="example99" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                            	<th>Tanggal Tanam</th>
                                                <th>Tanah</th>
                                                <th>Petani</th>
                                                <th>Config</th>
                                                  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $no = 1;
                                            while($row = mysql_fetch_array($query)){
                                            ?>
                                            <tr>
                                              <td><?= $no?></td>
                                              <td><?= format_date($row['planting_process_date'])?></td>
                                              <td><?= $row['land_code']." - ".$row['location_name']." (".get_land_area($row['land_id'])." m2)"; ?></td>
                                              <td><?= $row['pemilik_tanah'] ?></td>
                                            
                                              <td style="text-align:center;">

                                                    <a href="#" onclick="load_data_treatment(<?= $row['planting_process_id']?>)" class="btn btn-default" >Treatment</a>
                                                

                                                </td>
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
                        
                        
                          
                         <div class="col-md-6" id="table_treatment">

                         <?php
                         $planting_process_id = (isset($_GET['planting_process_id'])) ?  $_GET['planting_process_id'] : null;
						 if($planting_process_id){
						 
						include 'list_treatment.php';
						 }
						 
						 ?>
                        </div>

						
                     
                        
                       
                        
                        
                    </div>

                </section><!-- /.content -->