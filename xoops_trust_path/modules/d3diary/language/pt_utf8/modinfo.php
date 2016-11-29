<?php
if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'd3diary' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// Module Info

// The name of this module

define($constpref."_DIARY_NAME","D3diario");
define($constpref."_DIARY_DESC","D3diario");
define($constpref."_DIARYLIST","Novos diários");
define($constpref."_EDIT","Escrever no diário");
define($constpref."_CATEGORY","Categoria");
define($constpref."_COMMENT","Lista de comentários");
define($constpref."_CONFIG","Configuração do Diário");
define($constpref."_CONFIG_CATEGORY","Configuração da categoria");
define($constpref."_YES","Sim");
define($constpref."_NO","Não");

// Admin

define($constpref.'_ADMENU_MYLANGADMIN','Adminstração das constantes da linguagem');
define($constpref.'_ADMENU_MYTPLSADMIN','Administração dos modelos');
define($constpref.'_ADMENU_MYBLOCKSADMIN','Administração das permissões e dos Blocos');
define($constpref.'_ADMENU_IMPORT','Importação');

// module config

define($constpref."_MENU_LAYOUT","Leiaute do Menu");
define($constpref."_MENU_LAYOUTDESC","Leiaute do menu dos calendários, etc.");
define($constpref."_MENU_LAYOUT_RIGHT","Mostrar o menu no lado direito");
define($constpref."_MENU_LAYOUT_LEFT","Mostrar o menu no lado esquerdo");
define($constpref."_PREV_CHARMAX","Número máximo de caracteres da lista de conteúdo");
define($constpref."_PREV_CHARMAXDESC","Número máximo de caracteres dos blocos e lista de conteúdo.");
define($constpref."_BLK_DNUM","Núemro máximo de itens da lista de conteúdo");
define($constpref."_BLK_DNUMDESC","Configuração do númemro máximo de itens da lista de conteúdo");
define($constpref."_PHOTO_MAXSIZE","Tamanho máximo da imagem (KB)");
define($constpref."_PHOTO_MAXSIZEDESC","Tamnho máximo da imagem permitido, em (KB)");
define($constpref."_PHOTO_USERESIZE","Salvar imagem encolhida");
define($constpref."_PHOTO_USERESIZEDESC","Salvar imagem encolhida automaticamente, <br/>menos do que 640 pixels.");
define($constpref."_PHOTO_USERESIZE_Y","Encolher imagem");
define($constpref."_PHOTO_USERESIZE_N","Não encolher");
define($constpref."_PHOTO_MAXPICS","Número máximo de imagens");
define($constpref."_PHOTO_MAXPICSDESC","Configuração do número máximo permitido para envio de imagem.");
define($constpref."_USE_OPEN_CAT","Configuração da permissão para cada categoria");
define($constpref."_USE_OPEN_CATDESC","Selecionar Habilitar para utilizar as configurações de permissão e configuração do blog externo de cada categoria.");
define($constpref."_USE_OPEN_CAT_Y","Permitir a configuração de um blog externo para cada categoria: ON");
define($constpref."_USE_OPEN_CAT_N","Permitir a configuração de um blog externo para cada categoria: OFF");
define($constpref."_USE_OPEN_ENTRY","Permitir a configuração de cada post");
define($constpref."_USE_OPEN_ENTRYDESC","Selecionar Habilitar para utilizar a configuração das permissões de cada post.");
define($constpref."_USE_OPEN_ENTRY_Y","Configuração das permissões de cada post: ON");
define($constpref."_USE_OPEN_ENTRY_N","Configuração das permissões de cada post: OFF");
define($constpref."_USE_FRIEND","Configuração da cooperação com módulo Myfriend");
define($constpref."_USE_FRIENDDESC","Habilitar configuração das permissões incluindo ou não a funcão Cooperação co o módulo Myfriend. <br/><br/>Deixe OFF caso você não tenha instalado o XSNS ou o módulo Myfriend.");
define($constpref."_USE_FRIEND_N","Cooperação com o módulo Myfriend: OFF");
define($constpref."_USE_XSNS_Y","Cooperação com o módulo XSNS: ON");
define($constpref."_USE_MYFRIENDS_Y","Cooperação com o módulo Myfriend: ON");
define($constpref."_FRIEND_DIRNAME","Nome do diretório do módulo Myfriend cooperação");
define($constpref."_FRIEND_DIRNAMEDESC","Informe o nome do diretório, se você usa a funçao cooperação com o módulo Myfriend.");
define($constpref."_USE_TAG","Função etiqueta ON/OFF");
define($constpref."_USE_TAGDESC","Selecione a área para mostrar a nuvem de etiquetas, caso você esteja usando a função etiqueta.");
define($constpref."_USE_TAG_N","Funçao etiqueta: OFF");
define($constpref."_USE_TAG_INDEXONLY","Mostrar a nuvem de etiquetas na Página Index");
define($constpref."_USE_TAG_ALSODIARYLIST","Mostrar a nuvem de etiquetas em todas as páginas index e misturar com a lista da página.");
define($constpref."_USE_SIMPLECOMMENT","Modo comentário");
define($constpref."_USE_SIMPLECOMMENTDESC","Você pode usar o formulário de comentários fácil ao invés do formulário de comentários original do Xoops. <br/><br/> Convidado não pode escrever usando o o formulário de comentário fácil. ");
define($constpref."_USE_SIMPLECOMMENT_Y","Usar o Formulário de comentário fácil");
define($constpref."_USE_SIMPLECOMMENT_N","Usar o formulário de comentários original do Xoops");

//d3comment integration

define($constpref."_COM_DIRNAME","Nome do diretório para integração de comentários com o d3forum");
define($constpref."_COM_DIRNAMEDSC","Quando usar o sistema de integração de comentários d3. <br/>escreva seu diretório d3forum (html) <br/>Deixe isso vazio, se você não usar comentários ou usar o sistema de comentários do xoops.");
define($constpref."_COM_FORUMID","Número do forum para a integração de comentário com o d3forum");
define($constpref."_COM_FORUMIDDSC","Escreva o ID do forum, quando você configurar o diretório acima.");
define($constpref."_COM_ORDER","Classificação da integração de comentários");
define($constpref."_COM_ORDERDSC","Quando você configurar a integração de comentários, selecione mostrar a ordem dos posts de comentário");
define($constpref."_COM_VIEW","Vizualização da integração de comentários");
define($constpref."_COM_VIEWDSC","Selecione encolhido ou expandido");
define($constpref."_COM_POSTSNUM","Número máximo de posts mostrados na integração de cometários");
define($constpref."_COM_ANCHOR","Entrada âncora da integração de cometários");
define($constpref."_COM_ANCHORDSC","A entrada âncora padrão é 'post_path'.<br />Se você usar 'post_id' para múltiplos tópicos de uma entrada, <br /> você deve editar o modelo do d3forum.");
define($constpref."_USE_COM_ANCHOR_UNIQUEPATH","Usar o padrão d3forum 'post_path'");
define($constpref."_USE_COM_ANCHOR_POSTNUM","Usar 'post_id'");

//notifications

define($constpref."_GLOBAL_NOTIFY","Todo o Diário persoal");
define($constpref."_GLOBAL_NOTIFYDSC","Todo o Diário persoal");
define($constpref."_BLOGGER_NOTIFY","Especificado como Diário de Pessoal");
define($constpref."_BLOGGER_NOTIFYDSC","Especificado como Diário de Pessoal");
define($constpref."_GLOBAL_NEWENTRY_NOTIFY","Novo Diário");
define($constpref."_GLOBAL_NEWENTRY_NOTIFYCAP","Notifique-me de todos os novos diários pessoais");
define($constpref."_GLOBAL_NEWENTRY_NOTIFYDSC","Notifique-me de todos os novos diários pessoais");
define($constpref."_GLOBAL_NEWENTRY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} novo diário");
define($constpref."_BLOGGER_NEWENTRY_NOTIFY","Especificado como Diário Pessoal");
define($constpref."_BLOGGER_NEWENTRY_NOTIFYCAP","Notifique-me deste novo diário pessoal");
define($constpref."_BLOGGER_NEWENTRY_NOTIFYDSC","Notifique-me deste novo diário pessoal");
define($constpref."_BLOGGER_NEWENTRY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} novo diário");
define($constpref."_BLOGGER_COMMENT_NOTIFY","Comentário da pessoa especificada");
define($constpref."_BLOGGER_COMMENT_NOTIFYCAP","Notifique-me de comentário desta pessoa");
define($constpref."_BLOGGER_COMMENT_NOTIFYDSC","Notifique-me de comentário desta pessoa");
define($constpref."_BLOGGER_COMMENT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} novo comentário");
define($constpref."_ENTRY_NOTIFY","Comentário deste post");
define($constpref."_ENTRY_NOTIFYDSC","Notifique-me deste post");

// Block

define($constpref."_BLOCK_NEWENTRY","Novo Diário ou Blog");
define($constpref."_BLOCK_NEWENTRYDSC","Novos posts - Novo Diário");
define($constpref."_BLOCK_BLOGGER","Nova lista de Bloguers");
define($constpref."_BLOCK_BLOGGERDSC","Nova lista de Bloguers");
define($constpref."_BLOCK_D3COMPOSTS","Nova lista de comentários de post");
define($constpref."_BLOCK_D3COMPOSTSDSC","Validar para integração de comentários");
define($constpref."_BLOCK_D3COMTOPICS","Nova lista de comentários de tópicos");
define($constpref."_BLOCK_D3COMTOPICSDSC","Validar para integração de comentário");

//others

define($constpref."_BLOGGER","Bloguers");

}
?>
