<!DOCTYPE html>
<!-- http://mfikri.com/en/blog/crud-codeigniter-ajax -->
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Product List</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
    <link type="text/css" rel="stylesheet" href="assets/css/preview-export-min.css">
    <style>

.l {float: left;display: none}
.r {float: right; }
.clear::after{content: "";display: block; clear: both;}
    </style>

</head>
<body>
<div class="body_generic skin_web skin-wrapper skin-os-web skin-device-phone skin-model- skin-size-1 skin-color-white skin-orientation-landscape skin-dimensions-1366-760" style="width: 1000px; height:fit-content posi " >
  
<div class="buttons top"></div>
					<div class="detail-top"></div>
					<div class="web-search"></div>
					<div class="buttons left"></div>
<div class="container"  style="margin-top:50px;"> <!--responsive fixed width container -->
    <!-- Control the column width, and how they should appear on different devices -->

    <div class="row">
        <div class="col-12">  <!-- extra small devices - screen width less than 576px, 12 columns -->
            <div class="col-md-32"> <!-- medium devices - screen width equal to or greater than 768px -->
                <h1><a id="1" class="" href="#" onclick="change()" onclick="show_product()" >Resident</a><a id="2" href="#" class="l"   onclick="change() "onclick="show_product()">Student</a>
                    <small>List</small>
                    <div class="float-right">
											<a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add">
												 <!-- void(0) evaluates to undefined, so the browser stays on the same page. -->
												 <!-- class="btn btn-primary" causes anchor to be displayed as a button -->
												 <!-- data-toggle="modal" activates a popup window  -->
												 <!-- data-target="#Modal_Add" specifies target of popup -window -->
												 <!--<span class="fa fa-plus"></span>  --> <!-- font awesome -->
												 Add New
											 </a>
										</div>
                </h1>
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>phone number</th>
                        <th>date</th>
                        <th>from</th>
                        <th>to</th>
                        <th>suburb</th>
                        <th>type</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody  id="show_data" >
                  </tbody>
                  
                  <tbody  id="show_data2" >
                </tbody>
            </table>
        </div>
    </div>
</div>

		<!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

              <div class="modal-dialog modal-lg" role="document">
								<!-- role="document" improves acessibility for people using screen readers -->
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" >Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<!--  closes the modal if you click on it -->
											<!-- aria-label provides the text "Close" for screen readers -->
                      <span aria-hidden="true">&times;</span> <!-- &times; causes x to be displayed -->
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
													  <!-- 2/12 for label and 10/12 for input field -->
                            <label class="col-md-2 col-form-label">ID</label>
                            <div class="col-md-10">
                              <input type="text" name="s_id" id="s_id" class="form-control" placeholder="studnet id">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                              <input type="text" name="s_name" id="s_name" class="form-control" placeholder="student Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input type="text" name="date" id="date" class="form-control" placeholder="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">From</label>
                            <div class="col-md-10">
                              <input type="text" name="time_from" id="time_from" class="form-control" placeholder="time_from">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">To</label>
                            <div class="col-md-10">
                              <input type="text" name="time_to" id="time_to" class="form-control" placeholder="time_to">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Suburb</label>
                            <div class="col-md-10">
                              <input type="text" name="suburb" id="suburb" class="form-control" placeholder="suburb">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">type</label>
                            <div class="col-md-10">
                              <input type="text" name="type" id="type" class="form-control" placeholder="type">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">phone Number</label>
                            <div class="col-md-10">
                              <input type="text" name="s_phoneNumber" id="s_phoneNumber" class="form-control" placeholder="phoneNumber">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary" onclick="reload()">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Active</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">ID</label>
                            <div class="col-md-10">
                              <input type="text" name="s_id_edit" id="s_id_edit" class="form-control" placeholder="Product Code" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                              <input type="text" name="s_name_edit" id="s_name_edit" class="form-control" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input type="text" name="date_edit" id="date_edit" class="form-control" placeholder="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">From</label>
                            <div class="col-md-10">
                              <input type="text" name="time_from_edit" id="time_from_edit" class="form-control" placeholder="time_from">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">To</label>
                            <div class="col-md-10">
                              <input type="text" name="time_to_edit" id="time_to_edit" class="form-control" placeholder="time_to">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Suburb</label>
                            <div class="col-md-10">
                              <input type="text" name="suburb_edit" id="suburb_edit" class="form-control" placeholder="suburb">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">hourly_rate</label>
                            <div class="col-md-10">
                              <input type="text" name="hourly_rate_edit" id="hourly_rate_edit" class="form-control" placeholder="hourly_rate">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">phoneNumber</label>
                            <div class="col-md-10">
                              <input type="text" name="s_phoneNumber_edit" id="s_phoneNumber_edit" class="form-control" placeholder="phoneNumber">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Type</label>
                            <div class="col-md-10">
                              <input type="text" name="type_edit" id="type_edit" class="form-control" placeholder="type">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary" onclick="reload()">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->

        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="s_id_delete" 
                    id="s_id_delete" class="form-control">
                    <input type="hidden"  
                    name="s_id_delete2"id="s_id_delete2" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary" onclick="reload()">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->
        </div>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>

<script type="text/javascript">
let i;
let j;
let username;
let person;
window.onload=function(){
  person = prompt("which roles are you?", "student or resident");
  username = prompt("user id", "145");
  if(person.indexOf("r")!= -1)
  {document.getElementById('1').className='l'
  document.getElementById('2').className=''
  person="resident"
} else{person="student"}
$.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('product/product_data_bookings')?>',
		        async : false, //ajax has to be complete before executing next
		        dataType : 'json',
		        success : function(data){
              j=data;
            }
})

}
	$(document).ready(function(){
		show_product();	     
         

		$('#mydata').dataTable(); 

	
		function show_product(){
    if(person=="resident"){
     $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('product/product_data_resident')?>',
		        async : false, //ajax has to be complete before executing next
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            
		            for(i=0; i<data.length; i++){
                  
                  
                  if(data[i].r_id==username){
                      html += '<tr>'+
                      '<td>'+data[i].r_id+'</td>'+
		                         '<td>'+data[i].r_name+'</td>'+
		                         '<td>'+data[i].r_phoneNumber+'</td>'+
		                         '<td>'+data[i].date+'</td>'+
		                         '<td>'+data[i].time_from+'</td>'+
		                         '<td>'+data[i].time_to+'</td>'+
		                         '<td>'+data[i].suburb+'</td>'+
		                         '<td>'+data[i].type+'</td>'+
		                         '<td style="text-align:right;">'+
                             '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit2" data-s_id="'+data[i].r_id+'" data-s_name="'+data[i].r_name+'" data-date="'+data[i].date+'" data-time_from="'+data[i].time_from+'" data-time_to="'+data[i].time_to+'"  data-suburb="'+data[i].suburb+'" data-hourly_rate="'+data[i].hourly_rate+'" data-s_phoneNumber="'+data[i].r_phoneNumber+'" data-type="'+data[i].type+'">edit</a>'+' '+
                                     '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete2" data-s_id="'+data[i].r_id+'"data-suburb="'+data[i].suburb+'">&nbsp&nbspDelete&nbsp&nbsp</a>'+
                                 '</td>'+
		                         '</tr>';
                                    
                             }
                             
                             $('#show_data2').html(html);}}})
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('product/product_data_student')?>',
		        async : false, //ajax has to be complete before executing next
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            
		            for(i=0; i<data.length; i++){
                  let k;
                  var b;
                    for(b=0; b<j.length; b++){
                    
                    if(j[b].s_id==data[i].s_id){ 
                        k ="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspbooking&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; break;}else{ k ="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspbook&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"}
                    }
              
                     
                               html += '<tr>'+
		                   		  '<td>'+data[i].s_id+'</td>'+
		                         '<td>'+data[i].s_name+'</td>'+
		                         '<td>'+data[i].s_phoneNumber+'</td>'+
		                         '<td>'+data[i].date+'</td>'+
		                         '<td>'+data[i].time_from+'</td>'+
		                         '<td>'+data[i].time_to+'</td>'+
		                         '<td>'+data[i].suburb+'</td>'+
		                         '<td>'+data[i].type+'</td>'+
		                        '<td style="text-align:right;">'+
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit3" data-s_id="'+data[i].s_id+'"  data-username="'+username+'" data-suburb="'+data[i].suburb+'"  id="send">'+k+'</a>'
                                '</td>'+
		                        '</tr>'; 
                                    
                }
                             $('#show_data').html(html);
                  
		            
		            
		        }

		    });
    }else{
      $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('product/product_data_student')?>',
		        async : false, //ajax has to be complete before executing next
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            
		            for(i=0; i<data.length; i++){
                  
                  
                  if(data[i].s_id==username){
                      html += '<tr>'+
                      '<td>'+data[i].s_id+'</td>'+
		                         '<td>'+data[i].s_name+'</td>'+
		                         '<td>'+data[i].s_phoneNumber+'</td>'+
		                         '<td>'+data[i].date+'</td>'+
		                         '<td>'+data[i].time_from+'</td>'+
		                         '<td>'+data[i].time_to+'</td>'+
		                         '<td>'+data[i].suburb+'</td>'+
		                         '<td>'+data[i].type+'</td>'+
		                         '<td style="text-align:right;">'+
                             '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit2" data-s_id="'+data[i].s_id+'" data-s_name="'+data[i].s_name+'" data-date="'+data[i].date+'" data-time_from="'+data[i].time_from+'" data-time_to="'+data[i].time_to+'"  data-suburb="'+data[i].suburb+'" data-hourly_rate="'+data[i].hourly_rate+'" data-s_phoneNumber="'+data[i].s_phoneNumber+'" data-type="'+data[i].type+'">edit</a>'+' '+
                                     '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete2" data-s_id="'+data[i].s_id+'" data-suburb="'+data[i].suburb+'">&nbsp&nbspDelete&nbsp&nbsp</a>'+
                                 '</td>'+
		                         '</tr>';
                                    
                             }
                             
                             $('#show_data2').html(html);}}})
      $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('product/product_data_resident')?>',
		        async : false, //ajax has to be complete before executing next
		        dataType : 'json',
		        success : function(data){
              
		            var html = '';
		            
		            for(i=0; i<data.length; i++){
                  let k;
                  var b;
                    for(b=0; b<j.length; b++){
                    
                    if(j[b].r_id==data[i].r_id && j[b].booking_suburb==data[i].suburb){ 
                        k ="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspbooking&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; break;}else{ k ="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspbook&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"}
                    }
                  
                    {
                               html += '<tr>'+
                               '<td>'+data[i].r_id+'</td>'+
		                         '<td>'+data[i].r_name+'</td>'+
		                         '<td>'+data[i].r_phoneNumber+'</td>'+
		                         '<td>'+data[i].date+'</td>'+
		                         '<td>'+data[i].time_from+'</td>'+
		                         '<td>'+data[i].time_to+'</td>'+
		                         '<td>'+data[i].suburb+'</td>'+
		                         '<td>'+data[i].type+'</td>'+
		                        '<td style="text-align:right;">'+
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit3" data-s_id="'+data[i].s_id+'"  data-username="'+username+'" data-suburb="'+data[i].suburb+'" data-i="'+data[i].i+'" id="send2">'+k+'</a>'
                                '</td>'+
		                        '</tr>'; 
                                    
                             }
                             
                             $('#show_data').html(html);
		           
		            }
              
		        }

        });
      }
  }

        //Save product
        $('#btn_save').on('click',function(){
          if(person=="student")
           { 
             var s_id = username;
            var s_name = $('#s_name').val();
            var date = $('#date').val();
            var time_from = $('#time_from').val();
            var time_to = $('#time_to').val();
            var suburb        = $('#suburb').val();
            var hourly_rate        = $('#hourly_rate').val();
            var s_phoneNumber        = $('#s_phoneNumber').val();
            var type = person;
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/save_student')?>",
                dataType : "JSON",
                data : {s_id:s_id , s_name:s_name, date:date, time_from:time_from, time_to:time_to, suburb:suburb,hourly_rate:hourly_rate, type:type,s_phoneNumber:s_phoneNumber},
                success: function(data){
                    $('[name="s_id"]').val("");
                    $('[name="s_name"]').val("");
                    $('[name="date"]').val("");
                    $('[name="time_from"]').val("");
                    $('[name="time_to"]').val("");
                    $('[name="suburb"]').val("");
                    $('[name="hourly_rate"]').val("");
                    $('[name="type"]').val("");
                    $('[name="s_phoneNumber"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();
                }
            });
          } else{
            var r_id = username;
            var r_name = $('#s_name').val();
            var date = $('#date').val();
            var time_from = $('#time_from').val();
            var time_to = $('#time_to').val();
            var suburb        = $('#suburb').val();
            var hourly_rate        = $('#hourly_rate').val();
            var r_phoneNumber        = $('#s_phoneNumber').val();
            var type        = person;
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/save_resident')?>",
                dataType : "JSON",
                data : {r_id:r_id , r_name:r_name, date:date, time_from:time_from, time_to:time_to, suburb:suburb,hourly_rate:hourly_rate, type:type,r_phoneNumber:r_phoneNumber},
                success: function(data){
                    $('[name="s_id"]').val("");
                    $('[name="s_name"]').val("");
                    $('[name="date"]').val("");
                    $('[name="time_from"]').val("");
                    $('[name="time_to"]').val("");
                    $('[name="suburb"]').val("");
                    $('[name="hourly_rate"]').val("");
                    $('[name="type"]').val("");
                    $('[name="s_phoneNumber"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();

          }})}
            return false;
        });




        //get data for update record
        $('#show_data2').on('click','.item_edit2',function(){
          if(person=="resident")
           { var s_id = $(this).data('s_id');
            var s_name = $(this).data('s_name');
            var date = $(this).data('date');
            var time_from = $(this).data('time_from');;
            var time_to = $(this).data('time_to');
            var suburb        = $(this).data('suburb');
            var hourly_rate        = $(this).data('hourly_rate');
            var s_phoneNumber        = $(this).data('s_phoneNumber');
            var type        = $(this).data('type');
            

            $('#Modal_Edit').modal('show');
            $('[name="s_id_edit"]').val(s_id);
                    $('[name="s_name_edit"]').val(s_name);
                    $('[name="date_edit"]').val(date);
                    $('[name="time_from_edit"]').val(time_from);
                    $('[name="time_to_edit"]').val(time_to);
                    $('[name="suburb_edit"]').val(suburb);
                    $('[name="hourly_rate_edit"]').val(hourly_rate);
                    $('[name="s_phoneNumber_edit"]').val(s_phoneNumber);
                    $('[name="type_edit"]').val(type);
          }else{
              var r_id = $(this).data('s_id');
              var r_name = $(this).data('s_name');
              var r_phoneNumber        = $(this).data('s_phoneNumber');
              var date = $(this).data('date');
              var time_from = $(this).data('time_from');;
              var time_to = $(this).data('time_to');
              var suburb        = $(this).data('suburb');
              var hourly_rate        = $(this).data('hourly_rate');
              var type        = $(this).data('type');
              $('#Modal_Edit').modal('show');
              $('[name="s_id_edit"]').val(r_id);
                      $('[name="s_name_edit"]').val(r_name);
                      $('[name="date_edit"]').val(date);
                      $('[name="time_from_edit"]').val(time_from);
                      $('[name="time_to_edit"]').val(time_to);
                      $('[name="suburb_edit"]').val(suburb);
                      $('[name="hourly_rate_edit"]').val(hourly_rate);
                      $('[name="s_phoneNumber_edit"]').val(r_phoneNumber);
                      $('[name="type_edit"]').val(type);
          }
            

        });





        //get data for booking record


        //update record to database
         $('#btn_update').on('click',function(){
           
           if(person=="resident"){

            var s_id = $('#s_id_edit').val();
            var s_name = $('#s_name').val();
            var date = $('#date_edit').val();
            var s_phoneNumber        = $('#s_phoneNumber_edit').val();
            var time_from = $('#time_from_edit').val();
            var time_to = $('#time_to_edit').val();
            var suburb        = $('#suburb_edit').val();
            var hourly_rate        = $('#hourly_rate_edit').val();
            var type        = $('#type_edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/update_student')?>",
                dataType : "JSON",
                data : {s_id:s_id , s_name:s_name, date:date,s_phoneNumber:s_phoneNumber,time_from:time_from,time_to:time_to,suburb:suburb,hourly_rate:hourly_rate,type:type},
                success: function(data){
                    
                    $('[name="s_id_edit"]').val("");
                    $('[name="s_name_edit"]').val("");
                    $('[name="date_edit"]').val("");
                    $('[name="time_from_edit"]').val("");
                    $('[name="time_to_edit"]').val("");
                    $('[name="suburb_edit"]').val("");
                    $('[name="hourly_rate_edit"]').val("");
                    $('[name="s_phoneNumber_edit"]').val("");
                    $('[name="type_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
          } else{
            var r_id = $('#s_id_edit').val();
            var r_name = $('#s_name_edit').val();
            var date = $('#date_edit').val();
            var r_phoneNumber        = $('#s_phoneNumber_edit').val();
            var time_from = $('#time_from_edit').val();
            var time_to = $('#time_to_edit').val();
            var suburb        = $('#suburb_edit').val();
            var hourly_rate        = $('#hourly_rate_edit').val();
            var type        = $('#type_edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/update_resident')?>",
                dataType : "JSON",
                data : {r_id:r_id , r_name:r_name, date:date,r_phoneNumber:r_phoneNumber,time_from:time_from,time_to:time_to,suburb:suburb,hourly_rate:hourly_rate,type:type},
                success: function(data){
                    
                    $('[name="s_id_edit"]').val("");
                    $('[name="s_name_edit"]').val("");
                    $('[name="date_edit"]').val("");
                    $('[name="time_from_edit"]').val("");
                    $('[name="time_to_edit"]').val("");
                    $('[name="suburb_edit"]').val("");
                    $('[name="hourly_rate_edit"]').val("");
                    $('[name="s_phoneNumber_edit"]').val("");
                    $('[name="type_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
          }
            return false;
        });





        //get data for delete record
        $('#show_data2').on('click','.item_delete2',function(){
          if(person=="student")
            {
              var s_id = $(this).data('s_id');

            $('#Modal_Delete').modal('show');
            $('[name="s_id_delete"]').val(s_id);

          }else{
            var r_id = $(this).data('s_id');
            var suburb =$(this).data('suburb');
            $('#Modal_Delete').modal('show');
            $('[name="s_id_delete"]').val(r_id);
            $('[name="s_id_delete2"]').val(suburb);
          }
        });


        //delete record to database
         $('#btn_delete').on('click',function(){
          if(person=="student" )
            {
            var s_id = $('#s_id_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/delete_student')?>",
                dataType : "JSON",
                data : {s_id:s_id,suburb:suburb},
                success: function(data){
                    $('[name="s_id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
          }else{
            var r_id = $('#s_id_delete').val();
            var suburb = $('#s_id_delete2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/delete_resident')?>",
                dataType : "JSON",
                data : {r_id:r_id,suburb:suburb},
                success: function(data){
                    $('[name="s_id_delete"]').val("");
                    $('[name="s_id_delete2"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
          }
            return false;
        });
        

	});
function reload(){
  location.reload();
};
//booking get record
$('#show_data').on('click','.item_edit3',function(){
  var s_id;
  var r_id;
        if(person=="resident")
       { s_id = $(this).data('s_id');
        r_id = username;

       }else{
         s_id = username;
         r_id = $(this).data('s_id');
       }
       var booking_date = new Date();
       var suburb = $(this).data('suburb');
       var price = Math.round(Math.random()*(50,100)); 
       $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/bookings')?>",
                dataType : "JSON",
                data : {s_id:s_id,r_id:r_id, suburb:suburb,booking_date:booking_date,suburb:suburb,price:price },
                success: function(data){
 
                    show_product();
                }
            });
         //   console.log(j[s_id"])
         
      alert("your id is "+username+
       "\nsuburb is "+suburb+
       "\nprice is "+price+
       "\ndate is "+booking_date+
       "\nmassage has sent");
     });
</script>

</body>
</html>
