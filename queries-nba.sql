--#1 find info on LeBron
SELECT *
FROM players
WHERE p_name = 'LeBron James';
--2 update info in a table 

--Find players on the Los Angeles Laker's Team who played in Regular Season. 
SELECT p_name, t_name
FROM players,teams, seasons
WHERE p_team = t_name AND
t_name = s_team AND
t_name = 'Los Angeles Lakers' AND
s_year = 'Regular Season'
GROUP BY p_name;

--#3 update 
--UPDATE allstars
--set a_year = '2018-19'
--WHERE a_team = 'East Celebrities East';

--#4 Calculate the average loss and win of all teams
SELECT AVG(t_win), AVG(t_loss)
FROM teams; 

--#5 Which team had the most wins and which player was on that team 
SELECT t_name,p_name, MAX(t_win)
FROM teams,players
WHERE t_name = p_team;

--#6 Count how many teams had rebounds greater than 600 and played in Regular Season
SELECT COUNT( DISTINCT r_team)
FROM records, seasons
WHERE r_team = s_team AND 
r_rebounds > 600 AND
s_year = 'Regular Season';

--#7 find out which players are between the ages of 20 and 25 
SELECT p_name
FROM players
WHERE p_age BETWEEN 20 AND 25; 

--#8 for teams that played playoff season 2019-20 find the largest blocks that is less than the average blocks
SELECT MAX(r_blocks)
FROM(SELECT AVG(r_blocks) as avg_blocks FROM records),
records, playoffs
WHERE ps_team = r_team AND 
ps_year = '2019-20'AND
r_blocks < avg_blocks;

--checks the answer 
SELECT AVG(r_blocks)
FROM records;

SELECT MAX(r_blocks) 
FROM records, playoffs
WHERE ps_team = r_team AND ps_year = '2019-20';

--#9 which team has the most wins 
SELECT t_name, MAX(t_win) 
FROM teams; 

--#10 delete columns where allstar points equal 155
--DELETE FROM allstars WHERE a_points = 155; 



----11 players age greater than 25 from players table
SELECT * FROM players
WHERE p_age > 25;

--12 Select players from Lakers. Can be subsituted for different team search
SELECT * FROM players
WHERE p_team = 'Los Angeles Lakers';

--13 Select from teams that start with letters a-l
   SELECT *
FROM teams
WHERE t_name LIKE '[a-l]%' ;


--14 records table select where points greater than 1500 and rebounds greater than 300

SELECT * 
FROM records 
WHERE r_points >1500 AND r_rebounds>300;

--15 will return top 2 where team is specified for lakers
SELECT TOP 2 * FROM records
WHERE r_team='Los Angeles Lakers';

--16 Output top 20%. Example for different percent value
SELECT TOP 20 PERCENT * FROM players;

--17 Will out put smallest point value from records (1318) We can also do "AS Smallest Value"
SELECT MIN(r_points) 
FROM records;

--18 Output number of teams with losses greater than 40 answer is 4
SELECT COUNT(t_loss)
FROM teams
WHERE t_loss>40;

--19 Output names in desc order. For ascending change to asc in query. can be modified in different ways
SELECT * FROM players
ORDER BY p_name;

--20 Wild card for certain patterns
SELECT * FROM records
WHERE r_rebounds LIKE '297%';


--Join methods

--a. select team and players who played in the 2019-20 Regular Season playoffs and had more than 50 blocks
SELECT DISTINCT p_team, p_name
FROM records, seasons, playoffs, players
WHERE p_team = ps_team AND
ps_team = r_team AND
r_team = s_team AND
ps_year = '2019-20'AND
r_blocks > 50 AND
s_year = 'Regular Season';

--b. how many players in every team have more points than the average points of their own team?
SELECT t2.t_name , COUNT(*)
FROM (SELECT t1.t_name AS teams1 , AVG(r_points) AS avg_pts
     FROM teams t1, records r1, playoffs ps1
     WHERE t1.t_name = r1.r_team AND 
     r1.r_team = ps1.ps_team
     GROUP BY t1.t_name) 
     avg1, teams t2, records r2, playoffs ps2
WHERE t2.t_name = r2.r_team AND
     r2.r_team = ps2.ps_team AND
     avg1.teams1 = t2.t_name AND 
     r2.r_points > avg1.avg_pts
     GROUP BY t2.t_name;

--select names that appear in both tables
SELECT DISTINCT p_name
FROM players, records
WHERE p_name = r_player;


SELECT ps_team
FROM playoff
WHERE EXISTS (SELECT t_name FROM teams WHERE teams.t_name = playoff.ps_team);
