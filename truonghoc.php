<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>HỆ THỐNG QUẢN LÝ TRƯỜNG HỌC </title>
    <link href="css/StyleSheet.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="Scripts/jquery-1.4.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
  $("#btn1").click(function(){
    $("#test1").text("Hello world!");
  });
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
        <div id="menungang"></div>
        <div id="cottrai"></div>
        <div id="cotgiua"> <br />
		<form action="result_truonghoc.php" method="post"> 
			<select name="truonghoc[]" onchange="showtruonghoc(this.value)">
				<option value="">danh sách trường học:</option>
				<option selected="selected" value="khtn">Chuyên Hùng Vương BD</option>
				<option value="khxh ">Nguyễn Khuyến BD</option>
				<option value="tkm" id="demo">Chuyên Lê Quý Đôn</option>
				<option value="kts">Chuyên Đại Học Bách Khoa TPHCM</option>
				<option value="nt">Chuyên Văn hóa Nghệ thuật</option>	
			</select>
			<div></div>
			<input type="submit" name="submit"  value="Get Selected Values"/>
			<button id="btn1">Set Text</button>
		</form><br/>
		<br/>
		<p><a href="index.php">về trang chủ</a></p>
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
