@extends('candidates.layouts.candidate-create',['title' => 'Đăng ký ứng tuyển'])
@section('content')
<!-- form start -->
<form role="form" method="post" action="{{url('candidate')}}">
  {{csrf_field()}}
  <div class="card-body">

    @if(count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    @if(\Session::has('success'))
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div>
    @endif

    <!-- Họ và tên -->
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Họ và chữ lót:</label>
          <input type="text" class="form-control" placeholder="Nhập họ và chữ lót" name="lastname">
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col-md-6 -->
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Tên:</label>
          <input type="text" class="form-control" placeholder="Nhập tên" name="firstname">
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->

    <!-- Giới tính và ngày sinh -->
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Ngày sinh:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask name="birt">
          </div><!-- /.input group -->
        </div><!-- /.form group -->
      </div><!-- /.col-md-6 -->


      <div class="col-md-6">
        <div class="form-group">
          <label for="gender">Giới tính:</label>
          <select class="custom-select" name="gender">
            <option>Nam</option>
            <option>Nữ</option>
          </select>
        </div><!-- /.form-group -->
      </div><!-- /.col-md-6 -->
    </div><!-- /.row  -->

    <div class="row">
      <div class="col-md-6">
        <!-- Chứng minh nhân dân -->

        <div class="form-group">
          <label>Chứng mình nhân dân:</label>

          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" data-inputmask='"mask": "999999999999"' data-mask name="identifyCard">
          </div>
          <!-- /.input group -->
        </div>
        <!-- /.form group -->
      </div>
      <!-- /.col-md-6 -->

      <div class="col-md-6">
        <!-- Số điện thoại -->

        <div class="form-group">
          <label>Số điện thoại:</label>

          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-phone"></i></span>
            </div>
            <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask name="phonenumber">
          </div>
          <!-- /.input group -->
        </div>
        <!-- /.form group -->
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->

    <!-- Đối tượng ưu tiên -->
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="priority">Đối tượng ưu tiên:</label>
          <select class="custom-select" name="priority">
            <option value="0">Không có</option>
            <option value="1">Đối tượng 1</option>
            <option value="2">Đối tượng 2</option>
            <option value="3">Đối tượng 3</option>
            <option value="4">Đối tượng 4</option>
            <option value="5">Đối tượng 5</option>
            <option value="6">Đối tượng 6</option>
            <option value="7">Đối tượng 7</option>
          </select>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col-md-6 -->
      <div class="col-md-6">
        <br>
        <strong>Để biết rõ hơn về các đối tượng ưu tiên, các bạn có thể truy cập </strong>
        <a href="http://tuyensinhvnuk.edu.vn/doi-tuong-uu-tien/" target="_blank">Tại đây!</a><br><br>
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    <!-- hình thức ứng tuyển -->
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="admissionForm">Hình thức xét tuyển:</label>
          <select class="custom-select" name="admissionForm">
            <option disabled="disabled" selected="selected">Hình thức xét tuyển</option>
            <option>Đăng kí xét kết quả học bạ</option>
            <option>Xét kết quả thi trung học phổ thông quốc gia</option>
            <option>Đăng kí tuyển thẳng</option>
            <option>Đăng kí xét điểm thi năng lực của Đại học quốc gia Hồ Chí Minh</option>
          </select>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->

    <!-- Tên trường THPT -->
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Tên trường THPT:</label>
          <input type="text" class="form-control" placeholder="Nhập tên trường THPT bạn đã học" name="highSchool">
        </div>
        <!-- /.form-group -->
      </div>
    </div>
    <!-- /.row -->
    <!-- Địa chỉ thường trú -->
    <label for="">
      <h5><strong>Địa chỉ thường trú</strong></h5>
    </label>
    <div class="row">

      <div class="col-md-4">
        <!-- Tỉnh/Thành phố -->
        <div class="form-group">
          <label>Tỉnh/Thành phố:</label>
          <select class="form-control select2bs4" style="width: 100%;" name="province" id="province">
            <option selected="selected">-- Chọn Tỉnh/Thành phố</option>
          </select>
        </div>
        <!-- /.form-group -->
      </div><!-- /.col-md-4 -->

      <div class="col-md-4">
        <!-- Tỉnh/Thành phố -->
        <div class="form-group">
          <label>Quận/Huyện:</label>
          <select class="form-control select2bs4" style="width: 100%;" name="district" id="district">
            <option selected="selected">-- Chọn Quận/Huyện</option>
          </select>
        </div>
        <!-- /.form-group -->
      </div><!-- /.col-md-4 -->

      <div class="col-md-4">
        <!-- Tỉnh/Thành phố -->
        <div class="form-group">
          <label>Xã/Phường:</label>
          <select class="form-control select2bs4" style="width: 100%;" name="ward" id="ward">
            <option selected="selected">-- Chọn Xã/Phường</option>
          </select>
        </div>
        <!-- /.form-group -->
      </div><!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>


@endsection