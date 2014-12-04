<!-- Content Header (Page header) -->
        
                 <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
              Simpan berhasil
                </div>
           
                </section>
                <?php
                }
                ?>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->

                          
                          

                             <form action="<?= $action?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                    
                                   
                                        <div class="col-md-12">
                                        
                                        
                                        <div class="col-md-6">
                                			<div class="form-group"> 
                                                <label>Lokasi</label>
                                          		 <select id="basic" name="i_location_id" class="selectpicker show-tick form-control" data-live-search="true">
											<?php
                                            $query_location = mysql_query("select * from locations order by  location_name");
                                            while($row_location = mysql_fetch_array($query_location)){
                                            ?>
                                            <option value="<?= $row_location['location_id']?>" <?php if($row_location['location_id'] == $row->location_id){ ?>selected <?php } ?>  ><?= $row_location['location_name'] ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select>            
                                       		 </div>
                                  	  </div>
                                      <div class="col-md-6">
                                      		<div class="form-group">
                                            <label>Luas Lahan</label>
                                            <input readonly="readonly" required type="text" name="i_area" class="form-control" value="<?= $row->land_area ?>"/>     
                                       		</div>
                                       </div>
                                       </div>
                                       <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                <div class="box-footer">
                                <input class="btn btn-info" type="submit" value="Save"/>
                                <a href="<?= $close_button?>" class="btn btn-info" >Close</a>
</div>
                                
                          
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
              
              <?php
              if(isset($_GET['id'])){
			  ?>
                    <div class="row">
                        <div class="col-xs-12">
                            
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <th>Nama Petani</th>
                                                <th>Luas Lahan</th>
                                              	<th>Config</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $q_farmer_land = select_farmer_land($id);
											$no_farmer_land = 1;
                                            while($r_farmer_land = mysql_fetch_array($q_farmer_land)){
                                            ?>
                                            <tr>
                                            	<td><?= $no_farmer_land?></td>
                                                <td><?= $r_farmer_land['farmer_name']?></td>
                                                <td><?= $r_farmer_land['land_area']?></td>
                                              
                                                 <td style="text-align:center;">

                                                    <a href="land.php?page=form_farmer_land&f_id=<?= $r_farmer_land['farmer_land_id']?>&id=<?= $_GET['id']?>" class="btn btn-danger" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $r_farmer_land['farmer_land_id']; ?>,'land.php?page=delete_farm_land&id=<?= $_GET['id'] ?>&f_id=')" class="btn btn-danger" ><i class="fa fa-trash-o"></i></a>

                                                </td> 
                                            </tr>
                                            <?php
											$no_opsi++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="10"><a href="land.php?page=form_farmer_land&id=<?= $_GET['id']?>" class="btn btn-info " >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                    <?php
			  }
					?>

                </section><!-- /.content -->