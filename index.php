<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Quản lý học sinh</title>
    <link href="css/StyleSheet.css" rel="stylesheet" type="text/css" />
    <script src="Scripts/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript">
        $('document').ready(function () {

            $('#dangnhap').mousemove(function () {
                $('#dn').text('Tên đăng nhập phải dài hơn 8 ký tự');
            });
            $('#dangnhap').mouseout(function () {
                $('#dn').text('');
            });

            $('#matkhau').mousemove(function () {
                $('#mk').text('Tên đăng nhập phải dài hơn 8 ký tự');
            });
            $('#matkhau').mouseout(function () {
                $('#mk').text('');
            });

            $('#bt4').click(function () {
                $('p').removeClass();
            });

            $('#bt5').click(function () {
                $('p').removeClass().addClass('xanh');
            });

            $('#bt6').click(function () {
                $('p').removeClass().addClass('do');
            });

            $('tr').mousemove(function () {
                $(this).addClass('maunen');
            });

            $('tr').mouseout(function () {
                $(this).removeClass();
            });
    </script>
  
</head>
<body>
    <div id="wraper">
        <div id="banner">
            <div class="buom1">
                <img src="images/buom.gif" width="100px" />
            </div>
            <div class="anhdong">
                <img src="images/tuyetroi.gif" />
            </div>
            <div class="wellcome">
                <img src="images/welcom.gif" width="300px" />
            </div>
        </div>
        <div id="menungang">
			<p><span class="nhanmanh" style="font-size: 30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspĐĂNG NHẬP HỆ THỐNG</span>
			&nbsp;&nbsp;&nbsp<span class="nhanmanh" style="font-size: 30px">QUẢN LÍ HỌC SINH</span>
			</p>
        </div>
        <div id="cottrai">
            <P class="nhanmanh" style="font-size: 12px">Quản lí danh mục </P>
			<P><a href="user.php" target="body" class="nhanmanh" style="font-size: 12px">Quản lý người dùng </a> </P>
			<p><a href="nangluc.php" target="body">Quản lí năng lực</a></p>
			<p><a href="truonghoc.php" target="body">Quản lý trường học</a></p>	
        </div>
        <div id="cotgiua">
            <br />
            <br />
			<form name="dangnhap_dk" method="post" action="" target="body" style="">
				 <table style="width: 100%;">
					<tr>
						<td align="right" width="30%">
							Tên đăng nhập:
						</td>
						<td>
							<input type="text" name="txtmagv" size="14" />
							<br/> <br/>
						</td>
					</tr>
					<tr>
						<td align="right">
							Mật khẩu:
						</td>
						<td>
							<input type="password" name="txtmatkhau" size="14" />
							<span id="mk"></span>
						</td>
					</tr>
					<tr>
						<td>
							&nbsp;<span id="dn">Xin chào</span>
							<?php
								if(isset($_POST['txtmagv'])&& ($_POST['txtmatkhau'])){
									echo $_POST["txtmagv"];
								}
							?>
						</td>
						<td>
							 <input type="submit" name="btndangnhap" value="Đăng nhập" />
						</td>
					</tr>
				</table>
			
			</form>
           
        </div>
        <div id="cotphai">
            
        </div>
        <div id="clear">
        </div>
        <div id="cuoitrang">
            <h4 style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                Website được tạo bởi nhóm Tú, Thúy, Hiền, Hạnh, Vân, Lớp DLB16HT201</h4>
        </div>
    </div>
</body>
</html>