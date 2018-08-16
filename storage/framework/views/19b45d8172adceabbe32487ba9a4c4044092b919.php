<?php $__env->startSection('myCss'); ?>
<link rel="stylesheet" href="/homes/common/css/index.min.css" />
<?php echo $__env->yieldSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="site-category"> 
   <ul id="J_categoryList" class="site-category-list clearfix"> 
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catek => $catev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="category-item"> <a class="title" href="/home/search?cates_id=<?php echo e($catev->cate_id); ?>" data-stat-id="886b68ab740e29bb" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-886b68ab740e29bb', '//www.mi.com/p/3469.htmlclient_id=180100041086&amp;masid=17409.0245', 'pcpid', '']);"><?php echo e($catev->cate_name); ?><i class="iconfont"></i></a> 
    <div class="children clearfix children-col-3"  >
        <ul class="children-list children-list-col children-list-col-1" style=" width:1000px;">
            <?php $__currentLoopData = $catev['goods']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goodsk => $goodsv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div >
                <li style=" display:inline;"> 
                     <a class="link" href="/home/details/<?php echo e($goodsv->goods_id); ?>" data-stat-id="0cb048b7c1ea5757" >
                      
                        <img class="thumb" src="<?php echo e($goodsv->imgs); ?>" width="40" height="40" alt="" />
                        
                         <span class="text"> <?php echo e($goodsv->goods_name); ?></span>
                    </a> 
                </li>
            </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
     </div>

    </li> 
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   </ul>
  </div>
        </div>
        <div id="J_navMenu" class="header-nav-menu" style="display: none;"><div class="container"></div></div>
    </div>
    <div class="home-hero-container container">
        <div class="home-hero">
            <div class="home-hero-slider">
                <div class="ui-wrapper" style="max-width: 100%;">
                    <div class="ui-viewport" style="width: 100%; overflow: hidden; position: relative; height: 460px;">
                        <div id="J_homeSlider" class="xm-slider" data-stat-title="焦点图轮播" style="width: auto; position: relative;">
                        <?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="slide loaded">
                                <a href="/" >
                                   <img src="<?php echo e($v->lunbo_img); ?>" srcset="">
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            

                        </div>
                    </div>
                    <div class="ui-controls-direction">
                        <a class="ui-prev" href="javascript:void(0);">上一张</a>
                        <a class="ui-next" href="javascript:void(0);">下一张</a>
                    </div>
                    <div class="ui-controls ui-has-pager ui-has-controls-direction">
                        <div class="ui-pager ui-default-pager">
                            <div class="ui-pager-item">
                                <a href="/home/search" class="ui-pager-link">1</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="/home/search" class="ui-pager-link">2</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="/home/search" class="ui-pager-link">3</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="/home/search" class="ui-pager-link active">4</a>
                            </div>
                            <div class="ui-pager-item">
                                <a href="/home/search" class="ui-pager-link">5</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-hero-sub row">
                <div class="span4">
                    <ul class="home-channel-list clearfix">
                        <li class="top left">
                            <a href="/" data-stat-aid="AA11221" data-stat-pid="2_44_1_250" target="_blank"> <i class="iconfont">&#xe640;</i>
                                电信专场
                            </a>
                        </li>
                        <li class="top">
                            <a href="/" data-stat-aid="AA10868" data-stat-pid="2_44_2_251" target="_blank">
                                <i class="iconfont">&#xe63e;</i>
                                企业团购
                            </a>
                        </li>
                        <li class="top">
                            <a href="/" data-stat-aid="AA10869" data-stat-pid="2_44_3_252" target="_blank">
                                <i class="iconfont">&#xe63b;</i>
                                官翻产品
                            </a>
                        </li>
                        <li class="left">
                            <a href="/" data-stat-aid="AA11244" data-stat-pid="2_44_4_253" target="_blank">
                                <i class="iconfont"></i>
                                小米移动
                            </a>
                        </li>
                        <li class="">
                            <a href="/" data-stat-aid="AA12084" data-stat-pid="2_44_5_254" target="_blank">
                                <i class="iconfont"></i>
                                以旧换新
                            </a>
                        </li>
                        <li class="">
                            <a href="/" data-stat-aid="AA10871" data-stat-pid="2_44_6_255" target="_blank">
                                <i class="iconfont"></i>
                                话费充值
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="span16" id="J_homePromo" data-stat-title="焦点图下方小图">
                    <ul class="home-promo-list clearfix">
                        <li class="first">
                            <a class="item" href="/" data-stat-aid="AA13327" data-stat-pid="2_16_1_77" target="_blank">
                                <img alt="米兔儿童手表-0720" src="http://i3.mifile.cn/a4/bcd96601-1406-4716-8258-975a90e8a706" srcset="http://i3.mifile.cn/a4/fbde1968-89d6-402b-bcee-7451c7b327e3 2x" />
                            </a>
                        </li>
                        <li>
                            <a class="item" href="/" data-stat-aid="AA13313" data-stat-pid="2_16_2_78" target="_blank">
                                <img alt="小米手机5-0720" src="http://i3.mifile.cn/a4/699590cf-1eec-4cbb-84e7-3db5d965bb0d" srcset="http://i3.mifile.cn/a4/cfd68741-d5d4-43aa-9ca9-f71b85483976 2x" />
                            </a>
                        </li>
                        <li>
                            <a class="item" href="/" data-stat-aid="AA13314" data-stat-pid="2_16_3_79" target="_blank">
                                <img alt="红米Note3-0720" src="http://i3.mifile.cn/a4/dc80da21-68df-4d2a-9b3f-3bbea5b539a4" srcset="http://i3.mifile.cn/a4/11f55f19-4011-4e67-be32-d245745c57ea 2x" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="home-star-goods" id="J_homeStar">
            <div class="xm-plain-box">
                <div class="box-hd">
                    <h2 class="title">小米明星产品</h2>
                    <div class="more">
                        <div class="xm-controls xm-controls-line-small xm-carousel-controls">
                            <a class="control control-prev iconfont" href="javascript: void(0);"></a>
                            <a class="control control-next iconfont" href="javascript: void(0);"></a>
                        </div>
                    </div>
                </div>
                <div class="box-bd">
                    <ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList">
                        <?php $__currentLoopData = $img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="brick-item brick-item-m brick-item-m-2" data-gid="2182300042"> 
                            <div class="figure figure-img"> 
                                <a class="exposure" href="/home/details/<?php echo e($v->goods_id); ?>" data-stat-aid="AA20560" data-stat-pid="2_58_2_334" data-log_code="31pchomephone_right_0002019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.2&amp;pid=2182300042&amp;adm=5348" target="_blank" data-stat-id="AA20560+2_58_2_334" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20560+2_58_2_334', 'https://item.mi.com/product/10000099.html', 'pcpid', '31pchomephone_right_0002019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.2&amp;pid=2182300042&amp;adm=5348']);"> 
                                    <img src="<?php echo e($v->goodsimg->goods_img); ?>" width="160" height="160" alt="<?php echo e($v->goods_name); ?>"> 
                                </a> 
                            </div> 
                            <h3 class="title">
                                <a href="/home/details/<?php echo e($v->goods_id); ?>" data-stat-aid="AA20560" data-stat-pid="2_58_2_334" data-log_code="31pchomephone_right_0002019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.2&amp;pid=2182300042&amp;adm=5348" target="_blank" data-stat-id="AA20560+2_58_2_334" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20560+2_58_2_334', 'https://item.mi.com/product/10000099.html', 'pcpid', '31pchomephone_right_0002019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.2&amp;pid=2182300042&amp;adm=5348']);"><?php echo e($v->goods_name); ?></a>
                                </h3> <p class="desc"><?php echo e($v->goods_selecnt); ?></p> 
                                    <p class="price"> <span class="num"><?php echo e($v->goods_price); ?></span>元  </br></br>
                                    <span class="num" style="padding-left:140px;color:gray;">已售：<?php echo e($v->goods_volume); ?></span>
                                    </p>  
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="page-main home-main">
        <div class="container">
            <div id="smart" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox" data-from-stat="false">
                <div class="box-hd">
                    <h2 class="title">小米手机</h2>
                    <div class="more J_brickNav"></div>
                </div>
                <div class="box-bd J_brickBd">
                <!-- 小米手机 start-->
                    <div class="row">
                        <div class="span4 span-first">
                            <ul class="brick-promo-list clearfix">
                                <li class="brick-item brick-item-l brick-item-active">
                                    <a href="" data-stat-aid="AA13253" data-stat-pid="2_18_1_90" target="_blank" data-stat-id="AA13253+2_18_1_90" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13253+2_18_1_90', '//www.mi.com/scooter/', 'pcpid']);">
                                        <img src="http://i3.mifile.cn/a4/124d82cc-cfce-44ab-b711-28b21be81683" width="160" height="160" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="span16">
                            <ul class="brick-list clearfix">

                                 <?php $__currentLoopData = $shouji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sjk => $sjv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="brick-item brick-item-m brick-item-m-2" data-gid="2182300042"> <div class="figure figure-img"> <a class="exposure" href="/home/details/<?php echo e($sjv->goods_id); ?>" data-stat-aid="AA20560" data-stat-pid="2_58_2_334" data-log_code="31pchomephone_right_0002019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.2&amp;pid=2182300042&amp;adm=5348" target="_blank" data-stat-id="AA20560+2_58_2_334" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20560+2_58_2_334', 'https://item.mi.com/product/10000099.html', 'pcpid', '31pchomephone_right_0002019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.2&amp;pid=2182300042&amp;adm=5348']);"> 
                                    <img src="<?php echo e($sjv->goodsimg->goods_img); ?>" width="160" height="160" alt=""> </a> </div> <h3 class="title"><a href="/home/details/<?php echo e($sjv->goods_id); ?>" data-stat-aid="AA20560" data-stat-pid="2_58_2_334" data-log_code="31pchomephone_right_0002019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.2&amp;pid=2182300042&amp;adm=5348" target="_blank" data-stat-id="AA20560+2_58_2_334" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20560+2_58_2_334', 'https://item.mi.com/product/10000099.html', 'pcpid', '31pchomephone_right_0002019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.2&amp;pid=2182300042&amp;adm=5348']);"><?php echo e($sjv->goods_name); ?></a></h3> <p class="desc"><?php echo e($sjv->goods_selecnt); ?></p> <p class="price"> <span class="num"><?php echo e($sjv->goods_price); ?></span>元  </p>  </li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                
                </div>
            </div>
<!-- 小米手机 end-->

           <div class="page-main home-main">
        <div class="container">
            <div id="smart" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox" data-from-stat="false">
                <div class="box-hd">
                    <h2 class="title">笔记本 平板</h2>
                    <div class="more J_brickNav"></div>
                </div>
                <div class="box-bd J_brickBd">
                    <div class="row">
                        <div class="span4 span-first">
                            <ul class="brick-promo-list clearfix">
                                <li class="brick-item brick-item-l brick-item-active">
                                    <a href="/" data-stat-aid="AA13253" data-stat-pid="2_18_1_90" target="_blank" data-stat-id="AA13253+2_18_1_90" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13253+2_18_1_90', '//www.mi.com/scooter/', 'pcpid']);">
                                        <img src="http://i3.mifile.cn/a4/124d82cc-cfce-44ab-b711-28b21be81683" width="160" height="160" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="span16">
                            <ul class="brick-list clearfix">

                                 <?php $__currentLoopData = $bjb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bjbk => $bjbv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="brick-item brick-item-m brick-item-m-2" data-gid="2182300042"> <div class="figure figure-img"> <a class="exposure" href="/home/details/<?php echo e($bjbv->goods_id); ?>" data-stat-aid="AA20560" data-stat-pid="2_58_2_334" data-log_code="31pchomephone_right_0002019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.2&amp;pid=2182300042&amp;adm=5348" target="_blank" data-stat-id="AA20560+2_58_2_334" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20560+2_58_2_334', 'https://item.mi.com/product/10000099.html', 'pcpid', '31pchomephone_right_0002019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.2&amp;pid=2182300042&amp;adm=5348']);"> 
                                    <img src="<?php echo e($bjbv->goodsimg->goods_img); ?>" width="160" height="160" alt=""> </a> </div> <h3 class="title"><a href="/home/details/<?php echo e($bjbv->goods_id); ?>" data-stat-aid="AA20560" data-stat-pid="2_58_2_334" data-log_code="31pchomephone_right_0002019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.2&amp;pid=2182300042&amp;adm=5348" target="_blank" data-stat-id="AA20560+2_58_2_334" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20560+2_58_2_334', 'https://item.mi.com/product/10000099.html', 'pcpid', '31pchomephone_right_0002019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.2&amp;pid=2182300042&amp;adm=5348']);"><?php echo e($bjbv->goods_name); ?></a></h3> <p class="desc"><?php echo e($bjbv->goods_selecnt); ?></p> <p class="price"> <span class="num"><?php echo e($bjbv->goods_price); ?></span>元  </p>  </li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                
                </div>
            </div>

            <div id="video" class="home-video-box xm-plain-box J_itemBox J_videoBox is-visible">
                <div class="box-hd">
                    <h2 class="title">视频</h2>
                    <div class="more J_brickNav">

                    </div>
                </div>
                <div class="box-bd J_brickBd">
                    <!-- 视频 start -->
                    <ul class="video-list clearfix">
                        <li class="video-item video-item-first">
                            <div class="figure figure-img">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12841" data-stat-pid="2_43_1_245" data-video="https://v.mifile.cn/b2c-mimall-media/c2cb94c9485243e1767d43268fb90820.mp4" data-video-title="一团火" >
                                    <img src="//i1.mifile.cn/a4/xmad_15318974928021_cthgC.jpg" width="296" height="180" alt="一团火">
                                    <span class="play"> <i class="iconfont"></i>
                                    </span>
                                </a>

                            </div>
                            <h3 class="title">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12841" data-stat-pid="2_43_1_245" data-video="http://player.youku.com/embed/XMTU2NDM3NjEzMg==" data-video-title="一团火" >一团火</a>
                            </h3>
                            <p class="desc">小米创业8年内部纪录片（手机篇）</p>
                        </li>

                        <li class="video-item">
                            <div class="figure figure-img">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA13049" data-stat-pid="2_43_2_246" data-video="https://v.mifile.cn/b2c-mimall-media/ed921294fb62caf889d40502f5b38147.mp4" data-video-title="小米8，一部与众不同的手机" title="点击播放视频" >
                                    <img src="https://i8.mifile.cn/b2c-mimall-media/6589da5fea27b58e5b061c1fb70bdfce.jpg" width="296" height="180" alt="小米8，一部与众不同的手机">
                                    <span class="play"> <i class="iconfont"></i>
                                    </span>
                                </a>
                            </div>
                            <h3 class="title">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA13049" data-stat-pid="2_43_2_246" data-video="http://player.youku.com/embed/XMTU5ODI2NzMyMA==" data-video-title="小米8，一部与众不同的手机" data-stat-id="AA13049+2_43_2_246">小米8，一部与众不同的手机</a>
                            </h3>
                            <p class="desc">透明探索版，将科技与美学完美结合</p>
                        </li>


                        <li class="video-item">
                            <div class="figure figure-img">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12771" data-stat-pid="2_43_3_247" data-video="https://v.mifile.cn/b2c-mimall-media/53fc775dd6b29ecd8df3e2ea35129766.mp4" data-video-title="小米MIX 2S，一面科技 一面艺术" title="点击播放视频">
                                    <img src="//i1.mifile.cn/a4/xmad_15278359339164_dDTJC.jpg" width="296" height="180" alt="小米MIX 2S，一面科技 一面艺术">
                                    <span class="play">
                                        <i class="iconfont"></i>
                                    </span>
                                </a>
                            </div>
                            <h3 class="title">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12771" data-stat-pid="2_43_3_247" data-video="XMTU2MTQ2Njg3Ng==" data-video-title="小米MIX 2S，一面科技 一面艺术" >小米MIX 2S，一面科技 一面艺术</a>
                            </h3>
                            <p class="desc">艺术品般陶瓷机身，惊艳、璀璨</p>
                        </li>


                        <li class="video-item">
                            <div class="figure figure-img">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12405" data-stat-pid="2_43_4_249" data-video="https://v.mifile.cn/b2c-mimall-media/69f7b9881f4ed7123f0d473dcd44d621.mp4" data-video-title="生活中无所不在的小爱同学" title="点击播放视频">
                                    <img src="//i1.mifile.cn/a4/xmad_15278358912266_LDHfI.jpg" width="296" height="180" alt="生活中无所不在的小爱同学">
                                    <span class="play">
                                        <i class="iconfont"></i>
                                    </span>
                                </a>
                            </div>
                            <h3 class="title">
                                <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA12405" data-stat-pid="2_43_4_249" data-video="XMTUwMTEyMjk0MA==" data-video-title="生活中无所不在的小爱同学">生活中无所不在的小爱同学</a>
                            </h3>
                            <p class="desc">一句话搞定手机复杂操作</p>
                        </li>

                        
                    </ul>
                    <!-- 视频 end -->
                </div>
            </div>
        </div>
    </div>

    <div id="J_modalVideo" class="modal modal-video fade modal-hide">
        <div class="modal-hd">
            <h3 class="title">视频播放</h3>
            <a class="close" data-dismiss="modal" href="javascript: void(0);">
                <i class="iconfont">&#xe602;</i>
            </a>
        </div>
        <div class="modal-bd">
            <div class="loading">
                <div class="loader"></div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>