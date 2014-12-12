
   <?php
   include '../../lib/config.php';
   include '../../lib/function.php';
   $planting_process_id = $_GET['planting_process_id'];
   ?>
                             <div class="title_page"> Data Treatment</div>
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                     <table id="example3" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                            	<th>Tanggal</th>
                                                <th>Tipe Treatment</th>
                                                <th>Keterangan</th>
                                                <th>Config</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           

                                               <?php
                                           $no_treatment = 1;
										   $query_treatment = mysql_query("select a.*, b.treatment_type_name from treatments a 
										   								join treatment_types b on b.treatment_type_id = a.treatment_type_id
										   	where planting_process_id = '$planting_process_id' order by treatment_id");
                                            while($row_treatment = mysql_fetch_array($query_treatment)){
                                            ?>
                                            <tr>
                                              <td><?= $no_treatment?></td>
                                              <td><?= format_date($row_treatment['treatment_date'])?></td>
                                              <td><?= $row_treatment['treatment_type_name']?></td>
                                              <td><?= $row_treatment['treatment_description']?></td>
                                              <td style="text-align:center;">

                                                    <a href="#" onClick="edit_data_treatment(<?= $planting_process_id.",". $row_treatment['treatment_id'] ?>)"  class="btn btn-default" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $row_treatment['treatment_id']; ?>,'treatment.php?page=delete&planting_process_id=<?= $row_treatment['planting_process_id']?>&id=')" class="btn btn-default" ><i class="fa fa-trash-o"></i></a>

                                                </td>
                                            </tr>
                                            <?php
											$no_treatment++;
                                            }
                                            ?>
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="10"><a href="#" class="btn btn-success " onClick="add_data_treatment(<?= $planting_process_id?>)" >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->