use enfermeriaunt;
DELIMITER $$

DROP procedure if exists sp_fuente_crud $$

CREATE PROCEDURE sp_fuente_crud(
  idFuente int,
  idIndicador int,
  idCurso int,
  sede int,
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
		insert  fuente (id_indicador,sede,periodo,param1,param2,param3,resultado,inicio,fin,estado,id_curso)
		values (idIndicador,sede,periodo,param1,param2,param3,Round(resultado,3),inicio,fin,estado,idCurso);
   end if;

  -- editar
  if opcion=2 then
      IF tipo=1 THEN
      set resultado=(((param1-param2)/param3)*100);
      ELSEIF tipo=2 THEN set resultado=((1-(param1/param2))*100);
      ELSEIF tipo=3 THEN set resultado=((param1/param2)*100);
      ELSEIF tipo=4 THEN set resultado=(param1/param2);
      ELSEIF tipo=5 THEN set resultado=(((param1/param2)-param1)*100);
      ELSE
         set resultado=param1;
      END IF;
    update fuente f set
      f.sede=sede,
      f.periodo=periodo,
      f.param1=param1,
      f.param2=param2,
      f.param3=param3,
      f.inicio=inicio,
      f.resultado=Round(resultado,3),
      f.id_curso=idCurso,
      f.fin=fin,
      f.estado = estado
    where f.id_fuente = idFuente;
  end if;

  -- eliminar
	if opcion=3 then
		delete from fuente where id_fuente = idFuente;
  end if;

	-- listar y buscar
	if opcion=4 then
		set registrosPagina=10;
		set limiteInferior=(pagina-1)*registrosPagina;

		select * from fuente  where
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
    select * from fuente f where f.id_indicador = idIndicador order by f.periodo;
  end if;
  -- listar fuente x por Indicadores y por sede
    if opcion=7 then
      select * from fuente f  where f.id_indicador = idIndicador and f.sede=sede order by f.periodo;
    end if;
    if opcion=8 then
    select count(f.periodo) as param1,round(sum(f.resultado)/(count(f.periodo)),3) as resultado,f.periodo from fuente f
    where f.id_indicador=idIndicador
    group by f.periodo
    order by f.periodo ;
    end if;
    if opcion=9 then
    select f.periodo,count(f.id_curso) as param1,round(sum(f.resultado)/(count(f.id_curso)),3) as resultado,f.id_curso,c.nombre
    from fuente f
    inner join curso c on c.id_curso=f.id_curso
    where f.id_indicador=idIndicador
    group by f.id_curso
order by f.id_curso ;
    end if;
    if opcion=10 then
    select count(f.periodo) as param1,round(sum(f.resultado)/(count(f.periodo)),3) as resultado,f.periodo,c.nombre from fuente f
      inner join curso c on c.id_curso=f.id_curso
    where f.id_indicador=idIndicador
    group by f.periodo , f.id_curso
    order by f.periodo ;
    end if;
    if opcion=11 then
      select * from fuente f inner join curso c on c.id_curso=f.id_curso where f.id_indicador = idIndicador order by f.periodo;
    end if;
    if opcion=12 then
    select distinct f.periodo from fuente f where f.id_indicador=idIndicador order by f.periodo;
    end if;
    -- listar fuente x por Indicadores y por sede
      if opcion=13 then
        select * from fuente f  inner join curso c on c.id_curso=f.id_curso  where f.id_indicador = idIndicador and f.sede=sede order by f.periodo;
      end if;
END $$
DELIMITER ;
