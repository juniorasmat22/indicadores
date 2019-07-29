use enfermeriaunt;
DELIMITER $$

DROP procedure if exists sp_unidadnegocio_crud $$

CREATE PROCEDURE sp_unidadnegocio_crud(
  idUnidadNegocio int,
  idEmpresa int,
  nombre varchar(100),
  descripcion varchar(300),
  estado int,
  opcion int,
  pagina int
)
BEGIN
  declare registrosPagina int;
  declare limiteInferior int;

  -- crear
	if opcion=1 then
		insert unidadnegocio (id_empresa,nombre,descripcion,estado)
		values (idEmpresa,nombre,descripcion,estado);
   end if;

  -- editar
  if opcion=2 then
    update unidadnegocio set
      nombre=nombre,
      descripcion=descripcion,
      estado = estado
    where id_unidad_negocio = idUnidadNegocio;
  end if;

  -- eliminar
	if opcion=3 then
		delete from unidadnegocio where id_unidad_negocio = idUnidadNegocio;
  end if;

	-- listar y buscar
	if opcion=4 then
		set registrosPagina=10;
		set limiteInferior=(pagina-1)*registrosPagina;

		select * from unidadnegocio where
      (nombre like concat('%',nombre,'%') or nombre is null ) and
      (idEmpresa like concat('%',idEmpresa,'%') or idEmpresa is null)
    limit limiteInferior,registrosPagina;

  -- numero de paginas
    select
       case
		  when mod(count(idUnidadNegocio),registrosPagina)>0 then floor(count(idUnidadNegocio) / registrosPagina) +1
          else floor(count(idUnidadNegocio) / registrosPagina)
            end as paginas
            from usuario where
            (nombre like concat('%',nombre,'%') or nombre is null )and
            (idEmpresa like concat('%',idEmpresa,'%') or idEmpresa is null);

        end if;
  -- get
	if opcion=5 then
		select * from unidadnegocio where id_unidad_negocio=idUnidadNegocio and id_empresa = idEmpresa;
  end if;

END $$
DELIMITER ;
