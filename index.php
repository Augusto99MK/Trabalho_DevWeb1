<?php
/** Arquivo index.php **
 *
 *	Arquivos de configuração:
 *		- config/constantes.php
 *
 *	Classes utilizadas:
 *		- Layout (contém Cabecalho e Container)
 *		- Cabecalho
 *		- Container (contém Secao e Rodape)
 *		- Secao
 *		- Rodape
 *
 *	Objeto instanciado
 *		- $layout (Layout)
 */
 
 // Requerendo arquivo de configuração de constantes
 require ("config/constantes.php");
 
 // Requerendo classes
 require ("classes/layout.php");
 require ("classes/cabecalho.php");
 require ("classes/container.php");
 require ("classes/secao.php");
 require ("classes/rodape.php");
 
 // Instanciando um objeto Layout
 $layout = new Layout();
 
 // Gerando código HTML da página
 $layout->gerarHtml();
 
?>