

              
                    <div class="row">
                        <div class="col-xs-12">
                            
                             <div class="title_page">Data Tanah</div>
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            	<th width="5%">No</th>
                                                <th>Tanggal</th>
                                                <th>Luas Tanah</th>
												<th>Hamparan Tanah</th>
												<th>Lokasi Lahan</th>
												<th>Jenis Varietas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $no_item = 1;
                                            while($row_item = mysql_fetch_array($query_item)){
												
                                            ?>
                                            <tr>
                                            	<td><?= $no_item ?></td>
												<td><?= $row_item['planting_process_date']; ?></td>
                                                <td><?= $row_item['farmer_land_area']?></td>
												<td><?= get_land_area($row_item['land_id']) ?></td>
                                                <td><?= $row_item['location_name'] ?></td>
												<td><?= $row_item['varieties_name'] ?></td>
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
                  
  </section><!-- /.content -->
                