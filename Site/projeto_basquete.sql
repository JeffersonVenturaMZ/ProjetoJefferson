-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2019 às 03:23
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_basquete`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `id_artigo` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `slug_artigo` varchar(50) DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `adicionado_quando` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id_artigo`, `nome`, `slug_artigo`, `texto`, `foto`, `adicionado_quando`) VALUES
(0, 'Regras no Basquete', 'regras-basquete', '<b>Regras do basquete</b>\r\nO objetivo do jogo é encestar o maior número possível de bolas. A equipe que, ao final do jogo, tiver o maior número de pontos é a vencedora.\r\n\r\n<b>Formação da Equipe</b>\r\nUm equipe de Basquetebol é formada por no máximo 12 jogadores, sendo 5 em quadra e até 7 reservas\r\nUm treinador, um treinador auxiliar e até 5 membros na comissão técnica\r\n\r\n<b>Jogadores</b>\r\nO basquetebol é disputado entre duas equipes de 5 jogadores cada. São classificados em armadores (base), extremos e postes (pivôs).\r\nIsso dependerá de sua posição e objetivos no desenvolvimento do jogo. Os armadores estão localizados no centro da quadra e, portanto, são a \"cabeça\" do time.\r\nOs extremos, como o nome indica, são aqueles que ficam próximos das linhas laterais. Já os pivôs, são responsáveis por maior parte dos arremessos de bola ao cesto.\r\nGeralmente, os postes são jogadores maiores e mais ágeis da equipe. São eles também que fazem o rebote das bolas, ou seja, recuperam a bola após o arremesso.\r\n\r\n<b>Quadra</b>\r\nO basquetebol é jogado em uma quadra retangular, medindo 28 m de comprimento por 15 m de largura. Nas duas extremidades da quadra, estão colocados os cestos a uma altura de 3,05 m do solo.\r\n<img src=\"http://localhost/ProjetoJefferson/site/assets/imgs/artigos/quadra-basquetebol-medidas.png\">\r\n\r\n<b>A quadra de basquetebol apresenta diversas linhas e marcações:</b>\r\n<b>Linhas Laterais:</b> delimitam o espaço de jogo.\r\n<b>Linhas Limites:</b> também delimitam o espaço de jogo, no entanto, estão localizados atrás dos cestos.\r\n<b>Linha Central:</b> localizada bem no meio da quadra, ela divide o espaço total em dois iguais.\r\n<b>Círculo Central:</b> acima da linha central está um círculo desenhado bem no meio da quadra que possui cerca de 3,6 metros de diâmetro.\r\n<b>Linha de 3 pontos:</b> linha circular localizada a 6,75 metros de cada cesto. Recebe esse nome pois os lances desse local valem 3 pontos.\r\n<b>Linha de Lance Livre:</b> localizada mais próxima do cesto e de maneira frontal os jogadores lançam a bola.\r\n\r\n<b>Tempo de jogo</b>\r\nEm jogos oficiais, são disputados 4 períodos de 10 minutos, divididos em 2 tempos. Um intervalo de 15 minutos é dado entre o 2º e o 3º períodos e inverte-se o lado de jogo das equipes.\r\nToda vez que o jogo é parado ou a bola sai de campo, por exemplo, o cronômetro é parado.\r\nCaso o jogo termine empatado durante a disputa do tempo normal, ocorrerá uma \r\nprorrogação de 5 minutos. Caso o empate persista, outra prorrogação de 5 minutos será realizada, e assim sucessivamente, até que haja um vencedor.\r\n\r\n<b>Pontuação</b>\r\nA pontuação é realizada da seguinte maneira: Quando a bola entra no cesto (aro), é marcado o ponto.\r\n\r\n1 ponto para cada arremesso de lance livre convertido (arremessos adquiridos em lance de falta sofrida);\r\n2 pontos nos arremessos convertidos de pequena e curta distância, mais precisamente dentro da delimitação de 6,75 metros;\r\n3 pontos nos arremessos que forem convertidos fora da delimitação de 6,75 metros.\r\n\r\n<b>Violação das Regras</b>\r\nToda vez que ocorre uma violação as regras a bola deve ser concedida ao adversários para reposição de bola fora da quadra do local mais próximo de onde ocorreu a violação.\r\n\r\n<b>Tipos de violações (infrações) as regras do Basquetebol:</b>\r\nJogador ou bola fora de quadra (jogador ou bola são considerados fora de quadra ao entrarem em contato com solo, objeto ou pessoa fora da quadra)\r\nJogador realiza dois dribles consecutivos\r\nJogador andar com a bola\r\nJogador permanecer mais de 3 segundos dentro da área restrita adversária (Garrafão) quando sua equipe tem a posse de bola\r\nJogador fica mais de 5 segundos segurando a bola\r\nPermanecer com a posse de bola por mais de 8 segundos na quadra de defesa\r\nNão realizar um arremesso a cesta adversária dentro do tempo limite de 24 segundos\r\nRetornar a bola da quadra de ataque para a quadra de defesa\r\n<img src=\"http://localhost/ProjetoJefferson/site/assets/imgs/artigos/violacoes-as-regras-do-basquetebol.png\">\r\n\r\n<b>Faltas no Basquete</b>\r\nFaltas são infrações as regras do Basquetebol referentes a um contato físico ou atitude antidesportiva.\r\n<img src=\"http://localhost/ProjetoJefferson/site/assets/imgs/artigos/faltas-pessoais-no-basquetebol.png\">\r\n\r\n<b>Sobre a Posição Legal de Defesa</b>\r\nUm jogador ocupa uma posição legal de defesa quando está de frente para o adversária, com os pés no solo e ocupando um espaço cilíndrico.\r\n\r\n<b>É considerado falta no Basquetebol:</b>\r\nProvoca contato com um adversário que está em posição legal de defesa (falta de ataque)\r\nBloquear ou obstruir um adversário estando fora da sua posição legal de defesa\r\nrealizar carga (empurrar) o adversário\r\nTocar o adversário com as mãos restringindo seus movimentos\r\nAgarrar o adversário em qualquer parte do corpo\r\n\r\n<b>Tipos de Faltas do Basquete</b>\r\n<img src=\"http://localhost/ProjetoJefferson/site/assets/imgs/artigos/tipos-faltas-basquetebol.png\">\r\n<b>Falta pessoal:</b> é um contato físico ilegal com o adversário\r\n<b>Falta dupla:</b> é quando dois jogadores adversários cometem um falta pessoal ao mesmo tempo. A falta será anotada pela mesa e o jogo se reiniciará normalmente sem nenhum penalidade para as equipes.\r\n<b>Falta Técnica:</b> é marcada a partir de um comportamento inadequado dos jogadores ou comissão técnica da equipe\r\nO jogador que cometer duas faltas técnica será desqualificado do jogo\r\nSe a falta técnica for cometida por um jogador ela contará como falta individual e coletiva da equipe\r\nSe forma cometida por um membro do banco não contará como falta coletiva\r\nSerá concedido um lance livre mais reposição de bola para a equipe adversária\r\n<b>Falta Antidesportiva:</b> é uma falta intencional que fere o espírito das regras do jogo\r\nO jogador que cometer duas faltas antidesportiva será desqualificado do jogo\r\nserá concedido lances livres mais reposição de bola para equipe adversária.\r\nSe a falta foi cometida em um jogador que não estava em ato de arremesso, a equipe terá direito a 2 lances livre.\r\nSe a falta foi cometida em um jogador que estava no ato de arremesso, o arremesso será convertido e a equipe terá mais 1 lance livre.\r\n<b>Falta Desqualificante:</b> é uma falta explicitamente antidesportiva.\r\nO jogador será desqualificado\r\nSe a falta foi cometida em um jogador que não estava em ato de arremesso, a equipe terá direito a 2 lances livre mais reposição de bola\r\n<b>Se a falta é sem contacto:</b> 2 lances livres\r\n<b>Se a falta é cometida sobre um jogador no ato de lançamento:</b> a cesta é convertida e, adicionalmente, 1 lance livre.\r\n<b>Se a falta é cometida sobre um jogador no ato de arremesso e a cesta não é convertida:</b> 2 ou 3 lances livres de acordo com a posição do arremesso.\r\n<img src=\"http://localhost/ProjetoJefferson/site/assets/imgs/artigos/faltas-especiais-basquetebol.png\">\r\n\r\n<b>Posse de bola</b>\r\nA bola é jogada com as mãos. Não é permitido ao jogador andar se estiver de posse da bola nem provocar o contato da bola com os pés ou pernas, e muito menos driblar a bola com as duas mãos, ao mesmo tempo.\r\nO jogador que estiver de posse da bola em sua zona de ataque não poderá recuá-la para sua zona de defesa.\r\nDe posse da bola, a equipe tem 24 segundos para lançá-la no cesto adversário. Caso não efetue o arremesso, é marcada uma penalidade.\r\nO drible é o ato de o jogador quicar a bola, no chão e, neste caso, quando de posse da bola, ele pode dar o número de passos que quiser, desde que esteja driblando (quicando) a bola no chão.\r\nNão é permitido realizar duas saídas (bater a bola, agarrá-la e batê-la novamente). Ao segurá-la, o jogador não pode dar mais de dois passos com ela\r\n\r\n\r\n\r\n', NULL, '2019-11-12 12:24:21'),
(1, 'Curiosidades sobre o Basquete', 'curiosidade-basquete', '<b>Algumas curiosidades sobre o Basquete</b>\r\n\r\nOs <b>Estados Unidos</b> é um dos maiores destaques no basquete mundial. \r\nAlguns dos melhores jogadores americanos são:<b> Magic Johnson, Michael Jordan, Oscar Robertson, LeBron James, Larry Bird, Bill Russell, Shaquille O’Neal, Kobe Bryant, Wilt Chamberlain e Kareem Abdul-Jabbar.</b>\r\nNo campeonato da NBA nos Estados Unidos, o tempo também é dividido em 4 períodos, contudo, cada um possui 12 minutos, ao invés de 10.\r\nNo Brasil, os jogadores de basquetebol mais conhecidos são:<b> Oscar Schmidt, Hortência, Paula e Janeth.</b>\r\nNo início, o cesto de basquete não era furado. Ou seja, cada vez que a bola entrava no cesto, alguém precisava tirá-la com auxílio de uma escada.\r\nA pontuação mais alta na história do basquete ocorreu em 1983 entre as equipes:<b> Denver Nuggets e Detroit Pistons</b>. O placar atingiu <b>370 pontos</b> (186 a 184) com vitória do Detroit Pistons.\r\nMats Wermelin, um sueco de apenas 13 anos, entrou para o Guinness Book, visto que em 1974 marcou o maior número de pontos individuais. No total, foram 272 pontos numa só partida.\r\n\r\n', NULL, '2019-11-12 12:52:51'),
(2, 'Origem e História do Basquete', 'origem-historia-basquete', '<b>O basquetebol foi criado em 1891 pelo professor</b> de Educação Física canadense <b>James Naismith</b> (1861-1940).\r\nO esporte surgiu como uma alternativa ao inverno rigoroso da região, em detrimento dos outros praticados ao ar livre como o basebol e o futebol. Além disso, a ideia original era criar um esporte menos violento que o futebol americano. Aliado à isso, o professor criador pretendia integrar os alunos nas aulas de educação física e estimular a coletividade dos grupos.\r\n\r\n<b>O primeiro jogo oficial de basquete foi disputado em 1892</b>, e teve uma plateia aproximada de 200 pessoas. <b>Nesse mesmo ano, as mulheres começaram a praticar essa modalidade.</b> Já <b>a primeira partida feminina ocorreu em 1896</b>. A modalidade feminina foi inserida pela professora de educação física Senda Berenson (1868-1954). Foi também <b>em 1896 que o esporte chegou ao Brasil</b>, trazido pelo norte-americano <b>Augusto Louis</b>.\r\n\r\n<b>Curiosidade:</b> No início o esporte era praticado com uma bola semelhante à de futebol. Somente em 1984 que a bola de basquete, tal qual conhecemos hoje, foi desenvolvida por uma empresa de Massachusetts.\r\n<img src=\"http://localhost/ProjetoJefferson/site/assets/imgs/artigos/bola-basquete.jpg\">\r\n\r\nSomente mais tarde que o basquetebol foi considerado um esporte olímpico. O primeiro jogo de basquete aconteceu nos Jogos Olímpicos de Verão de 1936, em Berlim. Esse momento representou uma grande conquista para a disseminação do esporte pelo mundo. Hoje, cerca de 200 países são filiados à FIBA, Federação Internacional de Basquetebol. Essa organização foi fundada em 1932 e é responsável por organizar os eventos relacionados com o basquete em nível mundial. Atualmente, sua sede está localizada em Genebra, na Suíça.\r\n\r\n\r\n\r\n\r\n', 'fc441400e1566e80422d5523e806d924.png', '2019-11-12 12:56:22'),
(3, 'Fundamentos do Basquetebol', 'fundamentos-do-basquetebol', '<b>Quais são os Fundamentos do Basquete?</b>\r\n<b>Os fundamentos técnicos do Basquete são:</b> Controle do Corpo, Manejo de bola, Drible, Passe, Arremesso, Bandeja, Jump e Rebote.\r\n\r\n<b>O Controle do Corpo no Basquetebol</b>\r\n<img src=\"http://localhost/ProjetoJefferson/site/assets/imgs/artigos/controle-do-corpo-no-basquetebol.png\">\r\n\r\nO Controle do Corpo ou Manejo do Corpo é muito importante para realizar os movimentos do Basquetebol. O Controle do Corpo é importante tanto nos movimentos de defesa, quanto nos movimentos de ataque e não deve ser desprezado nas aulas de iniciação ao Basquetebol.\r\n<b>Alguns movimentos de Controle do Corpo que devem ser treinados no Basquete são:</b>\r\nGiros\r\nFintas\r\nCorridas com várias mudanças de direção\r\nCorrer de frente, correr de costas e correr lateralmente\r\nParadas Bruscas (interromper bruscamente o deslocamento após uma corrida, serve para dificultar a marcação da defesa adversária)\r\nO Manejo de Bola no Basquetebol\r\nO Manejo de Bola é o Fundamento do Basquetebol que tem como objetivo desenvolver a habilidade de Controle de Bola em diversas situações.\r\n\r\n<b>Alguns movimento de Manejo de Bola que devem ser treinados no Basquetebol são:</b>\r\nRolar a bola\r\nQuicar a bola\r\nSegurar a bola\r\ntrocar a bola de mãos\r\nlançar a bola de um lado para o outro do corpo por cima da cabeça\r\nlançar a bola de trás para frente do corpo por cima da cabeça\r\nlançar ou passar a bola por entre as pernas\r\npassar a bola envolta do corpo (na altura dos joelhos e na altura da cintura)\r\n\r\n<b>O Drible no Basquetebol</b>\r\nO Drible é um dos Fundamentos do Basquetebol mais utilizados durante uma partida, é o ato de quicar a bola com uma das mãos. O Drible é usado para que o jogador de Basquete possa se deslocar com a posse de bola.\r\nUma dica simples que sempre deve ser observada na execução do Drible é que o jogador que está Driblando sempre deve manter à frente a perna contrária da mão que está Driblando:\r\nDrible com a mão direita, perna esquerda à frente.\r\nDrible com a mão esquerda, perna direita à frente.\r\n\r\n<b>Quais são os tipos de drible do Basquetebol?</b>\r\n<b>1 – Drible Alto -</b> Também chamado de Drible de Velocidade, pois é utilizado quando o jogador de Basquete está sem marcação e pode se deslocar em velocidade. No Drible Alto a bola é impulsionada mais à frente do corpo.\r\n<b>2 – O Drible Baixo -</b> Também chamado de Drible de Proteção, pois esse tipo de Drible é utilizado quando há uma marcação próxima do jogador que está com a bola, dessa forma ele precisa Driblar para protegendo a bola de seu marcador. Nesse tipo de Drible há uma maior flexão das pernas e a bola fica sempre protegida pelo corpo do jogador.\r\n\r\n<b>Dicas para execução do Drible</b>\r\nDrible sempre de cabeça erguida (olhando seu marcador e a movimentação dos outros jogadores)\r\nDrible empurrando a bola para baixo (não bata na bola)\r\nDurante o Drible não deixe a bola subir além da altura da sua cintura\r\n<img src=\"http://localhost/ProjetoJefferson/site/assets/imgs/artigos/drible-no-basquetebol.png\">\r\n\r\n<b>Para que serve o Drible?</b>\r\nPara se desvencilhar de um marcador\r\nPara ajustar a posição do corpo para realizar um arremesso ou passe\r\nPara proteger a bola diante de um marcado\r\nPara se deslocar em velocidade com a bola\r\n\r\n<b>Fundamentos do Basquetebol: Passe</b>\r\nO Passe no Basquete é o ato de lançar a bola para uma jogador da mesma equipe. É um fundamento de ataque usado para deslocamento da equipe.\r\n<img src=\"http://localhost/ProjetoJefferson/site/assets/imgs/artigos/passe-no-basquetebol.png\">\r\n\r\n<b>Quais são os tipos de Passe do Basquetebol?</b>\r\n<b>1 – O Passe de Peito -</b> O Passe de Peito é o tipo de Passe mais comum no Basquete, é uma passe para curtas e médias distâncias, é uma passe rápido e a bola segue uma trajetória reta.\r\n<b>2 – O Passe Picado ou Quicado -</b> O Passe Picado no Basquete é utilizado em curtas distâncias, nesse tipo de passe a bola toca o solo antes de alcançar o companheiro.\r\n<b>3 – O Passe por cima da Cabeça -</b> O Passe por cima da cabeça no Basquete é realizado em curtas distâncias, lançando a bola por cima do marcador.\r\n<b>4 – O Passe de Ombro -</b> O Passe de Ombro no Basquete é utilizado para alcançar longas distâncias, muito utilizado em jogadas de contra-ataque, quando se quer realizar um passe longo para pegar a defesa adversária desarrumada.\r\n<b>5 – O Passe de Gancho -</b> O Passe de Ganho no Basquete é utilizado em grandes distâncias, é uma tipo de passe com pouco precisão.\r\n\r\n<b>Fundamentos do Basquetebol: Arremesso</b>\r\nO Arremesso no Basquete é uma ação de ataque que tem como objetivo realizar uma cesta (pontos).\r\n\r\n<b>Quais são os tipos de arremesso no Basquetebol?</b>\r\n<b>1 – Arremesso com uma das mãos -</b> É o tipo de arremesso mais comum no Basquete. É executado colocando a mão principal embaixo da bola e a outra mão do lado para dar apoio. A bola deve ser lançada para cesta usando somente a mão que está embaixo da bola. O Arremesso com uma das mãos também pode ser realizado com Salto.\r\n<img src=\"http://localhost/ProjetoJefferson/site/assets/imgs/artigos/arremesso-com-uma-mao-basquetebol.png\">\r\n\r\n<b>Dicas de execução do Arremesso com uma das mãos:</b>\r\nSe você arremessa com a mão direita, sua perna direita deve ficar um pouco à frente, o mesmo serve para arremesso com a mão esquerda\r\nFlexione um pouco as pernas no início do arremesso\r\nO Cotovelo da mão que vai arremessa deve ficar apontando para cesta\r\nOlhe para cesta\r\nFlexionar o punho no final do arremesso\r\nLance bola em uma trajetória parabólica\r\n\r\n<b>Arremesso de Bandeja no Basquetebol</b>\r\nA Bandeja é uma dos Fundamentos do Basquetebol mais comuns, é um tipo de Arremesso realizado em deslocamento, próximo a cesta e com salto.\r\n<img src=\"http://localhost/ProjetoJefferson/site/assets/imgs/artigos/bandeja-no-basquetebol.png\">\r\n\r\n<b>Quais são Os Tipos de Bandeja no Basquetebol?</b>\r\n<b>Bandeja com posse de bola -</b> É quando Jogador vem Driblando, se aproxima da cesta, segura a bola, realiza dois passos e salta em direção a cesta, lançando a bola.\r\n<b>Bandeja sem a posse da bola -</b> É quando o jogador recebe a bola já próximo a cesta e faz a Bandeja sem realizar o Drible.\r\n\r\n<b>O Fundamento Jump No Basquetebol</b>\r\nO Jump é um tipo de Arremesso do Basquete realizado com Salto. O Jump pode ser realizado em deslocamento ou parado e a bola deve ser lançada no momento que o jogador atinge a maior altura no salto.\r\n<img src=\"http://localhost/ProjetoJefferson/site/assets/imgs/artigos/jump-no-basquetebol.png\">\r\n\r\n<b>Fundamento Rebote no Basquetebol</b>\r\nO Rebote no Basquete é o ato de pegar a bola após um Arremesso não convertido.\r\n<img src=\"http://localhost/ProjetoJefferson/site/assets/imgs/artigos/rebote-no-basquetebol.png\">\r\n\r\n<b>Quais são os tipos de Rebote no Basquetebol?</b>\r\n<b>Rebote Defensivo -</b> Também chamado de Rebote de Defesa é quando um jogador da equipe que está defendendo pega o Rebote após um Arremesso não convertido da equipe adversária.\r\n<b>Rebote Ofensivo -</b> Também chamado de Rebote de Ataque é quando um jogador da equipe que está atacando pega o Rebote após um Arremesso não convertido da sua própria equipe.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'e7cd6964bf0750e22f8f15fa42cbdc6e.png', '2019-11-12 12:54:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `competicoes`
--

CREATE TABLE `competicoes` (
  `id_competicao` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `texto` text NOT NULL,
  `foto` varchar(45) NOT NULL,
  `slug_competicao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(35) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT '',
  `mensagem` text NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `mensagem`) VALUES
(1, 'João Vitor Papa', 'joaovitu@gmail.com', 'teste'),
(2, 'teste teste', 'teste@gmail.com', 'teste'),
(3, 'Jeffkz1', 'jeffersonventuradasilva@g', 'teste'),
(4, 'sdfsdfgsdfgfsd', 'sdfsdfsdfsdfsdffsd@gsdfsd', 'fsdsdffsdsdfsdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_artigos`
--

CREATE TABLE `fotos_artigos` (
  `id_fotos_artigo` int(10) UNSIGNED NOT NULL,
  `foto` varchar(45) NOT NULL,
  `id_artigo` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_competicoes`
--

CREATE TABLE `fotos_competicoes` (
  `id_fotos_competicao` int(10) UNSIGNED NOT NULL,
  `foto` varchar(45) NOT NULL,
  `id_competicao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobrenos`
--

CREATE TABLE `sobrenos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `texto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobrenos`
--

INSERT INTO `sobrenos` (`id`, `titulo`, `texto`) VALUES
(5, 'BasketeirosON', 'Criado no ano de 2019, o BasketeirosON é um site que trabalha para oferecer ao seu público um conteúdo explicativo e informativo sobre o basquete com o intuito de deixá-los informado um pouco mais sobre o meio do basquete porque hoje em dia o basquete é um esporte que vem tendo muita visibilidade na mídia, mas poucas pessoas sabem o básico sobre ele. E é por isso nós criamos este site, simplesmente para espalhar o conhecimento do basquete para as pessoas.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `ativo` tinyint(1) UNSIGNED NOT NULL,
  `cadastrado_em` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `senha`, `ativo`, `cadastrado_em`) VALUES
(1, 'jeff', '123muz', 1, '2019-10-29 11:11:56');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id_artigo`);

--
-- Índices para tabela `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Índices para tabela `competicoes`
--
ALTER TABLE `competicoes`
  ADD PRIMARY KEY (`id_competicao`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fotos_artigos`
--
ALTER TABLE `fotos_artigos`
  ADD PRIMARY KEY (`id_fotos_artigo`);

--
-- Índices para tabela `fotos_competicoes`
--
ALTER TABLE `fotos_competicoes`
  ADD PRIMARY KEY (`id_fotos_competicao`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id_artigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `competicoes`
--
ALTER TABLE `competicoes`
  MODIFY `id_competicao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `fotos_artigos`
--
ALTER TABLE `fotos_artigos`
  MODIFY `id_fotos_artigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fotos_competicoes`
--
ALTER TABLE `fotos_competicoes`
  MODIFY `id_fotos_competicao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
