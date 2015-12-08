<?php
return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Bật',
      'Disabled' => 'Tắt',
      'System' => 'Hệ thống',
      'Users' => 'Người dùng',
      'Email' => 'Email',
      'Data' => 'Dữ liệu',
      'Customization' => 'Tùy chỉnh',
      'Available Fields' => 'Trường hiện có',
      'Layout' => 'Giao diện',
      'Entity Manager' => '实体管理',
      'Add Panel' => 'Thêm bảng điều khiển',
      'Add Field' => 'Thêm trường',
      'Settings' => 'Cái đặt',
      'Scheduled Jobs' => 'Công việc đã lên lịch',
      'Upgrade' => 'Nâng cấp',
      'Clear Cache' => 'Xóa Cache',
      'Rebuild' => 'Dựng lại',
      'Teams' => 'Nhóm',
      'Roles' => 'Vai trò',
      'Outbound Emails' => 'Email đã gửi',
      'Inbound Emails' => 'Email đã nhận',
      'Email Templates' => 'Mẫu email',
      'Import' => 'Nhập',
      'Layout Manager' => 'Quản lý giao diện',
      'User Interface' => 'Giao diện người dùng',
      'Auth Tokens' => 'Auth Tokens',
      'Authentication' => 'Xác thực',
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
      'Field Manager' => 'Quản lý trường',
    ),
    'layouts' => 
    array (
      'list' => 'Đanh sách',
      'detail' => 'Chi tiết',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'filters' => 'Bộ lọc tìm kiếm',
      'massUpdate' => 'Cập nhật',
      'relationships' => 'Quan hệ',
      'detailConvert' => 'Convert Lead',
      'listForAccount' => 'List (for Account)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Địa chỉ',
      'array' => 'Mảng',
      'foreign' => 'Nước ngoài',
      'duration' => 'Thời gian',
      'password' => 'Mật khẩu',
      'parsonName' => 'Tên',
      'autoincrement' => 'Tự động tăng',
      'bool' => 'Bool',
      'currency' => 'Tiền tệ',
      'date' => 'Thời gian',
      'datetime' => 'Thời gian',
      'datetimeOptional' => '日期/日期时间',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Đường dẫn',
      'linkMultiple' => 'Đa đường dẫn',
      'linkParent' => 'Đường dẫn gốc',
      'multienim' => 'Multienum',
      'phone' => 'Điện thoại',
      'text' => 'Text',
      'url' => 'Đường dẫn',
      'varchar' => 'Varchar',
      'file' => 'File',
      'image' => 'Ảnh',
      'multiEnum' => 'Multi-Enum',
    ),
    'fields' => 
    array (
      'type' => 'Loại',
      'name' => 'Tên',
      'label' => 'Thẻ',
      'required' => 'Yêu cầu',
      'default' => 'Mặc định',
      'maxLength' => 'Chiều dài tối đa',
      'options' => 'Options (raw values, not translated)',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Đường dẫn',
      'field' => 'Trường',
      'min' => 'Tối thiểu',
      'max' => 'Tối đa',
      'translation' => 'Dịch',
      'previewSize' => 'Kích thước cũ',
      'noEmptyString' => '没有空的字符串',
      'defaultType' => '默认类型',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Your FoxCRM will be upgraded to version <strong>{version}</strong>. This can take some time.',
      'upgradeDone' => 'Your FoxCRM has been upgraded to version <strong>{version}</strong>. Refresh your browser window.',
      'upgradeBackup' => 'We recommend you to make backup of your FoxCRM files and data before upgrade.',
      'thousandSeparatorEqualsDecimalMark' => 'Dấu phân cách không thể giống nhau',
      'userHasNoEmailAddress' => 'Người dùng chưa có địa chỉ email',
      'selectEntityType' => 'Chọn loại ở menu bên trái',
      'selectUpgradePackage' => 'Chọn gói nâng cấp',
      'downloadUpgradePackage' => '下载需要的升级包',
      'selectLayout' => 'Chọn giao diện cần sửa bên trái',
      'selectExtensionPackage' => '选择扩展包',
      'extensionInstalled' => '扩展包 {name} {version} 已经安装.',
      'installExtension' => '扩展包 {name} {version} 已经准备安装.',
      'uninstallConfirmation' => '你真的想去安装扩展包吗?',
    ),
    'descriptions' => 
    array (
      'settings' => 'System settings of application.',
      'scheduledJob' => 'Công việc tự động tiến hành',
      'upgrade' => 'Nâng cấp hệ thống FoxCRM',
      'clearCache' => 'Xóa dữ liệu cache.',
      'rebuild' => 'Xóa dữ liệu và tải lại hệ thống',
      'users' => 'Quản lý người dùng.',
      'teams' => 'Quản lý nhóm.',
      'roles' => 'Quản lý vai trò.',
      'outboundEmails' => 'Tùy chỉnh SMTP để gửi email.',
      'inboundEmails' => 'Nhóm tài khoản email IMAP. Nhập email và Email-to-Case.',
      'emailTemplates' => 'Mẫu email gửi đi',
      'import' => 'Nhập dữ liệu từ tệp CSV',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'entityManager' => '创建自定义实体, 编辑现有的. 管理字段和关系.',
      'userInterface' => 'Chỉnh sửa giao diện.',
      'authTokens' => 'Kích hoạt quản lý phiên làm việc. Địa chỉ IP và ngày truy cập.',
      'authentication' => 'Cài đặt xác thực truy cập',
      'currency' => '通用设置和比率.',
      'extensions' => '安装或卸载扩展.',
      'integrations' => '集成与第三方服务.',
      'track' => '客户追踪模板.',
      'notifications' => 'In-app 和电子邮件设置.',
      'fieldManager' => 'Tạo trường mới hoặc sửa trường đã tồn tại',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Cực nhỏ',
        'small' => 'Nhỏ',
        'medium' => 'Trung bình',
        'large' => 'Lớn',
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
      'user' => 'Người dùng',
      'ipAddress' => 'Địa chỉ IP',
      'lastAccess' => 'Thời gian truy cập cuối',
      'createdAt' => 'Thời gian đăng nhập',
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
      'name' => 'Chủ đề',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateSent' => 'Ngày gửi',
      'from' => 'Từ',
      'to' => 'Tới',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Chỉ Html',
      'body' => 'Nội dung',
      'subject' => 'Chủ đề',
      'attachments' => 'Đính kèm',
      'selectTemplate' => 'Chọn mẫu',
      'fromEmailAddress' => 'Địa chỉ gửi',
      'toEmailAddresses' => 'Địa chỉ nhận',
      'emailAddress' => 'Địa chỉ email',
      'deliveryDate' => 'Delivery Date',
      'account' => '账户',
      'users' => '用户',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Nháp',
      'Sending' => 'Đang gửi',
      'Sent' => 'Đã gửi',
      'Archived' => 'Lưu trữ',
      'Received' => '接到',
    ),
    'labels' => 
    array (
      'Create Email' => 'Email lưu trữ',
      'Archive Email' => '存档的邮件',
      'Compose' => 'Soạn',
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
      'sent' => 'Đã gửi',
      'archived' => 'Lưu trữ',
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
      'Primary' => 'Chính',
      'Opted Out' => 'Chọn ra',
      'Invalid' => 'Không hợp lệ',
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
      'name' => 'Tên',
      'status' => 'Trạng thái',
      'isHtml' => 'Chỉ Html',
      'body' => 'Nội dung',
      'subject' => 'Chủ đề',
      'attachments' => 'Đính kèm',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Tạo mẫu email',
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
      'Email' => 'Email',
      'User' => 'Người dùng',
      'Team' => 'Nhóm',
      'Role' => 'Vai trò',
      'EmailTemplate' => 'Mẫu email',
      'EmailAccount' => '邮件账户',
      'EmailAccountScope' => '邮件账户',
      'OutboundEmail' => 'Email đã gửi',
      'ScheduledJob' => 'Công việc đã lên lịch',
      'ExternalAccount' => '外部账户',
      'Extension' => '分机',
      'Dashboard' => '控制面板',
      'InboundEmail' => 'Email tới',
      'Stream' => '客户沟通记录',
      'Import' => '导入',
      'Account' => 'Tài khoản',
      'Contact' => 'Liên hệ',
      'Lead' => 'Chỉ dẫn',
      'Target' => 'Mục tiêu',
      'Opportunity' => 'Cơ hội',
      'Meeting' => 'Buổi gặp',
      'Calendar' => 'Lịch',
      'Call' => 'Gọi',
      'Task' => 'Nhiệm vụ',
      'Case' => 'Trường hợp',
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
      'Email' => 'Địa chỉ email',
      'User' => 'Người dùng',
      'Team' => 'Nhóm',
      'Role' => 'Vai trò',
      'EmailTemplate' => 'Mẫu email',
      'EmailAccount' => '邮箱账户',
      'EmailAccountScope' => '邮箱账户',
      'OutboundEmail' => 'Email đã gửi',
      'ScheduledJob' => 'Công việc đã lên lịch',
      'ExternalAccount' => '对外账户',
      'Extension' => '扩展',
      'Dashboard' => '控制面板',
      'InboundEmail' => 'Email đã nhận',
      'Stream' => '客户沟通记录',
      'Import' => '导入结果',
      'Account' => 'Tài khoản',
      'Contact' => 'Sổ liên lạc',
      'Lead' => 'Trưởng nhóm',
      'Target' => 'Mục tiêu',
      'Opportunity' => 'Cơ hội',
      'Meeting' => 'Hẹn gặp',
      'Calendar' => 'Lịch',
      'Call' => 'Cuộc gọi',
      'Task' => 'Nhiệm vụ',
      'Case' => 'Trường hợp',
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
      'Misc' => 'Khác',
      'Total' => '总数',
      'Merge' => 'Gộp',
      'None' => 'Trống',
      'by' => 'bởi',
      'Saved' => 'Đã lưu',
      'Error' => 'Lỗi',
      'Select' => 'Chọn',
      'Not valid' => 'Không phù hợp',
      'Please wait...' => 'Vui lòng đợi...',
      'Please wait' => 'Vui lòng đợi',
      'Loading...' => 'Đang tải...',
      'Uploading...' => 'Đang tải lên...',
      'Sending...' => 'Đang gửi...',
      'Merging...' => '合并中...',
      'Merged' => '并入',
      'Removed' => 'Đã xóa',
      'Posted' => 'Đã đăng',
      'Linked' => 'Đã liên kết',
      'Unlinked' => 'Đã bỏ liên kết',
      'Access denied' => 'Từ chối truy cập',
      'Access' => 'Truy cập',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'bản ghi đã được xóa',
      'Wrong username/password' => 'Sai tên truy cập và mật khẩu',
      'Post cannot be empty' => 'Nội dung không được để trống',
      'Removing...' => 'Đang xóa...',
      'Unlinking...' => 'Đang bỏ liên kết...',
      'Posting...' => 'Đang gửi...',
      'Username can not be empty!' => 'Tên đăng nhập không được để trống!',
      'Cache is not enabled' => 'Cache không được bật',
      'Cache has been cleared' => 'Cache đã được xóa',
      'Rebuild has been done' => 'Tải lại thành công',
      'Saving...' => 'Đang lưu...',
      'Modified' => 'Đã sửa',
      'Created' => 'Đã tạo',
      'Create' => 'Tạo',
      'create' => 'tạo',
      'Overview' => 'Sơ lược',
      'Details' => 'Chi tiết',
      'Add Field' => '添加字段',
      'Add Dashlet' => 'Thêm module',
      'Filter' => '过滤器',
      'Edit Dashboard' => '编辑面版',
      'Add' => 'Thêm',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Thêm nữa',
      'Search' => 'Tìm kiếm',
      'Search Or Call' => '搜索或拨打',
      'Only My' => 'Chỉ',
      'Open' => 'Mở',
      'Admin' => 'Admin',
      'About' => 'Thông tin',
      'Refresh' => 'Tải lại',
      'Remove' => 'Xóa',
      'Options' => 'Tùy chọn',
      'Username' => 'Tên đăng nhập',
      'Password' => 'Mật khẩu',
      'Login' => 'Đăng nhập',
      'Log Out' => 'Đăng xuất',
      'Preferences' => 'Tùy chỉnh',
      'State' => 'Thành phố',
      'Street' => 'Đường',
      'Country' => 'Quốc gia',
      'City' => 'Quận - huyện',
      'PostalCode' => 'Mã bưu điện',
      'Followed' => 'Đã theo dõi',
      'Follow' => 'Theo dõi',
      'ConvertTo' => '领取',
      'Clear Local Cache' => 'Clear Local Cache',
      'Actions' => 'Hoạt động',
      'Delete' => 'Xóa',
      'Update' => 'Cập nhật',
      'Save' => 'Lưu',
      'Edit' => 'Sửa',
      'View' => '视图',
      'Cancel' => 'Bỏ qua',
      'Unlink' => 'Xóa liên kết',
      'Mass Update' => 'Cập nhật',
      'Mass Assign' => '批量分派',
      'Export' => 'Xuất',
      'No Data' => 'Không có dữ liệu',
      'No Access' => '禁止访问',
      'All' => 'Tất cả',
      'Active' => 'Đang hoạt động',
      'Inactive' => 'Chưa hoạt động',
      'Write your comment here' => 'Viết lời nhắn tại đây',
      'Post' => 'Gửi',
      'Stream' => 'Luồng',
      'Show more' => 'Xem thêm',
      'Dashlet Options' => 'Tùy chọn module',
      'Full Form' => 'Đầy đủ',
      'Insert' => 'Chèn',
      'Person' => 'Cá nhân',
      'First Name' => 'Tên',
      'Last Name' => 'Họ',
      'Original' => 'Gốc',
      'You' => 'Bạn',
      'you' => 'bạn',
      'change' => 'thay đổi',
      'Change' => '改变',
      'Primary' => 'Chính',
      'Save Filter' => '保存过滤器',
      'Administration' => 'Administration',
      'Run Import' => 'Bắt đầu nhập',
      'Duplicate' => 'Trùng',
      'Notifications' => 'Thông báo',
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
      'Create InboundEmail' => 'Tạo email đến',
      'Activities' => 'Hành động',
      'History' => 'Lịch sử',
      'Attendees' => 'Người dự',
      'Schedule Meeting' => 'Lên lịch hẹn',
      'Schedule Call' => 'Lên lịch gọi',
      'Compose Email' => 'Tạo email',
      'Log Meeting' => 'Log cuộc hẹn',
      'Log Call' => 'Log cuộc gọi',
      'Archive Email' => 'Email lưu trữ',
      'Create Task' => 'Tạo nhiệm vụ',
      'Tasks' => 'Nhiệm vụ',
      'Add Filter' => 'Thêm bộ lọc',
      'Save Filters' => 'Lưu bộ lọc',
    ),
    'messages' => 
    array (
      'pleaseWait' => '请稍等...',
      'convertSelectedRecordsConfirmation' => '你确定要领取/释放这些数据',
      'allowMaxAccountCount' => '你最多可以领取客户记录:',
      'confirmLeaveOutMessage' => '你确定你要离开这个表格?',
      'notModified' => 'Bạn chưa sửa bản ghi',
      'duplicate' => 'Bản ghi được tạo bị trùng',
      'fieldIsRequired' => '{field} là bắt buộc',
      'fieldShouldBeEmail' => 'Kiểm tra lại {field}',
      'fieldShouldBeFloat' => 'Kiểm tra lại {field}',
      'fieldShouldBeInt' => 'Kiểm tra lại {field}',
      'fieldShouldBeDate' => 'Kiểm tra lại {field}',
      'fieldShouldBeDatetime' => 'Kiểm tra lại {field}',
      'fieldShouldAfter' => '{field} cần đặt sau {otherField}',
      'fieldShouldBefore' => '{field} cần đặt trước {otherField}',
      'fieldShouldBeBetween' => '{field} cần đặt giữa {min} và {max}',
      'fieldShouldBeLess' => '{field} cần nhỏ hơn {value}',
      'fieldShouldBeGreater' => '{field} cần lớn hơn {value}',
      'fieldBadPasswordConfirm' => '{field} không hợp lệ',
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
      'onlyMy' => 'Chỉ',
      'followed' => 'Followed',
      'open' => 'Mở',
      'active' => 'Đang hoạt động',
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
      'name' => 'Tên',
      'firstName' => 'Tên',
      'lastName' => 'Họ',
      'salutationName' => 'Chào đón',
      'assignedUser' => 'Phân công',
      'emailAddress' => 'Email',
      'assignedUserName' => 'Thành viên được phân công',
      'teams' => 'Nhóm',
      'createdAt' => 'Tạo lúc',
      'modifiedAt' => 'Sửa lúc',
      'createdBy' => 'Tạo bởi',
      'modifiedBy' => 'Sửa bởi',
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
      'billingAddressCity' => 'Quận - huyện',
      'billingAddressCountry' => 'Quốc gia',
      'billingAddressPostalCode' => 'Mã bưu điện',
      'billingAddressState' => 'Thành phố',
      'billingAddressStreet' => 'Đường',
      'addressCity' => 'Quận - huyện',
      'addressStreet' => 'Đường',
      'addressCountry' => 'Quốc gia',
      'addressState' => 'Thành phố',
      'addressPostalCode' => 'Mã bưu điện',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
      'title' => 'Tiêu đề',
      'dateFrom' => 'Từ ngày',
      'dateTo' => 'Tới ngày',
      'autorefreshInterval' => 'Tự động tải lại sau',
      'displayRecords' => 'Xem bản ghi',
    ),
    'links' => 
    array (
      'assignedUser' => '负责人',
      'createdBy' => '创建人',
      'modifiedBy' => '修改人',
      'team' => '团队',
      'roles' => '角色',
      'teams' => 'Nhóm',
      'users' => 'Người dùng',
      'parent' => 'Parent',
      'children' => '孩子',
      'contacts' => 'Sổ liên lạc',
      'opportunities' => 'Cơ hội',
      'leads' => 'Trưởng nhóm',
      'meetings' => 'Hẹn gặp',
      'calls' => 'Cuộc gọi',
      'tasks' => 'Nhiệm vụ',
      'emails' => 'Địa chỉ email',
      'accounts' => 'Accounts',
      'cases' => 'Cases',
      'documents' => 'Documents',
      'account' => 'Account',
      'opportunity' => 'Opportunity',
      'contact' => 'Contact',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Luồng',
      'Leads' => 'Chỉ dẫn của tôi',
      'Opportunities' => 'Cơ hội của tôi',
      'Tasks' => 'Nhiệm vụ của tôi',
      'Cases' => 'Công việc của tôi',
      'Calendar' => 'Lịch',
      'Calls' => 'My Calls',
      'Meetings' => 'My Meetings',
      'OpportunitiesByStage' => 'Chia mức cơ hội',
      'OpportunitiesByLeadSource' => 'Phân chia cơ hội theo người chỉ dẫn',
      'SalesByMonth' => 'Doanh thu hàng tháng',
      'SalesPipeline' => 'Doanh thu đường ống',
      'Activities' => 'My Activities',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} 已经分配给你',
      'emailReceived' => '邮件收到 {from}',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} tạo {entityType} {entity}',
      'createAssigned' => '{user} tạo {entityType} {entity} phân công cho {assignee}',
      'assign' => '{user} phân công {entityType} {entity} cho {assignee}',
      'post' => '{user} đăng {entityType} {entity}',
      'attach' => '{user} đính kèm ở {entityType} {entity}',
      'status' => '{user} cập nhật {field} ở {entityType} {entity}',
      'update' => '{user} cập nhật {entityType} {entity}',
      'createRelated' => '{user} created {relatedEntityType} {relatedEntity} linked to {entityType} {entity}',
      'mentionInPost' => '{user} 提及到 {mentioned} 在 {entityType} {entity}',
      'createThis' => '{user} tạo {entityType}',
      'createAssignedThis' => '{user} tạo {entityType} phân công cho {assignee}',
      'assignThis' => '{user} phân công {entityType} cho {assignee}',
      'postThis' => '{user} đã đăng',
      'attachThis' => '{user} đã đính kèm',
      'statusThis' => '{user} đã cập nhật {field}',
      'updateThis' => '{user} cập nhật {entityType}',
      'createRelatedThis' => '{user} created {relatedEntityType} {relatedEntity} linked to this {entityType}',
      'emailReceivedFromThis' => '邮件收到 {from}',
      'emailReceivedInitialFromThis' => 'Email received from {from}, this {entityType} created',
      'emailReceivedThis' => '{entity} đã được nhận',
      'emailReceivedInitialThis' => 'Email received, this {entityType} created',
      'emailReceivedFrom' => 'Email received from {from}, related to {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email received from {from}, {entityType} {entity} created',
      'emailReceived' => '{entity} đã được nhận bởi {entityType} {entity}',
      'emailReceivedInitial' => '收到邮件: {entityType} {entity} created',
      'emailReceivedInitialFrom' => 'Email received from {from}, {entityType} {entity} created',
      'emailSent' => '{by} 发送相关邮件给 {entityType} {entity}',
      'emailSentThis' => '{by} 发送邮件',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'January',
        1 => 'February',
        2 => 'March',
        3 => 'April',
        4 => 'May',
        5 => 'June',
        6 => 'July',
        7 => 'August',
        8 => 'September',
        9 => 'October',
        10 => 'November',
        11 => 'December',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'May',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dec',
      ),
      'dayNames' => 
      array (
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Sun',
        1 => 'Mon',
        2 => 'Tue',
        3 => 'Wed',
        4 => 'Thu',
        5 => 'Fri',
        6 => 'Sat',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Su',
        1 => 'Mo',
        2 => 'Tu',
        3 => 'We',
        4 => 'Th',
        5 => 'Fr',
        6 => 'Sa',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Ông.',
        'Mrs.' => 'Bà.',
        'Ms.' => '小姐',
        'Dr.' => 'Ông.',
        'Drs.' => 'Bà.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'On',
        'notOn' => 'Not On',
        'after' => 'After',
        'before' => 'Before',
        'between' => 'Between',
        'today' => 'Today',
        'past' => 'Past',
        'future' => 'Future',
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
        'equals' => 'Equals',
        'notEquals' => 'Not Equals',
        'greaterThan' => 'Greater Than',
        'lessThan' => 'Less Than',
        'greaterThanOrEquals' => 'Greater Than or Equals',
        'lessThanOrEquals' => 'Less Than or Equals',
        'between' => 'Between',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Trống',
        '0.5' => '30 seconds',
        1 => '1 minute',
        2 => '2 minutes',
        5 => '5 minutes',
        10 => '10 minutes',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobile',
        'Office' => 'Office',
        'Fax' => 'Fax',
        'Home' => 'Home',
        'Other' => 'Khác',
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
        'NOTICE' => 'You can find translation here: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Đậm',
          'italic' => 'Nghiêng',
          'underline' => 'Gạch chân',
          'strike' => 'Gạch giữa',
          'clear' => 'Xóa định dạng',
          'height' => 'Kích thước dòng',
          'name' => 'Font chữ',
          'size' => 'Kích thước',
        ),
        'image' => 
        array (
          'image' => 'Ảnh',
          'insert' => 'Chèn ảnh',
          'resizeFull' => 'Ảnh đầy đủ',
          'resizeHalf' => 'Giảm nửa kích thước',
          'resizeQuarter' => 'Giảm 1/4 kích thước',
          'floatLeft' => 'Căn trái',
          'floatRight' => 'Căn phải',
          'floatNone' => 'Không căn lề',
          'dragImageHere' => 'Thả ảnh vào đây',
          'selectFromFiles' => 'Chọn từ thư mục',
          'url' => 'Đường dẫn ảnh',
          'remove' => 'Xóa ảnh',
        ),
        'link' => 
        array (
          'link' => 'Đường dẫn',
          'insert' => 'Chèn đường dẫn',
          'unlink' => 'Xóa liên kết',
          'edit' => 'Sửa',
          'textToDisplay' => 'Chữ hiển thị',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Mở trong cửa sổ mới',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Đường dẫn video',
          'insert' => 'Chèn Video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Bảng',
        ),
        'hr' => 
        array (
          'insert' => 'Thêm dòng ngang',
        ),
        'style' => 
        array (
          'style' => 'Kiểu',
          'normal' => 'Bình thường',
          'blockquote' => 'Trích dẫn',
          'pre' => 'Code',
          'h1' => 'Tiêu đề 1',
          'h2' => 'Tiêu đề 2',
          'h3' => 'Tiêu đềTiêu đề 3',
          'h4' => 'Tiêu đề 4',
          'h5' => 'Tiêu đề 5',
          'h6' => 'Tiêu đề 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Liệt kê',
          'ordered' => 'Danh sách',
        ),
        'options' => 
        array (
          'help' => 'Trợ giúp',
          'fullscreen' => 'Đầy màn hình',
          'codeview' => 'Hiển thị dạng code',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Đoạn văn bản',
          'outdent' => 'Bỏ lùi đầu dòng',
          'indent' => 'Lùi đầu dòng',
          'left' => 'Căn lề trái',
          'center' => 'Căn lề giữa',
          'right' => 'Căn lề phải',
          'justify' => 'Căn lề 2 bên',
        ),
        'color' => 
        array (
          'recent' => 'Màu đã dùng',
          'more' => 'Thêm màu',
          'background' => 'Màu nền',
          'foreground' => 'Màu chữ',
          'transparent' => 'Trong suốt',
          'setTransparent' => 'Chỉnh độ trong suốt',
          'reset' => 'Reset',
          'resetToDefault' => 'Đặt lại mặc định',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Phím tắt',
          'close' => 'Đóng',
          'textFormatting' => 'Định dạng chữ',
          'action' => 'Hành động',
          'paragraphFormatting' => 'Định dạng đoạn văn bản',
          'documentStyle' => 'Kiểu văn bản',
        ),
        'history' => 
        array (
          'undo' => 'Quay lui',
          'redo' => 'Tiến lên',
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
      'name' => 'Tên',
      'team' => 'Nhóm',
      'status' => 'Trạng thái',
      'assignToUser' => 'Chỉ định',
      'host' => 'Máy chủ',
      'username' => 'Tên đăng nhập',
      'password' => 'Mật khẩu',
      'port' => 'Cổng',
      'monitoredFolders' => 'Thư mục được theo dõi',
      'trashFolder' => 'Thùng rác',
      'ssl' => 'SSL',
      'createCase' => 'Tạo trường hợp',
      'reply' => 'Trả lời',
      'caseDistribution' => 'Trường hợp phân phối',
      'replyEmailTemplate' => 'Mẫu email trả lời',
      'replyFromAddress' => 'Địa chỉ email trả lời',
      'replyToAddress' => '回复地址',
      'replyFromName' => 'Tên người gửi',
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
        'Active' => 'Đang hoạt động',
        'Inactive' => 'Chưa hoạt động',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Direct-Assignment',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Least-Busy',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Tạo email đến',
      'IMAP' => 'IMAP',
      'Actions' => 'Hoạt động',
      'Main' => 'Chính',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Không thể kết nối với máy chủ IMAP',
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
      'post' => 'Gửi',
      'attachments' => 'Đính kèm',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Định dạng ngày',
      'timeFormat' => 'Định dạng thời gian',
      'timeZone' => 'Múi giờ',
      'weekStart' => 'Ngày đầu tiên của tuần',
      'thousandSeparator' => 'Dấu phân cách hàng nghìn',
      'decimalMark' => 'Dấu phân cách thập phân',
      'defaultCurrency' => 'Tiền tệ mặc định',
      'currencyList' => 'Danh sách tiền tệ',
      'language' => 'Ngôn ngữ',
      'smtpServer' => 'Máy chủ',
      'smtpPort' => 'Cổng',
      'smtpAuth' => 'Truy cập',
      'smtpSecurity' => 'Bảo mật',
      'smtpUsername' => 'Tên đăng nhập',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Mật khẩu',
      'smtpEmailAddress' => 'Địa chỉ email',
      'exportDelimiter' => 'Xuất dấu phân cách',
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
        0 => 'Chủ nhật',
        1 => 'Thứ 2',
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
      'name' => 'Tên',
      'roles' => 'Vai trò',
      'assignmentPermission' => '作业许可',
    ),
    'links' => 
    array (
      'users' => 'Người dùng',
      'teams' => 'Nhóm',
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
      'Access' => 'Truy cập',
      'Create Role' => 'Tạo vai trò',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'chưa đặt',
        'enabled' => 'kích hoạt',
        'disabled' => 'tắt',
      ),
      'levelList' => 
      array (
        'all' => 'tất cả',
        'team' => 'nhóm',
        'own' => 'sở hữu',
        'no' => 'không',
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
      'read' => 'Đọc',
      'edit' => 'Sửa',
      'delete' => 'Xóa',
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
      'name' => 'Tên',
      'status' => 'Trạng thái',
      'job' => 'Công việc',
      'scheduling' => 'Scheduling (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Nhật ký',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Lên lịch công việc',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Dọn dẹp',
        'ProcessMassEmail' => 'Send Mass Emails',
        'CheckInboundEmails' => 'Kiểm tra hộp thư đến',
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
        'Active' => 'Đang hoạt động',
        'Inactive' => 'Chưa hoạt động',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Trạng thái',
      'executionTime' => 'Thời gian hoạt động',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Dùng Cache',
      'accountMaxCount' => '坐席最大客户数量',
      'accountMaxDelayTime' => '坐席最大可私有客户时间',
      'accountMaxFollow' => '坐席例外客户最大值',
      'dateFormat' => 'Định dạng ngày',
      'timeFormat' => 'Định dạng thời gian',
      'timeZone' => 'Múi giờ',
      'weekStart' => 'Ngày đầu tiên của tuần',
      'thousandSeparator' => 'Dấu phân cách hàng nghìn',
      'decimalMark' => 'Dấu phân cách thập phân',
      'defaultCurrency' => 'Tiền tệ mặc định',
      'baseCurrency' => 'Base Currency',
      'currencyRates' => '率值',
      'currencyList' => 'Danh sách tiền tệ',
      'language' => 'Ngôn ngữ',
      'companyLogo' => 'Logo công ty',
      'smtpServer' => 'Máy chủ',
      'smtpPort' => 'Cổng',
      'smtpAuth' => 'Truy cập',
      'smtpSecurity' => 'Bảo mật',
      'smtpUsername' => 'Tên đăng nhập',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Mật khẩu',
      'outboundEmailFromName' => 'tên người gửi',
      'outboundEmailFromAddress' => 'Địa chỉ gửi',
      'outboundEmailIsShared' => 'Được chia sẻ',
      'recordsPerPage' => 'Số bản ghi trên mỗi trang',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Danh sách Tab',
      'quickCreateList' => 'Tạo nhanh danh sách',
      'exportDelimiter' => 'Xuất dấu phân cách',
      'globalSearchEntityList' => '全球搜索实体列表',
      'authenticationMethod' => 'Phương thức xác thực',
      'ldapHost' => 'Máy chủ',
      'ldapPort' => 'Cổng',
      'ldapAuth' => 'Truy cập',
      'ldapUsername' => 'Tên đăng nhập',
      'ldapPassword' => 'Mật khẩu',
      'ldapBindRequiresDn' => 'Yêu cầu Dn',
      'ldapBaseDn' => 'Dn gốc',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Tên miền tài khoản',
      'ldapTryUsernameSplit' => 'Thử lại',
      'ldapCreateFoxUser' => 'Tạo người dùng',
      'ldapSecurity' => 'Bảo mật',
      'ldapUserLoginFilter' => 'Bộ lọc đăng nhập',
      'ldapAccountDomainNameShort' => 'Tên miền tài khoản',
      'ldapOptReferrals' => 'Được giới thiệu',
      'disableExport' => '禁止导出(只允许admin)',
      'assignmentNotificationsEntityList' => 'Entities to Notify about upon Assignment',
      'assignmentEmailNotifications' => '根据任务发送邮件通知',
      'assignmentEmailNotificationsEntityList' => 'Entities to Notify about with Email upon Assignment',
      'b2cMode' => 'B2C 模式',
      'disableAvatars' => 'Disable Avatars',
      'followCreatedEntities' => 'Follow Created Entities',
      'exportDisabled' => 'Disable Export (only admin is allowed)',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Chủ nhật',
        1 => 'Thứ 2',
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
      'System' => 'Hệ thống',
      'Locale' => 'Bản địa hóa',
      'SMTP' => 'SMTP',
      'Configuration' => 'Tùy chỉnh',
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
      'name' => 'Tên',
      'roles' => 'Vai trò',
      'positionList' => '职位列表',
    ),
    'links' => 
    array (
      'users' => 'Người dùng',
    ),
    'tooltips' => 
    array (
      'roles' => '访问规则. 这个团队的用户根据选中角色获得访问控制级别.',
      'positionList' => '这个团队可用的职位. 如 销售, 经理.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Tạo nhóm',
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
      'name' => 'Tên',
      'userName' => 'Tên người dùng',
      'title' => 'Tiêu đề',
      'isAdmin' => 'Tài khoản Admin',
      'defaultTeam' => 'Nhóm mặc định',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Điện thoại',
      'roles' => 'Vai trò',
      'teamRole' => '职位',
      'password' => 'Mật khẩu',
      'passwordConfirm' => 'Xác thực mật khẩu',
      'newPassword' => 'Mật khẩu mới',
      'newPasswordConfirm' => '确认新密码',
      'avatar' => '头像',
      'isActive' => '是否激活',
      'agent' => '分机号',
      'agents' => '分机',
    ),
    'links' => 
    array (
      'teams' => 'Nhóm',
      'roles' => 'Vai trò',
      'targetLists' => 'Target Lists',
      'agents' => '分机',
    ),
    'labels' => 
    array (
      'Create User' => 'Tạo người dùng',
      'Generate' => 'Tạo',
      'Access' => 'Truy cập',
      'Preferences' => 'Tùy chỉnh',
      'Change Password' => 'Đổi mật khẩu',
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
      'passwordWillBeSent' => 'Mật khẩu sẽ được gửi tới email tài khoản',
      'accountInfoEmailSubject' => 'Thông tin tài khoản',
      'accountInfoEmailBody' => 'Your account information:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => '更改密码请求',
      'passwordChangeLinkEmailBody' => '你可以在这个链接更改你的密码 {link}. 这个唯一的 url 将很快失效.',
      'passwordChanged' => 'Mật khẩu đã được đổi',
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
      'name' => 'Tên',
      'emailAddress' => 'Email',
      'website' => 'Website',
      'phoneNumber' => 'Điện thoại',
      'billingAddress' => 'Địa chủ thanh toán',
      'shippingAddress' => 'Địa chỉ vận chuyển',
      'description' => 'Mô tả',
      'sicCode' => 'Mã Sic',
      'industry' => 'Industry',
      'type' => 'Loại',
      'contactRole' => 'Vai trò',
      'campaign' => 'Campaign',
      'opportunities' => '客户追踪',
      'cdrs' => 'Cdrs',
      'tickets' => '工单',
      'tracks' => 'Tracks',
    ),
    'links' => 
    array (
      'contacts' => 'Sổ liên lạc',
      'opportunities' => 'Cơ hội',
      'cases' => 'Trường hợp',
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
        'Customer' => 'Khách hàng',
        'Investor' => 'Nhà đầu tư',
        'Partner' => 'Đối tác',
        'Reseller' => 'Đại lý',
      ),
      'industry' => 
      array (
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Advertising',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Automotive' => 'Automotive',
        'Banking' => 'Ngân hàng',
        'Biotechnology' => 'Biotechnology',
        'Chemical' => 'Chemical',
        'Computer' => 'Computer',
        'Education' => 'Giáo dục',
        'Electronics' => 'Điện máy',
        'Energy' => 'Energy',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Tín dụng',
        'Food & Beverage' => 'Food & Beverage',
        'Grocery' => 'Grocery',
        'Healthcare' => 'Healthcare',
        'Insurance' => 'Bảo hiểm',
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
        'Apparel' => 'May mặc',
        'Computer Software' => 'Phần mềm',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Tạo tài khoản',
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
      'month' => 'Tháng',
      'week' => 'Tuần',
      'day' => 'Ngày',
      'agendaWeek' => 'Tuần',
      'agendaDay' => 'Ngày',
    ),
    'labels' => 
    array (
      'Today' => 'Today',
      'Create' => 'Tạo',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateStart' => 'Ngày bắt đầu',
      'dateEnd' => 'Ngày kết thúc',
      'direction' => 'Hướng',
      'duration' => 'Thời gian',
      'description' => 'Mô tả',
      'users' => 'Người dùng',
      'contacts' => 'Sổ liên lạc',
      'leads' => 'Trưởng nhóm',
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
        'Planned' => 'Đã lên kế hoạch',
        'Held' => 'Đã được tổ chức',
        'Not Held' => 'Chưa được tổ chức',
      ),
      'direction' => 
      array (
        'Outbound' => 'Ra ngoài',
        'Inbound' => 'Vào trong',
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
      'Create Call' => 'Tạo cuộc gọi',
      'Set Held' => 'Tổ chức',
      'Set Not Held' => 'Không tổ chức',
      'Send Invitations' => 'Gửi giấy mời',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Đã lên kế hoạch',
      'held' => 'Đã được tổ chức',
      'todays' => 'Hôm nay',
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
      'name' => 'Tên',
      'number' => 'Số',
      'status' => 'Trạng thái',
      'account' => 'Tài khoản',
      'contact' => 'Liên hệ',
      'contacts' => 'Contacts',
      'priority' => 'Ưu tiên',
      'type' => 'Loại',
      'description' => 'Mô tả',
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
        'New' => 'Mới',
        'Assigned' => 'Chỉ định',
        'Pending' => 'Đang chờ',
        'Closed' => 'Đã đóng',
        'Rejected' => 'Đã từ chối',
        'Duplicate' => 'Trùng',
      ),
      'priority' => 
      array (
        'Low' => 'Thấp',
        'Normal' => 'Bình thường',
        'High' => 'Cao',
        'Urgent' => 'Gấp',
      ),
      'type' => 
      array (
        'Question' => 'Câu hỏi',
        'Incident' => 'Sự cố',
        'Problem' => 'Có vấn đề',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Tạo trường hợp',
      'Close' => 'Close',
      'Reject' => 'Reject',
      'Closed' => 'Closed',
      'Rejected' => 'Rejected',
    ),
    'presetFilters' => 
    array (
      'open' => 'Mở',
      'closed' => 'Đã đóng',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'emailAddress' => 'Email',
      'title' => 'Tiêu đề',
      'account' => 'Tài khoản',
      'accounts' => 'Tài khoản',
      'phoneNumber' => 'Điện thoại',
      'accountType' => 'Loại tài khoản',
      'doNotCall' => 'Không gọi',
      'address' => 'Địa chỉ',
      'opportunityRole' => 'Vai trò cơ hội',
      'accountRole' => 'Vai trò',
      'description' => 'Mô tả',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
    ),
    'links' => 
    array (
      'opportunities' => 'Cơ hội',
      'cases' => 'Trường hợp',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'account' => 'Account (Primary)',
      'accounts' => 'Accounts',
      'casesPrimary' => 'Cases (Primary)',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Tạo liên hệ',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Trống--',
        'Decision Maker' => 'Tạo quyết định',
        'Evaluator' => 'Đánh giá',
        'Influencer' => 'Phụ thuộc',
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
      'Converted To' => 'Đã chuyển đổi sang',
      'Create Lead' => 'Tạo chỉ dẫn',
      'Convert' => 'Chuyển đổi',
    ),
    'fields' => 
    array (
      'name' => 'Tên',
      'emailAddress' => 'Email',
      'title' => 'Tiêu đề',
      'website' => 'Website',
      'phoneNumber' => 'Điện thoại',
      'accountName' => 'Tên tài khoản',
      'doNotCall' => 'Không gọi',
      'address' => 'Địa chỉ',
      'status' => 'Trạng thái',
      'source' => 'Nguồn',
      'opportunityAmount' => 'Trị giá',
      'opportunityAmountConverted' => 'Opportunity Amount (converted)',
      'description' => 'Mô tả',
      'createdAccount' => 'Tài khoản',
      'createdContact' => 'Liên hệ',
      'createdOpportunity' => 'Cơ hội',
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
        'New' => 'Mới',
        'Assigned' => 'Chỉ định',
        'In Process' => 'Đang tiến hành',
        'Converted' => 'Đã chuyển đổi',
        'Recycled' => 'Thùng rác',
        'Dead' => 'Chết',
      ),
      'source' => 
      array (
        '' => 'None',
        'Call' => 'Gọi',
        'Email' => 'Email',
        'Existing Customer' => 'Khách hàng hiện có',
        'Partner' => 'Đối tác',
        'Public Relations' => 'Khách hàng công khai',
        'Web Site' => 'Web Site',
        'Campaign' => 'Chiến dịch',
        'Other' => 'Khác',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Đang hoạt động',
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
      'name' => 'Tên',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateStart' => 'Ngày bắt đầu',
      'dateEnd' => 'Ngày kết thúc',
      'duration' => 'Thời gian',
      'description' => 'Mô tả',
      'users' => 'Người dùng',
      'contacts' => 'Sổ liên lạc',
      'leads' => 'Trưởng nhóm',
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
        'Planned' => 'Đã lên kế hoạch',
        'Held' => 'Đã được tổ chức',
        'Not Held' => 'Chưa được tổ chức',
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
      'Create Meeting' => 'Tạo buổi hẹn',
      'Set Held' => 'Tổ chức',
      'Set Not Held' => 'Không tổ chức',
      'Send Invitations' => 'Gửi giấy mời',
      'on time' => 'on time',
      'before' => 'before',
      'Saved as Held' => 'Lưu là đã tổ chức',
      'Saved as Not Held' => 'Lưu là chưa tổ chức',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Đã lên kế hoạch',
      'held' => 'Đã được tổ chức',
      'todays' => 'Hôm nay',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'account' => 'Tài khoản',
      'selectTemplate' => '选择模板',
      'stage' => 'Mức',
      'amount' => 'Tổng',
      'probability' => 'Xác suất, %',
      'leadSource' => 'Nguồn dẫn',
      'doNotCall' => 'Không gọi',
      'closeDate' => 'Ngày kết thúc',
      'contacts' => 'Sổ liên lạc',
      'description' => 'Mô tả',
      'amountConverted' => 'Amount (converted)',
      'amountWeightedConverted' => 'Amount Weighted',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'contacts' => 'Sổ liên lạc',
      'documents' => 'Documents',
      'campaign' => 'Campaign',
      'account' => '客户',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Khảo sát',
        'Qualification' => 'Trình độ chuyên môn',
        'Needs Analysis' => 'Phân tích nhu cầu',
        'Value Proposition' => 'Đề xuất giá trị',
        'Id. Decision Makers' => 'Id. Người tạo quyết định',
        'Perception Analysis' => 'Phân tích khả năng',
        'Proposal/Price Quote' => 'Giá đặt ra',
        'Negotiation/Review' => 'Đàm phán / đánh giá',
        'Closed Won' => 'Thắng thầu',
        'Closed Lost' => 'Thua thầu',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Tạo cơ hội',
    ),
    'presetFilters' => 
    array (
      'open' => 'Mở',
      'won' => 'Thắng',
      'lost' => 'Lost',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'emailAddress' => 'Email',
      'title' => 'Tiêu đề',
      'website' => 'Website',
      'accountName' => 'Tên tài khoản',
      'phoneNumber' => 'Điện thoại',
      'doNotCall' => 'Không gọi',
      'address' => 'Địa chỉ',
      'description' => 'Mô tả',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Tạo mục tiêu',
      'Convert to Lead' => 'Chuyển đổi thành chỉ dẫn',
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
      'name' => 'Tên',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateStart' => 'Ngày bắt đầu',
      'dateEnd' => 'Hạn',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Ưu tiên',
      'description' => 'Mô tả',
      'isOverdue' => 'Đã quá hạn',
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
        'Not Started' => 'Chưa bắt đầu',
        'Started' => 'Đã bắt đầu',
        'Completed' => 'Hoàn thành',
        'Canceled' => 'Hủy',
        'Deferred' => 'Deferred',
      ),
      'priority' => 
      array (
        'Low' => 'Thấp',
        'Normal' => 'Bình thường',
        'High' => 'Cao',
        'Urgent' => 'Gấp',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Tạo nhiệm vụ',
      'Complete' => 'Complete',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'completed' => 'Hoàn thành',
      'todays' => 'Hôm nay',
      'overdue' => 'Quá hạn',
      'active' => 'Đang hoạt động',
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