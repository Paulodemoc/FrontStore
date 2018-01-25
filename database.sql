CREATE DATABASE 'frontstore' /*!40100 DEFAULT CHARACTER SET latin1 */;

CREATE TABLE 'users' (
  'id' int(11) NOT NULL,
  'name' varchar(45) NOT NULL,
  'facebookid' varchar(150) DEFAULT NULL,
  PRIMARY KEY ('id'),
  UNIQUE KEY 'id_UNIQUE' ('id')
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE 'products' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'name' varchar(45) NOT NULL,
  'img' varchar(200) NOT NULL,
  'info' blob,
  PRIMARY KEY ('id'),
  UNIQUE KEY 'id_UNIQUE' ('id')
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;