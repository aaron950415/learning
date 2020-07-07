<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../common.css">
    <link rel="stylesheet" href="./common.css">
    <link rel="stylesheet" href="../manage control page/font_1654622_zw5leh6po/iconfont.css" >
    <link rel="icon" href="../source/book.png">
    <title>Search</title>
    <style>
        .area1 {background: black 100% 100%  url("../source/bcg2.jpg") ;height: 600px;box-shadow:0 0 30px 20px white ;}
        .area2 {background: black 100% 100%  url("../source/bcg2.jpg") ;background-size: cover; height: 600px;box-shadow:0 0 30px 20px white inset ;}
        .pp{position: relative;margin-top:25%; margin-left: 50%}
        .ppp{position: relative;left:5px;top:3px}
        .size{width: 80px;}
        .de{position: relative;left: auto;top: 15%;}
        .des{background-color: white;text-align: center;}
        .text1{width: 600px; height: 600px;; }
        .p5{ font-size: 47px;padding-left: 50% ;;font-weight: bolder;color:red;}
    </style>
        <script>
            function search(){
                var change=document.getElementById("shift");
                change.className="ppp";
                var book = getElementById("shift").value;
                return book;
            }
        </script>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="wt19854029";
    
    $_mysqli = new mysqli($servername, $username, $password);
    
    $_sql = file_get_contents('./wt19854029.sql');
    $_arr = explode(';', $_sql);
    $_mysqli->query('set names utf8;'); 
    foreach ($_arr as $_value) {
        $_mysqli->query($_value.';');
        }
    

 //   $con = mysqli_connect($servername, $username, $password,$db);
    // $db=mysqli_select_db($con,"wt19854029");
    // if(empty($db))
    //  {   
    //     mysqli_query($con,"create DATABASE wt19854029;");
    //     $db=mysqli_select_db($con,"wt19854029");
    //     mysqli_query($con,"create TABLE book(
    //         bookId int primary key,
    //         bookName varchar(255),
    //         author varchar(255),
    //         book_ISBN int,
    //         edition varchar(255)
    //         )");
    //     mysqli_query($con,"INSERT into book
    //     (bookId,bookName,author,book_ISBN,edition)
    //     SELECT
    //     1001,'Information Technology Project Management','Kathy Schwalbe',9781337101356,'9th'
    //     UNION ALL
    //     SELECT 1002,'A CEOs Survival Guide to Information Technology','Bob Coppedge',1579325256,'Kindle'       
    //     UNION ALL
    //     SELECT 1003,'Information Technology and Military Power','Jon R. Lindsay',12463563256,'Kindle'       

    //     UNION ALL
    //     SELECT 1004,'Cambridge International AS Level Information Technology Students Book',' Graham Brown',45779325256,'Student &Kindle'       

    //     UNION ALL
    //     SELECT 1005,'Ethics in Information Technology','George Reynolds', 974677405874 ,'7th'       
    //     UNION ALL
    //     SELECT 1006,'Fluency With Information Technology','Lawrence Snyder',108669325256,'Global'
    //     ");

    // }
     

    ?>

</head>
<body>
    <div id="head" class="container">
        <div class="head-logo l" >
            <a   href="../index.html" >
                <img class="l" src="../source/book.png" width="40px" height="40px" alt="Aaron's book store" title="Aaron's book store"><span class="l">Aaron's book store</span>
            </a>
           
        </div>
        <ul class="head-menu r" >
            <li > 
                <a href="../index.html">HOME</a>
            </li>
            <li>
                <a href="./list.html">BOOK LIST</a>
            </li>
            <li>
                <a href="./page.html">SEARCH</a>
            </li>

            <li>
                <a href="./person.html">DESIGNER</a>
            </li>
        </ul>
    </div>
  <main>

        <div class="container">
            <div class="area1">
            <div class="area2"> 
                <div >

                <form action="page1.php" method="get">
                  <span class="main">
                  <input id="shift"  class=" ppp" type="text" name="q" value="">
                  </span>
                  
                  <input  type="submit" class="btn btn-primary size" onclick="search()"  value="Search"><span></span>
                  <form action="page1.php" method="get">
                  <input  type="submit" class="btn btn-primary size" name="p" onclick="search()"  value="All book"><span></span>

                </form>

                </form>
                </div>
                <div class="de">
                <table class="des" border="8">
                <?php
               error_reporting(0);

                $b=$_GET["p"];
                $a=$_GET["q"];
                if(isset($b))
                {
                    $sql = mysqli_query($_mysqli,"SELECT * FROM book");
                    $datarow = mysqli_num_rows($sql);
                    echo "                    <tr>
                    <th>bookId</th>
                    <th>bookISBN</th>
                    <th>bookName</th>
                    <th>author</th>
                    <th>edition</th>
                    </tr>";
                } else if(empty($a)){
                        echo "<DIV class='text1'><p class='p5'>do not find this book</p></DIV>";
                }else{
                    $sql = mysqli_query($_mysqli,"SELECT * FROM book where bookName like '%$a%' ");
                    $sql2 = mysqli_query($_mysqli,"SELECT * FROM book where bookName='ttt'  ");
                    $datarow = mysqli_num_rows($sql);   
                    if(empty($datarow)){
                        echo "<DIV class='text1'><p class='p5'>do not find this book</p></DIV>";
                    } else {
                        echo " <tr>
                        <th>bookId</th>
                        <th>bookISBN</th>
                        <th>bookName</th>
                        <th>author</th>
                        <th>edition</th>
                        </tr>";}
                }
                   
                   for($i=0;$i<$datarow;$i++){
                    $sql_arr = mysqli_fetch_assoc($sql);
                    $id = $sql_arr['bookId'];
                    $isbn = $sql_arr['book_ISBN'];
                    $name = $sql_arr['bookName'];
                    $author = $sql_arr['author'];
                    $edition = $sql_arr['edition'];
                    echo "<tr >
                      <td>".$id."</td>
                      <td>".$name."</td>
                      <td>".$isbn."</td>
                      <td>".$author."</td>
                      <td>".$edition."</td>
                    </tr>";
                }
                ?>
                      
                      
                
                </table>
                </div>
                </div>
    </div>
    </div>
                                
  </main>
</body>
</html>