<?php include_once "https://dlb16ht201.herokuapp.com/Database.php";

if(!isset($_POST['btnthem']) || $_POST['btnthem']=="")
{
    $_POST['txtusername']= "";
    $_POST['txtmanl']="";
    //$rows= array();
    $db=new DataBase();
    $query="select * from tblusers";
    $rows = $db->exec_select($query);
}

if(isset($_POST['btnthem']))
{
    $db = new Database();
    $usernames=$_POST['txtusername'];
    $manl=$_POST['txtmanl'];
    $sql = "insert into tblusers(Username, Manl) values('$usernames','$manl')";
	$db->exec_insert($sql);
    $sql2="select * from tblusers";
    $rows = $db->exec_select($sql2);
}
?>

<form name="bd_page" method="post">
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
THÊM THÔNG TIN NGƯỜI DÙNG</h2>
<b>Username: <input type="text" name="txtusername" size="12" />&nbsp;&nbsp;&nbsp;
Mã năng lực: <input type="text" name="txtmanl" size="20" />&nbsp;&nbsp;&nbsp;  
</b><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="btnthem" value="Thêm" /> &nbsp;&nbsp;&nbsp; 


<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
DANH SÁCH người dùng</h3>
<table style="border: 1px solid;">
    <tr>
        <td style="border: 1px solid; width: 30px; text-align: center; background: #D8D8D8; font-style: oblique;"><strong>STT</strong> </td>
        <td style="border: 1px solid; width: 200px; text-align: center; background: #D8D8D8; font-style: oblique;"><strong>Tên người dùng</strong> </td>
        <td style="border: 1px solid; width: 210px; text-align: center; background: #D8D8D8; font-style: oblique;"><strong>mã năng lực</strong></td>
   </tr>
    <?php
        $stt=0;
        foreach($rows as $r)
        {
    ?>
    <tr>
        <td style="border: 1px solid;"> <?= ++$stt ?></td>
        <td style="border: 1px solid; text-align: center;"> <?= $r['Username'] ?> </td>
        <td style="border: 1px solid;"> <?= $r['Manl'] ?></td>
    </tr>
    
    <?php 
        }
    ?>
</table>
<?php
    echo "Tổng cộng: ".$stt; 
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://dlb16ht201.herokuapp.com/dangnhap.php">Trở về trang chủ <a/> &nbsp;&nbsp;&nbsp; 

</form>
