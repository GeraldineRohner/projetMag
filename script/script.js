$(".delete").click(function(e)
{
	if (!confirm ('Êtes-vous certain de vouloir supprimer l\'article sélectionné ?'))
	{
		e.preventDefault();
	}
});