<?php

use Illuminate\Database\Seeder;
use App\Host;

class HostTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('hosts')->delete();

		// elijahSeeder
		Host::create(array(
				'lastname' => "Dinsmore",
				'firstname' => "Elijah",
				'birth_date' => "2016-11-16",
				'birth_place' => "Auckland",
				'nationality' => "Néo-Zélandais",
				'job' => "Membre du Conseil Régional d'Auckland, actuellement en tête de liste pour l'élection du nouveau Maire de la Ville",
				'status' => "Fiancé",
				'personality' => "Déterminé, Orgueilleux, Fier, Rusé, Charismatique, Manipulateur, Persuasif, Patient",
				'gender_orientation' => "Hétérosexuel",
				'story' => "On a toujours pris soin d'enseigner à Elijah les valeurs nationales et l'amour de son pays. Depuis son plus jeune âge, ce dernier entend bien servir sa terre natale et se voit, pourquoi pas, à la tête de sa patrie. Pas plus doué qu'un autre, il travaille d'arrache-pied pour arriver à ses fins, et la passion qu'il y met porte ses fruits. Sa réussite, il ne la doit qu'à ses idées et sa persévérance, et il en est plutôt fier. Après des études poussées à l'université de Wellington, Elijah revient à Auckland, sa ville natale, et se lance, au bas de l'échelle, dans une carrière politique. Ses idées sont destinées à améliorer la vie de ses habitants, et lui qui connaît si bien le coin, dont les objectifs sont neufs, pertinents, se voit rapidement apprécié. Paradoxe ambulant, cet homme qui veut à tout prix le bien de ses concitoyens, est aussi prêt à tout pour réussir et ne recule devant rien. Il estime que nul autre ne saurait apporter à cette ville ce dont elle a réellement besoin et, au fond, il n'a pas tout à fait tort... Conseiller Régional d'Auckland depuis quelques années, Elijah vise enfin le titre de Maire de la Ville. Il est actuellement en campagne et compte bien convaincre ses électeurs. Et puis qui sait, accéder à de plus hautes sphères politiques encore... Récemment, l'annonce de son mariage avec une jeune sociologue l'a nettement fait grimper dans les sondages."
			));

		// rainSeeder
		Host::create(array(
				'lastname' => "Newell",
				'firstname' => "Rain",
				'birth_date' => "1987-8-9",
				'birth_place' => "Auckland",
				'nationality' => "Néo-zélandaise",
				'job' => "Infirmière",
				'status' => "Célibataire",
				'personality' => "Généreuse, Chaleureuse, Dépendante, Émotive, Sensible, Douce, Soumise, Débrouillarde, Désordonnée, Passionnée, Féminine, Soignée, Discrète, Attachante, Prévisible",
				'gender_orientation' => "Hétérosexuelle",
				'story' => "Issue d'une famille modeste, peu préoccupée par l'avenir et le bien-être de ses enfants, Rain a toujours conservé sa personnalité fragile, en perpétuel manque d'affection. Petite, elle est peureuse et pleure pour un rien. Elle s'habitue néanmoins à ce que ses parents ne réagissent pas, et à ce que son frère lui intime de se taire. Tandis qu'elle reste coincée dans sa bulle, elle voit ce dernier grandir, faire sa vie et réussir. Ce n'est que lorsqu'il la pousse à bout, prétextant qu'elle n'est qu'un parasite incapable d'autonomie, que Rain commence à se prendre en mains. Elle s'inscrit à l'école d'infirmière, et en ressort diplômée avec succès. Commence alors sa petite ascension dans le monde des adultes. Elle quitte le nid pour emménager en ville et se voit embauchée à l'hôpital d'Auckland, où elle a fait ses gardes. Généreuse et douce, elle est aimée de ses patients -quelques fois trop collants, et souvent moquée par ses collègues, qui abusent de sa gentillesse. Hyper dépendante, elle multiplie également les conquêtes masculines, recherchant chez les hommes la force et l'aspect sécurisant, que son père n'a jamais pu lui offrir. Réservée mais facilement manipulable, elle leur tombe dans les bras comme une fleur et les regarde s'éloigner en pleurant. Car Rain est trop timide, trop soumise et trop fragile pour s'imposer, réclamer son dû ou oser penser qu'elle mérite mieux. "
			));

		// erzebethSeeder
		Host::create(array(
				'lastname' => "Goldfarb",
				'firstname' => "Erzebeth",
				'birth_date' => "1987-03-19",
				'birth_place' => "soon",
				'nationality' => "Bulgare",
				'origins' => "soon",
				'job' => "soon",
				'status' => "soon",
				'personality' => "soon",
				'gender_orientation' => "Hétérosexuelle",
				'story' => "soon"
			));
	}
}