
--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre`, `apellido`, `dni`, `estado`) VALUES
(1, 'Junior Alexander', 'Asmat Nunja', '75656948', b'1'),
(2, 'Juan', 'Perez', '12345678', b'1');
--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_persona`, `usuario`, `pass`, `rol`, `estado`) VALUES
(1, 1, 'admin', 'admin', 1, b'1'),
(2, 2, 'juan', '12345', 2, b'1');

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `id_usuario`, `nombre`, `ruc`, `rubro`, `estado`) VALUES
(1, 1, 'Universidad Nacional de Trujillo', '20172557628', 'Univers. Centros Educat. y Cul', b'1');

--
-- Volcado de datos para la tabla `unidadnegocio`
--

INSERT INTO `unidadnegocio` (`id_unidad_negocio`, `id_empresa`, `nombre`, `descripcion`, `estado`) VALUES
(1, 1, 'Área de Calidad-Facultad de Enfermería', 'Gestionar la Calidad dentro de la Universidad Nacional de Trujillo', b'1');
--
-- Volcado de datos para la tabla `mapaprocesos`
--

INSERT INTO `mapaprocesos` (`id_mapa_procesos`, `id_empresa`, `id_unidad_negocio`, `nombre`, `descripcion`, `fecha`, `estado`) VALUES
(1, 1, 1, 'Sistema de Gestión de Calidad', 'Sistema de Gestión de Calidad', '2019-08-03 00:00:00', b'1');

--
-- Volcado de datos para la tabla `proceso`
--

INSERT INTO `proceso` (`id_proceso`, `id_mapa_procesos`, `tipo`, `nombre`, `descripcion`, `estado`) VALUES
(1, 1, 'Estratégico', 'Gobierno de la Universidad', 'Gobierno de la Universidad', b'1'),
(2, 1, 'Estratégico', 'Gestión Integrada para la mejora', 'Gestión Integrada para la mejora', b'1'),
(3, 1, 'Estratégico', 'Supervisión y Control', 'Supervisión y Control', b'1'),
(4, 1, 'Estratégico', 'Gestión de la Información y la comunicación', 'Gestión de la Información y la comunicación', b'1'),
(5, 1, 'Estratégico', 'Relaciones Interinstitucionales', 'Relaciones Interinstitucionales', b'1'),
(6, 1, 'Estratégico', 'Dirección Estratégica', 'Dirección Estratégica', b'1'),
(7, 1, 'Misional', 'Formación Integal Pregrado', 'Formación Integal', b'1'),
(8, 1, 'Misional', 'Investigación', 'Investigación', b'1'),
(9, 1, 'Misional', 'RSU', 'Responsabilidad Social Universitaria', b'1'),
(10, 1, 'Apoyo', 'Gestión de la Infraestructura', 'Gestión de la Infraestructura', b'1');

INSERT INTO `subproceso` (`id_sub_proceso`, `id_proceso`, `nombre`, `descripcion`, `estado`, `id_sub_nivel`) VALUES
(1, 7, 'Gestión Curricular', 'Gestión Curricular', b'1', NULL),
(2, 7, 'Admisión', 'Admisión', b'1', NULL),
(3, 7, 'Formación Profesional', 'Formación Profesional', b'1', NULL),
(4, 7, 'Matricula', 'Matricula', b'1', 3),
(5, 7, 'Enseñanza Aprendizaje', 'Enseñanza Aprendizaje', b'1', 3),
(6, 7, 'Graduación', 'Graduación', b'1', 3),
(7, 7, 'Titulación', 'Titulación', b'1', 3),
(8, 7, 'Certificación', 'Certificación', b'1', 3),
(9, 7, 'Seguimiento al desempeño de los estudiantes', 'Seguimiento al desempeño de los estudiantes', b'1', NULL),
(10, 7, 'Seguimiento a los egresados', 'Seguimiento a los egresados', b'1', NULL),
(11, 8, 'Desarrollo de la Investigación científica', 'Desarrollo de la Investigación científica', b'1', NULL),
(12, 8, 'Publicaciones científicas', 'publicaciones científicas', b'1', 11),
(13, 8, 'Gestión de la propiedad intelectual', 'gestión de la propiedad intelectual', b'1', 11),
(14, 8, 'Desarrollo tecnológico e innovación', 'desarrollo tecnológico e innovación', b'1', 11),
(15, 8, 'Empedurismo', 'Empedurismo', b'1', 11),
(16, 9, 'Identificación de las necesidades', 'Identificación de las necesidades', b'1', NULL),
(17, 9, 'Planificación', 'Planificación', b'1', NULL),
(18, 9, 'Monitoreo y ejecución', 'monitoreo y ejecución', b'1', NULL),
(19, 9, 'Cierre', 'cierre', b'1', NULL),
(20, 7, 'Ejecución Curricular', 'Ejecución Curricular', b'1', 5),
(21, 7, 'Evaluación del Estudiante', 'Evaluación del Estudiante', b'1', 5),
(22, 7, 'Movilidad y Becas', 'Movilidad y Becas', b'1', 5),
(23, 7, 'Investigación Formativa', 'Investigación Formativa', b'1', 5);

--
-- Volcado de datos para la tabla `indicador`
--

INSERT INTO `indicador` (`id_indicador`, `id_sub_proceso`, `descripcion`, `meta`, `iniciativas`, `responsable`, `linea_base`, `frecuencia`, `estado`, `tipo`, `unidad`, `fv`, `rojo`, `amarillo`, `verde`) VALUES
(1, 10, 'Egresados de la carrera de Enfermería por promoción', 'Determinar el porcentaje de estudiantes que egresan por cada promoción o cohorte de ingreso.', 'cursos', 'Director(a) de la Escuela Profesional', '80', 'Anual', b'1', 'C', '%', 'Historial académico. SGA.', 25, 75, 100),
(2, 10, 'Cumplimiento de los objetivos educacionales', 'Evaluar el nivel de logro de los objetivos educacionales (entre los egresados de la EPG).', 'aa', 'Director(a) de la Escuela Profesional', '80', 'Anual', b'1', 'C', '%', 'Informe de logro de los objetivos educacionales ', 25, 75, 100),
(3, 1, 'Actualización del Modelo Educativo de la UNT', 'Verificar actualización sistemática del Modelo Educativo de la UNT.', 'cc', 'Director(a) de Escuela Profesional', '80%', 'Cada 5 años o cuando sea necesario', b'1', 'C', 'número', 'Informe de revisión/actualización del Modelo Educativo de la UNT\r\nResoluciones rectorales de aprobación.', 50, 80, 100),
(4, 1, 'Actualización de los currículos de los programas de estudio', 'Verificar que el currículo de los programas de estudio se revisa, evalúa y actualiza con la frecuencia establecida. ', 'cc', 'Director(a) de Escuela Profesional', '80', 'Cada tre años o cuando sea necesario.', b'1', 'C', '%', 'Currículo, Resoluciones de Consejo de Facultad y Consejo Universitario.', 50, 80, 100),
(5, 1, 'Actualización de los sílabos ', 'Verificar que los sílabos de las experiencias curriculares se revisan, evalúan y actualizan de manera sistemática.', 'DD', 'Directora(a) de Escuela Profesional', '80', 'Semestral', b'1', 'C', '%', 'Lista de Cotejo para la Revisión del sílabo', 50, 80, 100),
(6, 1, 'Sílabos visados antes del inicio del semestre en el Sistema de Gestión Académica', 'Evidenciar que los sílabos de las experiencias curriculares sean visados (aprobados) en el SGA antes del primer día de clases.', 'ss', 'Director(a) de Escuela Profesional', '80', 'Semestral o anual, según corresponda', b'1', 'C', '%', 'Sistema de Gestión Académica (reporte)', 50, 80, 100),
(7, 2, 'Relación entre los postulantes actuales y los postulantes en el periodo anterior ', 'Establecer el nivel de demanda en el proceso de admisión.', 'dd', 'Dirección de Admisión', '80', 'Anual', b'1', 'C', '%', 'Padrón oficial de postulantes del periodo actual y anterior.\r\nBase de datos.', 50, 80, 98),
(8, 2, 'Ratio entre ingresantes y postulantes - Por programa', 'Establecer el nivel de demandapor cada programa y en cada proceso de admisión.', 'dd', 'Dirección de Admisión', '80', 'Anual', b'1', 'C', '%', 'Padrón oficial de postulantes del periodo actual.\r\nListado oficial de ingresantes acreditados en el periodo actual.\r\nBase de datos.', 50, 80, 100),
(9, 2, 'Nivel de logro del número de vacantes aprobadas (%) - Por programa', 'Evaluar el nivel de cobertura del número de vacantes aprobadas.', 'd', 'Dirección de Admisión', '90%', 'Anual', b'1', 'C', '%', 'Cuadro de vacantes (aprobado por resolución rectoral)\r\nPadrón oficial de ingresantes acreditados y aprobado por Consejo Universitario.', 50, 80, 100),
(10, 2, 'Nivel de satisfacción del ingresante acreditado (%) - Por carrera o programa de segunda especialidad', 'Evaluar el nivel de satisfacción de los ingresantes con el servicio brindado.', 'encuestas de satisfacción.', 'Dirección de Admisión', '80%', 'Anual', b'1', 'C', '%', 'Resultados de encuestas de satisfacción\r\nBase de datos.', 50, 80, 100),
(11, 4, 'Número total de estudiantes matriculados (por año o semestre académico).', 'Determinar el número de estudiantes matriculados en cada año académico y/o semestre y evaluar su evolución.', 'aaaa', 'Dirección de UEPG', '80', 'Anual y/o semestral (según la necesidad del programa)', b'1', 'C', 'Numero', 'SGA y SUV', 50, 80, 100),
(12, 4, 'Estudiantes matriculados dentro del plazo oficial (%).', 'Determinar N° de estudiantes que no se matriculan dentro del plazo oficial establecido en el cronograma académico.', 'aas', 'Dirección de UEPG', '80', 'Anual y/o semestral (según la necesidad del programa)', b'1', 'C', '%', 'SGA y SUV', 50, 80, 100),
(13, 4, 'Ingresantes acreditados matriculados (%)', 'Determinar el número de estudiantes ingresantes acreditados que se matriculan.', 'qq', 'Dirección de UEPG', '80', 'Anual y/o semestral (según la necesidad del programa)', b'1', 'C', '%', 'SGA y SUV', 50, 80, 100),
(14, 4, 'Número de estudiantes matriculados dos o más veces en una misma experiencia curricular.', 'Identificar a los estudiantes con problemas de rendimiento académico para planificar actividades de apoyo o toma de decisiones en aplicación del artículo N° 316 del Estatuto de la UNT.', 'aa', 'Director(a)', '80', 'Anual y/o semestral (según la necesidad del programa)', b'1', 'D', 'Número', 'SGA-UNT: Reporte de estudiantes matriculados DOS, TRES o CUATROveces en la misma experiencia curricular.', 50, 80, 100),
(15, 6, 'Porcentaje de Estudiantes Egresados por Promoción o Cohorte (%)', 'Determinar la cantidad de estudiantes (%) que terminaron los estudios de pregrado (% de egresados) por promoción o cohorte', 'qqq', 'DRT', '90', 'Anual ', b'1', 'C', '%', 'Sistema de Gestión Académico (SGA) - Matrícula\r\nSistema Universitario Virtual (SUV)', 50, 80, 100),
(16, 6, 'Porcentaje de EGRESADOS GRADUADOS por Promoción o Cohorte (%)', 'Determinar la cantidad de egresados por promoción o cohorte que lograron el grado académico de bachiller (% de egresados graduados)', 'ss', 'DRT', '80', 'anual', b'1', 'C', '%', 'Sistema de Gestión Académico (SGA) - Matrícula\r\n(SUV) CONFIRMAR CON  Estudios Generales', 50, 80, 100),
(17, 6, 'Egresados graduados dentro de SEIS MESES después del egreso (%)', 'Determinar la cantidad de egresados por promoción o cohorte que logra optar al grado académico de bachiller durante los primeros SEIS MESES despues de ser declarado egresado.', 'aa', 'Jefe de Unidad de Grados y Títulos', '80', 'Semestral', b'1', 'C', '%', 'Sistema de Gestión Académico (SGA) - Matrícula\r\nSistema Universitario Virtual (SUV)', 50, 80, 100),
(18, 7, 'EGRESADOS TITULADOS por promoción o cohorte (%)', 'Determinar la cantidad de EGRESADOS TITULADOS por promoción o cohorte (%)', 'aaa', 'Director(a) de Escuela Profesional', '80', 'Anual', b'1', 'C', '%', 'Sistema de Gestión Académico (SGA) - Matrícula\r\nSistema Universitario Virtual (SUV)', 50, 80, 100),
(19, 7, 'Egresados titulados dentro de los DOCE MESES despues de ser declarado EGRESADO/GRADUADO (%)', 'Determinar la cantidad de egresados por promoción o cohorte que logra optar al título profesional dentro de los primeros DOCE MESES despues de ser declarado EGRESADO/GRADUADO.', 'sss', 'Director(a) de Escuela Profesional', '80', 'Anual', b'1', 'C', '%', 'Sistema de Gestión Académico (SGA) - Matrícula \r\nSistema Universitario Virtual (SUV)', 50, 80, 100),
(20, 8, 'Certificados emitidos despues del plazo (%) - SISTEMA VIRTUAL', 'Evaluar la emisión de certificados despues de los plazos establecidos.', 'AA', 'Director(a) de Registro Técnico', '80', 'Trimestral', b'1', 'D', '%', 'Registro de seguimiento para la emisión de certificados virtuales.', 50, 80, 100),
(21, 8, 'Certificados emitidos despues del plazo (%) - SISTEMA MANUAL', 'Evaluar la emisión de certificados despues de los plazos establecidos.', 'AA', 'Director(a) de Registro Técnico', '80', 'Trimestral', b'1', 'D', '%', 'Registro de seguimiento para la emisión de certificados manuales.', 50, 80, 100),
(22, 9, 'Ingresantes que cumplen con el perfil de ingreso (%)', 'Identificar brechas en el cumplimiento del prefil del ingresante y generar programas de nivelación.', 'aa', 'Director(a)de Escuela Profesional', '80', 'Anual', b'1', 'C', '%', 'Resultados del proceso de admisión.\r\nResultados de evaluaciones complementarias aplicadas a los ingresantes.', 50, 80, 100),
(23, 9, 'Estudiantes que logran las COMPETENCIAS GENERALES esperadas (%).', 'Evaluar la eficacia de la formación en la etapa de Estudios Generales (%)', 'aaa', 'Director(a)de Escuela Profesional', '80', 'Anual', b'1', 'C', '%', 'Resultados de la evaluaciones en las experiencias curriculares (Estudios Generales y de especialidad).', 50, 80, 100),
(24, 9, 'Estudiantes que logran las COMPETENCIAS ESPECIFICAS  esperadas (%).', 'Evaluar la eficacia de la formación (%)', 'aaa', 'Director(a)de Escuela Profesional', '80', 'Anual', b'1', 'C', '%', 'Resultados de la evaluaciones en las experiencias curriculares (Estudios Generales y de especialidad).', 50, 80, 100),
(25, 9, 'Deserción de estudiantes (%) - Por promoción o cohorte', 'Evaluar la cantidad de estudiantes que abandonan el programa de estudios. ', 'AA', 'Director(a)de Escuela Profesional', '80', 'Semestral', b'1', 'D', '%', 'Reportes de estudiantes matriculados', 50, 80, 100);
