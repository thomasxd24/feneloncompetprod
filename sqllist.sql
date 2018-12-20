SET @lastprofid = (SELECT MAX(profid) from `user`);
INSERT INTO user (`userID`,`username`,`md5password`,`name`,`userType`,`profid`) VALUES('','test','fsf','bf','2',@lastprofid+1)