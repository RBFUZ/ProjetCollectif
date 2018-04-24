USE db_rel_ent_pol_tours;

DROP PROCEDURE IF EXISTS display_internship_stats_total;
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
    FROM convention_stage c, stage s
    WHERE c.id_stage = s.id AND s.etranger = 0;
    
    -- total number of internships abroad
    SELECT COUNT(c.id) INTO po_abroad
    FROM convention_stage c, stage s
    WHERE c.id_stage = s.id AND s.etranger = 1;
END $$
DELIMITER ;


DROP PROCEDURE IF EXISTS display_internship_stats_current_year;
DELIMITER $$
-- ------------------------------------------------------------------------------ 
-- Displays apprenticeship stats for the current year on a specified date
-- INPUT
-- 		pi_date [DATE] 		: current date, i.e. '2018-04-16'
-- OUTPUTS
-- 		po_total [INT] 			: number of internships related to the current year
--
-- 		po_total_ongoing [INT]	: number of ongoing internships related to the current year
-- 		po_france_ongoing [INT]	: number of ongoing internships in France related to the current year
-- 		po_abroad_ongoing [INT]	: number of ongoing internships abroad related to the current year
-- 
-- 		po_total_finished [INT]	: number of finished internships related to the current year
-- 		po_france_finished [INT]: number of finished internships in France related to the current year
-- 		po_abroad_finished [INT]: number of finished internships abroad related to the current year
-- 
-- 		po_total_tocome [INT]	: number of incoming internships related to the current year
-- 		po_france_tocome [INT]	: number of incoming internships in France related to the current year
-- 		po_abroad_tocome [INT]	: number of incoming internships abroad related to the current year
-- ------------------------------------------------------------------------------ 
CREATE PROCEDURE display_internship_stats_current_year(
	IN pi_date DATE, OUT po_total INT, 
    OUT po_total_finished INT, OUT po_france_finished INT, OUT po_abroad_finished INT,
    OUT po_total_ongoing INT, OUT po_france_ongoing INT, OUT po_abroad_ongoing INT,
    OUT po_total_tocome INT, OUT po_france_tocome INT, OUT po_abroad_tocome INT)
BEGIN
	DECLARE v_total_finished INT;
    DECLARE v_total_ongoing INT;
    DECLARE v_total_tocome INT;
    SET v_total_finished = 0; 
    SET v_total_ongoing = 0;
    SET v_total_tocome = 0;
    
	-- Number of finished internships in france
	SELECT COUNT(id) INTO po_france_finished
    FROM stage
    WHERE date_fin_stage < pi_date AND YEAR(date_fin_stage) = YEAR(pi_date)
		AND etranger = 0;
    SET v_total_finished = v_total_finished + po_france_finished;
    
    -- Number of finished internships abroad
	SELECT COUNT(id) INTO po_abroad_finished
    FROM stage
    WHERE date_fin_stage < pi_date AND YEAR(date_fin_stage) = YEAR(pi_date)
		AND etranger = 1;
    SET v_total_finished = v_total_finished + po_abroad_finished;

	-- Total number of finished internships
    SET po_total_finished = v_total_finished;
    
    
    -- Number of ongoing internships in france
    SELECT COUNT(id) INTO po_france_ongoing
    FROM stage
    WHERE pi_date BETWEEN date_debut_stage AND date_fin_stage
		AND etranger = 0;
    SET v_total_ongoing = v_total_ongoing + po_france_ongoing;
    
    -- Number of ongoing internships in abroad
    SELECT COUNT(id) INTO po_abroad_ongoing
    FROM stage
    WHERE pi_date BETWEEN date_debut_stage AND date_fin_stage
		AND etranger = 1;
    SET v_total_ongoing = v_total_ongoing + po_abroad_ongoing;
    
    -- Total number of ongoing internships
    SET po_total_ongoing = v_total_ongoing;
    
    
    -- To come in France in the current year after the date
    SELECT COUNT(id) INTO po_france_tocome
    FROM stage
    WHERE date_debut_stage > pi_date AND YEAR(date_debut_stage) = YEAR(pi_date)
		AND etranger = 0;
    SET v_total_tocome = v_total_tocome + po_france_tocome;
    
    -- To come abroad in the current year after the date
    SELECT COUNT(id) INTO po_abroad_tocome
    FROM stage
    WHERE date_debut_stage > pi_date AND YEAR(date_debut_stage) = YEAR(pi_date)
		AND etranger = 1;
    SET v_total_tocome = v_total_tocome + po_abroad_tocome;
    
    -- Total to come in the current year after the date
    SET po_total_tocome = v_total_tocome;
    
    

    -- Total number of internships this year
    SET po_total = v_total_finished + v_total_ongoing + v_total_tocome;    
END $$
DELIMITER ;