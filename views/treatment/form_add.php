                    
                          <div class="title_page">Form Add Treatment</div>

                             <form action="<?= $action ?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                    
                                     
                                        <div class="col-md-12">
                                        
                                        
                                        
                                           <div class="form-group">
                                        <label>Tanggal Treatment</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" required class="form-control pull-right" id="date_picker_new" name="i_date" value=""/>
                                           
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                        
                                          <div class="form-group">
                                           <label>Tipe Treatment</label>
                                            <select id="basic" name="i_treatment_type_id" class="selectpicker_new show-tick form-control" data-live-search="true" >
                                    
                                           <?php
                                        $query_treatment_type = mysql_query("select * from treatment_types order by treatment_type_id");
                                        while($row_treatment_type = mysql_fetch_array($query_treatment_type)){
                                        ?>
                                         <option value="<?= $row_treatment_type['treatment_type_id']?>"><?= $row_treatment_type['treatment_type_name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                          
                                        </select>
                                        </div>
                                        
                                 		  <div class="form-group">
                                            <label>Keterangan</label>
                                             <textarea class="form-control" name="i_description" rows="3" placeholder="Masukkan keterangan ..."></textarea>
                                        </div>
                                       
                                        </div>
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                  <div class="box-footer">
                                <input class="btn btn-success" type="submit" value="Save"/>
                                <a href="#" class="btn btn-success" onclick="hidden_data_treatment(<?= $planting_process_id?>)" >Close</a>
                             
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
<script type="text/javascript">
        $(function() {
        
       		 	$('#date_picker_new').datepicker({
					format: 'dd/mm/yyyy'
				});
				
				
		});
</script>