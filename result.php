<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	<meta name="author" content="GallerySoft.info" />

	<title>HỆ THỐNG GỢI Ý TRƯỜNG HỌC THEO NĂNG LỰC, SỞ THÍCH</title>
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
        <a href="#" style="text-decoration: none; background-color:yellow; font-size:24px"><BR/><BR/>HỆ THỐNG GỢI Ý TRƯỜNG HỌC THEO NĂNG LỰC, SỞ THÍCH</a>
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
            <div id="left"></div>
            <div id="main">
		<form name="dangnhap_dk" method="post" action="nangluc.php" target="body" style="">
			<p><a href="result.php" id="w3s">Chúc mừng bạn đã chọn ngành học phù hợp với năng lực</a></p>
		</form>	
            </div> 
            <div id="right">Quang cao</div>
    </div>
    <div id="bottom">
        Copyright &copy; 2018 by Nguyen Vu Bich Van
    </div>
</body>
</html>
