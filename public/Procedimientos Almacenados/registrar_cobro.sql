DELIMITER $$
DROP PROCEDURE IF EXISTS registrar_cobro$$
CREATE PROCEDURE registrar_cobro
(
    IN v_abono int,
    IN v_id int,
    /*Parametros para insertar cobro */
    IN concepto_cobro_id varchar(255),
    IN estado_cuenta_id int,
    IN voucher_id int,
    IN representante_id int,
    IN usuarioLogin varchar(255),
    IN fecha datetime,
    IN estudiante_id int,
    IN valor int,
    IN n_factura varchar(255),
    IN concepto varchar(255)    
)
BEGIN
    DECLARE v_cobro decimal(10,2);
    DECLARE nuevo_valor_cobrar decimal(10,2);
    DECLARE p_saldo decimal(10,2);
    DECLARE nuevo_saldo decimal(10,2);
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
        SELECT 'OCURRIO UN ERROR, ROLLBACK';
    END;
    DECLARE EXIT HANDLER FOR SQLWARNING
    BEGIN
        ROLLBACK;
        SELECT 'OCURRIO UN ERROR, ROLLBACK';
    END;
    START TRANSACTION;
    	/*Buscar el estado de cuenta.*/
        SET p_saldo = (select saldo from cob_estado_cuenta where id = v_id LIMIT 1);
        SET nuevo_saldo = p_saldo - v_abono;

        SET v_cobro = (select valor_cobrado from cob_estado_cuenta where id = v_id LIMIT 1);
        SET nuevo_valor_cobrar = v_abono + v_cobro;
		
        /* Actualizar saldo. */
        UPDATE cob_estado_cuenta SET valor_cobrado = nuevo_valor_cobrar, saldo = nuevo_saldo WHERE id = v_id;

		/* Si saldo es igual a "0" se actualiza el estado de "pendiente" a "cancelado". */
        IF (nuevo_saldo = 0) THEN
           UPDATE cob_estado_cuenta SET estado = 'cancelado' WHERE id = v_id;
        END IF;
        
        IF ( v_abono > 0 ) THEN
            /*Registrar Cobro*/
            INSERT INTO nsc_cobros (concepto_cobro_id, estado_cuenta_id, voucher_id, representante_id, usuarioLogin, fecha_cobro, estudiante_id, valor, n_factura, concepto, estado, created_at, updated_at)
            VALUES (
                /*id*/
                concepto_cobro_id,
                estado_cuenta_id,
                voucher_id,
                representante_id, 
                usuarioLogin, 
                fecha, 
                CONCAT('0', estudiante_id),
                valor, 
                n_factura, 
                concepto,
                null,
                CURRENT_TIMESTAMP,
                CURRENT_TIMESTAMP
            );
        END IF;

    COMMIT;
END
$$
DELIMITER ;


    
