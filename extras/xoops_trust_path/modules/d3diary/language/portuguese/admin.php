<?php

// D3DIARY IMPORT
define('_MD_D3DIARY_H2_IMPORTFROM','Importar');
define('_MD_D3DIARY_H3_IMPORTDATABASE','Copiar dados para o m�dulo d3diario');
define('_MD_D3DIARY_BTN_DOIMPORT','Executar a importa��o');
define('_MD_D3DIARY_LABEL_SELECTMODULE','Selecionar um m�dulo');
define('_MD_D3DIARY_CONFIRM_DOIMPORT','Voc� realmente deseja executar a importa��o?');

define('_MD_D3DIARY_HELP_IMPORTFROM','Voc� pode importar somente do m�dulo d3diary, minidi�rio, weblogD3 ou d3blog. Para weblogD3, n�o ser� importada mesa de trackback. Para d3blog, ser� importada tamb�m mesa de trackback mas nenhuma fun��o em d3diary, e em ambos caso categoria deveriam ser comprimidos upto 2 camadas antes de execu��o de importar. <br /> <font color="#FF0000"> Tem cuidado que a importa��o de d3diary � tudo escritos elaboradamente. </font>');
define('_MD_D3DIARY_IMPORTDONE','A importa��o est� concluida.');
define('_MD_D3DIARY_ERR_INVALIDMID','N�o foi poss�vel executar a importa��o do m�dulo que voc� selecionou.');
define('_MD_D3DIARY_SQLONIMPORT','A importa��o falhou.<br />Poss�velmente existe diferen�as na estrutura das tabelas do banco de dados, entre as tabelas de importa��o e as tabelas de destino.<br />Por favor, verifique se os dois m�dulos j� foram atualizados para suas vers�es mais recentes.');

define('_MD_D3DIARY_H3_IMPORTCOM','mover os dados dos coment�rios do xoops');
define('_MD_D3DIARY_HELP_COMIMPORT','Importa��o do coment�rio movidos dos coment�rios. <br />Voc� n�o pode desfazer depois da execu��o.');
define('_MD_D3DIARY_CONFIRM_DOCOMIMPORT','Voc� realmente deseja mover os coment�rios?');

define('_MD_D3DIARY_H3_IMPORTNOTIF','Mover os dados de notifica��o do xoops');
define('_MD_D3DIARY_HELP_NOTIFIMPORT','Importa��o de notifica��o movidas de notifica��es. <br />Voc� n�o pode desfazer depois da execu��o.');
define('_MD_D3DIARY_CONFIRM_DONOTIFIMPORT','Voc� realmente deseja mover as notifica��es?');

// D3DIARY PERMISSION
define('_MD_D3DIARY_LANG_PERMISSION_MANAGER','Permiss�es');
define('_MD_D3DIARY_LANG_CATEGORY_NAME','Categoria');
define('_MD_D3DIARY_LANG_CATEGORY_GLOBAL','Geral');
define('_MD_D3DIARY_LANG_GROUP_NAME','Nome do grupo');
define('_MD_D3DIARY_PERMDESC_ALLOW_EDIT','Permitir postar no di�rio');
define('_MD_D3DIARY_PERMDESC_ALLOW_HTML','Permitir post em HTML');
define('_MD_D3DIARY_PERMDESC_ALLOW_REGDATE','Permitir especificar data do envio');
define('_MD_D3DIARY_PERMDESC_ALLOW_GPERM','Permitir especificar permiss�o do grupo');
define('_MD_D3DIARY_PERMDESC_ALLOW_PPERM','Permitir especificar permiss�o do usu�rio');
define('_MD_D3DIARY_PERMDESC_ALLOW_MAILPOST','Permita importa��o de e-mail');
define('_MD_D3DIARY_MESSAGE_DBUPDATE_FAILED','Mudan�a da configura��o das permiss�es falharam');
define('_MD_D3DIARY_MESSAGE_DBUPDATE_SUCCESS','Configura��o das permiss�es foram mudadas');

// For D3pipes Options
define('_MD_D3DIARY_MAXTEXT','Comprimento m�ximo do texto:');
define('_MD_D3DIARY_TOPICSPOSTS','Usar bloco:');
define('_MD_D3DIARY_USEAGGRE','Usar agraga��o com outros f�runs:');
define('_MD_D3DIARY_CATLIMIT','ID da categoria');
define('_MD_D3DIARY_FORUMLIMIT','ID do F�rum');
define('_MD_D3DIARY_DISPLAY_PERSONAL','N�mero m�ximo mostrado por pessoa:');

?>
