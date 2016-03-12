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

return array(

	// General messages
	'user_not_found'      => 'Špatný e-mail nebo heslo.',
	'user_already_exists' => 'Uživatel již existuje.',
	'user_is_activated'   => 'Váš účet je již aktivní.',
	'user_not_activated'  => 'Váš účet není aktivní.',
	'user_is_banned'      => 'Váš účet je blokovaný.',
	'invalid_email'       => 'E-mailová adresa je nesprávná nebo nebyla nalezena.',
	'invalid_password'    => 'Heslo je nesprávné.',

	'throttling' => array(
		'global' => 'Bylo učiněno příliš mnoho neúspěšných pokusů o přihlášení. Přihlášení je znemožněno po dalších :delay sekund.',
		'ip' => 'Vaše IP adresa je zdrojem podezřelé aktivity. Bude blokována dalších :delay sekund.',
		'user' => 'Bylo učiněno příliš mnoho neúspěšných pokusů o přihlášení na váš účet. Prosím zkuste se přihlásit znovu za :delay sekund.',
	),

	// Success messages
	'success' => array(
		'login'    => 'Jste úspěšně přihlášení.',
		'register' => 'Účet byl úspěšně vytvořen.',
		'activate' => 'Váš účet byl aktivován, děkujeme za registraci.',

		'reset-password-confirm' => 'Váš požadavek na změnu hesla byl úspěšně zpracován. Přihlašte se nyní novým heslem.',
	),

	// Error messages
	'error' => array(
		'login'    => 'Došlo k chybě při přihlašování. Prosím, zkuste se přihlásit znovu.',
		'register' => 'Došlo k chybě při vytváření vašeho účtu. Prosím, zkuste vytvořit účet znovu.',
		'activate' => 'Váš účet je již aktivován.',

		'reset-password'         => 'Vaše heslo nebylo možné obnovit. Prosím, ujistěte se, že používáte správnou e-mailovou adresu.',
		'reset-password-confirm' => 'Vaše heslo nebylo možné obnovit, protože kód pro obnovu hesla není správný. Prosím, zažádejte znovu o změnu hesla.',
	),

);
