<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'd3diary' ;
$constpref = "_MB_" . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// definitions for displaying blocks 

define($constpref."_DIARY","Diário");
define($constpref."_NOTITLE","Não existe título");
define($constpref."_EXIST_COMMENTS","Comentários existentes");
define($constpref."_NO_COMMENTS","Não existe comentário");
define($constpref."_MORE","Mais..");
define($constpref."_NOCNAME","Não existe categoria");
define($constpref."_YEAR","/");
define($constpref."_MONTH","/");
define($constpref."_DAY"," ");
define($constpref."_OTHER","Blogger no outro site");

// definitions for displaying d3comment blocks 

define($constpref."_FORUM","Fórum");
define($constpref."_TOPIC","Tópico");
define($constpref."_REPLIES","Respostas");
define($constpref."_VIEWS","Vizualizações");
define($constpref."_VOTESCOUNT","Votos");
define($constpref."_VOTESSUM","Pontuações");
define($constpref."_LASTPOST","Últimos posts");
define($constpref."_LASTUPDATED","Última atualização");
define($constpref."_LINKTOSEARCH","Busca no fórum");
define($constpref."_LINKTOLISTCATEGORIES","Index da categoria");
define($constpref."_LINKTOLISTFORUMS","Index do fórum");
define($constpref."_LINKTOLISTTOPICS","Index do tópico");
define($constpref."_ALT_UNSOLVED","Tópico não resolvido");
define($constpref."_ALT_MARKED","Tópico marcado");

}

?>
