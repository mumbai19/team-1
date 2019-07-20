show grants;
GRANT ALL PRIVILeGES on *.* TO 'root'@'%' IDENTIFIED BY 'transmode;'
CREATE TABLE proj.course_user_master (
    uid int(11) NOT NULL,
    courseid int(11) NOT NULL,
    yearr int,
    coid int NOT NULL,
    
    
    PRIMARY KEY (coid),
     FOREIGN KEY (uid) REFERENCES app_users (uid),
     FOREIGN KEY (courseid) REFERENCES course_master (courseid)
);

CREATE TABLE proj.student_course (
    uid int(11) NOT NULL,
    courseid int(11) NOT NULL,
    yearr int,
    
    
    
    
    
     FOREIGN KEY (uid) REFERENCES app_users (uid),
     FOREIGN KEY (courseid) REFERENCES course_master (courseid)
);
CREATE TABLE proj.savings (
    uid int(11) NOT NULL,
    sid int(11) NOT NULL,
    amt int(11),
    datee date,
    
    
    
    
     FOREIGN KEY (uid) REFERENCES app_users (uid),
     FOREIGN KEY (sid) REFERENCES studentdetails (sid)
);
Drop table proj.stars;
CREATE TABLE proj.parameter (
pid int NOT NULL,

    
    parametername varchar(45),
    Primary key(pid));
    
    
    
    
    
     
     
CREATE TABLE proj.stars (
pid int NOT NULL,
    
    sid int(11) NOT NULL,
    stars int(11),
    datee date,
    
    
    
    
     FOREIGN KEY (pid) REFERENCES parameter (pid),
     FOREIGN KEY (sid) REFERENCES studentdetails (sid)
);
CREATE TABLE proj.assessments (
testname varchar(45),
    
    sid int(11) NOT NULL,
    grade int(11),
    datee date,
    
    
    
    
     
     FOREIGN KEY (sid) REFERENCES studentdetails (sid)
);
CREATE TABLE proj.attendance (
PA varchar(45),
    
    sid int(11) NOT NULL,
    
    datee date,
    
    
    
    
     
     FOREIGN KEY (sid) REFERENCES studentdetails (sid)
);

