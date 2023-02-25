
-- Kevas Hans Chrisian Wihanto
-- SD1c D00251772
-- Hoop NBA Scouting

-- create team table
create table team(teamID VARCHAR(20) NOT NULL,
team_name VARCHAR(50) NOT NULL,
team_salary INT NOT NULL,
primary key(teamID));

-- create player table
create table player(playerID VARCHAR(20)NOT NULL,
player_name VARCHAR(20) NOT NULL,
player_birth_date DATE NOT NULL,
position varchar(20) NOT NULL,
player_draft_year YEAR(4) NOT NULL,
primary key(playerID));

-- create scout table
create table scout(scoutID VARCHAR(20) NOT NULL,
scout_name VARCHAR(20) NOT NULL,
scout_birth_date DATE NOT NULL,
primary key(scoutID));

--create team played for table
create table team_played_for(teamID VARCHAR(20) NOT NULL,
playerID VARCHAR(20) NOT NULL,
contract_start_year YEAR(4) NOT NULL,
contract_end_year YEAR(4) NOT NULL,
contract_yearly_salary INT NOT NULL,
primary key(playerID,teamID,contract_start_year),
foreign key(playerID) references player(playerID),
foreign key(teamID) references team(teamID)) ;

--create team worked for table
create table team_worked_for(teamID VARCHAR(20) NOT NULL,
scoutID VARCHAR(20) NOT NULL,
work_start_year YEAR(4) NOT NULL,
work_end_year YEAR(4),
primary key(scoutID,teamID),
foreign key(scoutID) references scout(scoutID),
foreign key(teamID) references team(teamID)) ;

--create latest_offer table 
create table latest_offer(offerID VARCHAR(20) NOT NULL,
playerID VARCHAR(20) NOT NULL,
scoutID VARCHAR(20) NOT NULL,
offered_yearly_salary INT NOT NULL,
offered_start_year YEAR(4) NOT NULL,
offered_end_year YEAR(4) NOT NULL,
acceptance_status VARCHAR(20),
official_status VARCHAR(20) NOT NULL,
primary key(offerID),
foreign key(scoutID) references scout(scoutID),
foreign key(playerID) references player(playerID)) ;

--create reports table 
create table reports(playerID VARCHAR(20) NOT NULL,
scoutID VARCHAR(20) NOT NULL,
season YEAR(4) NOT NULL,
positives VARCHAR(20) NOT NULL,
negatives VARCHAR(20) NOT NULL,
primary key(playerID,scoutID,season),
foreign key(playerID) references player(playerID),
foreign key(scoutID) references scout(scoutID)) ;

--insert data into players
INSERT INTO player VALUES
    ('PL01', 'Dwight Howard', '1985-12-08', 'C', '2004 '),
    ('PL02', 'LeBron James', '1984-12-30', 'SF', '2003 '),
    ('PL03', 'Stephen Curry', '1988-03-14', 'PG', '2009 '),
    ('PL04', 'Rudy Gobert', '1992-06-26', 'C', '2013 '),
	('PL05','Kevin Love','1988-09-07','PF','2008');

-- insert data to scout
INSERT INTO scout VALUES
    ('SC01', 'Anthony Gacona', '1977-08-07'),
    ('SC02', 'Andrew Mealae', '1972-03-04'),
    ('SC03', 'Irving Thomas JR.', '1964-03-09'),
    ('SC04', 'Craig Johnson', '1974-03-11'),
	('SC05','Elan Vinokurov','1962-12-10'),
	('SC06', 'John Carideo', '1964-01-18'),
    ('SC07', 'David Sevush', '1963-12-26'),
    ('SC08', 'Will Chapman', '1970-05-17'),
    ('SC09', 'Keith Askins', '1971-02-17'),
    ('SC10', 'Kevin Tiller', '1963-03-25'),
	('SC11', 'Zarko Durisic','1964-02-21');
-- insert data to latest_offer	
INSERT INTO latest_offer VALUES
    ('OFF01', 'PL03', 'SC04', '53,838,416', '2022', '2026', 'Accepted', 'official'),
    ('OFF02', 'PL03', 'SC05', '47,000,000', '2022', '2025', 'declined', 'official'),
    ('OFF03', 'PL04', 'SC06', '39,000,000', '2024', '2026', null, 'submitted'),
    ('OFF04', 'PL04', 'SC02', '44,000,000', '2022', '2026', 'accepted', 'official'),
    ('OFF05', 'PL04', 'SC03', '55,000,000', '2023', '2030', null, 'declined'),
    ('OFF06', 'PL02', 'SC05', '45,000,000', '2023', '2028', 'pending', 'official'),
    ('OFF07', 'PL02', 'SC07', '30,000,000', '2023', '2025', 'pending', 'official'),
    ('OFF08', 'PL01', 'SC01', '41,000,000', '2022', '2030', 'accepted', 'official'),
    ('OFF09', 'PL01', 'SC07', '35,000,000', '2026', '2028', null, 'draft'),
    ('OFF10', 'PL01', 'SC10', '45,000,000', '2023', '2034', 'declined', 'official'),
	('OFF11', 'PL02', 'SC09', '50,000,000', '2023', '2028', null, 'draft'),
	('OFF12','PL05','SC08','39','2022','2027','pending','official'),
	('OFF13','PL05','SC01','25','2022','2025',null,'draft');


--insert data to reports	
INSERT INTO reports VALUES
    ('PL01', 'SC01', '2004', 'elite two-way inside player', 'bad overall outside player, bad relationship with other star player'),
    ('PL01', 'SC07', '2013', 'great overall inside player', 'ball dominant, average efficiency, better ball dominant player in harden'),
    ('PL01', 'SC06', '2016', 'great overall inside player', 'bad fit for current coah created play'),
    ('PL01', 'SC01', '2017', 'great overall inside player', 'showed signs of aging'),
    ('PL01', 'SC05', '2018', 'great player from coach created plays, reliable role player', 'no longer a dominant inside player'),
    ('PL02', 'SC08', '2003', 'great potential, proven athletic ability, well rounded skillset', 'unreliable shooter'),
    ('PL02', 'SC09', '2010', 'great paint penetrator, leadership, well rounded', 'bad offball movement'),
    ('PL02', 'SC08', '2014', 'great potential, proven athletic ability, well rounded skillset, injurry', 'somewhat unreliable threepoint shot'),
    ('PL02', 'SC03', '2018', 'championship capability', 'cbad offball movement'),
    ('PL01', 'SC10', '2022', 'showed potential to be a  dominant stretch big', 'bad offball movement'),
    ('PL03', 'SC04', '2009', 'elite threepoint shot', 'defensive liability'),
    ('PL03', 'SC05', '2022', 'elite threepoint shot, playmaker', 'defensive liability'),
    ('PL04', 'SC02', '2016', 'elite defensive capability', 'bad shot creator'),
    ('PL04', 'SC06', '2022', 'elit defensive capability, great role player', 'no reliable three point shot'),
    ('PL04', 'SC03', '2022', 'great team player, reliable role player', 'no scoring capability'),
    ('PL02', 'SC07', '2022', 'championship capability', 'reduce other ball dominant+ player effectiveness'),
	('PL05', 'SC11', '2008', 'reliable outside shot, elit inside scoring', 'injury prone'),
	('PL05', 'SC08', '2014', 'great complement to lebron', 'ball dominant');

--insert data to player
INSERT INTO team VALUES
    ('LAL', 'Los Angeles Lakers', '160,832,941'),
    ('GSW', 'Golden State Warriors', '184,024,769'),
    ('BKN', 'Brooklyn Nets', '172,815,092'),
    ('MIA', 'Miami Heat', '166,162,398'),
    ('CLE', 'Cleveland Cavaliers', '90,438,787'),
    ('HOU', 'Houston Rockets', '115,994,102'),
    ('ATL', 'Atlanta Hawks', '120,376,240'),
    ('UTA', 'Utah Jazz', '147,734,336'),
    ('CHA', 'Charlotte Hornets', '155,635,311'),
	('MIN', 'Minnesota Timberwolves', '197');

--insert data to team played for
INSERT INTO team_played_for VALUES
    ('LAL', 'PL01', '2004', '2013', '19,536,360'),
    ('HOU', 'PL01', '2013', '2016', '21,436,271'),
    ('ATL', 'PL01', '2016', '2017', '45,780,966'),
    ('CHA', 'PL01', '2017', '2018', '23,500,000'),
    ('LAL', 'PL01', '2021', '2022', '2,641,691'),
    ('GSW', 'PL03', '2009', '2022', '40,000,000'),
    ('BKN', 'PL01', '2018', '2021', '18,919,725'),
    ('CLE', 'PL02', '2003', '2010', '15,779,912'),
    ('MIA', 'PL02', '2010', '2014', '19,067,500'),
    ('CLE', 'PL02', '2014', '2018', '33,285,709'),
    ('LAL', 'PL02', '2018', '2022', '41,180,544'),
    ('UTA', 'PL04', '2013', '2022', '35,344,828'),
	('MIN', 'PL05', '2008', '2014', '14'),
	('CLE', 'PL05', '2014', '2022', '31');	

-- insert data to team worked for	
INSERT INTO team_worked_for VALUES
    ('LAL', 'SC01', '2000', '2010'),
    ('CHA', 'SC01', '2010', null),
    ('UTA', 'SC02', '2012', null),
    ('LAL', 'SC03', '2014', null),
    ('GSW', 'SC04', '2013', null),
    ('LAL', 'SC05', '2009', null),
    ('ATL', 'SC06', '2012', null),
    ('HOU', 'SC07', '2010', null),
    ('CLE', 'SC08', '2000', null),
    ('MIA', 'SC09', '2003', null),
    ('BKN', 'SC10', '2007', null),
	('MIN', 'SC11', '1996', null);
	
-- find player who played for a certain team	
SELECT player.player_name FROM player JOIN team_played_for USING(playerID) WHERE teamID LIKE "HOU";

-- show the amount of time, players signed with a certain team
SELECT player.player_name, COUNT(teamID) as time_signed_with, teamID FROM player JOIN team_played_for USING (playerID) WHERE teamID LIKE "LAL" GROUP BY player_name;

--find team who drafted each players
SELECT player.player_name, teamID FROM player JOIN team_played_for USING (playerID) WHERE team_played_for.contract_start_year LIKE player_draft_year;

--show player current team
SELECT player_name, team.team_name FROM player JOIN team_played_for USING (playerID) JOIN team USING (teamID) WHERE team_played_for.contract_end_year>= 2022;

-- show the smallest contract a certain player have played with and what team is giving that contract
SELECT min(contract_yearly_salary),team.team_name FROM team_played_for JOIN player USING (playerID) JOIN team USING(teamID) WHERE player.player_name LIKE "%lebron%";

--find scout who didn't make a singgle offer and delete the scout
SELECT * from scout WHERE scoutID NOT IN (SELECT scoutID FROM latest_offer);
DELETE FROM team_worked_for WHERE scoutID like "SC11";
DELETE FROM reports WHERE scoutID like "SC11";
DELETE FROM scout WHERE scoutID like "SC11";

--lebron accepted an offer
-- find official offer for lebron where acceptance status is pending
SELECT a.offerID
FROM latest_offer a
JOIN player b USING(playerID)
WHERE b.player_name LIKE "%lebron%" AND a.official_status LIKE "official" AND a.acceptance_status LIKE "pending";
--change the status of the contract lebron accepted 
UPDATE latest_offer a SET a.acceptance_status = "accepted" WHERE a.offerID = "OFF06";
--change the status of contracts lebron ignored
update  `latest_offer` 
SET latest_offer.acceptance_status = "declined" 
WHERE playerID 
LIKE(SELECT playerID FROM player WHERE player.player_name LIKE "%lebron%") AND latest_offer.acceptance_status = "pending";

--sort by average yearly salary the player have in their career
SELECT player.player_name,playerID, AVG(team_played_for.contract_yearly_salary) as average 
FROM team_played_for JOIN player USING(playerID) GROUP BY playerID ORDER BY average;

--find out the value of dwight howard through out his career
SELECT team_played_for.contract_yearly_salary as salary FROM team_played_for 
WHERE playerID LIKE (SELECT playerID FROM player WHERE player.player_name LIKE "%dwight howard%") ORDER BY team_played_for.contract_start_year;

-- find the reports for dwight howard through out his careeer and who created the report
SELECT DISTINCT b.scout_name, a.positives, a.season, a.negatives 
FROM reports a JOIN scout b USING(scoutID) JOIN team_worked_for c USING(scoutID) JOIN team USING (teamID) 
WHERE a.playerID = (SELECT playerID FROM player where player.player_name LIKE "dwight howard") ORDER BY `a`.`season` ASC

-- find the reports of the player when they got drafted
SELECT player.player_name, reports.positives, reports.negatives, reports.season FROM reports JOIN player USING(playerID) WHERE reports.season LIKE player.player_draft_year;

-- sort scouts based on who have made the most reports
SELECT reports.scoutID, COUNT(scoutID) as reports_made FROM reports GROUP BY scoutID ORDER BY reports_made;

--delete offers which have been declined to be made official
DELETE FROM latest_offer WHERE latest_offer.official_status LIKE "declined";

--display the highest contract ever received by each player
SELECT MAX(a.contract_yearly_salary), playerID, b.player_name FROM team_played_for a JOIN player b USING(playerID) GROUP BY playerID;

-- find the player who have/had the lowest amount of salary and at what year
SELECT player.player_name, team_played_for.contract_start_year, min(team_played_for.contract_yearly_salary) as lowest 
from team_played_for JOIN player USING (playerID) HAVING lowest;

-- team total salary is unimportant, change to salaryCap of the team
alter TABLE team CHANGE team.team_salary salary_cap int(10);

-- add table for the team location
ALTER TABLE team ADD location varchar(20);

-- location is not needed anymore
ALTER TABLE team drop location;
