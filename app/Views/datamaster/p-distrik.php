<script type="text/javascript">
	  $(document).ready(function() {
	    $("#cetak").click(function(event) {
	      event.preventDefault();
	      window.print();
	    });
	    $("#export_excel").click(function(event) {
	      event.preventDefault();
	      $("#container").btechco_excelexport({
	        containerid: "container",
	        datatype: $datatype.Table
	      });
	    });
			window.onload = function() { window.print(); }
	  });
</script>

<style type="text/css">
	body {
		margin: 0px;
		padding: 0px;
	}
	.title {
		text-align: center;
		font-family: Verdana;
		font-weight: bold;
		margin-bottom: 20px;
	}
	.table {
		border-collapse: collapse;
	}
	.table thead {
		font-size: 13px;
        font-family: "Arial Narrow", Arial, sans-serif;
		font-weight: bold;
		background-color: #FAEBD7;
	}
	.table .header td{
		background-color: #C1C1C1;
		text-align: center;
	}
	.table thead td {
		background-color: #EEEEEE;
	}
	.prog {
		background-color: #dddddd;
	}
	.table tr {
		border-collapse: collapse;
	}
	.table td{
		font-size: 12px;
        font-family: "Arial Narrow", Arial, sans-serif;
		padding: 5px;
		border-collapse: collapse;
		border: thin solid black;
	}
	.gray {
		background-color: gray;
	}
	.green {
		background-color: green;
	}
	@media print
	{
		.no-print, .no-print *
		{
		    display: none !important;
		}
		body {
    background: none;
    -ms-zoom: 1.665;
  	}
	  div.portrait, div.landscape {
	    margin: 0;
	    padding: 0;
	    border: none;
	    background: none;
	  }
	  div.landscape {
	    transform: rotate(270deg) translate(-276mm, 0);
	    transform-origin: 0 0;
	  }
	}
	.box_export {
	    top: 0px;
	    right: 0px;
	    padding: 10px 0px 10px 0px;
	    background: gray;
	    height: 20px;
	    margin: 0px;
	    margin-bottom: 10px;
	  }
	  .box_export ul {
	    margin: 0px;
	    padding: 0px;
	  }
	  .box_export li {
	    display: inline;
	  }
	  .box_export li a {
	    color: white;
	    text-decoration: none;
	    padding: 0px 10px 0px 10px;
	  }
	  .box_export li a:hover {
	    background-color: green;
	  }
    .lg-text {
      font-size: 16px;
      padding: 5px;
      font-weight: bold;
	  text-transform:uppercase;
    }
    .italic-text {
      font-size: 11px;
      font-style: italic;
      padding: 5px;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        width: 70%;
        height: 100%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
</style>

<div class="box_export no-print"><ul><li><a href="#" id="cetak">Print</a></li></ul></div>
	<div id="container">
		<div class="title">
            <table width="100%" align="center">
                <tr>
                    <td colspan='2' align='center'><text class="lg-text">TIM PEMENANGAN  J O A N</text></td>
                </tr>
                
            </table>
            <hr />
            <table width="100%" align="center">
                <tr>
                    <td colspan='2' align='center'>KOORDINATOR TINGKAT WILAYAH DAN DISTRIK</td>
                </tr>
            </table>
			<br />
		</div>
        <br />
        
        <!-- <div class="row"> -->
            <table width="100%" class="table" align="center" border="1px">
                <thead>
                    <tr class="bg-inverse">
                        <th>No</th>
                        <th class="text-center">WP / Distrik</th>
                        <th class="text-center">DPT</th>
                        <th class="text-center">TPS</th>
                        <th class="text-center">Nama Koorwil / Koordis</th>
                        <th class="text-center">Kontak</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1; 
                foreach($wp as $w) { ?>
                    <tr style="background-color:yellow">
                        <td colspan="2"><strong>WILAYAH PEMBANGUNAN <?= $w->wp ?></strong></td>
						<td align="center"><strong><?= $w->total_dpt_wp ?></strong></td>
						<td align="center"><strong><?= $w->total_tps_wp ?></strong></td>
                        <td><span style="text-transform:uppercase"><strong><?= $w->nama_koorwil ?></strong></span></td>
                        <td><strong><?= $w->kontak_koorwil ?></strong></td>
                    </tr>
					<?php
					$wilpem = $w->wp;
					foreach($distrik as $item){
					if($wilpem==$item->wp) { ?>
						<tr>
							<td align="center"><?= $no++ ?></td>
							<td><strong><?= $item->distrik ?></strong></td>
							<td align="center"><?= $item->jumlah_dpt_total ?></td>
							<td align="center"><?= $item->jumlah_tps_total ?></td>
							<td><strong><?= $item->nama_koordis ?></strong></td>
							<td><?= $item->kontak_koordis ?></td>
						</tr>
						<?php } ?>
					<?php } ?>
                <?php } ?>
                </tbody>
            </table>
        <!-- </div> -->
		<!-- <text style="float:right; font-size:8px;">
			Printed By SICKAT
		</text> -->
    </div>
</div>

