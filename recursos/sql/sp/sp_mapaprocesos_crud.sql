use enfermeriaunt;
DELIMITER $$

DROP procedure if exists sp_mapaprocesos_crud $$

CREATE PROCEDURE sp_mapaprocesos_crud(
  idMapaProcesos int,
  idEmpresa int,
  idUnidadNegocio int,
  nombre varchar(100),
  descripcion varchar(200),
  fecha date,
  estado int,
  opcion int,
  pagina int
)
BEGIN
  declare registrosPagina int;
  declare limiteInferior int;

  -- crear
	if opcion=1 then
		insert mapaprocesos (id_empresa,id_unidad_negocio,nombre,descripcion,fecha,estado)
		values (idEmpresa,idUnidadNegocio,nombre,descripcion,fecha,estado);
   end if;

  -- editar
  if opcion=2 then
    update mapaprocesos set
      id_empresa=idEmpresa,
      id_unidad_negocio=idUnidadNegocio,
      nombre=nombre,
      descripcion=descripcion,
      fecha=fecha,
      estado = estado
    where id_mapa_procesos = idMapaProcesos;
  end if;

  -- eliminar
	if opcion=3 then
		delete from mapaprocesos where id_mapa_procesos = idMapaProcesos;
  end if;

	-- listar y buscar
	if opcion=4 then
		set registrosPagina=10;
		set limiteInferior=(pagina-1)*registrosPagina;

		select * from mapaprocesos where
      (nombre like concat('%',nombre,'%') or nombre is null ) and
      (idEmpresa like concat('%',idEmpresa,'%') or idEmpresa is null)
    limit limiteInferior,registrosPagina;

  -- numero de paginas
    select
       case
		  when mod(count(idMapaProcesos),registrosPagina)>0 then floor(count(idMapaProcesos) / registrosPagina) +1
          else floor(count(idMapaProcesos) / registrosPagina)
            end as paginas
            from usuario where
            (nombre like concat('%',nombre,'%') or nombre is null )and
            (idEmpresa like concat('%',idEmpresa,'%') or idEmpresa is null);

        end if;
  -- get
	if opcion=5 then
		select * from mapaprocesos where id_mapa_procesos=idMapaProcesos;
  end if;

END $$
DELIMITER ;
