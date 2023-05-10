-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Maio-2023 às 20:06
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sebastiao_alves_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

CREATE TABLE `acessos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `datas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `acessos`
--

INSERT INTO `acessos` (`id`, `id_usuario`, `datas`) VALUES
(1, 1, '21:04:53 - 24/04/2023'),
(2, 1, '21:07:33 - 24/04/2023'),
(3, 1, '11:17:05 - 25/04/2023'),
(4, 1, '11:21:05 - 25/04/2023'),
(5, 1, '12:05:38 - 25/04/2023'),
(6, 1, '12:06:02 - 25/04/2023'),
(7, 1, '13:35:46 - 25/04/2023'),
(8, 1, '17:44:39 - 25/04/2023'),
(9, 1, '22:52:04 - 25/04/2023'),
(10, 1, '23:01:43 - 25/04/2023'),
(11, 1, '11:56:22 - 26/04/2023'),
(12, 1, '12:05:25 - 26/04/2023'),
(13, 1, '19:08:44 - 26/04/2023'),
(14, 1, '19:25:27 - 26/04/2023'),
(15, 1, '19:40:29 - 26/04/2023'),
(16, 2, '19:46:18 - 26/04/2023'),
(17, 2, '19:46:46 - 26/04/2023'),
(18, 1, '19:53:31 - 26/04/2023'),
(19, 2, '20:02:44 - 26/04/2023'),
(20, 1, '20:21:53 - 26/04/2023'),
(21, 2, '20:23:06 - 26/04/2023'),
(22, 3, '20:23:37 - 26/04/2023'),
(23, 1, '20:39:29 - 26/04/2023'),
(24, 3, '20:39:42 - 26/04/2023'),
(25, 1, '20:42:23 - 26/04/2023'),
(26, 1, '22:15:50 - 26/04/2023'),
(27, 1, '22:34:40 - 28/04/2023'),
(28, 1, '22:46:21 - 28/04/2023'),
(29, 1, '23:49:11 - 28/04/2023'),
(30, 1, '11:51:56 - 04/05/2023'),
(31, 1, '12:00:43 - 04/05/2023'),
(32, 1, '19:40:46 - 04/05/2023'),
(33, 1, '20:55:15 - 04/05/2023'),
(34, 1, '09:41:09 - 05/05/2023'),
(35, 2, '12:58:36 - 05/05/2023'),
(36, 1, '17:33:28 - 05/05/2023'),
(37, 1, '17:33:35 - 05/05/2023'),
(38, 1, '19:56:23 - 05/05/2023'),
(39, 1, '20:23:30 - 05/05/2023'),
(40, 1, '20:29:26 - 05/05/2023'),
(41, 2, '13:48:37 - 06/05/2023'),
(42, 2, '14:33:16 - 06/05/2023'),
(43, 2, '14:44:56 - 06/05/2023'),
(44, 2, '15:12:18 - 06/05/2023'),
(45, 3, '15:39:13 - 06/05/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `sobre_autor` varchar(10000) NOT NULL,
  `data_atualizacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `imagem`, `sobre_autor`, `data_atualizacao`) VALUES
(1, 'public/imagens/conteudo.jpg', '                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ex possimus repellat nobis maiores iusto et dolorum sunt dolor? Fugit nisi dolorum at tenetur quas dicta doloremque omnis temporibus eius? Reiciendis temporibus eveniet excepturi ad placeat? Fuga dolores mollitia aliquid nesciunt, quos ipsa veritatis hic labore, alias commodi ratione maxime saepe nam! Quam eaque consequuntur eligendi saepe possimus vero hic autem deleniti! Incidunt ea, voluptatibus excepturi sapiente doloribus aliquid suscipit accusantium tempora eos ad deserunt accusamus autem. Facilis totam magnam, maiores nesciunt magni, nemo debitis laudantium atque quibusdam veniam quae obcaecati possimus natus molestias aliquam error in cum distinctio cumque minus nihil libero optio. Labore iusto doloremque quas ab in et magnam inventore, delectus, quam facere autem optio ipsam! Ipsum in, quae quibusdam maiores, facere qui illum esse cumque tenetur culpa unde ut voluptates, totam maxime quas eos magnam! Minus veritatis distinctio provident, dolorum, blanditiis consectetur nobis laboriosam nesciunt corrupti facilis cumque beatae quae quasi assumenda tempora vel impedit error maiores consequuntur autem, sint quam molestias? Libero cupiditate laboriosam exercitationem veritatis enim. Vitae neque facere dicta natus, reprehenderit voluptatum quae, aliquid minus saepe et maiores ipsam, perspiciatis voluptates ipsum porro assumenda. Mollitia facilis omnis sint. Nisi eius corporis molestiae aut alias doloribus consectetur pariatur minima laudantium non libero dolore natus obcaecati assumenda perferendis deserunt laboriosam quas, adipisci labore officiis? Atque consequuntur a maxime fuga, natus cumque deleniti error voluptas molestias laboriosam ipsa at voluptate cupiditate dicta. Delectus id iusto quis ipsam ratione sapiente repellendus modi repellat suscipit animi, fuga nostrum illum accusamus exercitationem velit, nam numquam aperiam magni natus earum. Perferendis a, nihil libero non quis vitae ducimus totam doloribus repellendus in eum officia amet soluta, quae pariatur facilis, accusantium suscipit harum doloremque voluptates et illo. Delectus veniam, quaerat fuga architecto dicta neque deleniti quidem doloribus mollitia repellat eius facilis.\n                    <span id=\"info_extra\">\n                        Minus veritatis distinctio provident, dolorum, blanditiis consectetur nobis laboriosam nesciunt corrupti facilis cumque beatae quae quasi assumenda tempora vel impedit error maiores consequuntur autem, sint quam molestias? Libero cupiditate laboriosam exercitationem veritatis enim. Vitae neque facere dicta natus, reprehenderit voluptatum quae, aliquid minus saepe et maiores ipsam, perspiciatis voluptates ipsum porro assumenda. Mollitia facilis omnis sint. Nisi eius corporis molestiae aut alias doloribus consectetur pariatur minima laudantium non libero dolore natus obcaecati assumenda perferendis deserunt laboriosam quas, adipisci labore officiis? Atque consequuntur a maxime fuga, natus cumque deleniti error voluptas molestias laboriosam ipsa at voluptate cupiditate dicta. Delectus id iusto quis ipsam ratione sapiente repellendus modi repellat suscipit animi, fuga nostrum illum accusamus exercitationem velit, nam numquam aperiam magni natus earum. Perferendis a, nihil libero non quis vitae ducimus totam doloribus repellendus in eum officia amet soluta, quae pariatur facilis, accusantium suscipit harum doloremque voluptates et illo. Delectus veniam, quaerat fuga architecto dicta neque deleniti quidem doloribus mollitia repellat eius facilis.\n                    </span>', '19:36:28 - 21/04/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `imagem_lg` varchar(300) NOT NULL,
  `imagem_sm` varchar(300) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `sinopse` varchar(400) NOT NULL,
  `link` varchar(300) NOT NULL,
  `posicao` int(11) NOT NULL,
  `data_atualizacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id`, `imagem_lg`, `imagem_sm`, `categoria`, `titulo`, `sinopse`, `link`, `posicao`, `data_atualizacao`) VALUES
(1, 'public/imagens/cabecalho1.jpg', 'public/imagens/mobile_cabecalho1.jpg', 'Novidade', 'A senhora do amor e da guerra', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore quasi ipsam optio vero totam, inventore porro, obcaecati accusantium ipsum distinctio tempore mollitia ex natus accusamus libero harum pariatur unde molestias maiores possimus ea quibusdam odit? Recusandae distinctio numquam ducimus ullam!', 'livros.php?livro=1', 1, '12:02:06 - 04/05/2023'),
(2, 'public/imagens/cabecalho2.jpg', 'public/imagens/mobile_cabecalho2.jpg', '', 'O coleccionador de amnésias', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore quasi ipsam optio vero totam, inventore porro, obcaecati accusantium ipsum distinctio tempore mollitia ex natus accusamus libero harum pariatur unde molestias maiores possimus ea quibusdam odit? Recusandae distinctio numquam ducimus ullam!', 'livros.php?livro=2', 3, 'hoje'),
(3, 'public/imagens/cabecalho3.jpg', 'public/imagens/mobile_cabecalho3.jpg', '', 'O caracol estrábico', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore quasi ipsam optio vero totam, inventore porro, obcaecati accusantium ipsum distinctio tempore mollitia ex natus accusamus libero harum pariatur unde molestias maiores possimus ea quibusdam odit? Recusandae distinctio numquam ducimus ullam!', 'livros.php?livro=3', 2, 'hoje'),
(4, 'public/imagens/cabecalho4.jpg', 'public/imagens/mobile_cabecalho4.jpg', '', 'O velho que pensava que fugia', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore quasi ipsam optio vero totam, inventore porro, obcaecati accusantium ipsum distinctio tempore mollitia ex natus accusamus libero harum pariatur unde molestias maiores possimus ea quibusdam odit? Recusandae distinctio numquam ducimus ullam!', 'livros.php?livro=4', 4, 'hoje');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `apelido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `admin`, `email`, `senha`, `nome`, `apelido`) VALUES
(1, 1, 'biojorge96@gmail.com', '$2y$10$VxVFlo1k.C2rU/YUWEunmOZfHOg9eMIMMua5/F96YMP4UMCjcHG9.', 'Jorge', 'Filho'),
(2, 0, 'matheusdesa3@gmail.com', '$2y$10$uRuvsjh23rMTO4PAUNah6OF7ZZeqnsPVP4ljt5YDBmlaOp4qhL97y', 'Matheus', 'Tavares'),
(3, 0, 'fabricio@codemaster.pt', '$2y$10$uRuvsjh23rMTO4PAUNah6OF7ZZeqnsPVP4ljt5YDBmlaOp4qhL97y', 'Fabrício', 'Vidal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `morada` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telemovel` varchar(20) NOT NULL,
  `horario` varchar(200) NOT NULL,
  `data_atualizacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `morada`, `email`, `telemovel`, `horario`, `data_atualizacao`) VALUES
(1, 'Lorem ipsum dolor sit amet, 12.\r\n1234-567 Lorem', 'lorem@lorem.pt', '+351 927 121 725', 'De Segunda a Sexta das 00:00h às 00:00h', '20:00:29 - 21/04/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL,
  `data_atualizacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id`, `id_livro`, `data_atualizacao`) VALUES
(1, 1, '16:07:55 - 06/05/2023'),
(2, 2, '12:03:34 - 25/04/2023'),
(3, 4, '12:07:13 - 26/04/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `ultimos_livros_paragrafo` varchar(500) NOT NULL,
  `data_atualizacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `imagem`, `ultimos_livros_paragrafo`, `data_atualizacao`) VALUES
(1, 'public/imagens/FOTO-editada.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ullam saepe, at rerum temporibus laboriosam maxime veniam dolorem animi eum accusamus facere placeat error corporis debitis quas harum iusto, quam aliquid nam eveniet recusandae quis. Quibusdam eos quia blanditiis hic voluptate sunt consequuntur dignissimos a ipsam fugiat. Mollitia, ullam labore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ullam saepe, at rerum temporibus laboriosam maxime veniam dolorem animi e', '17:45:07 - 25/04/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE `imprensa` (
  `id` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descricao` varchar(3000) NOT NULL,
  `data_publicacao` varchar(100) NOT NULL,
  `data_atualizacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id`, `imagem`, `titulo`, `descricao`, `data_publicacao`, `data_atualizacao`) VALUES
(1, 'public/imagens/conteudo-imprensa1@2x.jpg', 'Lançamento | senhora do amor e da guerra', '', 'publicado a 17 de junho de 2020', '10:41:00 - 24/04/2023'),
(2, 'public/imagens/conteudo-imprensa2@2x.jpg', 'Lançamento do livro ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesc iunt quia tenetur, beatae nam eaque nihil dignissimos nobis obcae cati cum ratione, voluptates doloremque officia dicta eum sunt, re usandae sit quod commodi. Cum sequi fugit nobis ipsam ratione tempo ra temporibus, neque similique nulla, vitae esse. Veniam animi, arc hitecto eius repellendus aperiam asperiores officia reiciendis qui cum quos iure tenetur quasi sed.&nbsp;<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, ma gni. Exercitationem expedita accusamus iure nostrum a eos aspernatur culpa debitis consectetur ipsa ex dolori.', 'publicado a 6 de dezembro de 2017', '22:36:53 - 28/04/2023'),
(4, 'http://localhost/sebastiao_alves/uploads/psicologia.jpg', 'REVISTA PSICOLOGIA NA ACTUALIDADE', '<strong>Artigo - Da Poesia à Ficção de Sebastião Alves</strong></p><p><i>BREVE EXCERTO</i></p><p><i>&nbsp;</i></p><p><i>“Que fazer quando a poesia secou? Que fazer quando as imagens se repetem, espelhos paralelos, pedras, musgo, vácuo? Que fazer quando se sente a atração do vácuo e tudo o resto é máscara? Era preciso reagir.</i></p><p><i>E fui à luta! Eu sempre quisera escrever contos. Várias vezes tinha tentado sem conseguir. Acho que o principal motivo era falta de convicção. Não acreditava que soubesse suficientemente a respeito da vida e não acreditava que fosse capaz. Por isso não tentava com o devido empenho.</i></p><p><i>Mas agora tinha que ser! Afinal eu era ainda um jovem de quarenta e cinco anos... Comecei a folhear velhas ideias, velhas tentativas falhadas, a tentar encontrar fio condutor e desfecho para cada uma delas. Em vão. Foram meses e meses de derrotas sucessivas, agarrado apenas à teimosia que prende o náufrago à tábua flutuante.</i></p><p><i>Até que um dia me lembrei do meu sogro, que sofria de Alzheimer, e me ocorreu um título mágico: “Memórias de um amnésico“.“</i>', 'PUBLICADO A 01 JANEIRO 2021', '22:52:02 - 28/04/2023'),
(5, 'http://localhost/sebastiao_alves/uploads/lancamentoamnesias.jpg', 'LANÇAMENTO DO LIVRO «O COLECCIONADOR DE AMNÉSIAS»', '<p>No próximo dia 21 de Outubro será lançado o livro «O Coleccionador de Amnésias», da autoria de Sebastião Alves, que cedeu os direitos de autor à Alzheimer Portugal?Data 15-10-2014&nbsp;</p><p><br>?No próximo dia 21 de Outubro, pelas 18:00 hrs, no Instituto Superior Técnico em Lisboa, será lançado o livro «O Coleccionador de Amnésias», da autoria de Sebastião Alves, que muito generosamente cedeu à Alzheimer Portugal os direitos de autor. A obra representa bem a realidade de todo o percurso de um Doente de Alzheimer. O interesse do leitor é desde logo conseguido não só pela forma como o autor vai apresentando o Engenheiro Zeferino, uma vez que parte sempre da perspectiva da personagem, mas também por não faltarem os momentos de ternura, os momentos de humor e os momentos de tristeza e solidão.??Não deixe de nos acompanhar neste momento! A Alzheimer Portugal agradece.</p>', 'PUBLICADO A 15 NOVEMBRO 2014', '14:34:49 - 06/05/2023'),
(6, 'http://localhost/sebastiao_alves/uploads/90fb4379e62ef4104a0bd58bae82fe35.gif', 'Trololololololo...', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor voluptatum praesentium quis iste magni. Quia non doloribus fugiat, necessitatibus accusamus minus, iusto nam pariatur atque corrupti praesentium eos in aperiam. Mollitia deleniti totam, quo non repellendus quas, accusantium assumenda, repudiandae culpa<i><strong> nulla venia</strong>m eligendi fuga repr</i>ehenderit rem? Culpa placeat provident cupiditate? Repellat illo temporibus cupiditate exercitationem quo culpa repellendus officiis odio maiores minima! Cumque quis necessitatibus doloremque enim? Rerum quasi quibusdam harum deserunt, rem reprehenderit, quos earum voluptates optio dignissimos non ipsa corporis corrupti voluptate, atque obcaecati. Sapiente quia molestias, labore, tempore fugit at, dolore iure nihil repelle<strong>ndus reiciendis facilis</strong></p><p>&nbsp;recusandae! Molestiae ipsam natus labore possimus quos optio quisquam assumenda voluptates est nam iusto, illo quam fugit impedit? Eius commodi possimus accusantium ad dolorum minima, in non ea od<strong>it sunt aut est repellendus itaque natus explicabo dolorem! Natus maiores tempore praesentium? Quo, sequi unde maiores vero dolor dicta inventore, temporibus eum asperiores, quaerat nulla nostrum</strong> facere ex expedita magnam voluptate non? Optio odio deleniti quas laboriosam delectus. Quam illum rem ad quod ratione officia itaque ipsa maiores. Deserunt maiores maxime porro iusto doloremque, dolorem ab nam. Suscipit quas esse magni similique maiores tempore cumque est placeat, enim deserunt earum alias?</p>', '31 de Fevereiro de 2069', '14:47:27 - 06/05/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `imagem_cartas` varchar(200) NOT NULL,
  `imagem_livros` varchar(300) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descricao` varchar(10000) NOT NULL,
  `data_atualizacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `imagem_cartas`, `imagem_livros`, `titulo`, `categoria`, `descricao`, `data_atualizacao`) VALUES
(1, 'public/imagens/livro1.jpg', 'public/imagens/livro-conteudo.jpg', 'A senhora do amor e da guerra', 'Novidade', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur atque, expedita nesciunt inventore excepturi corrupti, hic adipisci debitis earum amet vitae iste quisquam nisi facere incidunt quae totam! Nisi illo quas ipsum distinctio quod necessitatibus, quam accusamus nobis non explicabo odio delectus id sit amet. Esse mollitia obcaecati perspiciatis quo, labore omnis ad illum vitae culpa, amet doloremque adipisci veniam enim eaque, ratione harum. Quidem commodi quam quos totam modi quas officia numquam! Magnam autem quod optio necessitatibus quibusdam, maxime architecto doloribus minima nostrum, molestias magni ratione numquam similique animi veritatis sunt ut eveniet, fugiat explicabo distinctio vero. Expedita dolorem obcaecati fugiat provident, deleniti vel quasi tenetur repellendus eius quo neque illum veniam aliquam quisquam debitis quos mollitia ex rerum incidunt labore. Ab blanditiis est nulla recusandae, deserunt eos? Accusamus, omnis, voluptatum quibusdam, soluta ratione reiciendis cupiditate aliquid porro aperiam sit rem! Deleniti sed consectetur eius aliquid voluptate eveniet pariatur quos tempora temporibus commodi illo minus molestias blanditiis sint aspernatur ullam praesentium esse debitis rerum amet, culpa velit. Corporis modi voluptates, doloremque quasi quia quis eum labore tempore. Obcaecati, unde libero. At provident natus optio in, dicta, animi officiis voluptatum magni omnis maiores quo. Magnam aliquid rem atque laboriosam quo commodi quibusdam voluptatem cupiditate quaerat, porro aspernatur omnis exercitationem ducimus optio expedita eos. A, qui ducimus blanditiis eum eveniet omnis quisquam eligendi necessitatibus fuga maiores commodi placeat, excepturi officiis adipisci ex! Excepturi quae corrupti dolorem reprehenderit sit tempora distinctio cumque ratione, atque nemo delectus quas? Earum reprehenderit asperiores perferendis quam, pariatur beatae laudantium, enim placeat eum soluta unde molestiae fuga nisi voluptate quisquam tempora laborum? Ipsa in laborum soluta aut quas quibusdam itaque nulla illum libero commodi. Illo, labore laudantium quae iure necessitatibus velit officiis reiciendis quasi maiores? Cum beatae sequi commodi, aliquid officiis dicta iusto omnis, voluptatum a amet, nemo est ut id. Incidunt perferendis ratione, nisi amet, architecto ex quibusdam non obcaecati consectetur, quae reiciendis sequi corporis laboriosam neque deleniti ea odio inventore? Corporis expedita dicta iusto ipsam dolorem modi vel eius repellat. Reprehenderit saepe vitae aliquam cumque id dolorum ea et omnis, fugiat doloremque vel incidunt odit quae suscipit totam sunt unde laboriosam quas minus minima animi. Eveniet, aut labore odit cupiditate dignissimos voluptas at natus dolore expedita optio fugit est nemo fuga et earum, libero odio enim itaque aperiam? Quibusdam possimus blanditiis aspernatur repellat officiis quisquam ut alias perspiciatis vitae quae! Facere maxime facilis sequi vero?                    <br><br>\n                    Incidunt quas vitae reiciendis dolor mollitia ab omnis, accusantium nemo officiis nostrum similique praesentium, qui dignissimos, \n                    <br><br>id ipsum voluptatibus natus fugiat ullam delectus. Possimus qui corrupti odit soluta nostrum amet obcaecati laudantium sapiente culpa hic, nihil est. \n                    <br><br>Rerum eaque et illo aut, debitis impedit nostrum aperiam quis veniam reprehenderit repellat magnam facilis, porro praesentium placeat earum iste optio enim. \n                    <br><br>Cupiditate quibusdam voluptates tempora quam. Assumenda, facere. Quo est suscipit, excepturi aliquid nesciunt, \n                    <br><br>accusamus esse assumenda laboriosam minima numquam nisi officiis at, sit alias. Sequi explicabo excepturi, velit ea enim quas aperiam itaque?\n                    <br><br>id ipsum voluptatibus natus fugiat ullam delectus. ', '16:07:55 - 06/05/2023'),
(2, 'public/imagens/livro2.jpg', 'public/imagens/livro-conteudo2.jpg', 'O colecionador de amnésias', 'Em promoção', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur atque, expedita nesciunt inventore excepturi corrupti, hic adipisci debitis earum amet vitae iste quisquam nisi facere incidunt quae totam! Nisi illo quas ipsum distinctio quod necessitatibus, quam accusamus nobis non explicabo odio delectus id sit amet. Esse mollitia obcaecati perspiciatis quo, labore omnis ad illum vitae culpa, amet doloremque adipisci veniam enim eaque, ratione harum. Quidem commodi quam quos totam modi quas officia numquam! Magnam autem quod optio necessitatibus quibusdam, maxime architecto doloribus minima nostrum, molestias magni ratione numquam similique animi veritatis sunt ut eveniet, fugiat explicabo distinctio vero. Expedita dolorem obcaecati fugiat provident, deleniti vel quasi tenetur repellendus eius quo neque illum veniam aliquam quisquam debitis quos mollitia ex rerum incidunt labore. Ab blanditiis est nulla recusandae, deserunt eos? Accusamus, omnis, voluptatum quibusdam, soluta ratione reiciendis cupiditate aliquid porro aperiam sit rem! Deleniti sed consectetur eius aliquid voluptate eveniet pariatur quos tempora temporibus commodi illo minus molestias blanditiis sint aspernatur ullam praesentium esse debitis rerum amet, culpa velit. Corporis modi voluptates, doloremque quasi quia quis eum labore tempore. Obcaecati, unde libero. At provident natus optio in, dicta, animi officiis voluptatum magni omnis maiores quo. Magnam aliquid rem atque laboriosam quo commodi quibusdam voluptatem cupiditate quaerat, porro aspernatur omnis exercitationem ducimus optio expedita eos. A, qui ducimus blanditiis eum eveniet omnis quisquam eligendi necessitatibus fuga maiores commodi placeat, excepturi officiis adipisci ex! Excepturi quae corrupti dolorem reprehenderit sit tempora distinctio cumque ratione, atque nemo delectus quas? Earum reprehenderit asperiores perferendis quam, pariatur beatae laudantium, enim placeat eum soluta unde molestiae fuga nisi voluptate quisquam tempora laborum? Ipsa in laborum soluta aut quas quibusdam itaque nulla illum libero commodi. Illo, labore laudantium quae iure necessitatibus velit officiis reiciendis quasi maiores? Cum beatae sequi commodi, aliquid officiis dicta iusto omnis, voluptatum a amet, nemo est ut id. Incidunt perferendis ratione, nisi amet, architecto ex quibusdam non obcaecati consectetur, quae reiciendis sequi corporis laboriosam neque deleniti ea odio inventore? Corporis expedita dicta iusto ipsam dolorem modi vel eius repellat. Reprehenderit saepe vitae aliquam cumque id dolorum ea et omnis, fugiat doloremque vel incidunt odit quae suscipit totam sunt unde laboriosam quas minus minima animi. Eveniet, aut labore odit cupiditate dignissimos voluptas at natus dolore expedita optio fugit est nemo fuga et earum, libero odio enim itaque aperiam? Quibusdam possimus blanditiis aspernatur repellat officiis quisquam ut alias perspiciatis vitae quae! Facere maxime facilis sequi vero?                    <br><br>\n                    Incidunt quas vitae reiciendis dolor mollitia ab omnis, accusantium nemo officiis nostrum similique praesentium, qui dignissimos, \n                    <br><br>id ipsum voluptatibus natus fugiat ullam delectus. Possimus qui corrupti odit soluta nostrum amet obcaecati laudantium sapiente culpa hic, nihil est. \n                    <br><br>Rerum eaque et illo aut, debitis impedit nostrum aperiam quis veniam reprehenderit repellat magnam facilis, porro praesentium placeat earum iste optio enim. \n                    <br><br>Cupiditate quibusdam voluptates tempora quam. Assumenda, facere. Quo est suscipit, excepturi aliquid nesciunt, \n                    <br><br>accusamus esse assumenda laboriosam minima numquam nisi officiis at, sit alias. Sequi explicabo excepturi, velit ea enim quas aperiam itaque?\n                    <br><br>id ipsum voluptatibus natus fugiat ullam delectus. ', ''),
(3, 'public/imagens/livro3.jpg', 'public/imagens/livro-conteudo3.jpg', 'O caracol estrábico', 'Mais vendido', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur atque, expedita nesciunt inventore excepturi corrupti, hic adipisci debitis earum amet vitae iste quisquam nisi facere incidunt quae totam! Nisi illo quas ipsum distinctio quod necessitatibus, quam accusamus nobis non explicabo odio delectus id sit amet. Esse mollitia obcaecati perspiciatis quo, labore omnis ad illum vitae culpa, amet doloremque adipisci veniam enim eaque, ratione harum. Quidem commodi quam quos totam modi quas officia numquam! Magnam autem quod optio necessitatibus quibusdam, maxime architecto doloribus minima nostrum, molestias magni ratione numquam similique animi veritatis sunt ut eveniet, fugiat explicabo distinctio vero. Expedita dolorem obcaecati fugiat provident, deleniti vel quasi tenetur repellendus eius quo neque illum veniam aliquam quisquam debitis quos mollitia ex rerum incidunt labore. Ab blanditiis est nulla recusandae, deserunt eos? Accusamus, omnis, voluptatum quibusdam, soluta ratione reiciendis cupiditate aliquid porro aperiam sit rem! Deleniti sed consectetur eius aliquid voluptate eveniet pariatur quos tempora temporibus commodi illo minus molestias blanditiis sint aspernatur ullam praesentium esse debitis rerum amet, culpa velit. Corporis modi voluptates, doloremque quasi quia quis eum labore tempore. Obcaecati, unde libero. At provident natus optio in, dicta, animi officiis voluptatum magni omnis maiores quo. Magnam aliquid rem atque laboriosam quo commodi quibusdam voluptatem cupiditate quaerat, porro aspernatur omnis exercitationem ducimus optio expedita eos. A, qui ducimus blanditiis eum eveniet omnis quisquam eligendi necessitatibus fuga maiores commodi placeat, excepturi officiis adipisci ex! Excepturi quae corrupti dolorem reprehenderit sit tempora distinctio cumque ratione, atque nemo delectus quas? Earum reprehenderit asperiores perferendis quam, pariatur beatae laudantium, enim placeat eum soluta unde molestiae fuga nisi voluptate quisquam tempora laborum? Ipsa in laborum soluta aut quas quibusdam itaque nulla illum libero commodi. Illo, labore laudantium quae iure necessitatibus velit officiis reiciendis quasi maiores? Cum beatae sequi commodi, aliquid officiis dicta iusto omnis, voluptatum a amet, nemo est ut id. Incidunt perferendis ratione, nisi amet, architecto ex quibusdam non obcaecati consectetur, quae reiciendis sequi corporis laboriosam neque deleniti ea odio inventore? Corporis expedita dicta iusto ipsam dolorem modi vel eius repellat. Reprehenderit saepe vitae aliquam cumque id dolorum ea et omnis, fugiat doloremque vel incidunt odit quae suscipit totam sunt unde laboriosam quas minus minima animi. Eveniet, aut labore odit cupiditate dignissimos voluptas at natus dolore expedita optio fugit est nemo fuga et earum, libero odio enim itaque aperiam? Quibusdam possimus blanditiis aspernatur repellat officiis quisquam ut alias perspiciatis vitae quae! Facere maxime facilis sequi vero?                    <br><br>\n                    Incidunt quas vitae reiciendis dolor mollitia ab omnis, accusantium nemo officiis nostrum similique praesentium, qui dignissimos, \n                    <br><br>id ipsum voluptatibus natus fugiat ullam delectus. Possimus qui corrupti odit soluta nostrum amet obcaecati laudantium sapiente culpa hic, nihil est. \n                    <br><br>Rerum eaque et illo aut, debitis impedit nostrum aperiam quis veniam reprehenderit repellat magnam facilis, porro praesentium placeat earum iste optio enim. \n                    <br><br>Cupiditate quibusdam voluptates tempora quam. Assumenda, facere. Quo est suscipit, excepturi aliquid nesciunt, \n                    <br><br>accusamus esse assumenda laboriosam minima numquam nisi officiis at, sit alias. Sequi explicabo excepturi, velit ea enim quas aperiam itaque?\n                    <br><br>id ipsum voluptatibus natus fugiat ullam delectus. ', '16:04:34 - 06/05/2023'),
(4, 'public/imagens/livro-conteudo4.jpg', 'public/imagens/livro-conteudo4.jpg', 'O velho que pensava que fugia', 'Em promoção', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur atque, expedita nesciunt inventore excepturi corrupti, hic adipisci debitis earum amet vitae iste quisquam nisi facere incidunt quae totam! Nisi illo quas ipsum distinctio quod necessitatibus, quam accusamus nobis non explicabo odio delectus id sit amet. Esse mollitia obcaecati perspiciatis quo, labore omnis ad illum vitae culpa, amet doloremque adipisci veniam enim eaque, ratione harum. Quidem commodi quam quos totam modi quas officia numquam! Magnam autem quod optio necessitatibus quibusdam, maxime architecto doloribus minima nostrum, molestias magni ratione numquam similique animi veritatis sunt ut eveniet, fugiat explicabo distinctio vero. Expedita dolorem obcaecati fugiat provident, deleniti vel quasi tenetur repellendus eius quo neque illum veniam aliquam quisquam debitis quos mollitia ex rerum incidunt labore. Ab blanditiis est nulla recusandae, deserunt eos? Accusamus, omnis, voluptatum quibusdam, soluta ratione reiciendis cupiditate aliquid porro aperiam sit rem! Deleniti sed consectetur eius aliquid voluptate eveniet pariatur quos tempora temporibus commodi illo minus molestias blanditiis sint aspernatur ullam praesentium esse debitis rerum amet, culpa velit. Corporis modi voluptates, doloremque quasi quia quis eum labore tempore. Obcaecati, unde libero. At provident natus optio in, dicta, animi officiis voluptatum magni omnis maiores quo. Magnam aliquid rem atque laboriosam quo commodi quibusdam voluptatem cupiditate quaerat, porro aspernatur omnis exercitationem ducimus optio expedita eos. A, qui ducimus blanditiis eum eveniet omnis quisquam eligendi necessitatibus fuga maiores commodi placeat, excepturi officiis adipisci ex! Excepturi quae corrupti dolorem reprehenderit sit tempora distinctio cumque ratione, atque nemo delectus quas? Earum reprehenderit asperiores perferendis quam, pariatur beatae laudantium, enim placeat eum soluta unde molestiae fuga nisi voluptate quisquam tempora laborum? Ipsa in laborum soluta aut quas quibusdam itaque nulla illum libero commodi. Illo, labore laudantium quae iure necessitatibus velit officiis reiciendis quasi maiores? Cum beatae sequi commodi, aliquid officiis dicta iusto omnis, voluptatum a amet, nemo est ut id. Incidunt perferendis ratione, nisi amet, architecto ex quibusdam non obcaecati consectetur, quae reiciendis sequi corporis laboriosam neque deleniti ea odio inventore? Corporis expedita dicta iusto ipsam dolorem modi vel eius repellat. Reprehenderit saepe vitae aliquam cumque id dolorum ea et omnis, fugiat doloremque vel incidunt odit quae suscipit totam sunt unde laboriosam quas minus minima animi. Eveniet, aut labore odit cupiditate dignissimos voluptas at natus dolore expedita optio fugit est nemo fuga et earum, libero odio enim itaque aperiam? Quibusdam possimus blanditiis aspernatur repellat officiis quisquam ut alias perspiciatis vitae quae! Facere maxime facilis sequi vero?                    <br><br>\n                    Incidunt quas vitae reiciendis dolor mollitia ab omnis, accusantium nemo officiis nostrum similique praesentium, qui dignissimos, \n                    <br><br>id ipsum voluptatibus natus fugiat ullam delectus. Possimus qui corrupti odit soluta nostrum amet obcaecati laudantium sapiente culpa hic, nihil est. \n                    <br><br>Rerum eaque et illo aut, debitis impedit nostrum aperiam quis veniam reprehenderit repellat magnam facilis, porro praesentium placeat earum iste optio enim. \n                    <br><br>Cupiditate quibusdam voluptates tempora quam. Assumenda, facere. Quo est suscipit, excepturi aliquid nesciunt, \n                    <br><br>accusamus esse assumenda laboriosam minima numquam nisi officiis at, sit alias. Sequi explicabo excepturi, velit ea enim quas aperiam itaque?\n                    <br><br>id ipsum voluptatibus natus fugiat ullam delectus. ', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `navegacao`
--

CREATE TABLE `navegacao` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `navegacao`
--

INSERT INTO `navegacao` (`id`, `nome`, `link`) VALUES
(1, 'Home', 'home'),
(2, 'Autor', 'autor'),
(3, 'Livros', 'livros'),
(4, 'Imprensa', 'imprensa'),
(5, 'Contactos', 'contactos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `redes_sociais`
--

CREATE TABLE `redes_sociais` (
  `id` int(11) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `data_atualizacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `redes_sociais`
--

INSERT INTO `redes_sociais` (`id`, `facebook`, `instagram`, `linkedin`, `data_atualizacao`) VALUES
(1, 'https://www.facebook.com/jorgecarlos.filho.1', 'https://www.instagram.com/biojorge96/', 'https://www.linkedin.com/in/jorge-carlos-sousa-filho-5310861a3/', '23:14:10 - 21/04/2023');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `navegacao`
--
ALTER TABLE `navegacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `redes_sociais`
--
ALTER TABLE `redes_sociais`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `navegacao`
--
ALTER TABLE `navegacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `redes_sociais`
--
ALTER TABLE `redes_sociais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
