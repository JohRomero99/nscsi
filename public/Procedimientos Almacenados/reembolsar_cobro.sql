DELIMITER $$
DROP PROCEDURE IF EXISTS reembolsar_cobro$$
CREATE PROCEDURE reembolsar_cobro
(
    IN v_valor_cobrado int,
    IN v_id int
)
BEGIN
    DECLARE nuevo_saldo decimal(10,2);
    DECLARE p_saldo decimal(10,2);
    DECLARE nuevo_valor_cobrado decimal(10,2);
    DECLARE v_cobrado decimal(10,2);
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

        /*Reembolsar valores en el estado de cuenta.*/
        SET p_saldo = (select saldo from cob_estado_cuenta where id = v_id LIMIT 1);
        SET nuevo_saldo = p_saldo + v_valor_cobrado;

        SET v_cobrado = (select valor_cobrado from cob_estado_cuenta where id = v_id LIMIT 1);
        SET nuevo_valor_cobrado = v_cobrado - v_valor_cobrado;

        UPDATE cob_estado_cuenta SET valor_cobrado = nuevo_valor_cobrado, saldo = nuevo_saldo WHERE id = v_id;
        UPDATE cob_estado_cuenta SET estado = 'pendiente' WHERE id = v_id;

    COMMIT;
END
$$
DELIMITER ;
