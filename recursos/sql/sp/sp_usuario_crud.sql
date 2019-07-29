use enfermeriaunt;
DELIMITER $$

DROP procedure if exists sp_usuario_crud $$

CREATE PROCEDURE sp_usuario_crud(
  idUsuario int,
  idPersona int,
  usuario varchar(45),
  pass varchar(45),
  estado int,
  opcion int,
  pagina int
)
BEGIN
  declare registrosPagina int;
  declare limiteInferior int;

  -- crear
	if opcion=1 then
		insert usuarios (id_persona,usuario,pass,estado)
		values (idPersona,usuario,pass,estado);
   end if;

  -- editar
  if opcion=2 then
    update usuario set
      usuario=usuario,
      pass=pass,
      estado = estado
    where id_usuario = idUsuario;
  end if;

  -- eliminar
	if opcion=3 then
		delete from usuario where id_usuario = idUsuario;
  end if;

	-- listar y buscar
	if opcion=4 then
		set registrosPagina=10;
		set limiteInferior=(pagina-1)*registrosPagina;

		select * from usuario where
      (usuario like concat('%',usuario,'%') or usuario is null ) and
      (usuario like concat('%',usuario,'%') or usuario is null)
    limit limiteInferior,registrosPagina;

  -- numero de paginas
    select
       case
		  when mod(count(id_usuario),registrosPagina)>0 then floor(count(id_usuario) / registrosPagina) +1
          else floor(count(id_usuario) / registrosPagina)
            end as paginas
            from usuario where
            (usuario like concat('%',usuario,'%') or usuario is null ) and
            (usuario like concat('%',usuario,'%') or usuario is null) ;

        end if;
  -- get
	if opcion=5 then
		select * from usuario where id_usuario = idUsuario;
  end if;
  -- Consulta login
  if opcion = 6 then
    select * from usuario u where u.usuario = usuario and u.pass = pass;
  end if;
END $$
DELIMITER ;
