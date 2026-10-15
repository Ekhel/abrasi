SELECT
    tb_kampung.id_kampung,
    tb_kampung.id_distrik,
    kampung,
    COUNT(DISTINCT tb_tps.id_tps) AS jumlah_tps,
    jumlah_dpt,
    kode_wilayah,
    nama_koorkam,
    kontak_koorkam
FROM
    tb_kampung
LEFT JOIN tb_tps ON tb_kampung.id_kampung = tb_tps.id_kampung
GROUP BY
    tb_kampung.id_kampung