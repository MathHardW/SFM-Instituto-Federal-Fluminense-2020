
-- -----------------------------------------------------
-- SELECT ALL
-- -----------------------------------------------------
SELECT * FROM dbmad3.cidade;
SELECT * FROM dbmad3.ficha;
SELECT * FROM dbmad3.acompanhamento;


-- -----------------------------------------------------
-- INSERT CIDADE
-- -----------------------------------------------------
INSERT INTO `dbmad3`.`cidade`
(`nome`, `estado`)
VALUES
("Itaperuna", "Rio de Janeiro");


-- -----------------------------------------------------
-- INSERT FICHA
-- -----------------------------------------------------
INSERT INTO `dbmad3`.`ficha`
(`codigo`,
`trabalha`,
`dependentes`,
`atendimentoEspecial`,
`moraSozinho`,
`sexo`,
`data`,
`Cidade_id`)
VALUES
("#1232019",
true,
true,
false,
false,
"M",
"14/11/2019",
1);


-- -----------------------------------------------------
-- INSERT ACOMPANHAMENTO
-- -----------------------------------------------------
INSERT INTO `dbmad3`.`acompanhamento`
(`titulo`,
`servidor`,
`AlunosIniciais`,
`AlunosFinais`,
`dataInicio`,
`dataFim`,
`periodoIngresso`,
`Ficha_id`)
VALUES
("SISTEMAS DE INFORMAÇÃO",
"Michelle Freitas",
10,
20,
"14/11/2019",
"14/11/2019",
"14/11/2019",
"#1232019");

