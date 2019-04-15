<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Tag;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixtures extends BaseFixture implements DependentFixtureInterface {
	private static $articleTitles  = [
		'Why Asteroids are the Subject of this blog',
		'Life on Planet Mercury: Tan, Relaxing and Fabulous',
		'Never ever again',
		'Once upon a time this was good',
		'Big Bang Theory',
		'Light Speed Travel: Fountain of Youth or Fallacy',
	];

	private static $articleImages  = [
		'asteroid.jpeg',
		'mercury.jpeg',
		'lightspeed.png',
	];

	private static $articleAuthors = [
		'Mike Ferengi',
		'Amy Oort',
		'Laura Holmes',
		'Amy Farrah Fowler',
		'Sheldon Cooper',
		'Stephen Hawkings',
	];

	protected function loadData(ObjectManager $manager) {
		$this->createMany(
			Article::class,
			10,
			function (Article $article, $count) use ($manager) {
				$article->setTitle($this->faker->randomElement(self::$articleTitles))
				        ->setContent(
					        $this->faker->paragraphs(5, true)
				        );

				// publish most articles
				if ($this->faker->boolean(65)) {
					$article->setPublishedAt($this->faker->dateTimeBetween('-99 days', '-2 hours'));
				}

				$article->setAuthor($this->faker->randomElement(self::$articleAuthors))
				        ->setHeartCount($this->faker->numberBetween(5, 100))
				        ->setImageFilename($this->faker->randomElement(self::$articleImages));

				$tags = $this->getRandomReferences(Tag::class, $this->faker->numberBetween(0, 5));
				foreach ($tags as $tag) {
					$article->addTag($tag);
				}
			}
		);

		$manager->flush();
	}

	public function getDependencies()
	{
		return [
			TagFixtures::class,
		];
	}
}
