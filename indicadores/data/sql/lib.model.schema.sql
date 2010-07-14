
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- indicador
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `indicador`;


CREATE TABLE `indicador`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`indicador` VARCHAR(255),
	`borrador` INTEGER,
	`objetivo_id` INTEGER,
	`objetivo_estr` TEXT,
	`categoria_id` INTEGER,
	`proceso` INTEGER,
	`defincion` TEXT,
	`medicion` TEXT,
	`descripcion` TEXT,
	`formula_textual` TEXT,
	`tipo` VARCHAR(50),
	`frecuencia` VARCHAR(50),
	`responsable_id` INTEGER,
	`quien_id` INTEGER,
	`como` TEXT,
	`que` TEXT,
	`formula` VARCHAR(255),
	`umbral_rojo` FLOAT,
	`umbral_amarillo` FLOAT,
	`umbral_verde` FLOAT,
	`meta` TEXT,
	`iniciativa` TEXT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `indicador_FI_1` (`objetivo_id`),
	CONSTRAINT `indicador_FK_1`
		FOREIGN KEY (`objetivo_id`)
		REFERENCES `objetivo` (`id`)
		ON DELETE SET NULL,
	INDEX `indicador_FI_2` (`categoria_id`),
	CONSTRAINT `indicador_FK_2`
		FOREIGN KEY (`categoria_id`)
		REFERENCES `categoria` (`id`),
	INDEX `indicador_FI_3` (`responsable_id`),
	CONSTRAINT `indicador_FK_3`
		FOREIGN KEY (`responsable_id`)
		REFERENCES `dependencia` (`id`)
		ON DELETE SET NULL,
	INDEX `indicador_FI_4` (`quien_id`),
	CONSTRAINT `indicador_FK_4`
		FOREIGN KEY (`quien_id`)
		REFERENCES `dependencia` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- variable
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `variable`;


CREATE TABLE `variable`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(255),
	`descripcion` TEXT,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- objetivo
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `objetivo`;


CREATE TABLE `objetivo`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(255),
	`descripcion` TEXT,
	`nombre_corto` VARCHAR(50),
	`tema` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- categoria
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `categoria`;


CREATE TABLE `categoria`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(255),
	`descripcion` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- dependencia
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `dependencia`;


CREATE TABLE `dependencia`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(100),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- cargo
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `cargo`;


CREATE TABLE `cargo`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(100),
	`dependencia_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `cargo_FI_1` (`dependencia_id`),
	CONSTRAINT `cargo_FK_1`
		FOREIGN KEY (`dependencia_id`)
		REFERENCES `dependencia` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- indicador_variable
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `indicador_variable`;


CREATE TABLE `indicador_variable`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`indicador_id` INTEGER,
	`variable_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `indicador_variable_FI_1` (`indicador_id`),
	CONSTRAINT `indicador_variable_FK_1`
		FOREIGN KEY (`indicador_id`)
		REFERENCES `indicador` (`id`),
	INDEX `indicador_variable_FI_2` (`variable_id`),
	CONSTRAINT `indicador_variable_FK_2`
		FOREIGN KEY (`variable_id`)
		REFERENCES `variable` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- historico_variable
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `historico_variable`;


CREATE TABLE `historico_variable`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`variable_id` INTEGER,
	`valor` FLOAT,
	`historico_indicador_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `historico_variable_FI_1` (`variable_id`),
	CONSTRAINT `historico_variable_FK_1`
		FOREIGN KEY (`variable_id`)
		REFERENCES `variable` (`id`),
	INDEX `historico_variable_FI_2` (`historico_indicador_id`),
	CONSTRAINT `historico_variable_FK_2`
		FOREIGN KEY (`historico_indicador_id`)
		REFERENCES `historico_indicador` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- historico_indicador
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `historico_indicador`;


CREATE TABLE `historico_indicador`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`indicador_id` INTEGER,
	`valor` FLOAT,
	`ano` VARCHAR(4),
	`medicion_numero` INTEGER,
	`observacion` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `historico_indicador_FI_1` (`indicador_id`),
	CONSTRAINT `historico_indicador_FK_1`
		FOREIGN KEY (`indicador_id`)
		REFERENCES `indicador` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- macroproceso
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `macroproceso`;


CREATE TABLE `macroproceso`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(255),
	`descripcion` TEXT,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- proceso
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `proceso`;


CREATE TABLE `proceso`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`macroproceso_id` INTEGER,
	`nombre` VARCHAR(255),
	`cargo_id` INTEGER,
	`descripcion` TEXT,
	PRIMARY KEY (`id`),
	INDEX `proceso_FI_1` (`macroproceso_id`),
	CONSTRAINT `proceso_FK_1`
		FOREIGN KEY (`macroproceso_id`)
		REFERENCES `macroproceso` (`id`)
		ON DELETE SET NULL,
	INDEX `proceso_FI_2` (`cargo_id`),
	CONSTRAINT `proceso_FK_2`
		FOREIGN KEY (`cargo_id`)
		REFERENCES `cargo` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- meta_pd
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `meta_pd`;


CREATE TABLE `meta_pd`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`codigo` VARCHAR(30),
	`meta` VARCHAR(255),
	`descripcion` TEXT,
	`tipo` VARCHAR(50),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- indicador_meta
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `indicador_meta`;


CREATE TABLE `indicador_meta`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`meta_pd_id` INTEGER,
	`codigo` VARCHAR(20),
	`descripcion` TEXT,
	`magnitud` VARCHAR(20),
	`anualizacion_id` INTEGER,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `indicador_meta_FI_1` (`meta_pd_id`),
	CONSTRAINT `indicador_meta_FK_1`
		FOREIGN KEY (`meta_pd_id`)
		REFERENCES `meta_pd` (`id`)
		ON DELETE SET NULL,
	INDEX `indicador_meta_FI_2` (`anualizacion_id`),
	CONSTRAINT `indicador_meta_FK_2`
		FOREIGN KEY (`anualizacion_id`)
		REFERENCES `anualizacion` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- anualizacion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `anualizacion`;


CREATE TABLE `anualizacion`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`meta_pd_id` INTEGER,
	`anyo1` FLOAT,
	`anyo2` FLOAT,
	`anyo3` FLOAT,
	`anyo4` FLOAT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `anualizacion_FI_1` (`meta_pd_id`),
	CONSTRAINT `anualizacion_FK_1`
		FOREIGN KEY (`meta_pd_id`)
		REFERENCES `meta_pd` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- seguimiento_indicador_meta
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `seguimiento_indicador_meta`;


CREATE TABLE `seguimiento_indicador_meta`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`indicador_meta_id` INTEGER,
	`anyo` VARCHAR(4),
	`valor` FLOAT,
	PRIMARY KEY (`id`),
	INDEX `seguimiento_indicador_meta_FI_1` (`indicador_meta_id`),
	CONSTRAINT `seguimiento_indicador_meta_FK_1`
		FOREIGN KEY (`indicador_meta_id`)
		REFERENCES `indicador_meta` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- meta_proyecto
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `meta_proyecto`;


CREATE TABLE `meta_proyecto`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`meta_pd_id` INTEGER,
	`codigo` VARCHAR(20),
	`meta` VARCHAR(255),
	`descripcion` TEXT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `meta_proyecto_FI_1` (`meta_pd_id`),
	CONSTRAINT `meta_proyecto_FK_1`
		FOREIGN KEY (`meta_pd_id`)
		REFERENCES `meta_pd` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- proyecto
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `proyecto`;


CREATE TABLE `proyecto`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`meta_proyecto_id` INTEGER,
	`anualizacion_id` INTEGER,
	`codigo` VARCHAR(20),
	`proyecto` VARCHAR(255),
	`descripcion` TEXT,
	`magnitud` VARCHAR(50),
	`programa_interno` VARCHAR(50),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `proyecto_FI_1` (`meta_proyecto_id`),
	CONSTRAINT `proyecto_FK_1`
		FOREIGN KEY (`meta_proyecto_id`)
		REFERENCES `meta_proyecto` (`id`)
		ON DELETE SET NULL,
	INDEX `proyecto_FI_2` (`anualizacion_id`),
	CONSTRAINT `proyecto_FK_2`
		FOREIGN KEY (`anualizacion_id`)
		REFERENCES `anualizacion` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- actividad_proyecto
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `actividad_proyecto`;


CREATE TABLE `actividad_proyecto`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`proyecto_id` INTEGER,
	`actividad` VARCHAR(255),
	`descripcion` TEXT,
	`ponderacion` FLOAT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `actividad_proyecto_FI_1` (`proyecto_id`),
	CONSTRAINT `actividad_proyecto_FK_1`
		FOREIGN KEY (`proyecto_id`)
		REFERENCES `proyecto` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- subactividad_proyecto
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `subactividad_proyecto`;


CREATE TABLE `subactividad_proyecto`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`actividad_proyecto_id` INTEGER,
	`descripcion` TEXT,
	`fecha_inicio` DATE,
	`duracion` INTEGER,
	`ponderacion` FLOAT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `subactividad_proyecto_FI_1` (`actividad_proyecto_id`),
	CONSTRAINT `subactividad_proyecto_FK_1`
		FOREIGN KEY (`actividad_proyecto_id`)
		REFERENCES `actividad_proyecto` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- subactividad_ejecucion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `subactividad_ejecucion`;


CREATE TABLE `subactividad_ejecucion`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`subactividad_proyecto_id` INTEGER,
	`mes` INTEGER,
	`avance` FLOAT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `subactividad_ejecucion_FI_1` (`subactividad_proyecto_id`),
	CONSTRAINT `subactividad_ejecucion_FK_1`
		FOREIGN KEY (`subactividad_proyecto_id`)
		REFERENCES `subactividad_proyecto` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- meta_poa
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `meta_poa`;


CREATE TABLE `meta_poa`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`meta` VARCHAR(255),
	`descripcion` TEXT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- actividad_poa
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `actividad_poa`;


CREATE TABLE `actividad_poa`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`meta_poa_id` INTEGER,
	`proyecto_id` INTEGER,
	`descripcion` TEXT,
	`responsable` VARCHAR(50),
	`observaciones` TEXT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `actividad_poa_FI_1` (`meta_poa_id`),
	CONSTRAINT `actividad_poa_FK_1`
		FOREIGN KEY (`meta_poa_id`)
		REFERENCES `meta_poa` (`id`)
		ON DELETE SET NULL,
	INDEX `actividad_poa_FI_2` (`proyecto_id`),
	CONSTRAINT `actividad_poa_FK_2`
		FOREIGN KEY (`proyecto_id`)
		REFERENCES `proyecto` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- proyecto_inversion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `proyecto_inversion`;


CREATE TABLE `proyecto_inversion`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`meta_pd_id` INTEGER,
	`codigo` VARCHAR(20),
	`proyecto` TEXT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `proyecto_inversion_FI_1` (`meta_pd_id`),
	CONSTRAINT `proyecto_inversion_FK_1`
		FOREIGN KEY (`meta_pd_id`)
		REFERENCES `meta_pd` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- actividad
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `actividad`;


CREATE TABLE `actividad`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`proyecto_inversion_id` INTEGER,
	`descripcion` TEXT,
	`tipo_gasto` VARCHAR(20),
	`componente_sector` VARCHAR(255),
	`concepto_gasto` VARCHAR(255),
	`mes_etapa_contractual` VARCHAR(20),
	`mes_ejecucion` VARCHAR(20),
	`reservas` FLOAT,
	`area_responsable` VARCHAR(100),
	`valor_proceso` FLOAT,
	`numero_solicitud` VARCHAR(20),
	`fecha_solicitud` DATE,
	`fecha_contrato` DATE,
	`fecha_acta_inicio` DATE,
	`fecha_terminacion` DATE,
	`fecha_liquidacion` DATE,
	`plazo_meses` INTEGER,
	`contrato_id` INTEGER,
	`clase_contrato` VARCHAR(80),
	`estado` VARCHAR(80),
	`existencia_contrato_numero` VARCHAR(20),
	`giros` FLOAT,
	`saldo` FLOAT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `actividad_FI_1` (`proyecto_inversion_id`),
	CONSTRAINT `actividad_FK_1`
		FOREIGN KEY (`proyecto_inversion_id`)
		REFERENCES `proyecto_inversion` (`id`)
		ON DELETE SET NULL,
	INDEX `actividad_FI_2` (`contrato_id`),
	CONSTRAINT `actividad_FK_2`
		FOREIGN KEY (`contrato_id`)
		REFERENCES `contrato` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- localidad
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `localidad`;


CREATE TABLE `localidad`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`localidad` VARCHAR(50),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- localidad_actividad
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `localidad_actividad`;


CREATE TABLE `localidad_actividad`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`localidad_id` INTEGER,
	`actividad_id` INTEGER,
	`monto` FLOAT,
	`cantidad` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `localidad_actividad_FI_1` (`localidad_id`),
	CONSTRAINT `localidad_actividad_FK_1`
		FOREIGN KEY (`localidad_id`)
		REFERENCES `localidad` (`id`)
		ON DELETE SET NULL,
	INDEX `localidad_actividad_FI_2` (`actividad_id`),
	CONSTRAINT `localidad_actividad_FK_2`
		FOREIGN KEY (`actividad_id`)
		REFERENCES `actividad` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- cliente
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `cliente`;


CREATE TABLE `cliente`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`cliente` VARCHAR(80),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- cliente_actividad
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `cliente_actividad`;


CREATE TABLE `cliente_actividad`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`cliente_id` INTEGER,
	`actividad_id` INTEGER,
	`monto` FLOAT,
	`cantidad` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `cliente_actividad_FI_1` (`cliente_id`),
	CONSTRAINT `cliente_actividad_FK_1`
		FOREIGN KEY (`cliente_id`)
		REFERENCES `cliente` (`id`)
		ON DELETE SET NULL,
	INDEX `cliente_actividad_FI_2` (`actividad_id`),
	CONSTRAINT `cliente_actividad_FK_2`
		FOREIGN KEY (`actividad_id`)
		REFERENCES `actividad` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- fuente
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `fuente`;


CREATE TABLE `fuente`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`codigo` VARCHAR(20),
	`fuente` VARCHAR(100),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- fuente_actividad
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `fuente_actividad`;


CREATE TABLE `fuente_actividad`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`fuente_id` INTEGER,
	`actividad_id` INTEGER,
	`monto` FLOAT,
	PRIMARY KEY (`id`),
	INDEX `fuente_actividad_FI_1` (`fuente_id`),
	CONSTRAINT `fuente_actividad_FK_1`
		FOREIGN KEY (`fuente_id`)
		REFERENCES `fuente` (`id`)
		ON DELETE SET NULL,
	INDEX `fuente_actividad_FI_2` (`actividad_id`),
	CONSTRAINT `fuente_actividad_FK_2`
		FOREIGN KEY (`actividad_id`)
		REFERENCES `actividad` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- componente
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `componente`;


CREATE TABLE `componente`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`codigo` VARCHAR(20),
	`componente` VARCHAR(100),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- componente_actividad
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `componente_actividad`;


CREATE TABLE `componente_actividad`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`componente_id` INTEGER,
	`actividad_id` INTEGER,
	`monto` FLOAT,
	PRIMARY KEY (`id`),
	INDEX `componente_actividad_FI_1` (`componente_id`),
	CONSTRAINT `componente_actividad_FK_1`
		FOREIGN KEY (`componente_id`)
		REFERENCES `componente` (`id`)
		ON DELETE SET NULL,
	INDEX `componente_actividad_FI_2` (`actividad_id`),
	CONSTRAINT `componente_actividad_FK_2`
		FOREIGN KEY (`actividad_id`)
		REFERENCES `actividad` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- cdp
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `cdp`;


CREATE TABLE `cdp`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`numero` VARCHAR(20),
	`fecha` DATE,
	`monto` FLOAT,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- cdp_actividad
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `cdp_actividad`;


CREATE TABLE `cdp_actividad`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`cdp_id` INTEGER,
	`actividad_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `cdp_actividad_FI_1` (`cdp_id`),
	CONSTRAINT `cdp_actividad_FK_1`
		FOREIGN KEY (`cdp_id`)
		REFERENCES `cdp` (`id`)
		ON DELETE SET NULL,
	INDEX `cdp_actividad_FI_2` (`actividad_id`),
	CONSTRAINT `cdp_actividad_FK_2`
		FOREIGN KEY (`actividad_id`)
		REFERENCES `actividad` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- crp
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `crp`;


CREATE TABLE `crp`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`numero` VARCHAR(20),
	`fecha` DATE,
	`monto` FLOAT,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- crp_actividad
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `crp_actividad`;


CREATE TABLE `crp_actividad`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`crp_id` INTEGER,
	`actividad_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `crp_actividad_FI_1` (`crp_id`),
	CONSTRAINT `crp_actividad_FK_1`
		FOREIGN KEY (`crp_id`)
		REFERENCES `crp` (`id`)
		ON DELETE SET NULL,
	INDEX `crp_actividad_FI_2` (`actividad_id`),
	CONSTRAINT `crp_actividad_FK_2`
		FOREIGN KEY (`actividad_id`)
		REFERENCES `actividad` (`id`)
		ON DELETE SET NULL
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- contrato
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `contrato`;


CREATE TABLE `contrato`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`numero` VARCHAR(10),
	`id_contratista` VARCHAR(30),
	`contratista` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
