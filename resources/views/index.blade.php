<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | JSON - Dynamic Dependent Dropdown List using Jquery and Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">
   <h2 align="center">JSON - Dynamic Dependent Dropdown List using Jquery and Ajax</h2><br /><br />
   <select name="province" id="province" class="form-control input-lg">
    <option value="">Select province</option>
   </select>
   <br />
   <select name="district" id="district" class="form-control input-lg">
    <option value="">Select district</option>
   </select>
   <br />
   <select name="ward" id="ward" class="form-control input-lg">
    <option value="">Select ward</option>
   </select>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 load_json_data('province');

 function load_json_data(id, parent_id)
 {
  var html_code = '';
  $.getJSON('province_district_ward.json', function(data){

   html_code += '<option value="">Select '+id+'</option>';
   $.each(data, function(key, value){
    if(id == 'province')
    {
     if(value.parent_id == '0')
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
    else
    {
     if(value.parent_id == parent_id)
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
   });
   $('#'+id).html(html_code);
  });

 }

 $(document).on('change', '#province', function(){
  var province_id = $(this).val();
  if(province_id != '')
  {
   load_json_data('district', province_id);
  }
  else
  {
   $('#district').html('<option value="">Select district</option>');
   $('#ward').html('<option value="">Select ward</option>');
  }
 });
 $(document).on('change', '#district', function(){
  var district_id = $(this).val();
  if(district_id != '')
  {
   load_json_data('ward', district_id);
  }
  else
  {
   $('#ward').html('<option value="">Select ward</option>');
  }
 });
});
</script>