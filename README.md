# migrasiv3

# sql database
ALTER TABLE `log` CHANGE `tanggal_log` `tanggal_log` TIMESTAMP NULL DEFAULT NULL;
ALTER TABLE `transaksi` CHANGE `TGL_DATA_MASUK` `TGL_DATA_MASUK` TIMESTAMP NULL DEFAULT NULL
ALTER TABLE `transaksi` CHANGE `TGL_INPUT_TEKNISI` `TGL_INPUT_TEKNISI` TIMESTAMP NULL DEFAULT NULL;
ALTER TABLE `transaksi` CHANGE `TGL_LAYANAN_UP` `TGL_LAYANAN_UP` TIMESTAMP NULL DEFAULT NULL;
ALTER TABLE `transaksi` CHANGE `TGL_INPUT` `TGL_INPUT` TIMESTAMP NULL DEFAULT NULL;
ALTER TABLE `transaksi` CHANGE `TGL_PS` `TGL_PS` TIMESTAMP NULL DEFAULT NULL;
INSERT INTO `fase` (`id_fase`, `nama_fase`) VALUES ('FA00', 'ASSIGN WO');
INSERT INTO `mitra` (`id_mitra`, `nama_mitra`) VALUES ('MITRA20', 'PTTA');
INSERT INTO `status` (`id_status`, `nama_status`) VALUES ('ST26', 'PI'), ('ST27', 'Belum PI');
ALTER TABLE `transaksi` ADD `ASSIGN_WO` VARCHAR(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL AFTER `FASE_TRANSAKSI`;
ALTER TABLE `transaksi` CHANGE `PRIORITAS` `PRIORITAS` VARCHAR(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;


INSERT INTO `status`(`id_status`, `nama_status`) VALUES ('ST28', 'BELUM DIPASANG KE PELANGGAN');
INSERT INTO `status`(`id_status`, `nama_status`) VALUES ('ST29', 'SUDAH DIPASANG KE PELANGGAN');
INSERT INTO `status`(`id_status`, `nama_status`) VALUES ('ST30', 'ONT RUSAK');


--sani--
UPDATE `fase` SET `nama_fase` = 'PI' WHERE `fase`.`id_fase` = 'FA07';
ALTER TABLE `transaksi` CHANGE `PI_PS` `PI` VARCHAR(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
ALTER TABLE `transaksi` ADD `PS` VARCHAR(4) NULL AFTER `PI`;
INSERT INTO `fase` (`id_fase`, `nama_fase`) VALUES ('FA08', 'PS');
INSERT INTO `role_user` (`id_role_user`, `nama_role_user`) VALUES ('RO10', 'HD PS');
INSERT INTO `role_user` (`id_role_user`, `nama_role_user`) VALUES ('RO9', 'HD-MIGRASI');
UPDATE `role_user` SET `nama_role_user` = 'HDTA-PS' WHERE `role_user`.`id_role_user` = 'RO10';
UPDATE `role_user` SET `nama_role_user` = 'HDTA-PI' WHERE `role_user`.`id_role_user` = 'RO6';

--aldo lagi --
INSERT INTO `mitra`(`id_mitra`, `nama_mitra`) VALUES ('MITRA21', 'BSE');
INSERT INTO `mitra`(`id_mitra`, `nama_mitra`) VALUES ('MITRA22', 'PPR');
INSERT INTO `mitra`(`id_mitra`, `nama_mitra`) VALUES ('MITRA23', 'AMGL');

USERNAME PASSWORD SET NULL TABEL USER

INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA01', 'RO7', 'AKN', md5('123'), 'AKN', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA02', 'RO7', 'AWIDHYA', md5('123'), 'AWIDHYA', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA03', 'RO7', 'BISEKA', md5('123'), 'BISEKA', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA04', 'RO7', 'BSR', md5('123'), 'BSR', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA05', 'RO7', 'FFA', md5('123'), 'FFA', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA06', 'RO7', 'GANTARI', md5('123'), 'GANTARI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA07', 'RO7', 'HJT', md5('123'), 'HJT', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA08', 'RO7', 'INATEL', md5('123'), 'INATEL', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA09', 'RO7', 'INSOURCE', md5('123'), 'INSOURCE', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA10', 'RO7', 'LENTERA', md5('123'), 'LENTERA', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA11', 'RO7', 'LG', md5('123'), 'LG', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA12', 'RO7', 'MAREJANI', md5('123'), 'MAREJANI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA13', 'RO7', 'MMTELL', md5('123'), 'MMTELL', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA14', 'RO7', 'N2TELL', md5('123'), 'N2TELL', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA15', 'RO7', 'PNJ', md5('123'), 'PNJ', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA16', 'RO7', 'RAF', md5('123'), 'RAF', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA17', 'RO7', 'GMT', md5('123'), 'GMT', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA18', 'RO7', 'SPM', md5('123'), 'SPM', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA19', 'RO7', 'SURYABRATA', md5('123'), 'SURYABRATA', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA21', 'RO7', 'BSE', md5('123'), 'BSE', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA22', 'RO7', 'PPR', md5('123'), 'PPR', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA23', 'RO7', 'AMGL', md5('123'), 'AMGL', '0897654321' );

INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA01', 'RO8', NULL, NULL, 'AKN_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA02', 'RO8', NULL, NULL, 'AWIDHYA_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA03', 'RO8', NULL, NULL, 'BISEKA_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA04', 'RO8', NULL, NULL, 'BSR_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA05', 'RO8', NULL, NULL, 'FFA_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA06', 'RO8', NULL, NULL, 'GANTARI_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA07', 'RO8', NULL, NULL, 'HJT_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA08', 'RO8', NULL, NULL, 'INATEL_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA09', 'RO8', NULL, NULL, 'INSOURCE_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA10', 'RO8', NULL, NULL, 'LENTERA_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA11', 'RO8', NULL, NULL, 'LG_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA12', 'RO8', NULL, NULL, 'MAREJANI_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA13', 'RO8', NULL, NULL, 'MMTELL_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA14', 'RO8', NULL, NULL, 'N2TELL_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA15', 'RO8', NULL, NULL, 'PNJ_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA16', 'RO8', NULL, NULL, 'RAF_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA17', 'RO8', NULL, NULL, 'GMT_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA18', 'RO8', NULL, NULL, 'SPM_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA19', 'RO8', NULL, NULL, 'SURYABRATA_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA21', 'RO8', NULL, NULL, 'BSE_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA22', 'RO8', NULL, NULL, 'PPR_TEKNISI', '0897654321' );
INSERT INTO `user`(`id_user`, `id_mitra`, `id_role_user`, `username_user`, `password_user`, `nama_user`, `no_telepon_user`) VALUES (null,'MITRA23', 'RO8', NULL, NULL, 'AMGL_TEKNISI', '0897654321' );

# php
1. insert php now() timestamp : date('Y-m-d H:i:s')
2. extract time stamp biar date nya bener jadi d-m-y h:i:s
contoh tanggal datamasuk :
if($wo->TGL_DATA_MASUK != null)
{
  $date = $wo->TGL_DATA_MASUK;
  $row[] = date("d-m-Y H:i:s", strtotime($date));
}
else
{
  $row[] = $wo->TGL_DATA_MASUK;
}
