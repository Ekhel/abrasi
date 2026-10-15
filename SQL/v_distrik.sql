SELECT
    tb_distrik.id_distrik,
    distrik,
    SUM(tb_kampung.jumlah_dpt) AS jumlah_dpt_distrik,
    kode_wil,
    nama_koordis,
    kontak_koordis
FROM
    tb_distrik
LEFT JOIN tb_kampung ON tb_distrik.id_distrik = tb_kampung.id_distrik
GROUP BY
    tb_distrik.id_distrik