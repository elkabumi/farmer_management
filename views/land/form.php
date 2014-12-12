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

                           <div class="title_page"> <?= $title ?></div>
                          

                             <form action="<?= $action?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                    
                                   
                                        
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input required readonly="readonly" type="text" name="i_code" class="form-control" placeholder="Masukan Kode Kontrak..." value="<?= $row->land_code ?>"/>
                                        </div>
                                        </div>
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
                                            <label>Luas Lahan (m3)</label>
                                            <input readonly="readonly" required type="text" name="i_area" class="form-control" value="<?= get_land_area($row->land_id) ?>"/>     
                                       		</div>
                                       </div>
                                     
                                       <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                <div class="box-footer">
                                <input class="btn btn-success" type="submit" value="Save"/>
                                <a href="<?= $close_button?>" class="btn btn-success" >Close</a>
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
                             <div class="title_page">Data Tanah Petani</div>
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <th>Nama Petani</th>
                                                <th>Luas Lahan (m3)</th>
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
                                                <td><?= $r_farmer_land['farmer_land_area']?></td>
                                              
                                                 <td style="text-align:center;">

                                                    <a href="land.php?page=form_farmer_land&f_id=<?= $r_farmer_land['farmer_land_id']?>&id=<?= $_GET['id']?>" class="btn btn-default" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $r_farmer_land['farmer_land_id']; ?>,'land.php?page=delete_farm_land&id=<?= $_GET['id'] ?>&f_id=')" class="btn btn-default" ><i class="fa fa-trash-o"></i></a>

                                                </td> 
                                            </tr>
                                            <?php
											$no_farmer_land++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="10"><a href="land.php?page=form_farmer_land&id=<?= $_GET['id']?>" class="btn btn-success " >Add</a></td>
                                               
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