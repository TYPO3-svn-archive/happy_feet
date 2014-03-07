<?php
if (!defined( 'TYPO3_MODE' )) {
    die ( 'Access denied.' );
}

t3lib_extMgm::addPageTSConfig(
    '
        # ***************************************************************************************
        # CONFIGURATION of RTE in table "tx_happyfeet_domain_model_footnote", field "description"
        # ***************************************************************************************
        RTE.config.tx_happyfeet_domain_model_footnote.description {
          disableColorPicker = 1
          proc.exitHTMLparser_db=1
          proc.exitHTMLparser_db {
            allowTags = span, b, strong, i, em, u, a, h1, h2, h3, h4, h5, h6, pre
            tags.div.remap = P
          }
        }

        TCEFORM.tx_happyfeet_domain_model_footnote {
            sys_language_uid.disabled = 1
        }

        RTE.default.tx_linkhandler {
          happy_feet {
                label=Happy Feet Fußnoten
                overwriteHandler=happy_feet
                noAttributesForm=1
                linkClassName=happy_feet
            }
        }
        mod.tx_linkhandler.happy_feet < RTE.default.tx_linkhandler.happy_feet
    '
);

t3lib_extMgm::addTypoScriptSetup(
    '
        lib.parseFunc_HappyFeed < lib.parseFunc_RTE
        lib.parseFunc_HappyFeed {
            nonTypoTagStdWrap.encapsLines >
            nonTypoTagStdWrap.encapsLines.wrapNonWrappedLines = | <br />
        }
    '
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['happy_feet'] = 'EXT:happy_feet/Classes/Typo3/Hooks/Tcemain.php:Tx_HappyFeet_Typo3_Hooks_Tcemain';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['typolinkLinkHandler']['happy_feet'] = 'EXT:' . $_EXTKEY . '/Classes/Typo3/Service/LinkHandler.php:&Tx_HappyFeet_Typo3_Service_LinkHandler';