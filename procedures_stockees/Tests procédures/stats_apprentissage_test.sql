USE db_rel_ent_pol_tours;

-- Should display 7
CALL `display_apprenticeship_stats_total`(@p0);
SELECT @p0 AS `po_total`;

-- Should not display anything
SET @p0='2014-01-01'; 
CALL `display_apprenticeship_stats_current_year`(@p0, @p1, @p2, @p3, @p4); 
SELECT @p1 AS `po_total`, @p2 AS `po_ongoing`, @p3 AS `po_finished`, @p4 AS `po_tocome`;

-- Should display 1 to come, total 1
SET @p0='2015-01-01'; 
CALL `display_apprenticeship_stats_current_year`(@p0, @p1, @p2, @p3, @p4); 
SELECT @p1 AS `po_total`, @p2 AS `po_ongoing`, @p3 AS `po_finished`, @p4 AS `po_tocome`;

-- Should display 1 ongoing, total 1
SET @p0='2015-09-17'; 
CALL `display_apprenticeship_stats_current_year`(@p0, @p1, @p2, @p3, @p4); 
SELECT @p1 AS `po_total`, @p2 AS `po_ongoing`, @p3 AS `po_finished`, @p4 AS `po_tocome`;

-- Should display 1 ongoing, 1 to come, total 2
SET @p0='2016-01-01'; 
CALL `display_apprenticeship_stats_current_year`(@p0, @p1, @p2, @p3, @p4); 
SELECT @p1 AS `po_total`, @p2 AS `po_ongoing`, @p3 AS `po_finished`, @p4 AS `po_tocome`;

-- Should display 2 ongoing, total 2
SET @p0='2016-09-19'; 
CALL `display_apprenticeship_stats_current_year`(@p0, @p1, @p2, @p3, @p4); 
SELECT @p1 AS `po_total`, @p2 AS `po_ongoing`, @p3 AS `po_finished`, @p4 AS `po_tocome`;

-- Should display 2 ongoing, 5 to come, total 7
SET @p0='2017-01-01'; 
CALL `display_apprenticeship_stats_current_year`(@p0, @p1, @p2, @p3, @p4); 
SELECT @p1 AS `po_total`, @p2 AS `po_ongoing`, @p3 AS `po_finished`, @p4 AS `po_tocome`;

-- Should display 5 ongoing, 2 to come, total 7
SET @p0='2017-09-18'; 
CALL `display_apprenticeship_stats_current_year`(@p0, @p1, @p2, @p3, @p4); 
SELECT @p1 AS `po_total`, @p2 AS `po_ongoing`, @p3 AS `po_finished`, @p4 AS `po_tocome`;

-- Should display 2 finished, 5 ongoing, total 7
SET @p0='2018-07-01'; 
CALL `display_apprenticeship_stats_current_year`(@p0, @p1, @p2, @p3, @p4); 
SELECT @p1 AS `po_total`, @p2 AS `po_ongoing`, @p3 AS `po_finished`, @p4 AS `po_tocome`;

-- Should display 1 finished, 1 ongoing, total 2
SET @p0='2019-07-01'; 
CALL `display_apprenticeship_stats_current_year`(@p0, @p1, @p2, @p3, @p4); 
SELECT @p1 AS `po_total`, @p2 AS `po_ongoing`, @p3 AS `po_finished`, @p4 AS `po_tocome`;

-- Should display 1 finished, total 1
SET @p0='2020-07-01'; 
CALL `display_apprenticeship_stats_current_year`(@p0, @p1, @p2, @p3, @p4); 
SELECT @p1 AS `po_total`, @p2 AS `po_ongoing`, @p3 AS `po_finished`, @p4 AS `po_tocome`;

-- Should not display anything
SET @p0='2021-01-01'; 
CALL `display_apprenticeship_stats_current_year`(@p0, @p1, @p2, @p3, @p4); 
SELECT @p1 AS `po_total`, @p2 AS `po_ongoing`, @p3 AS `po_finished`, @p4 AS `po_tocome`;
