<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

/** @todo move tt_news related code to a separate extension */
// Include static TypoScript configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Linkhandler');

// hide the button saveDocView for tt_news categories
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSconfig('
	options.saveDocView.tt_news = 1
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
RTE.default.tx_linkhandler {
	tt_news {
		label = News
		listTables = tt_news
	}
}

mod.tx_linkhandler {
	tt_news {
		label = News
		listTables = tt_news
		previewPageId = 1
	}
}

mod.tx_linkhandler {
	bolius_gallery {
		label = Bolius_gallery
		listTables = sys_file_collection
		previewPageId = 24
	}
}
');
