TYPE=VIEW
query=select `salsa`.`petugas`.`ID` AS `ID`,`salsa`.`surat_masuk`.`NO_AGENDASM` AS `NO_AGENDASM`,`salsa`.`surat_masuk`.`JENIS_SURAT` AS `JENIS_SURAT`,`salsa`.`surat_masuk`.`TANGGAL_KIRIM` AS `TANGGAL_KIRIM`,`salsa`.`surat_masuk`.`TANGGAL_TERIMA` AS `TANGGAL_TERIMA`,`salsa`.`surat_masuk`.`NO_SURAT` AS `NO_SURAT`,`salsa`.`surat_masuk`.`PENGIRIM` AS `PENGIRIM`,`salsa`.`surat_masuk`.`PERIHAL` AS `PERIHAL` from `salsa`.`petugas` join `salsa`.`surat_masuk` where (`salsa`.`petugas`.`ID` = `salsa`.`surat_masuk`.`ID`)
md5=c4e0dedfa3f3ee7885f1be00306dc094
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-02-12 19:56:05
create-version=2
source=SELECT petugas.ID, surat_masuk.NO_AGENDASM, surat_masuk.JENIS_SURAT, surat_masuk.TANGGAL_KIRIM, surat_masuk.TANGGAL_TERIMA, surat_masuk.NO_SURAT, surat_masuk.PENGIRIM, surat_masuk.PERIHAL\nFROM petugas, surat_masuk\nWHERE petugas.ID=surat_masuk.ID
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `salsa`.`petugas`.`ID` AS `ID`,`salsa`.`surat_masuk`.`NO_AGENDASM` AS `NO_AGENDASM`,`salsa`.`surat_masuk`.`JENIS_SURAT` AS `JENIS_SURAT`,`salsa`.`surat_masuk`.`TANGGAL_KIRIM` AS `TANGGAL_KIRIM`,`salsa`.`surat_masuk`.`TANGGAL_TERIMA` AS `TANGGAL_TERIMA`,`salsa`.`surat_masuk`.`NO_SURAT` AS `NO_SURAT`,`salsa`.`surat_masuk`.`PENGIRIM` AS `PENGIRIM`,`salsa`.`surat_masuk`.`PERIHAL` AS `PERIHAL` from `salsa`.`petugas` join `salsa`.`surat_masuk` where (`salsa`.`petugas`.`ID` = `salsa`.`surat_masuk`.`ID`)
mariadb-version=100121
