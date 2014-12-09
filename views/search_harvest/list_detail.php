

              <div class="col-md-12">
              
               <div class="title_page"> Data Petani</div>
              
                    <div class="row">
                        <div class="col-xs-12">
                            
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            	<th width="5%">No</th>
                                                <th>Kode Kontrak</th>
                                                <th>No KTP</th>
                                                <th>Nama Petani</th>
                                                <th>Alamat</th>
												<th>Luas Lahan</th>
												
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $no_detail = 1;
                                            while($row_detail = mysql_fetch_array($query_detail)){
												
                                            ?>
                                            <tr>
                                            	<td><?= $no_detail ?></td>
												<td><?= $row_detail['farmer_contract_code']; ?></td>
                                                <td><?= $row_detail['farmer_identity_number']?></td>
												<td><?= $row_detail['farmer_name'] ?></td>
                                                <td><?= $row_detail['farmer_address'] ?></td>
												<td><?= $row_detail['farmer_land_area'] ?></td>
                                              
                                                 </tr>
                                            <?php
											$no_detail++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                         
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                  
			</div>
                