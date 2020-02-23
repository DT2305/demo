@extends('submit.layouts.submit-default')

@section('content')
<div class="page-wrapper bg-blue p-t-180 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <!-- <div class="card-heading"></div> -->
            <div class="card-body">
                <h2 class="title text-aligh-center" style="text-align:center;">Thông tin đăng ký ứng tuyển</h2>

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


                <form method="post" action="{{url('candidate')}}">
                {{csrf_field()}}
                    <!-- Họ và tên -->
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Họ và chữ lót" name="lastname">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Tên" name="firstname">
                            </div>
                        </div>
                    </div>
                    <!-- Giới tính và ngày sinh -->
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-2 js-datepicker" type="text" placeholder="Ngày sinh" name="birthday">
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="gender">
                                        <option disabled="disabled" selected="selected">Giới tính</option>
                                        <option>Nam</option>
                                        <option>Nữ</option>
                                        <option>Khác</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Số chứng minh nhân dân -->
                    <div class="input-group">
                        <input class="input--style-2" type="number" placeholder="Mã số chứng minh nhân dân" name="identifyCard">
                    </div>
                    <!-- Số điện thoại -->
                    <div class="input-group">
                        <input class="input--style-2" type="number" placeholder="Số điện thoại (--Dùng để đăng nhập--)" name="phoneNumber">
                    </div>
                    <!-- Đối tượng ưu tiên -->
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="priority">
                                        <option disabled="disabled" selected="selected">Đối tượng ưu tiên</option>
                                        <option value="0">Không có</option>
                                        <option value="1">Đối tượng 1</option>
                                        <option value="2">Đối tượng 2</option>
                                        <option value="3">Đối tượng 3</option>
                                        <option value="4">Đối tượng 4</option>
                                        <option value="5">Đối tượng 5</option>
                                        <option value="6">Đối tượng 6</option>
                                        <option value="7">Đối tượng 7</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <strong>Để biết rõ hơn về các đối tượng ưu tiên, các bạn có thể truy cập  </strong>
                    <a href="http://tuyensinhvnuk.edu.vn/doi-tuong-uu-tien/" target="_blank">Tại đây!</a><br><br>
                    <!-- Hình thức xét tuyển -->
                    <div class="col-2">
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="admissionForm">
                                    <option disabled="disabled" selected="selected">Hình thức xét tuyển</option>
                                    <option value="1">Đăng kí xét kết quả học bạ</option>
                                    <option value="2">Xét kết quả thi trung học phổ thông quốc gia</option>
                                    <option value="3">Đăng kí tuyển thẳng</option>
                                    <option value="4">Đăng kí xét điểm thi năng lực của Đại học quốc gia Hồ Chí Minh</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Tên trường THPT -->
                    <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="Tên Trường THPT" name="highSchool">
                    </div>
                    <!-- Địa chỉ thường trú -->
                    <strong>Địa chỉ thường trú</strong><br><br>
                    <!-- Tỉnh/Thành phố -->
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple ">
                                    <select name="province">
                                        <option disabled="disabled" selected="selected">-- Chọn Tỉnh/Thành phố</option>
                                        <option value="7">TP Cần Thơ</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quận/Huyện -->
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple ">
                                    <select name="district">
                                        <option disabled="disabled" selected="selected">-- Chọn Quận/Huyện</option>
                                        <option value="7">Ninh Kiều</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Xã/Phường -->
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple ">
                                    <select name="ward">
                                        <option disabled="disabled" selected="selected">-- Chọn Xã/Phường</option>
                                        <option value="7">An Lạc</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="p-t-30">
                        <button class="btn btn--radius btn--green" type="submit">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
@endsection