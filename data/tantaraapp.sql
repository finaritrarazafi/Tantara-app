-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 13 fév. 2020 à 12:45
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tantaraapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `titre`, `slug`, `contenu`, `date_creation`) VALUES
(46, 2, 'Titre 1', 'Titre-1', 'Test contenu', '2020-02-13 12:41:32'),
(47, 2, 'Titre 2', 'Titre-2', 'Test test', '2020-02-13 12:42:03'),
(48, 1, 'Malala', 'Malala', 'Izao no resaka nifanaovan\'izy roa farany tao anaty \"fetsy boky\":\r\n-Tiako be ny toetranao, tsotra sady tsy miavona\r\n*Misaotra, ianao koa tsotra be (Y)\r\n-Rahoviana ho\'aho no mba asianao sary amin\'izay ho hitako?\r\n*Mahandrasa kely e, sao ho diso fanantenana eo rehefa mahita ny haratsiko :P\r\n-Tsy midika inona ny hatsaran-tarehy amiko, efa babonao aho... Ny Fanahy no olona!\r\n*\'Zany?\r\n-Maninona raha \'ndeha hifanao fotoana isika e? Tena efa tsy andriko intsony ny hahitana anao :(\r\n*Ianao koa maika a...hihi\r\n-Andray kosa, tena tsy fantatrao mihitsy ny fijaliako :\'(\r\nDia tapaka tampoka ny fifandraisana... Saingy ny fo maniry ho tiana tsy tery lalana, fantatrao tsara! Ity hafatra farany tavela tao anaty finday ity no manamarina fa mbola nisy resaka lava be nahaliana sy nampangitakitaka tokoa omaly alina:\r\n-Mmh, ohatra ny efa reko sahady ny hasambarako hamihina anao eto an-tratrako, rahampitso izany an, tsara mandry ary dia tandremo sao tsy tonga e, manoroka mamy :*\r\nDia tonga ny ampitso ary indro fa nanakaiky ilay ora nifanomezana. Tsy hay tantaraina intsony ny fibosesiky ny visavisa mifamahofaho ao an\'eritreritra mangina manentana ny doboky ny fo tsy hita ho fehezina sy mila hamaky tratra. Ilay finday no anariana dia sy maty voapotsipotsitra amin-tsy antony fa avo dia avo ny fatran\'ny fitaintainana... Hanao ahoana re?!\r\nAmin\'ny 5 ora hariva katroka, ora maha be ny mpijorojoro eto amin\'ny tetezan\'Ankadifotsy fa ora efa mampihisatrisatra ny fifamoivozana koa… Tara kely sa tsy ho avy?\r\nIzao no hafatra nalefany:\r\n-Eto akaikin\'ilay madama bota be mpivarotra fahana io mihitsy aho no miandry :P\r\nFa tsy tafaverina tao am-paosiny akory ilay finday saika ho ampiriminy dia iny ilay nandrasany nidina ny Taxi-be, tokony ho in-dimy mandingana monja teo amin\'ilay nijoroany. Tsy nahahetsika izy fa ny masony no nafantony teny aminy, nanjary tsembotsemboka sy nangovingovitra tampoka teo:\r\n-Malala? ... Ianao?! ...\r\n*Oay, Malala? ... Ianao?!\r\nTsy nisy niteny intsony... Iray... roa... dimy segondra... eni... izay vao nifampiatoraka sy nifamihina maharitra izy roa kely:\r\n-Malala a, tsy navelan\'ny fiainana tsy hihaona isika...tsy navelan\'ny fitia tsy hifankahita... tsy handao anao intsony aho, MANDRAKIZAY! Tsy nampoiziko ho ianao...\r\n*Malala a, efa voasoratra ho iray ny lalantsika! Hitako ihany ianao... Malala, sakaiza fahazazako... Tiako be ianao!', '2020-02-13 12:42:16'),
(36, 1, 'Tantara mampalahelo', 'Tantara-mampalahelo', 'Tantara mampalahelo ilay nanjo ireo mpivady dokotera maty nisy namono niaraka tamin’ny mpanampy azy, indrindra fa ny zanany vavy sy ny sipan’ity zanany vavy ity no nahavanon-doza. Fa dia inona no ao an-dohan’ny malagasy ankehitriny e? Sa, tsy nahazaka ahitra natoraly ireto mpifankatia voarara? Tantara mampalahelo ihany koa ny nanjo ilay Rainiboto novonoin’ny mpiasany sy nodorany noho ny lonilony tsy misy dikany. Tena efa tsy aina ny aina eto amin’ny tanàna. Tantara mampalahelo ihany koa ilay vono olona nahavoarohirohy sy nampigadra ilay mpilalao sarimihetsika Rija Ramino, voampanga sy voaheloka ho namono ny rafozam-baviny. Fa ny ao ambadik’ireo tantara mampalahelo ireo dia, hay tsy ny jiolahy eto amin’ny tanàna no efa sahisahy loatra mamono olona fa ny ankamaroan’ny vono olona misy habibiana dia naloaky ny mpifankafantatra tao ihany.\r\nFa ity tantara mampalahelo hotantaraiko androany ity kosa dia tsy mampalahelo be toy ireo voatatitra tamin’ny fampidirana ireo, kanefa dia tantara marina ihany kosa.\r\nVazaha (V): Allo, C’est la société (Notre Société).\r\nGasy (G): … (tsy renay tsinona izay lazain’ilay olona ao @ telefaonina fa inoana fa miteny izy)\r\nV: C’est la société (Notre Société) qui vous appelle. Vous aviez déposé une demande d’emploi et un CV chez nous\r\nG: …\r\nV: Allo, vous m’entendez? Je veux parler à (Nom de la Gasy)\r\nG: …\r\nV: Allo, Est-ce que vous m’entendez? Répondez si oui.\r\nG: …\r\nV (à moi): Dot, venez SVP, pouvez-vous voir s’il y a un problème avec ce téléphone?\r\nMoi (M): Allo,\r\nG: Allo\r\nM: Ianao ve no (Nom de la Gasy)?\r\nG: Eny tompoko\r\nM: Nametraka CV taty aminay ianao, dia hanome rendez-vous anao ny vazahanay fa voafidy ianao. Tsy henonao angaha ilay patron-nay teo miantso anao?\r\nG: Henoko\r\nM: Koa naninona no tsy novalianao izy?\r\nG: Tsy mahay aho. Tsy mahay miteny frantsay aho.\r\nM (à Vazaha): Elle ne sait pas parler français.\r\nV: Bah, laisses tomber. Qu’elle retourne jouer au football. (Note: Football hono no hobby-n’ilay Gasy mpitady asa)\r\nGaga dia gaga aho, sady nalahelo hoe amin’izao andron’ny fahamarinana sy fahamasinana izao ve mbola misy malagasy mitady asa, 25 taona, tsy mahay miteny frantsay amin’ny telefaonina? Nalahelo aho, fa ny tena nampalahelo ahy koa dia hoe tsy misy vidiny mihitsy hay moa ity teny malagasy ity raha eo amin’ny sehatry ny asa fa dia tsy maintsy mahay teny frantsay ianao. Na dia voatsongo ho isan’ny mahiratra aza ilay antontan-taratasy napetraka, rehefa an-tsoratra ihany ny fahaizana miteny frantsay dia tsy misy dikany. Nalahelo aho fa, hay tokoa moa raha eto Madagasikara no misy orinasa frantsay misokatra, dia tsy mila mianatra teny malagasy mandrakizay akory ny mpampiasa fa efa mahazo manantena fa hahafehy an’io fiteny io ny 99% -n’ny mpiasa hampiasaina.\r\n', '2020-02-13 11:45:13');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `zipcode`, `email`, `pseudo`, `mdp`) VALUES
(1, 'Finaritra', '', 'finaritraraza@gmail.com', 'fina', '698d51a19d8a121ce581499d7b701668'),
(2, 'Sahanina', '', 'ikalafina@gmail.com', 'sah', '81dc9bdb52d04dc20036dbd8313ed055');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
