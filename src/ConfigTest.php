<?php

/**
 * Title: Sisow - iDEAL Advanced config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Sisow_IDealAdvanced_ConfigTest extends Pronamic_WP_Pay_Gateways_Sisow_IDealAdvanced_Config {
	public function get_payment_server_url() {
		return 'https://www.sisow.nl/Sisow/iDeal/IssuerHandler.ashx/test';
	}
}
