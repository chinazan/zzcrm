<?php
return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Aktiv',
      'Disabled' => 'Inaktiv',
      'System' => 'System',
      'Users' => 'Benutzer',
      'Email' => 'E-Mail',
      'Data' => 'Daten',
      'Customization' => 'Anpassung',
      'Available Fields' => 'Verfügbare Felder',
      'Layout' => 'Aktuelles Layout',
      'Entity Manager' => 'Entitäts-/Modulmanager',
      'Add Panel' => 'Panel hinzufügen',
      'Add Field' => 'Feld hinzufügen',
      'Settings' => 'Einstellungen',
      'Scheduled Jobs' => 'Geplante Jobs',
      'Upgrade' => 'Aktualisierung',
      'Clear Cache' => 'Cache leeren',
      'Rebuild' => 'Neu aufbauen',
      'Teams' => 'Teams',
      'Roles' => 'Rollen',
      'Outbound Emails' => 'Ausgehende E-Mails',
      'Inbound Emails' => 'Eingehende E-Mails',
      'Email Templates' => 'E-Mail Vorlagen',
      'Import' => 'Import',
      'Layout Manager' => 'Layouts anpassen',
      'User Interface' => 'Benutzeroberfläche',
      'Auth Tokens' => 'Auth Tokens',
      'Authentication' => 'Authentifizierung',
      'Currency' => 'Währung',
      'Integrations' => 'Integrationen',
      'Extensions' => 'Erweiterungen',
      'Upload' => 'Hochladen',
      'Installing...' => 'Installiere...',
      'Upgrading...' => 'Aktualisiere....',
      'Upgraded successfully' => 'Erfolgreich aktualisiert',
      'Installed successfully' => 'Erfolgreich installiert',
      'Ready for upgrade' => 'Bereit für Aktualisierung',
      'Run Upgrade' => 'Aktualisierung duchführen',
      'Install' => 'Installieren',
      'Ready for installation' => 'Bereit für Installation',
      'Uninstalling...' => 'Deinstalliere...',
      'Uninstalled' => 'Deinstalliert',
      'Create Entity' => 'Entität/Modul erstellen',
      'Edit Entity' => 'Entität/Modul bearbeiten',
      'Create Link' => 'Relation erstellen',
      'Edit Link' => 'Relation bearbeiten',
      'Track' => '客户追踪模板',
      'Notifications' => 'Benachrichtigungen',
      'Group Email Accounts' => 'Gruppen E-Mail Konten',
      'Jobs' => 'Jobs',
      'Reset to Default' => 'Zurücksetzen auf Standard',
      'Email Filters' => 'E-Mail Filter',
    ),
    'layouts' => 
    array (
      'list' => 'Liste',
      'detail' => 'Detail',
      'listSmall' => 'Liste (Klein)',
      'detailSmall' => 'Detail (Klein)',
      'filters' => 'Suchfilter',
      'massUpdate' => 'Massenänderung',
      'relationships' => 'Beziehungen',
      'detailConvert' => 'Interessent umwandeln',
      'listForAccount' => 'Liste (für Firma)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresse',
      'array' => 'Mehrfachauswahl',
      'foreign' => 'Fremdbezug',
      'duration' => 'Dauer',
      'password' => 'Passwort',
      'parsonName' => 'Person Name',
      'autoincrement' => 'Automatisch hochzählen',
      'bool' => 'Bool',
      'currency' => 'Währung',
      'date' => 'Datum',
      'datetime' => 'Datum/Zeit',
      'datetimeOptional' => 'Datum/Datum-Zeit',
      'email' => 'E-Mail',
      'enum' => 'Einfachauswahl',
      'enumInt' => 'Einfachauswahl Ganzzahlwerte',
      'enumFloat' => 'Einfachauswahl Fließkommawerte',
      'float' => 'Fließkomma',
      'int' => 'Ganzzahl',
      'link' => 'Link',
      'linkMultiple' => 'Mehrfachlinks',
      'linkParent' => 'Übergeordneter Link',
      'multienim' => 'Mehrfachauswahl',
      'phone' => 'Telefon',
      'text' => 'Textbox',
      'url' => 'URL',
      'varchar' => 'Text (max. 255)',
      'file' => 'Datei',
      'image' => 'Bild',
      'multiEnum' => 'Mehrfachauswahl',
      'attachmentMultiple' => 'Mehrfach Anhänge',
      'rangeInt' => 'Bereich Ganzzahl',
      'rangeFloat' => 'Bereich Fließkommawerte',
      'rangeCurrency' => 'bereich Währung',
      'wysiwyg' => 'Wysiwyg',
    ),
    'fields' => 
    array (
      'type' => 'Typ',
      'name' => 'Name',
      'label' => 'Bezeichnung',
      'required' => 'Erforderlich',
      'default' => 'Standard',
      'maxLength' => 'Maximallänge',
      'options' => 'Optionen',
      'after' => 'Nach (Feld)',
      'before' => 'Vor (Feld)',
      'link' => 'Link',
      'field' => 'Feld',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Übersetzung',
      'previewSize' => 'Vorschau Größe',
      'noEmptyString' => 'Keine leere Zeichenkette',
      'defaultType' => 'Standardtyp',
      'seeMoreDisabled' => 'Abschneiden des Texts verhindern',
      'entityList' => 'Entitätsliste',
      'isSorted' => 'Sortiert (alphabetisch)',
      'audited' => 'Auditiert',
      'trim' => 'Abschneiden',
      'height' => 'Height (px)',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Ihr FoxCRM wird nun auf Version <strong>{version}</strong> aktualisiert. Dies kann einige Zeit dauern.',
      'upgradeDone' => 'Ihr FoxCRM wurde auf Version <strong>{version}</strong> aktualisiert.',
      'upgradeBackup' => 'Wie empfehlen VOR einer Aktualisierung die Fox Dateien sowie die Datenbank zu sichern.',
      'thousandSeparatorEqualsDecimalMark' => 'Das Tausendertrennzeichen kann nicht gleich dem Dezimaltrennzeichen sein',
      'userHasNoEmailAddress' => 'Der Benutzer hat keine E-Mail Adresse.',
      'selectEntityType' => 'Modul/Entität links auswählen',
      'selectUpgradePackage' => 'Aktualisierungspaket auswählen',
      'downloadUpgradePackage' => 'Aktualisierungspaket(e) <a href="{url}">hier </a>herunterladen.',
      'selectLayout' => 'Layout zum Editieren links auswählen',
      'selectExtensionPackage' => 'Erweiterungspaket auswählen',
      'extensionInstalled' => 'Erweiterung {name} {version} wurde installiert.',
      'installExtension' => 'Erweiterung {name} {version} ist bereit für die Installation',
      'uninstallConfirmation' => 'Wollen Sie die Erweiterung wirklich deinstallieren?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Systemeinstellungen der Applikation.',
      'scheduledJob' => 'Aufgaben die durch einen Cronjob ausgeführt werden.',
      'upgrade' => 'FoxCRM aktualisieren.',
      'clearCache' => 'Alle Cache Dateien leeren.',
      'rebuild' => 'Wiederherstellung des Backends und Leeren des Cache.',
      'users' => 'Benutzerverwaltung.',
      'teams' => 'Teamverwaltung.',
      'roles' => 'Rollenverwaltung.',
      'outboundEmails' => 'SMTP Einstellungen für ausgehende E-Mails.',
      'inboundEmails' => 'Einstellungen für eingehende E-Mails',
      'emailTemplates' => 'Vorlagen für ausgehende E-Mails.',
      'import' => 'Datenimport aus CSV Datei.',
      'layoutManager' => 'Layouts anpassen (Liste, Detailansicht, Bearbeitungsansicht, Suche, Massenaktualisierung).',
      'entityManager' => 'Module/Entitäten selbst erstellen, existente bearbeiten, Felder und Relationen verwalten.',
      'userInterface' => 'Benutzeroberfläche anpassen.',
      'authTokens' => 'Aktive Auth Sessions. IP Adresse und letztes Zugriffsdatum,',
      'authentication' => 'Authentifizierungs Einstellungen.',
      'currency' => 'Währungseinstellungen und Kurse',
      'extensions' => 'Erweiterungen installieren oder deinstallieren',
      'integrations' => 'Integration mit Drittanbietern ',
      'track' => '客户追踪模板.',
      'notifications' => 'In-App und E-Mail Benachrichtigungseinstellungen.',
      'groupEmailAccounts' => 'IMAP Gruppenkonten. E-Mail Import und E-Mails für Fälle.',
      'emailFilters' => 'E-Mails auf die die angegebenen Filter zutreffen werden nicht importiert',
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
      'user' => 'Benutzer',
      'ipAddress' => 'IP Adresse',
      'lastAccess' => 'Letztes Zugriffsdatum',
      'createdAt' => 'Login Datum',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Funktion',
      'dateFrom' => 'Von Datum',
      'dateTo' => 'Bis Datum',
      'autorefreshInterval' => 'Aktualisierungsintervall',
      'displayRecords' => 'Sätze anzeigen',
      'isDoubleHeight' => 'Zweifache Höhe',
      'mode' => 'Modus',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Woche (Agenda)',
        'basicWeek' => 'Woche',
        'month' => 'Monat',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Betreff',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateSent' => 'Sendedatum',
      'from' => 'Von',
      'to' => 'An',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Ist HTML',
      'body' => 'Inhalt',
      'subject' => 'Betreff',
      'attachments' => 'Anhänge',
      'selectTemplate' => 'Vorlage wählen',
      'fromEmailAddress' => 'Von Adresse',
      'toEmailAddresses' => 'An Adresse',
      'emailAddress' => 'E-Mail Adresse',
      'deliveryDate' => 'Zustelldatum',
      'account' => 'Firma',
      'users' => 'Benutzer',
      'replyTo' => 'Antwort an',
      'replyToString' => 'Antwort an (Zeichenkette)',
      'replied' => 'Beantwortet',
      'replies' => 'Antworten',
      'isRead' => 'Ist gelesen',
      'isImportant' => 'Ist wichtig',
    ),
    'links' => 
    array (
      'replied' => 'Beantwortet',
      'replies' => 'Antworten',
    ),
    'options' => 
    array (
      'Draft' => 'Entwurf',
      'Sending' => 'Wird gesendet',
      'Sent' => 'Gesendet',
      'Archived' => 'Archiviert',
      'Received' => 'Empfangen',
    ),
    'labels' => 
    array (
      'Create Email' => 'E-Mail archivieren',
      'Archive Email' => 'E-Mail archivieren',
      'Compose' => 'Erstellen',
      'Reply' => 'Antworten',
      'Reply to All' => 'Allen antworten',
      'Forward' => 'Weiterleiten',
      'Original message' => 'Originalnachricht',
      'Forwarded message' => 'Weitergeleitete Nachricht:',
      'Email Accounts' => 'Persönliche E-Mail Konten',
      'Send Test Email' => 'Test E-Mail senden',
      'Send' => 'Senden',
      'Email Address' => 'E-Mail Adresse',
      'Mark Read' => 'Als gelesen markieren',
      'Sending...' => 'Wird gesendet...',
      'Save Draft' => 'Entwurf speichern',
      'Mark all as read' => 'Als gelesen markieren',
      'Show Plain Text' => 'Als Text zeigen',
      'Create Lead' => 'Interessent erstellen',
      'Create Contact' => 'Kontakt erstellen',
      'Create Task' => 'Neue Aufgabe',
      'Create Case' => 'Fall erstellen',
      'Inbound Emails' => 'Gruppen E-Mail Konten',
      'Email Templates' => 'E-Mail Vorlagen',
      'Mark as Important' => 'Als wichtig markieren',
      'Mark as Not Important' => 'Als unwichtig markieren',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Keine SMTP Einstellung, {link}. ',
      'testEmailSent' => 'Eine Test E-Mail wurde gesendet',
      'emailSent' => 'E-Mail wurde gesendet',
      'savedAsDraft' => 'Als Entwurf gepeichert',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Gesendet',
      'archived' => 'Archiviert',
      'inbox' => 'Posteingang',
      'drafts' => 'Entwürfe',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Als gelesen markieren',
      'markAsNotRead' => 'Als ungelesen markieren',
      'markAsImportant' => 'Als wichtig markieren',
      'markAsNotImportant' => 'Als unwichtig markieren',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Benutzername',
      'password' => 'Passwort',
      'port' => 'Port',
      'monitoredFolders' => 'Überwachte Ordner',
      'ssl' => 'SSL',
      'fetchSince' => 'Holen seit',
      'emailAddress' => 'E-Mail Adresse',
      'sentFolder' => 'Gesendet Ordner',
      'storeSentEmails' => 'Gesendete E-Mails speichern',
      'keepFetchedEmailsUnread' => 'Geholte E-Mails als ungelesen behalten',
    ),
    'links' => 
    array (
      'filters' => 'Filter',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'E-Mail Konto erstellen',
      'IMAP' => 'IMAP',
      'Main' => 'Wichtig',
      'Test Connection' => 'Verbindung überprüfen',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kann keine Verbindung zum IMAP Server herstellen',
      'connectionIsOk' => 'Verbindung ist in Ordnung',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'Sie können einen \'Gesendet\' Ordner hinzufügen um E-Mails zu synchronisieren, die von einem externen Programm gesendet wurden.',
      'storeSentEmails' => 'Gesendete E-Mail werden auf einem IMAP Server gespeichert. Die E-Mail Adresse muss jene sein von der die E-Mail gesendet wurde.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primär',
      'Opted Out' => 'Keine E-Mails',
      'Invalid' => 'Ungültig',
    ),
  ),
  'EmailFilter' => 
  array (
    'fields' => 
    array (
      'from' => 'Von',
      'to' => 'An',
      'subject' => 'Betreff',
      'bodyContains' => 'Mailinhalt',
    ),
    'labels' => 
    array (
      'Create EmailFilter' => 'E.Mail Filter erstellen',
    ),
    'tooltips' => 
    array (
      'name' => 'Ein Name für den Filter',
      'subject' => 'Verwendung des Platzhalters *:

text* - beginnt mit text,
*text* - enthält text,
*text - endet mit text.',
      'bodyContains' => 'Der Text der E-Mail enthält eines der angegebenen Worte oder Phrasen.',
      'from' => 'Die E-Mails werden von der angegebenen Adresse gesendet. Bitte leer lassen wenn nicht benötigt.',
      'to' => 'Die E-Mails werden an die angegebene Adresse gesendet. Bitte leer lassen wenn nicht benötigt.',
      'parent' => 'Leer lassen um den Filter global anzuwenden (für alle eingehenden E-Mails).',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'isHtml' => 'Ist HTML',
      'body' => 'Inhalt',
      'subject' => 'Betreff',
      'attachments' => 'Anhänge',
      'insertField' => 'Project-Id-Version: Fox de_DE
POT-Creation-Date: 
PO-Revision-Date: 
Last-Translator: Robert Laussegger <info@iscongroup.net>
Language-Team: iscon group <info@iscongroup.net>
MIME-Version: 1.0
Content-Type: text/plain; charset=iso-8859-1
Content-Transfer-Encoding: 8bit
Language: de_DE
X-Generator: Poedit 1.6.5
',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'E-Mail Vorlage erstellen',
      'Info' => 'Info',
    ),
    'messages' => 
    array (
      'infoText' => 'Verfügbare Variablen:

{optOutUrl} &#8211; URL für den Abmeldelink};

{optOutLink} &#8211; ein Abmeldelink.',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Felder',
      'Relationships' => 'Beziehungen',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'type' => 'Typ',
      'labelSingular' => 'Bezeichnung Einzahl',
      'labelPlural' => 'Bezeichnung Mehrzahl',
      'stream' => 'Vorgänge',
      'label' => 'Bezeichnung',
      'linkType' => 'Relationstyp',
      'entityForeign' => 'Fremdentität/-modul',
      'linkForeign' => 'Remdrelation/-modul',
      'link' => 'Link',
      'labelForeign' => 'Fremdbezeichnung',
      'sortBy' => 'Standardsortierung (Feld)',
      'sortDirection' => 'Standardsortierung (Richtung)',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Kein(e)',
        'Base' => 'Basis',
        'Person' => 'Person',
        'CategoryTree' => 'Kategoriebaum',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Viele zu Viele',
        'oneToMany' => 'Eins zu Viele',
        'manyToOne' => 'Viele zu Eins',
        'parentToChildren' => 'Vater zu KInd',
        'childrenToParent' => 'Kind zu Vater',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Aufsteigend',
        'desc' => 'Absteigend',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Entität wurde erstellt',
      'linkAlreadyExists' => 'Konflikt Name Relation',
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'version' => 'Version',
      'description' => 'Beschreibung',
      'isInstalled' => 'Installiert',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Deinstallieren',
      'Install' => 'Installieren',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Erweiterung {name} wurde deinstalliert',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Verbinden',
      'Connected' => 'Verbunden',
    ),
    'help' => 
    array (
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'E-Mail',
      'User' => 'Benutzer',
      'Team' => 'Team',
      'Role' => 'Rolle',
      'EmailTemplate' => 'E-Mail Vorlage',
      'EmailAccount' => 'Persönliches E-Mail Konto',
      'EmailAccountScope' => 'Persönliches E-Mail Konto',
      'OutboundEmail' => 'Ausgehende E-Mail',
      'ScheduledJob' => 'Geplante Aufgabe',
      'ExternalAccount' => 'Externes Konto',
      'Extension' => 'Erweiterung',
      'Dashboard' => 'Übersicht',
      'InboundEmail' => 'Gruppen E-Mail Konto',
      'Stream' => 'Vorgänge',
      'Import' => 'Import',
      'Account' => 'Firma',
      'Contact' => 'Kontakt',
      'Lead' => 'Interessent',
      'Target' => 'Zielkontakt',
      'Opportunity' => 'Verkaufschance',
      'Meeting' => 'Meeting',
      'Calendar' => 'Kalender',
      'Call' => 'Anruf',
      'Task' => 'Aufgabe',
      'Case' => 'Fall',
      'Document' => 'Dokument',
      'DocumentFolder' => 'Dokumente Ordner',
      'Campaign' => 'Kampagne',
      'TargetList' => 'Kontaktliste',
      'MassEmail' => 'Massen E-Mails',
      'EmailQueueItem' => 'E-Mail Warteschlangeneintrag',
      'CampaignTrackingUrl' => 'Tracking URL',
      'Ticket' => '工单',
      'Cdr' => '通话记录',
      'Track' => '客户追踪模板',
      'Agent' => '分机',
      'Queue' => '队列',
      'Template' => 'Vorlage',
      'Job' => 'Job',
      'EmailFilter' => 'E-Mail Filter',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'E-Mails',
      'User' => 'Benutzer',
      'Team' => 'Teams',
      'Role' => 'Rollen',
      'EmailTemplate' => 'E-Mail Vorlagen',
      'EmailAccount' => 'Persönliche E-Mail Konten',
      'EmailAccountScope' => 'Persönliche E-Mail Konten',
      'OutboundEmail' => 'Ausgehende E-Mails',
      'ScheduledJob' => 'Geplante Jobs',
      'ExternalAccount' => 'Externe Konten',
      'Extension' => 'Erweiterungen',
      'Dashboard' => 'Übersicht',
      'InboundEmail' => 'Gruppen E-Mail Konten',
      'Stream' => 'Vorgänge',
      'Import' => 'Importergebnis',
      'Account' => 'Firmen',
      'Contact' => 'Kontakte',
      'Lead' => 'Interessenten',
      'Target' => 'Zielkontakte',
      'Opportunity' => 'Verkaufschancen',
      'Meeting' => 'Meetings',
      'Calendar' => 'Kalender',
      'Call' => 'Anrufe',
      'Task' => 'Aufgaben',
      'Case' => 'Fälle',
      'Document' => 'Dokumente',
      'DocumentFolder' => 'Dokumente Ordner',
      'Campaign' => 'Kampagnen',
      'TargetList' => 'Kontaktlisten',
      'MassEmail' => 'Massen E-Mails',
      'EmailQueueItem' => 'E-Mail Warteschlangeneinträge',
      'CampaignTrackingUrl' => 'Tracking URLs',
      'Ticket' => '工单',
      'Cdr' => '通话记录',
      'Track' => '客户追踪模板',
      'Agent' => '分机',
      'Queue' => '队列',
      'Template' => 'Vorlagen',
      'Job' => 'Jobs',
      'EmailFilter' => 'E-Mail Filter',
    ),
    'labels' => 
    array (
      'Misc' => 'Verschiedenes',
      'Total' => 'Gesamt',
      'Merge' => 'Zusammenführen',
      'None' => 'Kein(e)',
      'by' => 'von',
      'Saved' => 'Gespeichert.',
      'Error' => 'Fehler',
      'Select' => 'Auswählen',
      'Not valid' => 'Ungültig',
      'Please wait...' => 'Bitte warten...',
      'Please wait' => 'Bitte warten',
      'Loading...' => 'Lade...',
      'Uploading...' => 'Lade hoch...',
      'Sending...' => 'Wird gesendet...',
      'Merging...' => 'Zusammenführen',
      'Merged' => 'Zusammengeführt',
      'Removed' => 'Gelöscht',
      'Posted' => 'Geposted',
      'Linked' => 'Verlinkt',
      'Unlinked' => 'Verknüpfung gelöscht',
      'Access denied' => 'Zugriff verweigert',
      'Access' => 'Zugang',
      'Are you sure?' => 'Sind Sie sicher?',
      'Record has been removed' => 'Datensatz wurde gelöscht',
      'Wrong username/password' => 'Falscher Benutzername/Passwort',
      'Post cannot be empty' => 'Notiz darf nicht leer sein',
      'Removing...' => 'Lösche...',
      'Unlinking...' => 'Lösche Verknüpfung...',
      'Posting...' => 'Poste...',
      'Username can not be empty!' => 'Der Benutzername darf nicht leer sein!',
      'Cache is not enabled' => 'Cache ist nicht aktiviert',
      'Cache has been cleared' => 'Der Cache wurde geleert',
      'Rebuild has been done' => 'Wiederherstellen wurde durchgeführt',
      'Saving...' => 'Speichere...',
      'Modified' => 'Verändert',
      'Created' => 'Erstellt',
      'Create' => 'Erstellen',
      'create' => 'erstellen',
      'Overview' => 'Überblick',
      'Details' => 'Details',
      'Add Field' => 'Feld hinzufügen',
      'Add Dashlet' => 'Dashlet hinzufügen',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Übersicht bearbeiten',
      'Add' => 'Hinzufügen',
      'Reset' => 'Zurücksetzen',
      'Menu' => 'Menü',
      'More' => 'Mehr',
      'Search' => 'Suchen',
      'Search Or Call' => '搜索或拨打',
      'Only My' => 'Nur Meine',
      'Open' => 'Offen',
      'Admin' => 'Admin',
      'About' => 'Über',
      'Refresh' => 'Aktualisieren',
      'Remove' => 'Löschen',
      'Options' => 'Optionen',
      'Username' => 'Benutzername',
      'Password' => 'Passwort',
      'Login' => 'Anmelden',
      'Log Out' => 'Abmelden',
      'Preferences' => 'Benutzereinstellungen',
      'State' => 'Bundesland/Kanton',
      'Street' => 'Straße',
      'Country' => 'Land',
      'City' => 'Ort',
      'PostalCode' => 'PLZ',
      'Followed' => 'Beobachtet',
      'Follow' => 'Beobachten',
      'ConvertTo' => '领取',
      'Clear Local Cache' => 'Lokalen Cache leeren',
      'Actions' => 'Aktionen',
      'Delete' => 'Löschen',
      'Update' => 'Aktualisieren',
      'Save' => 'Speichern',
      'Edit' => 'Bearbeiten',
      'View' => 'Ansehen',
      'Cancel' => 'Abbrechen',
      'Unlink' => 'Link entfernen',
      'Mass Update' => 'Massenänderung',
      'Mass Assign' => '批量分派',
      'Export' => 'Exportieren',
      'No Data' => 'Keine Daten',
      'No Access' => 'Kein Zugriff',
      'All' => 'Alle',
      'Active' => 'Aktiv',
      'Inactive' => 'Inaktiv',
      'Write your comment here' => 'Notiz hier einfügen',
      'Post' => 'Senden',
      'Stream' => 'Vorgänge',
      'Show more' => 'Mehr anzeigen',
      'Dashlet Options' => 'Dashlet Optionen',
      'Full Form' => 'Komplettes Formular',
      'Insert' => 'Einfügen',
      'Person' => 'Person',
      'First Name' => 'Vorname',
      'Last Name' => 'Nachname',
      'Original' => 'Original',
      'You' => 'Sie',
      'you' => 'Sie',
      'change' => 'ändern',
      'Change' => 'Ändern',
      'Primary' => 'Primär',
      'Save Filter' => 'Filter speichern',
      'Administration' => 'Administration',
      'Run Import' => 'Import durchführen',
      'Duplicate' => 'Duplizieren',
      'Notifications' => 'Benachrichtigungen',
      'Mark all read' => 'Alle als gelesen markieren',
      'See more' => 'Mehr anzeigen',
      'Today' => 'Heute',
      'Tomorrow' => 'Morgen',
      'Yesterday' => 'Gestern',
      'Submit' => 'Ausführen',
      'Close' => 'Schließen',
      'Yes' => 'Ja',
      'No' => 'Nein',
      'Select All Result' => 'Alle auswählen',
      'Value' => 'Wert',
      'Current version' => 'Aktuelle Version',
      'List View' => 'Listenansicht',
      'Tree View' => 'Baumansicht',
      'Create InboundEmail' => 'Eingehende E-Mail erstellen',
      'Activities' => 'Aktivitäten',
      'History' => 'Verlauf',
      'Attendees' => 'Teilnehmer',
      'Schedule Meeting' => 'Meeting planen',
      'Schedule Call' => 'Anruf planen',
      'Compose Email' => 'E-Mail erstellen',
      'Log Meeting' => 'Meeting erfassen',
      'Log Call' => 'Anruf erfassen',
      'Archive Email' => 'E-Mail archivieren',
      'Create Task' => 'Neue Aufgabe',
      'Tasks' => 'Aufgaben',
      'Done' => 'Fertig',
      'Add Item' => 'Eintrag hinzufügen',
      'Followers' => 'Beobachter',
      'Apply' => 'Anwenden',
      'Unlink All' => 'Alle Links entfernen',
      'Print to PDF' => 'Als PDF drucken',
      'Default' => 'Standard',
      'Number' => 'Nummer',
      'From' => 'Von',
      'To' => 'An',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Bitte warten...',
      'convertSelectedRecordsConfirmation' => '你确定要领取/释放这些数据',
      'allowMaxAccountCount' => '你最多可以领取客户记录:',
      'confirmLeaveOutMessage' => 'Sind Sie sicher dass Sie das Formular verlassen wollen?',
      'notModified' => 'Sie haben den Datensatz nicht geändert',
      'duplicate' => 'Der Datensatz den Sie erstellen wollen, könnte eine Dublette sein',
      'fieldIsRequired' => '{field} wird benötigt',
      'fieldShouldBeEmail' => '{field} muss eine gültige E-Mail sein',
      'fieldShouldBeFloat' => '{field} muss eine gültige Fließkomma Zahl sein',
      'fieldShouldBeInt' => '{field} muss eine gültige Ganzzahl sein',
      'fieldShouldBeDate' => '{field} muss ein gültiges Datum sein',
      'fieldShouldBeDatetime' => '{field} muss ein gültiges Datum/Zeit Feld sein',
      'fieldShouldAfter' => '{field} muss nach {otherField} sein',
      'fieldShouldBefore' => '{field} muss vor {otherField} sein',
      'fieldShouldBeBetween' => '{field} muss zwischen {min} und {max} sein',
      'fieldShouldBeLess' => '{field} muss kleiner als {value} sein',
      'fieldShouldBeGreater' => '{field} muss größer als {value} sein',
      'fieldBadPasswordConfirm' => '{field} falsch bestätigt',
      'resetPreferencesDone' => 'Die Einstellungen wurden auf Standardwerte zurückgesetzt',
      'assignmentEmailNotificationSubject' => 'FoxCRM {entityType}: {Entity.name}',
      'assignmentEmailNotificationBody' => '{assignerUserName} hat Ihnen {entityType} \'{Entity.name}\' zugewiesen.

{recordUrl}',
      'confirmation' => 'Sind Sie sicher?',
      'resetPreferencesConfirmation' => 'Sind Sie sicher, dass Sie die Einstellungen auf Standardwerte zurücksetzen wollen?',
      'removeRecordConfirmation' => 'Sind Sie sicher, dass Sie den Eintrag löschen wollen?',
      'unlinkRecordConfirmation' => 'Sind Sie sicher, dass Sie die Beziehung zu dem verbundenen Datensatz entfernen möchten?',
      'removeSelectedRecordsConfirmation' => 'Sind Sie sicher, dass Sie die ausgewählten Sätze löschen möchten?',
      'massUpdateResult' => '{count} Einträge wurden aktualisiert',
      'massUpdateResultSingle' => '{count} Eintrag wurde aktualisiert',
      'noRecordsUpdated' => 'Es wurden keine Einträge aktualisiert',
      'massRemoveResult' => '{count} Einträge wurden gelöscht',
      'massRemoveResultSingle' => '{count} Eintrag wurde gelöscht',
      'noRecordsRemoved' => 'Es wurden keine Einträge gelöscht',
      'clickToRefresh' => 'Klicken um zu aktualisieren',
      'streamPostInfo' => 'Schreiben Sie <strong>@username</strong> um Benutzer in der Notiz hervorzuheben.

Verfügbare Syntax:
`<code>Code</code>`
**<strong>fetter Text</strong>**
*<em>Hervorgehobener Text</em>*
~<del>Durchgestrichen</del>~
> blockquote
(url)[link]',
      'unlinkAllConfirmation' => 'Sind Sie sicher, dass Sie die Beziehungen zu allen verbundenen Datensätzen entfernen möchten?',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Nur Meine',
      'followed' => 'Beobachtet',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Beobachtet',
      'all' => 'Alle',
    ),
    'massActions' => 
    array (
      'remove' => 'Löschen',
      'merge' => 'Zusammenführen',
      'massUpdate' => 'Massenänderung',
      'export' => 'Exportieren',
      'assgin' => '分派',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'firstName' => 'Vorname',
      'lastName' => 'Nachname',
      'salutationName' => 'Anrede',
      'assignedUser' => 'Zugewiesener Benutzer',
      'emailAddress' => 'E-Mail',
      'assignedUserName' => 'Zugewiesener Benutzername',
      'teams' => 'Teams',
      'createdAt' => 'Erstellt am',
      'modifiedAt' => 'Geändert am',
      'createdBy' => 'Erstellt von',
      'modifiedBy' => 'Geändert von',
      'description' => 'Beschreibung',
      'address' => 'Adresse',
      'phoneNumber' => 'Telefon',
      'phoneNumberMobile' => 'Telefon (Mobil)',
      'phoneNumberHome' => 'Telefon (Privat)',
      'phoneNumberFax' => 'Telefon (Fax)',
      'phoneNumberOffice' => 'Telefon (Büro)',
      'phoneNumberOther' => 'Telefon (Andere)',
      'order' => 'Position',
      'parent' => 'Bezieht sich auf',
      'children' => 'Kinder',
      'billingAddressCity' => 'Ort',
      'billingAddressCountry' => 'Land',
      'billingAddressPostalCode' => 'PLZ',
      'billingAddressState' => 'Bundesland/Kanton',
      'billingAddressStreet' => 'Straße',
      'addressCity' => 'Ort',
      'addressStreet' => 'Straße',
      'addressCountry' => 'Land',
      'addressState' => 'Bundesland/Kanton',
      'addressPostalCode' => 'PLZ',
      'shippingAddressCity' => 'Ort (Lieferadresse)',
      'shippingAddressStreet' => 'Straße (Lieferadresse)',
      'shippingAddressCountry' => 'Land (Lieferadresse)',
      'shippingAddressState' => 'Bundesland/Kanton (Lieferadresse)',
      'shippingAddressPostalCode' => 'PLZ (Lieferadresse)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Zugewiesener Benutzer',
      'createdBy' => 'Erstellt von',
      'modifiedBy' => 'Geändert von',
      'team' => 'Team',
      'roles' => 'Rollen',
      'teams' => 'Teams',
      'users' => 'Benutzer',
      'parent' => 'Bezieht sich auf',
      'children' => 'Kinder',
      'contacts' => 'Kontakte',
      'opportunities' => 'Verkaufschancen',
      'leads' => 'Interessenten',
      'meetings' => 'Meetings',
      'calls' => 'Anrufe',
      'tasks' => 'Aufgaben',
      'emails' => 'E-Mails',
      'accounts' => 'Firmen',
      'cases' => 'Fälle',
      'documents' => 'Dokumente',
      'account' => 'Firma',
      'opportunity' => 'Verkaufschance',
      'contact' => 'Kontakt',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Vorgänge',
      'Leads' => 'Meine Interessenten',
      'Opportunities' => 'Meine Verkaufschancen',
      'Tasks' => 'Meine Aufgaben',
      'Cases' => 'Meine Fälle',
      'Calendar' => 'Kalender',
      'Calls' => 'Meine Anrufe',
      'Meetings' => 'Meine Meetings',
      'OpportunitiesByStage' => 'Verkaufschancen nach Verkaufsphase',
      'OpportunitiesByLeadSource' => 'Verkaufschancen nach Quelle',
      'SalesByMonth' => 'Umsätze nach Monat',
      'SalesPipeline' => 'Verkaufspipeline',
      'Activities' => 'Meine Aktivitäten',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} wurde Ihnen zugewiesen',
      'emailReceived' => 'E-Mail empfangen von {from}',
      'entityRemoved' => '{user} hat {entityType} {entity} entfernt',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} hat {entityType} {entity} erstellt',
      'createAssigned' => '{user} hat {entityType} {entity} erstellt und an {assignee} zugewiesen',
      'assign' => '{user} hat {entityType} {entity} an {assignee} zugewiesen',
      'post' => '{user} hat zu {entityType} {entity} notiert',
      'attach' => '{user} hat zu {entityType} {entity} hinzugefügt',
      'status' => '{user} hat {field} von {entityType} {entity} aktualisiert',
      'update' => '{user} hat {entityType} {entity} aktualisiert',
      'createRelated' => '{user} hat {relatedEntityType} {relatedEntity} verbunden mit {entityType} {entity} erstellt',
      'mentionInPost' => '{user} bemerkte {mentioned} in {entityType} {entity}',
      'createThis' => '{user} hat {entityType} erstellt',
      'createAssignedThis' => '{user} hat {entityType} erstellt und an {assignee} zugewiesen',
      'assignThis' => '{user} hat {entityType} an {assignee} zugewiesen',
      'postThis' => '{user} hat notiert',
      'attachThis' => '{user} hat hinzugefügt',
      'statusThis' => '{user} hat {field} aktualisiert',
      'updateThis' => '{user} hat diese(s/n) {entityType} aktualisiert',
      'createRelatedThis' => '{user} hat {relatedEntityType} {relatedEntity} verbunden mit dieser/m {entityType} erstellt',
      'emailReceivedFromThis' => 'E-Mail empfangen von {from}',
      'emailReceivedInitialFromThis' => 'E-Mail empfangen von {from}, ein(e) {entityType} wurde erstellt',
      'emailReceivedThis' => 'E-Mail empfangen',
      'emailReceivedInitialThis' => 'E-Mail empfangen ein(e) {entityType} wurde erstellt',
      'emailReceivedFrom' => 'E-Mail empfangen von {from}, verbunden mit {entityType} {entity}',
      'emailReceivedFromInitial' => 'E-Mail empfangen von {from}, {entityType} {entity} wurde erstellt',
      'emailReceived' => 'E-Mail empfangen verbunden mit {entityType} {entity}',
      'emailReceivedInitial' => 'E-Mail empfangen: {entityType} {entity} wurde erstellt',
      'emailReceivedInitialFrom' => 'E-Mail empfangen von {from}, {entityType} {entity} wurde erstellt',
      'emailSent' => '{by} hat eine E-Mail verbunden mit {entityType} {entity} gesendet',
      'emailSentThis' => '{by} hat eine E-Mail gesendet',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Januar',
        1 => 'Februar',
        2 => 'März',
        3 => 'April',
        4 => 'Mai',
        5 => 'Juni',
        6 => 'Juli',
        7 => 'August',
        8 => 'September',
        9 => 'Oktober',
        10 => 'November',
        11 => 'Dezember',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mär',
        3 => 'Apr',
        4 => 'Mai',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Okt',
        10 => 'Nov',
        11 => 'Dez',
      ),
      'dayNames' => 
      array (
        0 => 'Sonntag',
        1 => 'Montag',
        2 => 'Dienstag',
        3 => 'Mittwoch',
        4 => 'Donnerstag',
        5 => 'Freitag',
        6 => 'Samstag',
      ),
      'dayNamesShort' => 
      array (
        0 => 'So',
        1 => 'Mo',
        2 => 'Di',
        3 => 'Mi',
        4 => 'Do',
        5 => 'Fr',
        6 => 'Sa',
      ),
      'dayNamesMin' => 
      array (
        0 => 'So',
        1 => 'Mo',
        2 => 'Di',
        3 => 'Mi',
        4 => 'Do',
        5 => 'Fr',
        6 => 'Sa',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Hr.',
        'Mrs.' => 'Fr.',
        'Ms.' => 'Fr.',
        'Dr.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Aserbaidschanisch',
        'be_BY' => 'Weissrussisch',
        'bg_BG' => 'Bulgarisch',
        'bn_IN' => 'Benglaisch',
        'bs_BA' => 'Bosnisch',
        'ca_ES' => 'Katalanisch',
        'cs_CZ' => 'Tschechisch',
        'cy_GB' => 'Walisisch',
        'da_DK' => 'Dänisch',
        'de_DE' => 'Deutsch',
        'el_GR' => 'Griechisch',
        'en_GB' => 'Englisch (UK)',
        'en_US' => 'Englisch (US)',
        'es_ES' => 'Spanisch (ES)',
        'et_EE' => 'Estnisch',
        'eu_ES' => 'Baskisch',
        'fa_IR' => 'Persisch',
        'fi_FI' => 'Finnisch',
        'fo_FO' => 'Färöisch',
        'fr_CA' => 'Französisch (CN)',
        'fr_FR' => 'Französisch (FR)',
        'ga_IE' => 'Irisch',
        'gl_ES' => 'Galizisch',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebräisch',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Kroatisch',
        'hu_HU' => 'Ungarisch',
        'hy_AM' => 'Armenisch',
        'id_ID' => 'Indonesisch',
        'is_IS' => 'Isländisch',
        'it_IT' => 'Italienisch',
        'ja_JP' => 'Japanisch',
        'ka_GE' => 'Georgisch',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Koreanisch',
        'ku_TR' => 'Kurdisch',
        'lt_LT' => 'Litauisch',
        'lv_LV' => 'Lettisch',
        'mk_MK' => 'Mazedonisch',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malaiisch',
        'nb_NO' => 'Norwegisch Bokmál',
        'nn_NO' => 'Norwegisch Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Niederländisch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polnisch',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portugiesisch (BR)',
        'pt_PT' => 'Portugiesisch (PT)',
        'ro_RO' => 'Rumänisch',
        'ru_RU' => 'Russisch',
        'sk_SK' => 'Slowakisch',
        'sl_SI' => 'Slowenisch',
        'sq_AL' => 'Albanisch',
        'sr_RS' => 'Serbisch',
        'sv_SE' => 'Schwedisch',
        'sw_KE' => 'Suaheli',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thailändisch',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Tükisch',
        'uk_UA' => 'Ukrainisch',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamesisch',
        'zh_CN' => 'Chinesisch vereinfacht (CN)',
        'zh_HK' => 'Chinesisch traditionell (HK)',
        'zh_TW' => 'Chinesisch traditionell (TW)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Am',
        'notOn' => 'Nicht am',
        'after' => 'Nach',
        'before' => 'Vor',
        'between' => 'Zwischen',
        'today' => 'Heute',
        'past' => 'Vergangenheit',
        'future' => 'Zukunft',
        'currentMonth' => 'Aktuelles Monat',
        'lastMonth' => 'Letzten Monat',
        'currentQuarter' => 'Aktuelles Quartal',
        'lastQuarter' => 'Letztes Quartal',
        'currentYear' => 'Aktuelles Jahr',
        'lastYear' => 'Letztes Jahr',
        'lastSevenDays' => 'Letzten 7 Tage',
        'lastXDays' => 'Letzten X Tage',
        'nextXDays' => 'Nächsten X Tage',
      ),
      'searchRanges' => 
      array (
        'is' => 'Ist',
        'isEmpty' => 'Ist leer',
        'isNotEmpty' => 'Ist nicht leer',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Gleich',
        'startsWith' => 'Beginnt mit',
        'contains' => 'Enthält',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Gleich',
        'notEquals' => 'Nicht gleich',
        'greaterThan' => 'Größer als',
        'lessThan' => 'Weniger als',
        'greaterThanOrEquals' => 'Größer oder gleich als',
        'lessThanOrEquals' => 'Weniger oder gleich als',
        'between' => 'Zwischen',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Kein(e)',
        '0.5' => '30 Sekunden',
        1 => '1 Minute',
        2 => '2 Minuten',
        5 => '5 Minuten',
        10 => '10 Minuten',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Telefon Mobil',
        'Office' => 'Telefon Büro',
        'Fax' => 'Fax',
        'Home' => 'Telefon Privat',
        'Other' => 'Andere',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Popup',
        'Email' => 'E-Mail',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Sie finden die Übersetzung hier: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Fett',
          'italic' => 'Kursiv',
          'underline' => 'Unterstrichen',
          'strike' => 'Durchgestrichen',
          'clear' => 'Font Stil entfernen',
          'height' => 'Zeilenhöhe',
          'name' => 'Schriftfamilie',
          'size' => 'Schriftgröße',
        ),
        'image' => 
        array (
          'image' => 'Bild',
          'insert' => 'Bild einfügen',
          'resizeFull' => 'Originalgröße',
          'resizeHalf' => 'Größe 1/2',
          'resizeQuarter' => 'Größe 1/4',
          'floatLeft' => 'Linksbündig',
          'floatRight' => 'Rechtsbündig',
          'floatNone' => 'Kein Textfluss',
          'dragImageHere' => 'Ziehen Sie ein Bild mit der Maus hierher',
          'selectFromFiles' => 'Wählen Sie eine Datei aus',
          'url' => 'Grafik URL',
          'remove' => 'Grafik entfernen',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Link einfügen',
          'unlink' => 'Link entfernen',
          'edit' => 'Bearbeiten',
          'textToDisplay' => 'Anzeigetext',
          'url' => 'Ziel des Links?',
          'openInNewWindow' => 'In einem neuen Fenster öffnen',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Link',
          'insert' => 'Video einfügen',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram oder DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabelle',
        ),
        'hr' => 
        array (
          'insert' => 'Eine horizontale Linie einfügen',
        ),
        'style' => 
        array (
          'style' => 'Stil',
          'normal' => 'Normal',
          'blockquote' => 'Zitat',
          'pre' => 'Quellcode',
          'h1' => 'Überschrift 1',
          'h2' => 'Überschrift 2',
          'h3' => 'Überschrift 3',
          'h4' => 'Überschrift 4',
          'h5' => 'Überschrift 5',
          'h6' => 'Überschrift 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Unsortierte Liste',
          'ordered' => 'Nummerierte Liste',
        ),
        'options' => 
        array (
          'help' => 'Hilfe',
          'fullscreen' => 'Vollbild',
          'codeview' => 'HTML-Code anzeigen',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Absatz',
          'outdent' => 'Ausrückung',
          'indent' => 'Einrückung',
          'left' => 'Links ausrichten',
          'center' => 'Zentriert ausrichten',
          'right' => 'Rechts ausrichten',
          'justify' => 'Blocksatz',
        ),
        'color' => 
        array (
          'recent' => 'Letzte Farbe',
          'more' => 'Mehr Farben',
          'background' => 'Hintergrundfarbe',
          'foreground' => 'Schriftfarbe',
          'transparent' => 'Transparenz',
          'setTransparent' => 'Transparenz setzen',
          'reset' => 'Zurücksetzen',
          'resetToDefault' => 'Zurücksetzen auf Standard',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Tastaturkürzel',
          'close' => 'Schließen',
          'textFormatting' => 'Textformatierung',
          'action' => 'Aktion',
          'paragraphFormatting' => 'Absatzformatierung',
          'documentStyle' => 'Dokumentenstil',
        ),
        'history' => 
        array (
          'undo' => 'Rückgängig',
          'redo' => 'Wiederholen',
        ),
      ),
    ),
    'themes' => 
    array (
      'Fox' => 'Fox',
      'Sakura' => 'Sakura',
      'FoxVertical' => 'Fox (Vertikal)',
      'SakuraVertical' => 'Sakura (Vertikal)',
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Import rückgängig machen',
      'Return to Import' => 'Zurück zum Import',
      'Run Import' => 'Import durchführen',
      'Back' => 'Zurück',
      'Field Mapping' => 'Feldzuordnung',
      'Default Values' => 'Standardwerte',
      'Add Field' => 'Feld hinzufügen',
      'Created' => 'Erstellt',
      'Updated' => 'Aktualisiert',
      'Result' => 'Resultat',
      'Show records' => 'Datensätze zeigen',
      'Remove Duplicates' => 'Duplikate entfernen',
      'importedCount' => 'Importiert (Anzahl)',
      'duplicateCount' => 'Duplicate (Anzahl)',
      'Step 1' => '步骤一',
      'What to Import?' => '导入到哪里?',
      'Entity Type' => '选择模块',
      'File' => '文件',
      'What to do?' => '动作',
      'Create Only' => 'Nur erstellen',
      'Create and Update' => 'Erstellen und aktualisieren',
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
      'updatedCount' => 'Aktualisiert (Anzahl)',
      'Update Only' => 'Nur aktualisieren',
      'Update by' => 'Aktualisieren durch',
    ),
    'messages' => 
    array (
      'utf8' => 'Sollte UTF-8 kodiert sein',
      'duplicatesRemoved' => 'Duplikate entfernt',
    ),
    'fields' => 
    array (
      'file' => 'Datei',
      'entityType' => 'Entitätstyp',
      'imported' => 'Importierte Datensätze',
      'duplicates' => 'Doppelte Datensätze',
      'updated' => 'Aktualisierte Datensätze',
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'team' => 'Team',
      'status' => 'Status',
      'assignToUser' => 'Mit Benutzer verknüpfen',
      'host' => 'Host',
      'username' => 'Benutzername',
      'password' => 'Passwort',
      'port' => 'Port',
      'monitoredFolders' => 'Überwachte Ordner',
      'trashFolder' => 'Papierkorb Ordner',
      'ssl' => 'SSL',
      'createCase' => 'Fall erstellen',
      'reply' => 'Autoantwort',
      'caseDistribution' => 'Fall Verteilung',
      'replyEmailTemplate' => 'Vorlage E-Mail Antwort',
      'replyFromAddress' => 'Von Adresse antworten',
      'replyToAddress' => 'Antwort an Adresse',
      'replyFromName' => 'Von Name antworten',
      'targetUserPosition' => 'Position Zielbenutzer',
      'emailAddress' => 'E-Mail Adresse',
    ),
    'tooltips' => 
    array (
      'reply' => 'E-Mail Absender informieren, dass die E-Mail empfangen wurde.

Es wird pro Zeitabschnitt nur eine E-Mail an einen bestimmten Empfänger gesendet um Schleifen zu vermeiden.',
      'createCase' => 'Fall aus eingehender E-Mail automatisch erstellen.',
      'replyToAddress' => 'Geben Sie die E-Mail Adresse dieser Mailbox an um Antworten hier zu empfangen.',
      'caseDistribution' => 'Wie Fälle zugewiesen werden. Entweder direkt dem Benutzer oder im Team.',
      'assignToUser' => 'Benutzer E-Mails/Fälle werden zugewiesen an',
      'team' => 'Team E-Mails/Fälle werden verknüpft mit',
      'targetUserPosition' => 'Bestimmen Sie die Position der Benutzer die Fälle zugewiesen bekommen.',
    ),
    'links' => 
    array (
      'filters' => 'Filter',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Direkte Zuordnung',
        'Round-Robin' => 'Umlauf-Verfahren',
        'Least-Busy' => 'Geringste Auslastung',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'E-Mail Konto erstellen',
      'IMAP' => 'IMAP',
      'Actions' => 'Aktionen',
      'Main' => 'Wichtig',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kann keine Verbindung zum IMAP Server herstellen',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Aktiv',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Geheimnis',
      'redirectUri' => 'Redirect URI',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Wählen Sie eine Integration aus dem Menü.',
      'noIntegrations' => 'Keine Integration verfügbar.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Holen Sie die OAuth 2.0 Credentials über die Google Developers Console.</b></p><p>Visit <a href="https://console.developers.google.com/project">Google Developers Console</a> um OAuth 2.0 Credentials wie eine Client ID und Client Geheimnis zu erhalten die sowohl Google als auch FoxCRM bekannt sind.</p>',
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executeTime' => 'Ausführen um',
      'attempts' => 'Verbleibende Versuche',
      'failedAttempts' => 'Fehlgeschlagene Versuche',
      'serviceName' => 'Service',
      'method' => 'Methode',
      'scheduledJob' => 'Geplante Aufgabe',
      'data' => 'Daten',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Schwebend',
        'Success' => 'Erfolg',
        'Running' => 'Läuft',
        'Failed' => 'Fehlgeschlagen',
      ),
    ),
  ),
  'LayoutManager' => 
  array (
    'fields' => 
    array (
      'width' => 'Breite (%)',
      'link' => 'Link',
      'notSortable' => 'Nicht sortierbar',
      'align' => 'Ausrichten',
    ),
    'options' => 
    array (
      'align' => 
      array (
        'left' => 'Links',
        'right' => 'Rechts',
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Senden',
      'attachments' => 'Anhänge',
    ),
    'filters' => 
    array (
      'all' => 'Alle',
      'posts' => 'Posts',
      'updates' => 'Aktualisierungen',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Datumsformat',
      'timeFormat' => 'Zeitformat',
      'timeZone' => 'Zeitzone',
      'weekStart' => 'Erster Tag der Woche',
      'thousandSeparator' => 'Tausender Trennzeichen',
      'decimalMark' => 'Dezimaltrennzeichen',
      'defaultCurrency' => 'Standardwährung',
      'currencyList' => 'Währungsliste',
      'language' => 'Sprache',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorisierung',
      'smtpSecurity' => 'Sicherheit',
      'smtpUsername' => 'Benutzername',
      'emailAddress' => 'E-Mail',
      'smtpPassword' => 'Passwort',
      'smtpEmailAddress' => 'E-Mail Adresse',
      'exportDelimiter' => 'Export Trennzeichen',
      'receiveAssignmentEmailNotifications' => 'E-Mail Nachrichten bei Zuweisungen erhalten',
      'autoFollowEntityTypeList' => 'Autom. Beobachten',
      'signature' => 'E-Mail Signatur',
      'dashboardTabList' => 'Reiter Liste',
      'defaultReminders' => 'Standarderinnerungen',
      'theme' => 'Design',
      'useCustomTabList' => 'Benutzerdefinierte Reiter Liste',
      'tabList' => 'Reiter Liste',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sonntag',
        1 => 'Montag',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Benachrichtigungen',
      'User Interface' => 'Benutzeroberfläche',
      'SMTP' => 'SMTP',
      'Misc' => 'Verschiedenes',
      'Locale' => 'Lokale Einstellungen',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Der Benutzer beobachtet alle neuen Einträge der gewählten Entität, sieht Neuigkeiten in den Vorgängen und erhält Benachrichtigungen.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'roles' => 'Rollen',
      'assignmentPermission' => 'Zuweisungsberechtigungen',
      'userPermission' => 'Benutzerberechtigung',
    ),
    'links' => 
    array (
      'users' => 'Benutzer',
      'teams' => 'Teams',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Ermöglicht das Recht der Zuweisung von Datensätzen an andere Benutzer zu beschränken

Alle - Keine Einschränkung

Team - Kann an Benutzer des eigenen Teams zuweisen

Nein - Kann nur sich selbst zuweisen',
      'userPermission' => 'Erlaubt Benutzern die Aktivitäten anderer Benutzer zu sehen.

Alle - Kann alle sehen

Team - Kann nur Aktivitäten der Benutzer im eigenen Team sehen

Nein - Kann keine anderen Aktivitäten sehen',
    ),
    'labels' => 
    array (
      'Access' => 'Zugang',
      'Create Role' => 'Rolle erstellen',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'nicht gesetzt',
        'enabled' => 'Aktiv',
        'disabled' => 'Inaktiv',
      ),
      'levelList' => 
      array (
        'all' => 'Alle',
        'team' => 'Team',
        'own' => 'Eigene',
        'no' => 'Nein',
        'not-set' => 'nicht gesetzt',
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
      'read' => 'Lesen',
      'edit' => 'Bearbeiten',
      'delete' => 'Löschen',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Alle Änderungen werden erst nach Leeren des Caches wirksam.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'job' => 'Job',
      'scheduling' => 'Planung (in Crontab Notation)',
    ),
    'links' => 
    array (
      'log' => 'Protokoll',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Geplante Aufgabe erstellen',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Aufräumen',
        'ProcessMassEmail' => 'Massen E-Mails senden',
        'CheckInboundEmails' => 'Gruppen E-Mail Konten überprüfen',
        'CheckEmailAccounts' => 'Persönliche E-Mail Konten prüfen',
        'SendEmailReminders' => 'E-Mail Erinnerungen senden',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Hinweis: Fügen Sie diese Zeile zu Ihrer Crontab Datei hinzu, um geplante Aufgaben durchführen zu können:',
        'mac' => 'Hinweis: Fügen Sie diese Zeile zu Ihrer Crontab Datei hinzu, um geplante Aufgaben durchführen zu können:',
        'windows' => 'Hinweis: Erstellen Sie eine Stapeldatei mit den folgenden Kommandos um geplante Aufgaben mit dem Windows Aufgabenplaner durchzuführen:',
        'default' => 'Hinweis: fügen Sie dieses Kommando zum CronJob hinzu (Geplante Aufgaben):',
      ),
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
    ),
    'tooltips' => 
    array (
      'scheduling' => 'Definiert wann und wie oft ein Job läuft

*/5 * * * * - alle 5 Minuten

0 */2 * * * - alle 2 Stunden

30 1 * * * - um 01:30 einmal am Tag

0 0 1 * * - am ersten Tag des Monats',
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Ausführungszeit',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Benutzer Cache',
      'accountMaxCount' => '坐席最大客户数量',
      'accountMaxDelayTime' => '坐席最大可私有客户时间',
      'accountMaxFollow' => '坐席例外客户最大值',
      'dateFormat' => 'Datumsformat',
      'timeFormat' => 'Zeitformat',
      'timeZone' => 'Zeitzone',
      'weekStart' => 'Erster Tag der Woche',
      'thousandSeparator' => 'Tausender Trennzeichen',
      'decimalMark' => 'Dezimaltrennzeichen',
      'defaultCurrency' => 'Standardwährung',
      'baseCurrency' => 'Basiswährung',
      'currencyRates' => 'Wechselkurse',
      'currencyList' => 'Währungsliste',
      'language' => 'Sprache',
      'companyLogo' => 'Firmenlogo',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorisierung',
      'smtpSecurity' => 'Sicherheit',
      'smtpUsername' => 'Benutzername',
      'emailAddress' => 'E-Mail',
      'smtpPassword' => 'Passwort',
      'outboundEmailFromName' => 'Von Name',
      'outboundEmailFromAddress' => 'Von Adresse',
      'outboundEmailIsShared' => 'Kann von allen Benutzern verwendet werden',
      'recordsPerPage' => 'Datensätze pro Seite',
      'recordsPerPageSmall' => 'Datensätze pro Seite (Klein)',
      'tabList' => 'Reiter Liste',
      'quickCreateList' => 'Liste Schnellerstellung',
      'exportDelimiter' => 'Export Trennzeichen',
      'globalSearchEntityList' => 'Modul-/Entitätsliste globale Suche',
      'authenticationMethod' => 'Authentifizierungs Methode',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Autorisierung',
      'ldapUsername' => 'Benutzername',
      'ldapPassword' => 'Passwort',
      'ldapBindRequiresDn' => 'Bind erfordert Dn',
      'ldapBaseDn' => 'Basis Dn',
      'ldapAccountCanonicalForm' => 'Kanonische Form Konto',
      'ldapAccountDomainName' => 'Domain Name Konto',
      'ldapTryUsernameSplit' => 'Benutzernamen Split versuchen',
      'ldapCreateFoxUser' => 'Benutzer in FoxCRM erstellen',
      'ldapSecurity' => 'Sicherheit',
      'ldapUserLoginFilter' => 'Login Filter benutzen',
      'ldapAccountDomainNameShort' => 'Domain Name Konto kurz',
      'ldapOptReferrals' => 'Opt Referrals',
      'disableExport' => '禁止导出(只允许admin)',
      'assignmentNotificationsEntityList' => 'Entitäten über die bei Zuweisung benachrichtigt werden soll',
      'assignmentEmailNotifications' => 'E-Mail Nachrichten bei Zuweisungen senden',
      'assignmentEmailNotificationsEntityList' => 'Entitäten über die mit E-Mail bei Zuweisung benachrichtigt werden soll',
      'b2cMode' => 'B2C Modus',
      'disableAvatars' => 'Disable Avatars',
      'followCreatedEntities' => 'Erstellten Einträgen beobachten',
      'exportDisabled' => 'Export deaktivieren (nur Admin ist berechtigt)',
      'avatarsDisabled' => 'Avatare deaktivieren',
      'displayListViewRecordCount' => 'Gesamtanzahl anzeigen (in Listenansicht)',
      'theme' => 'Design',
      'userThemesDisabled' => 'Benutzerdesigns deaktivieren',
      'emailMessageMaxSize' => 'Max. E-Mail Größe (Mb)',
      'massEmailMaxPerHourCount' => 'Max. Anzahl E-Mails pro Stunde',
      'personalEmailMaxPortionSize' => 'Max email portion size for a personal account fetching',
      'inboundEmailMaxPortionSize' => 'Max email portion size for a group account fetching',
      'maxEmailAccountCount' => 'Max count of personal email accounts per user',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sonntag',
        1 => 'Montag',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPageSmall' => 'Anzahl Sätze in Beziehungssubpanels',
      'outboundEmailIsShared' => 'Benutzern gestatten, E-Mails über dieses SMTP Konto zu senden',
      'followCreatedEntities' => 'Benutzer folgen automatisch jenen Sätzen die sie erstellt haben',
      'emailMessageMaxSize' => 'Alle eingehenden E-Mails die eine angegebene Größe übersteigen, werden übersprungen ',
    ),
    'labels' => 
    array (
      'System' => 'System',
      'Locale' => 'Lokale Einstellungen',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfiguration',
      'In-app Notifications' => 'In-App Benachrichtigungen',
      'Email Notifications' => 'E-Mail Benachrichtigungen',
      'Currency Settings' => 'Währunsgseinstellungen',
      'Currency Rtes' => 'Currency Rates',
      'Currency Rates' => 'Währungskurse',
      'Mass Email' => 'Massen E-Mails',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'roles' => 'Rollen',
      'positionList' => 'Stellungen',
    ),
    'links' => 
    array (
      'users' => 'Benutzer',
    ),
    'tooltips' => 
    array (
      'roles' => 'Zugriffsrollen Benutzer dieses Teams erhalten Zugriffsberechtigung von ausgewählten Rollen',
      'positionList' => 'Verfügbare Positionen in diesem Team Z.B. Verkäufer, Manager etc.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Team erstellen',
    ),
  ),
  'Template' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'body' => 'Inhalt',
      'entityType' => 'Entitätstyp',
      'header' => 'Kopf',
      'footer' => 'Fuß',
      'leftMargin' => 'Linker Rand',
      'topMargin' => 'Oberer Rand',
      'rightMargin' => 'Rechter Rand',
      'bottomMargin' => 'Unterer Rand',
      'printFooter' => 'Fuß drucken',
      'footerPosition' => 'Position Fuß',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Template' => 'Vorlage erstellen',
    ),
    'tooltips' => 
    array (
      'footer' => 'Verwenden Sie den Platzhalter  {pageNumber} um eine Seitennummer zu drucken.',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'userName' => 'Benutzername',
      'title' => 'Funktion',
      'isAdmin' => 'Ist Admin',
      'defaultTeam' => 'Standard Team',
      'emailAddress' => 'E-Mail',
      'phoneNumber' => 'Telefon',
      'roles' => 'Rollen',
      'teamRole' => 'Position',
      'password' => 'Passwort',
      'passwordConfirm' => 'Passwort bestätigen',
      'newPassword' => 'Neues Passwort',
      'newPasswordConfirm' => 'Neues Passwort bestätigen',
      'avatar' => 'Avatar',
      'isActive' => 'Ist aktiv',
      'agent' => '分机号',
      'agents' => '分机',
      'currentPassword' => 'Aktuelles Passwort',
    ),
    'links' => 
    array (
      'teams' => 'Teams',
      'roles' => 'Rollen',
      'targetLists' => 'Kontaktlisten',
      'agents' => '分机',
    ),
    'labels' => 
    array (
      'Create User' => 'Benutzer erstellen',
      'Generate' => 'Erzeugen',
      'Access' => 'Zugang',
      'Preferences' => 'Benutzereinstellungen',
      'Change Password' => 'Passwort ändern',
      'Teams and Access Control' => 'Teams und Zugriffsberechtigung',
      'Forgot Password?' => 'Passwort vergessen?',
      'Password Change Request' => 'Anforderung zur Passwortänderung',
      'Email Address' => 'E-Mail Adresse',
      'External Accounts' => 'Externe Konten',
      'Email Accounts' => 'E-Mail Konten',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Alle Datensätze dieses Benutzers werden standardmäßig seinem Team zugeordnet.',
      'userName' => 'Buchstaben a-z, Zahlen 0-9 und Unterstriche sind erlaubt.',
      'isAdmin' => 'Der Admin Benutzer hat vollen Zugriff auf alle Funktionen.',
      'isActive' => 'Wenn nicht markiert kann der Benutzer nicht einloggen',
      'teams' => 'Das Team zu dem dieser Benutzer gehört. Die Zugriffsberechtigung wird von der Team Rolle vererbt.',
      'roles' => 'Zusätzliche Zugriffsrollen. Wenn ein Benutzer zu keinem Team gehört oder wenn Sie die Zugriffsberechtigung nur für diesen Benutzer erweitern wollen.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Das Passwort wird an die E-Mail Adresse des Benutzers gesendet',
      'accountInfoEmailSubject' => 'FoxCRM Benutzerzugriffsinfo',
      'accountInfoEmailBody' => 'Ihre FoxCRM Zugriffsinformation:

Benutzername: {userName}
Passwort: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Anforderung zur Passwortänderung',
      'passwordChangeLinkEmailBody' => 'Sie können Ihr Passwort über diesen Link {link} ändern Diese eindeutige URL ist nur für kurze Zeit gültig.',
      'passwordChanged' => 'Das Passwort wurde geändert',
      'userCantBeEmpty' => 'Der Benutzername darf nicht leer sein!',
      'wrongUsernamePasword' => 'Falscher Benutzername/Passwort',
      'emailAddressCantBeEmpty' => 'E-Mail Adresse darf nicht leer sein',
      'userNameEmailAddressNotFound' => 'Benutzername oder E-Mail Adresse nicht gefunden',
      'forbidden' => 'Verboten, bitte später nochmals versuchen',
      'uniqueLinkHasBeenSent' => 'Ein einmaliger Link wurde an die angegebene E-Mail Adresse gesendet.',
      'passwordChangedByRequest' => 'Das Passwort wurde geändert',
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Nur mein Team',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'website' => 'Webseite',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Rechnungsadresse',
      'shippingAddress' => 'Lieferadresse',
      'description' => 'Beschreibung',
      'sicCode' => 'WKN Nummer',
      'industry' => 'Branche',
      'type' => 'Typ',
      'contactRole' => 'Funktion',
      'campaign' => 'Kampagne',
      'opportunities' => '客户追踪',
      'cdrs' => 'Cdrs',
      'tickets' => '工单',
      'tracks' => 'Tracks',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakte',
      'opportunities' => 'Verkaufschancen',
      'cases' => 'Fälle',
      'documents' => 'Dokumente',
      'meetingsPrimary' => 'Meetings (erweitert)',
      'callsPrimary' => 'Anrufe (erweitert)',
      'tasksPrimary' => 'Aufgaben (erweitert)',
      'emailsPrimary' => 'E-Mails (erweitert)',
      'targetLists' => 'Kontaktlisten',
      'campaignLogRecords' => 'Kampagnen Log',
      'campaign' => 'Kampagne',
      'cdrs' => 'Cdrs',
      'tickets' => '工单',
      'tracks' => 'Tracks',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Kunde',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Reseller' => 'Wiederverkäufer',
      ),
      'industry' => 
      array (
        'Agriculture' => 'Landwirtschaft',
        'Advertising' => 'Werbewirtschaft',
        'Apparel & Accessories' => 'Bekleidungsindustrie',
        'Automotive' => 'Automobilindustrie',
        'Banking' => 'Bankwesen',
        'Biotechnology' => 'Biotechnologie',
        'Chemical' => 'Chemieindustrie',
        'Computer' => 'Informationstechnologie',
        'Education' => 'Bildungswesen',
        'Electronics' => 'Elektronik',
        'Energy' => 'Energieerzeuger',
        'Entertainment & Leisure' => 'Freizeit- und Unterhaltungsindustrie',
        'Finance' => 'Finanzsektor',
        'Food & Beverage' => 'Speisen und Getränke',
        'Grocery' => 'Einzelhandel',
        'Healthcare' => 'Gesundheitswesen',
        'Insurance' => 'Versicherung',
        'Legal' => 'Rechtswesen',
        'Manufacturing' => 'Produktion',
        'Publishing' => 'Medien',
        'Real Estate' => 'Immobilien',
        'Service' => 'Service',
        'Sports' => 'Sport',
        'Software' => 'Software',
        'Technology' => 'Technologie',
        'Telecommunications' => 'Telekommunikation',
        'Television' => 'Fernsehen',
        'Transportation' => 'Transportwesen',
        'Venture Capital' => 'Risikokapital',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Firma erstellen',
      'Copy Billing' => 'Rechnungsadresse kopieren',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Kunden',
      'partners' => 'Partner',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Monat',
      'week' => 'Woche',
      'day' => 'Tag',
      'agendaWeek' => 'Woche',
      'agendaDay' => 'Tag',
    ),
    'labels' => 
    array (
      'Today' => 'Heute',
      'Create' => 'Erstellen',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Enddatum',
      'direction' => 'Richtung',
      'duration' => 'Dauer',
      'description' => 'Beschreibung',
      'users' => 'Benutzer',
      'contacts' => 'Kontakte',
      'leads' => 'Interessenten',
      'reminders' => 'Erinnerungen',
      'account' => 'Firma',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Geplant',
        'Held' => 'Durchgeführt',
        'Not Held' => 'Nicht durchgeführt',
      ),
      'direction' => 
      array (
        'Outbound' => 'Ausgehend',
        'Inbound' => 'Eingehend',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Kein(e)',
        'Accepted' => 'Akzeptiert',
        'Declined' => 'Abgelehnt',
        'Tentative' => 'Mit Vorbehalt',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Auf gehalten setzen',
      'setNotHeld' => 'Auf nicht gehalten setzen',
    ),
    'labels' => 
    array (
      'Create Call' => 'Anruf erstellen',
      'Set Held' => 'Auf gehalten setzen',
      'Set Not Held' => 'Auf nicht gehalten setzen',
      'Send Invitations' => 'Einladungen versenden',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Geplant',
      'held' => 'Durchgeführt',
      'todays' => 'Heutige',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'description' => 'Beschreibung',
      'status' => 'Status',
      'type' => 'Typ',
      'startDate' => 'Startdatum',
      'endDate' => 'Enddatum',
      'targetLists' => 'Kontaktlisten',
      'sentCount' => 'Gesendet',
      'openedCount' => 'Geöffnet',
      'clickedCount' => 'Geklickt',
      'optedOutCount' => 'Keine E-Mails',
      'bouncedCount' => 'Nicht zustellbar',
      'hardBouncedCount' => 'Hard Bounced',
      'softBouncedCount' => 'Soft Bounced',
      'leadCreatedCount' => 'Erstellte Interessenten',
      'revenue' => 'Umsatz',
      'revenueConverted' => 'Umsatz (konvertiert)',
      'budget' => 'Budget',
    ),
    'links' => 
    array (
      'targetLists' => 'Kontaktlisten',
      'accounts' => 'Firmen',
      'contacts' => 'Kontakte',
      'leads' => 'Interessenten',
      'opportunities' => 'Verkaufschancen',
      'campaignLogRecords' => 'Protokoll',
      'massEmails' => 'Massen E-Mails',
      'trackingUrls' => 'Tracking URLs',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-Mail',
        'Web' => 'Web',
        'Television' => 'Fernsehen',
        'Radio' => 'Radio Button',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Mail',
      ),
      'status' => 
      array (
        'Planning' => 'Planung',
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
        'Complete' => 'Fertig',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Neue Kampagne',
      'Target Lists' => 'Kontaktlisten',
      'Statistics' => 'Statistik',
      'hard' => 'hart',
      'soft' => 'weich',
      'Unsubscribe' => 'Abmelden',
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
    ),
    'messages' => 
    array (
      'unsubscribed' => 'Sie wurden erfolgreich von unserem Verteiler entfernt',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Aktion',
      'actionDate' => 'Datum',
      'data' => 'Daten',
      'campaign' => 'Kampagne',
      'parent' => 'Zielkontakt',
      'object' => 'Objekt',
      'application' => 'Applikation',
      'queueItem' => 'Warteschlangeneintrag',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Gesendet',
        'Opened' => 'Geöffnet',
        'Opted Out' => 'Keine E-Mails',
        'Bounced' => 'Nicht zustellbar',
        'Clicked' => 'Geklickt',
        'Lead Created' => 'Interessent erstellt',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Alle',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Gesendet',
      'opened' => 'Geöffnet',
      'optedOut' => 'Keine E-Mails',
      'bounced' => 'Nicht zustellbar',
      'clicked' => 'Geklickt',
      'leadCreated' => 'Interessent erstellt',
    ),
  ),
  'CampaignTrackingUrl' => 
  array (
    'fields' => 
    array (
      'url' => 'URL',
      'urlToUse' => 'Code zu Einfügen anstelle einer URL',
      'campaign' => 'Kampagne',
    ),
    'links' => 
    array (
      'campaign' => 'Kampagne',
    ),
    'labels' => 
    array (
      'Create CampaignTrackingUrl' => 'Tracking URL erstellen',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'number' => 'Nummer',
      'status' => 'Status',
      'account' => 'Firma',
      'contact' => 'Kontakt',
      'contacts' => 'Kontakte',
      'priority' => 'Priorität',
      'type' => 'Typ',
      'description' => 'Beschreibung',
      'inboundEmail' => 'Eingehende E-Mails',
    ),
    'links' => 
    array (
      'inboundEmail' => 'Eingehende E-Mails',
      'account' => 'Firma',
      'contact' => 'Kontakt (Primär)',
      'Contacts' => 'Kontakte',
      'meetings' => 'Meetings',
      'calls' => 'Anrufe',
      'tasks' => 'Aufgaben',
      'emails' => 'E-Mails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Neu',
        'Assigned' => 'Zugewiesen',
        'Pending' => 'Schwebend',
        'Closed' => 'Abgeschlossen',
        'Rejected' => 'Abgelehnt',
        'Duplicate' => 'Duplizieren',
      ),
      'priority' => 
      array (
        'Low' => 'Niedrig',
        'Normal' => 'Normal',
        'High' => 'Hoch',
        'Urgent' => 'Dringend',
      ),
      'type' => 
      array (
        'Question' => 'Frage',
        'Incident' => 'Vorfall',
        'Problem' => 'Problem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Fall erstellen',
      'Close' => 'Schließen',
      'Reject' => 'Ablehnen',
      'Closed' => 'Abgeschlossen',
      'Rejected' => 'Abgelehnt',
    ),
    'presetFilters' => 
    array (
      'open' => 'Offen',
      'closed' => 'Abgeschlossen',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'title' => 'Funktion',
      'account' => 'Firma',
      'accounts' => 'Firmen',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Firmentyp',
      'doNotCall' => 'Nicht anrufen',
      'address' => 'Adresse',
      'opportunityRole' => 'Verkaufschance Rolle',
      'accountRole' => 'Funktion',
      'description' => 'Beschreibung',
      'campaign' => 'Kampagne',
      'targetLists' => 'Kontaktlisten',
      'targetList' => 'Kontaktliste',
    ),
    'links' => 
    array (
      'opportunities' => 'Verkaufschancen',
      'cases' => 'Fälle',
      'targetLists' => 'Kontaktlisten',
      'campaignLogRecords' => 'Kampagnen Log',
      'campaign' => 'Kampagne',
      'account' => 'Firma (Primär)',
      'accounts' => 'Firmen',
      'casesPrimary' => 'Fälle (Primär)',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Kontakt erstellen',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Kein(e)--',
        'Decision Maker' => 'Entscheider',
        'Evaluator' => 'Vorentscheider',
        'Influencer' => 'Einflussreiche Person',
      ),
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Dokument erstellen',
      'Details' => 'Details',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'file' => 'Datei',
      'type' => 'Typ',
      'source' => 'Quelle',
      'publishDate' => 'Veröffentlichungsdatum',
      'expirationDate' => 'Ablaufdatum',
      'description' => 'Beschreibung',
      'accounts' => 'Firmen',
      'folder' => 'Ordner',
    ),
    'links' => 
    array (
      'accounts' => 'Firmen',
      'opportunities' => 'Verkaufschancen',
      'folder' => 'Ordner',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Draft' => 'Entwurf',
        'Expired' => 'Abgelaufen',
        'Canceled' => 'Storniert',
      ),
      'type' => 
      array (
        '' => 'Kein(e)',
        'Contract' => 'Vertrag',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Lizenz Vereinbarung',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
      'draft' => 'Entwurf',
    ),
  ),
  'DocumentFolder' => 
  array (
    'labels' => 
    array (
      'Create DocumentFolder' => 'Dokumente Ordner erstellen',
      'Manage Categories' => 'Ordner verwalten',
    ),
    'links' => 
    array (
      'documents' => 'Dokumente',
    ),
  ),
  'EmailQueueItem' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'target' => 'Zielkontakt',
      'sentAt' => 'Sendedatum',
      'attemptCount' => 'Versuche',
      'emailAddress' => 'E-Mail Adresse',
      'massEmail' => 'Massen E-Mails',
      'isTest' => 'Ist Test',
    ),
    'links' => 
    array (
      'target' => 'Zielkontakt',
      'massEmail' => 'Massen E-Mails',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Pending' => 'Schwebend',
        'Sent' => 'Gesendet',
        'Failed' => 'Fehlgeschlagen',
      ),
    ),
    'presetFilters' => 
    array (
      'pending' => 'Schwebend',
      'sent' => 'Gesendet',
      'failed' => 'Fehlgeschlagen',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Umgewandelt zu',
      'Create Lead' => 'Interessent erstellen',
      'Convert' => 'Umwandeln',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'title' => 'Funktion',
      'website' => 'Webseite',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Firmenname',
      'doNotCall' => 'Nicht anrufen',
      'address' => 'Adresse',
      'status' => 'Status',
      'source' => 'Quelle',
      'opportunityAmount' => 'Verkaufschance Betrag',
      'opportunityAmountConverted' => 'Verkaufschance Betrag (konvertiert)',
      'description' => 'Beschreibung',
      'createdAccount' => 'Firma',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Verkaufschance',
      'campaign' => 'Kampagne',
      'targetLists' => 'Kontaktlisten',
      'targetList' => 'Kontaktliste',
    ),
    'links' => 
    array (
      'targetLists' => 'Kontaktlisten',
      'campaignLogRecords' => 'Kampagnen Log',
      'campaign' => 'Kampagne',
      'createdAccount' => 'Firma',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Verkaufschance',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Neu',
        'Assigned' => 'Zugewiesen',
        'In Process' => 'In Arbeit',
        'Converted' => 'Umgewandelt',
        'Recycled' => 'Wiedereröffnet',
        'Dead' => '\'Gestorben\'',
      ),
      'source' => 
      array (
        '' => 'Kein(e)',
        'Call' => 'Anruf',
        'Email' => 'E-Mail',
        'Existing Customer' => 'Bestehender Kunde',
        'Partner' => 'Partner',
        'Public Relations' => 'Public Relations',
        'Web Site' => 'Web Seite',
        'Campaign' => 'Kampagne',
        'Other' => 'Andere',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
      'converted' => 'Umgewandelt',
    ),
  ),
  'MassEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'storeSentEmails' => 'Gesendete E-Mails speichern',
      'startAt' => 'Startdatum',
      'fromAddress' => 'Von Adresse',
      'fromName' => 'Von Name',
      'replyToAddress' => 'Antwort-an Adresse',
      'replyToName' => 'Antwort-an Name',
      'campaign' => 'Kampagne',
      'emailTemplate' => 'E-Mail Vorlage',
      'inboundEmail' => 'E-Mail Konto',
      'targetLists' => 'Kontaktlisten',
    ),
    'links' => 
    array (
      'targetLists' => 'Kontaktlisten',
      'queueItems' => 'Warteschlangeneinträge',
      'campaign' => 'Kampagne',
      'emailTemplate' => 'E-Mail Vorlage',
      'inboundEmail' => 'E-Mail Konto',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Draft' => 'Entwurf',
        'Pending' => 'Schwebend',
        'In Process' => 'In Arbeit',
        'Complete' => 'Fertig',
        'Canceled' => 'Storniert',
        'Failed' => 'Fehlgeschlagen',
      ),
    ),
    'labels' => 
    array (
      'Create MassEmail' => 'Massen E-Mail erstellen',
      'Send Test' => 'Test senden',
    ),
    'messages' => 
    array (
      'selectAtLeastOneTarget' => 'Zumindest ein Ziel auswählen',
      'testSent' => 'Test E-Mail(s) die gesendet werden sollen',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Enddatum',
      'duration' => 'Dauer',
      'description' => 'Beschreibung',
      'users' => 'Benutzer',
      'contacts' => 'Kontakte',
      'leads' => 'Interessenten',
      'reminders' => 'Erinnerungen',
      'account' => 'Firma',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Geplant',
        'Held' => 'Durchgeführt',
        'Not Held' => 'Nicht durchgeführt',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Kein(e)',
        'Accepted' => 'Akzeptiert',
        'Declined' => 'Abgelehnt',
        'Tentative' => 'Mit Vorbehalt',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Auf gehalten setzen',
      'setNotHeld' => 'Auf nicht gehalten setzen',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Meeting erstellen',
      'Set Held' => 'Auf gehalten setzen',
      'Set Not Held' => 'Auf nicht gehalten setzen',
      'Send Invitations' => 'Einladungen versenden',
      'on time' => 'Aktuelle Zeit',
      'before' => 'bevor',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Geplant',
      'held' => 'Durchgeführt',
      'todays' => 'Heutige',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'account' => 'Firma',
      'selectTemplate' => '选择模板',
      'stage' => 'Verkaufsphase',
      'amount' => 'Betrag',
      'probability' => 'Wahrscheinlichkeit (%)',
      'leadSource' => 'Quelle',
      'doNotCall' => 'Nicht anrufen',
      'closeDate' => 'Abschlussdatum',
      'contacts' => 'Kontakte',
      'description' => 'Beschreibung',
      'amountConverted' => 'Betrag (konvertiert)',
      'amountWeightedConverted' => 'Betrag gewichtet',
      'campaign' => 'Kampagne',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakte',
      'documents' => 'Dokumente',
      'campaign' => 'Kampagne',
      'account' => '客户',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Qualifikation',
        'Needs Analysis' => 'Bedarfserhebung',
        'Value Proposition' => 'Richtangebot',
        'Id. Decision Makers' => 'Entscheider ident.',
        'Perception Analysis' => 'Analyse Sichtweise',
        'Proposal/Price Quote' => 'Preisangebot',
        'Negotiation/Review' => 'Verhandlung/Überarbeitung',
        'Closed Won' => 'Gewonnen',
        'Closed Lost' => 'Verloren',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Verkaufschance erstellen',
    ),
    'presetFilters' => 
    array (
      'open' => 'Offen',
      'won' => 'Gewonnen',
      'lost' => 'Lost',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'title' => 'Funktion',
      'website' => 'Webseite',
      'accountName' => 'Firmenname',
      'phoneNumber' => 'Telefon',
      'doNotCall' => 'Nicht anrufen',
      'address' => 'Adresse',
      'description' => 'Beschreibung',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Zielkontakt erstellen',
      'Convert to Lead' => 'Zu Interessent umwandeln',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'description' => 'Beschreibung',
      'entryCount' => 'Eingabezähler',
      'campaigns' => 'Kampagnen',
      'endDate' => 'Enddatum',
      'targetLists' => 'Kontaktlisten',
    ),
    'links' => 
    array (
      'accounts' => 'Firmen',
      'contacts' => 'Kontakte',
      'leads' => 'Interessenten',
      'campaigns' => 'Kampagnen',
      'massEmails' => 'Massen E-Mails',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'E-Mail',
        'Web' => 'Web',
        'Television' => 'Fernsehen',
        'Radio' => 'Radio Button',
        'Newsletter' => 'Newsletter',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Kontaktliste erstellen',
      'Opted Out' => 'Keine E-Mails',
      'Cancel Opt-Out' => 'Opt-Out zurücksetzen',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Fällig am',
      'dateStartDate' => 'Startdatum (ganztägig)',
      'dateEndDate' => 'Enddatum (ganztägig)',
      'priority' => 'Priorität',
      'description' => 'Beschreibung',
      'isOverdue' => 'Ist überfällig',
      'account' => 'Firma',
      'dateCompleted' => 'Datum erledigt',
      'attachments' => 'Anhänge',
    ),
    'links' => 
    array (
      'attachments' => 'Anhänge',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Nicht begonnen',
        'Started' => 'In Bearbeitung',
        'Completed' => 'Abgeschlossen',
        'Canceled' => 'Storniert',
        'Deferred' => 'Zurückgestellt',
      ),
      'priority' => 
      array (
        'Low' => 'Niedrig',
        'Normal' => 'Normal',
        'High' => 'Hoch',
        'Urgent' => 'Dringend',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Neue Aufgabe',
      'Complete' => 'Fertig',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Tatsächlich',
      'completed' => 'Abgeschlossen',
      'todays' => 'Heutige',
      'overdue' => 'Überfällig',
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