use enfermeriaunt;
DELIMITER $$

DROP procedure if exists sp_fuente_crud $$

CREATE PROCEDURE sp_fuente_crud(
  idFuente int,
  idIndicador int,
  periodo varchar(45),
  param1 float,
  param2 float,
  param3 float,
  resultado float,
  inicio date,
  fin date,
  estado int,
  opcion int,
  pagina int,
  tipo int
)
BEGIN
  declare registrosPagina int;
  declare limiteInferior int;

  -- crear
	if opcion=1 then
      IF tipo=1 THEN
      set resultado=(((param1-param2)/param3)*100);
      ELSEIF tipo=2 THEN set resultado=((1-(param1/param2))*100);
      ELSEIF tipo=3 THEN set resultado=((param1/param2)*100);
      ELSEIF tipo=4 THEN set resultado=(param1/param2);
      ELSEIF tipo=5 THEN set resultado=(((param1/param2)-param1)*100);
      ELSE
         set resultado=param1;
      END IF;
		insert  fuente (id_indicador,periodo,param1,param2,param3,resultado,inicio,fin,estado)
		values (idIndicador,periodo,param1,param2,param3,resultado,inicio,fin,estado);
   end if;

  -- editar
  if opcion=2 then
    update fuente set
      periodo=periodo,
      param1=param1,
      param2=param2,
      param3=param3,
      resultado=resultado,
      inicio=inicio,
      fin=fin,
      estado = estado
    where id_fuente = idFuente;
  end if;

  -- eliminar
	if opcion=3 then
		delete from fuente where id_fuente = idFuente;
  end if;

	-- listar y buscar
	if opcion=4 then
		set registrosPagina=10;
		set limiteInferior=(pagina-1)*registrosPagina;

		select * from fuente where
      (periodo like concat('%',periodo,'%') or periodo is null ) and
      (idIndicador like concat('%',idIndicador,'%') or idIndicador is null)
    limit limiteInferior,registrosPagina;

  -- numero de paginas
    select
       case
		  when mod(count(id_fuente),registrosPagina)>0 then floor(count(id_fuente) / registrosPagina) +1
          else floor(count(id_fuente) / registrosPagina)
            end as paginas
            from fuente where
            (periodo like concat('%',periodo,'%') or periodo is null ) and
            (param1 like concat('%',param1,'%') or param1 is null) ;

        end if;
  -- get
	if opcion=5 then
		select * from fuente where id_fuente = idFuente;
  end if;
-- listar fuente x por Indicadores
  if opcion=6 then
    select * from fuente where id_indicador = idIndicador;
  end if;
END $$
DELIMITER ;
