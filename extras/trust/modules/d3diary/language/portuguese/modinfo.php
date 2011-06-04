<?php
if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'd3diary' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// Module Info

// The name of this module
define($constpref."_DIARY_NAME","D3diario");
define($constpref."_DIARY_DESC","D3diario");

define($constpref."_DIARYLIST","Novos di�rios");
define($constpref."_PHOTOLIST","Imagens novas");
define($constpref."_FRIENDSDIARY","Amigos do di�rio");
define($constpref."_EDIT","Escrever no di�rio");
define($constpref."_CATEGORY","Categoria");
define($constpref."_COMMENT","Lista de Coment�rios");
define($constpref."_CONFIG","Configura��o do Di�rio");
define($constpref."_CONFIG_CATEGORY","Configura��o da categoria");
define($constpref."_YES","Sim");
define($constpref."_NO","N�o");

// Admin
define($constpref."_ADMENU_MYLANGADMIN","Adminstra��o das constantes da linguagem");
define($constpref."_ADMENU_MYTPLSADMIN","Administra��o dos modelos");
define($constpref."_ADMENU_MYBLOCKSADMIN","Administra��o das permiss�es e dos Blocos");
define($constpref."_ADMENU_IMPORT","Importa��o");
define($constpref."_ADMENU_PERMISSION","Administrar permiss�es");

// module config
define($constpref."_MENU_LAYOUT","Leiaute do Menu");
define($constpref."_MENU_LAYOUTDESC","Leiaute do menu dos calend�rios, etc.");
define($constpref."_MENU_LAYOUT_RIGHT","Mostrar o menu no lado direito");
define($constpref."_MENU_LAYOUT_LEFT","Mostrar o menu no lado esquerdo");
define($constpref."_MENU_LAYOUT_NONE","N�o mostrar lado do menu (use blocos)");

define($constpref."_RIGHT_WEIDTH","Largura do lado do menu");
define($constpref."_RIGHT_WEIDTHDESC","Especificar a largura do lado do menu em pixcels.<br />O valor padr�o � 140 pixcels");

define($constpref."_USENAME","Mostrar nome");
define($constpref."_USENAMEDESC","Qual nome de usu�rio mostrar 'codinome' ou 'nome'. <br /> O padr�o xoops � 'codinome'");
define($constpref."_USENAME_UNAME","usar'codinome'");
define($constpref."_USENAME_NAME","usar'nome'");

define($constpref."_BREADCRUMBS","Mostrar breadcrumbs");
define($constpref."_BREADCRUMBSDESC","selecione SIM para mostrar breadcrumbs ou <br/>N�O para usar xoops_breadcrumbs dos temas do xoops");

define($constpref."_PREV_CHARMAX","M�ximo de caracteres para lista de conte�do");
define($constpref."_PREV_CHARMAXDESC","M�ximo de caracteres para blocos e lista de conte�do.");

define($constpref."_BLK_DNUM","N�mero m�ximo de itens da lista de conte�do");
define($constpref."_BLK_DNUMDESC","Configura��o do n�mero m�ximo de itens da lista de conte�do");

define($constpref."_PHOTO_MAXSIZE","Tamanho m�ximo da imagem (KB)");
define($constpref."_PHOTO_MAXSIZEDESC","Tamnho m�ximo da imagem permitido, em (KB)");

define($constpref."_PHOTO_USERESIZE","Salvar imagem encolhida");
define($constpref."_PHOTO_USERESIZEDESC","Salvar imagem encolhida automaticamente, <br/>menos do que 640 pixels.");
define($constpref."_PHOTO_USERESIZE_Y","Encolher imagem");
define($constpref."_PHOTO_USERESIZE_N","N�o encolher");

define($constpref."_PHOTO_THUMBSIZE","Tamanho da miniatura da imagem");
define($constpref."_PHOTO_THUMBSIZEDESC","Configura��o do tamanho da miniatura da imagem em pixcels");

// define($constpref."_PHOTO_RESIZEMAX","Maximum shrink size");
// define($constpref."_PHOTO_RESIZEMAXDESC","Maximum shrink size setting by px (pixcel)");

define($constpref."_PHOTO_MAXPICS","N�mero m�ximo de imagens");
define($constpref."_PHOTO_MAXPICSDESC","Configura��o do n�mero m�ximo permitido para envio de imagem.");
define($constpref."_PHOTO_USEINFO","Colocar informa��es de cada imagem");
define($constpref."_PHOTO_USEINFODESC","Selecione 'SIM' para colocar informa��es de cada imagem");

define($constpref."_USE_AVATAR","Mostrar o avatar do usu�rio");
define($constpref."_USE_AVATARDESC","Selecionar Mostrar o avatar do usu�rio na barra lateral da lista de p�ginas do Di�rio.");

define($constpref."_USE_OPEN_CAT","Configura��o da permiss�o para cada categoria");
define($constpref."_USE_OPEN_CATDESC","Selecionar Habilitar para utilizar as configura��es de permiss�o e configura��o do blog externo de cada categoria.");
define($constpref."_USE_OPEN_CAT_Y","Permitir a configura��o de um blog externo para cada categoria: ON");
define($constpref."_USE_OPEN_CAT_N","Permitir a configura��o de um blog externo para cada categoria: OFF");
define($constpref."_USE_OPEN_CAT_G","Permiss�o de cada categoria: upto configura��o do grupo & configura��o do blog externo: ON");
define($constpref."_USE_OPEN_CAT_P","Permiss�o de cada categoria: upto configura��o do grupo e membro & configura��o do blog externo<b></b>: ON");

define($constpref."_USE_OPEN_ENTRY","Permitir a configura��o de cada post");
define($constpref."_USE_OPEN_ENTRYDESC","Selecionar Habilitar para utilizar a configura��o das permiss�es de cada post.");
define($constpref."_USE_OPEN_ENTRY_Y","Configura��o das permiss�es de cada post: ON");
define($constpref."_USE_OPEN_ENTRY_N","Configura��o das permiss�es de cada post: OFF");
define($constpref."_USE_OPEN_ENTRY_G","Configura��o das permiss�es de cada entrada: upto configura��o do grupo");
define($constpref."_USE_OPEN_ENTRY_P","Configura��o das permiss�es de cada entrada: upto configura��o do grupo e membro");

define($constpref."_USE_FRIEND","Configura��o da coopera��o com m�dulo Myfriend");
define($constpref."_USE_FRIENDDESC","Habilitar configura��o das permiss�es incluindo ou n�o a func�o Coopera��o co o m�dulo Myfriend. <br/><br/>Deixe OFF caso voc� n�o tenha instalado o XSNS ou o m�dulo Myfriend.");
define($constpref."_USE_FRIEND_N","Coopera��o com o m�dulo Myfriend: OFF");
define($constpref."_USE_XSNS_Y","Coopera��o com o m�dulo XSNS: ON");
define($constpref."_USE_MYFRIENDS_Y","Coopera��o com o m�dulo Myfriend: ON");

define($constpref."_FRIEND_DIRNAME","Nome do diret�rio do m�dulo Myfriend coopera��o");
define($constpref."_FRIEND_DIRNAMEDESC","Informe o nome do diret�rio, se voc� usa a fun�ao coopera��o com o m�dulo Myfriend.");

define($constpref."_USE_TAG","Fun��o etiqueta ON/OFF");
define($constpref."_USE_TAGDESC","Selecione a �rea para mostrar a nuvem de etiquetas, caso voc� esteja usando a fun��o etiqueta.");
define($constpref."_USE_TAG_N","Fun�ao etiqueta: OFF");
define($constpref."_USE_TAG_INDEXONLY","Mostrar a nuvem de etiquetas na P�gina Index");
define($constpref."_USE_TAG_ALSODIARYLIST","Mostrar a nuvem de etiquetas em todas as p�ginas index e misturar com a lista da p�gina.");
define($constpref."_USE_TAG_BLOCK","N�o mostrar a nuvem de tags. (Use blocks)");

define($constpref."_BODY_EDITOR","Qual editor do corpo");
define($constpref."_BODY_EDITORDSC","simple n�o mostrar ajuda do BBcode. Selecionando 'xoopsdhml' � �til para o uso do BBcode.");
define($constpref."_BODY_HTMLEDITOR","Mostrar bot�o do editor HTML");
define($constpref."_BODY_HTMLEDITORDSC","Permitir HTML para grupos espec�ficos em 'Administra��o das Permiss�es' tab screen, then select 'common/FCKeditor' to show FCKeditor button.");
define($constpref."_HTMLPR_EXCEPT","Grupos que podem permitir purifica��o por HTMLPurifier");
define($constpref."_HTMLPR_EXCEPTDSC","Post de usu�rios que n�o pertencem aos grupos que for�ar�o a purifica��o com sanitized HTML by HTMLPurifier in Protector>=3.14. Esta pirifica��o n�o pode trabalhar com PHP4");

define($constpref."_USE_UPDATEPING","Habilitar ping atualidado" );
define($constpref."_USE_UPDATEPING_DSC","Selecione SIM para usar ping atualizado" );
define($constpref."_UPDATEPING","Atualizar URL dos servidores do ping" );
define($constpref."_UPDATEPING_DSC","dividir cada URL por break" );
define($constpref."_UPDATEPING_SERVERS","http://ping.rss.drecom.jp/\nhttp://blog.goo.ne.jp/XMLRPC" );
define($constpref."_ENC_FROM","Tradu��o do c�digo interno para a distribui��o de RSS");
define($constpref."_ENC_FROMDSC","Normalmente 'padr�o' � aplic�vel. Se a distribui��o RSS for alterada, 'xoops_chrset' ou 'auto' pode ser melhor.");
define($constpref."_PERM_CLASS","Nome da classe para as permiss�o de vizualiza��o");
define($constpref."_PERM_CLASSDSC","Informe o nome da classe para subscrever as permiss�es de vizualiza��o. O padr�o � d3diaryPermission");

define($constpref."_USE_MAILPOST" , 'Use poste atrav�s de e-mail');
define($constpref."_USE_MAILPOSTDSC" , 'Selecione "SIM" para habilitar poste por e-mail, e inspecione o grupo coloca��o de permiss�o.');
define($constpref."_POP3_SERVER","Servidor de correio POP");
define($constpref."_POP3_SERVER_DESC","Nome de servidor de correio PO");
define($constpref."_POP3_PORT","Porto de servidor PO");
define($constpref."_POP3_PORT_DESC","Por favor contate a administrador de servidor. Normalmente servidor POPULAR usa porto 110.");
define($constpref."_POP3_APOP","Uso APOP codificam autoriza��o");
define($constpref."_POP3_APOP_DESC","Por favor contate a administrador de servidor se usar APOP codificam autoriza��o");
define($constpref."_POST_EMAIL_ADDRESS","Conta de correio ID para inporting");
define($constpref."_POST_EMAIL_ADDRESS_DESC","Introduza o POP3 respondem ID por inporting");
define($constpref."_POST_EMAIL_PASSWORD","Contra-senha de POP3 para inporting");
define($constpref."_POST_EMAIL_PASSWORD_DESC","Introduza a contra-senha de POP3 para inportingting");
define($constpref."_POST_EMAIL_FULLADD","Correio endere�o cheio");
define($constpref."_POST_EMAIL_FULLADDDSC","Endere�o cheio para poste para qual n�o � para controle mas s� para espet�culo.");
define($constpref."_POST_DETECT_ORDER","Remeta texto codificando descubra ordem");
define($constpref."_POST_DETECT_ORDERDSC","Fixe correio texto codificando descubra ordem. <br /> meios Desocupados 'auto.' Se alguns falsificam � occured, s�ries de texto de contribui��o de 'ISO-2022-JP, UTF-8, UTF-7, ASCII, EUC-JP, JIS, SJIS, eucJP-win, SJIS-win'<br />Ex: 'ISO-2022-JP, UTF-8, JIS, EUC-JP, eucJP-win, SJIS'");

define($constpref."_USE_SIMPLECOMMENT","Modo coment�rio");
define($constpref."_USE_SIMPLECOMMENTDESC","Voc� pode usar o formul�rio de coment�rios f�cil ao inv�s do formul�rio de coment�rios original do Xoops. <br/><br/> Convidado n�o pode escrever usando o o formul�rio de coment�rio f�cil. ");
define($constpref."_USE_SIMPLECOMMENT_Y","Usar o Formul�rio de coment�rio f�cil");
define($constpref."_USE_SIMPLECOMMENT_N","Usar o formul�rio de coment�rios original do Xoops");

//d3comment integration
define($constpref."_COM_DIRNAME","Nome do diret�rio para integra��o de coment�rios com o d3forum");
define($constpref."_COM_DIRNAMEDSC","Quando usar o sistema de integra��o de coment�rios d3. <br/>escreva seu diret�rio d3forum (html) <br/>Deixe isso vazio, se voc� n�o usar coment�rios ou usar o sistema de coment�rios do xoops.");
define($constpref."_COM_FORUMID","N�mero do forum para a integra��o de coment�rio com o d3forum");
define($constpref."_COM_FORUMIDDSC","Escreva o ID do forum, quando voc� configurar o diret�rio acima.");
define($constpref."_COM_ORDER","Classifica��o da integra��o de coment�rios");
define($constpref."_COM_ORDERDSC","Quando voc� configurar a integra��o de coment�rios, selecione mostrar a ordem dos posts de coment�rio");
define($constpref."_COM_VIEW","Vizualiza��o da integra��o de coment�rios");
define($constpref."_COM_VIEWDSC","Selecione encolhido ou expandido");
define($constpref."_COM_POSTSNUM","N�mero m�ximo de posts mostrados na integra��o de comet�rios");
define($constpref."_COM_ANCHOR","Entrada �ncora da integra��o de comet�rios");
define($constpref."_COM_ANCHORDSC","A entrada �ncora padr�o � 'post_path'.<br />Se voc� usar 'post_id' para m�ltiplos t�picos de uma entrada, <br /> voc� deve editar o modelo do d3forum.");
define($constpref."_USE_COM_ANCHOR_UNIQUEPATH","Usar o padr�o d3forum 'post_path'");
define($constpref."_USE_COM_ANCHOR_POSTNUM","Usar 'post_id'");

//notifications
define($constpref."_GLOBAL_NOTIFY","Todo o Di�rio persoal");
define($constpref."_GLOBAL_NOTIFYDSC","Todo o Di�rio persoal");
define($constpref."_BLOGGER_NOTIFY","Especificado como Di�rio de Pessoal");
define($constpref."_BLOGGER_NOTIFYDSC","Especificado como Di�rio de Pessoal");

define($constpref."_GLOBAL_NEWENTRY_NOTIFY","Novo Di�rio");
define($constpref."_GLOBAL_NEWENTRY_NOTIFYCAP","Notifique-me de todos os novos di�rios pessoais");
define($constpref."_GLOBAL_NEWENTRY_NOTIFYDSC","Notifique-me de todos os novos di�rios pessoais");
define($constpref."_GLOBAL_NEWENTRY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} novo di�rio");

define($constpref."_BLOGGER_NEWENTRY_NOTIFY","Especificado como Di�rio Pessoal");
define($constpref."_BLOGGER_NEWENTRY_NOTIFYCAP","Notifique-me deste novo di�rio pessoal");
define($constpref."_BLOGGER_NEWENTRY_NOTIFYDSC","Notifique-me deste novo di�rio pessoal");
define($constpref."_BLOGGER_NEWENTRY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} novo di�rio");

define($constpref."_BLOGGER_COMMENT_NOTIFY","Coment�rio da pessoa especificada");
define($constpref."_BLOGGER_COMMENT_NOTIFYCAP","Notifique-me de coment�rio desta pessoa");
define($constpref."_BLOGGER_COMMENT_NOTIFYDSC","Notifique-me de coment�rio desta pessoa");
define($constpref."_BLOGGER_COMMENT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} novo coment�rio");

define($constpref."_ENTRY_NOTIFY","Coment�rio deste post");
define($constpref."_ENTRY_NOTIFYDSC","Notifique-me deste post");

// Block
define($constpref."_BLOCK_NEWENTRY","Novo Di�rio ou Blog");
define($constpref."_BLOCK_NEWENTRYDSC","Novos posts - Novo Di�rio");
define($constpref."_BLOCK_BLOGGER","Nova lista de Bloguers");
define($constpref."_BLOCK_BLOGGERDSC","Nova lista de Bloguers");
define($constpref."_BLOCK_D3COMPOSTS","Nova lista de coment�rios de post");
define($constpref."_BLOCK_D3COMPOSTSDSC","Validar para integra��o de coment�rios");
define($constpref."_BLOCK_D3COMTOPICS","Nova lista de coment�rios de t�picos");
define($constpref."_BLOCK_D3COMTOPICSDSC","Validar para integra��o de coment�rio");
define($constpref."_BLOCK_PERSON","Autor");
define($constpref."_BLOCK_PERSONDSC","Bloco do autor do di�rio");
define($constpref."_BLOCK_CALENDAR","Calend�rio");
define($constpref."_BLOCK_CALENDARDSC","Bloco do calend�rio do di�rio");
define($constpref."_BLOCK_CATEGORY","Categoria");
define($constpref."_BLOCK_CATEGORYDSC","Bloco da categoria do di�rio");
define($constpref."_BLOCK_ENTRY","Novas entradas");
define($constpref."_BLOCK_ENTRYDSC","Bloco das novas entradas");
define($constpref."_BLOCK_COMMENT","Novos coment�rios");
define($constpref."_BLOCK_COMMENTDSC","Bloco dos novos coment�rios");
define($constpref."_BLOCK_MLIST","M�s");
define($constpref."_BLOCK_MLISTDSC","Bloco mostrar mensalmente");
define($constpref."_BLOCK_FRIENDS","Amigos");
define($constpref."_BLOCK_FRIENDSDSC","Bloco da lista de amigos");
define($constpref."_BLOCK_TAGCROUD","Nuvem de etiquetas");
define($constpref."_BLOCK_TAGCROUDDSC","Bloco da nuvem de etiquetas");
define($constpref."_BLOCK_PHOTOS","Fotografias");
define($constpref."_BLOCK_PHOTOSDSC","Fotografias bloqueiam");

//others
define($constpref."_BLOGGER","'s diario");

}
?>
