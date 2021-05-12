CREATE TABLE if not exists livros
(
    id int primary key,
    nome varchar(255),
    autor varchar(255),
    publicacao date,
    descri text
);

CREATE OR REPLACE FUNCTION conferirDados()  RETURNS trigger AS $conferirDados$
    DECLARE
    livro_row record;

    BEGIN
        SELECT INTO livro_row * from livros as l where l.id = NEW.id;

        IF livro_row.nome = SELECT nome from livros THEN
           RAISE EXCEPTION 'Um livro com este nome já existe.';
        END IF;

        RETURN NEW;
    END;

$conferirDados$ LANGUAGE plpgsql;

CREATE TRIGGER assistirTabelas BEFORE INSERT OR UPDATE ON livros
FOR EACH ROW EXECUTE PROCEDURE conferirDados();

insert into livros (id, nome, autor, publicacao, descri) values (1, 'livro1', 'autor1', '10/10/2010', 'lorem');

select * from livros;