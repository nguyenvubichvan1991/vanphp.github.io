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
		 <form name="dangnhap_dk" method="post" action="nangluc.php" target="body" style="">
			<p><a href="truonghoc.php" id="w3s">THAM KHẢO NỘI DUNG VỀ TRƯỜNG HỌC BẠN ĐÃ CHỌN</a></p>
			 <a href="https://bloghoahoc.com/de-thi-thu/thpt-chuyen-le-quy-don-dien-bien-lan-2-2018.html"></a>
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

