TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `log_disposisi` BEFORE INSERT ON `disposisi` FOR EACH ROW BEGIN\n	INSERT INTO log_disposisi SET NOMOR_DISPOSISI=new.NO_DISPOSISI,\n    WAKTU_CATAT=now();\nEND'
sql_modes=1342177280
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='latin1_swedish_ci'
