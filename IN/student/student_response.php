<!DOCTYPE html>
<html>
<head>
        
        <meta charset="UTF-8"/> <!--網頁利用UTF-8編碼方式 才能顯示中文-->   <!--<meta charset="UTF-8"></meta> 因為meta中間無內容,</meta>可省略-->
        <meta name="description" content="文化大學企業實習媒合網站"/> <!--讓搜尋引擎更了解這個網站的內容-->
        <meta name="author" content="Cuni"/>
        <meta name="keywords" content="專題,企業實習,測試"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!--width=device-width 根據瀏覽的裝置大小做畫面調整,initial-scale=1.0 初始縮放比為100%-->
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/student.css">
        <title>文化大學企業實習媒合網站</title>
</head>

<body>
    <div id="wrap" >
        
        <div id="header">
            <div id="LogoBox"> 
                <a href="https://www.pccu.edu.tw/"><img src="../../image/skyLogo.png"/></a> 
                <span style="border-left: solid 1px; padding-left: 10px ; font-size: 42px" >實習平台</span>
            </div>
            
        
            <div id="UserBox">
                <p>您好 XXX</p>
            </div>
        
        </div>
    
        <div id="mainNav">
            <div id="mainNavTop">
                <ul>
                    <li class="">
                        <a class="STUctrl" href="#STU">
                            <img src="../../image/畢業帽帽.png" style="top: 55px; width: 50px" />
                            <span>學生實習入口</span>
                        </a>
                    </li>
                    <li>
                        <a class="USctrl" href="#US">
                            <img src="../../image/關於我們.png" style="width: 50px"/>
                            <span>關於我們</span>
                        </a>
                    </li>
                </ul>
            </div> 
        
            <div id="mainNavCon">
                <!-- STU -->
                <div class="STU">
                    <ul id="STU">
                        <li><a href="student_method.php">申請辦法</a></li>
                        <li><a href="student_resume.php">履歷維護</a></li>
                        <li><a href="student_apply.php">實習應徵</a></li>
                        <li><a href="student_report.php">繳交實習報告</a></li>
                        <li><a href="student_response.php">學生意見反應</a></li>
                    </ul>
                </div>
                <!-- CPN -->
                <div class="CPN">
                    <ul id="CPN">
                        <li><a href="#CPN01">廠商申請辦法</a></li>
                        <li><a href="#CPN02">實習進度公告</a></li>
                        <li><a href="#CPN03">學生意見反應</a></li>
                        <li><a href="#CPN04">專案表單</a></li>         
                        <li><a href="#CPN05">雇主滿意度調查</a></li>
                    </ul>
                    
                </div>
                <!-- TCH -->
                <div class="TCH">
                    <ul id="TCH">
                        <li><a href="#TCH01">實習進度公告</a></li>
                        <li><a href="#TCH02">實習職務列表</a></li>
                        <li><a href="#TCH03">實習課程/專案</a></li>
                        <li><a href="#TCH04">教師訪視紀錄</a></li>         
                        <li><a href="#TCH05">學生意見反應處理</a></li>
                        <li><a href="#TCH06">專案表單</a></li>
                    </ul>
                    
                </div>
                <!-- US -->
                <div class="US">
                    <ul id="US">
                        <li><a href="#US01">關於我們</a></li>
                        <li><a href="#US02">參考資料</a></li>
                    </ul>
                    
                </div>
            </div> <!-- mainNavCon -->
        </div> <!-- mainNav  -->

        <div id="content">
            <h1>意見反應</h1>

            <div class="messageboard">
                <div class="post">
                    <ul>
                        <?php
                        include "../user_connect.php";
                        $sql = "SELECT `chat_id`, `chat_maker`, `chat_subject`, `chat_content`, `chat_date` FROM `chat`  ORDER BY `chat_id`";
                        $total = select($sql);
                        while($num = f_array($total)){
                        ?>
                        <li>
                            <div class="author"><?echo $num["chat_maker"]?></div>
                            <div class="article"><?echo $num["chat_subject"]?></div> 
                            <div class="time"><?echo $num["chat_content"]?></div> <hr>
                            <div class="message"><?echo $num["chat_date"]?></div>
                        </li>
                        <?php } ?>
                        <li>
                            <div class="author">林XX</div>
                            <div class="article">林XX真的帥氣無限耶...</div> 
                            <div class="time">2022/5/17</div> <hr>
                            <div class="message">真的帥</div>
                        </li>
                        <li>
                            <div class="author">劉XX</div>
                            <div class="article">給酷...</div> 
                            <div class="time">2022/5/17</div> <hr>
                            <div class="message">有人無情給酷</div>
                        </li>
                    </ul>
                
                    <form class="leavecomment" action = "student_response_input.php " method = "post">
                        <input name = "maker" type = "text">作者
                        <br>
                        <input name = "subject" type = "text">大綱
                        <br>
                        <input name = "content" type = "text">內容
                        <br>
                        <input type="submit" value = "送出">
                    </form>
                </div>
        </div> <!-- content -->
    </div> <!-- wrap -->
              

<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/index.js"></script>
</body>

</html>