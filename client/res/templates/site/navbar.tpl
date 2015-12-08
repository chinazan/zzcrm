<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="minimizer" href="javascript:">
            <span class="glyphicon glyphicon-menu-hamburger"></span>
        </a>
        <a class="navbar-brand nav-link" href="#"><img src="{{logoSrc}}"><span class="home-icon glyphicon glyphicon-home"></span></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-body">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse navbar-body">

        <ul class="nav navbar-nav tabs" id="accordion">
            <li>
                <a href="#accountMenu" class="nav-header menu-first collapsed nav-link" data-toggle="collapse" data-parent="#accordion" >
                    <span class="full-label"><i class="fa fa-users"></i> 客户管理 <i class="fa fa-angle-left pull-right"></i></span><span class="short-label" title="客户管理"><i class="fa fa-users"></i></span>
                </a>
                <ul id="accountMenu" class="nav nav-list  collapse menu-second">
                    <li><a href="#Account"><i class="fa fa-circle-o"></i>  我的客户</a></li>
                    <li><a href="#Opportunity"><i class="fa fa-circle-o"></i>  客户追踪</a></li>
                    <li><a href="#Import"><i class="fa fa-circle-o"></i>  客户资料管理</a></li>
                </ul>
            </li>
            <li>
                <a href="#ccMenu" class="nav-header menu-first collapsed nav-link" data-toggle="collapse" data-parent="#accordion" >
                    <span class="full-label"><i class="fa fa-fax"></i> 话务中心 <i class="fa fa-angle-left pull-right"></i></span><span class="short-label" title="话务中心"><i class="fa fa-fax"></i></span>
                </a>
                <ul id="ccMenu" class="nav nav-list collapse menu-second">
                    <li><a href="#Cc/agentStatus"><i class="fa fa-circle-o"></i>  座席状态</a></li>
                    <li><a href="#Cc/queueStatus"><i class="fa fa-circle-o"></i>  队列状态</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>  实时报表</a></li>
                    <li><a href="#Agent"><i class="fa fa-circle-o"></i>  分机管理</a></li>
                </ul>
            </li>
            <li>
                <a href="#outboundMenu" class="nav-header menu-first collapsed nav-link" data-toggle="collapse">
                    <span class="full-label"><i class="fa fa-phone"></i> 外呼 <i class="fa fa-angle-left pull-right"></i></span><span class="short-label" title="话务中心"><i class="fa fa-phone"></i></span>
                </a>
                <ul id="outboundMenu" class="nav nav-list collapse menu-second">
                    <li><a href="#"><i class="fa fa-circle-o"></i>  导入号码</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>  任务分配</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>  任务执行</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>  我的任务</a></li>
                </ul>
            </li>
            <li>
                <a href="#userMeun" class="nav-header menu-first collapsed nav-link" data-toggle="collapse">
                    <span class="full-label"><i class="fa fa-cogs"></i> 组织架构</span><span class="short-label" title="组织架构"><i class="fa fa-cogs"></i></span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul id="userMeun" class="nav nav-list collapse menu-second">
                    <li><a href="#User"><i class="fa fa-circle-o"></i>  用户</a></li>
                    <li><a href="#Team"><i class="fa fa-circle-o"></i>  团队</a></li>
                    <li><a href="#Role"><i class="fa fa-circle-o"></i>  角色</a></li>

                </ul>
            </li>
            <li>
                <a href="#configMeun" class="nav-header menu-first collapsed nav-link" data-toggle="collapse">
                    <span class="full-label"><i class="fa fa-wrench"></i> 设置中心 <i class="fa fa-angle-left pull-right"></i></span><span class="short-label" title="设置中心"><i class="fa fa-wrench"></i></span>
                </a>
                <ul id="configMeun" class="nav nav-list collapse menu-second">
                    <li><a href="#User/view/{{userId}}"><i class="fa fa-circle-o"></i>  个人设置</a></li>
                    <li><a href="#Admin"><i class="fa fa-circle-o"></i>  系统设置</a></li>
                    <li><a href="#Account/deletedList"><i class="fa fa-circle-o"></i>  客户回收</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>  订单配置</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>  计费设置</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>  工单设置</a></li>
                </ul>
            </li>
            <li>
                <a href="#Ticket" class="nav-header menu-first nav-link">
                    <span class="full-label"><i class="fa fa-ticket"></i> 工单管理 </i></span><span class="short-label" title="工单管理"><i class="fa fa-ticket"></i></span>
                </a>

            </li>
            <li>
                <a href="#feeMenu" class="nav-header menu-first collapsed nav-link" data-toggle="collapse">
                    <span class="full-label"><i class="fa fa-jpy"></i> 计费模块 <i class="fa fa-angle-left pull-right"></i></span><span class="short-label" title="计费模块"><i class="fa fa-jpy"></i></span>
                </a>
                <ul id="feeMenu" class="nav nav-list collapse menu-second">

                </ul>
            </li>
            <li>
                <a href="#msgMenu" class="nav-header menu-first collapsed nav-link" data-toggle="collapse">
                    <span class="full-label"><i class="fa fa-comments"></i> 信息管理 <i class="fa fa-angle-left pull-right"></i></span><span class="short-label" title="信息管理"><i class="fa fa-comments"></i></span>
                </a>
                <ul id="msgMenu" class="nav nav-list collapse menu-second">

                </ul>
            </li>
            <li>
                <a href="#Cdr" class="nav-header menu-first nav-link">
                    <span class="full-label"><i class="fa fa-bar-chart"></i> 报表 </i></span><span class="short-label" title="报表"><i class="fa fa-bar-chart"></i></span>
                </a>

            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav navbar-nav callcenter-status-container">
                <div class="input-group has-feedback">
                    姓名:<strong>{{userName}}</strong>
                </div>
            </li>
            <li class="nav navbar-nav callcenter-status-container">
                <div class="input-group has-feedback">
                    分机号:<strong>{{agent}}</strong>
                </div>
            </li>

            <li class="nav navbar-nav callcenter-status-container">
                <div class="input-group has-feedback">
                    状态: <span class="label label-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Primary</span>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>

                </div>
            </li>
            
            <li class="nav navbar-nav navbar-form global-search-container">
                {{{globalSearch}}}
            </li>

            <li class="nav navbar-nav navbar-form global-callcenter-container">
                <div class="input-group has-feedback">
                    <button type="button" class="btn btn-success action callcenter-action" data-action="transfer">
                        <span class="glyphicon glyphicon-random"></span>
                        转移
                    </button>
                    <button type="button" class="btn btn-success action callcenter-action" data-action="pause">
                        <span class="glyphicon glyphicon-pause"></span>
                        保持
                    </button>
                    <button type="button" class="btn btn-success action callcenter-action" data-action="makecall">
                        <span class="glyphicon glyphicon-earphone"></span>
                        评价
                    </button>
                    <button type="button" class="btn btn-danger action callcenter-action" data-action="hangup">
                        <span class="glyphicon glyphicon-minus-sign"></span>
                        挂断
                    </button>
                    <button type="button" class="btn btn-success action callcenter-action" data-action="threeWay">
                        <span class="glyphicon glyphicon-user"></span>
                        会议室
                    </button>
                </div>
            </li>
            <li class="dropdown notifications-badge-container">
                {{{notificationsBadge}}}
            </li>
            {{#if enableQuickCreate}}
            <li class="dropdown hidden-xs quick-create-container">
                <a id="nav-quick-create-dropdown" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-plus"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="nav-quick-create-dropdown">
                    <li class="dropdown-header">{{translate 'Create'}}</li>
                    {{#each quickCreateList}}
                    <li><a href="#{{./this}}/create" data-name="{{./this}}" data-action="quick-create">{{translate this category='scopeNames'}}</a></li>
                    {{/each}}
                </ul>
            </li>
            {{/if}}
            <li class="dropdown menu-container">
                <a id="nav-menu-dropdown" class="dropdown-toggle" data-toggle="dropdown" href="#" title="{{translate 'Menu'}}"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="nav-menu-dropdown">
                    <li><a href="#User/view/{{userId}}" class="nav-link">{{userName}}</a></li>
                    <li class="divider"></li>
                    {{#each menu}}
                        {{#unless divider}}
                            <li><a href="{{link}}" class="nav-link">{{label}}</a></li>
                        {{else}}
                            <li class="divider"></li>
                        {{/unless}}
                    {{/each}}
                </ul>
            </li>
        </ul>
    </div>
</div>
