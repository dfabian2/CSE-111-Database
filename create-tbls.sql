CREATE TABLE players(
    p_name  varchar(25) not null, 
    p_team varchar(25) not null, 
    p_age   int not null, 
    p_ppg  decimal(10,0) not null, 
    p_fgm  decimal(10,0) not null, 
    p_fga  decimal(10,0) not null, 
    p_gp   int not null, 
    p_min   decimal(10,0) not null
    );
CREATE TABLE playoffs(
    ps_team  varchar(25) not null, 
    ps_year  varchar(25) not null, 
    ps_gp   int not null, 
    ps_win  int not null, 
    ps_loss  int not null, 
    ps_points decimal(10,0) not null


);
CREATE TABLE teams(
    t_name varchar(25) not null, 
    t_win  int not null, 
    t_loss int not null, 
    t_gp int not null, 
    t_points decimal(10,0) not null, 
    t_fga  decimal(10,0) not null 
);
CREATE TABLE seasons(
s_player varchar(25) not null, 
s_team varchar(25) not null, 
s_playoffs varchar(25) not null, 
s_year int not null, 
s_loss int not null, 
s_win int not null, 
s_wp int not null, 
s_points int not null

);
CREATE TABLE records (
    r_player varchar(25) not null, 
    r_team varchar(25) not null, 
    r_points int not null, 
    r_blocks int not null, 
    r_rebounds int not null, 
    r_assists int not null

);
CREATE TABLE allstars(
    a_team varchar(25) not null, 
    a_year int not null, 
    a_gp int not null, 
    a_win int not null, 
    a_loss int not null, 
    a_points decimal(10,0) not null
);
