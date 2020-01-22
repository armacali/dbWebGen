<?php
	//==========================================================================================
	class dbWebGenChart_candlestick extends dbWebGenChart_Google {
	//==========================================================================================

		//--------------------------------------------------------------------------------------
		// form field @name must be prefixed with exact charttype followed by dash
		public function settings_html() {
		//--------------------------------------------------------------------------------------
			return l10n('chart.candlestick.settings')
				. parent::settings_html();
		}

		//--------------------------------------------------------------------------------------
		protected function options() {
		//--------------------------------------------------------------------------------------
			return parent::options() + array(
			);
		}

		//--------------------------------------------------------------------------------------
		// return google charts class name to instantiate
		public function class_name() {
		//--------------------------------------------------------------------------------------
			return 'google.visualization.CandlestickChart';
		}

		//--------------------------------------------------------------------------------------
		// return google charts packages to include
		public function packages() {
		//--------------------------------------------------------------------------------------
			return array('corechart');
		}
	};
?>
