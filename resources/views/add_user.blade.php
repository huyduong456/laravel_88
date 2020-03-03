@extends('master/master')
@section('title','Thêm Thành Viên')
@section('content')
<article class="content dashboard-page">
    <div class="col-md-12">
            <div class="card card-block sameheight-item" style="height: 720px;">
                <div class="title-block">
                    <h3 class="title"> THÊM THÀNH VIÊN </h3>
                    <hr>
                </div>
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Họ Và Tên</label>
                        <input name="full" type="text" class="form-control underlined"> </div>
                        {{ShowErrors($errors,'full')}}
                    <div class="form-group">
                        <label class="control-label">Số điện thoại</label>
                        <input name="phone" type="text" class="form-control underlined"> </div>
                        {{ShowErrors($errors,'phone')}}
                    <div class="form-group">
                        <label class="control-label">Địa chỉ</label>
                        <input name="address" type="text" class="form-control underlined"> </div>
                        {{ShowErrors($errors,'address')}}
                    <div class="form-group">
                        <label class="control-label">Số CMT</label>
                        <input name="id_number" type="text" class="form-control underlined"> </div>
                        {{ShowErrors($errors,'id_number')}}
                    <div align='right'>
                            <button type="submit" class="btn btn-success">Thêm</button>
                            <button class="btn btn-primary" type="reset" >Nhập lại</button>
                    </div>
                </form>
            </div>
        </div>

</article>
@endsection
