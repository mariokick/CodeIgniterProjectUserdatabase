<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<link rel="stylesheet" type="text/css" href=http://127.0.0.1/UserDatabaseAll/css-table.css>
<html lang="en">
<head>
    <title></title>
<style>
table {
	 border: 2px solid black;
	 
  width:100%; 
  

}
th, td {
    padding: 5px;
    text-align: center;
    border: 1px solid black;
    border-collapse: collapse;
    background-color: #9999FF;
    
}
th {
    color:black;
     width:20%; 
    background-color: #0099FF;
}
td {
    color:white; 
     width: 20%; 
    
}
</style>
</head>
<body>
<center>

<table id="trvel">

<th scope="col" colspan="8" >INSERT DATA</th>
        
    
        <tr >
          <th scope="col">MebmerID</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Name</th>
            <th scope="col">Tel</th>
            <th scope="col">E-mail</th>
            <th scope="col">Insert</th>
           <tr>

         <tr>    
           
<form action="./insert" method="post" width="100%">
 
<td><input type="number" name="u_Memberid" placeholder="Please Enter MemberID" ></td>
<td><input type="text" name="u_Username" placeholder="Please Enter Username"></td>
<td><input type="text" name="u_Password" placeholder="Please Enter Password"></td>
<td><input type="text" name="u_Name" placeholder="Please Enter Name"></td>
<td><input type="number" name="u_Tel" placeholder="Please Enter Tel"></td>

<td><input type="Email" name="u_email" placeholder="Please Enter Email"></td>
<td><input type="submit" value="Insert"></td>

        

</form>
<tr>

</table>




</table>




<br>
<tbody>
 <table id="travel" >
       <th scope="col" colspan="8" >Member Table</th>
      <tr>
        <th>MemberID</th>
        <th>Username</th>       
        <th>Password</th>
        <th>Name</th>
        <th>Tel</th>
        <th>Email</th>
      </tr>
    <?php
        foreach($member->result() as $member){ //record
            
            echo '<tr>';
            echo'<td align="center" >'.$member->MemberID. '</td>';
            echo'<td align="center">'.$member->Username. '</td>';//ชื่อคอลัม
            echo'<td align="center">'.$member->Password. '</td>';
            echo'<td align="center">'.$member->Name. '</td>';
            echo'<td align="center">'.$member->Tel. '</td>';
            echo'<td align="center">'.$member->Email. '</td>';
            echo '</tr>';

        }	
    ?>
    
</tbody>
 </table>

 <br>

 <table id="travel" width="100%" >

    
    
            
            <th scope="col" colspan="2">DELETE DATA</th>
        
        
        <tr>
            <th scope="col" width="50%">MemberID</th>
            <th scope="col" width="50%">Delete</th>
        </tr>        
    </thead>
   
    
    <tbody>
        <tr>
            <form action="./delete_member_id" method="post" >
           <td><input name="del_Memberid" align='center' type="number"style="width:100%;"/></td>
            <td><input type="submit"style="width:100%;" value="Delete"/></td>
            </form>
        </tr>
        
    </tbody>

</table>
<br>
<table id="travel" width="100%">

    
    
            
            <th scope="col" colspan="8" >UPDATE DATA</th>
        
        
        <tr>
         <th scope="col">MemberID </th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Name</th>
            <th scope="col">Tel</th>
            <th scope="col">E-mail</th>
            <th scope="col">Update</th>
        </tr>        
    </thead>
    
    <tfoot>
    </tfoot>
    
    <tbody>
        <tr>
            <form action="./update" method="post" >
 <td><input type="number"  name="u_Memberid" placeholder="Please Enter MemberID" ></td>
<td><input type="text"  name="u_Username" placeholder="Please Enter Username"></td>
<td><input type="text" name="u_Password" placeholder="Please Enter Password"></td>
<td><input type="text"  name="u_Name" placeholder="Please Enter Name"></td>
<td><input type="number" name="u_Tel" placeholder="Please Enter Tel"></td>
<td><input type="Email"  name="u_email" placeholder="Please Enter Email"></td>
<td><input type="submit"  value="Update"></td>
            </form>
        </tr>
        
    </tbody>

</table>
 <table id="travel" width="100%" >

    
    
            
            <th scope="col" colspan="2">Search DATA</th>
        
        
        <tr>
            <th scope="col" width="50%">MemberID</th>
            <th scope="col" width="50%">Search</th>
        </tr>        
    </thead>
   
    
    <tbody>
        <tr>
            <form action="./Search_member_id" method="post" >
           <td><input name="Search_Memberid" align='center' type="number"style="width:100%;"/></td>
            <td><input type="submit"style="width:100%;" value="Search"/></td>
            </form>
        </tr>
        
    </tbody>

</table>

<br>

<br>
</center>
</body>
</html>