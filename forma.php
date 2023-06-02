<!DOCTYPE html>
<html lang="en">
    <script>
        window.onload = function(){
            setInterval(clockPainting, 1000);
        }
    </script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт web-сдудії "Web-DECO"</title>
    <!-- ================= JavaScript ================= -->
    <script src="js/clock1.js"></script>
    <script type="text/javascript">
        function send(){
            var valid = true;
            var elems = document.forms[0].elements;
            for(var i = 0; i < document.forms[0].length;i++){
                if(elems[i].getAttribute('type')=='text' || elems[i].getAttribute('type')=='password' || elems[i].getAttribute('type')=='eamil'){
                    if(elems[i].value == ''){
                        elems[i].style.border = '2px solid red';
                        valis = false;
                    }
                }
            }
            if(!valid){
                alert('Заповніть всі поля :(');
                return false;
            }
        }
    </script>
    <style>
        .shadowtext{
            text-shadow: 1px 3px 2px white, 0 0 1em red;
            color: #210042;
            font-size: 2em;
        }
    </style>
</head>
<body background="images/bg.jpg">
    <!-- ======================= Каркас сайта ======================= ==== --> 
    <table border="1" align="center" cellpadding="10"> <tr>
         <td background ="" colspan="2" height="150" align="right" hspace="5" >  
        <font size="5" color="MAroon"><h1 class="shadowtext">Сайт Web-студії "Web-DECO"</h1></font> 
    </td> </tr> <tr> <td colspan="2">
        <fond size="4"><b>
        <a href="#">Головна</a> &nbsp;&nbsp;
        <a href="#">Фотогалерея</a> &nbsp;&nbsp;
        <a href="#">Телефони</a> &nbsp;&nbsp;
        <a href="#">Статистика</a> &nbsp;&nbsp;
        <a href="#">Зареєстровані</a> &nbsp;&nbsp;
        </b>
        </fond>
    </td> </tr> <tr> <td width="30%" valign="top">
        <h1 align="center">Дякую за реєстрацію :)</h1>
        <?php
        $st = $_POST['name2'].";".$_POST['name1'].";".$_POST['nic1'].";".$_POST['emaol'].";".$_POST['password']."\n";
        $fp = fopen("baza.txt","a");
        $test = fwrite($fp,$st);
        echo "<h2 aligb='cebter'>Ви ввели :".$_POST['name2'].",".$_POST['name1'].",".$_POST['nic1'].",".$_POST['emaol'].",".$_POST['password']."</h2>";
        ?>
        </h1>
            </td> 
        </tr>
         <tr>
             <td background="images/bg-3.jpg" colspan="2" valign="middle" height=" 90">
                 <font size="4">Сайт розробив "Миронюк Дмитро"</font>
            </td>
        </tr> 
    </table> <!-- ======================================= ======================= -->
</body>
</html>