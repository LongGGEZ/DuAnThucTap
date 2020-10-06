@extends('layout')
@section('content')


<div class="list">
<a name="" id="" class="btn btn-primary" href="add-user#" role="button" style="margin: 5px">Thêm</a>
        <div class="row">
          <div class="col-sm-10">
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr>
                                <th>Tên dịch vụ</th>
                                <th>Nội dung</th>
                                <th>Hình ảnh</th>
                                <th style="width: 10px;"></th>
                                <th style="width: 10px;"></th>
                            </tr>
                            @foreach($service as $ser)
                            <tr>
                                <td>{{$ser->service_name}}</td>
                                <td>{{$ser->service_content}}</td>
                                <td>{{$ser->service_image}}</td>
                                <td><a name="" id="" class="btn btn-primary" href="update-user" role="button">Sửa</a></td>
                                <td><a name="" id="" class="btn btn-primary" href="remove-user" role="button">Xoá</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
</div>
        @endsection
