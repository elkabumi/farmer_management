

              <div class="col-md-12">
              
               <div class="title_page"> Data Panen</div>
              
                    <div class="row">
                        <div class="col-xs-12">
                            
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            	<th width="5%">No</th>
                                                <th>Tanggal Panen</th>
                                                <th>Luas Tanah (m3)</th>
												<th>Lokasi</th>
												<th>Estimasi</th>
												<th>Bobot Tebu</th>
                                                <th>Bablur</th>
												<th>Sample</th>
                                                <th width="10%">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $no_item = 1;
                                            while($row_item = mysql_fetch_array($query_item)){
												
                                            ?>
                                            <tr>
                                            	<td><?= $no_item ?></td>
												<td><?= format_date($row_item['planting_process_harvest_date']); ?></td>
                                                <td><?= $row_item['land_area']?></td>
												<td><?= $row_item['location_name'] ?></td>
                                                <td><? echo "" ?></td>
												<td><? echo "" ?></td>
                                                <td><? echo "" ?></td>
                                                <td><? echo "" ?></td>
                                                <td style="text-align:center;">
                                                    <a href="search_harvest.php?page=form_detail&id=<?= $row_item['planting_process_id']?>&date=<?= $_GET['date']; ?>&locations=<?= $i_location_id ?>&varieties=<?= $i_varieties_id ?>&planting_distance_models=<?= $i_planting_distances_model_id ?>&seeds=<?= $i_seed_id ?>" class="btn btn-default" >Detail</a>
                                                    </td>
                                                 </tr>
                                            <?php
											$no_item++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                         
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                  
			</div>
                