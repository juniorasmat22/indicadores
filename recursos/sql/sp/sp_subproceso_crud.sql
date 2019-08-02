use enfermeriaunt;
DELIMITER $$

DROP procedure if exists sp_subproceso_crud $$

CREATE PROCEDURE sp_subproceso_crud(
  idSubProceso int,
  idProceso int,
  nombre varchar(50),
  descripcion varchar(200),
  estado int,
  idSubPro int,
  opcion int,
  pagina int
)
BEGIN
  declare registrosPagina int;
  declare limiteInferior int;

  -- crear
	if opcion=1 then
		insert subproceso (id_proceso,nombre,descripcion,estado,id_sub_nivel)
		values (idProceso,nombre,descripcion,estado,idSubPro);
   end if;

  -- editar
  if opcion=2 then
    update subproceso set
      id_proceso=idProceso,
      nombre=nombre,
      descripcion=descripcion,
      id_sub_nivel=idSubPro,
      estado = estado
    where id_sub_proceso = idSubProceso;
  end if;

  -- eliminar
	if opcion=3 then
		delete from subproceso where id_sub_proceso = idSubProceso;
  end if;

	-- listar y buscar
	if opcion=4 then
		set registrosPagina=10;
		set limiteInferior=(pagina-1)*registrosPagina;

		select * from subproceso where
      (nombre like concat('%',nombre,'%') or nombre is null ) and
      (idProceso like concat('%',idProceso,'%') or idProceso is null)
    limit limiteInferior,registrosPagina;

  -- numero de paginas
    select
       case
		  when mod(count(id_sub_proceso),registrosPagina)>0 then floor(count(id_sub_proceso) / registrosPagina) +1
          else floor(count(id_sub_proceso) / registrosPagina)
            end as paginas
            from subproceso where
            (nombre like concat('%',nombre,'%') or nombre is null ) and
            (descripcion like concat('%',descripcion,'%') or descripcion is null) ;

        end if;
  -- get
	if opcion=5 then
		select * from subproceso where id_sub_proceso = idSubproceso;
  end if;
  -- listar Subprocesos activos por procesos
	if opcion=6 then
		select * from subproceso s where s.id_proceso=idProceso and s.estado=estado;
  end if;
  -- listar Subprocesos activos por procesos
  if opcion=7 then
    select * from subproceso s where s.id_proceso=idProceso and  s.id_sub_nivel is null;
  end if;
  -- listar Subprocesos activos por subniveles
  if opcion=8 then
    select * from subproceso s where s.id_sub_nivel=idSubPro ;
  end if;
END $$
DELIMITER ;
