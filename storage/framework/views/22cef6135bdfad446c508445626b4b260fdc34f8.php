<!-- 2017-02-15-底部-start -->
<div class="footer-container">
    <div class="footer">
        <div class="footer-warrant-area clearfix"><p class="footer-warrant-logo fl"><a href="https://www.vmall.com"><img src="picture/flogo.png" /></a></p><p class="fl"><a href="https://www.vmall.com/help/faq-2635.html" target="_blank" title="隐私声明" rel="nofollow">隐私声明</a><a href="https://www.vmall.com/help/faq-778.html" target="_blank" title="服务协议" rel="nofollow"> 服务协议</a> Copyright © 2012-2018 华为软件技术有限公司 版权所有 保留一切权利<br />公安备案 <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=32011402010009" target="_blank" rel="nofollow">苏公网安备32011402010009号</a><em> | </em><a target="_blank" href="http://www.miitbeian.gov.cn" rel="nofollow">苏ICP备17040376号-6</a><em> | </em> 增值电信业务经营许可证：苏B2-20130048号<em>| </em><br /></a></p><p class="fr footer-warrant-img"><a class="fl" href="http://privacy.truste.com/privacy-seal/validation?rid=81be9ca0-c821-4e2c-ad4b-ff7cff98f75f&amp;lang=zh-cn" target="_blank" rel="nofollow"><img src="picture/20180522101715775.jpg" alt="TRUSTe隐私认证" title="TRUSTe隐私认证" /></a>                        <a class="fl" href="https://res.vmallres.com/pimages//sale/2018-06/20180615181402966.jpg" target="_blank" rel="nofollow"><img src="picture/20160226162415360.png" alt="电子营业执照" title="电子营业执照" /></a>        <a class="fl" href="https://ss.knet.cn/verifyseal.dll?sn=e13010932010038497pwz6000000&amp;trustKey=dn&amp;trustValue=vmall.com" target="_blank" rel="nofollow"><img src="picture/20160226162521265.png" title="可信网站" alt="可信网站" /></a>        <a class="fl" href="http://sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/toDetail/2E50AF12E8B14A8B9721D1548FC0CDD2" target="_blank" rel="nofollow"><img src="picture/20180626164548324.png" title="网络文化经营许可证" alt="网络文化经营许可证" /></a>  <a class="fl" id="___szfw_logo___" href="https://credit.szfw.org/CX20170724001650181088.html" target="_blank" rel="nofollow"><img src="picture/20170725194955862.jpg" border="0" /></a></p><script type="text/javascript">(function(){document.getElementById('___szfw_logo___').oncontextmenu = function(){return false;}})();</script>    <p><br /></p></div><script>
ec.code.addAnalytics({
  baidu : true,
  google : false,
  hicloud : true,
  cnzz : true,
  suning : false,
  dmp:true
});</script>
    </div>
</div>
<!-- 2017-02-15-底部-end -->
<!--<script src="js/slider.min.js"></script>-->
<!--<script src="js/swiper.min.js"></script>-->
<script>
    new Slider({//友情链接
        objid: '#serverlink',
        listname: '.service-list',
        listitem: 'ol',
        shownum: 1
    }).init();
</script>
<script type="text/javascript">
ec.load("ec.box" , {loadType : "lazy"});
/**
*功能：给鼠标移动到s-dropdown上面的时候，记得给他多添加一个hover类样式
*目的是兼容ie6
*@author  李峰
*/
$(function(){
    $(".s-dropdown").hover(function(){
        $(this).addClass("hover");
    },function(){
        $(this).removeClass("hover");
    });
    var maxcolor=$('.top-banner-max').find('p').children('a').css("background-color");
    var mincolor=$('.top-banner-min').find('p').children('a').css("background-color");
    
    $('.top-banner-max').css({"background-color":maxcolor,overflow:"hidden"});
    $('.top-banner-min').css({"background-color":mincolor,overflow:"hidden"});
});

//显示全球导航选择层
function showSelectRegion()
{
    var box = new ec.box($("#selectRegion-tips").val(),
    {
            boxid : "region-select-box",
            boxclass : "ol_box_4",
            title : "Please select your country or region.",
            width : 940,            
            showButton : false,
            autoPosition:false,
            onopen: function(box){
            },
            onok : function(box){
            },
            oncancel : function(box){
                box.close();
                $(".ol_box_mask").remove();
            },   
            onclose : function(box){
                $(".ol_box_mask").remove();
            }
        });    

        box.open();
                
        $(".box-title").css("font-size","28px").css("font-weight","normal");
        $("#region-select-box").css("height","auto");
        $(".ol_box_mask").click(function(){box.close();});
        
        $(".box-header").unbind("mousemove");
        $(".box-header").unbind("mousedown");
        
        var divTop=document.getElementById("region-select-box").offsetTop;
        $("#region-select-box").mousedown(function (e) 
        {
            var e=e||window.event;
            var region = document.getElementById("region-select-box");
                                
            var leftX = e.clientX - region.offsetLeft;
            var topY = e.clientY - region.offsetTop;
            $("#region-select-box").mousemove(function (event) 
            {
              var e=event||window.event;
              var left=    e.clientX - leftX;
              var top=e.clientY - topY;
               
              if(e.clientX - leftX<20-region.offsetWidth){
              left=20-region.offsetWidth;
              }
              if(e.clientY - topY<20-region.offsetHeight){
              top=20-region.offsetHeight;
              }    
             
             if(e.clientY - topY+20>=$(window).height()){
              top=$(window).height() - 20;
              }
              if(e.clientX - leftX+20>=$(window).width()){
              left=$(window).width() - 20;
              }
              $("#region-select-box").css({"left": left, "top": top});
              divTop=top;
                
            });
        });
        $("#region-select-box").mouseup(function () {
        $("#region-select-box").unbind("mousemove");
        });
        $(window).scroll(function () {
            $("#region-select-box").offset({ top: divTop });
        });
}
</script>
<script type="text/javascript">
ec.load("ec.slider", {
   loadType : "lazy", 
   callback : function() {
        $("#ec-erweima").slider({
                 width:     91, //必须
                 height:     96, //必须
                 style : 1,                    //1显示分页，2只显示左右箭头,3两者都显示
                 pause : 120000,           //间隔时间
                 auto : true
        });
   }
});

ec.ready(function(){
    try
    {
          ec.minicart.readyContent();
          ec.minicart.microCartTpl = new ec.template($('#micro-cart-tpl').val());
            var $miniCart = $('#header-toolbar-minicart-content');
            $('#header-toolbar-minicart').hover(function ()
            {
                if(ec.checkBrowerIE())
                {
                    var act = document.activeElement.id;
                    if(act=='search-kw')
                    {
                        $("#search-kw").blur();
                    }
                }
                
                $(this).unbind("mouseenter");
                ec.minicart.content();
            }, function () 
            {
                $(this).bind("mouseenter",function()
                {
                    if(ec.checkBrowerIE())
                    {
                        var act = document.activeElement.id;
                        if(act=='search-kw')
                        {
                            $("#search-kw").blur();
                        }
                    }
                    
                    $(this).unbind("mouseenter");
                    ec.minicart.content();
                });
            });
        
        $('#up_loginName-hover').hover(function ()
        {
            if(ec.checkBrowerIE())
            {
                var act = document.activeElement.id;
                if(act=='search-kw')
                {
                    $("#search-kw").blur();
                }
            }
            
            $(this).unbind("mouseenter");
        }, function () 
        {
            $(this).bind("mouseenter",function()
            {
                if(ec.checkBrowerIE())
                {
                    var act = document.activeElement.id;
                    if(act=='search-kw')
                    {
                        $("#search-kw").blur();
                    }
                }
                
                $(this).unbind("mouseenter");
            });
        });
        
}
catch (err)
{
    // console.log(err);
}

});
</script>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https'){
   bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
  }
  else{
  bp.src = 'http://push.zhanzhang.baidu.com/push.js';
  }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

<script>

function pushHeaderMsg(name,url)
{
  var value ={
      "UID":ec.util.cookie.get("uid"),
      "TID":getPtid(),
      "TIME":getTime(),
      "CONTENT":
        {
      "name":name,
      "URL":url,
      "click":"1",
      }
  };
  ec.code.addAnalytics({hicloud:true});
  _paq.push(["trackLink","300000101", "link", value]);
}

function pushLoginMsg(name,subName)
{
  var value ={
      "UID":ec.util.cookie.get("uid"),
      "TID":getPtid(),
      "TIME":getTime(),
      "CONTENT":
        {
      "name":name,   
        "subName":subName ,       
        "click":"1"
        }
  };
  ec.code.addAnalytics({hicloud:true});
  _paq.push(["trackLink","300000201", "link", value]);
}

function pushMyOrderMsg()
{
  var value ={
      "UID":ec.util.cookie.get("uid"),
      "TID":getPtid(),
      "TIME":getTime(),
      "CONTENT":
        {
        "click":"1"
        }
  };
  ec.code.addAnalytics({hicloud:true});
  _paq.push(["trackLink","300000301", "link", value]);
}

function pushMyCartMsg()
{
  var value ={
      "UID":ec.util.cookie.get("uid"),
      "TID":getPtid(),
      "TIME":getTime(),
      "CONTENT":
        {
        "click":"1"
        }
  };
  ec.code.addAnalytics({hicloud:true});
  _paq.push(["trackLink","300000401", "link", value]);
}


function pushCartProMsg(skuId,url,location)
{
  var value ={
      "UID":ec.util.cookie.get("uid"),
      "TID":getPtid(),
      "TIME":getTime(),
      "CONTENT":
        {
        "SKUID":skuId ,
        "URL":url, 
        "location":location,          
        "click":"1"
        }
  };
  ec.code.addAnalytics({hicloud:true});
  _paq.push(["trackLink","300000402", "link", value]);
}

function pushFootAdvertMsg(name,url)
{
  var value ={
      "UID":ec.util.cookie.get("uid"),
      "TID":getPtid(),
      "TIME":getTime(),
      "CONTENT":
        {
        "name":name ,
        "URL":url,            
        "click":"1"
        }
  };
  ec.code.addAnalytics({hicloud:true});
  _paq.push(["trackLink","300000501", "link", value]);
}


$(".fl").find("dd").find("a").bind("click",function(){
  var HREF = "";
  HREF = this.href;
  var name = this.innerHTML;
  if(HREF==null || HREF == "")
  {
    return;
  }
  if(this.id=="tools-nav-service-robotim-button")
  {
    name = "在线客服";
  }
  if(this.className=="service-btn btn-report")
  {
    name = "不良信息举报";
  }
  pushFootAdvertMsg(name,HREF);
});


$(".footer-warrant-area.clearfix").find("p").find("a").click(function()
{ 
  var url = $(this).attr("href");
  var value  = {};
  if(url != "" && url != null)
  {
    if($(this).attr("class")=="fl")
    {
      value = {
      "UID":ec.util.cookie.get("uid"),
      "TID":getPtid(),
      "TIME":getTime(),
      "CONTENT":
        {
        "ADID":$(this).find("img").attr("src"),
        "URL":url,
        "click":"1"
        }
      };
    }
    else
    {
      value = {
      "UID":ec.util.cookie.get("uid"),
      "TID":getPtid(),
      "TIME":getTime(),
      "CONTENT":
        {
        "name":$(this).html(),
        "URL":url,
        "click":"1"
        }
      };
    }
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300000502", "link", value]);
    
  }
  else
  {
    return;
  }
});

function pushRightHelpMsg(buttonName)
{
  var value ={
      "UID":ec.util.cookie.get("uid"),
      "TID":getPtid(),
      "TIME":getTime(),
      "CONTENT":
        {
        "buttonName":buttonName,
        "click":"1"
        }
  };
  ec.code.addAnalytics({hicloud:true});
  _paq.push(["trackLink","300000601", "link", value]);
}


jump = function(url,obj)
{ 
  if(typeof(obj.html()) != "undefined" && obj.html() != null && obj.html() != "")
  {
    pushFootAdvertMsg($(this).html(),url);
  }
  var win = window.open(url,"_blank") ;
  win.opener = null ;
}
 
function pushProRelationMsg(productId,column)
    {
      var value = {
      "UID":ec.util.cookie.get("uid"),
      "TID":getPtid(),
      "TIME":getTime(),
      "CONTENT":
      {
      "productId":productId, 
        "row":"1",
        "column":column,
        "click":"1"
        }
    };
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300020601", "link", value]);
      
    }
    
    function pushProHotMsg(skuCode)
    {
      var value = {
      "UID":ec.util.cookie.get("uid"),
      "TID":getPtid(),
      "TIME":getTime(),
      "CONTENT":
      {
      "SKUCode":skuCode ,
        "click":"1"
        }
    };
    ec.code.addAnalytics({hicloud:true});
    _paq.push(["trackLink","300020701", "link", value]);
      
    }
</script>
</body>
</html>