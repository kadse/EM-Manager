-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 10. Jan 2019 um 12:09
-- Server Version: 5.5.59-0+deb8u1
-- PHP-Version: 7.2.13-1+0~20181207100623.13+jessie~1.gbpf57305

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `kadsesql1`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_achievement`
--

CREATE TABLE IF NOT EXISTS `ws_achievement` (
`id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `season_id` int(10) DEFAULT NULL,
  `cup_round_id` int(10) DEFAULT NULL,
  `rank` tinyint(3) DEFAULT NULL,
  `date_recorded` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_admin`
--

CREATE TABLE IF NOT EXISTS `ws_admin` (
`id` smallint(5) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `passwort` varchar(64) DEFAULT NULL,
  `passwort_neu` varchar(64) DEFAULT NULL,
  `passwort_neu_angefordert` int(11) NOT NULL DEFAULT '0',
  `passwort_salt` varchar(5) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `lang` varchar(2) DEFAULT NULL,
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
  `r_demo` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_aufstellung`
--

CREATE TABLE IF NOT EXISTS `ws_aufstellung` (
`id` int(10) NOT NULL,
  `verein_id` int(10) NOT NULL,
  `datum` int(11) NOT NULL,
  `offensive` tinyint(3) DEFAULT '50',
  `spieler1` int(10) NOT NULL,
  `spieler2` int(10) NOT NULL,
  `spieler3` int(10) NOT NULL,
  `spieler4` int(10) NOT NULL,
  `spieler5` int(10) NOT NULL,
  `spieler6` int(10) NOT NULL,
  `spieler7` int(10) NOT NULL,
  `spieler8` int(10) NOT NULL,
  `spieler9` int(10) NOT NULL,
  `spieler10` int(10) NOT NULL,
  `spieler11` int(10) NOT NULL,
  `ersatz1` int(10) DEFAULT NULL,
  `ersatz2` int(10) DEFAULT NULL,
  `ersatz3` int(10) DEFAULT NULL,
  `ersatz4` int(10) DEFAULT NULL,
  `ersatz5` int(10) DEFAULT NULL,
  `w1_raus` int(10) DEFAULT NULL,
  `w1_rein` int(10) DEFAULT NULL,
  `w1_minute` tinyint(2) DEFAULT NULL,
  `w2_raus` int(10) DEFAULT NULL,
  `w2_rein` int(10) DEFAULT NULL,
  `w2_minute` tinyint(2) DEFAULT NULL,
  `w3_raus` int(10) DEFAULT NULL,
  `w3_rein` int(10) DEFAULT NULL,
  `w3_minute` tinyint(2) DEFAULT NULL,
  `setup` varchar(16) DEFAULT NULL,
  `w1_condition` varchar(16) DEFAULT NULL,
  `w2_condition` varchar(16) DEFAULT NULL,
  `w3_condition` varchar(16) DEFAULT NULL,
  `longpasses` enum('1','0') NOT NULL DEFAULT '0',
  `counterattacks` enum('1','0') NOT NULL DEFAULT '0',
  `freekickplayer` int(10) DEFAULT NULL,
  `w1_position` varchar(4) DEFAULT NULL,
  `w2_position` varchar(4) DEFAULT NULL,
  `w3_position` varchar(4) DEFAULT NULL,
  `spieler1_position` varchar(4) NOT NULL,
  `spieler2_position` varchar(4) NOT NULL,
  `spieler3_position` varchar(4) NOT NULL,
  `spieler4_position` varchar(4) NOT NULL,
  `spieler5_position` varchar(4) NOT NULL,
  `spieler6_position` varchar(4) NOT NULL,
  `spieler7_position` varchar(4) NOT NULL,
  `spieler8_position` varchar(4) NOT NULL,
  `spieler9_position` varchar(4) NOT NULL,
  `spieler10_position` varchar(4) NOT NULL,
  `spieler11_position` varchar(4) NOT NULL,
  `match_id` int(10) DEFAULT NULL,
  `templatename` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_badge`
--

CREATE TABLE IF NOT EXISTS `ws_badge` (
`id` int(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `level` enum('bronze','silver','gold') NOT NULL DEFAULT 'bronze',
  `event` enum('membership_since_x_days','win_with_x_goals_difference','completed_season_at_x','x_trades','cupwinner','stadium_construction_by_x') NOT NULL,
  `event_benchmark` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_badge_user`
--

CREATE TABLE IF NOT EXISTS `ws_badge_user` (
  `user_id` int(10) NOT NULL,
  `badge_id` int(10) NOT NULL,
  `date_rewarded` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_briefe`
--

CREATE TABLE IF NOT EXISTS `ws_briefe` (
`id` int(10) NOT NULL,
  `empfaenger_id` int(10) NOT NULL,
  `absender_id` int(10) NOT NULL,
  `absender_name` varchar(50) DEFAULT NULL,
  `datum` int(10) NOT NULL,
  `betreff` varchar(50) DEFAULT NULL,
  `nachricht` text,
  `gelesen` enum('1','0') NOT NULL DEFAULT '0',
  `typ` enum('eingang','ausgang') NOT NULL DEFAULT 'eingang'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_buildings_of_team`
--

CREATE TABLE IF NOT EXISTS `ws_buildings_of_team` (
  `building_id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `construction_deadline` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_cup`
--

CREATE TABLE IF NOT EXISTS `ws_cup` (
`id` int(10) NOT NULL,
  `name` varchar(64) NOT NULL,
  `winner_id` int(10) DEFAULT NULL,
  `logo` varchar(128) DEFAULT NULL,
  `winner_award` int(10) NOT NULL DEFAULT '0',
  `second_award` int(10) NOT NULL DEFAULT '0',
  `perround_award` int(10) NOT NULL DEFAULT '0',
  `archived` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_cup_round`
--

CREATE TABLE IF NOT EXISTS `ws_cup_round` (
`id` int(10) NOT NULL,
  `cup_id` int(10) NOT NULL,
  `name` varchar(64) NOT NULL,
  `from_winners_round_id` int(10) DEFAULT NULL,
  `from_loosers_round_id` int(10) DEFAULT NULL,
  `firstround_date` int(11) NOT NULL,
  `secondround_date` int(11) DEFAULT NULL,
  `finalround` enum('1','0') NOT NULL DEFAULT '0',
  `groupmatches` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_cup_round_group`
--

CREATE TABLE IF NOT EXISTS `ws_cup_round_group` (
  `cup_round_id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `name` varchar(64) NOT NULL,
  `tab_points` int(4) NOT NULL DEFAULT '0',
  `tab_goals` int(4) NOT NULL DEFAULT '0',
  `tab_goalsreceived` int(4) NOT NULL DEFAULT '0',
  `tab_wins` int(4) NOT NULL DEFAULT '0',
  `tab_draws` int(4) NOT NULL DEFAULT '0',
  `tab_losses` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_cup_round_group_next`
--

CREATE TABLE IF NOT EXISTS `ws_cup_round_group_next` (
  `cup_round_id` int(10) NOT NULL,
  `groupname` varchar(64) NOT NULL,
  `rank` int(4) NOT NULL DEFAULT '0',
  `target_cup_round_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_cup_round_pending`
--

CREATE TABLE IF NOT EXISTS `ws_cup_round_pending` (
  `team_id` int(10) NOT NULL,
  `cup_round_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_konto`
--

CREATE TABLE IF NOT EXISTS `ws_konto` (
`id` int(10) NOT NULL,
  `verein_id` int(10) NOT NULL,
  `absender` varchar(150) DEFAULT NULL,
  `betrag` int(10) NOT NULL,
  `datum` int(11) NOT NULL,
  `verwendung` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_leaguehistory`
--

CREATE TABLE IF NOT EXISTS `ws_leaguehistory` (
  `team_id` int(10) NOT NULL,
  `season_id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `matchday` tinyint(3) NOT NULL DEFAULT '0',
  `rank` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_liga`
--

CREATE TABLE IF NOT EXISTS `ws_liga` (
`id` smallint(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `kurz` varchar(5) DEFAULT NULL,
  `land` varchar(25) DEFAULT NULL,
  `p_steh` tinyint(3) NOT NULL,
  `p_sitz` tinyint(3) NOT NULL,
  `p_haupt_steh` tinyint(3) NOT NULL,
  `p_haupt_sitz` tinyint(3) NOT NULL,
  `p_vip` tinyint(3) NOT NULL,
  `preis_steh` smallint(5) NOT NULL,
  `preis_sitz` smallint(5) NOT NULL,
  `preis_vip` smallint(5) NOT NULL,
  `admin_id` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_matchreport`
--

CREATE TABLE IF NOT EXISTS `ws_matchreport` (
`id` int(10) NOT NULL,
  `match_id` int(10) NOT NULL,
  `message_id` int(10) NOT NULL,
  `minute` tinyint(3) NOT NULL,
  `goals` varchar(8) DEFAULT NULL,
  `playernames` varchar(128) DEFAULT NULL,
  `active_home` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_nationalplayer`
--

CREATE TABLE IF NOT EXISTS `ws_nationalplayer` (
  `team_id` int(10) NOT NULL,
  `player_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_news`
--

CREATE TABLE IF NOT EXISTS `ws_news` (
`id` int(10) NOT NULL,
  `datum` int(10) NOT NULL,
  `autor_id` smallint(5) NOT NULL,
  `bild_id` int(10) NOT NULL,
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
  `status` enum('1','2','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_notification`
--

CREATE TABLE IF NOT EXISTS `ws_notification` (
`id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `eventdate` int(11) NOT NULL,
  `eventtype` varchar(128) DEFAULT NULL,
  `message_key` varchar(255) DEFAULT NULL,
  `message_data` varchar(255) DEFAULT NULL,
  `target_pageid` varchar(128) DEFAULT NULL,
  `target_querystr` varchar(255) DEFAULT NULL,
  `seen` enum('1','0') NOT NULL DEFAULT '0',
  `team_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_premiumpayment`
--

CREATE TABLE IF NOT EXISTS `ws_premiumpayment` (
`id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `created_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_premiumstatement`
--

CREATE TABLE IF NOT EXISTS `ws_premiumstatement` (
`id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `action_id` varchar(255) DEFAULT NULL,
  `amount` int(10) NOT NULL,
  `created_date` int(11) NOT NULL,
  `subject_data` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_randomevent`
--

CREATE TABLE IF NOT EXISTS `ws_randomevent` (
`id` int(10) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `effect` enum('money','player_injured','player_blocked','player_happiness','player_fitness','player_stamina') NOT NULL,
  `effect_money_amount` int(10) NOT NULL DEFAULT '0',
  `effect_blocked_matches` int(10) NOT NULL DEFAULT '0',
  `effect_skillchange` tinyint(3) NOT NULL DEFAULT '0',
  `weight` tinyint(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_randomevent_occurrence`
--

CREATE TABLE IF NOT EXISTS `ws_randomevent_occurrence` (
  `user_id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `occurrence_date` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_saison`
--

CREATE TABLE IF NOT EXISTS `ws_saison` (
`id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `liga_id` smallint(5) NOT NULL,
  `platz_1_id` int(10) NOT NULL,
  `platz_2_id` int(10) NOT NULL,
  `platz_3_id` int(10) NOT NULL,
  `platz_4_id` int(10) NOT NULL,
  `platz_5_id` int(10) NOT NULL,
  `beendet` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_session`
--

CREATE TABLE IF NOT EXISTS `ws_session` (
  `session_id` char(32) NOT NULL,
  `session_data` text NOT NULL,
  `expires` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_shoutmessage`
--

CREATE TABLE IF NOT EXISTS `ws_shoutmessage` (
`id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_date` int(11) NOT NULL,
  `match_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_spiel`
--

CREATE TABLE IF NOT EXISTS `ws_spiel` (
`id` int(10) NOT NULL,
  `spieltyp` enum('Ligaspiel','Pokalspiel','Freundschaft') NOT NULL DEFAULT 'Ligaspiel',
  `elfmeter` enum('1','0') NOT NULL DEFAULT '0',
  `pokalname` varchar(30) DEFAULT NULL,
  `pokalrunde` varchar(30) DEFAULT NULL,
  `pokalgruppe` varchar(64) DEFAULT NULL,
  `liga_id` smallint(5) DEFAULT NULL,
  `saison_id` int(10) DEFAULT NULL,
  `spieltag` tinyint(3) DEFAULT NULL,
  `datum` int(10) NOT NULL,
  `stadion_id` int(10) DEFAULT NULL,
  `minutes` tinyint(3) DEFAULT NULL,
  `player_with_ball` int(10) DEFAULT NULL,
  `prev_player_with_ball` int(10) DEFAULT NULL,
  `home_verein` int(10) NOT NULL,
  `home_noformation` enum('1','0') DEFAULT '0',
  `home_offensive` tinyint(3) DEFAULT NULL,
  `home_offensive_changed` tinyint(2) NOT NULL DEFAULT '0',
  `home_tore` tinyint(2) DEFAULT NULL,
  `home_spieler1` int(10) DEFAULT NULL,
  `home_spieler2` int(10) DEFAULT NULL,
  `home_spieler3` int(10) DEFAULT NULL,
  `home_spieler4` int(10) DEFAULT NULL,
  `home_spieler5` int(10) DEFAULT NULL,
  `home_spieler6` int(10) DEFAULT NULL,
  `home_spieler7` int(10) DEFAULT NULL,
  `home_spieler8` int(10) DEFAULT NULL,
  `home_spieler9` int(10) DEFAULT NULL,
  `home_spieler10` int(10) DEFAULT NULL,
  `home_spieler11` int(10) DEFAULT NULL,
  `home_ersatz1` int(10) DEFAULT NULL,
  `home_ersatz2` int(10) DEFAULT NULL,
  `home_ersatz3` int(10) DEFAULT NULL,
  `home_ersatz4` int(10) DEFAULT NULL,
  `home_ersatz5` int(10) DEFAULT NULL,
  `home_w1_raus` int(10) DEFAULT NULL,
  `home_w1_rein` int(10) DEFAULT NULL,
  `home_w1_minute` tinyint(2) DEFAULT NULL,
  `home_w2_raus` int(10) DEFAULT NULL,
  `home_w2_rein` int(10) DEFAULT NULL,
  `home_w2_minute` tinyint(2) DEFAULT NULL,
  `home_w3_raus` int(10) DEFAULT NULL,
  `home_w3_rein` int(10) DEFAULT NULL,
  `home_w3_minute` tinyint(2) DEFAULT NULL,
  `gast_verein` int(10) NOT NULL,
  `gast_tore` tinyint(2) DEFAULT NULL,
  `guest_noformation` enum('1','0') DEFAULT '0',
  `gast_offensive` tinyint(3) DEFAULT NULL,
  `gast_offensive_changed` tinyint(2) NOT NULL DEFAULT '0',
  `gast_spieler1` int(10) DEFAULT NULL,
  `gast_spieler2` int(10) DEFAULT NULL,
  `gast_spieler3` int(10) DEFAULT NULL,
  `gast_spieler4` int(10) DEFAULT NULL,
  `gast_spieler5` int(10) DEFAULT NULL,
  `gast_spieler6` int(10) DEFAULT NULL,
  `gast_spieler7` int(10) DEFAULT NULL,
  `gast_spieler8` int(10) DEFAULT NULL,
  `gast_spieler9` int(10) DEFAULT NULL,
  `gast_spieler10` int(10) DEFAULT NULL,
  `gast_spieler11` int(10) DEFAULT NULL,
  `gast_ersatz1` int(10) DEFAULT NULL,
  `gast_ersatz2` int(10) DEFAULT NULL,
  `gast_ersatz3` int(10) DEFAULT NULL,
  `gast_ersatz4` int(10) DEFAULT NULL,
  `gast_ersatz5` int(10) DEFAULT NULL,
  `gast_w1_raus` int(10) DEFAULT NULL,
  `gast_w1_rein` int(10) DEFAULT NULL,
  `gast_w1_minute` tinyint(2) DEFAULT NULL,
  `gast_w2_raus` int(10) DEFAULT NULL,
  `gast_w2_rein` int(10) DEFAULT NULL,
  `gast_w2_minute` tinyint(2) DEFAULT NULL,
  `gast_w3_raus` int(10) DEFAULT NULL,
  `gast_w3_rein` int(10) DEFAULT NULL,
  `gast_w3_minute` tinyint(2) DEFAULT NULL,
  `bericht` text,
  `zuschauer` int(6) DEFAULT NULL,
  `berechnet` enum('1','0') NOT NULL DEFAULT '0',
  `soldout` enum('1','0') NOT NULL DEFAULT '0',
  `home_setup` varchar(16) DEFAULT NULL,
  `home_w1_condition` varchar(16) DEFAULT NULL,
  `home_w2_condition` varchar(16) DEFAULT NULL,
  `home_w3_condition` varchar(16) DEFAULT NULL,
  `gast_setup` varchar(16) DEFAULT NULL,
  `gast_w1_condition` varchar(16) DEFAULT NULL,
  `gast_w2_condition` varchar(16) DEFAULT NULL,
  `gast_w3_condition` varchar(16) DEFAULT NULL,
  `home_longpasses` enum('1','0') NOT NULL DEFAULT '0',
  `home_counterattacks` enum('1','0') NOT NULL DEFAULT '0',
  `gast_longpasses` enum('1','0') NOT NULL DEFAULT '0',
  `gast_counterattacks` enum('1','0') NOT NULL DEFAULT '0',
  `home_morale` tinyint(3) NOT NULL DEFAULT '0',
  `gast_morale` tinyint(3) NOT NULL DEFAULT '0',
  `home_user_id` int(10) DEFAULT NULL,
  `gast_user_id` int(10) DEFAULT NULL,
  `home_freekickplayer` int(10) DEFAULT NULL,
  `home_w1_position` varchar(4) DEFAULT NULL,
  `home_w2_position` varchar(4) DEFAULT NULL,
  `home_w3_position` varchar(4) DEFAULT NULL,
  `gast_freekickplayer` int(10) DEFAULT NULL,
  `gast_w1_position` varchar(4) DEFAULT NULL,
  `gast_w2_position` varchar(4) DEFAULT NULL,
  `gast_w3_position` varchar(4) DEFAULT NULL,
  `blocked` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_spieler`
--

CREATE TABLE IF NOT EXISTS `ws_spieler` (
`id` int(10) NOT NULL,
  `vorname` varchar(30) DEFAULT NULL,
  `nachname` varchar(30) DEFAULT NULL,
  `kunstname` varchar(30) DEFAULT NULL,
  `geburtstag` date NOT NULL,
  `verein_id` int(10) DEFAULT NULL,
  `position` enum('Torwart','Abwehr','Mittelfeld','Sturm') NOT NULL DEFAULT 'Mittelfeld',
  `position_main` enum('T','LV','IV','RV','LM','DM','ZM','OM','RM','LS','MS','RS') DEFAULT NULL,
  `position_second` enum('T','LV','IV','RV','LM','DM','ZM','OM','RM','LS','MS','RS') DEFAULT NULL,
  `nation` varchar(30) DEFAULT NULL,
  `picture` varchar(128) DEFAULT NULL,
  `tm` varchar(255) DEFAULT NULL,
  `verletzt` tinyint(3) NOT NULL DEFAULT '0',
  `gesperrt` tinyint(3) NOT NULL DEFAULT '0',
  `gesperrt_cups` tinyint(3) NOT NULL DEFAULT '0',
  `gesperrt_nationalteam` tinyint(3) NOT NULL DEFAULT '0',
  `transfermarkt` enum('1','0') NOT NULL DEFAULT '0',
  `transfer_start` int(11) NOT NULL DEFAULT '0',
  `transfer_ende` int(11) NOT NULL DEFAULT '0',
  `transfer_mindestgebot` int(11) NOT NULL DEFAULT '0',
  `w_staerke` tinyint(3) NOT NULL,
  `w_technik` tinyint(3) NOT NULL,
  `w_kondition` tinyint(3) NOT NULL,
  `w_frische` tinyint(3) NOT NULL,
  `w_zufriedenheit` tinyint(3) NOT NULL,
  `einzeltraining` enum('1','0') NOT NULL DEFAULT '0',
  `note_last` double(4,2) NOT NULL DEFAULT '0.00',
  `note_schnitt` double(4,2) NOT NULL DEFAULT '0.00',
  `vertrag_gehalt` int(10) NOT NULL,
  `vertrag_spiele` smallint(5) NOT NULL,
  `vertrag_torpraemie` int(10) NOT NULL,
  `marktwert` int(10) NOT NULL DEFAULT '0',
  `st_tore` int(6) NOT NULL DEFAULT '0',
  `st_assists` int(6) NOT NULL DEFAULT '0',
  `st_spiele` smallint(5) NOT NULL DEFAULT '0',
  `st_karten_gelb` smallint(5) NOT NULL DEFAULT '0',
  `st_karten_gelb_rot` smallint(5) NOT NULL DEFAULT '0',
  `st_karten_rot` smallint(5) NOT NULL DEFAULT '0',
  `sa_tore` int(6) NOT NULL DEFAULT '0',
  `sa_assists` int(6) NOT NULL DEFAULT '0',
  `sa_spiele` smallint(5) NOT NULL DEFAULT '0',
  `sa_karten_gelb` smallint(5) NOT NULL DEFAULT '0',
  `sa_karten_gelb_rot` smallint(5) NOT NULL DEFAULT '0',
  `sa_karten_rot` smallint(5) NOT NULL DEFAULT '0',
  `history` text,
  `unsellable` enum('1','0') NOT NULL DEFAULT '0',
  `lending` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `lending_fee` int(6) NOT NULL DEFAULT '0',
  `lending_matches` tinyint(4) NOT NULL DEFAULT '0',
  `lending_owner_id` int(10) DEFAULT NULL,
  `age` tinyint(3) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `clausel` text,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_spiel_berechnung`
--

CREATE TABLE IF NOT EXISTS `ws_spiel_berechnung` (
`id` int(10) NOT NULL,
  `spiel_id` int(10) NOT NULL,
  `spieler_id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `position` varchar(20) DEFAULT NULL,
  `note` double(4,2) NOT NULL,
  `minuten_gespielt` tinyint(2) NOT NULL DEFAULT '0',
  `karte_gelb` tinyint(1) NOT NULL DEFAULT '0',
  `karte_rot` tinyint(1) NOT NULL DEFAULT '0',
  `verletzt` tinyint(2) NOT NULL DEFAULT '0',
  `gesperrt` tinyint(2) NOT NULL DEFAULT '0',
  `tore` tinyint(2) NOT NULL DEFAULT '0',
  `feld` enum('1','Ersatzbank','Ausgewechselt') NOT NULL DEFAULT '1',
  `position_main` varchar(5) DEFAULT NULL,
  `age` tinyint(2) DEFAULT NULL,
  `w_staerke` tinyint(3) DEFAULT NULL,
  `w_technik` tinyint(3) DEFAULT NULL,
  `w_kondition` tinyint(3) DEFAULT NULL,
  `w_frische` tinyint(3) DEFAULT NULL,
  `w_zufriedenheit` tinyint(3) DEFAULT NULL,
  `ballcontacts` tinyint(3) DEFAULT NULL,
  `wontackles` tinyint(3) DEFAULT NULL,
  `shoots` tinyint(3) DEFAULT NULL,
  `passes_successed` tinyint(3) DEFAULT NULL,
  `passes_failed` tinyint(3) DEFAULT NULL,
  `assists` tinyint(3) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `losttackles` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_spiel_text`
--

CREATE TABLE IF NOT EXISTS `ws_spiel_text` (
`id` int(10) NOT NULL,
  `aktion` enum('Tor','Auswechslung','Zweikampf_gewonnen','Zweikampf_verloren','Pass_daneben','Torschuss_daneben','Torschuss_auf_Tor','Karte_gelb','Karte_rot','Karte_gelb_rot','Verletzung','Elfmeter_erfolg','Elfmeter_verschossen','Taktikaenderung','Ecke','Freistoss_daneben','Freistoss_treffer','Tor_mit_vorlage') DEFAULT NULL,
  `nachricht` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_sponsor`
--

CREATE TABLE IF NOT EXISTS `ws_sponsor` (
`id` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `bild` varchar(100) DEFAULT NULL,
  `liga_id` smallint(5) NOT NULL,
  `b_spiel` int(10) NOT NULL,
  `b_heimzuschlag` int(10) NOT NULL,
  `b_sieg` int(10) NOT NULL,
  `b_meisterschaft` int(10) NOT NULL,
  `max_teams` smallint(5) NOT NULL,
  `min_platz` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_stadion`
--

CREATE TABLE IF NOT EXISTS `ws_stadion` (
`id` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `stadt` varchar(30) DEFAULT NULL,
  `land` varchar(20) DEFAULT NULL,
  `p_steh` int(6) NOT NULL,
  `p_sitz` int(6) NOT NULL,
  `p_haupt_steh` int(6) NOT NULL,
  `p_haupt_sitz` int(6) NOT NULL,
  `p_vip` int(6) NOT NULL,
  `level_pitch` tinyint(2) NOT NULL DEFAULT '3',
  `level_videowall` tinyint(2) NOT NULL DEFAULT '1',
  `level_seatsquality` tinyint(2) NOT NULL DEFAULT '5',
  `level_vipquality` tinyint(2) NOT NULL DEFAULT '5',
  `maintenance_pitch` tinyint(2) NOT NULL DEFAULT '1',
  `maintenance_videowall` tinyint(2) NOT NULL DEFAULT '1',
  `maintenance_seatsquality` tinyint(2) NOT NULL DEFAULT '1',
  `maintenance_vipquality` tinyint(2) NOT NULL DEFAULT '1',
  `picture` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_stadiumbuilding`
--

CREATE TABLE IF NOT EXISTS `ws_stadiumbuilding` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `required_building_id` int(10) DEFAULT NULL,
  `costs` int(10) NOT NULL,
  `premiumfee` int(10) NOT NULL DEFAULT '0',
  `construction_time_days` tinyint(3) NOT NULL DEFAULT '0',
  `effect_training` tinyint(3) NOT NULL DEFAULT '0',
  `effect_youthscouting` tinyint(3) NOT NULL DEFAULT '0',
  `effect_tickets` tinyint(3) NOT NULL DEFAULT '0',
  `effect_fanpopularity` tinyint(3) NOT NULL DEFAULT '0',
  `effect_injury` tinyint(3) NOT NULL DEFAULT '0',
  `effect_income` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_stadium_builder`
--

CREATE TABLE IF NOT EXISTS `ws_stadium_builder` (
`id` int(10) NOT NULL,
  `name` varchar(32) NOT NULL,
  `picture` varchar(128) DEFAULT NULL,
  `fixedcosts` int(10) NOT NULL DEFAULT '0',
  `cost_per_seat` int(10) NOT NULL DEFAULT '0',
  `construction_time_days` tinyint(3) NOT NULL DEFAULT '0',
  `construction_time_days_min` tinyint(3) NOT NULL DEFAULT '0',
  `min_stadium_size` int(10) NOT NULL DEFAULT '0',
  `max_stadium_size` int(10) NOT NULL DEFAULT '0',
  `reliability` tinyint(3) NOT NULL DEFAULT '100',
  `premiumfee` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_stadium_construction`
--

CREATE TABLE IF NOT EXISTS `ws_stadium_construction` (
`id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `builder_id` int(10) NOT NULL,
  `started` int(11) NOT NULL,
  `deadline` int(11) NOT NULL,
  `p_steh` int(6) NOT NULL DEFAULT '0',
  `p_sitz` int(6) NOT NULL DEFAULT '0',
  `p_haupt_steh` int(6) NOT NULL DEFAULT '0',
  `p_haupt_sitz` int(6) NOT NULL DEFAULT '0',
  `p_vip` int(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_tabelle_markierung`
--

CREATE TABLE IF NOT EXISTS `ws_tabelle_markierung` (
`id` smallint(5) NOT NULL,
  `liga_id` smallint(5) NOT NULL,
  `bezeichnung` varchar(50) DEFAULT NULL,
  `farbe` varchar(10) DEFAULT NULL,
  `platz_von` smallint(5) NOT NULL,
  `platz_bis` smallint(5) NOT NULL,
  `target_league_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_teamoftheday`
--

CREATE TABLE IF NOT EXISTS `ws_teamoftheday` (
`id` int(10) NOT NULL,
  `season_id` int(10) NOT NULL,
  `matchday` tinyint(3) NOT NULL,
  `statistic_id` int(10) NOT NULL,
  `player_id` int(10) NOT NULL,
  `position_main` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_team_league_statistics`
--

CREATE TABLE IF NOT EXISTS `ws_team_league_statistics` (
  `team_id` int(10) NOT NULL,
  `season_id` int(10) NOT NULL,
  `total_points` int(6) NOT NULL DEFAULT '0',
  `total_goals` int(6) NOT NULL DEFAULT '0',
  `total_goalsreceived` int(6) NOT NULL DEFAULT '0',
  `total_goalsdiff` int(6) NOT NULL DEFAULT '0',
  `total_wins` int(6) NOT NULL DEFAULT '0',
  `total_draws` int(6) NOT NULL DEFAULT '0',
  `total_losses` int(6) NOT NULL DEFAULT '0',
  `home_points` int(6) NOT NULL DEFAULT '0',
  `home_goals` int(6) NOT NULL DEFAULT '0',
  `home_goalsreceived` int(6) NOT NULL DEFAULT '0',
  `home_goalsdiff` int(6) NOT NULL DEFAULT '0',
  `home_wins` int(6) NOT NULL DEFAULT '0',
  `home_draws` int(6) NOT NULL DEFAULT '0',
  `home_losses` int(6) NOT NULL DEFAULT '0',
  `guest_points` int(6) NOT NULL DEFAULT '0',
  `guest_goals` int(6) NOT NULL DEFAULT '0',
  `guest_goalsreceived` int(6) NOT NULL DEFAULT '0',
  `guest_goalsdiff` int(6) NOT NULL DEFAULT '0',
  `guest_wins` int(6) NOT NULL DEFAULT '0',
  `guest_draws` int(6) NOT NULL DEFAULT '0',
  `guest_losses` int(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_trainer`
--

CREATE TABLE IF NOT EXISTS `ws_trainer` (
`id` int(10) NOT NULL,
  `name` varchar(64) NOT NULL,
  `salary` int(10) NOT NULL,
  `p_technique` tinyint(3) NOT NULL DEFAULT '0',
  `p_stamina` tinyint(3) NOT NULL DEFAULT '0',
  `p_frische` tinyint(3) NOT NULL DEFAULT '0',
  `p_kondition` tinyint(3) NOT NULL DEFAULT '0',
  `p_zufriedenheit` tinyint(3) NOT NULL DEFAULT '0',
  `premiumfee` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_training`
--

CREATE TABLE IF NOT EXISTS `ws_training` (
`id` smallint(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `w_staerke` tinyint(3) NOT NULL,
  `w_technik` tinyint(3) NOT NULL,
  `w_kondition` tinyint(3) NOT NULL,
  `w_frische` tinyint(3) NOT NULL,
  `w_zufriedenheit` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_trainingslager`
--

CREATE TABLE IF NOT EXISTS `ws_trainingslager` (
`id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `land` varchar(30) DEFAULT NULL,
  `bild` varchar(100) DEFAULT NULL,
  `preis_spieler_tag` int(10) NOT NULL,
  `p_staerke` tinyint(3) NOT NULL,
  `p_technik` tinyint(3) NOT NULL,
  `p_kondition` tinyint(3) NOT NULL,
  `p_frische` tinyint(3) NOT NULL,
  `p_zufriedenheit` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_trainingslager_belegung`
--

CREATE TABLE IF NOT EXISTS `ws_trainingslager_belegung` (
`id` int(10) NOT NULL,
  `verein_id` int(10) NOT NULL,
  `lager_id` int(10) NOT NULL,
  `datum_start` int(10) NOT NULL,
  `datum_ende` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_training_unit`
--

CREATE TABLE IF NOT EXISTS `ws_training_unit` (
`id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `trainer_id` int(10) NOT NULL,
  `focus` enum('TE','STA','MOT','FR') NOT NULL DEFAULT 'TE',
  `intensity` tinyint(3) NOT NULL DEFAULT '50',
  `date_executed` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_transfer`
--

CREATE TABLE IF NOT EXISTS `ws_transfer` (
`id` int(10) NOT NULL,
  `spieler_id` int(10) NOT NULL,
  `seller_user_id` int(10) DEFAULT NULL,
  `seller_club_id` int(10) DEFAULT NULL,
  `buyer_user_id` int(10) DEFAULT NULL,
  `buyer_club_id` int(10) NOT NULL,
  `datum` int(11) NOT NULL,
  `bid_id` int(11) NOT NULL DEFAULT '0',
  `directtransfer_amount` int(10) NOT NULL,
  `directtransfer_player1` int(10) NOT NULL DEFAULT '0',
  `directtransfer_player2` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_transfer_angebot`
--

CREATE TABLE IF NOT EXISTS `ws_transfer_angebot` (
`id` int(10) NOT NULL,
  `spieler_id` int(10) NOT NULL,
  `verein_id` int(10) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `datum` int(11) NOT NULL,
  `abloese` int(11) NOT NULL,
  `handgeld` int(11) NOT NULL DEFAULT '0',
  `vertrag_spiele` smallint(5) NOT NULL,
  `vertrag_gehalt` int(7) NOT NULL,
  `vertrag_torpraemie` smallint(5) NOT NULL DEFAULT '0',
  `ishighest` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_transfer_offer`
--

CREATE TABLE IF NOT EXISTS `ws_transfer_offer` (
`id` int(10) NOT NULL,
  `player_id` int(10) NOT NULL,
  `sender_user_id` int(10) NOT NULL,
  `sender_club_id` int(10) NOT NULL,
  `receiver_club_id` int(10) NOT NULL,
  `submitted_date` int(11) NOT NULL,
  `offer_amount` int(10) NOT NULL,
  `offer_message` varchar(255) DEFAULT NULL,
  `offer_player1` int(10) NOT NULL DEFAULT '0',
  `offer_player2` int(10) NOT NULL DEFAULT '0',
  `lending` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `rejected_date` int(11) NOT NULL DEFAULT '0',
  `rejected_message` varchar(255) DEFAULT NULL,
  `rejected_allow_alternative` enum('1','0') NOT NULL DEFAULT '0',
  `admin_approval_pending` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_user`
--

CREATE TABLE IF NOT EXISTS `ws_user` (
`id` int(10) NOT NULL,
  `nick` varchar(50) DEFAULT NULL,
  `passwort` varchar(64) DEFAULT NULL,
  `passwort_neu` varchar(64) DEFAULT NULL,
  `passwort_neu_angefordert` int(11) NOT NULL DEFAULT '0',
  `passwort_salt` varchar(5) DEFAULT NULL,
  `tokenid` varchar(255) DEFAULT NULL,
  `lang` varchar(2) DEFAULT 'de',
  `email` varchar(150) DEFAULT NULL,
  `datum_anmeldung` int(11) NOT NULL DEFAULT '0',
  `schluessel` varchar(10) DEFAULT NULL,
  `wunschverein` varchar(250) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `wohnort` varchar(50) DEFAULT NULL,
  `land` varchar(40) DEFAULT NULL,
  `geburtstag` date DEFAULT NULL,
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
  `email_pn` enum('1','0') NOT NULL DEFAULT '0',
  `history` text,
  `ip` varchar(25) DEFAULT NULL,
  `ip_time` int(11) NOT NULL DEFAULT '0',
  `c_hideinonlinelist` enum('1','0') NOT NULL DEFAULT '0',
  `premium_balance` int(6) NOT NULL DEFAULT '0',
  `picture` varchar(255) DEFAULT NULL,
  `status` enum('1','2','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_userabsence`
--

CREATE TABLE IF NOT EXISTS `ws_userabsence` (
`id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `deputy_id` int(10) DEFAULT NULL,
  `from_date` int(11) NOT NULL,
  `to_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_useractionlog`
--

CREATE TABLE IF NOT EXISTS `ws_useractionlog` (
`id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `action_id` varchar(255) DEFAULT NULL,
  `created_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_user_inactivity`
--

CREATE TABLE IF NOT EXISTS `ws_user_inactivity` (
`id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `login` tinyint(3) NOT NULL DEFAULT '0',
  `login_last` int(11) NOT NULL,
  `login_check` int(11) NOT NULL,
  `aufstellung` tinyint(3) NOT NULL DEFAULT '0',
  `transfer` tinyint(3) NOT NULL DEFAULT '0',
  `transfer_check` int(11) NOT NULL,
  `vertragsauslauf` tinyint(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_verein`
--

CREATE TABLE IF NOT EXISTS `ws_verein` (
`id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `kurz` varchar(5) DEFAULT NULL,
  `bild` varchar(100) DEFAULT NULL,
  `liga_id` smallint(5) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `stadion_id` int(10) DEFAULT NULL,
  `sponsor_id` int(10) DEFAULT NULL,
  `training_id` int(5) DEFAULT NULL,
  `platz` tinyint(2) DEFAULT NULL,
  `sponsor_spiele` smallint(5) NOT NULL DEFAULT '0',
  `finanz_budget` int(11) NOT NULL,
  `preis_stehen` smallint(4) NOT NULL,
  `preis_sitz` smallint(4) NOT NULL,
  `preis_haupt_stehen` smallint(4) NOT NULL,
  `preis_haupt_sitze` smallint(4) NOT NULL,
  `preis_vip` smallint(4) NOT NULL,
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
  `min_target_rank` smallint(3) NOT NULL DEFAULT '0',
  `history` text,
  `scouting_last_execution` int(11) NOT NULL DEFAULT '0',
  `nationalteam` enum('1','0') NOT NULL DEFAULT '0',
  `captain_id` int(10) DEFAULT NULL,
  `strength` tinyint(3) NOT NULL DEFAULT '0',
  `user_id_actual` int(10) DEFAULT NULL,
  `interimmanager` enum('1','0') NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_youthmatch`
--

CREATE TABLE IF NOT EXISTS `ws_youthmatch` (
`id` int(10) NOT NULL,
  `matchdate` int(11) NOT NULL,
  `home_team_id` int(10) NOT NULL,
  `home_noformation` enum('1','0') DEFAULT '0',
  `home_s1_out` int(10) DEFAULT NULL,
  `home_s1_in` int(10) DEFAULT NULL,
  `home_s1_minute` tinyint(3) DEFAULT NULL,
  `home_s1_condition` varchar(16) DEFAULT NULL,
  `home_s1_position` varchar(4) DEFAULT NULL,
  `home_s2_out` int(10) DEFAULT NULL,
  `home_s2_in` int(10) DEFAULT NULL,
  `home_s2_minute` tinyint(3) DEFAULT NULL,
  `home_s2_condition` varchar(16) DEFAULT NULL,
  `home_s2_position` varchar(4) DEFAULT NULL,
  `home_s3_out` int(10) DEFAULT NULL,
  `home_s3_in` int(10) DEFAULT NULL,
  `home_s3_minute` tinyint(3) DEFAULT NULL,
  `home_s3_condition` varchar(16) DEFAULT NULL,
  `home_s3_position` varchar(4) DEFAULT NULL,
  `guest_team_id` int(10) NOT NULL,
  `guest_noformation` enum('1','0') DEFAULT '0',
  `guest_s1_out` int(10) DEFAULT NULL,
  `guest_s1_in` int(10) DEFAULT NULL,
  `guest_s1_minute` tinyint(3) DEFAULT NULL,
  `guest_s1_condition` varchar(16) DEFAULT NULL,
  `guest_s1_position` varchar(4) DEFAULT NULL,
  `guest_s2_out` int(10) DEFAULT NULL,
  `guest_s2_in` int(10) DEFAULT NULL,
  `guest_s2_minute` tinyint(3) DEFAULT NULL,
  `guest_s2_condition` varchar(16) DEFAULT NULL,
  `guest_s2_position` varchar(4) DEFAULT NULL,
  `guest_s3_out` int(10) DEFAULT NULL,
  `guest_s3_in` int(10) DEFAULT NULL,
  `guest_s3_minute` tinyint(3) DEFAULT NULL,
  `guest_s3_condition` varchar(16) DEFAULT NULL,
  `guest_s3_position` varchar(4) DEFAULT NULL,
  `home_goals` tinyint(2) DEFAULT NULL,
  `guest_goals` tinyint(2) DEFAULT NULL,
  `simulated` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_youthmatch_player`
--

CREATE TABLE IF NOT EXISTS `ws_youthmatch_player` (
  `match_id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `player_id` int(10) NOT NULL,
  `playernumber` tinyint(2) NOT NULL,
  `position` varchar(24) NOT NULL,
  `position_main` varchar(8) NOT NULL,
  `grade` double(4,2) NOT NULL DEFAULT '3.00',
  `minutes_played` tinyint(2) NOT NULL DEFAULT '0',
  `card_yellow` tinyint(1) NOT NULL DEFAULT '0',
  `card_red` tinyint(1) NOT NULL DEFAULT '0',
  `goals` tinyint(2) NOT NULL DEFAULT '0',
  `state` enum('1','Ersatzbank','Ausgewechselt') NOT NULL DEFAULT '1',
  `strength` tinyint(3) NOT NULL,
  `ballcontacts` tinyint(3) NOT NULL DEFAULT '0',
  `wontackles` tinyint(3) NOT NULL DEFAULT '0',
  `shoots` tinyint(3) NOT NULL DEFAULT '0',
  `passes_successed` tinyint(3) NOT NULL DEFAULT '0',
  `passes_failed` tinyint(3) NOT NULL DEFAULT '0',
  `assists` tinyint(3) NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_youthmatch_reportitem`
--

CREATE TABLE IF NOT EXISTS `ws_youthmatch_reportitem` (
`id` int(10) NOT NULL,
  `match_id` int(10) NOT NULL,
  `minute` tinyint(3) NOT NULL,
  `message_key` varchar(32) NOT NULL,
  `message_data` varchar(255) DEFAULT NULL,
  `home_on_ball` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_youthmatch_request`
--

CREATE TABLE IF NOT EXISTS `ws_youthmatch_request` (
`id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `matchdate` int(11) NOT NULL,
  `reward` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_youthplayer`
--

CREATE TABLE IF NOT EXISTS `ws_youthplayer` (
`id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `position` enum('Torwart','Abwehr','Mittelfeld','Sturm') NOT NULL,
  `nation` varchar(32) DEFAULT NULL,
  `strength` tinyint(3) NOT NULL,
  `strength_last_change` tinyint(3) NOT NULL DEFAULT '0',
  `st_goals` smallint(5) NOT NULL DEFAULT '0',
  `st_matches` smallint(5) NOT NULL DEFAULT '0',
  `st_assists` smallint(5) NOT NULL DEFAULT '0',
  `st_cards_yellow` smallint(5) NOT NULL DEFAULT '0',
  `st_cards_yellow_red` smallint(5) NOT NULL DEFAULT '0',
  `st_cards_red` smallint(5) NOT NULL DEFAULT '0',
  `transfer_fee` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ws_youthscout`
--

CREATE TABLE IF NOT EXISTS `ws_youthscout` (
`id` int(10) NOT NULL,
  `name` varchar(32) NOT NULL,
  `expertise` tinyint(3) NOT NULL,
  `fee` int(10) NOT NULL,
  `speciality` enum('Torwart','Abwehr','Mittelfeld','Sturm') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `ws_achievement`
--
ALTER TABLE `ws_achievement`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_admin`
--
ALTER TABLE `ws_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_aufstellung`
--
ALTER TABLE `ws_aufstellung`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_aufstellung_verein_id_fk` (`verein_id`);

--
-- Indizes für die Tabelle `ws_badge`
--
ALTER TABLE `ws_badge`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_badge_user`
--
ALTER TABLE `ws_badge_user`
 ADD PRIMARY KEY (`user_id`,`badge_id`);

--
-- Indizes für die Tabelle `ws_briefe`
--
ALTER TABLE `ws_briefe`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_briefe_user_id_fk` (`absender_id`);

--
-- Indizes für die Tabelle `ws_buildings_of_team`
--
ALTER TABLE `ws_buildings_of_team`
 ADD PRIMARY KEY (`building_id`,`team_id`), ADD KEY `team_id` (`team_id`);

--
-- Indizes für die Tabelle `ws_cup`
--
ALTER TABLE `ws_cup`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`), ADD KEY `ws_cup_winner_id_fk` (`winner_id`);

--
-- Indizes für die Tabelle `ws_cup_round`
--
ALTER TABLE `ws_cup_round`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_cupround_cup_id_fk` (`cup_id`), ADD KEY `ws_cupround_fromwinners_id_fk` (`from_winners_round_id`), ADD KEY `ws_cupround_fromloosers_id_fk` (`from_loosers_round_id`);

--
-- Indizes für die Tabelle `ws_cup_round_group`
--
ALTER TABLE `ws_cup_round_group`
 ADD PRIMARY KEY (`cup_round_id`,`team_id`), ADD KEY `ws_cupgroup_team_id_fk` (`team_id`);

--
-- Indizes für die Tabelle `ws_cup_round_group_next`
--
ALTER TABLE `ws_cup_round_group_next`
 ADD PRIMARY KEY (`cup_round_id`,`groupname`,`rank`), ADD KEY `ws_groupnext_tagetround_fk` (`target_cup_round_id`);

--
-- Indizes für die Tabelle `ws_cup_round_pending`
--
ALTER TABLE `ws_cup_round_pending`
 ADD PRIMARY KEY (`team_id`,`cup_round_id`), ADD KEY `ws_cuproundpending_round_fk` (`cup_round_id`);

--
-- Indizes für die Tabelle `ws_konto`
--
ALTER TABLE `ws_konto`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_konto_verein_id_fk` (`verein_id`);

--
-- Indizes für die Tabelle `ws_leaguehistory`
--
ALTER TABLE `ws_leaguehistory`
 ADD PRIMARY KEY (`team_id`,`season_id`,`matchday`), ADD KEY `season_id` (`season_id`), ADD KEY `user_id` (`user_id`);

--
-- Indizes für die Tabelle `ws_liga`
--
ALTER TABLE `ws_liga`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_matchreport`
--
ALTER TABLE `ws_matchreport`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_matchreport_spiel_id_fk` (`match_id`), ADD KEY `ws_matchreport_message_id_fk` (`message_id`);

--
-- Indizes für die Tabelle `ws_nationalplayer`
--
ALTER TABLE `ws_nationalplayer`
 ADD PRIMARY KEY (`team_id`,`player_id`), ADD KEY `ws_nationalp_player_id_fk` (`player_id`);

--
-- Indizes für die Tabelle `ws_news`
--
ALTER TABLE `ws_news`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_notification`
--
ALTER TABLE `ws_notification`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_notification_user_id_fk` (`user_id`);

--
-- Indizes für die Tabelle `ws_premiumpayment`
--
ALTER TABLE `ws_premiumpayment`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_premiumpayment_user_id_fk` (`user_id`);

--
-- Indizes für die Tabelle `ws_premiumstatement`
--
ALTER TABLE `ws_premiumstatement`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_premium_user_id_fk` (`user_id`);

--
-- Indizes für die Tabelle `ws_randomevent`
--
ALTER TABLE `ws_randomevent`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_randomevent_occurrence`
--
ALTER TABLE `ws_randomevent_occurrence`
 ADD PRIMARY KEY (`user_id`,`team_id`,`occurrence_date`), ADD KEY `team_id` (`team_id`), ADD KEY `event_id` (`event_id`);

--
-- Indizes für die Tabelle `ws_saison`
--
ALTER TABLE `ws_saison`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_session`
--
ALTER TABLE `ws_session`
 ADD PRIMARY KEY (`session_id`);

--
-- Indizes für die Tabelle `ws_shoutmessage`
--
ALTER TABLE `ws_shoutmessage`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `match_id` (`match_id`);

--
-- Indizes für die Tabelle `ws_spiel`
--
ALTER TABLE `ws_spiel`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_spiel_saison_id_fk` (`saison_id`), ADD KEY `ws_spiel_home_id_fk` (`home_verein`), ADD KEY `ws_spiel_gast_id_fk` (`gast_verein`), ADD KEY `ws_match_home_user_id_fk` (`home_user_id`), ADD KEY `ws_match_guest_user_id_fk` (`gast_user_id`);

--
-- Indizes für die Tabelle `ws_spieler`
--
ALTER TABLE `ws_spieler`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_spieler_verein_id_fk` (`verein_id`);

--
-- Indizes für die Tabelle `ws_spiel_berechnung`
--
ALTER TABLE `ws_spiel_berechnung`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_berechnung_spiel_id_fk` (`spiel_id`), ADD KEY `ws_berechnung_spieler_id_fk` (`spieler_id`);

--
-- Indizes für die Tabelle `ws_spiel_text`
--
ALTER TABLE `ws_spiel_text`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_sponsor`
--
ALTER TABLE `ws_sponsor`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_stadion`
--
ALTER TABLE `ws_stadion`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_stadiumbuilding`
--
ALTER TABLE `ws_stadiumbuilding`
 ADD PRIMARY KEY (`id`), ADD KEY `required_building_id` (`required_building_id`);

--
-- Indizes für die Tabelle `ws_stadium_builder`
--
ALTER TABLE `ws_stadium_builder`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_stadium_construction`
--
ALTER TABLE `ws_stadium_construction`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_construction_team_id_fk` (`team_id`), ADD KEY `ws_construction_builder_id_fk` (`builder_id`);

--
-- Indizes für die Tabelle `ws_tabelle_markierung`
--
ALTER TABLE `ws_tabelle_markierung`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_teamoftheday`
--
ALTER TABLE `ws_teamoftheday`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_teamofday_season_id_fk` (`season_id`), ADD KEY `ws_teamofday_player_id_fk` (`player_id`);

--
-- Indizes für die Tabelle `ws_team_league_statistics`
--
ALTER TABLE `ws_team_league_statistics`
 ADD PRIMARY KEY (`team_id`,`season_id`), ADD KEY `ws_statistics_season_id_fk` (`season_id`);

--
-- Indizes für die Tabelle `ws_trainer`
--
ALTER TABLE `ws_trainer`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_training`
--
ALTER TABLE `ws_training`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_trainingslager`
--
ALTER TABLE `ws_trainingslager`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_trainingslager_belegung`
--
ALTER TABLE `ws_trainingslager_belegung`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_trainingslager_belegung_fk` (`lager_id`), ADD KEY `ws_trainingslager_verein_fk` (`verein_id`);

--
-- Indizes für die Tabelle `ws_training_unit`
--
ALTER TABLE `ws_training_unit`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_training_verein_id_fk` (`team_id`);

--
-- Indizes für die Tabelle `ws_transfer`
--
ALTER TABLE `ws_transfer`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_transfer_spieler_id_fk` (`spieler_id`), ADD KEY `ws_transfer_selleruser_fk` (`seller_user_id`), ADD KEY `ws_transfer_sellerclub_fk` (`seller_club_id`), ADD KEY `ws_transfer_buyeruser_fk` (`buyer_user_id`), ADD KEY `ws_transfer_buyerclub_fk` (`buyer_club_id`);

--
-- Indizes für die Tabelle `ws_transfer_angebot`
--
ALTER TABLE `ws_transfer_angebot`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_transfer_angebot_user_id_fk` (`user_id`);

--
-- Indizes für die Tabelle `ws_transfer_offer`
--
ALTER TABLE `ws_transfer_offer`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_toffer_spieler_id_fk` (`player_id`), ADD KEY `ws_toffer_selleruser_fk` (`sender_user_id`), ADD KEY `ws_toffer_sellerclub_fk` (`sender_club_id`), ADD KEY `ws_toffer_buyerclub_fk` (`receiver_club_id`);

--
-- Indizes für die Tabelle `ws_user`
--
ALTER TABLE `ws_user`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ws_userabsence`
--
ALTER TABLE `ws_userabsence`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `deputy_id` (`deputy_id`);

--
-- Indizes für die Tabelle `ws_useractionlog`
--
ALTER TABLE `ws_useractionlog`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indizes für die Tabelle `ws_user_inactivity`
--
ALTER TABLE `ws_user_inactivity`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_user_inactivity_user_id_fk` (`user_id`);

--
-- Indizes für die Tabelle `ws_verein`
--
ALTER TABLE `ws_verein`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_verein_user_id_fk` (`user_id`), ADD KEY `ws_verein_stadion_id_fk` (`stadion_id`), ADD KEY `ws_verein_sponsor_id_fk` (`sponsor_id`), ADD KEY `ws_verein_liga_id_fk` (`liga_id`), ADD KEY `ws_verein_original_user_id_fk` (`user_id_actual`);

--
-- Indizes für die Tabelle `ws_youthmatch`
--
ALTER TABLE `ws_youthmatch`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_youthmatch_home_id_fk` (`home_team_id`), ADD KEY `ws_youthmatch_guest_id_fk` (`guest_team_id`);

--
-- Indizes für die Tabelle `ws_youthmatch_player`
--
ALTER TABLE `ws_youthmatch_player`
 ADD PRIMARY KEY (`match_id`,`player_id`), ADD KEY `ws_ymatchplayer_team_id_fk` (`team_id`), ADD KEY `ws_ymatchplayer_player_id_fk` (`player_id`);

--
-- Indizes für die Tabelle `ws_youthmatch_reportitem`
--
ALTER TABLE `ws_youthmatch_reportitem`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_ymatchreport_match_id_fk` (`match_id`);

--
-- Indizes für die Tabelle `ws_youthmatch_request`
--
ALTER TABLE `ws_youthmatch_request`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_youthrequest_team_id_fk` (`team_id`);

--
-- Indizes für die Tabelle `ws_youthplayer`
--
ALTER TABLE `ws_youthplayer`
 ADD PRIMARY KEY (`id`), ADD KEY `ws_youthplayer_team_id_fk` (`team_id`);

--
-- Indizes für die Tabelle `ws_youthscout`
--
ALTER TABLE `ws_youthscout`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `ws_achievement`
--
ALTER TABLE `ws_achievement`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_admin`
--
ALTER TABLE `ws_admin`
MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_aufstellung`
--
ALTER TABLE `ws_aufstellung`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_badge`
--
ALTER TABLE `ws_badge`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_briefe`
--
ALTER TABLE `ws_briefe`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_cup`
--
ALTER TABLE `ws_cup`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_cup_round`
--
ALTER TABLE `ws_cup_round`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_konto`
--
ALTER TABLE `ws_konto`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_liga`
--
ALTER TABLE `ws_liga`
MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_matchreport`
--
ALTER TABLE `ws_matchreport`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_news`
--
ALTER TABLE `ws_news`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_notification`
--
ALTER TABLE `ws_notification`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_premiumpayment`
--
ALTER TABLE `ws_premiumpayment`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_premiumstatement`
--
ALTER TABLE `ws_premiumstatement`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_randomevent`
--
ALTER TABLE `ws_randomevent`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_saison`
--
ALTER TABLE `ws_saison`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_shoutmessage`
--
ALTER TABLE `ws_shoutmessage`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_spiel`
--
ALTER TABLE `ws_spiel`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_spieler`
--
ALTER TABLE `ws_spieler`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_spiel_berechnung`
--
ALTER TABLE `ws_spiel_berechnung`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_spiel_text`
--
ALTER TABLE `ws_spiel_text`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_sponsor`
--
ALTER TABLE `ws_sponsor`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_stadion`
--
ALTER TABLE `ws_stadion`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_stadiumbuilding`
--
ALTER TABLE `ws_stadiumbuilding`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_stadium_builder`
--
ALTER TABLE `ws_stadium_builder`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_stadium_construction`
--
ALTER TABLE `ws_stadium_construction`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_tabelle_markierung`
--
ALTER TABLE `ws_tabelle_markierung`
MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_teamoftheday`
--
ALTER TABLE `ws_teamoftheday`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_trainer`
--
ALTER TABLE `ws_trainer`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_training`
--
ALTER TABLE `ws_training`
MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_trainingslager`
--
ALTER TABLE `ws_trainingslager`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_trainingslager_belegung`
--
ALTER TABLE `ws_trainingslager_belegung`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_training_unit`
--
ALTER TABLE `ws_training_unit`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_transfer`
--
ALTER TABLE `ws_transfer`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_transfer_angebot`
--
ALTER TABLE `ws_transfer_angebot`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_transfer_offer`
--
ALTER TABLE `ws_transfer_offer`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_user`
--
ALTER TABLE `ws_user`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_userabsence`
--
ALTER TABLE `ws_userabsence`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_useractionlog`
--
ALTER TABLE `ws_useractionlog`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_user_inactivity`
--
ALTER TABLE `ws_user_inactivity`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_verein`
--
ALTER TABLE `ws_verein`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_youthmatch`
--
ALTER TABLE `ws_youthmatch`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_youthmatch_reportitem`
--
ALTER TABLE `ws_youthmatch_reportitem`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_youthmatch_request`
--
ALTER TABLE `ws_youthmatch_request`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_youthplayer`
--
ALTER TABLE `ws_youthplayer`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `ws_youthscout`
--
ALTER TABLE `ws_youthscout`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `ws_aufstellung`
--
ALTER TABLE `ws_aufstellung`
ADD CONSTRAINT `ws_aufstellung_verein_id_fk` FOREIGN KEY (`verein_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_briefe`
--
ALTER TABLE `ws_briefe`
ADD CONSTRAINT `ws_briefe_user_id_fk` FOREIGN KEY (`absender_id`) REFERENCES `ws_user` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_buildings_of_team`
--
ALTER TABLE `ws_buildings_of_team`
ADD CONSTRAINT `ws_buildings_of_team_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `ws_stadiumbuilding` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_buildings_of_team_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_cup`
--
ALTER TABLE `ws_cup`
ADD CONSTRAINT `ws_cup_winner_id_fk` FOREIGN KEY (`winner_id`) REFERENCES `ws_verein` (`id`) ON DELETE SET NULL;

--
-- Constraints der Tabelle `ws_cup_round`
--
ALTER TABLE `ws_cup_round`
ADD CONSTRAINT `ws_cupround_cup_id_fk` FOREIGN KEY (`cup_id`) REFERENCES `ws_cup` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_cupround_fromloosers_id_fk` FOREIGN KEY (`from_loosers_round_id`) REFERENCES `ws_cup_round` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_cupround_fromwinners_id_fk` FOREIGN KEY (`from_winners_round_id`) REFERENCES `ws_cup_round` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_cup_round_group`
--
ALTER TABLE `ws_cup_round_group`
ADD CONSTRAINT `ws_cupgroup_team_id_fk` FOREIGN KEY (`team_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_cup_round_group_next`
--
ALTER TABLE `ws_cup_round_group_next`
ADD CONSTRAINT `ws_groupnext_round_fk` FOREIGN KEY (`cup_round_id`) REFERENCES `ws_cup_round` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_groupnext_tagetround_fk` FOREIGN KEY (`target_cup_round_id`) REFERENCES `ws_cup_round` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_cup_round_pending`
--
ALTER TABLE `ws_cup_round_pending`
ADD CONSTRAINT `ws_cuproundpending_round_fk` FOREIGN KEY (`cup_round_id`) REFERENCES `ws_cup_round` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_cuproundpending_team_id_fk` FOREIGN KEY (`team_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_konto`
--
ALTER TABLE `ws_konto`
ADD CONSTRAINT `ws_konto_verein_id_fk` FOREIGN KEY (`verein_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_leaguehistory`
--
ALTER TABLE `ws_leaguehistory`
ADD CONSTRAINT `ws_leaguehistory_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_leaguehistory_ibfk_2` FOREIGN KEY (`season_id`) REFERENCES `ws_saison` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_leaguehistory_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `ws_user` (`id`) ON DELETE SET NULL;

--
-- Constraints der Tabelle `ws_matchreport`
--
ALTER TABLE `ws_matchreport`
ADD CONSTRAINT `ws_matchreport_message_id_fk` FOREIGN KEY (`message_id`) REFERENCES `ws_spiel_text` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_matchreport_spiel_id_fk` FOREIGN KEY (`match_id`) REFERENCES `ws_spiel` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_nationalplayer`
--
ALTER TABLE `ws_nationalplayer`
ADD CONSTRAINT `ws_nationalp_player_id_fk` FOREIGN KEY (`player_id`) REFERENCES `ws_spieler` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_nationalp_team_id_fk` FOREIGN KEY (`team_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_notification`
--
ALTER TABLE `ws_notification`
ADD CONSTRAINT `ws_notification_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `ws_user` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_premiumpayment`
--
ALTER TABLE `ws_premiumpayment`
ADD CONSTRAINT `ws_premiumpayment_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `ws_user` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_premiumstatement`
--
ALTER TABLE `ws_premiumstatement`
ADD CONSTRAINT `ws_premium_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `ws_user` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_randomevent_occurrence`
--
ALTER TABLE `ws_randomevent_occurrence`
ADD CONSTRAINT `ws_randomevent_occurrence_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_randomevent_occurrence_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `ws_user` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_randomevent_occurrence_ibfk_3` FOREIGN KEY (`event_id`) REFERENCES `ws_randomevent` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_shoutmessage`
--
ALTER TABLE `ws_shoutmessage`
ADD CONSTRAINT `ws_shoutmessage_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ws_user` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_shoutmessage_ibfk_2` FOREIGN KEY (`match_id`) REFERENCES `ws_spiel` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_spiel`
--
ALTER TABLE `ws_spiel`
ADD CONSTRAINT `ws_match_guest_user_id_fk` FOREIGN KEY (`gast_user_id`) REFERENCES `ws_user` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `ws_match_home_user_id_fk` FOREIGN KEY (`home_user_id`) REFERENCES `ws_user` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `ws_spiel_gast_id_fk` FOREIGN KEY (`gast_verein`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_spiel_home_id_fk` FOREIGN KEY (`home_verein`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_spiel_saison_id_fk` FOREIGN KEY (`saison_id`) REFERENCES `ws_saison` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_spieler`
--
ALTER TABLE `ws_spieler`
ADD CONSTRAINT `ws_spieler_verein_id_fk` FOREIGN KEY (`verein_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_spiel_berechnung`
--
ALTER TABLE `ws_spiel_berechnung`
ADD CONSTRAINT `ws_berechnung_spieler_id_fk` FOREIGN KEY (`spieler_id`) REFERENCES `ws_spieler` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_berechnung_spiel_id_fk` FOREIGN KEY (`spiel_id`) REFERENCES `ws_spiel` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_stadiumbuilding`
--
ALTER TABLE `ws_stadiumbuilding`
ADD CONSTRAINT `ws_stadiumbuilding_ibfk_1` FOREIGN KEY (`required_building_id`) REFERENCES `ws_stadiumbuilding` (`id`) ON DELETE SET NULL;

--
-- Constraints der Tabelle `ws_stadium_construction`
--
ALTER TABLE `ws_stadium_construction`
ADD CONSTRAINT `ws_construction_builder_id_fk` FOREIGN KEY (`builder_id`) REFERENCES `ws_stadium_builder` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_construction_team_id_fk` FOREIGN KEY (`team_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_stadium_construction_ibfk_1` FOREIGN KEY (`builder_id`) REFERENCES `ws_stadium_builder` (`id`);

--
-- Constraints der Tabelle `ws_teamoftheday`
--
ALTER TABLE `ws_teamoftheday`
ADD CONSTRAINT `ws_teamofday_player_id_fk` FOREIGN KEY (`player_id`) REFERENCES `ws_spieler` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_teamofday_season_id_fk` FOREIGN KEY (`season_id`) REFERENCES `ws_saison` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_team_league_statistics`
--
ALTER TABLE `ws_team_league_statistics`
ADD CONSTRAINT `ws_statistics_season_id_fk` FOREIGN KEY (`season_id`) REFERENCES `ws_saison` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_statistics_team_id_fk` FOREIGN KEY (`team_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_trainingslager_belegung`
--
ALTER TABLE `ws_trainingslager_belegung`
ADD CONSTRAINT `ws_trainingslager_belegung_fk` FOREIGN KEY (`lager_id`) REFERENCES `ws_trainingslager` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_trainingslager_verein_fk` FOREIGN KEY (`verein_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_training_unit`
--
ALTER TABLE `ws_training_unit`
ADD CONSTRAINT `ws_training_verein_id_fk` FOREIGN KEY (`team_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_transfer`
--
ALTER TABLE `ws_transfer`
ADD CONSTRAINT `ws_transfer_buyerclub_fk` FOREIGN KEY (`buyer_club_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_transfer_buyeruser_fk` FOREIGN KEY (`buyer_user_id`) REFERENCES `ws_user` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `ws_transfer_sellerclub_fk` FOREIGN KEY (`seller_club_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_transfer_selleruser_fk` FOREIGN KEY (`seller_user_id`) REFERENCES `ws_user` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `ws_transfer_spieler_id_fk` FOREIGN KEY (`spieler_id`) REFERENCES `ws_spieler` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_transfer_angebot`
--
ALTER TABLE `ws_transfer_angebot`
ADD CONSTRAINT `ws_transfer_angebot_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `ws_user` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_transfer_offer`
--
ALTER TABLE `ws_transfer_offer`
ADD CONSTRAINT `ws_toffer_buyerclub_fk` FOREIGN KEY (`receiver_club_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_toffer_sellerclub_fk` FOREIGN KEY (`sender_club_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_toffer_selleruser_fk` FOREIGN KEY (`sender_user_id`) REFERENCES `ws_user` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_toffer_spieler_id_fk` FOREIGN KEY (`player_id`) REFERENCES `ws_spieler` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_userabsence`
--
ALTER TABLE `ws_userabsence`
ADD CONSTRAINT `ws_userabsence_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ws_user` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_userabsence_ibfk_2` FOREIGN KEY (`deputy_id`) REFERENCES `ws_user` (`id`) ON DELETE SET NULL;

--
-- Constraints der Tabelle `ws_useractionlog`
--
ALTER TABLE `ws_useractionlog`
ADD CONSTRAINT `ws_useractionlog_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ws_user` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_user_inactivity`
--
ALTER TABLE `ws_user_inactivity`
ADD CONSTRAINT `ws_user_inactivity_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `ws_user` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_verein`
--
ALTER TABLE `ws_verein`
ADD CONSTRAINT `ws_verein_liga_id_fk` FOREIGN KEY (`liga_id`) REFERENCES `ws_liga` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_verein_original_user_id_fk` FOREIGN KEY (`user_id_actual`) REFERENCES `ws_user` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `ws_verein_sponsor_id_fk` FOREIGN KEY (`sponsor_id`) REFERENCES `ws_sponsor` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `ws_verein_stadion_id_fk` FOREIGN KEY (`stadion_id`) REFERENCES `ws_stadion` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `ws_verein_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `ws_user` (`id`) ON DELETE SET NULL;

--
-- Constraints der Tabelle `ws_youthmatch`
--
ALTER TABLE `ws_youthmatch`
ADD CONSTRAINT `ws_youthmatch_guest_id_fk` FOREIGN KEY (`guest_team_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_youthmatch_home_id_fk` FOREIGN KEY (`home_team_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_youthmatch_player`
--
ALTER TABLE `ws_youthmatch_player`
ADD CONSTRAINT `ws_ymatchplayer_match_id_fk` FOREIGN KEY (`match_id`) REFERENCES `ws_youthmatch` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_ymatchplayer_player_id_fk` FOREIGN KEY (`player_id`) REFERENCES `ws_youthplayer` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_ymatchplayer_team_id_fk` FOREIGN KEY (`team_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_youthmatch_player_ibfk_1` FOREIGN KEY (`match_id`) REFERENCES `ws_youthmatch` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_youthmatch_reportitem`
--
ALTER TABLE `ws_youthmatch_reportitem`
ADD CONSTRAINT `ws_ymatchreport_match_id_fk` FOREIGN KEY (`match_id`) REFERENCES `ws_youthmatch` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `ws_youthmatch_reportitem_ibfk_1` FOREIGN KEY (`match_id`) REFERENCES `ws_youthmatch` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_youthmatch_request`
--
ALTER TABLE `ws_youthmatch_request`
ADD CONSTRAINT `ws_youthrequest_team_id_fk` FOREIGN KEY (`team_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `ws_youthplayer`
--
ALTER TABLE `ws_youthplayer`
ADD CONSTRAINT `ws_youthplayer_team_id_fk` FOREIGN KEY (`team_id`) REFERENCES `ws_verein` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
