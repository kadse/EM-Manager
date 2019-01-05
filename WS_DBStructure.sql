SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `ws_admin` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `passwort` varchar(40) DEFAULT NULL,
  `passwort_neu` varchar(40) DEFAULT NULL,
  `passwort_neu_angefordert` int(10) NOT NULL DEFAULT '0',
  `email` varchar(100) DEFAULT NULL,
  `r_admin` enum('1','0') NOT NULL DEFAULT '0',
  `r_adminuser` enum('1','0') NOT NULL DEFAULT '0',
  `r_user` enum('1','0') NOT NULL DEFAULT '0',
  `r_daten` enum('1','0') NOT NULL DEFAULT '0',
  `r_staerken` enum('1','0') NOT NULL DEFAULT '0',
  `r_spiele` enum('1','0') NOT NULL DEFAULT '0',
  `r_news` enum('1','0') NOT NULL DEFAULT '0',
  `r_faq` enum('1','0') NOT NULL DEFAULT '0',
  `r_umfrage` enum('1','0') NOT NULL DEFAULT '0',
  `r_kalender` enum('1','0') NOT NULL DEFAULT '0',
  `r_seiten` enum('1','0') NOT NULL DEFAULT '0',
  `r_design` enum('1','0') NOT NULL DEFAULT '0',
  `r_demo` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

CREATE TABLE IF NOT EXISTS `ws_aufstellung` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `verein_id` int(10) NOT NULL DEFAULT '0',
  `datum` int(11) NOT NULL DEFAULT '0',
  `formation` varchar(5) DEFAULT NULL,
  `taktik` enum('Normal','Offensiv','Defensiv') NOT NULL DEFAULT 'Normal',
  `spieler1` int(10) NOT NULL DEFAULT '0',
  `spieler2` int(10) NOT NULL DEFAULT '0',
  `spieler3` int(10) NOT NULL DEFAULT '0',
  `spieler4` int(10) NOT NULL DEFAULT '0',
  `spieler5` int(10) NOT NULL DEFAULT '0',
  `spieler6` int(10) NOT NULL DEFAULT '0',
  `spieler7` int(10) NOT NULL DEFAULT '0',
  `spieler8` int(10) NOT NULL DEFAULT '0',
  `spieler9` int(10) NOT NULL DEFAULT '0',
  `spieler10` int(10) NOT NULL DEFAULT '0',
  `spieler11` int(10) NOT NULL DEFAULT '0',
  `ersatz1` int(10) NOT NULL DEFAULT '0',
  `ersatz2` int(10) NOT NULL DEFAULT '0',
  `ersatz3` int(10) NOT NULL DEFAULT '0',
  `ersatz4` int(10) NOT NULL DEFAULT '0',
  `ersatz5` int(10) NOT NULL DEFAULT '0',
  `w1_raus` int(10) NOT NULL DEFAULT '0',
  `w1_rein` int(10) NOT NULL DEFAULT '0',
  `w1_minute` tinyint(2) NOT NULL DEFAULT '0',
  `w2_raus` int(10) NOT NULL DEFAULT '0',
  `w2_rein` int(10) NOT NULL DEFAULT '0',
  `w2_minute` tinyint(2) NOT NULL DEFAULT '0',
  `w3_raus` int(10) NOT NULL DEFAULT '0',
  `w3_rein` int(10) NOT NULL DEFAULT '0',
  `w3_minute` tinyint(2) NOT NULL DEFAULT '0',
  `ersatz6` int(10) NOT NULL DEFAULT '0',
  `ersatz7` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

CREATE TABLE IF NOT EXISTS `ws_auswaerts` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `art` enum('Auswaertshotels','Flugzeug','Heimhotel') NOT NULL DEFAULT 'Auswaertshotels',
  `kategorie` smallint(3) NOT NULL DEFAULT '0',
  `kosten` int(11) NOT NULL DEFAULT '0',
  `frische` smallint(5) NOT NULL DEFAULT '0',
  `zufriedenheit` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

CREATE TABLE IF NOT EXISTS `ws_beobachtungsliste` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `spieler_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=712 ;

CREATE TABLE IF NOT EXISTS `ws_bilder` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titel` varchar(20) DEFAULT NULL,
  `dateiname` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ws_briefe` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `empfaenger_id` int(10) NOT NULL DEFAULT '0',
  `absender_id` int(10) NOT NULL DEFAULT '0',
  `absender_name` varchar(50) DEFAULT NULL,
  `datum` int(10) NOT NULL DEFAULT '0',
  `betreff` varchar(50) DEFAULT NULL,
  `nachricht` text,
  `gelesen` enum('1','0') NOT NULL DEFAULT '0',
  `typ` enum('eingang','ausgang') NOT NULL DEFAULT 'eingang',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=589 ;

CREATE TABLE IF NOT EXISTS `ws_elfdestages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `spiel_id` int(10) NOT NULL DEFAULT '0',
  `liga_id` varchar(6) NOT NULL DEFAULT '0',
  `saison_id` int(6) NOT NULL DEFAULT '0',
  `spieltag` int(6) NOT NULL DEFAULT '0',
  `spieler_id` int(10) NOT NULL DEFAULT '0',
  `team_id` int(10) NOT NULL DEFAULT '0',
  `position` varchar(20) DEFAULT NULL,
  `durchschnitt_staerke` tinyint(3) NOT NULL DEFAULT '0',
  `note` double(4,2) NOT NULL DEFAULT '0.00',
  `note_schnitt` double(4,2) NOT NULL DEFAULT '0.00',
  `minuten_gespielt` tinyint(2) NOT NULL DEFAULT '0',
  `karte_gelb` tinyint(1) NOT NULL DEFAULT '0',
  `karte_rot` tinyint(1) NOT NULL DEFAULT '0',
  `verletzt` tinyint(2) NOT NULL DEFAULT '0',
  `gesperrt` tinyint(2) NOT NULL DEFAULT '0',
  `tore` tinyint(2) NOT NULL DEFAULT '0',
  `feld` enum('1','Ersatzbank','Ausgewechselt') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74373 ;

CREATE TABLE IF NOT EXISTS `ws_elfdestages_temp` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `spiel_id` int(10) NOT NULL DEFAULT '0',
  `liga_id` varchar(6) NOT NULL DEFAULT '0',
  `saison_id` int(6) NOT NULL DEFAULT '0',
  `spieltag` int(6) NOT NULL DEFAULT '0',
  `spieler_id` int(10) NOT NULL DEFAULT '0',
  `team_id` int(10) NOT NULL DEFAULT '0',
  `position` varchar(20) DEFAULT NULL,
  `durchschnitt_staerke` tinyint(3) NOT NULL DEFAULT '0',
  `note` double(4,2) NOT NULL DEFAULT '0.00',
  `note_schnitt` double(4,2) NOT NULL DEFAULT '0.00',
  `minuten_gespielt` tinyint(2) NOT NULL DEFAULT '0',
  `karte_gelb` tinyint(1) NOT NULL DEFAULT '0',
  `karte_rot` tinyint(1) NOT NULL DEFAULT '0',
  `verletzt` tinyint(2) NOT NULL DEFAULT '0',
  `gesperrt` tinyint(2) NOT NULL DEFAULT '0',
  `tore` tinyint(2) NOT NULL DEFAULT '0',
  `feld` enum('1','Ersatzbank','Ausgewechselt') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=695078 ;

CREATE TABLE IF NOT EXISTS `ws_faq` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `datum` int(10) NOT NULL DEFAULT '0',
  `frage` varchar(200) DEFAULT NULL,
  `antwort` text,
  `c_br` enum('1','0') NOT NULL DEFAULT '0',
  `c_links` enum('1','0') NOT NULL DEFAULT '0',
  `c_smilies` enum('1','0') NOT NULL DEFAULT '0',
  `hot` enum('1','0') NOT NULL DEFAULT '0',
  `kategorie` varchar(20) DEFAULT NULL,
  `ordnungsnummer` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ws_formation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `formation` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `position1` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `position2` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `position3` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `position4` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `position5` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `position6` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `position7` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `position8` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `position9` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `position10` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `position11` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=64 ;

CREATE TABLE IF NOT EXISTS `ws_freundschaft` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `heim_id` int(10) NOT NULL DEFAULT '0',
  `gast_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1912 ;

CREATE TABLE IF NOT EXISTS `ws_kalender` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `datum` int(10) NOT NULL DEFAULT '0',
  `name` varchar(25) DEFAULT NULL,
  `beschreibung` varchar(255) DEFAULT NULL,
  `typ` enum('public','privat','manager') NOT NULL DEFAULT 'public',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `ws_konto` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `verein_id` int(10) NOT NULL DEFAULT '0',
  `absender` varchar(100) DEFAULT NULL,
  `betrag` int(10) NOT NULL DEFAULT '0',
  `datum` int(11) NOT NULL DEFAULT '0',
  `verwendung` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28535 ;

CREATE TABLE IF NOT EXISTS `ws_liga` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `kurz` varchar(5) DEFAULT NULL,
  `land` varchar(25) DEFAULT NULL,
  `p_steh` tinyint(3) NOT NULL DEFAULT '0',
  `p_sitz` tinyint(3) NOT NULL DEFAULT '0',
  `p_haupt_steh` tinyint(3) NOT NULL DEFAULT '0',
  `p_haupt_sitz` tinyint(3) NOT NULL DEFAULT '0',
  `p_vip` tinyint(3) NOT NULL DEFAULT '0',
  `preis_steh` smallint(5) NOT NULL DEFAULT '0',
  `preis_sitz` smallint(5) NOT NULL DEFAULT '0',
  `preis_vip` smallint(5) NOT NULL DEFAULT '0',
  `admin_id` smallint(5) NOT NULL DEFAULT '0',
  `nationalteam` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

CREATE TABLE IF NOT EXISTS `ws_livespiel` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `spiel_id` int(10) NOT NULL DEFAULT '0',
  `minute` int(10) NOT NULL DEFAULT '0',
  `team` varchar(40) DEFAULT NULL,
  `text` text,
  `result` varchar(40) DEFAULT NULL,
  `schuetze` varchar(40) DEFAULT NULL,
  `spieler_id` int(10) NOT NULL DEFAULT '0',
  `vorlagengeber` varchar(30) NOT NULL,
  `vorlagengeber_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36468 ;

CREATE TABLE IF NOT EXISTS `ws_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `datum` int(10) NOT NULL DEFAULT '0',
  `autor_id` smallint(5) NOT NULL DEFAULT '0',
  `bild_id` int(10) NOT NULL DEFAULT '0',
  `titel` varchar(100) DEFAULT NULL,
  `nachricht` text,
  `linktext1` varchar(100) DEFAULT NULL,
  `linkurl1` varchar(250) DEFAULT NULL,
  `linktext2` varchar(100) DEFAULT NULL,
  `linkurl2` varchar(250) DEFAULT NULL,
  `linktext3` varchar(100) DEFAULT NULL,
  `linkurl3` varchar(250) DEFAULT NULL,
  `c_br` enum('1','0') NOT NULL DEFAULT '0',
  `c_links` enum('1','0') NOT NULL DEFAULT '0',
  `c_smilies` enum('1','0') NOT NULL DEFAULT '0',
  `status` enum('1','2','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ws_online` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `zeit` int(10) NOT NULL DEFAULT '0',
  `ip` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=647821 ;

CREATE TABLE IF NOT EXISTS `ws_saison` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `liga_id` smallint(5) NOT NULL DEFAULT '0',
  `platz_1_id` int(10) NOT NULL DEFAULT '0',
  `platz_2_id` int(10) NOT NULL DEFAULT '0',
  `platz_3_id` int(10) NOT NULL DEFAULT '0',
  `platz_4_id` int(10) NOT NULL DEFAULT '0',
  `platz_5_id` int(10) NOT NULL DEFAULT '0',
  `beendet` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

CREATE TABLE IF NOT EXISTS `ws_schiri` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vorname` varchar(30) CHARACTER SET latin1 COLLATE latin1_german1_ci DEFAULT NULL,
  `nachname` varchar(30) CHARACTER SET latin1 COLLATE latin1_german1_ci DEFAULT NULL,
  `geburtstag` date NOT NULL DEFAULT '0000-00-00',
  `nation` varchar(30) CHARACTER SET latin1 COLLATE latin1_german1_ci DEFAULT NULL,
  `spielweise` enum('kleinlich','ausgeglichen','lässt das Spiel laufen','sehr zögerlich','trifft mutige Entscheidungen','greift gnadenlos durch','gehört zu den Besten','lässt nicht mit sich reden','Kumpeltyp','strenge Linie') CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL DEFAULT 'ausgeglichen',
  `status` enum('1','0') CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=118 ;

CREATE TABLE IF NOT EXISTS `ws_seite` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `titel` varchar(100) DEFAULT NULL,
  `content` text,
  `c_br` enum('1','0') NOT NULL DEFAULT '0',
  `c_links` enum('1','0') NOT NULL DEFAULT '0',
  `c_smilies` enum('1','0') NOT NULL DEFAULT '0',
  `area` enum('public','members') NOT NULL DEFAULT 'public',
  `status` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ws_smilies` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `befehl` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `picname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ws_spiel` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `spieltyp` enum('Ligaspiel','Pokalspiel','Freundschaft','Nationalteam','Nationalteamliga','Nationalteamfs') NOT NULL DEFAULT 'Ligaspiel',
  `elfmeter` enum('1','0') NOT NULL DEFAULT '0',
  `pokalname` varchar(30) DEFAULT NULL,
  `pokalrunde` varchar(30) DEFAULT NULL,
  `liga_id` smallint(5) NOT NULL DEFAULT '0',
  `saison_id` int(10) NOT NULL DEFAULT '0',
  `spieltag` tinyint(3) NOT NULL DEFAULT '0',
  `datum` int(10) NOT NULL DEFAULT '0',
  `stadion_id` int(10) NOT NULL DEFAULT '0',
  `home_verein` int(10) NOT NULL DEFAULT '0',
  `home_tore` tinyint(2) NOT NULL DEFAULT '0',
  `home_formation` varchar(5) DEFAULT NULL,
  `home_taktik` enum('Normal','Offensiv','Defensiv') NOT NULL DEFAULT 'Normal',
  `home_spieler1` int(10) NOT NULL DEFAULT '0',
  `home_spieler2` int(10) NOT NULL DEFAULT '0',
  `home_spieler3` int(10) NOT NULL DEFAULT '0',
  `home_spieler4` int(10) NOT NULL DEFAULT '0',
  `home_spieler5` int(10) NOT NULL DEFAULT '0',
  `home_spieler6` int(10) NOT NULL DEFAULT '0',
  `home_spieler7` int(10) NOT NULL DEFAULT '0',
  `home_spieler8` int(10) NOT NULL DEFAULT '0',
  `home_spieler9` int(10) NOT NULL DEFAULT '0',
  `home_spieler10` int(10) NOT NULL DEFAULT '0',
  `home_spieler11` int(10) NOT NULL DEFAULT '0',
  `home_ersatz1` int(10) NOT NULL DEFAULT '0',
  `home_ersatz2` int(10) NOT NULL DEFAULT '0',
  `home_ersatz3` int(10) NOT NULL DEFAULT '0',
  `home_ersatz4` int(10) NOT NULL DEFAULT '0',
  `home_ersatz5` int(10) NOT NULL DEFAULT '0',
  `home_w1_raus` int(10) NOT NULL DEFAULT '0',
  `home_w1_rein` int(10) NOT NULL DEFAULT '0',
  `home_w1_minute` tinyint(2) NOT NULL DEFAULT '0',
  `home_w2_raus` int(10) NOT NULL DEFAULT '0',
  `home_w2_rein` int(10) NOT NULL DEFAULT '0',
  `home_w2_minute` tinyint(2) NOT NULL DEFAULT '0',
  `home_w3_raus` int(10) NOT NULL DEFAULT '0',
  `home_w3_rein` int(10) NOT NULL DEFAULT '0',
  `home_w3_minute` tinyint(2) NOT NULL DEFAULT '0',
  `gast_verein` int(10) NOT NULL DEFAULT '0',
  `gast_tore` tinyint(2) NOT NULL DEFAULT '0',
  `gast_formation` varchar(5) DEFAULT NULL,
  `gast_taktik` enum('Normal','Offensiv','Defensiv') NOT NULL DEFAULT 'Normal',
  `gast_spieler1` int(10) NOT NULL DEFAULT '0',
  `gast_spieler2` int(10) NOT NULL DEFAULT '0',
  `gast_spieler3` int(10) NOT NULL DEFAULT '0',
  `gast_spieler4` int(10) NOT NULL DEFAULT '0',
  `gast_spieler5` int(10) NOT NULL DEFAULT '0',
  `gast_spieler6` int(10) NOT NULL DEFAULT '0',
  `gast_spieler7` int(10) NOT NULL DEFAULT '0',
  `gast_spieler8` int(10) NOT NULL DEFAULT '0',
  `gast_spieler9` int(10) NOT NULL DEFAULT '0',
  `gast_spieler10` int(10) NOT NULL DEFAULT '0',
  `gast_spieler11` int(10) NOT NULL DEFAULT '0',
  `gast_ersatz1` int(10) NOT NULL DEFAULT '0',
  `gast_ersatz2` int(10) NOT NULL DEFAULT '0',
  `gast_ersatz3` int(10) NOT NULL DEFAULT '0',
  `gast_ersatz4` int(10) NOT NULL DEFAULT '0',
  `gast_ersatz5` int(10) NOT NULL DEFAULT '0',
  `gast_w1_raus` int(10) NOT NULL DEFAULT '0',
  `gast_w1_rein` int(10) NOT NULL DEFAULT '0',
  `gast_w1_minute` tinyint(2) NOT NULL DEFAULT '0',
  `gast_w2_raus` int(10) NOT NULL DEFAULT '0',
  `gast_w2_rein` int(10) NOT NULL DEFAULT '0',
  `gast_w2_minute` tinyint(2) NOT NULL DEFAULT '0',
  `gast_w3_raus` int(10) NOT NULL DEFAULT '0',
  `gast_w3_rein` int(10) NOT NULL DEFAULT '0',
  `gast_w3_minute` tinyint(2) NOT NULL DEFAULT '0',
  `torschuetzen` varchar(255) DEFAULT NULL,
  `gelbe_karten` varchar(255) DEFAULT NULL,
  `rote_karten` varchar(255) DEFAULT NULL,
  `verletzte` varchar(255) DEFAULT NULL,
  `bericht` text,
  `zuschauer` int(6) NOT NULL DEFAULT '0',
  `home_gesetzt` enum('0','1') NOT NULL DEFAULT '0',
  `gast_gesetzt` enum('0','1') NOT NULL DEFAULT '0',
  `berechnet` enum('1','0') NOT NULL DEFAULT '0',
  `gruppenspiel` enum('Nein','Ja') NOT NULL DEFAULT 'Nein',
  `elfern` smallint(2) NOT NULL DEFAULT '0',
  `home_verl` tinyint(2) NOT NULL DEFAULT '0',
  `gast_verl` tinyint(2) NOT NULL DEFAULT '0',
  `rueckspiel` tinyint(2) NOT NULL DEFAULT '0',
  `verl` smallint(2) NOT NULL DEFAULT '0',
  `home_ersatz6` int(10) NOT NULL DEFAULT '0',
  `home_ersatz7` int(10) NOT NULL DEFAULT '0',
  `gast_ersatz6` int(10) NOT NULL DEFAULT '0',
  `gast_ersatz7` int(10) NOT NULL DEFAULT '0',
  `schiri_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gast_verein` (`gast_verein`),
  KEY `home_verein` (`home_verein`),
  KEY `datum` (`datum`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4476 ;

CREATE TABLE IF NOT EXISTS `ws_spielbericht` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `spiel_id` int(10) NOT NULL DEFAULT '0',
  `minute` int(10) NOT NULL DEFAULT '0',
  `team` varchar(40) DEFAULT NULL,
  `result` varchar(40) DEFAULT NULL,
  `schuetze` varchar(60) DEFAULT NULL,
  `vorlagengeber` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25418 ;

CREATE TABLE IF NOT EXISTS `ws_spieler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vorname` varchar(30) DEFAULT NULL,
  `nachname` varchar(30) DEFAULT NULL,
  `kunstname` varchar(30) DEFAULT NULL,
  `geburtstag` date NOT NULL DEFAULT '0000-00-00',
  `verein_id` int(10) NOT NULL DEFAULT '0',
  `position` varchar(30) DEFAULT '',
  `position_aktuell` varchar(30) DEFAULT NULL,
  `nation` varchar(30) DEFAULT NULL,
  `verletzt` tinyint(3) NOT NULL DEFAULT '0',
  `gesperrt` tinyint(3) NOT NULL DEFAULT '0',
  `transfermarkt` enum('1','0') NOT NULL DEFAULT '0',
  `transfer_start` int(11) NOT NULL DEFAULT '0',
  `transfer_ende` int(11) NOT NULL DEFAULT '0',
  `transfer_mindestgebot` int(11) NOT NULL DEFAULT '0',
  `w_staerke` tinyint(3) NOT NULL DEFAULT '0',
  `w_technik` tinyint(3) NOT NULL DEFAULT '0',
  `w_kondition` tinyint(3) NOT NULL DEFAULT '0',
  `w_frische` tinyint(3) NOT NULL DEFAULT '0',
  `w_zufriedenheit` tinyint(3) NOT NULL DEFAULT '0',
  `einzeltraining` enum('1','0') NOT NULL DEFAULT '0',
  `note_last` double(4,2) NOT NULL DEFAULT '0.00',
  `note_schnitt` double(4,2) NOT NULL DEFAULT '0.00',
  `vertrag_gehalt` int(7) NOT NULL DEFAULT '0',
  `vertrag_spiele` smallint(5) NOT NULL DEFAULT '0',
  `vertrag_torpraemie` int(11) NOT NULL DEFAULT '0',
  `marktwert` int(10) NOT NULL DEFAULT '0',
  `st_tore` int(6) NOT NULL DEFAULT '0',
  `st_spiele` smallint(5) NOT NULL DEFAULT '0',
  `st_karten_gelb` smallint(5) NOT NULL DEFAULT '0',
  `st_karten_gelb_rot` smallint(5) NOT NULL DEFAULT '0',
  `st_karten_rot` smallint(5) NOT NULL DEFAULT '0',
  `sa_tore` int(6) NOT NULL DEFAULT '0',
  `sa_spiele` smallint(5) NOT NULL DEFAULT '0',
  `sa_karten_gelb` smallint(5) NOT NULL DEFAULT '0',
  `sa_karten_gelb_rot` smallint(5) NOT NULL DEFAULT '0',
  `sa_karten_rot` smallint(5) NOT NULL DEFAULT '0',
  `pokal_tore` int(6) NOT NULL DEFAULT '0',
  `pokal_spiele` smallint(5) NOT NULL DEFAULT '0',
  `pokal_gelb` smallint(5) NOT NULL DEFAULT '0',
  `pokal_gelb_rot` smallint(5) NOT NULL DEFAULT '0',
  `pokal_rot` smallint(5) NOT NULL DEFAULT '0',
  `history` text,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `captain` smallint(2) NOT NULL DEFAULT '0',
  `r_nummer` smallint(2) NOT NULL DEFAULT '0',
  `profivertrag` smallint(2) NOT NULL DEFAULT '0',
  `leihe_v` int(11) NOT NULL DEFAULT '0',
  `leihe_b` enum('NA','WP','SE') NOT NULL DEFAULT 'NA',
  `leihe_s` enum('JA','NEIN') NOT NULL DEFAULT 'NEIN',
  `note_last2` double(4,2) NOT NULL DEFAULT '0.00',
  `note_last3` double(4,2) NOT NULL DEFAULT '0.00',
  `note_last4` double(4,2) NOT NULL DEFAULT '0.00',
  `note_last5` double(4,2) NOT NULL DEFAULT '0.00',
  `elfdestagesspieltag` int(11) NOT NULL DEFAULT '0',
  `elfdestagesanzahl` int(11) NOT NULL DEFAULT '0',
  `nationalteam` int(5) NOT NULL DEFAULT '0',
  `nmgesperrt` int(3) NOT NULL DEFAULT '0',
  `nmst_tore` int(11) NOT NULL DEFAULT '0',
  `nmst_spiele` int(11) NOT NULL DEFAULT '0',
  `nmst_karten_gelb` int(11) NOT NULL DEFAULT '0',
  `nmst_karten_gelb_rot` int(11) NOT NULL DEFAULT '0',
  `nmst_karten_rot` int(11) NOT NULL DEFAULT '0',
  `nmsa_tore` int(11) NOT NULL DEFAULT '0',
  `nmsa_spiele` int(11) NOT NULL DEFAULT '0',
  `nmsa_karten_gelb` int(11) NOT NULL DEFAULT '0',
  `nmsa_karten_gelb_rot` int(11) NOT NULL DEFAULT '0',
  `nmsa_karten_rot` int(11) NOT NULL DEFAULT '0',
  `r_nummerwm` int(3) NOT NULL DEFAULT '0',
  `captainwm` int(3) NOT NULL DEFAULT '0',
  `res_verschoben` smallint(2) NOT NULL DEFAULT '0',
  `wechselsperre` int(20) NOT NULL DEFAULT '0',
  `w_staerke_tw` smallint(3) NOT NULL DEFAULT '0',
  `w_staerke_iv` smallint(3) NOT NULL DEFAULT '0',
  `w_staerke_lv` smallint(3) NOT NULL DEFAULT '0',
  `w_staerke_rv` smallint(3) NOT NULL DEFAULT '0',
  `w_staerke_dm` smallint(3) NOT NULL DEFAULT '0',
  `w_staerke_zm` smallint(3) NOT NULL DEFAULT '0',
  `w_staerke_om` smallint(3) NOT NULL DEFAULT '0',
  `w_staerke_lm` smallint(3) NOT NULL DEFAULT '0',
  `w_staerke_rm` smallint(3) NOT NULL DEFAULT '0',
  `w_staerke_hs` smallint(3) NOT NULL DEFAULT '0',
  `w_staerke_st` smallint(3) NOT NULL DEFAULT '0',
  `w_staerke_la` smallint(3) NOT NULL DEFAULT '0',
  `w_staerke_ra` smallint(3) NOT NULL DEFAULT '0',
  `fuss` enum('rechts','links','beide') NOT NULL DEFAULT 'rechts',
  `pos1` varchar(5) NOT NULL,
  `pos2` varchar(5) NOT NULL,
  `pos3` varchar(5) NOT NULL,
  `pos4` varchar(5) NOT NULL,
  `tm` varchar(255) CHARACTER SET latin1 COLLATE latin1_german1_ci DEFAULT NULL,
  `st_vorlagen` int(6) NOT NULL,
  `sa_vorlagen` int(6) NOT NULL,
  `ws` enum('0','1') NOT NULL DEFAULT '0',
  `ws_ende` int(10) NOT NULL,
  `pokal_vorlagen` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11581 ;

CREATE TABLE IF NOT EXISTS `ws_spiel_berechnung` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `spiel_id` int(10) NOT NULL DEFAULT '0',
  `spieler_id` int(10) NOT NULL DEFAULT '0',
  `team_id` int(10) NOT NULL DEFAULT '0',
  `position` varchar(20) DEFAULT NULL,
  `durchschnitt_staerke` tinyint(3) NOT NULL DEFAULT '0',
  `note` double(4,2) NOT NULL DEFAULT '0.00',
  `note_schnitt` double(4,2) NOT NULL DEFAULT '0.00',
  `minuten_gespielt` tinyint(2) NOT NULL DEFAULT '0',
  `karte_gelb` tinyint(1) NOT NULL DEFAULT '0',
  `karte_rot` tinyint(1) NOT NULL DEFAULT '0',
  `verletzt` tinyint(2) NOT NULL DEFAULT '0',
  `gesperrt` tinyint(2) NOT NULL DEFAULT '0',
  `tore` tinyint(2) NOT NULL DEFAULT '0',
  `feld` enum('1','Ersatzbank','Ausgewechselt') NOT NULL DEFAULT '1',
  `verletzungsart` varchar(50) DEFAULT NULL,
  `verletzunsdauer` smallint(3) NOT NULL DEFAULT '0',
  `staerke_tw` smallint(3) NOT NULL DEFAULT '0',
  `staerke_lv` smallint(3) NOT NULL DEFAULT '0',
  `staerke_iv` smallint(3) NOT NULL DEFAULT '0',
  `staerke_rv` smallint(3) NOT NULL DEFAULT '0',
  `staerke_dm` smallint(3) NOT NULL DEFAULT '0',
  `staerke_lm` smallint(3) NOT NULL DEFAULT '0',
  `staerke_zm` smallint(3) NOT NULL DEFAULT '0',
  `staerke_rm` smallint(3) NOT NULL DEFAULT '0',
  `staerke_om` smallint(3) NOT NULL DEFAULT '0',
  `staerke_hs` smallint(3) NOT NULL DEFAULT '0',
  `staerke_st` smallint(3) NOT NULL DEFAULT '0',
  `staerke_la` smallint(3) NOT NULL DEFAULT '0',
  `staerke_ra` smallint(3) NOT NULL DEFAULT '0',
  `vorlagen` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=737246 ;

CREATE TABLE IF NOT EXISTS `ws_spiel_text` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aktion` enum('Tor','Torvorlage','TWTorvorlage','Auswechslung','Zweikampf_gewonnen','Zweikampf_verloren','Pass_daneben','Torschuss_daneben','Torschuss_auf_Tor','Karte_gelb','Karte_rot','Karte_gelb_rot','Verletzung') CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL DEFAULT 'Tor',
  `nachricht` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=256 ;

CREATE TABLE IF NOT EXISTS `ws_sponsor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `bild` varchar(100) DEFAULT NULL,
  `liga_id` smallint(5) NOT NULL DEFAULT '0',
  `b_spiel` int(10) NOT NULL DEFAULT '0',
  `b_heimzuschlag` int(10) NOT NULL DEFAULT '0',
  `b_sieg` int(10) NOT NULL DEFAULT '0',
  `b_meisterschaft` int(10) NOT NULL DEFAULT '0',
  `max_teams` smallint(5) NOT NULL DEFAULT '0',
  `min_platz` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=203 ;

CREATE TABLE IF NOT EXISTS `ws_sponsoraus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `bild` varchar(100) DEFAULT NULL,
  `liga_id` smallint(5) NOT NULL DEFAULT '0',
  `b_spiel` int(10) NOT NULL DEFAULT '0',
  `b_heimzuschlag` int(10) NOT NULL DEFAULT '0',
  `b_sieg` int(10) NOT NULL DEFAULT '0',
  `b_meisterschaft` int(10) NOT NULL DEFAULT '0',
  `max_teams` smallint(5) NOT NULL DEFAULT '0',
  `min_platz` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

CREATE TABLE IF NOT EXISTS `ws_sponsortriko` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `bild` varchar(100) DEFAULT NULL,
  `liga_id` smallint(5) NOT NULL DEFAULT '0',
  `b_spiel` int(10) NOT NULL DEFAULT '0',
  `b_heimzuschlag` int(10) NOT NULL DEFAULT '0',
  `b_sieg` int(10) NOT NULL DEFAULT '0',
  `b_meisterschaft` int(10) NOT NULL DEFAULT '0',
  `max_teams` smallint(5) NOT NULL DEFAULT '0',
  `min_platz` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=152 ;

CREATE TABLE IF NOT EXISTS `ws_sponsortv` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `bild` varchar(100) DEFAULT NULL,
  `liga_id` smallint(5) NOT NULL DEFAULT '0',
  `b_spiel` int(10) NOT NULL DEFAULT '0',
  `b_heimzuschlag` int(10) NOT NULL DEFAULT '0',
  `b_sieg` int(10) NOT NULL DEFAULT '0',
  `b_meisterschaft` int(10) NOT NULL DEFAULT '0',
  `max_teams` smallint(5) NOT NULL DEFAULT '0',
  `min_platz` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

CREATE TABLE IF NOT EXISTS `ws_stadion` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `bild` varchar(30) DEFAULT NULL,
  `stadt` varchar(30) DEFAULT NULL,
  `land` varchar(20) DEFAULT NULL,
  `p_steh` int(6) NOT NULL DEFAULT '0',
  `p_sitz` int(6) NOT NULL DEFAULT '0',
  `p_haupt_steh` int(6) NOT NULL DEFAULT '0',
  `p_haupt_sitz` int(6) NOT NULL DEFAULT '0',
  `p_vip` int(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=400 ;

CREATE TABLE IF NOT EXISTS `ws_standardaufstellung` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `verein_id` int(10) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `formation` varchar(5) DEFAULT NULL,
  `taktik` enum('Normal','Offensiv','Defensiv') NOT NULL DEFAULT 'Normal',
  `spieler1` int(10) NOT NULL DEFAULT '0',
  `spieler2` int(10) NOT NULL DEFAULT '0',
  `spieler3` int(10) NOT NULL DEFAULT '0',
  `spieler4` int(10) NOT NULL DEFAULT '0',
  `spieler5` int(10) NOT NULL DEFAULT '0',
  `spieler6` int(10) NOT NULL DEFAULT '0',
  `spieler7` int(10) NOT NULL DEFAULT '0',
  `spieler8` int(10) NOT NULL DEFAULT '0',
  `spieler9` int(10) NOT NULL DEFAULT '0',
  `spieler10` int(10) NOT NULL DEFAULT '0',
  `spieler11` int(10) NOT NULL DEFAULT '0',
  `ersatz1` int(10) NOT NULL DEFAULT '0',
  `ersatz2` int(10) NOT NULL DEFAULT '0',
  `ersatz3` int(10) NOT NULL DEFAULT '0',
  `ersatz4` int(10) NOT NULL DEFAULT '0',
  `ersatz5` int(10) NOT NULL DEFAULT '0',
  `w1_raus` int(10) NOT NULL DEFAULT '0',
  `w1_rein` int(10) NOT NULL DEFAULT '0',
  `w1_minute` tinyint(2) NOT NULL DEFAULT '0',
  `w2_raus` int(10) NOT NULL DEFAULT '0',
  `w2_rein` int(10) NOT NULL DEFAULT '0',
  `w2_minute` tinyint(2) NOT NULL DEFAULT '0',
  `w3_raus` int(10) NOT NULL DEFAULT '0',
  `w3_rein` int(10) NOT NULL DEFAULT '0',
  `w3_minute` tinyint(2) NOT NULL DEFAULT '0',
  `ersatz6` int(10) NOT NULL DEFAULT '0',
  `ersatz7` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ws_tabelle_markierung` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `liga_id` smallint(5) NOT NULL DEFAULT '0',
  `bezeichnung` varchar(50) DEFAULT NULL,
  `farbe` varchar(10) DEFAULT NULL,
  `platz_von` smallint(5) NOT NULL DEFAULT '0',
  `platz_bis` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

CREATE TABLE IF NOT EXISTS `ws_training` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `w_staerke` tinyint(3) NOT NULL DEFAULT '0',
  `w_technik` tinyint(3) NOT NULL DEFAULT '0',
  `w_kondition` tinyint(3) NOT NULL DEFAULT '0',
  `w_frische` tinyint(3) NOT NULL DEFAULT '0',
  `w_zufriedenheit` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ws_trainingslager` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `land` varchar(30) DEFAULT NULL,
  `bild` varchar(100) DEFAULT NULL,
  `preis_spieler_tag` int(10) NOT NULL DEFAULT '0',
  `p_staerke` tinyint(3) NOT NULL DEFAULT '0',
  `p_technik` tinyint(3) NOT NULL DEFAULT '0',
  `p_kondition` tinyint(3) NOT NULL DEFAULT '0',
  `p_frische` tinyint(3) NOT NULL DEFAULT '0',
  `p_zufriedenheit` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ws_trainingslager_belegung` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `verein_id` int(10) NOT NULL DEFAULT '0',
  `lager_id` int(10) NOT NULL DEFAULT '0',
  `datum_start` int(10) NOT NULL DEFAULT '0',
  `datum_ende` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ws_transfer_angebot` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `spieler_id` int(10) NOT NULL DEFAULT '0',
  `user_id` int(10) NOT NULL DEFAULT '0',
  `datum` int(11) NOT NULL DEFAULT '0',
  `abloese` int(11) NOT NULL DEFAULT '0',
  `handgeld` int(11) NOT NULL DEFAULT '0',
  `vertrag_spiele` smallint(5) NOT NULL DEFAULT '0',
  `vertrag_gehalt` int(7) NOT NULL DEFAULT '0',
  `vertrag_torpraemie` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ws_transfer_geld` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `betrag` int(10) NOT NULL,
  `transfer_id` int(10) NOT NULL,
  `verein_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=216 ;

CREATE TABLE IF NOT EXISTS `ws_transfer_spieler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `spieler_id` int(10) NOT NULL,
  `verein_neu` int(10) NOT NULL,
  `transfer_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=780 ;

CREATE TABLE IF NOT EXISTS `ws_transfer_verein` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `verein1` int(10) NOT NULL DEFAULT '0',
  `verein2` int(10) NOT NULL DEFAULT '0',
  `erledigt` enum('0','1') NOT NULL DEFAULT '0',
  `bestaetigt` enum('0','1') NOT NULL DEFAULT '0',
  `datum` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=438 ;

CREATE TABLE IF NOT EXISTS `ws_umfeld` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `typ` enum('Fanshop','Med','Reise','Verpflegung') DEFAULT NULL,
  `stufe` smallint(5) NOT NULL DEFAULT '0',
  `kosten` int(11) NOT NULL DEFAULT '0',
  `einnahmen` int(11) NOT NULL DEFAULT '0',
  `bauzeit` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

CREATE TABLE IF NOT EXISTS `ws_umfeld_auftr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `verein_id` int(10) NOT NULL DEFAULT '0',
  `umfeld_id` int(10) NOT NULL DEFAULT '0',
  `ende` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1696 ;

CREATE TABLE IF NOT EXISTS `ws_umfrage` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `frage` varchar(150) DEFAULT NULL,
  `datum_bis` int(10) NOT NULL DEFAULT '0',
  `antwort_1` varchar(50) DEFAULT NULL,
  `antwort_2` varchar(50) DEFAULT NULL,
  `antwort_3` varchar(50) DEFAULT NULL,
  `antwort_4` varchar(50) DEFAULT NULL,
  `antwort_5` varchar(50) DEFAULT NULL,
  `vote_1` smallint(5) NOT NULL DEFAULT '0',
  `vote_2` smallint(5) NOT NULL DEFAULT '0',
  `vote_3` smallint(5) NOT NULL DEFAULT '0',
  `vote_4` smallint(5) NOT NULL DEFAULT '0',
  `vote_5` smallint(5) NOT NULL DEFAULT '0',
  `onlyusers` enum('1','0') NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

CREATE TABLE IF NOT EXISTS `ws_umfrage_votes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `umfrage_id` smallint(5) NOT NULL DEFAULT '0',
  `user_id` int(10) NOT NULL DEFAULT '0',
  `ip` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ws_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nick` varchar(50) DEFAULT NULL,
  `passwort` varchar(40) DEFAULT NULL,
  `passwort_neu` varchar(40) DEFAULT NULL,
  `passwort_neu_angefordert` int(10) NOT NULL DEFAULT '0',
  `email` varchar(150) DEFAULT NULL,
  `datum_anmeldung` int(11) NOT NULL DEFAULT '0',
  `schluessel` varchar(10) DEFAULT NULL,
  `wunschverein` varchar(250) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `wohnort` varchar(50) DEFAULT NULL,
  `land` varchar(40) DEFAULT NULL,
  `geburtstag` date NOT NULL DEFAULT '0000-00-00',
  `beruf` varchar(50) DEFAULT NULL,
  `interessen` varchar(250) DEFAULT NULL,
  `lieblingsverein` varchar(100) DEFAULT NULL,
  `homepage` varchar(250) DEFAULT NULL,
  `icq` varchar(20) DEFAULT NULL,
  `aim` varchar(30) DEFAULT NULL,
  `yim` varchar(30) DEFAULT NULL,
  `msn` varchar(30) DEFAULT NULL,
  `lastonline` int(11) NOT NULL DEFAULT '0',
  `lastaction` varchar(150) DEFAULT NULL,
  `highscore` int(10) NOT NULL DEFAULT '0',
  `fanbeliebtheit` tinyint(3) NOT NULL DEFAULT '50',
  `c_showemail` enum('1','0') NOT NULL DEFAULT '0',
  `email_transfers` enum('1','0') NOT NULL DEFAULT '0',
  `ticker` int(6) NOT NULL DEFAULT '3000',
  `email_pn` enum('1','0') NOT NULL DEFAULT '0',
  `history` text,
  `ip` varchar(25) NOT NULL DEFAULT '',
  `ip_time` int(11) NOT NULL DEFAULT '0',
  `status` enum('1','2','0') NOT NULL DEFAULT '0',
  `block_last_game` smallint(2) NOT NULL DEFAULT '1',
  `livespiel` int(6) NOT NULL DEFAULT '4000',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1140 ;

CREATE TABLE IF NOT EXISTS `ws_user_inactivity` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `login` tinyint(3) NOT NULL DEFAULT '0',
  `login_last` int(11) NOT NULL DEFAULT '0',
  `login_check` int(11) NOT NULL DEFAULT '0',
  `aufstellung` tinyint(3) NOT NULL DEFAULT '0',
  `transfer` tinyint(3) NOT NULL DEFAULT '0',
  `transfer_last` int(11) NOT NULL DEFAULT '0',
  `transfer_check` int(11) NOT NULL DEFAULT '0',
  `vertragsauslauf` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1185 ;

CREATE TABLE IF NOT EXISTS `ws_verein` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `kurz` varchar(5) DEFAULT NULL,
  `bild` varchar(100) DEFAULT NULL,
  `land` varchar(25) DEFAULT NULL,
  `liga_id` smallint(5) NOT NULL DEFAULT '0',
  `user_id` int(10) NOT NULL DEFAULT '0',
  `user2_id` int(10) NOT NULL DEFAULT '0',
  `user3_id` int(10) NOT NULL DEFAULT '0',
  `stadion_id` int(10) NOT NULL DEFAULT '0',
  `sponsor_id` int(10) NOT NULL DEFAULT '0',
  `training_id` int(5) NOT NULL DEFAULT '0',
  `last1` enum('N','U','S') DEFAULT NULL,
  `last2` enum('N','U','S') DEFAULT NULL,
  `last3` enum('N','U','S') DEFAULT NULL,
  `platz` tinyint(2) NOT NULL DEFAULT '0',
  `platz1` tinyint(2) NOT NULL DEFAULT '0',
  `platz2` tinyint(2) NOT NULL DEFAULT '0',
  `platz3` tinyint(2) NOT NULL DEFAULT '0',
  `platz4` tinyint(2) NOT NULL DEFAULT '0',
  `platz5` tinyint(2) NOT NULL DEFAULT '0',
  `platz6` tinyint(2) NOT NULL DEFAULT '0',
  `platz7` tinyint(2) NOT NULL DEFAULT '0',
  `platz8` tinyint(2) NOT NULL DEFAULT '0',
  `platz9` tinyint(2) NOT NULL DEFAULT '0',
  `platz10` tinyint(2) NOT NULL DEFAULT '0',
  `platz11` tinyint(2) NOT NULL DEFAULT '0',
  `platz12` tinyint(2) NOT NULL DEFAULT '0',
  `platz13` tinyint(2) NOT NULL DEFAULT '0',
  `platz14` tinyint(2) NOT NULL DEFAULT '0',
  `platz15` tinyint(2) NOT NULL DEFAULT '0',
  `platz16` tinyint(2) NOT NULL DEFAULT '0',
  `platz17` tinyint(2) NOT NULL DEFAULT '0',
  `platz18` tinyint(2) NOT NULL DEFAULT '0',
  `platz19` tinyint(2) NOT NULL DEFAULT '0',
  `platz20` tinyint(2) NOT NULL DEFAULT '0',
  `platz21` tinyint(2) NOT NULL DEFAULT '0',
  `platz22` tinyint(2) NOT NULL DEFAULT '0',
  `platz23` tinyint(2) NOT NULL DEFAULT '0',
  `platz24` tinyint(2) NOT NULL DEFAULT '0',
  `platz25` tinyint(2) NOT NULL DEFAULT '0',
  `platz26` tinyint(2) NOT NULL DEFAULT '0',
  `platz27` tinyint(2) NOT NULL DEFAULT '0',
  `platz28` tinyint(2) NOT NULL DEFAULT '0',
  `platz29` tinyint(2) NOT NULL DEFAULT '0',
  `platz30` tinyint(2) NOT NULL DEFAULT '0',
  `platz31` tinyint(2) NOT NULL DEFAULT '0',
  `platz32` tinyint(2) NOT NULL DEFAULT '0',
  `platz33` tinyint(2) NOT NULL DEFAULT '0',
  `platz34` tinyint(2) NOT NULL DEFAULT '0',
  `platz35` tinyint(2) NOT NULL DEFAULT '0',
  `platz36` tinyint(2) NOT NULL DEFAULT '0',
  `platz37` tinyint(2) NOT NULL DEFAULT '0',
  `platz38` tinyint(2) NOT NULL DEFAULT '0',
  `sponsor_spiele` smallint(5) NOT NULL DEFAULT '0',
  `finanz_budget` int(11) NOT NULL DEFAULT '0',
  `finanz_sponsor` int(11) NOT NULL DEFAULT '0',
  `finanz_transfer` int(11) NOT NULL DEFAULT '0',
  `finanz_gehalt` int(11) NOT NULL DEFAULT '0',
  `finanz_zuschauer` int(11) NOT NULL DEFAULT '0',
  `finanz_sonstiges` int(11) NOT NULL DEFAULT '0',
  `preis_stehen` smallint(4) NOT NULL DEFAULT '0',
  `preis_sitz` smallint(4) NOT NULL DEFAULT '0',
  `preis_haupt_stehen` smallint(4) NOT NULL DEFAULT '0',
  `preis_haupt_sitze` smallint(4) NOT NULL DEFAULT '0',
  `preis_vip` smallint(4) NOT NULL DEFAULT '0',
  `last_steh` int(6) NOT NULL DEFAULT '0',
  `last_sitz` int(6) NOT NULL DEFAULT '0',
  `last_haupt_steh` int(6) NOT NULL DEFAULT '0',
  `last_haupt_sitz` int(6) NOT NULL DEFAULT '0',
  `last_vip` int(6) NOT NULL DEFAULT '0',
  `meisterschaften` smallint(4) NOT NULL DEFAULT '0',
  `st_tore` int(6) NOT NULL DEFAULT '0',
  `st_gegentore` int(6) NOT NULL DEFAULT '0',
  `st_spiele` smallint(5) NOT NULL DEFAULT '0',
  `st_siege` smallint(5) NOT NULL DEFAULT '0',
  `st_niederlagen` smallint(5) NOT NULL DEFAULT '0',
  `st_unentschieden` smallint(5) NOT NULL DEFAULT '0',
  `st_punkte` int(6) NOT NULL DEFAULT '0',
  `sa_tore` int(6) NOT NULL DEFAULT '0',
  `sa_gegentore` int(6) NOT NULL DEFAULT '0',
  `sa_spiele` smallint(5) NOT NULL DEFAULT '0',
  `sa_siege` smallint(5) NOT NULL DEFAULT '0',
  `sa_niederlagen` smallint(5) NOT NULL DEFAULT '0',
  `sa_unentschieden` smallint(5) NOT NULL DEFAULT '0',
  `sa_punkte` int(6) NOT NULL DEFAULT '0',
  `pokal_tore` int(6) NOT NULL DEFAULT '0',
  `pokal_gegentore` int(6) NOT NULL DEFAULT '0',
  `pokal_spiele` smallint(5) NOT NULL DEFAULT '0',
  `pokal_siege` smallint(5) NOT NULL DEFAULT '0',
  `pokal_unentschieden` smallint(5) NOT NULL DEFAULT '0',
  `pokal_niederlagen` smallint(5) NOT NULL DEFAULT '0',
  `fan` varchar(10) NOT NULL DEFAULT '0',
  `med` varchar(10) NOT NULL DEFAULT '0',
  `an_ab` varchar(10) NOT NULL DEFAULT '0',
  `verpf` varchar(10) NOT NULL DEFAULT '0',
  `history` text,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `nat_gruppe` smallint(2) NOT NULL DEFAULT '0',
  `nationalteam` enum('1','0') NOT NULL DEFAULT '0',
  `group_tore` int(5) NOT NULL DEFAULT '0',
  `group_gegentore` int(5) NOT NULL DEFAULT '0',
  `group_spiele` int(5) NOT NULL DEFAULT '0',
  `group_siege` int(5) NOT NULL DEFAULT '0',
  `group_niederlagen` int(5) NOT NULL DEFAULT '0',
  `group_unentschieden` int(5) NOT NULL DEFAULT '0',
  `profiteam` smallint(5) NOT NULL DEFAULT '0',
  `titel1` smallint(5) NOT NULL DEFAULT '0',
  `titel2` smallint(5) NOT NULL DEFAULT '0',
  `titel3` smallint(5) NOT NULL DEFAULT '0',
  `heimhotel` smallint(5) NOT NULL DEFAULT '21',
  `awhotel` smallint(5) NOT NULL DEFAULT '7',
  `flugzeug` smallint(5) NOT NULL DEFAULT '15',
  `finanz_hot` int(11) NOT NULL DEFAULT '0',
  `sh_tore` int(6) NOT NULL DEFAULT '0',
  `sh_gegentore` int(6) NOT NULL DEFAULT '0',
  `sh_spiele` smallint(5) NOT NULL DEFAULT '0',
  `sh_siege` smallint(5) NOT NULL DEFAULT '0',
  `sh_niederlagen` smallint(5) NOT NULL DEFAULT '0',
  `sh_unentschieden` smallint(5) NOT NULL DEFAULT '0',
  `sh_punkte` int(6) NOT NULL DEFAULT '0',
  `sw_tore` int(6) NOT NULL DEFAULT '0',
  `sw_gegentore` int(6) NOT NULL DEFAULT '0',
  `sw_spiele` smallint(5) NOT NULL DEFAULT '0',
  `sw_siege` smallint(5) NOT NULL DEFAULT '0',
  `sw_niederlagen` smallint(5) NOT NULL DEFAULT '0',
  `sw_unentschieden` smallint(5) NOT NULL DEFAULT '0',
  `sw_punkte` int(6) NOT NULL DEFAULT '0',
  `finanz_umfeld` int(11) NOT NULL DEFAULT '0',
  `finanz_umfeld_sp` int(11) NOT NULL DEFAULT '0',
  `sponsortv_id` int(3) NOT NULL DEFAULT '0',
  `sponsortriko_id` int(3) NOT NULL DEFAULT '0',
  `sponsoraus_id` int(3) NOT NULL DEFAULT '0',
  `finanz_sponsoraus` int(3) NOT NULL DEFAULT '0',
  `finanz_sponsortv` int(3) NOT NULL DEFAULT '0',
  `finanz_sponsortriko` int(3) NOT NULL DEFAULT '0',
  `team` enum('verein','nationalteam') NOT NULL DEFAULT 'verein',
  `nationalitat` varchar(255) DEFAULT '0',
  `wmeisterschaften` int(11) NOT NULL DEFAULT '0',
  `emmeisterschaften` int(11) NOT NULL DEFAULT '0',
  `wmuser_id` int(11) NOT NULL DEFAULT '0',
  `wmmeisterschaften` int(3) NOT NULL DEFAULT '0',
  `interim_id` int(10) NOT NULL,
  `interim2_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=520 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
