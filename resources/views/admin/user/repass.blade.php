@extends('admin.layouts.default')

@section('title',$title)

@section('content')

@if(session('error')) 
  <script>
    var error = "{{session('error')}}";
    swal(error);
  </script>
   
@endif

<article class="page-container">
  <form action="/admin/repass" method="post" class="form form-horizontal" id="form-admin-role-add">
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>原密码：</label>
      <div class="formControls col-xs-4 col-sm-3">
        <input type="password" class="input-text" value="" placeholder="" id="roleName" name="oldpassword">
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>新密码：</label>
      <div class="formControls col-xs-4 col-sm-3">
        <input type="password" class="input-text" value="" placeholder="" id="roleName" name="password">
      </div>
    </div>
    <div class="row cl">
      <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码：</label>
      <div class="formControls col-xs-4 col-sm-3">
        <input type="password" class="input-text" value="" placeholder="" id="roleName" name="repassword">
      </div>
    </div>
    <div class="row cl">
      <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
          {{csrf_field()}}
        <button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
      </div>
    </div>
  </form>
</article>
@endsection