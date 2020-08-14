-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: Sports
-- ------------------------------------------------------
-- Server version	5.5.5-10.3.15-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Contact`
--

DROP TABLE IF EXISTS `Contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) DEFAULT NULL,
  `Content` longtext DEFAULT NULL,
  `Date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Contact`
--

LOCK TABLES `Contact` WRITE;
/*!40000 ALTER TABLE `Contact` DISABLE KEYS */;
INSERT INTO `Contact` VALUES (1,'ewo','hello!!','03 Aug,2019');
/*!40000 ALTER TABLE `Contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Favourite`
--

DROP TABLE IF EXISTS `Favourite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Favourite` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) DEFAULT NULL,
  `NewsID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_user_id_idx` (`UserID`),
  KEY `fk_user_id1_idx` (`UserID`),
  KEY `fk_new_id_idx` (`NewsID`),
  KEY `fk_news_id_idx` (`NewsID`),
  CONSTRAINT `fk_news_id` FOREIGN KEY (`NewsID`) REFERENCES `News` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_id1` FOREIGN KEY (`UserID`) REFERENCES `User` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Favourite`
--

LOCK TABLES `Favourite` WRITE;
/*!40000 ALTER TABLE `Favourite` DISABLE KEYS */;
INSERT INTO `Favourite` VALUES (1,1,1);
/*!40000 ALTER TABLE `Favourite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Matches`
--

DROP TABLE IF EXISTS `Matches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Matches` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DateMatches` varchar(255) DEFAULT NULL,
  `IDteam1` int(11) DEFAULT NULL,
  `IDteam2` int(11) DEFAULT NULL,
  `goal1` int(11) DEFAULT NULL,
  `goal2` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_team1_idx` (`IDteam1`),
  KEY `fk_team2_idx` (`IDteam2`),
  CONSTRAINT `fk_team1` FOREIGN KEY (`IDteam1`) REFERENCES `team` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_team2` FOREIGN KEY (`IDteam2`) REFERENCES `team` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Matches`
--

LOCK TABLES `Matches` WRITE;
/*!40000 ALTER TABLE `Matches` DISABLE KEYS */;
INSERT INTO `Matches` VALUES (1,'Friday 7th June',1,2,3,2),(2,'Saturday 8th June',3,4,1,4),(3,'Monday 10th June',5,6,2,0),(4,'Tuesday 11th June',7,8,1,3),(5,'Sunday 16th June',13,14,1,0),(6,'Wesnesday 19th June',11,12,0,4),(7,'Thursday 20th June',9,10,1,3),(8,'Friday 21st June',15,16,0,3),(9,'Saturday 22nd June',1,4,2,3),(10,'Sunday 23rd June',5,8,2,4),(11,'Monday 24th June',13,12,1,3),(12,'Thursday 27th June',10,16,NULL,NULL),(13,'Sunday 30th June',4,8,NULL,NULL),(14,'Monday 1st July',12,NULL,NULL,NULL),(15,'thursday 4th July',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `Matches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `News`
--

DROP TABLE IF EXISTS `News`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `News` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) DEFAULT NULL,
  `Brief` text DEFAULT NULL,
  `Content` longtext DEFAULT NULL,
  `NewsSpecial` int(1) DEFAULT NULL,
  `NewsPhoto` varchar(255) DEFAULT NULL,
  `Date up` varchar(255) DEFAULT NULL,
  `Newshot` int(1) DEFAULT NULL,
  `Like` int(11) DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `News`
--

LOCK TABLES `News` WRITE;
/*!40000 ALTER TABLE `News` DISABLE KEYS */;
INSERT INTO `News` VALUES (1,'England U21 player ratings','Phil Foden was handed a start for England U21s - how did he and his team-mates get on during the 3-3 draw with Croatia?','It never looks great on the goalkeeper when your team concedes three but Henderson could do little about each strike in a game where he was badly let down by his back four. After an error-strewn display against Romania, Kenny looked short on confidence up against Josip Brekalo. Summed up by allowing the right-footed winger to cut inside off the left wing to make space for a strike at goal on his stronger foot - one the winger finished with aplomb. Perhaps the frustration of his performance triggered his decision to strike an effort from 30 yards that flew into the net. A quite brilliant end to a tournament of torment for the full-back.',1,'https://e0.365dm.com/19/06/768x432/skysports-england-u21-england_4701815.jpg?20190624220811','24/06/19 10:10pm',1,1),(2,'What next for England U21s?','What does the future hold for Aidy Boothroyd\'s England\'s U21s after their disappointing European Championship campaign?','England went into the tournament as favourites to lift the trophy, but they leave it with their tails between their legs having only taken a single point from three group games.It is a bitterly disappointing outcome but it should also serve as a valuable lesson. Boothroyd\'s side were punished for a failure to take their chances at one end and a glaring lack of focus at the other. After a string of costly individual errors against France and Romania, England were similarly careless against Croatia.\n\nThree times England were ahead, and three times they blew it. For Croatia\'s first goal, Jonjoe Kenny was far too easily beaten by Josip Brekalo. For their second, Lloyd Kelly lost possession deep in his own half. For the third, England allowed Luka Ivanusec to carry the ball forward completely unchallenged.\"I\'m all for expansive football, technical football, exciting football, but if you don\'t get the fundamentals right, you don\'t win matches,\" said Liam Rosenior in the Sky Sports studio.\n\n\"That\'s what football is all about. You have to enjoy defending. I don\'t know how many players I saw tonight who really enjoy defending. Even on the third goal, the reaction in transition to get back in and make a block, that extra bit of intensity, it\'s not there.\"',1,'https://e2.365dm.com/19/06/768x432/skysports-boothroyd-england_4701833.jpg?20190624224639','24/06/19 10:53pm',0,0),(3,'Error-strewn England held in final game','England U21s showed more defensive frailties as they ended their dismal European Championship campaign with a 3-3 draw with Croatia.','In three Group C matches, Boothroyd\'s pre-tournament favourites conceded nine goals in their three games as the players head home to their clubs earlier than expected.\n\nEngland got the perfect start on 11 minutes when Branimir Kalaica tripped Nelson in the box after a slick pass by the recalled Phil Foden, who was controversially rested by Boothroyd for the defeat against Romania.Ivan Grbic stopped Demarai Gray making it 2-0 after 36 minutes from Tammy Abraham\'s ball, but Brekalo levelled it up when Kenny allowed him to cut inside and fire home.\n\nEngland regained the lead three minutes after the restart. Nelson\'s looping cross was only headed straight to Maddison, who fired home from 12 yards out.Lloyd Kelly then handed Croatia a way back into the game with a loose pass and former Everton midfielder Vlasic swept home from the edge of the box.\n\nEngland looked like they bagged a sensational winner from an unlikely source when Kenny fired his team ahead with a powerful strike from 25 yards.\n\nHowever, Brekalo - Croatia\'s star man - slotted a low finished past Dean Henderson after once again the England defence were left woefully exposed.',5,'https://e2.365dm.com/19/06/768x432/skysports-aidy-boothroyd-eng_4701801.jpg?20190624214730','24/06/19 10:03pm',0,0),(4,'Boothroyd: We\'re not street-wise enough','Aidy Boothroyd admits England were not street-wise enough in their disastrous European U21 Championships campaign.','Aidy Boothroyd admits England were not street-wise enough in their disastrous European U21 Championships campaign, going home with just a point from three games.\n\nTheir 3-3 draw with Croatia on Monday night in San Marino was again strewn with defensive errors and attacking endeavour in equal measure, and did not ease the pressure on manager Boothroyd.Boothroyd did not hide his pain at England\'s performance at the tournament, but hopes he and the players will learn lessons from the early exitHe told Sky Sports: \"The teams we\'ve played so far have been street-wise, and we\'re not, and we need to get that into our game.\n\n\"Scored six, nine against, it\'s not tournament-winning statistics, but there are many positives from the way we go forward, and clearly issues we need to address with a new team for next season.Boothroyd, who signed a two-year extension in May, will see a large bulk of the current squad ineligible for the next tournament due to age restrictions and was left bitterly- disappointed at his side\'s showing at the tournament.',1,'https://e0.365dm.com/19/06/768x432/skysports-england-u21-england_4701815.jpg?20190624220811','24/06/19 10:26pm',1,0),(5,'Boothroyd: I\'ll take it on the chin','England U21s boss Aidy Boothroyd vowed to take criticism on the chin ahead of his side\'s final Euro 2019 match.','Boothroyd says he will still select his strongest side as they aim to go out on a high, though Ryan Sessegnon is out with a hamstring injury.\n\nBy not starting his best attackers - Foden and Tammy Abraham - in Friday\'s crucial loss to Romania, Boothroyd put England in a position which led to their pivotal mistakes, according to Sky Sports pundit Liam Rosenior.\n\n\"The first goal in every game is so important - and to get the first goal you need your best players on the pitch,\" Rosenior said. \"For me, England\'s best attacking players weren\'t on.\"You see the difference Phil Foden makes when he comes on. The difference Tammy Abraham makes, and the chances he gets.\n\n\"It\'s no accident Abraham gets the chances, he gets the goal, he hits the bar, he makes the keeper make a save because he\'s the best striker in terms of clever movement and getting in between defenders to get those chances.\n\n\"I thought we were the better team in terms of possession but we didn\'t have the quality in the final third to get the first goal - and then we get punished with individual errors at the other end.\"\n\nSo, with Boothroyd promising to play his first-choice lineup against Croatia, it will be interesting to see if he recalls the attacking duo.',5,'https://e1.365dm.com/19/06/768x432/skysports-foden-maddison_4699606.jpg?20190621191650','23/06/19 7:00pm',0,0),(6,'England won\'t hold up Wan-Bissaka move','England U21 boss Aidy Boothroyd will not prevent Aaron Wan-Bissaka from completing a move to Man Utd should they agree terms with Crystal Palace.','\"We had a similar situation in Poland last time with Jordan Pickford, a lot of speculation.\n\n\"Everton agreed the deal they worked very closely with us, they were very respectful in terms of not getting involved in our training and our build-up and in the end it was done - with the medicals in a hotel down the road away from everybody else.\n\n\"If that was to happen we certainly wouldn\'t be blocking anybody, we\'d be talking to people and seeing if we can help out in any way provided both clubs were happy with it. If that happens we\'ll oblige. and if it doesn\'t suit us then we\'ll find a time when it does.\"\n\nBoothroyd maintains Wan-Bissaka has remained thoroughly professional despite the uncertainty over his future but says it is understandable if he is distracted by the transfer speculation.\n\n\"All he knows is Crystal Palace\'s academy and Crystal Palace [and] I think it would be daft not to say in some way that he must think about it (the transfer speculation),\" Boothroyd said.\n\n\"What I will say is because he doesn\'t say too much you don\'t get to find out too much from Aaron. He keeps things to himself.\n\n\"He\'s a very private guy, but I guess when that sort of speculation is flying around it\'s bound to turn your head a little bit.\"Boothroyd insists he fully expects Wan-Bissaka to bounce back from the disappointment of conceding an injury time own goal that handed hosts France a 2-1 win against England on Tuesday night.\n\n\"He\'s disappointed obviously with the way that the own goal turned out,\" Boothroyd added.\n\n\"With all the noise that\'s surrounding him at the minute you can imagine if you and I were in that position we\'d probably be a lot different to what he is.',1,'https://e1.365dm.com/19/06/768x432/skysports-fikayo-tomori-aaron_4697694.jpg?20190619121223','20/06/19 4:04pm',0,0),(7,'England U21 player ratings','After England crashed out of the U21 Euros, which young stars shone and who struggled during the 4-2 defeat to Romania?','Had been England\'s star performer - until his late howler handed Romania victory. Henderson was forced into three fine saves inside 15 minutes and was then alert at the start of the second half to parry another strike from a tight angle behind for a corner. He was eventually beaten by George Puscas\' penalty and Ianis Hagi\'s stunner, but allowed a tame Florinel Teodor Coman strike through his grasp to put Romania 3-2 up and then had to watch Coman\'s wonder strike sail past him.Battled hard in the early stages when England were on the back foot and did well to hold up Hagi on a dangerous Romania counter-attack. Rarely pushed too far into Romania\'s half but delivered a handful of dangerous crosses, with Dominic Calvert-Lewin heading one narrowly over the bar. Taken off before Romania\'s late flurry.Stretched by the pace and trickery of Puscas at times, especially when England were exposed several times early on but almost produced the winner with the game at 1-1, forcing Romania keeper Ionut Radu to parry his header onto the post. Was unable to prevent Romania running wild in final 10 minutes.Worked hard to limit Romania\'s chief threat Puscas, positioning himself well against the striker to snuff out a dangerous second-half break but for the second game in a row he gave away the ball in costly fashion. Under pressure from Puscas, Tomori miscued a clearance, allowing Hagi to fire Romania 2-1 up.',5,'https://e1.365dm.com/19/06/768x432/skysports-england-u21-romania-u21_4699542.jpg?20190621181142','21/06/19 7:00pm',0,0),(8,'France late show stuns 10-man England','Ten-man England were stunned by two late France goals as they were beaten 2-1 in their opening European U21 Championship Group C clash','England got a deserved opener after the break as Phil Foden slalomed through four France tackles before coolly finishing (54), but there was more madness at the other end as a VAR review saw Hamza Choudhury dismissed for a nasty tackle in the area, only for Houssem Aouar\'s penalty to hit the post (66).\n\nThen came France\'s late double show, and England, who have not won the tournament since 1984, now face Romania in Group C on Friday, live on Sky Sports Football.England burst out of the traps, looking confident in possession and keen to play through the lines at speed, nearly taking the lead as Ryan Sessegnon\'s right-wing cross hit France defender Ibrahima Konate and bounced off the post.\n\nDominic Solanke then struck just wide on the stretch from a wicked Demarai Gray cross, but France had the chance to take the lead from the spot as England captain Clarke-Salter handled a Jeff Reine-Adelaide header.\n\n\nThough the decision looked harsh, VAR did not review the incident, but Henderson guessed correctly, diving to his left as he beat away Dembele\'s effort.\n\nEngland continued to make inroads, however, going close again as Gray struck an angled effort into the side-netting when one-on-one with Paul Bernardoni, before Foden\'s superb individual effort, picking up the ball just inside the French half, dancing past five tackles and slotting low into the left corner for his first England U21 goal.\n\nFrance were then awarded another penalty as Choudhury went in hard on Jonathan Bamba, with his initial yellow card then ruled as a red by the VAR, Aouar\'s penalty cannoned off the post as England stayed ahead.\n',1,'https://e2.365dm.com/19/06/768x432/skysports-hamza-choudhury-england_4697335.jpg?20190619122708','18/06/19 10:09pm',1,0),(9,'Euro 2019: Follow Eng U21s on Sky Sports','England\'s best and brightest young talents are off to Euro 2019 this summer - catch the whole tournament only on Sky Sports.','England are in Group C and kick-off their tournament against joint-second favourites France in Cesena at 8pm on Tuesday live on Sky Sports Football. 13 goals have been scored in the last three games between the sides.\n\nThe Young Lions are back at the same ground five days later when they face Romania, competing in their first U21 European Championships since 1998, on June 21 at 5.30pm, and then travel to San Marino\'s national stadium for their final group game with Croatia, whose senior side knocked England out of last summer\'s World Cup, at 8pm on June 24.\n\nLeicester duo James Maddison and Harvey Barnes, Manchester City midfielder Phil Foden, Crystal Palace defender Aaron Wan-Bissaka and Fulham winger Ryan Sessegnon were all named among Boothroyd\'s recruits on the plane to Italy.\n\nMaddison in particular was a surprise absence from Gareth Southgate\'s full England squad for the Nations League earlier this month, but the Three Lions boss said: \"It will be good for them to get that tournament experience again. We think, for them, that is the next stage of their development.\"',1,'https://e0.365dm.com/19/05/768x432/skysports-phil-foden-england_4675258.jpg?20190521174220','21/05/19 6:03pm',0,0),(10,'When is the Euro U21 Championship?','When is the European Under-21 Championship this summer, which nations are competing, and who are the players to look out for?','There will be 12 teams at the tournament - all of whom have qualified, aside from hosts Italy.\n\nEngland, Spain, France, Serbia, Germany, Croatia, Denmark, Belgium, and Romania all qualified as group winners while Poland and Austria came through play-offs.\n\nGermany are the defending champions after beating Spain in the 2017 final in Poland.\n\nThe 12 teams are divided into three groups, with the winners and the best runner-up advancing to the semi-finals.\n\nThe group winners and best runner-up will also earn a spot at the 2020 Olympics, although England are not eligible for the tournament, so there will be a play-off for their place between the two other runners-up if they make the semi-finals.\n\nThe 12 teams are divided into three groups, with the winners and the best runner-up advancing to the semi-finals.\n\nThe group winners and best runner-up will also earn a spot at the 2020 Olympics, although England are not eligible for the tournament, so there will be a play-off for their place between the two other runners-up if they make the semi-finals',5,'https://e1.365dm.com/17/07/768x432/skysports-hector-bellerin-spain-germany_3991341.jpg?20170702144249','01/05/19 4:41pm',1,0),(11,'Abraham: England here to win U21 Euros','Tammy Abraham hopes the England U21s can draw on past experience in their bid for glory at Euro 2019.','The Young Lions arrived in Italy on Friday afternoon ahead of the tournament and trained just hours after landing.Aidy Boothroyd\'s side face France in their opening Group C game in Cesena on Tuesday, live on Sky Sports Football.\r\n\r\nAbraham could lead the line for England on Tuesday and the Chelsea striker hopes they can go one better than the last European Championships in Poland where they suffered a 1-0 defeat to Germany in the final.\r\n\r\n\"I\'ve experienced this competition before two years ago,\" Abraham told Sky Sports News.\r\n\r\n\"Of course we had the defeat against Germany [in the final], so obviously we are here looking to go one step further and hopefully bring the trophy back home.\"\r\n\r\nManchester United goalkeeper Dean Henderson wants the team to embrace their tag as one of the favourites to win the competition.\r\n\r\n\"Now we\'re over here and seen the set up and everything it makes us want to cherish it and have a right go,\" he said.\r\n\r\n\"As soon as we reached the airport to fly out you could feel the excitement building. We\'re all looking forward to performing on this stage and our mindset is about winning it.\r\n\r\n\"We all think we can do that, there are some players in the squad who have won a lot of tournaments in different age groups. There\'s no reason why we can\'t continue this here with the U21s.\r\n\r\n\"People will look at us going unbeaten through qualifying and think we had an easy time against easy opponents but if you look at it there were some tough teams in that group.\r\n\r\nAll 23 players trained at Serie D side AC Sammaurese\'s Macrelli Stadium on Friday evening',4,'https://e0.365dm.com/18/11/768x432/skysports-tammy-abraham-aston-villa_4502807.jpg?20181128202930','04/08/2019 03:50 pm',0,0),(12,'Why Barnes is the next big thing','Find out why Harvey Barnes is tipped to go on to bigger things with Leicester and England.','Harvey Barnes has just earned a new five-year contract with Leicester and is part of the England U21 squad this summer. In conversation with the player\'s former managers, Adam Bate finds out why Barnes is being tipped to go on to even bigger things.\n\nIt was Barnsley\'s game against Queens Park Rangers in September 2017 that confirmed it for Paul Heckingbottom. But it was not the goal that Harvey Barnes scored that day, a curling effort from 20 yards out that found the top corner of the net. It was the teenager\'s reaction after the Tykes manager decided to substitute him at half-time.\"He had scored a world-class goal but we took him off simply because other players were not doing their jobs and he was the one who suffered,\" Heckingbottom tells Sky Sports.\n\n\"He took it on the chin at half-time but came to see me the next day. In a really professional manner he was asking me why he was taken off and what he could do so that next time he was in that situation he could prove to me that he should not be the one coming off.\n\n\"They were really good questions and he was really good at taking that information on board. He is a great lad with a good temperament but he has also got that drive in him where he wants to be good. He wants to improve.\"\n\nBarnes has been improving for some time now. After successful loan spells with MK Dons, Barnsley and West Bromwich Albion, the now 21-year-old winger finally managed to establish himself at parent club Leicester during the latter part of the season.',2,'https://e2.365dm.com/19/06/768x432/skysports-harvey-barnes-leicester_4694960.png?20190615082434','16/06/19 7:00am',0,0),(13,'Higher or lower? England U21 caps','England will be aiming for glory as the U21 Euros get under way on Sunday, but can you guess how many caps some well-known faces earned for the side?','England will be aiming for glory as the U21 Euros get under way on Sunday, but can you guess how many caps some well-known faces earned for the side?\n\nAidy Boothroyd\'s side will get their 2019 campaign under way on Tuesday, June 18 when they play France, live on Sky Sports, and we want to test your knowledge of some past U21 stars.Starting with Frank Lampard, select whether the next player earned more or less caps than their previous compatriots with a few surprise faces along the way...You can watch every game of this summer\'s U21 Euros tournament live on Sky Sports. You will also be able to follow selected games with our live blogs at www.skysports.com or with the Sky Sports app.\n\nEngland start with a game against France on June 18 before playing Romania on June 21 and Croatia on June 24.',3,'https://e2.365dm.com/19/06/768x432/skysports-frank-lampard-england-u21_4692920.jpg?20190612114734','16/06/19 7:00am',1,0),(14,'Foden, Maddison in England U21 Euros squad','Phil Foden and James Maddison have been included in England\'s U21 squad for the European U21 Championships this summer','Phil Foden and James Maddison have been included in England\'s U21 squad for the European U21 Championships this summer.\n\nMaddison\'s Leicester team-mates Demarai Gray, Harvey Barnes and Hamza Choudhury have also been named in the 23-man squad, along with Aaron Wan-Bissaka, Tammy Abraham, Ryan Sessegnon and Wolves\' Morgan Gibbs-White, who earns his first Under-21s call-up.\n\nThe Young Lions will be looking to go one better than the 2017 tournament where they were knocked out by eventual winners Germany on penalties in the semi-finals.\n\nAidy Boothroyd\'s squad are currently training at St George\'s Park and will fly out on Tuesday, June 4, to Italy, where they will face France, Romania and Croatia in the group stages, with all the games live on Sky Sports.\n\nSpeaking to the FA\'s official website, Boothroyd said: \"This is a really strong squad and I\'m really pleased with the group of players I\'ve got who will be representing us at the Euros. We have a big pool of talent in the England set-up and I had some tough selection decisions to make as there\'s a lot of strength in depth.\n\n\"It\'s always a really tough tournament and I think this year is as strong as it has ever been. It\'s a great opportunity for our players to showcase their talents as individuals and as a team.',3,'https://e0.365dm.com/19/05/768x432/skysports-james-maddison-phil-foden_4679659.jpg?20190527103321','27/05/19 10:30am',1,0),(15,'Pundit Q&A: Prutton previews U21 Euros','Sky Sports presenter and former England U21 international David Prutton looks ahead to the U21 European Championships, live on Sky Sports.','Sky Sports presenter and former England U21 international David Prutton looks ahead to the U21 European Championships, live on Sky Sports.\n\nEvery game during the UEFA European Under-21 Championship will be shown live on Sky Sports with Prutton hosting the action alongside pundits Liam Rosenior and Andy Hinchcliffe while Martin Tyler will be providing commentary on all England\'s matches.Poland\'s clash with Belgium kicks off the tournament on Sunday June 16, with hosts Italy getting their campaign underway later that evening against Spain in Bologna.\n\nEngland open their campaign against France in Cesena on Tuesday June 18.\n\nHere, we pose some questions to Prutton....Which teams are you looking forward to watching?\nPrutton says: Spain - four time winners of the U21 Euros - are always dangerous at youth tournaments and play the game in the right way, spearheaded by a very imaginative midfield who are very talented. Their progress will be defined in a fantastic opening game with hosts Italy in Bologna.The host nation have lots of reasons to believe that the trophy will be staying there as they have some very exciting players at their disposal, including Moise Kean and midfielder Sandro Tonali, who has been linked with Liverpool.\n\nOf course, it will be fascinating to see how England cope with the rigours of tournament football. They are certainly good enough to win it and hopefully the nation gets behind the lads. There seems a new found belief within the youth teams about not just gaining experience from playing in tournaments but also heading there with a focus to win it.',3,'https://e2.365dm.com/19/06/768x432/skysports-james-maddison-england_4695088.jpg?20190615133822','16/06/19 7:00am',0,0),(16,'Henderson unsure about Man Utd future','Manchester United goalkeeper Dean Henderson is unsure of his future at the club after a successful loan spell at Sheffield United.','Manchester United goalkeeper Dean Henderson is unsure where his future lies at the club after a successful loan spell at Sheffield United which saw them gain Premier League promotion.  The 22-year-old established himself as Sheffield United\'s number one last season, playing every minute in the Championship and keeping 21 clean sheets.However, Henderson is uncertain whether he will return to United with David de Gea and Sergio Romero likely to be ahead of him in the pecking order and ahead of this month\'s European U21 Championships, he told Sky Sports News: \"Who knows where I will be next season?\"  The Blades may look to secure another loan deal or permanent move for Henderson this summer after manager Chris Wilder admitted he would love to keep him, and the shot-stopper insists he enjoyed his time at Bramall Lane.  Henderson said: \"It was something that you wouldn\'t have dreamt of when you went there and we were delighted to get over the line and get the promotion that everyone wanted.  \"It has been fantastic. It has been a long time for them outside the Premier League and to get that football club back to where it belongs was a real special moment for myself.  \"It was good to see that the football club has got some great fixtures in place and I\'m sure that they will all enjoy it, especially the fans because it means a lot to them.\"  Meanwhile, Henderson is concentrating on England U21s this summer before he decides on his club future and he feels the Young Lions have a good chance of claiming silverware in Italy and San Marino.He added: \"We want to win it. We\'ve got a really strong group of players.  \"The strength in depth is massive. On paper, some of the names [in England\'s squad] play in the Premier League and for top Championship clubs so competition for places is massive and that\'s what keeps it healthy within the group.  \"I\'m just fully focused on winning this tournament and hopefully get a starting place in this team. Hopefully we can come back with the trophy - that\'s the most important thing.\"',3,'https://e2.365dm.com/19/01/768x432/skysports-dean-henderson-sheffield-united_4540821.jpg?20190108154334','15/06/19 9:47am',0,0),(17,'Europe\'s young talent live on Sky','The U21 European Championships get under way on Sunday, with some of Europe\'s best young talent live on Sky Sports. We take a look at a few of the players.','The Fiorentina winger already has 13 caps for the Italy senior squad, but at the age of 21, Federico Chiesa still qualifies for the youth side after an eye-catching season.\n\nHe played 41 times in all competitions with 12 goals - the highest for Fiorentina last season - and nine assists, and the versatile attacker is already linked to a number of clubs despite the Serie A side insisting Chiesa is not for sale.\n\nTuttoMercatoWeb says he is a prime summer target for Liverpool, while Sky Italia claim he has already agreed terms with Juventus. Inter and Tottenham have also been touted, among others.\n\nLorenzo Pellegrini scored Italy\'s first goal at the U21 Euros in 2017, and, despite ten caps at senior level, will once again be in action - this time at a home championships.\n\nIt is likely to be his last appearance at U21 level too, with the Roma midfielder turning 23 on June 19, but Premier League fans could be seeing much more of Pellegrini next season.\n\nMany media outlets in Europe have linked him with Arsenal and Tottenham, with Calciomercato reporting that his agent was in London recently. Pellegrini\'s release clause reportedly stands at €35m (£31.1m).\nCrystal Palace full-back Aaron Wan-Bissaka is already one of the most talked about players this window. Sky Sports News understands that Manchester United are preparing to make a second improved bid for him after having their initial £40m bid rejected.\n\nThe 21-year-old burst onto the scene at Selhurst Park in February 2018 and went on to make 35 Premier League appearances last season. He was named as the Crystal Palace Player of the Year for the 2018/19 season, as well as earning the club\'s Player of the Month awards for August, September, October, and March.\n\nIt has been a whirlwind international career too. After making one appearance for the DR Congo U20 side in 2015, he was called into the England U20 side in March 2018 - although he was sent off on his debut - and played one further game before earning an U21 call-up in September of the same year. So far, he has earned two caps',3,'https://e2.365dm.com/19/06/768x432/skysports-aouar-maddison-chiesa_4694406.jpg?20190614132935','15/06/19 6:00pm',0,0),(18,'Germany end England U21s run','England U21s saw their 18-match unbeaten run come to an end after a 2-1 defeat to Germany at the Vitality Staduim.','England U21s saw their 18-match unbeaten run come to an end after a 2-1 defeat to reigning European U21 champions Germany at the Vitality Stadium.\n\nWith England senior boss Gareth Southgate watching on from the stands, the hosts thought they had secured a draw after Dominic Solanke cancelled out Mahmoud Dahoud\'s 27th-minute opener. However, Felix Uduokhai struck in stoppage time to make sure Aidy Boothroyd\'s side\'s final scheduled fixture before this summer\'s European U21 Championship ended in defeat.\n\nBoothroyd, whose team begin their European Championship campaign on June 18 against France in Cesena, rung the changes from his side\'s 1-1 draw against Poland last Thursday, with only Phil Foden and Kieran Dowell keeping their places in the starting line-up, and the lack of continuity showed with the hosts struggling to find their rhythm.\n\nGermany, managed by Stefan Kuntz, showed why they are the defending European U21 champions. They were deservedly ahead when Dahoud, who was played onside by Kyle Walker-Peters, chested down Arnie Maier\'s through ball on the edge of the penalty area before striking the ball beyond the dive of Dean Henderson and into the bottom corner.\n\nThe visitors could have been further ahead in the 36th minute but Gian-Luca Waldschmidt\'s shot rebounded off the foot of the post, while Nadiem Amiri could not turn in the rebound with the goal at his mercy',3,'https://e2.365dm.com/19/03/768x432/skysports-felix-uduokhai-germany-u21_4620163.jpg?20190326222345','26/03/19 9:45pm',1,0);
/*!40000 ALTER TABLE `News` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NextMatches`
--

DROP TABLE IF EXISTS `NextMatches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `NextMatches` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Time` varchar(255) DEFAULT NULL,
  `IDteam1` int(11) DEFAULT NULL,
  `IDteam2` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_team1_idx` (`IDteam1`),
  KEY `fk_team2_idx` (`IDteam2`),
  CONSTRAINT `fk_team1id` FOREIGN KEY (`IDteam1`) REFERENCES `team` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_team2id` FOREIGN KEY (`IDteam2`) REFERENCES `team` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NextMatches`
--

LOCK TABLES `NextMatches` WRITE;
/*!40000 ALTER TABLE `NextMatches` DISABLE KEYS */;
INSERT INTO `NextMatches` VALUES (1,'Aug 6, 2019 23:23:00',10,16);
/*!40000 ALTER TABLE `NextMatches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) DEFAULT NULL,
  `UserEmail` varchar(255) DEFAULT NULL,
  `UserPassword` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (1,'ewo','we@ml.c','e10adc3949ba59abbe56e057f20f883e'),(2,'pler','wed@ml.c','827ccb0eea8a706c4c34a16891f84e7b'),(3,'eri','kisaki@co.na','4972ef466647f2ac8aa11053a65c48ae'),(4,'ran','mori@co.na','ea48576f30be1669971699c09ad05c94'),(5,'asmad','mad@ti.ne','9ff27fbeeda15d0693e3b1bfdea68a55'),(6,'mingeon','ji@hyo.yeon','e10adc3949ba59abbe56e057f20f883e'),(7,'yeonmin','hyo@ji.min','75f34b5502bec3c609734fdf4d37fa5c'),(8,'jiasmin','min@yeon.hyo','3cce022f14315337f2962fa507d297bb'),(9,'thuydung','thuydung@btv.c','356a28db7da493e37675db4203849243'),(10,'quynhchi','quynhchi@mc.d','f9ce81ef2b85f1ff7ee90e0e61369815'),(11,'msdf','msdf@we.po','ba00819f263287af1ff0100c5a323355'),(12,'somuch','so@much.e','3738934f3d391235e144e62e4d04022b'),(13,'means','me@an.s','4b0f4761b8020fa4dccebb638e4ae3cb'),(14,'when','wh@en.p','8ca2887740609771adfd8e488f11cd73'),(15,'nhan','nh@an.x','ff0d9d6bedd5bee164ac99e49855547d'),(16,'loar','lo@ar.p','263a972005e3d53e821356eceae6149e'),(17,'anker','an@ker.l','6f23676e7d463d3c0b9e226f463abf3e'),(18,'lkjmn','lkj@mn.k','8d078c38cdc10626f1d4fc8a207f97fa'),(19,'nji','nji@okm.lp','22d164d8e03a8bca47fe5a4a08799074'),(20,'qasw','qa@ws.e','f372b40d2779a375f9a4f95ce20cbb05'),(21,'farruko','far@ru.ko','1ded63109464712ff32746222b617720'),(22,'darkside','dar@ksid.e','eb97169a2d7e746ad3d5db712d7c12e9'),(24,'sangmat','chua@smc.tn','d27dde17e3465213812dce946fbf2bbe'),(25,'phis','phis@po.le','827ccb0eea8a706c4c34a16891f84e7b'),(27,'phiser','phser@oi.p','827ccb0eea8a706c4c34a16891f84e7b'),(28,'songgia','song@gia.icm','fcea920f7412b5da7be0cf42b8c93759'),(29,'lyturnhin','turn@hin.o','8aa7c24ec4e256ce9b4bc11f7880f695');
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Video`
--

DROP TABLE IF EXISTS `Video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Video` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NameVideo` varchar(255) DEFAULT NULL,
  `Link` varchar(255) DEFAULT NULL,
  `Type` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Video`
--

LOCK TABLES `Video` WRITE;
/*!40000 ALTER TABLE `Video` DISABLE KEYS */;
INSERT INTO `Video` VALUES (1,'Controversial Late Goal Drama!','https://www.youtube.com/watch?v=WlZ5JeM-glc',1),(2,'Under-21 highlights: Spain vs Italy','https://www.youtube.com/watch?v=a99058YKIdg',2);
/*!40000 ALTER TABLE `Video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CommendContent` longtext DEFAULT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `NewsID` int(11) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_new_id_idx` (`NewsID`),
  CONSTRAINT `fk_new_id` FOREIGN KEY (`NewsID`) REFERENCES `News` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (2,'abcdefghiklmnopq','ewo',1,'02 Aug,2019'),(3,'hello!!!','ewo',1,'02 Aug,2019');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TeamName` varchar(255) DEFAULT NULL,
  `TeamLogo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'England','1280px-Flag_of_England.png'),(2,'Germany','1200px-Flag_of_Germany.png'),(3,'Holland','1920px-Flag_of_the_Netherlands.png'),(4,'Israel','1200px-Flag_of_Israel.png'),(5,'Italy','255px-Flag_of_Italy.png'),(6,'Norway','2000px-Flag_of_Norway.png'),(7,'Russia','1200px-Flag_of_Russia.png'),(8,'Spain','1200px-Flag_of_Spain.png'),(9,'Faroe Islands','1920px-Flag_of_the_Faroe_Islands.png'),(10,'Kazakhstan ','2560px-Flag_of_Kazakhstan.png'),(11,'Andorra','1920px-Flag_of_Andorra.png'),(12,'Kosovo','1920px-Flag_of_Kosovo.png'),(13,'Liechtenstein','2560px-Flag_of_Liechtenstein.png'),(14,'Azerbaijan ','2560px-Flag_of_Azerbaijan.png'),(15,'San Marino','1920px-Flag_of_San_Marino.png'),(16,'Lithuania','2560px-Flag_of_Lithuania.png');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-04 22:09:37
