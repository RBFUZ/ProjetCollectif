USE db_rel_ent_pol_tours;

-- ------------------------------------------------------------------------------ 
-- 	Gets the establishments of a specified enterprise
-- ------------------------------------------------------------------------------ 
SELECT et.id, et.id_entreprise, et.id_adresse, et.nom_etablissement, et.num_siret, et.type_structure,
    et.effectifs, et.secteur_activites, et.code_naf, et.site_web_etablissement, et.commentaire_etablissement
FROM entreprise en, etablissement et
WHERE et.id_entreprise = en.id
	AND et.inom_etablissement = '[nom]';


-- ------------------------------------------------------------------------------
-- ------------------------------------------------------------------------------
-- 			INTERNSHIP
-- ------------------------------------------------------------------------------
-- ------------------------------------------------------------------------------



DROP PROCEDURE IF EXISTS get_oldest_internship_year;
DELIMITER $$
-- ------------------------------------------------------------------------------
-- 	Gets the year of the oldest internship of the database
-- 	OUTPUT
-- 		po_year [YEAR]	: year of the oldest internship in the database
-- ------------------------------------------------------------------------------
CREATE PROCEDURE get_oldest_internship_year(OUT po_year YEAR)
BEGIN
	SELECT YEAR(MIN(date_debut_stage)) INTO po_year
    FROM stage;
END $$
DELIMITER ;


-- ------------------------------------------------------------------------------
-- 	Gets the number of interns each year for a specified establishment id
-- ------------------------------------------------------------------------------
SELECT YEAR(s.date_debut_stage) AS internships_year, COUNT(s.id) AS nmr_interns
FROM stage s, convention_stage c
WHERE s.id = c.id_stage 
	AND c.id_etablissement = [ID]
GROUP BY internships_year
ORDER BY internships_year ASC;


-- ------------------------------------------------------------------------------
-- 	Gets the average amont of gratification for a year 
-- 		for a given establishment id
-- ------------------------------------------------------------------------------
SELECT YEAR(s.date_debut_stage) AS internships_year, AVG(g.montant_gratification) AS gratification_average
FROM stage s, convention_stage c, gratification g
WHERE s.id = c.id_stage 
	AND c.id_gratification = g.id
    AND c.id_etablissement = [ID]
GROUP BY internships_year
ORDER BY internships_year ASC;


-- ------------------------------------------------------------------------------
-- 	Gets the synthetic informations for internships
-- ------------------------------------------------------------------------------
SELECT etu.numero_etudiant AS student_number, etup.nom AS student_last_name, etup.prenom AS student_first_name,
	CONCAT(polp.prenom, ' ', polp.nom) AS educational_tutor, CONCAT(ctcp.prenom, ' ', ctcp.nom) AS professionnal_tutor,
    YEAR(sta.date_debut_stage) AS internship_year, sta.sujet_stage AS internship_topic, dep.libelle_departement AS department
FROM stage sta,
	convention_stage cov,
    etudiant etu, personne etup,
    personnel_polytech pol, personne polp,
    contact_etablissement ctc, personne ctcp,
    specialite spe, departement dep
WHERE sta.id = cov.id_stage
	AND etu.id = cov.id_etudiant
    AND etu.id_personne = etup.id
    AND pol.id = cov.id_personnel_polytech_tuteur
    AND pol.id_personne = polp.id
    AND ctc.id = cov.id_contact_etablissement_tuteur
    AND ctc.id_personne = ctcp.id
    AND spe.id = cov.id_specialite
    AND dep.id = spe.id_departement
    AND dep.id = [ID];
    

-- ------------------------------------------------------------------------------
-- ------------------------------------------------------------------------------
-- 			APPRENTICESHIP
-- ------------------------------------------------------------------------------
-- ------------------------------------------------------------------------------


DROP PROCEDURE IF EXISTS get_oldest_apprenticeship_year;
DELIMITER $$
-- ------------------------------------------------------------------------------
-- 	Gets the year of the oldest apprenticeship of the database
-- 	OUTPUT
-- 		po_year [YEAR]	: year of the oldest apprenticeship in the database
-- ------------------------------------------------------------------------------
CREATE PROCEDURE get_oldest_apprenticeship_year(OUT po_year YEAR)
BEGIN
	SELECT YEAR(MIN(date_debut_apprentissage)) INTO po_year
    FROM apprentissage;
END $$
DELIMITER ;


-- ------------------------------------------------------------------------------
-- 	Gets the number of apprentices each year for a specified establishment id
-- ------------------------------------------------------------------------------
SELECT YEAR(date_debut_apprentissage) AS apprenticeships_year, COUNT(id) AS nmr_apprentices
FROM apprentissage
WHERE id_etablissement = [ID]
GROUP BY apprenticeships_year
ORDER BY apprenticeships_year ASC;
    

-- ------------------------------------------------------------------------------
-- 	Gets the synthetic informations for apprenticeships
-- ------------------------------------------------------------------------------
SELECT etu.numero_etudiant AS student_number, etup.nom AS student_last_name, etup.prenom AS student_first_name,
	YEAR(app.date_debut_apprentissage) AS apprenticeship_beginning_year, dep.libelle_departement AS department
FROM apprentissage app,
	etudiant etu, personne etup,
    specialite spe, departement dep
WHERE etu.id = app.id_etudiant
	AND etu.id_personne = etup.id
    AND spe.id = app.id_specialite
    AND dep.id = spe.id_departement
    AND dep.id = [ID];



-- ------------------------------------------------------------------------------
-- ------------------------------------------------------------------------------
-- 			FORUM
-- ------------------------------------------------------------------------------
-- ------------------------------------------------------------------------------



DROP PROCEDURE IF EXISTS get_oldest_forum_year;
DELIMITER $$
-- ------------------------------------------------------------------------------
-- 	Gets the year of the oldest forum of the specified type in the database
-- 	INPUT
-- 		pi_forum_type [VARCHAR(45)]	: name of the forum type
-- 	OUTPUT
-- 		po_year [YEAR]	: year of the oldest forum of the
-- 				specified typein the database
-- ------------------------------------------------------------------------------
CREATE PROCEDURE get_oldest_forum_year(IN pi_forum_type VARCHAR(45), OUT po_year YEAR)
BEGIN
	SELECT YEAR #PAS FINI !
END $$
DELIMITER ;
    


