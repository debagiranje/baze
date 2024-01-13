DELIMITER $$

CREATE PROCEDURE get_album()
BEGIN
    SELECT * FROM album;
END $$

DELIMITER ;
