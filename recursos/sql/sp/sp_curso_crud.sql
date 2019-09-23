use enfermeriaunt;
DELIMITER $$

DROP procedure if exists sp_curso_crud $$

CREATE PROCEDURE sp_curso_crud(
  idCurso int,
  nombre varchar(45),
  ciclo varchar(45),
  tipo_curso varchar(45),
  estado int,
  opcion int,
  pagina int
)
BEGIN
  declare registrosPagina int;
  declare limiteInferior int;

  -- crear
	if opcion=1 then
		insert curso (nombre,ciclo,tipo_curso,estado)
		values (nombre,ciclo,tipo_curso,estado);
   end if;

  -- editar
  if opcion=2 then
    update curso c set
      c.nombre=nombre,
      c.ciclo=ciclo,
      c.tipo_curso=tipo_curso,
      c.estado = estado
    where c.id_curso = idCurso;
  end if;

  -- eliminar
	if opcion=3 then
		delete from curso where id_curso = idCurso;
  end if;

	-- listar y buscar
	if opcion=4 then
		set registrosPagina=10;
		set limiteInferior=(pagina-1)*registrosPagina;

		select * from curso where
      (nombre like concat('%',nombre,'%') or nombre is null ) and
      (idCurso like concat('%',idCurso,'%') or idCurso is null)
    limit limiteInferior,registrosPagina;

  -- numero de paginas
    select
       case
		  when mod(count(idCurso),registrosPagina)>0 then floor(count(idCurso) / registrosPagina) +1
          else floor(count(idCurso) / registrosPagina)
            end as paginas
            from curso where
            (nombre like concat('%',nombre,'%') or nombre is null ) and
            (ciclo like concat('%',ciclo,'%') or ciclo is null) ;

        end if;
  -- get
	if opcion=5 then
		select * from curso where  id_curso = idCurso;
  end if;

END $$
DELIMITER ;
