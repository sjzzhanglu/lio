<style type="text/css">
	.imagebtn{ padding: 0px 20px 20px 20px; }
	.ztitle{ font-size: 20px; line-height: 46px; margin-bottom: 26px; }
	.zinput p{ margin-bottom: 30px }
	.zsubmit{ width: 90px; }
	.ztext{ height: 105px !important; }
	.zbox{ padding: 0px 0px 90px 0px; }
</style>
<div class="zbox">
<div class="row">
	<div class="col">
		<h5>新建主题</h5>
	</div>
</div>

<form action="" method="post">
<div class="row">
	<div class="col-3">
		<div class="tile">
			<img src="{{ url('/') }}/Flat-UI/docs/assets/images/demo/browser-pic-1.jpg">
		</div>
		<div class="imagebtn">
			<a href="#fakelink" class="btn btn-block btn-sm btn-primary">上传专题图片</a>
		</div>
	</div>
	<div class="col-9">
		<div class="row">
			<div class="col-3">
				<p class="lead ztitle">名称</p>
				<p class="lead ztitle">描述</p>
			</div>
			<div class="col-9 zinput">

				<p><input type="text" value="" placeholder="填写名称，最多50个字" class="form-control"></p>
				<p><textarea placeholder="填写描述" class="form-control ztext" ></textarea></p>
				<div class="zsubmit">
					<a href="#fakelink" class="btn btn-block btn-sm btn-primary">创建专题</a>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
</div>