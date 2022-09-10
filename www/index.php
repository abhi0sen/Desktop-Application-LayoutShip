<?php
// $_SESSION['UserId'] = 0;
// session_start();
// $userId = $_SESSION['UserId'];
// if ($userId == 0) {
//     echo "<script> window.location.href = '../index.php' </script>";
// }
// else if ($userId>0) {
    // if (session_status() === PHP_SESSION_NONE) {
        // session_start();
        // }
        include './mysql/read.php';
        // echo $_SESSION['para'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Styler</title>

    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./css/style.css">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- // Javascript -->
    <script src="./js/validations.js"></script>
    <!-- <script src="./js/FontSize.js"></script> -->
    <script src="./js/FontFamily.js"></script>
    <script src="./js/insertionData.js"></script>
    <script>
    </script>
</head>

<body onload="fontFamily(), fontSize(), cursorStyle(), enableEditMode()">
    <section class="container-fluid align-content-center d-flex border border-4 overflow-auto">
        <section class="w2 border border-2 my-2">
            <button class="btn-sm w-100 left dropdown-toggle" id="sample">Sample Layout</button>
            <ul id="samp-list">
                <?php while ($arr = mysqli_fetch_array($result)) { ?>
                    <li id="samp-list-item" class="cursor">
                        <form action="./mysql/SamplePrint.php" method="post">
                            <input type="text" name="id" value="<?php echo $arr['SampleId']; ?>" hidden>
                            <button class="btn hide-save" onclick="hideIt('1')"><?php echo $arr['Title']; ?></button>
                        </form>
                    </li>
                <?php } ?>
            </ul>
            <button class="btn-sm w-100 dropdown-toggle" id="saved">Saved Layouts</button>
            <ul id="save-list">
                <?php $result2 = mysqli_query($con, $query2);
                while ($arr2 = mysqli_fetch_array($result2)) { ?>
                    <li>
                        <form action="./mysql/LayoutPrint.php" method="post">
                            <input type="text" name="id" value="<?php echo $arr2['SampleId']; ?>" hidden>
                            <button class="btn hide-save" type="submit">
                                <?php echo $arr2['Header'];
                                ?></button>
                        </form>
                    </li>
                <?php }
                //  }
                ?>
            </ul>
        </section>
        <section class="w-100 mx-2">
            <nav class="d-flex color padding">

                <!-- FontFamily -->
                <select name="" id="font" onchange="execVal('fontName',this.value)">
                    <option value="Algerian" selected>Algerian</option>
                    <option value="Arial">Arial</option>
                    <option value="Arial Narrow">Arial Narrow</option>
                    <option value="Calibri">Calibri</option>
                    <option value="Cambria">Cambria</option>
                    <option value="Helvetica">Helvetica</option>
                    <option value="Garamond">Garamond</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Times New Roman" >Times New Roman</option>
                    <option value="Verdana">Verdana</option>
                    <!-- <option value="Algerian">algerian</option> -->
                </select>

                <!-- <select name="" id="size" onchange="FontSize(), execVal('FontSize', this.value)"> -->
                <select name="" id="size" onchange="fontSize()">
                    <option value="12" hidden>12</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8">8</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="14">14</option>
                    <option value="16">16</option>
                    <option value="18">18</option>
                    <option value="20">20</option>
                    <option value="22">22</option>
                    <option value="24">24</option>
                    <option value="28">28</option>
                    <option value="32">32</option>
                    <option value="36">36</option>
                    <option value="40">40</option>
                    <option value="44">44</option>
                    <option value="48">48</option>
                    <option value="52">52</option>
                    <option value="56">56</option>
                    <!-- <option value="4" hidden>4</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option> -->
                </select>

                <button class="btn-sm" id="bold" onclick="Edit('bold')"><b>B</b></button>&nbsp;&nbsp;
                <button class="btn-sm" id="line" onclick="Edit('underline')"><u>U</u></button>&nbsp;&nbsp;
                <button class="btn-sm" id="italic" onclick="Edit('italic')"><i>I</i></button>&nbsp;&nbsp;

                <a class="text-light ms-auto" id="signin" href="./assets/UserLogIn.php"><button class="btn-sm bg-primary ms-auto"> 
                    <?php if (isset($_SESSION['UserId']) && !empty($_SESSION['UserId'])){
                        echo $_SESSION['UserId'];
                        echo "<script> $('#singin').style.pointer-events= 'none' </script>";
                    } else{
                        echo "SignIn";
                    }?></button></a>
            </nav>
            <hr>
            <div class="">
                <span id="files" class ="text-start">
                    <button class="btn" id="btn-file">YourLayout</button>
                </span>
                <button id="add" onclick="addElement('')"><span class="glyphicon glyphicon-plus"></span></button>
                <button id="clear" class ="end btn btn-outline-secondary">Clear Screen</button>
            </div>
            <div id="file">
                <div class="border height border-2 w-100 overflow-scroll" id="layout">
                
                    <iframe allow="clipboard-read; clipboard-write" name="richTextField" id = "rich" style="width:100%;height: 100%;" src="layout.php?parameterToPassToScrapper=valueToPassToScrapper">
                        <!-- src="<html> -->
                    
                    
                    <!-- </html>"> -->
                </iframe>
                
            </div>


            </div>
            
            <!-- <form action="./mysql/insert.php" method="post"> -->
                <input type="text" name="content" id="hidden_text" hidden>
            <input type="text" name="header" id="header" hidden>
            <div class="m-2">
                <center>
                    <button type="submit" class="btn-sm btn-dark px-4 mx-2" id="save" onclick="dataTransfer(), Header()">Save</button>
                    <button class="btn-sm btn-outline-dark px-4" id="copy" >Copy</button>
                </center>
            </div>
            <!-- </form> onclick="ClipBoard()" -->
        </section>
    </section>
</body>
<?php
if (isset($_SESSION['para'])) {
        session_destroy();
        // header('location:../index.html');   
    } ?>
</html>
