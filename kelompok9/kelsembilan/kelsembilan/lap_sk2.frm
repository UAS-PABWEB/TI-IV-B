TYPE=VIEW
query=select `salsa`.`petugas`.`ID` AS `ID`,`salsa`.`surat_keluar`.`NO_AGENDASK` AS `NO_AGENDASK`,`salsa`.`surat_keluar`.`JENIS_SURAT` AS `JENIS_SURAT`,`salsa`.`surat_keluar`.`TANGGAL_KIRIM` AS `TANGGAL_KIRIM`,`salsa`.`surat_keluar`.`NO_SURAT` AS `NO_SURAT`,`salsa`.`surat_keluar`.`PENGIRIM` AS `PENGIRIM`,`salsa`.`surat_keluar`.`PERIHAL` AS `PERIHAL` from `salsa`.`petugas` join `salsa`.`surat_keluar` where (`salsa`.`petugas`.`ID` = `salsa`.`surat_keluar`.`ID`)
md5=19e4b087e2911234057c16bdf0706086
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-02-12 19:54:32
create-version=2
source=SELECT petugas.ID, surat_keluar.NO_AGENDASK, surat_keluar.JENIS_SURAT, surat_keluar.TANGGAL_KIRIM, surat_keluar.NO_SURAT, surat_keluar.PENGIRIM, surat_keluar.PERIHAL\nFROM petugas,surat_keluar\nWHERE petugas.ID=surat_keluar.ID
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `salsa`.`petugas`.`ID` AS `ID`,`salsa`.`surat_keluar`.`NO_AGENDASK` AS `NO_AGENDASK`,`salsa`.`surat_keluar`.`JENIS_SURAT` AS `JENIS_SURAT`,`salsa`.`surat_keluar`.`TANGGAL_KIRIM` AS `TANGGAL_KIRIM`,`salsa`.`surat_keluar`.`NO_SURAT` AS `NO_SURAT`,`salsa`.`surat_keluar`.`PENGIRIM` AS `PENGIRIM`,`salsa`.`surat_keluar`.`PERIHAL` AS `PERIHAL` from `salsa`.`petugas` join `salsa`.`surat_keluar` where (`salsa`.`petugas`.`ID` = `salsa`.`surat_keluar`.`ID`)
mariadb-version=100121
