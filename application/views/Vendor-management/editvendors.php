   


    <section id="main-content" class="">
        <section class="wrapper">
        <!-- page start-->
        <!-- page start-->
        

        <div class="row">
        <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Edit Vendor
                <a href='<?php echo base_url(); ?>Vendormanagement/ ' ><button type="button" class="btn btn-primary btn pull-right" >Back</button></a>
            </header>
            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="post" action="<?php echo base_url();?>Vendormanagement/profile?m=upd&id=<?php echo $listing['result'][0]->id;?>" onsubmit="return validateForm();">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Vendor Name<span style="color: red;">*</span>:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control test" name="name" id="name" label="Name" value="<?php echo  ucfirst($listing['result'][0]->name); ?>">
                            <span id="name_error" style="color:red"></span><br>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-6">
                            <!-- <input type="text" class="form-control test" name="details"  id="details" label="Details" value="<?php //echo  ucfirst($listing['result'][0]->details); ?>"> -->
                            <textarea class="form-control test" name="details" id="details" rows="6" value=""><?php echo  ucfirst($listing['result'][0]->details); ?></textarea>
                            <span id="details_error" style="color:red"></span><br>
                            </div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control round-input test" name="email" id="email" label="Email"  value="<?php echo $listing['result'][0]->email; ?>" >
                            <span id="email_error" style="color:red"></span><br>
                        </div>
                    </div> 
                        
                        
                          
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Phone Number<span style="color: red;">*</span>:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control round-input test" name="phoneno" id="phoneno" label="Phoneno"  value="<?php echo $listing['result'][0]->phoneno; ?>" >
                            <span id="phoneno_error" style="color:red"></span><br>
                        </div>
                    </div>
                        
                    
                    
         <div class="form-group">
                <label class="col-sm-3 control-label">Status </label>
             <div class="col-sm-6">
                <select class="form-control " id="status" name="status" label="Status"   data-max-options="1">
                     
                    <option value="0" <?php if($listing['result'][0]->status==0) echo 'selected';?>>Inactive</option>
                   <option value="1" <?php if($listing['result'][0]->status==1) echo 'selected';?>>Active</option>
                      
                </select>
             </div>  
        </div>
                    
                    
                    
                         <div class="form-group">
                                <label class="col-sm-3 control-label">Note</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="note"  rows="6" value=""><?php echo ucfirst($listing['result'][0]->note);?></textarea>
                                </div>
                    </div>
                        
                        
                        
                        
                        
                        
                        
                        
                
                    <button class="btn btn-primary btn pull-right" type="submit">Save</button>
                </form>
            </div>
        </section>


        </div>
        </div>




        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
<!--right sidebar start-->



<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">

        function validateForm(){


		       		 var v1=0;
		        	$(".test").each(function()
		       		 {
			        	var elementvalue= $(this).val();
			       		var elementid=$(this).attr('id');
			        	var elementlabel=$(this).attr('label');
			       		if(elementvalue.search(/\S/) ==-1)
			       		 {
                             if(elementid=="name"||elementid=="phoneno")
                            {
			        		
			        		$("#"+ elementid+"_error").html(elementlabel+" is needed");
							v1++;
                            }
			        	
			        		
			        	

			        	}
                        
                        else if(elementid=="email")
			        	{
				        	var pattern=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
				        	if(!pattern.test(elementvalue)){ 

				        		$("#"+ elementid+"_error").html("Correct email is needed");
				        		v1++;
				        	}
				        	
						}
                        
                        else if(elementid=="phoneno")
			        	{
				        	var pattern=/^[0-9]+$/;
				        	
				        	
				        	if(!pattern.test(elementvalue) || (elementvalue.length!=10) )
				        	{ 

				        		$("#phoneno_error").html("Correct phonenumber is needed");
				        		v1++;
				        	}

				        	else 
								{
									$("#phoneno_error").html("");
								}



						} 
                        
                        
                        
                        
                        
                        
                        
                       	else 
								{
									$("#"+ elementid+"_error").html("");
								}
                        


		        });
		        	

		        	



		        	


		        	



					return (v1 === 0)?true:false;


		        	// alert(v1);
		        	// if(v1===0){
		        	// 	$("#myform").submit();
		        	// }


		        

}




</script>

