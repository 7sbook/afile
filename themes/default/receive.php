<?php get_header(); ?>

<!-- 页面主要内容 start -->

<div class="container">
    <h1 style="text-align: center;margin: 100px 0;">SSS.MS文件传输</h1>
    
    <div class="col-xs-12 col-sm-12 col-md-8 center-block" style="margin: 40px auto;">

			<ul class="nav nav-tabs" style="border-bottom: 0;">
				<li class="nav-item">
					<a class="nav-link " href="/send">文件发送</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="/receive">文件接收</a>
				</li>
			</ul>
			
			<div id="receive-box">
									<form class="input-group" method="POST">
						<input type="text" name="code" class="form-control" placeholder="请输入文件提取码">
						<div class="input-group-append">
							<button class="btn btn-warning col-sm-12" type="submit">提取文件</button>
						</div>
					</form>
							</div>
		</div>

</div>
<!-- 页面主要内容 end -->

<?php get_footer(); ?>