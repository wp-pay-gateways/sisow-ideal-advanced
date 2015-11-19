<?php

class Pronamic_WP_Pay_Gateways_Sisow_IDealAdvanced_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvanced_AbstractIntegration {
	public function __construct() {
		$this->id            = 'sisow-ideal-advanced';
		$this->name          = 'Sisow - iDEAL Advanced';
		$this->url           = 'https://www.sisow.nl/';
		$this->dashboard_url = 'https://www.sisow.nl/Sisow/iDeal/Login.aspx';
		$this->provider      = 'sisow';
		$this->deprecated    = true;
	}
}
