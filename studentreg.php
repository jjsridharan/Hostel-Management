<html>
<head>
<title>
STUDENT MANAGEMENT SYSTEM
</title>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["Student_First_Name"].value;
var b=document.forms["reg"]["Student_Last_Name"].value;
var c=document.forms["reg"]["Gender"].value;
var d=document.forms["reg"]["Address"].value;
var e=document.forms["reg"]["Landline"].value;
var f=document.forms["reg"]["Student_ID"].value;
var h=document.forms["reg"]["Password"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Gender name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("address must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("contact must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("picture must be filled out");
  return false;
  }
if (g==null || g=="")
  {
  alert("username must be filled out");
  return false;
  }
if (h==null || h=="")
  {
  alert("password must be filled out");
  return false;
  }
}
</script>
</head>
<body background="images\background.png" >
<center>
<img src="images\STUDENTMANAGEMENTSYSTEM.png ">
<br>
<br>
<br>
<form name="reg" action="codec_exec.php" onsubmit="return validateForm()" method="post">
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td colspan="2">
<div align="center">
 <?php 
		?>	
	    </div></td>
  </tr>
  <tr>
    <td width="95"><div align="right">First Name:</div></td>
    <td width="171"><input type="text" name="Student_First_Name" /></td>
  </tr>
  <tr>
    <td><div align="right">Last Name:</div></td>
    <td><input type="text" name="Student_Last_Name" /></td>
  </tr>
  <tr>
    <td><div align="right">Gender:</div></td>
    <td><input type="text" name="Gender" /></td>
  </tr>
  <tr>
    <td><div align="right">Address:</div></td>
    <td><input type="text" name="Address" /></td>
  </tr>
  <tr>
    <td><div align="right">Landline.:</div></td>
    <td><input type="text" name="Landline" /></td>
  </tr>
  <tr>
    <td><div align="right">Student ID:</div></td>
    <td><input type="text" name="Student_ID" /></td>
  </tr>
 <tr>
    <td><div align="right">Password:</div></td>
    <td><input type="password" name="Password" /></td>
  </tr>
 <tr>
    <td><div align="right">Course ID:</div></td>
    <td><input type="text" name="Course_ID" /></td>
  </tr>
  <tr>
    <td><div align="right">Semester:</div></td>
    <td><input type="text" name="Semester" /></td>
  </tr>
  
  <tr>
    <td><div align="right">Father's Name:</div></td>
    <td><input type="text" name="Father_Name" /></td>
  </tr>
  <tr>
    <td><div align="right">Mother's Name:</div></td>
    <td><input type="text" name="Mother_Name" /></td>
  </tr>
  <tr>
    <td><div align="right">Blood Group:</div></td>
    <td><input type="text" name="Blood_Group" /></td>
  </tr>
  <tr>
    <td><div align="right">DOB:</div></td>
    <td><input type="text" name="DOB" /></td>
  </tr>
  <tr>
    <td><div align="right">Personal No.:</div></td>
    <td><input type="text" name="Personal_No" /></td>
  </tr>
  
  <tr>
    <td><div align="right">Campus:</div></td>
    <td><input type="text" name="Campus" /></td>
	</tr>
  <tr>
  <tr>
    <td><div align="right">Hosteler or Days Scholar:</div></td>
    <td><input type="text" name="Hosteler_Days_Scholar" /></td>
	</tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td>
  </tr>
</table>
</form>
</body>

</html>