<?php
return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Habilitado',
      'Disabled' => 'Desabilitado',
      'System' => 'Sistema',
      'Users' => 'Usuários',
      'Email' => 'E-mail',
      'Data' => 'Data',
      'Customization' => 'Customização',
      'Available Fields' => 'Campos Disponíveis',
      'Layout' => 'Layout',
      'Entity Manager' => 'Gerenciar Entidades',
      'Add Panel' => 'Adicionar Painel',
      'Add Field' => 'Adicionar Campo',
      'Settings' => 'Preferências',
      'Scheduled Jobs' => 'Tarefas agendadas',
      'Upgrade' => 'Atualização',
      'Clear Cache' => 'Limpar Cache',
      'Rebuild' => 'Reconstruir',
      'Teams' => 'Times',
      'Roles' => 'Regras',
      'Outbound Emails' => 'E-mails de Saída',
      'Inbound Emails' => 'E-mails de Entrada',
      'Email Templates' => 'Templates dos E-mails',
      'Import' => 'Importar',
      'Layout Manager' => 'Gerenciar Layout',
      'User Interface' => 'Interface do Usuário',
      'Auth Tokens' => 'Tokens de Autenticação',
      'Authentication' => 'Autenticação',
      'Currency' => 'Moeda',
      'Integrations' => 'Integrações',
      'Extensions' => 'Extensões',
      'Upload' => 'Upload',
      'Installing...' => 'Instalando...',
      'Upgrading...' => 'Atualizando...',
      'Upgraded successfully' => 'Atualizado com sucesso',
      'Installed successfully' => 'Instalado com sucesso',
      'Ready for upgrade' => 'Pronto para a atualização',
      'Run Upgrade' => 'Rodar atualização',
      'Install' => 'Instalar',
      'Ready for installation' => 'Pronto para a instalação',
      'Uninstalling...' => 'Desinstalando...',
      'Uninstalled' => 'Desinstalado',
      'Create Entity' => 'Criar Entidade',
      'Edit Entity' => 'Editar Entidade',
      'Create Link' => 'Criar Link',
      'Edit Link' => 'Editar Link',
      'Track' => '客户追踪模板',
      'Notifications' => '通知',
    ),
    'layouts' => 
    array (
      'list' => 'Lista',
      'detail' => 'Detalhe',
      'listSmall' => 'List (Pequeno)',
      'detailSmall' => 'Detalhe (Pequeno)',
      'filters' => 'Filtros de Busca',
      'massUpdate' => 'Atualização em massa',
      'relationships' => 'Relacionamentos',
      'detailConvert' => 'Converter Lead',
      'listForAccount' => 'List (for Account)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Endereço',
      'array' => 'Matriz',
      'foreign' => 'Relacionamento',
      'duration' => 'Duração',
      'password' => 'Senha',
      'parsonName' => 'Nome da Pessoa',
      'autoincrement' => 'Auto-incremento',
      'bool' => 'Booleano',
      'currency' => 'Monetário',
      'date' => 'Data',
      'datetime' => 'Data/Hora',
      'datetimeOptional' => '日期/日期时间',
      'email' => 'E-mail',
      'enum' => 'Lista',
      'enumInt' => 'Lista (Número)',
      'enumFloat' => 'Lista (Float)',
      'float' => 'Float',
      'int' => 'Número',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiplo',
      'linkParent' => 'Link Pai',
      'multienim' => 'Lista Múltipla',
      'phone' => 'Telefone',
      'text' => 'Texto',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Arquivo',
      'image' => 'Imagem',
      'multiEnum' => 'Lista múltipla',
    ),
    'fields' => 
    array (
      'type' => 'Tipe',
      'name' => 'Nome',
      'label' => 'Rótulo',
      'required' => 'Obrigatório',
      'default' => 'Padrão',
      'maxLength' => 'Tamanho máximo',
      'options' => 'Opções (valores raw, não traduzíveis)',
      'after' => 'Antes (field)',
      'before' => 'Após (field)',
      'link' => 'Link',
      'field' => 'Campo',
      'min' => 'Mín',
      'max' => 'Máx',
      'translation' => 'Tradução',
      'previewSize' => 'Tamanho do Preview',
      'noEmptyString' => 'Nenhuma seqüência de caracteres vazia',
      'defaultType' => '默认类型',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Sua instalação do FoxCRM será atualizada para a versão <strong>{version}</strong>. Isto pode levar algum tempo.',
      'upgradeDone' => 'Sua instalação do FoxCRM foi atualizada para a versão <strong>{version}</strong>. Atualize a janela do navegador.',
      'upgradeBackup' => 'Nós recomendamos que você faça um backup dos arquivos e dados do FoxCRM antes de atualizar.',
      'thousandSeparatorEqualsDecimalMark' => 'O separador de milhar não pode ser o mesmo do separador decimal',
      'userHasNoEmailAddress' => 'Usuário não possui endereço de e-mail.',
      'selectEntityType' => 'Escolha o tipo de entidade no menu a esquerda.',
      'selectUpgradePackage' => 'Selecione o pacote de atualização',
      'downloadUpgradePackage' => 'Download do(s) pacote(s) de atualização <a href="{url}">aqui</a>.',
      'selectLayout' => 'Selecione o layout necessário no meu a esquerda e edite ele.',
      'selectExtensionPackage' => 'Selecione o pacote de extensão',
      'extensionInstalled' => 'A extensão {name} {version} foi instalada.',
      'installExtension' => 'A extensão {name} {version} está pronta para instalação.',
      'uninstallConfirmation' => 'Você confirma a desinstalação da extensão?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Configurações gerais do aplicativo.',
      'scheduledJob' => 'Tarefas agendadas que serão executadas pelo cron.',
      'upgrade' => 'Atualizar o FoxCRM.',
      'clearCache' => 'Limpar todo o cache do backend.',
      'rebuild' => 'Reconstruir o backend e limpar o cache.',
      'users' => 'Manutenção de usuários.',
      'teams' => 'Manutenção de Times.',
      'roles' => 'Manutenção de Regras.',
      'outboundEmails' => 'Configuração SMTP para envio de e-mails.',
      'inboundEmails' => 'Grupo de contas de e-mail IMAP. Importação de e-mail Email-to-Case.',
      'emailTemplates' => 'Templates para envio de e-mails.',
      'import' => 'Importar dados de arquivo CSV.',
      'layoutManager' => 'Customizar layouts (listas, detalhes, edição, busca, atualização em massa).',
      'entityManager' => '创建自定义实体, 编辑现有的. 管理字段和关系.',
      'userInterface' => 'Configurar a interface gráfica.',
      'authTokens' => 'Sessões autenticadas ativas. Endereço de IP e última data de acesso.',
      'authentication' => 'Configurações de autenticação.',
      'currency' => 'Configurações de moeda e taxas.',
      'extensions' => 'Instalar ou desinstalar extensoes.',
      'integrations' => 'Integração com serviços de terceiros.',
      'track' => '客户追踪模板.',
      'notifications' => 'In-app 和电子邮件设置.',
      'fieldManager' => 'Criar novos campos ou personalizar os existentes.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Mínimo',
        'small' => 'Pequeno',
        'medium' => 'Médio',
        'large' => 'Grande',
      ),
    ),
    'layoutManagerDataAttributes' => 
    array (
      'width' => 'Largura (%)',
      'link' => 'Link',
      'notSortable' => 'Não ordenável',
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Usuário',
      'ipAddress' => 'Endereço de IP',
      'lastAccess' => 'Último acesso',
      'createdAt' => 'Data do login',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Título',
      'dateFrom' => 'Desde',
      'dateTo' => 'Até a data',
      'autorefreshInterval' => 'Intervalo para auto-atualização',
      'displayRecords' => 'Exibir registros',
      'isDoubleHeight' => 'Altura 2x',
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
      'name' => 'Assunto',
      'parent' => 'Origem',
      'status' => 'Status',
      'dateSent' => 'Data do envio',
      'from' => 'De',
      'to' => 'Para',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Html',
      'body' => 'Corpo',
      'subject' => 'Assunto',
      'attachments' => 'Anexos',
      'selectTemplate' => 'Escolher Template',
      'fromEmailAddress' => 'E-mail do rementente',
      'toEmailAddresses' => 'E-mail do destinatário',
      'emailAddress' => 'Endereço de E-mail',
      'deliveryDate' => 'Data de envio',
      'account' => '账户',
      'users' => '用户',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Rascunho',
      'Sending' => 'Enviando',
      'Sent' => 'Enviado',
      'Archived' => 'Arquivado',
      'Received' => 'Recebido',
    ),
    'labels' => 
    array (
      'Create Email' => 'Criar e-mail',
      'Archive Email' => 'Arquivar e-mail',
      'Compose' => 'Compor',
      'Reply' => 'Responder',
      'Reply to All' => 'Responder a Todos',
      'Forward' => 'Encaminhar',
      'Original message' => 'Mensagem original',
      'Forwarded message' => 'Mensagem encaminhada',
      'Email Accounts' => 'Contas de e-mail',
      'Send Test Email' => 'Enviar e-mail de teste',
      'Send' => 'Enviar',
      'Email Address' => 'Endereço de E-mail',
      'Mark Read' => 'Marcar como lido',
      'Sending...' => 'Enviando...',
      'Save Draft' => 'Salvar rascunho',
      'Mark all as read' => '所有标记为已读',
      'Show Plain Text' => '显示纯文本',
      'Create Lead' => 'Create Lead',
      'Create Contact' => 'Create Contact',
      'Create Task' => 'Create Task',
      'Create Case' => 'Create Case',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Nenhuma configuração SMTP. {link}.',
      'testEmailSent' => 'O e-mail de teste enviado',
      'emailSent' => 'O e-mail foi enviado',
      'savedAsDraft' => '保存为草稿',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Enviado',
      'archived' => 'Arquivado',
      'inbox' => '收件箱',
      'drafts' => '草稿',
      'draft' => 'Rascunho',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Marcar como lido',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Usuário',
      'password' => 'Senha',
      'port' => 'Porta',
      'monitoredFolders' => 'Pastas monitoradas',
      'ssl' => 'SSL',
      'fetchSince' => 'Recuperar desde',
      'emailAddress' => 'Email Address',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Ativa',
        'Inactive' => 'Inativa',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Criar conta de e-mail',
      'IMAP' => 'IMAP',
      'Main' => 'Principal',
      'Test Connection' => '测试连接',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Não foi possível conectar ao servidor IMAP',
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
      'Primary' => 'Primário',
      'Opted Out' => 'Cancelou (opt-out)',
      'Invalid' => 'Inválido',
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
      'name' => 'Nome',
      'status' => 'Status',
      'isHtml' => 'Html',
      'body' => 'Conteúdo',
      'subject' => 'Assunto',
      'attachments' => 'Anexos',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Criar Template de E-mail',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Campos',
      'Relationships' => 'Relacionamentos',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'type' => 'Tipo',
      'labelSingular' => 'Rótulo Singular',
      'labelPlural' => 'Rótulo Plural',
      'stream' => 'Fluxo',
      'label' => 'Rótulo',
      'linkType' => 'Tipo de Link',
      'entityForeign' => 'Entidade Estrangeira',
      'linkForeign' => 'Link Estrangeiro',
      'link' => 'Link',
      'labelForeign' => 'Rótulo Estrangeiro',
      'sortBy' => '默认顺序 (字段)',
      'sortDirection' => '默认顺序 (方向)',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Nenhum',
        'Base' => 'Base',
        'Person' => 'Pessoa',
        'CategoryTree' => '分类树',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Many-to-Many',
        'oneToMany' => 'One-to-Many',
        'manyToOne' => 'Many-to-One',
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
      'entityCreated' => 'A entidade foi criada',
      'linkAlreadyExists' => 'Conflito: o link já existe.',
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'version' => 'Versão',
      'description' => 'Descrição',
      'isInstalled' => 'Instalada',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Desinstalar',
      'Install' => 'Instalar',
    ),
    'messages' => 
    array (
      'uninstalled' => 'A extensão {name} foi desinstalada',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Conectar',
      'Connected' => 'Conectado',
    ),
    'help' => 
    array (
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'E-mail',
      'User' => 'Usuário',
      'Team' => 'Time',
      'Role' => 'Regra',
      'EmailTemplate' => 'Template de E-mail',
      'EmailAccount' => 'Conta de e-mail',
      'EmailAccountScope' => 'Conta de e-mail',
      'OutboundEmail' => 'E-mail de Saída',
      'ScheduledJob' => 'Tarefa Agendada',
      'ExternalAccount' => 'Conta externa',
      'Extension' => 'Extensão',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'E-mail de Entrada',
      'Stream' => 'Fluxo',
      'Import' => '导入',
      'Account' => 'Conta',
      'Contact' => 'Contato',
      'Lead' => 'Lead',
      'Target' => 'Alvo',
      'Opportunity' => 'Oportunidade',
      'Meeting' => 'Reunião',
      'Calendar' => 'Calendário',
      'Call' => 'Ligação',
      'Task' => 'Tarefa',
      'Case' => 'Atendimento',
      'Document' => 'Documento',
      'DocumentFolder' => 'Document Folder',
      'Campaign' => 'Campanha',
      'TargetList' => 'Lista de Alvos',
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
      'Email' => 'E-mails',
      'User' => 'Usuários',
      'Team' => 'Times',
      'Role' => 'Regras',
      'EmailTemplate' => 'Templates de E-mail',
      'EmailAccount' => 'Contas de e-mail',
      'EmailAccountScope' => 'Contas de e-mail',
      'OutboundEmail' => 'E-mails de Saída',
      'ScheduledJob' => 'Tarefas Agendadas',
      'ExternalAccount' => 'Contas externas',
      'Extension' => 'Extensões',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'E-mails de Entrada',
      'Stream' => 'Fluxo',
      'Import' => '导入结果',
      'Account' => 'Contas',
      'Contact' => 'Contatos',
      'Lead' => 'Leads',
      'Target' => 'Alvos',
      'Opportunity' => 'Oportunidades',
      'Meeting' => 'Reuniões',
      'Calendar' => 'Calendário',
      'Call' => 'Ligações',
      'Task' => 'Tarefas',
      'Case' => 'Atendimentos',
      'Document' => 'Documentos',
      'DocumentFolder' => 'Document Folders',
      'Campaign' => 'Campaign',
      'TargetList' => 'Target List',
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
      'Misc' => 'Misc',
      'Total' => '总数',
      'Merge' => 'Mesclar',
      'None' => 'Nenhum',
      'by' => 'por',
      'Saved' => 'Salvo',
      'Error' => 'Erro',
      'Select' => 'Selecionar',
      'Not valid' => 'Inválido',
      'Please wait...' => 'Aguarde...',
      'Please wait' => 'Aguarde',
      'Loading...' => 'Carregando...',
      'Uploading...' => 'Enviando...',
      'Sending...' => 'Enviando...',
      'Merging...' => 'Mesclando...',
      'Merged' => 'Mesclado',
      'Removed' => 'Removido',
      'Posted' => 'Postado',
      'Linked' => 'Relacionado',
      'Unlinked' => 'Relacionamento removido',
      'Access denied' => 'Acesso negado',
      'Access' => 'Acesso',
      'Are you sure?' => 'Você confirma?',
      'Record has been removed' => 'Registro removido',
      'Wrong username/password' => 'Usuário/senha incorretos',
      'Post cannot be empty' => 'A postagem não pode estar vazia',
      'Removing...' => 'Removendo...',
      'Unlinking...' => 'Removendo relacionamento...',
      'Posting...' => 'Postando...',
      'Username can not be empty!' => 'O nome de usuário não pode estar vazio!',
      'Cache is not enabled' => 'O cache não está habilitado',
      'Cache has been cleared' => 'Cache limpo',
      'Rebuild has been done' => 'Reconstrução concluída',
      'Saving...' => 'Salvando...',
      'Modified' => 'Modificado',
      'Created' => 'Criado',
      'Create' => 'Criar',
      'create' => 'criar',
      'Overview' => 'Visão Geral',
      'Details' => 'Detalhes',
      'Add Field' => '添加字段',
      'Add Dashlet' => 'Adicionar Dashlet',
      'Filter' => '过滤器',
      'Edit Dashboard' => 'Editar Dashboard',
      'Add' => 'Adicionar',
      'Reset' => 'Resetar',
      'Menu' => 'Menu',
      'More' => 'Mais',
      'Search' => 'Busca',
      'Search Or Call' => '搜索或拨打',
      'Only My' => 'Apenas meus',
      'Open' => 'Aberto',
      'Admin' => 'Admin',
      'About' => 'Sobre',
      'Refresh' => 'Recarregar',
      'Remove' => 'Remover',
      'Options' => 'Opções',
      'Username' => 'Usuário',
      'Password' => 'Senha',
      'Login' => 'Login',
      'Log Out' => 'Sair',
      'Preferences' => 'Preferências',
      'State' => 'Estado',
      'Street' => 'Logradouro',
      'Country' => 'País',
      'City' => 'Cidade',
      'PostalCode' => 'CEP',
      'Followed' => 'Seguido',
      'Follow' => 'Seguir',
      'ConvertTo' => '领取',
      'Clear Local Cache' => 'Limpar Cache Local',
      'Actions' => 'Ações',
      'Delete' => 'Excluir',
      'Update' => 'Atualizar',
      'Save' => 'Salvar',
      'Edit' => 'Editar',
      'View' => 'Ver',
      'Cancel' => 'Cancelar',
      'Unlink' => 'Remover ligação',
      'Mass Update' => 'Atualização em Massa',
      'Mass Assign' => '批量分派',
      'Export' => 'Exportar',
      'No Data' => 'Sem dados',
      'No Access' => 'Sem acesso',
      'All' => 'Tudo',
      'Active' => 'Ativo',
      'Inactive' => 'Inativo',
      'Write your comment here' => 'Escreva seu comentário aqui',
      'Post' => 'Postar',
      'Stream' => 'Fluxo',
      'Show more' => 'Exibir mais',
      'Dashlet Options' => 'Opções do Dashlet',
      'Full Form' => 'Formulário Completo',
      'Insert' => 'Inserir',
      'Person' => 'Pessoa',
      'First Name' => 'Nome',
      'Last Name' => 'Sobrenome',
      'Original' => 'Original',
      'You' => 'Você',
      'you' => 'você',
      'change' => 'modificar',
      'Change' => 'Modificar',
      'Primary' => 'Primário',
      'Save Filter' => '保存过滤器',
      'Administration' => 'Administração',
      'Run Import' => 'Executar Importação',
      'Duplicate' => 'Duplicar',
      'Notifications' => 'Notificações',
      'Mark all read' => 'Marcar tudo como lido',
      'See more' => 'Ver mais',
      'Today' => 'Hoje',
      'Tomorrow' => 'Amanhã',
      'Yesterday' => 'Ontem',
      'Submit' => 'Enviar',
      'Close' => 'Fechar',
      'Yes' => 'Sim',
      'No' => 'Não',
      'Select All Result' => 'Selecionar todos',
      'Value' => '值',
      'Current version' => '当前版本',
      'List View' => '列表视图',
      'Tree View' => '树状图',
      'Create InboundEmail' => 'Criar E-mail de Entrada',
      'Activities' => 'Atividades',
      'History' => 'Histórico',
      'Attendees' => 'participantes',
      'Schedule Meeting' => 'Agendar Reunião',
      'Schedule Call' => 'Agendar Ligação',
      'Compose Email' => 'Compor E-mail',
      'Log Meeting' => 'Logar Reunião',
      'Log Call' => 'Logar Ligação',
      'Archive Email' => 'Arquivar E-mail',
      'Create Task' => 'Criar Tarefa',
      'Tasks' => 'Tarefas',
      'Add Filter' => 'Adicionar filtro',
      'Save Filters' => 'Salvar Filtros',
    ),
    'messages' => 
    array (
      'pleaseWait' => '请稍等...',
      'convertSelectedRecordsConfirmation' => '你确定要领取/释放这些数据',
      'allowMaxAccountCount' => '你最多可以领取客户记录:',
      'confirmLeaveOutMessage' => '你确定你要离开这个表格?',
      'notModified' => 'Você não modificou o registro',
      'duplicate' => 'O registro que você está criando parece estar duplicado',
      'fieldIsRequired' => '{field} é obrigatório',
      'fieldShouldBeEmail' => '{field} deve ser um e-mail válido',
      'fieldShouldBeFloat' => '{field} deve ser um float válido',
      'fieldShouldBeInt' => '{field} deve ser um valor inteiro',
      'fieldShouldBeDate' => '{field} deve ser uma data válida',
      'fieldShouldBeDatetime' => '{field} deve ser uma data/hora válida',
      'fieldShouldAfter' => '{field} deve ser depois de {otherField}',
      'fieldShouldBefore' => '{field} deve ser antes de {otherField}',
      'fieldShouldBeBetween' => '{field} deve estar entre {min} e {max}',
      'fieldShouldBeLess' => '{field} deve ser menos que {value}',
      'fieldShouldBeGreater' => '{field} deve ser maior que {value}',
      'fieldBadPasswordConfirm' => '{field} confirmado impropriamente',
      'resetPreferencesDone' => 'As preferências foram redefinidas para o padrão',
      'assignmentEmailNotificationSubject' => 'FoxCRM {entityType}: {Entity.name}',
      'assignmentEmailNotificationBody' => '{assignerUserName} designou {entityType} \'{Entity.name}\' para você

{recordUrl}',
      'confirmation' => 'Você tem certeza?',
      'resetPreferencesConfirmation' => 'Você gostaria mesmo de redefenir as preferências para o padrão?',
      'removeRecordConfirmation' => 'Você gostaria mesmo de remover este registro?',
      'unlinkRecordConfirmation' => 'Você gostaria mesmo de desfazer este relacionamento?',
      'removeSelectedRecordsConfirmation' => 'Você gostaria mesmo de remover os registros selecionados?',
      'massUpdateResult' => '{count} registros foram atualizados',
      'massUpdateResultSingle' => '{count} registro foi atualizado',
      'noRecordsUpdated' => 'Nenhum registro foi atualizado',
      'massRemoveResult' => '{count} registros foram removidos',
      'massRemoveResultSingle' => '{count} registro foi removido',
      'noRecordsRemoved' => 'Nenhum registro foi removido',
      'clickToRefresh' => 'Clique para atualizar',
      'streamPostInfo' => 'Digite <strong>@usuario</strong> para mencionar usuários na postagem.

Sintaxe markdown disponível::
`<code>code</code>`
**<strong>strong text</strong>**
*<em>emphasized text</em>*
~<del>deleted text</del>~
> blockquote
(url)[link]',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Meus',
      'followed' => 'Followed',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Followed',
    ),
    'massActions' => 
    array (
      'remove' => 'Remover',
      'merge' => 'Mesclar',
      'massUpdate' => 'Atualização em Massa',
      'export' => 'Exportar',
      'assgin' => '分派',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'firstName' => 'Primeiro Nome',
      'lastName' => 'Sobrenome',
      'salutationName' => 'Saudação',
      'assignedUser' => 'Atribuido ao usuário',
      'emailAddress' => 'E-mail',
      'assignedUserName' => 'Nome de Usuário Designado',
      'teams' => 'Times',
      'createdAt' => 'Criado em',
      'modifiedAt' => 'Modificado em',
      'createdBy' => 'Criado por',
      'modifiedBy' => 'Modificado por',
      'description' => 'Descrção',
      'address' => 'Endereço',
      'phoneNumber' => 'Telefone',
      'phoneNumberMobile' => '电话 (手机)',
      'phoneNumberHome' => '电话 (住宅)',
      'phoneNumberFax' => '电话 (传真)',
      'phoneNumberOffice' => '电话 (工作)',
      'phoneNumberOther' => '电话 (其他)',
      'order' => '命令',
      'parent' => '父母',
      'children' => '孩子',
      'billingAddressCity' => 'Cidade',
      'billingAddressCountry' => 'País',
      'billingAddressPostalCode' => 'CEP',
      'billingAddressState' => 'Estado',
      'billingAddressStreet' => 'Endereço',
      'addressCity' => 'Cidade',
      'addressStreet' => 'Logradouro',
      'addressCountry' => 'País',
      'addressState' => 'Estado',
      'addressPostalCode' => 'CEP',
      'shippingAddressCity' => 'Cidade (Envio)',
      'shippingAddressStreet' => 'Logradouro (Envio)',
      'shippingAddressCountry' => 'País (Envio)',
      'shippingAddressState' => 'Estado (Envio)',
      'shippingAddressPostalCode' => 'CEP (Envio)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Usuário designado',
      'createdBy' => 'Criado por',
      'modifiedBy' => 'Modificado por',
      'team' => 'Time',
      'roles' => 'Regras',
      'teams' => 'Times',
      'users' => 'Usuários',
      'parent' => 'Pai',
      'children' => '孩子',
      'contacts' => 'Contatos',
      'opportunities' => 'Oportunidades',
      'leads' => 'Leads',
      'meetings' => 'Reuniões',
      'calls' => 'Ligações',
      'tasks' => 'Tarefas',
      'emails' => 'E-mails',
      'accounts' => 'Contas',
      'cases' => 'Atendimentos',
      'documents' => 'Documentos',
      'account' => 'Conta',
      'opportunity' => 'Oportunidade',
      'contact' => 'Contato',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Fluxo',
      'Leads' => 'Meus Leads',
      'Opportunities' => 'Minhas Oportunidades',
      'Tasks' => 'Minhas Tarefas',
      'Cases' => 'Meus Atendimentos',
      'Calendar' => 'Calendário',
      'Calls' => 'Minhas Ligações',
      'Meetings' => 'Minhas Reuniões',
      'OpportunitiesByStage' => 'Oportunidades por Estágio',
      'OpportunitiesByLeadSource' => 'Oportunities por Origem do Lead',
      'SalesByMonth' => 'Vendas Por Mês',
      'SalesPipeline' => 'Funil de Vendas',
      'Activities' => 'My Activities',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} 已经分配给你',
      'emailReceived' => '邮件收到 {from}',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} criou {entityType} {entity}',
      'createAssigned' => '{user} criou {entityType} {entity} atribuído a {assignee}',
      'assign' => '{user} atribuiu {entityType} {entity} a {assignee}',
      'post' => '{user} postou em {entityType} {entity}',
      'attach' => '{user} anexou em {entityType} {entity}',
      'status' => '{user} atualizou {field} em {entityType} {entity}',
      'update' => '{user} atualizou {entityType} {entity}',
      'createRelated' => '{user} criou {relatedEntityType} {relatedEntity} atribuido a {entityType} {entity}',
      'mentionInPost' => '{user} mencionado {mentioned} em {entityType} {entity}',
      'createThis' => '{user} criou {entityType}',
      'createAssignedThis' => '{user} criou {entityType} atribuído a {assignee}',
      'assignThis' => '{user} atribuiu {entityType} a {assignee}',
      'postThis' => '{user} postou',
      'attachThis' => '{user} anexou',
      'statusThis' => '{user} atualizou {field}',
      'updateThis' => '{user} atualizou {entityType}',
      'createRelatedThis' => '{user} criou {relatedEntityType} {relatedEntity} relacionado a {entityType}',
      'emailReceivedFromThis' => 'O e-mail {email} foi recebido de {from}',
      'emailReceivedInitialFromThis' => 'O e-mail {email} foi recebido de e {from} e criou um(a) {entityType}',
      'emailReceivedThis' => 'O e-mail {email} foi recebido',
      'emailReceivedInitialThis' => 'O e-mail {email} foi recebido e criou um(a) {entityType}',
      'emailReceivedFrom' => 'O e-mail {email} relacionado a {entityType} {entity} foi recebido por {from}',
      'emailReceivedFromInitial' => 'O e-mail {email} foi recebido de {from} e criou {entityType} {entity}',
      'emailReceived' => 'O e-mail {email} relacionado a {entityType} {entity} foi recebido',
      'emailReceivedInitial' => 'O e-mail {email} foi recebido e criou {entityType} {entity}',
      'emailReceivedInitialFrom' => 'O e-mail {email} foi recebido de {from} e criou {entityType} {entity}',
      'emailSent' => '{by} enviou o e-mail {email} relacionado a {entityType} {entity}',
      'emailSentThis' => '{by} enviou o e-mail {email}',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Janeiro',
        1 => 'Fevereiro',
        2 => 'Março',
        3 => 'Abril',
        4 => 'Maio',
        5 => 'Junho',
        6 => 'Julho',
        7 => 'Agosto',
        8 => 'Setembro',
        9 => 'Outubro',
        10 => 'Novembro',
        11 => 'Dezembro',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Fev',
        2 => 'Mar',
        3 => 'Abr',
        4 => 'Mai',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Ago',
        8 => 'Set',
        9 => 'Out',
        10 => 'Nov',
        11 => 'Dez',
      ),
      'dayNames' => 
      array (
        0 => 'Domingo',
        1 => 'Segunda',
        2 => 'Terça',
        3 => 'Quarta',
        4 => 'Quinta',
        5 => 'Sexta',
        6 => 'Sábado',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Dom',
        1 => 'Seg',
        2 => 'Ter',
        3 => 'Qua',
        4 => 'Qui',
        5 => 'Sex',
        6 => 'Sáb',
      ),
      'dayNamesMin' => 
      array (
        0 => 'D',
        1 => 'S',
        2 => 'T',
        3 => 'Q',
        4 => 'Q',
        5 => 'S',
        6 => 'S',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Sr.',
        'Mrs.' => 'Sra.',
        'Ms.' => 'Srta.',
        'Dr.' => 'Dr.',
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
        'on' => 'Em',
        'notOn' => 'Menos em',
        'after' => 'Anterior',
        'before' => 'Posterior',
        'between' => 'Entre',
        'today' => 'Hoje',
        'past' => 'Passado',
        'future' => 'Futuro',
        'currentMonth' => 'Mês corrente',
        'lastMonth' => 'Último mês',
        'currentQuarter' => 'Trimestre corrente',
        'lastQuarter' => 'Último trimestre',
        'currentYear' => 'Ano corrente',
        'lastYear' => 'Último ano',
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
        'equals' => 'Igual',
        'notEquals' => 'Diferente',
        'greaterThan' => 'Maior que',
        'lessThan' => 'Menor que',
        'greaterThanOrEquals' => 'Maior ou igual',
        'lessThanOrEquals' => 'Menor ou igual',
        'between' => 'Entre',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Nenhum',
        '0.5' => '30 segundos',
        1 => '1 minuto',
        2 => '2 minutos',
        5 => '5 minutos',
        10 => '10 minutos',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Celular',
        'Office' => 'Comercial',
        'Fax' => 'Fax',
        'Home' => 'Residencial',
        'Other' => 'Outro',
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
          'bold' => 'Negrito',
          'italic' => 'Itálico',
          'underline' => 'Sublinhado',
          'strike' => '中划线',
          'clear' => 'Remover estilo da fonte',
          'height' => 'Altura da linha',
          'name' => '系统字体',
          'size' => 'Tamanho da fonte',
          'strikethrough' => 'Riscado',
        ),
        'image' => 
        array (
          'image' => 'Imagem',
          'insert' => 'Inserir imagem',
          'resizeFull' => 'Resize Full',
          'resizeHalf' => 'Resize Half',
          'resizeQuarter' => 'Resize Quarter',
          'floatLeft' => 'Float Left',
          'floatRight' => 'Float Right',
          'floatNone' => 'Float None',
          'dragImageHere' => 'Arraste uma imagem para cá',
          'selectFromFiles' => 'Selecione a partir dos arquivos',
          'url' => 'URL da image',
          'remove' => '清除图片',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Inserir link',
          'unlink' => 'Remover link',
          'edit' => 'Editar',
          'textToDisplay' => 'Texto para exibir',
          'url' => 'Para qual URL esse link leva?',
          'openInNewWindow' => 'Abrir em uma nova janela',
        ),
        'video' => 
        array (
          'video' => 'Vídeo',
          'videoLink' => 'Link para vídeo',
          'insert' => 'Inserir vídeo',
          'url' => 'URL do vídeo?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, DailyMotion, ou Youku)',
        ),
        'table' => 
        array (
          'table' => 'Tabela',
        ),
        'hr' => 
        array (
          'insert' => 'Inserir linha horizontal',
        ),
        'style' => 
        array (
          'style' => 'Estilo',
          'normal' => 'Normal',
          'blockquote' => 'Citação',
          'pre' => 'Código',
          'h1' => 'Título 1',
          'h2' => 'Título 2',
          'h3' => 'Título 3',
          'h4' => 'Título 4',
          'h5' => 'Título 5',
          'h6' => 'Título 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Lista com marcadores',
          'ordered' => 'Lista numerada',
        ),
        'options' => 
        array (
          'help' => 'Ajuda',
          'fullscreen' => 'Tela cheia',
          'codeview' => 'Ver código-fonte',
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
          'recent' => 'Cor recente',
          'more' => 'Mais cores',
          'background' => 'Fundo',
          'foreground' => 'Fonte',
          'transparent' => 'Transparente',
          'setTransparent' => 'Fundo transparente',
          'reset' => 'Restaurar',
          'resetToDefault' => 'Restaurar padrão',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Atalhos do teclado',
          'close' => 'Fechar',
          'textFormatting' => 'Formatação de texto',
          'action' => 'Ação',
          'paragraphFormatting' => 'Formatação de parágrafo',
          'documentStyle' => 'Estilo de documento',
        ),
        'history' => 
        array (
          'undo' => 'Desfazer',
          'redo' => 'Refazer',
        ),
        ' paragraph' => 
        array (
          'paragraph' => 'Parágrafo',
          'outdent' => 'Menor tabulação',
          'indent' => 'Maior tabulação',
          'left' => 'Alinhar à esquerda',
          'center' => 'Alinhar ao centro',
          'right' => 'Alinha à direita',
          'justify' => 'Justificado',
        ),
      ),
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => '恢复导入',
      'Return to Import' => 'Retornar a Importação',
      'Run Import' => 'Executar importação',
      'Back' => 'Voltar',
      'Field Mapping' => 'Mapeamento de Campos',
      'Default Values' => 'Valores Padrão',
      'Add Field' => 'Adicionar Campo',
      'Created' => 'Criado',
      'Updated' => 'Atualizado',
      'Result' => 'Resultado',
      'Show records' => 'Exibir Registros',
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
      'Revert' => 'Reverter',
    ),
    'messages' => 
    array (
      'utf8' => 'Deve estar codificado com UTF-8',
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
      'name' => 'Nome',
      'team' => 'Time',
      'status' => 'Status',
      'assignToUser' => 'Atribuído a',
      'host' => 'Host',
      'username' => 'Usuário',
      'password' => 'Senha',
      'port' => 'Porta',
      'monitoredFolders' => 'Pastas Monitoradas',
      'trashFolder' => 'Pasta da Lixeira',
      'ssl' => 'SSL',
      'createCase' => 'Criar Atendimento',
      'reply' => 'Responder',
      'caseDistribution' => 'Distribuição do Atendimento',
      'replyEmailTemplate' => 'Template do E-mail de Resposta',
      'replyFromAddress' => 'E-mail de Resposta (From)',
      'replyToAddress' => 'Responder para o Endereço',
      'replyFromName' => 'Nome de Resposta (FromName)',
      'targetUserPosition' => 'Posição do usuário alvo',
    ),
    'tooltips' => 
    array (
      'reply' => 'Notificar rementente que seus e-mails foram recebidos.',
      'createCase' => 'Criar automaticamente um atendimento para os e-mais recebidos.',
      'replyToAddress' => 'Especifique o endereço de e-mail desta caixa postal para que as respostas cheguem aqui.',
      'caseDistribution' => 'Como os atendimentos serão distribuídos. Assinados diretamente ao usuário ou entregues ao time.',
      'assignToUser' => 'Usuário responsável pelos e-mails/atendimentos.',
      'team' => 'Time que será relacionado aos e-mails/atendimentos.',
      'targetUserPosition' => 'Define a posição dos usuários para quem serão distribuídos os atendimentos.',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Ativo',
        'Inactive' => 'Inativo',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Atribuição Direta',
        'Round-Robin' => 'Rodízio',
        'Least-Busy' => 'Menos Ocupado',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Criar E-mail de Entrada',
      'IMAP' => 'IMAP',
      'Actions' => 'Ações',
      'Main' => 'Principal',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Não foi possível conectar ao servidor IMAP',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Habilitado',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'URL de Redirecionamento',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Selecione uma integração no menu.',
      'noIntegrations' => 'Nenhuma integração disponível.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Obtenha as credenciais OAuth 2.0 do Google Developers Console.</b></p><p>Visite o <a href="https://console.developers.google.com/project">Google Developers Console</a> para obter as credenciais OAuth 2.0 como Client ID e Client Secret comuns ao Google e ao FoxCRM.</p>',
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
      'post' => 'Postagem',
      'attachments' => 'Anexos',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Formato da Data',
      'timeFormat' => 'Formato da Hora',
      'timeZone' => 'Time Zone',
      'weekStart' => 'Primeiro dia da Semana',
      'thousandSeparator' => 'Separador de milhar',
      'decimalMark' => 'Separador decimal',
      'defaultCurrency' => 'Moeda Padrão',
      'currencyList' => 'Moedas Disponíveis',
      'language' => 'Idioma',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Porta',
      'smtpAuth' => 'Autenticação',
      'smtpSecurity' => 'Segurança',
      'smtpUsername' => 'Usuário',
      'emailAddress' => 'E-mail',
      'smtpPassword' => 'Senha',
      'smtpEmailAddress' => 'Endereço de E-mail',
      'exportDelimiter' => 'Delimitador de Exportação',
      'receiveAssignmentEmailNotifications' => 'Receber e-mail de notificação quando designado',
      'autoFollowEntityTypeList' => 'Auto-Seguir',
      'signature' => 'Assinatura do E-mail',
      'dashboardTabList' => 'Lista em abas',
      'defaultReminders' => '默认提示',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Domingo',
        1 => 'Segunda',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Notificações',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'O usuário seguirá automaticamente todos os novos registros das entidades selecionadas, verá informações no fluxo e receberá notificações.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'roles' => 'Regras',
      'assignmentPermission' => 'Atribuição de Permissões',
    ),
    'links' => 
    array (
      'users' => 'Usuários',
      'teams' => 'Times',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Premite restringir a habilidade para usuários atribuírem registros para outros usuários.

tudo - nenhuma restrição

time - pode atribuir para usuários do seu time

enhum - pode atribuir apenas para si mesmo',
    ),
    'labels' => 
    array (
      'Access' => 'Acesso',
      'Create Role' => 'Criar Regra',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'indefinido',
        'enabled' => 'habilitado',
        'disabled' => 'desabilitado',
      ),
      'levelList' => 
      array (
        'all' => 'tudo',
        'team' => 'time',
        'own' => 'próprio',
        'no' => 'nenhum',
      ),
      'assignmentPermission' => 
      array (
        'all' => 'tudo',
        'team' => 'time',
        'not-set' => 'não definido',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Ler',
      'edit' => 'Editar',
      'delete' => 'Excluir',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Todas as modificações no controle de acesso serão aplicadas após a limpeza do cache.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Status',
      'job' => 'Tarefa',
      'scheduling' => 'Agendando (notação do crontab)',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Agendar Tarefa',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Limpar',
        'ProcessMassEmail' => 'Send Mass Emails',
        'CheckInboundEmails' => 'Verificar e-mails recebidos',
        'CheckEmailAccounts' => 'Verificar contas de e-mail pessoais',
        'SendEmailReminders' => 'Enviar lembretes por e-mail',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Nota: Adicione esta linha ao arquivo de crontab para executar as tarefas agendadas do FoxCRM:',
        'mac' => 'Nota: Adicione esta linha ao arquivo de crontab para executar as tarefas agendadas do FoxCRM:',
        'windows' => 'Nota: Crie um arquivo em lote com os seguintes comandos para executar as tarefas agendadas do FoxCRM no agendador de tarefas do Windows:',
        'default' => 'Nota: Adicione este comando Cron Job (Tarefa agendada):',
      ),
      'status' => 
      array (
        'Active' => 'Ativo',
        'Inactive' => 'Inativo',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Tempo de execução',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Usar Cache',
      'accountMaxCount' => '坐席最大客户数量',
      'accountMaxDelayTime' => '坐席最大可私有客户时间',
      'accountMaxFollow' => '坐席例外客户最大值',
      'dateFormat' => 'Formato da Data',
      'timeFormat' => 'Formato da Hora',
      'timeZone' => 'Time Zone',
      'weekStart' => 'Primeiro dia da Semana',
      'thousandSeparator' => 'Separador de Milhar',
      'decimalMark' => 'Deparador Decimal',
      'defaultCurrency' => 'Moeda Padrão',
      'baseCurrency' => 'Moeda Base',
      'currencyRates' => 'Conversão de Moedas',
      'currencyList' => 'Moedas Disponíveis',
      'language' => 'Idioma',
      'companyLogo' => 'Logo da Empresa',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Porta',
      'smtpAuth' => 'Autenticação',
      'smtpSecurity' => 'Segurança',
      'smtpUsername' => 'Usuário',
      'emailAddress' => 'E-mail',
      'smtpPassword' => 'Senha',
      'outboundEmailFromName' => 'Nome do rementente',
      'outboundEmailFromAddress' => 'E-mail do rementente',
      'outboundEmailIsShared' => 'Compartilhado',
      'recordsPerPage' => 'Registros por Página',
      'recordsPerPageSmall' => 'Registros por Página (Menor)',
      'tabList' => 'Lista de abas',
      'quickCreateList' => 'Lista de Criação Rápida',
      'exportDelimiter' => 'Delimitador de exportação',
      'globalSearchEntityList' => 'Pesquisa Global de Entidades',
      'authenticationMethod' => 'Método de Autenticação',
      'ldapHost' => 'Host',
      'ldapPort' => 'Porta',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Usuário',
      'ldapPassword' => 'Senha',
      'ldapBindRequiresDn' => 'Ligação exige Dn',
      'ldapBaseDn' => 'Dn Base',
      'ldapAccountCanonicalForm' => 'Formulário Canônico de Conta',
      'ldapAccountDomainName' => 'Nome de Domínio da Conta',
      'ldapTryUsernameSplit' => 'Tentar dividir o Nome de Usuário',
      'ldapCreateFoxUser' => 'Criar usuário no FoxCRM',
      'ldapSecurity' => 'Segurança',
      'ldapUserLoginFilter' => 'Filtro para Login de Usuário',
      'ldapAccountDomainNameShort' => 'Nome curto do Domínio da Conta',
      'ldapOptReferrals' => 'Referências Opt',
      'disableExport' => '禁止导出(只允许admin)',
      'assignmentNotificationsEntityList' => 'Entities to Notify about upon Assignment',
      'assignmentEmailNotifications' => 'Enviar notificações sobre as designações por e-mail',
      'assignmentEmailNotificationsEntityList' => 'Entidades para notificar',
      'b2cMode' => 'Modo B2C',
      'disableAvatars' => 'Disable Avatars',
      'followCreatedEntities' => 'Follow Created Entities',
      'exportDisabled' => 'Desabilitar exportação (permitido apenas para administradores)',
      'avatarsDisabled' => 'Desabilitar Avatares',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Domingo',
        1 => 'Segunda',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPageSmall' => 'Contar registros nos painéis de relacionamento.',
      'outboundEmailIsShared' => 'Allow users to sent emails via this SMTP.',
      'followCreatedEntities' => 'If user created a record he/she will follow it automatically.',
    ),
    'labels' => 
    array (
      'System' => 'Sistema',
      'Locale' => 'Idioma',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuração',
      'In-app Notifications' => 'In-app Notifications',
      'Email Notifications' => 'Email Notifications',
      'Currency Settings' => 'Configurações de Moeda',
      'Currency Rtes' => 'Currency Rates',
      'Notifications' => 'Notificações',
      'Currency Rates' => 'Conversão de moedas',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'roles' => 'Regras',
      'positionList' => 'Lista de Posições',
    ),
    'links' => 
    array (
      'users' => 'Usuários',
    ),
    'tooltips' => 
    array (
      'roles' => 'Todos os usuários deste time terão acesso as configurações das regras selecionadas.',
      'positionList' => 'Posições disponíveis neste time. E.g. Vendedor, Gerente.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Criar Time',
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
      'name' => 'Nome',
      'userName' => 'Usuário',
      'title' => 'Título',
      'isAdmin' => 'Administrador',
      'defaultTeam' => 'Time Padrão',
      'emailAddress' => 'E-mail',
      'phoneNumber' => 'Telefone',
      'roles' => 'Regras',
      'teamRole' => 'Posição',
      'password' => 'Senha',
      'passwordConfirm' => 'Confirmação da Senha',
      'newPassword' => 'Nova senha',
      'newPasswordConfirm' => 'Confirme a nova senha',
      'avatar' => 'Avatar',
      'isActive' => 'Está ativo',
      'agent' => '分机号',
      'agents' => '分机',
    ),
    'links' => 
    array (
      'teams' => 'Times',
      'roles' => 'Regras',
      'targetLists' => 'Lista de alvos',
      'agents' => '分机',
    ),
    'labels' => 
    array (
      'Create User' => 'Criar Usuário',
      'Generate' => 'Gerar',
      'Access' => 'Acesso',
      'Preferences' => 'Preferências',
      'Change Password' => 'Trocar Senha',
      'Teams and Access Control' => 'Times e controle de acesso',
      'Forgot Password?' => 'Esqueceu a senha?',
      'Password Change Request' => 'Solicitar troca da senha',
      'Email Address' => 'Endereço de e-mail',
      'External Accounts' => 'Contas externas',
      'Email Accounts' => 'Contas de e-mail',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Todos os registros criados por este usuário serão relacionados e este time por padrão.',
      'userName' => 'Letras a-z, números 0-9 e underscores são permitidos.',
      'isAdmin' => 'Usuário Admin pode acessar tudo.',
      'isActive' => 'Se desmarcado, o usuário não conseguirá logar.',
      'teams' => 'Times aos quais este usuário pertence. O controle de acesso é herdado das regras do time.',
      'roles' => 'Regras de acesso adicionais. Use se o usuário não pertence a nenhum time ou se for necessário extender o controle de acesso deste usuário.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'A senha será enviada para o email do usuário.',
      'accountInfoEmailSubject' => 'Informações da Conta',
      'accountInfoEmailBody' => 'Informações da sua conta:

Usuário: {userName}
Senha: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Solicitação para troca da senha',
      'passwordChangeLinkEmailBody' => 'Você pode atualizar sua senha usando este link {link}. Esta URL é única e expirará em breve.',
      'passwordChanged' => 'A senha foi atualizada',
      'userCantBeEmpty' => 'O nome de usuário deve ser informado',
      'wrongUsernamePasword' => 'Usuário / senha incorretos',
      'emailAddressCantBeEmpty' => 'O endereço de e-mail deve ser informado',
      'userNameEmailAddressNotFound' => 'Usuário / E-mail não localizados',
      'forbidden' => 'Proibido, por favor tente mais tarde',
      'uniqueLinkHasBeenSent' => 'Um link único foi enviado para o endereço de e-mail informado.',
      'passwordChangedByRequest' => 'A senha foi atualizada.',
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Apenas meus time',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'website' => 'Website',
      'phoneNumber' => 'Telefone',
      'billingAddress' => 'Endereço de Cobrança',
      'shippingAddress' => 'Endereço de Entrega',
      'description' => 'Descrição',
      'sicCode' => 'CNPJ',
      'industry' => 'Indústria',
      'type' => 'Tipo',
      'contactRole' => 'Regra',
      'campaign' => 'Campanha',
      'opportunities' => '客户追踪',
      'cdrs' => 'Cdrs',
      'tickets' => '工单',
      'tracks' => 'Tracks',
    ),
    'links' => 
    array (
      'contacts' => 'Contatos',
      'opportunities' => 'Oportunidades',
      'cases' => 'Atendimentos',
      'documents' => 'Documentos',
      'meetingsPrimary' => 'Reuniões (Interno)',
      'callsPrimary' => 'Ligações (Interno)',
      'tasksPrimary' => 'Tarefas (Interno)',
      'emailsPrimary' => 'Emails (expanded)',
      'targetLists' => 'Lista de alvos',
      'campaignLogRecords' => 'Log da Campanha',
      'campaign' => 'Campaign',
      'cdrs' => 'Cdrs',
      'tickets' => '工单',
      'tracks' => 'Tracks',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Cliente',
        'Investor' => 'Investidor',
        'Partner' => 'Parceiro',
        'Reseller' => 'Revendedor',
      ),
      'industry' => 
      array (
        'Agriculture' => 'Agricultura',
        'Advertising' => 'Publicidade',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Automotive' => 'Automotiva',
        'Banking' => 'Banco',
        'Biotechnology' => 'Biotecnologia',
        'Chemical' => 'Química',
        'Computer' => 'Computadores',
        'Education' => 'Educação',
        'Electronics' => 'Electrônicos',
        'Energy' => 'Energy',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Finanças',
        'Food & Beverage' => 'Alimentação',
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
      'Create Account' => 'Criar Conta',
      'Copy Billing' => 'Copiar Cobrança',
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
      'month' => 'Mês',
      'week' => 'Semana',
      'day' => 'Dia',
      'agendaWeek' => 'Semana',
      'agendaDay' => 'Dia',
    ),
    'labels' => 
    array (
      'Today' => 'Hoje',
      'Create' => 'Criar',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'parent' => 'Relação',
      'status' => 'Status',
      'dateStart' => 'Data de Início',
      'dateEnd' => 'Data Final',
      'direction' => 'Direção',
      'duration' => 'Duração',
      'description' => 'Descrição',
      'users' => 'Usuários',
      'contacts' => 'Contatos',
      'leads' => 'Leads',
      'reminders' => 'Lembretes',
      'account' => 'Conta',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planejado',
        'Held' => 'Realizada',
        'Not Held' => 'Não Realizada',
      ),
      'direction' => 
      array (
        'Outbound' => 'Saída',
        'Inbound' => 'Entrada',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nenhum',
        'Accepted' => 'Aceita',
        'Declined' => 'Rejeitada',
        'Tentative' => 'Tentativa',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Call' => 'Criar Ligação',
      'Set Held' => 'Marcar como realizada',
      'Set Not Held' => 'Marcar como não realizada',
      'Send Invitations' => 'Enviar Convites',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planejado',
      'held' => 'Realizado',
      'todays' => 'Hoje',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'description' => 'Descrição',
      'status' => 'Status',
      'type' => 'Tipo',
      'startDate' => 'Data de início',
      'endDate' => 'Data de fim',
      'targetLists' => 'Lista de alvos',
      'sentCount' => 'Enviar',
      'openedCount' => 'Abertos',
      'clickedCount' => 'Clicados',
      'optedOutCount' => 'Cancelamentos',
      'bouncedCount' => 'Bounces',
      'hardBouncedCount' => 'Hard Bounce',
      'softBouncedCount' => 'Soft Bounce',
      'leadCreatedCount' => 'Leads Criados',
      'revenue' => 'Receita',
      'revenueConverted' => 'revenue (converted)',
      'budget' => 'Budget',
    ),
    'links' => 
    array (
      'targetLists' => 'Lista de alvos',
      'accounts' => 'Contas',
      'contacts' => 'Contatos',
      'leads' => 'Leads',
      'opportunities' => 'Oportunidades',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Mass Emails',
      'trackingUrls' => 'Tracking URLs',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-mail',
        'Web' => 'Web',
        'Television' => 'Televisão',
        'Radio' => 'Rádio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Correio',
      ),
      'status' => 
      array (
        'Planning' => 'Planejamento',
        'Active' => 'Ativa',
        'Inactive' => 'Inativa',
        'Complete' => 'Completa',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Criar Campanha',
      'Target Lists' => 'Lista de alvos',
      'Statistics' => 'Estatísticas',
      'hard' => 'hard',
      'soft' => 'soft',
      'Unsubscribe' => 'Unsubscribe',
    ),
    'presetFilters' => 
    array (
      'active' => 'Ativa',
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
      'action' => 'Ação',
      'actionDate' => 'Data',
      'data' => 'Dados',
      'campaign' => 'Campanha',
      'parent' => 'Alvo',
      'object' => 'Objeto',
      'application' => 'Aplicação',
      'queueItem' => 'Queue Item',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Enviado',
        'Opened' => 'Aberto',
        'Opted Out' => 'Cancelado',
        'Bounced' => 'Bounced',
        'Clicked' => 'Clicado',
        'Lead Created' => 'Lead Criado',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Tudo',
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
      'name' => 'Nome',
      'number' => 'Número',
      'status' => 'Status',
      'account' => 'Conta',
      'contact' => 'Contato',
      'contacts' => 'Contacts',
      'priority' => 'Prioridade',
      'type' => 'Tipo',
      'description' => 'Descrição',
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
        'New' => 'Novo',
        'Assigned' => 'Designado',
        'Pending' => 'Pendente',
        'Closed' => 'Fechado',
        'Rejected' => 'Rejeitado',
        'Duplicate' => 'Duplicado',
      ),
      'priority' => 
      array (
        'Low' => 'Baixa',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente',
      ),
      'type' => 
      array (
        'Question' => 'Questão',
        'Incident' => 'Incidente',
        'Problem' => 'Problema',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Criar Atendimento',
      'Close' => 'Close',
      'Reject' => 'Reject',
      'Closed' => 'Closed',
      'Rejected' => 'Rejected',
    ),
    'presetFilters' => 
    array (
      'open' => 'Aberto',
      'closed' => 'Fechado',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'title' => 'Cargo',
      'account' => 'Conta',
      'accounts' => 'Contas',
      'phoneNumber' => 'Telefone',
      'accountType' => 'Tipo de Conta',
      'doNotCall' => 'Não Ligar',
      'address' => 'Endereço',
      'opportunityRole' => 'Regra de Oportunidade',
      'accountRole' => 'Regra',
      'description' => 'Descrição',
      'campaign' => 'Campanha',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
    ),
    'links' => 
    array (
      'opportunities' => 'Oportunidades',
      'cases' => 'Atendimento',
      'targetLists' => 'Lista de Alvos',
      'campaignLogRecords' => 'Log das Campanhas',
      'campaign' => 'Campaign',
      'account' => 'Account (Primary)',
      'accounts' => 'Accounts',
      'casesPrimary' => 'Cases (Primary)',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Criar Contato',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Nenhum--',
        'Decision Maker' => 'Tomador de Decisão',
        'Evaluator' => 'Avaliador',
        'Influencer' => 'Influenciador',
      ),
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Criar Documento',
      'Details' => 'Detalhes',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Status',
      'file' => 'Arquivo',
      'type' => 'Tipo',
      'source' => 'Fonte',
      'publishDate' => 'Data de Publicação',
      'expirationDate' => 'Data de expiração',
      'description' => 'Descrição',
      'accounts' => 'Accounts',
      'folder' => 'Folder',
    ),
    'links' => 
    array (
      'accounts' => 'Contas',
      'opportunities' => 'Oportunidades',
      'folder' => 'Folder',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Ativo',
        'Draft' => 'Rascunho',
        'Expired' => 'Expirado',
        'Canceled' => 'Cancelado',
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
      'active' => 'Ativo',
      'draft' => 'Rascunho',
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
      'Converted To' => 'Convertido Para',
      'Create Lead' => 'Criar Lead',
      'Convert' => 'Converter',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'title' => 'Cargo',
      'website' => 'Website',
      'phoneNumber' => 'Telefone',
      'accountName' => 'Conta',
      'doNotCall' => 'Não Ligar',
      'address' => 'Endereço',
      'status' => 'Status',
      'source' => 'Origem',
      'opportunityAmount' => 'Valor da Oportunidade',
      'opportunityAmountConverted' => 'Valor da Oportunidade (convertido)',
      'description' => 'Descrição',
      'createdAccount' => 'Conta',
      'createdContact' => 'Contato',
      'createdOpportunity' => 'Oportunidade',
      'campaign' => 'Campanha',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
    ),
    'links' => 
    array (
      'targetLists' => 'Lista de Alvos',
      'campaignLogRecords' => 'Logs das Camapnhas',
      'campaign' => 'Campaign',
      'createdAccount' => 'Account',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Opportunity',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Novo',
        'Assigned' => 'Atribuído',
        'In Process' => 'Em Processo',
        'Converted' => 'Convertido',
        'Recycled' => 'Reciclado',
        'Dead' => 'Morto',
      ),
      'source' => 
      array (
        '' => 'None',
        'Call' => 'Ligação',
        'Email' => 'E-mail',
        'Existing Customer' => 'Cliente Existente',
        'Partner' => 'Parceiro',
        'Public Relations' => 'Relacionamento',
        'Web Site' => 'Website',
        'Campaign' => 'Campanha',
        'Other' => 'Outro',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Ativo',
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
      'name' => 'Nome',
      'parent' => 'Relação',
      'status' => 'Status',
      'dateStart' => 'Data de Início',
      'dateEnd' => 'Data final',
      'duration' => 'Duração',
      'description' => 'Descrição',
      'users' => 'Usuários',
      'contacts' => 'Contatos',
      'leads' => 'Leads',
      'reminders' => 'Lembretes',
      'account' => 'Conta',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planejada',
        'Held' => 'Realizada',
        'Not Held' => 'Não Realizada',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Nenhum',
        'Accepted' => 'Aceita',
        'Declined' => 'Rejeitada',
        'Tentative' => 'Tentativa',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Criar Reunião',
      'Set Held' => 'Marcar como realizada',
      'Set Not Held' => 'Marcar como não realizada',
      'Send Invitations' => 'Enviar convites',
      'on time' => 'na hora',
      'before' => 'antes',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planejada',
      'held' => 'Realizada',
      'todays' => 'Hoje',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'account' => 'Conta',
      'selectTemplate' => '选择模板',
      'stage' => 'Estágio',
      'amount' => 'Valor',
      'probability' => 'Probabilidade, %',
      'leadSource' => 'Origem do Lead',
      'doNotCall' => 'Não ligar',
      'closeDate' => 'Data de Fechamento',
      'contacts' => 'Contatos',
      'description' => 'Descrição',
      'amountConverted' => 'Valor (convertido)',
      'amountWeightedConverted' => 'Valor Quantificado',
      'campaign' => 'Campanha',
    ),
    'links' => 
    array (
      'contacts' => 'Contatos',
      'documents' => 'Documentos',
      'campaign' => 'Campaign',
      'account' => '客户',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospectando',
        'Qualification' => 'Qualificação',
        'Needs Analysis' => 'Necessita de Análise',
        'Value Proposition' => 'Proposta de Valor',
        'Id. Decision Makers' => 'Identificação dos Decisores',
        'Perception Analysis' => 'Análise da Percepção',
        'Proposal/Price Quote' => 'Proposta/Cotação',
        'Negotiation/Review' => 'Negociação/Revisão',
        'Closed Won' => 'Ganha',
        'Closed Lost' => 'Perdida',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Criar Oportunidade',
    ),
    'presetFilters' => 
    array (
      'open' => 'Aberta',
      'won' => 'Ganha',
      'lost' => 'Lost',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'title' => 'Cargo',
      'website' => 'Website',
      'accountName' => 'Conta',
      'phoneNumber' => 'Telefone',
      'doNotCall' => 'Não Ligar',
      'address' => 'Endereço',
      'description' => 'Descrição',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Criar Alvo',
      'Convert to Lead' => 'Converter para Lead',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'description' => 'Descrção',
      'entryCount' => 'Contagem de entrada',
      'campaigns' => 'Campanhas',
      'endDate' => 'Data final',
      'targetLists' => 'Lista de alvos',
    ),
    'links' => 
    array (
      'accounts' => 'Contas',
      'contacts' => 'Contatos',
      'leads' => 'Leads',
      'campaigns' => 'Campanhas',
      'massEmails' => 'Mass Emails',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-mail',
        'Web' => 'Web',
        'Television' => 'Televisão',
        'Radio' => 'Rádio',
        'Newsletter' => 'Newsletter',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Criar Lista de Alvos',
      'Opted Out' => 'Opted Out',
      'Cancel Opt-Out' => 'Cancel Opt-Out',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Relação',
      'status' => 'Status',
      'dateStart' => 'Data de Início',
      'dateEnd' => 'Até a Data',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Prioridade',
      'description' => 'Descrição',
      'isOverdue' => 'Atrasada',
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
        'Not Started' => 'Não Iniciada',
        'Started' => 'Iniciada',
        'Completed' => 'Completa',
        'Canceled' => 'Cancelada',
        'Deferred' => 'Adiada',
      ),
      'priority' => 
      array (
        'Low' => 'Baixa',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Criar Tarefa',
      'Complete' => 'Concluída',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Atual',
      'completed' => 'Completa',
      'todays' => 'Hoje',
      'overdue' => 'Atrasada',
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
  'Prospect' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'title' => 'Cargo',
      'website' => 'Website',
      'accountName' => 'Conta',
      'phone' => 'Telefone',
      'phoneOffice' => 'Telefone (Comercial)',
      'fax' => 'Fax',
      'doNotCall' => 'Não Ligar',
      'address' => 'Endereço',
      'description' => 'Descrição',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Prospect' => 'Criar Prospecto',
      'Convert to Lead' => 'Converter para Lead',
    ),
  ),
);

?>