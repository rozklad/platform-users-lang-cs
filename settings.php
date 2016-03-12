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

	'section' => array(
		'general' => 'Obecné',
	),

	'registration' => array(
		'label' => 'Umožnit registraci uživatelů',
		'info'  => 'Umožní nebo zastaví registraci uživatelů kompletně.',
	),

	'activation' => array(
		'label' => 'Aktivace účtu',
		'info'  => 'Změna chování aktivace účtu.',

		// Activation types
		'automatic' => 'Žádná aktivace (okamžitý přístup)',
		'email'     => 'Aktivace e-mailem',
		'admin'     => 'Aktivace správcem',
	),

	'default_group' => array(
		'label' => 'Výchozí uživatelská skupina',
		'info'  => "Nastavením výchozí uživatelské skupiny řeknete, do které skupiny se má nově vytvořený uživatel zařadit.",
	),

);
