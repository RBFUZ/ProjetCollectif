USE db_rel_ent_pol_tours;

DELIMITER $$

-- ------------------------------------------------------------------------------ 
-- Displays the total number of internships in the database
-- OUTPUT
-- 		po_total [INT]	: total number of internships in the database
-- 		po_france [INT] : total number of internships in France in the database
-- 		po_abroad [INT]	: total number of internships abroad in the database
-- ------------------------------------------------------------------------------ 
CREATE PROCEDURE display_internship_stats_total(
	OUT po_total INT, OUT po_france INT, OUT po_abroad INT)
BEGIN
	-- total number of internships
	SELECT COUNT(id) INTO po_total
	FROM convention_stage;
    
    -- total number of internships in france
    SELECT COUNT(c.id) INTO po_france
    FROM convention c, stage s
    WHERE c.id_stage = s.id AND s.etranger = 0;
    
    -- total number of internships abroad
    SELECT COUNT(c.id) INTO po_abroad
    FROM convention c, stage s
    WHERE c.id_stage = s.id AND s.etranger = 1;
END$$

DELIMITER ;