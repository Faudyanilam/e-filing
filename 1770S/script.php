<script type="text/javascript">
// form.pph_terutang.value = Math.abs(terutang);
function tes(){
	var terutang = eval(form.pph_terutang.value);
	// form.pph_terutang.value = terutang;
	var p_kontainer = document.getElementById("penentuan");
	var dipotong = eval(form.pph_dipotong.value);
	// form.pph_dipotong.value = dipotong;

	if (terutang<=0) {
		hasil = terutang - (dipotong*(-1));

		if (terutang>-dipotong)
		{
			p_kontainer.innerHTML="<strong style='color: blue;'>Lebih Bayar</strong> ";

		}
		else if (terutang<-dipotong)
		{
			p_kontainer.innerHTML="<strong style='color: red;'>Kurang Bayar</strong>";

			else if (terutang==(-dipotong))
			{
				p_kontainer.innerHTML="<strong>Nihil</strong>";

			}

		}else {
			hasil = terutang - dipotong;
            // pernyataan benar
            if (terutang>dipotong)
            {
            	p_kontainer.innerHTML="<strong style='color: red;'>Kurang Bayar</strong> ";


            }
            else if (terutang<dipotong)
            {
            	p_kontainer.innerHTML="<strong style='color: blue;'>Lebih Bayar</strong>";

            }
            else if (terutang==dipotong)
            {
            	p_kontainer.innerHTML="<strong>Nihil</strong>";

            }
        }
        form.status_dibayar.value = Math.abs(hasil);
        // document.getElementById('status_dibayar').value = '1000000';
    }
    // document.getElementById('status_dibayar').value =1000000;
</script>