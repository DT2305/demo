    <!-- Jquery JS-->
    <script src={{asset("submit-form/vendor/jquery/jquery.min.js")}}></script>
    <!-- Vendor JS-->
    <script src={{asset("submit-form/vendor/select2/select2.min.js")}}></script>
    <script src={{asset("submit-form/vendor/datepicker/moment.min.js")}}></script>
    <script src={{asset("submit-form/vendor/datepicker/daterangepicker.js")}}></script>

    <!-- Main JS-->
    <script src={{asset("submit-form/js/global.js")}}></script>

    <!-- Jquery chạy dynamic independent -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  

  <script>
$(document).ready(function(){

 load_json_data('province');

 function load_json_data(id, parent_id)
 {
  var html_code = '';
  $.getJSON('province_district_ward.json', function(data){

  //  html_code += '<option value="">Select '+id+'</option>';
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
   $('#district').html('<option value="">Chọn Tỉnh/Thành phốt</option>');
   $('#ward').html('<option value="">Chọn Quận Huyện</option>');
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
   $('#ward').html('<option value="">Chọn Phường/Xã</option>');
  }
 });
});
</script>