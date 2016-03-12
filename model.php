<?php
/**
 * Part of the Platform Users extension.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the WTFPL license.
 *
 * @package    Platform Users extension
 * @version    2.0.3
 * @author     Sanatorium
 * @license    WTFPL
 * @copyright  2016, Sanatorium
 * @link       http://sanatorium.ninja
 */

return [

	'general' => [

		'legend'                     => 'Details',

        'id'                         => '#',

        'created_at'                 => 'Vytvořeno',

        'fullname'                   => 'Jméno',

		'name'                       => 'Jméno',

		'first_name'                 => 'Křestní jméno',
		'first_name_help'            => 'Křestní jméno uživatele.',

		'last_name'                  => 'Příjmení',
		'last_name_help'             => 'Příjmení uživatele.',

		'email'                      => 'Email',
		'email_help'                 => 'E-mailová adresa uživatele.',
	],

	'authorization' => [

		'legend'                     => 'Autorizace',

		'roles'                      => 'Role',
		'roles_help'                 => 'Vyberte, které role chcete přiřadit uživateli.',

		'activated'                  => 'Aktivován',
		'activated_help'             => 'Vyberte pokud chcete, aby byl uživatel automaticky aktivován.',
	],

	'authentication' => [

		'legend'                     => 'Autentifikace',

		'password_confirmation'      => 'Potvrzení hesla',
		'password_confirmation_help' => 'Zadejte heslo znovu pro potvrzení.',

		'create' => [
			'password'      => 'Heslo',
			'password_help' => 'Napište heslo uživatele.',
		],

		'update' => [
			'password'      => 'Změnit heslo',
			'password_help' => 'Napište nové heslo uživateli nebo nechte pole prázdné.',
		],

	],

	'permissions' => [

		'legend'    => 'Oprávnění',

	],

];
