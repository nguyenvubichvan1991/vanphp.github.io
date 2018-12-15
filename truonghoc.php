<?php
include_once "Database.php";

if(!isset($_POST['btnthem']) || $_POST['btnthem']=="")
{
    $_POST['txttentruong']= "";
    $_POST['txtuser']="";
    $_POST['txtcontent']="";
    
    //$rows= array();
    $db=new DataBase();
    $query="select * from schools";
    $rows = $db->exec_select($query);
}

if(isset($_POST['btnthem']))
{
    $db = new Database();
    $names=$_POST['txttentruong'];
    $user=$_POST['txtuser'];
    $nd=$_POST['txtcontent'];
    $sql = "insert into schools(Names, Username, Manl) values('$names','$user','$nd')";
	$db->exec_insert($sql);
    $sql2="select * from schools";
    $rows = $db->exec_select($sql2);
}
?>

<form name="bd_page" method="post">
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
THÊM THÔNG TIN TRƯỜNG HỌC</h2>
<b>Tên trường: <input type="text" name="txttentruong" size="12" />&nbsp;&nbsp;&nbsp;
UserName: <input type="text" name="txtuser" size="20" />&nbsp;&nbsp;&nbsp; 
Content: <input type="text" name="txtcontent" size="12" />&nbsp;&nbsp;&nbsp;  
</b><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="btnthem" value="Thêm" /> &nbsp;&nbsp;&nbsp; 


<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
DANH SÁCH TRƯỜNG HỌC</h3>
<table style="border: 1px solid;">
    <tr>
        <td style="border: 1px solid; width: 30px; text-align: center; background: #D8D8D8; font-style: oblique;"><strong>STT</strong> </td>
        <td style="border: 1px solid; width: 200px; text-align: center; background: #D8D8D8; font-style: oblique;"><strong>Tên trường</strong> </td>
        <td style="border: 1px solid; width: 210px; text-align: center; background: #D8D8D8; font-style: oblique;"><strong>UserName</strong></td>
        <td style="border: 1px solid; width: 145px; text-align: center; background: #D8D8D8; font-style: oblique;"><strong>Content</strong> </td>
   </tr>
    <?php
        $stt=0;
        foreach($rows as $r)
        {
    ?>
    <tr>
        <td style="border: 1px solid;"> <?= ++$stt ?></td>
        <td style="border: 1px solid; text-align: center;"> <?= $r['Names'] ?> </td>
        <td style="border: 1px solid;"> <?= $r['Username'] ?></td>
        <td style="border: 1px solid; text-align: center;"> <?= $r['Manl'] ?></td>
    </tr>
    
    <?php 
        }
    ?>
</table>
<?php
    echo "Tổng cộng: ".$stt; 
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="~/dangnhap.php">Trở về trang chủ <a/> &nbsp;&nbsp;&nbsp; 

</form>
