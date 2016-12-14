<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="applicable-device" content="pc">
        <meta http-equiv="Cache-Control" content="no-transform" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" type="text/css" media="screen" href="/blog/Public/style/style.css" />
        <script src="/blog/Public/style/jquery.min.js"></script>
        <script src="/blog/Public/style/post.js"></script>
        <title><?php echo ($arts["title"]); ?>_倬空间</title>
        <script type="text/javascript">
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/72x72\/",
                "ext": ".png",
                "source": {
                    "concatemoji": "http:\/\/yispace.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.2"
                }
            };
            ! function(a, b, c) {
                function d(a) {
                    var c, d, e, f = b.createElement("canvas"),
                        g = f.getContext && f.getContext("2d"),
                        h = String.fromCharCode;
                    if(!g || !g.fillText) return !1;
                    switch(g.textBaseline = "top", g.font = "600 32px Arial", a) {
                        case "flag":
                            return g.fillText(h(55356, 56806, 55356, 56826), 0, 0), f.toDataURL().length > 3e3;
                        case "diversity":
                            return g.fillText(h(55356, 57221), 0, 0), c = g.getImageData(16, 16, 1, 1).data, d = c[0] + "," + c[1] + "," + c[2] + "," + c[3], g.fillText(h(55356, 57221, 55356, 57343), 0, 0), c = g.getImageData(16, 16, 1, 1).data, e = c[0] + "," + c[1] + "," + c[2] + "," + c[3], d !== e;
                        case "simple":
                            return g.fillText(h(55357, 56835), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0];
                        case "unicode8":
                            return g.fillText(h(55356, 57135), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0]
                    }
                    return !1
                }

                function e(a) {
                    var c = b.createElement("script");
                    c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
                }
                var f, g, h, i;
                for(i = Array("simple", "flag", "unicode8", "diversity"), c.supports = {
                        everything: !0,
                        everythingExceptFlag: !0
                    }, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
                c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
                    c.DOMReady = !0
                }, c.supports.everything || (g = function() {
                    c.readyCallback()
                }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
                    "complete" === b.readyState && c.readyCallback()
                })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
            }(window, document, window._wpemojiSettings);
        </script>
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <!--<meta name="keywords" content="人生感悟, 价值观, 现实生活, 散文精选_优美散文阅读_经典散文随笔_抒情散文吧" />
        <meta name="description" content="我说我这么有湿意的人，肚子里哪有什么干货。煲鸡汤也不是我擅长，万一你喝多了不仅没治病，还白长一身肥肉，岂不是要怪我。其实表妹的纠结很简单，她面前有两个选择：一个是留在北京，在一家中外合资的公司上班，年薪十几万。" />-->

        <!-- 跳出 -->
        <script type="text/javascript">
            /*frame*/
            if(top.location != self.location) {
                top.location = self.location
            }
        </script>

    </head>

    <body class="single single-post postid-42805 single-format-standard">
        <div class="topbar">
    <div class="inner">
        <ul class="nav">
            <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/blog">首页</a></li>
                <li <?php if($vo["id"] == $current): ?>class="current-menu-item"<?php endif; ?> >
                    <a href="/blog/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
        <div class="wrapper">
            <div class="content">

                <div class="meta">
                    <h1 class="meta-tit"><?php echo ($arts["title"]); ?></h1>
                    <p class="meta-info">所属栏目：
                        <a href="/blog/index.php"><?php echo ($catename); ?></a> &nbsp;&nbsp; 发表日期：<?php echo (date("Y-m-d", $arts["time"])); ?> &nbsp;&nbsp; </p>
                </div>

                <!-- 广告代码2 -->

                <div class="entry">
                    <p><img class="aligncenter size-full wp-image-42806" src="/blog/<?php echo ($arts["pic"]); ?>" alt="该去北上广哭，还是回小城市笑" width="630" height="399" /></p>
                    <?php echo htmlspecialchars_decode($arts['content']); ?>
                </div>

                <div>
                    <?php if($prevs): ?><strong>上一篇：</strong>
                        <a class="prev-post icon-right" href="/blog/index.php/Home/Article/index/id/<?php echo ($prevs["id"]); ?>"><?php echo ($prevs["title"]); ?></a>
                        <?php else: ?>
                        <strong>上一篇：没有了</strong><?php endif; ?>
                </div>

                <div style="margin:10px 0;">
                    <?php if($nexts): ?><strong>下一篇：</strong>
                        <a class="next-post icon-right" href="/blog/index.php/Home/Article/index/id/<?php echo ($nexts["id"]); ?>"><?php echo ($nexts["title"]); ?></a>
                        <?php else: ?>
                        <strong>下一篇：没有了</strong><?php endif; ?>
                </div>

                <!-- 分享代码 -->
                <div class="baidufenxiang" style="overflow:auto;">
                    <!-- Baidu Button BEGIN -->
                    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
                        <a class="bds_bdhome"></a>
                        <a class="bds_renren"></a>
                        <a class="bds_kaixin001"></a>
                        <a class="bds_douban"></a>
                        <a class="bds_youdao"></a>
                        <a class="bds_sqq"></a>
                        <a class="bds_hi"></a>
                        <a class="bds_baidu"></a>
                        <a class="bds_qq"></a>
                        <a class="bds_tqq"></a>
                        <a class="bds_tsina"></a>
                        <a class="bds_qzone"></a>
                        <a class="bds_mshare"></a>
                        <span class="bds_more"></span>
                        <a class="shareCount"></a>
                    </div>
                    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=53164"></script>
                    <script type="text/javascript" id="bdshell_js"></script>
                    <script type="text/javascript">
                        document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date() / 3600000)
                    </script>
                    <!-- Baidu Button END -->
                </div>

                <!-- 广告代码1 -->

                <!-- 百度推荐 -->
                <div style="margin-left: -12px; margin-bottom: -3px;">
                    <script>
                        document.write(unescape('%3Cdiv id="hm_t_61751"%3E%3C/div%3E%3Cscript charset="utf-8" src="http://crs.baidu.com/t.js?siteId=99c2c06a529fc4c8787deb597141fe76&planId=61751&async=0&referer=') + encodeURIComponent(document.referrer) + '&title=' + encodeURIComponent(document.title) + '&rnd=' + (+new Date) + unescape('"%3E%3C/script%3E'));
                    </script>
                </div>

            </div>

            <div class="sidebar">
    <div class="widget widget_categories">
        <h3 class="widget-tit">文章分类</h3>
        <ul>
            <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cat-item cat-item-18">
                    <a href="/blog/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="widget widget_recent_entries">
        <h3 class="widget-tit">最新发表</h3>
        <ul>
            <?php if(is_array($latest)): $i = 0; $__LIST__ = $latest;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="/blog/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="widget widget_links">
        <h3 class="widget-tit">友情链接</h3>
        <ul class='xoxo blogroll'>
            <?php if(is_array($linkres)): $i = 0; $__LIST__ = $linkres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo ($vo["url"]); ?>" rel="friend" target="_blank"><?php echo ($vo["title"]); ?></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
        </div>
        <div class="footer">
    <div class="inner">
        <div class="manage">
            <!--<script type="text/javascript">
                var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F99c2c06a529fc4c8787deb597141fe76' type='text/javascript'%3E%3C/script%3E"));
            </script>-->
        </div>
        <div class="copyright">
        </div>
    </div>
</div>
        <script type='text/javascript' src='http://yispace.net/wp-includes/js/wp-embed.min.js?ver=4.5.2'></script>

        <!-- 百度自动推送 -->
        <script>
            (function() {
                var bp = document.createElement('script');
                var curProtocol = window.location.protocol.split(':')[0];
                if(curProtocol === 'https') {
                    bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
                } else {
                    bp.src = 'http://push.zhanzhang.baidu.com/push.js';
                }
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(bp, s);
            })();
        </script>
    </body>

</html>

<!-- Dynamic page generated in 0.509 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2016-08-23 19:33:53 -->

<!-- super cache -->