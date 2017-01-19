-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jan-2017 às 05:53
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maishistoria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `idadministrador` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `professor_idprofessor` int(11) NOT NULL,
  `tb_usuario_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idadministrador`, `nome`, `senha`, `professor_idprofessor`, `tb_usuario_id_usuario`) VALUES
(1, 'adelinedenazare@gmail.com', '9c9b4681ba09b1eede50f55e8634db8b', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `idprofessor` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `endereco` longtext NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `instituicao` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`idprofessor`, `nome`, `cpf`, `endereco`, `telefone`, `email`, `instituicao`, `data_nascimento`) VALUES
(1, 'Daiane', '', '', '(63)98122-9856', 'daiane.tonaco@ifto.edu.br', 'IFTO- Campus Araguaina', '0000-00-00'),
(2, 'Adeline de Nazare', '05265740112', 'av: Tocantins', '(63)99299-7589', 'adelinedenazare@gmail.com', 'IFTO- Campus Araguaina', '1997-09-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_alternativas`
--

CREATE TABLE `tb_alternativas` (
  `idalternativas` int(11) NOT NULL,
  `descricao` longtext NOT NULL,
  `tb_questoes_idquestoes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_alternativas`
--

INSERT INTO `tb_alternativas` (`idalternativas`, `descricao`, `tb_questoes_idquestoes`) VALUES
(1, '<div class="form-group">\n <br>a) manutenção da ação sindical e de direitos trabalhistas durante a ditadura militar <br>\nb) estabelecimento da pluralidade sindical e de partidos trabalhistas durante o Estado Novo <br>\nc) criação de normas legais para os aumentos salariais reais e do gatilho salarial durante o governo Sarney<br>\nd) instituição do estatuto político dos trabalhadores e do Tribunal Superior do Trabalho durante o segundo governo Vargas <br>\n', 1),
(2, '<div class="form-group">                \n   <br>a) radicalização política do período representada pela Aliança Nacional Libertadora, de orientação comunista e a Ação Integralista Brasileira, de orientação fascista.<br>\nb) modernização econômica do país e seu conflito com as principais potências capitalistas do mundo, que tentavam lhe barrar o desenvolvimento. <br>\nc) ascensão dos militares à direção dos principais órgãos públicos, porque já se delineava o quadro da Segunda Guerra Mundial.<br>\nd) democratização da sociedade brasileira em decorrência da ascensão de novos grupos sociais como os operários. <br>\n e) retorno das oligarquias agrárias ao poder, restaurando-se a Federação nos mesmos moldes da República Velha.<br>', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_artigos`
--

CREATE TABLE `tb_artigos` (
  `id_artigos` int(11) NOT NULL,
  `nome` longtext NOT NULL,
  `autor_artigo` varchar(100) NOT NULL,
  `documento` longtext NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `responder_duvidas` longtext NOT NULL,
  `professor_idprofessor` int(11) NOT NULL,
  `tb_assunto_idassunto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_artigos`
--

INSERT INTO `tb_artigos` (`id_artigos`, `nome`, `autor_artigo`, `documento`, `imagem`, `responder_duvidas`, `professor_idprofessor`, `tb_assunto_idassunto`) VALUES
(1, 'A "dupla revolução" segundo E. Hobsbawn', 'Adeline de Nazaré', '<p align="justify"> <span style="padding-left:50px">                            Este trabalho tem como objetivos abordar o período descrito por Eric Hobsbawn em seu livro “A era das revoluções”, no qual foi um período de suma importância. Considerado um dos maiores historiadores do nosso tempo. Hobsbawn faz uma análise instigante da história, acreditando em uma visão única e crítica.                            Mostra-nos que mesmo a Revolução Francesa e Industrial que nos abre caminhos para a renascença da religião, da filosofia, da arte e ciência não conseguiriam resolver os impasses criados pelas fortes contradições sociais e transformando assim este período numa fase de movimentos revolucionários. <br>                        </span>                            <span style="padding-left:50px">                            O autor propõe a partir de sua obra uma interpretação dos fatos e acontecimentos em detrimento. Destaca a importância destes eventos para o panorama mundial da época, assim também como para o contemporâneo e suas extensões para a formação do pensamento sócio-político-econômico e da modernidade.  Em seu livro Hobsbawn nomeia essas revoluções com a “dupla revolução”. Revoluções que não só transformaram a economia, mas o pensar, agora a burguesia lutava pela “Igualdade, Fraternidade e Liberdade”, pois foi um princípio que nasceu com os princípios do Iluminismo.                    </span></p>                                        <h4> <b> 2 Dupla Revolução </b> </h4>                    <p align="justify"> <span style="padding-left:50px">                        Segundo Hobsbawn (2012, p.19) “As palavras são testemunhas que muitas vezes falam mais alto que os documentos [...]”. Para entendermos a profundidade do que representou a Revolução Francesa e a Revolução Industrial basta analisarmos a criação e uso de algumas palavras que atualmente são muito utilizadas, mas que outrora nem se sabia significado.                        Entre elas destacamos as seguintes palavras: indústria, capitalismo, socialismo, classe média, classe trabalhadora, engenheiro, proletariado, crise, etc. Através de tais palavras podemos ter noção da profundidade do que a dupla revolução representou e transformou. <br>                         </span>                            <span style="padding-left:50px">                        A dupla revolução transformou e continua a transformar o mundo por completo. Mas devemos nos atentar para o fator que ela cansou a longo prazo –transformações econômicas, políticas e principalmente sociais- e os fatos que fizeram com que a Revolução Francesa e a Revolução Industrial eclodissem concomitantemente. Não foi um simples movimento da classe trabalhadora.  (termo não existente no período). Não foi a junção da população contra o sistema vigente –sistema agrário-. A França passava por momentos conturbados, estava aparentemente com sua economia equilibrada, mas era só aparentemente mesmo, pois como veremos adiante a França não tinha nenhuma condição para suportar tal Revolução distintamente do que veremos na Inglaterra.                    </span> </p>                    <h4> <b> 2.1 Situação Estrutural na França</b> </h4>  <p align="justify"> <span style="padding-left:50px">         Não nos importa o período exato que devemos voltar para analisarmos a França antes da Revolução Francesa. Nos situemos na década de 1780, o país em discurso era geograficamente menor, pois devido a poucos meios de transportes eficientes, era um suicídio viajar por longos períodos a fim de conhecer as terras, como eram os viajantes que ajudavam com os mapas, com os territórios a presente França era territorialmente pequena.      Graças as navegações marítimas que foram impulsionadas com os tráficos negreiros tiveram-se um aumento substancial do conhecimento do território e também sua devida demarcação. Não só territorialmente a França era pequena como também demograficamente, pois a população era pequena e morria com facilidade devido a doenças trazidas do mar por navegantes.<br>                         </span>                            <span style="padding-left:50px">                                         A França não tinha estruturas para receber a Revolução Francesa, pois era pouquíssimo industrializada, todo serviço era braçal, por meio dos homens, mulheres e até crianças. Sua economia era baseada na agricultura, por mais que a economia passou um período longínquo estabilizada as secas e as enchentes fizeram com que rapidamente não houvesse nem comida para a própria subsistência.<br>                         </span>                            <span style="padding-left:50px">                                   As secas e enchentes estragavam a plantação com isso o que restava de alimento para a população tinha um adicional que ficava impossível para os camponeses pagarem, tal fator fez a taxa de mortalidade na França alavancar, com isso a número da população decaiu e já não se tinha tantos camponeses para os trabalhos braçais. Diante disso vemos que a França não tinha estruturais para receber a Revolução Francesa, mas foi essa falta de alicerce que desencadeou a revolução, pois ela foi gerada a partir da insatisfação da massa popular que sofrendo sem ter o que comer, sem ter onde trabalhar, sem ter um salário, viu nos princípios iluministas sua chance de sobrevivência. </p>  <h4> <b> 2.2 Situação Estrutural na Inglaterra </h4> </b>  <p align="justify"> <span style="padding-left:50px">             Na Inglaterra temos um cenário totalmente oposto do presente aspecto na França. A Inglaterra se sobressai em muitos âmbitos principalmente por ter sido a pioneira em colocar máquinas nas produções, com isso passa a ter uma produção em série.  Ela teve diversos fatores com que fizessem com que pudesse impulsionar sua industrialização.          Entre esses fatores vemos que a Inglaterra ficava isolada com isso tinha uma proteção natural contra as guerras, além de ter um território com vastos minérios que faziam com que a economia inglesa se sobressaísse consideravelmente em relação aos outros países.<br>                         </span>                            <span style="padding-left:50px"> O grande entrave em todo o processo de revolução era a falta de comunicação, com meios de transportes lentos e um sistema de entrega de cartas que além de bastante caro demorava. Com a crescente industrialização na Inglaterra se sobressaindo os donos das industrias começaram a investir, certamente buscando segundas e terceiras intenções. Segundo Hobsbawn (2012, p.42) “Somente algumas áreas levaram o desenvolvimento agrário mais adiante, rumo a uma agricultura puramente capitalista. A Inglaterra era a principal delas [...]”. Como sendo os únicos que detinham poder aquisitivos começaram a investir em algo que viria a se tornar um grande marco, -as ferrovias e os telégrafos-. As ferrovias viriam a aumentar a velocidade do transporte de mercadorias e da intercomunicação com os mercados externos, com seus vizinhos. A notável diferença entre a Inglaterra e a Francesa é que a Inglaterra não era mais uma monarquia, ou seja, o poder não estava mais concentrado nas mãos do rei, mas agora também do parlamento.</p>                         </span>                      <h4> <b> 3 Entre 1789-1848 </h4> </b> <p align="justify"> <span style="padding-left:50px">         Segundo Hobsbawn (2012, p. 20) “A transformação de 1789-1848 é essencialmente o levante gêmeo que se deu naqueles dois países e que dali se propagou por todo o mundo [...] ”. Para entendermos melhor o período que se deu a dupla revolução começaremos pela Revolução Industrial.         Não é uma mera vontade de começar por ela e sim porque ela ocorreu antes da tomada da Bastilha . A revolução industrial trouxe sim um aumento significativo na produção, mas então vem os problemas, os homens assalariados  além de estarem sendo “trocados” pelas máquinas teriam que obedecer, pois agora nada mais tinham a oferecer que suas forças de trabalho.<br>                         </span>                            <span style="padding-left:50px"> No sistema agrário eles que detinham o meio de trabalho, a força de trabalho, ou seja, eles que faziam tudo. Agora na Revolução Industrial inicia-se uma distinção entre o que detém o meio de produção e os que estão vendendo sua força de trabalho –proletariado-. Apesar da Inglaterra ter se sobressaído na industrialização em relação a França, ela foi melhor na área da ciência que a Inglaterra, suas principais áreas foram a física e a matemática. Já a Inglaterra estava preocupada em se industrializar que deixou muito a desejar no âmbito educação, por esta razão a França se sobressai, mas felizmente o pouco conhecimento que os ingleses tinham sobre física os permitia operar as máquinas a vapor.<br>                         </span>                            <span style="padding-left:50px"> Os donos do meio de produção exploravam cada vez mais o proletariado com cargas horárias muito maiores do que qualquer ser humano seria capaz de aguentar, além do mais pagava pouquíssimo, tão pouco que chegava a maioria das vezes a ser insuficiente para comprar seu alimento e de sua família.                           Com a criação de um sistema fabril começou-se a não precisar de demanda para produzir, com isso os investidores começaram a produzir em larga escala e a ter um estoque. De fato, a industrialização na agricultura fez com que a economia na Inglaterra se alavanca principalmente por causa do algodão, produto muito utilizado na indústria têxtil. <br>                         </span>                               <span style="padding-left:50px"> Segundo Hobsbawn (2012, p.72)  A primeira indústria a se revolucionar foi a do algodão e é difícil perceber que outra indústria poderia ter empurrado um grande número de empresários particulares rumo à revolução. Até a década de 1830, o algodão era a única indústria britânica em que predominava a fábrica ou o “engenho” [...].  A Revolução Francesa teve forte influência na política e na ideologia, pois surgiu a partir da insatisfação da massa popular, após sofrer fome e tantos outros problemas sociais a população baseada nos princípios iluministas resolvem se unir para tirar rei e todos aquele que o apoiam do poder.<br>                         </span>                               <span style="padding-left:50px"> A população antes era uma massa de manobra no qual o governo mandava e ela obedecia, após conhecer sobre o liberalismo os termos “igualdade, fraternidade e liberdade”, apesar de lutar e almejar por ele, eles não foram alcançados, mesmo após a dupla revolução existiam desigualdade. Ainda existia escravidão, a nobreza não trabalhava, a riqueza do clero foi confiscada, pois o investidor estava aqui buscando mais e mais lucro, com isso a exploração passou a ser acentuada.</p>                    <h4> <b> 4 Consequência da Dupla Revolução </h4> </b>  <p align="justify"> <span style="padding-left:50px">          A dupla revolução trouxe sim muitas melhorias, mas com elas também vieram os problemas. Teve um amplo conhecimento das terras através dos meios de transporte, no período era as ferrovias, no começo o homem trabalhava feito um “condenado” não ganhando nem o suficiente para seu próprio sustento, mas após com a criação da declaração dos Direitos dos Homens e do Cidadão e pouco a pouco com sua real implantação o homem começou a ter direitos não mais só deveres.          A que custo houve esse processo de modernização? Com a morte de milhares, senão bilhões de pessoas! Pessoas que morreram trabalhando para seu sustento e de sua família, trabalhando em lugares insalubres e com uma carga horária maior do que qualquer ser humano seria capaz de suportar tudo por um prato de comida.<br>                         </span>                               <span style="padding-left:50px"> Entre 1789-1848 as máquinas só vieram a atrapalhar o homem e o desvalorizar, pois elas produziam mais em menos tempo, fazendo com que os donos dos meios de produção obtivessem altos lucros. Quantas pessoas não foram substituídas pelas máquinas? Quantas não se viram obrigadas a sair do campo por falta de colheitas a trabalhar nas industrias até cavar suas próprias covas? Qual foi o preço pago pela modernização? Vidas! Muitas vidas! Esse foi o real preço pago por nossos antepassados. Atualmente o homem continua vítima das máquinas assim como foi a quase dois séculos atrás, agora as máquinas vão tomando espaço aos poucos, daqui umas décadas necessitaremos delas até para respirar! E então esse foi o preço pago pela dupla revolução? Não só esses!<br>                         </span>                               <span style="padding-left:50px"> Antigamente o homem aguentava trabalhos árduos, caminhava por milhas e milhas de distância por comida. Atualmente com as máquinas, os automóveis já não conseguimos ir até a esquina a pé porque não aguentamos, muito mais que um simples sedentarismo é à proporção que as máquinas tomaram em nosso meio, a ponto de precisar delas para tudo. As máquinas podem sim manter o homem vivo por mais tempo, mas e então esse é o preço pago? A ponto de necessitarmos delas até para sobreviver? A tecnologia nos ajudou a comunicar com o outro lado do planeta, a viajar até o outro lado do planeta, mas será que ela será capaz de lhe manter vivo? Ainda a tempo de deixar sua moto ou seu carro de lado e fazer uma caminhada, andar de bicicleta [...] viver, simplesmente viver. Cair, ralar o joelho e receber um colo de mãe não o abraço de um robô! <br> <br> </p>', '<a href="artigomostrar.php">', '', 2, 1),
(2, 'A fábrica como modelo para a escola: uma análise a partir do filme “Tempos Modernos”, de Charles Chaplin', 'Elenir Araújo Silva', '<p align="justify"> <span style="padding-left:50px">        Tendo por princípio de que o filme deve ser “observado não como uma obra de arte, mas sim como um produto, uma imagem-objeto, cujas significações não são somente cinematográficas” (FERRO, 1992, p. 32), o presente artigo tem por finalidade compreender por meio da análise do filme “Tempos Modernos”, dirigido por Charles Chaplin (EUA, 1936), as influências da industrialização no âmbito educacional, e posteriormente suas características marcantes que perduram até os dias atuais. Buscando compreender os princípios que regem o gerenciamento educacional.  <br>         </span> <p align="justify"> <span style="padding-left:50px">     O filme “Tempos Modernos” (1936) aborda de forma crítica o sistema capitalista e o modo de produção industrial, marcados pela crescente industrialização vigente nos Estados Unidos por volta dos anos 30. Tendo como foco principal destacar o modelo de produção taylorista-fordista, que é baseado na divisão e especialização do trabalho, o filme retrata a pesada rotina seguida pela classe trabalhadora em uma linha de montagem. <br>   </span></p>                       <p align="justify"> <span style="padding-left:50px">      Charles Chaplin - criador e protagonista do personagem Carlitos (personagem principal da trama) - ressalta as condições dos trabalhadores braçais, que são destinados a desempenhar atividades instrumentais nas fábricas: o trabalho manual repetitivo. Os trabalhadores demonstram serem homens preparados para desempenhar com obediência e perfeição, as tarefas que lhes são atribuídas. Assim, como a fábrica, a escola também tem seu espaço voltado para produtividade, ou seja, a aprendizagem dos alunos, tornando os mesmos obedientes e preparados para o mercado de trabalho. Portanto, a escola ao responder às exigências do mundo do trabalho apresenta elementos comuns à forma de gerenciamento de uma fábrica, ou seja, o modelo de gerenciamento do trabalho é adotado pelo sistema de educação escolar¸ em especial algumas características como a hierarquização de autoridade, centralização do poder, leis mais rígidas, parcelamento do trabalho, especialização, divisão entre o trabalho de planejamento e execução, dentre outras, são todas responsáveis por “tornar a escola mais ágil, mais eficiente e mais produtiva” (CABRAL, 2007, p. 131). <br>                         </span> <p align="justify">                  <span style="padding-left:50px">    Características marcantes do modelo taylorista-fordista de produção, como as que apontamos no parágrafo anterior, são enfatizadas no filme “Tempos Modernos” (1936), como, por exemplo, a cena em que Carlitos aperta continuamente os parafusos em uma esteira de produção. Ao exercer essa atividade alienante por meio de exercício repetitivo, Carlitos perde a noção quanto ao controle de seus próprios sentidos e sai apertando tudo que vê pela frente, chegando a ser internado num sanatório. Percebe-se, dessa forma, uma crítica em relação ao processo de produção e à adaptação dos homens ao ritmo ágil das máquinas, aos quais não estavam adaptados pelo trabalho no campo. O filme mostra de forma cômica a falta de adaptação das pessoas a esse novo ritmo de trabalho, ao mesmo tempo em que mostra os problemas causados pelos desempregos e a revolta dos grupos de pessoas reunidas nas ruas para protestar. Um dos problemas ressaltados no filme pela falta de emprego é a fome, que levou Ellen a roubar comida e chegando a ser presa.      </span> </p>   <p align="justify"> <span style="padding-left:50px">       Diante das transformações da adoção do modelo taylorista-fordista na produção fabril, há, consequentemente, uma modernização social, a qual engloba todos os aspectos, “[...] moldando nossos valores, inclusive nossa maneira de conceber a educação e a escola, e dando à nossa sociedade seu feito tecnológico específico” (DOLL, 2002, p. 55).<br>                  </span>     <p align="justify">                      <span style="padding-left:50px">       Na sequência de abertura do filme, podemos observar os créditos sendo apresentados com um relógio ao fundo da tela, símbolo dos Tempos Modernos. Na visão taylorista, o tempo (e o movimento) é o que marca a rotina dos trabalhadores fabris tornando-os “escravos do relógio”. A sequência inicial do filme mostra um rebanho de ovelhas, trabalhadores entrando no metrô na hora do rush, substituídas em seguida pela imagem de um grupo de operários entrando na fábrica. A sequência inicial mostra a massificação da classe excluída, marcada pela ação de desumanização imposta pelo trabalho fabril. <br>               </span>     <p align="justify">                         <span style="padding-left:50px">   Enfatizando o ritmo frenético das fábricas bem como da cidade, o filme “Tempos Modernos” destaca também a figura do supervisor. O supervisor escolar possui as mesmas atribuições dos supervisores fabris. Para Doll (2002), é notável a influência da industrialização em todos os seguimentos da sociedade, inclusive na organização do sistema de ensino buscando adequar o currículo escolar as necessidades da sociedade.  <br>  </p>', '<a href="artigofabrica.php">', '', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_assunto`
--

CREATE TABLE `tb_assunto` (
  `idassunto` int(11) NOT NULL,
  `nomeassunto` longtext NOT NULL,
  `tipo` longtext NOT NULL,
  `datasub` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_assunto`
--

INSERT INTO `tb_assunto` (`idassunto`, `nomeassunto`, `tipo`, `datasub`) VALUES
(1, 'A "dupla revolução" segundo E. Hobsbawn', 'artigo', '2016-09-08 08:35:12'),
(2, 'A fábrica como modelo para a escola: uma análise a partir do filme “Tempos Modernos”, de Charles Chaplin', 'artigo', '2016-10-27 21:36:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoriaassunto`
--

CREATE TABLE `tb_categoriaassunto` (
  `id_categoriaassunto` int(11) NOT NULL,
  `nome_categoriaassuntocol` longtext NOT NULL,
  `tb_assunto_idassunto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_grupoassunto`
--

CREATE TABLE `tb_grupoassunto` (
  `id_grupoassunto` int(11) NOT NULL,
  `nomegrupoassunto` longtext NOT NULL,
  `tb_categoriaassunto_id_categoriaassunto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_imagens`
--

CREATE TABLE `tb_imagens` (
  `idimagens` int(11) NOT NULL,
  `nome` longtext NOT NULL,
  `descricao` longtext NOT NULL,
  `url` varchar(255) NOT NULL,
  `professor_idprofessor` int(11) NOT NULL,
  `tb_assunto_idassunto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_imagens`
--

INSERT INTO `tb_imagens` (`idimagens`, `nome`, `descricao`, `url`, `professor_idprofessor`, `tb_assunto_idassunto`) VALUES
(1, 'Lei Aurea', '<b> Assinantes: </b>	Princesa Isabel e Rodrigo Augusto da Silva <br>\n<b> Autor: </b>	Rodrigo Augusto da Silva. <br>\n<b> Data:	</b> 13 de maio de 1888 (128 anos) <br>\n<b> Precedida por: </b>	Lei Eusébio de Queirós (1850), <br> Lei do Ventre Livre (1871) <br> Lei dos Sexagenários (1885)', 'Imagens/carta-lei-aurea.jpg', 1, 2),
(5, 'A chegada dos Portugueses ao Brasil', 'A chegada dos Portugueses ao Brasil', 'Imagens/-portugueses-ao-Brasil.gif', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_questoes`
--

CREATE TABLE `tb_questoes` (
  `idquestoes` int(11) NOT NULL,
  `nomequestao` longtext NOT NULL,
  `enunciado` longtext NOT NULL,
  `professor_idprofessor` int(11) NOT NULL,
  `tb_assunto_idassunto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_questoes`
--

INSERT INTO `tb_questoes` (`idquestoes`, `nomequestao`, `enunciado`, `professor_idprofessor`, `tb_assunto_idassunto`) VALUES
(1, '1. (Uerj) O fim de uma era <br>', '<p align= ''justify''> Em seu discurso de despedida do Senado, em dezembro de 1994, o presidente Fernando Henrique Cardoso anunciou o fim da Era Vargas, como um prenúncio das mudanças que estavam por vir. Supunha-se sepultado um modelo econômico que tinha como principal ator o intervencionismo do Estado, como atração política o paternalismo de cooptação e como modelo social a previdência pública e a legislação trabalhista. <br> <p align= ''right''> <font color=''red''> (NOGUEIRA, Octaciano. "Jornal da Tarde", 11/11/1998.) </p> </font><br> Embora a citação acima apresente a legislação trabalhista de Getúlio Vargas como parte de um ultrapassado modelo econômico, é possível apontar aspectos que, no sentido contrário, revelem o significado da contribuição trazida pela Consolidação das Leis do Trabalho - CLT - para as relações de trabalho. <b> Um aspecto dessa contribuição está indicado em: </b><br> </p>', 1, 1),
(2, '2. (Cesgranrio) ', '<p align= ''justify''> O regime político conhecido como Estado Novo implantado por golpe do próprio Presidente Getúlio Vargas, em 1937, pode ser associado à(ao): </p>', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_resposta`
--

CREATE TABLE `tb_resposta` (
  `idresposta` int(11) NOT NULL,
  `tb_alternativas_idalternativas` int(11) NOT NULL,
  `tb_questoes_idquestoes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `niveis_acesso_id` varchar(45) NOT NULL,
  `professor_idprofessor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `usuario`, `senha`, `ativo`, `niveis_acesso_id`, `professor_idprofessor`) VALUES
(1, 'daiane.tonaco@ifto.edu.br', '12f4bff03d7b3f3818a694fcb63b14ab', 0, '1', 1),
(2, 'adelinedenazare@gmail.com', '9c9b4681ba09b1eede50f55e8634db8b', 0, '2', 2),
(3, 'alice@gmail.com', '7abdccbea8473767e91378e37850d296', 1, '3', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_videos`
--

CREATE TABLE `tb_videos` (
  `idVideos` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `nomevideo` varchar(150) NOT NULL,
  `descricao` longtext NOT NULL,
  `professor_idprofessor` int(11) NOT NULL,
  `tb_assunto_idassunto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_videos`
--

INSERT INTO `tb_videos` (`idVideos`, `url`, `nomevideo`, `descricao`, `professor_idprofessor`, `tb_assunto_idassunto`) VALUES
(1, 'https://www.youtube.com/embed/pSyE82yRaKU', 'História do Brasil segundo Fausto', 'História do Brasil Segundo Hóris Fausto', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idadministrador`),
  ADD KEY `fk_administrador_tb_professor1_idx` (`professor_idprofessor`),
  ADD KEY `fk_administrador_tb_usuario1_idx` (`tb_usuario_id_usuario`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`idprofessor`);

--
-- Indexes for table `tb_alternativas`
--
ALTER TABLE `tb_alternativas`
  ADD PRIMARY KEY (`idalternativas`),
  ADD KEY `fk_tb_alternativas_tb_questoes1_idx` (`tb_questoes_idquestoes`);

--
-- Indexes for table `tb_artigos`
--
ALTER TABLE `tb_artigos`
  ADD PRIMARY KEY (`id_artigos`),
  ADD KEY `fk_tb_artigo_tb_professor1_idx` (`professor_idprofessor`),
  ADD KEY `fk_tb_artigo_tb_assunto1_idx` (`tb_assunto_idassunto`);

--
-- Indexes for table `tb_assunto`
--
ALTER TABLE `tb_assunto`
  ADD PRIMARY KEY (`idassunto`);

--
-- Indexes for table `tb_categoriaassunto`
--
ALTER TABLE `tb_categoriaassunto`
  ADD PRIMARY KEY (`id_categoriaassunto`),
  ADD KEY `fk_tb_categoriaassunto_tb_assunto1_idx` (`tb_assunto_idassunto`);

--
-- Indexes for table `tb_grupoassunto`
--
ALTER TABLE `tb_grupoassunto`
  ADD PRIMARY KEY (`id_grupoassunto`),
  ADD KEY `fk_tb_grupoasunto_tb_categoriaassunto1_idx` (`tb_categoriaassunto_id_categoriaassunto`);

--
-- Indexes for table `tb_imagens`
--
ALTER TABLE `tb_imagens`
  ADD PRIMARY KEY (`idimagens`),
  ADD KEY `fk_tb_imagem_tb_professor1_idx` (`professor_idprofessor`),
  ADD KEY `fk_tb_imagens_tb_assunto1_idx` (`tb_assunto_idassunto`);

--
-- Indexes for table `tb_questoes`
--
ALTER TABLE `tb_questoes`
  ADD PRIMARY KEY (`idquestoes`),
  ADD KEY `fk_tb_questoes_tb_professor1_idx` (`professor_idprofessor`),
  ADD KEY `fk_tb_questoes_tb_assunto1_idx` (`tb_assunto_idassunto`);

--
-- Indexes for table `tb_resposta`
--
ALTER TABLE `tb_resposta`
  ADD PRIMARY KEY (`idresposta`),
  ADD KEY `fk_tb_resposta_tb_alternativas1_idx` (`tb_alternativas_idalternativas`),
  ADD KEY `fk_tb_resposta_tb_questoes1_idx` (`tb_questoes_idquestoes`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_tb_usuario_tb_professor_idx` (`professor_idprofessor`);

--
-- Indexes for table `tb_videos`
--
ALTER TABLE `tb_videos`
  ADD PRIMARY KEY (`idVideos`),
  ADD KEY `fk_tb_video_tb_professor1_idx` (`professor_idprofessor`),
  ADD KEY `fk_tb_video_tb_assunto1_idx` (`tb_assunto_idassunto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idadministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `idprofessor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_alternativas`
--
ALTER TABLE `tb_alternativas`
  MODIFY `idalternativas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_artigos`
--
ALTER TABLE `tb_artigos`
  MODIFY `id_artigos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_assunto`
--
ALTER TABLE `tb_assunto`
  MODIFY `idassunto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_categoriaassunto`
--
ALTER TABLE `tb_categoriaassunto`
  MODIFY `id_categoriaassunto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_grupoassunto`
--
ALTER TABLE `tb_grupoassunto`
  MODIFY `id_grupoassunto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_imagens`
--
ALTER TABLE `tb_imagens`
  MODIFY `idimagens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_questoes`
--
ALTER TABLE `tb_questoes`
  MODIFY `idquestoes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_resposta`
--
ALTER TABLE `tb_resposta`
  MODIFY `idresposta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_videos`
--
ALTER TABLE `tb_videos`
  MODIFY `idVideos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_administrador_tb_professor1` FOREIGN KEY (`professor_idprofessor`) REFERENCES `professor` (`idprofessor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_administrador_tb_usuario1` FOREIGN KEY (`tb_usuario_id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_alternativas`
--
ALTER TABLE `tb_alternativas`
  ADD CONSTRAINT `fk_tb_alternativas_tb_questoes1` FOREIGN KEY (`tb_questoes_idquestoes`) REFERENCES `tb_questoes` (`idquestoes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_artigos`
--
ALTER TABLE `tb_artigos`
  ADD CONSTRAINT `fk_tb_artigo_tb_assunto1` FOREIGN KEY (`tb_assunto_idassunto`) REFERENCES `tb_assunto` (`idassunto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_artigo_tb_professor1` FOREIGN KEY (`professor_idprofessor`) REFERENCES `professor` (`idprofessor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_categoriaassunto`
--
ALTER TABLE `tb_categoriaassunto`
  ADD CONSTRAINT `fk_tb_categoriaassunto_tb_assunto1` FOREIGN KEY (`tb_assunto_idassunto`) REFERENCES `tb_assunto` (`idassunto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_grupoassunto`
--
ALTER TABLE `tb_grupoassunto`
  ADD CONSTRAINT `fk_tb_grupoasunto_tb_categoriaassunto1` FOREIGN KEY (`tb_categoriaassunto_id_categoriaassunto`) REFERENCES `tb_categoriaassunto` (`id_categoriaassunto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_imagens`
--
ALTER TABLE `tb_imagens`
  ADD CONSTRAINT `fk_tb_imagem_tb_professor1` FOREIGN KEY (`professor_idprofessor`) REFERENCES `professor` (`idprofessor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_imagens_tb_assunto1` FOREIGN KEY (`tb_assunto_idassunto`) REFERENCES `tb_assunto` (`idassunto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_questoes`
--
ALTER TABLE `tb_questoes`
  ADD CONSTRAINT `fk_tb_questoes_tb_assunto1` FOREIGN KEY (`tb_assunto_idassunto`) REFERENCES `tb_assunto` (`idassunto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_questoes_tb_professor1` FOREIGN KEY (`professor_idprofessor`) REFERENCES `professor` (`idprofessor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_resposta`
--
ALTER TABLE `tb_resposta`
  ADD CONSTRAINT `fk_tb_resposta_tb_alternativas1` FOREIGN KEY (`tb_alternativas_idalternativas`) REFERENCES `tb_alternativas` (`idalternativas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_resposta_tb_questoes1` FOREIGN KEY (`tb_questoes_idquestoes`) REFERENCES `tb_questoes` (`idquestoes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_videos`
--
ALTER TABLE `tb_videos`
  ADD CONSTRAINT `fk_tb_video_tb_assunto1` FOREIGN KEY (`tb_assunto_idassunto`) REFERENCES `tb_assunto` (`idassunto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_video_tb_professor1` FOREIGN KEY (`professor_idprofessor`) REFERENCES `professor` (`idprofessor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
