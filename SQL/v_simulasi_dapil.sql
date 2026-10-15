SELECT
    id_elek_dapil,
    tb_figure.id_figure,
    tb_figure.nama_figure,
    tb_dapil.id_dapil,
    tb_dapil.dapil,
    tb_dapil.baseline_dapil,
    base_figur,
    tb_bantu_dpt.total_dpt
FROM
    tb_elek_dapil
LEFT JOIN tb_figure ON tb_elek_dapil.id_figure = tb_figure.id_figure
LEFT JOIN tb_dapil ON tb_elek_dapil.id_dapil = tb_dapil.id_dapil
LEFT JOIN tb_bantu_dpt ON tb_elek_dapil.id_bantu = tb_bantu_dpt.id_bantu