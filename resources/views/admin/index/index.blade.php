@extends('templates.admin.master')
@section('title')
    TRANG CHỦ ADMIN
@endsection
@section('content')
    <div class="header">
        <h4 class="title">Danh sách bạn bè</h4>
        <p class="category success">Thêm thành công</p>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-1">
                    <div class="form-group">
                        <input type="text" name="id" class="form-control border-input" value=""  placeholder="ID">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="fullname" class="form-control border-input" placeholder="Họ tên" value="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <select name="friend_list" class="form-control border-input">
                            <option value="0">-- Chọn danh mục --</option>
                            <option value="1">Bạn quen thời phổ thông</option>
                            <option>Bạn quen thời đại học</option>
                            <option>Bạn tâm giao</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="submit" name="search" value="Tìm kiếm" class="is" />
                        <input type="submit" name="reset" value="Hủy tìm kiếm" class="is" />
                    </div>
                </div>
            </div>

        </form>

        <a href="edit.html" class="addtop"><img src="/templates/admin/assets/img/add.png" alt="" /> Thêm</a>
    </div>
    <div class="content table-responsive table-full-width">
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Hình ảnh</th>
                <th>Ngày tạo</th>
                <th>Thuộc danh sách</th>
                <th>Chức năng</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="{{ route('admin.index.edit',['id' => 1]) }}">Trần Văn Nam</a></td>
                    <td><img src="/templates/admin/assets/img/tim_80x80.png" alt="" width="100px" /></td>
                    <td>12/12/2015</td>
                    <td>Bạn thời phổ thông</td>
                    <td>
                        <a href="{{ route('admin.index.edit',['id' => 2]) }}"><img src="/templates/admin/assets/img/edit.gif" alt="" /> Sửa</a> &nbsp;||&nbsp;
                        <a href=""><img src="/templates/admin/assets/img/del.gif" alt="" /> Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="{{ route('admin.index.edit',['id' => 3]) }}">Trần Văn Nam</a></td>
                    <td><img src="/templates/admin/assets/img/tim_80x80.png" alt="" width="100px" /></td>
                    <td>12/12/2015</td>
                    <td>Bạn thời phổ thông</td>
                    <td>
                        <a href="{{ route('admin.index.edit',['id' => 4]) }}"><img src="/templates/admin/assets/img/edit.gif" alt="" /> Sửa</a> &nbsp;||&nbsp;
                        <a href=""><img src="/templates/admin/assets/img/del.gif" alt="" /> Xóa</a>
                    </td>
                </tr>

            </tbody>

        </table>

        <div class="text-center">
            <ul class="pagination">
                <li><a href="?p=0" title="">1</a></li>
                <li><a href="?p=1" title="">2</a></li>
                <li><a href="?p=1" title="">3</a></li>
                <li><a href="?p=1" title="">4</a></li>
            </ul>
        </div>
    </div>
@endsection

