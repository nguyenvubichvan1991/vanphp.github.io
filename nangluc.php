<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	<meta name="author" content="GallerySoft.info" />

	<title>HỆ THỐNG QUẢN LÝ TRƯỜNG HỌC THEO NĂNG LỰC, SỞ THÍCH</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		  $("button").click(function(){
			alert($("#w3s").attr("href"));
		  });
		});
		</script>
		
</head>

    
<body>
    <div id="top">
        <a href="#" style="text-decoration: none; background-color:yellow; font-size:24px"><BR/><BR/>HỆ THỐNG QUẢN LÝ TRƯỜNG HỌC THEO NĂNG LỰC, SỞ THÍCH</a>
    </div>
    <div id="menu">
        <ul>
             <li style="border-left: none;">
                <a href="index.php">Trang chủ</a>
            </li>
            <li><a href="Login.php">Đăng nhập</a></li>
            
        </ul>
    </div>
    <div id="wrapper">
            <div id="left">
            </div>
            <div id="main">
			   <p><a href="result.php" id="w3s">Vui lòng chọn năng lực phù hợp</a></p>
			   <form action="result.php"> 
				  <select name="nangluc" onchange="shownangluc(this.value)">
					<option value="">Chọn năng lực:</option>
					<option value="khtn">Khoa học tự nhiên</option>
					<option value="khxh ">Khoa học xã hội</option>
					<option value="tkm">Thiết kế mẫu</option>
					<option value="kts">Kiến trúc sư</option>
					<option value="nt">Nghệ thuật</option>
					
				  </select>
				  <button>Xác nhận</button>
				</form>
				
            </div> 
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div id="right">Quang cao</div>
    </div>
    <div id="bottom">
        Copyright &copy; 2018 by Nguyen Vu Bich Van
    </div>
</body>
</html>
