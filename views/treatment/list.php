
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
                        <div class="col-xs-12">
                            
                             <div class="title_page"> <?= $title ?></div>
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                            	<th>Tanggal</th>
                                                <th>Tanah</th>
                                               
                                                <th>Varietas</th>
                                                <th>Model Jarak Tanam</th>
                                                <th>Jarak Tanam</th>
                                                <th>Jenjang Bibit</th>
                                                <th>Data Bibit</th>
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
                                              <td><?= $row['location_name']." (".get_land_area($row['land_id']).")"; ?></td>
                                              <td><?= $row['varieties_name']?></td>
                                              <td><?= $row['planting_distance_model_name']?></td>
                                              <td><?= $row['planting_process_planting_distance']." cm"?></td>
                                              <td><?= $row['planting_process_seedling_stage']." cm"?></td>
                                              <td><?= $row['seed_name']?></td>
                                              <td style="text-align:center;">

                                                    <a href="treatment.php?page=list_treatment&planting_process_id=<?= $row['planting_process_id']?>" class="btn btn-danger" >Treatment</a>
                                                

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
                    </div>

                </section><!-- /.content -->