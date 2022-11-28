DELIMITER $$
DROP PROCEDURE IF EXISTS nombresCompletos$$
CREATE PROCEDURE nombresCompletos
(
    IN term varchar(255) COLLATE utf8_unicode_ci
)
BEGIN
    DECLARE nombresCompletos VARCHAR(255);
    -- DECLARE EXIT HANDLER FOR SQLEXCEPTION
    -- BEGIN
    --     ROLLBACK;
    --     SELECT 'OCURRIO UN ERROR, ROLLBACK';
    -- END;
    -- DECLARE EXIT HANDLER FOR SQLWARNING
    -- BEGIN
    --     ROLLBACK;
    --     SELECT 'OCURRIO UN ERROR, ROLLBACK';
    -- END;
    START TRANSACTION;
    SET @v_term = term;
    -- SET nombresCompletos =  (SELECT concat_ws(
    --     ' ', primer_nombre, segundo_nombre, apellido_paterno, apellido_materno) 
    --     as persona FROM nsc_persona WHERE concat_ws(
    --     ' ', primer_nombre, segundo_nombre, apellido_paterno, apellido_materno) 
    --     LIKE CONCAT('%', @v_term, '%'));

    SELECT concat_ws(
        ' ', primer_nombre, segundo_nombre, apellido_paterno, apellido_materno
        ) as persona FROM nsc_persona WHERE concat_ws(
        ' ', primer_nombre, segundo_nombre, apellido_paterno, apellido_materno) 
        LIKE CONCAT('%', @v_term, '%');
    SELECT nombresCompletos;

    -- SELECT nombresCompletos;
END
$$
DELIMITER ;