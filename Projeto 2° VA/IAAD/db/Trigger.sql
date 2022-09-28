CREATE TRIGGER Upper_case BEFORE UPDATE
ON PROGRAMADOR
FOR EACH ROW
		SET NEW.nome_programador = UPPER(NEW.nome_programador);
