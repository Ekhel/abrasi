SELECT
    id_tps,
    tb_distrik.id_distrik,
    tb_distrik.distrik,
    tb_kampung.id_kampung,
    tb_kampung.kampung,
    no_tps,
    jumlah_suara_sah,
    jumlah_suara_nonsah,
    saksi
FROM
    tb_tps
LEFT JOIN tb_distrik ON tb_tps.id_distrik = tb_distrik.id_distrik
LEFT JOIN tb_kampung ON tb_tps.id_kampung = tb_kampung.id_kampung
ORDER BY
    no_tps