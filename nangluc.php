<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>HỆ THỐNG QUẢN LÝ TRƯỜNG HỌC </title>
    <link href="css/StyleSheet.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		  $("button").click(function(){
			alert($("#w3s").attr("href"));
		  });
		});
		</script>
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
		 <ul>
		    <li style="border-left: none;">
			<a href="index.php">Trang chủ</a>
		    </li>
		</ul></div>
        <div id="cottrai"></div>
        <div id="cotgiua"> <br />
		  <p><a href="result.php" id="w3s">Vui lòng chọn năng lực phù hợp</a></p><br/><br/>
		<form action="result.php"> 
			<select name="nangluc" onchange="shownangluc(this.value)">
				<option value="">Chọn năng lực:</option>
				<option value="khtn">Khoa học tự nhiên</option>
				<option value="khxh ">Khoa học xã hội</option>
				<option value="tkm">Thiết kế mẫu</option>
				<option value="kts">Kiến trúc sư</option>
				<option value="nt">Nghệ thuật</option>

			</select><br/><br/>
			<button>Xác nhận</button>
		</form>	
        </div>
        <div id="cotphai"></div>
        <div id="clear"></div>
        <div id="cuoitrang">
            <h4 style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                Website được tạo bởi Lớp DLB16HT201</h4>
        </div>
    </div>
</body>
</html>
