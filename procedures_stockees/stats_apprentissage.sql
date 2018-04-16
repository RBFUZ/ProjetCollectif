USE db_rel_ent_pol_tours;

DROP PROCEDURE IF EXISTS display_apprenticeship_total_stats;
DROP PROCEDURE IF EXISTS display_apprenticeship_stats_current_year;

DELIMITER $$
CREATE PROCEDURE display_apprenticeship_stats_total(
	OUT po_total INT)

BEGIN
	SELECT COUNT(id) INTO po_total
	FROM apprentissage;
END$$

CREATE PROCEDURE display_apprenticeship_stats_current_year(
	IN pi_date DATE, OUT po_total INT, OUT po_ongoing INT, OUT po_finished INT, OUT po_tocome INT)

BEGIN
	-- Total for current year
	SELECT COUNT(id) INTO po_total
    FROM apprentissage
    WHERE YEAR(date_debut_apprentissage) = YEAR(pi_date)
		OR YEAR(date_fin_apprentissage) = YEAR(pi_date)
        OR (YEAR(pi_date) BETWEEN YEAR(date_debut_apprentissage) AND YEAR(date_fin_apprentissage));
	
	-- Ongoing for current year
    SELECT COUNT(id) INTO po_ongoing
    FROM apprentissage
    WHERE pi_date BETWEEN date_debut_apprentissage AND date_fin_apprentissage;
    
    -- Finished in the current year before the date
    SELECT COUNT(id) INTO po_finished
    FROM apprentissage
    WHERE date_fin_apprentissage < pi_date AND YEAR(date_fin_apprentissage) = YEAR(pi_date);
    
    -- To come in the current year after the date
    SELECT COUNT(id) INTO po_tocome
    FROM apprentissage
    WHERE date_debut_apprentissage > pi_date AND YEAR(date_debut_apprentissage) = YEAR(pi_date);
END$$

DELIMITER ;