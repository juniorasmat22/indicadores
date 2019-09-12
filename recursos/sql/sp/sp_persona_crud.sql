use enfermeriaunt;
DELIMITER $$

DROP procedure if exists sp_persona_crud $$

CREATE PROCEDURE sp_persona_crud(
  idPersona int,
  nombre varchar(50),
  apellido varchar(50),
  dni varchar(8),
  estado int,
  opcion int,
  pagina int
)
BEGIN
  declare registrosPagina int;
  declare limiteInferior int;

  -- crear
	if opcion=1 then
		insert persona (nombre,apellido,dni,estado)
		values (nombre,apellido,dni,estado);
   end if;

  -- editar
  if opcion=2 then
    update persona set
      nombre=nombre,
      apellido=apellido,
      dni=dni,
      estado = estado
    where id_persona = idPersona;
  end if;

  -- eliminar
	if opcion=3 then
		delete from persona where id_persona = idPersona;
  end if;

	-- listar y buscar
	if opcion=4 then
		set registrosPagina=10;
		set limiteInferior=(pagina-1)*registrosPagina;

		select * from persona where
      (nombre like concat('%',nombre,'%') or nombre is null ) and
      (apellido like concat('%',apellido,'%') or apellido is null)
    limit limiteInferior,registrosPagina;

  -- numero de paginas
    select
       case
		  when mod(count(id_persona),registrosPagina)>0 then floor(count(id_persona) / registrosPagina) +1
          else floor(count(id_persona) / registrosPagina)
            end as paginas
            from persona where
            (nombre like concat('%',nombre,'%') or nombre is null ) and
            (apellido like concat('%',apellido,'%') or apellido is null) ;

        end if;
  -- get
	if opcion=5 then
		select * from persona where id_persona = idPersona;
  end if;
  -- listar las personas que no tiene un  usuario asignado
  if opcion=6 then
		select * from persona p where p.id_persona not in (SELECT u.id_persona from usuario u );
    end if;
END $$
DELIMITER ;
