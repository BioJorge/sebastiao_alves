-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Abr-2023 às 01:24
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
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `sobre_autor` varchar(5000) NOT NULL,
  `data_atualizacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `imagem`, `sobre_autor`, `data_atualizacao`) VALUES
(1, 'imagens_para_site/desktop/conteudo.jpg', '            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ex possimus repellat nobis maiores iusto et dolorum sunt dolor? Fugit nisi dolorum at tenetur quas dicta doloremque omnis temporibus eius? Reiciendis temporibus eveniet excepturi ad placeat? Fuga dolores mollitia aliquid nesciunt, quos ipsa veritatis hic labore, alias commodi ratione maxime saepe nam! Quam eaque consequuntur eligendi saepe possimus vero hic autem deleniti! Incidunt ea, voluptatibus excepturi sapiente doloribus aliquid suscipit accusantium tempora eos ad deserunt accusamus autem. Facilis totam magnam, maiores nesciunt magni, nemo debitis laudantium atque quibusdam veniam quae obcaecati possimus natus molestias aliquam error in cum distinctio cumque minus nihil libero optio. Labore iusto doloremque quas ab in et magnam inventore, delectus, quam facere autem optio ipsam! Ipsum in, quae quibusdam maiores, facere qui illum esse cumque tenetur culpa unde ut voluptates, totam maxime quas eos magnam! Minus veritatis distinctio provident, dolorum, blanditiis consectetur nobis laboriosam nesciunt corrupti facilis cumque beatae quae quasi assumenda tempora vel impedit error maiores consequuntur autem, sint quam molestias? Libero cupiditate laboriosam exercitationem veritatis enim. Vitae neque facere dicta natus, reprehenderit voluptatum quae, aliquid minus saepe et maiores ipsam, perspiciatis voluptates ipsum porro assumenda. Mollitia facilis omnis sint. Nisi eius corporis molestiae aut alias doloribus consectetur pariatur minima laudantium non libero dolore natus obcaecati assumenda perferendis deserunt laboriosam quas, adipisci labore officiis? Atque consequuntur a maxime fuga, natus cumque deleniti error voluptas molestias laboriosam ipsa at voluptate cupiditate dicta. Delectus id iusto quis ipsam ratione sapiente repellendus modi repellat suscipit animi, fuga nostrum illum accusamus exercitationem velit, nam numquam aperiam magni natus earum. Perferendis a, nihil libero non quis vitae ducimus totam doloribus repellendus in eum officia amet soluta, quae pariatur facilis, accusantium suscipit harum doloremque voluptates et illo. Delectus veniam, quaerat fuga architecto dicta neque deleniti quidem doloribus mollitia repellat eius facilis.\n            <span id=\"info_extra\">\n                Minus veritatis distinctio provident, dolorum, blanditiis consectetur nobis laboriosam nesciunt corrupti facilis cumque beatae quae quasi assumenda tempora vel impedit error maiores consequuntur autem, sint quam molestias? Libero cupiditate laboriosam exercitationem veritatis enim. Vitae neque facere dicta natus, reprehenderit voluptatum quae, aliquid minus saepe et maiores ipsam, perspiciatis voluptates ipsum porro assumenda. Mollitia facilis omnis sint. Nisi eius corporis molestiae aut alias doloribus consectetur pariatur minima laudantium non libero dolore natus obcaecati assumenda perferendis deserunt laboriosam quas, adipisci labore officiis? Atque consequuntur a maxime fuga, natus cumque deleniti error voluptas molestias laboriosam ipsa at voluptate cupiditate dicta. Delectus id iusto quis ipsam ratione sapiente repellendus modi repellat suscipit animi, fuga nostrum illum accusamus exercitationem velit, nam numquam aperiam magni natus earum. Perferendis a, nihil libero non quis vitae ducimus totam doloribus repellendus in eum officia amet soluta, quae pariatur facilis, accusantium suscipit harum doloremque voluptates et illo. Delectus veniam, quaerat fuga architecto dicta neque deleniti quidem doloribus mollitia repellat eius facilis.\n            </span>', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel_lg`
--

CREATE TABLE `carousel_lg` (
  `id` int(11) NOT NULL,
  `imagem_lg` varchar(300) NOT NULL,
  `imagem_sm` varchar(300) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `sinopse` varchar(400) NOT NULL,
  `data_atualizacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carousel_lg`
--

INSERT INTO `carousel_lg` (`id`, `imagem_lg`, `imagem_sm`, `categoria`, `titulo`, `sinopse`, `data_atualizacao`) VALUES
(1, 'imagens_para_site/desktop/cabecalho1.jpg', 'imagens_para_site/mobile/cabecalho1.jpg', 'Novidade', 'Senhora do amor e da guerra', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore quasi ipsam optio vero totam, inventore porro, obcaecati accusantium ipsum distinctio tempore mollitia ex natus accusamus libero harum pariatur unde molestias maiores possimus ea quibusdam odit? Recusandae distinctio numquam ducimus ullam!', '00:16:38 - 21/04/2023'),
(2, 'imagens_para_site/desktop/cabecalho2.jpg', 'imagens_para_site/mobile/cabecalho2.jpg', '', 'O caracol estrábico', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore quasi ipsam optio vero totam, inventore porro, obcaecati accusantium ipsum distinctio tempore mollitia ex natus accusamus libero harum pariatur unde molestias maiores possimus ea quibusdam odit? Recusandae distinctio numquam ducimus ullam!', 'hoje'),
(3, 'imagens_para_site/desktop/cabecalho3.jpg', 'imagens_para_site/mobile/cabecalho3.jpg', '', 'O coleccionador de amnésias', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore quasi ipsam optio vero totam, inventore porro, obcaecati accusantium ipsum distinctio tempore mollitia ex natus accusamus libero harum pariatur unde molestias maiores possimus ea quibusdam odit? Recusandae distinctio numquam ducimus ullam!', 'hoje'),
(4, 'imagens_para_site/desktop/cabecalho4.jpg', 'imagens_para_site/mobile/cabecalho4.jpg', '', 'O velho que pensava que fugia', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore quasi ipsam optio vero totam, inventore porro, obcaecati accusantium ipsum distinctio tempore mollitia ex natus accusamus libero harum pariatur unde molestias maiores possimus ea quibusdam odit? Recusandae distinctio numquam ducimus ullam!', 'hoje');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartas`
--

CREATE TABLE `cartas` (
  `id` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `sinopse` varchar(200) NOT NULL,
  `data_atualizacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cartas`
--

INSERT INTO `cartas` (`id`, `imagem`, `categoria`, `titulo`, `sinopse`, `data_atualizacao`) VALUES
(1, 'imagens_para_site/desktop/livro1.jpg', 'Novidade', 'A senhora do amor e da guerra', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n                        Sapiente quam soluta odit tempore sed a doloribus distinctio, nemo magnam imped\r\n                        it atque ass', ''),
(2, 'imagens_para_site/desktop/livro2.jpg', 'Mais vendido', 'O velho que pensava que fugia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n                        Sapiente quam soluta odit tempore sed a doloribus distinctio, nemo magnam imped\r\n                        it atque ass', ''),
(3, 'imagens_para_site/desktop/livro3.jpg', 'em promoção', 'O colecionador de amnésias', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \n                        Sapiente quam soluta odit tempore sed a doloribus distinctio, nemo magnam imped\n                        it atque ass', ''),
(4, 'imagens_para_site/desktop/livro-conteudo3.jpg', '', 'O caracol estrábico', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quam soluta odit tempore sed a doloribus distinctio, nemo magnam imped it atque ass', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `ultimo_login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `email`, `senha`, `nome`, `apelido`, `ultimo_login`) VALUES
(1, 'biojorge96@gmail.com', 'testando1234', 'Jorge', 'Filho', '00:15:22 - 21/04/2023'),
(2, 'matheusdesa3@gmail.com', 'testando1234', 'Matheus', 'Tavares', ''),
(3, 'fabricio@codemaster.pt', 'teste', 'Fabrício', 'Vidal', '00:09:01 - 21/04/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `morada` varchar(200) NOT NULL,
  `e-mail` varchar(100) NOT NULL,
  `telemovel` varchar(20) NOT NULL,
  `horario` varchar(200) NOT NULL,
  `data_atualizacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `morada`, `e-mail`, `telemovel`, `horario`, `data_atualizacao`) VALUES
(1, 'Lorem ipsum dolor sit amet, 12.\r\n1234-567 Lorem', 'lorem@lorem.pt', '+351 927 121 725', 'De Segunda a Sexta das 00:00h às 00:00h', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `caixa_titulo` varchar(100) NOT NULL,
  `caixa_paragrafo` varchar(500) NOT NULL,
  `ultimos_livros_paragrafo` varchar(500) NOT NULL,
  `data_atualizacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `caixa_titulo`, `caixa_paragrafo`, `ultimos_livros_paragrafo`, `data_atualizacao`) VALUES
(1, 'BEM-VINDO AO MEU WEBSITE', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In at molestiae quis debitis impedit accusantium quae voluptas itaque tempora, non quos ipsa exercitationem, eaque amet maxime, consectetur dolorem! Laudantium dolorem distinctio doloribus cumque ducimus similique dolore suscipit? Laborum, eligendi doloribus! Amet inventore, praesentium consequatur facilis sunt sapiente eum illo accusantium iure officiis laboriosam repellendus quibusdam atque non dicta minima aliquam omnis commodi eligend', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, ipsam perferendis reiciendis modi voluptatum obcae cati neque veritatis! Libero distinctio mollitia et iste quo s assumenda esse corrupti minus, ipsum molestias consequatur atque blanditiis nihil beatae aliquam. Fuga soluta iure dol orum reprehenderit eius. Similique sed maxime, quas eaque d icta aspernatur culpa commodi ex consequuntur earum vitae. O fficiis magnam ipsam vel vitae esse deserunt consequatur rei ciendis eius, cumq', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE `imprensa` (
  `id` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descricao` varchar(3000) NOT NULL,
  `data` varchar(100) NOT NULL,
  `data_atualizacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id`, `imagem`, `titulo`, `descricao`, `data`, `data_atualizacao`) VALUES
(1, 'imagens_para_site/desktop/conteudo-imprensa1@2x.jpg', 'Lançamento | senhora do amor e da guerra', '', 'publicado a 17 de junho de 2020', ''),
(2, 'imagens_para_site/desktop/conteudo-imprensa2@2x.jpg', 'Lançamento do livro \"o velho que pensava que fugia\"', '                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesc\r\n                        iunt quia tenetur, beatae nam eaque nihil dignissimos nobis obcae\r\n                        cati cum ratione, voluptates doloremque officia dicta eum sunt, re\r\n                        usandae sit quod commodi. Cum sequi fugit nobis ipsam ratione tempo\r\n                        ra temporibus, neque similique nulla, vitae esse. Veniam animi, arc\r\n                        hitecto eius repellendus aperiam asperiores officia \r\n                        reiciendis qui cum quos iure tenetur quasi sed.\r\n                        <br><br>\r\n                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, ma\r\n                        gni. Exercitationem expedita accusamus iure nostrum a eos aspernatur\r\n                         culpa debitis consectetur ipsa ex dolori.', 'publicado a 6 de dezembro de 2017', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `imagem` varchar(300) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `cadernacao` varchar(300) NOT NULL,
  `data_atualizacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `imagem`, `titulo`, `descricao`, `cadernacao`, `data_atualizacao`) VALUES
(1, 'imagens_para_site/desktop/livro-conteudo.jpg', 'A senhora do amor e da guerra', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. <br><br>Incidunt quas vitae reiciendis dolor mollitia ab omnis, accusantium nemo officiis nostrum similique praesentium, qui dignissimos, \r\n                    <br>id ipsum voluptatibus natus fugiat ullam delectus. Possimus qui corrupti odit soluta nostrum amet obcaecati laudantium sapiente culpa hic, nihil est. \r\n                    <br><br>Rerum eaque et illo aut, debitis impedit nostrum aperiam quis veniam reprehenderit repellat magnam facilis, porro praesentium placeat earum iste optio enim. \r\n                    <br>Cupiditate quibusdam voluptates tempora quam. Assumenda, facere. Quo est suscipit, excepturi aliquid nesciunt, \r\n                    <br>accusamus esse assumenda laboriosam minima numquam nisi officiis at, sit alias. Sequi explicabo excepturi, velit ea enim quas aperiam itaque?\r\n', '                Edição: Agosto de 2011\r\n                <br>\r\n                Dimensões: 143 x 220 x 14 mm\r\n                <br>\r\n                Encadernação: Capa moles\r\n                <br>\r\n                Páginas: 159', ''),
(2, 'imagens_para_site/desktop/livro-conteudo2.jpg', 'O colecionador de amnésias', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n                    <br><br>\r\n                    Incidunt quas vitae reiciendis dolor mollitia ab omnis, accusantium nemo officiis nostrum similique praesentium, qui dignissimos, \r\n                    <br><br>id ipsum voluptatibus natus fugiat ullam delectus. Possimus qui corrupti odit soluta nostrum amet obcaecati laudantium sapiente culpa hic, nihil est. \r\n                    <br><br>Rerum eaque et illo aut, debitis impedit nostrum aperiam quis veniam reprehenderit repellat magnam facilis, porro praesentium placeat earum iste optio enim. \r\n                    <br><br>Cupiditate quibusdam voluptates tempora quam. Assumenda, facere. Quo est suscipit, excepturi aliquid nesciunt, \r\n                    <br><br>accusamus esse assumenda laboriosam minima numquam nisi officiis at, sit alias. Sequi explicabo excepturi, velit ea enim quas aperiam itaque?\r\n                    <br><br>id ipsum voluptatibus natus fugiat ullam delectus. ', '                Edição: Agosto de 2011\r\n                <br>\r\n                Dimensões: 143 x 220 x 14 mm\r\n                <br>\r\n                Encadernação: Capa moles\r\n                <br>\r\n                Páginas: 159', ''),
(3, 'imagens_para_site/desktop/livro-conteudo3.jpg', 'O caracol estrábico', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. \n                    <br><br>\n                    Incidunt quas vitae reiciendis dolor mollitia ab omnis, accusantium nemo officiis nostrum similique praesentium, qui dignissimos, \n                    <br><br>id ipsum voluptatibus natus fugiat ullam delectus. Possimus qui corrupti odit soluta nostrum amet obcaecati laudantium sapiente culpa hic, nihil est. \n                    <br><br>Rerum eaque et illo aut, debitis impedit nostrum aperiam quis veniam reprehenderit repellat magnam facilis, porro praesentium placeat earum iste optio enim. \n                    <br><br>Cupiditate quibusdam voluptates tempora quam. Assumenda, facere. Quo est suscipit, excepturi aliquid nesciunt, \n                    <br><br>accusamus esse assumenda laboriosam minima numquam nisi officiis at, sit alias. Sequi explicabo excepturi, velit ea enim quas aperiam itaque?\n                    <br><br>id ipsum voluptatibus natus fugiat ullam delectus. ', '                Edição: Agosto de 2011\r\n                <br>\r\n                Dimensões: 143 x 220 x 14 mm\r\n                <br>\r\n                Encadernação: Capa moles\r\n                <br>\r\n                Páginas: 159', ''),
(4, 'imagens_para_site/desktop/livro-conteudo4.jpg', 'O velho que pensava que fugia', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n                    <br><br>\r\n                    Incidunt quas vitae reiciendis dolor mollitia ab omnis, accusantium nemo officiis nostrum similique praesentium, qui dignissimos, \r\n                    <br><br>id ipsum voluptatibus natus fugiat ullam delectus. Possimus qui corrupti odit soluta nostrum amet obcaecati laudantium sapiente culpa hic, nihil est. \r\n                    <br><br>Rerum eaque et illo aut, debitis impedit nostrum aperiam quis veniam reprehenderit repellat magnam facilis, porro praesentium placeat earum iste optio enim. \r\n                    <br><br>Cupiditate quibusdam voluptates tempora quam. Assumenda, facere. Quo est suscipit, excepturi aliquid nesciunt, \r\n                    <br><br>accusamus esse assumenda laboriosam minima numquam nisi officiis at, sit alias. Sequi explicabo excepturi, velit ea enim quas aperiam itaque?\r\n                    <br><br>id ipsum voluptatibus natus fugiat ullam delectus. ', '                Edição: Agosto de 2011\r\n                <br>\r\n                Dimensões: 143 x 220 x 14 mm\r\n                <br>\r\n                Encadernação: Capa moles\r\n                <br>\r\n                Páginas: 159', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `navegacao_footer`
--

CREATE TABLE `navegacao_footer` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `navegacao_footer`
--

INSERT INTO `navegacao_footer` (`id`, `nome`, `link`) VALUES
(1, 'Home', 'index.php'),
(2, 'Autor', 'autor.php'),
(3, 'Senhora do amor e da guerra', 'livros1.php'),
(7, 'Imprensa', 'imprensa.php'),
(8, 'Contactos', 'contactos.php');

-- --------------------------------------------------------

--
-- Estrutura da tabela `navegacao_header`
--

CREATE TABLE `navegacao_header` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `navegacao_header`
--

INSERT INTO `navegacao_header` (`id`, `nome`, `link`) VALUES
(1, 'Home', 'index.php'),
(2, 'Autor', 'autor.php'),
(3, 'Senhora do amor e da guerra', 'livros1.php'),
(4, 'O coleccionador de amnésias', 'livros2.php'),
(5, 'O caracol estrábico', 'livros3.php'),
(6, 'O velho que pensava que fugia', 'livros4.php'),
(7, 'Imprensa', 'imprensa.php'),
(8, 'Contactos', 'contactos.php');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carousel_lg`
--
ALTER TABLE `carousel_lg`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cartas`
--
ALTER TABLE `cartas`
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
-- Índices para tabela `navegacao_footer`
--
ALTER TABLE `navegacao_footer`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `navegacao_header`
--
ALTER TABLE `navegacao_header`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `carousel_lg`
--
ALTER TABLE `carousel_lg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cartas`
--
ALTER TABLE `cartas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `navegacao_footer`
--
ALTER TABLE `navegacao_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `navegacao_header`
--
ALTER TABLE `navegacao_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
