CREATE TABLE if not exists livros
(
    id int primary key,
    nome varchar(255),
    autor varchar(255),
    publicacao date,
    descri text
);

CREATE OR REPLACE FUNCTION conferirDados()  RETURNS trigger AS $conferirDados$
    BEGIN
        RAISE EXCEPTION 'A tabela foi alterada';
    END;
$conferirDados$ LANGUAGE plpgsql;

CREATE TRIGGER assistirTabelas BEFORE INSERT OR UPDATE ON livros
FOR EACH ROW EXECUTE PROCEDURE conferirDados();

insert into livros (id, nome, autor, publicacao, descri) values (1, 'livro1', 'autor1', '10/10/2010', 'lorem');

select * from livros;