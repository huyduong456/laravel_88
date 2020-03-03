@extends('master/master')
@section('title','Vietpro_Academin')
@section('content')
 <!-- content -->
 <article class="content dashboard-page">

    <section class="section">
        <div class="row sameheight-container">
            <div class="col-xl-12">
                <div class="card sameheight-item items" data-exclude="xs,sm,lg">
                    <form method="get">
                        <div class="card-header bordered">
                            <div class="header-block">
                                <h3 class="title"> Danh sách thành viên </h3>
                                <a href="/user/add" class="btn btn-primary btn-sm"> Thêm </a>
                            </div>
                            <div class="header-block pull-right">
                                <label class="search">
                                    <input class="search-input" name="search" placeholder="search...">
                                    <i class="fa fa-search search-icon"></i>
                                </label>
                                <div class="pagination">
                                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="item-list striped">
                        <li class="item item-list-header">
                            <div class="item-row">

                                <div class="item-col item-col-header ">

                                    <span>Họ Tên</span>

                                </div>
                                <div class="item-col item-col-header">

                                    <span>Số điện thoại</span>

                                </div>
                                <div class="item-col item-col-header ">

                                    <span>Địa chỉ</span>

                                </div>
                                <div class="item-col item-col-header ">

                                    <span>Số CMT</span>

                                </div>
                                <div class="item-col item-col-header">

                                    <span>Xoá</span>

                                </div>
                            </div>
                        </li>
                        @foreach ($user as $row)
                            <li class="item">
                                <div class="item-row">
                                    <div class="item-col">
                                    <a href="/user/edit/{{$row->id}}">
                                            {{$row->full}}
                                        </a>
                                    </div>
                                    <div class="item-col">
                                        {{$row->phone}}
                                    </div>
                                    <div class="item-col">
                                        <span title="{{$row->address}}">{{$row->address}}</span>
                                    </div>
                                    <div class="item-col">
                                        {{$row->id_number}}
                                    </div>
                                    <div class="item-col ">
                                    <a onclick="return del('{{$row->full}}')" href="user/del/{{$row->id}}" class="btn btn-danger-outline">Xoá</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>

            </div>

        </div>

        <div align='right'>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {{$user->appends(['search'=>request()->search])->links()}}{{-- dùng để phân trang bên view --}}
                </ul>
            </nav>
        </div>

    </section>

</article>
<!-- end content -->
@endsection
@section('script')
@parent  {{-- dùng để kế thừa script ở trang master --}}
<script>
    function del(name){
        return confirm('Bạn có chắc chắn muốn xoá người dùng '+name+'?');
    }
</script>
@stop
