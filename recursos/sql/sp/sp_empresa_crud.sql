use enfermeriaunt;
DELIMITER $$

DROP procedure if exists sp_empresa_crud $$

CREATE PROCEDURE sp_empresa_crud(
  idEmpresa int,
  idUsuario int,
  nombre varchar(100),
  ruc varchar(20),
  rubro varchar(200),
  estado int,
  opcion int,
  pagina int
)
BEGIN
  declare registrosPagina int;
  declare limiteInferior int;

  -- crear
	if opcion=1 then
		insert empresa (id_empresa,id_usuario,nombre,ruc,rubro,estado)
		values (idEmpresa,idUsuario,nombre,ruc,rubro,estado);
   end if;

  -- editar
  if opcion=2 then
    update empresa set
      nombre=nombre,
      ruc=ruc,
      rubro=rubro,
      estado = estado
    where id_empresa = idEmpresa;
  end if;

  -- eliminar
	if opcion=3 then
		delete from empresa where id_empresa = idEmpresa;
  end if;

	-- listar y buscar
	if opcion=4 then
		set registrosPagina=10;
		set limiteInferior=(pagina-1)*registrosPagina;

		select * from empresa where
      (nombre like concat('%',nombre,'%') or nombre is null ) and
      (idEmpresa like concat('%',idEmpresa,'%') or idEmpresa is null)
    limit limiteInferior,registrosPagina;

  -- numero de paginas
    select
       case
		  when mod(count(idEmpresa),registrosPagina)>0 then floor(count(idEmpresa) / registrosPagina) +1
          else floor(count(idEmpresa) / registrosPagina)
            end as paginas
            from empresa where
            (nombre like concat('%',nombre,'%') or nombre is null ) and
            (rubro like concat('%',rubro,'%') or rubro is null) ;

        end if;
  -- get
	if opcion=5 then
		select * from empresa where id_empresa = idEmpresa and id_usuario=idUsuario;
  end if;

END $$
DELIMITER ;
