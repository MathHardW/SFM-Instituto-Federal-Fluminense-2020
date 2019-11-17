INSERT INTO `dbmad3`.`curso`
(`nome`)
VALUES
("Sistemas de Informação");

SELECT * FROM dbmad3.curso;

INSERT INTO `dbmad3`.`modalidade`
(`nome`,
`Curso_id`)
VALUES
("Bacharelado", 1);

SELECT * FROM dbmad3.modalidade;

INSERT INTO `dbmad3`.`nivel`
(`nome`,
`Modalidade_id`)
VALUES
("Superior", 1);

SELECT * FROM dbmad3.nivel;
