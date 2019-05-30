<?php 
	include("./regi_cmpr.php"); 
	$rid = $_POST['rid']; 
	$rpw = $_POST['rpw']; 
	$rrpw = $_POST['rrpw']; 
	$rmail = $_POST['rmail']; 
	$rhobby = $_POST['rhobby']; 
	$submit = $_POST['submit']; 
	
		
		
	if($rrpw == $rpw && $rpw!=NULL){
		$r_chk  = regi_cmpr($rid, $rpw, $rmail, $rhobby);
		if($r_chk == 1){
			echo "<script> location.replace('http://203.229.206.22/~smdmim0229/visitor_book/main.php'); </script>";
		}
		else{
			echo "<script> alert('wrong'); 
			location.replace('http://203.229.206.22/~smdmim0229/visitor_book/regi.php'); </script>";
		}
	}
?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>register</title>
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
        text-align: right;
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
        text-align: left;
        display : inline-block;
        color : white;
      }
      table.type03 {
        border-collapse: collapse;
        text-align: left;
        align: center;
        line-height: 1.5;
        border-top: 1px solid #ccc;
        border-left: 3px solid #369;
        border-right: 3px solid #369;
        margin : auto;
        background-color: white;
        height: 100px;

        }
      table.type03 th {
        width: 100px;
        padding: 10px;
        font-weight: bold;
        vertical-align: center;
        text-align: center;
        color: #153d73;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
      }
      table.type03 td {
        width: 250px;
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
      .submit_regi{
        width: 160px;
        height: 40px;
        background-color: white;
        border-radius: 20px;
        border: 1px solid #153d73;
        font-weight: bolder;
        color: #369;
      }
      .submit_regi:hover{
        width: 160px;
        height: 40px;
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
      <a class="menu_a1" role="button" href="http://203.229.206.22/~smdmim0229/visitor_book/regi.php">게시판</a>
      <a class="menu_a2" role="button" href="http://203.229.206.22/~smdmim0229/visitor_book/regi.php">회원가입</a>
    </div>
  </div>
    <article class="article_basic">
        <form action="" method="post">
          <table class="type03">
            <br><br><br><br><br>
            <tr>
              <th colspan="2" height="30px" >Welcome to SSJ's studio</th>
            </tr>
            <tr>
              <th>ID</th>
              <td>
                <input type="text" name="rid" class="login_input"/><br>
              </td>
            </tr>
            <tr>
              <th>PW</th>
              <td><input type="password" name="rpw" class="login_input"/></td>
            </tr>
            <tr>
              <th>RE_PW</th>
              <td><input type="password" name="rrpw" class="login_input"/></td>
            </tr>
            <tr>
              <th>E-MAIL</th>
              <td><input type="text" name="rmail" class="login_input"/></td>
            </tr>
            <tr>
              <th>HOBBY</th>
              <td><input type="text" name="rhobby" class="login_input"/></td>
            </tr>
            <tr>
              <td colspan="2"> <input class="submit_regi" type="submit" name="submit" value="submit"> </td>
            </tr>
          </table>
        </form>
    </article>
  </body>
</html>

