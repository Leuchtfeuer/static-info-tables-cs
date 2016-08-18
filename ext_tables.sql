CREATE TABLE static_countries (
  cn_short_cs varchar(100) DEFAULT '' NOT NULL,
  cn_official_name_cs varchar(200) DEFAULT '' NOT NULL,
  cn_capital_cs varchar(45) DEFAULT '' NOT NULL,
  KEY cn_short_cs (cn_short_cs)
);

CREATE TABLE static_country_zones (
  zn_name_cs varchar(50) DEFAULT '' NOT NULL,
  KEY zn_name_cs (zn_name_cs)
);

CREATE TABLE static_currencies (
  cu_name_cs varchar(50) DEFAULT '' NOT NULL,
  cu_sub_name_cs varchar(20) DEFAULT '' NOT NULL
);

CREATE TABLE static_languages (
  lg_name_cs varchar(50) DEFAULT '' NOT NULL
);

CREATE TABLE static_territories (
  tr_name_cs varchar(50) DEFAULT '' NOT NULL
);

