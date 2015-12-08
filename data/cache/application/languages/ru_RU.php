<?php
return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Включено',
      'Disabled' => 'Отключено',
      'System' => 'System',
      'Users' => 'Пользователи',
      'Email' => 'Email',
      'Data' => 'Data',
      'Customization' => 'Customization',
      'Available Fields' => 'Available Fields',
      'Layout' => 'Макет',
      'Entity Manager' => '实体管理',
      'Add Panel' => 'Добавить панель',
      'Add Field' => 'Добавить поле',
      'Settings' => 'Настройки',
      'Scheduled Jobs' => 'Scheduled Jobs',
      'Upgrade' => 'Upgrade',
      'Clear Cache' => 'Очистить кэш',
      'Rebuild' => 'Rebuild',
      'Teams' => 'Группы',
      'Roles' => 'Роли',
      'Outbound Emails' => 'Outbound Emails',
      'Inbound Emails' => 'Inbound Emails',
      'Email Templates' => 'Email Templates',
      'Import' => 'Импорт',
      'Layout Manager' => 'Менеджер макетов',
      'User Interface' => 'Интерфейс пользователя',
      'Auth Tokens' => 'Auth Tokens',
      'Authentication' => 'Authentication',
      'Currency' => 'Валюта',
      'Integrations' => 'Интеграции',
      'Extensions' => 'Расширения',
      'Upload' => 'Загрузить',
      'Installing...' => 'Установка...',
      'Upgrading...' => 'Обновление...',
      'Upgraded successfully' => 'Обновления успешно установлены',
      'Installed successfully' => 'Успешно установлено',
      'Ready for upgrade' => 'Готов к обновлению',
      'Run Upgrade' => 'Установить обновления',
      'Install' => 'Установить',
      'Ready for installation' => 'Готов к установке',
      'Uninstalling...' => 'Удаление...',
      'Uninstalled' => 'Удалено',
      'Create Entity' => '创建实体',
      'Edit Entity' => '编辑实体',
      'Create Link' => '创建链接',
      'Edit Link' => '编辑链接',
      'Track' => '客户追踪模板',
      'Notifications' => '通知',
      'Field Manager' => 'Менеджер полей',
      'Panel Name' => 'Имя панели',
    ),
    'layouts' => 
    array (
      'list' => 'Список',
      'detail' => 'Detail',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'filters' => 'Search Filters',
      'massUpdate' => 'Mass Update',
      'relationships' => 'Relationships',
      'detailConvert' => 'Преобразовать потенциального клиента',
      'listForAccount' => 'List (for Account)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Address',
      'array' => 'Array',
      'foreign' => 'Foreign',
      'duration' => 'Duration',
      'password' => 'Пароль',
      'parsonName' => 'Person Name',
      'autoincrement' => 'Auto-increment',
      'bool' => 'Bool',
      'currency' => 'Валюта',
      'date' => 'Date',
      'datetime' => 'DateTime',
      'datetimeOptional' => '日期/日期时间',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiple',
      'linkParent' => 'Link Parent',
      'multienim' => 'Multienum',
      'phone' => 'Phone',
      'text' => 'Text',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'File',
      'image' => 'Image',
      'multiEnum' => 'Multi-Enum',
    ),
    'fields' => 
    array (
      'type' => 'Тип',
      'name' => 'Имя',
      'label' => 'Отображаемое имя',
      'required' => 'Обязательное поле',
      'default' => 'По умолчанию',
      'maxLength' => 'Максимальная длина',
      'options' => 'Опции',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Link',
      'field' => 'Поле',
      'min' => 'Минимальное значение',
      'max' => 'Максимальное значение',
      'translation' => 'Перевод',
      'previewSize' => 'Размер просмотра',
      'noEmptyString' => '没有空的字符串',
      'defaultType' => '默认类型',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'FoxCRM будет обновлен до версии <strong>{version}</strong>. Это может занять некоторое время.',
      'upgradeDone' => 'FoxCRM был обновлен до версии <strong>{version}</strong>. Обновите окно браузера.',
      'upgradeBackup' => 'Мы рекомендуем перед обновлением сделать резервную копию ваших FoxCRM файлов и данных.',
      'thousandSeparatorEqualsDecimalMark' => 'Thousand separator can not be same as decimal mark',
      'userHasNoEmailAddress' => 'User has not email address.',
      'selectEntityType' => 'Выберите тип сущности в меню слева.',
      'selectUpgradePackage' => 'Выберите пакет обновления',
      'downloadUpgradePackage' => 'Скачать необходимые обновления <a href="{url}"> </a>.',
      'selectLayout' => 'Select needed layout in the left menu and edit it.',
      'selectExtensionPackage' => 'Выберите пакет расширения',
      'extensionInstalled' => 'Расширение {name} {version} установлено.',
      'installExtension' => 'Расширение {name} {version} готово к установке.',
      'uninstallConfirmation' => 'Вы действительно хотите удалить расширение?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Системные настройки.',
      'scheduledJob' => 'Задачи, которые выполняются с помощью cron.',
      'upgrade' => 'Обновить FoxCRM.',
      'clearCache' => 'Очистить весь кэш сервера.',
      'rebuild' => 'Восстановить сервер, и очистить кэш.',
      'users' => 'Управление пользователями.',
      'teams' => 'Управление группами.',
      'roles' => 'Управление ролями.',
      'outboundEmails' => 'Настройки SMTP для исходящих писем.',
      'inboundEmails' => 'Group IMAP email accouts. Email import and Email-to-Case.',
      'emailTemplates' => 'Шаблоны для исходящих писем.',
      'import' => 'Import data from CSV file.',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'entityManager' => '创建自定义实体, 编辑现有的. 管理字段和关系.',
      'userInterface' => 'Configure UI.',
      'authTokens' => 'Active auth sessions. IP address and last access date.',
      'authentication' => 'Настройки аутентификации.',
      'currency' => 'Currency settings and rates.',
      'extensions' => 'Установить или удалить расширения.',
      'integrations' => '集成与第三方服务.',
      'track' => '客户追踪模板.',
      'notifications' => 'In-app 和电子邮件设置.',
      'fieldManager' => 'Create new fields or customize existing ones.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'X-Small',
        'small' => 'Small',
        'medium' => 'Medium',
        'large' => 'Large',
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
      'user' => 'Пользователь',
      'ipAddress' => 'IP -адрес',
      'lastAccess' => 'Дата последнего подключения',
      'createdAt' => 'Дата входа',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Название',
      'dateFrom' => 'Дата от',
      'dateTo' => 'Дата к',
      'autorefreshInterval' => 'Интервал авто-обновления',
      'displayRecords' => 'Отобразить записи',
      'isDoubleHeight' => 'Высота 2x',
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
      'name' => 'Тема',
      'parent' => 'Источник',
      'status' => 'статус',
      'dateSent' => 'Дата отправки',
      'from' => 'От',
      'to' => 'К',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Html',
      'body' => 'Тело',
      'subject' => 'Тема',
      'attachments' => 'Вложения',
      'selectTemplate' => 'Выбрать шаблон',
      'fromEmailAddress' => 'С адреса',
      'toEmailAddresses' => 'На андрес',
      'emailAddress' => 'E-mail адрес',
      'deliveryDate' => 'Дата доставки',
      'account' => '账户',
      'users' => '用户',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Черновик',
      'Sending' => 'Отправляется',
      'Sent' => 'Отправлено',
      'Archived' => 'В архиве',
      'Received' => '接到',
    ),
    'labels' => 
    array (
      'Create Email' => 'Отправить письмо в архив',
      'Archive Email' => 'Отправить письмо в архив',
      'Compose' => 'Новое сообщение',
      'Reply' => 'Ответить',
      'Reply to All' => 'Ответить всем',
      'Forward' => 'Переслать',
      'Original message' => 'Оригинал сообщение',
      'Forwarded message' => 'Forwarded message',
      'Email Accounts' => 'Email Accounts',
      'Send Test Email' => 'Отправить тестовое сообщение',
      'Send' => 'Отправить',
      'Email Address' => 'E-mail адрес',
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
      'noSmtpSetup' => 'No SMTP setup. {link}.',
      'testEmailSent' => 'Test email has been sent',
      'emailSent' => '电子邮件已发出',
      'savedAsDraft' => '保存为草稿',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Отправлено',
      'archived' => 'В архиве',
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
      'name' => 'Name',
      'status' => 'статус',
      'host' => 'Host',
      'username' => 'Username',
      'password' => 'Пароль',
      'port' => 'Порт',
      'monitoredFolders' => 'Отслеживаемые разделы',
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
        'Active' => 'Активный',
        'Inactive' => 'Неактивный',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Create Email Account',
      'IMAP' => 'IMAP',
      'Main' => 'Main',
      'Test Connection' => '测试连接',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Не получается подключиться к серверу IMAP',
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
      'Primary' => 'Главные',
      'Opted Out' => 'Отписка',
      'Invalid' => 'Неверный адрес',
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
      'name' => 'Name',
      'status' => 'статус',
      'isHtml' => 'Html',
      'body' => 'Тело',
      'subject' => 'Тема',
      'attachments' => 'Вложения',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Создать шаблон письма',
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
      'name' => 'Name',
      'version' => 'Версия',
      'description' => 'Описание',
      'isInstalled' => 'Установлен',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Удалить',
      'Install' => 'Установить',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Расширение {name} удалено',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Connect',
      'Connected' => 'Connected',
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
      'User' => 'Пользователь',
      'Team' => 'Группа',
      'Role' => 'Роль',
      'EmailTemplate' => 'Шаблон письма',
      'EmailAccount' => 'Email Account',
      'EmailAccountScope' => 'Email Account',
      'OutboundEmail' => 'Исходящее письмо',
      'ScheduledJob' => 'Запланированная работа',
      'ExternalAccount' => 'External Account',
      'Extension' => 'Расширение',
      'Dashboard' => '控制面板',
      'InboundEmail' => 'Входящая почта',
      'Stream' => '客户沟通记录',
      'Import' => '导入',
      'Account' => 'Контрагент',
      'Contact' => 'Контакт',
      'Lead' => 'Потенциальный клиент',
      'Target' => 'Цель',
      'Opportunity' => 'Cделка',
      'Meeting' => 'Встреча',
      'Calendar' => 'Календарь',
      'Call' => 'Вызов',
      'Task' => 'Задача',
      'Case' => 'Обращение',
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
      'Email' => 'Письма',
      'User' => 'Пользователи',
      'Team' => 'Группы',
      'Role' => 'Роли',
      'EmailTemplate' => 'Email шаблоны',
      'EmailAccount' => 'Email Accounts',
      'EmailAccountScope' => 'Email Accounts',
      'OutboundEmail' => 'Outbound Emails',
      'ScheduledJob' => 'Scheduled Jobs',
      'ExternalAccount' => 'External Accounts',
      'Extension' => 'Расширения',
      'Dashboard' => '控制面板',
      'InboundEmail' => 'Inbound Emails',
      'Stream' => '客户沟通记录',
      'Import' => '导入结果',
      'Account' => 'Контрагенты',
      'Contact' => 'Контакты',
      'Lead' => 'Потенциальные клиенты',
      'Target' => 'Цели',
      'Opportunity' => 'Сделки',
      'Meeting' => 'Встречи',
      'Calendar' => 'Календарь',
      'Call' => 'Звонки',
      'Task' => 'Задачи',
      'Case' => 'Обращения',
      'Document' => 'Documents',
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
      'Misc' => 'Разное',
      'Total' => '总数',
      'Merge' => 'Объединить',
      'None' => 'Нет',
      'by' => 'по',
      'Saved' => 'Сохранено',
      'Error' => 'Ошибка',
      'Select' => 'Выбрать',
      'Not valid' => 'Некорректные данные',
      'Please wait...' => 'Пожалуйста, подождите...',
      'Please wait' => 'Пожалуйста, подождите',
      'Loading...' => 'Загрузка...',
      'Uploading...' => 'Загружается...',
      'Sending...' => 'Отправляется...',
      'Merging...' => '合并中...',
      'Merged' => '并入',
      'Removed' => 'Удалено',
      'Posted' => 'Добавлено',
      'Linked' => 'Ссылка добавлена',
      'Unlinked' => 'Ссылка удалена',
      'Access denied' => 'В доступе отказано',
      'Access' => 'Доступ',
      'Are you sure?' => 'Вы уверены?',
      'Record has been removed' => 'Запись удалена',
      'Wrong username/password' => 'Неверное имя пользователя/пароль',
      'Post cannot be empty' => 'Сообщение не может быть пустым',
      'Removing...' => 'Удаляется...',
      'Unlinking...' => 'Ссылка удаляется...',
      'Posting...' => 'Размещается...',
      'Username can not be empty!' => 'Имя пользователя не может быть пустым!',
      'Cache is not enabled' => 'Кэш не подключен',
      'Cache has been cleared' => 'Кэш очищен',
      'Rebuild has been done' => 'Восстановление выполнено',
      'Saving...' => 'Сохраняется...',
      'Modified' => 'Изменено',
      'Created' => 'Создано',
      'Create' => 'Создать',
      'create' => 'создать',
      'Overview' => 'Обзор',
      'Details' => 'Описание',
      'Add Field' => '添加字段',
      'Add Dashlet' => 'Добавить панель',
      'Filter' => '过滤器',
      'Edit Dashboard' => '编辑面版',
      'Add' => 'Добавить',
      'Reset' => 'Сбросить',
      'Menu' => 'Меню',
      'More' => 'Больше',
      'Search' => 'Искать',
      'Search Or Call' => '搜索或拨打',
      'Only My' => 'Тлько мои',
      'Open' => 'Открыть',
      'Admin' => 'Администратор',
      'About' => 'О программе',
      'Refresh' => 'Обновить',
      'Remove' => 'Удалить',
      'Options' => 'Options',
      'Username' => 'Имя пользователя',
      'Password' => 'Пароль',
      'Login' => 'Войти',
      'Log Out' => 'Выйти',
      'Preferences' => 'Настройки',
      'State' => 'Регион',
      'Street' => 'Улица',
      'Country' => 'Страна',
      'City' => 'Город',
      'PostalCode' => 'Почтовый индекс',
      'Followed' => 'Отписаться',
      'Follow' => 'Подписаться',
      'ConvertTo' => '领取',
      'Clear Local Cache' => 'Очистить локальный кэш',
      'Actions' => 'Действия',
      'Delete' => 'Удалить',
      'Update' => 'Обновить',
      'Save' => 'Сохранить',
      'Edit' => 'Редактировать',
      'View' => '视图',
      'Cancel' => 'Отменить',
      'Unlink' => 'Убрать ссылку',
      'Mass Update' => 'Mass Update',
      'Mass Assign' => '批量分派',
      'Export' => 'Экспортировать',
      'No Data' => 'Нет данных',
      'No Access' => 'No Access',
      'All' => 'Все',
      'Active' => 'Активный',
      'Inactive' => 'Неактивный',
      'Write your comment here' => 'Оставьте свою заметку здесь',
      'Post' => 'Разместить',
      'Stream' => 'Лента',
      'Show more' => 'Загрузить еще',
      'Dashlet Options' => 'Настройки панели',
      'Full Form' => 'Раширенная форма',
      'Insert' => 'Вставить',
      'Person' => 'Личность',
      'First Name' => 'Имя',
      'Last Name' => 'Фамилия',
      'Original' => 'Оригинальный',
      'You' => 'Вы',
      'you' => 'вы',
      'change' => 'изменить',
      'Change' => 'Change',
      'Primary' => 'Главные',
      'Save Filter' => '保存过滤器',
      'Administration' => 'Администрирование',
      'Run Import' => 'Импортировать',
      'Duplicate' => 'Копия',
      'Notifications' => 'Оповещения',
      'Mark all read' => 'Пометить все как прочитанное',
      'See more' => 'Подробнее',
      'Today' => 'Сегодня',
      'Tomorrow' => 'Завтра',
      'Yesterday' => 'Вчера',
      'Submit' => '提交',
      'Close' => '关闭',
      'Yes' => '是',
      'No' => '否',
      'Select All Result' => '选择所有结果',
      'Value' => '值',
      'Current version' => '当前版本',
      'List View' => '列表视图',
      'Tree View' => '树状图',
      'Create InboundEmail' => 'Создать входящую почту',
      'Activities' => 'Мероприятия',
      'History' => 'История',
      'Attendees' => 'Участники',
      'Schedule Meeting' => 'Запланировать встречу',
      'Schedule Call' => 'Запланировать звонок',
      'Compose Email' => 'Создать e-mail',
      'Log Meeting' => 'Записать встречу',
      'Log Call' => 'Записать звонок',
      'Archive Email' => 'Отправить письмо в архив',
      'Create Task' => 'Создать задачу',
      'Tasks' => 'Задачи',
      'Add Filter' => 'Добавить фильтр',
      'Save Filters' => 'Сохранить фильтры',
      'Type & press enter' => 'Введите и нажмите enter',
    ),
    'messages' => 
    array (
      'pleaseWait' => '请稍等...',
      'convertSelectedRecordsConfirmation' => '你确定要领取/释放这些数据',
      'allowMaxAccountCount' => '你最多可以领取客户记录:',
      'confirmLeaveOutMessage' => '你确定你要离开这个表格?',
      'notModified' => 'Вы не внесли изменения в запись',
      'duplicate' => 'Созданная вами запись дублировалась',
      'fieldIsRequired' => '{field} обязательное',
      'fieldShouldBeEmail' => '{field} должно быть правильным e-mail',
      'fieldShouldBeFloat' => '{field} должно быть верное дробное число',
      'fieldShouldBeInt' => '{field} должно быть верное целое число',
      'fieldShouldBeDate' => '{field} должна быть верная дата',
      'fieldShouldBeDatetime' => '{field} должна быть верная дата/время',
      'fieldShouldAfter' => '{field} должно быть после {otherField}',
      'fieldShouldBefore' => '{field} должно быть до {otherField}',
      'fieldShouldBeBetween' => '{field} должно быть между {min} и {max}',
      'fieldShouldBeLess' => '{field} должно быть меньше чем {value}',
      'fieldShouldBeGreater' => '{field} должно быть больше чем {value}',
      'fieldBadPasswordConfirm' => '{field} подтверждено неверно',
      'resetPreferencesDone' => 'Preferences has been reset to defaults',
      'assignmentEmailNotificationSubject' => 'FoxCRM {entityType}: {Entity.name}',
      'assignmentEmailNotificationBody' => '{assignerUserName} назначил {entityType} \'{Entity.name}\' на вас

{recordUrl}',
      'confirmation' => 'Вы уверены?',
      'resetPreferencesConfirmation' => 'Are you sure you want to reset preferences to defaults?',
      'removeRecordConfirmation' => 'Удалить запись?',
      'unlinkRecordConfirmation' => 'Убрать связь?',
      'removeSelectedRecordsConfirmation' => 'Удалить выбранные записи?',
      'massUpdateResult' => '{count} records have been updated',
      'massUpdateResultSingle' => '{count} record has been updated',
      'noRecordsUpdated' => 'No records were updated',
      'massRemoveResult' => '{count} records have been removed',
      'massRemoveResultSingle' => '{count} record has been removed',
      'noRecordsRemoved' => 'No records were removed',
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
      'onlyMy' => 'Тлько мои',
      'followed' => 'Followed',
      'open' => 'Открыть',
      'active' => 'Активный',
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
      'name' => 'Имя',
      'firstName' => 'Имя',
      'lastName' => 'Фамилия',
      'salutationName' => 'Пол',
      'assignedUser' => 'Ответственный пользователь',
      'emailAddress' => 'Email',
      'assignedUserName' => 'Имя ответственного пользователя',
      'teams' => 'Группы',
      'createdAt' => 'Создан в',
      'modifiedAt' => 'Изменен в',
      'createdBy' => 'Создан (кем)',
      'modifiedBy' => 'Изменен (кем)',
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
      'billingAddressCity' => 'Город',
      'billingAddressCountry' => 'Страна',
      'billingAddressPostalCode' => 'Почтовый индекс',
      'billingAddressState' => 'Регион',
      'billingAddressStreet' => 'Улица',
      'addressCity' => 'Город',
      'addressStreet' => 'Улица',
      'addressCountry' => 'Страна',
      'addressState' => 'Регион',
      'addressPostalCode' => 'Почтовый индекс',
      'shippingAddressCity' => 'Город доставки',
      'shippingAddressStreet' => 'Улица доставки',
      'shippingAddressCountry' => 'Страна доставки',
      'shippingAddressState' => 'Регион доставки',
      'shippingAddressPostalCode' => 'Почтовый код доставки',
    ),
    'links' => 
    array (
      'assignedUser' => 'Ответственный пользователь',
      'createdBy' => 'Создан (кем)',
      'modifiedBy' => 'Изменен (кем)',
      'team' => 'Группа',
      'roles' => 'Роли',
      'teams' => 'Группы',
      'users' => 'Пользователи',
      'parent' => 'Источник',
      'children' => '孩子',
      'contacts' => 'Контакты',
      'opportunities' => 'Сделки',
      'leads' => 'Потенциальные клиенты',
      'meetings' => 'Встречи',
      'calls' => 'Звонки',
      'tasks' => 'Задачи',
      'emails' => 'Письма',
      'accounts' => 'Контрагенты',
      'cases' => 'Обращения',
      'documents' => 'Documents',
      'account' => 'Контрагент',
      'opportunity' => 'Cделка',
      'contact' => 'Контакт',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Лента',
      'Leads' => 'Мои потенциальные клиенты',
      'Opportunities' => 'Мои сделки',
      'Tasks' => 'Мои задачи',
      'Cases' => 'Мои обращения',
      'Calendar' => 'Календарь',
      'Calls' => 'Мои звонки',
      'Meetings' => 'Мои встречи',
      'OpportunitiesByStage' => 'Сделки по стадии',
      'OpportunitiesByLeadSource' => 'Сделки по источнику потенциального клиента',
      'SalesByMonth' => 'Продажи по месяцам',
      'SalesPipeline' => 'Источники продаж',
      'Activities' => 'My Activities',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} 已经分配给你',
      'emailReceived' => '邮件收到 {from}',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} создал {entityType} {entity}',
      'createAssigned' => '{user} создал {entityType} {entity} присвоен {assignee}',
      'assign' => '{user} присвоено {entityType} {entity} к {assignee}',
      'post' => '{user} опубликован на {entityType} {entity}',
      'attach' => '{user} прикреплен {entityType} {entity}',
      'status' => '{user} обновлен {field} на {entityType} {entity}',
      'update' => '{user} обновлен {entityType} {entity}',
      'createRelated' => '{user} создан {relatedEntityType} {relatedEntity} привязан к {entityType} {entity}',
      'mentionInPost' => '{user} mentioned {mentioned} on {entityType} {entity}',
      'createThis' => '{user} создал это {entityType}',
      'createAssignedThis' => '{user} создал это {entityType} присвоен {assignee}',
      'assignThis' => '{user} присвоено это {entityType} к {assignee}',
      'postThis' => '{user} добавил',
      'attachThis' => '{user} attached',
      'statusThis' => '{user} обновил {field}',
      'updateThis' => '{user} обновил это {entityType}',
      'createRelatedThis' => '{user} создал {relatedEntityType} {relatedEntity} привязал к этому {entityType}',
      'emailReceivedFromThis' => '邮件收到 {from}',
      'emailReceivedInitialFromThis' => 'Email received from {from}, this {entityType} created',
      'emailReceivedThis' => '{entity} было получено',
      'emailReceivedInitialThis' => 'Email {email} has been received and created this {entityType}',
      'emailReceivedFrom' => 'Email received from {from}, related to {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email received from {from}, {entityType} {entity} created',
      'emailReceived' => '{entity} было получено для {entityType} {entity}',
      'emailReceivedInitial' => 'Email {email} has been received and created {entityType} {entity}',
      'emailReceivedInitialFrom' => 'Email received from {from}, {entityType} {entity} created',
      'emailSent' => '{by} 发送相关邮件给 {entityType} {entity}',
      'emailSentThis' => '{by} 发送邮件',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Январь',
        1 => 'Февраль',
        2 => 'Март',
        3 => 'Апрель',
        4 => 'Май',
        5 => 'Июнь',
        6 => 'Июль',
        7 => 'Август',
        8 => 'Сентябрь',
        9 => 'Октябрь',
        10 => 'ноябрь',
        11 => 'Декабрь',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Янв',
        1 => 'Февр',
        2 => 'Март',
        3 => 'Апр',
        4 => 'Май',
        5 => 'Июнь',
        6 => 'Июль',
        7 => 'Авг',
        8 => 'Сент',
        9 => 'Окт',
        10 => 'Нояб',
        11 => 'Дек',
      ),
      'dayNames' => 
      array (
        0 => 'Воскресенье',
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Вскр',
        1 => 'Пнд',
        2 => 'Вт',
        3 => 'Ср',
        4 => 'Чтв',
        5 => 'Птн',
        6 => 'Сб',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Вс',
        1 => 'Пн',
        2 => 'Вт',
        3 => 'Ср',
        4 => 'Чт',
        5 => 'Пт',
        6 => 'Сб',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Г-н.',
        'Mrs.' => 'Г-жа.',
        'Ms.' => '小姐',
        'Dr.' => 'Д-р.',
        'Drs.' => 'Drs.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Африкаанс',
        'az_AZ' => 'Азербайджанский',
        'be_BY' => 'Белорусский',
        'bg_BG' => 'Болгарский',
        'bn_IN' => 'Бенгальский',
        'bs_BA' => 'Боснийский',
        'ca_ES' => 'Каталонский',
        'cs_CZ' => 'Чешский',
        'cy_GB' => 'Валлийский',
        'da_DK' => 'Датский',
        'de_DE' => 'Немецкий',
        'el_GR' => 'Греческий',
        'en_GB' => 'Английский (UK)',
        'en_US' => 'Английский (US)',
        'es_ES' => 'Испанский (Испания)',
        'et_EE' => 'Эстонский',
        'eu_ES' => 'Баскский',
        'fa_IR' => 'Персидский',
        'fi_FI' => 'Финский',
        'fo_FO' => 'Фарерский',
        'fr_CA' => 'Французский (Канада)',
        'fr_FR' => 'Французский (Франция)',
        'ga_IE' => 'Ирландский',
        'gl_ES' => 'Галицкий',
        'gn_PY' => 'Гуарани',
        'he_IL' => 'Иврит',
        'hi_IN' => 'Хинди',
        'hr_HR' => 'Хорватский',
        'hu_HU' => 'Венгерский',
        'hy_AM' => 'Армянский',
        'id_ID' => 'Индонезийский',
        'is_IS' => 'Исландский',
        'it_IT' => 'Итальянский',
        'ja_JP' => 'Японский',
        'ka_GE' => 'Грузинский',
        'km_KH' => 'Кхмерийский',
        'ko_KR' => 'Корейский',
        'ku_TR' => 'Курдский',
        'lt_LT' => 'Литовский',
        'lv_LV' => 'Латвийский',
        'mk_MK' => 'Македонский',
        'ml_IN' => 'Малайялам',
        'ms_MY' => 'Малайский',
        'nb_NO' => 'Норвежский букмол',
        'nn_NO' => 'Норвежский нюнорск',
        'ne_NP' => 'Непальский',
        'nl_NL' => 'Нидерландский',
        'pa_IN' => 'Панджабский',
        'pl_PL' => 'Польский',
        'ps_AF' => 'Пушту',
        'pt_BR' => 'Португальский (Бразилия)',
        'pt_PT' => 'Португальский (Португалия)',
        'ro_RO' => 'Румынский',
        'ru_RU' => 'Русский',
        'sk_SK' => 'Словацкий',
        'sl_SI' => 'Словенский',
        'sq_AL' => 'Албанский',
        'sr_RS' => 'Сербский',
        'sv_SE' => 'Шведский',
        'sw_KE' => 'Суахили',
        'ta_IN' => 'Тамильский',
        'te_IN' => 'Телугу',
        'th_TH' => 'Тайский',
        'tl_PH' => 'Тагальский',
        'tr_TR' => 'Турецкий',
        'uk_UA' => 'Украинский',
        'ur_PK' => 'Урду',
        'vi_VN' => 'Вьетнамский',
        'zh_CN' => 'Упрощенный китайский (Китай)',
        'zh_HK' => 'Традиционный китайский (Гонконг)',
        'zh_TW' => 'Традиционный китайский (Тайвань)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'На',
        'notOn' => 'Не на',
        'after' => 'После',
        'before' => 'До',
        'between' => 'Между',
        'today' => 'Сегодня',
        'past' => 'Прошлое',
        'future' => 'Будущее',
        'currentMonth' => 'Current Month',
        'lastMonth' => 'Last Month',
        'currentQuarter' => 'Current Quarter',
        'lastQuarter' => 'Last Quarter',
        'currentYear' => 'Current Year',
        'lastYear' => 'Last Year',
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
        'equals' => 'Равняется',
        'notEquals' => 'Не равняется',
        'greaterThan' => 'Больше чем',
        'lessThan' => 'Меньше чем',
        'greaterThanOrEquals' => 'Больше чем или равняется',
        'lessThanOrEquals' => 'Меньше чем или равняется',
        'between' => 'Между',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Нет',
        '0.5' => '30 секунд',
        1 => '1 минута',
        2 => '2 минуты',
        5 => '5 минут',
        10 => '10 минут',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Мобильный',
        'Office' => 'Офисный',
        'Fax' => 'Факс',
        'Home' => 'Домашний',
        'Other' => 'Дополнительно',
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
          'bold' => 'Полужирный',
          'italic' => 'Курсив',
          'underline' => 'Подчёркнутый',
          'strike' => 'Зачеркнутый',
          'clear' => 'Убрать стили шрифта',
          'height' => 'Высота линии',
          'name' => 'Название шрифта',
          'size' => 'Размер шрифта',
        ),
        'image' => 
        array (
          'image' => 'Изображение',
          'insert' => 'Вставить изображение',
          'resizeFull' => 'Восстановить размер',
          'resizeHalf' => 'Уменьшить до 50%',
          'resizeQuarter' => 'Уменьшить до 25%',
          'floatLeft' => 'Расположить слева',
          'floatRight' => 'Расположить справа',
          'floatNone' => 'Расположение по-умолчанию',
          'dragImageHere' => 'Перетащите изображение сюда',
          'selectFromFiles' => 'Выбрать из файлов',
          'url' => 'URL изображения',
          'remove' => 'Удалить изображение',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Вставить ссылку',
          'unlink' => 'Убрать ссылку',
          'edit' => 'Редактировать',
          'textToDisplay' => 'Отображаемый текст',
          'url' => 'URL для перехода',
          'openInNewWindow' => 'Открывать в новом окне',
        ),
        'video' => 
        array (
          'video' => 'Видео',
          'videoLink' => 'Ссылка на видео',
          'insert' => 'Вставить видео',
          'url' => 'URL видео',
          'providers' => '(YouTube, Vimeo, Vine, Instagram или DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Таблица',
        ),
        'hr' => 
        array (
          'insert' => 'Вставить горизонтальную линию',
        ),
        'style' => 
        array (
          'style' => 'Стиль',
          'normal' => 'Нормальный',
          'blockquote' => 'Цитата',
          'pre' => 'Код',
          'h1' => 'Заголовок 1',
          'h2' => 'Заголовок 2',
          'h3' => 'Заголовок 3',
          'h4' => 'Заголовок 4',
          'h5' => 'Заголовок 5',
          'h6' => 'Заголовок 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Маркированный список',
          'ordered' => 'Нумерованный список',
        ),
        'options' => 
        array (
          'help' => 'Помощь',
          'fullscreen' => 'На весь экран',
          'codeview' => 'Исходный код',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Параграф',
          'outdent' => 'Уменьшить отступ',
          'indent' => 'Увеличить отступ',
          'left' => 'Выровнять по левому краю',
          'center' => 'Выровнять по центру',
          'right' => 'Выровнять по правому краю',
          'justify' => 'Растянуть по ширине',
        ),
        'color' => 
        array (
          'recent' => 'Последний цвет',
          'more' => 'Еще цвета',
          'background' => 'Цвет фона',
          'foreground' => 'Цвет шрифта',
          'transparent' => 'Прозрачный',
          'setTransparent' => 'Сделать прозрачным',
          'reset' => 'Сбросить',
          'resetToDefault' => 'Восстановить умолчания',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Сочетания клавиш',
          'close' => 'Закрыть',
          'textFormatting' => 'Форматирование текста',
          'action' => 'Действие',
          'paragraphFormatting' => 'Форматирование параграфа',
          'documentStyle' => 'Стиль документа',
        ),
        'history' => 
        array (
          'undo' => 'Undo',
          'redo' => 'Повтор',
        ),
      ),
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => '恢复导入',
      'Return to Import' => 'Return to Import',
      'Run Import' => 'Импортировать',
      'Back' => 'Back',
      'Field Mapping' => 'Field Mapping',
      'Default Values' => 'Default Values',
      'Add Field' => 'Add Field',
      'Created' => 'Создано',
      'Updated' => 'Updated',
      'Result' => 'Result',
      'Show records' => 'Show records',
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
      'Revert' => 'Revert',
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
      'name' => 'Name',
      'team' => 'Группа',
      'status' => 'статус',
      'assignToUser' => 'Связаться с пользователем',
      'host' => 'Host',
      'username' => 'Username',
      'password' => 'Пароль',
      'port' => 'Порт',
      'monitoredFolders' => 'Отслеживаемые разделы',
      'trashFolder' => 'Корзина',
      'ssl' => 'SSL',
      'createCase' => 'Создать обращение',
      'reply' => 'Ответить',
      'caseDistribution' => 'Распределение обращений',
      'replyEmailTemplate' => 'Ответить по образцу',
      'replyFromAddress' => 'Ответить с адреса',
      'replyToAddress' => 'Адрес для получения ответа',
      'replyFromName' => 'Ответить от имени',
      'targetUserPosition' => '目标用户地址',
    ),
    'tooltips' => 
    array (
      'reply' => 'Уведомить отправителей, что их письма были получены.',
      'createCase' => 'Автоматически создавать обращение из входящих писем.',
      'replyToAddress' => 'Укажите адрес для этого ящика, чтобы ответы приходили в него.',
      'caseDistribution' => 'Как обращения будут назначаться: на пользователя или среди группы.',
      'assignToUser' => 'Пользователь, на которого письма и обращения будут назначаться.',
      'team' => 'Группа, к которой будут относиться письма и обращения.',
      'targetUserPosition' => 'Define the position of users which will be destributed with cases.',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активный',
        'Inactive' => 'Неактивный',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Прямая задача',
        'Round-Robin' => 'Циклическая',
        'Least-Busy' => 'Наиболее свободный',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Создать входящую почту',
      'IMAP' => 'IMAP',
      'Actions' => 'Действия',
      'Main' => 'Main',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Не получается подключиться к серверу IMAP',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Enabled',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'Redirect URI',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Select an integration in menu.',
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
      'post' => 'Разместить',
      'attachments' => 'Вложения',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Формат даты',
      'timeFormat' => 'Формат времени',
      'timeZone' => 'Часовой пояс',
      'weekStart' => 'Первый день недели',
      'thousandSeparator' => 'Разделитель разрядов(тысячные)',
      'decimalMark' => 'Десятичный знак',
      'defaultCurrency' => 'Валюта по умолчанию',
      'currencyList' => 'Список валют',
      'language' => 'Язык',
      'smtpServer' => 'Сервер',
      'smtpPort' => 'Порт',
      'smtpAuth' => 'Авторизация',
      'smtpSecurity' => 'Безопасность',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Пароль',
      'smtpEmailAddress' => 'E-mail адрес',
      'exportDelimiter' => 'Разделитель (Перемещение)',
      'receiveAssignmentEmailNotifications' => 'Получать уведомления при назначении',
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
        0 => 'Воскресенье',
        1 => 'Понедельник',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Оповещения',
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
      'name' => 'Имя',
      'roles' => 'Роли',
      'assignmentPermission' => '作业许可',
    ),
    'links' => 
    array (
      'users' => 'Пользователи',
      'teams' => 'Группы',
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
      'Access' => 'Доступ',
      'Create Role' => 'Создать роль',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'не установлен',
        'enabled' => 'включен',
        'disabled' => 'отключен',
      ),
      'levelList' => 
      array (
        'all' => 'все',
        'team' => 'группа',
        'own' => 'принадлежит',
        'no' => 'нет',
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
      'read' => 'Чтение',
      'edit' => 'Редактировать',
      'delete' => 'Удалить',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Все изменения применятся только после очистки кэша.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'статус',
      'job' => 'Работа',
      'scheduling' => 'Планирование (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Лог',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Создать периодическую работу',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Очистить',
        'ProcessMassEmail' => 'Send Mass Emails',
        'CheckInboundEmails' => 'Проверить входящую почту',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Заметка: Добавьте эту строку в crontab - файл для запуска Планировщика Работ Fox:',
        'mac' => 'Заметка: Добавьте эту строку в crontab - файл для запуска Планировщика Работ Fox:',
        'windows' => 'Заметка: Создайте пакетный файл со следующими командами для запуска Планировщика Работ Fox, используя Планировщик задач Windows:',
        'default' => 'Заметка: Добавьте эту команду в Cron-Работа (Планировщик задач):',
      ),
      'status' => 
      array (
        'Active' => 'Активный',
        'Inactive' => 'Неактивный',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'статус',
      'executionTime' => 'Время запуска',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Использовать кэш',
      'accountMaxCount' => '坐席最大客户数量',
      'accountMaxDelayTime' => '坐席最大可私有客户时间',
      'accountMaxFollow' => '坐席例外客户最大值',
      'dateFormat' => 'Формат даты',
      'timeFormat' => 'Формат времени',
      'timeZone' => 'Часовой пояс',
      'weekStart' => 'Первый день недели',
      'thousandSeparator' => 'Разделитель разрядов(тысячные)',
      'decimalMark' => 'Десятичный знак',
      'defaultCurrency' => 'Валюта по умолчанию',
      'baseCurrency' => 'Базовая валюта',
      'currencyRates' => 'Курсы обмена',
      'currencyList' => 'Список валют',
      'language' => 'Язык',
      'companyLogo' => 'Логотип компании',
      'smtpServer' => 'Сервер',
      'smtpPort' => 'Порт',
      'smtpAuth' => 'Авторизация',
      'smtpSecurity' => 'Безопасность',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Пароль',
      'outboundEmailFromName' => 'От имени',
      'outboundEmailFromAddress' => 'С адреса',
      'outboundEmailIsShared' => 'Может использоваться всеми пользователями',
      'recordsPerPage' => 'Показывать по страницам',
      'recordsPerPageSmall' => 'Показывать по страницам (Мелкий)',
      'tabList' => 'Вкладки',
      'quickCreateList' => 'Быстрое создание списка',
      'exportDelimiter' => 'Разделитель (Перемещение)',
      'globalSearchEntityList' => '全球搜索实体列表',
      'authenticationMethod' => 'Метод аутентификации',
      'ldapHost' => 'Host',
      'ldapPort' => 'Порт',
      'ldapAuth' => 'Авторизация',
      'ldapUsername' => 'Username',
      'ldapPassword' => 'Пароль',
      'ldapBindRequiresDn' => 'Привязка по домену',
      'ldapBaseDn' => 'Базовый домен',
      'ldapAccountCanonicalForm' => 'Стандартная форма учетной записи',
      'ldapAccountDomainName' => 'Доменное имя учетной записи',
      'ldapTryUsernameSplit' => 'Попробовать имя пользователя Split',
      'ldapCreateFoxUser' => 'Создать пользователя в FoxCRM',
      'ldapSecurity' => 'Безопасность',
      'ldapUserLoginFilter' => 'Фильтер пользовательской авторизации',
      'ldapAccountDomainNameShort' => 'Краткая учетная запись домена',
      'ldapOptReferrals' => 'Opt Referrals',
      'disableExport' => '禁止导出(只允许admin)',
      'assignmentNotificationsEntityList' => 'Entities to Notify about upon Assignment',
      'assignmentEmailNotifications' => 'Оповещать по email при назначении',
      'assignmentEmailNotificationsEntityList' => 'Список вещей для оповещения',
      'b2cMode' => 'B2C Mode',
      'disableAvatars' => 'Disable Avatars',
      'followCreatedEntities' => 'Follow Created Entities',
      'exportDisabled' => 'Отмена экпортирования (доступно только администратору)',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Воскресенье',
        1 => 'Понедельник',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPageSmall' => 'Число записей в панелях связей.',
      'outboundEmailIsShared' => 'Allow users to sent emails via this SMTP.',
      'followCreatedEntities' => 'If user created a record he/she will follow it automatically.',
    ),
    'labels' => 
    array (
      'System' => 'System',
      'Locale' => 'Локальные настройки',
      'SMTP' => 'SMTP',
      'Configuration' => 'Конфигурация',
      'In-app Notifications' => 'In-app Notifications',
      'Email Notifications' => 'Email Notifications',
      'Currency Settings' => 'Настройки валюты',
      'Currency Rtes' => 'Курсы обмена валюты',
      'Notifications' => 'Оповещения',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'roles' => 'Роли',
      'positionList' => 'Список должностей',
    ),
    'links' => 
    array (
      'users' => 'Пользователи',
    ),
    'tooltips' => 
    array (
      'roles' => 'Все пользователи этой команды получат настройки доступа из выбранных ролей.',
      'positionList' => 'Имеющиеся должности в этой группе. Например, продавец, менеджер.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Создать группу',
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
      'name' => 'Имя',
      'userName' => 'Имя пользователя',
      'title' => 'Должность',
      'isAdmin' => 'Права администратора',
      'defaultTeam' => 'Группа по умолчанию',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Номер телефона',
      'roles' => 'Роли',
      'teamRole' => 'Должность',
      'password' => 'Пароль',
      'passwordConfirm' => 'Подтвердите пароль',
      'newPassword' => 'Новый пароль',
      'newPasswordConfirm' => '确认新密码',
      'avatar' => '头像',
      'isActive' => '是否激活',
      'agent' => '分机号',
      'agents' => '分机',
    ),
    'links' => 
    array (
      'teams' => 'Группы',
      'roles' => 'Роли',
      'targetLists' => 'Target Lists',
      'agents' => '分机',
    ),
    'labels' => 
    array (
      'Create User' => 'Создать пользователя',
      'Generate' => 'Сгенерировать',
      'Access' => 'Доступ',
      'Preferences' => 'Настройки',
      'Change Password' => 'Изменить пароль',
      'Teams and Access Control' => '团队和访问控制',
      'Forgot Password?' => '忘记密码?',
      'Password Change Request' => '密码变更请求',
      'Email Address' => '邮箱地址',
      'External Accounts' => '对外账户',
      'Email Accounts' => '邮箱帐号',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Все записи, созданные этим пользователем, по умолчанию будут относиться к этой команде.',
      'userName' => 'Letters a-z, numbers 0-9 and underscores are allowed.',
      'isAdmin' => 'Admin用户拥有所有权限.',
      'isActive' => '未经验证的用户无法登录.',
      'teams' => '用户所属的团队. 访问控制权限是继承自团队中的角色.',
      'roles' => '附加访问规则. 如果用户不属于任何团队或者你需要为这个用户扩展访问控制权限时使用它.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Пароль будет выслан на почтовый адрес пользователя',
      'accountInfoEmailSubject' => 'Информация об учетной записи',
      'accountInfoEmailBody' => 'Информация о Вашей учетной записи:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => '更改密码请求',
      'passwordChangeLinkEmailBody' => '你可以在这个链接更改你的密码 {link}. 这个唯一的 url 将很快失效.',
      'passwordChanged' => 'Пароль изменен',
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
      'name' => 'Name',
      'emailAddress' => 'Email',
      'website' => 'Интернет сайт',
      'phoneNumber' => 'Phone',
      'billingAddress' => 'Платежный адрес',
      'shippingAddress' => 'Почтовый адрес',
      'description' => 'Описание',
      'sicCode' => 'SicCode',
      'industry' => 'Промышленность',
      'type' => 'Type',
      'contactRole' => 'Роль',
      'campaign' => 'Campaign',
      'opportunities' => '客户追踪',
      'cdrs' => 'Cdrs',
      'tickets' => '工单',
      'tracks' => 'Tracks',
    ),
    'links' => 
    array (
      'contacts' => 'Контакты',
      'opportunities' => 'Сделки',
      'cases' => 'Обращения',
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
        'Customer' => 'Заказчик',
        'Investor' => 'Вкладчик',
        'Partner' => 'Партнер',
        'Reseller' => 'Посредник',
      ),
      'industry' => 
      array (
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Advertising',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Automotive' => 'Automotive',
        'Banking' => 'Банковское дело',
        'Biotechnology' => 'Biotechnology',
        'Chemical' => 'Chemical',
        'Computer' => 'Computer',
        'Education' => 'Образование',
        'Electronics' => 'Электроника',
        'Energy' => 'Energy',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Финансы',
        'Food & Beverage' => 'Food & Beverage',
        'Grocery' => 'Grocery',
        'Healthcare' => 'Healthcare',
        'Insurance' => 'Страхование',
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
        'Apparel' => 'Одежда',
        'Computer Software' => 'Программное обеспечение',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Создать контрагента',
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
      'month' => 'месяц',
      'week' => 'неделя',
      'day' => 'день',
      'agendaWeek' => 'неделя',
      'agendaDay' => 'день',
    ),
    'labels' => 
    array (
      'Today' => 'Сегодня',
      'Create' => 'Создать',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Дата окончания',
      'direction' => 'Категория',
      'duration' => 'Длительность',
      'description' => 'Описание',
      'users' => 'Пользователи',
      'contacts' => 'Контакты',
      'leads' => 'Потенциальные клиенты',
      'reminders' => 'Напоминания',
      'account' => 'Account',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Запланированный',
        'Held' => 'Выполнен',
        'Not Held' => 'Не состоялся',
      ),
      'direction' => 
      array (
        'Outbound' => 'Исходящий',
        'Inbound' => 'Входящий',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Нет',
        'Accepted' => 'Принятый',
        'Declined' => 'Отклоненный',
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
      'Create Call' => 'Новый звонок',
      'Set Held' => 'Был выполнен',
      'Set Not Held' => 'Set Not Held',
      'Send Invitations' => 'Отправить приглашения',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Запланированные',
      'held' => 'Завершенные',
      'todays' => 'На сегодня',
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
      'number' => 'Номер',
      'status' => 'статус',
      'account' => 'Контрагент',
      'contact' => 'Контакт',
      'contacts' => 'Contacts',
      'priority' => 'Приоритет',
      'type' => 'Type',
      'description' => 'Описание',
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
        'New' => 'Новый',
        'Assigned' => 'На рассмотрении',
        'Pending' => 'Текущее',
        'Closed' => 'Закрыто',
        'Rejected' => 'Отказано',
        'Duplicate' => 'Копия',
      ),
      'priority' => 
      array (
        'Low' => 'Низкий',
        'Normal' => 'Нормальный',
        'High' => 'Высокий',
        'Urgent' => 'Срочно',
      ),
      'type' => 
      array (
        'Question' => 'Вопрос',
        'Incident' => 'Происшествие',
        'Problem' => 'Проблема',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Создать обращение',
      'Close' => 'Close',
      'Reject' => 'Reject',
      'Closed' => 'Closed',
      'Rejected' => 'Rejected',
    ),
    'presetFilters' => 
    array (
      'open' => 'Открытые',
      'closed' => 'Закрытые',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'title' => 'Название',
      'account' => 'Контрагент',
      'accounts' => 'Контрагенты',
      'phoneNumber' => 'Phone',
      'accountType' => 'Тип контрагента',
      'doNotCall' => 'Не звонить',
      'address' => 'Address',
      'opportunityRole' => 'Роль сделки',
      'accountRole' => 'Роль',
      'description' => 'Описание',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
    ),
    'links' => 
    array (
      'opportunities' => 'Сделки',
      'cases' => 'Обращения',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'account' => 'Account (Primary)',
      'accounts' => 'Accounts',
      'casesPrimary' => 'Cases (Primary)',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Создать контакт',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Нет--',
        'Decision Maker' => 'Принимающий решение',
        'Evaluator' => 'Оценщик',
        'Influencer' => 'Консультант',
      ),
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Create Document',
      'Details' => 'Описание',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'статус',
      'file' => 'File',
      'type' => 'Type',
      'source' => 'Source',
      'publishDate' => 'Publish Date',
      'expirationDate' => 'Expiration Date',
      'description' => 'Описание',
      'accounts' => 'Accounts',
      'folder' => 'Folder',
    ),
    'links' => 
    array (
      'accounts' => 'Контрагенты',
      'opportunities' => 'Сделки',
      'folder' => 'Folder',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активный',
        'Draft' => 'Черновик',
        'Expired' => 'Expired',
        'Canceled' => 'Отменена',
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
      'active' => 'Активный',
      'draft' => 'Черновик',
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
      'Converted To' => 'Преобразован в',
      'Create Lead' => 'Создать потенциального клиента',
      'Convert' => 'Преобразовать',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'title' => 'Название',
      'website' => 'Интернет сайт',
      'phoneNumber' => 'Phone',
      'accountName' => 'Имя контрагента',
      'doNotCall' => 'Не звонить',
      'address' => 'Address',
      'status' => 'статус',
      'source' => 'Source',
      'opportunityAmount' => 'Сумма сделки',
      'opportunityAmountConverted' => 'Сумма сделки (конвертирован)',
      'description' => 'Описание',
      'createdAccount' => 'Контрагент',
      'createdContact' => 'Контакт',
      'createdOpportunity' => 'Cделка',
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
        'New' => 'Новый',
        'Assigned' => 'На рассмотрении',
        'In Process' => 'В процессе',
        'Converted' => 'Преобразовано',
        'Recycled' => 'Восстановленный',
        'Dead' => 'Мертв',
      ),
      'source' => 
      array (
        '' => 'None',
        'Call' => 'Вызов',
        'Email' => 'Email',
        'Existing Customer' => 'Existing Customer',
        'Partner' => 'Партнер',
        'Public Relations' => 'Public Relations',
        'Web Site' => 'Web Site',
        'Campaign' => 'Campaign',
        'Other' => 'Дополнительно',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Активный',
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
      'name' => 'Имя',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Дата окончания',
      'duration' => 'Длительность',
      'description' => 'Описание',
      'users' => 'Пользователи',
      'contacts' => 'Контакты',
      'leads' => 'Потенциальные клиенты',
      'reminders' => 'Напоминания',
      'account' => 'Account',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Запланированный',
        'Held' => 'Выполнен',
        'Not Held' => 'Не состоялся',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Нет',
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
      'Create Meeting' => 'Создать встречу',
      'Set Held' => 'Был выполнен',
      'Set Not Held' => 'Set Not Held',
      'Send Invitations' => 'Отправить приглашения',
      'on time' => 'on time',
      'before' => 'before',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Запланированные',
      'held' => 'Завершенные',
      'todays' => 'На сегодня',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'account' => 'Контрагент',
      'selectTemplate' => '选择模板',
      'stage' => 'Стадия',
      'amount' => 'Сумма',
      'probability' => 'Вероятность успеха, %',
      'leadSource' => 'Источник потенциального клиента',
      'doNotCall' => 'Не звонить',
      'closeDate' => 'Дата закрытия',
      'contacts' => 'Контакты',
      'description' => 'Описание',
      'amountConverted' => 'Сумма (сконвертирована)',
      'amountWeightedConverted' => 'Amount Weighted',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'contacts' => 'Контакты',
      'documents' => 'Documents',
      'campaign' => 'Campaign',
      'account' => '客户',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Привлечение клиента',
        'Qualification' => 'Оценка возможности',
        'Needs Analysis' => 'Требует анализа',
        'Value Proposition' => 'Выбор предложения/оферты',
        'Id. Decision Makers' => 'Определение ответственного лица',
        'Perception Analysis' => 'Проведение анализа',
        'Proposal/Price Quote' => 'Отправлено предложение/оферта',
        'Negotiation/Review' => 'Согласование/рассмотрение',
        'Closed Won' => 'Закрыто - Успех',
        'Closed Lost' => 'Закрыто - Провал',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Создать сделку',
    ),
    'presetFilters' => 
    array (
      'open' => 'Открыть',
      'won' => 'Успешные',
      'lost' => 'Lost',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'title' => 'Название',
      'website' => 'Интернет сайт',
      'accountName' => 'Имя контрагента',
      'phoneNumber' => 'Phone',
      'doNotCall' => 'Не звонить',
      'address' => 'Address',
      'description' => 'Описание',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Создать цель',
      'Convert to Lead' => 'Преобразовать в потенциального клиента',
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
      'name' => 'Имя',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Date Due',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Приоритет',
      'description' => 'Описание',
      'isOverdue' => 'Просрочена',
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
        'Not Started' => 'Не началась',
        'Started' => 'Началась',
        'Completed' => 'Завершена',
        'Canceled' => 'Отменена',
        'Deferred' => 'Deferred',
      ),
      'priority' => 
      array (
        'Low' => 'Низкий',
        'Normal' => 'Нормальный',
        'High' => 'Высокий',
        'Urgent' => 'Срочно',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Создать задачу',
      'Complete' => 'Завершить',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'completed' => 'Завершена',
      'todays' => 'На сегодня',
      'overdue' => 'Просроченные',
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