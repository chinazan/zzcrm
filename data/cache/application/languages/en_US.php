<?php
return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => '允许',
      'Disabled' => '拒绝',
      'System' => '系统',
      'Users' => '用户',
      'Email' => 'Email',
      'Data' => '数据',
      'Customization' => '定制',
      'Available Fields' => '可用字段',
      'Layout' => '设计',
      'Entity Manager' => '实体管理',
      'Add Panel' => '添加面板',
      'Add Field' => '添加字段',
      'Settings' => '设置',
      'Scheduled Jobs' => '预定作业',
      'Upgrade' => '升级',
      'Clear Cache' => '清除缓存',
      'Rebuild' => '重建',
      'Teams' => '团队',
      'Roles' => '角色',
      'Outbound Emails' => '出站邮件',
      'Inbound Emails' => '入站邮件',
      'Email Templates' => '电子邮件模版',
      'Import' => '导入',
      'Layout Manager' => '布局管理器',
      'User Interface' => '用户界面',
      'Auth Tokens' => '身份验证令牌',
      'Authentication' => '身份验证',
      'Currency' => '流通',
      'Integrations' => '广义',
      'Extensions' => '扩展',
      'Upload' => '上传',
      'Installing...' => '安装中...',
      'Upgrading...' => '升级中...',
      'Upgraded successfully' => '升级成功',
      'Installed successfully' => '安装成功',
      'Ready for upgrade' => '准备升级',
      'Run Upgrade' => '运行升级',
      'Install' => '安装',
      'Ready for installation' => '准本好安装',
      'Uninstalling...' => '卸载中...',
      'Uninstalled' => '已卸载',
      'Create Entity' => '创建实体',
      'Edit Entity' => '编辑实体',
      'Create Link' => '创建链接',
      'Edit Link' => '编辑链接',
      'Track' => '客户追踪模板',
      'Notifications' => '通知',
    ),
    'layouts' => 
    array (
      'list' => '列表',
      'detail' => '细节',
      'listSmall' => '列表 (小)',
      'detailSmall' => '细节 (小)',
      'filters' => '过滤器',
      'massUpdate' => '批量更新',
      'relationships' => '关系',
      'detailConvert' => 'Convert Lead',
      'listForAccount' => 'List (for Account)',
    ),
    'fieldTypes' => 
    array (
      'address' => '地址',
      'array' => '数组',
      'foreign' => '对外',
      'duration' => '持续时间',
      'password' => '密码',
      'parsonName' => '人名',
      'autoincrement' => '自动增加',
      'bool' => '布尔型',
      'currency' => '货币',
      'date' => '数据',
      'datetime' => '日期时间',
      'datetimeOptional' => '日期/日期时间',
      'email' => 'Email',
      'enum' => '枚举类型',
      'enumInt' => '枚举类型 整数',
      'enumFloat' => '枚举类型 浮点',
      'float' => '浮点',
      'int' => '整数',
      'link' => '链接',
      'linkMultiple' => '多重链接',
      'linkParent' => '父链接',
      'multienim' => 'Multienum',
      'phone' => '电话',
      'text' => '文本',
      'url' => 'Url',
      'varchar' => '文本类型',
      'file' => '文件',
      'image' => '图像',
      'multiEnum' => 'Multi-Enum',
    ),
    'fields' => 
    array (
      'type' => '类型',
      'name' => '姓名',
      'label' => '标签',
      'required' => '要求',
      'default' => '默认',
      'maxLength' => '最大 长度',
      'options' => '选项',
      'after' => '之后 (字段)',
      'before' => '之前 (字段)',
      'link' => '链接',
      'field' => '字段',
      'min' => '最小',
      'max' => '最大',
      'translation' => '翻译',
      'previewSize' => '预览 尺寸',
      'noEmptyString' => '没有空的字符串',
      'defaultType' => '默认类型',
    ),
    'messages' => 
    array (
      'upgradeVersion' => '你的 CRM 将升级到版本 <strong>{version}</strong>. 这需要话费一点时间.',
      'upgradeDone' => '你的 CRM 已经升级到版本 <strong>{version}</strong>.',
      'upgradeBackup' => '在升级前我们推荐你先备份你的 CRM 文件和数据.',
      'thousandSeparatorEqualsDecimalMark' => 'Thousand separator can not be same as decimal mark',
      'userHasNoEmailAddress' => '用户没有 email 地址.',
      'selectEntityType' => '再左侧菜单中选择实体类型.',
      'selectUpgradePackage' => '选择升级包',
      'downloadUpgradePackage' => '下载需要的升级包',
      'selectLayout' => 'Select needed layout in the left menu and edit it.',
      'selectExtensionPackage' => '选择扩展包',
      'extensionInstalled' => '扩展包 {name} {version} 已经安装.',
      'installExtension' => '扩展包 {name} {version} 已经准备安装.',
      'uninstallConfirmation' => '你真的想去安装扩展包吗?',
    ),
    'descriptions' => 
    array (
      'settings' => '系统应用程序的设置.',
      'scheduledJob' => '被计划任务执行的工作.',
      'upgrade' => '升级 CRM.',
      'clearCache' => '清除所有的后端缓存.',
      'rebuild' => '重建后端和清除缓存.',
      'users' => '用户管理.',
      'teams' => '团队管理.',
      'roles' => '角色管理.',
      'outboundEmails' => '发送电子邮件的 SMTP 设置.',
      'inboundEmails' => 'IMAP 电子邮件组的服务费. 电子邮件导入和 Email-to-Case.',
      'emailTemplates' => '出站电子邮件模版.',
      'import' => '导入excel类型数据(.xls/.xlsx).',
      'layoutManager' => '自定义布局 (列表, 详情, 编辑, 搜索, 批量更新).',
      'entityManager' => '创建自定义实体, 编辑现有的. 管理字段和关系.',
      'userInterface' => '配置界面.',
      'authTokens' => '活跃的身份验证会话. IP地址和最后的访问时间.',
      'authentication' => '验证设置.',
      'currency' => '通用设置和比率.',
      'extensions' => '安装或卸载扩展.',
      'integrations' => '集成与第三方服务.',
      'track' => '客户追踪模板.',
      'notifications' => 'In-app 和电子邮件设置.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => '特小',
        'small' => '小',
        'medium' => '中等',
        'large' => '大',
      ),
    ),
    'layoutManagerDataAttributes' => 
    array (
      'width' => '宽度 (%)',
      'link' => '链接',
      'notSortable' => '不合适',
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => '用户',
      'ipAddress' => 'IP地址',
      'lastAccess' => '最后访问时间',
      'createdAt' => '登录时间',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => '标题',
      'dateFrom' => '起始时间',
      'dateTo' => '结束时间',
      'autorefreshInterval' => '自动刷新时间间隔',
      'displayRecords' => '显示纪录',
      'isDoubleHeight' => '高两倍',
      'mode' => '模式',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => '周 (议程)',
        'basicWeek' => '周',
        'month' => '月',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => '主题',
      'parent' => '根源',
      'status' => '状态',
      'dateSent' => '发送日期',
      'from' => 'from',
      'to' => 'to',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Is Html',
      'body' => 'Body',
      'subject' => '主题',
      'attachments' => '附件',
      'selectTemplate' => '选择模版',
      'fromEmailAddress' => 'From Address',
      'toEmailAddresses' => 'To Address',
      'emailAddress' => 'Email Address',
      'deliveryDate' => 'Delivery Date',
      'account' => '账户',
      'users' => '用户',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => '草稿',
      'Sending' => '发送',
      'Sent' => '寄出',
      'Archived' => '归档',
      'Received' => '接到',
    ),
    'labels' => 
    array (
      'Create Email' => '存档的邮件',
      'Archive Email' => '存档的邮件',
      'Compose' => '组成',
      'Reply' => '回复',
      'Reply to All' => '回复全部',
      'Forward' => '转发',
      'Original message' => '原始消息',
      'Forwarded message' => '转发消息',
      'Email Accounts' => '邮箱帐号',
      'Send Test Email' => '发送测试电子邮件',
      'Send' => '发送',
      'Email Address' => '邮箱',
      'Mark Read' => 'Mark Read',
      'Sending...' => '发送中...',
      'Save Draft' => '保存草稿',
      'Mark all as read' => '所有标记为已读',
      'Show Plain Text' => '显示纯文本',
      'Create Lead' => 'Create Lead',
      'Create Contact' => 'Create Contact',
      'Create Task' => 'Create Task',
      'Create Case' => 'Create Case',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => '没有 SMTP 设置 {link}.',
      'testEmailSent' => '测试电子邮件已经被发送',
      'emailSent' => '电子邮件已发出',
      'savedAsDraft' => '保存为草稿',
    ),
    'presetFilters' => 
    array (
      'sent' => '发送',
      'archived' => '存档',
      'inbox' => '收件箱',
      'drafts' => '草稿',
    ),
    'massActions' => 
    array (
      'markAsRead' => '标志为已读',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => '名字',
      'status' => '状态',
      'host' => '主机',
      'username' => '用户名',
      'password' => '密码',
      'port' => '端口',
      'monitoredFolders' => '监控文件夹',
      'ssl' => 'SSL',
      'fetchSince' => 'Fetch Since',
      'emailAddress' => 'Email Address',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => '活跃',
        'Inactive' => '不活跃',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => '创建电子邮件账户',
      'IMAP' => 'IMAP',
      'Main' => 'Main',
      'Test Connection' => '测试连接',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => '无法链接到 IMAP 服务器',
      'connectionIsOk' => '连接成功',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => '你可以添加“发送”文件夹同步电子邮件从外部电子邮件客户端发送.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => '主要',
      'Opted Out' => '选择退出',
      'Invalid' => '无效',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'From',
      'to' => 'To',
      'subject' => 'Subject',
      'bodyContains' => 'Body Contains',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'Create Email Filter',
    ),
    'tooltips' => 
    array (
      'name' => 'Just a name of the filter.',
      'subject' => 'Use wildcard *:

text* - starts with text,
*text* - contains text,
*text - ends with text.',
      'bodyContains' => 'Body of email contains any of specified words or phrases.',
      'from' => 'Emails being sent from the specified address. Leave empty if not needed.',
      'to' => 'Emails being sent to the specified address. Leave empty if not needed.',
      'parent' => 'Leave it empty to apply this filter globally (to all incoming emails).',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => '名字',
      'status' => '状态',
      'isHtml' => 'Is Html',
      'body' => 'Body',
      'subject' => '主题',
      'attachments' => '附件',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => '创建邮件模版',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => '字段',
      'Relationships' => '关系',
    ),
    'fields' => 
    array (
      'name' => '名字',
      'type' => '类型',
      'labelSingular' => 'Label Singular',
      'labelPlural' => 'Label Plural',
      'stream' => 'Stream',
      'label' => '标签',
      'linkType' => 'Link Type',
      'entityForeign' => 'Foreign Entity',
      'linkForeign' => 'Foreign Link',
      'link' => '链接',
      'labelForeign' => 'Foreign Label',
      'sortBy' => '默认顺序 (字段)',
      'sortDirection' => '默认顺序 (方向)',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'None',
        'Base' => 'Base',
        'Person' => 'Person',
        'CategoryTree' => '分类树',
      ),
      'linkType' => 
      array (
        'manyToMany' => '多对多',
        'oneToMany' => '一对多',
        'manyToOne' => '多对一',
        'parentToChildren' => 'Parent-to-Children',
        'childrenToParent' => 'Children-to-Parent',
      ),
      'sortDirection' => 
      array (
        'asc' => '递增',
        'desc' => '递减',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => '创建实体',
      'linkAlreadyExists' => '冲突：链接已存在.',
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => '名字',
      'version' => '版本',
      'description' => '简介',
      'isInstalled' => '安装',
    ),
    'labels' => 
    array (
      'Uninstall' => '卸载',
      'Install' => '安装',
    ),
    'messages' => 
    array (
      'uninstalled' => '分机 {name} 已卸载',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => '连接',
      'Connected' => '连接',
    ),
    'help' => 
    array (
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => '邮箱',
      'User' => '用户',
      'Team' => '团队',
      'Role' => '角色',
      'EmailTemplate' => '邮件模版',
      'EmailAccount' => '邮件账户',
      'EmailAccountScope' => '邮件账户',
      'OutboundEmail' => 'Outbound Email',
      'ScheduledJob' => '预排工作',
      'ExternalAccount' => '外部账户',
      'Extension' => '分机',
      'Dashboard' => '控制面板',
      'InboundEmail' => '入站邮件账户',
      'Stream' => '客户沟通记录',
      'Import' => '导入',
      'Account' => '客户',
      'Contact' => 'Contact',
      'Lead' => 'Lead',
      'Target' => 'Target',
      'Opportunity' => '客户追踪',
      'Meeting' => 'Meeting',
      'Calendar' => '日程日历',
      'Call' => 'Call',
      'Task' => 'Task',
      'Case' => 'Case',
      'Document' => 'Document',
      'DocumentFolder' => 'Document Folder',
      'Campaign' => 'Campaign',
      'TargetList' => 'Target List',
      'MassEmail' => 'Mass Email',
      'EmailQueueItem' => 'Email Queue Item',
      'CampaignTrackingUrl' => 'Tracking URL',
      'Ticket' => '工单',
      'Cdr' => '通话记录',
      'Track' => '客户追踪模板',
      'Agent' => '分机',
      'Queue' => '队列',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => '邮件',
      'User' => '用户',
      'Team' => '团队',
      'Role' => '角色',
      'EmailTemplate' => '邮件模版',
      'EmailAccount' => '邮箱账户',
      'EmailAccountScope' => '邮箱账户',
      'OutboundEmail' => '出站邮件',
      'ScheduledJob' => '预排工作',
      'ExternalAccount' => '对外账户',
      'Extension' => '扩展',
      'Dashboard' => '控制面板',
      'InboundEmail' => '入站邮件账户',
      'Stream' => '客户沟通记录',
      'Import' => '导入结果',
      'Account' => '客户',
      'Contact' => 'Contacts',
      'Lead' => '潜在客户',
      'Target' => 'Targets',
      'Opportunity' => '客户追踪',
      'Meeting' => 'Meetings',
      'Calendar' => 'Calendar',
      'Call' => 'Calls',
      'Task' => 'Tasks',
      'Case' => 'Cases',
      'Document' => '知识库',
      'DocumentFolder' => 'Document Folders',
      'Campaign' => '活动',
      'TargetList' => 'Target Lists',
      'MassEmail' => 'Mass Emails',
      'EmailQueueItem' => 'Email Queue Items',
      'CampaignTrackingUrl' => 'Tracking URLs',
      'Ticket' => '工单',
      'Cdr' => '通话记录',
      'Track' => '客户追踪模板',
      'Agent' => '分机',
      'Queue' => '队列',
    ),
    'labels' => 
    array (
      'Misc' => '混合',
      'Total' => '总数',
      'Merge' => '合并',
      'None' => '无',
      'by' => 'by',
      'Saved' => '已保存',
      'Error' => '错误',
      'Select' => '选择',
      'Not valid' => '无效',
      'Please wait...' => '请稍等...',
      'Please wait' => '请稍等',
      'Loading...' => '加载中...',
      'Uploading...' => '上传中...',
      'Sending...' => '发送中...',
      'Merging...' => '合并中...',
      'Merged' => '并入',
      'Removed' => '移除',
      'Posted' => '添加完成',
      'Linked' => '连接',
      'Unlinked' => '不连接',
      'Access denied' => '拒绝访问',
      'Access' => '访问',
      'Are you sure?' => '你确定吗?',
      'Record has been removed' => '记录已被删除',
      'Wrong username/password' => '错误 用户名/密码',
      'Post cannot be empty' => '职位不能为空',
      'Removing...' => '删除中...',
      'Unlinking...' => '取消连接中...',
      'Posting...' => '委派中...',
      'Username can not be empty!' => '用户名不能为空!',
      'Cache is not enabled' => '不启用缓存',
      'Cache has been cleared' => '缓存已被清除',
      'Rebuild has been done' => '重置已完成',
      'Saving...' => '保存中...',
      'Modified' => '修改',
      'Created' => '已创建',
      'Create' => '创建',
      'create' => '创建',
      'Overview' => '概述',
      'Details' => '详情',
      'Add Field' => '添加字段',
      'Add Dashlet' => '添加面版',
      'Filter' => '过滤器',
      'Edit Dashboard' => '编辑面版',
      'Add' => '增加',
      'Reset' => '重置',
      'Menu' => '菜单',
      'More' => '更多',
      'Search' => '搜索',
      'Search Or Call' => '搜索或拨打',
      'Only My' => '本人',
      'Open' => '打开',
      'Admin' => '管理',
      'About' => '关于',
      'Refresh' => '刷新',
      'Remove' => '移除',
      'Options' => '选项',
      'Username' => '用户名',
      'Password' => '密码',
      'Login' => '登录',
      'Log Out' => '注销',
      'Preferences' => '首选项',
      'State' => '省',
      'Street' => '街道',
      'Country' => '国家',
      'City' => '市',
      'PostalCode' => '邮政编码',
      'Followed' => '解锁',
      'Follow' => '锁定',
      'ConvertTo' => '领取',
      'Clear Local Cache' => '清除本地缓存',
      'Actions' => '动作',
      'Delete' => '删除',
      'Update' => '更新',
      'Save' => '保存',
      'Edit' => '编辑',
      'View' => '视图',
      'Cancel' => '取消',
      'Unlink' => '删除链接',
      'Mass Update' => '批量更新',
      'Mass Assign' => '批量分派',
      'Export' => '导出',
      'No Data' => '无数据',
      'No Access' => '禁止访问',
      'All' => '所有',
      'Active' => '活跃',
      'Inactive' => '暂停',
      'Write your comment here' => '在这里写下你的沟通记录',
      'Post' => '发布',
      'Stream' => '客户沟通记录',
      'Show more' => '显示更多',
      'Dashlet Options' => '面板选择',
      'Full Form' => '完整形式',
      'Insert' => '插入',
      'Person' => 'Person',
      'First Name' => '姓',
      'Last Name' => '名',
      'Original' => '原始',
      'You' => '你',
      'you' => '你',
      'change' => '改变',
      'Change' => '改变',
      'Primary' => '首要',
      'Save Filter' => '保存过滤器',
      'Administration' => '管理',
      'Run Import' => '运行导入',
      'Duplicate' => '复制',
      'Notifications' => '通知',
      'Mark all read' => '标记已读',
      'See more' => '查看更多',
      'Today' => '今天',
      'Tomorrow' => '明天',
      'Yesterday' => '昨天',
      'Submit' => '提交',
      'Close' => '关闭',
      'Yes' => '是',
      'No' => '否',
      'Select All Result' => '选择所有结果',
      'Value' => '值',
      'Current version' => '当前版本',
      'List View' => '列表视图',
      'Tree View' => '树状图',
      'Create InboundEmail' => 'Create Inbound Email',
      'Activities' => 'Activities',
      'History' => 'History',
      'Attendees' => 'Attendees',
      'Schedule Meeting' => 'Schedule Meeting',
      'Schedule Call' => 'Schedule Call',
      'Compose Email' => 'Compose Email',
      'Log Meeting' => 'Log Meeting',
      'Log Call' => 'Log Call',
      'Archive Email' => 'Archive Email',
      'Create Task' => 'Create Task',
      'Tasks' => 'Tasks',
    ),
    'messages' => 
    array (
      'pleaseWait' => '请稍等...',
      'convertSelectedRecordsConfirmation' => '你确定要领取/释放这些数据',
      'allowMaxAccountCount' => '你最多可以领取客户记录:',
      'confirmLeaveOutMessage' => '你确定你要离开这个表格?',
      'notModified' => '你没有修改记录',
      'duplicate' => '你创建的记录似乎重复',
      'fieldIsRequired' => '{字段} 是必须的',
      'fieldShouldBeEmail' => '{字段} 应该为有效邮箱',
      'fieldShouldBeFloat' => '{字段} 应该有效的浮动',
      'fieldShouldBeInt' => '{字段} 应该有效的整数',
      'fieldShouldBeDate' => '{字段} 应该有效日期',
      'fieldShouldBeDatetime' => '{字段} 应该有效 日期/时间',
      'fieldShouldAfter' => '{字段} 应该在 {其他字段} 之后',
      'fieldShouldBefore' => '{字段} 应该在 {其他字段} 之前',
      'fieldShouldBeBetween' => '{字段} 应该在 {最小} 和 {最大} 之间',
      'fieldShouldBeLess' => '{字段} 应该是不到 {值}',
      'fieldShouldBeGreater' => '{字段} 应该是更大 {值}',
      'fieldBadPasswordConfirm' => '{字段} 没有正式正确',
      'resetPreferencesDone' => '偏好设置已重置为默认值',
      'assignmentEmailNotificationSubject' => 'FoxCRM {entityType}: {Entity.name}',
      'assignmentEmailNotificationBody' => '{指定用户名} 已分配 {entityType} \'{Entity.name}\' 给你.

{recordUrl}',
      'confirmation' => '确定?',
      'resetPreferencesConfirmation' => '确定重置偏好设置为默认值?',
      'removeRecordConfirmation' => '确定删除记录?',
      'unlinkRecordConfirmation' => '确定删除客户关系?',
      'removeSelectedRecordsConfirmation' => '确定删除所选记录?',
      'massUpdateResult' => '{count} 记录已更新',
      'massUpdateResultSingle' => '{count} 记录已更新',
      'noRecordsUpdated' => '没有更新的记录',
      'massRemoveResult' => '{count} 记录已删除',
      'massRemoveResultSingle' => '{count} 记录已删除',
      'noRecordsRemoved' => '没有记录被删除',
      'clickToRefresh' => '点击刷新',
      'streamPostInfo' => 'Type <strong>@username</strong> to mention users in the post.

Available markdown syntax:
`<code>code</code>`
**<strong>strong text</strong>**
*<em>emphasized text</em>*
~<del>deleted text</del>~
> blockquote
(url)[link]',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => '只是本人',
      'followed' => 'Followed',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Followed',
    ),
    'massActions' => 
    array (
      'remove' => '删除',
      'merge' => '合并',
      'massUpdate' => '批量更新',
      'export' => '导出',
      'assgin' => '分派',
    ),
    'fields' => 
    array (
      'name' => '姓名',
      'firstName' => '姓',
      'lastName' => '名字',
      'salutationName' => '称呼',
      'assignedUser' => '负责人',
      'emailAddress' => '邮箱',
      'assignedUserName' => '指定用户名',
      'teams' => '团队',
      'createdAt' => '创建时间',
      'modifiedAt' => '修改时间',
      'createdBy' => '创建人',
      'modifiedBy' => '修改人',
      'description' => '简介',
      'address' => '地址',
      'phoneNumber' => '电话',
      'phoneNumberMobile' => '电话 (手机)',
      'phoneNumberHome' => '电话 (住宅)',
      'phoneNumberFax' => '电话 (传真)',
      'phoneNumberOffice' => '电话 (工作)',
      'phoneNumberOther' => '电话 (其他)',
      'order' => '命令',
      'parent' => '父母',
      'children' => '孩子',
      'billingAddressCity' => 'City',
      'billingAddressCountry' => 'Country',
      'billingAddressPostalCode' => 'Postal Code',
      'billingAddressState' => 'State',
      'billingAddressStreet' => 'Street',
      'addressCity' => 'City',
      'addressStreet' => 'Street',
      'addressCountry' => 'Country',
      'addressState' => 'State',
      'addressPostalCode' => 'Postal Code',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
    ),
    'links' => 
    array (
      'assignedUser' => '负责人',
      'createdBy' => '创建人',
      'modifiedBy' => '修改人',
      'team' => '团队',
      'roles' => '角色',
      'teams' => '团队',
      'users' => '用户',
      'parent' => 'Parent',
      'children' => '孩子',
      'contacts' => 'Contacts',
      'opportunities' => 'Opportunities',
      'leads' => 'Leads',
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'emails' => 'Emails',
      'accounts' => 'Accounts',
      'cases' => 'Cases',
      'documents' => 'Documents',
      'account' => 'Account',
      'opportunity' => 'Opportunity',
      'contact' => 'Contact',
    ),
    'dashlets' => 
    array (
      'Stream' => '客户沟通记录',
      'Leads' => 'My Leads',
      'Opportunities' => 'My Opportunities',
      'Tasks' => 'My Tasks',
      'Cases' => 'My Cases',
      'Calendar' => 'Calendar',
      'Calls' => 'My Calls',
      'Meetings' => 'My Meetings',
      'OpportunitiesByStage' => 'Opportunities by Stage',
      'OpportunitiesByLeadSource' => 'Opportunities by Lead Source',
      'SalesByMonth' => 'Sales by Month',
      'SalesPipeline' => 'Sales Pipeline',
      'Activities' => 'My Activities',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} 已经分配给你',
      'emailReceived' => '邮件收到 {from}',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} 创建了 {entityType} {entity}',
      'createAssigned' => '{user} 已创建 {entityType} {entity} 被分配给 {assignee}',
      'assign' => '{user} 分配 {entityType} {entity} 给 {assignee}',
      'post' => '{user} 发布关于 {entityType} {entity}',
      'attach' => '{user} 附加上 {entityType} {entity}',
      'status' => '{user} 更新了 {field} of {entityType} {entity}',
      'update' => '{user} 更新了 {entityType} {entity}',
      'createRelated' => '{user} 创建了 {relatedEntityType} {relatedEntity} related to {entityType} {entity}',
      'mentionInPost' => '{user} 提及到 {mentioned} 在 {entityType} {entity}',
      'createThis' => '{user} 创建 {entityType}',
      'createAssignedThis' => '{user} 创建了这个 {entityType} 分配给 {assignee}',
      'assignThis' => '{user} 分配 {entityType} 给 {assignee}',
      'postThis' => '{user} 添加',
      'attachThis' => '{user} 附上',
      'statusThis' => '{user} 更新 {field}',
      'updateThis' => '{user} 更新这个 {entityType}',
      'createRelatedThis' => '{user} 创建了 {relatedEntityType} {relatedEntity} 并关联到 {entityType}',
      'emailReceivedFromThis' => '邮件收到 {from}',
      'emailReceivedInitialFromThis' => 'Email received from {from}, this {entityType} created',
      'emailReceivedThis' => '收到邮件',
      'emailReceivedInitialThis' => 'Email received, this {entityType} created',
      'emailReceivedFrom' => 'Email received from {from}, related to {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email received from {from}, {entityType} {entity} created',
      'emailReceived' => 'Email received related to {entityType} {entity}',
      'emailReceivedInitial' => '收到邮件: {entityType} {entity} created',
      'emailReceivedInitialFrom' => 'Email received from {from}, {entityType} {entity} created',
      'emailSent' => '{by} 发送相关邮件给 {entityType} {entity}',
      'emailSentThis' => '{by} 发送邮件',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => '一月',
        1 => '二月',
        2 => '三月',
        3 => '四月',
        4 => '五月',
        5 => '六月',
        6 => '七月',
        7 => '八月',
        8 => '九月',
        9 => '十月',
        10 => '十一月',
        11 => '十二月',
      ),
      'monthNamesShort' => 
      array (
        0 => '一月',
        1 => '二月',
        2 => '三月',
        3 => '四月',
        4 => '五月',
        5 => '六月',
        6 => '七月',
        7 => '八月',
        8 => '九月',
        9 => '十月',
        10 => '十一月',
        11 => '十二月',
      ),
      'dayNames' => 
      array (
        0 => '星期日',
        1 => '星期一',
        2 => '星期二',
        3 => '星期三',
        4 => '星期四',
        5 => '星期五',
        6 => '星期六',
      ),
      'dayNamesShort' => 
      array (
        0 => '星期日',
        1 => '星期一',
        2 => '星期二',
        3 => '星期三',
        4 => '星期四',
        5 => '星期五',
        6 => '星期六',
      ),
      'dayNamesMin' => 
      array (
        0 => '星期日',
        1 => '星期一',
        2 => '星期二',
        3 => '星期三',
        4 => '星期四',
        5 => '星期五',
        6 => '星期六',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => '先生',
        'Mrs.' => '夫人',
        'Ms.' => '小姐',
        'Dr.' => '博士',
      ),
      'language' => 
      array (
        'af_ZA' => '阿非利堪斯语',
        'az_AZ' => '阿塞拜疆语',
        'be_BY' => '白俄罗斯语',
        'bg_BG' => '保加利亚语',
        'bn_IN' => '孟加拉语',
        'bs_BA' => '波斯尼亚语',
        'ca_ES' => '加泰罗尼亚语',
        'cs_CZ' => '捷克语',
        'cy_GB' => '威尔士语',
        'da_DK' => '丹麦语',
        'de_DE' => '德语',
        'el_GR' => '希腊语',
        'en_GB' => '英语 (英国)',
        'en_US' => '英语 (美国)',
        'es_ES' => '西班牙语 (西班牙)',
        'et_EE' => '爱沙尼亚语',
        'eu_ES' => '巴斯克语',
        'fa_IR' => '波斯语',
        'fi_FI' => '芬兰语',
        'fo_FO' => '法罗语',
        'fr_CA' => '法语 (加拿大)',
        'fr_FR' => '法语 (法国)',
        'ga_IE' => '爱尔兰语',
        'gl_ES' => '加利西亚语',
        'gn_PY' => '瓜拉尼语',
        'he_IL' => '希伯来语',
        'hi_IN' => '北印度语',
        'hr_HR' => '克罗地亚语',
        'hu_HU' => '匈牙利语',
        'hy_AM' => '亚美尼亚语',
        'id_ID' => '印度尼西亚语',
        'is_IS' => '冰岛语',
        'it_IT' => '意大利语',
        'ja_JP' => '日语',
        'ka_GE' => '格鲁吉亚语',
        'km_KH' => '高棉语',
        'ko_KR' => '韩语',
        'ku_TR' => '库尔德语',
        'lt_LT' => '立陶宛语',
        'lv_LV' => '拉脱维亚语',
        'mk_MK' => '马其顿语',
        'ml_IN' => '马拉雅拉姆语',
        'ms_MY' => '马来语',
        'nb_NO' => '挪威语 博克马尔语',
        'nn_NO' => '挪威语 尼诺斯克语',
        'ne_NP' => '尼泊尔语',
        'nl_NL' => '荷兰语',
        'pa_IN' => '旁遮普语',
        'pl_PL' => '波兰语',
        'ps_AF' => '普什图语',
        'pt_BR' => '葡萄牙语 (巴西)',
        'pt_PT' => '葡萄牙语 (葡萄牙)',
        'ro_RO' => '罗马尼亚语',
        'ru_RU' => '俄语',
        'sk_SK' => '斯洛伐克语',
        'sl_SI' => '斯洛文尼亚语',
        'sq_AL' => '阿尔巴尼亚语',
        'sr_RS' => '塞尔维亚语',
        'sv_SE' => '瑞典语',
        'sw_KE' => '斯瓦西里语',
        'ta_IN' => '泰米尔语',
        'te_IN' => '泰卢固语',
        'th_TH' => '泰语',
        'tl_PH' => '塔加拉族语',
        'tr_TR' => '土耳其语',
        'uk_UA' => '乌克兰语',
        'ur_PK' => '乌尔都语',
        'vi_VN' => '越南语',
        'zh_CN' => '简体中文 (中国)',
        'zh_HK' => '繁体中文 (香港)',
        'zh_TW' => '繁体中文 (台湾)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => '等于',
        'notOn' => '不等于',
        'after' => '之后',
        'before' => '之前',
        'between' => '之间',
        'today' => '今天',
        'past' => '过去',
        'future' => '未来',
        'currentMonth' => '本月',
        'lastMonth' => '上个月',
        'currentQuarter' => '本季度',
        'lastQuarter' => '最后一个季度',
        'currentYear' => '本年度',
        'lastYear' => '去年',
      ),
      'searchRanges' => 
      array (
        'is' => '等于',
        'isEmpty' => '为空',
        'isNotEmpty' => '不为空',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => '等于',
        'startsWith' => '开始于',
        'contains' => '包含',
      ),
      'intSearchRanges' => 
      array (
        'equals' => '等于',
        'notEquals' => '不等于',
        'greaterThan' => '大于',
        'lessThan' => '小于',
        'greaterThanOrEquals' => '大于等于',
        'lessThanOrEquals' => '小于或等于',
        'between' => '介于',
      ),
      'autorefreshInterval' => 
      array (
        0 => '空',
        '0.5' => '30秒',
        1 => '一分钟',
        2 => '2分钟',
        5 => '5分钟',
        10 => '10分钟',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => '手机',
        'Office' => '办公',
        'Fax' => '传真',
        'Home' => '住宅',
        'Other' => '其他',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Popup',
        'Email' => 'Email',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => '你可以在这里找到翻译: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => '粗体',
          'italic' => '斜体',
          'underline' => '下划线',
          'strike' => '中划线',
          'clear' => '删除字体样式',
          'height' => '行高度',
          'name' => '系统字体',
          'size' => '字体大小',
        ),
        'image' => 
        array (
          'image' => '图片',
          'insert' => '插入图片',
          'resizeFull' => 'Resize Full',
          'resizeHalf' => 'Resize Half',
          'resizeQuarter' => 'Resize Quarter',
          'floatLeft' => 'Float Left',
          'floatRight' => 'Float Right',
          'floatNone' => 'Float None',
          'dragImageHere' => 'Drag an image here',
          'selectFromFiles' => '选择文件',
          'url' => '图片URL',
          'remove' => '清除图片',
        ),
        'link' => 
        array (
          'link' => '链接',
          'insert' => '插入链接',
          'unlink' => '删除链接',
          'edit' => '编辑',
          'textToDisplay' => '文本内容',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => '新窗口打开',
        ),
        'video' => 
        array (
          'video' => '视频',
          'videoLink' => '视频链接',
          'insert' => '插入视频',
          'url' => '视频 URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => '表格',
        ),
        'hr' => 
        array (
          'insert' => '分隔线',
        ),
        'style' => 
        array (
          'style' => '风格',
          'normal' => '正常',
          'blockquote' => '引用',
          'pre' => 'Code',
          'h1' => 'Header 1',
          'h2' => 'Header 2',
          'h3' => 'Header 3',
          'h4' => 'Header 4',
          'h5' => 'Header 5',
          'h6' => 'Header 6',
        ),
        'lists' => 
        array (
          'unordered' => '无序列表',
          'ordered' => '有序列表',
        ),
        'options' => 
        array (
          'help' => '帮助',
          'fullscreen' => '全屏',
          'codeview' => '代码视图',
        ),
        'paragraph' => 
        array (
          'paragraph' => '段落',
          'outdent' => '减少缩进',
          'indent' => '增加缩进',
          'left' => '左对齐',
          'center' => '居中对齐',
          'right' => '右对齐',
          'justify' => '两端对齐',
        ),
        'color' => 
        array (
          'recent' => '最近颜色',
          'more' => '更多颜色',
          'background' => '背景颜色',
          'foreground' => '字体颜色',
          'transparent' => '透明',
          'setTransparent' => '设置透明',
          'reset' => '重置',
          'resetToDefault' => '恢复默认设置',
        ),
        'shortcut' => 
        array (
          'shortcuts' => '快捷键',
          'close' => '关闭',
          'textFormatting' => '文本格式',
          'action' => '作用',
          'paragraphFormatting' => '段落格式',
          'documentStyle' => '文件样式',
        ),
        'history' => 
        array (
          'undo' => '撤销',
          'redo' => '恢复',
        ),
      ),
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => '恢复导入',
      'Return to Import' => '重新导入',
      'Run Import' => '运行导入',
      'Back' => '返回',
      'Field Mapping' => '匹配字段',
      'Default Values' => '默认值',
      'Add Field' => '添加字段',
      'Created' => '已创建',
      'Updated' => '更新',
      'Result' => '结果',
      'Show records' => '显示记录',
      'Remove Duplicates' => '删除重复记录',
      'importedCount' => '输入 (count)',
      'duplicateCount' => '复制 (count)',
      'Step 1' => '步骤一',
      'What to Import?' => '导入到哪里?',
      'Entity Type' => '选择模块',
      'File' => '文件',
      'What to do?' => '动作',
      'Create Only' => '只创建',
      'Create and Update' => '创建和更新',
      'Properties' => '参数设置',
      'Header Row' => '是否有标题行',
      'Person Name Format' => '姓名格式',
      'Smith John' => '姓名',
      'John Smith' => '名姓',
      'Field Delimiter' => '字段分隔符',
      'Date Format' => '日期格式',
      'Decimal Mark' => '十进制标志',
      'Text Qualifier' => '文本限定符',
      'Time Format' => '时间格式',
      'Currency' => '货币',
      'Preview' => '预览',
      'Header Row Value' => '标题',
      'Field' => '字段',
      'First Row Value' => '第一行数据值',
      'Skip' => '忽略',
      'updatedCount' => '更新 (count)',
    ),
    'messages' => 
    array (
      'utf8' => '必须是xls或者xlsx后缀',
      'duplicatesRemoved' => '重复删除',
    ),
    'fields' => 
    array (
      'file' => '文件',
      'entityType' => '实体类型',
      'imported' => '输入记录',
      'duplicates' => '备份记录',
      'updated' => '更新记录',
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => '名字',
      'team' => '团队',
      'status' => '状态',
      'assignToUser' => '分配给用户',
      'host' => '主机',
      'username' => '用户名',
      'password' => '密码',
      'port' => '端口',
      'monitoredFolders' => 'Monitored Folders',
      'trashFolder' => 'Trash Folder',
      'ssl' => 'SSL',
      'createCase' => '创建案例',
      'reply' => '自动回复',
      'caseDistribution' => '案例分配',
      'replyEmailTemplate' => '回复邮件模版',
      'replyFromAddress' => '回复地址',
      'replyToAddress' => '回复地址',
      'replyFromName' => '回复名字',
      'targetUserPosition' => '目标用户地址',
    ),
    'tooltips' => 
    array (
      'reply' => '通知发件人邮件已收到.',
      'createCase' => '从收到的邮件自动创建案例.',
      'replyToAddress' => 'Specify email address of this mailbox to make responses come here.',
      'caseDistribution' => 'How cases will be assigned to. Assigned directly to the user or among the team.',
      'assignToUser' => 'User emails/cases will be assigned to.',
      'team' => 'Team emails/cases will be related to.',
      'targetUserPosition' => 'Define the position of users which will be destributed with cases.',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => '活跃',
        'Inactive' => '不活跃',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Direct-Assignment',
        'Round-Robin' => '循环',
        'Least-Busy' => 'Least-Busy',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => '创建邮箱账户',
      'IMAP' => 'IMAP',
      'Actions' => '动作',
      'Main' => '主要',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => '不能连接到 IMAP 服务器',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => '启用',
      'clientId' => '用户帐号',
      'clientSecret' => '用户密码',
      'redirectUri' => '重定向 URI',
    ),
    'messages' => 
    array (
      'selectIntegration' => '从菜单中选择一个集成.',
      'noIntegrations' => '没有可用的集成.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Obtain OAuth 2.0 credentials from the Google Developers Console.</b></p><p>Visit <a href="https://console.developers.google.com/project">Google Developers Console</a> to obtain OAuth 2.0 credentials such as a Client ID and Client Secret that are known to both Google and FoxCRM application.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executeTime' => 'Execute At',
      'attempts' => 'Attempts Left',
      'failedAttempts' => 'Failed Attempts',
      'serviceName' => 'Service',
      'method' => 'Method',
      'scheduledJob' => 'Scheduled Job',
      'data' => 'Data',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Pending',
        'Success' => 'Success',
        'Running' => 'Running',
        'Failed' => 'Failed',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Width (%)',
      'link' => 'Link',
      'notSortable' => 'Not Sortable',
      'align' => 'Align',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Left',
        'right' => 'Right',
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Post',
      'attachments' => '附件',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => '日期格式',
      'timeFormat' => '时间格式',
      'timeZone' => '时区',
      'weekStart' => '一周第一天',
      'thousandSeparator' => 'Thousand Separator',
      'decimalMark' => 'Decimal Mark',
      'defaultCurrency' => 'Default Currency',
      'currencyList' => 'Currency List',
      'language' => '语言',
      'smtpServer' => '服务器',
      'smtpPort' => '端口',
      'smtpAuth' => '权密钥',
      'smtpSecurity' => '安全',
      'smtpUsername' => '用户名',
      'emailAddress' => '邮箱',
      'smtpPassword' => '密码',
      'smtpEmailAddress' => '邮箱地址',
      'exportDelimiter' => '导出分隔符',
      'receiveAssignmentEmailNotifications' => '接收邮件通知的任务',
      'autoFollowEntityTypeList' => 'Auto-Follow',
      'signature' => '邮件签名',
      'dashboardTabList' => '选项卡列表',
      'defaultReminders' => '默认提示',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => '星期日',
        1 => '星期一',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => '通知',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'User will automatically follow all new records of the selected entity types, will see information in the stream and receive notifications.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => '名字',
      'roles' => '角色',
      'assignmentPermission' => '作业许可',
    ),
    'links' => 
    array (
      'users' => '用户',
      'teams' => '团队',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => '允许有权限的用户可以分配记录给其他用户.

all - no restriction

team - can assign users from own teams

no - can assign only to self',
    ),
    'labels' => 
    array (
      'Access' => '存取',
      'Create Role' => '创建角色',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'not-set',
        'enabled' => '启用',
        'disabled' => '禁用',
      ),
      'levelList' => 
      array (
        'all' => '所有',
        'team' => '团队',
        'own' => '个人',
        'no' => 'no',
      ),
      'assignmentPermission' => 
      array (
        'all' => '所有',
        'team' => '团队',
        'not-set' => 'not-set',
      ),
    ),
    'actions' => 
    array (
      'read' => '读',
      'edit' => '编辑',
      'delete' => '删除',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'All changes in an access control will be applied after cache will be cleared.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => '名字',
      'status' => '状态',
      'job' => '工作',
      'scheduling' => '线程调度 (crontab 符号)',
    ),
    'links' => 
    array (
      'log' => '日志',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => '创建计划工作',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => '清除',
        'ProcessMassEmail' => 'Send Mass Emails',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Note: Add this line to the crontab file to run Fox Scheduled Jobs:',
        'mac' => 'Note: Add this line to the crontab file to run Fox Scheduled Jobs:',
        'windows' => 'Note: Create a batch file with the following commands to run Fox Scheduled Jobs using Windows Scheduled Tasks:',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => '活跃',
        'Inactive' => '不活跃',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => '状态',
      'executionTime' => '执行时间',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => '使用缓存',
      'accountMaxCount' => '坐席最大客户数量',
      'accountMaxDelayTime' => '坐席最大可私有客户时间',
      'accountMaxFollow' => '坐席例外客户最大值',
      'dateFormat' => '日期格式',
      'timeFormat' => '时间格式',
      'timeZone' => '时区',
      'weekStart' => '一周第一天',
      'thousandSeparator' => 'Thousand Separator',
      'decimalMark' => 'Decimal Mark',
      'defaultCurrency' => 'Default Currency',
      'baseCurrency' => 'Base Currency',
      'currencyRates' => '率值',
      'currencyList' => 'Currency List',
      'language' => '语言',
      'companyLogo' => '公司标志',
      'smtpServer' => '服务器',
      'smtpPort' => '端口',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => '安全',
      'smtpUsername' => '用户名',
      'emailAddress' => '邮箱',
      'smtpPassword' => '密码',
      'outboundEmailFromName' => '发送人',
      'outboundEmailFromAddress' => '发送地址',
      'outboundEmailIsShared' => '共享',
      'recordsPerPage' => '每页记录',
      'recordsPerPageSmall' => '每页记录 (小号)',
      'tabList' => '选项卡列表',
      'quickCreateList' => '快速创建列表',
      'exportDelimiter' => '导出分隔符',
      'globalSearchEntityList' => '全球搜索实体列表',
      'authenticationMethod' => '认证方式',
      'ldapHost' => '主机',
      'ldapPort' => '端口',
      'ldapAuth' => 'Auth',
      'ldapUsername' => '用户名',
      'ldapPassword' => '密码',
      'ldapBindRequiresDn' => 'Bind Requires Dn',
      'ldapBaseDn' => 'Base Dn',
      'ldapAccountCanonicalForm' => '账户规范形式',
      'ldapAccountDomainName' => '账户的域名',
      'ldapTryUsernameSplit' => '尝试用户名分离',
      'ldapCreateFoxUser' => '在FoxCRM创建用户',
      'ldapSecurity' => '安全',
      'ldapUserLoginFilter' => '用户登录过滤',
      'ldapAccountDomainNameShort' => '账户的域名短',
      'ldapOptReferrals' => '选择推荐',
      'disableExport' => '禁止导出(只允许admin)',
      'assignmentNotificationsEntityList' => 'Entities to Notify about upon Assignment',
      'assignmentEmailNotifications' => '根据任务发送邮件通知',
      'assignmentEmailNotificationsEntityList' => 'Entities to Notify about with Email upon Assignment',
      'b2cMode' => 'B2C 模式',
      'disableAvatars' => 'Disable Avatars',
      'followCreatedEntities' => 'Follow Created Entities',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => '星期日',
        1 => '星期一',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPageSmall' => 'Count of records in relatinship panels.',
      'outboundEmailIsShared' => 'Allow users to sent emails via this SMTP.',
      'followCreatedEntities' => 'If user created a record he/she will follow it automatically.',
    ),
    'labels' => 
    array (
      'System' => '系统',
      'Locale' => '地点',
      'SMTP' => 'SMTP',
      'Configuration' => '配置',
      'In-app Notifications' => 'In-app Notifications',
      'Email Notifications' => 'Email Notifications',
      'Currency Settings' => 'Currency Settings',
      'Currency Rtes' => 'Currency Rates',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => '名字',
      'roles' => '角色',
      'positionList' => '职位列表',
    ),
    'links' => 
    array (
      'users' => '用户',
    ),
    'tooltips' => 
    array (
      'roles' => '访问规则. 这个团队的用户根据选中角色获得访问控制级别.',
      'positionList' => '这个团队可用的职位. 如 销售, 经理.',
    ),
    'labels' => 
    array (
      'Create Team' => '创建团队',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'body' => 'Body',
      'entityType' => 'Entity Type',
      'header' => 'Header',
      'footer' => 'Footer',
      'leftMargin' => 'Left Margin',
      'topMargin' => 'Top Margin',
      'rightMargin' => 'Right Margin',
      'bottomMargin' => 'Bottom Margin',
      'printFooter' => 'Print Footer',
      'footerPosition' => 'Footer Position',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Create Template',
    ),
    'tooltips' => 
    array (
      'footer' => 'Use {pageNumber} to print page number.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => '名字',
      'userName' => '用户名',
      'title' => '标题',
      'isAdmin' => 'Is Admin',
      'defaultTeam' => '默认团队',
      'emailAddress' => '邮箱',
      'phoneNumber' => '电话',
      'roles' => '角色',
      'teamRole' => '职位',
      'password' => '密码',
      'passwordConfirm' => '确认密码',
      'newPassword' => '新密码',
      'newPasswordConfirm' => '确认新密码',
      'avatar' => '头像',
      'isActive' => '是否激活',
      'agent' => '分机号',
      'agents' => '分机',
    ),
    'links' => 
    array (
      'teams' => '团队',
      'roles' => '角色',
      'targetLists' => 'Target Lists',
      'agents' => '分机',
    ),
    'labels' => 
    array (
      'Create User' => '创建用户',
      'Generate' => '生成',
      'Access' => '访问',
      'Preferences' => '参数选择',
      'Change Password' => '修改密码',
      'Teams and Access Control' => '团队和访问控制',
      'Forgot Password?' => '忘记密码?',
      'Password Change Request' => '密码变更请求',
      'Email Address' => '邮箱地址',
      'External Accounts' => '对外账户',
      'Email Accounts' => '邮箱帐号',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => '这个用户创建的所有记录将默认关联到团队.',
      'userName' => '只能填写字母 a-z, 数字 0-9 和下划线.',
      'isAdmin' => 'Admin用户拥有所有权限.',
      'isActive' => '未经验证的用户无法登录.',
      'teams' => '用户所属的团队. 访问控制权限是继承自团队中的角色.',
      'roles' => '附加访问规则. 如果用户不属于任何团队或者你需要为这个用户扩展访问控制权限时使用它.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => '密码将会发送到用户的邮箱.',
      'accountInfoEmailSubject' => 'FoxCRM 用户访问信息',
      'accountInfoEmailBody' => '你的访问信息:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => '更改密码请求',
      'passwordChangeLinkEmailBody' => '你可以在这个链接更改你的密码 {link}. 这个唯一的 url 将很快失效.',
      'passwordChanged' => '密码已经被更改',
      'userCantBeEmpty' => '用户名不能为空',
      'wrongUsernamePasword' => '错误 用户名/密码',
      'emailAddressCantBeEmpty' => '邮箱地址不能为空',
      'userNameEmailAddressNotFound' => '找不到用户名/邮箱地址',
      'forbidden' => '禁止, 请稍后再试',
      'uniqueLinkHasBeenSent' => '那个唯一的链接已经发送到指定邮箱地址.',
      'passwordChangedByRequest' => '密码已经更改.',
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => '只有我的团队',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => '姓名',
      'emailAddress' => 'Email',
      'website' => '网址',
      'phoneNumber' => '电话',
      'billingAddress' => '联系地址',
      'shippingAddress' => 'Shipping Address',
      'description' => '备注',
      'sicCode' => 'Sic Code',
      'industry' => '来源',
      'type' => '类型',
      'contactRole' => 'Title',
      'campaign' => 'Campaign',
      'opportunities' => '客户追踪',
      'cdrs' => 'Cdrs',
      'tickets' => '工单',
      'tracks' => 'Tracks',
    ),
    'links' => 
    array (
      'contacts' => 'Contacts',
      'opportunities' => '客户追踪',
      'cases' => 'Cases',
      'documents' => 'Documents',
      'meetingsPrimary' => 'Meetings (expanded)',
      'callsPrimary' => 'Calls (expanded)',
      'tasksPrimary' => 'Tasks (expanded)',
      'emailsPrimary' => 'Emails (expanded)',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'cdrs' => 'Cdrs',
      'tickets' => '工单',
      'tracks' => 'Tracks',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Customer',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Reseller' => 'Reseller',
      ),
      'industry' => 
      array (
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Advertising',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Automotive' => 'Automotive',
        'Banking' => 'Banking',
        'Biotechnology' => 'Biotechnology',
        'Chemical' => 'Chemical',
        'Computer' => 'Computer',
        'Education' => 'Education',
        'Electronics' => 'Electronics',
        'Energy' => 'Energy',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Finance',
        'Food & Beverage' => 'Food & Beverage',
        'Grocery' => 'Grocery',
        'Healthcare' => 'Healthcare',
        'Insurance' => 'Insurance',
        'Legal' => 'Legal',
        'Manufacturing' => 'Manufacturing',
        'Publishing' => 'Publishing',
        'Real Estate' => 'Real Estate',
        'Service' => 'Service',
        'Sports' => 'Sports',
        'Software' => 'Software',
        'Technology' => 'Technology',
        'Telecommunications' => 'Telecommunications',
        'Television' => 'Television',
        'Transportation' => 'Transportation',
        'Venture Capital' => 'Venture Capital',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => '创建 客户',
      'Copy Billing' => 'Copy Billing',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Customers',
      'partners' => 'Partners',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Month',
      'week' => 'Week',
      'day' => 'Day',
      'agendaWeek' => 'Week',
      'agendaDay' => 'Day',
    ),
    'labels' => 
    array (
      'Today' => 'Today',
      'Create' => 'Create',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Parent',
      'status' => 'Status',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date End',
      'direction' => 'Direction',
      'duration' => 'Duration',
      'description' => 'Description',
      'users' => 'Users',
      'contacts' => 'Contacts',
      'leads' => 'Leads',
      'reminders' => 'Reminders',
      'account' => 'Account',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planned',
        'Held' => 'Held',
        'Not Held' => 'Not Held',
      ),
      'direction' => 
      array (
        'Outbound' => 'Outbound',
        'Inbound' => 'Inbound',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'None',
        'Accepted' => 'Accepted',
        'Declined' => 'Declined',
        'Tentative' => 'Tentative',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Call' => 'Create Call',
      'Set Held' => 'Set Held',
      'Set Not Held' => 'Set Not Held',
      'Send Invitations' => 'Send Invitations',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planned',
      'held' => 'Held',
      'todays' => 'Today\'s',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'description' => 'Description',
      'status' => 'Status',
      'type' => 'Type',
      'startDate' => 'Start Date',
      'endDate' => 'End Date',
      'targetLists' => 'Target Lists',
      'sentCount' => 'Sent',
      'openedCount' => 'Opened',
      'clickedCount' => 'Clicked',
      'optedOutCount' => 'Opted Out',
      'bouncedCount' => 'Bounced',
      'hardBouncedCount' => 'Hard Bounced',
      'softBouncedCount' => 'Soft Bounced',
      'leadCreatedCount' => 'Leads Created',
      'revenue' => 'Revenue',
      'revenueConverted' => 'revenue (converted)',
      'budget' => 'Budget',
    ),
    'links' => 
    array (
      'targetLists' => 'Target Lists',
      'accounts' => 'Accounts',
      'contacts' => 'Contacts',
      'leads' => 'Leads',
      'opportunities' => 'Opportunities',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Mass Emails',
      'trackingUrls' => 'Tracking URLs',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Television',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Mail',
      ),
      'status' => 
      array (
        'Planning' => 'Planning',
        'Active' => 'Active',
        'Inactive' => 'Inactive',
        'Complete' => 'Complete',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => '创建 Campaign',
      'Target Lists' => 'Target Lists',
      'Statistics' => 'Statistics',
      'hard' => 'hard',
      'soft' => 'soft',
      'Unsubscribe' => 'Unsubscribe',
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'You have been unsubscribed from our mailing list.',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Action',
      'actionDate' => 'Date',
      'data' => 'Data',
      'campaign' => 'Campaign',
      'parent' => 'Target',
      'object' => 'Object',
      'application' => 'Application',
      'queueItem' => 'Queue Item',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Sent',
        'Opened' => 'Opened',
        'Opted Out' => 'Opted Out',
        'Bounced' => 'Bounced',
        'Clicked' => 'Clicked',
        'Lead Created' => 'Lead Created',
      ),
    ),
    'labels' => 
    array (
      'All' => 'All',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Sent',
      'opened' => 'Opened',
      'optedOut' => 'Opted Out',
      'bounced' => 'Bounced',
      'clicked' => 'Clicked',
      'leadCreated' => 'Lead Created',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Code to insert instead of URL',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'campaign' => 'Campaign',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Create Tracking URL',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'number' => 'Number',
      'status' => 'Status',
      'account' => 'Account',
      'contact' => 'Contact',
      'contacts' => 'Contacts',
      'priority' => 'Priority',
      'type' => 'Type',
      'description' => 'Description',
      'inboundEmail' => 'Inbound Email',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Inbound Email',
      'account' => 'Account',
      'contact' => 'Contact (Primary)',
      'Contacts' => 'Contacts',
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'emails' => 'Emails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'New',
        'Assigned' => 'Assigned',
        'Pending' => 'Pending',
        'Closed' => 'Closed',
        'Rejected' => 'Rejected',
        'Duplicate' => 'Duplicate',
      ),
      'priority' => 
      array (
        'Low' => 'Low',
        'Normal' => 'Normal',
        'High' => 'High',
        'Urgent' => 'Urgent',
      ),
      'type' => 
      array (
        'Question' => 'Question',
        'Incident' => 'Incident',
        'Problem' => 'Problem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Create Case',
      'Close' => 'Close',
      'Reject' => 'Reject',
      'Closed' => 'Closed',
      'Rejected' => 'Rejected',
    ),
    'presetFilters' => 
    array (
      'open' => 'Open',
      'closed' => 'Closed',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'title' => 'Title',
      'account' => 'Account',
      'accounts' => 'Accounts',
      'phoneNumber' => 'Phone',
      'accountType' => 'Account Type',
      'doNotCall' => 'Do Not Call',
      'address' => 'Address',
      'opportunityRole' => 'Opportunity Role',
      'accountRole' => 'Title',
      'description' => 'Description',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
    ),
    'links' => 
    array (
      'opportunities' => 'Opportunities',
      'cases' => 'Cases',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'account' => 'Account (Primary)',
      'accounts' => 'Accounts',
      'casesPrimary' => 'Cases (Primary)',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Create Contact',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--None--',
        'Decision Maker' => 'Decision Maker',
        'Evaluator' => 'Evaluator',
        'Influencer' => 'Influencer',
      ),
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => '创建 Document',
      'Details' => 'Details',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'file' => 'File',
      'type' => 'Type',
      'source' => 'Source',
      'publishDate' => 'Publish Date',
      'expirationDate' => 'Expiration Date',
      'description' => 'Description',
      'accounts' => 'Accounts',
      'folder' => 'Folder',
    ),
    'links' => 
    array (
      'accounts' => 'Accounts',
      'opportunities' => 'Opportunities',
      'folder' => 'Folder',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Active',
        'Draft' => 'Draft',
        'Expired' => 'Expired',
        'Canceled' => 'Canceled',
      ),
      'type' => 
      array (
        '' => 'None',
        'Contract' => 'Contract',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'License Agreement',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'draft' => 'Draft',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Create Document Folder',
      'Manage Categories' => 'Manage Folders',
    ),
    'links' => 
    array (
      'documents' => 'Documents',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'target' => 'Target',
      'sentAt' => 'Date Sent',
      'attemptCount' => 'Attempts',
      'emailAddress' => 'Email Address',
      'massEmail' => 'Mass Email',
      'isTest' => 'Is Test',
    ),
    'links' => 
    array (
      'target' => 'Target',
      'massEmail' => 'Mass Email',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Pending',
        'Sent' => 'Sent',
        'Failed' => 'Failed',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Pending',
      'sent' => 'Sent',
      'failed' => 'Failed',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Converted To',
      'Create Lead' => '创建 Lead',
      'Convert' => 'Convert',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'title' => 'Title',
      'website' => 'Website',
      'phoneNumber' => 'Phone',
      'accountName' => 'Account Name',
      'doNotCall' => 'Do Not Call',
      'address' => 'Address',
      'status' => 'Status',
      'source' => 'Source',
      'opportunityAmount' => 'Opportunity Amount',
      'opportunityAmountConverted' => 'Opportunity Amount (converted)',
      'description' => 'Description',
      'createdAccount' => 'Account',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Opportunity',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
    ),
    'links' => 
    array (
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'createdAccount' => 'Account',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Opportunity',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'New',
        'Assigned' => 'Assigned',
        'In Process' => 'In Process',
        'Converted' => 'Converted',
        'Recycled' => 'Recycled',
        'Dead' => 'Dead',
      ),
      'source' => 
      array (
        '' => 'None',
        'Call' => 'Call',
        'Email' => 'Email',
        'Existing Customer' => 'Existing Customer',
        'Partner' => 'Partner',
        'Public Relations' => 'Public Relations',
        'Web Site' => 'Web Site',
        'Campaign' => 'Campaign',
        'Other' => 'Other',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'converted' => 'Converted',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'storeSentEmails' => 'Store Sent Emails',
      'startAt' => 'Date Start',
      'fromAddress' => 'From Address',
      'fromName' => 'From Name',
      'replyToAddress' => 'Reply-to Address',
      'replyToName' => 'Reply-to Name',
      'campaign' => 'Campaign',
      'emailTemplate' => 'Email Template',
      'inboundEmail' => 'Email Account',
      'targetLists' => 'Target Lists',
    ),
    'links' => 
    array (
      'targetLists' => 'Target Lists',
      'queueItems' => 'Queue Items',
      'campaign' => 'Campaign',
      'emailTemplate' => 'Email Template',
      'inboundEmail' => 'Email Account',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Draft',
        'Pending' => 'Pending',
        'In Process' => 'In Process',
        'Complete' => 'Complete',
        'Canceled' => 'Canceled',
        'Failed' => 'Failed',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Create Mass Email',
      'Send Test' => 'Send Test',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Select at least one target.',
      'testSent' => 'Test email(s) supposed to be sent',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Parent',
      'status' => 'Status',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date End',
      'duration' => 'Duration',
      'description' => 'Description',
      'users' => 'Users',
      'contacts' => 'Contacts',
      'leads' => 'Leads',
      'reminders' => 'Reminders',
      'account' => 'Account',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planned',
        'Held' => 'Held',
        'Not Held' => 'Not Held',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'None',
        'Accepted' => 'Accepted',
        'Declined' => 'Declined',
        'Tentative' => 'Tentative',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Create Meeting',
      'Set Held' => 'Set Held',
      'Set Not Held' => 'Set Not Held',
      'Send Invitations' => 'Send Invitations',
      'on time' => 'on time',
      'before' => 'before',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planned',
      'held' => 'Held',
      'todays' => 'Today\'s',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => '标题',
      'account' => '客户',
      'selectTemplate' => '选择模板',
      'stage' => 'Stage',
      'amount' => 'Amount',
      'probability' => 'Probability, %',
      'leadSource' => 'Lead Source',
      'doNotCall' => 'Do Not Call',
      'closeDate' => 'Close Date',
      'contacts' => 'Contacts',
      'description' => '描述',
      'amountConverted' => 'Amount (converted)',
      'amountWeightedConverted' => 'Amount Weighted',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'contacts' => 'Contacts',
      'documents' => 'Documents',
      'campaign' => 'Campaign',
      'account' => '客户',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Qualification',
        'Needs Analysis' => 'Needs Analysis',
        'Value Proposition' => 'Value Proposition',
        'Id. Decision Makers' => 'Id. Decision Makers',
        'Perception Analysis' => 'Perception Analysis',
        'Proposal/Price Quote' => 'Proposal/Price Quote',
        'Negotiation/Review' => 'Negotiation/Review',
        'Closed Won' => 'Closed Won',
        'Closed Lost' => 'Closed Lost',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => '创建 客户追踪',
    ),
    'presetFilters' => 
    array (
      'open' => 'Open',
      'won' => 'Won',
      'lost' => 'Lost',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'title' => 'Title',
      'website' => 'Website',
      'accountName' => 'Account Name',
      'phoneNumber' => 'Phone',
      'doNotCall' => 'Do Not Call',
      'address' => 'Address',
      'description' => 'Description',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Create Target',
      'Convert to Lead' => 'Convert to Lead',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'description' => 'Description',
      'entryCount' => 'Entry Count',
      'campaigns' => 'Campaigns',
      'endDate' => 'End Date',
      'targetLists' => 'Target Lists',
    ),
    'links' => 
    array (
      'accounts' => 'Accounts',
      'contacts' => 'Contacts',
      'leads' => 'Leads',
      'campaigns' => 'Campaigns',
      'massEmails' => 'Mass Emails',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Television',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Create Target List',
      'Opted Out' => 'Opted Out',
      'Cancel Opt-Out' => 'Cancel Opt-Out',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Parent',
      'status' => 'Status',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date Due',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Priority',
      'description' => 'Description',
      'isOverdue' => 'Is Overdue',
      'account' => 'Account',
      'dateCompleted' => 'Date Completed',
      'attachments' => 'Attachments',
    ),
    'links' => 
    array (
      'attachments' => 'Attachments',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Not Started',
        'Started' => 'Started',
        'Completed' => 'Completed',
        'Canceled' => 'Canceled',
        'Deferred' => 'Deferred',
      ),
      'priority' => 
      array (
        'Low' => 'Low',
        'Normal' => 'Normal',
        'High' => 'High',
        'Urgent' => 'Urgent',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Create Task',
      'Complete' => 'Complete',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'completed' => 'Completed',
      'todays' => 'Today\'s',
      'overdue' => 'Overdue',
    ),
  ),
  'Agent' => 
  array (
    'labels' => 
    array (
      'Create Agent' => '创建 分机',
    ),
    'fields' => 
    array (
      'status' => '状态',
      'user' => '用户',
      'is_login' => 'is_login',
      'is_assigned' => 'is_assigned',
      'name' => '姓名',
    ),
    'options' => 
    array (
      'status' => 
      array (
        '_empty_' => '',
        'Break' => 'Break',
        'Available' => 'Available',
      ),
    ),
    'links' => 
    array (
      'user' => '用户',
    ),
  ),
  'Cdr' => 
  array (
    'labels' => 
    array (
      'Create Cdr' => '创建 通话记录',
    ),
    'fields' => 
    array (
      'accounts' => 'Accounts',
      'src' => '主叫',
      'dst' => '被叫',
      'ringTime' => '振铃时间',
      'uniqueid' => 'uniqueid',
      'listid' => 'listid',
      'campaignid' => 'campaignid',
      'status' => '状态',
      'phoneNumber' => '电话号码',
      'agent' => 'agent',
      'dropType' => '挂机方',
      'group' => '技能组',
      'answeredtime' => '通话时长',
      'dialtime' => '拨打时长',
      'starttime' => '开始时间',
      'endtime' => '结束时间',
      'type' => '进/出线',
    ),
    'links' => 
    array (
      'accounts' => 'Accounts',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'in' => '进线',
        'out' => '出线',
      ),
    ),
  ),
  'Queue' => 
  array (
    'labels' => 
    array (
      'Create Queue' => '创建 队列',
    ),
    'fields' => 
    array (
      'status' => 'status',
    ),
    'options' => 
    array (
      'status' => 
      array (
      ),
    ),
  ),
  'Ticket' => 
  array (
    'labels' => 
    array (
      'Create Ticket' => '创建 工单',
    ),
    'fields' => 
    array (
      'accounts' => '客户',
    ),
    'links' => 
    array (
      'accounts' => '客户',
    ),
  ),
  'Track' => 
  array (
    'labels' => 
    array (
      'Create Track' => '创建 客户追踪模板',
    ),
    'fields' => 
    array (
      'accounts' => 'Accounts',
      'isTemplate' => '是否模板',
    ),
    'links' => 
    array (
      'accounts' => 'Accounts',
    ),
  ),
);

?>