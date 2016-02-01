<?php

/**
 * Title: Sisow - iDEAL Advanced config factory
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Sisow_IDealAdvanced_ConfigFactory extends Pronamic_WP_Pay_Gateways_IDealAdvanced_ConfigFactory {
	public function __construct() {
		parent::__construct( 'Pronamic_WP_Pay_Gateways_Sisow_IDealAdvanced_Config', 'Pronamic_WP_Pay_Gateways_Sisow_IDealAdvanced_TestConfig' );
	}
}
