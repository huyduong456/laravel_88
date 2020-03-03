@extends('master/master')
@section('title','Quản Lý Thành Viên')
@section('content')
<article class="content dashboard-page">
    <div class="col-md-12">
            <div class="card card-block sameheight-item" style="height: 720px;">
                <div class="title-block">
                    <h3 class="title"> Sửa Thành Viên : Nguyễn Thế Phúc </h3>
                    <hr>
                </div>
                <form method="POST">
                    @csrf {{-- bỏ bảo mật  --}}
                    <div class="form-group">
                        <label class="control-label">Họ Và Tên</label>
                    <input name="full" type="text" class="form-control underlined" value="{{$user->full}}"> </div>
                        @if ($errors->has('full'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('full') }}</strong>
                            </div>
                        @endif
                    <div class="form-group">
                        <label  class="control-label">Số điện thoại</label>
                        <input name="phone" type="text" class="form-control underlined" value="{{$user->phone}}"> </div>
                        @if ($errors->has('phone'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </div>
                        @endif
                    <div class="form-group">
                        <label class="control-label">Địa chỉ</label>
                        <input name="address"  type="text" class="form-control underlined" value="{{$user->address}}"> </div>
                        @if ($errors->has('address'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                            </div>
                        @endif
                    <div class="form-group">
                        <label class="control-label">Số CMT</label>
                        <input name="id_number" type="text" class="form-control underlined" value="{{$user->id_number}}"> </div>
                        @if ($errors->has('id_number'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('id_number') }}</strong>
                            </div>
                        @endif
                  <div align='right'>
                        <button type="submit" class="btn btn-success">Sửa</button>
                        <button class="btn btn-primary" type="reset" >Nhập lại</button>
                  </div>
                </form>
            </div>
        </div>

</article>
@stop


