<?php

use Illuminate\Database\Seeder;
use App\Greek;

class GreekTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('greeks')->delete();

		// zeusSeeder
		Greek::create(array(
				'name' => "Zeus",
				'titles' => "Dieu du Ciel et de la Foudre, roi des Dieux, président du Conseil",
				'parents' => "Cronos & Rhéa",
				'descendants' => "Arès, Eris, Athéna, Dionysos, Hermès, Apollon, Artémis, ... et beaucoup d'autres",
				'status' => "Marié à Héra. Ne lui épargne aucune tromperie",
				'attributes' => "Aigle, foudre, éclair, chêne, égide",
				'power_id' => 1,
				'power_level' => 1,
				'strengths' => "soon",
				'weaknesses' => "soon",
				'personality' => "Impressionnant, Orgueilleux, Puissant, Avenant, Manipulateur, Megalo, Dominateur, Leadeur, Impitoyable, Observateur, Organisé, Redoutable, Juste, Protecteur, Ne fait jamais (rarement) rien qui ne serve pas ses propres intérêts",
				'gender_orientation' => "Hétérosexuel",
				'story' => "Ainsi était la prophétie : Cronos, roi des Titans, enfanterait un rival qui règnerait sur le monde à sa place. Voilà pourquoi il avala, selon la légende, chacun des enfants que Rhéa, son épouse, mit au monde. Tous sauf un : le petit dernier, celui qu'elle avait habilement caché, donnant à son époux un nourrisson factice enveloppé de langes à dévorer. Élevé par la Nymphe Amaltée, Zeus grandit à l'abri du courroux de son père, et loin de l'amour de sa mère. A l'âge adulte, son premier acte notable fut l'accomplissement même de la prophétie : comme Cronos avait anéanti son père Ouranos, Zeus entreprit de se venger de son géniteur infâme. Il convainquit d'abord Métis, sa fiancée de l'époque, de faire absorber un breuvage émétique à Cronos afin de libérer tous ses frères et sœurs. La guerre contre les Titans, autrement appelée Titanomachie, fut ainsi déclarée. A l'aide de ses frères, de l'Océanide Styx et de ses enfants, puis de nombreux alliés, Zeus fit enfermer son père et quelques uns de ses frères dans le Tartare. Vint ainsi le règne des Olympiens, et Zeus, Hadès et Poséidon se partagèrent le Monde. Le Conseil fut créé, et Zeus, à la fois Roi des Dieux et des Hommes, devint le Maître sur Terre, gardien de la paix, de l'harmonie, garant de la protection des hommes, mais tout aussi implacable qu'il pouvait se montrer juste, en vertu de l'ordre qu'il se devait de faire régner. De nombreux récits font suite à sa prise de pouvoir. Ils dépeignent la plupart du temps, le portrait d'un Dieu autant craint qu'aimé, ne reculant devant rien pour conserver sa place et satisfaire ses propres intérêts. Un protecteur, un justicier redouté, également véritable coureur de jupons qui compte ses enfants par milliers. Zeus, époux d'Héra qu'il avait préférée à Métis, symbole de pouvoir, fut aussi celui qui tenta tout, pour faire mentir les prophéties ; en particulier celle qui annonçait la Fin des Dieux et de leur règne, au profit de nouvelle religions. Qui sait, peut-être que les nombreuses actions qu'il a tentées ont porté leurs fruits. Sans doute, puisque les voilà revenus sur Terre aujourd'hui. Mais tellement de choses ont changé. C'est un nouveau défi pour le Roi des Dieux. Conserver le pouvoir, récupérer sa puissance d'antan et (ré)asseoir son autorité, auprès de son peuple comme des Hommes. Le Dieu du Ciel sait ô combien il sera difficile de réétendre son règne, mais cela ne lui fait pas peur. Il avance, doucement, sûrement, avec subtilité, dans l'attente d'un avenir meilleur qu'il s'emploie à construire. Vivre au rang des Hommes et être prisonnier du corps de l'un d'entre eux lui aura appris de nombreuses choses, donné de multiples leçons qu'il ne sera pas prêt d'oublier, et lui permettra certainement d'avancer comme il l'espère...",
				'opinion_id' => 1
			));

		// styxSeeder
		Greek::create(array(
				'name' => "Styx",
				'titles' => "Nymphe du fleuve Styx, Océanide",
				'parents' => "Ocean & Téthys",
				'descendants' => "Zélos, Niké, Bia, Cratos et Scylla",
				'status' => "Mariée au Titan Pallas",
				'attributes' => "Personnifie le Fleuve des Enfers",
				'power_id' => 2,
				'power_level' => 1,
				'strengths' => "soon",
				'weaknesses' => "soon",
				'personality' => " Froide, Vénale, Calculatrice, Opportuniste, Manipulatrice, Cynique, Dominatrice, Ambitieuse, Organisée, Vaillante, Soignée, Discrète, Imprévisible",
				'gender_orientation' => "Hétérosexuelle",
				'story' => "En Grec Ancien, son nom signifie "détester, haïr". Pourtant, l'aînée des Océanides, la plus "noble et la plus respectable" selon Hésiode, n'a pas toujours inspiré ces sentiments. Rattachée au Styx, fleuve des Enfers dont elle est la gardienne, elle fut semblable autrefois à toutes les Nymphes : belle, douce, généreuse et protectrice de la nature. Mais peut-être est-ce la vie aux Enfers qui lui a tapé sur le système et qui l'a conduite à changer irrémédiablement... ? Écoutant son père Ocean, Styx a offert son aide à Zeus durant la Titanomachie (elle fut d'ailleurs une des premières, avec sa descendance). Pour la remercier, ce dernier rendit magiques les eaux noires du Styx, rendant quiconque s'y trempant, invincible. Mais déjà à l'époque, qui sait si l'Océanide n'agissait pas par intérêt, et non par loyauté. Voilà bien longtemps en réalité que Styx s'est détournée de ses fonctions de Nymphe (quelle idée d'envoyer une créature de cette espèce dans un endroit pareil, sans nature et sans lumière !). Aussi a-t-elle choisi de conserver le "goût de la vie", à sa façon, dans les recoins lugubres des Enfers. Ambitieuse et manipulatrice, Styx ne revendique plus son statut d'Océanide. Désormais, elle aspire à devenir Déesse. Et avant la disparition des Mythes déjà, elle travaillait obstinément sur la question. Alliée de Zeus et de ses frères, elle s'est également entichée d'Hadès, Dieu des Enfers, et s'emploie encore aujourd'hui à le séduire. Tous deux semblent en parfaite adéquation, et travaillent de concert. Il paraît qu'ils se cachent pour vivre leur passion en attendant de pouvoir rayer Perséphone de l'équation... Styx obtiendra-t-elle le titre tant convoité de Déesse des Enfers en épousant un jour Hadès ? ...",
				'opinion_id' => 2
			));
	}
}