<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="jquery/jquery.mobile-1.0b1.min.css" />
        <link rel="stylesheet" href="css/index.css"/>
        <link rel="stylesheet" href="css/chat.css"/>
        <script src="jquery/jquery-1.6.1.min.js" type="text/javascript"></script>
        <script src="jquery/jquery.mobile-1.0b1.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>



        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.mobile.scrollview.js"></script>
        <script src="js/scrollview.js"></script>

    </head>
    <body>
        <div id="main_page" data-role="page">
            <div data-role="header" data-theme="b" data-backbtn="false">

                <h2>Home</h2>

                <a id="prev_button" data-role="button" data-icon="arrow-l">上一页</a>
                <a id="next_button" data-role="button" data-icon="arrow-r" class="ui-btn-right">下一页</a>

                <a id="edit_button" data-role="button" data-icon="gear" class="ui-btn-right">编辑</a>
                <!--                <a id="cancel_button" data-role="button" data-icon="delete" class="ui-btn-right">取消</a>-->
                <div data-role="navbar">
                    <ul>
                        <li><a id="main_tab" href="" class="ui-btn-active">周围的人</a></li>
                        <li><a id="friend_tab" href="" data-transition="none">好友状态</a></li>
                        <li><a id="mine_tab" href="">我的主页</a></li>
                    </ul>
                </div>

            </div>

            <div id="neighbour_content" data-role="content" class="l-neighbour l-content" data-scroll="true">
                <!-- Use ajax to load content-->

            </div>

            <div data-role="content" id="friend_content" class="l-content l-friend" data-scroll="true">
                <!--Use ajax to load content-->
                <ul data-role="listview" class="l-list" data-dividertheme="e">

                    <li class="l-friend-more">
                        <a>查看更多好友</a>
                    </li>
                </ul>
            </div>

            <div data-role="content" id="mine_content" class="l-content l-mine" data-scroll="true">
                <ul class="l-detail l-profile-view" data-role="listview" data-inset="true">
                    <!--Use ajax to load content-->
                </ul>
            </div>

            <div data-role="footer" data-theme="b">
                <div data-role="navbar">
                    <ul>
                        <li><a id="search_button" href="search.php" data-transition="slideup">搜索</a></li>
                        <li><a id="recommend_button" href="" data-transition="slideup">推荐</a></li>
                        <!--                        <li><a id="next_button" >下一页</a></li>-->
                        <li><a id="config_button">设置</a></li>
                        <!--                        <li><a id="prev_button">上一页</a></li>-->

                    </ul>
                </div>
            </div>

        </div>
    </body>
</html>
