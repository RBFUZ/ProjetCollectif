USE db_rel_ent_pol_tours;

DROP PROCEDURE IF EXISTS display_apprenticeship_total_stats;
DROP PROCEDURE IF EXISTS display_apprenticeship_stats_current_year;

DELIMITER $$

-- ------------------------------------------------------------------------------ 
-- Displays the total number of apprenticeships in the database
-- OUTPUT
-- 		po_total [INT]	: total number of apprenticeships in the database
-- ------------------------------------------------------------------------------ 
CREATE PROCEDURE display_apprenticeship_stats_total(
	OUT po_total INT)
BEGIN
	SELECT COUNT(id) INTO po_total
	FROM apprentissage;
END$$


-- ------------------------------------------------------------------------------ 
-- Displays apprenticeship stats for the current year on a specified date
-- INPUT
-- 		pi_date [DATE] 		: current date, i.e. '2018-04-16'
-- OUTPUTS
-- 		po_total [INT] 		: number of apprenticeships related to the current year
-- 		po_ongoing [INT]	: number of apprenticeships currently ongoing
-- 		po_finished [INT]	: number of apprenticeships finished this year before pi_date
-- 		po_tocome [INT]		: number of apprenticeships to come this year after pi_date
-- ------------------------------------------------------------------------------ 
CREATE PROCEDURE display_apprenticeship_stats_current_year(
	IN pi_date DATE, OUT po_total INT, OUT po_ongoing INT, OUT po_finished INT, OUT po_tocome INT)
BEGIN
	DECLARE v_total INT;
    SET v_total = 0;    
    
	-- Ongoing for current year
    SELECT COUNT(id) INTO po_ongoing
    FROM apprentissage
    WHERE pi_date BETWEEN date_debut_apprentissage AND date_fin_apprentissage;
    SET v_total = v_total + po_ongoing;
    
    -- Finished in the current year before the date
    SELECT COUNT(id) INTO po_finished
    FROM apprentissage
    WHERE date_fin_apprentissage < pi_date AND YEAR(date_fin_apprentissage) = YEAR(pi_date);
    SET v_total = v_total + po_finished;
    
    -- To come in the current year after the date
    SELECT COUNT(id) INTO po_tocome
    FROM apprentissage
    WHERE date_debut_apprentissage > pi_date AND YEAR(date_debut_apprentissage) = YEAR(pi_date);
    SET v_total = v_total + po_tocome;
    
    -- Total for current year
    SET po_total = v_total;
END$$



DELIMITER ;