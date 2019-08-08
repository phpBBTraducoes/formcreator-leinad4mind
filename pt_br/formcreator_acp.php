<?php
/**
*
* @package phpBB Extension - Form Creator
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net & michaelo - http://www.phpbbireland.com
* @copyright (c) 2019 Leinad4Mind - https://leinad4mind.top/forum
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 2.2.5] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'MODE'						=> 'Modo',
	'ELEMENTS'					=> 'Elementos',
	'FORM_NAME'					=> 'Nome do fórum',
	'FORUM_ID'					=> 'ID do fórum',
	'ACP_FORM_CURRENT'		 	=> 'Atualizar formulário atual',
	'ACP_FORM_CREATOR'			=> 'Criador de Formulários',
	'ACP_FORM_CREATOR_EXPLAIN'	=> 'Com esta ferramenta você pode criar e gerenciar formulários para o seu fórum.',
	'ACP_FORM_EXT_NOTE'			=> '<br><strong>Nota:</strong> Todas as ações são realizadas no formulário atualmente selecionado/exibido, nenhuma confirmação é implementada...',

	'ACP_FORM_CREATOR_FAQ' => '<strong>Como começar?</strong><br>
									&nbsp; &bull; Você só precisa primeiro selecionar o fórum onde você deseja criar o formulário.<br>
									<br>
									<strong>Como eu posso fazer isso?</strong><br>
									&nbsp; &bull; Basta selecionar um novo fórum na caixa suspensa <strong><i>Fórum atual</i></strong>...<br>
									<br>
									<strong>E agora?</strong><br>
									&nbsp; &bull; O próximo passo seria adicionar novos elementos de formulário<br>
									<br>
									<strong>Como adiciono um novo elemento de formulário?</strong><br> 
									&nbsp; &bull; Use <strong><i>Adicionar um novo elemento de formulário</i></strong> na parte inferior.<br>
									<br>
									<strong>Depois de adicionar todos os elementos de formulário que eu quero, ele salva automaticamente?</strong><br>
									&nbsp; &bull; Sim, quando você adiciona o elemento de formulário, ele salva automaticamente no formulário atual, mas se você fizer alterações nos elementos do formulário no <strong><i>Atualizar formulário atual</i></strong>, precisará clicar em atualizar para salvar as alterações!<br>
									<br>
									<strong>Alguns campos não fazem sentido para o meu tipo de elemento, algo ruim acontecerá se eu preencher esses campos?</strong><br>
									&nbsp; &bull; Nada de ruim vai acontecer. Você apenas colocará lixo no banco de dados. Toda essa informação será descartada. É por isso que é recomendado adicionar um novo elemento de formulário vazio e, em seguida, atualizá-lo.<br>
									<br>
									<strong>Como faço para excluir um formulário?</strong><br>
									&nbsp; &bull; Basta apagar todos os elementos do formulário...<br>
									<br>
									<br>
									<strong>O que é o Nome Antes/Depois?</strong><br>
									&nbsp; &bull; Esses campos aceitam o BBCode, e o que quer que você escreva lá aparecerá antes e depois do Nome de Entrada na postagem final, para que você possa personalizar o Nome da Entrada.<br>
									<br>
									<strong>Posso ver um exemplo para os campos Nome Antes/Depois?</strong><br>
									&nbsp; &bull; Claro. Você pode adicionar <i>[b]</i> no campo Antes e <i>[/b]</i> no campo Depois e se o Nome da Entrada for <i>Título</i>, a postagem será analisado em: <i>[b]Title[/b]</i><br>
									<br>
									<strong>O que é o Nome de Entrada?</strong><br>
									&nbsp; &bull; Really? This is the question on the form field, the text before the input field, and that text may or may not be imported to the final post.<br>
									<br>
									<strong>What is Entry Explain?</strong><br>
									&nbsp; &bull; This is an optional field, if you fill it, it will appear below the Entry Name on the form, so you can insert a little explanation text. It supports BBCode and line break too.<br>
									<br>
									<strong>What is Hint?</strong><br>
									&nbsp; &bull; Hint is optional and is what appears inside the input fields, so you can provide an idea of what should be filled on the input box. Its good idea to use in some cases to avoid abusing the Entry Explain. For selectbox the hint will be the default first element.<br>
									<br>
									<strong>What is Options?</strong><br>
									&nbsp; &bull; It only works on some element types: selectbox, radiobuttons, checkbox and separator. With that said, it\'s a field where you\'ll insert the options for those element types.<br>
									<br>
									<strong>Can I see an example for Options fields? I am still confuse.</strong><br>
									&nbsp; &bull; Sure. You can add for example genres as: <i>Action, Adventure, Horror, Romance, Sci-Fi</i>, and the user will be able to just select the options, instead of writing.<br>
									<br>
									<strong>That makes sense for selectbox, radiobuttons and checkbox, but separator? What is it? </strong><br>
									&nbsp; &bull; Yes, that one is an exception. That field is only for form layout customization. A way to customize how the form itself will look like.<br>
									<br>
									<strong>Great! And do I always need to use a Comma to separate the words?</strong><br>
									&nbsp; &bull; You can use a comma or a line break and there is a hidden feature too. If you use "Administrator => Adm, Moderator => Mod, User => U", where the former one will appear on the form and the latter one on the post.<br>
									<br>
									<strong>What is Min/Max?</strong><br>
									&nbsp; &bull; This only works on Checkboxes since it\'s the only element type where you can select multiple items and with those fields you can require the user to choose between a min and max values. If you put Min: 1 and Max: 3, the user will need to choose at least one and less than 3 options.<br>
									<br>
									<strong>What is Value Before/After?</strong><br>
									&nbsp; &bull; It\'s similar to the <i>Name Before/After</i>. It accepts BBCode as well and will appear before and after the value that the user inserted.<br>
									<br>
									<strong>Can I still see an example for Value Before/After fields?</strong><br>
									&nbsp; &bull; Why not? You can add <i>[color=#ff0000]</i> on the Before field and <i>[/color]</i> on the After field and lets say the Entry Name is <i>Movie Title</i>. Then the user inserts on the form something as <i>Titanic</i> and when he submits, the post will be parsed into: <i>[color=#ff0000]Titanic[/color]</i><br>
									<br>
									<strong>Is there anything else that I should know?</strong><br>
									&nbsp; &bull; I\'m glad you asked! Some fields as Entry Name, Explain, Hint and Options are translatable. This means you can insert language variables {L_LANGUAGE_VARIABLE} so the form will be multilingual.<br>
									<br>
									<strong>WOW! Awesome! But where can I add the Language Variables?</strong><br>
									&nbsp; &bull; Just edit the root/ext/leinad4mind/formcreator/language/COUNTRY/common.php file and add new variables, so you can use at ACP afterwards.<br>
									<br>
									<strong>&#8730;</strong> The checkmark character indicates the item is mandatory and cannot be empty, so it will force the user to fill it.<br>
									<strong><i class="fa fa-eye" aria-hidden="true"></i></strong> The eye character indicates the entry name of that item will not be imported to the post submitted.<br>',

	'CURRENT_FORUM'			 	=> 'Fórum atual',
	'FORM_ADD_ITEM'				=> 'Adicionar um novo elemento de formulário',
	'FORM_CHECKBOX'				=> 'Caixa de verificação',
	'FORM_DETAILS'			 	=> 'Todos os formulários usam um arquivo de modelo genérico: styles/YOUR_STYLE/template/forms/form_creator.html',
	'FORM_ELEMENT_TYPE'					=> 'Tipo de elemento',
	'FORM_ELEMENT_HINT'					=> 'Sugestão',
	'FORM_ELEMENT_OPTIONS_SEPARATOR'	=> 'Opções de separador',
	'FORM_ELEMENT_NAME_VISIBLE'			=> 'Mostrar/ocultar o nome do elemento no formulário final.',
	'FORM_ELEMENT_NAME'					=> 'Nome de entrada',
	'FORM_ELEMENT_EXPLAIN'				=> 'Explicação de entrada',
	'FORM_ELEMENT_NAME_EXPLAIN'			=> 'Nome da Entrada/Explicação',
	'FORM_ELEMENT_OPTIONS'				=> 'Opções',
	'FORM_ELEMENT_MIN_MAX'				=> 'Min/Max',
	'FORM_ELEMENT_MIN'					=> 'Min',
	'FORM_ELEMENT_MAX'					=> 'Max',
	'FORM_ELEMENT_NAME_BEFORE_AFTER'	=> 'Nome antes/depois',
	'FORM_ELEMENT_VALUE_BEFORE_AFTER'	=> 'Valor antes/depois',
	'FORM_EMAILBOX'				=> 'Email',
	'FORM_INPUTBOX'				=> 'Texto',
	'FORM_CREATOR_ACP_RETURN'	=> 'Voltar para gerenciar formulários',
	'FORM_MANAGE'				=> 'Gerenciar este formulário',
	'FORM_MANAGE_EXPLAIN'		=> 'Aqui você pode modificar todos os elementos do formulário atual, basta editar os campos e pressionar o botão <strong>Atualizar</strong>...',

	'FORM_NEW_ITEM_EXPLAIN'		=> '<pre style="font-size:11px; line-height: 100%;"><strong><u>Elementos de formulário suportados</u></strong><br>
									<strong>Caixa de entrada:</strong>		Até 255 caracteres<br>
									<strong>Caixa de texto:</strong>	 	Várias linhas de texto organizadas como 3 linhas por 76 colunas.<br>
									<strong>Caixa de verificação:</strong>		Uma ou mais opções podem ser selecionadas.<br>
									<strong>Botão de radio:</strong> 		Apenas uma opção pode ser selecionada.<br>
									<strong>Caixa de seleção:</strong>		Uma opção de uma lista suspensa.<br>
									<strong>Email:</strong>			Endereço de Email Válido.<br>
									<strong>Senha:</strong>		Apenas para fins de teste...<br>
									<strong>URL:</strong>			Um URL válido deve ser inserido.<br>
									<strong>Anexo:</strong>		Adicione um arquivo ao sistema de anexos.<br>
									<strong>Número:</strong>			Somente números 0-9 são permitidos.<br>
									<strong>Data:</strong>			Abre um seletor de datas.<br>
									<strong>Hora:</strong>			Abre um seletor de tempo.<br>
									<strong>Separador:</strong>			Apenas para personalização de layout de formulário.<br>
									<br></pre>',

	'FORM_NO_FORM'			 	=> 'Não há formulários atribuídos a: <strong>%s</strong>...<br>Para adicionar um novo formulário a este fórum, basta adicionar um elemento de formulário abaixo...',
	'FORM_RADIOBOX'				=> 'Botões do rádio',
	'FORM_PASSWORDBOX'			=> 'Senha',
	'FORM_SELECTBOX'			=> 'Caixa de seleção',
	'FORM_TXTBOX'				=> 'Caixa de texto',
	'FORM_URLBOX'				=> 'URL',
	'FORM_ATTACH'				=> 'Anexo',
	'FORM_NUMBER'				=> 'Número',
	'FORM_DATE'					=> 'Data',
	'FORM_TIME'					=> 'Hora',
	'FORM_SEPARATOR'			=> 'Separador',
	'HIDE_FORM_INFO'			=> 'Esconder informação',
	'HIDE_PREVIEW'			 	=> 'Esconder visualização',
	'HIDE_COPY'				 	=> 'Esconder formulário de cópia',
	'HOW_TO'					=> '<strong>Ajuda Adicional...</strong>',
	'HOW_TO_MORE'				=> 'Mais informações...',
	'HOW_TO_HIDE'				=> '<strong>Esconder</strong>',
	'NDX'						=> 'NDX',
	'NDX_ORDER'					=> 'Ordem do índice (a ordem em que os itens aparecem no formulário)',
	'FORMS_MOD_SAMPLE'		 	=> 'Renderizando o formulário atual para auxiliar somente a visualização ... não um formulário de trabalho.',
	'SHOW_FORM_INFO'			=> 'Mais informações sobre os tipos de elementos',
	'SHOW_PREVIEW'			 	=> 'Previsualizar o formulário',
	'SHOW_COPY'					=> 'Copiar formulário',
	'COPY_FORM'					=> 'Copiar formulário para fóruns selecionados',
	'COPY_FORM_EXPLAIN'			=> 'Isso excluirá todos os elementos de formulário existentes nos fóruns de destino selecionados!',
	'COPY_FORM_SUCCESS'			=> 'Os elementos do formulário foram copiados para todos os fóruns selecionados.',

	'SHOW_FORM_DEFAULT'			=> 'Mostrar formulário por padrão',
	'FORCE_FORM'				=> 'Forçar formulário',
]);
