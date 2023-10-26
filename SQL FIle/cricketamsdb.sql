-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 06:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricketamsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(200) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 9898898898, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2020-05-19 06:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `tblcoaches`
--

CREATE TABLE `tblcoaches` (
  `ID` int(11) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `CommunicationAddress` mediumtext DEFAULT NULL,
  `Qualification` mediumtext DEFAULT NULL,
  `Achivement` mediumtext DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `ProfilePics` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcoaches`
--

INSERT INTO `tblcoaches` (`ID`, `Name`, `MobileNumber`, `Email`, `CommunicationAddress`, `Qualification`, `Achivement`, `Description`, `ProfilePics`, `CreationDate`) VALUES
(1, 'Anil Kumble', 7987979700, 'anilkumble@gmail.com', 'K-897, Mayur Vihar&nbsp;<div>New Delhi</div>', 'BE', '<p style=\"margin: unset; padding: 0px; border: 0px; vertical-align: baseline; font-size: 14px; width: 638px; float: none; clear: both; color: rgb(34, 34, 34); font-stretch: normal; text-align: justify; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; line-height: 1.5 !important; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">Kumble made his first-class debut for</span><a href=\"https://en.wikipedia.org/wiki/Karnataka_cricket_team\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration-line: underline;\">&nbsp;</a><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">Karnataka against</span><a href=\"https://en.wikipedia.org/wiki/Hyderabad_cricket_team\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(51, 51, 51); text-decoration-line: underline;\">&nbsp;</a><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">Hyderabad on 30 November 1989. But his career kick started when he single-handedly made the Rest of India team victorious by his impressive figures of 13/138, making his way for</span>&nbsp;the twin tours of South Africa and Zimbabwe.</p><p style=\"margin: unset; padding: 0px; border: 0px; vertical-align: baseline; font-size: 14px; width: 638px; float: none; clear: both; color: rgb(34, 34, 34); font-stretch: normal; text-align: justify; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; line-height: 1.5 !important; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important;\"><br></p><p style=\"margin: unset; padding: 0px; border: 0px; vertical-align: baseline; font-size: 14px; width: 638px; float: none; clear: both; color: rgb(34, 34, 34); font-stretch: normal; text-align: justify; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; line-height: 1.5 !important; background-image: initial !important; background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">It was during this 1992 India tour of South Africa that he established himself as a quality and magical spinner when he finished his tour as the highest wicket taker from Indian side which include his 6/53 figures in the second test in Johannesburg, a ground known to favour fast bowlers.</span></p>', '<span style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Anil \'Jumbo\' Kumble, an unorthodox spinner who&nbsp;</span><i style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">didn\'t</i><span style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">&nbsp;turn the ball much, was perhaps India’s greatest ever match-winner. Tall and lithe in his build, Kumble was not the quintessential, everyday spinner. He produced no lateral magic from the surface like Shane Warne did, nor did he creat ripples around the batsmen like the wily old fox, Muralitharan. Yet he ended up with 619 Test wickets, second only to the magical duo of Shane Warne and Muttiah Muralitharan. In the process, he gained enormous goodwill amongst fans and his fellow teammates for being fiercely aggressive and competitive on the field, and unerringly composed and humble off it. Anil Kumble was perhaps cricket\'s last gentleman.</span><br style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><br style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><span style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Kumble did have one thing in his favour: he was a hard-worker and his tough as nails attitude towards the game stood positively. Anil did not have the greatest of starts to his career: a few fleeting appearances in the Australasia Cup in 1990 and the subsequent ODI series in England gave an early indication of his nagging accuracy. He was surprisingly overlooked for the subsequent tour of Australia and the 1992 World Cup Down Under.</span><br>', '20e2b7815ac2e8d402faca3fd3184e571665247461.jpg', '2022-08-02 06:56:18'),
(2, 'Ravishankar Jayadritha Shastri', 9876549798, 'ravijs@gmail.com', 'Mumbai India', 'NA', '<span style=\"color: rgb(34, 34, 34); font-family: helvetica, &quot;Segoe UI&quot;, Arial, sans-serif; font-size: 14px;\">The World Championship of Cricket in 1985 marked a new chapter in India\'s cricketing journey. Not only was it one of those rare televised tournaments in India, it also marked the start of one-day cricket as we know it today - with coloured clothes and under floodlights. India were also in with a mission to prove that their 1983 World Cup win was no fluke. Ravi Shastri maintained his top form throughout, both with ball and as an opener and helped India win each of their matches en route the trophy. The Audi, a Man of the Series prize was his.</span><br style=\"color: rgb(34, 34, 34); font-family: helvetica, &quot;Segoe UI&quot;, Arial, sans-serif; font-size: 14px;\"><br style=\"color: rgb(34, 34, 34); font-family: helvetica, &quot;Segoe UI&quot;, Arial, sans-serif; font-size: 14px;\"><span style=\"color: rgb(34, 34, 34); font-family: helvetica, &quot;Segoe UI&quot;, Arial, sans-serif; font-size: 14px;\">Another defining moment came in the domestic circuit, against poor Tilak Raj of Baroda. In one of those instances of breaking out of his perceived defensive mould, Shastri launched an offence that culminated in six sixes in an over - a record achieved by only three others in the world till date.</span><br>', '<p style=\"border: 0px solid; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgb(147 197 253/0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-left: 0px; color: rgb(72, 73, 74); font-family: BentonSans, Arial, &quot;Noto Sans&quot;, sans-serif; font-size: medium;\">For over a decade, Ravi Shastri rendered sterling service to Indian cricket as an obdurate opening or middle-order batter, a left-arm spinner integral to the attack, and long-time deputy to a couple of captains.</p><p style=\"border: 0px solid; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgb(147 197 253/0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-left: 0px; color: rgb(72, 73, 74); font-family: BentonSans, Arial, &quot;Noto Sans&quot;, sans-serif; font-size: medium;\">Tall and good-looking and with an image to match, Shastri was glamorous in an age when few cricketers were - no matter if it was in stark contrast to his playing style, which was stodgy, with pushes and prods where others used more lavish strokes; with the ball, he was mostly not more than defensive, pegging away on a good length. Shastri was like Navjot Sidhu in reverse: starting off as a lower-order hitter, he ended up as a stonewaller at the top of the order. (Though occasionally, contrary to his image as a dour plodder, he went into top gear, as when he equalled Garry Sobers\' record of six sixes in an over, in a Ranji Trophy game in January 1985.)</p><p style=\"border: 0px solid; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgb(147 197 253/0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-left: 0px; color: rgb(72, 73, 74); font-family: BentonSans, Arial, &quot;Noto Sans&quot;, sans-serif; font-size: medium;\">His detractors charged that he batted too slowly, that he was selfish in his batting, that he continued to be in the India side only because his Bombay team-mate Sunil Gavaskar was captain. But Shastri let his performances on the field speak for themselves.</p><p style=\"border: 0px solid; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgb(147 197 253/0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-left: 0px; color: rgb(72, 73, 74); font-family: BentonSans, Arial, &quot;Noto Sans&quot;, sans-serif; font-size: medium;\">No one could deny his immense value to the side, his commitment to the team\'s cause, and his consistency. Against Australia he averaged a formidable 77.75 from ten Tests, about a third of those runs coming in Sydney in 1992, when he took young debtuant Shane Warne to the cleaners in making a double-hundred. Another highlight down under came in 1985, when he starred in India\'s win in the World Championship of Cricket, with eight wickets and 182 runs in five ODIs - the most memorable expression of his value as a utility white-ball player.</p><p style=\"border: 0px solid; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgb(147 197 253/0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-left: 0px; color: rgb(72, 73, 74); font-family: BentonSans, Arial, &quot;Noto Sans&quot;, sans-serif; font-size: medium;\">A deep thinker and a shrewd strategist, he led India to victory in the one Test he captained - against West Indies in Madras in 1988.</p><p style=\"border: 0px solid; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgb(147 197 253/0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-left: 0px; color: rgb(72, 73, 74); font-family: BentonSans, Arial, &quot;Noto Sans&quot;, sans-serif; font-size: medium;\">Though he played 80 Tests, Shastri was just 30 when he appeared in his last match. He went on to a career as a commentator known for his combativeness and his robust way with a cliché. He then served as India team director, and later, coach for a spell during which the team chalked up two landmark Test series wins in Australia.</p>', '2c9b50e4b0d2ebe39a09ec7cd389d8981665247835.jpg', '2022-08-02 06:59:19'),
(3, 'Gary Christian', 5987979797, 'garychristian@test.com', 'South Africa', 'Graduation done in Bsc', '<div style=\"text-align: justify;\"><font color=\"#666666\" face=\"Open Sans, sans-serif\"><span style=\"font-size: 14px; background-color: rgb(247, 247, 247);\">NA</span></font></div>', '<div><font color=\"#666666\">Gary John Christian (born 7 August 1971) is an English professional golfer who has played on the Web.com Tour and the PGA Tour.</font></div><div><font color=\"#666666\"><br></font></div><div><font color=\"#666666\">Christian was born in Carshalton, England. As a junior, he played golf at Addington Palace Golf Club, England. He played college golf at Auburn University and turned professional in 1997. Christian was a member of the Nationwide Tour in 1999 and has been a member since 2006. He picked up his first win on tour at the 2009 Northeast Pennsylvania Classic, where he defeated Mathias Grönberg in a playoff that went to nine holes, equaling a Nationwide Tour record for longest playoff.</font></div><div><font color=\"#666666\"><br></font></div><div><font color=\"#666666\">Christian has also played on several mini tours during his career where he has won over 30 events. The tours he has won on are the Dakotas Tour, All-Star Emerald Coast Tour, DP Tour, Teardrop Tour and the Tight Lies Tour.</font></div><div><font color=\"#666666\"><br></font></div><div><font color=\"#666666\">Christian appeared on the TV show The Weakest Link in 2001. He is named after Gary Player.</font></div><div><font color=\"#666666\"><br></font></div><div><font color=\"#666666\">At age 40, Christian finally graduated to the PGA Tour after finishing ninth on the Nationwide Tour\'s money list. Christian had never played in a PGA Tour event until 2012. He played in 28 events in 2012, making 18 cuts and having a best finish of T-10 at the RBC Canadian Open.</font></div><div><font color=\"#666666\"><br></font></div><div><font color=\"#666666\">After Christian\'s touring career ended, he became a commentator on The Golf Channel.</font></div>', '50d58161bb456d7cc50d386e1d6b7b421665248086.jpg', '2022-08-02 06:56:18'),
(4, 'Suresh Raina', 7876549798, 'sureshraina@gmail.com', 'Ghaziabad Up India', 'b tytetruieybvtyiuveytbuoitynurotyu', '<ul class=\"i8Z77e\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif;\"><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style-type: disc;\">First Indian player to score 6000 as well as 8000 runs in his Twenty20 Career.</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style-type: disc;\">Suresh Raina is the first ever cricketer to reach 5,000 runs in IPL.</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style-type: disc;\">He holds the record of most no. ...</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style-type: disc;\">Suresh Raina holds the record for the most runs scored in the powerplay in an IPL match.</li></ul>', '<span style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Arguably among India\'s finest T20 batsmen, Suresh Raina stormed into the international scene as a teenage prodigy during the Greg Chappell regime. Typical left-hander\'s elegance, power game and a fine temperament were the hallmark of Raina the batsman and he exhibited it beautifully during his ODI debut in 2005. After a stupendous start though, his form dipped over the next year and that was followed by a serious injury which meant that the career had hit a roadblock towards the latter part of 2007. The talent was obvious but Raina needed to translate that on the field as well. That\'s when the IPL Caravan debuted in 2008.</span><br style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><br style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><span style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Raina was picked by the Chennai franchise for a fairly decent price and he put on a stellar show during the first season of the IPL - the result of which was a comeback to the national side soon after. Thereafter, Raina cemented his spot as a capable finisher for the side, often chipping in with priceless cameos apart from getting the sizable knocks whenever the opportunities came by. With India having a heavy top and middle order, Raina\'s role mostly was to provide the final flourish to the innings. The numbers don\'t exactly reveal how valuable he was during the 2008-2011 phase which was easily among the finest stages of Team India\'s ODI history, capped with World Cup glory as well.</span><br style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><br style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><span style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">A big example of Raina\'s big match temperament was the way he chipped in during the 2011 quarterfinal against Australia and then the semifinal against Pakistan. Both were cameos statistically but were worth its weight in gold. There were several such instances of him taking India across the line in pressure situations. The lofted inside out drive and an agricultural hoick over mid-wicket are the trademark Suresh Raina shots which he doles out with elan when in prime form. While he relished white-ball cricket, he couldn\'t replicate it in the longest version of the game. Although his Test career started with a fine century against Sri Lanka, his form fizzed away thereafter due to his imminent struggles against pace and swing.</span><br style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><br style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><span style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Raina was the first Indian player to hold a century in all three formats of the game and although red-ball cricket wasn\'t his cup of tea, his contributions in the other formats were valuable to Indian cricket. There has always been immense criticism about his short ball phobia although in limited-overs cricket, that cannot really be a derailing flaw for a batsman with the modern day rules and regulations. His ODI century in England during the 2014 tour promised a revival regarding that aspect of his game but after the 2015 World Cup, he endured a couple of poor series which led to his axing from the side.</span><br style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><br style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><span style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Time away from the Indian team wasn\'t good for Raina as he wasn\'t quite able to make the runs in domestic cricket. He still played T20Is although he found himself strangely dropped from there as well, ironically after a Man of the Match performance against England in early 2017. The criteria probably was the lack of First-class games in the 2016-17 season where personal issues affected his career a touch while fitness (read physique) dipped as well. To add to his misery, several contenders like Kedar Jadhav, Manish Pandey, Hardik Pandya and KL Rahul had all thrown their hats in the ring. Raina had the odds against him although his age and utility skills meant that he was never really out of the reckoning in the shorter formats.</span><br style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><br style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><span style=\"color: rgb(34, 34, 34); font-family: helvetica, \" segoe=\"\" ui\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">After a really lean patch, Raina shone in the Syed Mushtaq Ali Trophy, India\'s domestic T20 tournament, in early 2018 and earned himself a recall to the Indian side for the T20 series in South Africa. He did decently well in South Africa, which pressed the selectors persisted with him for the Nidahas Trophy and the England tour. However, he was not picked for the national side after that due to not-so-great fitness levels and others grabbing opportunities. This meant he was out of the reckoning for the 2019 World Cup as well.</span><br>', 'c65683faa80a1e9372f9c26d4fe5a7481665248287.jpg', '2022-08-02 06:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL,
  `ReadDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Message`, `EnquiryDate`, `IsRead`, `ReadDate`) VALUES
(1, 'ggjgjg', 'jhgjhghj', 4697987987, 'g@gmail.com', 'lkjlkjlkj', '2020-05-22 05:48:27', 1, '2020-05-22 05:48:27'),
(2, 'Guru', 'Kripa', 1879879878, 'guru@gmail.com', 'Sample Text', '2020-05-22 07:27:23', 1, '2020-05-23 12:58:03'),
(3, 'ABC', 'XYZ', 1236547890, 'test@gmail.com', 'Test query', '2020-05-25 10:43:03', 1, '2020-05-25 10:44:22'),
(6, 'Singh', 'KL', 4654646464, 'rahul@gmail.com', 'Hi give me details of tournament', '2022-08-05 06:59:56', 1, '2022-10-08 18:23:28'),
(7, 'Krishna', 'Chaudhary', 7898787797, 'kris@hmail.com', 'kjhjkh', '2022-08-05 07:01:13', 1, '2022-10-08 18:11:41'),
(8, 'Amit', 'Kumar', 1234567890, 'amoit01@gmail.com', 'This is for testing.', '2022-10-08 18:37:39', 1, '2022-10-08 18:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblfees`
--

CREATE TABLE `tblfees` (
  `ID` int(10) NOT NULL,
  `Duration` varchar(250) DEFAULT NULL,
  `NumberofSession` mediumtext DEFAULT NULL,
  `Fees` decimal(10,0) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfees`
--

INSERT INTO `tblfees` (`ID`, `Duration`, `NumberofSession`, `Fees`, `CreationDate`) VALUES
(2, '4 Weeks', '<div>A. 14Net practice sessions (3 hours each)</div><div>B. 4 Physical fitness sessions</div><div>C. 2 Mental skill session</div><div>D. 2 Friendly Fixtures</div>', '10000', '2022-08-02 12:27:28'),
(3, '6 Weeks', '<div>A. 24 Net Practice sessions</div><div>B. 10 Physical Fitness sessions</div><div>C. 6 Mental skill session</div><div>D. 5 Friendly Fixtures</div>', '40000', '2022-08-02 12:28:17'),
(4, '8 Weeks', '<div>A. 28 Net Practice sessions</div><div>B. 12 Physical Fitness sessions</div><div>C. 6 Mental skill session</div><div>D. 8 Friendly Fixtures</div>', '50000', '2022-08-02 12:28:44'),
(5, '3 Month', '<div>A. 32 Net Practice sessions</div><div>B. 12 Physical Fitness sessions</div><div>C. 6 Mental skill session</div><div>D. 2 special interactions with Test players</div><div>E. 8 friendly Fixtures</div>', '65000', '2022-08-02 12:29:13'),
(6, '6 Month', '<div>A. 32 Net Practice sessions</div><div>B. 12 Physical Fitness sessions</div><div>C. 6 Mental skill session</div><div>D. 24 special interactions with Test players</div><div>E. 10 friendly Fixtures</div>', '65000', '2022-08-02 12:30:17'),
(7, '1 Yrs', '<div>A. 32 Net Practice sessions</div><div>B. 12 Physical Fitness sessions</div><div>C. 6 Mental skill session</div><div>D. 2 special interactions with Test players</div><div>E. 8 friendly Fixtures</div><div>F.Free Breakfast</div><div>g.pickup and drop facility</div>', '120000', '2022-08-02 12:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT current_timestamp(),
  `OpenningTime` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `OpenningTime`) VALUES
(1, 'aboutus', 'About Us', '<ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 1.313em; margin-left: 1.655em;\" times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" center;=\"\" background-color:=\"\" rgb(255,=\"\" 246,=\"\" 246);\"=\"\"><li style=\"text-align: left;\"><font color=\"#000000\">Cricket Academy was set up with the aim of giving the cricket fans a platform to learn, hone and showcase their skills by giving them high quality solutions for all things related to cricket be it coaching, purchasing equipment, leasing facilities, participating in tournaments and the like. Our in-depth curriculum ensures that our trainees are learning the concepts that are really employed by elite cricketers as we seek to make them confident and competent both on and off the field. Moreover, we have our dedicated app which is up and running and offers offline and online help to coaches, players and parents alike. We periodically organize tournaments locally as well as schedule overseas tours to ensure that our trainees remain match ready all year round. High quality &amp; certified coaches and training facilities/ venues will be available to provide the enriched training experience. Join us to see your cricketing aspirations manifest into reality!</font></li></ul>', NULL, NULL, '2020-05-20 07:21:52', NULL),
(2, 'contactus', 'Contact Us', 'D-204, Hole Town South West, Delhi-110096,India', 'info@gmail.com', 1122334455, '2020-05-20 07:24:07', '9 am To 8 Pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblregistration`
--

CREATE TABLE `tblregistration` (
  `ID` int(5) NOT NULL,
  `UserID` int(5) DEFAULT NULL,
  `Duration` int(5) DEFAULT NULL,
  `RegistrationNumber` int(10) DEFAULT NULL,
  `Category` varchar(250) DEFAULT NULL,
  `PlayerName` varchar(250) DEFAULT NULL,
  `Nationality` varchar(250) DEFAULT NULL,
  `FatherName` varchar(250) DEFAULT NULL,
  `MotherName` varchar(250) DEFAULT NULL,
  `DateofBirth` date DEFAULT NULL,
  `Sex` varchar(50) DEFAULT NULL,
  `GuardianMobilenumber` bigint(10) DEFAULT NULL,
  `Residentlandlinenumber` bigint(10) DEFAULT NULL,
  `Emailid` varchar(250) DEFAULT NULL,
  `Height` int(5) DEFAULT NULL,
  `ResidentAddress` mediumtext DEFAULT NULL,
  `District` varchar(250) DEFAULT NULL,
  `State` varchar(250) DEFAULT NULL,
  `Pincode` int(10) DEFAULT NULL,
  `Weight` int(5) DEFAULT NULL,
  `Tshirtsize` varchar(45) DEFAULT NULL,
  `Level` varchar(50) DEFAULT NULL,
  `BowlingArm` varchar(50) DEFAULT NULL,
  `BowlingPace` varchar(50) DEFAULT NULL,
  `WicketKeeping` varchar(50) DEFAULT NULL,
  `Batting` varchar(50) DEFAULT NULL,
  `FirstPreference` varchar(50) DEFAULT NULL,
  `CaptancyExperience` varchar(50) DEFAULT NULL,
  `Photo` varchar(250) DEFAULT NULL,
  `RegistrationDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblregistration`
--

INSERT INTO `tblregistration` (`ID`, `UserID`, `Duration`, `RegistrationNumber`, `Category`, `PlayerName`, `Nationality`, `FatherName`, `MotherName`, `DateofBirth`, `Sex`, `GuardianMobilenumber`, `Residentlandlinenumber`, `Emailid`, `Height`, `ResidentAddress`, `District`, `State`, `Pincode`, `Weight`, `Tshirtsize`, `Level`, `BowlingArm`, `BowlingPace`, `WicketKeeping`, `Batting`, `FirstPreference`, `CaptancyExperience`, `Photo`, `RegistrationDate`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 1, 1, 994317688, 'Under 12', 'Nihkil', 'Indian', 'Mr.R.K Mukherji', 'Mss Naina Mukherji', '2018-01-05', 'Male', 7979797987, 456789123, 'naina@gmail.com', 45, 'H-911 Vaikila Apartmaent New Delhi', 'Delhi', 'Delhi', 110012, 35, 'Medium', NULL, NULL, NULL, '', '', '', '', 'ad04ad2d96ae326a9ca9de47d9e2fc741659674424.jpg', '2022-08-05 04:40:24', 'Cancelled', 'Cancelled', '2022-08-12 06:47:16'),
(2, 3, 5, 162132927, 'Under 14', 'Mahesh Gupta', 'Indian', 'Neilesh Gupta', 'Reenu Gupta', '2016-05-06', 'Male', 8977979797, 7894561236, 'neil@gmail.com', 45, 'kjhjkhjkhjkb g cre\r\nituoivtu\r\nuoi4uyoi5', 'Allahabad', 'UP', 201018, 52, 'Medium', 'School Level', 'Right', 'Off Spinner', 'Yes', 'Right', 'Batting', 'Yes', 'ecebbecf28c2692aeb021597fbddb1741659676150.jpg', '2022-08-05 05:09:10', 'Registration Approved', 'Approved', '2022-10-08 18:02:15'),
(3, 2, 3, 804673749, 'Under 14', 'Mahesh Gupta', 'Indian', 'Neilesh Gupta', 'Reenu Gupta', '2016-05-06', 'Male', 8977979797, 7894561236, 'neil@gmail.com', 45, 'kjhjkhjkhjkb g cre\r\nituoivtu\r\nuoi4uyoi5', 'Allahabad', 'UP', 201018, 52, 'Medium', 'School Level', 'Right', 'Off Spinner', 'Yes', 'Right', 'Batting', 'Yes', 'ecebbecf28c2692aeb021597fbddb1741659676348.jpg', '2022-08-05 05:12:28', 'You application has been approved', 'Approved', '2022-08-12 06:43:31'),
(4, 2, 6, 624069265, 'Under 17', 'Tanvi Aryan', 'Indian', 'Manish Aryan', 'Manisha Aryan', '2092-05-10', 'Female', 7879879879, 7894561236, 'tanvi@gmail.com', 56, 'huyui\r\nuieryfui\r\noiuoitugioy', 'Abc Nagar', 'UP', 556236, 50, 'Male', 'Club Level', 'Both', 'Medium', 'Yes', 'Right', 'Bowling', 'No', 'ecebbecf28c2692aeb021597fbddb1741660113415.jpg', '2022-08-10 06:36:55', NULL, NULL, '2022-08-10 06:41:32'),
(5, 2, 7, 733275782, 'Under 12', 'Mahesh Aryan', 'Indian', 'jkhjkh', 'hkjh', '2012-01-05', 'Female', 9879879879, 1234567895, 'vfg@gmail.com', 30, 'jhgjhghjgjhg\r\njhgjhgjh\r\nuyuyutyut', 'Allahabad', 'UP', 201516, 36, 'Medium', 'School Level', 'Right', 'Off Spinner', 'No', 'Left', 'Batting', 'Yes', 'ecebbecf28c2692aeb021597fbddb1741660113939.jpg', '2022-08-10 06:45:39', NULL, NULL, NULL),
(6, 2, 3, 865212354, 'Under 14', 'Joehn Doe', 'Indian', 'Test', 'Test', '2008-01-01', 'Male', 1425362514, 112345454, 'test@gmail.com', 168, 'ABC Street New Delhi 110001', 'New Delhi', 'Delhi', 110001, 70, 'Male', 'Club Level', 'Left', 'Off Spinner', 'Yes', 'Right', 'Batting', 'Yes', '7c3d349ced52bb5436003349d36d17fa1665246622.png', '2022-10-08 16:30:22', NULL, NULL, NULL),
(7, 4, 3, 303167711, 'Under 17', 'Amit Kumar', 'Indian', 'Ajay Singh', 'Vimla Devi', '2005-01-09', 'Male', 9876654321, 112365412, 'amito1@gmail.com', 120, 'Ab 123 XYZ Street ', 'New Delhi', 'Delhi', 110091, 54, 'Medium', 'School Level', 'Both', 'Leg Spinner', 'No', 'Right', 'Batting', 'No', 'a55e2a168cab56350d686be483defac11665254088.png', '2022-10-08 18:34:48', 'Registration Approved', 'Approved', '2022-10-08 18:35:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(250) DEFAULT NULL,
  `UserName` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(20) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Password` varchar(250) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `UserName`, `MobileNumber`, `Email`, `Password`, `RegDate`) VALUES
(1, 'Moshin', 'mos123', 7894566123, 'mos@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-07-22 11:16:53'),
(2, 'test', 'test123', 7946547897, 'test@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-07-22 12:34:42'),
(3, 'sarita', 'sar123', 9879878970, 'sar@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-08-04 06:56:50'),
(4, 'Amit Kumar', 'amito1', 124567890, 'amoit01@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2022-10-08 18:32:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcoaches`
--
ALTER TABLE `tblcoaches`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfees`
--
ALTER TABLE `tblfees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblregistration`
--
ALTER TABLE `tblregistration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcoaches`
--
ALTER TABLE `tblcoaches`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblfees`
--
ALTER TABLE `tblfees`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblregistration`
--
ALTER TABLE `tblregistration`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
