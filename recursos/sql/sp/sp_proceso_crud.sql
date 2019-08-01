use enfermeriaunt;
DELIMITER $$

DROP procedure if exists sp_proceso_crud $$

CREATE PROCEDURE sp_proceso_crud(
  idProceso int,
  idMapaProcesos int,
  tipo varchar(40),
  nombre varchar(50),
  descripcion varchar(200),
  estado int,
  opcion int,
  pagina int
)
BEGIN
  declare registrosPagina int;
  declare limiteInferior int;

  -- crear
	if opcion=1 then
		insert proceso (id_mapa_procesos,tipo,nombre,descripcion,estado)
		values (idMapaProcesos,tipo,nombre,descripcion,estado);
   end if;

  -- editar
  if opcion=2 then
    update proceso set
      nombre=nombre,
      tipo=tipo,
      descripcion=descripcion,
      estado = estado
    where id_proceso = idProceso;
  end if;

  -- eliminar
	if opcion=3 then
		delete from proceso where id_proceso = idProceso;
  end if;

	-- listar y buscar
	if opcion=4 then
		set registrosPagina=10;
		set limiteInferior=(pagina-1)*registrosPagina;

		select * from proceso where
      (nombre like concat('%',nombre,'%') or nombre is null ) and
      (idMapaProcesos like concat('%',idMapaProcesos,'%') or idMapaProcesos is null)
    limit limiteInferior,registrosPagina;

  -- numero de paginas
    select
       case
		  when mod(count(idProceso),registrosPagina)>0 then floor(count(idProceso) / registrosPagina) +1
          else floor(count(idProceso) / registrosPagina)
            end as paginas
            from proceso where
            (nombre like concat('%',nombre,'%') or nombre is null ) and
            (descripcion like concat('%',descripcion,'%') or descripcion is null) ;

        end if;
  -- get
	if opcion=5 then
		select * from proceso where id_proceso = idProceso and id_mapa_procesos=idMapaProcesos;
  end if;
  -- listar procesos por tipo y que esten activos
	if opcion=6 then
		select * from proceso p where p.tipo=tipo and id_mapa_procesos=idMapaProcesos and p.estado=estado;
  end if;

END $$
DELIMITER ;
