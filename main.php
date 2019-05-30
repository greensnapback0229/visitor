<?php
  include("./login_cmpr.php");
  $submit = $_POST['login'];
  $id = $_POST['id'];
  $pw = $_POST['pw'];
	
//login compare
    if(login_cmpr($id, $pw)==1){
	echo "<script> location.replace('http://203.229.206.22/~smdmim0229/visitor_book/main_login.php'); </script>";
	echo "<script> alert('success'); </script>";
    }
    else if(login_cmpr($id, $pw)==2){ 
	echo "<script> alert('ID PW wrong!'); </script>";
    }	
?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>main</title>
    <style media="screen">
    html,body {
	     margin: 0;
	     padding: 0;
     }

      a:link {color: white; text-decoration: none;}
      a:visited { color: white; text-decoration: none;}
      a:hover { color: #6E6E6E; text-decoration: none;}
      .menu_main{
        float: left;
        padding-left: 10px;
      }
      .pos1{
        display : inline-block;
        float: right;
      }
      .menu_a1{
        display: inline-block;
        width:100px;
        height:42px;
        line-height:42px;
        background-color:black;
        text-align: center;
        vertical-align: center;
        border-radius: 15px 15px;
      }
      .menu_a2{
        display: inline-block;
        width:100px;
        height:42px;
        line-height:42px;
        background-color:#81BEF7;
        text-align: center;
        vertical-align: center;
        border-radius: 15px 15px;
      }
      .header_basic{
        background-color: #424242;
        vertical-align: center;
        height: 45px;
        line-height: 45px;
        margin: 0 auto;
        padding-right : 10px;
      }
      .article_basic{
        background-color : #E6E6E6;
        height: 500px;
        color : black;
        height: 560px;
      }
      .header_text{
        display : inline-block;
        color : white;
      }
      table.type03 {
        border-collapse: collapse;
        text-align: left;
        align: center;
        line-height: 1.5;
        width="250px"
        border-top: 1px solid #ccc;
        border-left: 3px solid #369;
        border-right: 3px solid #369;
        margin : auto;
        background-color: white;
        height: 100px;
        width: 450px;
        }
      table.type03 th {
        width : 100px;
        padding: 10px;
        font-weight: bold;
        vertical-align: center;
        text-align: center;
        color: #153d73;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
      }
      table.type03 td {
        height: 30px;
        padding: 10px;
        vertical-align: center;
        text-align: center;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        color: #153d73;
      }
      .table_div{
        margin:auto;
      }
      .login_input{
        align: center;
        line-height: normal;
        padding-left: .8em .5em;
        border-width: thin;
      }
      .submit_login{
        width: 80px;
        height: 80px;
        background-color: white;
        border-radius: 20px;
        border: 1px solid #153d73;
        font-weight: bolder;
        color: #369;
      }
	.submit_login:hover{
        width: 80px;
        height: 80px;
        background-color: #369;
        border-radius: 20px;
        border: 1px solid #153d73;
        font-weight: bolder;
        color: white;
      }
      input[type="text"] { border:none; border-bottom: solid 1px #ccc; -webkit-transition: 0.5s; transition: 0.5s; }
      input[type="text"]:focus { border : none; border-bottom: solid 1px #369; }
      input[type="password"] { border:none; border-bottom:solid 1px #ccc; -webkit-transition: 0.5s; transition: 0.5s; }
      input[type="password"]:focus { border:none; border-bottom: solid 1px #369; }
    </style>
  </head>
  <body>
    <div class="header_basic">
      <a class="menu_main" role="button" href="http://203.229.206.22/~smdmim0229/visitor_book/main.php">SSJ's Studio__main</a>
      <div class="pos1">
      <a class="menu_a1" role="button" href="http://203.229.206.22/~smdmim0229/visitor_book/a.php">게시판</a>
      <a class="menu_a2" role="button" href="http://203.229.206.22/~smdmim0229/visitor_book/regi.php">회원가입</a>
    </div>
    </div>

    <article class="article_basic">
        <form action="" method="post">
          <table class="type03">
            <br><br><br><br><br><br><br>
            <tr>
              <th colspan="2" height="30px" >login</th>
              <td rowspan="3" width="50px">
                <input type="submit" name="login" value="login" class="submit_login">
              </td>
            </tr>
            <tr>
              <th>ID</th>
              <td>
                <input type="text" name="id" class="login_input"/><br>
              </td>
            </tr>
            <tr>
              <th>PW</th>
              <td><input type="password" name="pw" class="login_input"/></td>
            </tr>
          </table>
        </form>
    </article>
  </body>
</html>

