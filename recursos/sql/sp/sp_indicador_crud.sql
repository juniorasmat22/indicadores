use enfermeriaunt;
DELIMITER $$

DROP procedure if exists sp_indicador_crud $$

CREATE PROCEDURE sp_indicador_crud(
  idIndicador int,
  idSubProceso int,
  descripcion varchar(100),
  meta varchar(200),
  iniciativas varchar(200),
  responsable varchar(45),
  lineaBase varchar(50),
  frecuencia varchar(100),
  estado int,
  tipo varchar(3),
  unidad varchar(45),
  fv varchar(300),
  rojo int,
  amarillo int,
  verde int,
  opcion int,
  pagina int
)
BEGIN
  declare registrosPagina int;
  declare limiteInferior int;

  -- crear
	if opcion=1 then
		insert indicador (id_sub_proceso,descripcion,meta,iniciativas,responsable,linea_base,frecuencia,estado,tipo,unidad,fv,rojo,amarillo,verde)
		values (idSubProceso,descripcion,meta,iniciativas,responsable,lineaBase,frecuencia,estado,tipo,unidad,fv,rojo,amarillo,verde);
   end if;

  -- editar
  if opcion=2 then
    update indicador set
      id_sub_proceso=idSubProceso,
      descripcion=descripcion,
      meta=meta,
      iniciativas=iniciativas,
      responsable=responsable,
      linea_base=lineaBase,
      frecuencia=frecuencia,
      estado = estado,
      tipo=tipo,
      unidad=unidad,
      fv=fv,
      rojo=rojo,
      amarillo=amarillo,
      verde=verde
    where id_indicador = idIndicador;
  end if;

  -- eliminar
	if opcion=3 then
		delete from indicador where id_indicador = idIndicador;
  end if;

	-- listar y buscar
	if opcion=4 then
		set registrosPagina=10;
		set limiteInferior=(pagina-1)*registrosPagina;

		select * from indicador where
      (responsable like concat('%',responsable,'%') or responsable is null ) and
      (idIndicador like concat('%',idIndicador,'%') or idIndicador is null)
    limit limiteInferior,registrosPagina;

  -- numero de paginas
    select
       case
		  when mod(count(id_indicador),registrosPagina)>0 then floor(count(id_indicador) / registrosPagina) +1
          else floor(count(id_indicador) / registrosPagina)
            end as paginas
            from indicador where
            (responsable like concat('%',responsable,'%') or responsable is null ) and
            (descripcion like concat('%',descripcion,'%') or descripcion is null) ;

        end if;
  -- get
	if opcion=5 then
		select * from indicador where id_indicador = idIndicador;
  end if;
  -- listar indicadores por procesos
	if opcion=6 then
		select * from indicador where id_sub_proceso=idSubProceso;
  end if;
END $$
DELIMITER ;
