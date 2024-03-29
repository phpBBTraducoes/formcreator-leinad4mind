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
	'CLOSE_FORM'				=> 'Cancelar',
	'OPEN_FORM'					=> 'Modo Formulário',
	'OPEN_POST'					=> 'Modo Post',
	'FORM_MOD_PREVIEW'		 	=> 'Alterne para visualizar mantendo os dados do formulário atual...',
	'FORM_MOD_SUBMIT'			=> 'Adicione os dados do formulário à mensagem e post...',
	'OPEN_FORM_EXPLAIN'			=> 'Mudar para o Modo Formulário...',
	'REFRESHING_FORM'			=> 'O atual Fórum selecionado é',
	'REQUIRED'				 	=> 'Você não digitou todos os elementos necessários!',
	'MANDATORY'					=> 'Itens marcados com o asterisco são obrigatórios.',

	'ERROR_MANDATORY'			=> 'O campo %s é obrigatório.',
	'ERROR_MIN_MAX_CHECKBOX'	=> 'Você precisa selecionar entre %d e %d itens para %s.', 
	'ERROR_MIN_CHECKBOX'		=> [
		1 => 'Você precisa selecionar pelo menos %d item para %s.',
		2 => 'Você precisa selecionar pelo menos %d itens para %s.',
	],
	'ERROR_MAX_CHECKBOX'		=> [
		1 => 'Você pode selecionar no máximo %d item para %s.',
		2 => 'Você pode selecionar no máximo %d itens para %s.',
	],
]);
