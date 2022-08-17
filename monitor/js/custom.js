const painel = document.getElementById('id_painel');

if(painel)
{
	ListarPainel();
}

async function ListarPainel()
{
	await fetch('../phpwsdb/listarPaineis.php');
}

