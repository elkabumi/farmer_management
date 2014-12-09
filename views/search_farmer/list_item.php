

              
                    <div class="row">
                        <div class="col-xs-12">
                            
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            	<th width="5%">No</th>
                                                <th>Tanggal</th>
                                                <th>Luas Tanah</th>
												<th>Lokasi</th>
												<th>Estimasi</th>
												<th>Bobot Tebu</th>
                                                <th>Bablur</th>
												<th>Sample</th>
                                                <!--<th width="20%">Config</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $no_item = 1;
                                            while($row_item = mysql_fetch_array($query_item)){
												
                                            ?>
                                            <tr>
                                            	<td><?= $no_item ?></td>
												<td><?= $row_item['planting_process_harvest_date']; ?></td>
                                                <td><?= $row_item['land_area']?></td>
												<td><?= $row_item['location_name'] ?></td>
                                                <td><? echo "" ?></td>
												<td><? echo "" ?></td>
                                                <td><? echo "" ?></td>
                                                <td><? echo "" ?></td>
                                                <!--<td style="text-align:center;">
                                                    <a href="edit_transaction.php?page=form_detail&id=<?= $row_item['truck_id']?>&date1=<?= $date1?>&date2=<?=$date2?><? if($i_owner_id != '0'){?>&owner=<?= $row_item['owner_id']?><? }else{ ?>&owner=0<? } ?>" class="btn btn-primary" >Detail</a>-->
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
                  

                