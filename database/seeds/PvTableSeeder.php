<?php

use Illuminate\Database\Seeder;
use App\Pv;

class PvTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('pvs')->delete();

		// pv1Seeder
		Pv::create(array(
				'group_id' => 1,
				'status' => "free",
				'celebrity' => "Brad Pitt",
				'entente' => "Se voir possédé par Zeus... c'était plus qu'Elijah aurait pu espérer. Un homme rêve de devenir Maire, Ministre, Président... et voilà que lui se retrouve dans la peau de Dieu lui-même ! Ou plutôt, l'inverse... Deux battants dans un seul corps, et pourtant, Elijah ne lutte pas. Il conseille son colocataire, tout au plus. Il a tout ce dont il a toujours rêvé à portée de mains, et ne réalise pas encore qu'en gagnant en puissance, Zeus finira par l'éclipser totalement. Le rêve est encore trop frais pour que l'hôte s'en soucie. En clair, Zeus a trouvé le corps idéal et compte bien mettre ses propres ambitions à profit. Gagner ces élections représente un véritable défi à remporter absolument, pour le Dieu. Un moyen d'intégrer progressivement ses semblables à la vie citadine, via les décisions qu'il prendra lui-même... et qui sait, peut-être bientôt prendre les commandes du pays, exactement comme l'espérait son hôte.",
				'test_rp' => "soon",
				'already_played' => false,
				'greek_id' => 1,
				'host_id' => 1,
				'gender' => "male"
			));

		// pv2Seeder
		Pv::create(array(
				'group_id' => 3,
				'status' => "taken",
				'celebrity' => "Kate Bosworth",
				'entente' => "Dans le corps de Rain, Styx est une contradiction ambulante. Inutile de dire que l'hôte est tellement soumise et faible qu'elle a complétement été écrasée par la volonté de Styx et qu'elle n'a plus son mot à dire. La Nymphe a les pleins pouvoirs sur le corps de son hôte, c'est elle qui dirige, et qui décide. Elle est tellement à l'opposé de Rain que vivre parmi ses proches s'avère difficile : elle est souvent obligée de masquer sa vraie nature, et jouer les soumises pleurnichardes n'est pas toujours à son goût. Rain & Styx ont un point commun, et un seul : leur attirance pour leur patron. Et c'est même à ce niveau que les sentiments de l'hôte déteignent légèrement sur la Nymphe. Rain est tellement émotive et attachée aux gens qu'elle a tendance à laisser beaucoup de monde abuser de sa gentillesse. Styx n'y voit pas encore sa plus grande faiblesse, mais c'est là le seul point sur lequel son hôte peut l'atteindre, et elle ne s'en prive pas. Au delà de ses ambitions, l'intérêt que porte la Nymphe au Dieu des Enfers semble de plus en plus motivé par de réels sentiments. Finira-t-elle par s'attacher et tomber amoureuse sans même s'en rendre compte, quitte à révéler une terrible faiblesse... ?",
				'test_rp' => "soon",
				'already_played' => true,
				'greek_id' => 2,
				'host_id' => 2,
				'gender' => "female"
			));

		// pv3Seeder
		Pv::create(array(
				'group_id' => 4,
				'status' => "free",
				'gender' => "female",
				'celebrity' => "Nina Dobrev",
				'entente' => "soon",
				'test_rp' => "soon",
				'already_played' => false,
				'greek_id' => 3,
				'host_id' => 3
			));
	}
}