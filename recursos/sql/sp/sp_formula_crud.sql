use enfermeriaunt;
DELIMITER $$

DROP procedure if exists sp_formula_crud $$

CREATE PROCEDURE sp_formula_crud(
  idFormula int,
  idIndicador int,
  formula varchar(500),
  tipo int,
  param1 varchar(500),
  param2 varchar(500),
  param3 varchar(500),
  estado int,
  opcion int,
  pagina int
)
BEGIN
  declare registrosPagina int;
  declare limiteInferior int;

  -- crear
	if opcion=1 then
      IF tipo=1 THEN
      set formula=concat("[",param1,"-",param2,"/",param3,"]*100");
      ELSEIF tipo=2 THEN set formula=concat("[1-",param1,"/",param2,"]*100") ;
      ELSEIF tipo=3 THEN set formula=concat("[",param1,"/",param2,"]*100");
      ELSEIF tipo=4 THEN set formula= concat("[",param1,"/",param2,"]");
      ELSEIF tipo=5 THEN set formula=concat("[("+param1,"/",param2,")-1]");
      ELSE
         set formula=concat("[Σ",param1,"]");
      END IF;

		insert  formula (id_indicador,formula,tipo,param1,param2,param3,estado)
		values (idIndicador,formula,tipo,param1,param2,param3,estado);
   end if;

  -- editar
  if opcion=2 then
    update formula set
      formula=formula,
      tipo=tipo,
      param1=param1,
      param2=param2,
      param3=param3,
      estado = estado
    where id_formula = idFormula;
  end if;

  -- eliminar
	if opcion=3 then
		delete from formula where id_formula = idFormula;
  end if;

	-- listar y buscar
	if opcion=4 then
		set registrosPagina=10;
		set limiteInferior=(pagina-1)*registrosPagina;

		select * from formula where
      (formula like concat('%',formula,'%') or formula is null ) and
      (idIndicador like concat('%',idIndicador,'%') or idIndicador is null)
    limit limiteInferior,registrosPagina;

  -- numero de paginas
    select
       case
		  when mod(count(idFormula),registrosPagina)>0 then floor(count(idFormula) / registrosPagina) +1
          else floor(count(idFormula) / registrosPagina)
            end as paginas
            from formula where
            (formula like concat('%',formula,'%') or formula is null ) and
            (param1 like concat('%',param1,'%') or param1 is null) ;

        end if;
  -- get
	if opcion=5 then
		select * from formula where id_formula = idFormula;
  end if;
-- listar formual por Indicadores
  if opcion=6 then
    select * from formula where id_indicador = idIndicador;
  end if;
END $$
DELIMITER ;
