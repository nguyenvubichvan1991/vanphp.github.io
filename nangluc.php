<?php
include_once "Database.php";

if(!isset($_POST['btnthem']) || $_POST['btnthem']=="")
{
    $_POST['txtmanl']="";
    $_POST['txtndnl']="";
    
    //$rows= array();
    $db=new DataBase();
    $query="select * from nangluc";
    $rows = $db->exec_select($query);
}

if(isset($_POST['btnthem']))
{
    $db = new Database();
    $manl=$_POST['txtmanl'];
    $ndnl=$_POST['txtndnl'];
    $sql = "insert into nangluc(Manl, Noidungnl) values('$manl','$ndnl')";
	$db->exec_insert($sql);
    $sql2="select * from nangluc";
    $rows = $db->exec_select($sql2);
}
?>

<form name="bd_page" method="post">
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
THÊM THÔNG TIN NĂNG LỰC</h2>
<b>
Mã năng lực: <input type="text" name="txtmanl" size="20" />&nbsp;&nbsp;&nbsp; 
Nội dung năng lực: <input type="text" name="txtndnl" size="12" />&nbsp;&nbsp;&nbsp;  
</b><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="btnthem" value="Thêm" /> &nbsp;&nbsp;&nbsp; 


<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
DANH SÁCH</h3>
<table style="border: 1px solid;">
    <tr>
        <td style="border: 1px solid; width: 30px; text-align: center; background: #D8D8D8; font-style: oblique;"><strong>STT</strong> </td>
        <td style="border: 1px solid; width: 210px; text-align: center; background: #D8D8D8; font-style: oblique;"><strong>mã năng lực</strong></td>
        <td style="border: 1px solid; width: 145px; text-align: center; background: #D8D8D8; font-style: oblique;"><strong>Nội dung</strong> </td>
   </tr>
    <?php
        $stt=0;
        foreach($rows as $r)
        {
    ?>
    <tr>
        <td style="border: 1px solid;"> <?= ++$stt ?></td>
        <td style="border: 1px solid; text-align: center;"> <?= $r['Manl'] ?> </td>
        <td style="border: 1px solid;"> <?= $r['Noidungnl'] ?></td>
    </tr>
    
    <?php 
        }
    ?>
</table>
<?php
    echo "Tổng cộng: ".$stt; 
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="dangnhap.php">Trở về trang chủ <a/> &nbsp;&nbsp;&nbsp; 

</form>