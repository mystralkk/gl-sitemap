<?php

// +---------------------------------------------------------------------------+
// | Sitemap Plugin for Geeklog - The Ultimate Weblog                          |
// +---------------------------------------------------------------------------+
// | geeklog/plugins/sitemap/language/japanese_utf-8.php                       |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2007-2017 mystral-kk - geeklog AT mystral-k DOT net         |
// |                                                                           |
// | Constructed with the Universal Plugin                                     |
// | Copyright (C) 2002 by the following authors:                              |
// | Tom Willett                 -    twillett@users.sourceforge.net           |
// | Blaine Lang                 -    langmail@sympatico.ca                    |
// | The Universal Plugin is based on prior work by:                           |
// | Tony Bibbs                  -    tony@tonybibbs.com                       |
// +---------------------------------------------------------------------------|
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software               |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA|
// |                                                                           |
// +---------------------------------------------------------------------------|

if (stripos($_SERVER['PHP_SELF'], basename(__FILE__)) !== false) {
	die('This file cannot be used on its own.');
}

$LANG_SMAP = array(
    'plugin'            => 'sitemap???????????????',
	'access_denied'     => '???????????????????????????????????????',
	'access_denied_msg' => '????????????????????????????????????????????????Root???????????????????????????????????????????????????IP???????????????????????????????????????',
	'admin'		        => 'sitemap?????????????????????',
	'install_header'	=> 'sitemap????????????????????????????????????/????????????????????????',
	'install_success'	=> 'sitemap????????????????????????????????????????????????????????????',
	'install_fail'  	=> 'sitemap????????????????????????????????????????????????????????????????????????????????????(error.log)????????????????????????',
	'uninstall_success'	=> 'sitemap??????????????????????????????????????????????????????????????????',
	'uninstall_fail'    => 'sitemap??????????????????????????????????????????????????????????????????????????????????????????(error.log)????????????????????????',
	'uninstall_msg'		=> 'sitemap????????????????????????????????????????????????????????????',
	'menu_label'        => '??????????????????',
	'sitemap'           => '??????????????????',
	'submit'            => '??????',
	'all'               => '?????????',
	'article'           => '??????',
	'comments'          => '????????????',
	'trackback'         => '?????????????????????',
	'staticpages'       => '???????????????',
	'calendar'          => '????????????',
	'links'             => '?????????',
	'polls'             => '???????????????',
	'dokuwiki'          => 'DokuWiki',
	'forum'             => '?????????',
	'filemgmt'          => '??????????????????',
	'faqman'            => 'FAQ',
	'mediagallery'      => '????????????????????????',
	'calendarjp'        => '????????????jp',
	'downloads'         => '??????????????????',
	'sitemap_setting'   => '???????????????????????????',
	'sitemap_setting_misc' => '?????????????????????????????????',
	'order'             => '?????????',
	'up'                => '??????',
	'down'              => '??????',
	'anon_access'       => '????????????????????????????????????????????????',
	'sitemap_in_xhtml'  => 'XHTML???????????????',
	'date_format'       => '???????????????',
	'desc_date_format'  => '?????????????????????????????????????????????????????????PHP???<a href="http://www.php.net/manual/ja/function.date.php">date()??????</a>???format?????????????????????????????????',
	'sitemap_items'     => '???????????????????????????????????????',
	'gsmap_setting'     => 'Google???????????????????????????',
	'file_creation'     => '???????????????????????????',
	'google_sitemap_name' => '??????????????????',
	'time_zone'         => '?????????????????????',
	'update_now'        => '????????????????????????',
	'last_updated'      => '??????????????????',
	'unknown'           => '??????',
	'desc_filename'     => '<strong>?????????????????????</strong>?????????Google???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? mobile.xml ????????????????????????',
	'desc_time_zone'    => '<strong>????????????????????????</strong>?????????Geeklog??????????????????????????????????????????????????????<a href="http://ja.wikipedia.org/wiki/ISO_8601">ISO 8601</a>?????????((+|-)hh:mm)???????????????????????????+09:00???????????????+01:00???????????????+01:00?????????????????????+00:00?????????????????????-05:00???????????????????????????-08:00???????????????????????????',
	'gsmap_items'       => 'Google???????????????????????????????????????',
	'item_name'         => '?????????',
	'freq'              => '????????????',
	'always'            => '????????????',
	'hourly'            => '1?????????1?????????',
	'daily'             => '1??????1?????????',
	'weekly'            => '1?????????1?????????',
	'monthly'           => '1?????????1?????????',
	'yearly'            => '1??????1?????????',
	'never'             => '???????????????',
	'priority'          => '?????????',
	'desc_freq'         => '<strong>??????????????????</strong>?????????????????????????????????????????????????????????????????????????????????????????????Google??????????????????????????????????????????????????????????????????????????????Google??????????????????????????????????????????????????????',
	'desc_priority'     => '<strong>???????????????</strong>???????????????????????????<strong>0.0</strong>??????????????????<strong>1.0</strong>???????????????????????????????????????????????????????????????<strong>0.5</strong>?????????',
	
	// Since version 1.1.4
	'common_setting'    => '???????????????',
	'sp_setting'        => '????????????????????????',
	'sp_type'           => '??????????????????????????????????????????',
	'sp_type0'          => '?????????',
	'sp_type1'          => '?????????????????????????????????????????????????????????',
	'sp_type2'          => '????????????????????????????????????????????????????????????',
	'sp_except'         => '?????????????????????ID??????????????????????????????????????????????????????',
	
	// Since version 1.2.2
	'dataproxy_unavailable'	=> '?????????????????????????????????Dataproxy??????????????????????????????????????????????????????????????????????????????????????????',
	
	// Since version 2.0.0
	'sitemap_unavailable'	=> '?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????',
);
