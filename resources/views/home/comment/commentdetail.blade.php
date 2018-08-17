@extends('layout.index')
@section('title','我的评论')
@section('css')

<!-- 评论模块 -->
<div class="goods-comment-detail">

    <div class="container">
        <div class="row">
            <div class="span14 goods-comment-detail-info-block">
                <div class="goods-comment-detail-info" id='J_commentDetailBlock' data-id='134117576'>
                    <div class="user-image"> 
                        <img src="https://s1.mi-img.com/mfsv2/avatar/s010/p01CWnTHYPAA/7lYdt9DiGO6mtp_90.jpg" alt=""> 
                    </div>
                    <div class="user-emoj"> 
                        喜欢<i class="iconfont">&#xe619;</i> 
                    </div>
                    <div class="user-name-info"> 
                        <span class="user-name">绿叶</span> 
                        <span class="user-time">2016年05月21日</span> 
                        <span class="pro-info">粉色</span> 
                    </div>
                    <div class="user-hand-block"> 
                        <a href="javascript:void(0);" data-commentid="134117576" class="J_hasHelp "> 
                            <i class="iconfont">&#xe60f;</i>有帮助&nbsp;
                            <span class="amount"> 25</span>
                        </a> <span class="separate">|</span>
                        <a href="javascript:void(0);" data-commentid="134117576" class="J_noHelp   " > 
                            <i class="iconfont">&#xe603;</i>无帮助&nbsp;
                            <span class="amount"> 1</span>
                        </a>
                    </div>
                    <dl class="user-comment"> 
                        <dt class="user-comment-content J_commentContent"> 
                            <p class="content-detail"> 
                                    手机套选错颜色了，哈哈，男人用粉色，想想都好笑。可否更换？                            </p>                              
                                                    </dt>
                        <dd class="user-comment-self-input">
                            <div class="input-block">
                                <input type="text" placeholder="回复楼主" class="J_commentAnswerInput"> 
                                <a href="javascript:void(0);" class="btn  answer-btn J_commentAnswerBtn" data-commentid="134117576" >
                                    回复
                                </a> 
                            </div>
                        </dd>
                                                                        <dd id="J_userCommentAnserBlock">
                                                <div class="user-comment-answer">
                            <img class='self-image'
                                 src="https://cdn.cnbj0.fds.api.mi-img.com/b2c-data-mishop/52cc4721e1eaed5af47af693906205c8.jpg" alt="">
                            <p>和我换- <span class='answer-user-name' >268707921</span> </p>
                        </div>
                                                </dd>
                                            </dl>
                </div>
                                
                                <div class="goods-comment-other-title">
                    <div class="left-title">
                        Ta的其他评价
                    </div>
                    <div class="right-title J_showImg">
                        <i class="iconfont">&#x221a;</i>只显示带图评价
                    </div>
                </div>
                <div class="goods-comment-other-content">
                    <ul class="goods-comment-other" id='J_supComment'>
                                                <li class="item-rainbow-2" data-id="131408134">
                            <div class="user-image"> <img src="https://cdn.cnbj0.fds.api.mi-img.com/b2c-data-mishop/c52c11c915d43e0ac3286161eec4fcaf.jpg" alt=""> </div>
                            <div class="user-emoj"> 超爱<i class="iconfont">&#xe604;</i> </div>
                            <div class="user-name-info"> 
                                <span class="user-name">绿叶</span> 
                                <span class="user-time">2015年12月16日</span> 
                                <span class="pro-info">透明</span> 
                            </div>
                            <div class="user-hand-block"> 
                                <a href="javascript:void(0);" data-commentid="131408134" class="J_hasHelp " > 
                                    <i class="iconfont">&#xe60f;</i>有帮助&nbsp;
                                    <span class="amount"> 0</span>
                                </a> <span class="separate">|</span>
                                <a href="javascript:void(0);" data-commentid="131408134" class="J_noHelp " > 
                                    <i class="iconfont">&#xe603;</i>无帮助&nbsp;
                                    <span class="amount"> 0</span>
                                </a>
                            </div>
                            <dl class="user-comment"> 
                                <dt class="user-comment-content J_commentContent"> 
                                    <p class="content-detail"> 
                                        <a href="http://order.mi.com/comment/commentDetail/comment_id/131408134" target="_blank" > 
                                            质量比较好，手感尚可，价格也适中。 
                                        </a> 
                                    </p>  
                                                                    </dt>
                                <dd class="user-comment-self-input">
                                    <div class="input-block">
                                        <input type="text" placeholder="回复楼主" class="J_commentAnswerInput"> <a href="javascript:void(0);" class="btn  answer-btn J_commentAnswerBtn" data-commentid="131408134" >回复</a> </div>
                                </dd>
                                                                                            </dl>
                        </li> 
                                                <li class="item-rainbow-2" data-id="9488501">
                            <div class="user-image"> <img src="https://cdn.cnbj0.fds.api.mi-img.com/b2c-data-mishop/c52c11c915d43e0ac3286161eec4fcaf.jpg" alt=""> </div>
                            <div class="user-emoj"> 超爱<i class="iconfont">&#xe604;</i> </div>
                            <div class="user-name-info"> 
                                <span class="user-name">绿叶</span> 
                                <span class="user-time">2015年04月23日</span> 
                                <span class="pro-info">白色</span> 
                            </div>
                            <div class="user-hand-block"> 
                                <a href="javascript:void(0);" data-commentid="9488501" class="J_hasHelp " > 
                                    <i class="iconfont">&#xe60f;</i>有帮助&nbsp;
                                    <span class="amount"> 0</span>
                                </a> <span class="separate">|</span>
                                <a href="javascript:void(0);" data-commentid="9488501" class="J_noHelp " > 
                                    <i class="iconfont">&#xe603;</i>无帮助&nbsp;
                                    <span class="amount"> 0</span>
                                </a>
                            </div>
                            <dl class="user-comment"> 
                                <dt class="user-comment-content J_commentContent"> 
                                    <p class="content-detail"> 
                                        <a href="http://order.mi.com/comment/commentDetail/comment_id/9488501" target="_blank" > 
                                            音质还不错，使用比较方便 
                                        </a> 
                                    </p>  
                                                                    </dt>
                                <dd class="user-comment-self-input">
                                    <div class="input-block">
                                        <input type="text" placeholder="回复楼主" class="J_commentAnswerInput"> <a href="javascript:void(0);" class="btn  answer-btn J_commentAnswerBtn" data-commentid="9488501" >回复</a> </div>
                                </dd>
                                                                                            </dl>
                        </li> 
                                                <li class="item-rainbow-2" data-id="9488467">
                            <div class="user-image"> <img src="https://cdn.cnbj0.fds.api.mi-img.com/b2c-data-mishop/c52c11c915d43e0ac3286161eec4fcaf.jpg" alt=""> </div>
                            <div class="user-emoj"> 超爱<i class="iconfont">&#xe604;</i> </div>
                            <div class="user-name-info"> 
                                <span class="user-name">绿叶</span> 
                                <span class="user-time">2015年04月23日</span> 
                                <span class="pro-info">玫红</span> 
                            </div>
                            <div class="user-hand-block"> 
                                <a href="javascript:void(0);" data-commentid="9488467" class="J_hasHelp " > 
                                    <i class="iconfont">&#xe60f;</i>有帮助&nbsp;
                                    <span class="amount"> 0</span>
                                </a> <span class="separate">|</span>
                                <a href="javascript:void(0);" data-commentid="9488467" class="J_noHelp " > 
                                    <i class="iconfont">&#xe603;</i>无帮助&nbsp;
                                    <span class="amount"> 0</span>
                                </a>
                            </div>
                            <dl class="user-comment"> 
                                <dt class="user-comment-content J_commentContent"> 
                                    <p class="content-detail"> 
                                        <a href="http://order.mi.com/comment/commentDetail/comment_id/9488467" target="_blank" > 
                                            该保护套不能折叠当支架用，产品介绍不明确 
                                        </a> 
                                    </p>  
                                                                    </dt>
                                <dd class="user-comment-self-input">
                                    <div class="input-block">
                                        <input type="text" placeholder="回复楼主" class="J_commentAnswerInput"> <a href="javascript:void(0);" class="btn  answer-btn J_commentAnswerBtn" data-commentid="9488467" >回复</a> </div>
                                </dd>
                                                                                            </dl>
                        </li> 
                                                <li class="item-rainbow-2" data-id="9488422">
                            <div class="user-image"> <img src="https://cdn.cnbj0.fds.api.mi-img.com/b2c-data-mishop/c52c11c915d43e0ac3286161eec4fcaf.jpg" alt=""> </div>
                            <div class="user-emoj"> 超爱<i class="iconfont">&#xe604;</i> </div>
                            <div class="user-name-info"> 
                                <span class="user-name">绿叶</span> 
                                <span class="user-time">2015年04月23日</span> 
                                <span class="pro-info">透明</span> 
                            </div>
                            <div class="user-hand-block"> 
                                <a href="javascript:void(0);" data-commentid="9488422" class="J_hasHelp " > 
                                    <i class="iconfont">&#xe60f;</i>有帮助&nbsp;
                                    <span class="amount"> 0</span>
                                </a> <span class="separate">|</span>
                                <a href="javascript:void(0);" data-commentid="9488422" class="J_noHelp " > 
                                    <i class="iconfont">&#xe603;</i>无帮助&nbsp;
                                    <span class="amount"> 0</span>
                                </a>
                            </div>
                            <dl class="user-comment"> 
                                <dt class="user-comment-content J_commentContent"> 
                                    <p class="content-detail"> 
                                        <a href="http://order.mi.com/comment/commentDetail/comment_id/9488422" target="_blank" > 
                                            价格还可以，使用一段时间才能知道质量如何 
                                        </a> 
                                    </p>  
                                                                    </dt>
                                <dd class="user-comment-self-input">
                                    <div class="input-block">
                                        <input type="text" placeholder="回复楼主" class="J_commentAnswerInput"> <a href="javascript:void(0);" class="btn  answer-btn J_commentAnswerBtn" data-commentid="9488422" >回复</a> </div>
                                </dd>
                                                                                            </dl>
                        </li> 
                                                <li class="item-rainbow-2" data-id="9488388">
                            <div class="user-image"> <img src="https://cdn.cnbj0.fds.api.mi-img.com/b2c-data-mishop/c52c11c915d43e0ac3286161eec4fcaf.jpg" alt=""> </div>
                            <div class="user-emoj"> 超爱<i class="iconfont">&#xe604;</i> </div>
                            <div class="user-name-info"> 
                                <span class="user-name">绿叶</span> 
                                <span class="user-time">2015年04月23日</span> 
                                <span class="pro-info">白色</span> 
                            </div>
                            <div class="user-hand-block"> 
                                <a href="javascript:void(0);" data-commentid="9488388" class="J_hasHelp " > 
                                    <i class="iconfont">&#xe60f;</i>有帮助&nbsp;
                                    <span class="amount"> 0</span>
                                </a> <span class="separate">|</span>
                                <a href="javascript:void(0);" data-commentid="9488388" class="J_noHelp " > 
                                    <i class="iconfont">&#xe603;</i>无帮助&nbsp;
                                    <span class="amount"> 0</span>
                                </a>
                            </div>
                            <dl class="user-comment"> 
                                <dt class="user-comment-content J_commentContent"> 
                                    <p class="content-detail"> 
                                        <a href="http://order.mi.com/comment/commentDetail/comment_id/9488388" target="_blank" > 
                                            不太实用，好玩而已。 
                                        </a> 
                                    </p>  
                                                                    </dt>
                                <dd class="user-comment-self-input">
                                    <div class="input-block">
                                        <input type="text" placeholder="回复楼主" class="J_commentAnswerInput"> <a href="javascript:void(0);" class="btn  answer-btn J_commentAnswerBtn" data-commentid="9488388" >回复</a> </div>
                                </dd>
                                                                                            </dl>
                        </li> 
                                            </ul>
                </div>
                                            </div>
            <div class="span6 goods-detail-info-block">
                <div class="goods-detail-info">
                   <div class="goods-img-block">
                        <a target="_blank" href="//item.mi.com/1161600009.html">
                            <img src="!200x200" class='J_cartBigImg' alt="">
                        </a>
                   </div>
                   <div class="goods-name J_cartGoodsName">
                                          </div>
                                                      </div>
                <div class="goods-cart-btn-block " id='J_cartBtnBlock'>
                     
                                                                        <a href="//item.mi.com/.html" target="_blank" class="btn btn-primary goods-over-btn" ><span class="iconfont"></span>查看详情</a> 
                                             
                </div>
            </div>            
        </div>
    </div>
</div>
<!-- 结束 -->

@endsection

@section('js')
<script src="/homes/common/myjs/jquery.min.js"></script>
<script src="/data/indexNav.js"></script>
<script src="/data/indexData.js"></script>
<script src="/homes/common/myjs/common.js"></script>
@endsection