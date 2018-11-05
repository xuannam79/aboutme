@extends('templates.admin.master')
@section('title')
    CHỈNH SỬA
@endsection
@section('content')
<div class="header">
<h4 class="title">Sửa thông tin</h4>
</div>
<div class="content">
<form action="" method="post">
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control border-input" disabled value="1">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Họ tên</label>
                <input type="text" name="fullname" class="form-control border-input" placeholder="Họ tên" value="Trần Nguyễn Gia Huy">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="date">Ngày tạo</label>
                <input type="text" name="date" value="20/12/2016" class="form-control border-input" placeholder="Ngày tạo">
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-group">
                <label for="read">Lượt đọc</label>
                <input type="text" name="read" value="20" class="form-control border-input" placeholder="Lượt đọc">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Danh mục bạn bè</label>
                <select name="friend_list" class="form-control border-input">
                    <option value="">Bạn quen thời phổ thông</option>
                    <option>Bạn quen thời đại học</option>
                    <option>Bạn tâm giao</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" name="picture" class="form-control" placeholder="Chọn ảnh" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Ảnh cũ</label>
                <img src="/templates/admin/assets/img/tim_80x80.png" width="120px" alt="" /> Xóa <input type="checkbox" name="delete_picture" value="1" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Mô tả</label>
                <textarea rows="4" class="form-control border-input" placeholder="Mô tả tóm tắt về bạn của bạn"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Chi tiết</label>
                <textarea rows="6" class="form-control border-input" placeholder="Mô tả chi tiết về bạn của bạn"></textarea>
            </div>
        </div>
    </div>

    <div class="text-center">
        <input type="submit" class="btn btn-info btn-fill btn-wd" value="Thực hiện" />
    </div>
    <div class="clearfix"></div>
</form>
</div>
@endsection

